<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\countrie;
use App\Models\customer;
use Hash;
use Session;
use Mail;

class customer_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$country=countrie::all();
        return view('website.signup',['country'=>$country]);
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
	// validation	
		$validated = $request->validate([
        'name' => 'required|Alpha',
        'username' => 'required|email|unique:customers',
		'password' => 'required|min:3|max:12',
		'cid' => 'required',
		'img' => 'required',
		]);

        $data=new customer;
		$name=$data->name=$request->name;
		$email=$data->username=$request->username;
		$data->password=Hash::make($request->password); // pass make encrypted
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		$data->cid=$request->cid;
		
		//img single uploading
		$file=$request->file('img');		
		$filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		$file->move('upload/customer/',$filename);  // use move for move image in public/images
		$data->img=$filename; // name store in db
		
		/*
		// multiple uploading also add name="img[]" with multiple
		
		validation 
		
		'images' => 'required',
        'images.*' => 'mimes:jpg,png,jpeg,gif,svg'
		
		
		
		$filesarr = [];
        if($request->hasfile('img'))
         {
            foreach($request->file('img') as $file)
            {
                $filename = time().rand(1000,9999).'_img.'.$file->extension();
                $file->move('upload/customer/',$filename);   
                $filesarr[] = $filename;  
            }
         }
		$data->img=implode(",",$filesarr); // name store in db
		
		//view multiple
		
		$string_img=$fetch->img;
		$arr_img=explode(',',$string_img);
		@foreach($arr_img as $image)
       
            <div class="col-lg-4 col-sm-12 col-md-6 mb-3">
                <img src="uploads/{{$image}}" alt="{{$picture}}">
            </div>
		@endforeach
		
		
		
		
		*/
	
		$res=$data->save();
		if($res)
		{
			//$data=array("name"=>$name);
			//Mail::to($email)->send(new welcomemail($data));
			
									// flassh session
			return redirect('/signup')->with('success','Register Success');
		}
		
    }
	
	public function login()
	{
		return view('website.login');
	}
	
	public function loginuser(Request $request)
    {
	// validation	
		$validated = $request->validate([
        'username' => 'required|email',
		'password' => 'required|min:3|max:12',
		]);

		$data=customer::where('username','=',$request->username)->first();
		if($data)
		{
			if(Hash::check($request->password,$data->password))
			{
				$request->session()->put('username', $data->username);
				$request->session()->put('id', $data->id);
				return redirect('/index');
			}
			else
			{
				return redirect('/login')->with('fail','Wrong password');
			}
		}
		else
		{
			return redirect('/login')->with('fail','Wrong username');
		}
    }
	
	public function profile()
    {
		$data=customer::join('countries', 'customers.cid', '=', 'countries.id')->where('customers.username','=',session()->get('username'))->first();
        return view('website.profile',["data"=>$data]);
    }
	
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=customer::find($id);
		$country=countrie::all();
        return view('website.edit',["data"=>$data],['country'=>$country]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
        'name' => 'required',
        'username' => 'required|email',
		'cid' => 'required',
		'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

		$data=customer::find($id);
		$old_img=$data->img;
		
		$data->name=$request->name;
		$data->username=$request->username;
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		$data->cid=$request->cid;
		
		if($request->hasFile('img'))
		{
			$file=$request->file('img');		
			$filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
			$file->move('upload/customer/',$filename);  // use move for move image in public/images
			$data->img=$filename; // name store in db
			unlink('upload/customer/'.$old_img);

		}
		$res=$data->save();
		if($res)
		{
				
			return redirect('/profile')->with('success','Update Success');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
