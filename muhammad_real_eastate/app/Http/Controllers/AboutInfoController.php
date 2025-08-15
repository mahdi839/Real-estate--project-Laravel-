<?php

namespace App\Http\Controllers;

use App\Models\AboutInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutInfoController extends Controller
{
      public function edit()
    {
        $about = AboutInfo::first();
        return view('dashboard.about_info.form', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $about = AboutInfo::firstOrNew();

        if ($request->hasFile('image')) {
            if ($about->image && Storage::exists('public/' . $about->image)) {
                Storage::delete('public/' . $about->image);
            }
            $about->image = $request->file('image')->store('about_images', 'public');
        }

        $about->title = $request->title;
        $about->description = $request->description;
        $about->save();

        return redirect()->back()->with('success', 'About Info updated successfully.');
    }
}
