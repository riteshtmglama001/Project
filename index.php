<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    padding: 0px;
    margin: 0px;
    text-decoration: none;
    list-style: none;
}

body{
    background-image: url('im.jpeg');
}
h2{
    color: white;
    margin:auto;
    padding: 20px;
}

.table1{
    background-color:black;
    width: 100%;
}
@keyframes borde {
  0%{
    border:solid red;
  }
  50%
  {
    border: solid blue;
  }
  100%{
    border:solid green;
  }
}
.table1 td{
    background-color: grey;
    padding:10px;
    text-align:center;
}
.container{
    margin:-50px 50px 50px 50px;
    border: 2px;
    border-radius: 20px;
    border-bottom:20px ;
    color: aliceblue;
    
}
.p{
    font-size: 18px;
    color: aliceblue;
}


    </style>
</head>
<body>
    <div><h2>Record of the Students who live in hostle</h2></div>
<section style="margin: 50px 0;">
<div class="container">
            <table class="table1" border="2">
                <thead>
                  <tr>
                    <th scope="col" style="background-color:whitesmoke; color:black; padding:10px;">Id</th>
                    <th scope="col" style="background-color:whitesmoke; color:black; padding:10px;">FulltName</th>
                    <th scope="col" style="background-color:whitesmoke; color:black; padding:10px;">ParentName</th>
                    <th scope="col" style="background-color:whitesmoke; color:black; padding:10px;">Age</th>
                    <th scope="col" style="background-color:whitesmoke; color:black; padding:10px;">Gender</th>
                    <th scope="col" style="background-color:whitesmoke; color:black; padding:10px;">Address</th>
                    <th scope="col" style="background-color:whitesmoke; color:black; padding:10px;">PhoneNO</th>
                    <th scope="col" style="background-color:green;">Action</th>
                    <th scope="col" style="background-color:green;">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "db.php";
                        mysqli_select_db($conn, "hosteldb");
                        $sql_query = "SELECT * FROM hostel";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $Id = $row['Id'];
                                $FullName= $row['FullName'];
                                $ParentName= $row['ParentName'];
                                $Age= $row['Age'];
                                $Gender= $row['Gender'];
                                $Address= $row['Address'];
                                $PhoneNO= $row['PhoneNO'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $FullName; ?></td>
                        <td><?php echo $ParentName; ?></td>
                        <td><?php echo $Age; ?></td>
                        <td><?php echo $Gender; ?></td>
                        <td><?php echo $Address; ?></td>
                        <td><?php echo $PhoneNO; ?></td>
                        <td><a href="update.php?Id=<?php echo $Id;?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?Id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                        
                    <?php
                        } 
                        } 
                    ?>
                    
                </tbody>
              </table>
              <center>
              <a href="connect.php"><input type="Text" value="Add" Id="hero" style="cursor:pointer; padding:10px;
              width:70px;font-size:30px; margin-top:100px;background-color:whitesmoke;color:black;text-align:center;border-radius:10px;
              ;"></a>
              <p> If You Want to add a new data click Add button.</p> 
              </center>
        </div>
    </section>
</body>
</html>