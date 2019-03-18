<div id="header">
        		
    <div id="inside_header">
    <br/>
    <ul>
        <div style="float:right;"> 
            <h5 class="userlog"><b>Logged in as: </b></h5>
        	<span class="userid"> <?php echo $username; ?>
                <a href="<?php echo base_url('login/logout'); ?>">
                    <button type="button" class="btn btn-info">Logout</button>
                </a>
            </span>
        </div>
    </ul>
    <br style="clear:both"/>
     <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <a class="navbar-brand" href="#">Central Zoo System</a>
                </div>
                <div>
                  <ul class="nav navbar-nav">
                    <!--List of menu navagation-->
                        <li class="Menu" style="margin-left:0px;"><a  id="home" href="<?php echo base_url('home'); ?>">Consumed list</a></li><!--Active page-->
                        <li class="Menu" style="margin-left:7px;"><a id="animal_detail" href="<?php echo base_url('animal_detail'); ?>">Animal Details</a></li>
                        <li class="Menu" style="margin-left:7px;"><a id="clerk_detail" href="<?php echo base_url('clerk_detail'); ?>">Clerk Details</a></li>
                        <li class="Menu" style="margin-left:7px;"><a id="supplier_detail" href="<?php echo base_url('supplier_detail'); ?>">Supplier Details</a></li>
                        <li class="Menu" style="margin-left:7px;"><a id="food_detail" href="<?php echo base_url('food_detail'); ?>">Food Details</a></li>
                        <li class="Menu" style="margin-left:7px;"><a id="area_detail" href="<?php echo base_url('area_detail'); ?>">Area Details</a></li>
                        <li class="Menu" style="margin-left:7px;"><a id="assign" href="<?php echo base_url('assign_value'); ?>">Assign value</a></li>
                        <li class="Menu" style="margin-left:7px;"><a id="assign" href="<?php echo base_url('food_extract'); ?>">Food extract</a></li>
                    </ul><!--End of ul tag-->
                </div>
            </div><!--End of section id named inside_header-->
    </nav><!--End of tag nav-->
    
</div><!--End of header tag-->