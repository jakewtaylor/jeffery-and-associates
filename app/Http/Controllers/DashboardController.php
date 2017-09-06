<?php

namespace App\Http\Controllers;

use App\{ Practice, User, Brand, Manufacturer, Stock };

use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index () {
        return view('app.dashboard.index', [
            'practice_count' => Practice::count(),
            'user_count' => User::count(),
            'brand_count' => Brand::count(),
            'manufacturer_count' => Manufacturer::count(),
            'stock_count' => Stock::count(),
        ]);
    }
}
