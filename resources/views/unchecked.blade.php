<!-- Display unchecked words -->
@foreach ($words as $key => $value)
@if (!in_array($key, session('checkedWords', [])))
<tr>
    <td>{{ $key }}</td>
    <td>{{ $value }}</td>
</tr>
@endif
@endforeach
