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
                <th>Admin ID</th>
                <th>Admin Name</th>
                <th>Phone</th>
                <th>Email Address</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($all_admin_info as $v_admin) {
            ?>
                <tr>
                    <td class="center"><?php echo $v_admin->admin_id ?></td>
                    <td class="center"><?php echo $v_admin->admin_name ?></td>
                    <td class="center"><?php echo $v_admin->phone ?></td>
                    <td class="center"><?php echo $v_admin->email_address ?></td>
                    <td class="center"> <img width="50px" height="50px" src="<?php echo base_url() ?>/image/<?php echo $v_admin->admin_image ; ?>"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>