<h1>Edit BOOK</h1>

<?php /** @var array $errors |null */
/**
 * @var \App\Data\EditOfferDTO $data
 */

?>

<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>

<a href="profile.php">My profile</a>
<form method="post">
    <label>
        Book Title: <input type="text" value="<?=$data->getTitle();?>" name="title"/> <br />
    </label>
    <label>
        Book Author: <input type="text" value="<?=$data->getAuthor();?>" name="author"/> <br />
    </label>
    <label>
        Description: <textarea name="description"><?=$data->getDescription();?></textarea> <br />
    </label>
    <label>
        Image Url: <input type="text" name="image" value="<?=$data->getImage();?>" /><br />
    </label>

    <label>
        Genre:
        <select name="genre_id">
            <?php foreach ($data->getGenries() as $genre): ?>
                <option <?= $genre->getId() == $data->getGenreId() ? 'selected' : ''?> value="<?=$genre->getId();?>"><?=$genre->getName();?></option>
            <?php endforeach; ?>
        </select>

    </label>
    <br/>
    <input type="submit" name="edit" value="Edit"/> <br />

</form>

<a href="index.php">back</a>