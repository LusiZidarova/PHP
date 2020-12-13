<?php
$groceries = explode('!',readline());
$input = readline();

while($input !='Go Shopping!'){
    $commands = explode(' ', $input);

    switch ($commands[0]){
        case 'Urgent':
            $item = $commands[1];
            if(!in_array($item,$groceries )){
                array_splice($groceries,0,0,$item );
            }
         break;

        case 'Unnecessary':
            $item = $commands[1];
            if(in_array($item,$groceries )){
                $index = array_search( $item,$groceries);
                array_splice($groceries,$index,1);
            }
            break;
         case 'Correct':
            $oldItem = $commands[1];
            $newItem = $commands[2];
            if(in_array($oldItem ,$groceries )){
                $index = array_search( $oldItem ,$groceries);
                array_splice($groceries,$index,1, $newItem);
            }
            break;
        case 'Rearrange':
            $item = $commands[1];
            if(in_array($item ,$groceries )){
                $index = array_search($item,$groceries);
               $getItem =  array_splice($groceries,$index,1);
                $groceries[] =  $getItem;
            }
            break;
    }
    $input = readline();
}
echo implode(',',$groceries);

/*

 */
