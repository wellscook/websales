<style>
    .pagination{
        font-size:10px;
    }
    .pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus{
        background-color: #adc948;
        border-color: #adc948;
    }
</style>


<div class="col-md-12 ">
    <!-- Primary box -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Users Types</h3>


        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">

            <div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid" style="font-size:12px;">
                <table id="example1" class="table table-bordered table-striped dataTable font-normal"
                       aria-describedby="example1_info" style="font-size:12px;">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-sort="ascending" aria-label="" style="width: 176px;">ID
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="">Name
                            </th>

                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="">Description
                            </th>
                        </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php if (isset($usertypes)): ?>
                            <?php foreach ($usertypes as $usertype): ?>
                                <tr>
                                    <td class="col-md-1 sorting_1"><?php echo $usertype['ID']; ?></td>
                                    <td class=" "><?php echo $usertype['name']; ?></td>
                                    <td class=" "><?php echo $usertype['description']; ?></td>

                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" class="sorting_1">No Data Loaded</td>
                            </tr>
                        <?php endif; ?>



                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                <a class="btn btn-success btn-sm btn-padding" href="/user/listusers.dc">Return to Users</a>
                <a class="btn btn-success btn-sm btn-padding" href="/user/createUserType.dc">Create User Type</a>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
    });
</script>