<x-app-layout>
<div class="container mx-auto p-6">

<h2>Edit Project</h2>

<form method="POST"
action="{{ route('projects.update',$project) }}">

@csrf
@method('PUT')

<input type="text"
name="name"
value="{{ $project->name }}"
class="border p-2 w-full mb-2">

<textarea name="description"
class="border p-2 w-full">
{{ $project->description }}
</textarea>

<button class="bg-blue-600 text-white px-4 py-2 mt-2">
Update
</button>

</form>

</div>
</x-app-layout>
