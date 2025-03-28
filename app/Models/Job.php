<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job{

    public static function all(): array{
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'salary' => '$60,000',
                'tags' => ['PHP', 'Remote']
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'salary' => '$70,000',
                'tags' => ['Python', 'Remote']
            ],
            [
                'id' => 3,
                'title' => 'React Developer',
                'salary' => '$80,000',
                'tags' => ['React', 'Remote']
            ]
        ];
    }

    public static function find(int $id): array{
        $job = Arr::first(self::all(), fn($job) => $job['id'] == $id);

        if(!$job){
            abort(404);
        }else{
            return $job;
        }
    }
}