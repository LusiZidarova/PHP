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
     * @var array
     */
    private $products;

    /**
     * Person constructor.
     * @param string $name
     * @param float $money
     * @throws Exception
     */
    public function __construct(string $name,float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->products=[];
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
        if(empty($name)){
            throw new Exception("Name cannot be empty");
        }
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     * @param float $money
     * @throws  Exception
     */
    private function setMoney(float $money): void
    {
        if($money < 0){
            throw new Exception("Money cannot be negative");
        }
        $this->money = $money;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param Product $product
     */
    private function addProduct(Product $product):void
    {
        $this->products[] = $product;
    }

    /**
     * @param Product $product
     * @return bool
     */
    private  function canAffordProduct(Product $product):bool{
        return $product->getCost() > $this->getMoney();
    }
    /**
     * @param Product $product
     * @throws Exception
     */
    public function buyProduct(Product $product)
    {
       if($this->canAffordProduct($product)){
           throw new Exception("{$this->getName()} can't afford {$product->getName()}");
       }
       $this->setMoney($this->getMoney()-$product->getCost());
       $this->addProduct($product);
       echo "{$this->getName()} bought {$product->getName()}".PHP_EOL;
    }

    public function __toString()
    {
        if(count($this->getProducts()) === 0){
            return $this->getName(). " - Nothing bought".PHP_EOL;
        }

        $output = $this->getName(). " - ";
        $output.= implode(",",
            array_map(function (Product $product){
                return $product->getName();
            }, $this->getProducts()));
        return $output.PHP_EOL;
    }


}
