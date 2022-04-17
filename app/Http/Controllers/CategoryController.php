<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = CategoryModel::all();
        return view('layouts.adminsite.category.index',['category'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.adminsite.category.create');
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

    $categoryName = $request->input('name');
    $categorySlug = $request->input('slug');
    $categoryDescription = $request->input('description');
    $data = array('name'=> $categoryName,'slug'=>$categorySlug,'description'=>$categoryDescription);
    $result = CategoryModel::insert($data);
    if($result){
        $notification=array(
            'messege'=>'Category Create Success',
            'alert-type'=>'success'
        );
        return Redirect('admin/category ')->with($notification);
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
        $updateCatagory = CategoryModel::where('id',$id)->first();
        return view('layouts.adminsite.category.update',['updateCategory'=>$updateCatagory]);
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
    $categoryName = $request->input('name');
    $categorySlug = $request->input('slug');
    $categoryDescription = $request->input('description');
    $data = array('name'=> $categoryName,'slug'=>$categorySlug,'description'=>$categoryDescription);
    $result =  CategoryModel::where('id',$id)->update($data);
    if($result){
        $notification=array(
            'messege'=>'Category Update Success',
            'alert-type'=>'success'
        );
        return Redirect('admin/category')->with($notification);
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
        $deletedata = CategoryModel::find($id);
        if($deletedata)
        {
            $deletedata->delete();
            $notification=array(
                'messege'=>'Category Delete Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }    
    }


    

}
