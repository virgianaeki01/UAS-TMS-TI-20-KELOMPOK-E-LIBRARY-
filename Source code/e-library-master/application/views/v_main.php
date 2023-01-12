<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">

  	<!-- Material Design fonts -->
  	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

  	<!-- Bootstrap -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">

  	<!-- Bootstrap Material Design -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap-material-design.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/ripples.min.css">

	<link href="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<header>
		<div class="navbar navbar-default">
        <div class="container-fluid">
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:void(0)">E-Library</a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
            	<ul class="nav navbar-nav">
                  	<li class="<?php if($menu=="home"){echo "active";} ?>"><a href="<?php echo base_url(); ?>">Home</a></li>

                  	<?php if($this->session->userdata("loggedin")=="true"){ ?>
                  	<li class="<?php if($menu=="profile"){echo "active";} ?>"><a href="<?php echo base_url(); ?>user/profile">Profile</a></li>
                  	<?php } ?>

                  	<?php if($this->session->userdata("loggedin")=="true" && $this->session->userdata("level") != "2"){ ?>
                  	<li class="<?php if($menu=="operator"){echo "active";} ?>"><a href="<?php echo base_url(); ?>operator">Operator</a></li>
                  	<?php } ?>

                  	<?php if($this->session->userdata("level")=="0"){ ?>
                  	<li class="<?php if($menu=="admin"){echo "active";} ?>"><a href="<?php echo base_url(); ?>admin">Admin</a></li>
                  	<?php } ?>

                  	<li class="<?php if($menu=="book"){echo "active";} ?>"><a href="<?php echo base_url('book'); ?>">User</a></li>
                  	
                </ul>
                <form class="navbar-form navbar-left">
                	<div class="form-group">
                    	<input type="text" class="form-control col-xs-8" placeholder="Search">
                  	</div>
                </form>
                <ul class="nav navbar-nav navbar-right">
					<?php if($this->session->userdata("loggedin") == null){ ?>
					<li><a href="<?php echo base_url(); ?>">Login</a></li>
					<?php }else{ ?>
                	<li class="dropdown">
                    	<a href="/" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($this->session->userdata("loggedin")=="true"){echo $this->session->userdata("name");}else{echo "Login";} ?><b class="caret"></b></a>
                    	<?php if($this->session->userdata("loggedin")=="true"){?>
                    	<ul class="dropdown-menu">
                    		<li><a href="<?php echo base_url(); ?>main/logout">Logout</a></li>
                    	</ul>
                    	<?php } ?>
                  	</li>
					<?php } ?>
                </ul>
            </div>
        </div>
		</div>
	</header>
	
	<?php echo $isi ?>

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<footer style="margin-top: 50px">
	    <div class="footer" id="footer" style="background-color: #dedede">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6" >
	                    <h3>Lorem Ipsum</h3>
	                    <ul>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                    </ul>
	                </div>

	                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
	                    <h3> Lorem Ipsum </h3>
	                    <ul>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                    </ul>
	                </div>

	                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
	                    <h3> Lorem Ipsum </h3>
	                    <ul>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                    </ul>
	                </div>

	                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
	                    <h3> Lorem Ipsum </h3>
	                    <ul>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                        <li> <a href="#" style="color: black">Lorem Ipsum</a> </li>
	                    </ul>
	                </div>

	                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
	                    <h3> Lorem Ipsum </h3>
	                    <ul class="social">
	                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
	                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
	                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
	                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
	                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
	                    </ul>
	                </div>
	            </div>
	            <!--/.row--> 
	        </div>
	        <!--/.container--> 
	    </div>
	    <!--/.footer-->
	    
	    <div class="footer-bottom" style="background-color: #c8c8c8">
	        <div class="container">
	            <p class="pull-left"> Copyright © Footer 2014. All right reserved. </p>
	            <div class="pull-right">
	                <ul class="nav nav-pills payments">
	                    <li><i class="fa fa-cc-visa"></i></li>
	                    <li><i class="fa fa-cc-mastercard"></i></li>
	                    <li><i class="fa fa-cc-amex"></i></li>
	                    <li><i class="fa fa-cc-paypal"></i></li>
	                </ul> 
	            </div>
	        </div>
	    </div>
	    <!--/.footer-bottom--> 
	</footer>

	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script>
		(function () {
			var $button = $("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>").click(function () {
	    		var index = $('.bs-component').index($(this).parent());
	  			$.get(window.location.href, function (data) {
	        		var html = $(data).find('.bs-component').eq(index).html();
	        		html = cleanSource(html);
	       			$("#source-modal pre").text(html);
	        		$("#source-modal").modal();
	      		})
	    	});

	    	$('.bs-component [data-toggle="popover"]').popover();
	    	$('.bs-component [data-toggle="tooltip"]').tooltip();

	    	$(".bs-component").hover(function () {
	      		$(this).append($button);
	      		$button.show();
	    	}, function () {
	      		$button.hide();
	    	});

	    	function cleanSource(html) {
	    		var lines = html.split(/\n/);

	    		lines.shift();
	      		lines.splice(-1, 1);

	      		var indentSize = lines[0].length - lines[0].trim().length,
	          	re = new RegExp(" {" + indentSize + "}");

	      		lines = lines.map(function (line) {
	        		if (line.match(re)) {
	          			line = line.substring(indentSize);
	        		}
	        		return line;
	      		});
	      		lines = lines.join("\n");
	      		return lines;
	    	}

	    	$(".icons-material .icon").each(function () {
	      		$(this).after("<br><br><code>" + $(this).attr("class").replace("icon ", "") + "</code>");
	    	});

	  	})();
	</script>

	<script src="<?php echo base_url(); ?>asset/js/ripples.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/material.min.js"></script>
	<script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>


	<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>

	<script>
	  	$(function () {
	    	$.material.init();
	    	$(".shor").noUiSlider({
	      		start: 40,
	      		connect: "lower",
	      		range: {
	        		min: 0,
	        		max: 100
	      		}
	    	});

	    	$(".svert").noUiSlider({
	      		orientation: "vertical",
	      		start: 40,
	      		connect: "lower",
	      		range: {
	        		min: 0,
	        		max: 100
	      		}
	    	});
	  	});
	</script>

</body>
</html>