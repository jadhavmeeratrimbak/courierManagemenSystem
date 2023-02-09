<script type="text/javascript">
  function half_total()
   {
    var qty=document.getElementById('qty').value;
    var cpk=document.getElementById('cpk').value;
    var km=document.getElementById('km').value;

    var tot=qty*cpk*km;
    document.getElementById('gt').value=tot;
   }

  function accept_ord(oid)
  {
     var gt=document.getElementById('gt').value;
    var km=document.getElementById('km').value;


    $.ajax(
        {
          type:"POST",
          url:"accept_ajax.php",
          data:'oid='+oid+'&gt='+gt+'&km='+km,
          success:function(data)
          {
            alert("Order Accepted");

            window.location.href='new_orderrq.php';
              // $("#shop_name").html(data);
             // document.getElementById('shop_name').value=data;
          }
        });
  }


 function cancle_ord(oid)
  {
    $.ajax(
        {
          type:"POST",
          url:"can_ajax.php",
          data:'oid='+oid,
          success:function(data)
          {
            alert("Order Cancelled");
            window.location.href='new_orderrq.php';

              // $("#shop_name").html(data);
             // document.getElementById('shop_name').value=data;
          }
        });
  }

</script>
<?php
$order_id=$_POST['order_id'];
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");
$od=mysql_fetch_row(mysql_query("select * from order_info where ID='".$order_id."'"));


$or_product_q=mysql_query("select * from sh_product WHERE ID='".$od[1]."'");
 $or_product_row=mysql_fetch_row($or_product_q);

$or_customer_q=mysql_query("select * from customer WHERE ID='".$od[2]."'");
$or_customer_row=mysql_fetch_row($or_customer_q);

echo '

	 <div  style="background-color: #000333; color: #fff; border: 4px solid orange; padding: 10px;" >
  
          <div class="row">
              <div class="col-sm-2">ORDER'.$od[0].'</div>
              <div class="col-sm-6"></div>
              <div class="col-sm-4">'.$od[11].'</div>
            </div>
            <hr style="background-color: #fff">

            <div class="row">
              <div class="col-sm-3">Product</div>
              <div class="col-sm-9">'.$or_product_row[1].'</div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-3">Customer</div>
              <div class="col-sm-9">'.$or_customer_row[1].'</div>
            </div>
            <br>

            <div class="row">
              <div class="col-sm-3">Mobile No</div>
              <div class="col-sm-9">'.$or_customer_row[3].'</div>
            </div>
            <br>
            <div class="row">
              <div class="col-sm-3">Delivery Address</div>
              <div class="col-sm-9">'.$od[10].'</div>
            </div>
            <br>

            <div class="row">
              <div class="col-sm-3">Quantity</div>
              <div class="col-sm-9">'.$od[3].'</div>
              <input type="hidden" value='.$od[3].' id="qty" name="qty">
            </div>
            <br>
            <div class="row">
              <div class="col-sm-3">Charges PER KM</div>
              <div class="col-sm-9">'.$od[9].'</div>
              <input type="hidden" value='.$od[9].' id="cpk" name="cpk">

            </div>
            <br>

            <div class="row">
              <div class="col-sm-3">KM</div>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="km" name="km" onkeyup="half_total()">
              </div>
           
              <div class="col-sm-3">Grand Total</div>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="gt" name="gt" readonly>
              </div>
            </div>
            <hr style="background-color: #fff">

            <div class="row">
              <div class="col-sm-3"></div>';
              if($od[6]=='Accepted')
              {
                echo'<div class="col-sm-3">
                <input type="button" disabled id="accept_charge" class="btn btn-sm form-control" style="background-color:orange; color:#fff" value="Accept" onclick="accept_ord('.$od[0].')">
              </div>

               <div class="col-sm-3">
                <input type="button" disabled id="" class="btn btn-sm form-control" style="background-color:red; color:#fff" value="Cancel" onclick="cancle_ord('.$od[0].')">
              </div>
              ';
              }
              else if($od[6]=='Cancelled')
              {
               echo'<div class="col-sm-3">
                <input type="button" id="accept_charge" class="btn btn-sm form-control" style="background-color:orange; color:#fff" value="Accept" onclick="accept_ord('.$od[0].')">
              </div>

               <div class="col-sm-3">
                <input type="button" disabled id="" class="btn btn-sm form-control" style="background-color:red; color:#fff" value="Cancel" onclick="cancle_ord('.$od[0].')">
              </div>
              ';
              }

              else 
              {
               echo'<div class="col-sm-3">
                <input type="button" id="accept_charge" class="btn btn-sm form-control" style="background-color:orange; color:#fff" value="Accept" onclick="accept_ord('.$od[0].')">
              </div>

               <div class="col-sm-3">
                <input type="button"  id="" class="btn btn-sm form-control" style="background-color:red; color:#fff" value="Cancel" onclick="cancle_ord('.$od[0].')">
              </div>
              ';
              }
              

             
            echo'</div>
            <br>

            </div>
';
?>