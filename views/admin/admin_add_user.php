<?php
include_once "../inc/header_admin.php";
include_once "../inc/nav_admin_bicolor.php";
?>

    

    <!-- ------------------------ PAGE FORMULAIRE USER ------------------------ -->
    <main class="site siteEvent">
        <!-- SECTION GAUCHE - IMAGE FIXE -->
        <section class="gauche gaucheEvent">
            <div class="gaucheImg gaucheImgEvent" style="background-image: url(../asset/img/event_horizontal_voiture.jpg);"></div>
        </section>

        <!-- SECTION DROITE - FICHE PRODUIT -->
        <section class="droite">
            <div id="containerUserForm" class="containerGabaritForm containerDroit containerDroitEvent">

                <h1>Ajouter<br>un utilisateur</h1>

                <!-- FORMULAIRE - AJOUTER UN USER -->
                <form id="userForm" class="gabaritForm" action="" method="post">
                    
                    <div class="gabarit_form">
                        <input type="text"  placeholder="nom" name="nom" >
                    </div>
                    
                    <div class="gabarit_form">
                        <input type="text"  placeholder="prenom" name="prenom" >
                    </div>
                    
                    <div class="gabarit_form">
                        <input type="text"  placeholder="pseudo" name="pseudo" >
                    </div>
                    
                    <div class="gabarit_form">
                        <input type="email"  placeholder="email" name="email" >
                    </div>
                    
                    <div class="gabarit_form">
                        <input type="password"  placeholder="mot de passe" name="mdp" >
                    </div>

                    <div class="gabarit_form">
                        <label id="img_profil">Télécharger une photo de profil :</label>
                        <input type="file" class="form-control" name="img_profil" class="file">
                    </div>

                    <!-- BOUTON DE VALIDATION RESERVATION -->
                    <div class="btn_flex">
                        <!-- <button type="button" class="reserve  btnEvent btnEvent-3">Réserver</button> -->
                        <button onclick="window.location.href='#modalEvent'" type="button" class="btnEvent btnEvent-3">Ajouter un utilisateur</button>
                    </div>
                </form>

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