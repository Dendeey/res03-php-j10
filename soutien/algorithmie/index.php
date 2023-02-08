<?php

/*// Exercice 1 : Tri croissant et décroissant //

function getRandomNumbersArray() : array
{
    $nbTab = range(-20, 20);
    shuffle($nbTab);

    return $nbTab;
}

function sortNumbers(array $numbers, bool $desc = false)
{
    
        
    for($i = 0; $i < count($numbers) - 1; $i++)
    {
        $minIndex = $i;
            
        for($j = $i + 1; $j < count($numbers); $j++)
        {
                
            if($numbers[$j] < $numbers[$minIndex])
            {
                    
                $minIndex = $j;
                    
            }
                
        }
            
        $temp = $numbers[$minIndex];
        $numbers[$minIndex] = $numbers[$i];
        $numbers[$i] = $temp;
    }
        
    
    
    return $numbers;
    
}

var_dump(sortNumbers(getRandomNumbersArray()));


// Exercice 2 : calculer une puissance //

function calculerPuissance($x, $y)
{
    
    $n1 = 1;
    $n2 = $y;
    
    
    if($n2 < 0)
    {
        echo "Non non non !";
    }
    else
    {
        while($n2 > 0)
        {
            
            $n1 = $n1 * $x;
            $n2--;
        
        }
        
        echo $n1;
    }
    
    
}

calculerPuissance(5, 4);*/


// Exercice 4 : division


function calculerQuotient($nombre, $diviseur) : ? int
{
    
    $reste = $nombre;
    $quotient = 0;
    
    while($diviseur <= $reste)
    {
        
        $reste = $reste - $diviseur;
        $quotient++;
        
    }
    
    return $quotient;
}

echo calculerQuotient(100, 6);


?>