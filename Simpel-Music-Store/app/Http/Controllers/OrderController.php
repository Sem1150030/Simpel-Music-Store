<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
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
        //validate order stap 1
        $validated = $request->validate([
            'user_id' => 'exists:users,id',
            'albums' => 'required|array',
            'albums.*' => 'exists:albums,id',
            '' => false,
        ]);

        //create order stap 2
        $order = Order::create([
            'user_id' => $validated['user_id'],
            'isReturned' => $validated['isReturned']
        ]);

        //Attach albums naar de order stap 3 (M2M)
        $order->albums()->attach($validated['albums']);

        return redirect()->route('site.home')->with('success', 'Order created successfully!');
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
}
