<h1>Student Directory</h1>

<ul>
    @foreach($students as $id => $info)
        <li>
            <strong>ID:</strong> {{ $id }} <br>
            <strong>Name:</strong> {{ $info['name'] }} <br>
            <strong>Course:</strong> {{ $info['course'] }}
            <hr>
        </li>
    @endforeach
</ul>
