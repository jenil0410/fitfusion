<?php include_once 'dbcon.php'; ?>
    <div class="registration-container" style="background-color: #000; color: #fff; padding: 190px; text-align: center;">
         <a href="index.html" style="color: #ff3333; text-decoration: none; margin-left: 10px;">Home</a>
        <h2 style="color: #ff3333;">Reset Password</h2>
        <form method="post" style="display: inline-block; text-align: left;">
            <div style="margin-bottom: 10px;">
                <label for="email" style="display: block;">Email</label>
                <input type="email" name="email" required style="background-color: #333; color: #fff; border: 1px solid #ff3333;">
            </div>
            <button type="submit" style="background-color: #ff3333; color: #000; border: none; padding: 10px 20px; cursor: pointer;">Reset Password</button>
        </form>
        <p style="color: #fff; margin-top: 20px;">Remember your password? <a href="login.php" style="color: #ff3333;">Login</a></p>
    </div>

