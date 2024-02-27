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
    background-image: url('p2.jpeg');
}

.table1{
    background-color:white;
    width: 100%;
    animation: borde 3s infinite;
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
    margin-top:-50px;
}

#hero{
    animation: borde 3s infinite;
}

    </style>
</head>
<body>
<section style="margin: 50px 0;">
        <div class="container">
            <table class="table1" border="1">
                <thead>
                  <tr>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">Id</th>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">FulltName</th>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">ParentName</th>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">Age</th>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">Gender</th>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">Address</th>
                    <th scope="col" style="background-color:darkgray; color:white; padding:10px;">PhoneNO</th>
                    <th scope="col" style="background-color:green;">Edit</th>
                    <th scope="col" style="background-color:green;">Delete</th>
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
              width:80px;font-size:30px; margin-top:100px;background-color:darkgray;color:white;"></a>
              <p> If You Want to add a new data click Add button.</p> 
              </center>
        </div>
    </section>
</body>
</html>