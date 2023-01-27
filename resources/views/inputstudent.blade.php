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
    <form action="/inserttstudent" method="POST" >
        @csrf
        <label>Name</label><br>
        <input type="text" name="name" placeholder="name....."><br><br>
        <label>Course Name (select option)</label><br>
        <select name="course_name">
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="Food Engieering">Food Engieering</option>
            <option value="Leather Engineering">Leather Engineering</option>

    </select>
        <br><br>
       <input type="submit" value="Submit">
        





</form>
</body>
</html>