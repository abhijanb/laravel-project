{{-- @if (session('errors'))
    @foreach (session('errors') as $error)
        <p style="color:red;">{{ $error }}</p>
    @endforeach
@endif --}}

<form action="{{url('/loginCheck')}}" method="POST">
    @csrf
    email: <input type="email" name="email"><br>
    password: <input type="password" name="password"><br>
<button type="submit">submit</button>
<a href="{{url('/signup')}}">signup</a>
</form>