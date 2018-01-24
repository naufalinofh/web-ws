<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Input;
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
    var $data = [
        'nama_orang' => 'M Salman Galileo',
        'sidebar' => [
            [
                'state' => '',
                'link' => 'pickup',
                'fa' => 'fa fa-hand-paper-o',
                'text' => 'Pickup'
            ],
            [
                'state' => '',
                'link' => 'return',
                'fa' => 'fa fa-handshake-o',
                'text' => 'Return'
            ],
            [
                'state' => '',
                'link' => '#3',
                'fa' => 'fa fa-list-alt',
                'text' => 'Log'
            ],
            [
                'state' => '',
                'link' => '#4',
                'fa' => 'fa fa-question-circle',
                'text' => 'Help'
            ],
        ],
    ];

    public function tester(Request $request)
    {  
        return $request->all();
    }

    public function pickupBarang()
    {
        $this->data['sidebar'][0]['state'] = 'active';
        $this->data['header'] = ['main' => 'Pickup', 'sub' => 'Halaman untuk pengambilan barang'];
        $pickup_log = [
            [
                'id' => '1',
                'name' => 'Salman',
                'org' => 'WS',
                'rent' => 'proyektor 1',
                'from' => 'kemaren',
                'until' => 'besok',
            ],
            [
                'id' => '2',
                'name' => 'Fadel',
                'org' => 'WS',
                'rent' => 'proyektor 1',
                'from' => 'kemaren',
                'until' => 'besok',
            ],
            [
                'id' => '3',
                'name' => 'Jundi',
                'org' => 'WS',
                'rent' => 'proyektor 1',
                'from' => 'kemaren',
                'until' => 'besok',
            ],
            [
                'id' => '4',
                'name' => 'Abi',
                'org' => 'WS',
                'rent' => 'proyektor 1',
                'from' => 'kemaren',
                'until' => 'besok',
            ],
        ];
        $this->data['pickup_log'] = $pickup_log;

        return view('pickup', $this->data);
    }

    public function returnBarang()
    {
        $this->data['sidebar'][1]['state'] = 'active';
        $this->data['header'] = ['main' => 'Pickup', 'sub' => 'Halaman untuk pengambilan barang'];
        $return_log = [
            [
                'id' => '1',
                'name' => 'Salman',
                'org' => 'WS',
                'rent' => 'proyektor 1',
                'from' => 'kemaren',
                'until' => 'besok',
            ],
            [
                'id' => '2',
                'name' => 'Fadel',
                'org' => 'WS',
                'rent' => 'proyektor 1',
                'from' => 'kemaren',
                'until' => 'besok',
            ],
            [
                'id' => '3',
                'name' => 'Jundi',
                'org' => 'WS',
                'rent' => 'proyektor 1',
                'from' => 'kemaren',
                'until' => 'besok',
            ],
            [
                'id' => '4',
                'name' => 'Abi',
                'org' => 'WS',
                'rent' => 'proyektor 1',
                'from' => 'kemaren',
                'until' => 'besok',
            ],
        ];
        $this->data['return_log'] = $return_log;

        return view('return', $this->data);
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
