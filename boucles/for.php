<?php

/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de mouton : ';
for ($i = 0; $i <= 10; ++$i) {
    echo $i.' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour pacourir un tableau
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo '2.Les couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';

//----------------------------------------
//Parcourir un tableau depuis la fin
echo '3.Les couleurs depuis la fin: <br>';
//n'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1
for ($i = count($couleurs) - 1; $i >= 0; --$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions
$couleurs = array(
  array('rouge clair', 'rouge', 'rouge fonce'),
  array('bleu clair', 'bleu', 'bleu fonce'),
  array('vert clair', 'vert', 'vert fonce'),
  array('orange clair', 'orange', 'orange fonce'),
  array('marron clair', 'marron', 'marron fonce'),
);

echo '4.Les nuances de couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
    for ($j = 0; $j < count($couleurs[$i]); ++$j) {
        echo $couleurs[$i][$j].'<br>';
    }
}

echo '<br><br>';

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//parcourir un tableau simple
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo '5.Les couleurs : <br>';
foreach ($couleurs as $couleur) {
    echo $couleur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif
$vehicule = array(
  //clé => valeur
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
);
echo '6.Specificite de ma voiture : <br>';
//syntax : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
    echo $propriete.':'.$valeur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif multidimensionnel
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
       'marque' => 'Citroen',
       'puissance' => 70,
       'prix' => 10000,
  ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
       'marque' => 'VW',
       'puissance' => 140,
       'prix' => 270000,
  ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
       'marque' => 'Lamborghini',
       'puissance' => 700,
       'prix' => 200000,
  ),
);
echo '7.Les voitures dans la concession :';
foreach ($vehiculeConcession as $gamme => $vehicule) {
    echo '<br>'.$gamme;
    foreach ($vehicule as $propriete => $valeur) {
        echo $propriete.' : '.$valeur.'<br>';
    }
}
echo '<br><br>';

/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

//----------------------------------------
//Créer un tableau pour les mois de l'année et affiché tous les mois de Janvier à Décembre
//modifier et/ou remplacer les éléments ci-dessous
echo "8.Les mois depuis le debut de l'annee : <br>";
$mois = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
for ($i = 0; $i < count($mois); ++$i) {
  var_dump($mois[$i].'<br>');
    
}
echo '<br><br>';

