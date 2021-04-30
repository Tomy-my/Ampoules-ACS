<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/boutton.css" />
		<link rel="stylesheet" href="css/font.css" />
		<link rel="stylesheet" href="css/responsive.css" />
        <link rel="icon" href="img/logo/favicon.png" />
        <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
		<title>Ampoule - Dashboard : <?php echo $titre; ?></title>
	</head>
    <body>
        <nav>
        <!-- Menu principal Responsive Left to Top -->
            <div class="listing_menu">
                <img id="logo" src="img/logo/Logo.svg" alt="Logo du site">
                <ul>
                    <li id="home"><i class="fas fa-home"></i> <a href="index.php">Tableau de bord</a></li>
                    <li id="history"><i class="fas fa-history"></i> <a href="history.php">Historique</a></li>
                    <li id="reseau"><i class="fas fa-wifi"></i> <a href="index.php">Réseau</a></li>
                    <li id="incident"><i class="fas fa-exclamation-triangle"></i> <a href="index.php">Incident</a></li>
                    <li id="bug"><i class="fas fa-bug"></i> <a href="index.php">Bug</a></li>
                    <li id="deco"><i class="fas fa-power-off"></i> <buttoun id="deconnexion">Déconnexion</buttoun> </li>
                </ul>
                <hr>
                <div class="prst">
                    <h1>Le<span>k</span>ki Ampoule ~</h1>
                    <p>
                        Est un Dashboard développé par Tomy SOTTY dans le but
                        d'aider les concieres des immeubles à entretenir l'éclairage
                        communal.
                    </p>
                </div>
                <div class="social">
                    <a id="git" href="https://github.com/Tomy-my"><i class="fab fa-github"></i></a>
                    <a id="insta" href="https://www.instagram.com/_dakor/"><i class="fab fa-instagram"></i></a>
                    <a id ="lock" href="https://www.twitch.tv/locklear"><i class="fab fa-twitch"></i></a>
                </div>
                <hr id="footer">
            </div>
        <!-- Menu secondaire-->
            <div class="listing_menu_secondaire">
                <img id="logo" src="img/logo/Logo.svg" alt="Logo du site">
                <ul>
                    <div class="petit_bloc1">
                        <li><i class="fas fa-home"></i> <a href="index.php">Tableau de bord</a></li>
                        <li><i class="fas fa-history"></i> <a href="index.php">Historique</a></li>
                        <li><i class="fas fa-wifi"></i> <a href="index.php">Réseau</a></li>
                    </div>
                    <div class="petit_bloc2">
                        <li><i class="fas fa-exclamation-triangle"></i> <a href="index.php">Incident</a></li>
                        <li><i class="fas fa-bug" style="padding-left: 63px;"></i> <a href="index.php">Bug</a></li>
                        <li><i class="fas fa-power-off" style="padding-left: 52px;"></i> <buttoun id="deconnexion">Déconnexion</buttoun> </li>
                    </div>
                </ul>
            </div>
        <!-- Burger <Menu></Menu> -->
            <div class="menu_burger">
                <img id="logo" src="img/logo/Logo.svg" alt="Logo du site">
                <a href="#burger_menu">
                    <hr>
                    <hr>
                    <hr>
                </a>
                <burger id="burger_menu">
                    <ul>
                        <li style="margin-top: -80px;"><i class="fas fa-home"></i> <a href="index.php">Tableau de bord</a></li>
                        <li style="padding-right: 46px;"><i class="fas fa-history"></i> <a href="index.php">Historique</a></li>
                        <li style="padding-right: 70px;"><i class="fas fa-wifi"></i> <a href="index.php">Réseau</a></li>
                        <li style="padding-right: 63px;"><i class="fas fa-exclamation-triangle"></i> <a href="index.php">Incident</a></li>
                        <li style="padding-right: 93px;"><i class="fas fa-bug"></i> <a href="index.php">Bug</a></li>
                        <li style="padding-right: 20px;"><i class="fas fa-power-off"></i> <buttoun id="deconnexion">Déconnexion</buttoun> </li>
                        <li><i class="fas fa-times"></i> <a href="#">Quitter le menu</a></li>
                    </ul>
                </burger>
            </div>
        </nav>