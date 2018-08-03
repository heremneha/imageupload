<?php
$cars=array("bmw","naino","santro");
echo 'fouond'. count($cars);
?>
<?php
$vehicle = ['Car ', ' Motorcycle', ' Bicycle '];
$trimmed = array_map('trim', $vehicle);
echo '<pre>';
print_r($vehicle); print_r($trimmed);
?>
<?php
function toUpper($array_value) {
return strtoupper($array_value);
}
$vehicle = ['Car', 'Motorcycle', 'Bicycle'];
$upper = array_map('toUpper', $vehicle);
echo '<pre>'; 
print_r($upper);
?>
<?php
$vehicle = ['Car', 'Motorcycle', 'Bicycle', 'Truck', 'Bus'];
if (in_array('Motorcycle', $vehicle))
{
echo 'Exists';
}
?>
<?php
$car = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
if (key_exists('type', $car))
{
echo $car['type']; 
}
?>
<?php
$car = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
$keys = array_keys($car);
echo '<pre>';
print_r($keys);
?>
<?php
$car 	= ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
$values = array_values($car);
echo '<pre>'; print_r($values);
?>
<?php
$vehicle = ['Car', 'Motorcycle', 'Bicycle', 'Truck', 'Bus'];
asort($vehicle);
echo '<pre>'; 
print_r($vehicle);
?>
<?php
$car = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
krsort($car);
echo '<pre>'; 
print_r($car);
?>
<?php
$vehicle = ['Car', 'Motorcycle', 'Bicycle', 'Truck', 'Bus'];
$car = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
$merge= array_merge ($vehicle, $car);
echo '<pre>'; print_r($merge);
?>
<?php
$vehicle 	= ['Car', 'Motorcycle', 'Bicycle', 'Truck', 'Bus'];
$car 		= ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
$key = array_search('Vios', $car); 
$key = array_search('Bicycle', $vehicle); 
?>
<?php
$vehicle = ['Car', 'Motorcycle', 'Bicycle', 'Truck', 'Bus'];
$key= array_search('Bicycle', $vehicle); 
unset($vehicle[$key]);
?>
<?php
$title = ['Title 1', 'Title 2', 'Title 3'];
$reversed= array_reverse($title);
echo '<pre>'; 
print_r($reversed);
?>
<?php
$value = [90, 70, 85, 65, 80];
$max = max($value);
$min = min($value);
echo $max;
echo $min;
?>
<?php
$title = ['Title 1', 'Title 2', 'Title 3'];
$reversed= array_reverse($title);
echo '<pre>'; 
print_r($reversed);
?> 
<?php
$vehicle 	= ['Car', 'Motorcycle', 'Bicycle'];
$pop 		= array_pop ($vehicle);
echo $pop; 
echo '<pre>';
print_r($vehicle);
?>
<?
$keys = ['sky', 'grass', 'orange'];
$values = ['blue', 'green', 'orange'];
$array = array_combine($keys, $values);
print_r($array);
?>