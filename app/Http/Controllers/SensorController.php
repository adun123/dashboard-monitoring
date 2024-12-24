<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class SensorController extends Controller
{
    /**
     * Display the sensor creation view.
     */
    public function create()
    {
        // Assuming you have a Blade view for sensor registration
        return view('setting');
    }

    /**
     * Handle an incoming sensor data request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'sensor_id' => ['required', 'string', 'max:50', 'unique:sensors,sensor_id'],
            'ph' => ['required', 'numeric', 'between:0,14'],
            'do' => ['required', 'numeric'],
            'temperature_surface' => ['required', 'numeric'],
            'temperature_depth' => ['required', 'numeric'],
            'location' => ['required', 'string', 'max:255'],
        ]);

        

        try {
            $sensor = Sensor::create($validatedData);

            // Return a JSON response on successful creation
            return response()->json([
                'status' => 'success',
                'message' => 'Sensor data registered successfully',
                'data' => $sensor,
            ], 201);

        } catch (\Exception $e) {
            // Return a JSON error response if saving fails
            return response()->json([
                'status' => 'error',
                'message' => 'Error occurred while saving sensor data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Get all sensors data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $sensors = Sensor::all();
        return response()->json([
            'status' => 'success',
            'data' => $sensors,
        ], 200);
    }
}
