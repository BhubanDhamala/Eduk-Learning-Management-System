<?php include('header.php'); ?>
<style>
	body#login::before {
    content: "";

    position: absolute;
    top: 0;
    /* z-index: 1; */
    left: 0;
    width: 100%;
    height: 100%;
}
	
</style>
<body id="login">
    <div class="container" style="position: relative">
		<div class="row-fluid">
			<div class="span6"><div class="pull-right"><?php include('login_form.php'); ?></div></div>
		</div>
		
    </div>
<?php include('script.php'); ?>
</body>
</html>