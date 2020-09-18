<?php
$title = "Student Register Form";
require_once "template/header.php";
?>

<?php
 require_once "core/conn.php";


if (isset($_GET['addBtn'])){
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $birth_date = $_GET['birth-date'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $grade = $_GET['grade'];
    $class_room_no = $_GET['class-room-no'];
    $parent_name = $_GET['parent-name'];
    $nrc = $_GET['nrc'];
    $township = $_GET['township'];

    $sql = "INSERT INTO students_info(name,phone_no,gender,grade,class_room_no,birth_date,age,nrc_no,parent_name,township)
                        VALUES ('$name','$phone','$gender','$grade','$class_room_no','$birth_date','$age','$nrc','$parent_name','$township')";
    if (mysqli_query($conn,$sql)){
        header('location:read.php');
    }else{
        echo "Create Fail: ";
    }
}

?>

    <div class="p-5 bg-beauty vh-100">
        <h1 class="text-center pb-5 text-white">Student Registration</h1>
        <form method="get" class="bg-beauty">
            <div class="form-row pb-4">
                <div class="form-group mb-4 col-md-3">
                    <label class="h5 text-white" for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="" required>
                </div>
                <div class="form-group mb-4 col-md-3">
                    <label class="h5 text-white" for="ph">Phone</label>
                    <input type="text" name="phone" class="form-control" id="ph" placeholder="" required>
                </div>
                <div class="form-group mb-4 col-md-3">
                    <label class="h5 text-white" for="bd">Birth Date</label>
                    <input type="text" name="birth-date" class="form-control" id="bd" placeholder="" required>
                </div>
                <div class="form-group mb-4 col-md-3">
                    <label class="h5 text-white" for="age">Age</label>
                    <input type="number" name="age" class="form-control" id="age" placeholder="" required">
                </div>
            </div>
            <div class="form-row pb-4">
                <div class="form-group mb-4 col-md-3">
                    <label class="h5 text-white" for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option name="gender" value="male">Male</option>
                        <option name="gender" value="female">Female</option>
                    </select>
                </div>
                <div class="form-group mb-4 col-md-3">
                    <label class="h5 text-white" for="grade">Grade</label>
                    <select name="grade" id="grade" class="form-control">
                        <option name ="grade" value="1">Grade-1</option>
                        <option name ="grade" value="2">Grade-2</option>
                        <option name ="grade" value="3">Grade-3</option>
                        <option name ="grade" value="4">Grade-4</option>
                        <option name ="grade" value="5">Grade-5</option>
                        <option name ="grade" value="6">Grade-6</option>
                        <option name ="grade" value="7">Grade-7</option>
                        <option name ="grade" value="8">Grade-8</option>
                        <option name ="grade" value="9">Grade-9</option>
                        <option name ="grade" value="10">Grade-10</option>
                        <option name ="grade" value="11">Grade-11</option>
                    </select>
                </div>
                <div class="form-group mb-4 col-md-3">
                    <label class="h5 text-white" for="cr">Class Room</label>
                    <select name="class-room-no" id="cr" class="form-control">
                        <option name ="class-room-no" value="a">A</option>
                        <option name ="class-room-no" value="b">B</option>
                        <option name ="class-room-no" value="c">C</option>
                        <option name ="class-room-no" value="d">D</option>
                        <option name ="class-room-no" value="e">E</option>
                    </select>
                </div>
                <div class="form-group mb-4 col-md-3">
                    <label class="h5 text-white" for="pn">Parent Name</label>
                    <input type="text" name="parent-name" class="form-control" id="pn" placeholder="" required>
                </div>
            </div>
            <div class="form-row pb-4">
                <div class="form-group mb-4 col-md-4">
                    <label class="h5 text-white" for="nrc">NRC</label>
                    <input type="text" name="nrc" class="form-control" id="nrc" placeholder="" required>
                </div>
                <div class="form-group mb-4 col-md-8">
                    <label class="h5 text-white" for="ts">Township</label>
                    <input type="text" name="township" class="form-control" id="ts" placeholder="" required>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between create-btn-control mt-5">
                    <a href="<?php echo $url;?>read.php" class="text-light text-center" title="Back To Student Info">
                        <svg width="3em" height="2.5em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
                        </svg>
                    </a>
                <button type="submit" class="btn btn-light text-dark font-weight-bold float-right py-2" name="addBtn">Add Student</button>
            </div>
        </form>
    </div>

<?php require_once "template/footer.php"; ?>