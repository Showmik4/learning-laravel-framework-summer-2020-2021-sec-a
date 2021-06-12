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
    <td>Id</td>
    <td>Name</td>
    <td>Password</td>
    <td>Email</td>
    <td>Type</td>
     <td>Action</td>  
    </tr>
 @foreach ($userlist as $user ) 
    

    <tr>
        <td>{{$user['Id']}}</td>
        <td>{{$user['Name']}}</td>
        <td>{{$user['Password']}}</td>
        <td>{{$user['Email']}}</td>
        <td>{{$user['Type']}}</td>
        <td>
           <a href="/Details/{{$user['Id']}}">Details</a>
           <a href="/Edit/{{$user['Id']}}">Edit</a>
           <a href="/Delete/{{$user['Id']}}">Delete</a>

        </td>
       
        </tr>
    
   @endforeach
    
    </table>
    
    
    
    
</body>
</html>