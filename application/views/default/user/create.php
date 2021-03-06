<div class="col-md-6">
    <!-- Success box -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Create User</h3>
            <?php echo validation_errors(); ?>
        </div>
        <div class="box-body">
            <?php echo form_open(""); ?>
            Full Name
            <input class="form-control input-sm" name="name" id="name" placeholder="Full Name" value=""/>
            Email Address
            <input class="form-control input-sm" name="email" id="email" placeholder="Email Address" value=""/>
            Office Phone
            <input class="form-control input-sm" name="phone" id="phone" placeholder="Office Phone" value=""/>
            Mobile
            <input class="form-control input-sm" name="mobile" id="mobile" placeholder="Mobile Phone" value=""/>
            Password
            <input type="password" class="form-control input-sm" name="password" id="password" placeholder="password" value=""/>
            Type
            <select class="form-control input-sm" name="type" id="type" required="">
                <option value="">Please Select</option>
                <?php foreach ($user_types as $type): ?>
                    <option value="<?php echo $type['name'] ?>"><?php echo $type['name'] ?> // <?php echo $type['description'] ?> </option>
                <?php endforeach; ?>
            </select>
            Username
            <input class="form-control input-sm" name="username" id="username" placeholder="Username" value=""/>
            <br>
            <button type='submit' class='btn btn-sm btn-success'>Save</button>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>