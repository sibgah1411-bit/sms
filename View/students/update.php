<div class="row justify-content-center">
    <div class="col-md-12 mx-4 px-4">
        <div class="card shadow mx-2">
            <div class="card-header bg-primary text-white">
                <h3 class="px-4">Update Student</h3>
            </div>
            <div class='card-body'>
                <form action="/sms/students/update?id=<?= $id ?>" method="POST"id="studentForm" class="px-4">
                    
                    <div class='mb-3'>
                        <label for="" class='fw-bold py-3'>First Name</label>
                        <input type="text" class="form-control" name="first_name"
                            value="<?php echo $row['first_name']; ?>" required>
                    </div>
                    <div class='mb-3'>
                        <label for="" class='fw-bold py-3'>Last Name</label>
                        <input type="text" class="form-control" name="last_name"
                            value="<?php echo $row['last_name']; ?>" required>
                    </div>
                    <div class='mb-3'>
                        <label for="" class='fw-bold py-3'>Age</label>
                        <input type="text" class="form-control" id='age' name="age" min="3" max="80" required
                            value="<?php echo $row['age']; ?>">
                        <small id="ageError" class="text-danger"></small>
                    </div>
                    <div class='mb-3'>
                        <label for="" class='fw-bold py-3'>Roll No</label>
                        <input type="text" class="form-control" name="roll_no" value="<?php echo $row['roll_no']; ?>"
                            required>
                    </div>
                    <div class='mb-3'>
                        <label><b>Section</b></label><br><br>
                        <select name='section' id="dropdown" class="form-control"
                            value="<?php echo $row['section']; ?>">
                            <option <?php if ($row['section'] == "Section A")
                                echo "selected"; ?>>Section A</option>
                            <option <?php if ($row['section'] == "Section B")
                                echo "selected"; ?>>Section B</option>
                            <option <?php if ($row['section'] == "Section C")
                                echo "selected"; ?>>Section C</option>
                        </select>
                    </div>
                    <div class='mb-3'>
                        <label for="" class='fw-bold py-3'>Date</label>
                        <input type="date" class="form-control" name="date" placeholder="date"
                            value="<?php echo $row['date']; ?>">
                    </div>
                    <input type="submit" class="btn btn-warning" name="update_btn" value="Update">
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
<script>
    document.getElementById('studentForm').addEventListener("submit", function (event) {
        let age = parseInt(document.getElementById('age').value);
        if (age < 3 || age > 80 || isNaN(age)) {
            event.preventDefault();
            document.getElementById("ageError").innerHTML = "Age must be between 3 and 80.";
        }
    });

</script>