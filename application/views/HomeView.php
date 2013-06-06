<?php

echo "Records from database<br/>";

//foreach($records as $rec){
//echo $rec->id."    ".$rec->status."  ".$rec->priority;
?>


<?php
// foreach ($result as $row);
 ?>


<ul>

<?php foreach ($result as $item): ?>

<li><?=$item?></li>

<?php endforeach; ?>

</ul>