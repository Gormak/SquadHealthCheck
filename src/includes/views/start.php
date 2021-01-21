<?php render('_header',array('title'=>$title))?>

<script type="text/javascript" src="assets/js/qrcode.min.js"></script>

<div class="start">
	<p>
		<span>Welcome to : </span>
		<b><?php echo $team; ?></b>
	</p>
	<p>
		<span>Please used the following key session :</span>
		<b><?php echo $content; ?></b>
	</p>
	
	
	
 <div id="qrcode"></div>
 
 <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/." class="ui-btn ui-shadow ui-corner-all" data-role="button">Home</a>
  
  <script type="text/javascript">
  var qrcode = new QRCode(document.getElementById("qrcode"), {
      width : 250,
      height : 250
  });

  function makeCode () {
      qrcode.makeCode("http://<?php echo $_SERVER['SERVER_NAME']; ?>/?session=<?php echo $content; ?>");
  }

  makeCode();

    </script>
	
	
	
	
</div>

<?php render('_footer')?>