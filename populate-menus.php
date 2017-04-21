<?php

$draftLinkCSV="https://docs.google.com/spreadsheets/d/1zKb-FVW88D2WdrdUV8VCWi8NhfSJPKtZZ79sOJ1hrKU/pub?gid=0&single=true&output=csv";
$packagedLinkCSV = "https://docs.google.com/spreadsheets/d/1lFz7Diq6CQsCqDdc8kc5QHEViyj59AY5bgEOqAg3tUQ/pub?gid=0&single=true&output=csv";
$spiritsLinkCSV = "https://docs.google.com/spreadsheets/d/1jDlMNPvTNGPTmUPF5LH6E-d41hLJk4z0dNElK5p6J9A/pub?gid=0&single=true&output=csv";
//Set up the beers to be arrays of beerbrand=>beer
$lightbeerbrand = array();
$lightbeer = array();
$darkbeerbrand = array();
$darkbeer = array();
$maltybeerbrand = array();
$maltybeer = array();
$hoppybeerbrand = array();
$hoppybeer = array();
$lb = 0;
$lbb = 0;
$lc = 0;
$lcc = 0;
$ld = 0;
$ldd = 0;
$le = 0;
$lee =0;

//populate the draft menu
if (($handle = fopen($draftLinkCSV, "r")) !== FALSE)
{
	$i=0;
	$beertype = 'default';
	while (($data = fgetcsv($handle, 100, ",")) !== FALSE)
	{

		$totalrows = count($data);
		for ($row=0; $row<=$totalrows; $row++)
		{

			if ($data[$row] == "Light"){
				$beertype = "Light";
			} else {}

			switch ($beertype) {
				case "Light":
				$i++;
				if ($i == 2) {
					$lightbeerbrand[$lb] = $data[$row];
					$lb++;
				} elseif ($i == 10) {
					$lightbeerbrand[$lb] = $data[$row];
					$lb++;
				} elseif ($i == 18) {
					$lightbeerbrand[$lb] = $data[$row];
					$lb++;
				} elseif ($i == 26) {
					$lightbeerbrand[$lb] = $data[$row];
					$lb++;
				} elseif ($i == 34) {
					$lightbeerbrand[$lb] = $data[$row];
					$lb++;
				} elseif ($i == 42) {
					$lightbeerbrand[$lb] = $data[$row];
					$lb++;
				} elseif ($i == 50) {
					$lightbeerbrand[$lb] = $data[$row];
					$lb++;
				}

				if ($i == 4) {
					$lightbeer[$lbb] = $data[$row];
					$lbb++;
				} elseif ($i == 12) {
					$lightbeer[$lbb] = $data[$row];
					$lbb++;
				} elseif ($i == 20) {
					$lightbeer[$lbb] = $data[$row];
					$lbb++;
				} elseif ($i == 28) {
					$lightbeer[$lbb] = $data[$row];
					$lbb++;
				} elseif ($i == 36) {
					$lightbeer[$lbb] = $data[$row];
					$lbb++;
				} elseif ($i == 44) {
					$lightbeer[$lbb] = $data[$row];
					$lbb++;
				} elseif ($i == 52) {
					$lightbeer[$lbb] = $data[$row];
					$lbb++;
				}

				if ($data[$row] == "Dark"){
					$beertype = "Dark";
					$i = 0;
				}

				break;

				case "Dark":
				$i++;

				if ($i == 1) {
					$darkbeerbrand[$lc] = $data[$row];
					$lc++;
				} elseif ($i == 9) {
					$darkbeerbrand[$lc] = $data[$row];
					$lc++;
				} elseif ($i == 17) {
					$darkbeerbrand[$lc] = $data[$row];
					$lc++;
				} elseif ($i == 25) {
					$darkbeerbrand[$lc] = $data[$row];
					$lc++;
				} elseif ($i == 33) {
					$darkbeerbrand[$lc] = $data[$row];
					$lc++;
				} elseif ($i == 41) {
					$darkbeerbrand[$lc] = $data[$row];
					$lc++;
				} elseif ($i == 49) {
					$darkbeerbrand[$lc] = $data[$row];
					$lc++;
				}

				if ($i == 3) {
					$darkbeer[$lcc] = $data[$row];
					$lcc++;
				} elseif ($i == 11) {
					$darkbeer[$lcc] = $data[$row];
					$lcc++;
				} elseif ($i == 19) {
					$darkbeer[$lcc] = $data[$row];
					$lcc++;
				} elseif ($i == 27) {
					$darkbeer[$lcc] = $data[$row];
					$lcc++;
				} elseif ($i == 35) {
					$darkbeer[$lcc] = $data[$row];
					$lcc++;
				} elseif ($i == 43) {
					$darkbeer[$lcc] = $data[$row];
					$lcc++;
				} elseif ($i == 51) {
					$darkbeer[$lcc] = $data[$row];
					$lcc++;
				}

				if ($data[$row] == "Malty"){
					$beertype = "Malty";
					$i = 0;
				}   

				break;

				case "Malty":
				$i++;

				if ($i == 1) {
					$maltybeerbrand[$ld] = $data[$row];
					$ld++;
				} elseif ($i == 9) {
					$maltybeerbrand[$ld] = $data[$row];
					$ld++;
				} elseif ($i == 17) {
					$maltybeerbrand[$ld] = $data[$row];
					$ld++;
				} elseif ($i == 25) {
					$maltybeerbrand[$ld] = $data[$row];
					$ld++;
				} elseif ($i == 33) {
					$maltybeerbrand[$ld] = $data[$row];
					$ld++;
				} elseif ($i == 41) {
					$maltybeerbrand[$ld] = $data[$row];
					$ld++;
				} elseif ($i == 49) {
					$maltybeerbrand[$ld] = $data[$row];
					$ld++;
				}

				if ($i == 3) {
					$maltybeer[$ldd] = $data[$row];
					$ldd++;
				} elseif ($i == 11) {
					$maltybeer[$ldd] = $data[$row];
					$ldd++;
				} elseif ($i == 19) {
					$maltybeer[$ldd] = $data[$row];
					$ldd++;
				} elseif ($i == 27) {
					$maltybeer[$ldd] = $data[$row];
					$ldd++;
				} elseif ($i == 35) {
					$maltybeer[$ldd] = $data[$row];
					$ldd++;
				} elseif ($i == 43) {
					$maltybeer[$ldd] = $data[$row];
					$ldd++;
				} elseif ($i == 51) {
					$maltybeer[$ldd] = $data[$row];
					$ldd++;
				}


				if ($data[$row] == "Hoppy"){
					$beertype = "Hoppy";
					$i = 0;
				}     

				break;

				case "Hoppy":
				$i++;
				if($data[$row] != ''){
					if ($i == 1) {
						$hoppybeerbrand[$le] = $data[$row];
						$le++;
					} elseif ($i == 9) {
						$hoppybeerbrand[$le] = $data[$row];
						$le++;
					} elseif ($i == 17) {
						$hoppybeerbrand[$le] = $data[$row];
						$le++;
					} elseif ($i == 25) {
						$hoppybeerbrand[$le] = $data[$row];
						$le++;
					} elseif ($i == 33) {
						$hoppybeerbrand[$le] = $data[$row];
						$le++;
					} elseif ($i == 41) {
						$hoppybeerbrand[$le] = $data[$row];
						$le++;
					} elseif ($i == 49) {
						$hoppybeerbrand[$le] = $data[$row];
						$le++;
					}

					if ($i == 3) {
						$hoppybeer[$lee] = $data[$row];
						$lee++;
					} elseif ($i == 11) {
						$hoppybeer[$lee] = $data[$row];
						$lee++;
					} elseif ($i == 19) {
						$hoppybeer[$lee] = $data[$row];
						$lee++;
					} elseif ($i == 27) {
						$hoppybeer[$lee] = $data[$row];
						$lee++;
					} elseif ($i == 35) {
						$hoppybeer[$lee] = $data[$row];
						$lee++;
					} elseif ($i == 43) {
						$hoppybeer[$lee] = $data[$row];
						$lee++;
					} elseif ($i == 51) {
						$hoppybeer[$lee] = $data[$row];
						$lee++;
					}
				}


				if ($data[$row] == "16oz Pints = $5.00 (Those noted * are 10oz pours only)"){
					$beertype = "default";
				} 
				break;
				default:
			}
		}
	}
	fclose($handle);
}?>

