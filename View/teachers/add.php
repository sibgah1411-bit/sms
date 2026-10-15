        <div class="row justify-content-center">
             <div class="col-md-12 mx-4 px-4">
              <div class="card shadow mx-2">
                <div class="card-header bg-primary text-white">
                    <h3 class="px-4">Add Teachers</h3>
                </div>
                <div class='card-body'>
                <form action="/sms/teachers/create" method="POST" id="studentForm" class="px-4">
                    
                    <div class='mb-3'>
                        <label class='fw-bold py-3'>First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First Name"required>
                    </div>
                    <div class='mb-3'>
                        <label class='fw-bold py-3'>Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                    </div>
                    <div class='mb-3'>
                        <label class='fw-bold py-3'>Courses</label>
                         <select name='courses' id="dropdown" class="form-control">
                            <option >Database System</option>
                            <option >Information Security</option>
                            <option >Mobile Developement</option>
                        </select>
                    </div>
                    <div class='mb-3'>
                        <label class='fw-bold py-3'>Salary</label>
                        <input type="number" class="form-control" name="salary" placeholder="salary" required>
                    </div>    
                    <div class='mb-3'>
                        <label><b>Section</b></label><br><br>
                        <select name='section' id="dropdown1" class="form-control">
                            <option >Section A</option>
                            <option >Section B</option>
                            <option >Section C</option>
                        </select>
                    </div>    
                    <div class='mb-3'>
                        <label class='fw-bold py-3'>Hire Date</label>
                        <input type="date" class="form-control" name="hire_date" placeholder="Date">
                    </div>    
                    <input type="submit" class="btn btn-success" name="save_btn" value="Save">
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='/sms/teachers'">Back</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#dropdown').select2();
         $('#dropdown1').select2();
    });
    </script>
    

