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
<body id="Assign_value">
  <div class="main_container">  
      <img class="img-responsive" src="application/assets/images/2.jpg" alt="Chania" style="width:100%; height:650px">
      <?php include('temp/header.php') ?>
      <div id="header_title">
          <h3><b>Assign Value</b></h3>
      </div>
      </br> 
        <table class="table">
          <tr>
            <div>
            	<?php echo form_open('assign_value/assign_species'); ?>
                <td>
        	      	<label for="species_id" class="_label">Species_id</label>
            	  	<input type="text" size="16" name="species_id" placeholder="Assign species id" required/>
                  &nbsp
        	      	<label for="species" class="_label">Species_name</label>
            	  	<input type="text" size="16" name="species" placeholder="Assign species name" required/>
                  &nbsp
                  <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
                </td>
            		<?php echo form_error('species_id', '<p class="error">'); ?>
            		<?php echo form_error('species', '<p class="error">'); ?>
              </form>
            </div>
          </tr>
        </table>

        <table class="table">
          <tr>
            <div>
              <?php echo form_open('assign_value/assign_animal'); ?>
                <td>
                  <label for="animal_id" class="_label">Animal_id</label>
                  <input type="text" size="16"   name="animal_id" placeholder="Assign animal id" required/>
                  &nbsp
                  <label for="animal_name" class="_label">Animal_name</label>
                  <input type="text" size="16"   name="animal_name" placeholder="Assign animal name" required/>
                  &nbsp
                  <label for="species_name" class="_label">Species_name</label>
                  <select   name="species_name" required/>
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
                  <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
                </td>
                <?php echo form_error('animal_id', '<p class="error">'); ?>
                <?php echo form_error('animal_name', '<p class="error">'); ?>          
              </form>
            </div>
          </tr>
        </table>

        <table class="table">
          <tr>
            <div>
              <?php echo form_open('assign_value/assign_clerk'); ?>
                <td>
                  <label for="clerk_id" class="_label">Clerk_id</label>
                  <input type="text" size="16"   name="clerk_id" placeholder="Assign clerk id" required/>
                  &nbsp
                  <label for="clerk" clas="_label">Clerk_name</label>
                  <input type="text" size="16"   name="clerk_name" placeholder="Assign clerk name" required/>
                  &nbsp
                  <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
                </td>
                <?php echo form_error('Clerkid', '<p class="error">'); ?>
                <?php echo form_error('Clerkname', '<p class="error">'); ?>
              </form>
            </div>
          </tr>
        </table>

        <table class="table">
          <tr>
            <div>
              <?php echo form_open('assign_value/assign_area'); ?>
                <td>
                  <label for="area_id" class="_label">Area_id</label>
                  <input type="text" size="16"   name="area_id" placeholder="Assign area id" required/>
                  &nbsp
                  <label for="area_name" class="_label">Area_name</label>
                  <input type="text" size="16"   name="area_name" placeholder="Assign area name" required/>
                  &nbsp
                  <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
                </td>
                  <?php echo form_error('Area_id', '<p class="error">'); ?>
                  <?php echo form_error('Area_name', '<p class="error">'); ?>          
              </form>
            </div>
          </tr>
        </table>

        <table class="table">
          <tr>
            <div>
              <?php echo form_open('assign_value/assign_clerkarea'); ?>
                <td>
                    <label for="area_id" class="_label">Area_id</label>
                    <select   name="area_id" required/>
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
                    &nbsp
                    <label for="clerk_id" class="_label">Clerk_id</label>
                    <select   name="clerk_id" required/>
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
                    &nbsp
                    <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
                </td>
              </form>
            </div>
          </tr>
        </table>

        <table class="table">
          <tr>
            <div>
              <?php echo form_open('assign_value/assign_food'); ?>
                <td>
                  <label for="food_id" class="_label">Food_id</label>
                  <input type="text" size="16"   name="food_id" placeholder="Assign food id" required/>
                  &nbsp
                  <label for="food_name" class="_label">Food_name</label>
                  <input type="text" size="16"   name="food_name" placeholder="Assign food name" required/>
                  &nbsp
                  <label for="species" class="_label">Species_name</label>
                  <input type="text" size="16" name="species" placeholder="Assign species name" required/>
                  &nbsp
                  <label for="food_type" class="_label">Veg</label>
                  <input type="radio"   name="food_type" value= "veg" required/>
                  &nbsp
                  <label for="food_type" class="_label">Non-veg</label>
                  <input type="radio"   name="food_type" value="non-veg" required/>
                  &nbsp
                  <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
                </td>
                <?php echo form_error('food_id', '<p class="error">'); ?>
                <?php echo form_error('food_name', '<p class="error">'); ?>
                <?php echo form_error('species_name', '<p class="error">'); ?>
                <?php echo form_error('food_type', '<p class="error">'); ?>
                          
              </form>
            </div>
          </tr>
        </table>

        <table class="table">
          <tr>
            <div>
              <?php echo form_open('assign_value/assign_supplier'); ?>
                <td>
                  <label for="supplier_id" class="_label">Supplier_id</label>
                  <input type="text" size="16"   name="supplier_id" placeholder="Assign supplier id" required/>
                  &nbsp
                  <label for="supplier_name" class="_label">Supplier_name</label>
                  <input type="text" size="16"   name="supplier_name" placeholder="Assign supplier name" required/>
                  &nbsp
                  <label for="address" class="_label">Address</label>
                  <input type="text" size="16"   name="address" placeholder="Assign address of supplier" required/>
                  &nbsp
                  <label for="contact_no" class="_label">Contact_no</label>
                  <input type="text" size="16"   name="contact_no" placeholder="Assign contact no of supplier" required/>
                  &nbsp
                  <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
                </td>
                <?php echo form_error('supplier_id', '<p class="error">'); ?>
                <?php echo form_error('supplier_name', '<p class="error">'); ?>
                <?php echo form_error('address', '<p class="error">'); ?>
                <?php echo form_error('contact_no', '<p class="error">'); ?>          
              </form>
            </div>
          </tr>
        </table>

        <table class="table">
          <tr>
            <div>
              <?php echo form_open('assign_value/assign_foodsupplier'); ?>
                <td>
                  <label for="supplier_id" class="_label">Supplier_id</label>
                  <select   name="supplier_id" required/>
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
                  &nbsp
                  <label for="food_id" class="_label">food_id</label>
                  <select   name="food_id" required/>
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
                  &nbsp
                  <button type="submit" class="btn btn-info btn-sm">SUBMIT</button>
                </td>       
              </form>
            </div>
          </tr>
    </table>


  </div><!--End of tag section named main_container-->

</body>
</html>