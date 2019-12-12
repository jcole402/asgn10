<?php

const liquid_Measurement_To_Imperial_Gallons = array (
  "bucket" => 4,
  "butt" => 108,
  "firkin" => 9,
  "hogshead" => 54,
  "gallons" => 1,
  "pint" => 0.125
  
  );

const length_To_OutDated_Measurement = array (
  "grain" => 7,
  "thumbLength" => 2.1,
  "palm" => 3.3,
  "fist" => 10.4,
  "foot" => 25,
  "step" => 62.5,
  "doubleStep" => 1500,
  "rod" => 3000
  
  );
  

function convert_to_gallons($value, $fromUnit) {
   if(array_key_exists($fromUnit, liquid_Measurement_To_Imperial_Gallons)) {
     return $value * round(liquid_Measurement_To_Imperial_Gallons[$fromUnit] ,2);
   }  else {
      return "Unsupported unit.";
  }
}

function convert_from_gallons($value, $toUnit) {
   if(array_key_exists($toUnit, liquid_Measurement_To_Imperial_Gallons)) {
     return $value / round(liquid_Measurement_To_Imperial_Gallons[$toUnit] ,2);
   }  else {
      return "Unsupported unit.";
  }
}

function convert_measurement($value, $fromUnit, $toUnit) 
 {
  $meterValue = convert_to_gallons($value, $fromUnit);
  $newValue = convert_from_gallons($meterValue, $toUnit);
  return round($newValue, 2);
}

function convert_to_centimeters($value, $fromUnit) {
   if(array_key_exists($fromUnit, length_To_OutDated_Measurement)) {
     return $value * round(length_To_OutDated_Measurement[$fromUnit] ,2);
   }  else {
      return "Unsupported unit.";
  }
}

function convert_from_centimeters($value, $toUnit) {
   if(array_key_exists($toUnit, length_To_OutDated_Measurement)) {
     return $value / round(length_To_OutDated_Measurement[$toUnit] ,2);
   }  else {
      return "Unsupported unit.";
  }
}

function convert_length($value, $fromUnit, $toUnit) 
 {
  $meterValue = convert_to_centimeters($value, $fromUnit);
  $newValue = convert_from_centimeters($meterValue, $toUnit);
  return round($newValue, 2);
}

?>