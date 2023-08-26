<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'reference_name' => 'required|string|max:255',
            'date' => 'required|date',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'number' => 'required|string|max:255',
            'mouza' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'document' => 'file|mimes:pdf,doc,docx',

        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // If validation passes, proceed to create the category
        Category::newCategory($request);
        return back()->with('message', 'lient info create successfully.');
    }
    public function manage()
    {

        return view('admin.category.manage', ['categories' => Category::all()]);
    }

    public function edit($id)
    {
        return view('admin.category.edit', ['category' => Category::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Category info update successfully.');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category/manage')->with('message', 'Category info delete successfully.');
    }

    public function showFiles($id)
    {
        $category = Category::with('files')->find($id);

        return view('admin.category.files', compact('category'));
    }


}
