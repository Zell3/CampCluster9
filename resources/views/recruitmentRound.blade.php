@extends('dashboard')
@section('title', 'รอบสมัคร')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/recruitment.css') }}">
    <div class="color-card-wrapper">
        <div class="flexbox-wrapper ">
            <div class="item-card">

                <?php foreach ($recruitments as $index => $recruitment) : ?>
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <a href="/tableData?form_token=<?php echo $recruitment->form_token; ?>">
                                <label>เรื่อง: <?php echo $recruitment->form_title; ?></label>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h1><?php echo $recruitment->form_location; ?><a style="display:inline;" href=""><i class="fas fa-pen"></i></a>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9"><label id="date_S">วันเริ่มต้น: <?php echo $recruitment->form_created_at; ?><a style="display:inline;"
                                    href=""><i class="fas fa-qrcode"></i></a></label></div>
                        <div class="col-3" ><a style="display:inline;" href="/editr/{{$recruitment->form_token}}"><i class="fas fa-qrcode">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                        <path
                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                                    </svg></i></a></div>
                    </div>
                    <div class="row">
                        <div class="col-9"><label id="date_E" >วันสิ้นสุด: <?php echo $recruitment->form_expired_at; ?></label></div>
                        <div class="col-3"><a style="display:inline;" href="#"><i class="fas fa-qrcode">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
                                        <path d="M2 2h2v2H2z" />
                                        <path d="M6 0v6H0V0zM5 1H1v4h4zM4 12H2v2h2z" />
                                        <path d="M6 10v6H0v-6zm-5 1v4h4v-4zm11-9h2v2h-2z" />
                                        <path
                                            d="M10 0v6h6V0zm5 1v4h-4V1zM8 1V0h1v2H8v2H7V1zm0 5V4h1v2zM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8zm0 0v1H2V8H1v1H0V7h3v1zm10 1h-1V7h1zm-1 0h-1v2h2v-1h-1zm-4 0h2v1h-1v1h-1zm2 3v-1h-1v1h-1v1H9v1h3v-2zm0 0h3v1h-2v1h-1zm-4-1v1h1v-2H7v1z" />
                                        <path d="M7 12h1v3h4v1H7zm9 2v2h-3v-1h2v-1z" />
                                    </svg></i></a></div>
                    </div>
                </div>

                {{-- <div class="card">
                        <a href="/tableData?form_id=<?php echo $recruitment->form_token; ?>">
                            <label>เรื่อง: <?php echo $recruitment->form_title; ?></label>
                        </a>
                        <br>
                        <h1><?php echo $recruitment->form_location; ?><a style="display:inline;" href=""><i class="fas fa-pen"></i></a></h1>
                        <br>
                        <label>วันเริ่มต้น: <?php echo $recruitment->form_created_at; ?><a style="display:inline;" href=""><i
                                    class="fas fa-qrcode"></i></a></label>
                        <br>
                        <label>วันสิ้นสุด: <?php echo $recruitment->form_expired_at; ?></label>
                    </div> --}}
                <?php endforeach; ?>

            </div>
        </div>
    </div>


@endsection
