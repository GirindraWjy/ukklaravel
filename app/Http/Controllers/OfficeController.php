<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfficeController extends Controller
{
      public function index()
    {
        $office = Office::all();
        return view('admin.offices')->with('office', $office);
    }

    public function create()
    {
        return view('admin.modal.create_office');
    }

    public function store(Request $request)
    {
        $office = Office::create($request->all());

        $office -> save();

        return to_route('admin.groups.index');
    }

    public function update(Request $request, Office $office)
    {
        $validated = $request->validate(['name' => 'required']);
        $office->update($validated);

        return to_route('admin.groups.index');
    }

    public function destroy(Office $office)
    {
        $office->delete();
        return back();
    }
}
