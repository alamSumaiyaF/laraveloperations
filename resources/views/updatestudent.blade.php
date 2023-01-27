<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/editstudent" method="POST" >
        @csrf
        <input type="hidden" name="id" value="{{$item['id']}}"><br><br>
        <label>Name</label><br>
        <input type="text" name="name" value="{{$item['name']}}"><br><br>
        <label>Course Name</label><br>
        <input type="text" name="course_name" value="{{$item['course_name']}}"><br><br>
       <input type="submit" value="Submit">
</body>
</html>