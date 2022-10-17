<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyermanagementController extends Controller
{
    public function buyer_list(){
        return view('admin.client.buyer.buyer_list');
    }
}
