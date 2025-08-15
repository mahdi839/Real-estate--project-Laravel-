<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
   public function index()
    {
        $agents = Agent::all();
        return view('dashboard.agents.index', compact('agents'));
    }

    public function create()
    {
        return view('dashboard.agents.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'fb_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('agents', 'public');
        }

        Agent::create($validated);

        return redirect()->route('agents.index')->with('success', 'Agent added successfully.');
    }

    public function edit(Agent $agent)
    {
        return view('dashboard.agents.edit', compact('agent'));
    }

    public function update(Request $request, Agent $agent)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'fb_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('agents', 'public');
        }

        $agent->update($validated);

        return redirect()->route('agents.index')->with('success', 'Agent updated successfully.');
    }

    public function destroy(Agent $agent)
    {
        $agent->delete();
        return redirect()->route('agents.index')->with('success', 'Agent deleted successfully.');
    }
}
