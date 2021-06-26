<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index () {
        $items = Product::all();
        return response()->json([
            'message' => 'OK',
            'data' => $items,
        ], 200);
    }
 }
