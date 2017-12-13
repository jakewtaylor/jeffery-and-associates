<?php

namespace App\Http\Controllers;

use App\{ Stock, Brand, Manufacturer };
use Illuminate\Http\Request;

use App\Http\Requests\{ CreateStockRequest };

class StockController extends Controller {
    // GET /stock
    public function index () {
        return view('app.stock.index', [
            'stocks' => Stock::all(),
        ]);
    }

    // GET /stock/create
    public function create (Request $request) {
        $selectedBrand = Brand::find($request->brand);
        $brands = Brand::allGroupedAlphabetically();

        $manufacturers = Manufacturer::allGroupedAlphabetically();

        return view('app.stock.create', [
            'selectedBrand' => $selectedBrand,
            'brands' => $brands,
            'manufacturers' => $manufacturers,
        ]);
    }

    // POST /stock
    public function store (CreateStockRequest $request) {
        $stock = Stock::create([
            'brand_id' => $request->brand,
            'manufacturer_id' => $request->manufacturer,
            'model' => $request->model,
            'eyesize' => $request->eyesize,
            'dbl' => $request->dbl,
            'colour' => $request->colour,
            'price' => $request->price,
            'year' => $request->year,
            'code' => $request->code,
        ]);

        return redirect()->route('stock.show', $stock);
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
