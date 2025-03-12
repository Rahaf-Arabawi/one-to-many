<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <a href="{{ route('students.create') }}">add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">image</th>
                <th scope="col">coach_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $students)
                <tr>
                    <td>{{ $students->id }}</td>
                    <td>{{ $students->name }}</td>
                    <td>{{ $students->image }}</td>
                    <td>{{ $students->coach_id }}</td>
                </tr>
                <td>
                    <a href="{{ route('students.edit', $students->id) }}">Edit</a>
                    <form action="{{ route('students.destroy', $students->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            @endforeach
        </tbody>
    </table>
</body>

</html>
