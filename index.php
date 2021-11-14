<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="log-form">
    <form action="logform.php" method="POST">
       
        <div class="container">
        <div class="row">
        <div class="col col-12 col-sm-4">
        <table class="table">
        <h1 style="text-align:center">LOGIN FORM</h1> 
                       
                  
        <table class="table">
        <tr>
            <td>Name</td>
            <td><input type="text" class="form-control"
             name="name" placeholder ="Name" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" class="form-control"
            name="email" placeholder ="Email" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" class="form-control"
            name="password" placeholder ="Password" required></td>
       </tr>  
        <tr>
            <td>Mobile</td>
            <td><input type="text" class="form-control"
            name="mobile" placeholder ="Mobile" required></td>
        </tr>
        
        <tr>
            <td></td>
            <td><button class="btn btn-success">Login</button></td>
        </tr>
    </table>
</div>
</div>
</div>
</form>
</div>
</body>
</html>