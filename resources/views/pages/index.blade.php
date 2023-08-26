<x-layout>
    <h3 class="text-xl text-white font-semibold">Projects</h3>

    <ul class="my-4">
        @foreach(\App\Models\Project::all() as $project)
            <li><a href="{{ route('project.show', ['project' => $project->id]) }}" class="text-sky-500 hover:text-sky-600 hover:underline">{{ $project->name }}</a></li>
        @endforeach
    </ul>

    <form method="post" action="{{ route('api:project.create') }}" class="flex gap-2">
        @csrf
        <label for="name" class="text-white flex-shrink">Create new project</label>
        <input type="text" maxlength="255" id="name" name="name" class="px-2 flex-grow bg-slate-400 rounded shadow" />
    </form>
</x-layout>
