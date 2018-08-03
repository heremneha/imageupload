<?php
$vehicle = ['Car', 'Motorcycle', 'Bicycle', 'Truck', 'Bus'];
$key 	 = array_search('Bicycle', $vehicle); 
unset($vehicle[$key]);
?>
