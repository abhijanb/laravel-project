<form action="{{url('/signupUser')}}" method="post">
    @csrf
name: <input type="text" name="name">
email: <input type="email" name="email">
password: <input type="password" name="password" id="">
confirm password: <input type="password" name="password_confirmation" id="">
<button type="submit">signup</button>

</form>