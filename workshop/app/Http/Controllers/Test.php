<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Customer;
use App\Good;
use App\Inventory;
use App\Log;
use App\LogService;
use App\Organization;
use App\RentPrice;

class Test extends Controller
{
    public function tester()
    {
        $inventories = Customer::with('organizations')->get();
        return dump($inventories);
    }

    public function connect()
    {
        $inventories = Inventory::all();
        $customers = Customer::all();
        
        foreach($inventories as $inventory)
        {
            $inventory->categories()->syncWithoutDetaching(range(
                                            rand(1,2),
                                            rand(4,5),
                                            rand(1,2)));
        }


        foreach($customers as $customer)
        {
            $customer->organizations()->syncWithoutDetaching(range(
                                            rand(1,2),
                                            rand(4,5),
                                            rand(1,2)));
        }

        return 'wow';
    }
}
