<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datalist = Order::all();

      return view('sayfalar.admin.orders', ['datalist' => $datalist]);
    }


    public function list($status)
    {
      $datalist = Order::where('status',$status)->get();

      return view('sayfalar.admin.orders', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order,$id)
    {
      $data = Order::find($id);
      $datalist = Orderitem::where('order_id',$id)->get();

      return view('sayfalar.admin.order_items', ['data' => $data,'datalist' => $datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order,$id)
    {
      $data = Order::find($id);
      $data->status = $request->input('status');
      $data->note = $request->input('note');
      $data->save();
      return redirect()->back()->with('success','Sipariş güncellendi');
    }


    public function itemupdate(Request $request, Order $order,$id)
    {
        $data = Orderitem::find($id);
        $data->status = $request->input('status');
        $data->note = $request->input('note');
        $data->save();
        return redirect()->back()->with('success','Sipariş güncellendi');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
