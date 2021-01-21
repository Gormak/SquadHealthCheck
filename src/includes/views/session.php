<?php render('_header',array('title'=>$title))?>

<div class="session">
	<p class="center-wrapper">
		<?php echo $image; ?>
	</p>
	<div class="ui-grid-a">
    	<div class="ui-block-a" style="width:20%">
			<img src="assets/img/green_light.png" alt="green_light" />
		</div>
		<div class="ui-block-b" style="width:80%">
			<span><?php echo $firstText; ?></span>
		</div>
	</div>
	<div class="ui-grid-a">
		<div class="ui-block-a" style="width:20%">
			<img src="assets/img/red_light.png" alt="red_light" />
		</div>
		<div class="ui-block-b" style="width:80%">
			<span><?php echo $secondText; ?></span>
		</div>
	</div>
	<div class="center-wrapper colorlight">
		<form data-ajax="false" method="post" action="./">
			<input type="hidden" name="card" id="card" value="<?php echo $card+1; ?>">
			<input type="hidden" name="title" id="title" value="<?php echo $title; ?>">
			<input type="hidden" name="session" id="session" value="<?php echo $_POST['session']; ?>">
            <button type="submit" name="score" class="ui-btn ui-btn-inline ui-shadow ui-corner-all green" value="2">Green</button>
			<button type="submit" name="score" class="ui-btn ui-btn-inline ui-shadow ui-corner-all orange" value="1">Orange</button>
			<button type="submit" name="score" class="ui-btn ui-btn-inline ui-shadow ui-corner-all red" value="0">Red</button>
		</form>
	</div>
</div>

<?php render('_footer')?>