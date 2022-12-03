<link id="bootstrap-style" href="../front-end/css/bootstrap.min.css" rel="stylesheet">
    <link href="../front-end/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="../front-end/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="../front-end/css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="../front-end/img/favicon.ico">

<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
        </div>
    </div>
    <?php
    $message = $this->session->userdata("message");
    if ($message) {
        echo "<p class= 'alert alert-danger'>$message</p>";
        $this->session->unset_userdata("message");
    }
    ?>
    <div class="box-content">
        <form class="form-horizontal" action="<?php echo base_url()?>update-student" method="POST">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">Student Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="date01" name="student_name" value="<?php echo $all_student_info_by_id->student_name?>">
                    </div>
                    <div class="controls">
                        <input type="hidden" class="input-xlarge" id="date01" name="student_id" value="<?php echo $all_student_info_by_id->student_id?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Student Phone</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="date01" name="student_phone" value="<?php echo $all_student_info_by_id->student_phone?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Student Roll</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="date01" name="student_roll" value="<?php echo $all_student_info_by_id->student_roll?>">
                    </div>
                </div>
                <!-- <div class="control-group">
                    <label class="control-label" for="fileInput">File input</label>
                    <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" type="file">
                    </div>
                </div> -->
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update Student</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<!--/span-->