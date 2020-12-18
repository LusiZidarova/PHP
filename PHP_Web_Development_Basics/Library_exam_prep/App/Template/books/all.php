<h1>MY Books</h1>

<?php /** @var \App\Data\FullOfferDTO[] $data */ ?>

<a href="add_book.php">Add new Book</a> | <a href="profile.php">My Profile</a> |
<a href="logout.php">Logout</a>
<br/>

<table border="1">
    <thead>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Added by User</th>
        <th>Details</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $book): ?>
        <tr>
            <td><?=$book->getTitle();?></td>
            <td><?=$book->getAuthor();?></td>
            <td><?=$book->getGenre();?></td>
            <td><?=$book->getUsername();?></td>
            <td><a href="view.php?id=<?=$book->getId();?>">Details</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

