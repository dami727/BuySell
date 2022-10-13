<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Categorycontroller extends Controller
{
    // main category
    public function index()
    {
        $data['category'] = DB::table('category')->select('*')->get();
        return view('admin.category.category_list', $data);
    }
    // main category create
    public function create(Request $request)
    {
        $validated = $request->validate([
            'category_name'   => 'required',
            'category_slug' => 'required',
            'category_status'   => 'required',
            'category_image'  => 'required',
        ]);
        $category_image = time().$request->file('category_image')->getClientOriginalName();
        $path = $request->file('category_image')->storeAs('public/Category_image/',$category_image);

        if($request->file('feature_image')){
            $feature_image = time().$request->file('feature_image')->getClientOriginalName();
            $path1 = $request->file('feature_image')->storeAs('public/Category_image/',$feature_image);
        }else{
            $feature_image = $request->input('image');
        }

        $data = array (
            'category_name'     => $request->input('category_name'),
            'category_slug'     => $request->input('category_slug'),
            'category_status'   => $request->input('category_status'),
            'category_image'    => $category_image,
            'feature_image'     => $feature_image,
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        );
        $insert = DB::table('category')->insert($data);
        if($insert){
             return redirect('category_list')->with('status', 'Successfully Added');
        }else{
             return redirect('category_list')->with('error', 'Something Went Wrong');
        }
    }
    // main category view
    public function view_category($id=null){
        $data['view_category'] = DB::table('category')->where('id', $id)->first();
        return view('admin.category.view_category', $data);
    }
    // main edit view
    public function edit_view($id=null){
        $data['view_category'] = DB::table('category')->where('id', $id)->first();
        return view('admin.category.edit_view', $data);
    }
    // main category edit
    public function edit_category(){
        
    }

    // main category delete
    public function delete($id=null)
    {
        $delete = DB::table('category')->select('*')->where('id',$id)->delete();
        if($delete){
             return redirect('category_list')->with('status', 'Successfully Deleted');
        }else{
             return redirect('category_list')->with('error', 'Something Went Wrong');
        }
    }

    // sub category view
    public function sub_category(){
        $data['category'] = DB::table('category')->select('*')->get();
        $data['sub_category'] = DB::table('sub_category')->select('*')->get();
        return view('admin.category.sub_category', $data);
    }
    // sub category create
    public function create_sub_category(Request $request){
        $validated = $request->validate([
            'sub_category_name'   => 'required',
            'category_name'       => 'required',
            'sub_category_slug'   => 'required',
            'sub_status'          => 'required',
        ]);
        $data = array (
            'sub_category_name' => $request->input('sub_category_name'),
            'category_name'     => $request->input('category_name'),
            'sub_category_slug' => $request->input('sub_category_slug'),
            'sub_status'        => $request->input('sub_status'),            
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        );
        $insert = DB::table('sub_category')->insert($data);
        if($insert){
             return redirect('sub_category')->with('status', 'Successfully Added');
        }else{
             return redirect('sub_category')->with('error', 'Something Went Wrong');
        }
    }
    // sub category delete
    public function sub_category_delete($id=null)
    {
        $delete = DB::table('sub_category')->select('*')->where('id',$id)->delete();
        if($delete){
             return redirect('sub_category')->with('status', 'Successfully Deleted');
        }else{
             return redirect('sub_category')->with('error', 'Something Went Wrong');
        }
    }


    // child category
    public function child_category(){
        $data['category'] = DB::table('category')->select('*')->get();
        $data['sub_category'] = DB::table('sub_category')->select('*')->get();
        $data['child_category'] = DB::table('child_category')->select('*')->get();
        return view('admin.category.child_category', $data);
    }
    // child category create
    public function create_child_category(Request $request){
        $validated = $request->validate([
            'category_name'         => 'required',
            'sub_category_name'     => 'required',
            'child_category_name'   => 'required',
            'child_category_slug'   => 'required',
            'child_status'          => 'required',
        ]);
        $data = array (
            'category_name'         => $request->input('category_name'),
            'sub_category_name'     => $request->input('sub_category_name'),
            'child_category_name'   => $request->input('child_category_name'),
            'child_category_slug'   => $request->input('child_category_slug'),            
            'child_status'          => $request->input('child_status'),            
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
        );
        $insert = DB::table('child_category')->insert($data);
        if($insert){
             return redirect('child_category')->with('status', 'Successfully Added');
        }else{
             return redirect('child_category')->with('error', 'Something Went Wrong');
        }
    }
    // delete child category
    public function child_category_delete($id=null)
    {
        $delete = DB::table('child_category')->select('*')->where('id',$id)->delete();
        if($delete){
             return redirect('child_category')->with('status', 'Successfully Deleted');
        }else{
             return redirect('child_category')->with('error', 'Something Went Wrong');
        }
    }
}
