<html>
<head>

    <?php echo '<link rel="stylesheet" href="'.ROOT.'styles/css/compte.css"/>'; ?>

    <meta name="viewport" content="width=device-width"/>
    <meta charset="UTF-8"/>

</head>

<body>

<section>

    <div id="divListUsers">

        <aside id="asideAddProfil">

            <p><a href="accueil/profil">Ajouter un profil</a></p>

        </aside>

        <aside id="asideBodyProfil">

            <?php


                $i = 0;

                while( $data = $infos->fetch()){ ?>

                    <div class="divContainerProfil">

                        <div id="divTitle">

                            <div id="divNameProfil">

                                <?php echo '<p id="nom"><a href="accueil/displayProfil/'.$data['id'].'">'.strtoupper($data['nom']).'</a></p>'; ?>
                                <?php echo '<p id="prenom">'.$data['prenom'].'</p>'; ?>
                                <?php echo '<p id="age">'.$data['age'].' ans</p>'; ?>

                            </div>

                            <div id="divDelProfil">

                                <?php echo '<a href="accueil/deleteProfil/'.$data['id'].'">Supprimer</a>'; ?>

                            </div>

                        </div>

                    </div>

                    <?php

                    $i++;

                }

            ?>

        </aside>

    </div>

</section>

</body>

</html>