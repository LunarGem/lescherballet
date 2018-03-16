<html lang="en">
<head>
<title>Registration</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
$(document).ready(function() {
 $('select').material_select();
 $('.datepicker').pickadate({
   selectMonths: true, // Creates a dropdown to control month
   selectYears: 100, // Creates a dropdown of 15 years to control year,
   max: new Date(),
   today: 'Today',
   clear: 'Clear',
   close: 'Ok',
   closeOnSelect: false // Close upon selecting a date,
 });
});
</script>
</head>
<body><center>
  <?php include('cornerbar.php'); ?>
  <div class="container">
  <?php include('header.php'); ?>
    <div class="row">
     <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" id="student"/>
          <label for="student">Student's Name</label>
        </div>
        <div class="input-field col s6">
          <select multiple id="classes">
            <option></option>
            <option value="">Primary</option>
            <option value="">Primary</option>
            <option value="">Primary</option>
            <option value="">Primary</option>
          </select>
          <label for="classes">Select classes</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8 offset-s2">
          <input type="text" id="parents"/>
          <label for="parents">Parents' Names</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input type="text" id="street"/>
          <label for="street">Street Address</label>
        </div>
        <div class="input-field col s4">
          <input type="text" id="city"/>
          <label for="city">City</label>
        </div>
        <div class="input-field col s2">
          <select id="state">
            <option></option>
            <option value="DC">Washington DC</option>
          </select>
          <label for="state">State</label>
        </div>
        <div class="input-field col s2">
          <input type="number" id="zip" size="5"/>
          <label for="zip">Zip Code</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s2">
          <input type="text" class="datepicker" id="bday"/>
          <label for="bday">Birthdate</label>
        </div>
        <div class="input-field col s2">
          <input type="text" id="grade"/>
          <label for="grade">Grade in School</label>
        </div>
        <div class="input-field col s4">
          <input type="text" id="hphone"/>
          <label for="hphone">Home Phone</label>
        </div>
        <div class="input-field col s4">
          <input type="text" id="cphone"/>
          <label for="cphone">Cell Phone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4 offset-s1">
          <input type="text" id="training"/>
          <label for="training">Years of Ballet Training</label>
        </div>
        <div class="input-field col s6">
          <input type="email" id="email"/>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">Will calculate subtotals</div>
        <input type="submit" class="btn-large" value="Submit"/>
      </div>
    </form>
   </div>
  </div>
</center></body>
</html>
