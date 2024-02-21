<form>
    <input type="date" name="nascimento" id="">;
    <input type="submit" value="ok">;
</form>

<?php

if (isset($_GET)) {
 

    foreach ($_GET as $key => $value) {
        echo "o nome do campo é: " . $key;
        echo "valor do campo é: " . $value;
        echo "<hr>";
    }
}
?>

