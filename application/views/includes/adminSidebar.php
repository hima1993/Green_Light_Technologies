

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>


        <!..User Management section..>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>User Managment</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>index.php/Users/adminAddUser">Add User</a></li>
                        
                    </ul>
                </li>
        <!..User Management section..>


        <!..Items Management Section..>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Services Management</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">


                         <li class="treeview">


                        <a href="#"> <span>Purchasing Items</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                       
                        


                            <ul class="treeview-menu">

                                <li><a href="<?php echo base_url()?>index.php/ItemsController/adminAdditems">Add Item</a></li>
                                 <li><a href="<?php echo base_url()?>index.php/ItemsController/MngAdditems">Manage Items</a></li>
                                


                            </ul>

                        </li>



                         <li class="treeview">


                        <a href="#"> <span>Other Services</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                       
                        


                            <ul class="treeview-menu">

                                <li><a href="<?php echo base_url()?>index.php/ItemsController/adminAddService">Add Other Services</a></li>
                                 <li><a href="<?php echo base_url()?>index.php/ItemsController/MngAddservice">Manage Other Services</a></li>
                                


                            </ul>

                        </li>





                        


                     

                       
                        
                    </ul>
                </li>
        <!../Items Management Section..>



        <!..Customer FeedBack Section..>
                <li class="treeview">
                    <a href="<?php echo base_url()?>index.php/Other/adminFeed" ><i class="fa fa-link"></i> <span>Customer FeedBacks</span>
                      
                </i>
              </span>
                    </a>
            
                </li>
        <!../Customer FeedBack Section....>

        

    </section>
    <!-- /.sidebar -->
  </aside>