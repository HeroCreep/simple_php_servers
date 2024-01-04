
<!DOCTYPE html>
<html>
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidenav a.selected {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #fff;
  display: block;
}

.sidenav h6 {
  padding: 0px 0px 0px 30px;
  color: #d4d4d4;
  display: block;
  font-size: 20px;
}

.sidenav h5 {
  padding: 0px 0px 0px 15px;
  color: #fff;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.btn {
padding: 0;
border: none;
background: none;
width: 40px;
height: 40px;
display: inline;
cursor: pointer;
}
.popup {
        position: absolute;
        background-color: #333;
        color: #fff;
        padding: 5px;
        border-radius: 5px;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
    }

    .inline-container {
        display: inline-block;
        margin-right: 10px; /* Adjust the margin as needed */
    }

</style>
<body>

<div class="sidenav">
<h5> Simple PHP Servers </h5>
  <a class="selected" href="#">About</a>
  <a href="#">Installation</a>
  <a href="#">Unistallation</a>
  <h5>SPS Storing Service</h5>
  <a href="#">About</a>
  <a href="#">Connect</a>
  <a href="#">Create</a>
  <a href="#">Read</a>
  <a href="#">Update</a>
  <a href="#">Remove</a>
</div>

<div class="main">
<div class="w3-light-grey w3-padding-32 w3-center">
  <h1 class="w3-jumbo">PHP Server</h1>
</div>

<center>
	<p>Welcome to your server! From now on you can edit the server files and see your code in action here.</p>
	<br>
	<h3>Installation process:</h3>
	<br>

	<p style="display: inline; margin-right: 50px;">use 'bash <(curl -s http://simple-php-servers.free.nf/php_server.sh)' to install a server. </p>
	<br>
	<h3>Uninstallation process:</h3>
	<br>

	<p style="display: inline; margin-right: 50px;">use 'bash <(curl -s http://simple-php-servers.free.nf/php_server_remove.sh)' to uninstall a server.</p>
</center>
</div>

</body>

</html>
