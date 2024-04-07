<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Recruitment Round</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/recruitment.css') }}">
    
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="https://lh6.googleusercontent.com/proxy/cyexBRM7hR7vutWwKF2RncwXo81OWRVgm-qmb8wGuaNlSRvGG7Z4uQTMQQcpFy0y4d7iA3i-RPj1UT8cxYDyBYER46U4rGqcqR5t-bLdGesNiA" alt="" class="logoclicknext">
                        <span class="nav-item">Clicknext</span>
                    </a></li>
                <li><a href="#">
                        <button class="btn-recruit">
                            <div class="recruit-round">
                                <i class="fas fa-user"></i>
                                <span class="nav-item"><b>รอบสมัคร</b></span>
                            </div>
                        </button>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-qrcode"></i>
                        <span class="nav-item"><b>สร้างรอบสมัคร</b></span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-chart-bar"></i>
                        <span class="nav-item"><b>สถิติ</b></span>
                    </a>
            </ul>
        </nav>
        <div class="container-wrapper">
            <p class="top-right">รอบสมัคร</p>
            <hr>
            <!-- รูปภาพขวาบน -->
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTslrmTVRVNzkv8iBDesP4uFw8mZxLiGiTrc2X7lNwZgksHC8Qu" class="circle-image" alt="Image">
            <br>
            <!-- กล่องค้นหา -->
            <div class="search-container">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            <ol class="container-card">
                <!-- ลูปเอาข้อมูลออกมาโชว์ -->
                <?php foreach ($recruitments as $index => $recruitment) : ?>
                    <div class="card">
                        <label>เรื่อง: <?php echo $recruitment->form_title; ?></label>
                        <br>
                        <h1 ><?php echo $recruitment->form_location; ?><a  style="display:inline;" href=""><i class="fas fa-pen"></i></a></h1 >                         
                        <br>
                        <label>วันเริ่มต้น: <?php echo $recruitment->form_created_at; ?><a  style="display:inline;" href=""><i class="fas fa-qrcode"></i></a></label>
                        <br>
                        <label>วันสิ้นสุด: <?php echo $recruitment->form_expired_at; ?></label>                   
                    </div>
                <?php endforeach; ?>
            </ol>
        </div>
    </div>
</body>
</html>