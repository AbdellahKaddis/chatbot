<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

  <div class="container-fluid">
    <h1 class="text-center text-primary mt-5 mb-3">LOG IN</h1>
    <div class="row justify-content-center">
  <div class="col-3">
  <?php require_once 'connection.php';
    if(isset($_POST['LogIN'])){
        $UserName=$_POST["UserName"];
        $Password=$_POST["Password"];
   
    if(!empty($UserName) && !empty($Password)){
        $stmt=$connection->prepare("select * from Users where UserName=? and Password=?;");
        $stmt->execute([$UserName,$Password]);
        $data=$stmt->fetch(PDO::FETCH_OBJ);
        if($data === false)
        {
            ?>
            <div class="alert alert-danger" role="alert">
           Wrong password or username!
          </div><?php
        }else{
            header('location:chat.php');
        }
    }
    else
    {
        ?>
        <div class="alert alert-danger" role="alert">
        you didn't fill a required field!
      </div><?php
    }
    }
      

    ?>

    <form action="" method="post">
  <div class="mb-3">
    <label for="UserName" class="form-label">UserName</label>
    <input type="text" class="form-control" id="UserName" name="UserName">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" name="Password">
  
  </div>
 
  <button type="submit" name ="LogIN"class="btn btn-primary ">Log In</button>  <a href="SignUP.php" class="text-primary">Sign UP</a>
</form>
  </div>
  <h6 class="text-center " style="position:fixed; bottom:5px;">Developed by Abdellah Kaddis</h6>
    </div>

    
  </div>
</body>
</html>