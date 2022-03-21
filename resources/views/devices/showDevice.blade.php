<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Device Details</title>
</head>
<body>
    <h1>Device Details:</h1>
    <table>
        <tr>
            <th>Device Name</th>
            <th>Device Model</th>
            <th>Brand</th>
            <th>Operating System</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Release Year</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>{{ $device->name }}</td>
            <td>{{ $device->model }}</td>
            @if($device->brand == "Apple")
                <td><x-si-apple height="40" alt="Apple"/></td>
                <td><x-si-ios height="20" alt="iOS"/></td>
            @else
                @if($device->brand == "Samsung")
                    <td><x-si-samsung alt="Samsung"/></td>
                @elseif($device->brand == "Huawei")
                    <td><x-si-huawei height="20" alt="Huawei"/></td>
                @elseif($device->brand == "Google")
                    <td><x-si-google height="20" alt="Google"/></td>
                @elseif($device->brand == "Motorola")
                    <td><x-si-motorola height="20" alt="Motorola"/></td>
                @elseif($device->brand == "Xiaomi")
                    <td><x-si-xiaomi height="20" alt="Xiaomi"/></td>
                @elseif($device->brand == "Sony")
                    <td><x-si-sony height="20" alt="Sony"/></td>
                @elseif($device->brand == "One Plus")
                    <td><x-si-oneplus height="20" alt="One Plus"/></td>
                @elseif($device->brand == "Nokia")
                    <td><x-si-nokia height="20" alt="Nokia"/></td>
                @elseif($device->brand == "LG")
                    <td><x-si-lg height="20" alt="LG"/></td>
                @elseif($device->brand == "Lenovo")
                    <td><x-si-lenovo height="20" alt="Lenovo"/></td>
                @elseif($device->brand == "Asus")
                    <td><x-si-asus height="20" alt="Asus"/></td>
                @elseif($device->brand == "Acer")
                    <td><x-si-acer height="20" alt="Acer"/></td>
                @else
                    <td>{{ $device->brand }}</td>
                @endif
                <td><x-si-android  height="20" alt="Android"/></td>
            @endif
            <td>{{ $device->ram }} GB</td>
            <td>{{ $device->storage }} GB</td>
            <td>{{ $device->released }}</td>
            <td>${{ $device->price }}</td>
        </tr>
    </table>
</body>
</html>