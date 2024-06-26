<<<<<<< HEAD:ProductCalc.php
<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:Sign-In.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Material Calculator</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            margin-left: 20%;
            margin-right: 20%;
        }
        #navbar{
			text-align: center;
		}
        .navbar-item{
			text-align: center;
		}
		.navbar-links{
			list-style: none;
			display: inline-flex;
		}
        h1 {
			text-align: center;
			margin-bottom: 30px;
		}
        label {
            font-weight: bold;
            display: block;
			margin-bottom: 5px;
        }
        input[type="number"] {
            width: 100%;
			padding: 5px;
			margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            background-color: #0576ef;
            color: #fff;
            border: solid rgb(19, 2, 2) 2px;
            border-radius: 5px;
            cursor: pointer;
        }
        #result {
            margin-top: 20px;
            text-align: center;
            background-color: #ecebcd;
            border: solid #861cd1 2px;
            font-size: xx-large;
        }
    </style>
</head>
<body id="EleM">

    <header id="navbar">
		<nav class="navbar-Container" style="width: 100dvw;">
		  <div id="cont" style="display:inline-block">
			<img src="./images/img1.png" alt="My Logo" style="height: 50px; width: 50px;">
			<h3>KrishakAgro Inventory Manager</h3>
			<!-- Other navigation items we can add here -->
		  </div>
		  
		  <div id="navbar-menu" aria-labelledby="navbar-toggle">
			<ul class="navbar-links">
			  <li class="navbar-item"><a class="navbar-link" href="index.php">Home</a></li>
			  <li class="navbar-item"><a class="navbar-link" href="ProductCalc.php">Product Calculator</a></li>
              <li class="navbar-item"><a class="navbar-link" href="logout.php">Logout</a></li>
			</ul>
		  </div>
		</nav>
	</header>

    <div id="window">
        <h1>Product Calculator</h1>
        <!-- Input fields for raw material quantities -->
        
            <label for="corn">Corn:</label>
            <input type="number" id="corn" name="corn" min="0">

            <label for="dorb">DORB:</label>
            <input type="number" id="dorb" name="dorb" min="0">

            <label for="rice_bran">Rice Bran:</label>
            <input type="number" id="rice_bran" name="rice_bran" min="0">

            <label for="fak_hailer">FAK/Hailer:</label>
            <input type="number" id="fak_hailer" name="fak_hailer" min="0">

            <label for="rapeseed_meal">Rapeseed Meal:</label>
            <input type="number" id="rapeseed_meal" name="rapeseed_meal" min="0">

            <label for="soybean_meal">Soybean Meal:</label>
            <input type="number" id="soybean_meal" name="soybean_meal" min="0">

            <label for="salt">Salt:</label>
            <input type="number" id="salt" name="salt" min="0">

            <label for="urea">Urea:</label>
            <input type="number" id="urea" name="urea" min="0">

            <label for="molasses_cane">Molasses Cane:</label>
            <input type="number" id="molasses_cane" name="molasses_cane" min="0">

            <label for="guar_meal">Guar Meal:</label>
            <input type="number" id="guar_meal" name="guar_meal" min="0">

            <label for="mustard_cake">Mustard Cake:</label>
            <input type="number" id="mustard_cake" name="mustard_cake" min="0">

            <label for="cotton_seed_cake">Cotton Seed Cake:</label>
            <input type="number" id="cotton_seed_cake" name="cotton_seed_cake" min="0">

            <label for="limestone">Limestone:</label>
            <input type="number" id="limestone" name="limestone" min="0">

            <label for="dcp">DCP:</label>
            <input type="number" id="dcp" name="dcp" min="0">

            <label for="kemtrace_maxim">Kemtrace Maxim:</label>
            <input type="number" id="kemtrace_maxim" name="kemtrace_maxim" min="0">

            <label for="enerfat_99">ENERFAT 99%:</label>
            <input type="number" id="enerfat_99" name="enerfat_99" min="0">

            <label for="toxfin">TOXFIN:</label>
            <input type="number" id="toxfin" name="toxfin" min="0">

            <label for="kemzyme_one">Kemzyme One:</label>
            <input type="number" id="kemzyme_one" name="kemzyme_one" min="0">

            <label for="sodium_bicarbonate">Sodium Bicarbonate:</label>
            <input type="number" id="sodium_bicarbonate" name="sodium_bicarbonate" min="0">

            <label for="magnesium_oxide">Magnesium Oxide:</label>
            <input type="number" id="magnesium_oxide" name="magnesium_oxide" min="0">

            <label for="molasses_arome">Molasses Arome:</label>
            <input type="number" id="molasses_arome" name="molasses_arome" min="0">

            <label for="yeplus">Yeplus +:</label>
            <input type="number" id="yeplus" name="yeplus" min="0">

            <label for="zenitro_nitromax">Zenitro Nitromax:</label>
            <input type="number" id="zenitro_nitromax" name="zenitro_nitromax" min="0">

            <label for="chromflex_c">Chromflex C:</label>
            <input type="number" id="chromflex_c" name="chromflex_c" min="0">
        


            <br><br><br><br>
            <label for="cornWeight">Corn Weight (kg per packet):</label>
            <input type="number" id="cornWeight" name="cornWeight" min="0">
        
            <label for="dorbWeight">DORB Weight (kg per packet):</label>
            <input type="number" id="dorbWeight" name="dorbWeight" min="0">

            <label for="rice_branWeight">Rice Bran Weight (kg per packet):</label>
            <input type="number" id="rice_branWeight" name="rice_branWeight" min="0">

            <label for="fak_hailerWeight">FAK/Hailer Weight (kg per packet):</label>
            <input type="number" id="fak_hailerWeight" name="fak_hailerWeight" min="0">

            <label for="rapeseed_mealWeight">Rapeseed Meal Weight (kg per packet):</label>
            <input type="number" id="rapeseed_mealWeight" name="rapeseed_mealWeight" min="0">

            <label for="soybean_mealWeight">Soybean Meal Weight (kg per packet):</label>
            <input type="number" id="soybean_mealWeight" name="soybean_mealWeight" min="0">

            <label for="saltWeight">Salt Weight (kg per packet):</label>
            <input type="number" id="saltWeight" name="saltWeight" min="0">

            <label for="ureaWeight">Urea Weight (kg per packet):</label>
            <input type="number" id="ureaWeight" name="ureaWeight" min="0">

            <label for="molasses_caneWeight">Molasses Cane Weight (kg per packet):</label>
            <input type="number" id="molasses_caneWeight" name="molasses_caneWeight" min="0">

            <label for="guar_mealWeight">Guar Meal Weight (kg per packet):</label>
            <input type="number" id="guar_mealWeight" name="guar_mealWeight" min="0">

            <label for="mustard_cakeWeight">Mustard Cake Weight (kg per packet):</label>
            <input type="number" id="mustard_cakeWeight" name="mustard_cakeWeight" min="0">

            <label for="cotton_seed_cakeWeight">Cotton Seed Cake Weight (kg per packet):</label>
            <input type="number" id="cotton_seed_cakeWeight" name="cotton_seed_cakeWeight" min="0">

            <label for="limestoneWeight">Limestone Weight (kg per packet):</label>
            <input type="number" id="limestoneWeight" name="limestoneWeight" min="0">

            <label for="dcpWeight">DCP Weight (kg per packet):</label>
            <input type="number" id="dcpWeight" name="dcpWeight" min="0">

            <label for="kemtrace_maximWeight">Kemtrace Maxim Weight (kg per packet):</label>
            <input type="number" id="kemtrace_maximWeight" name="kemtrace_maximWeight" min="0">

            <label for="enerfat_99Weight">ENERFAT 99% Weight (kg per packet):</label>
            <input type="number" id="enerfat_99Weight" name="enerfat_99imWeight" min="0">

            <label for="toxfinWeight">TOXFIN Weight (kg per packet):</label>
            <input type="number" id="toxfinWeight" name="toxfinimWeight" min="0">

            <label for="kemzyme_oneWeight">Kemzyme One Weight (kg per packet):</label>
            <input type="number" id="kemzyme_oneWeight" name="kemzyme_oneWeight" min="0">

            <label for="sodium_bicarbonateWeight">Sodium Bicarbonate Weight (kg per packet):</label>
            <input type="number" id="sodium_bicarbonateWeight" name="sodium_bicarbonateWeight" min="0">

            <label for="magnesium_oxideWeight">Magnesium Oxide Weight (kg per packet):</label>
            <input type="number" id="magnesium_oxideWeight" name="magnesium_oxideWeight" min="0">

            <label for="molasses_aromeWeight">Molasses Arome Weight (kg per packet):</label>
            <input type="number" id="molasses_aromeWeight" name="molasses_aromeWeight" min="0">

            <label for="yeplusWeight">Yeplus + Weight (kg per packet):</label>
            <input type="number" id="yeplusWeight" name="yeplusWeight" min="0">

            <label for="zenitro_nitromaxWeight">Zenitro Nitromax Weight (kg per packet):</label>
            <input type="number" id="zenitro_nitromaxWeight" name="zenitro_nitromaxWeight" min="0">

            <label for="chromflex_cWeight">Chromflex C Weight (kg per packet):</label>
            <input type="number" id="chromflex_cWeight" name="zenitro_nitromaxWeight" min="0">
        
        <!-- Add input fields for other raw materials here -->
        <button type="button" onclick="calculatePackets()">Calculate</button>
    </div>
    <div id="result"></div>

    <script>
        function calculatePackets() {
            // Get quantities of raw materials
            const corn = parseInt(document.getElementById('corn').value) || 0;
            const dorb = parseInt(document.getElementById('dorb').value) || 0;
            const rice_bran = parseInt(document.getElementById('rice_bran').value) || 0;
            const fak_hailer = parseInt(document.getElementById('fak_hailer').value) || 0;
            const rapeseed_meal = parseInt(document.getElementById('rapeseed_meal').value) || 0;
            const soybean_meal = parseInt(document.getElementById('soybean_meal').value) || 0;
            const salt = parseInt(document.getElementById('salt').value) || 0;
            const urea = parseInt(document.getElementById('urea').value) || 0;
            const molasses_cane = parseInt(document.getElementById('molasses_cane').value) || 0;
            const guar_meal = parseInt(document.getElementById('guar_meal').value) || 0;
            const mustard_cake = parseInt(document.getElementById('mustard_cake').value) || 0;
            const cotton_seed_cake = parseInt(document.getElementById('cotton_seed_cake').value) || 0;
            const limestone = parseInt(document.getElementById('limestone').value) || 0;
            const dcp = parseInt(document.getElementById('dcp').value) || 0;
            const kemtrace_maxim = parseInt(document.getElementById('kemtrace_maxim').value) || 0;
            const enerfat_99 = parseInt(document.getElementById('enerfat_99').value) || 0;
            const toxfin = parseInt(document.getElementById('toxfin').value) || 0;
            const kemzyme_one = parseInt(document.getElementById('kemzyme_one').value) || 0;
            const sodium_bicarbonate = parseInt(document.getElementById('sodium_bicarbonate').value) || 0;
            const magnesium_oxide = parseInt(document.getElementById('magnesium_oxide').value) || 0;
            const molasses_arome = parseInt(document.getElementById('molasses_arome').value) || 0;
            const yeplus = parseInt(document.getElementById('yeplus').value) || 0;
            const zenitro_nitromax = parseInt(document.getElementById('zenitro_nitromax').value) || 0;
            const chromflex_c = parseInt(document.getElementById('chromflex_c').value) || 0;


            // Get weights of raw materials
            const cornWeight = parseInt(document.getElementById('cornWeight').value) || 0;
            const dorbWeight = parseInt(document.getElementById('dorbWeight').value) || 0;
            const rice_branWeight = parseInt(document.getElementById('rice_branWeight').value) || 0;
            const fak_hailerWeight = parseInt(document.getElementById('fak_hailerWeight').value) || 0;
            const rapeseed_mealWeight = parseInt(document.getElementById('rapeseed_mealWeight').value) || 0;
            const soybean_mealWeight = parseInt(document.getElementById('soybean_mealWeight').value) || 0;
            const saltWeight = parseInt(document.getElementById('saltWeight').value) || 0;
            const ureaWeight = parseInt(document.getElementById('ureaWeight').value) || 0;
            const molasses_caneWeight = parseInt(document.getElementById('molasses_caneWeight').value) || 0;
            const guar_mealWeight = parseInt(document.getElementById('guar_mealWeight').value) || 0;
            const mustard_cakeWeight = parseInt(document.getElementById('mustard_cakeWeight').value) || 0;
            const cotton_seed_cakeWeight = parseInt(document.getElementById('cotton_seed_cakeWeight').value) || 0;
            const limestoneWeight = parseInt(document.getElementById('limestoneWeight').value) || 0;
            const dcpWeight = parseInt(document.getElementById('dcpWeight').value) || 0;
            const kemtrace_maximWeight = parseInt(document.getElementById('kemtrace_maximWeight').value) || 0;
            const enerfat_99Weight = parseInt(document.getElementById('enerfat_99Weight').value) || 0;
            const toxfinWeight = parseInt(document.getElementById('toxfinWeight').value) || 0;
            const kemzyme_oneWeight = parseInt(document.getElementById('kemzyme_oneWeight').value) || 0;
            const sodium_bicarbonateWeight = parseInt(document.getElementById('kemzyme_oneWeight').value) || 0;
            const magnesium_oxideWeight = parseInt(document.getElementById('magnesium_oxideWeight').value) || 0;
            const molasses_aromeWeight = parseInt(document.getElementById('molasses_aromeWeight').value) || 0;
            const yeplusWeight = parseInt(document.getElementById('yeplusWeight').value) || 0;
            const zenitro_nitromaxWeight = parseInt(document.getElementById('zenitro_nitromaxWeight').value) || 0;
            const chromflex_cWeight = parseInt(document.getElementById('chromflex_cWeight').value) || 0;

            // Calculate packets for each raw material
            const cornPackets = corn / cornWeight;
            const dorbPackets = dorb / dorbWeight;
            const rice_branPackets = rice_bran / rice_branWeight;
            const fak_hailerPackets = fak_hailer / fak_hailerWeight;
            const rapeseed_mealPackets = rapeseed_meal / rapeseed_mealWeight;
            const soybean_mealPackets = soybean_meal / soybean_mealWeight;
            const saltPackets = salt / saltWeight;
            const ureaPackets = urea / ureaWeight;
            const molasses_canePackets = molasses_cane / molasses_caneWeight;
            const guar_mealPackets = guar_meal / guar_mealWeight;
            const mustard_cakePackets = mustard_cake / mustard_cakeWeight;
            const cotton_seed_cakePackets = cotton_seed_cake / cotton_seed_cakeWeight;
            const limestonePackets = limestone / limestoneWeight;
            const dcpPackets = dcp / dcpWeight;
            const kemtrace_maximPackets = kemtrace_maxim / kemtrace_maximWeight;
            const enerfat_99Packets = enerfat_99 / enerfat_99Weight;
            const toxfinPackets = toxfin / toxfinWeight;
            const kemzyme_onePackets = kemzyme_one / kemzyme_oneWeight;
            const sodium_bicarbonatePackets = sodium_bicarbonate / sodium_bicarbonateWeight;
            const magnesium_oxidePackets = magnesium_oxide / magnesium_oxideWeight;
            const molasses_aromePackets = molasses_arome / molasses_aromeWeight;
            const yeplusPackets = yeplus / yeplusWeight;
            const zenitro_nitromaxPackets = zenitro_nitromax / zenitro_nitromaxWeight;
            const chromflex_cPackets = chromflex_c / chromflex_cWeight;



            // Find the minimum packets that can be made
            const minPackets = Math.min(cornPackets, dorbPackets, rice_branPackets, fak_hailerPackets, rapeseed_mealPackets, soybean_mealPackets, saltPackets, ureaPackets, molasses_canePackets, guar_mealPackets, mustard_cakePackets, cotton_seed_cakePackets, limestonePackets, dcpPackets, kemtrace_maximPackets, enerfat_99Packets, toxfinPackets, kemzyme_onePackets, sodium_bicarbonatePackets, magnesium_oxidePackets, molasses_aromePackets, yeplusPackets, zenitro_nitromaxPackets, chromflex_cPackets);

            // Display the result
            document.getElementById('result').innerHTML = `You can make ${Math.floor(minPackets)} packets of the new product.`;
        }
    </script>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Material Calculator</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            margin-left: 20%;
            margin-right: 20%;
        }
        #navbar{
			text-align: center;
		}
        .navbar-item{
			text-align: center;
		}
		.navbar-links{
			list-style: none;
			display: inline-flex;
		}
        h1 {
			text-align: center;
			margin-bottom: 30px;
		}
        label {
            font-weight: bold;
            display: block;
			margin-bottom: 5px;
        }
        input[type="number"] {
            width: 100%;
			padding: 5px;
			margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            background-color: #0576ef;
            color: #fff;
            border: solid rgb(19, 2, 2) 2px;
            border-radius: 5px;
            cursor: pointer;
        }
        #result {
            margin-top: 20px;
            text-align: center;
            background-color: #ecebcd;
            border: solid #861cd1 2px;
            font-size: xx-large;
        }
    </style>
