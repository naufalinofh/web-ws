<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inventory;
use App\RentPrice;

$data = Inventory::all();

echo "<p>abi</p>";

foreach ($data as $single) {
    echo "<p>$single->name</p>";
}

?>