<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <table class="student_manage">
        <thead>
            <tr>
                <th scope="id">ID</th>
                <th scope="fullname">Full Name</th>
                <th scope="birthday">Birthday</th>
                <th scope="address">Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->fullname }}</td>
                    <td>{{ $item->birthday }}</td>
                    <td>{{ $item->address }}</td>
                    <td><a href="/student/{{ $item->id }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>

<style>
    table {
        width: 100%;
    }

    th {
        background-color: darkorange;
    }

    td {
        background-color: blanchedalmond;
    }

    table,
    th,
    td {
        border: 1px solid black;
        text-align: center;
    }
</style>
