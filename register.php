<html lang="en">
<head>
<title>Registration</title>
<?php include("head.php"); ?>
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
<body onresize="javascript:dynamo()" onload="javascript:dynamo();">
  <?php include('cornerbar.php'); ?>
  <center>
  <div class="container">
    <div class="content"></div>
  <?php include('header.php'); ?>
    <div class="row">
     <form class="col s12" action="processRegister.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" id="student" name="sname"/>
          <label for="student">Student's Name</label>
        </div>
        <div class="input-field col s6">
          <select multiple id="classes" name="classes">
            <option></option>
            <option value="prim">Primary</option>
            <option value="1">Grade I</option>
            <option value="2">Grade II</option>
            <option value="3">Grade III</option>
          </select>
          <label for="classes">Select classes</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8 offset-s2">
          <input type="text" id="parents" name="pname"/>
          <label for="parents">Parents' Names</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input type="text" id="street" name="street"/>
          <label for="street">Street Address</label>
        </div>
        <div class="input-field col s4">
          <input type="text" id="city" name="city"/>
          <label for="city">City</label>
        </div>
        <div class="input-field col s2">
          <select id="state" name="state">
            <option></option>
            <option value="DC">Washington DC</option>
          </select>
          <label for="state">State</label>
        </div>
        <div class="input-field col s2">
          <input type="number" id="zip" size="5" name="zip"/>
          <label for="zip">Zip Code</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s2">
          <input type="text" class="datepicker" id="bday" name="bday"/>
          <label for="bday">Birthdate</label>
        </div>
        <div class="input-field col s2">
          <input type="text" id="grade" name="grade"/>
          <label for="grade">Grade in School</label>
        </div>
        <div class="input-field col s4">
          <input type="text" id="hphone" name="home"/>
          <label for="hphone">Home Phone</label>
        </div>
        <div class="input-field col s4">
          <input type="text" id="cphone" name="cell"/>
          <label for="cphone">Cell Phone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4 offset-s1">
          <input type="text" id="training" name="training"/>
          <label for="training">Years of Ballet Training</label>
        </div>
        <div class="input-field col s6">
          <input type="email" id="email" name="email"/>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">Will calculate subtotals</div>
        <input type="hidden" value="<?php ?>" name="subt"/>
        <input type="submit" class="btn-large" value="Submit"/>
      </div>
    </form>
   </div>
  </div>
</center></body>
</html>
