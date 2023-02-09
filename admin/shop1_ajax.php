 <?php
 mysql_connect("localhost","root","")or die("server error");
mysql_select_db("cr_2020db")or die("database error");

  $sid=$_POST['sid'];
  $res=mysql_query("SELECT * FROM sh_product WHERE WHICH_SHOP ='".$sid."'");
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
                    <tr>
                      <th>Sr.No</th>
                      <th>Product</th>
                      <th>Status</th>
                      <th>Charges</th>
                    </tr>
                    </thead>
                    <tbody>';
                    $sr=1;
                    while($row=mysql_fetch_row($res))
                    {
                    	 echo'<tr>
                      <td><a href="pages/examples/invoice.html">'.$sr.'</a></td>
                      <td>
                        '.$row[1].'
                        <input type="hidden" value="'.$row[0].'" name="product_id'.$sr.'">
                        <input type="hidden" value="'.$sid.'" name="shop_id'.$sr.'">
                        <input type="hidden" value="'.$count.'" name="count">
                      </td>';
                      
                      
                      if($row[4]=='pending')
                      {
                        echo' 
                        <td>
                       <span class="badge badge-danger">'.$row[4].'</span>
                      </td>
                        <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                        <input style="width:100px" type="number" placeholder="Per KM Charges" value='.$row[3].' name="charges'.$sr.'">
                        </div>
                      </td> ';
                      }
                    
                    else
                      {
                        echo' 
                        <td>
                       <span class="badge badge-success">'.$row[4].'</span>
                      </td>
                        <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                        <input style="width:100px;background-color:#000; color:#fff" type="number" placeholder="Per KM Charges" value='.$row[3].' readonly name="charges'.$sr.'">
                        </div>
                      </td> ';
                      }
                    echo'</tr>';
                    $sr++;
                    }
                   
                   
                   echo' </tbody>
                  </table>
                </div>
                &nbsp; &nbsp; &nbsp; <input type="submit" class="btn btn-info btn-md " name="save" value="Send">
              </div>
               

              <!-- /.card-body -->
              <div class="card-footer clearfix">
                

              </div>
              <!-- /.card-footer -->
            </div></form>
  ';
  
  ?>