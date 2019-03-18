<div class="container">
   <script>
        function deleteR(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("orderfood").deleteRow(i);
        }

        function add(id)
        {
            var table=document.getElementById(id);
            var rowCount=table.rows.length;
            var row=table.insertRow(rowCount);
            
            var a=row.insertCell(0);
            a.innerHTML = '<select class="form-control" name="Food_name[]" id="food_name" onmousedown="if(this.options.length>6){this.size=6;}"  onchange="this.size=0;" onblur="this.size=0;" required><option  selected="selected" style="width:145px" value="">-Assign food-</option><?php foreach($listfoodextraction as $row) { ?><option value="<?php echo $row->food_name ?>"><?php echo $row->food_name?></option><?php } ?></select>';
            
            var b=row.insertCell(1);
            b.innerHTML= ' <input type="number" maxlength="3" size="30" class="form-control" name="order_quantity[]" placeholder="Assign Quantity" required/>';
            
            var c=row.insertCell(2);
            c.innerHTML = '<input type="text" maxlength="10" size="30" class="form-control" name="unit[]" placeholder="Assign unit" required/>'; 
            
            var d=row.insertCell(3);
            d.innerHTML = '<input onClick="deleteR(this)" type="button" value="Remove"/>';
        }

    </script> 
    <div id="header_title">
        <h4><b>Order Form</b></h4>
    </div>

    <?php $attributes = array('id' => 'food_consumed');
    echo form_open('order_food/order_food_form', $attributes);;
    ?>
        <div style=" float:left; margin-left:5%;">
            <label for="order_no" class="_label">Order_no</label>
            <br/>
            <input type="text" size="8" maxlength="8" class="form-control" name="order_no" required/>         
        </div>
        
        <div style=" float:left; margin-left:5%;">
            <label for="supplier_id" class="_label">Supplier_ID</label>
            <br/>
            <select class="form-control" name="supplier_id" id="supplier_id" onmousedown="if(this.options.length>6){this.size=6;}"  onchange='this.size=0;' onblur="this.size=0;" required>
                    <option style="width:145px" value="">-Assign supplier-</option>
                    <?php
                        foreach($listsupplierextraction as $roww)
                        {
                    ?>
                    <option style="width:145px" value="<?php echo $roww->supplier_id;  ?>"><?php echo $roww->supplier_name;  ?></option>
                    <?php
                        }
                    ?>
            </select>
        </div>
         
        <div style=" float:left; margin-left:5%;">
            <label for="order_date" class="_label">Order Date</label>
            <br/>
            <input type="date" size="20" maxlength="10" class="form-control" name="order_date" placeholder="Assign Date" required/>         
        </div>
         <div style=" float:left; margin-left:5%;">
            <label for="expected_delivery" class="_label">Expected Delivery Date</label>
            <br/>
            <input type="date" size="20" maxlength="10" class="form-control" name="expected_delivery" placeholder="Assign Date" required/>         
        </div>
<br style="clear:both" />
        <br style="clear:both" />

        <input type="button" value="Add" onclick="add('orderfood')" />
        <table style="margin-left:50px" id="orderfood">
                <tbody>
                <tr>
                <td>
                    <div style=" float:left; margin-left:5%;">
            <label for="food_name" class="_label">Food_name</label>
            <br/>
            <select class="form-control" name="Food_name[]" id="food_name" onmousedown="if(this.options.length>6){this.size=6;}"  onchange='this.size=0;' onblur="this.size=0;" required>
                    <option  selected="selected" style="width:145px" value="">-Assign food-</option>
                    <?php
                        foreach($listfoodextraction as $row)
                        {
                    ?>
                    <option value="<?php echo $row->food_name ?>"><?php echo $row->food_name?></option>
                    <?php
                        }
                    ?>
            </select>
        </div>
                </td>
                
                <td>
                     <div style="float:left; margin-left:25%;">
            <label for="order_quantity" class="_label">Order Quantity</label>
            <br/>
            <input type="number" maxlength="3" size="30" class="form-control" name="order_quantity[]" placeholder="Assign Quantity" required/>
        </div>
                </td>
                
                <td>
                    <div style="float:left; margin-left:25%;">
            <label for="unit" class="_label">Unit</label>
            <br/>
            <input type="text" maxlength="10" size="30" class="form-control" name="unit[]" placeholder="Assign unit" required/>
        </div>
                </td>
                 <td>
                     <input style="visibility:hidden" type="button" value="Remove"/>
                 </td>
                </tr>
                </tbody>
                </table>
        
       
       
        
        
        
       

        <div>
            <input style="margin: 3% 0% 0% 5%" class="btn btn-info" id="assign_consume" type="submit" value="SUBMIT"/>
        </div>

    </form>
    <?php echo validation_errors(); 
    if(isset($_GET['mode']) == "overstock")
    {
        echo "<h4>Insufficient Stock!!! please verify stock.. <h4>";
    }
    ?>
</div>