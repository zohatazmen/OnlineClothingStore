<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class AdminPromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();

        return view('backend.promotions', compact('promotions'));
    }

    public function create()
    {
        return view('backend.promotion-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|unique:promotions',
            'discount' => 'required|integer|min:1|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Promotion::create($request->all());

        return redirect()->route('admin.promotions.index')->with('success', 'Promotion added successfully.');
    }

    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('backend.promotion-edit', compact('promotion'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|string|unique:promotions,code,'.$id,
            'discount' => 'required|integer|min:1|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $promotion = Promotion::findOrFail($id);
        $promotion->update($request->all());

        return redirect()->route('admin.promotions.index')->with('success', 'Promotion updated successfully.');
    }

    public function destroy($id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();

        return redirect()->route('admin.promotions.index')->with('success', 'Promotion deleted successfully.');
    }
}
