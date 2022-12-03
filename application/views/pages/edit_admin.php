<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <form class="form-horizontal" action="<?php base_url();?>save-admin" method="POST" enctype="multipart/form-data">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="fileInput"> Admin Email</label>
                    <div class="controls">
                        <input name="email_address" id="fileInput" type="email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="fileInput"> Password</label>
                    <div class="controls">
                        <input name="password" id="fileInput" type="password">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="fileInput"> Image</label>
                    <div class="controls">
                        <input name="admin_image" class="input-file uniform_on" id="fileInput" type="file">
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add Admin</button>
                </div>
            </fieldset>
        </form>

    </div>
</div>
<!--/span-->