<?php

use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Project\CreateProjectRequest;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Route;


Route::post('/', function(CreateProjectRequest $request) {
    Project::create([
        'name' => $request->get('name'),
    ]);
    return back();
})->name('project.create');


Route::post('/{project}', function(CreatePostRequest $request, string $projectId) {
    if (! Project::where('id', $projectId)->exists()) {
        throw (new ModelNotFoundException())->setModel(Project::class, $projectId);
    }

    Post::create([
        'project_id' => $projectId,
        'title' => $request->validated('title'),
        'content' => $request->validated('content'),
        'tags' => $request->validated('tags'),
        'headers' => $request->headers->all(),
    ]);
});
