<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Big daddy's Meaty Pizza</title>
  <link rel="stylesheet" href="css/styles.css" type="text/css" />
  <script>
    function yesnoCheck(that) {
      if (that.value == "custom") {
        document.getElementById("ifYes").style.display = "block";
      } else {
        document.getElementById("ifYes").style.display = "none";
      }
    }
  </script>
</head>

<body>
  <header>
    <img src="images/big.png" alt="The logo for big daddy's pizza, with big daddy giving a thumbs up" width="310.5" height="246.75">
  </header>
  <main>
    <h2>Edit your order details:</h2>
    <label><span>*</span> Required field</label>
    <form id="orderInfoForm" action="FormProcessing.php" method="get">
      <fieldset>
        <legend>Order Info</legend>

        <!-- amount of pizzas -->
        <div>
          <label for="streetName" class="required">Number of pizzas:</label>
          <select id="pizzaNum" name="pizzaNum" onchange="yesnoCheck(this);" required>
            <option value="" selected>--Select the number of pizzas--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="custom">Custom value</option>
          </select>
        </div>
        <div id="ifYes" style="display: none;">
          <label>&nbsp;</label>
          <input type="number" id="customPizzaNum" name="customPizzaNum"  />
        </div>

        <!-- pizza size -->
        <div>
          <label for="streetName" class="required">Size:</label>
          <select id="pizzaSize" name="pizzaSize" required>
            <option value="" selected>--Select the size of your pizza--</option>
            <option value="Small">Small (4 slices)</option>
            <option value="Medium">Medium (6 slices)</option>
            <option value="Large">Large (8 slices)</option>
            <option value="XL">Extra Large (12 slices)</option>
          </select>
        </div>

        <!-- pizza shapes -->
        <div>
          <label for="shape" class="required">Shape:</label>
          <select id="pizzaShape" name="pizzaShape" required>
            <option value="round" selected>Round</option>
            <option value="square">Square</option>
          </select>
        </div>

        <!-- pizza topings -->
        <div>
          <label for="topping">Toppings:<br></label>
          <!-- Left side topics -->
          Left Side:
          <input type="checkbox" name="topingsLeft[]" id="Papperoni" value="Papperoni" /> Papperoni &nbsp;
          <input type="checkbox" name="topingsLeft[]" id="Mushroom" value="Mushroom" /> Mushroom &nbsp;
          <input type="checkbox" name="topingsLeft[]" id="Sausage" value="Sausage" /> Sausage &nbsp;
          <input type="checkbox" name="topingsLeft[]" id="Ham" value="Ham" /> Ham &nbsp;
          <input type="checkbox" name="topingsLeft[]" id="Black" value="Green Olives" /> Olives &nbsp;
          <!-- Right side topics -->
          Right Side:
          <input type="checkbox" name="topingsRight[]" id="Papperoni" value="Papperoni" /> Papperoni &nbsp;
          <input type="checkbox" name="topingsRight[]" id="Mushroom" value="Mushroom" /> Mushroom &nbsp;
          <input type="checkbox" name="topingsRight[]" id="Sausage" value="Sausage" /> Sausage &nbsp;
          <input type="checkbox" name="topingsRight[]" id="Ham" value="Ham" /> Ham &nbsp;
          <input type="checkbox" name="topingsRight[]" id="Black" value="Green Olives" /> Olives &nbsp;
          <!-- Whole pizza topics -->
          <label>&nbsp;</label>
          Whole Pizza:
          <input type="checkbox" name="topingsWhole[]" id="Papperoni" value="Papperoni" /> Papperoni &nbsp;
          <input type="checkbox" name="topingsWhole[]" id="Mushroom" value="Mushroom" /> Mushroom &nbsp;
          <input type="checkbox" name="topingsWhole[]" id="Sausage" value="Sausage" /> Sausage &nbsp;
          <input type="checkbox" name="topingsWhole[]" id="Ham" value="Ham" /> Ham &nbsp;
          <input type="checkbox" name="topingsWhole[]" id="Black" value="Green Olives" /> Olives &nbsp;
        </div>

        <!-- crust type -->
        <div>
          <label for="crust">Crust type:</label>
          <select id="pizzaCrust" name="pizzaCrust" size="3">
            <option value="regular" selected>Regular crust</option>
            <option value="thin">Thin crust</option>
            <option value="thick">Thick crust</option>
          </select>
        </div>

        <!-- delivery type -->
        <div>
          <label for="delivery" class="required">Delivery type:</label>
          <input type="radio" name="delivery" id="delivery" value="Delivery" required /> Delivery &nbsp;
          <input type="radio" name="delivery" id="inStore" value="In-Store pickup" /> In-Store Pickup &nbsp;
          <input type="radio" name="delivery" id="dineIn" value="Dine In" /> Dine In
        </div>
      </fieldset>

      <fieldset>
        <legend>Address & Contact information</legend>

        <!-- address -->
        <div>
          <label for="streetName" class="required">Number & Street Name</label>
          <input type="text" id="streetName" name="streetName" size="30" maxlength="40" placeholder="Type your address" required />
        </div>

        <!-- apt/unit number or description -->
        <div>
          <label for="aptNum">Apt/unit (optional)</label>
          <input type="text" id="aptNum" name="aptNum" size="30" maxlength="40" placeholder="Type your apartment number (optional)" />
        </div>

        <!-- zip code input -->
        <div>
          <label for="zipcode" class="required">Zip Code</label>
          <input id="zipcode" type="text" name="zipcode" required />
        </div>

        <!-- provice input -->
        <div>
          <label for="province" class="required">Select your provice:</label>
          <select id="province" name="province" required>
            <option value="" selected>--Select your province--</option>
            <option value="ON">Ontario</option>
            <option value="AB">Alberta</option>
            <option value="BC">British Colombia</option>
            <option value="PEI">Prince Edward Island</option>
          </select>
        </div>

        <!-- name input -->
        <div>
          <label for="fullName" class="required">Full Name:</label>
          <input type="text" name="fullName" id="fullName" required />
        </div>

        <!-- phone number input -->
        <div>
          <label for="telephone" class="required">Telephone:</label>
          <input type="tel" name="telephone" id="telephone" required />
        </div>

        <!-- email input -->
        <div>
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" />
        </div>

        <!-- delivery instructions -->
        <div>
          <label for="dInstructions">Optional delivery instructions:</label>
          <textarea id="dInstructions" name="dInstructions" rows="4" cols="40"></textarea>
        </div>

      </fieldset>

      <input type="submit" value="Submit form">
      <input type="Reset" value="Clear Form">
    </form>
  </main>
  <footer>
    <p><small>©Big Daddy Inc. All rights reserved</small></p>
  </footer>

</body>

</html>