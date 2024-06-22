<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <title>Checkbox State with Local Storage</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Korean</th>
                <th>Nepali</th>
                <th>View Images</th>
                <th>Check</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($objects as $key => $value)
            <tr>
                <td name="korean">{{ $value->korean }}</td>
                <td name="nepali">{{ $value->nepali }}</td>
                <td name="link"><a href="https://www.google.com/search?q={{ urlencode($value->korean) }}+{{ urlencode($value->nepali) }}&tbm=isch" target="_blank">View Images</a></td>
                <td><input type="checkbox" id="{{ $value->korean }}" name="checked" class="checkbox"></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="{{asset('js/script.js')}}">
       
     </script> 
</body>
</html>
