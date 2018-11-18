<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Collabable</title>
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>

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
            <a href="profilesettings.php"><!-- <?php echo $_SESSION['userName']; ?> -->
                <img src="assets/images/edit_icon.png" class="edit_icon">
            </a>
        </h4>
        <div class="sidebar_divider"></div>
        <div class="sidebar_content">
            <ul>
                <li class=""><a href="homepage.php"> Back to Home</a></li>
                <li class="active_tab"><a href="homepage.php">Progress</a></li>
                <li class=""><a href="homepage.php">Project Details</a></li>
                <li class=""><a href="homepage.php">Task Boards</a></li>
                <li class=""><a href="homepage.php">Calendar</a></li>
                <li class=""><a href="homepage.php">Change Requests</a></li>
                <li class=""><a href="homepage.php">Chat Room</a></li>
                <li class=""><a href="homepage.php">Documents</a></li>
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
            <h2 class="module_title">Project Progress</h2>

            <a href=""><button class="default_button page_button" >Close Project</button></a>

        </div>
        <div class="doughnut_chart">
            <div class="doughnut_size">
                <h3>Project Lifecycle</h3>
                <canvas id="doughnut_chart"></canvas>
            </div>

            <div class="doughnut_content">
                <h3>Initiation: 11 Days</h3>
                <input type="date" name="new-project_start1" class="new-project_start1" value="Execution" readonly>
                -
                <input type="date" name="new-project_end1" class="new-project_end1" value="Execution" readonly>

                <h3>Planning: 57 Days</h3>
                <input type="date" name="new-project_start2" class="new-project_start2" value="Execution" readonly>
                -
                <input type="date" name="new-project_end2" class="new-project_end2" value="Execution" readonly>

                <h3>Execution: 60 Days</h3>
                <input type="date" name="new-project_start3" class="new-project_start3" value="Execution" readonly>
                -
                <input type="date" name="new-project_end3" class="new-project_end3" value="Execution" readonly>

                <h3>Initiation: 33 Days</h3>
                <input type="date" name="new-project_start4" class="new-project_start4" value="Execution" readonly>
                -
                <input type="date" name="new-project_end4" class="new-project_end4" value="Execution" readonly>

                <p> The Team is currently in the <b>Planning Phase</b>.</p>

                <div class="delayed_container">
                    Number of Days Delayed in this phase:
                    <input type="Number" name="days_delayed" readonly>
                </div>

                <button type="submit" name="submit">DONE</button>
            </div>
        </div>


        <div class="bar_chart">
            <div class="bar_size">
                <h4>Tasks Per Day</h4>
                <canvas id="bar_chart"></canvas>
            </div>
        </div>


        <script>
            //doughnut chart
            var ctx_doughnut = document.getElementById("doughnut_chart").getContext('2d');
            var d_chart = new Chart(ctx_doughnut, {
              type: 'doughnut',
              data: {
                labels: ["Initiation", "Planning", "Execution", "Closing"],
                datasets: [{
                  backgroundColor: [
                    "rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)", "rgb(96, 247, 106)" 
                  ],
                  data: [11, 57, 60, 33]
                }]
              }
            });


            //bar chart
            var ctx_bar = document.getElementById("bar_chart");
            var b_chart = new Chart(ctx_bar, {
              type: 'bar',
              data: {
                labels: ["2015-11-02", "2015-11-03", "2015-11-04", "2015-11-05", "2015-11-06", "2015-11-07"],
                datasets: [{
                  label: 'Tasks per Day',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                  ],
                  borderColor: [
                    'rgba(255,99,132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
                }]
              },
              options: {
                responsive: true,
                scales: {
                  xAxes: [{
                    ticks: {
                      maxRotation: 90,
                      minRotation: 80
                    }
                  }],
                  yAxes: [{
                    ticks: {
                      beginAtZero: true
                    }
                  }]
                }
              }
            });
        </script>

    </div>
</main>

<script src="assets/scripts/sidebar.js"></script>

</body>
</html>