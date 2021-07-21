<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR codes</title>
</head>
<body>
    @foreach ($QrCodeData as $code)
    <h1>{{ $code->pet_id }}</h1>
    @endforeach

    
</body>
</html>