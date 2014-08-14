<style>



</style>
<?php //print_r($user); ?>
<div class="col-md-12">
    <!-- Success box -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Edit User</h3>
        </div>
    </div><!-- /.box -->
</div>
<div class="col-md-6">
    <!-- Success box -->
    <div class="box box-success">
        <div class="box-header">
            <?php echo validation_errors(); ?>
        </div>
        <div class="box-body">
            <?php echo form_open(""); ?>
            Full Name
            <input class="form-control input-sm" name="name" id="name" placeholder="Full Name" value="<?php echo $user['name'] ?>"/>
            Email Address
            <input class="form-control input-sm" name="email" id="email" placeholder="Email Address" value="<?php echo $user['email'] ?>"/>
            Office Phone
            <input class="form-control input-sm" name="phone" id="phone" placeholder="Office Phone" value="<?php echo $user['phone'] ?>"/>
            Mobile
            <input class="form-control input-sm" name="mobile" id="mobile" placeholder="Mobile Phone" value="<?php echo $user['mobile'] ?>"/>
            Password
            <input type="password" class="form-control input-sm" name="password" id="password" placeholder="password" value=""/>
            Username
            <input class="form-control input-sm" name="username" id="username" placeholder="Username" value="<?php echo $user['username'] ?>"/>
            <br>
            <button type='submit' class='btn btn-sm btn-success'>Save</button>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>