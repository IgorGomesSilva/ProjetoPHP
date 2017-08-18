<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
   
    <title>PHP</title>
    <link href="/phpdiurno/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="/phpdiurno/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="/phpdiurno/assets/css/style.css" rel="stylesheet" />
    
    <script src="/phpdiurno/assets/js/jquery-1.11.1.js"></script>
    <script src="/phpdiurno/assets/js/bootstrap.js"></script>
</head>
<body>

	<div class="navbar navbar-inverse set-radius-zero">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">
				<img alt="logo" src="/phpdiurno/assets/img/logo.png">
			</a>

		</div>

	</div>
</div>


<section class="menu-section">
	<div class="container"> 
		<div class="row">
			<div class="col-md-12">
				<div class="navbar-collapse collapse ">
					<ul id="menu-top" class="nav navbar-nav navbar-left">
						<li><a href="index.php">Home</a></li>
						<li><a href="imc.php">IMC</a></li>
					</ul>
					
				</div>
			</div>

		</div>
	</div>
</section>
    
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line"><?php echo $titulo;?></h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                   
                  <?php echo $conteudo;?>
                   
                </div>

            </div>
        </div>
    </div>
     

	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 PHP
                </div>

            </div>
        </div>
</footer>

</body>
</html>
