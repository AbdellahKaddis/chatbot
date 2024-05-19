<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign IN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <h1 class="text-center text-primary mt-5 mb-3">Sign UP</h1>
    <div class="row justify-content-center">
  <div class="col-3">
  <?php
  require_once 'connection.php';
if(isset($_POST["SignUP"]))
{
    $UserName=$_POST["UserName"];
    $Password=$_POST["Password"];
    $ConfirmPassword=$_POST["ConfirmPassword"];
    if(!empty($UserName) && !empty($Password)&&!empty($ConfirmPassword) )
    {
        if($Password === $ConfirmPassword)
        {
            $stmt=$connection->prepare("select * from Users where UserName=?;");
            $stmt->execute([$UserName]);
            $data=$stmt->fetch(PDO::FETCH_OBJ);

            if($data === false)
            {
                $query=$connection->prepare("insert into  Users values (null,?,?);");
                $query->execute([$UserName,$Password]);
                header('location:index.php');
            }
            else{
                ?>
                <div class="alert alert-danger" role="alert">
                <?=$UserName  ?>this username already exist!
              </div><?php
            }

        }
        else{?>
            <div class="alert alert-danger" role="alert">
  password doesn't match!
</div><?php
        }
    }
    else
    {?>
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
  <div class="mb-3">
    <label for="Confirm Password" class="form-label">ConfirmPassword</label>
    <input type="password" class="form-control" name="ConfirmPassword">
  </div>
 
  <button type="submit" name ="SignUP"class="btn btn-primary ">Sign UP</button>
</form>
<h6 class="text-center " style="position:fixed; bottom:5px;">Developed by Abdellah Kaddis</h6>
  </div>
    </div>
</body>
</html>