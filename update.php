<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>*{
    padding: 4px;
    margin: 1px;
    text-align:center;
    text-decoration: none;
    list-style: none;
}

body{
    background-image: url(im.jpeg);
    text-align: right;
}

#submit{
    width: 100px;
    text-shadow: 2px;
    border-radius: 5px;
    margin-bottom: 20px;
    color: white;
    font-size: 15px;
    background-color: blue;
    
}
#submit:hover{
   
    background-color: burlywood;
    color: rgb(107, 98, 98);
}
.register{
    color: aliceblue;
    font-size: 20px;
    font-style: bold;
}
.main{
    background-color: rgba(0,100,0, 0.3);
    display: inline-block;
    width: 800px;
    padding: 6px 12px 12px 27px;
    border-radius: 12px;
    color: aliceblue;
    border: 3px solid rgb(255, 255, 255, 0.3);
  }
  @media(max-width:800px){
    body{background-image: url('im.jpeg');
    background-size: cover;
}
  }
</style>
</head>
<body>
</body>
</html>



<?php
include "db.php";
mysqli_select_db($conn, "hosteldb");

    if (isset($_POST['update'])) {
        $Id = $_POST['Id'];
        $FullName = $_POST['name'];
        $ParentName = $_POST['name2'];
        $Age = $_POST['age'];
        $Gender = $_POST['gender'];
        $Address = $_POST['address'];
        $PhoneNO = $_POST['Phone'];

        $sql = "UPDATE `hostel` SET `FullName`=`$FullName`,`PAREName`=`$ParentName`,
        `Age`=`$Age`,`Gender`=`$Gender`,`Address`=`$Address`,`PhoneNO`=`$PhoneNO`WHERE `Id`=`$Id`";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
            header('Location: index.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    }

if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];         
    $sql = "SELECT * FROM hostel WHERE Id='$Id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Id = $row['Id'];
            $firstname= $row['FullName'];
            $ParentName = $row['ParentName'];
            $Age = $row['Age'];
            $Gender = $row['Gender'];
            $Address = $row['Address'];
            $PhoneNO = $row['PhoneNO'];
        }
    ?>
 <right>
<div class="main">
        <form action="../edit.php" method="POST" id="add">
        <fieldset> 
            <div class="register">
            <input type="hidden" name="Id" value="<?php echo $id; ?>">
            <h2 style="color:orangered; margin-top:10px;margin-bottom:10px;">Update Your Form</h2>
            <span>Full Name</span> <br><input type="text" name=`name` value="<?php echo $firstname; ?>" required><br><br>
            <span>Parent Name</span><br><input type="text" name=`name2` value="<?php echo $ParentName; ?>"  required><br><br>
            <span>Age</span><br><input type="number" name=`age` value="<?php echo $Age; ?>" required><br><br>
            <span>Gender</span><br><input type="text" name=`gender`  value="<?php echo $Gender; ?>" ><br><br>
            <span>Address</span><br><input type="text" name=`address` value="<?php echo $Address; ?>"  required><br><br>
            <span>Phone NO</span><br><input type="number" name=`phone` value="<?php echo $PhoneNO; ?>"  required><br><br>
            <input type="submit" value="update" name="update" Id="submit">
            <a href="info.php"></a>
        </fieldset>
        </form> 
        </div>
        </div>
    </right>
    <?php
    } else{
        header('Location: info.php');
    }
}
?>