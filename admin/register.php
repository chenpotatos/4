<?php
include 'common.php';

if ($user->hasLogin() || !$options->allowRegister) {
    $response->redirect($options->siteUrl);
}
$rememberName = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_name'));
$rememberMail = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_mail'));
Typecho_Cookie::delete('__typecho_remember_name');
Typecho_Cookie::delete('__typecho_remember_mail');

$bodyClass = 'body-100';

include 'header.php';
?>
<html lang="zh">
<head>
  <link href="/admin/css/registerstyle.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

    <div class="main-w3layouts wrapper">
        <div class="main-agileinfo">
            <div class="agileits-top">
                        <form action="<?php $options->registerAction(); ?>" method="post" 
name="register" role="form">
                  <label for="name" class="sr-only"><?php _e('用户名'); ?></label>
                  <input type="text" id="name" name="name" value="<?php echo $rememberName; ?>" 
placeholder="<?php _e('用户名'); ?>" class="text-l w-100" autofocus />
                  <label for="mail" class="sr-only"><?php _e('Email'); ?></label>
                  <input type="pw" id="mail" name="mail" class="text-l w-100" placeholder="<?php 
_e('Email'); ?>" />
                    <input type="submit" value="<?php _e('注册'); ?>">
                                                  <ul>
                                                          <p class="more-link">
            <a href="<?php $options->siteUrl(); ?>"><?php _e('返回首页'); ?></a>
            &bull;
            <a href="<?php $options->adminUrl('login.php'); ?>"><?php _e('用户登录'); ?></a>
        </p>
                                                  </ul>
                </form>
            </div>
       </div>

</body>
</html>
<?php 
include 'common-js.php';
?>
<script>
$(document).ready(function () {
    $('#name').focus();
});
</script>
<?php
include 'footer.php';
?>
