<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <a href="https://www.flaticon.com/free-icons/private-account" title="private account icons"></a>
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">


</head>

<body>
    <header class="header-container">
        <div class="profile">
            {{-- <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"> --}}
            <div class="d-flex align-items-center">

                <div class="flex-shrink-0 resize">
                  <a href="#" class="d-block link-body-emphasis text-decoration-none show" data-bs-toggle="dropdown" aria-expanded="true">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                  </a>
                </div>
            </div>
        </div>
        <hr>
    </header>




    <div class="container-fluid ">
        <div class="row">
            <div class="col-3">
                <nav class="bg-light sidebar py-5 px-4">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <div class="logo">
                                <img src="https://blog.clicknext.com/wp-content/themes/clicknext_blog2/assets/images/clicknext-logo.png"
                                    alt="">
                            </div>
                            <a class="has-arrow" href="#" aria-expanded="true"></a>
                            <br>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" aria-expanded="true">
                                    <div class="user-icon">

                                        <img src="https://cdn-icons-png.flaticon.com/128/3033/3033143.png" alt="">
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
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-9 cutcol-content">
                <div class="container-make-round">
                    @yield('content')
                </div>
            </div>
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