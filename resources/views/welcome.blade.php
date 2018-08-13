<!DOCTYPE html>
<html>
<head>
    <title>Zulo</title>
</head>
<body>
    <ul>

        @foreach ($task as $task)
           <li>{{ $task->title}}{{$task->body}}</li> 
        @endforeach

    </ul>
</body>
</html>