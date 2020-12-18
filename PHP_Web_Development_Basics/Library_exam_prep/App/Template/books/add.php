<h1>ADD NEW BOOK</h1>

<?php /** @var array $errors |null */
/** @var \App\Data\BrandDTO[] $data* */

?>

<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>

<a href="profile.php">My profile</a>
<form method="post">
    <label>
        Book Title: <input type="text" name="title"/> <br />
    </label>
    <label>
        Book Author: <input type="text" name="author"/> <br />
    </label>
    <label>
        Description: <textarea name="description"></textarea> <br />
    </label>
    <label>
        Image Url: <input type="text" name="image"/><br />
    </label>

    <label>
        Genre:
        <select name="genre_id">
            <?php foreach ($data as $genre): ?>
                <option value="<?=$genre->getId();?>"><?=$genre->getName();?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <br/>
    <input type="submit" name="add" value="Add"/> <br />

</form>

<a href="index.php">back</a>