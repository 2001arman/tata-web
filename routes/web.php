<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/projects/{slug}', function (string $slug) {
    $projects = collect(config('portfolio.projects'))->map(fn ($project, $key) => $project + ['slug' => $key])->values();
    $index = $projects->search(fn ($project) => $project['slug'] === $slug);

    abort_if($index === false, 404);

    return view('project', [
        'project' => $projects[$index],
        'previous' => $projects[($index - 1 + $projects->count()) % $projects->count()],
        'next' => $projects[($index + 1) % $projects->count()],
    ]);
})->name('projects.show');
