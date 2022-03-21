<!DOCTYPE html>
<html lang="en">
<head>
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
    @isset($device)
        <h1>Edit Device: </h1>

        <form action="/devices/{{ $device->id }}" method="POST">
            @method('PATCH')
    @else
        <h1>Add New Device: </h1>

        <form action="/devices" method="POST">
    @endisset
        @csrf
        <label for="name">Device Name:</label>
        <input type="text" name="name" required value="{{ isset($device) ? $device->name : old('name') }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="model">Device Model</label>
        <input type="text" name="model" required value="{{ isset($device) ? $device->model : old('model')}}">
        @error('model')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="brand">Manufacter:</label>
        <select name="brand" id="brand" required>
            <option></option>
            @foreach ($brands as $brand)
                <option value="{{ $brand }}"{{ isset($device) && $device->brand == $brand ? 'selected' : '' }}>{{ $brand }}</option>
            @endforeach
        </select>
        <br>
        <label for="ram">RAM:</label>
        <input type="number" name="ram" min="1" inputmode="numeric" required value="{{ isset($device) ? $device->ram : old('ram')}}">
        @error('ram')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="storage">Storage in Gigabytes:</label>
        <input type="number" name="storage" min="4" required value="{{ isset($device) ? $device->storage : old('storage')}}">
        @error('storage')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="os">Operating System:</label>
        <select name="os" id="os" required >
            <option></option>
            @foreach ($os as $os)
                <option value="{{ $os }}"{{  isset($device) && $device->os == $os ? 'selected' : '' }}>{{ $os }}</option>
            @endforeach
        </select>
        <br>
        <label for="released">Release Year:</label>
        <input type="number" name="released" min="2000" max="2022" step="1" required value="{{  isset($device) ? $device->released : old('released') }}">
        @error('released')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="price">Price in $MXN:</label>
        <input type="number" name="price" min=500 required value="{{ isset($device) ? $device->price : old('price') }}">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit">
    </form>
    
</body>
</html>