<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 500px;
            padding: 20px;
            width: 90%;
        }
        
        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            border: none;
            border-radius: 5px;
            box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            padding: 10px;
            width: 100%;
        }
        
        button[type="submit"] {
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            padding: 10px;
            width: 100%;
        }
        
        h2{
            text-align: center;
            background-color: #4CAF50;
            margin: auto;
        }
        @media screen and (max-width: 600px) {
            form {
                margin: 20px auto;
                width: 95%;
            }
            
            input[type="text"],
            input[type="email"],
            input[type="password"] {
                font-size: 14px;
                padding: 8px;
            }
            
            button[type="submit"] {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <h2>Create An Account </h2>
    <form action="signup" method="POST">
        @csrf
        <label for="name">Username:</label>
        <input type="text" id="user" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