//Afficher les mois de la fin de l'année jusqu'au début de l'année
//modifier et/ou remplacer les éléments ci-dessous
echo "9.Les mois depuis la fin de l'annee : <br>";
for ($i = count($mois) - 1; $i >= 0; --$i) {
  echo $mois[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
//college [
// classe   [   
//  sixieme  [
  //            liste[élèves[propriété => valeurs]
                    //élèves[propriété => valeurs]
                    //élèves[propriété => valeurs]
 //                   ]
 //           ]
//  cinquième[
  //            liste[élèves[propriété => valeurs]
                    //élèves[propriété => valeurs]
                    //élèves[propriété => valeurs] 
//                    ]
//            ]
//  quatrième[
  //            liste[élèves[propriété => valeurs]
                    //élèves[propriété => valeurs]
                    //élèves[propriété => valeurs]]
//                    ]
//            ]
//          ]  
//        ]
$college = array(
  'Sixieme' => array(
    array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
    array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
    array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
  ),
  'Cinquieme' => array(
    array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
    array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
    array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
    array('Nom' => 'Fois', 'Prenom' => 'Marina'),
    array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
  ),
  'Quatrieme' => array(
    array('Nom' => 'Willis', 'Prenom' => 'Bruce',),
    array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
    array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
    array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
  ),
);
echo '<br><br>';
echo '10.Les eleves du college : <br>';
//ajoutez votre code ici
echo '<br><br>';

//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
//reprenez le tableau ci-dessus, ajoutez des éléves pour la classe de troisième et réaffichez tout
echo '11.Les eleves du college (avec les nouveaux arrivants): <br>';
//ajoutez votre code ici

foreach ($college as $classe => $arr) {
  echo '<br>'.$classe. "<br>";
  foreach ($arr as $élève) {
      
      foreach ($élève as $propriété => $valeur) {
        echo $valeur.' ';
  }
  echo "<br>";
}
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
    ),
  ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
    ),
  ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
      	'Tom Hanks', 'Gary Sinise',
    ),
  ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
      	'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
    ),
  ),
    array(
      'nom' => 'battle of the year',
      'date' => 2016,
      'realisateur' => 'réalisateur inconnue',
      'acteurs' => array(
        'inconnue1', 'inconnue2', 'inconnue3',
        'synopsis' => 'Dante Graham (Laz Alonso) est un nabab du hip-hop, mais il était un briseur de sensations; maintenant, il ne veut rien de plus que de voir une équipe américaine remporter la bataille de l\'année\, un tournoi international de b-boy. Dante choisit l’ancien danseur Jason Blake (Josh Holloway)\, entraîneur de basketball veuve et arrogant, pour sélectionner puis former une équipe digne. Alors qu\'il ne reste que trois mois pour réunir un équipage de 13 hommes entêtés dans une unité soudée, Blake, son assistant (Josh Peck) et un chorégraphe (Caity Lotz) ont devant eux un travail colossal.',
      ),
    ),
    array(
        'nom' => 'twilight',
        'date' => '???',
        'realisateur' => ' Catherine Hardwicke',
        'acteurs' => array(
          'Robert Pattinson', 'Kristen Stewart', 'Jude Law',
          'synopsis' => 'Bella Swan déménage pour aller vivre chez son père à Forks, dans l\'État de Washington. Là\, elle est fascinée par un jeune homme mystérieux de son âge\, Edward et par son étrange famille. Elle va découvrir qu\'Edward et sa famille sont en fait des vampires. Mais ceci n\'effraie pas Bella\, et elle rencontre la famille d\'Edward qui l\'accepte\, à l\'exception de Rosalie. La famille Cullen part faire une partie de baseball accompagnée de Bella. Tout se passe bien jusqu\'au moment où trois autres vampires arrivent : James et Victoria\, qui forment un couple\, et leur ami Laurent. Ils proposent de faire une partie avec la famille mais James sent l\'odeur humaine de Bella. La famille défend et protège Bella. James, qui est un grand chasseur, cherche à tuer la jeune fille. Elle part donc avec Alice et Jasper se cacher. Peu après, James appelle Bella et lui donne rendez-vous dans un studio de danse où Bella prenait des cours étant petite. Bella part au studio de danse, James lui a tendu un piège, puis il lui casse la jambe et la mord. Heureusement, Edward et sa famille arrivent à temps pour sauver Bella, et tuent James. Edward extrait le venin de James du bras de Bella pour empêcher sa transformation en vampire.',
        )
    ),
    array(
    'nom' => 'Xmen Dark Phenix',
    'date' => 2019,
    'realisateur' => 'Simon Kinberg',
    'acteurs' => array(
      'James McAvoy', 'Sophie Turner', 'Tye Sheridan',
     ),
    'synopsis' => 'C \'est l\'histoire de l\'un des personnages les plus aimés des X-Men, Jean Grey, qui évolue vers l\'emblématique DARK PHOENIX. Au cours d\'une mission de sauvetage dans l\'espace mettant sa vie en danger\, Jean est frappé par une force cosmique qui la transforme en l\'un des mutants les plus puissants. Aux prises avec ce pouvoir de plus en plus instable et ses propres démons, Jean est devenu incontrôlable, déchirant la famille X-Men et menaçant de détruire le tissu même de notre planète. Le film est le film X-Men le plus intense et émouvant de tous les temps. C\'est l\'aboutissement de 20 ans de films X-Men. La famille de mutants que nous connaissons et aimons doit affronter son ennemi le plus dévastateur à ce jour, l\'un des leurs.',
  ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici

foreach($videotheque as $key  => $film){
  // echo $key;
  foreach($film as $propriété => $valeur){
    echo '<br>'.$propriété." : "   ;
 
    if($key === 'acteurs'){
      foreach($valeur as $acteurs){
        var_dump("$acteurs");
      }

    }
 else {   print_r($valeur);}
  };
  
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//d'informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
if($key==='battle of the year'||$key==='twilight'|| $key==='Xmen Dark Phenix'){
  return $key['nom']."est l'un de mes films préféré";
}
echo ($key);
echo '<br><br>';
?>