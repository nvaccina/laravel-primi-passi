<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
</head>
<body>

    <h1>About Us</h1>

    @include('partials.header')

    <h2>Team</h2>

    @foreach ($team as $member)
        <li>{{$member['name']}}</li>
        <li>{{$member['lastname']}}</li>
        <li>{{$member['work']}}</li>
        <hr>


    @endforeach

</body>
</html>
