<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller {
    // GET /manufacturers
    public function index () {
        $manufacturers = Manufacturer::allGroupedAlphabetically();

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
