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
                <li class=""><a href="homepage.php"> Back to Home</a></li>
                <li class=""><a href="">Progress</a></li>
                <li class=""><a href="">Project Details</a></li>
                <li class=""><a href="">Task Boards</a></li>
                <li class=""><a href="">Calendar</a></li>
                <li class="active_tab"><a href="">Change Requests</a></li>
                <li class=""><a href="">Chat Room</a></li>
                <li class=""><a href="">Documents</a></li>
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
            <h2 class="module_title">Change Requests</h2>
            <a href=""><button class="default_button page_button back_button" >Go Back</button></a>
        </div>

        <form method="POST">
            <div class="form_title pending_title">
                Pending Change Request
            </div>
            <div class="form_content approval_content">
                <h4>Title</h4>
                <input type="text" name="closed-project_title" id="closed-project_title" value="" readonly>

                <div id="user_change">
                    <h4 id="user_change-header">Created by</h4>
                    <input type="text" name="change-request_user" id="change-request_user" value="" readonly>
                </div>

                <div id="date_change-created">
                    <h4 id="date_change-header">Date Created</h4>
                    <input type="date" name="change-request_user_date" id="change-request_user_date" value="" readonly>
                </div>

                <h4>Description</h4>
                <textarea class="closed-project_description" name="change-request_description" readonly></textarea>

                <h4>Attached File</h4>
                <div class="file_link">
                    <h4 class="file">Draft1.docx</h4>
                    <button class="file_download">download file</button>
                </div>
                <div class="form_buttons">
                    <button class="cancel_project">Decline</button>

                    <button class="create_project" type="submit" id="submit" name="submit">Approve</button>
                </div>
            </div>
        </form>

    </div>
</main>

<script src="assets/scripts/sidebar.js"></script>

</body>
</html>