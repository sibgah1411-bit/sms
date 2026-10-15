<div class="card shadow border-0 rounded-3 px-4 mx-4">
    <div class="card-header bg-white border-0  pt-4 d-flex justify-content-between align-items-center">
        <div>
            <h3 class="fw-bold text-dark m-0">Student Table</h3>
            <p class="text-muted small m-0">
                Overview of registered students and sections
            </p>
        </div>

        <a href="students/create" class="btn btn-primary">
            + Add New Student
        </a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover text-center mt-2">
            <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Roll No</th>
                    <th>Section</th>
                    <th>Date</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (mysqli_num_rows($data) > 0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        
                        ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['first_name']; ?></td>
                            <td><?= $row['last_name']; ?></td>
                            <td><?= $row['age']; ?></td>
                            <td><?= $row['roll_no']; ?></td>
                            <td><?= $row['section']; ?></td>
                            <td><?= $row['date']; ?></td>

                            <td>
                                <a class="btn btn-warning btn-sm" href="/sms/students/update?id=<?= $row['id']; ?>">
                                    Edit
                                </a>
                            </td>

                            <td>
                                <a class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this record?')"
                                    href="/sms/students/delete?id=<?= $row['id']; ?>">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="9">No records found</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>