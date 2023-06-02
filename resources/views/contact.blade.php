<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .design {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40%;
            height: 100%;
            background-color: #01579b;
        }
        
        .design div {
            width: 30px;
            height: 30px;
            margin: 10px;
            border-radius: 50%;
            background-color: #fff;
            animation: pulse 1s ease-in-out infinite alternate;
        }
        
        .design div:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .design div:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        .design div:nth-child(4) {
            animation-delay: 0.6s;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.2);
            }
        }
        
        .form {
            width: 60%;
            max-width: 500px;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #01579b;
        }
        
        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        input[type="address"] {
            display: block;
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
        }
        
        input[type="submit"] {
            background-color: #01579b;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #003a6c;
        }
        
        @media screen and (max-width: 768px) {
            .box {
                flex-direction: column;
            }
        
            .design {
                width: 100%;
                height: auto;
            }
        
            .form {
                width: 100%;
            }
        }
    </style>
    <title>Contact Us</title>
</head>
<body>
    <section class="box">
        <div class="design">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="form">
            <h2>Connect with Us</h2>
            <div class="form">
                <form action="submit-form" method="POST">
                @csrf
                    <input type="text" name="name" class="input-field" placeholder="Name" />
                    <input type="email" name="email" class="input-field" placeholder="Email address" />
                    <input type="number" name="phone" class="input-field" placeholder="Phone" />
                    <input type="address" name="address" class="input-field" placeholder="Address" />
                    <input type="number" name="offer" class="input-field" placeholder="Offer Calculated" />
                    <input type="date" name="date" class="input-field" placeholder="Planned Installing Date" />
                    <input type="submit" class="btn" value="SUBMIT">
                </form>
            </div>
        </div>
    </section>
</body>
</html>
