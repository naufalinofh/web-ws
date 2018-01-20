<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CharacterController;
use App\Inventory;
use App\Log;
use App\Good;

        $inventories = Inventory::all();
        foreach($inventories as $inventory)
        {
            $id = $inventory->id;
            $quantity = $inventory->quantity_ready;
            $pickup_time = date_create('2018-01-20 09:00:00');
            $return_time = date_create('2018-01-21 10:00:00');        
            $logs = Log::with('Good')->where([['pickup_time', '<=', $return_time],
                           ['prom_return_time', '>=', $pickup_time]])
                           ->whereHas('Good', function($query) use ($id){
                               $query->where('inventory_id','=',$id);
                           })->get();  
            
            foreach($logs as $log)
            {
                $goods = Good::where([['log_id',$log->id],
                                    ['inventory_id',$id]])
                                    ->get();
                foreach($goods as $good)
                {
                    
                }
            }
            //if $quantity<=0, hide, else show with max number $quantity
            //echo $id.'with'.$quantity.'<br>' ;                          
        }
        ?>