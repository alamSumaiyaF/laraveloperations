<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inserttphoto" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Image</label><br><input type="file" name="image[]" id="image[]" multiple=""><br>
        <label>Student Name</label><br><input type="text" name="student_name" id="student_name"><br>
        <button type="submit">Upload Image</button>
    </form>
    <h1></h1>
</body>
</html>