<!DOCTYPE html>
<html>
<head>
	<title>Upload Image in Codeigniter</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form method="post">
        <h5>Name</h5>
        <input type="text" name="name" value="<?php echo set_value('name') ?>" />
        <?php if(form_error('name')){
            echo "<span style='color:red'>".form_error('name')."</span>";
        }
        ?>

        <h5>Email</h5>
        <input type="email" name="email" value="<?php echo set_value('email') ?>" />
        <?php if(form_error('email')){
            echo "<span style='color:red'>".form_error('email')."</span>";
        }
        ?>

        <div><input type="submit" value="Submit"/></div>
    </form>
    </body>
    </html>
