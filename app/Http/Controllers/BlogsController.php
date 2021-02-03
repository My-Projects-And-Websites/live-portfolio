<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogDetails;

class BlogsController extends Controller
{
    public function blog(Request $request, $id) {
        $data['blogs'] = BlogDetails::all();

        return view('blog_details.details', $data);
    }
}
