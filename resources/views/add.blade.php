<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Item</title>
</head>
<body>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <p style="color:red;">{{$error}}</p>
        
    @endforeach
    
        
    @endif
    <form action="{{ route('add.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="content">Content:</label>
        <input type="text" id="content" name="content" value="{{ old('content') }}"><br>

        <label for="type">Type:</label><br>
        <input type="text" id="type" name="type"><br>

        <label for="meaning">Meaning:</label><br>
        <input type="text" id="meaning" name="meaning"><br>
        <label for="file">upload file</label>
<input type="file" name="file" id="file"><br>
        <button type="submit">Submit</button>
        
    </form>
    <form action="{{url('/logout')}}" method="POST">
        @csrf
        <button type="submit">logout</button>
    </form>
</body>
</html>
