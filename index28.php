<?php

//Write a program in PHP to find the Smallest value from an Array.

$num = array(1,2,34,43,0);
if ($num[0]<$num[1]&&$num[0]<$num[2]&&$num[0]<$num[3]&&$num[0]<$num[4])
{
     echo "The Smallest Number Present in 0th Location : ".$num[0];
}
else if ($num[1]<$num[2]&&$num[1]<$num[3]&&$num[1]<$num[4])
{
     echo "The Smallest Number Present in 1th Location : ".$num[1];
}
else if ($num[2]<$num[3]&&$num[2]<$num[4])
{
     echo "The Smallest Number Present in 2nd Location : ".$num[2];
}
else if ($num[3]<$num[4])
{
     echo "The Smallest Number Present in 3rd Location : ".$num[3];
}
else{
     echo "The Smallest Number Present in 4th Location : ".$num[4];
}

//Write a program in PHP to find the Largest value from an Array.

$num = array(1,2,34,43,0);
if ($num[0]>$num[1]&&$num[0]>$num[2]&&$num[0]>$num[3]&&$num[0]>$num[4])
{
     echo "The Largest Number Present in 0th Location : ".$num[0];
}
else if ($num[1]>$num[2]&&$num[1]>$num[3]&&$num[1]>$num[4])
{
     echo "The Largest Number Present in 1th Location : ".$num[1];
}
else if ($num[2]>$num[3]&&$num[2]>$num[4])
{
     echo "The Largest Number Present in 2nd Location : ".$num[2];
}
else if ($num[3]>$num[4])
{
     echo "The Largest Number Present in 3rd Location : ".$num[3];
}
else{
     echo "The Largest Number Present in 4th Location : ".$num[4];
}
?>
