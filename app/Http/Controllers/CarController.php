<?php
namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
{
    $cars = Car::all();

    return view('index', compact('cars'));
}

    public function show($id)
    {
        $car = Car::findOrFail($id);

        return view('page.car-detail', compact('car'));
    }
}
