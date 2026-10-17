<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create($id)
    {
        $car = Car::findOrFail($id);

        return view('page.booking', compact('car'));
    }

    public function store(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $request->validate([
            'customer_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $startDate = \Carbon\Carbon::parse($request->start_date);
        $endDate = \Carbon\Carbon::parse($request->end_date);

        $totalDays = max(1, $startDate->diffInDays($endDate));
        $totalPrice = $totalDays * $car->rent_price;

        Booking::create([
            'car_id' => $car->id,
            'customer_name' => $request->customer_name,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_days' => $totalDays,
            'total_price' => $totalPrice,
            'status' => 'Pending',
        ]);

        return redirect()->route('cars.index')
            ->with('success', 'Booking berhasil dikirim!');
    }
}
