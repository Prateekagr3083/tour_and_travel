<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="CSS/Nave.css">
</head>
<body>
    <?php include 'Navbar/Nave.php'; ?>
    
    <main>
        <form class="form" onsubmit="return validatePasswords()">
            <p class="title">Register</p>
            
            <label>
                <input required="" placeholder=" " type="text" class="input">
                <span>Firstname</span>
            </label>
            <label>
                <input required="" placeholder=" " type="text" class="input">
                <span>Lastname</span>
            </label>
            <label>
              <input 
                type="tel" 
                class="input" 
                required 
                placeholder=" " 
                pattern="[0-9]*" 
                inputmode="numeric" 
                oninput="this.value=this.value.replace(/[^0-9]/g,'')"
              >
              <span>Contact Number</span>
            </label>
            <label>
                <input required="" placeholder=" " type="email" class="input">
                <span>Email</span>
            </label>
            <label>
                <input required="" placeholder=" " type="password" class="input" id="password">
                <span>Password</span>
            </label>
            <label>
                <input required="" placeholder=" " type="text" class="input" id="confirmPassword">
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
    <script>
        function validatePasswords() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>
</body>
</html>
