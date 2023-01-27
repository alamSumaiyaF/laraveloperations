<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle(1000)

            });

        });
        </script>
        <style>
            #panel{
               display:none;
               background-color:#ffffcc;
               padding:10px;
               border:2px solid #ffff66;
            }

            #flip{

                padding:10px;

            }

            li a{

                font-size:25px;
                color:#008080;
                text-decoration:none;
                
            }


            li a:hover{
                background-color:#79d2a4;

               
            }

            ul{
               list-style-type:none;
            }

            li{
                transition:transform 0.4s;
            }
            li:hover{

                transform:scale(1.1);
            }
            </style>
</head>
<body>
    <div id="flip">
    <h1 style="background-color:SlateBlue;color:white;">Click Here To Access All the Functions</h1>
     </div>
     <div id="panel">
        <ul>
            <li><a href="{{url('inputstudent')}}">Insert new data in students table</a></li>
            <li><a href="{{url('/showstudent')}}">Show the data from students table</a></li>
            <br>
            <li><a href="{{url('/searchstudent')}}">Search from students table</a></li>
            
        </ul><br><br><br>
        <ul>
            <li><a href="{{url('inputcourse')}}">Insert new data in courses table</a></li>
            <li><a href="{{url('/showcourse')}}">Show the data from courses table</a></li>
        </ul><br><br><br>
        <ul>
            <li><a href="{{url('/joinFood')}}">Join tables $ showcase only Food Engineering candidates details</a></li>
            <li><a href="{{url('/joinEEE')}}">Join tables $ showcase only EEE candidates details</a></li>
            <li><a href="{{url('/joinCSE')}}">Join tables $ showcase only CSE candidates details</a></li>
            <li><a href="{{url('/joinLeather')}}">Join tables $ showcase only Leather Engineering candidates details</a></li>
            <li><a href="{{url('/deleteall')}}">Join tables $ show all data of tables in a single place</a></li>
        </ul><br><br><br>
        
        <ul>
            <li><a href="{{url('inputmark')}}">Insert new data in marks table (more than 100 is counted as an invalid input for marks)</a></li>
            <li><a href="{{url('/totalMark')}}">Showing Total Marks of Each of Student</a></li>
            <li><a href="{{url('/markbyOrder')}}">Show the Marks of all the students by Order</a></li>
        </ul><br><br><br>
        <p><b>API integration for "marks" table.<br>
        Code for API is in "MarkController"<br>
        get mark= http://127.0.0.1:8000/api/apigetMark<br>
        post mark= http://127.0.0.1:8000/api/apipostMark<br>
        update/put mark= http://127.0.0.1:8000/api/apiupdateMark<br>
        search mark= http://127.0.0.1:8000/api/apisearchMark/CSE<br>
        delete mark= http://127.0.0.1:8000/api/apideleteMark/Sumaiya Alam<br>
    </b>
     </p>


     </div>
</body>
</html>