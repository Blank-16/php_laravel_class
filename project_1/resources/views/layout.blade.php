<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="">
        @yield('header')
        @yield('content')
        @yield('footer')
    </div>
    <div class="">
        @extends('layouts.app') @section('content')
        <h1>Student List</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $id => $info)
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{ $info['name'] }}</td>
                    <td>{{ $info['course'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endsection
    </div>

</body>

</html>