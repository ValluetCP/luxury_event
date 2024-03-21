<?php
include_once "../inc/header_admin.php";
include_once "../inc/nav_admin.php";
?>


<main id="siteListUser" class="siteList">

    <!-- ------------------------------- HAUT -------------------------------- -->
    <!-- SECTION DU HAUT - IMAGE FIXE -->
    <section class="haut">

        <!-- image -->
        <div id="ImgHauteListUser" class="ImgHaute" style="background-image: url(../asset/img/event_horizontal_voiture.jpg);">
        </div>

        <!-- texte -->
        <div class="titreListEvent">
            <h1>liste des utilisateurs</h1>
            <h2>ajouter, modifier, désactiver, supprimer</h2>

            <!-- <p>
                Plongez dans un monde d'expériences exclusives et inoubliables où chaque moment est une découverte. Assistez à des concerts privés, privatisez des lieux insolites et d'exception, et vivez des compétitions de haut vol en compagnie de vos athlètes préférés. Transformez-vous en star internationale ou en pilote de Formule 1 le temps d'une journée. Laissez-vous guider par des chefs étoilés qui dévoileront leurs secrets culinaires lors d'ateliers intimes. Savourez des brunchs aux meilleures tables et émerveillez-vous devant des shows culinaires spectaculaires. Offrez-vous des instants uniques où le luxe et l'exclusivité se marient pour créer des souvenirs inoubliables.
            </p> -->

            <!-- catégorie : divertissement, atelier, gastronomie, représentation, loisir -->
        </div>
    </section>


    <!-- ------------------------------- BAS -------------------------------- -->
    <!-- SECTION DU BAS - LISTE DES EVENTS -->
    <section class="bas">
        
        <!-- CONTAINER GLOBAL - liste des events -->
        <div id="container_listUser" class="container_list">

            <!-- ZONE FILTRE -->
            <div class="container_btnFiltre_listEvent">

                <!-- btn Prochainement - btn historique -->
                <div class="btnProchainHistorique">
                    <a href="" id="reinitialiser_resultat" class="prochainement_listEvent">clients</a>
                    <a href="" id="prochain_event" class="historique_listEvent">admins</a>
                </div>
                
                <!-- FILTRE -->
                <div class="filtreCategory">
                    <button type="submit" class="lb_filtre">Filtrer</button>
                    <div class="lb_selectFiltre">
                      <select name="lb_categoryFiltre" id="lb_categoryFiltre">
                        <option value="1">Toutes les catégories</option>
                        <option value="2">Divertissement</option>
                        <option value="3">Atelier</option>
                      </select>
                    </div>
                </div>
            </div>

            <!-- Div vide pour afficher le contenu -->
            <div id="resultat" class="overflow_listEvent"> 

                <!-- TABLEAU - LISTE DES EVENTS -->
                <table class="tableau_adminListEvent">
                    <thead class="thead_adminListEvent">
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>email</th>
                            <th class="table_pseudo">pseudo</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_adminListUser" class="tbody_adminList">
    
                        <!-- MODULE 1 -->
                        <tr class="table_module">
                            <td>
                                <div class="table_img">
                                    <img src="../asset/img/user_lea.jpg" alt="">
                                </div>
                            </td>
                            <td class="table_titre table_nom">davidson</td>
                            <td class="table_category table_penom">léa</td>
                            <td class="table_email">lea@mail.com</td>
                            <td class="table_pseudo">lea1</td>
                            <td class="table_action"><a href="">modifier</a></td>
                            <td class="table_action"><a href="">supprimer</a></td>
                            <!-- bouton -->
                            <td>
                                <p class="table_btn">
                                    <a href="./info_user.php" id="table_btnTxt">Consulter</a>
                                </p>
                            </td>
                        </tr>
    
                        <!-- MODULE 2 -->
                        <tr class="table_module">
                            <td>
                                <div class="table_img">
                                    <img src="../asset/img/user_ben.jpg" alt="">
                                </div>
                            </td>
                            <td class="table_titre table_nom">afleck</td>
                            <td class="table_category table_penom">ben</td>
                            <td class="table_email">ben@mail.com</td>
                            <td class="table_pseudo">ben1</td>
                            <td class="table_action"><a href="">modifier</a></td>
                            <td class="table_action"><a href="">supprimer</a></td>
                            <!-- bouton -->
                            <td>
                                <p class="table_btn">
                                    <a href="" id="table_btnTxt">Consulter</a>
                                </p>
                            </td>
                        </tr>
    
                        <!-- MODULE 3 -->
                        <tr class="table_module">
                            <td>
                                <div class="table_img">
                                    <img src="../asset/img/user_klara.jpg" alt="">
                                </div>
                            </td>
                            <td class="table_titre table_nom">martins</td>
                            <td class="table_category table_penom">klara</td>
                            <td class="table_email">klara@mail.com</td>
                            <td class="table_pseudo">klara1</td>
                            <td class="table_action"><a href="">modifier</a></td>
                            <td class="table_action"><a href="">supprimer</a></td>
                            <!-- bouton -->
                            <td>
                                <p class="table_btn">
                                    <a href="../info_user.php" id="table_btnTxt">Consulter</a>
                                </p>
                            </td>
                        </tr>
    
                        <!-- MODULE 4 -->
                        <tr class="table_module">
                            <td>
                                <div class="table_img">
                                    <img src="../asset/img/user_emma.jpg" alt="">
                                </div>
                            </td>
                            <td class="table_titre table_nom">lopez</td>
                            <td class="table_category table_penom">emma</td>
                            <td class="table_email">emma@mail.com</td>
                            <td class="table_pseudo">emma1</td>
                            <td class="table_action"><a href="">modifier</a></td>
                            <td class="table_action"><a href="">supprimer</a></td>
                            <!-- bouton -->
                            <td>
                                <p class="table_btn">
                                    <a href="" id="table_btnTxt">Consulter</a>
                                </p>
                            </td>
                        </tr>
    
        
                    </tbody>
                </table>
            </div>

        </div>

        <!-- --------- BTN - AJOUTER UN EVENEMENT ---------- -->
        <div class="container_btnAjouter">
            
            <a href="./admin_add_user.php" class="btn_ajouter"><p><i class="fa-light fa-plus"></i>Ajouter un utilisateur</p></a>
        </div>


    </section>
