<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <title> <?php echo $title; ?> </title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/header.css'); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/bootstrap.min.css'); ?>" /> 
</head>
<body id="Assign_value">
   <div class="main_container">  
      <img class="img-responsive" src="application/assets/images/2.jpg" alt="Chania" style="width:100%; height:650px">
      <table class="table">
      <tr>
        <?php include('temp/header.php') ?>
        <div id="header_title">
          <h3><b>Assign_form</b></h3>
        </div>
        
        <div class="jumbotron">
          	<?php echo form_open('assign_value/assign_species'); ?>
          
      	      	<label for="species_id" clas="_label">Species_id</label>
          	  	<input type="text" size="20" class="form-control" name="species_id" placeholder="Assign species id" required/>
          
      	      	<label for="species" clas="_label">Species_name</label>
          	  	<input type="text" size="20" class="form-control" name="species" placeholder="Assign species name" required/>
          
          		<input style="margin: 3% 0% 0% 5%" class=""btn btn-info btn-lg"" id="assign_species" type="submit" value="SAVE"/>

          		<?php echo form_error('species_id', '<p class="error">'); ?>
          		<?php echo form_error('species', '<p class="error">'); ?>
            </form>
        </div>

        <div class="jumbotron">
          <?php echo form_open('assign_value/assign_animal'); ?>
        
              <label for="animal_id" class="_label">Animal_id</label>
              <input type="text" size="20" class="form-control" name="animal_id" placeholder="Assign animal id" required/>
        
              <label for="animal_name" class="_label">Animal_name</label>
              <input type="text" size="20" class="form-control" name="animal_name" placeholder="Assign animal name" required/>

              <label for="species_name" class="_label">Species_name</label>
              <select class="form-control" name="species_name" required/>
                <option value="">Select species </option>
                <?php 
                    foreach ($species_pass as $row)
                    {
                ?>
                <option value="<?php echo $row->species_id; ?>"><?php echo $row->species_name; ?></option>
                <?php 
                  }
                ?>
              </select>
        
            <input style="margin: 3% 0% 0% 5%" class=""btn btn-info btn-lg"" id="assign_animals" type="submit" value="SAVE"/>

            <?php echo form_error('animal_id', '<p class="error">'); ?>
            <?php echo form_error('animal_name', '<p class="error">'); ?>          
          </form>
        </div>

        <div class="jumbotron">
          <?php echo form_open('assign_value/assign_clerk'); ?>
        
              <label for="clerk_id" clas="_label">Clerk_id</label>
              <input type="text" size="20" class="form-control" name="clerk_id" placeholder="Assign clerk id" required/>
        
              <label for="clerk" clas="_label">Clerk_name</label>
              <input type="text" size="20" class="form-control" name="clerk" placeholder="Assign clerk name" required/>
        
            <input style="margin: 3% 0% 0% 5%" class=""btn btn-info btn-lg"" id="assign_cerk" type="submit" value="SAVE"/>

            <?php echo form_error('clerk_id', '<p class="error">'); ?>
            <?php echo form_error('clerk', '<p class="error">'); ?>
          </form>
        </div>

        <div class="jumbotron">
          <?php echo form_open('assign_value/assign_area'); ?>
        
              <label for="area_id" class="_label">Area_id</label>
              <input type="text" size="20" class="form-control" name="area_id" placeholder="Assign area id" required/>
        
              <label for="area_name" class="_label">Area_name</label>
              <input type="text" size="20" class="form-control" name="area_name" placeholder="Assign area name" required/>
              
              <input style="margin: 3% 0% 0% 5%" class=""btn btn-info btn-lg"" id="assign_area" type="submit" value="SAVE"/>

              <?php echo form_error('area_id', '<p class="error">'); ?>
              <?php echo form_error('area_name', '<p class="error">'); ?>          
          </form>
        </div>

        <div class="jumbotron">
          <?php echo form_open('assign_value/assign_clerkarea'); ?>
        
              <label for="area_id" class="_label">Area_id</label>
              <select class="form-control" name="area_id" required/>
                <option value="">Select area id</option>
                <?php 
                    foreach ($area_pass as $row)
                    {
                ?>
                <option value="<?php echo $row->area_id; ?>"><?php echo $row->area_name; ?></option>
                <?php 
                  }
                ?>
              </select>
        
              <label for="clerk_id" class="_label">Clerk_id</label>
              <select class="form-control" name="clerk_id" required/>
                <option value="">Select clerk id</option>
                <?php 
                    foreach ($clerk_pass as $row)
                    {
                ?>
                <option value="<?php echo $row->clerk_id; ?>"><?php echo $row->clerk_name; ?></option>
                <?php 
                  }
                ?>
              </select>
        
            <input style="margin: 3% 0% 0% 5%" class=""btn btn-info btn-lg"" id="assign_area" type="submit" value="SAVE"/>          
          </form>
        </div>

        <div class="jumbotron">
          <?php echo form_open('assign_value/assign_food'); ?>
        
              <label for="food_id" class="_label">Food_id</label>
              <input type="text" size="20" class="form-control" name="food_id" placeholder="Assign food id" required/>
        
              <label for="food_name" class="_label">Food_name</label>
              <input type="text" size="20" class="form-control" name="food_name" placeholder="Assign food name" required/>

              <label for="food_type" class="_label">Veg</label>
              <input type="radio" class="form-control" name="food_type" value= "veg" required/>
              <label for="food_type" class="_label">Non-veg</label>
              <input type="radio" class="form-control" name="food_type" value="non-veg" required/>

              <label for="quantity" class="_label">Quantity</label>
              <input type="text" size="20" class="form-control" name="quantity" placeholder="Assign quantity" required/>
        
            <input style="margin: 3% 0% 0% 5%" class=""btn btn-info btn-lg"" id="assign_food" type="submit" value="SAVE"/>

            <?php echo form_error('food_id', '<p class="error">'); ?>
            <?php echo form_error('food_name', '<p class="error">'); ?>
            <?php echo form_error('food_type', '<p class="error">'); ?>
            <?php echo form_error('quantity', '<p class="error">'); ?>          
          </form>
        </div>

        <div class="jumbotron">
          <?php echo form_open('assign_value/assign_supplier'); ?>
        
              <label for="supplier_id" class="_label">Supplier_id</label>
              <input type="text" size="20" class="form-control" name="supplier_id" placeholder="Assign supplier id" required/>
        
              <label for="supplier_name" class="_label">Supplier_name</label>
              <input type="text" size="20" class="form-control" name="supplier_name" placeholder="Assign supplier name" required/>

              <label for="address" class="_label">Address</label>
              <input type="text" size="20" class="form-control" name="address" placeholder="Assign address of supplier" required/>

              <label for="contact_no" class="_label">Contact_no</label>
              <input type="text" size="20" class="form-control" name="contact_no" placeholder="Assign contact no of supplier" required/>
        
            <input style="margin: 3% 0% 0% 5%" class=""btn btn-info btn-lg"" id="assign_supplier" type="submit" value="SAVE"/>

            <?php echo form_error('supplier_id', '<p class="error">'); ?>
            <?php echo form_error('supplier_name', '<p class="error">'); ?>
            <?php echo form_error('address', '<p class="error">'); ?>
            <?php echo form_error('contact_no', '<p class="error">'); ?>          
          </form>
        </div>

        <div class="jumbotron">
          <?php echo form_open('assign_value/assign_foodsupplier'); ?>
        
              <label for="supplier_id" class="_label">Supplier_id</label>
              <select class="form-control" name="supplier_id" required/>
                <option value="">Select supplier id</option>
                <?php 
                    foreach ($supplier_pass as $row)
                    {
                ?>
                <option value="<?php echo $row->supplier_id; ?>"><?php echo $row->supplier_id; ?></option>
                <?php 
                  }
                ?>
              </select>

              <label for="food_id" class="_label">food_id</label>
              <select class="form-control" name="food_id" required/>
                <option value="">Select food id</option>
                <?php 
                    foreach ($food_pass as $row)
                    {
                ?>
                <option value="<?php echo $row->food_id; ?>"><?php echo $row->food_id; ?></option>
                <?php 
                  }
                ?>
              </select>
        
            <input style="margin: 3% 0% 0% 5%" class=""btn btn-info btn-lg"" id="assign_area" type="submit" value="SAVE"/>          
          </form>
        </div>
      </tr>
    </table>
   </div><!--End of tag section named main_container-->
</body>
</html>