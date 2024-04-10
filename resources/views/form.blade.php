<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>Form</title>
</head>

<body>
    <form action="{{ url('/form') }}" method="POST" class="form" enctype="multipart/form-data">
        @csrf
        <div class="container-form">
            <input type="hidden" id="form_token" name="form_token" value="{{ $forms->form_token }}">
        </div>
        <div class="container-form">
            <label for="inputName" class="header">ชื่อ</label>
            <br>
            <input type="text" name= "name" required placeholder="กรอกชื่อ" class="inputText">

        </div>

        <div class="container-form">
            <label for="inputLastName" class="header">นามสกุล</label>
            <br>
            <input type="text" name="lastname" required placeholder="กรอกนามสกุล" class="inputText">
        </div>
        <div class="container-form">
            <label for="inputPhone" class="header">เบอร์โทรศัพท์</label>
            <br>
            <input type="text" name="phone" required placeholder="กรอกเบอร์โทรศัพท์" class="inputText">
        </div>
        <div class="container-form">
            <label for="inputEmail" class="header">อีเมล</label>
            <br>
            <input type="text" name="email" required placeholder="กรอกอีเมล" class="inputText">
        </div>
        <div class="container-form">
            <label for="" class="header">ประเภทผู้สมัคร</label>
            <br>
            <select name="role_name" class="inputText">
                <?php if($forms->form_is_employee == 1 && $forms->form_is_cooperative == 1){ ?>
                    <option value="employee" name = "employee">พนักงานทั่วไป</option>
                    <option value="cooperative" name = "cooperative">สหกิจศึกษา</option>
                <?php }else if($forms->form_is_employee == 1){ ?>
                    <option value="employee" name = "employee">พนักงานทั่วไป</option>
                <?php }else {?>
                    <option value="cooperative" name = "cooperative">สหกิจศึกษา</option>
                <?php } ?>
            </select>
        </div>
        <div class="container-form">
            <label for="inputWorking" class="header">ตำแหน่ง</label>
            <br>
            <select name="role_id" class="inputText">
                <?php if($id == "1"){?>
                    <option value="1" name = "role_id">System Analysis</option>
                <?php }else if($id == "2"){ ?>
                    <option value="2" name = "role_id">Tester</option>
                <?php }else if($id == "3"){?>
                    <option value="3" name = "role_id">Programmer</option>
                <?php }else if($id == "4"){ ?>
                    <option value="4" name = "role_id">Business Analyst</option>
                <?php }else if($id == "all"){ ?>
                    <option value="1" name = "role_id">System Analysis</option>
                    <option value="2" name = "role_id">Tester</option>
                    <option value="3" name = "role_id">Programmer</option>
                    <option value="4" name = "role_id">Business Analyst</option>
                <?php } ?>

            </select>
        </div>
        <div class="container-form">
            <label for="inputProgramLanguage" class="header">ภาษาโปรแกรมที่ถนัด</label>
            <br>
            <input type="text" name="programlanguage" required placeholder="กรอกภาษาโปรแกรมที่ถนัด"
                class="inputText">
        </div>
        <div class="container-form">
            <label for="inputaddInformation" class="header">ข้อมูลเพิ่มเติม</label>
            <br>
            <textarea name="addinformation" cols="30" rows="5" placeholder="กรอกข้อมูลเพิ่มเติม" class="inputTextArea"></textarea>
        </div>
        <div class="container-form">
            <label for="inputResume" class="header">Resume(PDF, PNG, JPEG)</label>
            <br>
            <input type="file" name="image" class="inputFile">
        </div>

        <div class="information">ขนาดไฟล์ของเอกสารของคุณไม่ควรเกิน 10MB</div>

        <p class="header">หากไม่มีข้อมูล Resume</p>

        <div class="container-form">
            <label for="inputPerformance" class="header">ผลงาน</label>
            <br>
            <textarea name="performance" cols="30" rows="5" placeholder="กรอกผลงาน" class="inputTextArea"></textarea>
        </div>
        <div class="container-form">
            <label for="inputTalent" class="header">ความสามารถพิเศษ</label>
            <br>
            <textarea name="talent" cols="30" rows="5" placeholder="กรอกความสามารถพิเศษ" class="inputTextArea"></textarea>
        </div>
        <div class="container-form">
            <label for="inputEducationBackground" class="header">ประวัติการศึกษา</label>
            <br>
            <textarea name="educationbackground" required cols="30" rows="5" placeholder="กรอกประวัติการศึกษา"
                class="inputTextArea"></textarea>
        </div>
        <div class="container-form">
            <label for="inputLanguage" class="header">ภาษาสื่อสารที่ถนัด</label>
            <br>
            <textarea name="language" cols="30" rows="5" placeholder="กรอกภาษาสื่อสารที่ถนัด" class="inputTextArea"></textarea>
        </div>
        <div class="container-form">
            <label for="inputExpertSkills" class="header">ทักษะที่เชี่ยวชาญ</label>
            <br>
            <textarea name="expertSkills" required cols="30" rows="5" placeholder="กรอกทักษะที่เชี่ยวชาญ"
                class="inputTextArea"></textarea>
        </div>
        <button class= "btnSubmit" type= "submit">ส่ง</button>
    </form>
</body>

</html>
