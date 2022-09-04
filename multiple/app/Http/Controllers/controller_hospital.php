<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospital;
use App\Models\countrie;
use App\Models\state;
use App\Models\citie;
use Response;
class controller_hospital extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data=hospital::all();
		
        return view('view_hospital',["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		 $countrie=countrie::all();
         return view('add_hospital',["countrie"=>$countrie]);
    }
	
	public function getStates(Request $request)
    {
		$data['states'] =state::where("cid","=",$request->cid)->get();
        return response()->json($data);	
        
    }
	
	public function getCity(Request $request)
    {
		$data['cities'] =citie::where("sid","=",$request->sid)->get();
        return response()->json($data);	
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		 $this->validate($request, [
                'name' => 'required',
                'files' => 'required'
			  //'files.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:3024'
        ]);
		
		$filesarr = [];
        if($request->hasfile('files'))
         {
            foreach($request->file('files') as $file)
            {
                $name = time().rand(1000,9999).'_img.'.$file->extension();
                $file->move('uplaod/',$name);  
                $filesarr[] = $name;  
            }
         }
  
         $file= new hospital();
		 $file->name=$request->name;
         $file->files=implode(",",$filesarr);
         $file->save();
  
        return back()->with('success', 'Data Your files has been successfully added');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
