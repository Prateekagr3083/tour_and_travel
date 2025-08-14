<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="CSS/Nave.css">
    <style>
        .gender-selection {
            margin-top: 15px;
            padding: 0 5px;
        }
        .gender-title {
            display: block;
            margin-bottom: 8px;
            color: #878787;
            font-size: 0.75rem;
        }
        .gender-selection label {
            display: inline-block;
            margin-right: 15px;
            font-size: 0.9rem;
            color: #333;
            cursor: pointer;
        }
        .gender-selection input[type="radio"] {
            margin-right: 5px;
            vertical-align: middle;
        }
        .terms-conditions {
            margin-top: 15px;
            font-size: 0.9rem;
            color: #555;
        }
        .terms-conditions label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .terms-conditions input[type="checkbox"] {
            margin-right: 8px;
        }
        .terms-conditions a {
            color: royalblue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php include 'Navbar/Nave.php'; ?>
    
    <main>
        <form class="form">
            <p class="title">Register</p>
            
            <label>
                <input required="" placeholder="" type="text" class="input">
                <span>Firstname</span>
            </label>
            <label>
                <input required="" placeholder="" type="text" class="input">
                <span>Lastname</span>
            </label>
            <label>
                <input required="" placeholder="" type="email" class="input">
                <span>Email</span>
            </label>
            <label>
                <input required="" placeholder="" type="password" class="input">
                <span>Password</span>
            </label>
            <label>
                <input required="" placeholder="" type="password" class="input">
                <span>Confirm Password</span>
            </label>
            <div class="gender-selection">
                <span class="gender-title">Gender</span>
                <label>
                    <input type="radio" name="gender" value="male" required=""> Male
                </label>
                <label>
                    <input type="radio" name="gender" value="female"> Female
                </label>
                <label>
                    <input type="radio" name="gender" value="other"> Others
                </label>
            </div>
            <div class="terms-conditions">
                <label>
                    <input type="checkbox" name="terms" required=""> I accept the <a href="#">Terms & Conditions</a>
                </label>
            </div>
            <button class="submit">Register</button>
            <p class="signin">Already have an account? <a href="Login.php">Login</a></p>
        </form>
    </main>
</body>
</html>
