<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;


class DeviceController extends Controller
{
    private $brands = [
        'Acer',
        'Alcatel',
        'Apple',
        'ASUS',
        'BLU',
        'Google',
        'Honor',
        'HTC',
        'Huawei',
        'Lenovo',
        'LG',
        'Motorola',
        'Nokia',
        'OnePlus',
        'Oppo',
        'Realme',
        'Samsung',
        'Sony',
        'TCL',
        'Vivo',
        'Xiaomi',
        'ZTE'
    ];
    private $os = [
        'Android',
        'iOS',
        'Other',
    ];
    private $validationRules = [
        'name' => 'required|min:4|max:255|regex:/^[0-9a-zA-Z ]*$/',
        'model' => 'required|min:4|max:255|regex:/^[0-9a-zA-Z\-]*$/',
        'brand' => ['required','min:4','max:15'],
        'ram' => 'required|min:1|max:16|integer',
        'storage' => 'required|min:4|max:2048|integer',
        'released' => 'required|min:1990|max:2022|integer',
        'os' => 'required|min:4|max:10',
        'price' => 'required|min:500|max:1000000|integer',
    ];


    // ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::all();
        return view('devices.indexDevices', compact('devices'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('devices.formDevices')->with(array('brands'=>$this->brands, 'os'=>$this->os));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate($this->validationRules);
        $device = new Device();
        $device -> name = $request->name;
        $device -> model = $request->model;
        $device -> brand = $request->brand;
        $device -> ram = $request->ram;
        $device -> storage = $request->storage;
        $device -> os = $request->os;
        $device -> released = $request->released;
        $device -> price = $request->price;

        $device ->save();

        return redirect('/devices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        return view('devices.showDevice', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        return view('devices.formDevices',compact('device'))->with(array('brands'=>$this->brands, 'os'=>$this->os));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $request -> validate($this->validationRules);

        $device -> name = $request->name;
        $device -> model = $request->model;
        $device -> brand = $request->brand;
        $device -> ram = $request->ram;
        $device -> storage = $request->storage;
        $device -> os = $request->os;
        $device -> released = $request->released;
        $device -> price = $request->price;

        $device ->save();

        return redirect('/devices/'. $device->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device -> delete();
        return redirect('/devices/');
    }
}
