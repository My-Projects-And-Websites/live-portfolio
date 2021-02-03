<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function show(Request $request, $id) {
        $data['blogs'] = Blog::find($id);

        return view('blog_temp.blog', $data);
    }
}
