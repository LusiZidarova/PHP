<h1>Login Form</h1>

<?php /** @var array $errors  */ ?>
<?php /** @var \App\Data\UserDTO $data */ ?>

<?php if($data != ""): ?>
    <p style="color: green">
        Congratulation, <?= $data ?> Login our platform!
    </p>
<?php endif; ?>


<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>


<form method="post">
    <label>
        Username: <input type="text" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : null  ?>"/> <br/>
    </label>
    <label>
        Password: <input type="text" name="password" value="" /> <br/>
    </label>
    <label>
        <input type="submit" name="login" value="Login"/>
    </label>
</form>

