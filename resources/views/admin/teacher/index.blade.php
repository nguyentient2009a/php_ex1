<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manager</title>
</head>
<body>
<div>
Manager Teacher
    <ul class="input">
        <li><a href="{{url('/admin/teacher/create')}}">create</a></li>
        <li><a href="{{url('/admin/teacher/list')}}">list</a></li>
        <li><a href="{{url('/admin/teacher/detail')}}">detail</a></li>
        <li><a href="{{url('/admin/teacher/update')}}">update</a></li>
        <li><a href="{{url('/admin/teacher/delete')}}">delete</a></li>
    </ul>
</div>

<div>
    Manager Student
    <ul>
        <li><a href="{{url('/admin/student/create')}}">create</a></li>
        <li><a href="{{url('/admin/student/list')}}">list</a></li>
        <li><a href="{{url('/admin/student/detail')}}">detail</a></li>
        <li><a href="{{url('/admin/student/update')}}">update</a></li>
        <li><a href="{{url('/admin/student/delete')}}">delete</a></li>
    </ul>
</div>
</body>
</html>
