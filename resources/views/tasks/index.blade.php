<!DOCTYPE html>
<html>
<head>
	<title>
		Homepage
	</title>
</head>
<body>
	<ul>
		@foreach ($task as $task)
           <li><a href="/tasks/{{ $task->id}}">{{$task->body}}</a></li> 
        @endforeach
    </ul>
</body>
</html>