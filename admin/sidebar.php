 <nav class="main-header navbar navbar-expand navbar-secondary navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     <li class="nav-item d-none d-sm-inline-block" style="">
        <a href="../logout.php" class="nav-link" style="color: #fff;">
          <button style="background-color: red">Log Out</button> 
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        
      </li>
    </ul>

   
  </nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="logo/image2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><i>Courier Master</i></span>
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
              <i class="nav-icon fas fa fa-home "></i>
              <p>
                Home
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa fa-truck "></i>
              <p>
                Vehicle Type
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="new_vctype.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Vehicle Type</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="vctype_details.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Vehicle Type</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-truck"></i>
              <p>
                Vehicle
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="new_vc.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New VC</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="vc_details.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>VC Details</p>
                  </a>
                </li>
              </ul>
          </li>
         
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Shop Type
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="new_shoptype.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Shoptype</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="shoptype_details.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Shoptype Details</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-store "></i>
              <p>
                Shop
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="new_shop.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Shop</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="shop_details.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Shop Details</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Courier Boy
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="new_courierboy.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Courier Boy</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="courierboy_details.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Courier Boy Details</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="new_chargesrq.php" class="nav-link active">
              <i class="nav-icon fas fa-arrow-circle-up nav-icon"></i>
              <p>
                Charges Request
              </p>
            </a>
             <!--  <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="new_chargesrq.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Charges Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="chargesrq_details.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Charges Request details</p>
                  </a>
                </li>
              </ul> -->
          </li>

          <li class="nav-item has-treeview ">
            <a href="new_orderrq.php" class="nav-link active">
              <i class="nav-icon fas fa-database "></i>
              <p>
                Order Request
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>

        <!--   <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-archive "></i>
              <p>
                Accepted Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="new_AcceptOrder.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Accepted Order </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="AcceptOrder_details.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Accepted Order details</p>
                  </a>
                </li>
              </ul>
          </li> -->

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa fa-truck "></i>
              <p>
                Work Distribution
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="work.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Distribute</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="work_view.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Work Details</p>
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