<?php /**---------------------------------------------Display Draft Menu Board ---------------------------------------------*/ ?>
<div id="beer-menu" class="chalkboard chalkboard-large">
	<button class="menu-is-open menu-button-small">X</button>
	<div class="menu-row-1">
		<ul id="beer-type-1" class="beer-column beer-column-large">
			<?php 
			for ($i = 0; $i < sizeof($lightbeer); $i++) {
				?><li> <?php echo $lightbeerbrand[$i] . "-" . $lightbeer[$i]; ?> </li><?php
				} ?>
		</ul>
		<ul id="beer-type-2" class="beer-column beer-column-large">
			<?php 
			for ($i = 0; $i < sizeof($darkbeer); $i++) {
				?><li> <?php echo $darkbeerbrand[$i] . "-" . $darkbeer[$i]; ?> </li><?php
				} ?>
		</ul>
	</div>
	<div class="menu-row-2">
		<ul id="beer-type-3" class="beer-column beer-column-large">
			<?php 
			for ($i = 0; $i < sizeof($maltybeer); $i++) {
				?><li> <?php echo $maltybeerbrand[$i] . "-" . $maltybeer[$i]; ?> </li><?php
				} ?>
		</ul>
		<ul id="beer-type-4" class="beer-column beer-column-large last-beer-column last-beer-column-large">
			<?php 
			for ($i = 0; $i < sizeof($hoppybeer); $i++) {
				?><li> <?php echo $hoppybeerbrand[$i] . "-" . $hoppybeer[$i]; ?> </li><?php
				} ?>
		</ul>
	</div>
