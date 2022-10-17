<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function view()
    {
        return view('web.category');
    }
    public function product_view(){
        return view('web.product_view');
    }
    //user login

}
