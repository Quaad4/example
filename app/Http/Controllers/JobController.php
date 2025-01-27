<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        return view('jobs.index', [
            'jobs' => Job::with('employer')->latest()->paginate(3)
        ]);    
    }

    public function show(Job $job) {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);
    
        Job::create([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
            'employer_id' => 1
        ]);
    
        return redirect('/jobs');
    }

    public function edit(Job $job) {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    public function update(Job $job, Request $request) {
        $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);
    
        $job->update([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
        ]);
        
        return redirect('jobs/' . $job->id);
    }

    public function destroy(Job $job) {
        $job->delete();

        return redirect('jobs');
    }
}
