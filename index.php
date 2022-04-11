<!DOCTYPE html>
<html>
<head>
  <script>
    function validateForm() {
      var x = document.forms["myForm"]["fname"].value;
      if (x == "" || x == null) {
        alert("Name must be filled out");
        return false;
      }
    }
  </script>
</head>
<body>


<h1>Cupcake Fundraiser</h1>
<h2>Your name: same file</h2>

<form name="myForm" action="process.php" onsubmit="return validateForm()" method="post" required>
  Name: <input type="text" name="fname">
  <h2>Cupcake Flavors</h2>
  <input type="checkbox" name="flavor[]" id="The Grasshopper" value="The Grasshopper">The Grasshopper <br>

  <input type="checkbox" name="flavor[]" id="Whiskey Maple Bacon" value="Whiskey Maple Bacon" >Whiskey Maple Bacon<br>
  <input type="checkbox" name="flavor[]" id="Carrot Walnut" value="Carrot Walnut" >Carrot Walnut<br>
  <input type="checkbox" name="flavor[]" id="Salted Caramel Cupcake" value="Salted Caramel Cupcake" >Salted Caramel Cupcake<br>
  <input type="checkbox" name="flavor[]" id="Red Velvet" value="Red Velvet" >Red Velvet<br>
  <input type="checkbox" name="flavor[]" id="Lemon Drop" value="Lemon Drop"> Lemon Drop<br>
  <input type="checkbox" name="flavor[]" id="Tiramisu" value="Tiramisu" >Tiramisu<br>



  <input type="submit" value="Submit">
</form>

</body>
</html>
