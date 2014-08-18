<div class="col-md-6">
    <!-- Success box -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Create User</h3>
            <?php echo validation_errors(); ?>
        </div>
        <div class="box-body">
            <?php echo form_open(""); ?>
            Title
            <input class="form-control input-sm" name="title" id="title" placeholder="Title"/>
            First Name
            <input class="form-control input-sm" name="firstname" id="firstname" placeholder="First Name"/>
            Surname
            <input class="form-control input-sm" name="surname" id="surname" placeholder="Surname"/>
            Email Address
            <input class="form-control input-sm" name="emailaddress" id="emailaddress" placeholder="Email Address"/>
            Phone Number
            <input class="form-control input-sm" name="phone" id="phone" placeholder="Phone"/>
            Mobile Number
            <input class="form-control input-sm" name="mobile" id="mobile" placeholder="Mobile"/>
            Work Phone
            <input class="form-control input-sm" name="work" id="work" placeholder="Work"/>
            Address Line 1
            <input class="form-control input-sm" name="addressl1" id="addressl1" placeholder="Address Line 1"/>
            Address Line 2
            <input class="form-control input-sm" name="addressl2" id="addressl2" placeholder="Address Line 2"/>
            Town
            <input class="form-control input-sm" name="town" id="town" placeholder="Town"/>
            City
            <input class="form-control input-sm" name="city" id="city" placeholder="City"/>
            Postcode
            <input class="form-control input-sm" name="postcode" id="postcode" placeholder="Postcode"/>
            Budget
            <input class="form-control input-sm" name="budget" id="budget" placeholder="Budget"/>
            Deposit
            <input class="form-control input-sm" name="deposit" id="deposit" placeholder="Deposit"/>
            Enquiry Source
            <select class="form-control input-sm" name="" id="">
                <option value="">Please Select</option>
            </select>
            Enquiry Type
            <select class="form-control input-sm" name="" id="">
                <option value="">Please Select</option>
            </select>
            Enquiry Product
            <select class="form-control input-sm" name="" id="">
                <option value="">Please Select</option>
            </select>

            <button type='submit' class='btn btn-sm btn-success'>Save</button>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>