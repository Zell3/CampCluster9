{{-- @extends('dashboard')
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
                    @endif
                </div>
            </div>
            <input class="submit" type="submit" value="บันทึก" id="submitButton">
            </form>
        </div>
    </div>


@endsection --}}
@extends('dashboard')
@section('title', 'Clicknext: สร้างรอบสมัคร')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/makeRound.css') }}">
    <div class="scrollcontentlock">
    <div class="flexbox-make-round">
        <div class="item">
            <div class="content">
                <form id="makeRound" method="POST" action="{{ url('makeRound') }}">
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
                    <div>
                        <button class ="submit" type = "submit">บันทึก</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="item">
            <div class="content">
                <div class="box2">
                    <div class="qr-code">
                        QR Code<br>
                    </div>
                    @if(!empty($forms))
                        @php
                        $form_token = $forms->form_token;
                        $qrCodes = DB::table('forms')->where('form_token', $form_token)->first();
                        $selectedRoles = $forms->form_ro_id;
                        @endphp
                    @foreach($selectedRoles as $roleId)
                        @php
                            $roleName = DB::table('roles')->where('ro_id', $roleId)->value('ro_name');
                            $qrCodeFilename = "qr_code_$forms->form_token" . "_$roleId.png";
                            $qrCodePath = asset("qrcodes/$qrCodeFilename");
                        @endphp
                        <div class="role-name">
                            {{ $roleName }}
                        </div>
                        <div class="row">
                            <img src="{{ $qrCodePath }}" width="225" height="225" alt="QR Code">
                        </div>
                        <div class="row justify-content-center align-items-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                            </svg>
                        </div>
                        <br>
                    @endforeach
                    @php
                        $qrCodeFilename = "qr_code_$forms->form_token" . "_all.png";
                        $qrCodePath = asset("qrcodes/$qrCodeFilename");
                    @endphp
                        <div class="role-name">
                            All
                        </div>
                        <div class="row">
                            <img src="{{ $qrCodePath }}" width="225" height="225" alt="QR Code">
                        </div>
                        <div class="row justify-content-center align-items-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                            </svg>
                        </div>
                    @else
                        <div class="role-name">
                            ไม่พบข้อมูลดังกล่าว
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
