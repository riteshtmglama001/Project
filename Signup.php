<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>
    <style>*{
    padding: 0px;
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
    margin: 120px 100px 100px 70px;
    width: 270px;
    padding: 6px 12px 12px 27px;
    border-radius: 12px;
    border: 2px solid rgb(255, 255, 255, 0.3);
}
h2{
    margin: 10px 8px 30px 52px;
    color: white;
}
#submit{
    margin: 4px 4px 4px 24px ;
    width: 100px;
    padding: 5px;
    font-size: 16px;
    font-weight: 600;
    font-family: sans-serif;
    border-radius: 3px;
    background-color: rgb(250, 100,0,0.3);
}
.register{
    font-size: 20px;
    font-style: bold;
    color: #ddd;
}
#name{
    width: 250px;
    border: 1px solid #ddd;
    border-radius: 3px;
    padding: 4px;
    outline: 0;
    background-color: #fff;
    box-shadow: inset 1px 1px 5px rgba(100, 0, 0 ,0.8);
}
@media(max-width:800px){
    body{background-image: url('im.jpeg');
    background-size: cover;
}
#submit:hover{
    background-color: burlywood;
    color: rgb(107, 98, 98);
}
}
    </style>
    <a href="login.php"></a>
</head>
<body>
    <div class="main">
        <div><h2>Register Here</h2></div>
        <div class="register">
        <form action="dataB.php" method="post">
        <div>
    <label for="Full Name">Full Name</label><br>
    <input type="text" id="name" name="name">
            </div><br>
            <div>
            <label for="Death of Birth">Death of Birth</label><br>
    <input type="text" id="name" name="DOB"><br>
    
            </div><br>
            <div>
            <label for="Phone.NO.">Phone.NO.</label><br>
    <input type="number" id="name" name="number">
            </div>
            <div>
                <div><label for="Gender">Gender</label>
                <br>&nbsp;
                <label for="Male">Male</label>
                <input type="radio" name="gender" id="Male">&nbsp;&nbsp;
                <label for="Female">Female</label>
            <input type="radio" name="gender" id="Female">&nbsp;&nbsp;
        <label for="Other">Other</label>
    <input type="radio" name="gender" id="Other"></div><br>
    <div>
    <label for="User Name">User Name</label><br>
    <input type="email" id="name" name="name2">
            </div><br>
            <div>
    <label for="password">password</label><br>
    <input type="password" id="name" name="Pass">
            </div><br>
        <div>
    <input type="submit"  value="SignUp" id="submit">
    </div>
    </form>
</div>
    </div>
    </div>
</body>
</html>
