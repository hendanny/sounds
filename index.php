<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMONYMS</title>
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>

    <form method="post" class="fm" action="<?php $_SERVER['PHP_SELF'];?>">
    <h1>HOMONYMS</h1>
    <input type="text" name="tx1" class="text" placeholder="word">
    <input type="text" name="tx2" class="text" placeholder="word"><br><br>
    <input type="text" value="<?php

if(isset($_POST['submit'])){
    function sound(){
$str = $_POST['tx1'];
$str2 = $_POST['tx2'];

echo metaphone($str);
echo "--";
echo metaphone($str2);
echo "......";

echo soundex($str);
echo "--";
echo soundex($str2);
}
sound();
}

?>
">
    <input type="submit" name="submit" value="check" class='submit'>

    </form>



</body>
</html>