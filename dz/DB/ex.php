 if (is_array($autorArr) and is_array($nameArr) and is_array($isbnArr)){
 	$sumArr = array_merge($nameArr,$isbnArr,$autorArr);
 }
 	elseif (is_array($autorArr) and is_array($nameArr)) {
 		$sumArr = array_merge($autorArr,$nameArr);
 	} 
 		elseif (is_array($autorArr) and is_array($isbnArr)) {
 			$sumArr = array_merge($autorArr,$isbnArr);
 		}	
 			elseif (is_array($nameArr) and is_array($isbnArr)) {
 				 $sumArr = array_merge($nameArr,$isbnArr);
 			} 
 	//  $end[] = array_unique($sumArr);
 	// var_dump($end);
 			var_dump($sumArr);

 			 	// var_dump($isbnArr);
 	// var_dump($nameArr);
 	// var_dump($autorArr);
 	// if (is_array($autorArr) and is_array($isbnArr)) {
 	// 	$ferstRes = array_intersect($autorArr,$isbnArr);
 	// }
 	// var_dump($ferstRes);
if (is_array($autorArr) and is_array($nameArr) and is_array($isbnArr)){
 	$sumArr = array_merge($nameArr,$isbnArr,$autorArr);
 }
 	elseif (is_array($autorArr) and is_array($nameArr)) {
 		$sumArr1 = array_merge($autorArr,$nameArr);
 		$sumArr = array_intersect($autorArr,$nameArr);
 	} 
 		elseif (is_array($autorArr) and is_array($isbnArr)) {
 			$sumArr2 = array_merge($autorArr,$isbnArr);
 		}	
 			elseif (is_array($nameArr) and is_array($isbnArr)) {
 				 $sumArr3 = array_merge($nameArr,$isbnArr);
 			} 
 	//  $end[] = array_unique($sumArr);
 	// var_dump($end);
 			var_dump($sumArr1);