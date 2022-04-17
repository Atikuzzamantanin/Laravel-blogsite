<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;
use App\CategoryModel;


class FrontEndController extends Controller
{
    public function home()
    {
       $post = PostModel::orderBy('published_at','DESC')->take(5)->get();
       $firstpost = $post->splice(0,2);
       $middlepost = $post->splice(0,1);
       $lastpost = $post->splice(0);

       $footerpost = PostModel::inRandomOrder()->limit(4)->get();
       $firstFotterPost = $footerpost->splice(0,1);
       $middleFotterPost = $footerpost->splice(0,2);
       $lastFotterPost = $footerpost->splice(0,1);

       $recentpost = PostModel::orderBy('published_at','DESC')->paginate(9);
       
        return view('layouts.website.home',['recentpost'=>$recentpost,'fisrtpost'=>$firstpost,'middle'=>$middlepost,'lastpost'=> $lastpost,'footerpost'=>$firstFotterPost,'middlefooter'=>$middleFotterPost,'lastfooter'=>$lastFotterPost]);
    }
    public function about()
    {
        return view('layouts.website.about');
    }
    public function category($slug)
    {
        $category = CategoryModel::where('slug', $slug)->first();
        if($category){
            $posts = PostModel::where('category_id', $category->id)->paginate(9);
            return view('layouts.website.category',compact(['category','posts']));   
        }else{
            return redirect()->route('website');
        }
         
    }
    public function contact()
    {
        return view('layouts.website.contact');
    }
    public function post($slug)
    {
        $post = PostModel::where('slug',$slug)->first();
        $popularpost = PostModel::inRandomOrder()->limit(4)->get();
     
        if($post){
            return view('layouts.website.post',['singlepost'=>$post,'popularpost'=>$popularpost]);
        }else{
            return redirect('/');
        }
        
    }





}
