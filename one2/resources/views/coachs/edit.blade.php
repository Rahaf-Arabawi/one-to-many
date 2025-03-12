<h1> Edit New coachs </h1>

<form action="{{route('coachs.update',$coachs->id)}}" method="POST">
    @method('PUT')
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$coachs->name}}"><br><br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image" value="{{$coachs->image}}"><br><br>

    <button type="submit">Update</button>

</form>