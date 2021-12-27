<!DOCTYPE html>
<html>
<head>
      <meta charset = "UTF-8">
      <meta name = "viewport" content="width=device-width, initial-scale=1.0">
      <title>Form</title>

<h1>Donation Camp</h1>
<body>
    <form action = 'connect.php' method = "POST">
        <label for ="user"> Name: </label>
        <input type= "text" name='name' id="name" required /><br><br><br>
    
        <label for="email"> Email id: </label>
        <input type="text" name="email" id="email" required /><br><br><br>

        <label for="phone"> Phone no: </label>
        <input type="number" name="phone" id="phone" required /><br><br><br>

        <label for="place"> Place: </label>
        <input type="text" name="place" id="place" required /><br><br><br>

        <label for="bloodgrp"> Blood Group: </label>
        <input type="text" name="bloodgrp" id="bloodgrp" required /><br><br><br><br>

        <input type="submit" name= "submit" id="submit">
    </form>
</body>
</html>