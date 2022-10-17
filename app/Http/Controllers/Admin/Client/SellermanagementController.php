<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellermanagementController extends Controller
{
    public function seller_list(){
        return view('admin.client.seller.seller_list');
    }
}
