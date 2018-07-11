<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script1.js"></script>
  <script type="text/javascript" src="script2.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Image Upload</a>
    </div>
 
  </div>
</nav>
<center>
<div id="body-overlay"></div>

	<form id="uploadForm" action="upload.php" method="post">
		<div id="targetOuter">
			  <div class="form-group">
						<div class="form-group">
							<label for="userImage">Select Image:</label>
							<input name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" />
					    </div>
	            </div>
	      </div>
	</form>
	<div id="targetLayer"></div>
</center>
</body>
</html>


