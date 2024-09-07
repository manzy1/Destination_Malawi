<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
    
</head>
<body style="justify-content: center; margin: 80px 370px;">
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <h1 style="color: rgb(163, 163, 223);"><i class="fa fa-map-marker-alt me-3"></i>Destination Malawi - Sign Up Page</h1>
                
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <p>Go to <a href="index.php" class="nav-item nav-link">Home</a></p>
                    
                </div>

            </div>
        </nav>

        
    </div>
    <!-- Navbar & Hero End -->
    
    
    <form action="process-signup.php" method="post" id="signup" novalidate>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div>
            <label for="password_confirmation">Re-Enter password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        
        <button>Sign Up</button>
    </form>
    <P>Already have an Account? <a href="login.php">Log In</a></p>

    <script src="js/validation.js" defer></script>
    
</body>
</html>









