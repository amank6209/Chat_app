<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime chat app</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email Adderss</label>
                        <input type="email" name="email" placeholder="Enter your email " required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input id="password" name="password" type="password" placeholder="Enter your password" required>
                        <i id="eyeicon" class="fa fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div> 
                    <div class="link">Already signed up? <a href="login.php">Login now</a></div>
                    

                
            </form>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>