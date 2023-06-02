<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Login page</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
  outline: none;
  border: none;
  
}

body {
    

  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image: url('../images/solarPack/Solar\ Cell\ Icon.svg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.box {
  width: 90%;
  max-width: 900px;
  height: 50vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #fff;
  box-shadow: 0 0 15px #00000033;
  border-radius: 15px;
  overflow: hidden;
}

.design {
  width: 50%;
  height: 100%;
  position: relative;
}

.design div:first-child {
  width: 20%;
  height: 9%;
  border-radius: 50px;
  background: linear-gradient(-90deg, #7f379b, #ff6a85);
  transform: rotate(45deg);
  position: absolute;
  top: -8%;
  left: 12%;
}

.design div:nth-child(2) {
  width: 50%;
  height: 55%;
  border-radius: 200px;
  background: linear-gradient(-90deg, #7f379b, #ff6a85);
  transform: rotate(45deg);
  position: absolute;
  top: 0;
  left: -52%;
  border: 6% solid #e2c4e0;
}

.design div:nth-child(3) {
  width: 20%;
  height: 7%;
  border-radius: 50px;
  background: linear-gradient(-90deg, #7f379b, #ff92a6);
  transform: rotate(45deg);
  position: absolute;
  bottom: 15%;
  left: -28%;
}

.design div:last-child {
  width: 20%;
  height: 7%;
  border-radius: 50px;
  background: linear-gradient(-90deg, #7f379b, #ffa26c);
  transform: rotate(45deg);
  position: absolute;
  bottom: -13%;
  left: 12%;
}

.form {
  width: 50%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding: 0 7.5%;
}

.form h2 {
  margin-bottom: -10px;
}

.input-field {
  width: 100%;
  height: 40px;
  border-radius: 5px;
  margin: 10px 0;
  padding: 15px;
  font-size: 1em;
  color: #000;
  background-color: #e2c4e0;
  letter-spacing: 1px;
}

.input-field::placeholder {
  color: #303030;
}

.btn {
  width: 100%;
  height: 40px;
  background-color: #7f379b;
  color: #fff;
  border-radius: 5px;
  margin: 20px 0;
  font-size: 1.2em;
  cursor: pointer;
  transition: all 0.3s ease;
  }
  
  .btn:hover {
  background-color: #5e1d71;
  }
  
    </style>
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
            <h2>Site Owner LOGIN</h2>
            <form action="/owner-login" method="POST">
                @csrf
                <input type="email" name="username" class="input-field" placeholder="Username" />
                <input type="password" name="password" class="input-field" placeholder="Password" />
                <input type="text" name="token" class="input-field" placeholder="Verification code" required/>
                <input type="submit" class="btn" value="LOGIN">
            </form>
        </div>
    </section>
</body>
</html>