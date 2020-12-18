<h1>View Books</h1>

<?php /** @var \App\Data\FullBookDTO $data */ ?>

<a href="profile.php">My Profile</a> |

<br/>
<div>
    <p><b>Book Title: </b><?= $data->getTitle();?></p>

</div>
<div>
    <p><b>Book Author: </b><?= $data->getAuthor();?></p>

</div>
<div>
    <p><b>Description: </b><?= $data->getDescription();?></p>

</div>
<div>
    <p><b>Genre: </b><?= $data->getGenre();?></p>

</div>
<div>
    <img src="<?= $data->getImage(); ?>" alt="None" width="400" height="250" />

</div>