<?php

namespace App\Http\Controllers;

use App\StrayDog;
use App\gender;
use App\User;
use App\Add_contact;
use App\Contact_dog;
use DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class StrayDogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gender = gender::all();
        return view('StrayDogForm', compact('gender'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|max:2048'
        ]);
        // dd($request->file('image'));
        // $request->file('image')->store('dog-image');
        // StrayDog::create($request->all());
        // dd($request->all());
         
            //  $data = new StrayDog;
            //  $data ->  animalType = $request->animalType;
            //  $data ->  color = $request->color;
            //  $data ->  temprament = $request->temprament ;
            //  $data ->  gender = $request->gender;
            //  $data ->  size = $request->size;
            //  $data ->  description = $request->description;
            //  $data -> save();
            

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                foreach ($image as $files) {
                    // $destinationPath = 'public/storage/dog-image';
// $name = $files->getClientOriginalName();
// $files->move(public_path().'/image/', $name);
// $data[]= $name;
                    // $files->resize(100, 100, function ($constraint) {
                    //     $constraint->aspectRatio();
                    // });
                    $destinationPath = $files -> store('dog-image');
                    // dd($files->getClientOriginalName());
                    $file_name = $files->hashName();
                    
                    // $file_name = $files->getClientOriginalName();
                    // $files->move($destinationPath, $file_name);
                    // dd($files->hashName())
                    ;
                    $data[] = $file_name;

                    
                }
            
           
                
            $file= new StrayDog();
          
           
            $file->image=json_encode($data);
             $file ->  animalType = $request->animalType;
             $file ->  color = $request->color;
             $file ->  temprament = $request->temprament ;
             $file ->  gender = $request->gender;
             $file ->  size = $request->size;
             $file ->  description = $request->description;
             $file-> user_id = Auth::user()->id;
            $file->save();
            // dd($file->id);
            
            
            return view ('Show', compact('file'));
            // return redirect()->route('show', compact('file'));
             
            }
            else{
                return "eh ga bisa";
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StrayDog  $strayDog
     * @return \Illuminate\Http\Response
     */
    public function viewList(StrayDog $strayDog)
    {
        $file=StrayDog::all();
       
        
        
        return view ('DogList', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StrayDog  $strayDog
     * @return \Illuminate\Http\Response
     */
    public function edit(StrayDog $strayDog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StrayDog  $strayDog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StrayDog $strayDog)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StrayDog  $strayDog
     * @return \Illuminate\Http\Response
     */
    public function destroy(StrayDog $strayDog)
    {
        //
    }
    public function show(StrayDog $strayDog)
    {
     return view ('DogList');   
    }
    public function detail($id)
    {

        $id_user =  Auth::user()->id;
        $file= StrayDog::findOrFail($id);
        // $isi = Contact_dog::all('straydog_id');
        $chek  = StrayDog:: with(['Contact_dog' => function($contact_dog)use($id_user) {
            $contact_dog->where('user_id', $id_user);
            }])->find($id);
        $contact_dog= $chek->Contact_dog;

        // dd($chek);

        // dd($contact_dog[0]->user_id);
        // dd($contact_dog);
        $user_id =[];
        $user_name =[];
        
        // untuk admin
        // $chek_all  = StrayDog:: with(['Contact_dog'])->find($id);
        $chek_all = StrayDog::with(['Contact_dog', 'Contact_dog.User'])->find($id);
        // $user = $chek_all->Contact_dog->User;
        $contact_dog_all= $chek_all->Contact_dog;
        
        
        foreach( $contact_dog_all as $requester){
              $user_id[]=$requester['user_id'];
              
        }
      $RequesterData=User::whereIn('id', $user_id)->get();

    //   $name=[''];
    //   foreach($a as $b){
    //    $name= $b->name;
    // }
        // dd($name);
       


        

      
      
        return view ('Detail',compact('file','contact_dog','RequesterData'));   

        
    }

    public function search(Request $request){
        // menangkap data pencarian
        $search = $request->search;
        
        // mengambil data dari table pegawai sesuai pencarian data
        $file = DB::table('straydogs')
        ->where('size','like',"%".$search."%")
        ->paginate();

        // mengirim data pegawai ke view index
        return view('Doglist',['file' => $file]);
    }
    public function searchPost(Request $request){
        // menangkap data pencarian
        $yang =  Auth::user()->id;
        $search = $request->search;
        $file= StrayDog::where('user_id', $yang)
        ->where('size','like',"%".$search."%")
        ->paginate();
       
        
       
       

        // mengirim data pegawai ke view index
        return view('Doglist',['file' => $file]);
    }
    public function searchMine(Request $request){
         
     
        // menangkap data pencarian
        $search = $request->search;
        $yang =  Auth::user()->id;
        
        // mengambil data dari table pegawai sesuai pencarian data
        // $file = Contact_dog::where('user_id', $yang)
        // ->with('StrayDog')
        // ->where('size','like',"%".$search."%")
        // ->paginate();

        $file = Contact_dog::whereHas('StrayDog', function ($query) use ($search){
            $query->where('size', 'like', '%'.$search.'%');
        })
        ->with(['StrayDog' => function($query) use ($search){
            $query->where('size', 'like', '%'.$search.'%');
        }])->get();

        // dd($file);

        

        // mengirim data pegawai ke view index
        return view('My_dog',['file' => $file]);
    }
  
    public function Contact(Request $request){
        // dd($request);
        $this->validate($request,[
    		'whatsapp' => 'required',
    		'instagram' => 'required'
    	]);
        $data= $request->all();
        $data['user_id']=Auth::user()->id;

        $dataContactDog ['straydog_id']= $request->straydog_id;
        $dataContactDog['user_id']=Auth::user()->id;
        Add_contact::create($data);
        Contact_dog::create($dataContactDog);
       
    }
    
    public function userDashboard(){

        $yang =  Auth::user()->id;
      
        // $chek  = Contact_dog::all();
        $chek  = Contact_dog::select('user_id')->get();
        // dd( $chek->pluck('user_id'));
 
        $count = $chek->where('user_id', $yang)->count();
        // dd($count);
        // $file= Contact_dog::where('user_id', $yang)->with('StrayDog')->paginate(6);
        // $file= Contact_dog::where('user_id', $yang)->get();
        $file= Contact_dog::where('user_id', $yang)->with('StrayDog')->paginate();
        // $file= Contact_dog::with('user')->with('StrayDog')->get();



        $chek_dog  = StrayDog::select('user_id')->get();
        // dd( $chek->pluck('user_id'));
        $count_post = $chek_dog->where('user_id', $yang)->count();
        // dd($count);
        $file_post= StrayDog::where('user_id', $yang)->paginate(6);
        // dd($file_post);
        return view('user_dashboard', compact('count', 'count_post', 'file', 'file_post'));
    }

    public function adminDashboard(){
        $count = StrayDog :: all()->count();
        $dog = Contact_dog :: all('straydog_id');
        $count_post = Contact_dog :: all()->count();
        $file_post= StrayDog::paginate(6);
        $file= Contact_dog::with('StrayDog')->paginate(6);
        // $requester = StrayDog::with('Contact_dog')->get();
        
        $requester;
        StrayDog::with('Contact_dog')->paginate(10)
        ->map(function ($item,$index) use(&$requester) {
             $requester[$index] = $item;
             $requester[$index]['count_user'] = count($item->Contact_dog);
             return $requester;
            });

            

        // dd($requester[63]);
        return view('admin_dashboard', compact('count', 'count_post', 'file_post', 'file','requester'));
    }

    public function sendAlert(){
        return view('sendAlert');
    }

    public function finishRescue(){
        return view('finishRescue');

    }
}
