<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
    $image=DB::table('photos')->where('id',1)->first();
    $images=explode('|','$image');
    @endphp
    @foreach($images as $item)
    
        <img src="{{asset($item)}}" alt="ffgg" height="300px">
    
    @endforeach
</body>
</html>