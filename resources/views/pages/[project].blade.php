<?php
    \Laravel\Folio\name('project.show');
?>
<x-layout>
    <h3 class="font-semibold text-lg text-white">{{ $project->name }}</h3>
    <h4 class="text-sm text-white">ID: <code>{{ $project->id }}</code></h4>

    @foreach($project->posts->all() as $post)
        <section class="bg-slate-300 shadow rounded p-4 my-4 flex flex-col gap-2">
            <div class="flex justify-between">
                <span>{{ $post->title }}</span>
                <span>{{ $post->created_at->format('d-m-Y h:i:s') }}</span>
            </div>
            <pre>{{ $post->content }}</pre>
{{--            <pre class="text-sm">@json($post->headers, JSON_PRETTY_PRINT)</pre>--}}
            <div class="text-right">
                @foreach($post->tags as $tag)
                    <span class="rounded-full text-xs bg-sky-600 shadow text-white px-2 py-1">{{ $tag }}</span>
                @endforeach
            </div>
        </section>
    @endforeach

</x-layout>
