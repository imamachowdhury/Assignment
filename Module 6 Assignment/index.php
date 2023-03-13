<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="user.php" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
        <br>
        <label for="profile_picture">Profile Picture</label>
        <input type="file" name="profile_picture" id="profile_picture" accept="image/*" multiple required>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>