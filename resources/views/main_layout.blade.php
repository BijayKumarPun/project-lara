<html>
<head>
<title>BKP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style relation="text/css">
a{
text-decoration:none;
color:black;
}
li{
list-style-type:none;
display:inline;
padding:10px;
margin:10px;}
ul{
margin:20px;
padding:20px;}
.nav-bar{
background-color:lightblue;
}
</style>
</head>
<body>
<div class="nav-bar" >
<ul>
<li> <a href="/">home</a></li>
<li> <a href="/blog">blog</a></li>
<li> <a href="/about">about</a></li>
</ul>
</div>
<div class="container">
@yield('main_content')
</div>
</body>
</html>
