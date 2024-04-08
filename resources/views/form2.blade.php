<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form2.css') }}">
    <title>ฟอร์มตัวอย่าง</title>
</head>

<body>

    <h2>ฟอร์มเพิ่มเติม</h2>

    <div class="flexbox">
        <div class="item">
            <form action="/form2" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="birthday">วัน เดือน ปีเกิด</label><br>
                    <input type="text" name="birthday" placeholder="กรุณากรอก" required><br>
                </div>
                <div>
                    <label for="nationality">สัญชาติ</label><br>
                    <input type="text" name="nationality" placeholder="กรุณากรอก" required><br>
                </div>
                <div>
                    <label for="religion">ศาสนา</label><br>
                    <input type="text" name="religion" placeholder="กรุณากรอก" required><br>
                </div>
                <div>
                    <label for="maritalstatus">สถานะภาพสมรส</label><br>
                    <input type="text" name="maritalstatus" placeholder="กรุณากรอก" required><br>
                </div>
                <div>
                    <label for="address">ที่อยู่ตามทะเบียนบ้าน</label><br>
                    <textarea name="address" id="" cols="30" rows="5" placeholder="กรุณากรอก"
                        required></textarea>
                </div>
                <div>
                    <label for="currentaddress">ที่อยู่ปัจจุบัน</label><br>
                    <textarea name="currentaddress" id="" cols="30" rows="5" placeholder="กรุณากรอก"
                        required></textarea>
                </div>

            </form>
        </div>

        <div class="item">
            <form action="/form2" method="POST">
                @csrf
                <div>
                    <label for="emergency_contact_name">ชื่อของบุคคลที่ติดต่อได้กรณีเร่งด่วน</label><br>
                    <input type="text" name="emergency_contact_name" placeholder="กรุณากรอก" required><br>
                </div>
                <div>
                    <label for="emergency_contact_lastname">นามสุกลของบุคคลที่ติดต่อได้กรณีเร่งด่วน</label><br>
                    <input type="text" name="emergency_contact_lastname" placeholder="กรุณากรอก" required><br>
                </div>
                <div>
                    <label for="emergency_contact_status">สถานะที่เกี่ยวข้องของบุคคลที่ติดต่อได้กรณีเร่งด่วน</label><br>
                    <input type="text" name="emergency_contact_status" placeholder="กรุณากรอก" required><br>
                </div>
                <div>
                    <label for="emergency_contact_phone">เบอร์โทรศัพท์ของบุคคลที่ติดต่อได้กรณีเร่งด่วน</label><br>
                    <input type="text" name="emergency_contact_phone" placeholder="กรุณากรอก" required><br>
                </div>
                <div>
                    <label for="former_company">บริษัทที่เคยทำงาน</label><br>
                    <input type="text" name="former_company" placeholder="กรุณากรอก" required><br>
                </div>
                <div>
                    <label for="award">รางวัลที่ได้รับ</label><br>
                    <input type="text" name="award" placeholder="กรุณากรอก" required><br>
                </div>

                <div>
                    <label for="certificate">ใบรับรอง(PDF, PNG, JPG) </label><br>
                    <input class="file" type="file" name="certificate" required><br>
                </div>

                <div>
                    <input class="submit-1" type="submit" value="บันทึก">
                    <input class="submit-2" type="submit" value="ส่ง">
                </div>
            </form>
        </div>
    </div>

</body>

</html>
