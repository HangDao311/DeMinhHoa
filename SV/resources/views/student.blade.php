<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>Document</title>
</head>

<body>
    <form method="POST" action="/student_edit">
        {{ csrf_field()}}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Id</label>
            <input type="text" readonly class="form-control" name="id" value="{{ $student->id }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullname" value="{{ $student->fullname }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Birthday</label>
            <input type="date" class="form-control" name="birthday" value="{{ $student->birthday }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" value="{{ $student->address }}">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


</body>

</html>
