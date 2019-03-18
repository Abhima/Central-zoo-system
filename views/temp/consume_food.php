<div class="new_box">
    
    <?php $attributes = array('id' => 'food_consumed');
    echo form_open('food_extract/food_extraction', $attributes);;
    ?>
        <div style=" float:left; margin-left:5%;">
            <label for="ConsumedDate" class="_label">Date</label>
            <br/>
            <input type="date" size="20" maxlength="10" class="form-control" name="ConsumedDate" placeholder="-Assign Date-" required/>         
        </div>
        
        <div style="float:left; margin-left:5%;">
            <label for="Time" class="_label">Time</label>
            <br/>
            <input type="datetime" maxlength="8" size="20" class="form-control" name="Time" placeholder="-Assign Time-" required/>
        </div>
        
        <div style=" float:left;margin-left:5%;">
            <label for="Clerk_ID" class="_label">Clerk ID</label>
            <br/>
            <input type="text" maxlength="8" size="20" class="form-control" name="Clerk_ID" placeholder="-Assign Clerk ID-" required/>
        </div>
        <br style="clear:both;"/>
        </br>
        <div style=" float:left; margin-left:5%;">
            <label for="Species_ID" class="_label">Species_ID</label>
            <br/>
            <select class="form-control" name="Species_IDD" id="Species_IDD" onmousedown="if(this.options.length>6){this.size=6;}"  onchange='this.size=0;' onblur="this.size=0;" required>
                	<option  selected="selected" style="width:145px" value="">-Assign Species-</option>
                	<?php
						foreach($Speciesresult as $row)
						{
					?>
                    <option value="<?php echo $row->species_id ?>"><?php echo $row->species_name?></option>
					<?php
						}
					?>
			</select>
       	</div>
        
        <div style=" float:left; margin-left:5%;">
            <label for="Food_ID" class="_label">Food_ID</label>
            <br/>
            <select class="form-control" name="Food_IDD" id="Food_IDD" onmousedown="if(this.options.length>6){this.size=6;}"  onchange='this.size=0;' onblur="this.size=0;" required>
                	<option style="width:145px" value="">-Assign Food-</option>
                	<?php
						foreach($foodlist as $roww)
						{
					?>
                    <option style="width:145px" value="<?php echo $roww->food_id;  ?>"><?php echo $roww->food_name;  ?></option>
                    <?php
						}
					?>
			</select>
       	</div>
        
        <div style="float:left; margin-left:5%;">
            <label for="ConsumedQuantity" class="_label">Quantity</label>
            <br/>
            <input type="number" maxlength="3" size="30" class="form-control" name="ConsumedQuantity" placeholder="-Assign Quantity-" required/>
        </div>
        <br style="clear:both;"/>
        </br>
        <div style=" float:left; margin-left:5%;">              
            <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
        </div>
       
    </form>
    <?php echo validation_errors(); 
    if(isset($_GET['mode']) == "overstock")
    {
        echo "<h4>Insufficient Stock!!! please verify stock.. <h4>";
    }
    ?>
</div>