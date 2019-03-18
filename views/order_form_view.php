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
<body id="Home">
  <div class="main_container">  
      <img class="img-responsive" src="application/assets/images/2.jpg" alt="Chania" style="width:100%; height:650px">
        
     	<?php include('temp/secretary_header.php') ?>
      <div id="header_title">
        <h3><b>Assign Order Form</b></h3>
      </div>
    
     	<div class="container">

          <div class="container">
               
            <form  role="form" style="float:right;" method="post" action="<?php echo base_url('order_food/searchfood'); ?>">
              <div class="form-group">
                  <label for="Food_id" class="_label">Food ID</label>
                  <input type="text" maxlength="8" size="20" name="Food_id" placeholder="-Assign Food Id-" required/>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="submit" class="btn btn-info btn-sm"> 
                  <span class="glyphicon glyphicon-search"></span> SEARCH</button>

              </div>
            </form>
            <br style="clear:both;"/>
          </div>

          <div id="order_form_list">
            <h4 id="sub_title">
              <?php include ('temp/order_form_list.php'); ?>
            </h4>
          </div>    
          <br style="clear:both"/>

          <div class="container">
                <div id="replace">   
                  <?php include('temp/order_form.php') ?> 
                </div>   
                <br style="clear:both"/>
          </div>

          <div class="container">
                <div id="replace">   
                  <?php include('temp/order_list_view.php') ?> 
                </div>   
                <br style="clear:both"/>
          </div>
      </div><!--End of tag div named content-->
  </div><!--End of tag div named main_container-->
</body>
</html>