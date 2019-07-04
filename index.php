<?php include 'header.php';
session_start();
include 'config.php';

if(!isset($_SESSION['email'])){
    header ('location:signup.php');
    exit();
}
?>



<div class="container">
    <div class="rows">
        <div class="col-md-6">
            <img src="image10.jpeg" alt="">
        </div>
        <div class="col-md-6">
            <h2 style="text-align: center">Sign up with us</h2>

            <form action="signup_handler.php" method="post">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <?php
                    if(isset($_GET['f_error'])){
                        echo "firstname is required";
                    }
                    ?>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="firstname">
                </div>

                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="lastname">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>

                <div class="form-group">
                    <label for="pwd">Confirm password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>


                <div class="form-group">
                    <label><input type="date"> Date Registered</label>
                </div>

                <button type="submit"  name='signup' class="btn btn-default">Submit</button>
            </form>

        </div>
    </div>

</body>
</html>







































<?php include "footer.php"?>
