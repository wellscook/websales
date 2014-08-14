<style>



</style>
<div class="col-md-12">
    <!-- Success box -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Create User Type</h3>
        </div>
    </div><!-- /.box -->
</div>
<div class="col-md-6">
    <!-- Success box -->
    <div class="box box-success">
        <div class="box-header">
            <?php echo validation_errors(); ?>
        </div>
        <?php echo form_open(""); ?>
        <div class = "box-body">
            Name
            <input class = "form-control input-sm" name = "name" id = "name" placeholder = "Name" value = ""/>
            Description
            <input class = "form-control input-sm" name = "description" id = "description" placeholder = "Description" value = ""/>
            <button type="submit" class="btn btn-success btn-sm">Create User</button>
        </div><!--/.box-body -->
        </form>
    </div><!--/.box -->
</div>