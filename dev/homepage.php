<?php

    session_start();

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
        <h4 class="member_name">
            <a href="profilesettings.php"><?php echo $_SESSION['userName']; ?>
                <img src="assets/images/edit_icon.png" class="edit_icon"></a>
        </h4>
        <div class="sidebar_divider"></div>
        <div class="sidebar_content">
            <ul>
                <li class="active_tab"><a href="homepage.php">Home</a></li>
            </ul>
        </div>
        <a href="index.php">
            <div class="signout">
                Sign Out
            </div>
        </a>

    </div>

    <div class="main_page">
        <div class="horizontal_line fixed_line"></div>

        <div class ="line_layout fixed_line">
            <div class="dot_pattern"></div>
        </div>

        <div class="project_header">
            <h2 class="module_title">Ongoing Projects</h2>

            <a href="createproject.php"><button class="default_button page_button" >Create New Project</button></a>

        </div>
        <div class="project_cards">
            <a href="">
                <div class="open-project">Project 1</div>
            </a>
            <a href="">
                <div class="open-project">Project 2</div>
            </a>
            <a href="">
                <div class="open-project">Project 3</div>
            </a>
            <a href="">
                <div class="open-project">Project 4</div>
            </a>
        </div>

        <div class="project_header">
            <h2 class="module_title">Closed Projects</h2>
        </div>

        <div class="project_cards">
            <a href="">
                <div class="close-project">Project 5</div>
            </a>
        </div>

    </div>
</main>

<script src="assets/scripts/sidebar.js"></script>

</body>
</html>