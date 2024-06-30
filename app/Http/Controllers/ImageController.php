<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function storeCategory(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function storeImage(Request $request, $categoryId)
    {
        $category = Category::findOrFail($categoryId);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = $file->store('images', 'public');

            $image = new Image();
            $image->category_id = $category->id;
            $image->name = $file->getClientOriginalName();
            $image->path = $path;
            $image->save();

            return response()->json($image, 201);
        }

        return response()->json(['error' => 'No image uploaded'], 400);
    }

    public function getCategories()
    {
        $categories = Category::with('images')->get();
        return response()->json($categories);
    }
}
