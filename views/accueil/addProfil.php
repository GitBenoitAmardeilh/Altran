<html>
<head>

    <?php echo '<link rel="stylesheet" href="'.ROOT.'styles/css/addProfil.css"/>'; ?>

    <?php echo '<script src="'.ROOT.'lib/jquery-3.3.1.min.js"></script>'; ?>

    <meta name="viewport" content="width=device-width"/>
    <meta charset="UTF-8"/>

</head>

<body>

<section>

    <div id="divContainerAddProfil">

        <h2>Editer le profil</h2>

        <nav>

            <ul>

                <li><a href="#" id="generale" class="classButton">Informations Générale</a></li>
                <li><a href="#" id="coordonnees" class="classButton">Coordonnées</a></li>
                <li><a href="#" id="competences" class="classButton">Compétences</a></li>

            </ul>

        </nav>

        <p><a href="../accueil" id="aLinkSaveAndQuit">QUITTER</a></p>

    </div>



    <div id="divFormCompetences">

        <form id="mainForm" method="POST" action="addProfil">

            <div id="divGenerale" class="classCompetence">

                <h3>Informations Générale</h3>

                <div>

                    <input class="inputTypeText" type="text" name="nom" placeholder="Nom"/><br/><br/>
                    <input class="inputTypeText" type="text" name="prenom" placeholder="Prénom"/><br/><br/>
                    <input class="inputTypeText" type="text" name="age" placeholder="Age"/>

                </div>

            </div>

            <div id="divCoordonnees" class="classCompetence">

                <h3>Coordonnées</h3>

                <div>

                    <input class="inputTypeText" type="text" name="postal" placeholder="Code postal"/><br/><br/>
                    <input class="inputTypeText" type="text" name="commune" placeholder="Commune"/><br/><br/>
                    <input class="inputTypeText" type="text" name="complement" placeholder="Complément d'adresse"/><br/><br/>
                    <input class="inputTypeText" type="text" name="telephone" placeholder="Téléphone"/><br/><br/>
                    <input class="inputTypeText" type="text" name="mail" placeholder="Mail"/><br/><br/>

                </div>

            </div>

            <div id="divFormations" class="classCompetence">

                <h3>Formations</h3>

            </div>

            <div id="divCompetences" class="classCompetence">

                <h3>Competences</h3>

                <div id="divListCompetences">

                    <input type="hidden" id="inputHidden" name="inputHidden" value="0"/>
                    <p><a id="aAddComp" href="#"><strong>+</strong>Ajouter une compétence</a></p>

                </div>

            </div>

            <input type="submit" id="button"/>

        </form>

    </div>

</section>

<?php echo '<script src="'.ROOT.'javascript/script.js"></script>'; ?>




</body>

</html>