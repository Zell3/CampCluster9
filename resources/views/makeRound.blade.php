@extends('dashboard')
@section('title', 'รอบสมัคร')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/makeRound.css') }}">

    <div class="flexbox-make-round">
        <div class="item">
            <div class="content">
                <form id="makeRound" method="POST" action="/makeRound">
                    @csrf
                    <input type="hidden" name="form_hr_id" value="1">
                    <div class="form-group">
                        <label for="form_title">ชื่อเรื่อง</label>
                        <input type="text" name="form_title" id="form_title" class="ti" required><br>
                    </div>
                    <div>
                        <label for="form_location">สถานที่</label>
                        <input class="lo" type="text" name="form_location" id="form_location" required><br>
                    </div>
                    <div>
                        <label for="roles">ตำแหน่ง</label><br>
                        <input class="checkbox" name="roles[]" value="1" id="role_sa" type="checkbox">
                        <label for="role_sa">System Analyst</label><br>

                        <input class="checkbox" name="roles[]" value="2" id="role_tester" type="checkbox">
                        <label for="role_tester">Tester</label><br>

                        <input class="checkbox" name="roles[]" value="3" id="role_programmer" type="checkbox">
                        <label for="role_programmer">Programmer</label><br>

                        <input class="checkbox" name="roles[]" value="4" id="role_ba" type="checkbox">
                        <label for="role_ba">Business Analyst</label><br>
                    </div>
                    <div>
                        <label for="Applicant_type">ประเภทผู้สมัคร</label><br>
                        <input class="checkbox" type="checkbox" name="form_is_employee" id="form_is_employee">
                        <label for="form_is_employee">ทำงาน</label><br>

                        <input class="checkbox" type="checkbox" name="form_is_cooperative" id="form_is_cooperative">
                        <label for="form_is_cooperative">ฝึกงาน</label><br>
                    </div>
                    <div>
                        <label for="form_created_at">วันเริ่ม</label>
                        <input type="date" name="form_created_at" id="form_created_at" class="date_s" required><br>
                        <label for="form_expired_at">วันสิ้นสุด</label>
                        <input type="date" name="form_expired_at" id="form_expired_at" class="date_e" required><br>
                    </div>
                    <div>
                        <label for="form_comment">Comment</label><br>
                        <textarea class="comment" name="form_comment" id="form_comment" cols="30" rows="5"></textarea>
                    </div>
            </div>
        </div>

        <div class="item">
            <div class="content">
                <div class="box2">
                    @if(!empty($qrCodes))
                        @foreach ($qrCodes as $qrCode)
                        <img src="{{ $qrCode }}" alt="QR Code"><br>
                        @endforeach
                        <script>
                            document.getElementById('roundForm').addEventListener('submit', function(event) {
                                event.preventDefault(); // Prevent form submission
                            });
                        </script>
                    @endif
                </div>
            </div>
            <input class="submit" type="submit" value="บันทึก" id="submitButton">
            </form>
        </div>
    </div>


@endsection
