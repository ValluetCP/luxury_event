<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Historique réservation</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./asset/css/style.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/site.js"></script> -->
</head>
<body>

    <!-- NAV -->
    <nav class="navbar">

        <!-- BARRE DE NAVIGATION - début -->
        <div class="nav_logo">
          <a href=""><img id="scrollLogoClair" class="logo logo_vert_clair" src=".asset/img/img_logo/logo_vert_clair.svg" alt="logo"></a>
          <a href=""><img id="scrollLogoFonce" class="logo logo_vert_fonce" src=".asset/img/img_logo/logo_vert_fonce.svg" alt=""></a>
        </div>
        <div class="navigation">
            <div class="recherche">
                <input id="recherche" type="text" placeholder="RECHERCHER">
            </div>
            <div class="panier">PANIER (0)</div>
        </div>

        <!-- Burger - animation -->
        <input type="checkbox" class="trigger" />
        <div class="burger">
            <div id="e_trait1" class="trait1"></div>
            <div id="e_trait2" class="trait2"></div>
        </div>
        <!-- BARRE DE NAVIGATION - fin -->

        <!-- ESPACE DE NAVIGATION - début -->
        <div class="menu_nav grid_menu">
            <div class="menu_vert">
                <div class="nav2_container">

                    <!-- PARTIE DROITE -->
                    <!-- LOGO - MENU DE NAVIGATION -->
                    <div class="logo_menu">
                        <a href=""><img class="logo logo_vert_clair" src=".asset/img/img_logo/logo_vert_clair.svg" alt="logo"></a>
                    </div>
                    <!-- PROFIL CONNEXION  - (prénom & image profil rond) -->
                    <div class="profil_nav">
                        <div class="img_profil_nav">
                            <a href=""><img class="img_profil" src=".asset/img/calamar.JPG" alt=""></a>
                        </div>
                        <p>Bonjour Clara,</p>
                    </div>

                    <!-- ESPACE NAVIGATION  - MENU (admin & client) -->
                    <div class="nav2_menu">
                        <ul>
                            <li><a href="#" onclick="showList('listeProfil')">Profil</a></li>
                            <li><a href="#" onclick="showList('listeAdmin')">Espace Admin</a></li>
                            <li><a href="#" onclick="showList('listeClient')">Espace Client</a></li>
                        </ul>
                    </div>

                    <!-- ESPACE NAVIGATION  - LIENS -->
                    <div class="listeProfil hidden list_sous_menu">
                        <ul>
                            <li><a href="">Informations personnelles</a></li>
                            <li><a href="">Factures</a></li>
                        </ul>
                    </div>
                    <div class="listeAdmin list_sous_menu">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href="">liste des catégories</a></li>
                            <li><a href="">liste des événements</a></li>
                            <li><a href="">liste des utilisateurs</a></li>
                        </ul>
                    </div>
                    <div class="listeClient hidden list_sous_menu">
                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href="">Nos événements</a></li>
                            <li><a href="">Vos réservations</a></li>
                        </ul>
                    </div>

                     <!-- DECONNEXION  - LIENS -->
                    <div class="deconnexion">
                        <a href="">Déconnexion</a>
                    </div>
                </div>
            </div>

            <!-- PARTIE GAUCHE -->
            <div class="menu_fond">   
            </div>
        </div>
        <!-- ESPACE DE NAVIGATION - fin -->
    </nav>
    <main class="site">
        <!-- SECTION GAUCHE - IMAGE FIXE -->
        <section class="gauche">
            <div class="gaucheImg" style="background-image: url(./asset/img/event_bocal.jpg);"></div>
        </section>

        <!-- SECTION DROITE - FICHE PRODUIT -->
        <section class="droite droiteHistorique">
            <div id="b_containerDroit" class="containerDroit">
                <div class="b_container container_historique">

                    <h1>Salon de l'automobile</h1>
                    <h2>catégorie</h2>
                    <h5 class="b_historique">
                        Historique
                    </h5>
                    <table class="b_tableau">
                        <tr class="b_tableau_titre">
                            <th colspan="2">Date de réservation & Heure</th>
                            <th>Nombre de place</th>
                            <th></th>
                        </tr>
                        <tr class="b_tableau_contenu">
                            <td>09-09-2023</td>
                            <td>12:45</td>
                            <td>3</td>
                            <td class="b_annuler"><a href="">Annuler</a></td>
                        </tr>
                        </tr>
                        <tr class="b_tableau_contenu">
                            <td>13-09-2023</td>
                            <td>14:16</td>
                            <td>1</td>
                            <td class="b_annuler"><a href="">Annuler</a></td>
                        </tr>
                    </table>
    
                    <!-- MENU ACCORDEON -->
                    <div class="contenuEvent">
    
                        <dl id="accordeon">
                            <dt id="b_resume">Descriptif</dt>
                            <dd>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip. 
                                </p>
                            </dd>
                            
                            <dt>Détail place</dt>
                            <dd>
                                <p class="statePlace">
                                    Nombre de place disponible : <span>23</span><br>
                                    Nombre de place totale : 40 <br>
                                    Nombre de place réservée : 15 <br>
                                </p>
                            </dd>
                            
                            <dt id="b_tarif">Tarif</dt>
                            <dd>
                                <p>Prix : 75€</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="b_facture">
                        <a href="" class="b_btn_facture">Facture</a>
                    </div>
    
                    <p class="b_defaut">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                    </p>
                </div>
            </div>

        </section>
    </main>
    <footer></footer>
    <script src="./asset/js/nav_scroll2.js"></script>
    <script>
        function showList(listClassName){
            var allLists = document.querySelectorAll('.nav2_container div:not(.nav2_menu,.deconnexion,.profil_nav,.img_profil_nav)');
            allLists.forEach(function(list) {
                list.classList.add('hidden');
            });
    
            // Afficher la liste correspondante
            var selectedList = document.querySelector('.' + listClassName);
            selectedList.classList.remove('hidden');
        }
    </script>
</body>
</html>