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
   <td>{{$user['Id']}}
   </tr>
    <tr>
    <td>Name</td>
    <td>{{$user['Name']}}</td>
    </tr>
    <tr>
    <td>Password </td>
    <td>{{$user['Password']}}</td>
    </tr>
    <tr>
    <td>Email</td>
    <td>{{$user['Email']}}</td>
    </tr>
    <tr>
    <td>Type</td>
    <td>{{$user['Type']}}</td>
    </tr>
     
    
   
    
    </table>
    
   
    
</body>
</html>