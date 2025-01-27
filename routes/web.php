<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->paginate(3)
    ]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required'
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/create', function() {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', [
        'job' => Job::findOrFail($id)
    ]);
});

Route::get('/jobs/{id}/edit', function ($id) {
    return view('jobs.edit', [
        'job' => Job::findOrFail($id)
    ]);
});

Route::patch('/jobs/{id}', function ($id) {

    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required'
    ]);

    $job = Job::findOrFail($id);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    
    return redirect('jobs/' . $job->id);
});

Route::delete('/jobs/{id}', function($id) {
    $job = Job::findOrFail($id);
    $job->delete();

    return redirect('jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
