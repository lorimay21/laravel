<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * LIST OF ALL BRANCHES
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        dd($users);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * REGISTER A NEW BRANCH
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * 
     * DETAIL OF A BRANCH
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * UPDATE A BRANCH
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('edit');
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
