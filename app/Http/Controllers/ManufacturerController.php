<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller {
    // GET /manufacturers
    public function index () {
        $manufacturers = Manufacturer::all()
            ->sortBy('name', SORT_NATURAL|SORT_FLAG_CASE)
            ->groupBy(function ($item) {
                $grouper = substr($item['name'], 0, 1);
                return ctype_alpha($grouper) ? strtoupper($grouper) : "&";
            });

        return view('app.manufacturers.index', [
            'groupedManufacturers' => $manufacturers,
        ]);
    }

    // GET /manufacturers/create
    public function create () {
        //
    }

    // POST /manufacturers
    public function store (Request $request) {
        //
    }

    // GET /manufacturers/{id}
    public function show (Manufacturer $manufacturer) {
        //
    }

    // GET /manufacturers/{id}/edit
    public function edit (Manufacturer $manufacturer) {
        //
    }

    // PATCH /manufacturers/{id}
    public function update (Request $request, Manufacturer $manufacturer) {
        //
    }

    // DELETE /manufacturers/{id}
    public function destroy (Manufacturer $manufacturer) {
        //
    }
}
