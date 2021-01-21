<?php render('_header',array('title'=>$title))?>

<p id="alert">
	<?php echo $content; ?>
</p>

<p id="home" class="active">
	<a href="#popupSession" data-rel="popup" data-position-to="window" class="ui-btn" data-transition="pop">Join the session (Team member)</a>
	<a href="#popupStart" data-rel="popup" data-position-to="window" class="ui-btn" data-transition="pop">New Session (Coach)</a>
	<a href="#popupResults" data-rel="popup" data-position-to="window" class="ui-btn" data-transition="pop">Show results</a>
</p>

<div data-role="popup" id="popupStart" data-theme="a" class="ui-corner-all">
    <form data-ajax="false" method="post" action="./">
        <div style="padding:10px 20px;">
            <label for="start">Give a name to your team :</label>
			<input type="text" name="start" id="start" data-clear-btn="true" placeholder="Team name" value="">
            <button type="submit" class="ui-btn">Start</button>
        </div>
    </form>
</div>

<div data-role="popup" id="popupSession" data-theme="a" class="ui-corner-all">
    <form data-ajax="false" method="post" action="./">
        <div style="padding:10px 20px;">
            <label for="session">Enter the session token:</label>
			<input type="text" name="session" id="session" data-clear-btn="true" placeholder="Token" value="">
            <button type="submit" class="ui-btn">Start</button>
        </div>
    </form>
</div>

<div data-role="popup" id="popupResults" data-theme="a" class="ui-corner-all">
    <form data-ajax="false" method="post" action="./">
        <div style="padding:10px 20px;">
            <label for="results">Enter the session token:</label>
			<input type="text" name="results" id="results" data-clear-btn="true" placeholder="Token" value="">
            <button type="submit" class="ui-btn">Show results</button>
        </div>
    </form>
</div>

<?php render('_footer')?>