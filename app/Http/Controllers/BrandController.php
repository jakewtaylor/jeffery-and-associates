<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

use App\Http\Requests\{ CreateBrandRequest };

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
        return view('app.brands.create');
    }

    // POST /brands
    public function store (CreateBrandRequest $request) {
        $brand = Brand::create([
            'name' => $request->name,
        ]);

        return redirect()->route('brands.show', $brand);
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
        if ($brand->stock()->count() > 0) {
            return back()->withErrors('You cannot delete this brand because it has associated stock.');
        }

        $brand->delete();
        return redirect()->route('brands.index');
    }
}
