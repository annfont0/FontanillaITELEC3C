<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl row mx-auto sm:px-6 lg:px-8">
            <div class="bg-white col-md-8 overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">CATEGORY NAME</th>
                          <th scope="col">USER ID</th>
                          <th scope="col">CREATED AT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->user_id }}</td>
                            <td>{{ $category->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="bg-white col-md-4 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('Create') }}" method="post">
                    @csrf
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" /> 
                    <label for="user_id">User ID</label>
                    <input type="number" class="form-control" id="user_id" name="user_id" />  
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
