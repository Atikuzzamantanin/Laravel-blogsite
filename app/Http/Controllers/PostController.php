<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;
use App\CategoryModel;
use App\TagModel;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = PostModel::orderBy('id', 'DESC')->get();
        return view('layouts.adminsite.post.index',['post'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = TagModel::all();
        $result = CategoryModel::all();
        $user = User::all();
        return view('layouts.adminsite.post.create',['category'=>$result,'user'=>$user,'tags'=>$tag]);
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
            'title'=>'required',
            'catagoy'=>'required',
            'user'=>'required',
            'image'=>'required|image',
        ]);

        $title = $request->input('title');
        $slug = $request->input('slug');
        $catagory_id = $request->input('catagoy');
        $user_id = $request->input('user');
        $tag_id = $request->input('tag');
        $description = $request->input('description');
        $date = Carbon::now();
        $file = Storage::disk('public')->put('postimage', $request->file('image'));
        
        $data=array('title'=>$title,'slug'=>$slug,'category_id'=>$catagory_id,'user_id'=>$user_id,'tag_id'=>$tag_id,'description'=>$description,
        'published_at'=>$date,'image'=>$file);
        
        $result =  PostModel::insert($data);

        if($result){
            $notification=array(
                'messege'=>'Post Create Success',
                'alert-type'=>'success'
            );
            return Redirect('admin/post ')->with($notification);
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
        $viewpost = PostModel::where('id',$id)->first();
        return view('layouts.adminsite.post.view',compact('viewpost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postcategory = CategoryModel::all();
        $user = User::all();
        $postupdate = PostModel::where('id',$id)->first();
        return view('layouts.adminsite.post.update',['postupdate'=>$postupdate,'postcategory'=>$postcategory,'user'=>$user]);
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
            'title'=>'required',
            'image'=>'required|image',
        ]);

        $title = $request->input('title');
        $slug = $request->input('slug');
        $catagory_id = $request->input('catagoy_id');
        $user_id = $request->input('user_id');
        $description = $request->input('description');
        $date = Carbon::now();
        $file = Storage::disk('public')->put('postimage', $request->file('image'));
        $data=array('title'=>$title,'slug'=>$slug,'category_id'=>$catagory_id,'user_id'=>$user_id,'description'=>$description,
        'published_at'=>$date,'image'=>$file);
        $result =  PostModel::where('id',$id)->update($data);
        if($result){
            $notification=array(
                'messege'=>'Post Update Success',
                'alert-type'=>'success'
            );
            return Redirect('admin/post ')->with($notification);
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
        $deletepost = PostModel::find($id);
        if($deletepost){
            Storage::disk('public')->delete($deletepost->image);
            $deletepost->delete();
            $notification=array(
                'messege'=>'Post Delete Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        
    }
}
