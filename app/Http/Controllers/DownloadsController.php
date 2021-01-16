<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function download($file_name) {
        $path = 'asset/'.$file_name;

        $headers = array(
            'Content-type: application/pdf',
        );

        return response()->download($path, $file_name, $headers);
    }
}
