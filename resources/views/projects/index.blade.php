<x-app-layout>
<div class="container mx-auto p-6">

    <a href="{{ route('projects.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
       Create Project
    </a>

    @if(session('success'))
        <p class="text-green-600 mt-2">{{ session('success') }}</p>
    @endif

    <table class="w-full mt-4 border">
        <tr class="bg-gray-200">
            <th>Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        @foreach($projects as $project)
        <tr class="border">
            <td>{{ $project->name }}</td>
            <td>{{ $project->status }}</td>

            <td class="flex gap-2">
                <a href="{{ route('projects.edit',$project) }}"
                   class="text-blue-600">Edit</a>

                <form action="{{ route('projects.destroy',$project) }}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $projects->links() }}

</div>
</x-app-layout>
