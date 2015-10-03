<html>
  <head>
  <title>iPhone Reservation Monitor - Hong Kong</title>
  <meta http-equiv="refresh" content="60">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  </head>
  <body>
		<?php include_once("analyticstracking.php") ?>
		<?php
		  $json = file_get_contents('https://reserve.cdn-apple.com/HK/en_HK/reserve/iPhone/availability.json');
			$obj = json_decode($json, true);
		?>
		<div class="container theme-showcase">
		<div class="row">
		<h1>iPhone Reservation Monitor - Hong Kong</h1>
		<h3><span class="small">This page auto refreshes every minute</span></h3>
		<table class="table">
			<tbody>
				<tr>
					<th></th>
					<th colspan="12">iPhone 6s</th>
					<th colspan="12">iPhone 6s Plus</th>
				</tr>
				<tr>
					<th></th>
					<th colspan="4">16GB</th>
					<th colspan="4">64GB</th>
					<th colspan="4">128GB</th>
					<th colspan="4">16GB</th>
					<th colspan="4">64GB</th>
					<th colspan="4">128GB</th>
				</tr>
				<tr>
					<th id="storeHeader">Store</th>
					<th>SG</th><th>SL</th><th>GL</th><th>RG</th>
					<th>SG</th><th>SL</th><th>GL</th><th>RG</th>
					<th>SG</th><th>SL</th><th>GL</th><th>RG</th>
					<th>SG</th><th>SL</th><th>GL</th><th>RG</th>
					<th>SG</th><th>SL</th><th>GL</th><th>RG</th>
					<th>SG</th><th>SL</th><th>GL</th><th>RG</th>
				</tr>
				<?php
					$stores = array(
						"R499" => "Canton Road",
						"R485" => "Festival Walk",
						"R409" => "Causeway",
						"R428" => "ifc"
					);
					$baseUrl = "https://reserve-hk.apple.com/HK/en_HK/reserve/iPhone?channel=1&returnURL=http%3A%2F%2Fwww.apple.com%2Fhk%2F&iPP=N&appleCare=N&carrier=&";

				?>
				<?php foreach($stores as $storeNo => $storeName) { ?>
				<tr>
			        <td><? echo $storeName; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQJ2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQJ2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQK2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQK2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQL2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQL2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQM2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQM2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQN2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQN2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQP2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQP2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQQ2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQQ2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQR2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQR2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQT2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQT2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQU2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQU2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQV2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQV2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQW2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQW2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU12ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU12ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU22ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU22ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU32ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU32ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU52ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU52ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU62ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU62ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU72ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU72ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU82ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU82ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU92ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU92ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKUD2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKUD2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKUE2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKUE2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKUF2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKUF2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKUG2ZP/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKUG2ZP%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                </tr>
				<?php } ?>
			</tbody>
		</table>
		<p>
		<?php
			$currentDate = new DateTime('now', new DateTimeZone("Asia/Hong_Kong"));
			$launchDate = new DateTime("2015-09-26T06:00:00+0800");
			$launchDate->setTimeZone(new DateTimeZone("Asia/Hong_Kong"));
			// echo date_format($currentDate, 'Y-m-d H:i:s'). ' ' .date_format($launchDate, 'Y-m-d H:i:s');
			$interval = $currentDate->diff($launchDate);
			if ($interval > 0) {
				echo $interval->format('%a days to go! Reservations will be opened on '. date_format($launchDate, 'Y-m-d H:i:s T'));
			}
			else {
				echo 'Reservations are on! Reservations Link will be activated when it is avaliable for reservations! Good Luck!';
			}
		?>
		</p>
		<p>Click <a href="iphone-ca.php">Here</a> for Vancouver Apple Store reservations</p>
		</div>
		</div>
    </body>
</html>
