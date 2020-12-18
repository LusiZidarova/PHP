
<?php

/** @var \App\Data\OfferDTO[] $book */

/** @var \App\Data\UserDTO $data */
/** @var array $errors |null */ ?>


<h1>Hello, <?= $data->getUsername()?>  </h1>

<div>
    <a href="add_book.php">Add new book</a> | <a href="logout.php"> logout</a>
</div>
</br></br>
<div>
    <a href="my_books.php">My Books</a>
</div>
<div>
    <a href="all_books.php">All Books</a>
</div>