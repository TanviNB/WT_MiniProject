<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Online Meals</title>
    <link rel="stylesheet" href="style.CSS">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo1.png" alt="My Online Meals">
        </div>

        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services">Services</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
    <section id="home">
        <h1 class="hp">Welcome to MyOnlineMeals</h1>
        <p>Whether you’re looking for biryani to feed your desi cravings, soul comforting pizzas and burgers, or even a salad with a cup of chai or coffee, MyOnlineMeals is the only app you need for the quickest doorstep delivery of your favourites. With over 1.5 million restaurants and 285 million ratings and reviews, discover the best around you in no time – contact us now.</p>
        <p>Happy Meals!.</p>
        <button class="btn">Order Now!</button>
    </section>

    <section class="services-container">
        <h1 class="hp center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="pizza.jpg" alt="">
                <h2 class="hs center">Food Ordering</h2>
                <p class="center">Our mission statement is “better food for more people.” Since our inception in 2008, we have grown tremendously, both in scope and scale, hurry up order with us now!</p>
            </div>
            <div class="box">
                <img src="burger.jpg" alt="">
                <h2 class="hs center">Food Catering</h2>
                <p class="center">Our passion is driven by purpose and we take immense pride in our initiative ‘Feeding India’, one of India’s largest not-for-profits working to ensure that nobody in India goes to bed hungry.</p>
            </div>
            <div class="box">
                <img src="coffee.jpg" alt="">
                <h2 class="hs center">Bulk Ordering</h2>
                <p class="center">We're innovating hard to make last-mile delivery carbon neutral, to eliminate the use of plastic packaging, create meaningful opportunities in the gig economy, and to feed our country’s ever-growing appetite for high-quality, affordable, and hygienic food, one delivery at a time!</p>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="hp center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="l1.png" alt="">
            </div>
            <div class="client-item">
                <img src="l2.png" alt="">
            </div>
            <div class="client-item">
                <img src="l3.png" alt="">
            </div>
            <div class="client-item">
                <img src="l4.png" alt="">
            </div>
        </div>
    </section>
    <section id="contact">
        <h1 class="hp center">Contact Us</h1>
        <div id="contact-box">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your Phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <input type="text" name="message" id="message" cols="30" rows="10"></input>
                </div>
                <div>
                    <input type="submit" value="Insert" name="insert">
   	                <input type="submit" value="Update" name="update">
   	                <input type="submit" value="Delete" name="delete">
                </div>
            </form>
        </div>
    </section>
    <footer>
        <div class="center">
            Copyright &copy; www.MyOnlineMeals.com. All rights reserved!
        </div>
    </footer>
</body>
</html>

<?php

if(isset($_POST['insert']))
{
    $varName = $_POST['name'];
    $varEmail = $_POST['email'];
    $varPhone = $_POST['phone'];
    $varMessage = $_POST['message'];
   	 
    $con = mysqli_connect('localhost', 'root', '', 'myonlinemeals');
   	 
    $sql = "INSERT INTO ordercontacts(name, email ,phone, message) VALUES ('$varName', '$varEmail', '$varPhone', '$varMessage')";

//iNSRT INTO DATABASE

    $rs= mysqli_query($con, $sql);
   	 
    if($rs)
    {
   	 echo "Record inserted successfully";
    }
}
else if(isset($_POST['update']))
{
    $varName = $_POST['name'];
    $varEmail = $_POST['email'];
    $varPhone = $_POST['phone'];
    $varMessage = $_POST['message'];
    
    $con = mysqli_connect('localhost', 'root', '', 'myonlinemeals');
    
    $sql = "UPDATE ordercontacts SET pass='$varPhone' WHERE name='$varName'";
    
    if ($con->query($sl) === TRUE)
    {
   	 echo "Record updated successfully";
    }
    else
    {
   	 echo "Error updating record" . $con->error;
    }
}
else if(isset($_POST['delete']))
{
    $varName = $_POST['name'];
    $varEmail = $_POST['email'];
    $varPhone = $_POST['phone'];
    $varMessage = $_POST['message'];
    
    $con = mysqli_connect('localhost', 'root', '', 'myonlinemeals');
    
    $sql = "DELETE from ordercontacts WHERE name='$varName'";
    
    if($con->query($sql) === TRUE)
    {
   	 echo "Record deleted successfully";
    }
    else
    {
   	 echo "Error updating the record" . $con->error;
    }
}    
?>
