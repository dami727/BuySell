<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Save;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }
    public function create_product()
    {
        $data['category'] = DB::table('category')->select('*')->get();
        return view('products.create', $data);
    }

    public function post_product(Request $request)
    {
        $color = $request->post('color');
        dd($color);
        // $Product = new ProductController;
        // $Product->product_title = $request->product_title;
        // $Product->product_description = $request->product_description;
        // $Product->status = $request->status;
        // $Product->category = $request->category;
        // $Product->start_price = $request->start_price;
        // $Product->end_price = $request->end_price;
        // $Product->start_quaantity_range = $request->start_quaantity_range;
        // $Product->end_quaantity_range = $request->end_quaantity_range;
        // $Product->barcode = $request->barcode;
        // $Product->start_shipping_time = $request->start_shipping_time;
        // $Product->end_shipping_time = $request->end_shipping_time;
        // $Product->created_at = Carbon::now();
        // $Product->updated_at = Carbon::now();
        // $Product->save();

        // return redirect()->back();
        // $data = array (
        //     'product_title'   => $request->input('product_title'),
        //     'product_description'   => $request->input('product_description'),
        //     'status'   => $request->input('status'),
        //     'category'   => $request->input('category'),
        //     'start_price'   => $request->input('start_price'),
        //     'end_price'   => $request->input('end_price'),
        //     'start_quaantity_range'   => $request->input('start_quaantity_range'),
        //     'end_quaantity_range'   => $request->input('end_quaantity_range'),
        //     'barcode'   => $request->input('barcode'),
        //     'start_shipping_time'   => $request->input('start_shipping_time'),
        //     'end_shipping_time'   => $request->input('end_shipping_time'),
        //     'created_at'   => Carbon::now(),
        //     'updated_at'   => Carbon::now(),
        // );
        // foreach ($request as $key => $insert)[
        //     $insert['product_title']            => $request->input('product_title'),
        //     $insert['product_description']      => $request->input('product_description'),
        //     $insert['key_feature']              => $request->input('key_feature'),
        //     $insert['color']                    => $request->input('color'),
        //     $insert['size']                     => $request->input('size'),
        //     $insert['status']                   => $request->input('status'),
        //     $insert['category']                 => $request->input('category'),
        //     $insert['start_price']              => $request->input('start_price'),
        //     $insert['end_price']                => $request->input('end_price'),
        //     $insert['start_quaantity_range']    => $request->input('start_quaantity_range'),
        //     $insert['end_quaantity_range']      => $request->input('end_quaantity_range'),
        //     $insert['barcode']                  => $request->input('barcode'),
        //     $insert['start_shipping_time']      => $request->input('start_shipping_time'),
        //     $insert['end_shipping_time']        => $request->input('end_shipping_time'),
        //     $insert['created_at']               => Carbon::now(),
        //     $insert['updated_at']               => Carbon::now(),
        // ];
        // $insert = DB::table('products')->insert($data);
        // if($insert){
        //      return redirect('add_products')->with('status', 'Successfully Added');
        // }else{
        //      return redirect('add_products')->with('error', 'Something Went Wrong');
        // }
    }
    public function show(Product $product)
    {
        //
    }
    public function edit(Product $product)
    {
        //
    }
    public function update(Request $request, Product $product)
    {
        //
    }
    public function destroy(Product $product)
    {
        //
    }
}
