<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Products;
use App\Models\Providers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class PulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $pulsa = Products::paginate(10);

        return view('content.admin.manage-pulsa',  compact('pulsa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function datatable(Request $request)
    {
        $pulsa = Products::where('type','pulsa');

        return DataTables::of($pulsa)->make(true);
    }
    public function create()
    {
        $provider = Providers::get();

        return view('content.admin.manage-pulsa-create', compact('provider'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Products::create([
            'provider_id' => $request->provider_id,
            'name' => $request->name,
            'price' => $request->price,
            'type' => "pulsa",
            'description' => $request->description,
            'image' => null
        ]);

        return redirect()->back()->with('success','Berhasil membuat data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pulsa = Products::findOrFail($id);

        return view('content.admin.manage-user-pulsa', compact('pulsa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Products::findOrFail($id)->update([
            'provider_id' => $request->provider_id,
            'name' => $request->name,
            'price' => $request->price,
            'type' => "pulsa",
            'description' => $request->description,
            'image' => null
        ]);

        return redirect()->back()->with('success','Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Products::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'berhasil menghapus data');
    }
}