<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <title>Document</title>
</head>
<header>
<ul>
  <li><a class="home" href="home">Home</a></li>
  <li><a href="chairs">Chairs</a></li>
  <li><a href="sofas">Sofas</a></li>
  <li><a href="contact">Contact Us</a></li>
</ul>

   
</header>
<body>
    
@yield('content')

<footer class="footer">
		<p>&copy; 2023 Mon Projet</p>
	</footer>
</body>

</html>
