<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <title><?php echo $title; ?></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/bootstrap.min.css'); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/header.css'); ?>" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div align="center" id="container">
   			<div class="form_contain">
           	<?php $attributes = array('class' => 'form-horizontal');
	   		 	    echo form_open('verifylogin', $attributes); ?>
            <div class="form-group">
	   		 	    <img src="application/assets/images/5.jpg" class="img-responsive" alt="Cinque Terre" style="width:20%; height:15%"/>
            </div>
            <div style="width:350px;" class="form-group">
              <label style="margin-top:-1.5%; width:150px;" for="username" class="control-label col-sm-2">
                <span class="glyphicon glyphicon-user"></span>
                   Username</label>
                  <input type="text" size="20" name="username" placeholder="Username" required autofocus/>
            </div>
            <div style="width:350px;" class="form-group">
	            <label style="margin-top:-1.5%; width:150px;" for="password" class="control-label col-sm-2">
                <span class="glyphicon glyphicon-lock"></span>
                   Password</label>
	              <input type="password" size="20" name="password" placeholder="Password" required/>
	          </div>
	          <div class="form-group">        
      				<div class="col-sm-offset-2 col-sm-10">
	              <button style="width:280px; margin-left:-18%;" type="submit" class="btn btn-success">Login
                  &nbsp<span class="glyphicon glyphicon-log-in"></span> </button>
	            </div>
	          </div>
        </div>	 
    	</form>
      <?php echo validation_errors(); ?>
    </div>
</body>
</html>