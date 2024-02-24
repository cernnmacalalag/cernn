<?php
include "conn.php";


if(isset($_POST['personal'])){

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $mn = $_POST['mn'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $sec = $_POST['sec'];
    $school = $_POST['school'];
    $sex = $_POST['sex'];
    $year = $_POST['year'];
    $course = $_POST['course'];





    $insert = mysqli_query($conn, "INSERT INTO tbl_list
    VALUES('0','$fn','$ln','$mn','$age','$address','$sec','$school','$sex','$year','$course')");


if($insert_students == true){
    ?>
    <script>
        alert("Data is Successfully Inserted!");
        window.location.href="index.php";
    </script>
    <?php
}else{
        ?>
    <script>
        alert("Data is not Inserted!\nPlease try again!");
        window.location.href="index.php";
</script>
<?php
       
    }

}



?>