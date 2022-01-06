<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name     = $_POST['name']; 
  $email    = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];
//   $website= $_POST['website'];





   $errors = [];

  # Validate Name ... 
   if(empty($name)){
      $errors['Name'] = "Field Required";
  }

  # Validate Email 
  if(empty($email)){
      $errors['Email'] = "Field Required";
  }

  # Validate Password 
  if(empty($password)){
      $errors['Password'] = "Field Required";
  }elseif(strlen($password) < 6){
    $errors['Password'] = "Length must be >= 6 chars";
  }
    # Validate address 
    if(empty($address)){
        $errors['address'] = "Field Required";
    }elseif(strlen($address) < 10){
      $errors['address'] = "Length must be >= 10 chars";
    }
    # Validate URL 
    if(empty($_POST['website'])){
        $errors['website'] = "Field Required";
    }


   if(count($errors) > 0){
       foreach ($errors as $key => $value) {
        
           echo '* '.$key.' : '.$value.'<br>';
       }
   }else{
       echo 'Valid Data';
   }
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

Name: <input type="text" name="name">
E-mail: <input type="text" name="email">
Password: <input type="password" name="password">
address: <input type="text" name="address">
website:<input type="url" name="website">
<input type="submit" name="submit">

</form>

</body>
</html>