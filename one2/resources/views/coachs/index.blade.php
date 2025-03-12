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
    <a href="{{ route('coachs.create') }}">add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coachs as $coachs)
                <tr>
                    <td>{{ $coachs->id }}</td>
                    <td>{{ $coachs->name }}</td>
                    <td>{{ $coachs->image }}</td>
                </tr>
                <td>
                    <a href="{{ route('coachs.edit', $coachs->id) }}">Edit</a>
                    <form action="{{ route('coachs.destroy', $coachs->id) }}" method="post">
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