</main>


<footer></footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="../asset/js/nav_scroll2.js"></script>

    <script>

        // CODE JS : SCROLLBAR
        function showList(listClassName){
            var allLists = document.querySelectorAll('.nav2_container div:not(.nav2_menu,.deconnexion,.profil_nav,.img_profil_nav)');
            allLists.forEach(function(list) {
                list.classList.add('hidden');
            });
    
            // Afficher la liste correspondante
            var selectedList = document.querySelector('.' + listClassName);
            selectedList.classList.remove('hidden');
        }



        // CODE JS : BTN AJAX (PROCHAINEMENT & HISTORIQUE)

        // Stocker le contenu initial de la div resultat
        var contenuInitial = $('#resultat').html();

        // Dès que la page sera complètement chargée, que le DOM (Document Objet Modèle) sera entièrement généré
        $(document).ready(function() {

            // a) utiliser la fonction on('change') de jquery afin de sélectionner un nom dans la liste déroulante : $('#personne').on('change', function()
            $('#prochain_event').on('click', function(event) {
                event.preventDefault()

                // c) Sérialiser le contenu des champs du formulaire (dans cet exemple il y a un seul champ), à l'aide de la fonction serialize() de jQuery

                // d) utiliser la méthode ajax de jquery pour l'affichage de la réponse
                $.ajax({
                    url: "../traitement/traitement_ajax4.php", // le fichier cible, celui qui fera le traitement (projet : mettre le chemin que l'on aurait mis dans la balise <a>)
                    type: "POST", // la méthode utilisée (projet : ne rien mettre, par défaut on sera sur la method GET)
                    // les paramètres à fournir ex : ...id=4&nom=anonyme...(projet : on ne met rien) 
                    dataType: 'json', // le format des données attendues en tableau JSON pour être interprété et éxécuté par AJAX (projet : 'json') 
                    success: function(response) {
                        // la fonction qui doit s'exécuter lors de la réussite de la communication ajax 
                        console.log(response);
                        $('#resultat').html(response.contenu);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });
            });

            // Réinitialiser la div resultat à son contenu initial
            $('#reinitialiser_resultat').on('click', function(event) {
                event.preventDefault();
                $('#resultat').html(contenuInitial);
            });


        });
    </script>
</body>
</html>