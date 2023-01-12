<?php include 'header.php';

$del_id = $_GET['id'];


?>


<div id="main-content">
    <h2>Delete Record -  Id No:  <?php  echo $del_id;  ?></h2>
    

     

    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input value="<?php echo $del_id;?>" type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />


      <?php   

     if(isset($_POST['deletebtn'])){
       
        $conn = mysqli_connect("localhost","root","","crudd") or die("connection uncessfull");

        $sql = "DELETE FROM student WHERE sid = {$del_id};";
        
        
        mysqli_query($conn,$sql) or die("query failed");


        header("location: index.php");



     }


     ?>


    </form>
</div>
</div>
</body>
</html>





