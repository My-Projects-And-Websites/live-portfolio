<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialMediasController extends Controller
{
    public function instagram() {
        return redirect('https://www.instagram.com/_codingcorgi/');
    }

    public function twitter() {
        return redirect('https://twitter.com/InciongJimm');
    }

    public function linkedin() {
        return redirect('https://www.linkedin.com/company/jimminc-web-services');
    }

    public function github() {
        return redirect('https://github.com/My-Projects-And-Websites');
    }
}
