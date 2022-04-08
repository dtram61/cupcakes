<!--
File Name: index.php
Author: Aaron & Duc
Date: 4/8/2022
Description: This is a web page that will give you an order summary of the cupcakes you ordered.
URL: https://dtram.greenriverdev.com/328/cupcakes/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>

<h1>Cupcake Fundraiser</h1>
<h2>Your name:</h2>

<!-- below is the codes for the form for putting in your name -->
<form id="flavor" name="flavor" action="process.php" method="post">
    <form id="name" name="name" action="process.php" method="post">
        <input type="text" name="name" class="form-control" placeholder="Please input your name" id="name" onsubmit="validateName()">

<h2>Cupcake Flavors</h2>

        <!-- this list all of the flavor options for the cupcakes -->

    <input type="checkbox" name="flavor[]" id="The Grasshopper" value="The Grasshopper">The Grasshopper <br>

    <input type="checkbox" name="flavor[]" id="flavor" value="Whiskey Maple Baconr" >Whiskey Maple Bacon<br>
    <input type="checkbox" name="flavor[]" id="flavor" value="Carrot Walnut" >Carrot Walnut<br>
    <input type="checkbox" name="flavor[]" id="flavor" value="Salted Caramel Cupcake" >Salted Caramel Cupcake<br>
    <input type="checkbox" name="flavor[]" id="flavor" value="Red Velvet" >Red Velvet<br>
    <input type="checkbox" name="flavor[]" id="flavor" value="Lemon Drop"> >Lemon Drop<br>
    <input type="checkbox" name="flavor[]" id="flavor" value="Tiramisu" >Tiramisu<br>


    </form>
</form>

<!-- this button will check if there is a name that has been typed in the order -->
<button type="submit" onclick="validateName()">Order</button>
<script>
    function validateName() {
        if (document.getElementById("name").value == "") {
            alert("Please put in a name");
        }
    }
</script>
</body>

</html>

<?php
