<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Type Something Here</h1>
	<form action="{{route('handleForm')}}" method="POST">
		@csrf
		<input type="text" name="inputField">
		<input type="submit" name="submitBtn">
	</form>
</body>
</html>