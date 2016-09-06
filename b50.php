<?php
	function num_encode($num) {
		$list_char_min = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$list_char_maj = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
		
		$encode = '';
		
		if(($num >= 1) && ($num <= 9)) {
			$encode .= $num;
		} elseif(($num >= 10) && ($num <= 35)) {
			$encode .= $list_char_min[$num-10];
		} elseif(($num >= 36) && ($num <= 50)) {
			$encode .= $list_char_maj[$num-36];
		} else {
			$encode .= '-';
		}

		return($encode);
	}
	
	function EuroM_encode($num1, $num2, $num3, $num4, $num5) {
		$num = array($num1, $num2, $num3, $num4, $num5);
		$list_char_min = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$list_char_maj = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
		
		sort($num);
		
		$encode = '';
		
		foreach($num as $n) {
			if(($n >= 1) && ($n <= 9)) {
				$encode .= $n;
			} elseif(($n >= 10) && ($n <= 35)) {
				$encode .= $list_char_min[$n-10];
			} elseif(($n >= 36) && ($n <= 50)) {
				$encode .= $list_char_maj[$n-36];
			} else {
				$encode .= '-';
			}
		}
		
		return($encode);
	}
	
	function Stars_encode($num1, $num2) {
		$num = array($num1, $num2);
		$list_char_min = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		
		sort($num);
		
		$encode = '';
		
		foreach($num as $n) {
			if(($n >= 1) && ($n <= 9)) {
				$encode .= $n;
			} elseif(($n >= 10) && ($n <= 35)) {
				$encode .= $list_char_min[$n-10];
			} else {
				$encode .= '-';
			}
		}
		
		return($encode);
	}
	
?>