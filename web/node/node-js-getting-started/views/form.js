<!DOCTYPE html>
<html>
<body>
<form action = "computeRate()" method="POST">
	Weight of Package(lb):<br>
	<input type="number" step="0.1" name="weight">
	<br>
	Type of mail:<br>
	<input type="radio" name="mailType" value="Letters (Stamped)"> Letters (Stamped)<br>
	<input type="radio" name="mailType" value="Letters (Metered)"> Letters (Metered)<br>
	<input type="radio" name="mailType" value="Large Envelopes (Flats)"> Large Envelopes (Flats)<br>
	<input type="radio" name="mailType" value="First-Class Package Service-Retail"> First-Class Package Service-Retail<br>
	<br>
	<input type="submit" value="Submit">
</form>
</body>
</html>