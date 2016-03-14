<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Natural Language Form</title>
		<meta name="description" content="Natural Language Form with custom text input and drop-down lists" />
		<meta name="keywords" content="Natural Language UI, sentence form, text input, contenteditable, html5, css3, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body class="nl-blurred">
		<div class="container demo-1">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="#">
                                    <span>News Paper</span>
                                </a>
				<span class="right">
                                    <a class="codrops-icon codrops-icon-drop" href="index.php">
                                        <span>Home</span>
                                    </a>
                                    <a class="codrops-icon codrops-icon-drop" href="addNews.php">
                                        <span>Add Article</span>
                                    </a>
                                </span>
			</div>
			<header>
				<h1>Insert a News <span>News that reflect life</span></h1>	
			</header>
			<div class="main clearfix">
                            <form id="nl-form" class="nl-form" action="insertNews.php" method="post">
                                    <input type="text" placeholder="Catagoty Name" name="catagory_name" />
                                    <br>
                                    <input type="text" placeholder="Catagoty Description" name="catagory_desc" />
                                    <br>
                                    <select name="status">
                                            <option value="#" selected>Status</option>
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                    </select>
                                    <br>
                                    
                                    <div class="nl-submit-wrap">
                                        <button class="nl-submit" type="submit" name="submit" value="submit">Insert a News</button>
                                    </div>
                                    <div class="nl-overlay"></div>
				</form>
			</div>
		</div><!-- /container -->
		<script src="js/nlform.js"></script>
		<script>
			var nlform = new NLForm( document.getElementById( 'nl-form' ) );
		</script>
	</body>
</html>