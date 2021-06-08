<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    
        
    <table border="1">
    <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Password</td>
    <td>Email</td>
    <td>phone</td>
     <td>Action</td>  
    </tr>
 @foreach ($userlist as $user ) 
    

    <tr>
        <td>{{$user[0]}}</td>
        <td>{{$user[1]}}</td>
        <td>{{$user[2]}}</td>
        <td>{{$user[3]}}</td>
        <td>{{$user[4]}}</td>
        <td>
           <a href='/Details'>Details</a>
           <a href='/Edit'>Edit</a>
           <a href='/Delete'>Delete</a>

        </td>
       
        </tr>
    
   @endforeach
    
    </table>
    
    
    
    
</body>
</html>