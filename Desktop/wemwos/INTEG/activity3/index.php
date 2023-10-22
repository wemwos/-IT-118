<!DOCTYPE html>
<html>

<head>
    <title>User Registration Form</title>
</head>

<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form action="register.php" method="post">

            <input type="text" id="username" name="username" placeholder="Type Username Here" required
                class="input"><br><br>
            <input type="email" id="email" name="email" placeholder="Type Email Here" required class="input"><br><br>
            <input type="password" id="password" name="password" placeholder="Type Password Here" required
                class="input"><br><br>
            <input type="submit" value="register" class="custom-button">

    </div>
</body>
<style>
    body {
        background-color: #cfcfcf;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background-color: #313232;
        border-radius: 10px;
        width: 350px;
        padding: 40px;
        box-shadow: 0 0 10px rgba(179, 171, 171, 0.2);
    }

    h1 {
        color: white;
        font-size: x-large;
        font-family: Verdana;
    }

    .input {
        width: 95%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ffffff;
        border-radius: 4px;
        background-color: #c7cbcf;
        color: #000;
        /* Set the text color */
    }

    .custom-button {
        background-color: #171818;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .custom-button:hover {
        background-color: #909498;
    }
</style>