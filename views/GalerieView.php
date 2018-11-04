<h1>bonjour je suis la vue de la galerie</h1>

<hr></hr>

<table>
    <?php foreach( $Galerie as $val ): ?>
        <tr>
            <td>
                <img width="100px" height="100px" src="<?= "galerie_img/{$val->name}"; ?>">
                <p>faire les modules commentaires</p>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
