<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
   return view('home');
});

Route::get('/jobs', function (){
    $jobs = Job::with('employer')->latest()->simplePaginate(3); //eager loading || this solves the n+1 problem in terms of sql statement execution

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function() {
    return view('jobs.create'); // a view to create a job
});

Route::get('/jobs/{id}', function($id){
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]); // a view for a single job
});

Route::post('/jobs', function() {
    // validate....
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

//assignment one of loading the contact page
Route::get('/contact', function() {
    return view('contact');
});

