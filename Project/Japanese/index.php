<?php
	session_start();

	if(isset($_REQUEST['firstname'])) {
		$name = $_REQUEST['firstname'];
	}
	else if(isset($_SESSION['name'])) {
		$name = $_SESSION['name'];
	}
	else
		$name = "hello";

	$_SESSION['name'] = $name;
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="15000">
	<meta name="description" content="Crack JLPT">
	<meta name="author" content="Pham Que">
	<meta name="keywords" content="JLPTN1, JLPTN2, JLPTN3, JLPTN4, JLPTN5">
	<title>Crack JLPT</title>
	<link rel="icon" href="public/images/icon.ico" type="image/ico" sizes="16x16">
	<link rel="stylesheet" href="public/css/main.css">
	<link rel="stylesheet" href="public/font/font-awesome-4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src='public/js/main.js'></script>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
		        jQuery(document).ready(function($) {
		            var $filter = $('.nav_h');
		            var $filterSpacer = $('<div />', {
		                "class": "vnkings-spacer",
		                "height": $filter.outerHeight()
		            });
		            if ($filter.size())
		            {
		                $(window).scroll(function ()
		                {
		                    if (!$filter.hasClass('fix') && $(window).scrollTop() > $filter.offset().top)
		                    {
		                        $filter.before($filterSpacer);
		                        $filter.addClass("fix");
		                    }
		                    else if ($filter.hasClass('fix')  && $(window).scrollTop() < $filterSpacer.offset().top)
		                    {
		                        $filter.removeClass("fix");
		                        $filterSpacer.remove();
		                    }
		                });
		            }
		 
		        });
		</script>		





</head>
<body>



	<div class="flex-container">
	<header class="header">
		<h1>Japanese</h1>
	</header>
 

	<nav class="nav_h">	
		<ul>
			<li><a class="active" href="index.html">Home</a></li>
			<li class="dropdown"> <a href="JLPT.html" class="dropbtn">JLPT</a>
				<div class="dropdown-content">
							<a href="#">N5</a>
							<a href="#">N4</a>
							<a href="#">N3</a>
							<a href="#">N2</a>
							<a href="#">N1</a>
				</div>
			</li>	
			<li class="dropdown"><a href="Test.html" class="dropbtn">Test</a>
				<div class="dropdown-content">
							<a href="#">N5</a>
							<a href="#">N4</a>
							<a href="#">N3</a>
							<a href="#">N2</a>
							<a href="#">N1</a>
				</div>
			</li>
			<li><a href="QA.html">QA</a></li>
			<li><a href="Anki.html">Anki</a></li>
			<li><a href="Software.html">Software</a></li>
			<li><a href="Contact.html">Contact</a></li>
			<li><a href="About.html">About</a></li>
			<li style="float:right"><a  href="#about"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
			<li style="float:right"><a  href="#about"><i class="fa fa-search" aria-hidden="true"></i></a></li>
			

		</ul>	

	</nav>	


	<nav class="nav">
		<ul><h3>RESOURCES</h3>
			<li><a href="Minanonihongo.html">MINNA NO NIHONGO | みんなの日本語</a></li>
			<li><a href="Listening.html">NGHE ONLINE | オンライン聞く</a></li>
			<li><a href="Reading.html">ĐỌC HIỂU | 読解</a></li>
			<li><a href="Grammar.html">NGỮ PHÁP | 文法</a></li>
			<li><a href="Kanji.html">KANJI | 漢字</a></li>
			<li><a href="Vocabulary.html">TỪ VỰNG | 語彙</a></li>
			<hr>
			
			<form action="">
			<fieldset>
				<legend>Personal Information</legend>
				<table>
					<tr>
						<td><label for="fname">First Name</label></td>
						<td><input type="text" id="fname" value="<?php echo $name ?>" name="firstname"><br></td>
					</tr>
					<tr>
						<td><label for="lname">Last Name</label></td>
						<td><input type="text" id="lname" name="lastname"><br></td>
					</tr>
					<tr>
						<td><label for="country">Country</label></td>
						<td><select id="country" name="country">
								<option value="vietnam">Vietnam</option>
								<option value="korea">Korea</option>
								<option value="china">China</option>
							</select></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Submit"></td>
					</tr>
				</table>	
				</fieldset>
			</form>
			
		</ul>


	</nav>

	<article class="article">
		<h1>Japanese</h1>
			<p>ようこそ Crack JLPT へ !
			<p>1</p>
			<p>2</p>
			<p>3</p>
			<p>4</p>
			<p>5</p>
			<p>6</p>
			<p>7</p>
			<p>8</p>
			<p>9</p>
			<p>0</p>
			<p>1</p>
			<p>2</p>
			<p>3</p>
			<p>4</p>
			<p>5</p>
			<p>6</p>
			<p>7</p>
			<p>8</p>
			<p>9</p>
			<p>0</p>
			<p>1</p>
			<p>2</p>
			<p>3</p>
			<p>4</p>
			<p>5</p>
			<p>6</p>
			<p>7</p>
			<p>8</p>
			<p>9</p>
			<p>0</p>
			<p>1</p>
			<p>2</p>
			<p>3</p>
			<p>4</p>
			<p>5</p>
			<p>6</p>
			<p>7</p>
			<p>8</p>
	</article>

	<footer>Copyright © CrackJLPT</footer>
</div>





</body>
</html>


