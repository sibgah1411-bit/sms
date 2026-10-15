        <div class="row justify-content-center">
             <div class="col-md-12 mx-4 px-4">
              <div class="card shadow mx-2">
                <div class="card-header bg-primary text-white">
                    <h3 class="px-4">Update Student</h3>
                </div>
                <div class='card-body'>
                <form action="/sms/teachers/update?id=<?=$id?>" method="POST" id="studentForm" class="px-4">
                    <div class='mb-3'>
                        <label for="" class='fw-bold py-3'>First Name</label>
                    <input type="text" class="form-control"  name="first_name"value="<?php echo $row['first_name']; ?>"required>
                    </div>
                    <div class='mb-3'>
                        <label for="" class='fw-bold py-3'>Last Name</label>
                    <input type="text" class="form-control"  name="last_name"value="<?php echo $row['last_name']; ?>"required>
                    </div>
                    <div class='mb-3'>
                        <label for="" class='fw-bold py-3'>Courses</label>
                        <select name='courses' id="dropdown1" class="form-control" value="<?php echo $row['courses']; ?>">
                        <option <?php if($row['courses']=="Database System") echo "selected"; ?>>Database System</option>
                        <option <?php if($row['courses']=="Information Security") echo "selected"; ?>>Information Security</option>
                        <option <?php if($row['courses']=="Mobile Developement") echo "selected"; ?>>Mobile Developement</option>
                    </select>
                    
                    </div>
                    <div class='mb-3'>
                        <label for="" class='fw-bold py-3'>Salary</label>
                    <input type="number" class="form-control"  name="salary"value="<?php echo $row['salary']; ?>">
                    </div>
                    <div class='mb-3'>
                    <label><b>Section</b></label><br><br>
                    <select name='section' id="dropdown" class="form-control" value="<?php echo $row['section']; ?>">
                        <option <?php if($row['section']=="Section A") echo "selected"; ?>>Section A</option>
                        <option <?php if($row['section']=="Section B") echo "selected"; ?>>Section B</option>
                        <option <?php if($row['section']=="Section C") echo "selected"; ?>>Section C</option>
                    </select>
                    </div>
                    <div class='mb-3'>
                        <label for="" class='fw-bold py-3'>Hire Date</label>
                    <input type="date" class="form-control"  name="hire_date" placeholder="date" value="<?php echo $row['hire_date']; ?>">
                    </div>
                    <input type="submit" class="btn btn-warning" name="update_btn" value="Update">
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='/sms/teachers'">Back</button>
                </form>
            </div>
            </div>
            </div>
        </div> 
        <script type="text/javascript">
            $(document).ready(function(){
                $('#dropdown').select2();
                $('#dropdown1').select2();
            });
        </script> 
