<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>This is the users page</h1>
	@foreach($user as $id => $u)
		<h3>{{ $u['name'] }} | {{ $u['phone'] }} | {{ $u['city'] }}
			<a href="{{	route('view.user', $id) }}">Show</a>
		</h3>
	@endforeach
</body>
</html>