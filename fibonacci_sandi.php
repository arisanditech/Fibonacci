
<!DOCTYPE html>
<html>
<head>
	<title>Fibbonaci Generator</title>
</head>
<body>
	<center>
		<form action="" method="post" style="padding-top: 70px">
			<table>
				<tr>
					<td style="vertical-align: top">
						<label>Rows</label>
					</td>
					<td>
						<input type="number" name="x" min="2"><br><br>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top">
						<label>Column</label>
					</td>
					<td>
						<input type="number" name="y" min="2"><br><br>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>

		<?php if(isset($_POST['x']) && isset($_POST['y'])){
			if(is_numeric($_POST['x']) && is_numeric($_POST['y'])){ ?>
				<br><br><table border="1">
					<?php
					$tmp1 = 0; $tmp2 = 1; $result = 0;
					for ($i = 0; $i < $_POST['x']; $i++) {
						echo "<tr>";
						for ($j = 0; $j < $_POST['y']; $j++) {
							if($i == 0 && $j == 0){
								echo "<td>".(float)$tmp1."</td><td>".(float)$tmp2."</td>";
							}
							if($j > 1 && $i == 0 || $j < $_POST['y'] && $i != 0){
								$result = (float)$tmp1 + $tmp2;
								echo "<td>".(float)$result."</td>";
								$tmp1 = (float)$tmp2;
								$tmp2 = (float)$result;
							}
						}
						echo "<tr>";
					}
					?>
				</table>
			<?php }else{ ?>
				<h4 style="color: red"><i>Kesalahan Input</i></h4>
			<?php }
		} ?>
	</center>
</body>
</html>