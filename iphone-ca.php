<?php
  date_default_timezone_set('America/Vancouver');
  include 'config.php';

  // sql to create table
  $sql = "SELECT json, published_time FROM canada ORDER BY id DESC LIMIT 1";
  // use exec() because no results are returned
  $stmt = $mysqli->query($sql);
  $row = $stmt->fetch_object();
  $obj = unserialize($row->json);
  $lastUpdated = $row->published_time;
  $closed = $obj['R460']['timeSlot'] == null ? true : false;
?>
<html>
  <head>
  <title>iPhone Reservation Monitor - Vancouver, BC</title>
  <?php if (!$closed) { ?>
  <meta http-equiv="refresh" content="30">
  <?php } ?>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  </head>
  <body>
    <div class="container theme-showcase">
    <div class="row">
    <h1>iPhone Reservation Monitor - Vancouver, BC<small class="pull-right"><a href="iphone-hk.php">Hong Kong Stores</a></small></h1>
    <?php if($closed) { ?>
      <div class="alert alert-warning"><p class="text-center">Reservations are closed for the day! Check back tomorrow!</p></div>
    <?php } else { ?>
      <h3><span class="small pull-right">
            This page auto refreshes every 30 seconds
          </span>
      </h3>
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
            "R460" => "Metrotown",
            "R362" => "Oakridge",
            "R280" => "Pacific",
            "R421" => "Richmond",
            "R488" => "Coquitlam",
            "R601" => "Guildford"
          );
          $models_6sPlus = array(
            "MKU12VC/A"=>"MKU12VC%2FA",
            "MKU22VC/A"=>"MKU22VC%2FA",
            "MKU32VC/A"=>"MKU32VC%2FA",
            "MKU52VC/A"=>"MKU52VC%2FA",
            "MKU62VC/A"=>"MKU62VC%2FA",
            "MKU72VC/A"=>"MKU72VC%2FA",
            "MKU82VC/A"=>"MKU82VC%2FA",
            "MKU92VC/A"=>"MKU92VC%2FA",
            "MKUD2VC/A"=>"MKUD2VC%2FA",
            "MKUE2VC/A"=>"MKUE2VC%2FA",
            "MKUF2VC/A"=>"MKUF2VC%2FA",
            "MKUG2VC/A"=>"MKUG2VC%2FA"
          );
          $models_6s = array (
            "MKQJ2VC/A"=>"MKQJ2VC/A",
            "MKQK2VC/A"=>"MKQK2VC/A",
            "MKQL2VC/A"=>"MKQL2VC/A",
            "MKQM2VC/A"=>"MKQM2VC/A",
            "MKQN2VC/A"=>"MKQN2VC/A",
            "MKQP2VC/A"=>"MKQP2VC/A",
            "MKQQ2VC/A"=>"MKQQ2VC/A",
            "MKQR2VC/A"=>"MKQR2VC/A",
            "MKQT2VC/A"=>"MKQT2VC/A",
            "MKQU2VC/A"=>"MKQU2VC/A",
            "MKQV2VC/A"=>"MKQV2VC/A",
            "MKQW2VC/A"=>"MKQW2VC/A"
          );
          $baseUrl = "https://reserve-ca.apple.com/CA/en_CA/reserve/iPhone?channel=1&returnURL=http%3A%2F%2Fwww.apple.com%2Fca%2F&iPP=N&appleCare=N&carrier=&";

        ?>
        <?php foreach($stores as $storeNo => $storeName) { ?>
        <?php if ($obj[$storeNo]['timeSlot'] == null) { ?>
        <tr>
          <td><? echo $storeName; ?></td>
          <td colspan="12">Reservations is currently not avaliable for this store.</td>
        </tr>
        <?php } else { ?>
        <tr>
          <td><? echo $storeName; ?></td>
          <?php foreach($models_6sPlus as $modelNo => $link) { ?>
          <td><? echo (strcmp($obj[$storeNo][$modelNo], "NONE") != 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=' . $link . '"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
          <?php } ?>
        </tr>
        <?php } ?>
        <?php } ?>
      </tbody>
    </table>
    <h3>iPhone 6s</h3>
    <table class="table">
      <tbody>
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
        <?php if ($obj[$storeNo]['timeSlot'] == null) { ?>
        <tr>
          <td><? echo $storeName; ?></td>
          <td colspan="12">Reservations is currently not avaliable for this store.</td>
        </tr>
        <?php } else { ?>
        <tr>
          <td><? echo $storeName; ?></td>
          <?php foreach($models_6s as $modelNo => $link) { ?>
          <td><? echo (strcmp($obj[$storeNo][$modelNo], "NONE") != 0) ? '<a class="btn-xs btn-success" href="' . $baseUrl . 'store=' . $storeNo . '&partNumber=' . $link . '"><i class="fa fa-check"></i></a>' : '<button class="btn-xs btn-danger" disabled><i class="fa fa-times"></i></button>' ; ?></td>
          <?php } ?>
        </tr>
        <?php } ?>
        <?php } ?>
      </tbody>
    </table>
    <p>Click the checkmarks to reserve! Good Luck!<span class="pull-right">Last Updated: <?php echo $lastUpdated; ?></span></p>
    </div>
    <div class="row">
    <p class="text-muted text-center"><small>This web site is not affiliated with Apple Inc. Apple is a trademark of Apple Inc., registered in the U.S. and other countries. iPhone is a trademark of Apple Inc.</small></p>
    <p><span class="pull-right">Henry Hsiao 2015</span></p>
    </div>
    </body>
</html>
