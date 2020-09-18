<?php
$title = "Login";
require_once "template/header.php";
?>

<?php
require_once "core/conn.php";
$sql = "SELECT * FROM admin_login";
$query = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($query)){
    if (isset($_GET['login'])){
        if ($row['user_name'] === $_GET['user_name']&& $row['password'] === $_GET['password']){
            header("location:read.php");
        }else if ($row['password'] != $_GET['password']){
            header("location:login.php");
        } else if($row['user_name']!= $_GET['user_name'] && $row['password'] === $_GET['password']){
            echo "<div class=\"aa alert alert-warning alert-dismissible fade show mb-0 text-center h5\" role=\"alert\">
     Invalid <strong>User Name</strong> Please Try Again
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
    </button>
    </div>";
        }
    }
}



?>

<div class="p-5 bg-beauty vh-100">
    <div>
        <img src="assets/img/landing_logo.svg" alt="" class="position-absolute login-img ">
    </div>
    <div class="d-flex align-items-center flex-column">
        <h1 class="text-center pb-5 text-white">Admin Login</h1>
        <form method="get" class="bg-beauty w-25">
            <div class="form-row pb-2">
                <div class="form-group mb-4 col-md-12">
                    <label class="h5 text-white" for="un">User Name</label>
                    <input type="text" name="user_name" class="form-control" id="un" placeholder="" required>
                </div>
                <div class="form-group mb-4 col-md-12">
                    <label class="h5 text-white" for="pw">Password</label>
                    <input type="password" name="password" class="form-control" id="pw" placeholder="" required>
                </div>
            </div>


            <button type="submit" class="btn btn-light text-dark font-weight-bold mt-5 float-right py-2" name="login">Login</button>
            <div class="row mt-5">
                <div class="col-12">
                    <p class="text-light">Don't Have Admin Account? Register <a href="<?php echo $url;?>admin_register.php">Here!</a></p>
                </div>
            </div>
        </form>
    </div>
</div>



<?php require_once "template/footer.php"; ?>
