 <script type="text/javascript">
   
   // function accept_order(order_id)
   // {
   //   $.ajax(
   //      {
   //        type:"POST",
   //        url:"full_ajax.php",
   //        data:'order_id='+order_id,
   //        success:function(data)
   //        {
   //          alert(data);
   //            // $("#a1").html(data);
   //           // document.getElementById('hf').value=data;
   //        }
   //      });
   // }


   function view_order(oid)
   {
    $.ajax(
        {
          type:"POST",
          url:"order_data_ajax.php",
          data:'order_id='+oid,
          success:function(data)
          {
              $("#blue_table").html(data);
             // document.getElementById('hf').value=data;
          }
        });

   }
 </script>
 <?php
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

  $sid=$_POST['sid'];
  $res=mysql_query("SELECT * FROM order_info WHERE SHOP_ID='".$sid."' && SEND1='yes'");
  $count=mysql_num_rows($res);
  echo'
    <form  action="new_chargesrq.php" method="GET">

      <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Charges Table</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr style="background-color:orange;color:#fff">
                      <th>ORDER No</th>
                      <th>Details</th>
                      <th>status</th>
                    </tr>
                    </thead>
                    <tbody>';
                    $sr=1;
                    while($row=mysql_fetch_row($res))
                    {
                      $pro=mysql_fetch_row(mysql_query("select * from sh_product where ID='".$row[1]."'"));

                    	 echo'<tr>
                      <td><b style="color:red">ORDER'.$row[0].'</b>
                      &nbsp; - <b style="color:orange">'. $pro[1].'</b></td>

                      <td><input type="button" id="accept_charge" class="btn btn-sm" style="background-color:#000; color:#fff" value="View" onclick="view_order('.$row[0].')"></td>';
                      if($row[6]=='no')
                      {
                         echo' <td><b style="color:blue">...Pending...</b></td>';
                      }
                     else if($row[6]=='Accepted')
                      {
                         echo' <td><b style="color:Green">...Accepted...</b></td>';
                        
                      }
                       else if($row[6]=='Cancelled')
                      {
                         echo' <td><b style="color:red">...Cancelled...</b></td>';
                        
                      }
                    
                    echo'</tr></b>';
                    $sr++;
                    }
                   
                   
                   echo' </tbody>
                  </table>
                </div>
               
              </div>
               

              <!-- /.card-body -->
              <div class="card-footer clearfix">
                

              </div>
              <!-- /.card-footer -->
            </div></form>
  ';
  
  ?>