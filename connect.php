<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <link rel="stylesheet" href="/style/style.css">
    <style>*{
            padding: 5px;
    margin: 0px;
    text-decoration: none;
    list-style: none;
}

body{
    background-image: url('im.jpeg');
    font-family: sans-serif;
    background-size: 100%;
    text-align: center;

}
.main{
    background-color: rgba(0,100,0, 0.3);
    display: inline-block;
    margin: auto;
    width: 300px;
    padding: 6px 12px 12px 27px;
    border-radius: 12px;
    border: 1px solid rgb(255, 255, 255, 0.3);
}
h2{
    margin:auto;
    padding: 20px;
    color: white;
}
#submit{
    margin: 8px 8px 8px 24px ;
    width: 200px;
    padding: 5px;
    font-size: 16px;
    font-weight: 600;
    font-family: sans-serif;
    border-radius: 1px;
    background-color: rgb(250, 100,0,0.3);
}
.register{
    color: #fff;
    font-size: 20px;
    font-style: bold;
}
#name{
    width: 200px;
    border: 1px solid #ddd;
    border-radius: 1px;
    padding: 4px;
    outline: 0;
    background-color:whitesmoke;
    box-shadow: inset 1px 1px 5px rgba(100, 0, 0 ,0.8);
}
@media(max-width:800px){
    body{background-image: url('im.jpeg');
    background-size: cover;
}
            
    }
    
        
    </style>
</head>
<body ><div class="main">
<form action="insert.php" method="post">
            <div class="register">
                <div><h2>Registation Form</h2></div>
        <div>
        <label for="Name">Full Name</label><br>
        <input type="text" name="name" id="Uname"></div><br>
        <div>
        <label for="Parents">Parents Name</label><br>
        <input type="text" name="name2" id="nane2">
        </div><br>
        <div>
        <label for="age">Age</label><br>
        <input type="number" name="age" id="age">
        </div><br>
        <div>
        <label for="Gender">Gender</label><br>
        <input type="text" name="gender">
        </div><br>
        <div>
        <label for="Addreess">Address</label><br>
        <input type="text" name="address" id="address">
        </div><br>
        <div>
        <label for="Phone">Phone</label><br>
        <input type="number" name="phone" id="phone">
        </div><br><div>
        <button type="submit" value="Submit">Submit</button>
        </div>
            </div>
           
        </div>
    </form>
</div>
    
</body>
</html>