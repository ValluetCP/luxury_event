<?php
include_once "../inc/header_admin.php";
include_once "../inc/nav_admin_bicolor.php";
?>

    <main class="site siteEvent">
        <!-- SECTION GAUCHE - IMAGE FIXE -->
        <section class="gauche gaucheEvent">
            <div class="gaucheImg gaucheImgEvent" style="background-image: url(../asset/img/event_horizontal_thai.jpg);"></div>
        </section>

        <!-- SECTION DROITE - FICHE PRODUIT -->
        <section class="droite">
            <div id="containerCategory" class="containerGabaritForm containerDroit containerDroitEvent">

                <h1>Ajouter<br>une catégorie</h1>

                <!-- FORMULAIRE - AJOUTER UNE CATEGORIE -->
                <form id="categorieForm" class="gabaritForm" action="" method="post">
                    <div id="categorie_form" class="categorie_form gabarit_form">
                        <!-- <label for="">nom de la nouvelle catégorie</label><br> -->
                        <input type="text" placeholder="nom de la nouvelle catégorie">
                    </div>

                    <!-- BOUTON DE VALIDATION RESERVATION -->
                    <div class="btn_flex">
                        <!-- <button type="button" class="reserve  btnEvent btnEvent-3">Réserver</button> -->
                        <button onclick="window.location.href='#modalEvent'" type="button" class="btnEvent btnEvent-3">Ajouter</button>
                    </div>
                </form>

                <!-- <h3>Les événements associés</h3>
                <div class="trioCategory">
                    <article class="categoryUn">
                        <figure class="fig_1">
                            <a href="">
                                <div class="imgCategory"><img src="../asset/img/event_poisson.jpg" alt=""></div>
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
                                <div class="imgCategory"><img src="../asset/img/event_bocal.jpg" alt=""></div>
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
                                <div class="imgCategory"><img src="../asset/img/event_salon_automobile.jpg" alt=""></div>
                            </a>
                        </figure>
                        <div class="titreCategory">
                            Salon de l'automobile
                        </div>
                        <div class="sousTitreCategory">
                            DIVERTISSEMENT
                        </div>
                    </article>

                </div> -->
            </div>

        </section>
    </main>
    <footer></footer>
    <script src="./js/nav_scroll2.js"></script>
    <script>
        function showList(listClassName) {
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