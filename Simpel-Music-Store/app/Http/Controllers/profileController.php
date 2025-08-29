<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class profileController extends Controller
{

    public function overview(){
        return view('profile.overview');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function changeUserRole($id, Request $request,){
        $user = User::where('id', $id)->firstOrFail();
        $validated = $request->validate([
            'role' => 'required|in:user,admin', // Only allow these values
        ]);
        if($user->role !=  $validated['role']){
            $user->role =  $validated['role'];
            $user->save();
            return redirect('/backoffice/users/' . $id);
        }

    }
}
