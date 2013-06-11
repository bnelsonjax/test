<!DOCTYPE html>

<html>
<head>
  <title>LOGIN&nbsp;PAGE</title>
</head>

<body>

<?php echo form_open('admin'); ?>

<p>
<?php
    echo form_label('Email Address', 'email');
    echo form_input('email', '', 'id="email"');
?>
</p>

<p>
<?php
    echo form_label('Password', 'password');
    echo form_password('password', '', 'id="password"');
?>
</p>
<?php echo form_submit('submit', 'Login'); ?>
<?php echo form_close(); ?>

<?php echo $data; ?>

</body>
</html>
