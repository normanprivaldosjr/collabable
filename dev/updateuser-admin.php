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
        <h4 class="member_name">
            <a href="profilesettings.php"><?php echo $_SESSION['userName']; ?>
                <img src="assets/images/edit_icon.png" class="edit_icon"></a>
        </h4>
        <div class="sidebar_divider"></div>
        <div class="sidebar_content">
            <ul>
                <li class=""><a href="homepage.php">Home</a></li>
                <li class="active_tab"><a href="">Users</a></li>
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
                <h2 class="module_title">Update User Privilege</h2>
            </div>
            <div class="profile_settings"></div>
        </div>

        <form method="POST">
            <div class="update_content">
                
                <h4>Name</h4>
                <input type="text" name="new-user_name" id="new-user_name" value="" readonly>

                <h4>Privilege</h4>
                <select>
                    <option value="Admin">Admin</option>
                    <option value="Leader">Leader</option>
                    <option value="Member">Member</option>
                </select>

                <button class="save_changes" type="submit" name="submit">Save Changes</button>
            </div>
        </form>

    </div>
</main>

<script src="assets/scripts/sidebar.js"></script>

</body>
</html>