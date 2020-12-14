<?php
class Book
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $author;
    /**
     * @var float
     */
    private $price;

    /**
     * Book constructor.
     * @param string $title
     * @param string $author
     * @param float $price
     * @throws Exception
     */
    public function __construct(string $title, string $author, float $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @throws
     */
    private function setTitle(string $title): void
    {
        if(strlen ($title )<3 ){
            throw new Exception("Title not valid!");
        }
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @throws Exception
     */
    private function setAuthor(string $author): void
    {
        //If the author’s second name is starting with a digit– exception’s message is: "Author not valid!"
        if(is_numeric(explode(" ",$author)[1][0])){
            throw new Exception("Author not valid!");
        }
        $this->author = $author;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @throws Exception
     */
    private function setPrice(float $price): void
    {
        if($price <=0){
            throw  new Exception("Price not valid!");
        }
        $this->price = $price;
    }
}
class GoldenEditionBook extends Book
{
   public function IncreasePrice(){
       return parent::getPrice()*1.3;
   }

}
$author = readline();
$title = readline();
$price = floatval(readline());
$type = readline();

$book =null;

try {
    switch ($type){
        case "GOLD":

            $book = new GoldenEditionBook($title,$author,$price);
            $book->IncreasePrice();
            echo "OK".PHP_EOL;
            echo $book->IncreasePrice();
            break;
        case "STANDARD":
            $book = new Book($title,$author,$price);
            echo "OK".PHP_EOL;
            echo $book->getPrice();
            break;
        default:
            throw new Exception("Type is not valid!");
            break;
    }

}catch (Exception $ex){
    echo $ex->getMessage();
}

/*
 * 2.Book Shop - 100/100
You are working in a library. And you are pissed off by writing descriptions for books by hand, so you wanted to use the computer to make them faster. So the task is simple. Your program should have two classes – one for the ordinary books – Book, and another for the special ones – GoldenEditionBook. So let’s get started! We need two classes:
Book - represents a book that holds title, author and price. A book should offer information about itself in the format shown in the output below.
GoldenEditionBook - represents a special book holds the same properties as any Book, but its price is always 30% higher.
Input
The input comes from the console. It will hold four lines. On the first you will be given the name
, on the second the title and third will be the standard price. Fourth line will hold the type of
 book - GOLD or STANDARD

Output
On the first line print OK, if all inputs are in the correct format. If not print every error message on a single line.
If input is valid print a second line with the price of the book.
Constraints
 If the author’s second name is starting with a digit– exception’s message is:
o &quot;Author not valid!&quot;
 If the title’s length is less than 3 symbols – exception’s message is:
o &quot;Title not valid!&quot;
 If the price is zero or it is negative – exception’s message is:
o &quot;Price not valid!&quot;
 If book type is invalid – exception’s message is:
o &quot;Type is not valid!&quot;

Example
Input Output
Ivo 4ndonov
Under Cover
9999999999999999999
STANDARD

Output
Author not valid!

Input
Georgi Petrov
Summer Moon
22
STANDARD

Output
OK
22

Input
Vasil Ivanov
UML Basics
10
GOLD

Output
OK
13
 */