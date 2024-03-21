<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>L'événement</title>
    <meta name="description" content="Une phrase d’environ 170 caractères">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>

    <!-- MODAL PANIER (structure générale)-->
    <div id="modalPanier">
        <div class="modalContentPanier">
            <div class="modalPanierContainer">
                <p class="modalPanierAjout">Produit ajouté au panier</p>
                <!-- DEBUT ITEM -->
                <div class="modalPanierContainerItems">
                    <div class="modalPanierimg" style="background-image: url(./asset/img/event_bocal.jpg);">
                        <!-- image en bg -->
                    </div>
                    <div class="modalPaniertxt">
                        <h1 class="modalPaniertitre">Salon de l'automobile</h1>
                        <h2 class="modalPanierCategorie">Atelier</h2>
                        <p class="modalPanierQuantite">Quantité :<span> 1</span></p>
                    </div>
                </div>
                <!-- FIN ITEM -->
            </div>
        </div>
        <a class="modalClosePanier" href="#"><img class="img_croix_popup2" src="./asset/img/coix_verte.svg" alt=""></a>
        <div class="modalPanierDegrade">
            <a href="" id="lb_btnPanier" class="btn_billet_panier">Voir panier</a>
        </div>
    </div>



    <!-- MODAL EVENT (Confirmation "Ajouter une réservation")-->
    <div id="modalEvent">
        <div class="modal_content">
            <a class="modal_close" href="#"><img class="img_croix_popup" src="../asset/img/croix_close.svg" alt=""></a>
            <div class="modalTexte">
                <h2 class="modalTitre">Votre événement</h2>
                <hr class="modalTrait">
                <p>Une réservation a déjà été faite. Vous souhaitez :</p>
                <p>Effectuer une <a href=""> annulation</a><br>
                Consulter <a href=""> l'historique</a></p>
            </div>
            <div class="btnEventGroup">
                <a href="#modalPanier" id="e_btnEventReservation"class="modal_btn btn_modal_1_trait">Ajouter une autre réservation</a>
                <a href="" id="e_btnEventQuitter"class="modal_btn btn_modal_2_fond">Fermer</a>
            </div>
        </div>
    </div>

    <nav class="navbar">

        <!-- BARRE DE NAVIGATION - début -->
        <div class="nav_logo">
          <a href=""><img id="scrollLogoClair" class="logo logo_vert_clair" src="./asset/img/img_logo/logo_vert_clair.svg" alt="logo"></a>
          <a href=""><img id="scrollLogoFonce" class="logo logo_vert_fonce" src="./asset/img/img_logo/logo_vert_fonce.svg" alt=""></a>
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
    
    <main class="site siteEvent">
        <!-- SECTION GAUCHE - IMAGE FIXE -->
        <section class="gauche gaucheEvent">
            <div class="gaucheImg gaucheImgEvent" style="background-image: url(./asset/img/event_bocal.jpg);"></div>
        </section>

        <!-- SECTION DROITE - FICHE PRODUIT -->
        <section class="droite">
            <div class="containerDroit containerDroitEvent">

                <!-- Etat de l'événement : réservé, complet, annuler, terminé -->
                <div class="bgEtat">
                    <div class="borderEtat">
                        <p>
                            <span class="etat">Réservation confirmée - </span><span class="msgEtat">Pour toutes modifications merci de nous </span><a href="" class="etatContacter">contacter</a>
                        </p>
                    </div>
                </div>
                <!-- Etat complet -->
                <!-- <div id="bgEtat_complet" class="bgEtat">
                    <div class="borderEtat">
                        <p>
                            <span class="etat">événement complet - </span><span class="msgEtat">Pour toutes modifications merci de nous </span><a href="" class="etatContacter">contacter</a>
                        </p>
                    </div>
                </div> -->
                <!-- Etat annulé -->
                <!-- <div id="bgEtat_annule" class="bgEtat">
                    <div class="borderEtat">
                        <p>
                            <span class="etat">événement complet - </span><span class="msgEtat">Pour toutes modifications merci de nous </span><a href="" class="etatContacter">contacter</a>
                        </p>
                    </div>
                </div> -->
                <!-- Etat terminé -->
                <!-- <div id="bgEtat_termine" class="bgEtat">
                    <div class="borderEtat">
                        <p>
                            <span class="etat">événement complet - </span><span class="msgEtat">Pour toutes modifications merci de nous </span><a href="" class="etatContacter">contacter</a>
                        </p>
                    </div>
                </div> -->
                <h1>Salon de l'automobile</h1>
                <h2>catégorie</h2>
                <div class="imgEvent">
                    <a href=""><img src="./asset/img/event_bocal.jpg" alt="" title="agrandir l'image"></a>
                </div>
                <h4>Date</h4>
                <p class="dateEvent">29-05-2024</p>
                <h4>Résumé</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip. 
                </p>

                <!-- INFO - DETAIL NBR DE PLACE -->
                <!-- <p class="statePlace">
                    Nombre de place disponible : <span>23</span><br>
                    Nombre de place totale : 40 <br>
                    Nombre de place réservée : 15 <br>
                </p> -->
                <div class="placeDisponible">
                    Place disponible : <span>23</span><br>
                </div>

                <!-- CHOIX - NBR DE PLACE -->
                <div class="place_prix">
                    <!-- bouton SELECT -->
                    <div class="placeSelect">
                        <div class='ui-dropdown'>
                            <select>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                        </div>
                        <div class="place">
                            <p>Nombre de place</p>
                        </div>  
                    </div>
                    <!-- PRIX -->
                    <div class="prix">
                        <p>Prix : 75€ / <span>unité</span></p>
                    </div>
                </div>

                <!-- BOUTON DE VALIDATION RESERVATION -->
                <div class="btn_flex">
                    <!-- <button type="button" class="reserve  btnEvent btnEvent-3">Réserver</button> -->
                    <button onclick="window.location.href='#modalEvent'" type="button" class="btnEvent btnEvent-3">Ajouter une réservation</button>
                </div>
                <h3>Vous pourriez aimer . . .</h3>
                <div class="trioCategory">
                    <article class="categoryUn">
                        <figure class="fig_1">
                            <a href="">
                                <div class="imgCategory"><img src="./asset/img/event_poisson.jpg" alt=""></div>
                            </a>
                        </figure>
                        <div class="titreCategory">
                            Asseyez-vous à la grande table
                        </div>
                        <div class="sousTitreCategory">
                            DIVERTISSEMENT
                        </div>
                    </article>
                    <article class="categoryDeux">
                        <figure class="fig_1">
                            <a href="">
                                <div class="imgCategory"><img src="./asset/img/event_bocal.jpg" alt=""></div>
                            </a>
                        </figure>
                        <div class="titreCategory">
                            Calamar gourmand
                        </div>
                        <div class="sousTitreCategory">
                            DIVERTISSEMENT
                        </div>
                    </article>
                    <article class="categoryTrois">
                        <figure class="fig_1">
                            <a href="">
                                <div class="imgCategory"><img src="./asset/img/event_salon_automobile.jpg" alt=""></div>
                            </a>
                        </figure>
                        <div class="titreCategory">
                            Salon de l'automobile
                        </div>
                        <div class="sousTitreCategory">
                            DIVERTISSEMENT
                        </div>
                    </article>
                    
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