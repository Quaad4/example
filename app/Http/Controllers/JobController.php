<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

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

    public function store() {
        request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);
    
        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        Mail::to($job->employer->user)->send(
            new JobPosted($job)
        );
    
        return redirect('/jobs');
    }

    public function edit(Job $job) {

        // Gate::authorize('edit-job', $job);

        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    public function update(Job $job) {
        request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);
    
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        
        return redirect('jobs/' . $job->id);
    }

    public function destroy(Job $job) {
        $job->delete();

        return redirect('jobs');
    }
}
