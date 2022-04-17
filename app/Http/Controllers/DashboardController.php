<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostModel;
use App\CategoryModel;
use App\TagModel;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $postCount = PostModel::all()->count();
        $categoryConunt = CategoryModel::all()->count();
        $tagCount = TagModel::all()->count();
        $userCount = User::all()->count();
        return view('layouts.adminsite.dashboard', compact(['postCount','categoryConunt','tagCount','userCount']));
    }
}
