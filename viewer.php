<!doctype html>
<html class="no-js">
<head>
    <style type="text/css" media="screen">
      #editor { 
          position: relative;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
    height: 900px;
      }
    </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>GPastebin</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="assets/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="assets/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="assets/css/amazeui.min.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
  <!--[if (gte IE 9)|!(IE)]><!-->
  <script src="assets/js/jquery.min.js"></script>
  <!--<![endif]-->
  <!--[if lte IE 8 ]>
  <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
  <script src="assets/js/amazeui.ie8polyfill.min.js"></script>
  <![endif]-->
  <script src="assets/js/amazeui.min.js"></script>
  <script src="assets/js/global.js"></script>
  <script src="assets/js/jquery.base64.js"></script>
    <header class="am-topbar am-topbar-fixed-top">
        <h1 class="am-topbar-brand">
          <a href="#">GPastebin</a>
        </h1>
      
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
      
        <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
          <ul class="am-nav am-nav-pills am-topbar-nav">
            <li class="am-active"><a href="#">Code Viewer</a></li>
          
          </ul>
            <div class="am-topbar-right">
                
            </div>
          </div>
      
          
        </div>
      </header>
      
    <div id="editor">
    </div>

    
  <script src="http://cdn.bootcss.com/ace/1.2.4/ace.js"></script>
  <script src="http://cdn.bootcss.com/ace/1.2.4/ext-language_tools.js"></script>
  <script src="http://cdn.bootcss.com/ace/1.2.4/ext-old_ie.js"></script>
  <!-- <script src="http://cdn.bootcss.com/ace/1.2.4/theme-github.js"></script> -->
<?php
$id = $_GET['id'];
$opentxt = fopen("data/".$id.".codex", "r");
$txt=fread($opentxt,filesize("data/".$id.".codex"));
fclose($opentxt);
?>
<script>
var a="<?php
          $id = $_GET['id'];
            $opentxt = fopen("data/".$id.".codex", "r") or die("Unable to open file!");
            $txt=fread($opentxt,filesize("data/".$id.".codex"));
            echo $txt;
            fclose($opentxt);
            ?>"
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/xcode");
    editor.session.setMode("ace/mode/c_cpp");
    a=$.base64.atob(a);
    editor.setValue($.base64.atob(a));
    editor.clearSelection()
    editor.setOptions({
      readOnly:true,
  fontSize: "14pt"
});
</script>


</body>
</html>