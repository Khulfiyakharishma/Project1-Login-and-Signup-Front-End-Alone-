<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Roboto, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
            background: linear-gradient(120deg, rgb(40, 157, 210), rgb(66, 18, 179));
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center {
            width: 90%;
            max-width: 400px;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .center h1 {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 0%;
            color: white;
            padding: 15px;
            background: linear-gradient(120deg, rgb(40, 157, 210), rgb(66, 18, 179));
            border-radius: 10px 10px 0 0;
        }

        .center form {
            display: flex;
            flex-direction: column;
        }

        .txt_field {
            position: relative;
            margin: 30px 0;
        }

        .txt_field input {
            width: 100%;
            padding: 10px 5px;
            font-size: 16px;
            border: 2px solid #adadad;
            border-radius: 5px;
            background: none;
            outline: none;
        }

        .txt_field label {
            position: absolute;
            top: 50%;
            left: 10px;
            color: rgb(40, 157, 210);
            transform: translateY(-50%);
            font-size: 16px;
            pointer-events: none;
            transition: 0.5s;
        }

        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label {
            top: -5px;
            left: 5px;
            font-size: 12px;
            color: #2691d9;
        }

        .pass {
            margin: -5px 0 20px 5px;
            color: red;
            cursor: pointer;
        }

        .pass:hover {
            text-decoration: underline;
        }

        input[type="submit"] {
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            background: #2691d9;
            color: #fff;
            transition: 0.5s;
        }

        input[type="submit"]:hover {
            background: #1b75bb;
        }

        .signup_link {
            margin: 20px 0;
            text-align: center;
            font-size: 16px;
            color: #666666;
        }

        .signup_link a {
            color: #2691d9;
            text-decoration: none;
        }

        .signup_link a:hover {
            text-decoration: underline;
        }

        @media (min-width: 768px) {
            .center {
                width: 50%;
            }
        }

        @media (min-width: 1024px) {
            .center {
                width: 30%;
            }
        }
    </style>
</head>
<body>
    <div class="center"><h1>LOGIN</h1>
        <form action="" method="post">
            <div class="txt_field">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <input type="submit" name="submit" value="login now">
            <div class="signup_link">
                don't have an account? <a href="register.php">register now</a>
            </div>
        </form>
    </div>
</body>
</html>
