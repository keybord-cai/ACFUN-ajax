<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <title>phpMyAdmin </title>
    <link rel="stylesheet" type="text/css" href="phpmyadmin.css.php?server=1&amp;token=26584faa4738d8fdca45a5435181a50b&amp;js_frame=right&amp;nocache=2764147831" />
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <link rel="stylesheet" type="text/css" href="./themes/pmahomme/jquery/jquery-ui-1.8.16.custom.css" />
    <meta name="robots" content="noindex,nofollow" />
<script src="./js/cross_framing_protection.js?ts=1374964490" type="text/javascript"></script>
<script src="./js/jquery/jquery-1.6.2+fix-9521.js?ts=1374964490" type="text/javascript"></script>
<script src="./js/jquery/jquery-ui-1.8.16.custom.js?ts=1374964490" type="text/javascript"></script>
<script src="./js/update-location.js?ts=1374964490" type="text/javascript"></script>
<script src="./js/functions.js?ts=1374964490" type="text/javascript"></script>
<script src="./js/jquery/jquery.qtip-1.0.0-rc3.js?ts=1374964490" type="text/javascript"></script>
<script src="./js/messages.php?lang=zh_CN&amp;db=&amp;token=26584faa4738d8fdca45a5435181a50b" type="text/javascript"></script>
<script src="./js/get_image.js.php?theme=pmahomme" type="text/javascript"></script>
<script type="text/javascript">
// <![CDATA[
if (typeof(parent.document) != 'undefined' && typeof(parent.document) != 'unknown'
    && typeof(parent.document.title) == 'string') {
    parent.document.title = 'phpMyAdmin ';
}
// ]]>
</script>
<script type="text/javascript">
//<![CDATA[
// show login form in top frame
if (top != self) {
    window.top.location.href=location;
}
//]]>
</script>
</head>

<body class="loginform">

    
<div class="container">
<a href="./url.php?url=http%3A%2F%2Fwww.phpmyadmin.net%2F&amp;token=26584faa4738d8fdca45a5435181a50b" target="_blank" class="logo"><img src="./themes/pmahomme/img/logo_right.png" id="imLogo" name="imLogo" alt="phpMyAdmin" border="0" /></a>
<h1>
    欢迎使用 <bdo dir="ltr" xml:lang="en">phpMyAdmin </bdo></h1>
    
<form method="post" action="index.php" target="_parent">
    <input type="hidden" name="db" value="" /><input type="hidden" name="table" value="" /><input type="hidden" name="token" value="26584faa4738d8fdca45a5435181a50b" /><fieldset><legend xml:lang="en" dir="ltr">语言 - <em>Language</em></legend>
    <select name="lang" class="autosubmit" xml:lang="en" dir="ltr">
            <option value="en">English</option>
        <option value="en_GB">English (United Kingdom)</option>
        <option value="zh_CN" selected="selected">&#20013;&#25991; - Chinese simplified</option>
        <option value="zh_TW">&#20013;&#25991; - Chinese traditional</option>

    </select>
    </fieldset>
    <noscript>
    <fieldset class="tblFooters">
        <input type="submit" value="Go" />
    </fieldset>
    </noscript>
</form>
    <br />
<!-- Login form -->
<form method="post" action="index.php" name="login_form" target="_top" class="login">
    <fieldset>
    <legend>
登录<a href="./Documentation.html" target="documentation" title="phpMyAdmin 文档"> <img src="themes/dot.gif" title="phpMyAdmin 文档" alt="phpMyAdmin 文档" class="icon ic_b_help" /></a></legend>

        <div class="item">
            <label for="input_username">用户名：</label>
            <input type="text" name="pma_username" id="input_username" value="root" size="24" class="textfield"/>
        </div>
        <div class="item">
            <label for="input_password">密码：</label>
            <input type="password" name="pma_password" id="input_password" value="" size="24" class="textfield" />
        </div>
        <input type="hidden" name="server" value="1" />    </fieldset>
    <fieldset class="tblFooters">
        <input value="执行" type="submit" id="input_go" />
    <input type="hidden" name="token" value="26584faa4738d8fdca45a5435181a50b" />    </fieldset>
</form>

    </div>
    </body>
</html>
    