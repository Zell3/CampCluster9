@extends('dashboard')
@section('title', 'รอบสมัคร')
@section('content')

<link rel="stylesheet" href="{{ asset('css/recruitment.css') }}">
<div class="color-card-wrapper">
    <div class="flexbox-wrapper ">
        <div class="item-card">
            @foreach ($recruitments as $index => $recruitment)
            <div class="card">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ url('tableData?form_token=' . $recruitment->form_token) }}">
                            <label>เรื่อง: {{ $recruitment->form_title }}</label>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1>{{ $recruitment->form_location }}<a style="display:inline;" href=""><i class="fas fa-pen"></i></a>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <label id="date_S">วันเริ่มต้น: {{ $recruitment->form_created_at }}
                            <a style="display:inline;" href=""><i class="fas fa-qrcode"></i></a>
                        </label>
                    </div>
                    <div class="col-3"><a style="display:inline;" href="{{ url('editr/' . $recruitment->form_token) }}"><i class="fas fa-qrcode"></i></a></div>
                </div>
                <div class="row">
                    <div class="col-9"><label id="date_E" >วันสิ้นสุด: {{ $recruitment->form_expired_at }}</label></div>
                    <div class="col-3"><a style="display:inline;" href="#"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
