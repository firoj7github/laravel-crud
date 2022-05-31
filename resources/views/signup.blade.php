<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<form action="{{route('registration')}}" method="post">
  @csrf
       <label for="">Name :</label>
       <input type="text" name='name' placeholder='Enter your Name'>
       <br/>
       <br/>
       <label for="">Email :</label>
       <input type="text" name='email' placeholder='Enter your Email'>
       <br/>
       <br/>
       <label for="">Phone Number :</label>
       <input type="text" name='phone' placeholder='Enter your Phone Number'>
       <br/>
       <br/>
       <button>Submit</button>
   </form>
</body>
</html>