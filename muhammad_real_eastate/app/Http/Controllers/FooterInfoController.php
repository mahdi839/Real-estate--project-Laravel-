<?php

namespace App\Http\Controllers;
use App\Models\FooterInfo;

use Illuminate\Http\Request;

class FooterInfoController extends Controller
{
    public function edit()
    {
        $footerInfo = FooterInfo::first();
        return view('dashboard.footer_info.form', compact('footerInfo'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'company_location' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email',
        ]);

        $footerInfo = FooterInfo::first();
        if ($footerInfo) {
            $footerInfo->update($data);
        } else {
            FooterInfo::create($data);
        }

        return redirect()->back()->with('success', 'Footer info updated successfully.');
    }
}
