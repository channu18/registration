<?php

    if(isset($_POST['submit']))
    {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $number1 + $number2;

        echo "The Addition of " . $number1 . "and " . $number2 . "    is :-"  . $number3;
    }

?>


<form method="POST" action="">

    Number 1 :--  <input type="number" name="number1"><br><br>
    Number 2 :--  <input type="number" name="number2"><br><br>
    <input type="submit" name="submit" value="SUBMIT">

</form>