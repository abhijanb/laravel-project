<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontPage.css') }}">
</head>
<body>
    
    <!-- Your HTML content here -->

    @if(isset($res))
        <p>Authentication status: {{ $res ? 'Authenticated' : 'Not authenticated' }}</p>
    @else
        <p>{{$res}} variable is not set.</p>
    @endif

    <!-- Other content -->

</body>
</html>
