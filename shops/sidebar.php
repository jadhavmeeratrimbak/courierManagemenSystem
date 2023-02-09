 <nav class="main-header navbar navbar-expand  navbar-light" style="background-color: #000333; color: #fff">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars" style="color: #fff"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" style="">
        <a href="../logout.php" class="nav-link" style="color: #fff;">
          <button style="background-color: red"><i class="fa fa-sync"  ></i></button> Log Out
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link" style="color: #fff">Report</a> -->
      </li>
    </ul>

   
  </nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../logo/image2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: #fff"><b>Courier Master</b></span><br>
      <span class="brand-text font-weight-light">
        
        <?php
              $sid=$_SESSION['shop'];
              $a=mysql_query("select * from shop where SHOP_ID='".$sid."'");
              $a1=mysql_fetch_row($a);
               echo' <b><b style="color:green; font-size:20px; margin-left:50px;">'.$a1[2].'</b><br></b>';


              $sh_tp=mysql_fetch_row(mysql_query("select * from shop_type where SHOP_ID='".$a1[1]."'"));

                echo'<b> <b style="color:orange; font-size:15px; margin-left:80px;">'.$sh_tp[1].'</b></b>';



               ?>
      </span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview ">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
             
          </li>


           <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="add_product.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add product</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="view_product.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Product</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="view_charges_request.php" class="nav-link active">
              <i class="nav-icon fas fa-arrow-circle-up"></i>
              <p>
                Charges Request
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>
         
          

           <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="add_customer.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Customer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="view_customer.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Customer</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="new_order.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Order</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="view_order.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Show Order</p>
                  </a>
                </li>
              </ul>
          </li>
       
         </ul>
        </li>
          
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>