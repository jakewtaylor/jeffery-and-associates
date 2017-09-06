<?php

namespace App\Http\Controllers;

use App\{ Stock, Brand };
use Illuminate\Http\Request;

class StockController extends Controller {
    // GET /stock
    public function index () {
        //
    }

    // GET /stock/create
    public function create (Request $request) {
        $selectedBrand = Brand::find($request->brand);
        $brands = Brand::all();

        return view('app.stock.create', [
            'selectedBrand' => $selectedBrand,
            'brands' => $brands,
        ]);
    }

    // POST /stock
    public function store (Request $request) {
        //
    }

    // GET /stock/{id}
    public function show (Stock $stock) {
        //
    }

    // GET /stock/{id}/edit
    public function edit (Stock $stock) {
        //
    }

    // PATCH /stock/{id}
    public function update (Request $request, Stock $stock) {
        //
    }

    // DELETE /stock/id}
    public function destroy (Stock $stock) {
        //
    }
}
