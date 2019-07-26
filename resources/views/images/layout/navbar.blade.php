<?php $color = array('text-green', 'text-aqua', 'text-yellow','text-primary','text-purple'); ?>
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard <?php echo $color[array_rand($color,1)] ?>"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-eye <?php echo $color[array_rand($color,1)] ?>"></i>
                    <span>View Public Image</span>
                    <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="{{ url('/images/upload') }}"><i class="fa fa-upload <?php echo $color[array_rand($color,1)] ?>"></i> <span>ImageUpload</span></a></li>
                    <li><a href="{{ url('/images/view') }}"><i class="fa fa-eye  <?php echo $color[array_rand($color,1)] ?>"></i> <span>View</span></a></li>
                    </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-arrows-alt <?php echo $color[array_rand($color,1)] ?>"></i>
                    <span>Multiple Image Upload</span>
                    <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="{{ url('/image-view') }}"><i class="fa fa-picture-o <?php echo $color[array_rand($color,1)] ?>"></i> <span>Drag and Drop</span></a></li>
                    @if(auth()->user()->truck == 1)
                        <li><a href=""><i class="fa fa-truck <?php echo $color[array_rand($color,1)] ?>"></i> <span>Truck Entry</span></a></li>
                    @endif
                </ul>
            </li>

            <!-- <li><a href=""><i class="fa fa-user <?php echo $color[array_rand($color,1)] ?>"></i> <span>Expense</span></a></li>
            <li><a href=""><i class="fa fa-spinner <?php echo $color[array_rand($color,1)] ?>"></i> <span>Income</span></a></li>

            <li><a href=""><i class="fa fa-print <?php echo $color[array_rand($color,1)] ?>"></i> <span>Bill</span></a></li>

            <li><a href=""><i class="fa fa-user <?php echo $color[array_rand($color,1)] ?>"></i> <span>Staff Salary</span></a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-pdf-o <?php echo $color[array_rand($color,1)] ?>"></i>
                    <span>Report</span>
                    <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href=""><i class="fa fa-file-pdf-o <?php echo $color[array_rand($color,1)] ?>"></i> <span>Vehicle Report</span></a></li></li>
                    <li><a href=""><i class="fa fa-file-pdf-o <?php echo $color[array_rand($color,1)] ?>"></i> <span>Customer Report</span></a></li></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog <?php echo $color[array_rand($color,1)] ?>"></i>
                    <span>Setting</span>
                    <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href=""><i class="fa fa-user <?php echo $color[array_rand($color,1)] ?>"></i> <span>Manager</span></a></li>
                </ul>
            </li> -->



        </ul>
    </section>
</aside>