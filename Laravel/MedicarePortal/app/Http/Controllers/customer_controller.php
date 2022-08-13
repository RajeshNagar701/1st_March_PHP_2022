<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\countrie;
use App\Models\customer;
use Hash;
use Session;

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
		'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);

        $data=new customer;
		$data->name=$request->name;
		$data->username=$request->username;
		$data->password=Hash::make($request->password); // pass make encrypted
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag);
		$data->cid=$request->cid;
		
		//img uploading
		$file=$request->file('img');		
		$filename=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		$file->move('upload/customer/',$filename);  // use move for move image in public/images
		$data->img=$filename; // name store in db
		
		$res=$data->save();
		if($res)
		{									// flassh session
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
		$data=customer::where('username','=',session()->get('username'))->first();
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
