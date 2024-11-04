<?php header("Cache-Control: no-cache, must-revalidate");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GCED ICAP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
	var nome = "[Nome e apelidos da(o) alumna(o)]";
	var curso = "XXXX/YYYY";
    
	function init() {
	    document.getElementById("name").innerHTML = nome;
	    document.getElementById("course").innerHTML = curso;
	}
        function getURL() {
	    document.write(window.location.href);
        }
       	function getTIME() {
	    document.getElementById("current_date").innerHTML = Date();
    	}
    </script>
</head>
<body onload="init()">
    <div class="container" style="text-align: center;">
      <div class="jumbotron">
	<h2><u>GCED ICAP: <span id="course"></span></u></h2>
	<img src="img/udc.png" style="max-width: 325px; width: auto;">
      	<h3><font color="red">Páxina web de <span id="name"></span></font></h3>
	<p><script>getURL();</script></p>
        <h4><div id="current_date"><script>getTIME();</script></div></h4>
	<?php include('php/get-info.php');?></div>
    </div>
</body>
</html>
