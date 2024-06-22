<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
  </head>
  
<table>
    <thead>
        <tr>
            <th>Korean</th>
            <th>Nepali</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($verbs as $key => $value)
        <tr>
            <td>{{ $value->korean }}</td>
            <td>{{ $value->nepali }}</td>
            <td><a href="https://www.google.com/search?q=한국어+동사+{{$value->korean}}+뜻" target="_blank">Google Meaning</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
