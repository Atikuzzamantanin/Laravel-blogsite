<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterModel;
use App\CategoryModel;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = FooterModel::get();
        return view('layouts.adminsite.footer.index',['footer'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.adminsite.footer.create');
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
            'name'=>'required|unique:categorys|max:255',
            
        ]);
    
        $name = $request->input('name');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        
        $instagram = $request->input('instagram');
        $email = $request->input('email');
        $copyright = $request->input('copyright');
        $phone = $request->input('phone');
        $description = $request->input('description');
        $address = $request->input('address');

        $data = array('name'=> $name,'description'=>$description,'facebook'=>$facebook,'twitter'=>$twitter,'instagram'=>$instagram,'email'=>$email,'copyright'=>$copyright,'phone'=>$phone,'address'=>$address);
        $result = FooterModel::insert($data);
        if($result){
            $notification=array(
                'messege'=>'Footer Create Success',
                'alert-type'=>'success'
            );
            return Redirect('admin/footer')->with($notification);
        }
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
        $deletedata = FooterModel::find($id);
        if($deletedata)
        {
            $deletedata->delete();
            $notification=array(
                'messege'=>'Footer Delete Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        } 
    }
}
