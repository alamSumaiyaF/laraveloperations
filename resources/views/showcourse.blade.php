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
        <th>Student Name</th>
        <th>Update</th>
        <th>Delete</th>
</tr>
@foreach ($items as $item)

<tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['student_name']}}</td>
        <td><a href={{"updatecourse/".$item['id']}}>Update</a></td>
        <td><a href={{"deletecourse/".$item['id']}}>Delete</a></td>
        <td></td>
</tr>
@endforeach

    </table>
</body>
</html>