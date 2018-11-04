
<h2>Inscription</h2>

<div>
    <p>Votre prenom</p>
<?= $form_inscription->input( 'text', 'name' ); ?>
</div>
<div>
    <p>Votre email</p>
<?= $form_inscription->input( 'email', 'email' ); ?>
</div>
<div>
    <p>Mot de passe</p>
<?= $form_inscription->input( 'passwd', 'passwd' ); ?>
</div>
<div>
    <p>Confirmer votre mdp</p>
<?= $form_inscription->input( 'passwd', 'confirm_passwd' ); ?>
</div>


<?php
$form_inscription->input('submit', 'submit', array('value' => 'Valider'));
echo $form_inscription->DisplayHTMLForm();