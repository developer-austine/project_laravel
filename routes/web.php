<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
   return view('home');
});

Route::get('/jobs', function (){
    $jobs = Job::with('employer')->get(); //eager loading || this solves the n+1 problem in terms of sql statement execution

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function($id){
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

//assignment one of loading the contact page
Route::get('/contact', function() {
    return view('contact');
});

