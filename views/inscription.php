<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 05/12/17
 * Time: 13:53
 */
?>
<div class="col-md-6 col-md-offset-3">
    <div class="well well-sm">
        <form class="form-horizontal" action="<?php echo BASE_URL; ?>index.php/User/validFormCreerUser" method="post">
            <fieldset>
                <legend class="text-center">Inscription</legend>

                <!-- Nom input-->
                <div class="form-group">
                    <label class="col-sm-4 col-md-4 col-sm-4 control-label" for="nomUser">Nom</label>
                    <div class="col-md-4">
                        <input id="nom" name="nomUser" type="text" class="form-control input-md" required>

                    </div>
                </div>

                <!-- Prénom input-->
                <div class="form-group">
                    <label class="col-sm-4 col-md-4 col-sm-4 control-label" for="prenomUser">Prénom</label>
                    <div class="col-md-4">
                        <input id="prenomUser" name="prenomUser" type="text" class="form-control input-md" required>

                    </div>
                </div>

                <!-- pseudo input-->
                <div class="form-group">
                    <label class="col-sm-4 col-md-4 col-sm-4 control-label" for="pseudo">Pseudo</label>
                    <div class="col-md-4">
                        <input id="pseudo" name="pseudo" type="text" class="form-control input-md" required>

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-sm-4 col-md-4 col-sm-4 control-label" for="motDePasse">Mot de passe</label>
                    <div class="col-md-4">
                        <input id="motDePasse" name="motDePasse" type="password" class="form-control input-md" required>
                    </div>
                </div>

                <!-- Password 2 input-->
                <div class="form-group">
                    <label class="col-sm-4 col-md-4 col-sm-4 control-label" for="motDePasse2">Confirmation</label>
                    <div class="col-md-4">
                        <input id="motDePasse2" name="motDePasse2" type="password" class="form-control input-md" required>
                    </div>
                </div>

                <!-- Email input-->
                <div class="form-group">
                    <label class="col-sm-4 col-md-4 col-sm-4 control-label" for="adresseEmail">Votre email</label>
                    <div class="col-md-4">
                        <input id="adresseEmail" name="adresseEmail" type="email" class="form-control input-md" required>
                    </div>
                </div>

                <!-- sexe input-->
                <div class="form-group">
                    <label class="col-sm-4 col-md-4 col-sm-4 control-label" for="sexe">Votre sexe</label>
                    <div class="col-md-8">
                        <label class="radio-inline"><input type="radio" id="homme" name="sexe" value="homme" checked required>Homme</label>
                        <label class="radio-inline"><input type="radio" id="femme" name="sexe"  value="femme">Femme</label>
                        <label class="radio-inline"><input type="radio" id="autre" name="sexe"  value="autre">Autre</label>
                    </div>
                </div>

                <!-- Form actions -->
                <div class="form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" name='creerUser' class="btn btn-primary btn-lg">Inscription</button>
                        <button type="reset" name='annulerCreerUser' class="btn btn-danger btn-lg">Annuler</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>