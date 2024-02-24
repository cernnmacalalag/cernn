<?php
    include "conn.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records Page</title>
</head>
<body>

<div class="nav">


<a href="records.php"> View Records </a> |

</div>

<h1>Personal Information</h1>

    <table border="5px solid">

        <tr>
            <th>Id </th>
            <th>Firstname </th>
            <th>Lastname </th>
            <th>Middlename </th>
            <th>Age </th>
            <th>Address </th>
            <th>Section </th>
            <th>School </th>
            <th>Sex</th>
            <th>Year </th>
            <th>Course </th>
        </tr>


        <tr>
            <?php
            $getdata = mysqli_query($conn, "SELECT * FROM tbl_list");

            ?>
            <td> 0111 </td>
            <td> Cernn Gilce </td>
            <td> Macalalag </td>
            <td> Casiple </td>
            <td> 22 </td>
            <td> Igbaras </td>
            <td> UI-FC1-BSIT3-2 </td>
            <td> Phinma UI</td>
            <td> Female </td>
            <td> 3r Year College</td>
            <td> BSIT </td>    
        </tr>


        <tr>
            <td> 0111 </td>
            <td> China Mae </td>
            <td> Sumagaysay </td>
            <td> Labagnao </td>
            <td> 24 </td>
            <td> banate </td>
            <td> UI-FC1-BSIT3-2 </td>
            <td> Phinma UI</td>
            <td> Female </td>
            <td> 3r Year College</td>
            <td> BSIT </td>


        <tr>

        <tr>
            <td> 0111 </td>
            <td> Ma. Avegail </td>
            <td> Montiar</td>
            <td> E. </td>
            <td> 21 </td>
            <td> Oton </td>
            <td> UI-FC1-BSIT3-2 </td>
            <td> Phinma UI</td>
            <td> Female </td>
            <td> 3r Year College</td>
            <td> BSIT </td>




    </table>


</body>
</html>