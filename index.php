<?php
include 'header.php';
?>



<div id="main-content">
    <h2>All Records</h2>
<?php
$conn = mysqli_connect("localhost","root","","crudd") or die("connection uncessfull");

$sql = "SELECT * FROM student";


$result = mysqli_query($conn,$sql) or die("query failed");

if(mysqli_num_rows($result) > 0){
?>

<table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

          <?php 

           while($row = mysqli_fetch_assoc($result)){


            ?>

            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['sclass']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                    <a href='delete.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                </td>
            </tr>


            <?php  } ?>
          
              
        </tbody>
    </table>


    <?php } 
    
    mysqli_close($conn);
    
    
    ?>

    
</div>
</div>
</body>
</html>
