<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Stacks logo test</title>
<style>
body {
  background-color:white;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #38444d;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 20px 20px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: none;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
<header>       
<ul>
    <li><div class="logo">
        <a href="https://stacksbowers.com/">
            <img src="Logo.png" width="100" height="20">
        </a></li>
  <li><a href="#home">Auction</a></li>
  <li><a href="#news">Direct/Sell</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
</ul>
</header>

</body>
</html>
