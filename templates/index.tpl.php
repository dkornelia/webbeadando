<?php session_start(); ?>
<?php if(file_exists('./logical/'.$keres['fajl'].'.php')) { include("./logical/{$keres['fajl']}.php"); }?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?=$ablakcim['cim'] ?></title>
		<link rel="stylesheet" href="./styles/style.css" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script  type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="./js/main.js"></script>
		<link rel="stylesheet" href="./styles/style.css" type="text/css">
		<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
		<link rel="shortcut icon" type="image/png" href="./images/favicon.png"/>
	</head>		
	<body>
		<header class="text-center">
				<h1 class="fejlec_cim">WWF Magyarország</h1>
				<?php if(isset($_SESSION['felhasznalonev'])) { ?><h3>Bejlentkezett felhasználó: <?="  ".$_SESSION['nev']." (".$_SESSION['felhasznalonev'].")" ?></h3><?php } ?>
		</header>
	
		<ul class="topnav">
			<?php foreach ($oldalak as $url => $oldal) { ?>
				<?php if(! isset($_SESSION['felhasznalonev']) && $oldal['menu'][0] || isset($_SESSION['felhasznalonev']) && $oldal['menu'][1]){ ?>
					<li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
					<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
					<?= $oldal['cim'] ?></a>
					</li>
				<?php } ?>
			<?php } ?>
			<form class="navbar-form navbar-right" method="get" action="http://www.google.com/search">
					  <div class="input-group">
						<input type="text" class="form-control" placeholder="kulcsszó" name="search" id="tfq2b">
						<div class="input-group-btn">
						  <button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						  </button>
						</div>
					  </div>
			</form>
			<li class="hivatalos"><a href="https://wwf.hu" target="_blank">Hivatalos oldal</a></li>
		</ul>
		
		<div class="content">
			<?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
		</div>
		
		<footer class="text-center">
		Készítette: Dobosi Kornélia
		</footer>
	</body>
</html>