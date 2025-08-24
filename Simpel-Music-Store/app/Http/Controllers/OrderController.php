<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function cart(){
        return view('order.cart');
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
        if (!Auth::id()) {
            return redirect()->route('auth.login')->with('error', 'You must be logged in to place an order.');
        }
        if(Auth::id()){
            $cart = json_decode($request->input('cart'), true);
            $validated = Validator::make(
                ['albums' => $cart],
                [
                'albums' => 'required',
                'albums.*.album_id' => 'required|exists:albums,id',
                'albums.*.quantity' => 'required|integer|min:1',

            ])->validate();

            //create order stap 2
            $order = Order::create([
                'user_id' => Auth::id(),
            ]);


            $pivotData = collect($validated['albums'])->mapWithKeys(fn ($album) => [
                $album['album_id'] => ['quantity' => $album['quantity']]
            ]);

            //Attach albums naar de order stap 3 (M2M)
            $order->albums()->attach($pivotData);

            //remove cookie so cart is emptied
            Cookie::queue(Cookie::forget('cart'));

            return redirect()->route('site.home')->with('success', 'Order created successfully!');
        }
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
