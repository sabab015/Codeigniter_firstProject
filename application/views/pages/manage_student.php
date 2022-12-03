<div class="box-content">
    <?php
    $message = $this->session->userdata("message");
    if ($message) {
        echo "<p class= 'alert alert-danger'>$message</p>";
        $this->session->unset_userdata("message");
    }
    ?>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Category</th>
                <th>Student Name</th>
                <th>Phone</th>
                <th>Roll</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($all_student_info as $v_student) {
            ?>
                <tr>
                    <td class="center"><?php echo $v_student->student_id ?></td>
                    <td class="center"><?php echo $v_student->student_name ?></td>
                    <td class="center"><?php echo $v_student->student_phone ?></td>
                    <td class="center"><?php echo $v_student->student_roll ?></td>
                    <td>
                        <a href="<?php base_url(); ?>edit-student/<?php echo $v_student->student_id ?>" class="btn btn-info"><i class="halflings-icon white edit"></i></a>
                        <a href="<?php base_url(); ?>delete-student/<?php echo $v_student->student_id ?>" class="btn btn-info" id="delete"><i class="halflings-icon white trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>