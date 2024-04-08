<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Form</div>

                    <div class="card-body">
                        <form method="POST" action="/createform">
                            @csrf
                            <input type="hidden" name="form_hr_id" value="1">
                            <div class="form-group">
                                <label for="form_title">Title</label>
                                <input type="text" name="form_title" id="form_title" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="form_location">Location</label>
                                <input type="text" name="form_location" id="form_location" class="form-control"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="form_comment">Comment</label>
                                <textarea name="form_comment" id="form_comment" class="form-control"></textarea>
                            </div>

                            <input type="hidden" name="form_type" value="basic">

                            <div class="form-group">
                                <label for="form_created_at">Created At</label>
                                <input type="date" name="form_created_at" id="form_created_at" class="form-control"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="form_expired_at">Expired At</label>
                                <input type="date" name="form_expired_at" id="form_expired_at" class="form-control"
                                    required>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" name="form_is_employee" id="form_is_employee"
                                    class="form-check-input">
                                <label for="form_is_employee" class="form-check-label">Is Employee</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" name="form_is_cooperative" id="form_is_cooperative"
                                    class="form-check-input">
                                <label for="form_is_cooperative" class="form-check-label">Is Cooperative</label>
                            </div>

                            <!-- Checkbox options -->
                            <div class="form-group">
                                <label for="roles">Roles</label><br>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="roles[]" value="1" id="role_sa"
                                        class="form-check-input">
                                    <label for="role_sa" class="form-check-label">System Analyst</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="roles[]" value="2" id="role_tester"
                                        class="form-check-input">
                                    <label for="role_tester" class="form-check-label">Tester</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="roles[]" value="3" id="role_programmer"
                                        class="form-check-input">
                                    <label for="role_programmer" class="form-check-label">Programmer</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="roles[]" value="4" id="role_ba"
                                        class="form-check-input">
                                    <label for="role_ba" class="form-check-label">Business Analyst</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
