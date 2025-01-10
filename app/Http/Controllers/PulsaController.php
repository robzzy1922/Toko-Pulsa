<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class PulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(){

        return view('content.admin.dashboard');

    }

    public function index()
    {
        $pulsa = Products::paginate(10);

        return view('content.admin.manage-user', compact('pulsa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function datatable(Request $request)
    {
        $pulsa = Products::query();

        return DataTables::of($pulsa)->make();
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        return view('content.admin.manage-user-edit', compact('pulsa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::findOrFail($id)->update([
            'username' => $request->username,
            'email' => $request->email,
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