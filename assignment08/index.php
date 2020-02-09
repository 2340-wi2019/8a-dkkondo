<?php
    include "includes/header.php";

    $first_name = 'Dissa';
    echo $first_name;
    echo "<br>";
    $last_name = 'Kondo';
    echo $last_name;
    echo "<br>";
    $my_age = 36;
    echo $my_age;
    echo "<br>";
    $my_weight = 170;
    echo $my_weight;
    $val = 1/2.2;
    function multiply($num1, num2) {
        return num1 * num2;
    }
    $result = multiply($my_weight, $val);
    echo $result;


?>
<body>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo "Johnny"; ?> <?php echo "Doughy!"; ?>
<p>I am <?php echo "50"; ?> years old. I weigh <?php echo "150"; ?> pounds, which is <?php echo "68.18"; ?> kg!</p>

</body>
<?php
    include "includes/footer.php";
?>


