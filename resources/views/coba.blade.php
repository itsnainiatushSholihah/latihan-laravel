<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$nama}}</title>

</head>
<body>

    <h3>Hallo nama saya : {{$nama}}<br>
        Saya berada di kelas : {{$kelas}}<br>
        Hobi saya adalah : {{$hobi}}<br>

        @if ($nilai >= 89)
            <h2>Nilai anda adalah A</h2>

        @elseif ($nilai >=70)
            <h2>Nilai anda adalah B</h2>

        @else
            <h2>Nilai anda adalah C</h2>
        @endif

    </h3>
</body>
</html>