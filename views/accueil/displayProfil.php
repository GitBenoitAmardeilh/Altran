<html>
<head>

    <?php echo '<link rel="stylesheet" href="'.ROOT.'styles/css/displayProfil.css"/>'; ?>

    <meta name="viewport" content="width=device-width"/>
    <meta charset="UTF-8"/>

</head>

<body>

<section>

    <article>

        <h1>CONSULTER LES COORDONNEES</h1><br/>

        <?php $data = $infos->fetch() ?>

        <p id="pTitle">Etat civil</p>

        <div id="divTop">

            <ul>

                <li>
                    <span id="label"><p>Nom</p></span>
                    <span id="value"><p><strong><?php echo $data['nom']; ?></strong></p></span>

                </li>

                <li>
                    <span id="label"><p>Prenom</p></span>
                    <span id="value"><p><strong><?php echo $data['prenom']; ?></strong></p></span>

                </li>

                <li>
                    <span id="label"><p>Age</p></span>
                    <span id="value"><p><strong><?php echo $data['age']; ?></strong></p></span>

                </li>

                <li>
                    <span id="label"><p>E-mail</p></span>
                    <span id="value"><p><strong><?php echo $data['mail']; ?></strong></p></span>

                </li>

            </ul>

        </div>


        <p id="pTitle">Votre adresse</p>

        <div id="divTop">

            <ul>

                <li>
                    <span id="label"><p>Code postal</p></span>
                    <span id="value"><p><strong><?php echo $data['postal']; ?></strong></p></span>

                </li>

                <li>
                    <span id="label"><p>Adresse</p></span>
                    <span id="value"><p><strong><?php echo $data['complement']; ?></strong></p></span>

                </li>

                <li>
                    <span id="label"><p>Ville</p></span>
                    <span id="value"><p><strong><?php echo $data['commune']; ?></strong></p></span>

                </li>

            </ul>

        </div>

        <p id="pTitle">Compétences</p>

        <div id="divTop">



        </div>


        <?php echo '<p id="pLink"><a href="'.ROOT.'accueil" id="aLinkSaveAndQuit">QUITTER</a></p>'; ?>

    </article>

</section>

</body>

</html>