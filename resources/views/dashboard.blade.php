<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('createcar') }}" class="btn btn-primary m-4">AddNew</a>
                <div class="p-6 text-gray-900">
                    <h1 class="font-bold text-center "><b>Data Dealership</b></h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Brand</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                
                            <tr>
                                <th scope="row">{{ $item->id }} </th>
                                <td>{{ $item->brand }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->price }} USD</td>
                                <td>
                                    <div class="d-flex gap-3">
                                        <a href="{{ route('editcar', $item->id) }}" class="btn btn-link">Edit</a>
                                        <a href="{{ route('deletecar', $item->id) }}" class="btn btn-link" onclick="return confirm('Are you sure to delete {{ $item->type }}')" >Delete</a>
                                    </div>

                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
