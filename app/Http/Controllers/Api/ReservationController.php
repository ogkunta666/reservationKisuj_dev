<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return response()->json($reservations, 200);
    }

    public function show($id)
    {
        $reservation = Reservation::find($id);
        if ($reservation) {
            return response()->json($reservation, 200);
        } else {
            return response()->json(['message' => 'Reservation nem található.'], 404);
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'reservation_time' => 'required|date',
            'guests' => 'required|integer|min:1',
            'note' => 'nullable|string',
        ]);

        $reservation = Reservation::create($validated);

        return response()->json($reservation, 201);
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        if (!$reservation) {
            return response()->json(['message' => 'Reservation nem található.'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|required|string',
            'email' => 'sometimes|required|email',
            'reservation_time' => 'sometimes|required|date',
            'guests' => 'sometimes|required|integer|min:1',
            'note' => 'nullable|string',
        ]);

        $reservation->update($validated);

        return response()->json($reservation, 200);
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        if (!$reservation) {
            return response()->json(['message' => 'Reservation nem található.'], 404);
        }

        $reservation->delete();

        return response()->json(['message' => 'Reservation törölve.'], 200);
    }
}
