@extends('dashboard')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Device Details</title>
    @livewireStyles

</head>
<body>
    @section('content')
        @livewireScripts
        <h1>Device Details:</h1>
        <table class="table table-dark table-striped mt-4 table-bordered table-hover">
            <tr>
                <th class="text-center"  scope="col">Device Name</th>
                <th class="text-center"  scope="col">Device Model</th>
                <th class="text-center"  scope="col">Brand</th>
                <th class="text-center"  scope="col">Operating System</th>
                <th class="text-center"  scope="col">RAM</th>
                <th class="text-center"  scope="col">Storage</th>
                <th class="text-center"  scope="col">Release Year</th>
                <th class="text-center"  scope="col">Price</th>
            </tr>
            <tr>
                <td class="text-center" >{{ $device->name }}</td>
                <td class="text-center" >{{ $device->model }}</td>
                @if($device->brand == "Apple")
                    <td class="text-center" ><x-si-apple height="40" alt="Apple"/></td>
                    <td class="text-center" ><x-si-ios height="20" alt="iOS"/></td>
                @else
                    @if($device->brand == "Samsung")
                        <td class="text-center" ><x-si-samsung alt="Samsung"/></td>
                    @elseif($device->brand == "Huawei")
                        <td class="text-center" ><x-si-huawei height="20" alt="Huawei"/></td>
                    @elseif($device->brand == "Google")
                        <td class="text-center" ><x-si-google height="20" alt="Google"/></td>
                    @elseif($device->brand == "Motorola")
                        <td class="text-center" ><x-si-motorola height="20" alt="Motorola"/></td>
                    @elseif($device->brand == "Xiaomi")
                        <td class="text-center" ><x-si-xiaomi height="20" alt="Xiaomi"/></td>
                    @elseif($device->brand == "Sony")
                        <td class="text-center" ><x-si-sony height="20" alt="Sony"/></td>
                    @elseif($device->brand == "One Plus")
                        <td class="text-center" ><x-si-oneplus height="20" alt="One Plus"/></td>
                    @elseif($device->brand == "Nokia")
                        <td class="text-center" ><x-si-nokia height="20" alt="Nokia"/></td>
                    @elseif($device->brand == "LG")
                        <td class="text-center" ><x-si-lg height="20" alt="LG"/></td>
                    @elseif($device->brand == "Lenovo")
                        <td class="text-center" ><x-si-lenovo height="20" alt="Lenovo"/></td>
                    @elseif($device->brand == "Asus")
                        <td class="text-center" ><x-si-asus height="20" alt="Asus"/></td>
                    @elseif($device->brand == "Acer")
                        <td class="text-center" ><x-si-acer height="20" alt="Acer"/></td>
                    @else
                        <td class="text-center" >{{ $device->brand }}</td>
                    @endif
                    <td class="text-center" ><x-si-android  height="20" alt="Android"/></td>
                @endif
                <td class="text-center" >{{ $device->ram }} GB</td>
                <td class="text-center" >{{ $device->storage }} GB</td>
                <td class="text-center" >{{ $device->released }}</td>
                <td class="text-center" >${{ $device->price }}</td>
            </tr>
        </table>
    @endsection
</body>
</html>