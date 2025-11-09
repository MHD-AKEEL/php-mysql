<!DOCTYPE html>
<html>
<body>
<pre>

<?php
    $dummyarr = [10, 20, 30];
    $arr = ["one"=>1, "two"=>20.1, "three"=>"string", "four"=>012, "five"=>"true", "six"=>"012", 7=>0xff, 8=>$dummyarr];

    print_r($arr)."<br>";

    var_dump($arr);

?>

</pre>
</body>
</html>
