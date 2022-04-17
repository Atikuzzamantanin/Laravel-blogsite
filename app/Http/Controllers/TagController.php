<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TagModel;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = TagModel::all();
        return view('layouts.adminsite.tag.index',['tag'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.adminsite.tag.create');
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
    
        $tagName = $request->input('name');
        $tagSlug = $request->input('slug');
        $tagDescription = $request->input('description');
        $data = array('name'=> $tagName,'slug'=>$tagSlug,'description'=>$tagDescription);
        $result = TagModel::insert($data);
        if($result){
            $notification=array(
                'messege'=>'Tag Create Success',
                'alert-type'=>'success'
            );
            return Redirect('admin/tag ')->with($notification);
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
        $updateTag = TagModel::where('id',$id)->first();
        return view('layouts.adminsite.tag.update',['updateTags'=>$updateTag]);
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
        $request->validate([
            'name'=>'required',
        ]);

    $tagName = $request->input('name');
    $tagSlug = $request->input('slug');
    $tagDescription = $request->input('description');
    $data = array('name'=> $tagName,'slug'=>$tagSlug,'description'=>$tagDescription);
    $result =  TagModel::where('id',$id)->update($data);
    if($result){
        $notification=array(
            'messege'=>'Tag Update Success',
            'alert-type'=>'success'
        );
        return Redirect('admin/tag')->with($notification);
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
        $deletedata = TagModel::find($id);
        if($deletedata)
        {
            $deletedata->delete();
            $notification=array(
                'messege'=>'Tag Delete Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        } 
    }
}
