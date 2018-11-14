<?php
session_start();
require "createProjectController.php";
?>

<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Collabable</title>
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/css/dataTables.checkboxes.css">
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/js/dataTables.checkboxes.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable({
                'columnDefs': [
                    {
                        'targets': 0,

                    }
                ],
                'order': [[1, 'asc']]
            });
        });

    </script>
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
                <h2 class="module_title">Users</h2>
            </div>
        </div>

        <form method="POST">
            <div class="form_title">
                Add New User
            </div>
            <div class="form_content">
                <h4>Name</h4>
                <input type="text" name="new-user_name" id="new-user_name" value="" required>

                <h4>Username</h4>
                <input type="text" name="new-user_username" id="new-user_username" value="" required>

                <h4>Password</h4>
                <input type="Password" name="new-user_password" id="new-user_password" value="" required>

                <h4>Email</h4>
                <input type="text" name="new-user_email" id="new-user_email" value="" required>

                <h4>Contact Number</h4>
                <input type="text" name="new-user_contact" id="new-user_contact" value="" required>

                <h4>Privilege</h4>
                <select>
                    <option value="Admin">Admin</option>
                    <option value="Leader">Leader</option>
                    <option value="Member">Member</option>
                </select>

                <div class="form_buttons">
                    <button class="cancel_project">Cancel</button>

                    <button class="create_project" type="submit" id="submit" name="submit">Confirm</button>
                </div>
            </div>
        </form>

    </div>
</main>

<script src="assets/scripts/sidebar.js"></script>

</body>
</html>