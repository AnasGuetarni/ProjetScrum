<?php 

include_once "view/hotel/index.php";
/*
<h2 id="bienvenue">Bienvenue</h2>
	<!-- Main -->
	<div id="main">
		<div class="inner">

		<!-- Boxes -->
			<div class="thumbnails">

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic01.jpg" alt="" /></a>
					<div class="inner">
						<h3>Pourquoi, dans les classes du modèle, les attributs sont-ils "protected" plutôt que "private" ?</h3>
						<p>Le boulot principal se fait dans Model.php. C'est une classe mère. Si ses enfants ont des attributs privés, elle ne peux y accéder. Personne ne cache des choses à sa môman.</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic02.jpg" alt="" /></a>
					<div class="inner">
						<h3>Que se passe-t-il si l'action n'est pas passée en paramètre de la route ?</h3>
						<p>On détecte le "/" dans la requête de l'utilisateur. Si y pas, alors on fixe l'action à "index". ça se passe dans la route.</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic03.jpg" alt="" /></a>
					<div class="inner">
						<h3>Que se passe-t-il si le contrôleur demandé dans la route n'existe pas ? Que faire pour corriger ça ?</h3>
						<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic04.jpg" alt="" /></a>
					<div class="inner">
						<h3>L'utilisateur est un filou qui veut vous hacker en demandant un truc qui n'existe pas ?</h3>
						<p>L'autoload ne pourra charger la classe du contrôleur ? Il suffit, dans tools.php, de vérifier l'existence du fichier (file_exists). Si le fichier du contrôleur n'est pas là, diriger vers le contrôleur du site avec un message d'insultes bien salé.</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic05.jpg" alt="" /></a>
					<div class="inner">
						<h3>Que fait la fonction "render" dans le contrôleur générique ?</h3>
						<p>Plein de trucs. Principalement, elle charge un fichier de rendu (dans le dossier view) de la classe demandée, en mettant en global les données voulues ($data)</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic06.jpg" alt="" /></a>
					<div class="inner">
						<h3>Comment faire un rendu partiel pour un élément du modèle, pour l'utiliser comme un widget, sans entête et pied html ?</h3>
						<p>Il faut faire une autre fonction dans Controller.php, sans entête et pied html. C'est l'action spécifique qui appellera cette fonction.</p>
					</div>
				</div>

				+<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic01.jpg" alt="" /></a>
					<div class="inner">
						<h3>Comment faire une page statique (exemple : page "à propos", page "contact", ...) ?</h3>
						<p>Il faut créer une action (fonction) dans le controleur de site (SiteController) et la vue adaptée, dans view/site/???</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic02.jpg" alt="" /></a>
					<div class="inner">
						<h3>Les relations n-aires entre classes sont elles gérées dans le chargement automatique des instances depuis la base ?</h3>
						<p>Non. Cf Question suivante</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic03.jpg" alt="" /></a>
					<div class="inner">
						<h3>Comment gérer les chargements et mises à jour automatique de relation n-aires, sans toucher à Model.php ? en touchant à Model.php ?</h3>
						<p>En créant un constructeur et un __set spécifique dans la classe en questionn (cf Game.php pour exemple)</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic04.jpg" alt="" /></a>
					<div class="inner">
						<h3>La hiérarchie des classes est-elle gérée dans l'automatisation des accès à la base de données ?</h3>
						<p>Non. à gérer en spécifique pour les classes voulues, comme pour les relations n-aires.</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic05.jpg" alt="" /></a>
					<div class="inner">
						<h3>Si les classes du modèle sont presque vides (il n'y a que les attributs), à quoi servent-elle ? Est-ce qu'il y aura des cas où elles seront moins vides ?</h3>
						<p>Si elles sont vides, c'est qu'on a déporté les traitements dans Model.php, parce qu'on avait la flemme de dupliquer du code. On doit gérer les cas particulier dans les classes du modèle : actions particulières (login, logout, ...), relations n-aire....</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic06.jpg" alt="" /></a>
					<div class="inner">
						<h3>Comprenez-vous l'utilité de chaque ligne du chargement d'une instance dans Model.php (après le select) ?</h3>
						<p>Yep :)</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic01.jpg" alt="" /></a>
					<div class="inner">
						<h3>A quoi ça sert de mettre tout $_GET et $_POST dans une seule variable ?@</h3>
						<p>À pas s'emmerder à tester les deux à chaque fois. Et concrètement, à avoir la possibilité de gérer les deux en même temps : cf add dans beer, avec le formulaire en post et l'action avec un paramètre get</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic02.jpg" alt="" /></a>
					<div class="inner">
						<h3>Quelles sont les 2 variables globales importantes ? Pourquoi utiliser des fonctions d'accès ?</h3>
						<p>"parameters" pour ce que demande l'utilisateur (get et post) et "data" pour les données fournies par les controlleurs aux vues. Les fonctions d'accès sont là pour pas s'embeter (et pour pas oublier) avec le mot-clé "global" (berk)</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic03.jpg" alt="" /></a>
					<div class="inner">
						<h3>Comment le chargement automatique des classes fait la différence entre une classe du modèle et une classe du contrôler ?</h3>
						<p>Dans les noms des classes, y'a le mot "Controller" pour les classes de contrôleur. Trop facile :p</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic04.jpg" alt="" /></a>
					<div class="inner">
						<h3>Ou doivent se trouver les fonctions d'accès au données (l'équivalent du findAll, mais spécifique à chaque élément du modèle ?)</h3>
						<p>Dans le modèle ! Modèle = gestion des données.</p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic05.jpg" alt="" /></a>
					<div class="inner">
						<h3>Comment faire un champ de recherche unique (pour tous les éléments du modèle, sur n'importe quel attribut) ?</h3>
						<p>On fait une action dans le contrôleur de site qui fait une recherche globale dans les résultats de tous les findAll. C'est bourrin, mais en dessous de 100000 données dans la base, on s'en fiche. </p>
					</div>
				</div>

				<div class="box">
					<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="view/site/images/pic06.jpg" alt="" /></a>
					<div class="inner">
						<h3>Allez vous utiliser cette archi pour les sprints ?</h3>
						<p>Non. Je suis un guerrier du php. Je code tout à la main entre 2h et 3h du matin.</p>
					</div>
				</div>

			</div>

		</div>
	</div>

		<!-- Scripts -->
			<script src="/view/site/assets/js/jquery.min.js"></script>
			<script src="/view/site/assets/js/jquery.scrolly.min.js"></script>
			<script src="/view/site/assets/js/jquery.poptrox.min.js"></script>
			<script src="/view/site/assets/js/skel.min.js"></script>
			<script src="/view/site/assets/js/util.js"></script>
			<script src="/view/site/assets/js/main.js"></script>

	</body>
</html>
*/