<?php
$title = "Admin Register";
require_once "template/header.php";
?>

<?php

require_once "core/conn.php";

if (isset($_GET['createAcc'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $user_name = $_GET['user_name'];
    $password =$_GET['password'];
    $password_verify = $_GET['password_verify'];
    if ($password===$password_verify){
        $sql = "INSERT INTO admin_login(name,user_name,password,gmail) VALUES ('$name','$user_name','$password_verify','$email')";
        if (!mysqli_query($conn,$sql)){
            echo "Insert fail: ".mysqli_error();
        }else{
            header("location:login.php");
        }
    }else{
        echo "<div class=\"aa alert alert-warning alert-dismissible fade show mb-0 text-center h5\" role=\"alert\">
    <strong></strong> Your Password is Wrong Try Again
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
    </button>
    </div>";

    }


}


?>

<div class="p-5 bg-beauty vh-100 d-flex align-items-center flex-column">
    <h1 class="text-center pb-5 text-white">Admin Registration</h1>
    <form method="get" class="bg-beauty w-25">
        <div class="form-row pb-2">
            <div class="form-group mb-4 col-md-12">
                <label class="h5 text-white" for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="" required>
            </div>
            <div class="form-group mb-4 col-md-12">
                <label class="h5 text-white" for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="" required">
            </div>
            <div class="form-group mb-4 col-md-12">
                <label class="h5 text-white" for="un">User Name</label>
                <input type="text" name="user_name" class="form-control" id="un" placeholder="" required>
            </div>
            <div class="form-group mb-4 col-md-12">
                <label class="h5 text-white" for="pw">Password</label>
                <input type="password" name="password" class="form-control" id="pw" placeholder="" required>
            </div>
            <div class="form-group mb-4 col-md-12">
                <label class="h5 text-white" for="pw">Confirm Password</label>
                <input type="password" name="password_verify" class="form-control" id="pw" placeholder="" required>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between create-btn-control mt-2">
            <a href="<?php echo $url;?>login.php" class="text-light text-center mt-2" title="Back To Login">
                <svg width="3em" height="2.5em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                </svg>
            </a>
            <button type="submit" class="btn btn-light text-dark font-weight-bold  float-right py-2" name="createAcc">Create Account</button>

        </div>
    </form>
</div>
<?php require_once "template/footer.php"; ?>

