@extends('dashboard')
@section('title', 'ฟอร์มเบื้องต้น')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/showFormPrimary.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <div class="show-formPrimary">
        <div class="page d-flex justify-content-evenly align-items-center ">
            <div class="heart ">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                  </svg>
            </div>
            <div class="text-like">สนใจ</div>
            <div class="data ">
                <label for="name" class="label">ชื่อ-นามสกุล</label>
                <br>

                <label for="name" class="set-data">Jemes Smith</label>
                <br>
                <br>
                <label for="name" class="label">อีเมล</label>
                <br>

                <label for="name" class="set-data">Jemes Smith</label>
                <br>
                <br>
                <label for="name" class="label">ตำแหน่ง</label>
                <br>

                <label for="name" class="set-data">Jemes Smith</label>
                <br>
                <br>
                <label for="name" class="label">ประเภท</label>
                <br>

                <label for="name" class="set-data">Jemes Smith</label>
                <br>
                <br>
                <label for="name" class="label">เบอร์โทรศัพท์</label>
                <br>

                <label for="name" class="set-data">Jemes Smith</label>
                <br>
                <br>
                <label for="name" class="label">ภาษาโปรแกรมที่ถนัด</label>
                <br>

                <label for="name" class="set-data">Jemes Smith</label>

            </div>
            <div class="data-add">
                <label for="additional-info" class="label">ข้อมูลเพิ่มเติม</label>
                <br>
                <br>
                <textarea class="form-control set-data" id="email" cols="30" rows="10" disabled>ปด้ะ้ผด้ผะ้</textarea>
                {{-- <input type="text" class="form-control set-data" id="name" value="ปด้ะ้ผด้ผะ้" cols="30" rows="10"disabled> --}}
                <br>
                <br>

                <label for="resume" class="label">เรซูเม่</label>
                <br>
                <br>
                <a href="http://" class="file">resume.pdf</a>
                <br>
                <br>
                <div class="footer">
                    <button type="submit" id="sent">ส่งอีเมล</button>

                </div>
                <div class="arrow footer">
                    <button type="button" id="btn-back">
                        <svg class="go" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg> </button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" id="btn-forward">
                        <svg class="back" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                    </button>
                </div>

            </div>
            <script>
                const heartIcon = document.querySelector('.heart');

                heartIcon.addEventListener('click', () => {
                    heartIcon.classList.toggle('active-heart');
                });
            </script>

        </div>


    </div>
@endsection
