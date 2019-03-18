<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> <?php echo $title; ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/header.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/bootstrap.min.css'); ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body id="clerk_detail">
  <div class="main_container">  
      <img class="img-responsive" src="application/assets/images/2.jpg" alt="Chania" style="width:100%; height:650px">
      <?php include('temp/header.php') ?>
      <div id="header_title">
          <h3><b>Clerk Detail</b></h3>
      </div>
        <div id="list_clerk">
          <h4 id="sub_title">
            <?php include ('temp/list_clerk.php'); ?>
          </h4>
        </div>
      </div>
      <br style="clear:both;"/>
    </div><!--End of tag section named main_container-->
</body>
</html>