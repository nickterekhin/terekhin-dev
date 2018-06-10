<?php
/**
 * Template Name: Test Fonts
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>USA, Kansas, Wichita | SignUp</title>
    <?php wp_head()?>
</head>
<body>
<div class="container-fluid">
    <div class="container bt-signup-page">
        <h1>Wichita.com <small>SignUp Page</small></h1>

        <hr>
        <i class="td td-logo"></i>
        <hr class="hr-bottom-margin">
        <p class="bt-copy"><small>Copyright &copy <?php if((idate("Y",time())-2016)>0){echo "2016-".date("Y",time());}else{echo date("Y",time());};?></small></p>
    </div>
</div>

</body>
</html>
