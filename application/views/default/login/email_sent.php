<!DOCTYPE html>
<html class="bg-aqua">
    <head>
        <meta charset="UTF-8">
        <title>System Login // Online Sales Management // Built By Douglas Cook</title>
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
            <?php echo form_open("/login"); ?>
            <div class="body bg-gray text-center">
                <h3>Check Email</h3>
                <p>Your Password has been sent to the email provided.
                </p>
                <p>
                    Please allow up to 20 minutes to receive the password email.
                </p>
            </div>
            <div class="footer">
                <a href="/login/index.dc" class="btn bg-aqua btn-block">Sign me in</a>
            </div>
        </form>
    </div>
    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/global/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>