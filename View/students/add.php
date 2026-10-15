<div class="row justify-content-center">
    <div class="col-md-12 mx-4 px-4">
        <div class="card shadow mx-2 ">
            <div class="card-header bg-primary text-white">
                <h3 class="px-4">Add Students</h3>
            </div>
            <div class="card-body">
                <form action="/sms/students/create" method="POST" id="studentForm" class="px-4">
                    
                    <div class="mb-3">
                        <label class="fw-bold py-3">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold py-3">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold py-3">Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Age" min="3" max="80"
                            required>
                        <small id="ageError" class="text-danger"></small>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold py-3">Roll No</label>
                        <input type="number" class="form-control" name="roll_no" placeholder="Roll No" required>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold py-3 ">Section</label>
                        <select name="section" id="dropdown" class="form-control">
                            <option >Section A</option>
                            <option >Section B</option>
                            <option >Section C</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold py-3">Date</label>
                        <input type="date" class="form-control" name="date" placeholder="Date">
                    </div>
                    <input type="submit" class="btn btn-success" name="save_btn" value="Save">
                    <button type="button" class="btn btn-secondary"
                        onclick="window.location.href='/sms/'">Back</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#dropdown').select2();
    });
</script>

<script type="text/javascript">
    document.getElementById("studentForm").addEventListener("submit", function (event) {
        let age = parseInt(document.getElementById("age").value);
        if (age < 3 || age > 80 || isNaN(age)) {
            event.preventDefault();
            document.getElementById("ageError").innerHTML = "Age must be between 3 and 80.";
        }
    });
</script>