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