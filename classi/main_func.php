<?php
class mainFunc {

	public static function gab_tots($str) {
		// YYYYMMDD to unix timestamp
		if ($str=='') return 0;
		return mktime(0,0,0,(int)substr($str,4,2),(int)substr($str,6,2),(int)substr($str,0,4));
	}

	public static function gab_weektotag($w) {

		$tag=array('Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato');

		return $tag[$w];
	}

	public static function gab_monthtotag($m) {

		$mesi=array('Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre');

		return $mesi[$m];
	}
	
	public static function gab_todb($str) {
		// DD-MM-YYYY to YYYYMMDD 
		if ($str=='') return $str;
		return substr($str,6,4).substr($str,3,2).substr($str,0,2);
	}

	public static function gab_input_to_db($str) {
		// YYYY-MM-DD to YYYYMMDD 
		if ($str=='') return $str;
		return substr($str,0,4).substr($str,5,2).substr($str,8,2);
	}
	
	public static function gab_todata($str) {
		// YYYYMMDD to DD/MM/YYYY
		if ($str=='') return $str;
		return substr($str,6,2)."/".substr($str,4,2)."/".substr($str,0,4);
	}
	
	public static function gab_toinput($str) {
		// YYYYMMDD to YYYY-MM-DD
		if ($str=='') return $str;
		//return substr($str,6,2)."-".substr($str,4,2)."-".substr($str,0,4);
		return substr($str,0,4)."-".substr($str,4,2)."-".substr($str,6,2);
	}
	
	public static function gab_stringtomin($str) {
		// HH:MM to minuti totali
		if ($str=='') return 0;
		return ((int)substr($str,0,2)*60)+(int)substr($str,3,2);
	}
	
	public static function gab_mintostring($min) {
		// minuti to HH:MM
		$h=floor($min/60);
		$m=$min-($h*60);
		
		$str="";
		
		if ($h<10) $str.='0';
		$str.=$h.':';
		if ($m<10) $str.="0";
		$str.=$m;
		
		return $str;
	}

	public static function gab_delta_min($t1,$t2) {
		//$t2>$t1 (HH:MM)
		//restituisce differenza in minuti
		
		$i=explode(':',$t1);
        $f=explode(':',$t2);

        $delta=((int)$f[0]*60+(int)$f[1])-((int)$i[0]*60+(int)$i[1]);

		return $delta;
	}
	
	public static function gab_delta_tempo ($d1,$d2,$unita) {
		//d2>d1 (YYYYMMDD)
	 
	 	$data1 = strtotime(substr($d1,0,4).'-'.substr($d1,4,2).'-'.substr($d1,6,2));
	 	$data2 = strtotime(substr($d2,0,4).'-'.substr($d2,4,2).'-'.substr($d2,6,2));
	 
		switch($unita) {
			case "s": $unita = 1/3600; break;	//SECONDI
			case "m": $unita = 1/60; break; 	//MINUTI
			case "h": $unita = 1; break;		//ORE
			case "g": $unita = 24; break;		//GIORNI
			case "a": $unita = 8760; break;     //ANNI
		}
	 
	 	$differenza = round((($data2-$data1)/3600)/$unita);
	 	return $differenza;
	}
	
	public static function gab_delta_tempo_2 ($d1,$d2,$unita) {
		//d2>d1
		//AAAAMMDD:HH:MM:SS
	 
	 	$data1 = strtotime(substr($d1,0,4).'-'.substr($d1,4,2).'-'.substr($d1,6,2).' '.substr($d1,9,8));
	 	$data2 = strtotime(substr($d2,0,4).'-'.substr($d2,4,2).'-'.substr($d2,6,2).' '.substr($d2,9,8));
	 
		switch($unita) {
			case "s": $unita = 1/3600; break;	//SECONDI
			case "m": $unita = 1/60; break; 	//MINUTI
			case "h": $unita = 1; break;		//ORE
			case "g": $unita = 24; break;		//GIORNI
			case "a": $unita = 8760; break;     //ANNI
			case "ut" : $unita = 1/100; break;	//UT
		}
	 
	 	$differenza = round((($data2-$data1)/3600)/$unita);
	 	return $differenza;
	}