</head>
<body id="EleM">

    <header id="navbar">
		<nav class="navbar-Container" style="width: 100dvw;">
		  <div id="cont" style="display:inline-block">
			<img src="./images/img1.png" alt="My Logo" style="height: 50px; width: 50px;">
			<h3>KrishakAgro Inventory Manager</h3>
			<!-- Other navigation items we can add here -->
		  </div>
		  
		<div id="navbar-menu" aria-labelledby="navbar-toggle">
			<ul class="navbar-links">
			  <li class="navbar-item"><a class="navbar-link" href="./Index.html">Home</a></li>
			  <li class="navbar-item"><a class="navbar-link" href="./ProductCalc.html">Product Calculator</a></li>
			</ul>
		</div>
		<div class="logbtn">
          		<button>Log Out</button>
        	</div>
		</nav>
	</header>

    <div id="window">
        <h1>Product Calculator</h1>
        <!-- Input fields for raw material quantities -->
        
            <label for="corn">Corn:</label>
            <input type="number" id="corn" name="corn" min="0">

            <label for="dorb">DORB:</label>
            <input type="number" id="dorb" name="dorb" min="0">

            <label for="rice_bran">Rice Bran:</label>
            <input type="number" id="rice_bran" name="rice_bran" min="0">

            <label for="fak_hailer">FAK/Hailer:</label>
            <input type="number" id="fak_hailer" name="fak_hailer" min="0">

            <label for="rapeseed_meal">Rapeseed Meal:</label>
            <input type="number" id="rapeseed_meal" name="rapeseed_meal" min="0">

            <label for="soybean_meal">Soybean Meal:</label>
            <input type="number" id="soybean_meal" name="soybean_meal" min="0">

            <label for="salt">Salt:</label>
            <input type="number" id="salt" name="salt" min="0">

            <label for="urea">Urea:</label>
            <input type="number" id="urea" name="urea" min="0">

            <label for="molasses_cane">Molasses Cane:</label>
            <input type="number" id="molasses_cane" name="molasses_cane" min="0">

            <label for="guar_meal">Guar Meal:</label>
            <input type="number" id="guar_meal" name="guar_meal" min="0">

            <label for="mustard_cake">Mustard Cake:</label>
            <input type="number" id="mustard_cake" name="mustard_cake" min="0">

            <label for="cotton_seed_cake">Cotton Seed Cake:</label>
            <input type="number" id="cotton_seed_cake" name="cotton_seed_cake" min="0">

            <label for="limestone">Limestone:</label>
            <input type="number" id="limestone" name="limestone" min="0">

            <label for="dcp">DCP:</label>
            <input type="number" id="dcp" name="dcp" min="0">

            <label for="kemtrace_maxim">Kemtrace Maxim:</label>
            <input type="number" id="kemtrace_maxim" name="kemtrace_maxim" min="0">

            <label for="enerfat_99">ENERFAT 99%:</label>
            <input type="number" id="enerfat_99" name="enerfat_99" min="0">

            <label for="toxfin">TOXFIN:</label>
            <input type="number" id="toxfin" name="toxfin" min="0">

            <label for="kemzyme_one">Kemzyme One:</label>
            <input type="number" id="kemzyme_one" name="kemzyme_one" min="0">

            <label for="sodium_bicarbonate">Sodium Bicarbonate:</label>
            <input type="number" id="sodium_bicarbonate" name="sodium_bicarbonate" min="0">

            <label for="magnesium_oxide">Magnesium Oxide:</label>
            <input type="number" id="magnesium_oxide" name="magnesium_oxide" min="0">

            <label for="molasses_arome">Molasses Arome:</label>
            <input type="number" id="molasses_arome" name="molasses_arome" min="0">

            <label for="yeplus">Yeplus +:</label>
            <input type="number" id="yeplus" name="yeplus" min="0">

            <label for="zenitro_nitromax">Zenitro Nitromax:</label>
            <input type="number" id="zenitro_nitromax" name="zenitro_nitromax" min="0">

            <label for="chromflex_c">Chromflex C:</label>
            <input type="number" id="chromflex_c" name="chromflex_c" min="0">
        


            <br><br><br><br>
            <label for="cornWeight">Corn Weight (kg per packet):</label>
            <input type="number" id="cornWeight" name="cornWeight" min="0">
        
            <label for="dorbWeight">DORB Weight (kg per packet):</label>
            <input type="number" id="dorbWeight" name="dorbWeight" min="0">

            <label for="rice_branWeight">Rice Bran Weight (kg per packet):</label>
            <input type="number" id="rice_branWeight" name="rice_branWeight" min="0">

            <label for="fak_hailerWeight">FAK/Hailer Weight (kg per packet):</label>
            <input type="number" id="fak_hailerWeight" name="fak_hailerWeight" min="0">

            <label for="rapeseed_mealWeight">Rapeseed Meal Weight (kg per packet):</label>
            <input type="number" id="rapeseed_mealWeight" name="rapeseed_mealWeight" min="0">

            <label for="soybean_mealWeight">Soybean Meal Weight (kg per packet):</label>
            <input type="number" id="soybean_mealWeight" name="soybean_mealWeight" min="0">

            <label for="saltWeight">Salt Weight (kg per packet):</label>
            <input type="number" id="saltWeight" name="saltWeight" min="0">

            <label for="ureaWeight">Urea Weight (kg per packet):</label>
            <input type="number" id="ureaWeight" name="ureaWeight" min="0">

            <label for="molasses_caneWeight">Molasses Cane Weight (kg per packet):</label>
            <input type="number" id="molasses_caneWeight" name="molasses_caneWeight" min="0">

            <label for="guar_mealWeight">Guar Meal Weight (kg per packet):</label>
            <input type="number" id="guar_mealWeight" name="guar_mealWeight" min="0">

            <label for="mustard_cakeWeight">Mustard Cake Weight (kg per packet):</label>
            <input type="number" id="mustard_cakeWeight" name="mustard_cakeWeight" min="0">

            <label for="cotton_seed_cakeWeight">Cotton Seed Cake Weight (kg per packet):</label>
            <input type="number" id="cotton_seed_cakeWeight" name="cotton_seed_cakeWeight" min="0">

            <label for="limestoneWeight">Limestone Weight (kg per packet):</label>
            <input type="number" id="limestoneWeight" name="limestoneWeight" min="0">

            <label for="dcpWeight">DCP Weight (kg per packet):</label>
            <input type="number" id="dcpWeight" name="dcpWeight" min="0">

            <label for="kemtrace_maximWeight">Kemtrace Maxim Weight (kg per packet):</label>
            <input type="number" id="kemtrace_maximWeight" name="kemtrace_maximWeight" min="0">

            <label for="enerfat_99Weight">ENERFAT 99% Weight (kg per packet):</label>
            <input type="number" id="enerfat_99Weight" name="enerfat_99imWeight" min="0">

            <label for="toxfinWeight">TOXFIN Weight (kg per packet):</label>
            <input type="number" id="toxfinWeight" name="toxfinimWeight" min="0">

            <label for="kemzyme_oneWeight">Kemzyme One Weight (kg per packet):</label>
            <input type="number" id="kemzyme_oneWeight" name="kemzyme_oneWeight" min="0">

            <label for="sodium_bicarbonateWeight">Sodium Bicarbonate Weight (kg per packet):</label>
            <input type="number" id="sodium_bicarbonateWeight" name="sodium_bicarbonateWeight" min="0">

            <label for="magnesium_oxideWeight">Magnesium Oxide Weight (kg per packet):</label>
            <input type="number" id="magnesium_oxideWeight" name="magnesium_oxideWeight" min="0">

            <label for="molasses_aromeWeight">Molasses Arome Weight (kg per packet):</label>
            <input type="number" id="molasses_aromeWeight" name="molasses_aromeWeight" min="0">

            <label for="yeplusWeight">Yeplus + Weight (kg per packet):</label>
            <input type="number" id="yeplusWeight" name="yeplusWeight" min="0">

            <label for="zenitro_nitromaxWeight">Zenitro Nitromax Weight (kg per packet):</label>
            <input type="number" id="zenitro_nitromaxWeight" name="zenitro_nitromaxWeight" min="0">

            <label for="chromflex_cWeight">Chromflex C Weight (kg per packet):</label>
            <input type="number" id="chromflex_cWeight" name="zenitro_nitromaxWeight" min="0">
        
        <!-- Add input fields for other raw materials here -->
        <button type="button" onclick="calculatePackets()">Calculate</button>
    </div>
    <div id="result"></div>

    <script>
        function calculatePackets() {
            // Get quantities of raw materials
            const corn = parseInt(document.getElementById('corn').value) || 0;
            const dorb = parseInt(document.getElementById('dorb').value) || 0;
            const rice_bran = parseInt(document.getElementById('rice_bran').value) || 0;
            const fak_hailer = parseInt(document.getElementById('fak_hailer').value) || 0;
            const rapeseed_meal = parseInt(document.getElementById('rapeseed_meal').value) || 0;
            const soybean_meal = parseInt(document.getElementById('soybean_meal').value) || 0;
            const salt = parseInt(document.getElementById('salt').value) || 0;
            const urea = parseInt(document.getElementById('urea').value) || 0;
            const molasses_cane = parseInt(document.getElementById('molasses_cane').value) || 0;
            const guar_meal = parseInt(document.getElementById('guar_meal').value) || 0;
            const mustard_cake = parseInt(document.getElementById('mustard_cake').value) || 0;
            const cotton_seed_cake = parseInt(document.getElementById('cotton_seed_cake').value) || 0;
            const limestone = parseInt(document.getElementById('limestone').value) || 0;
            const dcp = parseInt(document.getElementById('dcp').value) || 0;
            const kemtrace_maxim = parseInt(document.getElementById('kemtrace_maxim').value) || 0;
            const enerfat_99 = parseInt(document.getElementById('enerfat_99').value) || 0;
            const toxfin = parseInt(document.getElementById('toxfin').value) || 0;
            const kemzyme_one = parseInt(document.getElementById('kemzyme_one').value) || 0;
            const sodium_bicarbonate = parseInt(document.getElementById('sodium_bicarbonate').value) || 0;
            const magnesium_oxide = parseInt(document.getElementById('magnesium_oxide').value) || 0;
            const molasses_arome = parseInt(document.getElementById('molasses_arome').value) || 0;
            const yeplus = parseInt(document.getElementById('yeplus').value) || 0;
            const zenitro_nitromax = parseInt(document.getElementById('zenitro_nitromax').value) || 0;
            const chromflex_c = parseInt(document.getElementById('chromflex_c').value) || 0;


            // Get weights of raw materials
            const cornWeight = parseInt(document.getElementById('cornWeight').value) || 0;
            const dorbWeight = parseInt(document.getElementById('dorbWeight').value) || 0;
            const rice_branWeight = parseInt(document.getElementById('rice_branWeight').value) || 0;
            const fak_hailerWeight = parseInt(document.getElementById('fak_hailerWeight').value) || 0;
            const rapeseed_mealWeight = parseInt(document.getElementById('rapeseed_mealWeight').value) || 0;
            const soybean_mealWeight = parseInt(document.getElementById('soybean_mealWeight').value) || 0;
            const saltWeight = parseInt(document.getElementById('saltWeight').value) || 0;
            const ureaWeight = parseInt(document.getElementById('ureaWeight').value) || 0;
            const molasses_caneWeight = parseInt(document.getElementById('molasses_caneWeight').value) || 0;
            const guar_mealWeight = parseInt(document.getElementById('guar_mealWeight').value) || 0;
            const mustard_cakeWeight = parseInt(document.getElementById('mustard_cakeWeight').value) || 0;
            const cotton_seed_cakeWeight = parseInt(document.getElementById('cotton_seed_cakeWeight').value) || 0;
            const limestoneWeight = parseInt(document.getElementById('limestoneWeight').value) || 0;
            const dcpWeight = parseInt(document.getElementById('dcpWeight').value) || 0;
            const kemtrace_maximWeight = parseInt(document.getElementById('kemtrace_maximWeight').value) || 0;
            const enerfat_99Weight = parseInt(document.getElementById('enerfat_99Weight').value) || 0;
            const toxfinWeight = parseInt(document.getElementById('toxfinWeight').value) || 0;
            const kemzyme_oneWeight = parseInt(document.getElementById('kemzyme_oneWeight').value) || 0;
            const sodium_bicarbonateWeight = parseInt(document.getElementById('kemzyme_oneWeight').value) || 0;
            const magnesium_oxideWeight = parseInt(document.getElementById('magnesium_oxideWeight').value) || 0;
            const molasses_aromeWeight = parseInt(document.getElementById('molasses_aromeWeight').value) || 0;
            const yeplusWeight = parseInt(document.getElementById('yeplusWeight').value) || 0;
            const zenitro_nitromaxWeight = parseInt(document.getElementById('zenitro_nitromaxWeight').value) || 0;
            const chromflex_cWeight = parseInt(document.getElementById('chromflex_cWeight').value) || 0;

            // Calculate packets for each raw material
            const cornPackets = corn / cornWeight;
            const dorbPackets = dorb / dorbWeight;
            const rice_branPackets = rice_bran / rice_branWeight;
            const fak_hailerPackets = fak_hailer / fak_hailerWeight;
            const rapeseed_mealPackets = rapeseed_meal / rapeseed_mealWeight;
            const soybean_mealPackets = soybean_meal / soybean_mealWeight;
            const saltPackets = salt / saltWeight;
            const ureaPackets = urea / ureaWeight;
            const molasses_canePackets = molasses_cane / molasses_caneWeight;
            const guar_mealPackets = guar_meal / guar_mealWeight;
            const mustard_cakePackets = mustard_cake / mustard_cakeWeight;
            const cotton_seed_cakePackets = cotton_seed_cake / cotton_seed_cakeWeight;
            const limestonePackets = limestone / limestoneWeight;
            const dcpPackets = dcp / dcpWeight;
            const kemtrace_maximPackets = kemtrace_maxim / kemtrace_maximWeight;
            const enerfat_99Packets = enerfat_99 / enerfat_99Weight;
            const toxfinPackets = toxfin / toxfinWeight;
            const kemzyme_onePackets = kemzyme_one / kemzyme_oneWeight;
            const sodium_bicarbonatePackets = sodium_bicarbonate / sodium_bicarbonateWeight;
            const magnesium_oxidePackets = magnesium_oxide / magnesium_oxideWeight;
            const molasses_aromePackets = molasses_arome / molasses_aromeWeight;
            const yeplusPackets = yeplus / yeplusWeight;
            const zenitro_nitromaxPackets = zenitro_nitromax / zenitro_nitromaxWeight;
            const chromflex_cPackets = chromflex_c / chromflex_cWeight;



            // Find the minimum packets that can be made
            const minPackets = Math.min(cornPackets, dorbPackets, rice_branPackets, fak_hailerPackets, rapeseed_mealPackets, soybean_mealPackets, saltPackets, ureaPackets, molasses_canePackets, guar_mealPackets, mustard_cakePackets, cotton_seed_cakePackets, limestonePackets, dcpPackets, kemtrace_maximPackets, enerfat_99Packets, toxfinPackets, kemzyme_onePackets, sodium_bicarbonatePackets, magnesium_oxidePackets, molasses_aromePackets, yeplusPackets, zenitro_nitromaxPackets, chromflex_cPackets);

            // Display the result
            document.getElementById('result').innerHTML = `You can make ${Math.floor(minPackets)} packets of the new product.`;
        }
    </script>
</body>
</html>
>>>>>>> 405f64326f05b8c6f3bd1e60ccd09e7aa88c8845:ProductCalc.html
