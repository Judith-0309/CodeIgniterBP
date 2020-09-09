<html>
    <!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="stylesheet" href="{$url_base}public/css/particulier.css">
 
   
        <title>CLIENT PARTICULIER</title>

    </head>

        <body>
            <nav>
                <img src="{$url_base}public/image/bplogo.png" alt="logo BP" class="img">  
        
                    <h1>BANQUE DU PEUPLE</h1>

                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href="">Liste client</a></li>
                            <li><a href="">Gestion Compte</a></li>
                            <li><a href="">Ajout Client</a></li>
                            <li><a href="">Virement</a></li>
                        </ul>
            </nav>
                 {if isset($ok)}
                    {if $ok != 0}
                       <div class="alert alert-success">Données ajoutées!</div>
                    {else}
                        <div class="alert alert-danger">Erreur!</div>
                    {/if}
                 {/if}

                <form action='{$url_base}Clientparticulier/add' method="POST"  id="myform">
                    <fieldset class="container"><br><br />
                        <legend id="open">Créer Client Particulier</legend>

                            <label for="nom">Nom*</label>
                            <input id="nom" name="nom" type="text" />

                            <label for="prenom">Prenom*</label>
                            <input id="prenom" name="prenom" type="text" /><br><br />

                            <label for="Genre">Genre*</label>
                                <select name="Genre" id="Genre">
                                    <option value="Selectionnez">Selectionnez*</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>

                            <label for="Email">Email</label>
                            <input id="Email" name="Email" type="email"/><br><br />

                            <label for="Adresse">Adresse*</label>
                            <input id="Adresse" name="Adresse" type="text" />

                            <label for="Telephone">Telephone*</label>
                            <input id="Telephone" name="telephone" type="tel" /><br><br />

                            <label for="Profession">Profession*</label>
                            <input id="Profession" name="Profession" type="text"/>


                            <label for="Salarie">Salarié*</label>
                                <select name="salarie" id="salarie">
                                    <option value="Selectionnez">Selectionnez</option>
                                    <option value="non" id="non" name="non">NON</option>
                                    <option value="oui" id="oui" name="oui">OUI</option>
                                </select><br><br />

                       <div class="mask" id="mask">
                            <label for="Salaire actuel">Salaire actuel*</label>
                            <input id="Salaire actuel" name="salaire_actuel" type="double"/><br><br/>

                            <label for="Nom_employeur">Nom employeur*</label>
                            <input id="Nom_employeur" name="nom_employeur" type="text"/>

                            <label for="cni">CNI*</label>
                            <input id="cni" name="cni" type="double"/><br><br />
                        </div>

                    </fieldset>


                        <div class="button">
                            <input type="submit" name="envoyer" value="ENVOYER" onclick="return validate()" />
                            <input type="reset" value="ANNULER"/>

                        </div>
                </form>
                    <script src="{$url_base}public/js/mainP.js"></script>

    </body>
</html>