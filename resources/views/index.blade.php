<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    @if(!isset($tasks))
        <h5>du lieu khong ton tai</h5>
    @else
        <tr>
            <th>Id</th>
            <th>Task title</th>
            <th>Content</th>
            <th>Imge</th>
            <th>create_at</th>
            <th>update_at</th>
        </tr>
    @if(count($tasks) == 0)
        <h5>khong co du lieu</h5>
    @else
    @foreach($tasks as $key => $task)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$task->Tasktitle}}</td>
            <td>{{$task->Content}}</td>
            <td><img src="{{asset($task->image)}}" width="100px" height="100px"></td>
            <td>{{$task->created_at}}</td>
            <td>{{$task->updated_at}}</td>
        </tr>
    @endforeach
    @endif
    @endif
</table>
<a href="{{route('welcome')}}">Back</a>
</body>
</html>