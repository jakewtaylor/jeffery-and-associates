<?php

namespace App\Http\Controllers;

use App\Practice;
use Illuminate\Http\Request;

use App\Http\Requests\{ CreatePracticeRequest, UpdatePracticeRequest };

class PracticeController extends Controller {
    // GET /practices
    public function index () {
        $practices = Practice::all()->sortBy('name');
        return view('app.practices.index', [
            'practices' => $practices,
        ]);
    }

    // GET /practices/create
    public function create () {
        return view('app.practices.create');
    }

    // POST /practices
    public function store (CreatePracticeRequest $request) {
        $practice = Practice::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'line1' => $request->line1,
            'line2' => $request->line2 ?? null,
            'city' => $request->city,
            'county' => $request->county,
            'postcode' => $request->postcode,
        ]);

        return redirect()->route('practices.show', [
            'id' => $practice->id,
        ]);
    }

    // GET /practices/{id}
    public function show (Practice $practice) {
        return view('app.practices.show', [
            'practice' => $practice,
        ]);
    }

    // GET /practices/{id}/edit
    public function edit (Practice $practice) {
        return view('app.practices.edit', [
            'practice' => $practice,
        ]);
    }

    // PATCH /practices/{id}
    public function update (UpdatePracticeRequest $request, Practice $practice) {
        $practice->name = $request->name;
        $practice->phone = $request->phone;
        $practice->line1 = $request->line1;
        $practice->line2 = $request->line2;
        $practice->city = $request->city;
        $practice->county = $request->county;
        $practice->postcode = $request->postcode;
        $practice->save();

        return redirect()->route('practices.show', [
            'id' => $practice->id,
        ]);
    }

    // DELETE /practices/{id}
    public function destroy (Practice $practice) {
        $practice->delete();
        return redirect()->route('practices.index');
    }
}
