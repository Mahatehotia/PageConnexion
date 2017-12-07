<div class="container">
    <div class="row">
        <div class="col-sm-10 col-md-10 col-sm-10">
            Récapitulatifs des utilisateurs
        </div>
        <div class="col-sm-2 col-md-2 col-sm-2">
            <a href="<?php echo BASE_URL?>index.php/User/creerUser"><i class="fa fa-user-plus" aria-hidden="true"></i> Ajouter un utilisateur </a>
        </div>
        <table>

            <thead>
            <tr><th>id</th><th>prenom</th><th>nom</th><th>pseudo</th><th>motdepasse</th><th>adresseemail</th><th>date</th>
                <?php //if(isset($_SESSION['droit']) and $_SESSION['droit']=='DROITadmin'): ?>
                <th>opération</th>
                <?php //endif;?>
            </tr>
            </thead>
            <tbody>
            <?php if(isset($data[0])): ?>
                <?php foreach ($data as $value): ?>
                    <tr><td>
                            <?php echo($value['idUser']); ?>
                        </td><td>
                            <?= $value['prenomUser']; ?>
                        </td><td>
                            <?= $value['nomUser']; ?>
                        </td><td>
                        </td><td>
                            <?= $value['pseudo']; ?>
                        </td><td>
                        </td><td>
                            <?= $value['motDePasse']; ?>
                        </td><td>
                        </td><td>
                            <?= $value['adresseEmail']; ?>
                        </td><td>
                        </td><td>
                            <?= $value['dateInscription']; ?>
                        </td><td>
                        </td>
                        <?php //if(isset($_SESSION['droit']) and $_SESSION['droit']=='DROITadmin'): ?>
                        <td>
                            <a href="<?php echo BASE_URL?>index.php/User/modifierUser/<?= $value['id']; ?>">modifier</a>
                            <a href="<?php echo BASE_URL?>index.php/User/supprimerUser/<?= $value['id']; ?>">supprimer</a>
                        </td>
                        <?php //endif;?>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            <tbody>
        </table>
    </div>
</div>

