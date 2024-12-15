<html>

    <head>
        <title>Register Page</title>
    </head>

    <body> 

        <form method="POST" action="">
            <?php if(!empty($message)): ?>
                <label><?php echo htmlspecialchars($message);?></label><br>
            <?php endif; ?>
            <label>First Name:</label><br>
            <input type="text" name="firstname"><br>
            <label>Last Name:</label><br>
            <input type="text" name="lastname"><br>
            <label>Email:</label><br>
            <input type="text" name="email"><br>
            <label>Username:</label><br>
            <input type="text" name="username"><br>
            <label>Password:</label><br>
            <input type="password" name="password"><br>
            <label>Confirm Password:</label><br>
            <input type="password" name="c_password"><br>
            <input type="submit">
        </form>

    </body>

</html>
