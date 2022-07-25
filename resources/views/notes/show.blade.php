<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <div class="flex">
                        <p><strong>Created at: </strong>{{ $note->created_at->DiffForHumans() }}</p>
                        <p class="ml-7"><strong>updated at: </strong>{{ $note->updated_at->DiffForHumans() }}</p>
                        <a href={{ route('notes.edit',$note) }} class="btn-link ml-auto" >edit</a>
                        <form action="{{ route('notes.destroy',$note) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-4" onclick= "return confirm('Please confirm that you want to delete this note')">Delete</button>
                        
                        </form>
                    </div>
                    

                    <h2 class="font-bold text-2xl mt-5">
                  {{ $note->title }}
                    </h2>
                    <p class="mt-2 whitespace-pre-wrap">{{  $note->description }}</p>
                </div>
        </div>
    </div>
</x-app-layout>

