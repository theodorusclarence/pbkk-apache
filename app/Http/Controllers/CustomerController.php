<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index() {
        $customers = Customer::whereBetween('customer_id', [321, 340])->get();

        return view('home', [
            'customers' => $customers
        ]);
    }
}
