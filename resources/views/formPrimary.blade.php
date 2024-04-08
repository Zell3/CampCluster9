@extends('dashboard')
@section('title', 'ฟอร์มเบื้องต้น')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/showFormPrimary.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <div class="show-formPrimary">
        <div class="page d-flex justify-content-evenly align-items-center ">
            <div class="heart ">

                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-heart" viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                </svg>
                &nbsp;&nbsp;&nbsp;สนใจ
            </div>
            <div class="data ">
                <label for="name" class="label">ชื่อ-นามสกุล</label>
                <br>

                <label for="name">Jemes Smith</label>
                <br>
                <br>
                <label for="name" class="label">อีเมล</label>
                <br>

                <label for="name">Jemes Smith</label>
                <br>
                <br>
                <label for="name" class="label">ตำแหน่ง</label>
                <br>

                <label for="name">Jemes Smith</label>
                <br>
                <br>
                <label for="name" class="label">ประเภท</label>
                <br>

                <label for="name">Jemes Smith</label>
                <br>
                <br>
                <label for="name" class="label">เบอร์โทรศัพท์</label>
                <br>

                <label for="name">Jemes Smith</label>
                <br>
                <br>
                <label for="name" class="label">ภาษาโปรแกรมที่ถนัด</label>
                <br>

                <label for="name">Jemes Smith</label>

            </div>
            <div class="data-add">
                <label for="additional-info" class="label">ข้อมูลเพิ่มเติม</label>
                <br>
                <br>

                <textarea  name="additional-info" id="additional-info" cols="30" rows="10" >ปด้ะ้ผด้ผะ้</textarea>
                <br>
                <br>

                <label for="resume" class="label">เรซูเม่</label>
                <br>
                <br>
                <a href="http://">resume.pdf</a>
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
                    heartIcon.classList.toggle('active');
                });
            </script>

        </div>
        <script>
            const heartIcon = document.querySelector('.heart');

            heartIcon.addEventListener('click', () => {
                heartIcon.classList.toggle('active');
            });
        </script>

    </div>
@endsection