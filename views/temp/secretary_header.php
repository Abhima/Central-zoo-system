<div id="header">
        		
    <div id="inside_header">
    </br>
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
                <li class="active" style="margin-left:0px;"><a  id="home" href="<?php echo base_url('home'); ?>">Consumed list</a></li><!--Active page-->
                <li class="Menu" style="margin-left:7px;"><a href="order_detail" href="<?php echo base_url('order_detail'); ?>">Order Details</a></li>
                <li class="Menu" style="margin-left:7px;"><a href="invoice" href="<?php echo base_url('invoice'); ?>">Invoice</a></li>
                <li class="Menu" style="margin-left:7px;"><a href="order_food" href="<?php echo base_url('order_food'); ?>">Assign Order form
                <?php
                    if($stocknotification > 0)
                    {
                ?>
                <div class="notification"><?php echo $stocknotification; ?></div>
                <br style="clear:both"/>
                <?php
                    }
                ?>
                </a></li>
            </ul><!--End of ul tag-->
        </nav><!--End of tag nav-->
    </div><!--End of section id named inside_header-->
</div><!--End of header tag-->