<?php
function prime_numbers($nb)
{
    $n=$nb;
    $i=2;
    $flag=1;
    
    if ($n <= 1)//Si le $nb est égale ou inférieur à 1, retourne false
        return false;
    for ($i; $i <= $n/2; $i++)
        {
            if ($n %$i == 0)
                {
                    return false;
                }
        }
    return true;
}
//var_dump(prime_numbers(2));
//var_dump(prime_numbers(3));
//var_dump(prime_numbers(5));
//var_dump(prime_numbers(7));
//var_dump(prime_numbers(11));
//var_dump(prime_numbers(4));
//var_dump(prime_numbers(6));
//var_dump(prime_numbers(8));
?>