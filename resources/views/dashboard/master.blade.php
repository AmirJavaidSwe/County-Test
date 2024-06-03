<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="" type="image/x-icon">
	<title>
	@yield('title')
	</title>

	@include('dashboard.layout.styles')

</head>

<body>

	@include('dashboard.layout.sidebar')

	@yield('content')

@include('dashboard.layout.scripts')
</body>
</html>