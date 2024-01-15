<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\ProductResource;
use App\Models\Product;
use Inertia\Inertia;


class UserController extends Controller
{
    public function index()
    {
        $products = Product::with('brand', 'category', 'product_images')->orderBy('id','desc')->limit(8)->get();
        return Inertia::render('User/Index', [
             'products' => ProductResource::collection($products)
        ]);
    }
}
