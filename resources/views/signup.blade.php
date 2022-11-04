<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <form action="" method="POST">
        {{$errors}}
        @csrf
        <h2>Sign up</h2> 
        <input type="text" class="textbox" name="email" placeholder="Email"><br>
        <input type="text" class="textbox" name="password" placeholder="Password"><br>
        <input class="btn" type="submit" value="Signup">
    </form>
</body>
</html>