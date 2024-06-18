<?php
$errors = $_SESSION['form_errors'] ?? [];
unset($_SESSION['form_errors']);
?>

<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="form">
    <div class="name">
        <label for="name">Nom</label>
        <input id="name" class="name" type="text" placeholder="Thomas Moreau" required>
        <?php if (!empty($errors)): ?>
            <p class="form-error"><?php echo $errors['nom'] ?? ''; ?></p>
        <?php endif; ?>
    </div>
    <div class="email">
        <label for="email">Adresse e-mail</label>
        <input id="email" class="email" type="text" placeholder="contact@sefasbl.com" required>
        <?php if (!empty($errors)): ?>
            <p class="form-error"><?php echo $errors['email'] ?? ''; ?></p>
        <?php endif; ?>
    </div>
    <div class="mobile">
        <label for="mobile">Numéro de téléphone</label>
        <input id="mobile" class="mobile" type="text" placeholder="085 / 21 57 52" required>
        <?php if (!empty($errors)): ?>
            <p class="form-error"><?php echo $errors['mobile'] ?? ''; ?></p>
        <?php endif; ?>
    </div>
    <div class="sujet">
        <label for="sujet">Sujet</label>
        <select name="sujet" id="sujet" required>
            <option value="default" disabled selected>Sélectionnez le sujet</option>
            <option value="Don Monétaire">Don Monétaire</option>
            <option value="Don matériel">Don matériel</option>
            <option value="Leg">Leg</option>
            <option value="Devenir bénévole">Devenir bénévole</option>
            <option value="Autre">Autre</option>
        </select>
        <?php if (!empty($errors)): ?>
            <p class="form-error"><?php echo $errors['sujet'] ?? ''; ?></p>
        <?php endif; ?>
    </div>
    <div class="message">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="5" placeholder="J'aimerai vous venir en aide..."
                  required></textarea>
        <?php if (!empty($errors)): ?>
            <p class="form-error"><?php echo $errors['message'] ?? ''; ?></p>
        <?php endif; ?>
    </div>
    <div class="submit">
        <label for="submit"></label>
        <input id="submit" class="button" type="submit">
    </div>
</form>