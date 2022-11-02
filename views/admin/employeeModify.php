<main>
    <div class="formContent">
        <div class="formContentTitle flexCenterCenter">
            <h3>Modifier un employé</h3>
        </div>
        <form method="POST">
            <div class="formInput flexCenterCenterColumn">
                <div class="formName flexCenterBetween">
                    <div class="flexCenterCenterColumn">
                        <input type="text" placeholder="Nom*" name="lastname" value="<?= $lastname ?? '' ?>" pattern="<?= '/'.REGEX_NAME.'/' ?>" required>
                        <p class="errorMessage"><?= (array_key_exists('lastname', $errorsRegistration)) ? $errorsRegistration['lastname'] : '' ?></p>
                    </div>
                    <div class="flexCenterColumn">
                        <input type="text" placeholder="Prénom*" name="firstname" value="<?= $firstname ?? '' ?>" pattern="<?= '/'.REGEX_NAME.'/' ?>" required>
                        <p class="errorMessage"><?= (array_key_exists('firstname', $errorsRegistration)) ? $errorsRegistration['firstname'] : '' ?></p>
                    </div>
                </div>
                <input type="mail" placeholder="example@app.com" name="mail" value="<?= $mail ?? '' ?>" pattern="<?= '/'.REGEX_MAIL.'/' ?>">
                <p class="errorMessage"><?= (array_key_exists('mail', $errorsRegistration)) ? $errorsRegistration['mail'] : '' ?></p>
                <input type="tel" placeholder="Téléphone*" name="phone" value="<?= $phone ?? '' ?>" pattern="<?= '/'.REGEX_PHONE.'/' ?>" required>
                <p class="errorMessage"><?= (array_key_exists('phone', $errorsRegistration)) ? $errorsRegistration['phone'] : '' ?></p>
                <input type="text" placeholder="Salaire*" name="income" value="<?= $income ?? '' ?>" pattern="<?= '/'.REGEX_INCOME.'/' ?>" required>
                <p class="errorMessage"><?= (array_key_exists('income', $errorsRegistration)) ? $errorsRegistration['income'] : '' ?></p>
                <input type="text" placeholder="Adresse" name="address" value="<?= $address ?? '' ?>">
                <p class="errorMessage"><?= (array_key_exists('address', $errorsRegistration)) ? $errorsRegistration['siret'] : '' ?></p>
            </div>
        
            <!-- Button to submit form -->
        
            <div class="registerButton flexCenterCenter">
                <button type="submit">Modifier</button>
            </div>
        </form>
    </div>
</main>

