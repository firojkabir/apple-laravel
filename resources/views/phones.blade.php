@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="{{ route('phones') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter phone " class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="brand" class="sr-only">Brand</label>
                    <select name="brand" id="brand" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                        <option value="apple">Apple</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="price" class="sr-only">Price</label>
                    <input type="text" name="price" id="price" placeholder="Enter price" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>
                <div class="mb-4">
                    <label for="state" class="sr-only">State</label>
                    <input type="radio" id="active" name="state" value="1">
                    <label for="active">Active</label><br>
                    <input type="radio" id="inactive" name="state" value="0">
                    <label for="inactive">Inactive</label><br>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection