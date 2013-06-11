<script language="JavaScript" type="text/JavaScript" defer>
<!--
function chromePrint(){
print();
}
function chromePrintDelay(){
setTimeout("print()", 500);
}
var browserName=navigator.appName;
if (browserName=="Microsoft Internet Explorer")
 {
 window.print();
 }
 else
  {
  if (browserName=="Netscape") //google chrome app.Name
  {
  chromePrintDelay();
  }
  else {
   window.onload = window.print; // helps with Opera
   }
   }
//-->
</script>
    <div class="row">
		    <div class="span8">
	      		<div class="widget">
					<div class="widget-content">
						<h3>View Note ID: <?php  echo $data['nid']; ?></h3>
						<p>Note Detail: <?php  echo $data['note']; ?></p>
                        <p>Posted By: <?php  echo $data['firstName']; ?> <?php  echo $data['lastName']; ?></p>
                        <p>On: <?php  echo $data['notePostedTime']; ?></p>
					</div> <!-- /widget-content -->
				</div> <!-- /widget -->
		    </div> <!-- /span12 -->
    </div><!-- /.row -->
