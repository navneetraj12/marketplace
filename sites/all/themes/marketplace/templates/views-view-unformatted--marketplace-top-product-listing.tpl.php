<?php 
$i = 0;
print '<div class="product-carousel">';
foreach ($rows as $id => $row){ 
	$i++;
	if($i == 6) {
   if(arg(0) == 'all-category') {
     break;
   }
   else{
		  print '</div><div class="product-carousel">';
   }
	}
	print $row;

}
print '</div>';
?>
      