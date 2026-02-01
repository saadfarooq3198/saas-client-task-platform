<x-app-layout>
<div class="container mx-auto p-6">

<h2>Create Project</h2>

<form method="POST" action="{{ route('projects.store') }}">
@csrf

<input type="text" name="name"
placeholder="Project name"
class="border p-2 w-full mb-2">

<textarea name="description"
placeholder="Description"
class="border p-2 w-full"></textarea>

<button class="bg-green-600 text-white px-4 py-2 mt-2">
Save
</button>

</form>

</div>
</x-app-layout>
