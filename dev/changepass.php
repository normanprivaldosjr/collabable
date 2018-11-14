<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Collabable</title>
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">

</head>
<body>
<div class="horizontal_line"></div>
<div class ="line_layout">
    <div class="dot_pattern"></div>
    <img class="logo" src="assets/images/unifield_logo.png">
    <h1 class="forgetpass_title">Change Password</h1>

    <form action="changesuccess.php" method="POST" class="form_layout">
        <input type="text" name="new_pass" id="new_pass" placeholder="Enter New Password" required>
        <input type="text" name="confirm_pass" id="confirm_pass" placeholder="Confirm New Password" required>
        <div class = "forget_buttons">
            <button class="default_button" formaction="index.php">Cancel</button>

            <button class="default_button confirm_button" type="submit">Confirm</button>
        </div>
    </form>
</div>

<footer>Created by: Thesis IT Pansit, 2018</footer>

</body>
</html>