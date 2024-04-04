<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Clicknext: edit</title>
  <link rel="stylesheet" href="{{asset("css/edit.css")}}">
</head>
<body>
  <div class="container">
    <h1>แก้ไขรอบสมัคร</h1>
    <form method="post">
      <div class="form-group">
        <label for="name">ชื่อเรื่อง</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="email">สถานที่</label>
        <input type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="position">ตำแหน่ง</label>
        <select id="position" name="position">
          <option value="system_analyst">System Analyst</option>
          <option value="tester">Tester</option>
          <option value="programmer">Programmer</option>
          <option value="business_analyst">Business Analyst</option>
        </select>
      </div>
      <div class="form-group">
        <label for="type">ประเภทผู้สมัคร</label>
        <select id="type" name="type">
          <option value="full_time">ทํางานประจำ</option>
          <option value="freelance">ฟรีแลนซ์</option>
        </select>
      </div>
      <div class="form-group">
        <label for="start_date">วันเริ่ม</label>
        <input type="date" id="start_date" name="start_date">
      </div>
      <div class="form-group">
        <label for="end_date">วันสิ้นสุด</label>
        <input type="date" id="end_date" name="end_date">
      </div>
      <div class="form-group">
        <label for="comment">Comment</label>
        <textarea id="comment" name="comment" rows="5"></textarea>
      </div>
      <input type="submit" name="submit" value="สมัคร">
    </form>
  </div>
</body>
</html>
