<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="searchstudentresult" method="POST">
        @csrf
        <input type="search" name="search" placeholder="search............">
        <button type="submit">Search</button>
    </form>
</body>
</html>