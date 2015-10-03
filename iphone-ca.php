<?php
  $json = file_get_contents('https://reserve.cdn-apple.com/CA/en_CA/reserve/iPhone/availability.json');
  $obj = json_decode($json, true);
  $closed = $obj['R460']['timeSlot'] == null ? true : false;
  var_dump($closed);
?>
<html>
  <head>
  <title>iPhone in Store Reservation 2015</title>
  <meta http-equiv="refresh" content="60">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  </head>
  <body>
		<?php include_once("analyticstracking.php") ?>
<!-- 		<?php
		  $json = file_get_contents('https://reserve.cdn-apple.com/CA/en_CA/reserve/iPhone/availability.json');
			$obj = json_decode($json, true);

		?> -->
		<div class="container theme-showcase">
		<div class="row">
		<h1>iPhone Reservation Monitor - Vancouver, BC</h1>
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
						"R460" => "Metrotown",
						"R362" => "Oakridge",
						"R280" => "Pacific",
						"R421" => "Richmond",
						"R488" => "Coquitlam",
						"R601" => "Guildford"
					);
					$baseUrl = "https://reserve-ca.apple.com/CA/en_CA/reserve/iPhone?channel=1&returnURL=http%3A%2F%2Fwww.apple.com%2Fca%2F&iPP=N&appleCare=N&carrier=&";

				?>
				<?php foreach($stores as $storeNo => $storeName) { ?>
				<tr>
			        <td><? echo $storeName; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQJ2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQJ2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQK2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQK2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQL2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQL2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQM2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQM2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQN2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQN2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQP2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQP2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQQ2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQQ2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQR2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQR2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQT2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQT2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQU2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQU2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQV2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQV2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKQW2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKQW2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU12VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU12VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU22VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU22VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU32VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU32VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU52VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU52VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU62VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU62VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU72VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU72VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU82VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU82VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKU92VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKU92VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKUD2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKUD2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKUE2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKUE2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKUF2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKUF2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                    <td><? echo (strcmp($obj[$storeNo]['MKUG2VC/A'], "ALL")== 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=MKUG2VC%2FA"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
                </tr>
				<?php } ?>
			</tbody>
		</table>
		<p>Click the checkmarks to reserve! Good Luck!</p>
		<p>Click <a href="iphone-hk.php">Here</a> for Hong Kong Apple Store reservations</p>
		</div>
		</div>
    </body>
</html>
