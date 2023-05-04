
<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
    <style>
        nav{
            background-color: #333;
            overflow:hidden;
        }
        nav ul{
            margin:0;
            padding:0;
            list-style-type: none ;
        }
        nav li a{
            dispaly: block;
            color:white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav li:hover {
            background-color: #111;
        }
        main{
            margin: 50px;
            text-align: center;
        }
        footer {
            text-align: center;
            padding-bottom: 50;

        }
        </style>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Register</a></li>
				<li><a href="#">Catalogue</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Help</a></li>
				<li><a href="logout.php">LogOut</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Welcome to My Website</h1>

		<p>This is my simple website built for Test and Assessment purpose.</p>
	</main>
	<footer>
		<p>&copy; Omitade's Website 2023. All rights reserved.</p>
	</footer>
</body>
</html>