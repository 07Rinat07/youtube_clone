<?php

namespace App\Http\Controllers;


use App\Models\Category;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public  function  index()
    {
            return Category::get();
    }

    public function show(Category  $category)
    {
        return $category;
    }
}
