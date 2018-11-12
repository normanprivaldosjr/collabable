<?php
    session_start();
    require_once "config.php";
    require "profilesettingsController.php";
?>

<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Collabable</title>
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">

</head>
<body>
<main>
    <div class="sidebar">
        <div class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo_box sidebar_title">
            COLLABABLE
        </div>
        <h4 class="member_name"><a href="profilesettings-admin.php"><?php echo $_SESSION['userName'];  ?></a></h4>
        <div class="sidebar_divider"></div>
        <div class="sidebar_content">
            <ul>
                <li class=""><a href="homepage-admin.php">Home</a></li>
                <li><a href="">Users</a></li>
            </ul>
        </div>
        <a href="index.php">
            <div class="signout">
                Sign Out
            </div>
        </a>

    </div>

    <div class="main_page no-button">
        <div class="horizontal_line fixed_line"></div>

        <div class ="line_layout fixed_line">
            <div class="dot_pattern"></div>
            <div class="project_header">
                <h2 class="module_title">Profile Settings</h2>
            </div>
            <div class="profile_settings"></div>
        </div>

        <form method="POST">
            <div class="profile_content">
                <h4>Name</h4>
                <input type="text" name="settings_name" id="settings_name" value="<?php echo $empName;?>">

                <h4>Username</h4>
                <input type="text" name="settings_user" id="settings_user" value="<?php echo $empUserName;?>">

                <h4>Password</h4>
                <input type="password" name="settings_pass" id="settings_pass" value="<?php echo $empPassword;?>">

                <h4>Email</h4>
                <input type="text" name="settings_email" id="settings_email" value="<?php echo $empEmailAdd;?>">

                <h4>Contact Number</h4>
                <input type="text" name="settings_contact" id="settings_contact" value="<?php echo $empContactNum;?>">

                <h4>Privilege</h4>
                <input type="text" name="settings_privilege" id="settings_privilege"value="<?php echo $empRole;?>" readonly>

                <button class="save_changes" type="submit" name="submit">Save Changes</button>
            </div>
        </form>

    </div>
</main>

<script src="assets/scripts/sidebar.js"></script>

</body>
</html>