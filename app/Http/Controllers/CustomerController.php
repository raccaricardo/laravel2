<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Debugbar::info('en el index method');

        $customers = Customer::all();
        // $customers = DB::select('select * from customers');

        return view('customers.index', ['customers' => $customers]);

        // return view('customers.index', [json_decode($customers, true)-> $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.create');
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
        // dd($request->all());
        // error_log($request->all());
        
        $customer = new Customer();
        $customer-> name = $request -> input('input_name');
        $customer-> surname = $request -> input('input_surname');
        $customer-> email = $request -> input('input_email');
        // $customer-> state_id = $request-> input('state_id');
        // $customer-> city_id = $request-> input('city_id');
        $customer-> save();
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
        $customer = Customer::find($id);

        return view('customers.customerDetail', [ 'customer'  => $customer]);
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
         // dd($request->all());
        // error_log($request->all());
        // dd($id);
        $customer = Customer::find($id);
        $customer-> name = $request -> input('input_name');
        $customer-> surname = $request -> input('input_surname');
        $customer-> email = $request -> input('input_email');
        // $customer-> state_id = $request-> input('state_id');
        // $customer-> city_id = $request-> input('city_id');
        $customer-> save();
        return "Guardado";
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
        // Debugbar::info('Llamado a destroy'.$id);
        $customer = Customer::destroy($id);
        // Debugbar::info($customer);
        return 'Cliente borrad';
    }
}
