<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting</title>
</head>
<body>

    <?php

        //отличное от null
        if(isset($_GET['array']))
        {
            $str = $_GET['array'];
            $arrayBeforeSorting = explode(",", $str);
            $arrayAfterSoring = $arrayBeforeSorting;

            if(count($arrayBeforeSorting)==0){
                echo 'Zero array';
                exit(0);
            }

            for($i = 0; $i < count($arrayAfterSoring); $i++){
                $arrayAfterSoring[$i] = (int)$arrayAfterSoring[$i];
            }

            sortShell($arrayAfterSoring);

            echo 'Before sorting: ' . implode(',', $arrayBeforeSorting) . '<br>After sorting: ' . implode(',', $arrayAfterSoring);
        }
        
        //вариант 5
        function sortShell(&$a){
            $sort_length = count($a) - 1;
            $step = ceil(($sort_length + 1)/2);
        
            do{
                $i = ceil($step);
                do
                {
                  $j=$i-$step;
                  $c=1;
                  do
                  {
                    if($a[$j]<=$a[$j+$step])
                    {
                     $c=0;
                    }
                    else
                    {
                       $tmp=$a[$j];
                       $a[$j]=$a[$j+$step];
                       $a[$j+$step]=$tmp;
                    }
                 $j=$j-1;
                  }
                  while($j>=0 && ($c==1));
                   $i = $i+1;
                 }
                 while($i<=$sort_length);
                $step = $step / 2;
            }
            while($step > 0);
        }

    ?>
</body>
</html>