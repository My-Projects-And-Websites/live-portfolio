<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectDetails;

class ProjectsController extends Controller
{
    public function project(Request $request, $id) {
        $data['projects'] = ProjectDetails::get()->where('project_id', $id);

        return view('project_view.project', $data);
    }
}
