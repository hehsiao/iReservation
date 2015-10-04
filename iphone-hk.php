<?php
  date_default_timezone_set('Asia/Hong Kong');
  include 'config.php';

  // sql to create table
  $sql = "SELECT json, published_time FROM hongkong ORDER BY id DESC LIMIT 1";
  // use exec() because no results are returned
  $stmt = $mysqli->query($sql);
  $row = $stmt->fetch_object();
  $obj = unserialize($row->json);
  $lastUpdated = $row->published_time;
  $closed = $obj['R499']['timeSlot'] == null ? true : false;
?>
<html>
  <head>
  <title>iPhone Reservation Monitor - Hong Kong</title>
  <?php if (!$closed) { ?>
  <meta http-equiv="refresh" content="60">
  <?php } ?>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  </head>
  <body>
		<?php include_once("analyticstracking.php") ?>
		<div class="container theme-showcase">
		<div class="row">
		<h1>iPhone Reservation Monitor - Hong Kong<small class="pull-right"><a href="iphone-ca.php">Vancouver Stores</a></small></h1>
    <?php if($closed) { ?>
      <div class="alert alert-warning"><p class="text-center">Reservations are closed for the day! Check back tomorrow!</p></div>
    <?php } else { ?>
      <h3><span class="small pull-right">This page auto refreshes every minute</span></h3>
    <?php } ?>
    <h3>iPhone 6s Plus</h3>
		<table class="table">
			<tbody>
				<tr>
					<th></th>
					<th colspan="4">16GB</th>
					<th colspan="4">64GB</th>
					<th colspan="4">128GB</th>
				</tr>
				<tr>
					<th id="storeHeader">Store</th>
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
    <h3>iPhone 6s</h3>
    <table class="table">
      <tbody>
        <tr>
          <th></th>
          <th colspan="4">16GB</th>
          <th colspan="4">64GB</th>
          <th colspan="4">128GB</th>
        </tr>
        <tr>
          <th id="storeHeader">Store</th>
          <th>SG</th><th>SL</th><th>GL</th><th>RG</th>
          <th>SG</th><th>SL</th><th>GL</th><th>RG</th>
          <th>SG</th><th>SL</th><th>GL</th><th>RG</th>
        </tr>
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
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <p>Click the checkmarks to reserve! Good Luck!<span class="pull-right">Last Updated: <?php echo $lastUpdated; ?></span></p>
		</div>
		</div>
    <div class="container">
    <p class="text-right">Henry Hsiao 2015</p>
    <p class="text-muted text-center"><small>This web site is not affiliated with Apple Inc. Apple is a trademark of Apple Inc., registered in the U.S. and other countries. iPhone is a trademark of Apple Inc.</small></p>
    </div>
    </body>
</html>
