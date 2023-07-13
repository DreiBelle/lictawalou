<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
        }
    </style>

</head>
<body>
    <div style="position: relative; width: 100vw; height: 100vh; display: flex; align-items: center; justify-content: center; overflow: hidden;">
        <div style="max-width: 400px; width: 100%; padding: 40px; background-color: white; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); border-radius: 16px; display: flex; flex-direction: column; align-items: center;">
            <!-- <h2 style="font-size: 24px; font-weight: bold; text-align: center;">LOGIN ACCOUNT</h2> -->
            <form method="post" action="<?php echo site_url('LoginController/authenticate'); ?>">
                <div style="margin-bottom: 24px; position: relative; width: 100%;">
                    <label for="username" style="font-weight: bold; color: black; display: block; margin-bottom: 8px; font-family: 'Helvetica Neue', Arial, sans-serif;">Username</label>
                    <input type="text" id="username" name="username" required style="width: 100%; padding: 12px; border: 1px solid black; outline: none; color: black; ">
                </div>
                <div style="margin-bottom: 24px; position: relative; width: 100%;">
                    <label for="password" style="font-weight: bold; color: black; display: block; margin-bottom: 8px; font-family: 'Helvetica Neue', Arial, sans-serif;">Password</label>
                    <input type="password" id="password" name="password" required style="width: 100%; padding: 15px; border: 1px solid black; outline: none; color: black;">
                </div>
                <div style="text-align: center;">
                    <input type="submit" value="Login" style="background-color: blue; color: #000; padding: 12px; border: none; font-weight: bold; width: 100%; font-size: 16px;">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
