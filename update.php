<?php
include_once('db.php');
mysqli_select_db($conn,'hosteldb');
if(isset($_POST['UPDATE'])){
$Id= $_POST['id'];
$FullName= $_POST['name'];
$ParentName= $_POST['name2'];
$Age= $_POST['age'];
$Gender= $_POST['gender'];
$Address= $_POST['address'];
$PhoneNO= $_POST['phone'];

$sql= "UPDATE hosteldb SET `FullName`=`$FullName`, `ParentName`=`$ParentName`,`Age`=$`$Age`,`Gender`=`$Gender`,`PhoneNo`=`$PhoneNO` WHERE `Id`=`$Id`";
$result = $conn->query($sql);
        if ($result === TRUE) {
            echo "Record updated successfully.";
            header("Location: index.php");
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];         
    $sql = "SELECT * FROM hostel WHERE Id='$Id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Id = $row['Id'];
            $FullName= $row['FullName'];
            $ParentName= $row['ParentName'];
            $Age= $row['Age'];
            $Gender= $row['Gender'];
            $Address= $row['Address'];
            $PhoneNO= $row['PhoneNO'];
        }
            ?>
            <center>
            <form action="../update.php" method="post">
        <div class="contener">
        <fieldset> 
            <input type="number" name="Id" value="<?php echo $Id; ?>">
            <h2 style="color:orangered; margin-top:10px;margin-bottom:10px;">Please Update Your Form.</h2>
            <span>Full Name</span> <br><input type="text" name="name" value="<?php echo $FullName; ?>" required><br><br>
            <span>Parent Name</span><br><input type="text" name="name2" value="<?php echo $ParentName; ?>"  required><br><br>
            <span>Age</span><br><input type="text" name="age" value="<?php echo $Age; ?>" required><br><br>
            <span>Gender</span><br><input type="text" name="gender"  value="<?php echo $Gender; ?>" ><br><br>
            <span>Address</span><br><input type="text" name="address" value="<?php echo $Address; ?>"  required><br><br>
            <span>PhoneNO</span><br><input type="text" name="phone" value="<?php echo $PhoneNO; ?>"  required><br><br>
          <input type="submit" value="update" name="update" id="update">  
        </fieldset>
            </center>
            <?php
    }
         else{
            header("Location: index.php");
        } 
}
    ?>
    