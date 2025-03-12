<form action="{{ route('coachs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="image">image:</label>
    <input type="file" name="image" id="image" required>

    <button type="submit">Submit</button>
</form>