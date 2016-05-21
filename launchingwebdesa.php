<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Launching seluruh Website Desa kabupaten Magetan</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .intro-header {
            /*background: url("http://pondokprogrammer.com/wp-content/uploads/2015/11/web-scrape.jpg") no-repeat center center;*/
        }
        #Mp3Me {
            display: none;
        }
        #launching {
            font-size: 65px;
            font-weight: bold;
            padding: 15px 45px;
        }
    </style>

</head>

<body>
    <!-- Header -->
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                    <audio id="Mp3Me" autoplay autobuffer controls>
                        <source src="#">
                    </audio>

                    <script type="text/javascript">
                    function GuitarTrack(_that){
                        var Mp3Me= document.getElementById('Mp3Me');
                        Mp3Me.children[0].src = "media/sirine launching web desa.ogg";
                        Mp3Me.load();
                        setTimeout(function(){
                            window.location.href = "http://magetan-desa.info/";
                        }, 17000);
                        jQuery(_that).button('loading');
                    }
                    </script>
                        <h1><button id="launching" class="btn btn-danger" onclick="GuitarTrack(this);"  data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> waiting...">Launch</button></h1>
                        <h3>Launching seluruh Website Desa kabupaten Magetan</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <div style="position: fixed; z-index: -99; width: 100%; height: 100%; top:0;">
        <iframe frameborder="0" height="100%" width="100%" src="https://youtube.com/embed/MSNCOkBC0a0?autoplay=1&controls=0&showinfo=0&autohide=1&loop=1&playlist=MSNCOkBC0a0&disablekb=1">
      </iframe>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
