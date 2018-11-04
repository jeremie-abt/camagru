
    <h2>Connexion</h2>

    <div>
        <p>Votre prenom || email</p>
        <?= $form_connection->input( 'text', 'identifiant' ); ?>
    </div>
    <div>
        <p>Mot de passe</p>
        <?= $form_connection->input( 'passwd', 'passwd' ); ?>
    </div>

<?php
$form_connection->input('submit', 'submit', array('value' => 'Valider'));
echo $form_connection->DisplayHTMLForm();