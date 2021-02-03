<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Language;
use App\Models\PersonalProject;
use App\Models\Testimonial;
use App\Models\Blog;

class PagesController extends Controller
{
    public function index() {
        $data['testimonials'] = Testimonial::get();

        $data['blogs_index'] = Blog::take(3)->get();

        return view('index', $data);
    }

    // TODO: configure model to view with blogs data
    public function blogs() {
        $data['blogs'] = Blog::get();

        return view('main.blogs', $data);
    }

    public function services() {
        return view('main.services');
    }

    public function about() {
        return view('main.about');
    }

    public function portfolio() {
        $data['langs'] = ['All', 'Web', 'Python', 'C++'];

        $data['web_apps'] = PersonalProject::select('id', 'title', 'description', 'thumbnail', 'language')
        ->where('language', 'web')
        ->get();

        $data['pythons'] = PersonalProject::select('id', 'title', 'description', 'thumbnail', 'language')
        ->where('language', 'py')
        ->get();

        $data['cpps'] = PersonalProject::select('id', 'title', 'description', 'thumbnail', 'language')
        ->where('language', 'cpp')
        ->get();

        return view('main.portfolio', $data);
    }

    public function contact() {
        return view('main.contact');
    }
}
