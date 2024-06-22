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
        @foreach ($word as $key => $value)
        <tr>
            <td>{{ $key }}</td>
            <td>{{ $value }}</td>
            <td><input type="checkbox" name="checkedWords[]" value="{{ $key }}"></td>
        </tr>
        @endforeach
    </tbody>
</table>