</div>
<?php


/**----------------------------------------------------Populate Packaged Menu--------------------------------------------*/
$counter = 0;
$packagedHeader = array();
$packagedContent = array();
$headerCounter = 0;

if (($handle = fopen($packagedLinkCSV, "r")) !== FALSE)

{
	while (($dataa = fgetcsv($handle, 500, ",")) !== FALSE)
	{
		$totalrows = count($dataa);
		for ($row=0; $row<=$totalrows; $row++){
		
			if ($counter == 0){
			$packagedTitle = $dataa[$row];
			}

			if ($counter >= 7 && $counter <= 12){
				$packagedHeader[$headerCounter] = $dataa[$row];
				$headerCounter++;
			} 

			if ($counter > 12) {
				$packagedContent[$counter] = $dataa[$row];
			}
			$counter++;
		}
	}
}?>

<?php /**---------------------------------------------Display Packaged Menu-------------------------------------------*/ ?>
<div id="packaged-menu">
	<button class="menu-is-open menu-button-small">X</button>
	<p id="packaged-menu-title"> <?php echo "$packagedTitle"; ?> </p>
	<ul class="packaged-menu-header">
		<?php for($i = 0; $i < 4; $i++){ ?>
		<li> <?php echo $packagedHeader[$i]; ?> </li>
		<?php } ?>
	</ul>

<?php
$counter = 0;
for($i = 0; $i < sizeof($packagedContent); $i++){
	if ($packagedContent[$i] == ''){

	}
	else {
		if ($counter == 0) {?>
			<ul class="packaged-menu-content"> 
				<li> <?php echo $packagedContent[$i]; ?> </li> 
			<?php
		} elseif ($counter >= 1 && $counter <= 2) { ?>
			<li> <?php echo $packagedContent[$i]; ?> </li>
		<?php 
		} elseif ($counter == 3){ ?>
			<li> <?php echo $packagedContent[$i]; ?> </li>
			</ul>
		<?php 
		} elseif ($counter == 5) {
		$counter = -1;
		}
	$counter++; 
	}
}?>
</div>

<?php
/**--------------------------------------------------------Populate Spirits Menu-----------------------------------------*/

//Populate the packaged menu
$counter = 0;
$spiritsHeader = array();
$spiritsContent = array();
$spiritsCounter = 0;
$spiritsCounter2 = 0;

if (($handle = fopen($spiritsLinkCSV, "r")) !== FALSE)

{
	while (($datab = fgetcsv($handle, 500, ",")) !== FALSE)
	{
		$totalrows = count($datab);
		for ($row=0; $row<=$totalrows; $row++){

			if ($counter == 0){
			$spiritsTitle = $datab[$row];
			}

			if ($counter >= 5 && $counter <= 10){
				$spiritsHeader[$spiritsCounter] = $datab[$row];
				$spiritsCounter++;
			} 

			if ($counter > 10) {
				$spiritsContent[$spiritsCounter2] = $datab[$row];
				$spiritsCounter2++;
			}
			$counter++;
		}
	}
}
?>

<?php /**--------------------------------------------------------Display Spirits Menu-----------------------------------------*/ ?>
<div id="spirits-menu">
	<button class="menu-is-open menu-button-small">X</button>
	<p id="spirits-menu-title"> <?php echo "$spiritsTitle"; ?> </p>
	<ul class="spirits-menu-header">
		<?php for($i = 1; $i < 6; $i++){ ?>
		<li> <?php echo $spiritsHeader[$i]; ?> </li>
		<?php } ?>
	</ul>

<?php
$counter = 0;
for($i = 0; $i < sizeof($spiritsContent); $i++){
	if ($spiritsContent[$i] == ''){
	}
	else {
		if ($counter == 0) {?>
			<ul class="spirits-menu-content"> 
				<li> <?php echo $spiritsContent[$i]; ?> </li> 
			<?php
		} elseif ($counter >= 1 && $counter <= 3) { ?>
				<li> <?php echo $spiritsContent[$i]; ?> </li>
		<?php 
		} elseif ($counter == 4){ ?>
				<li> <?php echo $spiritsContent[$i]; ?> </li>
			</ul>
		<?php $counter = -1;
		}
	$counter++; 
	}
} ?>
</div>


