<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CodeIgniter Pagination with Bootstrap Styles | Example</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" />

<body>
    <div id="container">
        <h1>Countries</h1>
        <div id="body">
            <?php
            foreach ($results as $data) {
                echo $data->id . " - " . $data->sector . "<br>";
            }
            ?>
            <p><?php echo $links; ?></p>
        </div>
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
    </div>
</body>
<script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/jquery-1.11.3.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/bootstrap/js/bootstrap.js"); ?>"></script>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Department Name</th>
                        <th>Head of Department</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php  foreach ($results as $data) { ?>
                    <tr>
                        <td><?php echo ($page+1); ?></td>
                        <td><?php echo $data->id; ?></td>
                        <td><?php echo$data->sector; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <?php echo $links; ?>
        </div>
    </div>
</div>
