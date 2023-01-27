<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Course Name</th>
        <th>Update</th>
        <th>Delete</th>
</tr>
@foreach ($collections as $collection)

<tr>
        <td>{{$collection['id']}}</td>
        <td>{{$collection['name']}}</td>
        <td>{{$collection['course_name']}}</td>
        <td><a href={{"updatestudent/".$collection['id']}}>Update</a></td>
        <td><a href={{"deletestudent/".$collection['id']}}>Delete</a></td>
        <td></td>
</tr>
@endforeach

    </table>
</body>
</html>