<?php
$description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eum reprehenderit perspiciatis?';
// $len_description = strlen($description);

$user_input = $_GET['word'];
$censured_chars = '***';

$censured_str = str_replace($user_input, $censured_chars, $description);
$len_description = strlen($censured_str);
?>

<h1> Hello PHP! </h1>
<p> Questo paragrafo >> "<?php echo $censured_str ?>" ha una lunghezza di: <?php echo $len_description ?> caratteri </p>