<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

        <form action="">
            <div  class="mb-4 p-5">
                <input class="col-9 mt-4 p-2" type="search" name="search" id="search" placeholder="Search student" value="{{$search}}">
                <button class="btn btn-primary">Search</button>
            </div>
        </form>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone_number }}</td>
                <td>{{ $student->Address }}</td>
              </tr>
            @endforeach
        
          
      </table>
</body>
</html>