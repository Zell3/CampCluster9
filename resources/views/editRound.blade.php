@extends('dashboard')
@section('title', 'Clicknext: EditRound')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/makeRound.css') }}">

    <div class="flexbox-make-round">
        <div class="item">
            <div class="content">
                <form method="POST" action="/editr/{{ $forms->form_token }}">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="title">ชื่อเรื่อง</label>
                        <input class="ti" type="text" name="title" value="{{ $forms->form_title }}" required><br>
                    </div>
                    <div>
                        <label for="location">สถานที่</label>
                        <input class="lo" type="text" name="location" value="{{ $forms->form_location }}"
                            required><br><br>
                    </div>

                    <div>
                        <label for="position">ตำแหน่ง</label><br>
                        @php
                            // ดึงข้อมูลตำแหน่งจากตาราง roles และแสดง checkbox สำหรับตำแหน่งทั้งหมด และทำการเชื่อมตาราง roles กับ forms_ro_id และเลือกค่าที่ตรงกันเพื่อให้มีติ๊กถูกใน checkbox
                            $roles = DB::table('roles')->pluck('ro_name', 'ro_id');

                            // ดึงข้อมูลจาก forms_ro_id ที่ถูกเก็บเป็น JSON array และทำการแปลงเป็น array ด้วย json_decode() ก่อนนำไปใช้งานได้ใน in_array()
                            $selectedRoles = $forms->form_ro_id;

                            // เชื่อมตาราง roles กับ forms_ro_id และหาค่าที่ตรงกัน
                            $selectedRolesNames = collect($roles)->only($selectedRoles)->all();
                        @endphp

                        {{-- ตรวจสอบว่าค่าใน roles ตรงกับค่าที่เลือกหรือไม่ หากตรงกันจะใส่ attribute checked เพื่อให้มีการติ๊กถูกใน checkbox นั้นๆ --}}
                        @foreach ($roles as $roleId => $roleName)
                            <input class="checkbox" type="checkbox" name="roles[]" value="{{ $roleId }}"
                                @if (in_array($roleId, $selectedRoles)) checked @endif disabled>
                            <label for="{{ $roleName }}">{{ $roleName }}</label><br>
                        @endforeach
                    </div>

                    <div>
                        <label for="Applicant_type">ประเภทผู้สมัคร</label><br>
                        <input class="checkbox" type="checkbox" name="is_employee"
                            {{ $forms->form_is_employee ? 'checked' : '' }} disabled>
                        <label for="work">ทำงาน</label><br>

                        <input class="checkbox" type="checkbox" name="is_cooperative"
                            {{ $forms->form_is_cooperative ? 'checked' : '' }} disabled>
                        <label for="Apprentice">ฝึกงาน</label><br>
                    </div>
                    <div>
                        <label for="Start_date">วันเริ่ม</label>
                        <input class="date_s" type="date" name="Start_date" value="{{ $forms->form_created_at }}"
                            required><br>
                        <label for="End_date">วันสิ้นสุด</label>
                        <input class="date_e" type="date" name="End_date" value="{{ $forms->form_expired_at }}"
                            required><br><br>
                    </div>
                    <div>
                        <label for="comment">Comment</label><br>
                        <textarea class="comment" name="comment" cols="30" rows="5"><?php echo $forms->form_comment ?? '-'; ?></textarea>
                    </div>
                    <button class ="submit" type = "submit">บันทึก</button>
                </form>
            </div>
        </div>

        <div class="item">
            <div class="content">
                <div class="box2">
                    @php
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
                    @endforeach
                </div>
            </div>
        </div>

    </div>


@endsection
