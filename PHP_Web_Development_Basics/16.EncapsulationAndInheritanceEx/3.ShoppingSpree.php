<?php
class Person
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var float
     */
    private $money;
    /**
     * @var Product[]
     */
    private $products;

    /**
     * Person constructor.
     * @param string $name
     * @param float $money
     * @param Product $products []
     */
    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->products = [];
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @throws Exception
     */
    private function setName(string $name): void
    {
        if (empty($name)) {
            throw new Exception("Name cannot be empty\n");
        }
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getMoney(): int
    {
        return $this->money;
    }

    /**
     * @param float $money
     * @throws Exception
     */
    private function setMoney(float $money): void
    {
        if ($money < 0) {
            throw new Exception("Money cannot be negative\n");
        }
        $this->money = $money;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): Product
    {
        return $this->products;
    }

    /**
     * @param Product $products
     */
    public function setProducts(Product $products): void
    {
        $this->products = $products;
    }

    /**
     * @param Product $product
     * @throws Exception
     */
    public function buyProduct(Product $product)
    {
        if ($product->getCost() > $this->getMoney()) {
            throw new Exception($this->getName() . " can't afford " . $product->getName().PHP_EOL);
        }
        $this->money -= $product->getCost();
        $this->products[] = $product;
        echo "{$this->getName() } bought {$product->getName()}" . PHP_EOL;
    }

    public function __toString()
    {
        if (count($this->products) === 0) {
            return "{$this->getName()} - Nothing bought\n";
        }
        $output = $this->getName() . " - ";
        $output .= implode(",", array_map(function (Product $product) {
            return $product->getName();
        }, $this->products));
        $output.= PHP_EOL;
        return $output;
    }
}
class  Product
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var float
     */
    private $cost;

    /**
     * Product constructor.
     * @param string $name
     * @param float $cost
     */
    public function __construct(string $name, float $cost)
    {
        $this->setName($name);
        $this->setCost($cost);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    private function setCost(float $cost): void
    {
        $this->cost = $cost;
    }


}
$personDate = preg_split("/[=;]/",readline(),-1,PREG_SPLIT_NO_EMPTY);
$people = [];
for ($i=0;$i<count($personDate)-1;$i+=2){
    try{
        $name = $personDate[$i];
        $money = floatval($personDate[$i+1]);

        $people[$name] = new Person($name,$money);

       /* if(!array_key_exists($name,$people)){
            $people[$name] = $money;
        }else {
            $people[$name] +=$money;
        }*/
    }catch (Exception $ex){
        echo $ex->getMessage();
        return;
    }
}
$products=[];
$productsDate = preg_split("/[=;]/",readline(),-1,PREG_SPLIT_NO_EMPTY);
for ($i=0; $i<count($productsDate)-1; $i+=2){
    try{
        $name = $productsDate[$i];
        $cost = floatval($productsDate[$i+1]);

        $products[$name] = new Product($name,$cost);

        /* if(!array_key_exists($name,$people)){
             $people[$name] = $money;
         }else {
             $people[$name] +=$money;
         }*/
    }catch (Exception $ex){
        echo $ex->getMessage();
    }
}
$input = readline();
while($input != "END"){
    $data = explode(" ",$input);
    $personName = $data[0];
    $productName = $data[1];
    try {
        if(array_key_exists($personName,$people) && array_key_exists($productName,$products)){
            $people[$personName]->buyProduct($products[$productName]);
        }
    }catch (Exception $ex){
        echo $ex->getMessage();
    }
    $input = readline();
}
foreach ($people as $person){
    echo $person;
}
//print_r($people);
//print_r($products);



/*
 *
 * 3.Shopping Spree
Create two classes: class Person and class Product. Each person should have a name, money and a bag of products. Each product should have name and cost. Name cannot be an empty string. Money cannot be a negative number.
Create a program in which each command corresponds to a person buying a product:
If the person can afford a product add it to his bag.
If a person doesn’t have enough money, print an appropriate message ("[Person name] can't afford [Product name]").
On the first two lines you are given all people and all products. Next you will be given all purchases people made until END is reached. Print a message when someone makes a purchase. After all purchases print every person in the order of appearance and all products that he has bought also in order of appearance. If nothing is bought, print the name of the person followed by "Nothing bought".
In case of invalid input (negative money exception message: "Money cannot be negative") or empty name: (empty name exception message "Name cannot be empty") break the program with an appropriate message. See the examples below:

Examples
Input	Output
Pesho=11;Gosho=4;
Bread=10;Milk=2;
Pesho Bread
Gosho Milk
Gosho Milk
Pesho Milk
END

Output
Pesho bought Bread
Gosho bought Milk
Gosho bought Milk
Pesho can't afford Milk
Pesho - Bread
Gosho - Milk,Milk

Input
Mimi=0;
Kafence=2;
Mimi Kafence
END
Output
Mimi can't afford Kafence
Mimi – Nothing bought

Input
Jeko=-3;
Chushki=1;
Jeko Chushki
END
Output
Money cannot be negative

 */