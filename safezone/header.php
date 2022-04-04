<?php
    include_once('variables.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #ffffff;
  padding: 20px 10px;
}

.header a {
  float: center;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  color: black;
}

.header a.active {
  background-color: #ffb41e;
  color: black;
}

.header-center {
  float: center;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-center {
    float: none;
    text-align: center;
  }
}
</style>
</head>
<body>

<div class="header">
  <div class="header-center">
    <a class="active" href="#home">Accueil</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
</body>
</html>