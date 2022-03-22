@extends('dashboard')
<!DOCTYPE html>
<html lang="en">
<head>
    @livewireStyles

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @isset($device)
        <title>Edit Device</title>
    @else
        <title>Add a New Device</title>
    @endisset
    
</head>
<body>
    @section('content')
        @livewireScripts
        @isset($device)
            <h1 class="text-center">Edit Device: </h1>

            <form action="/devices/{{ $device->id }}" method="POST">
                @method('PATCH')
        @else
            <h1 class="text-center">Add New Device: </h1>

            <form action="/devices" method="POST">
        @endisset
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Device Name:</label>
                <input type="text" name="name"class="form-control" required value="{{ isset($device) ? $device->name : old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Device Model</label>
                <input type="text" name="model" required class="form-control" value="{{ isset($device) ? $device->model : old('model')}}">
                @error('model')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Manufacter:</label>
                <select name="brand" id="brand" required class="form-control">
                    <option></option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand }}"{{ isset($device) && $device->brand == $brand ? 'selected' : old('brand') }}>{{ $brand }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3">
                <label for="ram" class="form-label">RAM:</label>
                <input type="number" name="ram" min="1" inputmode="numeric" class="form-control" required value="{{ isset($device) ? $device->ram : old('ram')}}">
                @error('ram')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="storage" class="form-label">Storage in Gigabytes:</label>
                <input type="number" name="storage" min="4" required class="form-control" value="{{ isset($device) ? $device->storage : old('storage')}}">
                @error('storage')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="os" class="form-label">Operating System:</label>
                <select name="os" id="os" required class="form-control">
                    <option></option>
                    @foreach ($os as $os)
                        <option value="{{ $os }}"{{  isset($device) && $device->os == $os ? 'selected' : old('os') }}>{{ $os }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="released" class="form-label">Release Year:</label>
                <input type="number" name="released" min="2000" class="form-control" max="2022" step="1" required value="{{  isset($device) ? $device->released : old('released') }}">
                @error('released')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            
            <div class="mb-3">
                <label for="price" class="form-label">Price in $MXN:</label>
                <input type="number" name="price" min=500 required class="form-control" value="{{ isset($device) ? $device->price : old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <a href="/devices" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    @endsection
    
</body>
</html>