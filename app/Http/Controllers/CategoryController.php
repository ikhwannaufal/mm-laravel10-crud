<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');

        //Query to fetch categories
        $query = Category::query();

        // Apply search filter if search term is provided
        if ($search) {
            $query->where(DB::raw("LOWER(name)"), 'LIKE', '%' . strtolower($search) . '%')
            ->orWhere(DB::raw("LOWER(description)"), 'LIKE', '%' . strtolower($search) . '%');
        }

        // Fetch categories
        $categories = $query->get();
        return view('category.index', compact('categories','search'));
    }

    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);

        return redirect('categories/create')->with('status','Workout Added Big Guy!');
    }

    public function edit(int $id) {
        $category = Category::findOrFail($id);
        // dd($category);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        Category::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);

        return redirect()->back()->with('status','Workout Updated You Beast!');
    }

    public function destroy(int $id) {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('status','Workout Deleted');
    }
}
