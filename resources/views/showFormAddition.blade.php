@extends('dashboard')
@section('title',"showFromPrimary")
@section('content')
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <link rel="stylesheet" href="{{ asset('css/showFormAddition.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    {{-- <title>showFromAddition</title>


</head>

<body>
    <div class="sidebar">side bar</div>
    <header class="header-container">
        <div class="profile">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </div>
        <hr>
    </header> --}}

    <div class="page">
        <div class="flexbox">
            <div class="item">
                <div class="content">
                    <label for="birthDate" name="birtDate" class="setTop head">วัน เดือน ปีเกิด</label>
                    <br>
                    <label for="birthDate" name="birtDate" class="data">{{ $additionalData->adu_birth }} </label>
                </div>
            </div>

            <div class="item">
                <div class="content">
                    <label for="contactRelative" name=""
                        class="setTop head1 ">ข้อมูลบุคคลที่สามารถติดต่อได้เร่งด่วน</label>
                    <br>
                    <div class="data setposi">
                        <label for="contactRelative" name="">{{ $additionalData->adu_name_contact_emergency }} {{ $additionalData->adu_lastname_contact_emergency }}</label>
                        <br>
                        <label for="contactRelative" name="">สถานะที่เกี่ยวข้อง : {{ $additionalData->adu_relationship_contact_emergency }}</label>
                        <br>
                        <label for="contactRelative" name="">{{ $additionalData->adu_phone_contact_emergency }}</label>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="content">   
                    <label for="nationality" name="" class="head setposition">สัญชาติ</label>
                    <br>
                    <label for="nationality" name="" class="data1 setposition2">{{ $additionalData->adu_region}}</label>
                </div>
            </div>

            <div class="item">
                <div class="content setposition-com">
                    <label for="companies" name="" class="head ">บริษัทที่เคยทำงาน</label>
                    <br>
                    <label for="companies" name="" class="data setposi">{{ $additionalData->adu_company}}</label>
                </div>
            </div>

            <div class="item">
                <div class="content">
                    <label for="religion" name="" class="head setposition3">ศาสนา</label>
                    <br>
                    <label for="religion" name="" class="data setposition4">{{ $additionalData->adu_cult}}</label>
                </div>
            </div>

            <div class="item">
                <div class="content set-reward">
                    <label for="reward" name="" class="reward head">รางวัลที่ได้รับ</label>
                    <br>
                    <label for="reward" name=""class="reward data2">{{ $additionalData->adu_prize}}</label>
                </div>
            </div>

            <div class="item">
                <div class="content">
                    <label for="maritalStatus" name="" class="head setposition5">สถานภาพ</label>
                    <br>
                    <label for="maritalStatus" name="" class="data setposition6">{{ $additionalData->adu_marriage_status}}</label>
                </div>
            </div>

            <div class="item">
                <div class="content setposition-cer">
                    <label for="certificate" name="" class="head">ใบรับรอง</label>
                    <br>
                    <a href="#">
                        <label for="file" class="data setposi">resume.pdf</label>
                        {{-- <button class="data">resume.pdf</button> --}}
                    </a>
                </div>
            </div>

            <div class="item">
                <div class="content">
                    <label for="currentAddress" name="" class="head setposition7">ที่อยู่ปัจจุบัน</label>
                    <br>
                    <label for="currentAddress" class="currentAddress data setposition8">{{ $additionalData->adu_present_address}}</label>
                </div>
            </div>

            <div class="item">
                <div class="content">
                    <label for="bornAddress" name="" class="head setposition9">ที่อยู่ตามทะเบียนบ้าน</label>
                    <br>
                    <label for="bornAddress" class="bornAddress data setposition10">{{ $additionalData->adu_permanent_address}}</label>
                </div>
            </div>

            <div class="arrow footer">
                <button type="button" id="btn-back">
                    <svg class="go" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                      </svg>                </button>
                &nbsp;
                <button type="button" id="btn-forward">
                    <svg class="back" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                      </svg>
                </button>
            </div>

        </div>
    </div>

{{-- </body>
</html> --}}
@endsection