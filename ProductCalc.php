<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Inventory Management</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0 auto;
			padding: 20px;
			max-height: 100%;
		}
		#navbar{
			text-align: center;
		}
		h1 {
			text-align: center;
			margin-bottom: 30px;
		}
		label {
			display: block;
			margin-bottom: 5px;
		}
		input[type="number"] {
			width: 100%;
			padding: 5px;
			margin-bottom: 20px;
		}
		#result {
			background-color: #ecebcd;
			padding: 20px;
			border: 2px solid #861cd1;
			margin-top: 30px;
			text-align: center;
			display: none;
		}
		#result h2 {
			margin-top: 0;
		}
		#window{
			text-align: left;
			font-size: large;
			font-weight: bold;
			margin-left: 15dvw;
			margin-right: 15dvw;
			max-width: 900px;
		}
		#calculate{

			width: 150px;
			height: 40px;
			font-weight: bolder;
			color: rgb(243, 201, 234);
			background-color: rgb(189, 12, 12);
			border-radius: 5px;
		}
		#result-value{
			font-size: xx-large;
		}
		.navbar-item{
			text-align: center;
		}
		.navbar-links{
			list-style: none;
			display: inline-flex;
		}

	</style>
</head>

<body id="EleM">
	<header id="navbar">
		<nav class="navbar-Container" style="width: 100dvw;">
		  <div class="navbar-logo">
		  </div>
		  <div id="cont" style="display:inline-block">
			<img src="./img1.png" alt="My Logo" style="height: 50px; width: 50px;">
			<h3>krishakagro Inventory Manager</h3>
			<!-- Other navigation items we can add here -->
		  </div>
		  
		  <div id="navbar-menu" aria-labelledby="navbar-toggle">
			<ul class="navbar-links">
			  <li class="navbar-item"><a class="navbar-link" href="./Index.php">Home</a></li>
			  <li class="navbar-item"><a class="navbar-link" href="./About Us.html">About Us</a></li>
			  <li class="navbar-item"><a class="navbar-link" href="./productcalc.php">Product Calculator</a></li>
			</ul>
		  </div>
		</nav>
	</header>

	<div id="window">
		<h1>Product Calculator</h1>
	
		<label for="wheat">Wheat: </label>
		<input type="number" id="wheat" min="0" placeholder="Enter wheat stock (in KG)">
	
		<label for="bajra">Bajra: </label>
		<input type="number" id="bajra" min="0" placeholder="Enter Bajra stock (in KG)">
	
		<label for="millets">Millets: </label>
		<input type="number" id="millets" min="0" placeholder="Enter Millets stock (in KG)">
	
		<label for="mustard">Mustard: </label>
		<input type="number" id="mustard" min="0" placeholder="Enter Mustard stock (in KG)">
	
		<label for="turmaric">Turmaric: </label>
		<input type="number" id="turmaric" min="0" placeholder="Enter Turmaric stock (in KG)">
	
		<label for="packets">Quantity per Packet: </label>
		<input type="number" id="packets" min="0" value="100">
		
		<label for="wheatPerPacket">Wheat per packet: </label>
		<input type="number" id="wheatPerPacket" min="0" value="7">
	
		<label for="bajraPerPacket">Bajra per packet: </label>
		<input type="number" id="bajraPerPacket" min="0" value="5">
	
		<label for="milletsPerPacket">Millets per packet: </label>
		<input type="number" id="milletsPerPacket" min="0" value="3">
	
		<label for="mustardPerPacket">Mustard per packet: </label>
		<input type="number" id="mustardPerPacket" min="0" value="3">
	
		<label for="turmaricPerPacket">Turmaric per packet: </label>
		<input type="number" id="turmaricPerPacket" min="0" value="2">
	
		<button id="calculate">Calculate</button>
	</div>
	<div id="result">
		<h2>Number of packets that can be made: </h2>
		<p id="result-value">0</p>
	</div>
	
	<script>
		document.getElementById('calculate').addEventListener('click', function() {
			var wheat = parseInt(document.getElementById('wheat').value, 10);
			var bajra = parseInt(document.getElementById('bajra').value, 10);
			var millets = parseInt(document.getElementById('millets').value, 10);
			var mustard = parseInt(document.getElementById('mustard').value, 10);
			var turmaric = parseInt(document.getElementById('turmaric').value, 10);
			var packetsPerUnit = parseInt(document.getElementById('packets').value, 10);
			var wheatPerPacket = parseInt(document.getElementById('wheatPerPacket').value, 10);
			var bajraPerPacket = parseInt(document.getElementById('bajraPerPacket').value, 10);
			var milletsPerPacket = parseInt(document.getElementById('milletsPerPacket').value, 10);
			var mustardPerPacket = parseInt(document.getElementById('mustardPerPacket').value, 10);
			var turmaricPerPacket = parseInt(document.getElementById('turmaricPerPacket').value, 10);
			
			var totalWheat = Math.floor(wheat / wheatPerPacket);
			var totalBajra = Math.floor(bajra / bajraPerPacket);
			var totalMillets = Math.floor(millets / milletsPerPacket);
			var totalMustard = Math.floor(mustard / mustardPerPacket);
			var totalTurmaric = Math.floor(turmaric / turmaricPerPacket);
			
			var totalPackets = Math.min(totalWheat, totalBajra, totalMillets, totalMustard, totalTurmaric, packetsPerUnit);
			
			document.getElementById('result-value').textContent = totalPackets;
			document.getElementById('result').style.display = 'block';
		});
	</script>
	<footer class="footer">
		<div class="copyright">
			<p>&copy; 2024 Krishak Agro.<br>All rights reserved.</p>
		</div>
	</footer>
</body>
</html>