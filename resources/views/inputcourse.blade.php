<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text],select
        { 
            width:50%;
          padding:5px;
          font-size:15px;
          border:2px solid blue;
          display:inline-block;

        }
        </style>
</head>
<body>
    <form action="/inserttcourse" method="POST" >
        @csrf
        
        <label>Name</label><br>
            <input type="radio" name="name" value="CSE">CS<br>
            <input type="radio" name="name" value="EEE">EEE<br>
            <input type="radio" name="name" value="Food Engieering">Food Engieering<br>
            <input type="radio" name="name" value="Leather Engineering">Leather Engineering<br>

    </select>
        <br><br>
        <label>Student Name</label><br>
        <input type="text" name="student_name" placeholder="student_name....."><br><br>
       <input type="submit" value="Submit">
        





</form>
</body>
</html>