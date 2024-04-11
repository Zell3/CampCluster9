@extends('dashboard')
@section('title', 'รอบสมัคร')
@section('content')

<style>
    .cutcol-content{
        margin:0;
    }
    .profile{
        display:none;
    }
</style>
    <link rel="stylesheet" href="{{ asset('css/recruitment.css') }}">
    <div class="color-card-wrapper">
        <div class="flexbox-wrapper ">
            <div class="item-card">

                <?php foreach ($recruitments as $index => $recruitment) : ?>
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ url('tableData?form_token=' . $recruitment->form_token) }}">
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
                        <div class="col-3" ><a style="display:inline;" href="{{ url('/editr/' . $recruitment->form_token) }}"><i class="fas fa-qrcode">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                        <path
                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                                    </svg></i></a></div>
                    </div>
                    <div class="row">
                        <div class="col-9"><label id="date_E" >วันสิ้นสุด: <?php echo $recruitment->form_expired_at; ?></label></div>
                        <div class="col-3"></div>
                    </div>
                </div>

                {{-- <div class="card">
                        <a href="/tableData?form_id=<?php echo $recruitment->form_id; ?>">
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
