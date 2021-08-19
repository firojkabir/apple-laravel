@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="{{ route('phones') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter phone " class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="brand" class="sr-only">Brand</label>
                    <select name="brand" id="brand" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('brand') border-red-500 @enderror">
                        <option value="apple">Apple</option>
                    </select>

                    @error('brand')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="price" class="sr-only">Price</label>
                    <input type="text" name="price" id="price" placeholder="Enter price" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('price') border-red-500 @enderror" value="{{ old('price') }}">

                    @error('price')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="state" class="sr-only">State</label>
                    <input type="radio" id="active" name="state" value="1">
                    <label for="active">Active</label><br>
                    <input type="radio" id="inactive" name="state" value="0">
                    <label for="inactive">Inactive</label><br>

                    @error('state')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="flex justify-center mt-5">
        <table class="table table-dark w-6/12">
            <thead>
              <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($phones as $phone)
                    <tr>
                        <td>{{ $phone->name }}</td>
                        <td>{{ $phone->brand }}</td>
                        <td>{{ $phone->price }}</td>
                        <td>{{ $phone->state }}</td>
                        <td>
                            <a href="phones/{{ $phone->id }}/edit"  class="text-blue-500">Edit</a>

                            <form action="/phones/{{ $phone->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-blue-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
@endsection