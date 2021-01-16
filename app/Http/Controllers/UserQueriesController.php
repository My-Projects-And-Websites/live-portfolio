<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserQuery;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class UserQueriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'useremail' => 'required|email',
            'userquery' => 'required'
        ]);

        $data = array(
            'name' => $request->username,
            'email' => $request->useremail,
            'message' => $request->userquery
        );

        Mail::to('jimminciong163@gmail.com')->send(new SendMail($data));

        $query = new UserQuery;
        $query->name = request('username');
        $query->email = request('useremail');
        $query->query = request('userquery');
        $query->save();

        return redirect('/contact')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
