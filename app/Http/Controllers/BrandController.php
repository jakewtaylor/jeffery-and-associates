<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller {
    /// GET /brands
    public function index () {
        $brands = Brand::allGroupedAlphabetically();

        return view('app.brands.index', [
            'groupedBrands' => $brands,
        ]);
    }

    // GET /brands/create
    public function create () {
        //
    }

    // POST /brands
    public function store (Request $request) {
        //
    }

    /// GET /brands/{id}
    public function show (Brand $brand) {
        return view('app.brands.show', [
            'brand' => $brand,
        ]);
    }

    // GET /brands/{id}/edit
    public function edit (Brand $brand) {
        //
    }

    // PATCH /brands/{id}
    public function update (Request $request, Brand $brand) {
        //
    }

    // DELETE /brands/{id}
    public function destroy (Brand $brand) {
        //
    }
}
