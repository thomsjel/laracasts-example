<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs',function(){
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'description' => 'This is an awesome job!!!',
                'location' => 'Remote',
                'salary' => '$60,000',
                'tags' => ['PHP', 'Remote']
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'description' => 'This is a foo job!!!',
                'location' => 'Remote',
                'salary' => '$70,000',
                'tags' => ['Python', 'Remote']
            ],
            [
                'id' => 3,
                'title' => 'React Developer',
                'description' => 'This is also a cool job!!!',
                'location' => 'Remote',
                'salary' => '$80,000',
                'tags' => ['React', 'Remote']
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function($id){
    $jobs = [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'description' => 'This is an awesome job!!!',
                'location' => 'Remote',
                'salary' => '$60,000',
                'tags' => ['PHP', 'Remote']
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'description' => 'This is a foo job!!!',
                'location' => 'Remote',
                'salary' => '$70,000',
                'tags' => ['Python', 'Remote']
            ],
            [
                'id' => 3,
                'title' => 'React Developer',
                'description' => 'This is also a cool job!!!',
                'location' => 'Remote',
                'salary' => '$80,000',
                'tags' => ['React', 'Remote']
            ]
        ];

        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function(){
    return view('contact');
});