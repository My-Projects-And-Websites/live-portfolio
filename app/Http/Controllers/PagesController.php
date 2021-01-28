<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Language;
use App\Models\PersonalProject;

class PagesController extends Controller
{
    public function index() {
        $data['images'] = Image::all();

        return view('index', $data);
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
