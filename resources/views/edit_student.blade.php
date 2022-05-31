<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('update_student', $data->id ??'')}}" method="GET">
  
       <label for="">Name :</label>
       <input type="text" name='name' placeholder='Enter your Name' value="{{$data->name ??''}}">
       <br/>
       <br/>
       <label for="">Email :</label>
       <input type="text" name='email' placeholder='Enter your Email' value="{{$data->email ??''}}">
       <br/>
       <br/>
       <label for="">Phone Number :</label>
       <input type="text" name='phone' placeholder='Enter your Phone Number' value="{{$data->phone ??''}}">
       <br/>
       <br/>
       <button>update</button>
   </form>  
</body>
</html>