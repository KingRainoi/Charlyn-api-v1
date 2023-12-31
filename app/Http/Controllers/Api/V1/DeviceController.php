<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Device;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DeviceController extends Controller
{
    /**
     * Realizar la solicitud a la API externa de PRTG y manejar la respuesta.
     */
    private function makeApiDeviceRequest()
    {
        $response = Http::withoutVerifying()->get('https://127.0.0.1/api/table.json?content=sensors&columns=device,sensor,status&username=root&password=prtgadmin');

        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json(['message' => 'Error al obtener datos de la API externa de PRTG'], 500);
        }
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeviceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeviceRequest $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        //
    }
}
