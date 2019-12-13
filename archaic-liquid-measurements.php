<?php

include_once('includes/functions.php');


$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';

if (!isset($_POST['submit'])) {
  $_POST['submit'] = '';
}

if($_POST['submit']) {
  $fromValue = $_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  $toValue = convert_measurement($fromValue, $fromUnit, $toUnit);
}

?>
<?php include_once 'includes/header.php'; ?>

  <div id="main-content">
    <header id="heading">

    <h1>Convert Length</h1>
    </header>
    <form action="" method="post">

      <div class="entry">
        <label>From:</label>&nbsp;
        <input type="text" name="fromValue" value="<?php echo $fromValue; ?>">&nbsp;
        <select name="fromUnit">
          <option value="bucket" <?php if($fromUnit == 'bucket') { echo " selected"; } ?>>Bucket</option>
          <option value="butt" <?php if($fromUnit == 'butt') { echo " selected"; } ?>>Butt</option>
          <option value="firkin" <?php if($fromUnit == 'firkin') { echo " selected"; } ?>>Firkin</option>
          <option value="hogshead" <?php if($fromUnit == 'hogshead') { echo " selected"; } ?>>Hogshead</option>
          <option value="pint" <?php if($fromUnit == 'pint') { echo " selected"; } ?>>Pint</option>
          <option value="gallons" <?php if($fromUnit == 'gallons') { echo " selected"; } ?>>Gallons</option>
        </select>
      </div>
      
      
      <div class="entry">
        <label>To:</label>&nbsp;
        <input type="text" name="toValue" value="<?php echo $toValue; ?>">&nbsp;
        <select name="toUnit">
          <option value="bucket" <?php if($toUnit == 'bucket') { echo " selected"; } ?>>Buckets</option>
          <option value="butt" <?php if($toUnit == 'butt') { echo " selected"; } ?>>Butts</option>
          <option value="firkin" <?php if($toUnit == 'firkin') { echo " selected"; } ?>>Firkins</option>
          <option value="hogshead" <?php if($toUnit == 'hogshead') { echo " selected"; } ?>>Hogshead</option>
          <option value="pint" <?php if($toUnit == 'pint') { echo " selected"; } ?>>Pints</option>
          <option value="gallons" <?php if($toUnit == 'gallons') { echo " selected"; } ?>>Gallons</option>
        </select>
      </div>

      <input type="submit" name="submit" value="Submit">
    <a href="index.php">Return to menu</a>
    </form>

  </div>

  <?php include_once 'includes/footer.php'; ?>

</body>
</html>

