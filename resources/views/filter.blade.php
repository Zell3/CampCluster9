<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="filter.css" />
</head>

<body>
    <div class="content">
        <h1>Your Content Here</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            bibendum, velit eu interdum congue, nulla augue venenatis massa,
            nec sagittis felis sapien in ligula.
        </p>
    </div>
    <div class="footer">
        <button id="filterBtn" type="submit">Filter</button>
    </div>


    <!-- Filter Popup -->
    <div id="filterPopup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
                        <!-- Filter form or options go here -->
                <form>
                    <div class="container-grid">
                        <div class="Date">
                            <label for="startDate">วันที่</label>
                            <input type="date" id="startDate" name="startDate">
                            <label for="endDate" class="endDate">ถึง</label>
                            <input type="date" id="endDate" name="endDate">
                        </div>

                        <div class="type">
                            <label>ประเภทผู้สมัคร</label>
                            <br>
                            <input type="checkbox" id="jobApplication" name="type" value="jobApplication">
                            <label for="jobApplication">สหกิจ</label>
                            <br>
                            <input type="checkbox" id="internship" name="type" value="internship">
                            <label for="internship">พนักงาน</label>
                        </div>

                        <div class="status">
                            <label>แสดงสถานะ</label>
                            <br>
                            <input type="checkbox" id="read" name="status" value="read">
                            <label for="read">อ่านแล้ว</label>
                            <br>
                            <input type="checkbox" id="unread" name="status" value="unread">
                            <label for="unread">ยังไม่อ่าน</label>
                        </div>
                        <br>
                        <div>
                            <label class="statusEmail">สถานะอีเมล</label>
                            <br>
                            <input type="checkbox" id="waiting" name="emailStatus" value="waiting">
                            <label for="waiting">อ่านแล้ว</label>
                            <br>
                            <input type="checkbox" id="responded" name="emailStatus" value="responded">
                            <label for="responded">ยังไม่อ่าน</label>
                        </div>

                        <div class="position">
                            <label for="position">ตำแหน่ง</label>
                            <br>
                            <input type="checkbox" id="internship" name="type" value="internship">
                            <label for="internship">System Analyst</label>
                            <br>
                            <input type="checkbox" id="internship" name="type" value="internship">
                            <label for="internship">Business Analyst</label>
                            <br>
                            <input type="checkbox" id="internship" name="type" value="internship">
                            <label for="internship">Tester</label>
                            <br>
                            <input type="checkbox" id="internship" name="type" value="internship">
                            <label for="internship">Programmer</label>
                            </div>

                            <br>
                            {{-- button go here --}}
                            <div class="button">
                            <button type="button" id="applyFilter" class="save">บันทึก</button>
                            <button type="button" id="cancelFilter" class="cancle">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- pop up --}}
    <script>
        const filterBtn = document.getElementById('filterBtn');
        const filterPopup = document.getElementById('filterPopup');
        const closeBtn = document.getElementsByClassName('close')[0];
        const applyFilterBtn = document.getElementById('applyFilter');
        const cancelFilterBtn = document.getElementById('cancelFilter');

        // Open filter popup
        filterBtn.onclick = function() {
            filterPopup.style.display = 'block';
        }

        // Close filter popup
        closeBtn.onclick = function() {
            filterPopup.style.display = 'none';
        }

        // Close popup when clicked outside
        window.onclick = function(event) {
            if (event.target == filterPopup) {
                filterPopup.style.display = 'none';
            }
        }

        // Apply filter
        applyFilterBtn.onclick = function() {
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            const typeCheckboxes = document.querySelectorAll('input[name="type"]:checked');
            const types = Array.from(typeCheckboxes).map(checkbox => checkbox.value);
            const statusCheckboxes = document.querySelectorAll('input[name="status"]:checked');
            const statuses = Array.from(statusCheckboxes).map(checkbox => checkbox.value);
            const emailStatusCheckboxes = document.querySelectorAll('input[name="emailStatus"]:checked');
            const emailStatuses = Array.from(emailStatusCheckboxes).map(checkbox => checkbox.value);
            const positionSelect = document.getElementById('position');
            const positions = Array.from(positionSelect.selectedOptions).map(option => option.value);

            // Perform filtering logic here based on the filter values
            console.log('Start Date:', startDate);
            console.log('End Date:', endDate);
            console.log('Types:', types);
            console.log('Statuses:', statuses);
            console.log('Email Statuses:', emailStatuses);
            console.log('Positions:', positions);

            // Close popup after applying filter
            filterPopup.style.display = 'none';
        }

        cancelFilterBtn.onclick = function() {
            // Reset filter form values if needed
            // ...

            // Close popup without applying filter
            filterPopup.style.display = 'none';
        }
    </script>
</body>
