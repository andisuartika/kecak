<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\Package;
use Illuminate\Http\Request;

class KecakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $packages = Package::when($request->input('search'), function ($query, $search) {
            $query->where('package_name', 'like', '%' . $search . '%');
        })->when($request->comunity, function ($query) use ($request) {
            $query->where('comunity_id', $request->comunity);
        })->get();
        $comunties = Comunity::all();

        return view('backpage.tables', ['packages' => $packages, 'comunities' => $comunties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunties = Comunity::all();
        return view('backpage.create', ['comunities' => $comunties]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'location' => 'required',
            'comunity' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);


        $extension = $request->file('image')->getClientOriginalExtension();
        $fileName = $request->code . '.' . $extension;

        $request->file('image')->storeAs('public/uploads/', $fileName);
        $url = 'storage/uploads/' . $fileName;

        Package::create([
            'package_code' => $request->code,
            'package_name' => $request->name,
            'package_desc' => $request->desc,
            'package_img' => $url,
            'comunity_id' => $request->comunity,
            'location' => $request->location,
        ]);

        return redirect()->route('dashboard')->with('success', 'Packages success added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $comunties = Comunity::all();
        return view('backpage.edit', ['package' => $package, 'comunities' => $comunties]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'location' => 'required',
            'comunity' => 'required',
            'desc' => 'required',
        ]);


        if ($request->hasFile('image')) {
            // Hapus Foto Lama
            unlink(public_path($package->package_img));

            // Upload Foto
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $request->code . '.' . $extension;

            $request->file('image')->storeAs('public/uploads/', $fileName);
            $url = 'storage/uploads/' . $fileName;
            $package->update([
                'package_img' => $url,
            ]);
        }

        $package->update([
            'package_code' => $request->code,
            'package_name' => $request->name,
            'package_desc' => $request->desc,
            'comunity_id' => $request->comunity,
            'location' => $request->location,
        ]);


        return redirect()->route('dashboard')->with('success', 'Packages success added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        unlink(public_path($package->package_img));
        Package::destroy($package->id);
        return back();
    }
}
