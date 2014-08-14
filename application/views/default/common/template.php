<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view("/default/common/template/template_menu"); ?>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="text-transform: capitalize;">
                <?php echo $view; ?>
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><?php echo $view; ?></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <?php if (isset($view)): ?>
                <?php if ($view == "dashboard"): ?>
                    <div class="row">
                        <?php $this->load->view("/default/" . $view . "/" . "index.php"); ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row ">

                <?php if (isset($format)): ?>
                    <?php if ($format == 12): ?>
                        <section class="col-lg-12  connectedSortable">
                            <?php if (isset($eliments_c)): ?>
                                <?php $this->load->view("/default/" . $view . "/" . $eliments_c); ?>
                            <?php endif; ?>
                        </section>
                    <?php else: ?>
                        <!-- Left col -->
                        <section class="col-lg-6 col-xs-6 connectedSortable zerom">
                            <?php if (isset($eliments_l)): ?>
                                <?php $this->load->view("/default/" . $view . "/" . $eliments_l); ?>
                            <?php endif; ?>
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 col-xs-6 connectedSortable zerom">
                            <?php if (isset($eliments_r)): ?>
                                <?php $this->load->view("/default/" . $view . "/" . $eliments_r); ?>
                            <?php endif; ?>
                        </section>
                        <!-- right col -->
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <!-- /.row (main row) -->
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div><!-- ./wrapper -->