<!DOCTYPE html>
<html lang="ua">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>нкгавшылс</title>
  </head>
  <body>




<main>  
	<div class="container">
		<div class="">
			<div class="row">


				<form method="get" >
          <label> Введите своё имя:</label> <br>
          <input type="text" name="name"> <br>

          <label>Введите свой возраст</label> <br>
          <input type="number" name="age"> <br>
          <br>
          <input type="submit" name="formSubmit" value="Отправить">
        </form>

       <?php
       if (isset($_GET{'formSubmit'})){
          $nameform=$_GET['name'];
          $ageform=$_GET['age'];
          $connect = mysqli_connect('localhost',  'root', 'root', 'practice');
          
          if ($mysqli->connect_errno) {
            echo "Bpdtybnt, возникла проблема на сайте";
            exti;
          }
          $name = '"' .$connect->real_escape_string($nameform).'"';
          $age = '"' .$connect->real_escape_string($ageform).'"';
          $query="INSERT INTO users (name,age) VALUES ($name,$age)";
          $result=$connect->query($query);
          if($result){
            print('успех'. '<br>');
          }
          $connect->close();
       }

       ?>
              

			</div>
		</div>
	</div>
</main>



    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
