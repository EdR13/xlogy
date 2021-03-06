@extends('dashboard')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title >Device Details</title>
    @livewireStyles

</head>
<body>
    @section('content')
        @livewireScripts
        <h1 class="text-center">Device Details:</h1>
        <table class="table table-dark table-striped mt-4 table-bordered table-hover text-center">
            <tr>
                <th scope="col">Device Name</th>
                <th scope="col">Device Model</th>
                <th scope="col">Brand</th>
                <th scope="col">Operating System</th>
                <th scope="col">RAM</th>
                <th scope="col">Storage</th>
                <th scope="col">Release Year</th>
                <th scope="col">Price</th>
            </tr>
            <tr>
                <td  >{{ $device->name }}</td>
                <td  >{{ $device->model }}</td>
                @if($device->brand == "Apple")
                    <td  ><x-si-apple height="40" alt="Apple"/></td>
                    <td  ><x-si-ios height="20" alt="iOS"/></td>
                @else
                    @if($device->brand == "Samsung")
                        <td  ><x-si-samsung alt="Samsung"/></td>
                    @elseif($device->brand == "Huawei")
                        <td  ><x-si-huawei height="40" alt="Huawei"/></td>
                    @elseif($device->brand == "Google")
                        <td  ><x-si-google height="40" alt="Google"/></td>
                    @elseif($device->brand == "Motorola")
                        <td  ><x-si-motorola height="40" alt="Motorola"/></td>
                    @elseif($device->brand == "Xiaomi")
                        <td  ><x-si-xiaomi height="40" alt="Xiaomi"/></td>
                    @elseif($device->brand == "Sony")
                        <td  ><x-si-sony height="40" alt="Sony"/></td>
                    @elseif($device->brand == "OnePlus")
                        <td  ><x-si-oneplus height="40" alt="One Plus"/></td>
                    @elseif($device->brand == "Nokia")
                        <td  ><x-si-nokia height="40" alt="Nokia"/></td>
                    @elseif($device->brand == "LG")
                        <td  ><x-si-lg height="40" alt="LG"/></td>
                    @elseif($device->brand == "Lenovo")
                        <td  ><x-si-lenovo height="40" alt="Lenovo"/></td>
                    @elseif($device->brand == "Asus")
                        <td  ><x-si-asus height="40" alt="Asus"/></td>
                    @elseif($device->brand == "Acer")
                        <td  ><x-si-acer height="40" alt="Acer"/></td>
                    @else
                        <td  >{{ $device->brand }}</td>
                    @endif
                    <td><x-si-android class="text-center" height="20" alt="Android"/></td>
                @endif
                <td  >{{ $device->ram }} GB</td>
                <td  >{{ $device->storage }} GB</td>
                <td  >{{ $device->released }}</td>
                <td  >${{ $device->price }}</td>
            </tr>
        </table>
    @endsection
</body>
</html>