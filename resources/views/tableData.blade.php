<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/filter.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Table</title>
</head>

<body>

    {{-- header --}}
    <header class="p-3 mb-3 border-bottom">
        <div class="container"></div>
    </header>

    {{-- sidebar for test --}}
    <div class="sidebar">test</div>
    {{-- <form> --}}
    <div class="tools-flex-box">

        {{-- email button --}}
        <div class="item">
            <div class="btn-email">

                <a href="#"><button class="btn-email-bg"><svg class="iconColor" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-envelope"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg></button></a>
            </div>
        </div>

        <div class="item">
            {{-- search  bar --}}
            <div class="searchBar">
                <input type="text" placeholder="Search" class="inputSearch">
                <button class=" btn-search-bg"><svg class="iconColor xmlns=" http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg></button>
            </div>
        </div>
        <div class="item">
            {{-- filter button --}}
            {{-- set path to filter page here --}}
            <div>
                <a href="#"><button class="btn-filter-bg" id = "filterBtn"><svg class="iconColor"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-filter" viewBox="0 0 16 16">
                            <path
                                d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>
    {{-- </form> --}}

    {{-- filter action --}}
    <div id="filterPopup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <!-- Filter form or options go here -->
            <form>
                <div class="container-grid">
                    <div class="Date">
                        <label for="startDate">วันที่</label>
                        <input type="date" id="startDate" name="startDate" pattern="\d{4}-\d{2}-\d{2}">
                        <label for="endDate" class="endDate">ถึง</label>
                        <input type="date" id="endDate" name="endDate" pattern="\d{4}-\d{2}-\d{2}">
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
                        <label for="waiting">รอตอบกลับ</label>
                        <br>
                        <input type="checkbox" id="responded" name="emailStatus" value="responded">
                        <label for="responded">ตอบกลับแล้ว</label>
                    </div>

                    <div class="position">
                        <label for="position">ตำแหน่ง</label>
                        <br>
                        <input type="checkbox" id="internship" name="position" value="System Analyst">
                        <label for="internship">System Analyst</label>
                        <br>
                        <input type="checkbox" id="internship" name="position" value="Business Analyst">
                        <label for="internship">Business Analyst</label>
                        <br>
                        <input type="checkbox" id="internship" name="position" value="Tester">
                        <label for="internship">Tester</label>
                        <br>
                        <input type="checkbox" id="internship" name="position" value="Programmer">
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

    {{-- table --}}
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>พิน</th>
                    <th>เลือก</th>
                    <th>วันที่</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ประเภทผู้สมัคร</th>
                    <th>ตำแหน่ง</th>
                    <th>ฟอร์มเบื้องต้น</th>
                    <th>ฟอร์มเพิ่มเติม</th>
                    <th>สถานะอีเมล</th>
                </tr>
            </thead>
            <tbody class = "show-data">
                <?php foreach ($applicants as $index => $applicant) : ?>
                <tr>
                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pin-angle" viewBox="0 0 16 16">
                            <path
                                d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a6 6 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707s.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a6 6 0 0 1 1.013.16l3.134-3.133a3 3 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146m.122 2.112v-.002zm0-.002v.002a.5.5 0 0 1-.122.51L6.293 6.878a.5.5 0 0 1-.511.12H5.78l-.014-.004a5 5 0 0 0-.288-.076 5 5 0 0 0-.765-.116c-.422-.028-.836.008-1.175.15l5.51 5.509c.141-.34.177-.753.149-1.175a5 5 0 0 0-.192-1.054l-.004-.013v-.001a.5.5 0 0 1 .12-.512l3.536-3.535a.5.5 0 0 1 .532-.115l.096.022c.087.017.208.034.344.034q.172.002.343-.04L9.927 2.028q-.042.172-.04.343a1.8 1.8 0 0 0 .062.46z" />
                        </svg></td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>{{ $applicant->bdu_register_date }}</td>
                    <td>{{ $applicant->bdu_name }} {{ $applicant->bdu_lastname }}</td>
                    <td>{{ $applicant->bdu_working }}</td>
                    <td>{{ $applicant->role->ro_name }}</td>
                    {{-- ใส่ลิงก์ฟอร์ม --}}
                    <td><a href="#"><button class="btn-link">ฟอร์มเบื้องต้น</button></a></td>
                    {{-- ใส่ลิงก์ฟอร์ม --}}
                    <td><a href="#"><button class="btn-link">ฟอร์มเพิ่มเติม</button></a></td>
                    <td><a href="#"><button class="btn-status-done">Done</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    {{-- pop up --}}
    <script>
        const tableBody = document.querySelector('.show-data');
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

        // Add an event listener to the "Apply Filter" button
        document.getElementById('applyFilter').addEventListener('click', () => {
            // Get the filter values
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            const typeCheckboxes = document.querySelectorAll('input[name="type"]:checked');
            const type = Array.from(typeCheckboxes).map(checkbox => checkbox.value);
            const statusCheckboxes = document.querySelectorAll('input[name="status"]:checked');
            const statuses = Array.from(statusCheckboxes).map(checkbox => checkbox.value);
            const emailStatusCheckboxes = document.querySelectorAll('input[name="emailStatus"]:checked');
            const emailStatuses = Array.from(emailStatusCheckboxes).map(checkbox => checkbox.value);
            const positionCheckboxes = document.querySelectorAll('input[name="position"]:checked');
            const position = Array.from(positionCheckboxes).map(checkbox => checkbox.value);

            // Filter the table rows
            filterTableRows(startDate, endDate, type, statuses, emailStatuses, position);

            // Close the filter popup
            document.getElementById('filterPopup').style.display = 'none';
        });

        function filterTableRows(startDate, endDate, type, statuses, emailStatuses, position) {
            // Loop through the table rows
            for (let i = 0; i < tableBody.rows.length; i++) {
                const row = tableBody.rows[i];
                const applicantDate = new Date(row.cells[2].textContent).getTime();
                const applicantType = row.cells[4].textContent;
                const applicantStatus = row.cells[8].textContent.trim();
                const applicantPosition = row.cells[5].textContent;

                // Check if the row matches the filter criteria
                const matchesDate = applicantDate >= new Date(startDate).getTime() && applicantDate <= new Date(endDate).getTime();
                const matchesType = type.length === 0 || type.includes(applicantType);
                const matchesStatus = statuses.length === 0 || statuses.includes(applicantStatus.toLowerCase());
                const matchesEmailStatus = emailStatuses.length === 0 || emailStatuses.includes(applicantStatus
                .toLowerCase());
                const matchesPosition = position.length === 0 || position.includes(applicantPosition);

                // Show or hide the row based on the filter criteria
                if (matchesDate && matchesType && matchesStatus && matchesEmailStatus && matchesPosition) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        }

        cancelFilterBtn.onclick = function() {
            // Reset filter form values if needed
            // ...

            // Close popup without applying filter
            filterPopup.style.display = 'none';
        }
    </script>
</body>

</html>
