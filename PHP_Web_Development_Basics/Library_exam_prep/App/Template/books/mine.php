<h1>MY Books</h1>

<?php /** @var \App\Data\MyOfferDTO[] $data */ ?>

<a href="add_book.php">Add new Book</a> | <a href="profile.php">My Profile</a> |
<a href="logout.php">Logout</a>
<br/>

<table border="1">
    <thead>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $book): ?>
        <tr>
            <td><?=$book->getTitle();?></td>
            <td><?=$book->getAuthor();?></td>
            <td><?=$book->getGenre();?></td>
            <td><a href="edit.php?id=<?=$book->getId();?>">Edit</a></td>
            <td><a href="delete.php?id=<?=$book->getId();?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

