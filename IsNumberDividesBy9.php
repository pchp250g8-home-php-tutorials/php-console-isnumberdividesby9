<?php
    system("cls");
    echo("Enter an integer number\r\n");
    $strLine = chop(fgets(STDIN));
    $iNum = intval($strLine);
    $iVal = abs($iNum);
    $nSumDigits = 0;
    while ($iVal > 0) 
    {
        $nSumDigits += $iVal % 10;
        $iVal = intdiv($iVal, 10);
    }
    printf("The sum of digits of the number %d is %d\r\n", $iNum, $nSumDigits);
    if ($nSumDigits % 9 == 0)
    {
        printf("The number %d divides by 9\r\n", $iNum);
    }
    else
    {
        printf("The number %d does not divide by 9\r\n",$iNum);
    } 
    fgetc(STDIN);
?>