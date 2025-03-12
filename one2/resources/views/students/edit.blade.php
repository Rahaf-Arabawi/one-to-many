<h1> Edit New students </h1>

<form action="{{route('students.update',$students->id)}}" method="POST">
    @method('PUT')
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$students->name}}"><br><br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image" value="{{$students->image}}"><br><br>

    <label for="coach_id">coach_id:</label>
    <input type="number" id="image" name="coach_id" value="{{$students->coach_id}}"><br><br>

    <button type="submit">Update</button>

</form>