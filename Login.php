<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="CSS/Nave.css">
</head>
<body>
    <?php include 'Navbar/Nave.php'; ?>
    
    <main>
        <div class="form-container">
            <form class="form" id="login-form">
                <p class="title">Login now</p>
                
                <label>
                    <input required="" placeholder="" type="email" class="input">
                    <span>Email</span>
                </label> 
                <label>
                    <input required="" placeholder="" type="password" class="input">
                    <span>Password</span>
                </label>
                <button class="submit">Login</button>
                <p class="signin">Don't have an account? <a href="Register.php">Register</a></p>
            </form>
        </div>
    </main>
</body>
</html>
