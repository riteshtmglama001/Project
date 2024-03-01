<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
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
    margin: 120px 100px 100px 100px;
    width: 400px;
    padding: 6px 12px 12px 27px;
    border-radius: 12px;
    border: 2px solid rgb(255, 255, 255, 0.3);
}
h2{
    margin: 10px 8px 30px 8px;
    color: red;
}
#Login{
    margin: 6px 6px 6px 24px ;
    width: 60px;
    padding: 5px;
    font-size: 16px;
    font-weight: 600;
    font-family: sans-serif;
    border-radius: 10px;
    background-color: rgb(250, 100,0,0.3);
}
#Login:hover{
    background-color: aquamarine;
}
.register{
    color: #ddd;
    font-size: 20px;
    font-style: bold;
}
#name{
    width: 200px;
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
        }
    </style>
</head>
<body>
    <div class="main">
        <div><h2>Login Here</h2></div>
    <div class="register">
    <form action="logindb.php" method="post">
    <div>
        <label for="Email">Email</label><br>
        <input type="email" name="name2" id="name"></div><br>
        <div>
        <label for="Password">Password</label><br>
        <input type="password" name="Password" id="name">
        </div><br>
        <div>
        <a href="index.php"><input type="submit" value="Login" id="Login"></a>
        </div><br>
    </form>
    </div>
    </div>
    
</body>
</html>