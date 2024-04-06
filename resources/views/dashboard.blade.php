<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <a href="https://www.flaticon.com/free-icons/private-account" title="private account icons"></a>
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">

</head>

<body>


    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <div class="logo">
                            <img src="https://blog.clicknext.com/wp-content/themes/clicknext_blog2/assets/images/clicknext-logo.png"
                                alt="">
                        </div>
                        <a class="has-arrow" href="#" aria-expanded="true">
                            <br>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" aria-expanded="true">
                                    <div class="user-icon">

                                        <img src="https://cdn-icons-png.flaticon.com/128/3033/3033143.png"
                                            alt="">
                                    </div>
                                    &nbsp;&nbsp;&nbsp;รอบสมัคร
                                </a>
                            </li>
                            <br>

                            <li class="nav-item">
                                <a class="nav-link " href="#"aria-expanded="true">
                                    <div class="qr-icon">
                                        <img src="https://cdn-icons-png.flaticon.com/128/747/747470.png" alt="">
                                    </div>
                                    &nbsp;&nbsp;&nbsp;สร้างรอบสมัคร
                                </a>
                            </li>
                            <br>

                            <li class="nav-item">
                                <a class="nav-link" href="#"aria-expanded="true">
                                    <div class="graph-icon">
                                        <img src="https://cdn-icons-png.flaticon.com/128/404/404723.png" alt="">
                                    </div>
                                    &nbsp;&nbsp;&nbsp;สถิติ
                                </a>
                    </ul>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="chartjs-size-monitor"
                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary">Share</button>
                            <input class="form-control form-control-dark w-100" type="text" placeholder="Search"
                                aria-label="Search">
                        </div>
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            This week
                        </button>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.nav-link').click(function() {
                $('.nav-link').removeClass('active');
                $(this).closest('.nav-link').addClass('active ')
            });

        });
    </script>




</body>

</html>
