<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="image">image:</label>
    <input type="file" name="image" id="image" required>

    <label for="coach_id">Coach:</label>
    <select name="coach_id" id="coach_id" required>
        <option value="">Select Coach</option>
        @foreach ($coachs as $coachs)
            <option value="{{ $coachs->id }}">{{ $coachs->name }}</option>
        @endforeach
    </select>


    <button type="submit">Submit</button>
</form>