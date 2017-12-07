<div class="col-md-6 col-md-offset-3">
    <div class="well well-sm">
        <form class="form-horizontal" method="post" action="/function/connexion.php">
            <fieldset>
                <legend class="text-center">Connexion</legend>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-4 col-md-4 col-sm-4 control-label" for="login">Login</label>
                    <div class="col-md-4">
                        <input id="login" name="login" type="text" class="form-control input-md" required="">

                    </div>
                </div>


                <!-- Password input-->
                <div class="form-group">
                    <label class="col-sm-4 col-md-4 col-sm-4 control-label" for="mdp">Mot de passe</label>
                    <div class="col-md-4">
                        <input id="mdp" name="mdp" type="password" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Button -->
                <!-- Form actions -->
                <div class="form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" name='btnConnexion' class="btn btn-primary btn-lg">Connexion</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
