<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>Clicknext: edit</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>

<body>
    <div class="container">
        <h1>แก้ไขรอบสมัคร</h1>
        <form method="post">

            <div class="form-group">
                <label for="name">ชื่อเรื่อง</label>
                <input type="text" id="name" name="name" placeholder="งาน came SWU">
            </div>
            <div class="form-group">
                <label for="location">สถานที่</label>
                <input type="text" id="location" name="location" placeholder="SWU" required>
            </div>
            <div class="form-group">
                <label for="position">ตำแหน่ง</label>
                <select id="position" name="position">
                    <option value="system_analyst">System Analyst</option>
                    <option value="tester">Tester</option>
                    <option value="programmer">Programmer</option>
                    <option value="programmer">Business Analyst</option>
                </select>
            </div>
            <div class="form-group">
                <label for="type">ประเภทผู้สมัคร</label>
                <select id="type" name="type">
                    <option value="full_time">ทํางาน</option>
                    <option value="part_time">ฝึกงาน</option>
                </select>
            </div>
            <div class="form-group">
                <label for="start_date">วันเริ่ม</label>
                <input type="date" id="start_date" name="start_date" required>
            </div>
            <div class="form-group">
                <label for="end_date">วันสิ้นสุด</label>
                <input type="date" id="end_date" name="end_date" required>
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" style="width: 490px; height: 90px;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">บันทึก</button>
            <button type="reset" class="btn btn-danger">ยกเลิก</button>
        </form>
    </div>
</body>

</html>
