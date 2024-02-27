<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="insert.php" method="post">
        <div class="contener">
            <label for="Id">Id</label>
        <input type="number" name="id" id="n1"><br>
        <label for="Name">Full Name</label>
        <input type="text" name="name" id="Uname"><br>
        <label for="Parents">Parents Name</label>
        <input type="text" name="name2" id="nane2"><br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age"><br>
        <label for="Gender">Gender</label>
        <input type="text" name="gender"><br>
        <label for="Addreess">Address</label>
        <input type="text" name="address" id="address"><br>
        <label for="Phone">Phone</label>
        <input type="number" name="phone" id="phone"><br>
        <button type="submit" value="Submit">Submit</button>
        </div>
    </form>
</body>
</html>