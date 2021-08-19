@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter phone " class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="brand" class="sr-only">Brand</label>
                    <select name="brand" id="">
                        <option value="apple">Apple</option>
                    </select>
                    <option value="apple" selected>Apple</option>
                    {{-- <input type="text" name="brand" id="brand" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg"> --}}
                </div>
                <div class="mb-4">
                    <label for="price" class="sr-only">Price</label>
                    <input type="text" name="price" id="price" placeholder="Enter price" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="active" class="sr-only">Active</label>
                    <input type="radio" id="active" name="active" value="Active">
                    <label for="active">Active</label><br>
                    <input type="radio" id="inactive" name="inactive" value="Inactive">
                    <label for="inactive">Inactive</label><br>
                    {{-- <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value=""> --}}
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection