<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{$title}</title>

    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
    <link rel="stylesheet" type="text/css" media="print" href="assets/css/print.css"  />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />

    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/prettyPhoto.css" />

    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap-reboot.min.css" />

    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="screen" href="assets/css/ie-fix.css" /><![endif]-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.tweet.js"></script>
    <script type="text/javascript" src="assets/js/jquery.ScrollTo.js"></script>
    <script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="assets/js/jquery.quicksand-config.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
</head>
<body>
<div id="page-shadow">
    <div id="page">
        <div class="content-innertube">
            {include file="./header.tpl"}
            <div id="stripe"></div>
            {$content}
            <br/>
            <div id="stripe"></div>
        </div>
        {include file="./footer.tpl"}
    </div>
</div><!-- page-shadow end -->
</body>
</html>