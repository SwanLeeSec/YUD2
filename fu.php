<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
</head>
<body>
<br />
<br />
<br />
<form action="upload.php" method="post" enctype="multipart/form-data">
	<table class="board_search" border="0" width="430" height="30" align="center"> 
  	<tr>
  		<td> 
    	<input type="file" name="fileToUpload" id="fileToUpload">
    	</td>
    	<td>
    	<input type="submit" value="이미지 업로드" name="submit" class="btn btn-primary btn-sm">
    	</td>
    </tr>
    </table>
</form>

</body>
</html>
