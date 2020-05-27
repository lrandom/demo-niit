<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    function index()
    {
        //
        //$list = DB::table('category')->paginate(5);
        $list = Category::paginate(5);
        return view('admin.category.index', ['list' => $list]);
    }

    function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->name;
            $id_parent = $request->id_parent;

            // ORM chèn vào csdl 
            $obj = new Category();
            $obj->name = $name;
            $obj->parent_id = $id_parent;
            $obj->image = 'https://google.com.vn';
            $obj->save();
            return redirect('admin/category/index');
        }

        return view('admin.category.add');
    }

    function edit(Request $request)
    {
        $id = $request->get('id');
        $obj = Category::findOrFail($id);
        $obj->name = "Name";
        $obj->save();
    }

    function delete(Request $request)
    {
        $id = $request->get('id');
        DB::delete('delete category where id = ?', [$id]);
    }
}