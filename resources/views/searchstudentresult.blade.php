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
</tr>
@foreach ($results as $reslt)

<tr>
        <td>{{$reslt['id']}}</td>
        <td>{{$reslt['name']}}</td>
        <td>{{$reslt['course_name']}}</td>
</tr>
@endforeach

    </table>
</body>
</html>