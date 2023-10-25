<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Service();
        
        
        /*if($request->has('image'))
        {
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->move(public_path('images/products'), $image_name);
        }*/

        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;
        //$product->image = $image_name;
        $service->user_id = auth()->user()->id;
        $service->save();

        return redirect('/dashboard/services')->with('success', 'تم إضافة الخدمه بنجاح !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
