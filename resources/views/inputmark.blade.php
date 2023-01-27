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
    <form action="/inserttmark" method="POST" >
        @csrf
        <label>ID</label><br>
        <input type="text" name="id" placeholder="id....."><br><br>
        <label>Student Name</label><br>
        <input type="text" name="student_name" placeholder="student name....."><br><br>
        <label>Number</label><br>
        <input type="text" name="number" placeholder="marks....."><br><br>
        <label>Subject Name</label><br>
        <input type="text" name="subject_name" placeholder="subject name....."><br><br>
        <label>Course</label><br>
        <input type="text" name="course" placeholder="course....."><br><br>
        <label>Highest Mark</label><br>
        <input type="text" name="highest_mark" placeholder="highest mark....."><br><br>
        <label>Student's Photo</label><br>
        <input type="text" name="photo_of_student" placeholder="photo of student....."><br><br>
        <label>Date of mark submission</label><br>
        <input type="text" name="date_of_mark_submission" placeholder="date_of_mark_submission....."><br><br>
        <input type="submit" value="Submit">
        





</form>
</body>
</html>