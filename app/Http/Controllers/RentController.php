<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Log;
use App\Good;
use App\Inventory;
use App\Customer;
use App\Organization;


class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $inventories = Inventory::all();
        
        $pickup_time = date_create('2018-01-20 09:00:00'); //get Post
        $return_time = date_create('2018-01-21 10:00:00'); //get Post        
        $logs = Log::with('Good')->where([['pickup_time', '<=', $return_time],
                           ['prom_return_time', '>=', $pickup_time]])
                           ->get();

        foreach($inventories as $inventory)
        {
            $qty_av[$inventory->id]= $inventory->quantity_ready;
        }
        
        foreach($logs as $log)
        {
            foreach($log->good as $stuff)
            {
                $qty_av[$stuff->inventory_id] -= $stuff->qty;
            }
        }
            //if $quantity<=0, hide, else show with max number $quantity
            //echo $id.'with'.$quantity.'<br>' ;                          
        $data = [
            'title' => 'Rental',
            'inventories'=>$inventories,
            'qty_av' => $qty_av
        ];

        return view('customer/rent', $data);
    } 
    public function index_abi()
    {
        $data = [
            'title' => 'Rental'
        ];

        return view('customer/rent', $data);
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
        // Check if customer is already exist or not
        if (Customer::where('nim', '=', $request->input('customer_nim'))->first() == null) {
            // Create new customer
            $customer = new Customer();
            $customer->name = $request->input('customer_name');
            $customer->nim = $request->input('customer_nim');
            $customer->email = $request->input('customer_email');
            $customer->no_tlp = $request->input('customer_tlp');
            $customer->penalty = 0;
            $customer->save();

            return 'Customer doesn\'t exist. created a new one';
        }

        // Check if organization already exist or not
//        if(Organization::where('organization', '=', $request->input('customer_organization')) == null) {
//
//        }




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
