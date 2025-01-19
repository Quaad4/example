<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$jobs = [
    [
        'id' => 1,
        'title' => 'Director',
        'salary' => '£50,000'
    ],
    [
        'id' => 2,
        'title' => 'Programmer',
        'salary' => '£25,000'
    ],
    [
        'id' => 3,
        'title' => 'Teacher',
        'salary' => '£40,000'
    ]
];

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {
    return view('job', [
        'job' => Arr::first($jobs, fn($job) => $job['id'] == $id)
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
