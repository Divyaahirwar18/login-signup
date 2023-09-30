<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>registration form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <style type="text/css">
        body {
   
    font-family: 'Poppins', sans-serif;
    background-image: url(phpimg.jpg);
}
#form {
    width: 250px;
    margin: 20vh auto 0 auto;
    padding: 25px;
    background-color: whitesmoke;
    border-radius: 4px black ;
    font-size: 12px;
    border: solid;
    font-family: Algerian;

}
#form h1 {
    color: #0f2027;
    text-align: center;
    text-decoration: underline blue;
    font-family: Algerian;
}
#form button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: rgb(41, 57, 194);
    border: none;
    border-radius: 4px;
    font-family: Algerian;
}
#form button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: rgb(41, 57, 194);
    border: none;
    border-radius: 4px;
}
#form input{
    width: 100%;
    font-family: Algerian;
    font-size: 12px;
}
#form textarea{
    width: 100%;
    font-family: Algerian ;

}
.input-control {
    display: flex;
    flex-direction: column;
    text-align: center;
}

.input-control input {
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    font-size: 12px;
    padding: 10px;
    width: 100%;

}

.input-control input:focus {
    outline: 0;
}


.input-control.error input {
    border-color: #ff3860;
}

.input-control .error {
    color: #ff3860;
    font-size: 9px;
    height: 13px;
}

    </style>
</head>
<body >
    <form id="form" method="POST" action="signconn.php">
        
        <center><h1>SIGNUP</h1></center>
        
        

        <label>Username</label>
        <input type="text" name="username" placeholder="full name"><br>

        <label>Email</label>
        <input type="text" name="email" placeholder="email address"><br>

         <label>Password</label>
        <input type="password" name="password" placeholder="your password"><br>

        <input class="button" type="submit" name="submit">
        <p>Already have account?<a href="quiz-loginform.php">Login</a> </p>
    </form>
</body>
</html>