<!DOCTYPE html>
<html class="bg-aqua">
    <head>
        <meta charset="UTF-8">
        <title>Recover Password // Online Sales Management // Built By Douglas Cook</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="/assets/global/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/global/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/global/css/AdminLTE.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-aqua">
        <style>
            #login-box{
                border:2px solid #fff;
                border-radius: 5px;
            }
            .form-box .header{
                background-color: #00c0ef ;
                font-family: 'Kaushan Script', cursive;
            }
        </style>
        <div class="form-box" id="login-box">
            <div class="header">
                Web Sales V1.0
            </div>
            <?php echo form_open("/login/recoveremail"); ?>
            <div class="body bg-gray text-center">
                <h3>Recover Password</h3>
                <div class="form-group">
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger alert-dismissable">
                            <i class="fa  fa-frown-o"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Alert!</b> <?php echo validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control text-center" placeholder="Email Address"/>
                </div>



            </div>
            <div class="footer">
                <button type="submit" class="btn bg-aqua btn-block">Request Password</button>
            </div>
        </form>
    </div>
    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/global/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>