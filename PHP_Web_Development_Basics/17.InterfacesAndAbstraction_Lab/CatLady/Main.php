<?php
spl_autoload_register();
class Main
{
    const INPUT_END_COMMAND = "End";
    const PATTERN = "/\\s+/";
    /**
     * @var array
     */
    private $cats;

    public function run(){
        $this->readData();
    }

    public function findCatByName(string $name):Cat
    {
        if(array_key_exists($name,$this->cats)){
            return $this->cats[$name];
        }
        return null;
    }

    private function readData()
    {
        $input = readline();

        while($input !== self::INPUT_END_COMMAND){
            //"/\\s+/" - splotva po interval,limit -1 vxichki namereni machove,PREG_Split_NO _EMPTY - da premahne vsichki prazni
            $data = preg_split(self::PATTERN,$input,-1,PREG_SPLIT_NO_EMPTY);
            $breed = $data[0];
            $name = $data[1];
            $param = intval($data[2]);
            $cat = null;
            try {
                $this->cats[$name] = CatFactory::create($breed,$name,$param);
            }catch (Exception $ex)
            {
                echo $ex->getMessage();
            }
            $input = readline();
        }
        $searchingName = readline();
        $cat =$this->findCatByName($searchingName);
        echo $cat;
    }
}

$main = new Main();
$main -> run();

/*
 *
 */