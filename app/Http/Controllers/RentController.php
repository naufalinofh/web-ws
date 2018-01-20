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
use App\CustomerOrganization;
use App\Log;
use App\Good;


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
        $customer = new Customer();
        $organization = new Organization();
        $customer_organization = new CustomerOrganization();
        $log = new Log();

        // Status variable
        $customerDidNotExist = false;
        $organizationDidNotExist = false;

        // Check if customer is already exist or not
        if (Customer::where('nim', '=', $request->input('customer_nim'))->first() == null) {
            // Create new customer
            $customer->name = $request->input('customer_name');
            $customer->nim = $request->input('customer_nim');
            $customer->email = $request->input('customer_email');
            $customer->no_tlp = $request->input('customer_tlp');
            $customer->penalty = 0;
            $customer->save();

            $customerDidNotExist = true;
        }

        // Check if organization already exist or not
        if(Organization::where('name', '=', strtolower($request->input('customer_organization')))->first() == null) {
            // Create new organization
            $organization->name = strtolower($request->input('customer_organization'));
            $organization->save();

            $organizationDidNotExist = true;
        }

        // Relate customer_id with organization_id
        if ($customerDidNotExist || $organizationDidNotExist) {
            $customer_temp = Customer::where('nim', '=', $request->input('customer_nim'))->first();
            $organization_temp = Organization::where('name', '=', strtolower($request->input('customer_organization')))->first();

            $customer_organization->customer_id = $customer_temp->id;
            $customer_organization->organization_id = $organization_temp->id;
            $customer_organization->save();
        }

        // Insert rent information into log table
        $log->customer_id = Customer::where('nim', '=', $request->input('customer_nim'))->first()->id;
        $log->pickup_time = $request->input('rent_date').' '.$request->input('rent_hour');
        $log->prom_return_time = $request->input('return_date').' '.$request->input('return_hour');
        $log->status = 'tagged';
        $log->save();

        return redirect()->action('RentController@index');
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
