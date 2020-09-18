<?php
$title = "Student Info";
require_once "template/header.php";
?>


<div class="p-3">
    <div class="d-flex align-items-center justify-content-between my-2">
        <i class="ml-2 h1 text-light font-weight-bolder">MMS</i>
        <h2 class="text-light font-weight-bold">Students Info</h2>
        <a href="<?php echo $url;?>create.php" class="btn btn-dark text-center" title="Student Add">
            <svg width="1.4em" height="2em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
        </a>
    </div>
    <table class="table table-bordered table-dark bg-beauty border border-light rounded overflow-hidden">
        <thead>
        <tr>
            <th class="text-center" scope="col">ID</th>
            <th class="text-center" scope="col">Name</th>
            <th class="text-center" scope="col">Phone</th>
            <th class="text-center" scope="col">Gender</th>
            <th class="text-center" scope="col">Grade</th>
            <th class="text-center" scope="col">Room</th>
            <th class="text-center" scope="col">Birth-date</th>
            <th class="text-center" scope="col">Age</th>
            <th class="text-center" scope="col">NRC</th>
            <th class="text-center" scope="col">Parent Name</th>
            <th class="text-center" scope="col">Township</th>
            <th class="text-center" scope="col">Create Time</th>
            <th class="text-center" scope="col">Delete</th>
            <th class="text-center" scope="col">Edit</th>

        </tr>
        </thead>
        <tbody>

        <?php

        require_once "core/conn.php";
        $sql = "SELECT * FROM students_info";
        $query = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_assoc($query)){
            $class_room_upper = strtoupper($row['class_room_no']);
            $gender_upper = ucfirst($row['gender']);
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['phone_no']}</td>";
            echo "<td>{$gender_upper}</td>";
            echo "<td>{$row['grade']}</td>";
            echo "<td>{$class_room_upper}</td>";
            echo "<td>{$row['birth_date']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "<td>{$row['nrc_no']}</td>";
            echo "<td>{$row['parent_name']}</td>";
            echo "<td>{$row['township']}</td>";
            echo "<td>{$row['created_at']}</td>";
            echo "<td class='text-center'><a href='delete.php?id={$row['id']}' class='delete'><svg color='red' width=\"1.5em\" height=\"1.3em\" viewBox=\"0 0 16 16\" class=\"bi bi-trash\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
  <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
</svg></a></td>";
            echo "<td class='text-center'><a href='update.php?id={$row['id']}'><svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-pencil-square\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
  <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
  <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
</svg></a></td>";
            echo "</tr>";
        }
        ?>

        </tbody>
    </table>

    <div class="mb-5">
        <a href="<?php echo $url;?>login.php" class="btn btn-dark float-right">Logout</a>
    </div>
</div>

<?php require_once "template/footer.php"; ?>