	public static function gab_delta_tempo_c($d1,$d2,$unita) {
		//d2>d1
		//AAAAMMDD:HH:MM:SS
	 
	 	$data1 = strtotime(substr($d1,0,4).'-'.substr($d1,4,2).'-'.substr($d1,6,2).' '.substr($d1,9,8));
	 	$data2 = strtotime(substr($d2,0,4).'-'.substr($d2,4,2).'-'.substr($d2,6,2).' '.substr($d2,9,8));
	 
		switch($unita) {
			case "s": $unita = 1/3600; break;	//SECONDI
			case "m": $unita = 1/60; break; 	//MINUTI
			case "h": $unita = 1; break;		//ORE
			case "g": $unita = 24; break;		//GIORNI
			case "a": $unita = 8760; break;     //ANNI
			case "ut" : $unita = 1/100; break;	//UT
		}
	 
		$differenza = floor((($data2-$data1)/3600)/$unita);
		if ($differenza<0) $differenza=0;

	 	return $differenza;
	}

	public static function replace_unicode_escape_sequence($match) {
		return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
	}

	public static function unicode_decode($str) {
		return preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'mainFunc::replace_unicode_escape_sequence', $str);
	}

	public static function nebulaIncludePart($file,$separator,$tag,$index) {
		//separa un file PHP in più blocchi in base alla stringa separatrice
		//poi seleziona il blocco $index in base al blocco //<$tag>$index</$tag> contenuto nel file
		//e restituisce il blocco

		$txt_file = file_get_contents($file);
		$blocks = explode($separator, $txt_file);
		//toglie il primo array con il tag "<?php"
		array_shift($blocks);

		$len=strlen($tag);

		//$log=array();

		foreach ($blocks as $b) {
			$tempVar="";
			$tagStart=strpos($b,'<'.$tag.'>')+$len+2;
			$tagEnd=strpos($b,'</'.$tag.'>');
			$tempVar=substr( $b,$tagStart,($tagEnd-$tagStart) );
			
			//$log[]=$tempVar;
			//$log[]=$tagStart;
			//$log[]=$tagEnd;
			if ($tempVar==$index) return $b;
		}

		//return $log;

	}
	

	//////////////////////////////////////////////////////////////////
	// Controllo dei parametri che arrivano dal browser (link o chiamate ajax):
	// si accettano solo valori noti, tutto il resto viene scartato.

	// Data YYYYMMDD esistente e dentro l'intervallo del navigatore (1999-2100);
	// 'xxxxxxxx' vuol dire oggi. Restituisce '' se il valore non è valido.
	public static function param_today($v) {
		if (!is_string($v)) return '';
		if ($v=='xxxxxxxx') return date('Ymd');
		if (!preg_match('/^(\d{4})(\d{2})(\d{2})$/',$v,$m)) return '';
		if (!checkdate((int)$m[2],(int)$m[3],(int)$m[1])) return '';
		if ($v<'19990101' || $v>'21001231') return '';
		return $v;
	}

	// Opzioni della preghiera: ora, memoria scelta, invitatorio, mix, contesto.
	public static function param_config($c) {
		$res=array();
		if (!is_array($c)) return $res;

		$ore=array('lodi','terza','sesta','nona','ves','ves1','ves2','comp','comp1');
		if (isset($c['ora']) && in_array($c['ora'],$ore,true)) $res['ora']=$c['ora'];
		//celebrazioni spostate: Primi Vespri o Compieta di domani ('ves1|codice', 'comp1|codice'), oppure Vespri e Compieta del giorno ('ves|feria', 'comp|feria')
		elseif (isset($c['ora']) && is_string($c['ora']) && preg_match('/^(ves|ves1|ves2|comp|comp1)\|[A-Za-z0-9]{1,12}$/',$c['ora'])) $res['ora']=$c['ora'];

		if (isset($c['festa'])) {
			$res['festa']=(is_string($c['festa']) && preg_match('/^[A-Za-z0-9]{1,12}$/',$c['festa']))?$c['festa']:'';
		}

		foreach (array('inv','mix') as $k) {
			if (isset($c[$k])) $res[$k]=($c[$k]=='1')?1:0;
		}

		if (isset($c['contesto']) && in_array($c['contesto'],array('solo','comune','prete'),true)) $res['contesto']=$c['contesto'];

		return $res;
	}

}
?>	