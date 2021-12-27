<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css">
	<title>Register Form</title>
</head>

<body>
<h1 class="root">Registration Form</h2>
<div class="main">
<form action = 'connection.php' method = "POST">
<table>
 <tbody>
        <tr>
        <td><label for ="user1"> First Name: </label></td>
        <td><div class="container">
        <input type= "text" name='fname' id="fname" required /><br>
        </div></td>
        </tr>
        
        <tr>
        <td><label for ="user2"> Last Name: </label></td>
        <td><div class="container">
        <input type ="text" name = 'lname' id = 'lname' required />
        </div></td>
        </tr>

        <tr>
        <td><label for ="email"> Email Id: </label></td>
        <td><div class="container">
        <input type ="text" name = 'email' id = 'email' required />
        </div></td>
        </tr>

        <tr>
        <td><lable for ="password"> Password: </label></td>
        <td><div class="container">
        <input type ="password" name = 'password' id= ' password' required />
        </div></td>
        </tr>
        
        <tr>
        <td><label for ="phone">Phone No: </label></td>
        <td><div class="container">
        <input type ="number" name = 'phone' id = 'phone' required />
        </div></td>
        </tr>            

        <tr>
        <td><label for ="country">Country: </label></td>
        <td><div class="container">
        <input type ="text" name = 'country' id = 'country' required />
        </div></td>
        </tr>
        
        <tr>
        <td><label for ="city">City: </label></td>
        <td><div class="container">
        <input type ="text" name = 'city' id = 'city' required />
        </div></td>
        </tr>

        <tr>
        <td><label for = "zipcode"> Zipcode: </label></td>
        <td><div class="container">
        <input type = "number" name = 'zipcode' id = 'zipcode' required />
        </div></td>
        </tr>
</table>
        <input type="submit" name= "submit" id="Submit">
        </div>
</body>
</html>