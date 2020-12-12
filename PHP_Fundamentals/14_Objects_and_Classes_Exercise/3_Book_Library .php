<?php

class Book{
    private $title;
    private $author;
    private $publisher;
    private $releaseDate;
    private $isbn;
    private $price;
    
    
    public function __construct($title,$author,$publisher,$releaseDate,$isbn,$price) {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPublisher($publisher);
        $this->setReleaseDate($releaseDate);
        $this->setIsbn($isbn);
        $this->setPrice($price);
    }
   
    function getTitle() {
        return $this->title;
    }

    function getPublisher() {
        return $this->publisher;
    }

    function getReleaseDate() {
        return $this->releaseDate;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getIsbn()
    {
        return $this->isbn;
    }
    public function getPrice()
    {
        return $this->price;
    }
    function setTitle($title) {
        $this->title = $title;
    }

    function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    function setReleaseDate($releaseDate) {
        $this->releaseDate = $releaseDate;
    }
    function setAuthor($author) {
        $this->author = $author;
    }
    public function setIsbn($isbn): void
    {
        $this->isbn = $isbn;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }
}

class Library{
    public $author;
    public $books;
    public function __construct($author = null, array $books = null){
        $this->author=$author;
        if($books != null){
            $this->books=$books;
        }
    }
}

$n = readline();

$books = [];
$library = new Library();
$library->books=array();

for ($i = 0; $i < $n; $i++) {

    $input = explode(' ',readline());
    $title=$input[0];
    $author = $input[1];
    $publisher = $input[2];
    $releaseDate = $input[3];
    $isbn = $input[4];
    $price=$input[5];

    $book = new Book($title,$author,$publisher,$releaseDate,$isbn,$price);
    $library->books[]=$book;

    }

foreach ($library as $book){
    if(is_array($book)){
        foreach ($book as $b){
            if(!key_exists($b->getAuthor(),$books)){
                $books[$b->getAuthor()] =0;
            }
            $books[$b->getAuthor()] += $b->getPrice();
        }
    }
}
uksort($books, function ($a, $b) use ($books) {
    if ($books[$a] < $books[$b]) return 1;
    elseif ($books[$a] > $books[$b]) return -1;
    else return strcmp($a, $b);
});
foreach ($books as $key=>$value){
    echo $key.' -> '.number_format($value,2).PHP_EOL;
}
/*
3.Book Library 
To model a book library, define classes to hold a book and a library.
The library must have a name and a list of books. The books must contain the title, author, publisher,
 release date (in dd.MM.yyyy format), ISBN-number and price.
Read a number n, followed by n lines of lists of books, add them to the library and print the total sum
of prices by author, ordered descending by price and then by author’s name lexicographically.
Books in the input will be in format {title} {author} {publisher} {release date} {ISBN} {price}.
The total prices must be printed formatted to the second decimal place.
Examples
Input	Output
5
LOTR Tolkien GeorgeAllen 29.07.1954 0395082999 30.00
Hobbit Tolkien GeorgeAll 21.09.1937 0395082888 10.25
HP1 JKRowling Bloomsbury 26.06.1997 0395082777 15.50
HP7 JKRowling Bloomsbury 21.07.2007 0395082666 20.00
AC OBowden PenguinBooks 20.11.2009 0395082555 14.00

 * Output
Tolkien -> 40.25
JKRowling -> 35.50
OBowden -> 14.00
Hints
Create classes Book and Library with all the mentioned above properties:


Create an object of type Library.
Read the input and create a Book object for each book in the input.
 */