
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@vite('resources/css/app.css')
	<title></title>
</head>
<body>
	<header class="p-5 border-b bg-white shadow">
		<div class="container mx-auto flex justify-between items-center">
			<h1 class="text-3xl font-black">Tailwind Example</h1>
			<nav class="flex gap-2 items-center ">
				<a class="font-bold text-gray-600" href="#">Login</a>
				<a class="font-bold text-gray-600" href="#">Registro</a>
			</nav>
		</div>
	</header>
	<main class="container mx-auto mt-10">
		<h2 class="font-black text-center text-3xl mb-10">@yield('title')</h2>
		@yield('content')
	</main>
	<footer class="text-center p-5 text-gray-500 font-bold uppercase">
		Devstagram Copyright {{now()->year}}
	</footer>
</body>
</html>