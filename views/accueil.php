<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>
    <header>

        <nav class="nav_home_page">

            <!-- BARRE DE NAVIGATION - début -->
            <div class="nav_logo">
                <img class="logo logo_vert_clair" src="./asset/img/img_logo/logo_vert_clair.svg" alt="logo">
                <!-- <img class="logo logo_vert_fonce" src="./img/img_logo/logo_vert_fonce.svg" alt=""> -->
            </div>
            <div class="navigation hp_navigation">
                <div class="recherche">
                    <input id="recherche" type="text" placeholder="RECHERCHER">
                </div>
                <div class="panier">PANIER (0)</div>
            </div>

            <!-- Burger - animation -->
            <input type="checkbox" class="trigger" />
            <div class="burger">
                <div id="hp_trait1" class="trait1"></div>
                <div id="hp_trait2" class="trait2"></div>
            </div>
            <!-- BARRE DE NAVIGATION - fin -->

            <!-- ESPACE DE NAVIGATION - début -->
            <div class="menu_nav grid_menu">
                <div class="menu_vert">
                    <div class="nav2_container">
                        <!-- PARTIE DROITE -->
                        <!-- LOGO - MENU DE NAVIGATION -->
                        <div class="logo_menu">
                            <a href=""><img class="logo logo_vert_clair" src="./asset/img/img_logo/logo_vert_clair.svg" alt="logo"></a>
                        </div>
                        <!-- PROFIL CONNEXION  - (prénom & image profil rond) -->
                        <div class="profil_nav">
                            <div class="img_profil_nav">
                                <a href=""><img class="img_profil" src="./asset/img/calamar.JPG" alt=""></a>
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
                                <li><a href="" class="profil_info_link">Informations personnelles</a></li>
                                <li><a href="" class="profil_facture_link">Factures</a></li>
                            </ul>
                        </div>
                        <div class="listeAdmin list_sous_menu">
                            <ul>
                                <li><a href="" class="admin_accueil_link">Accueil</a></li>
                                <li><a href="" class="admin_categorie_link">liste des catégories</a></li>
                                <li><a href="" class="admin_event_link">liste des événements</a></li>
                                <li><a href="" class="admin_user_link">liste des utilisateurs</a></li>
                            </ul>
                        </div>
                        <div class="listeClient hidden list_sous_menu">
                            <ul>
                                <li><a href="" class="client_accueil_link">Accueil</a></li>
                                <li><a href="" class="client_event_link">Nos événements</a></li>
                                <li><a href="" class="client_book_link">Vos réservations</a></li>
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
        <div class="hp_bg">
            <div class="hp_bg_img" style="background-image: url(./asset/img/header2.JPG);">
            </div>
        </div>
        <div class="logo_header">
            <img src="./asset/img/img_logo/logo_big.svg" alt="" class="logo_header_big">
        </div>
        <div class="hp_header_img1">
            <img src="./asset/img/calamar.JPG" alt="">
        </div>
        <div class="hp_header_img2">
            <img src="./asset/img/crabe_header2.JPG" alt="">
        </div>
        <div class="hp_header_img3">
            <img src="./asset/img/pasteque_header2.JPG" alt="">
        </div>
    </header>

    <main>
        <!-- SECTION "retrouvez tous nos événements" -->
        <!-- TITRE -->
        <h1 class="hp_titre">
            <p class="hp_titre1">Retrouvez</p>
            <p class="hp_titre2">tous nos<br>événements</p>
        </h1>

        <!-- Liste des événements -->
        <div id="hp_container" class="lb_container">
            <!-- EMMET -->
            <!-- lb pour désigner la page 'liste reservation' -->
    
            <!-- .lb_event>.lb_imageEvent>img^.lb_eventContainer>.lb_numeroEvent+.lb_text>lb_titre+lb_category+lb_date+lb_prix^^.lb_etat -->

            <div class="lb_event">
              <!-- image en backgound -->
              <div class="le_imageEvent"></div>
    
              <!-- texte -->
              <div class="lb_eventContainer">
                <div class="lb_numeroEvent">01</div>
                <div class="lb_text">
                  <div class="lb_titre le_titre">Calamar gourmand</div>
                  <div class="lb_categoryDate">
                    <div class="lb_category">Atelier</div>
                    <div class="lb_date">29-05-2024</div>
                  </div>
                </div>
              </div>
              <div class="le_tarif_etat">
                <p class="le_tarif">Tarif: 75€</p>
                <p class="le_etat">Complet</p>
              </div>
            </div>
            <div class="lb_event">
              <!-- image en backgound -->
              <div class="le_imageEvent"></div>
    
              <!-- texte -->
              <div class="lb_eventContainer">
                <div class="lb_numeroEvent">01</div>
                <div class="lb_text">
                  <div class="lb_titre le_titre">Coconut milk</div>
                  <div class="lb_categoryDate">
                    <div class="lb_category">Atelier</div>
                    <div class="lb_date">29-05-2024</div>
                  </div>
                </div>
              </div>
              <div class="le_tarif_etat">
                <p class="le_tarif">Tarif: 75€</p>
                <p class="le_etat">Complet</p>
              </div>
            </div>
          </div>

    </main>
    <script src="./asset/js/nav_scroll.js"></script>
    <script src="./asset/js/espace_navigation.js"></script>
</body>
</html>