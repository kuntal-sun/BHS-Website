<!DOCTYPE html>
<html>
	<body>
	<div class="grid-16 grid grey">
		<h2>::Here You can UPLOAD an image for your NEW Product::</h2>
	</div>
	<div class="grid-6 grid green">
		<form action="upload_file.php" method="post"
enctype="multipart/form-data">
Enter Image Name:<input type="text" name="image_name" required="required"><br><br>
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br><br>

<input type="submit" name="submit" value="Submit">
</form>

</div>	


<!--========================================================================== Footer =====================================================================================-->     
		
</body>
</html>