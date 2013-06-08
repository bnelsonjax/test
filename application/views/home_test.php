<!DOCTYPE html>

<html>
<head>
  <title></title>
</head>
<body>
<div>
<p>My view has been loaded</p>

<?php foreach($rows as $r) : ?>
    <h1><?php echo $r->title; ?></h1>
    <div><?php echo $r->comments; ?></div>
<?php endforeach; ?>
</div>


</body>
</html>
