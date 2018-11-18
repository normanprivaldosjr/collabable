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
                <h2 class="module_title">Closed Project</h2>
            </div>
        </div>

        <form method="POST">
            <div class="profile_content">
                <h4>Title</h4>
                <input type="text" name="closed-project_title" id="closed-project_title" value="" readonly>

                <div id="user_closed">
                    <h4 id="user_closed-header">Project Closed by</h4>
                    <input type="text" name="closed-project_user" id="closed-project_user" value="" readonly>
                </div>

                <div id="date_closed">
                    <h4 id="date_closed-header">Date Closed</h4>
                    <input type="date" name="closed-project_date" id="closed-project_date" value="" readonly>
                </div>

                <h4>Description</h4>
                <textarea class="closed-project_description" name="closed-project_description" readonly></textarea>

                <h4>Lessons Learned</h4>
                <textarea class="closed-project_lessons" name="closed-project_lessons" readonly></textarea>

                <h4>Members</h4>
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <th style="width: 4.3vw;"></th>
                        <th style="width: 40vw;">Name</th>
                    </thead>
                    <tbody>
                    <?php

                    require_once "config.php";

                    $query = "SELECT employeeId, employeeName FROM users";
                    $result = mysqli_query($mysqli, $query);

                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['employeeId'];
                        $name = $row['employeeName'];
                    ?>
                    <tr>
                        <td style="width: 4.3vw;"><input type="checkbox" name="members[]" value="<?php echo $id; ?>" style="width: 4.3vw;"></td>
                        <td style="width: 40vw;"><?php echo $name; ?></td>
                    </tr>

                    <?php   }  ?>
 
                    </tbody>
                </table>

                <h4 style="margin-top: 35px">Estimated Life Cycle</h4>
                <div class="lifecycle">
                    <div class="phases">
                        <h4>Phases</h4>
                        <input type="text" name="closed-project_phases" class="closed-project_phases" value="Initiation" readonly>

                        <input type="text" name="closed-project_phases" class="closed-project_phases" value="Planning" readonly>

                        <input type="text" name="closed-project_phases" class="closed-project_phases" value="Execution" readonly>

                        <input type="text" name="closed-project_phases" class="closed-project_phases" value="Closing" readonly>
                    </div>

                    <div class="estimation">
                        <h4 class="estimated_date">Estimated Date</h4>
                        <input type="date" name="closed-project_start1" class="closed-project_start1" value="Execution" readonly>
                        -
                        <input type="date" name="closed-project_end1" class="closed-project_end1" value="Execution" readonly>

                        <input type="date" name="closed-project_start2" class="closed-project_start2" value="Execution" readonly>
                        -
                        <input type="date" name="closed-project_end2" class="closed-project_end2" value="Execution" readonly>

                        <input type="date" name="closed-project_start3" class="closed-project_start3" value="Execution" readonly>
                        -
                        <input type="date" name="new-project_end3" class="new-project_end3" value="Execution" readonly>

                        <input type="date" name="closed-project_start4" class="closed-project_start4" value="Execution" readonly>
                        -
                        <input type="date" name="closed-project_end4" class="closed-project_end4" value="Execution" readonly>
                    </div>
                </div>
                
                <button class="save_changes" type="submit" name="submit">print details</button>
            </div>
        </form>

    </div>
</main>

<script src="assets/scripts/sidebar.js"></script>

</body>
</html>