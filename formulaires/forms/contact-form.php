<?php

require __DIR__ . '/../helpers/forms-utils.php';

if(isset($_POST['submit'])) {
    // Getting secured form data.
    $username = getSecuredStringPostData('username');
    $message = getSecuredStringPostData('message') ?>

    <table>
        <tr>
            <td>Username</td>
            <td>Message</td>
        </tr>
        <tr>
            <td><?= $username ?></td>
            <td><?= $message ?></td>
        </tr>
    </table>

    <a href="/formulaires/contact.php" style="
        background: #c9c9c9;
        border-radius: 8px;
        padding: 5px;
        color: #f6f6f6;
        font-weight: bold;
        margin-top: 1rem;
    ">
        Vers le formulaire de contact
    </a>
    <?php
}
else {
    header('Location: /contact.php');
}