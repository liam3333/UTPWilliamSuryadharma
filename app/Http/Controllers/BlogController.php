<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Detail;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    public function index() {
        $highlight = Detail::orderBy('like_count', 'desc')->first();
        $latest = Detail::latest('post_date')->take(4)->get();
        $review = Detail::all();

        return view('home', compact('highlight', 'latest', 'review'));
    }
}
