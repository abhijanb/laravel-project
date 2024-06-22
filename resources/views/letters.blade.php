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
        @foreach ($letters as $key => $value)
        <tr>
            <td>{{ $value->korean }}</td>
            <td>{{ $value->nepali }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
