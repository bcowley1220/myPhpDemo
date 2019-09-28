<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Demo</title>
</head>
<body>
  
<form method="GET">
<label for="person"></label>
<input type="text" name="person" id="">
<button>Submit</button>
</form>
<?php 
  echo 'Hi There ';
  $name = $_GET['person'];
  print $name.' is a cool guy';
  //echo 10 / 2;
?>

<?php
  echo strlen('Hi Daniel');
  echo  str_word_count('The string length of sayHello is');
  echo strrev('Lets reverse this');
  echo strpos('Hi Brendan', 'Hi'); 
  echo str_replace('Brendan', 'Seamus', 'Hi Brendan');
  // echo strlen($sayHello.value)
?>


</body>
</html>