<script>
        function deleteR(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("invoicetab").deleteRow(i);
        }

        function add(id)
        {
            var table=document.getElementById(id);
            var rowCount=table.rows.length;
            var row=table.insertRow(rowCount);
            
            var a=row.insertCell(0);
            a.innerHTML = '<input type="text" name="Food_name[]"/>';
            
            var b=row.insertCell(1);
            b.innerHTML= '<input type="number" maxlength="3" size="30" class="form-control" name="supplied_quantity[]" placeholder="Assign Quantity" required/>';
            
            var c=row.insertCell(2);
            c.innerHTML = '<input type="text" size="8" maxlength="8" class="form-control" name="payment_amount[]" placeholder="-Assign payamount-" required/>';

             var d=row.insertCell(3);
            d.innerHTML = ' <textarea rows="4" cols="25" class="form-control" name="descripancy[]" placeholder="-Decrepancy-" ></textarea>'; 
            
            var e=row.insertCell(4);
            e.innerHTML = '<input onClick="deleteR(this)" type="button" value="Remove"/>';
        }

    </script> 
<div class="container">
    
  
    <?php $attributes = array('id' => 'invoice');
    echo form_open('invoice/Invoice_form', $attributes);;
    ?>
        <div style=" float:left; margin-left:5%;">
            <label for="invoice_no" class="_label">Invoice_no</label>
            <br/>
            <input type="text" size="8" maxlength="8" class="form-control" name="invoice_no" placeholder="-Assign invoice no-" required/>         
        </div>
        
        <div style=" float:left; margin-left:5%;">
            <label for="order_no" class="_label">Order_no</label>
            <br/>
            <select class="form-control" name="order_no" id="order_no" onmousedown="if(this.options.length>6){this.size=6;}"  onchange='this.size=0;' onblur="this.size=0;" required>
                    <option style="width:145px" value="">-Assign order_no-</option>
                    <?php
                        foreach($displayorder as $roww)
                        {
                    ?>
                    <option style="width:145px" value="<?php echo $roww->order_no;  ?>"><?php echo $roww->order_no;  ?></option>
                    <?php
                        }
                    ?>
            </select>
        </div>

         <div style=" float:left; margin-left:5%;">
            <label for="delivery_date" class="_label">delivery Date</label>
            <br/>
            <input type="date" size="20" maxlength="10" class="form-control" name="delivery_date" placeholder="Assign Date" required/>         
        </div>

        <br style="clear:both;" />
        <input type="button" value="Add" onclick="add('invoicetab')" />
        <table class="table table-hover" style="margin-left:50px" id="invoicetab">
                <tbody>
                <tr>
                <td>
                    <div style=" float:left; margin-left:5%;">
            <label for="food_name" class="_label">Food_name</label>
            <br/>
            <input type="text" name="Food_name[]"/>
        </div>
                </td>
                
                <td>
                     <div style="float:left; margin-left:25%;">
            <label for="supplied_quantity" class="_label">Supplied Quantity</label>
            <br/>
            <input type="number" maxlength="3" size="30" class="form-control" name="supplied_quantity[]" placeholder="Assign Quantity" required/>
        </div>
                </td>
                
                <td>
                    <div style=" float:left; margin-left:25%;">
            <label for="payment_amount" class="_label">Payment_amount</label>
            <br/>
            <input type="text" size="8" maxlength="8" class="form-control" name="payment_amount[]" placeholder="-Assign payamount-" required/>
        </div>
                </td>

                <td>
                    <div style=" float:left; margin-left:25%;">
            <label for="descripancy" class="_label">descripancy</label>
            <br/>
            <textarea rows="4" cols="25" class="form-control" name="descripancy[]" placeholder="-Decrepancy-"></textarea>
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