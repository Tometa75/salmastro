<?php
require_once ('salmo.php');

class Salmodia {

    protected $litio;
    protected $actual;
    protected $salmi=array();
    protected $res=array();
    protected $festa=array();

    protected $festivi=array(
        "ves"=>array(
            array('1','S','109','','G'),
            array('2','S','110','','G'),
            array('3','S','111','','G'),
            array('4','S','112','','G'),
            array('5','C','NT11','','G')
        ),
        "lodiD"=>array(
            array('1','S','92','','G'),
            array('2','S','99','','G'),
            array('3','S','62','','G'),
            array('4','C','AT47','','G'),
            array('5','S','150','','G')
        ),
        "lodiP"=>array(
            array('1','S','92','','G'),
            array('2','S','99','','G'),
            array('3','S','62','','G'),
            array('4','C','AT48','','G'),
            array('5','S','150','','G')
        )
    );

    function __construct($caller) {

        $this->litio=$caller;
        $this->actual=$caller->actual;

        $this->init();
        $this->build();
    }

    function init() {

        //definizione dei salmi del salterio in base al giorno ed alla settimana
        /*array (
            'posizione' Es: '1' **** se '' significa che il salmo è accodato al precedente
            'S' salmo , 'C' cantico
            'tag' es: '65'
            'parte' es:'1,2,3'
            'G' = gloria / '' = senza gloria
        )*/
        //definizione dei salmi in base a feste ed eventi
        //build dei salmi e definizione delle antifone e delle parti

        if ($this->actual['weekDay']==0) {
            switch ($this->actual['ora']) {
                case 'ves1': 
                    $this->salmi=array(
                        array('1','S','65','','G'),
                        array('2','S','19','','G'),
                        array('3','S','20','','G'),
                        array('4','S','137','','G'),
                        array('5','C','NT11','','G')
                    );
                break;
                case 'comp1': 
                    $this->salmi=array(
                        array('1','S','14','','G'),
                        array('2','S','16','','G'),
                        array('3','S','15','','G')
                    );
                break;
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','92','','G'),
                        array('2','S','3','','G'),
                        array('3','S','29','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT47','','G');
                    else $this->salmi[]=array('4','C','AT48','','G');
                    
                    $this->salmi[]=array('5','S','146','','');
                    $this->salmi[]=array('','S','147','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','1,2,3,4','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','117','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','135','','G')
                    );
                break;
                case 'ves2': 
                    $this->salmi=array(
                        array('1','S','112','','G'),
                        array('2','S','113A','','G'),
                        array('3','S','113B','','G'),
                        array('4','S','114','',''),
                        array('','S','115','','G')
                    );

                    if ($this->actual['tempo']=='Q') $this->salmi[]=array('5','C','NT18','','G');
                    else $this->salmi[]=array('5','C','NT22','','G');
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','4','','G'),
                        array('2','S','90','','G'),
                        array('3','S','133','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==1) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','99','','G'),
                        array('2','S','62','','G'),
                        array('3','S','100','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT4','','G');
                    else $this->salmi[]=array('4','C','AT16','','G');
                    
                    $this->salmi[]=array('5','S','134','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','5,6,7','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','24','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','119','','G'),
                        array('2','S','120','','G'),
                        array('3','S','121','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','32','','G'),
                        array('2','S','60','','G'),
                        array('3','S','27','','G'),
                        array('4','S','47','','G'),
                        array('5','C','NT10','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','33','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==2) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','97','','G'),
                        array('2','S','89','','G'),
                        array('3','S','64','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT5','','G');
                    else $this->salmi[]=array('4','C','AT26','','G');
                    
                    $this->salmi[]=array('5','S','116','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','8,9,10','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','41','',''),
                        array('','S','42','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','122','','G'),
                        array('2','S','123','','G'),
                        array('3','S','124','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','74','','G'),
                        array('2','S','139','','G'),
                        array('3','S','25','','G'),
                        array('4','S','144','','G'),
                        array('5','C','NT19','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','138','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==3) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','96','','G'),
                        array('2','S','35','','G'),
                        array('3','S','56','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT7','','G');
                    else $this->salmi[]=array('4','C','AT3','','G');
                    
                    $this->salmi[]=array('5','S','149','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','11,12,13','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','43','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','125','','G'),
                        array('2','S','126','','G'),
                        array('3','S','127','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','102','','G'),
                        array('2','S','85','','G'),
                        array('3','S','84','','G'),
                        array('4','S','86','','G'),
                        array('5','C','NT12','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','31','','G'),
                        array('2','S','61','','G'),
                        array('3','S','132','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==4) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','46','','G'),
                        array('2','S','75','','G'),
                        array('3','S','5','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT43','','G');
                    else $this->salmi[]=array('4','C','AT22','','G');
                    
                    $this->salmi[]=array('5','S','148','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','14,15,16','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','54','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','128','','G'),
                        array('2','S','129','','G'),
                        array('3','S','130','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','110','','G'),
                        array('2','S','22','','G'),
                        array('3','S','83','','G'),
                        array('4','S','39','','G'),
                        array('5','C','NT20','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','101','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==5) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','95','','G'),
                        array('2','S','50','','G'),
                        array('3','S','63','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT31','','G');
                    else $this->salmi[]=array('4','C','AT52','','G');
                    
                    $this->salmi[]=array('5','S','145','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','17,18,19','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','21','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','10','','G'),
                        array('2','S','11','','G'),
                        array('3','S','12','','G')
                    );
                break;
                case 'ves': 
                    $this->salmi=array(
                        array('1','S','143','','G'),
                        array('2','S','140','','G'),
                        array('3','S','141','','G'),
                        array('4','S','26','','G'),
                        array('5','C','NT21','','G')
                    );
                break;
                case 'comp': 
                    $this->salmi=array(
                        array('1','S','30','','G')
                    );
                break;
            }
        }

        elseif ($this->actual['weekDay']==6) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    $this->salmi=array(
                        array('1','S','98','','G'),
                        array('2','S','142','','G'),
                        array('3','S','91','','G')
                    );

                    if ((int)$this->actual['settimana']%2!=0) $this->salmi[]=array('4','C','AT1','','G');
                    else $this->salmi[]=array('4','C','AT2','','G');
                    
                    $this->salmi[]=array('5','S','150','','G');
                break;
                case 'terza': 
                    $this->salmi=array(
                        array('1','S','118','20,21,22','G')
                    );
                break;
                case 'sesta': 
                    $this->salmi=array(
                        array('1','S','34','','G')
                    );
                break;
                case 'nona': 
                    $this->salmi=array(
                        array('1','S','51','','G'),
                        array('2','S','13','','G'),
                        array('3','S','53','','G')
                    );
                break;
            }
        }

        /////////////////////////////////////////////////////////////////////////////
        if (substr($this->actual['today'],4,4)=='1225') {
            if ($this->actual['ora']=='ves1') $this->salmi=$this->festivi['ves'];
            if ($this->actual['ora']=='lodi') $this->salmi=$this->festivi['lodiD'];
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2' ) {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','129','','G'),
                    array('5','C','NT12','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='1226a') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','129','','G'),
                    array('5','C','NT12','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='1227a') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','129','','G'),
                    array('5','C','NT12','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='1228a') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','129','','G'),
                    array('5','C','NT12','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='SAF') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','112','','G'),
                    array('3','S','121','','G'),
                    array('4','S','126','','G'),
                    array('5','C','NT10','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='MSS') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','112','','G'),
                    array('3','S','121','','G'),
                    array('4','S','126','','G'),
                    array('5','C','NT10','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='EPI') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT14','','G')
                );
            }
            if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT21','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='BAT') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT14','','G')
                );
            }
            if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT21','','G')
                );
            }
        }

        /////////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['evCode']=='SS4') {
            if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','115','','G'),
                    array('2','S','119','','G'),
                    array('3','S','139','','G'),
                    array('4','S','140','','G'),
                    array('5','C','NT11','','G')
                );
            }
        }
        elseif ($this->actual['evCode']=='SS5') {
            if ($this->actual['ora']=='lodi') {
                $this->salmi=array(
                    array('1','S','50','','G'),
                    array('2','S','142','','G'),
                    array('3','S','84','','G'),
                    array('4','C','AT52','','G'),
                    array('5','S','147','','G')
                    
                );
            }
            if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','115','','G'),
                    array('2','S','119','','G'),
                    array('3','S','139','','G'),
                    array('4','S','140','','G'),
                    array('5','C','NT11','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='SS6') {
            if ($this->actual['ora']=='lodi') {
                $this->salmi=array(
                    array('1','S','50','','G'),
                    array('2','S','91','','G'),
                    array('3','S','63','','G'),
                    array('4','C','AT26','','G'),
                    array('5','S','150','','G')
                    
                );
            }
            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','115','','G'),
                    array('2','S','119','','G'),
                    array('3','S','139','','G'),
                    array('4','S','140','','G'),
                    array('5','C','NT11','','G')
                    
                );
            }
        }

        elseif ($this->actual['evCode']=='PAS' || substr($this->actual['evCode'],0,3)=='PA1' || $this->actual['evCode']=='PA2') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','115','','G'),
                    array('2','S','119','','G'),
                    array('3','S','139','','G'),
                    array('4','S','140','','G'),
                    array('5','C','NT11','','G')                  
                );
            }

            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=$this->festivi['ves'];
            }
        }

        elseif ($this->actual['evCode']=='PA3' || $this->actual['evCode']=='PA4' || $this->actual['evCode']=='PA5' || $this->actual['evCode']=='PA6') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['evCode']=='ASC') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT20','','G')                  
                );
            }
        }

        elseif ($this->actual['evCode']=='PEN') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            elseif ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT21','','G')                  
                );
            }
            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT22','','G')                  
                );
            }
        }

        ///////////////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['evCode']=='TRI') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT10','','G')
                );
            }
            if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT22','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='COD') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','115','','G'),
                    array('4','S','147','','G'),
                    array('5','C','NT20','','G')
                );
            }
            if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','115','','G'),
                    array('4','S','147','','G'),
                    array('5','C','NT22','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='SCG') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','129','','G'),
                    array('5','C','NT19','','G')
                );
            }
            if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','129','','G'),
                    array('5','C','NT11','','G')
                );
            }
        }

        elseif ($this->actual['evCode']=='GRE') {
            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
            if ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT19','','G')
                );
            }
            if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT22','','G')
                );
            }
        }

        //###################################################################################
        //presentazione del Signore
        if ($this->actual['evCode']=='0202a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ( ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT12','','G')
                );
            }
        }

        if ($this->actual['evCode']=='0210a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ( $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','112','','G'),
                    array('3','S','121','','G'),
                    array('4','S','126','','G'),
                    array('5','C','NT10','','G')
                );
            }
        }

        if ($this->actual['evCode']=='0319a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ( $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=$this->festivi['ves'];
            }
        }

        if ($this->actual['evCode']=='0321a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','115','','G'),
                    array('5','C','NT22','','G')
                );
            }

            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','115','','G'),
                    array('5','C','NT19','','G')
                );
            }
        }

        if ($this->actual['evCode']=='0325a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT12','','G')
                );
            }
        }

        if ($this->actual['evCode']=='0624a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT22','','G')
                );
            }

            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT21','','G')
                );
            }
        }

        if ($this->actual['evCode']=='0629a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT10','','G')
                );
            }

            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','112','','G'),
                    array('3','S','115','','G'),
                    array('4','S','138','','G'),
                    array('5','C','NT10','','G')
                );
            }
        }

        if ($this->actual['evCode']=='0711a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','115','','G'),
                    array('5','C','NT22','','G')
                );
            }

            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','115','','G'),
                    array('5','C','NT19','','G')
                );
            }
        }

        if ($this->actual['evCode']=='0806a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT22','','G')
                );
            }

            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT14','','G')
                );
            }
        }

        if ($this->actual['evCode']=='0815a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','112','','G'),
                    array('3','S','121','','G'),
                    array('4','S','126','','G'),
                    array('5','C','NT10','','G')
                );
            }
        }

        if ($this->actual['evCode']=='0914a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT11','','G')
                );
            }

            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT19','','G')
                );
            }
        }

        if ($this->actual['evCode']=='1101a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT22','','G')
                );
            }

            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT19','','G')
                );
            }
        }

        if ($this->actual['evCode']=='1208a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','112','','G'),
                    array('3','S','121','','G'),
                    array('4','S','126','','G'),
                    array('5','C','NT10','','G')
                );
            }

        }

        /////////////////////////////////////////////////////////////////////////////////////////
        //FESTE
        /////////////////////////////////////////////////////////////////////////////////////////
        if ($this->actual['fesCode']=="") return;

        /*foreach($this->actual['festa'] as $k=>$f) {
            $this->festa=$f;
        }*/

        $this->festa=$this->actual['festa'][$this->actual['fesCode']];

        if ($this->festa['comune']=='pastori' || $this->festa['comune']=='dottori') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','131','','G'),
                    array('5','C','NT21','','G')
                );
            }
        }

        elseif ($this->festa['comune']=='monaci') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ( ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') && $this->actual['tempo']=='Q') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','115','','G'),
                    array('5','C','NT21','','G')
                );
            }
            elseif ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','131','','G'),
                    array('5','C','NT22','','G')
                );
            }
            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','131','','G'),
                    array('5','C','NT19','','G')
                );
            }
        }

        elseif ($this->festa['comune']=='martiri') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT18','','G')
                );
            }
            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','115','','G'),
                    array('5','C','NT19','','G')
                );
            }
        }

        elseif ($this->festa['comune']=='martire') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves1') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','115','','G'),
                    array('5','C','NT18','','G')
                );
            }
            elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','111','','G'),
                    array('3','S','112','','G'),
                    array('4','S','115','','G'),
                    array('5','C','NT19','','G')
                );
            }
        }

        elseif ($this->festa['comune']=='vergini') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','112','','G'),
                    array('3','S','121','','G'),
                    array('4','S','126','','G'),
                    array('5','C','NT10','','G')
                );
            }
        }

        elseif ($this->festa['comune']=='santi' || $this->festa['comune']=='religiosi') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves1') {
                $this->salmi=$this->festivi['ves'];
            }

            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','111','','G'),
                    array('4','S','112','','G'),
                    array('5','C','NT21','','G')
                );
            }
        }

        elseif ($this->festa['comune']=='apostoli') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves1') {
                $this->salmi=$this->festivi['ves'];
            }

            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','112','','G'),
                    array('3','S','115','','G'),
                    array('4','S','138','','G'),
                    array('5','C','NT10','','G')
                );
            }
        }

        elseif ($this->festa['comune']=='sante' || $this->festa['comune']=='religiose') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','121','','G'),
                    array('3','S','126','','G'),
                    array('4','S','147','','G'),
                    array('5','C','NT10','','G')
                );
            }
        }

        elseif ($this->festa['comune']=='dedica') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            elseif ( ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') && $this->actual['tempo']=='Q') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','112','','G'),
                    array('4','S','147','','G'),
                    array('5','C','NT21','','G')
                );
            }

            elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','110','','G'),
                    array('3','S','112','','G'),
                    array('4','S','147','','G'),
                    array('5','C','NT22','','G')
                );
            }
        }

        elseif ($this->festa['comune']=='BVM') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','112','','G'),
                    array('3','S','121','','G'),
                    array('4','S','126','','G'),
                    array('5','C','NT10','','G')
                );
            }
        }

        elseif ($this->festa['comune']=='DEF') {

            if ($this->actual['ora']=='lodi') {
                $this->salmi=array(
                    array('1','S','50','','G'),
                    array('2','S','64','','G'),
                    array('3','S','62','','G'),
                    array('4','C','AT26','','G'),
                    array('5','S','150','','G')
                );
            }

            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','114','','G'),
                    array('2','S','119','','G'),
                    array('3','S','120','','G'),
                    array('4','S','129','','G'),
                    array('5','C','NT11','','G')
                );
            }
        }

        //###########################################################################

        if ($this->actual['fesCode']=='0115a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0121a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0125a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0214a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0222a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0425a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0503a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0511a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0531a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0722a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0725a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0726a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0729a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0810a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0829a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0903a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0908a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='0929a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }

            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=$this->festivi['ves'];
            }
        }

        elseif ($this->actual['fesCode']=='1002a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='1007a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='1018a') {

            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->salmi=array(
                    array('1','S','109','','G'),
                    array('2','S','112','','G'),
                    array('3','S','115','','G'),
                    array('4','S','138','','G'),
                    array('5','C','NT10','','G')
                );
            }
        }

        elseif ($this->actual['fesCode']=='1111a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='1113a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='1116a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

        elseif ($this->actual['fesCode']=='1130a') {

            if ($this->actual['ora']=='lodi') {
                if ((int)$this->actual['settimana']%2!=0) $this->salmi=$this->festivi['lodiD'];
                else $this->salmi=$this->festivi['lodiP'];
            }
        }

    }

    function build() {

        foreach ($this->salmi as $k=>$s) {
            $this->res[$k]=new Salmo($this->litio,$s);

            //////////////////////////////////////////////////////////////////////////
            //modifica ANTIFONE in base al TEMPO LITURGICO

            if ($this->actual['tempo']=='A') {

                if (substr($this->actual['today'],4,4)>='1224' && $this->actual['ora']=='lodi') {
                    switch ($s[0]) {
                        case 1: $this->res[$k]->setAntifona(array(
                            "Giudea",
                            "e Gerusalemme, non temete: domani sarete liberati e il Signore sarà con voi, alleluia."
                        ));
                        break;
                        case 2: $this->res[$k]->setAntifona(array(
                            "Tu, Betlemme,",
                            "non sei l'ultima borgata di Giudea; da te uscirà un capo, il pastore d'Israele mio popolo."
                        ));
                        break;
                        case 3: $this->res[$k]->setAntifona(array(
                            "Oggi saprete",
                            "che il Signore viene: col nuovo giorno vedrete la sua gloria."
                        ));
                        break;
                        case 4: $this->res[$k]->setAntifona(array(
                            "Viene il Signore:",
                            "corretegli incontro acclamando: Grande è il suo potere, il suo regno non avrà fine; è Dio, il Forte, il Signore, il Principe della pace, alleluia."
                        ));
                        break;
                        case 5: $this->res[$k]->setAntifona(array(
                            "Domani",
                            "verrà la vostra salvezza, dice il Signore, Dio dell'universo."
                        ));
                        break;
                    }
                }

                elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves' || $this->actual['ora']=='lodi') {

                    if ($this->actual['evCode']=='AV1') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Quel giorno",
                                "le montagne stilleranno vino nuovo, latte e miele scorrerà per le colline, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Rallegrati,",
                                "città di Dio; grida di gioia, Gerusalemme, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "il Signore viene e con lui tutti i suoi santi: quel giorno brillerà una grande luce, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Venite alla sorgente,",
                                "voi che avete sete; cercate il Signore: ora si fa trovare, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "verrà il grande Profeta, e rinnoverà Gerusalemme, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['evCode']=='AV2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Verrà",
                                "il Signore sulle nubi del cielo, con grande potenza, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Tu nostra forza,",
                                "città di Dio! Il Salvatore sarà per te muro e baluardo: aprite le porte, il Signore è con noi, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "il Signore verrà; se ritarda, attendilo con fiducia: egli non mancherà, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Montagne e colline",
                                "canteranno a Dio, alberi e foreste applaudiranno: viene il Signore, il Dominatore, e regnerà in eterno, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Verrà",
                                "con potenza il Signore, e sarà luce ai nostri occhi, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['evCode']=='AV3') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Viene",
                                "il Signore, non tarderà: farà luce nel segreto delle tenebre, apparirà a tutte le nazioni, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Esulta di gioia,",
                                "Gerusalemme: viene a te il Salvatore, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "In Sion",
                                "darò la salvezza, stabilirò in Gerusalemme la mia gloria, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Montagne e colline",
                                "si abbasseranno, le vie tortuose si faranno dritte. Vieni, Signore, non tardare, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "A chi è sfiduciato,",
                                "dite: Coraggio! Viene il Signore nostro Dio."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['evCode']=='AV4') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Suonate",
                                "la tromba in Sion: il giorno del Signore è vicino, egli viene per salvarci, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "l'Atteso dalle nazioni è vicino, la casa del Signore sarà piena di gloria, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Le vie tortuose",
                                "si faranno dritte, le strade scoscese si appianeranno: vieni, Signore, non tardare, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Viene il Signore:",
                                "corretegli incontro acclamando: Grande è il suo potere, il suo regno non avrà fine; è Dio, il Forte, il Signore, il principe della pace, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Dal trono regale",
                                "dal cielo, Signore, verrà la tua Parola onnipotente, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif (substr($this->actual['today'],4,4)>='1217' && substr($this->actual['today'],4,4)<='1223') {

                        switch ($this->actual['weekDay']) {
                            case 1:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "Ecco,",
                                        "viene il Signore, il Re dei re della terra: beato chi è pronto per andargli incontro."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "Quando",
                                        "il Figlio dell'uomo verrà, troverà ancora fede sulla terra?"
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "È venuta",
                                        "la pienezza dei tempi: Dio manda il suo Figlio sulla terra."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "Attingerete con gioia",
                                        "alle sorgenti della salvezza."
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Dal santuario del cielo",
                                        "esce il Signore: viene a salvare il suo popolo."
                                    ));
                                    break;
                                }
                            break;

                            case 2:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "O cieli,",
                                        "stillate rugiada: le nubi piovano il Giusto; si apra la terra, e germogli il Salvatore."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "Manda, Signore,",
                                        "l'Agnello, Dominatore del mondo; venga dal deserto al monte di Sion."
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "Sulla terra",
                                        "si conosca la tua via, la tua salvezza in tutte le nazioni."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "Ricompensa, Signore,",
                                        "quelli che sperano in te; i tuoi profeti siano degni di fede."
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Da Mosè",
                                        "fu data la legge: da Gesù Cristo la grazia e la verità."
                                    ));
                                    break;
                                }
                            break;

                            case 3:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "I profeti",
                                        "l'avevano annunziato: il Salvatore nascerà dalla Vergine Maria."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "Lo Spirito del Signore",
                                        "è sopra di me: mi ha mandato ad annunziare ai poveri un lieto messaggio."
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "Per amore di Sion",
                                        "non tacerò, finché non sorga la luce del suo Giusto."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "Ecco,",
                                        "il Signore viene: starà fra i capi del suo popolo, sul trono di gloria."
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Date",
                                        "l'annunzio ai popoli: Ecco, Dio viene, il nostro Salvatore."
                                    ));
                                    break;
                                }

                            break;

                            case 4:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "Da Sion",
                                        "viene il Signore onnipotente, viene a salvare il suo popolo."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "Volgiti un poco,",
                                        "Signore, verso di noi, vieni dai tuoi servi, non tardare."
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "Viene da Sion",
                                        "colui che regnerà: il Signore, l'Emmanuele, grande è il suo nome."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "Egli",
                                        "è il mio Dio e lo voglio lodare, è il Dio di mio padre e lo voglio esaltare!"
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Il Signore",
                                        "è nostra legge, il Signore è nostro re: egli viene, ci salverà."
                                    ));
                                    break;
                                }
                                
                            break;

                            case 5:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "Perseverate,",
                                        "e vedrete su di voi l'aiuto del Signore."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "A te, Signore,",
                                        "innalzo l'anima mia: vieni a liberarmi; Signore, in te mi rifugio."
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "Vieni, Signore,",
                                        "non tardare: libera il tuo popolo dai suoi peccati."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "Dio",
                                        "verrà dall'alto, e splenderà come il sole."
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Rivolgo",
                                        "lo sguardo al Signore, aspetto Dio, mio salvatore."
                                    ));
                                    break;
                                }
                                
                            break;

                            case 6:
                                switch ($s[0]) {
                                    case 1: $this->res[$k]->setAntifona(array(
                                        "Contemplate",
                                        "la gloria del Signore: egli entra nel mondo per salvare i popoli."
                                    ));
                                    break;
                                    case 2: $this->res[$k]->setAntifona(array(
                                        "Grande",
                                        "sarà il suo dominio, e la pace non avrà fine."
                                    ));
                                    break;
                                    case 3: $this->res[$k]->setAntifona(array(
                                        "Io, il Signore,",
                                        "mi avvicino: la mia giustizia non è più lontana, la mia salvezza non tarderà."
                                    ));
                                    break;
                                    case 4: $this->res[$k]->setAntifona(array(
                                        "La parola del Signore",
                                        "è attesa come la pioggia; come rugiada scenderà su di noi il nostro Dio."
                                    ));
                                    break;
                                    case 5: $this->res[$k]->setAntifona(array(
                                        "Preparati,",
                                        "o Israele, ad incontrare il Signore: egli viene."
                                    ));
                                    break;
                                }
                                
                            break;
                        }
                    }
                }

                if (substr($this->actual['today'],4,4)=='1224') { 

                    if ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Tu, Betlemme,",
                            "non sei l'ultima borgata di Giudea; da e uscirà un capo, il pastore d'Israele mio popolo."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Oggi saprete",
                            "che il Signore viene: col nuovo giorno vedrete la sua gloria."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Domani",
                            "verrà la vostra salvezza, dice il Signore, Dio dell'universo."
                        ));
                    }
                }

                if  ($this->actual['evCode']=='1208a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Tutta bella sei,",
                                "o Maria, la colpa originale non ti ha sfiorata."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Bianca",
                                "come neve la tua veste, il tuo volto, come il sole."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Tu gloria di Gerusalemme,",
                                "tu letizia d'Israele, tu onore del nostro popolo."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Benedetta sei tu,",
                                "Vergine Maria, dal Signore Dio altissimo, fra tutte le donne della terra."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Ti seguiamo,",
                                "Vergine immacolata, attratti dalla fragranza della tua santità."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Lode",
                            "al Dio vivente: ha realizzato in me il suo disegno di misericordia."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Il Signore",
                            "ha posto in te la sua compiacenza: per te gioirà il tuo Dio."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Nella santità",
                            "Dio mi ha creata: mi ha presa per mano, e mi ha redenta."
                        ));
                    }
                }
            }

            /////////////////////////////////////////////////////////////////////////
            elseif ($this->actual['tempo']=='N') {

                if (substr($this->actual['today'],4,4)=='1225') {
                    if ($this->actual['ora']=='ves1') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il Re della pace",
                                "viene nella gloria: tutta la terra desidera il suo volto."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Risplende di gloria",
                                "il Re della pace sopra tutti i re della terra."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il regno di Dio",
                                "è vicino: siate certi, non tarderà."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Alzatevi",
                                "e levate il capo: la vostra redenzione è vicina"
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "È venuta",
                                "la pienezza dei tempi: Dio manda il suo Figlio sulla terra."
                            ));
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=='lodi') {

                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Pastori,",
                                "chi avete visto? chi è apparso sulla terra? Abbiamo visto un bambino, e gli angeli che lodavano il Signore, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "La Donna",
                                "ha generato l'eterno Re: onore alla Vergine, gloria alla Madre! Come lei non è stata e non sarà nessuna, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "L'angelo",
                                "disse ai pastori: Vi annunzio una gioia grande: oggi è nato per voi il Salvatore del mondo, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Il coro degli angeli",
                                "lodava Dio e cantava: Gloria a Dio nell'alto dei cieli, e pace in terra agli uomini che egli ama, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Oggi",
                                "per noi è nato un bambino: Dio, il Forte, è il suo nome, alleluia."
                            ));
                            break;
                        }
                    }
                    elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2' ) {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "A te il regno",
                                "nel giorno della tua gloria: in splendore e santità Dio ti ha generato prima dell'aurora."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "ha redento il suo popolo: la sua alleanza dura per sempre."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Una luce nelle tenebre",
                                "è sorta per i giusti: il Signore, buono, misericordioso e giusto."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Presso il Signore",
                                "è la misericordia, grande è la sua redenzione."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Cristo,",
                                "nuovo sole del mondo, è Re di luce, di giustizia e di pace."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "La Donna",
                            "ha generato l'eterno Re; onore alla Vergine, gloria alla Madre! Come lei non è stata e non sarà nessuna, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "L'angelo",
                            "disse ai pastori: Vi annunzio una gioia grande: oggi è nato per voi il Salvatore del mondo, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Oggi",
                            "per noi è nato un bambino: Dio, il Forte, è il suo nome, alleluia."
                        ));
                    }
                }

                elseif  ($this->actual['evCode']=='SAF') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "L'angelo Gabriele",
                                "fu inviato alla sposa di Giuseppe, la Vergine Maria."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Lo chiamerai Gesù:",
                                "egli infatti salverà il popolo dai suoi peccati, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "gli darà il trono di Davide suo padre, e regnerà in eterno."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Egli è luce",
                                "che illumina le genti, e gloria del tuo popolo, Israele."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "tornò a Nazareth con i suoi, ed era loro sottomesso."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Da Giacobbe",
                                "nacque Giuseppe, sposo di Maria; da lei è nato Gesù, chiamato il Cristo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ogni anno,",
                                "per la festa di Pasqua, i genitori di Gesù salivano a Gerusalemme."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "tornò a Nazareth: era docile e obbediente a Giuseppe e a Maria."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "cresceva in età, sapienza e grazia davanti a Dio e agli uomini."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "quando incominciò il suo ministero, aveva circa trent'anni ed era figlio, come si credeva, di Giuseppe, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "L'angelo Gabriele",
                            "fu inviato alla sposa di Giuseppe, la Vergine Maria."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Lo chiamerai Gesù:",
                            "egli infatti salverà il popolo dai suoi peccati, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "gli darà il trono di Davide suo padre, e regnerà in eterno."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Egli è luce",
                                "che illumina le genti, e gloria del tuo popolo. Israele."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "tornò a Nazareth con i suoi, ed era loro sottomesso."
                            ));
                            break;
                        }
                    }
                }

                elseif  ($this->actual['evCode']=='1226a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Lapidarono Stefano,",
                                "ed egli pregava il Signore dicendo: Non imputare loro questo peccato."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Dolci",
                                "furono per lui le pietre del torrente: le anime dei giusti gli fanno corona."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "A te",
                                "si stringe l'anima mia, o Dio, mentre il mio corpo è lapidato per te."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Stefano",
                                "vide i cieli aperti, e vi entrò: beato l'uomo, a cui i cielo si schiude."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Vedo",
                                "i cieli aperti, e Gesù alla destra della potenza di Dio."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "A te il regno",
                                "nel giorno della tua gloria: in splendore e santità Dio ti ha generato prima dell'aurora."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "ha redento il suo popolo: la sua alleanza dura per sempre."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Una luce nelle tenebre",
                                "è sorta per i giusti: il Signore, buono, misericordioso e giusto."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Presso il Signore",
                                "è la misericordia, grande è la sua redenzione."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Cristo,",
                                "nuovo sole del mondo, è Re di luce, di giustizia e di pace."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Lapidarono Stefano,",
                            "ed egli pregava il Signore dicendo: Non imputare loro questo peccato."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Dolci",
                            "furono per lui le pietre del torrente: le anime dei giusti gli fanno corona."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "A te",
                                "si stringe l'anima mia, o Dio, mentre il mio corpo è lapidato per te."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Stefano",
                                "vide i cieli aperti, e vi entrò: beato l'uomo, a cui i cielo si schiude."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Vedo",
                                "i cieli aperti, e Gesù alla destra della potenza di Dio."
                            ));
                            break;
                        }
                    }
                }

                elseif  ($this->actual['evCode']=='1227a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Degno di grande onore,",
                                "è l'apostolo Giovanni che durante la cena posò il capo sul petto del Signore."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Questo",
                                "è il discepolo che rende testimonianza, e sappiamo che la sua testimonianza è vera."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Questo",
                                "è il mio discepolo: voglio che egli rimanga finché io venga."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Alcuni tra i presenti",
                                "non morranno finché non vedranno il Figlio dell'uomo venire nel suo regno."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Ecco",
                                "il mio servo che io ho scelto: ho posto il mio Spirito su di lui."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "A te il regno",
                                "nel giorno della tua gloria: in splendore e santità Dio ti ha generato prima dell'aurora."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "ha redento il suo popolo: la sua alleanza dura per sempre."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Una luce nelle tenebre",
                                "è sorta per i giusti: il Signore, buono, misericordioso e giusto."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Presso il Signore",
                                "è la misericordia, grande è la sua redenzione."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Cristo,",
                                "nuovo sole del mondo, è Re di luce, di giustizia e di pace."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Degno di grande onore,",
                            "è l'apostolo Giovanni che durante la cena posò il capo sul petto del Signore."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Questo",
                            "è il discepolo che rende testimonianza, e sappiamo che la sua testimonianza è vera."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Questo",
                                "è il mio discepolo: voglio che egli rimanga finché io venga."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Alcuni tra i presenti",
                                "non morranno finché non vedranno il Figlio dell'uomo venire nel suo regno."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ecco",
                                "il mio servo che io ho scelto: ho posto il mio Spirito su di lui."
                            ));
                            break;
                        }
                    }
                }

                elseif  ($this->actual['evCode']=='1228a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Erode,",
                                "spinto dall'ira, mandò ad uccidere tutti i bambini di Betlemme."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ai miei santi",
                                "darò un posto d'onore nel regno del Padre mio, dice il Signore."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "I santi",
                                "rinnovano come aquila la loro giovinezza: come gigli fioriscono nella città del Signore."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "I loro angeli",
                                "vedono sempre il volto del Padre mio."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Davanti al trono di Dio",
                                "tutti i santi gridano a gran voce: Vendica il nostro sangue, o Signore."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "A te il regno",
                                "nel giorno della tua gloria: in splendore e santità Dio ti ha generato prima dell'aurora."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "ha redento il suo popolo: la sua alleanza dura per sempre."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Una luce nelle tenebre",
                                "è sorta per i giusti: il Signore, buono, misericordioso e giusto."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Presso il Signore",
                                "è la misericordia, grande è la sua redenzione."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Cristo,",
                                "nuovo sole del mondo, è Re di luce, di giustizia e di pace."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Erode,",
                            "spinto dall'ira, mandò ad uccidere tutti i bambini di Betlemme."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Ai miei santi",
                            "darò un posto d'onore nel regno del Padre mio, dice il Signore."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "I santi",
                                "rinnovano come aquila la loro giovinezza: come gigli fioriscono nella città del Signore."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "I loro angeli",
                                "vedono sempre il volto del Padre mio."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Davanti al trono di Dio",
                                "tutti i santi gridano a gran voce: Vendica il nostro sangue, o Signore."
                            ));
                            break;
                        }
                    }
                }

                if (substr($this->actual['today'],4,4)>='1229' && substr($this->actual['today'],4,4)<='1231') {
                    //uguale a NATALE
                    if ($this->actual['ora']=='lodi') {

                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Pastori,",
                                "chi avete visto? chi è apparso sulla terra? Abbiamo visto un bambino, e gli angeli che lodavano il Signore, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "La Donna",
                                "ha generato l'eterno Re: onore alla Vergine, gloria alla Madre! Come lei non è stata e non sarà nessuna, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "L'angelo",
                                "disse ai pastori: Vi annunzio una gioia grande: oggi è nato per voi il Salvatore del mondo, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Il coro degli angeli",
                                "lodava Dio e cantava: Gloria a Dio nell'alto dei cieli, e pace in terra agli uomini che egli ama, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Oggi",
                                "per noi è nato un bambino: Dio, il Forte, è il suo nome, alleluia."
                            ));
                            break;
                        }
                    }
                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2' ) {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "A te il regno",
                                "nel giorno della tua gloria: in splendore e santità Dio ti ha generato prima dell'aurora."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "ha redento il suo popolo: la sua alleanza dura per sempre."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Una luce nelle tenebre",
                                "è sorta per i giusti: il Signore, buono, misericordioso e giusto."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Presso il Signore",
                                "è la misericordia, grande è la sua redenzione."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Cristo,",
                                "nuovo sole del mondo, è Re di luce, di giustizia e di pace."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "La Donna",
                            "ha generato l'eterno Re; onore alla Vergine, gloria alla Madre! Come lei non è stata e non sarà nessuna, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "L'angelo",
                            "disse ai pastori: Vi annunzio una gioia grande: oggi è nato per voi il Salvatore del mondo, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Oggi",
                            "per noi è nato un bambino: Dio, il Forte, è il suo nome, alleluia."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='MSS') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves2') {

                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Meraviglioso scambio!",
                                "Il Creatore ha preso un'anima e un corpo, è nato da una vergine; fatto uomo senza opera d'uomo, ci dona la sua divinità."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Hai compiuto",
                                "le Scritture, quando in modo unico sei nato dalla Vergine; come rugiada sul vello, sei disceso a salvare l'uomo: lode a te, nostro Dio!"
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Come il roveto,",
                                "che Mosè vide ardere intatto, integra è la tua verginità, Madre di Dio: noi ti lodiamo, tu prega per noi."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Un germoglio",
                                "è spuntato da Iesse, una stella è sorta da Giacobbe; dalla Vergine è nato il Salvatore: lode a te, nostro Dio!"
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Maria",
                                "ci ha dato il Salvatore. Giovanni lo vide ed esclamò: Ecco l'Agnello di Dio, ecco colui che toglie il peccato del mondo, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Meraviglioso scambio!",
                            "Il Creatore ha preso un'anima e un corpo, è nato da una vergine; fatto uomo senza opera d'uomo, ci dona la sua divinità."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Hai compiuto",
                            "le Scritture, quando in modo unico sei nato dalla Vergine; come rugiada sul vello, sei disceso a salvare l'uomo: lode a te, nostro Dio!"
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Come il roveto,",
                                "che Mosè vide ardere intatto, integra è la tua verginità, Madre di Dio: noi ti lodiamo, tu prega per noi."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Un germoglio",
                                "è spuntato da Iesse, una stella è sorta da Giacobbe; dalla Vergine è nato il Salvatore: lode a te, nostro Dio!"
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Maria",
                                "ci ha dato il Salvatore. Giovanni lo vide ed esclamò: Ecco l'Agnello di Dio, ecco colui che toglie il peccato del mondo, alleluia."
                            ));
                            break;
                        }
                    }
                }

                elseif  ($this->actual['evCode']=='EPI') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Generato",
                                "prima dell'aurora, all'inizio dei secoli, oggi è apparso il Signore, nostro Salvatore."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "È sorta",
                                "la tua luce, o Gerusalemme, su di te si è levata la gloria del Signore: nella tua luce cammineranno le genti, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Dai loro tesori",
                                "i magi offrirono al Signore oro, incenso e mirra, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Mari e fiumi,",
                                "benedite il Signore; sorgenti, cantate un inno al Signore, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Splendente di fuoco,",
                                "la stella guida i magi verso Dio, il Re dei re; la videro e portarono al Re i loro doni."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Generato",
                            "prima dell'aurora, all'inizio dei secoli, oggi è apparso il Signore, nostro Salvatore."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "È sorta",
                            "la tua luce, o Gerusalemme, su di te si è levata la gloria del Signore: nella tua luce cammineranno le genti, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Dai loro tesori",
                                "i magi offrirono al Signore oro, incenso e mirra, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Mari e fiumi,",
                                "benedite il Signore; sorgenti, cantate un inno al Signore, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Splendente di fuoco,",
                                "la stella guida i magi verso Dio, il Re dei re; la videro e portarono al Re i loro doni."
                            ));
                            break;
                        }
                    }
                }

                elseif (substr($this->actual['today'],4,4)>'0106' && $this->actual['evCode']!='BAT') {

                    if ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Nascosto",
                            "da secoli eterni, ora il mistero ci è rivelato."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Cristo",
                            "è venuto ad annunziare la pace a tutti: pace ai vicini, pace ai lontani."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Ti ho fatto",
                            "luce dei popoli, perché tu porti la mia salvezza sino ai confini della terra."
                        ));
                    }
                }
            }

            /////////////////////////////////////////////////////////////////////////
            elseif ($this->actual['tempo']=='Q') {

                if ($this->actual['evCode']=='QU1') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Adora",
                                "il Signore tuo Dio, sii fedele a lui solo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "saliamo a Gerusalemme, e il Figlio dell'uomo sarà consegnato alla morte di croce."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Tu puoi strapparci,",
                                "Signore, dalla mano dei violenti: salvaci, Signore Dio nostro."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Umili e pentiti",
                                "accoglici, Signore: ti sia gradito il nostro sacrificio che oggi si compie dinanzi a te."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Grandi della terra,",
                                "acclamate al Signore: lodatelo, popoli tutti!"
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='QU2') {

                    if ($this->actual['ora']=='ves1') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "condusse su un alto monte Pietro, Giacomo e Giovanni, e si trasfigurò davanti a loro."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Come il sole",
                                "era il suo volto, come la neve le sue vesti."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "apparvero Mosè ed Elia, e parlavano con Gesù."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Pietro",
                                "disse a Gesù: Signore, è bello per noi stare qui."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Mentre ancora parlava,",
                                "una nube luminosa li avvolse con la sua ombra."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Signore,",
                                "apri le mia labbra, e la mia bocca proclami la tua lode."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "La destra del Signore",
                                "ha fatto meraviglie, la destra del Signore mi ha esaltato."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "si è fatto mio sostegno."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Come i tre giovani",
                                "in mezzo alle fiamme, cantiamo e diamo gloria al Signore."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Ha stabilito",
                                "ogni cosa per sempre; ha posto una legge che non passa."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='QU3') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Nel tuo amore",
                                "fa' grazia a Sion, rialza le mura di Gerusalemme."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "è il mio aiuto: che cosa potrà farmi l'uomo?"
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Le mie labbra",
                                "ti loderanno per tutta la mia vita, o mio Dio."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Il fuoco",
                                "ha dimenticato la sua violenza, e i tuoi servi sono usciti liberi e incolumi."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Lodate Dio,",
                                "sole e luna: solo il suo nome è sublime."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='QU4') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Dai miei errori",
                                "distogli il tuo volto, allora gradirai vittime di giustizia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "È meglio",
                                "rifugiarsi nel Signore che confidare nei potenti."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Penso a te, Signore,",
                                "nelle veglie notturne."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Tu puoi strapparci,",
                                "Signore, dalla mano dei violenti: salvaci, Signore Dio nostro."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Grandi della terra,",
                                "acclamate al Signore: lodatelo, popoli tutti!"
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='QU5') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Vedi, Signore,",
                                "la mia oppressione: il mio nemico trionfa."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Nell'angoscia",
                                "ho gridato al Signore; mi ha risposto il Signore, e mi ha tratto in salvo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Tu difendi,",
                                "Signore, la mia causa, riscatti la mia vita."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "O mio popolo,",
                                "che male ti ho fatto? Che dolore ti ho dato? Rispondimi."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Si rende forse",
                                "male per bene? poiché mi hanno scavato una fossa."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='PAL') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Le folle degli Ebrei,",
                                "portando rami d'ulivo, andavano incontro al Signore e acclamavano a gran voce: Osanna nell'alto dei cieli."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "è il mio aiuto: non dovrò arrossire."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Fammi giustizia,",
                                "Signore; mio Dio, difendi la mia causa."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Con gli angeli",
                                "e i fanciulli gridiamo la nostra fede; acclamiamo Cristo che vince la morte: Osanna nell'alto dei cieli!"
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Le folle degli Ebrei",
                                "lungo la strada stendevano i mantelli, e acclamavano a gran voce: Osanna al Figlio di Davide. Benedetto colui che viene nel nome del Signore!"
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Prima",
                            "della festa di Pasqua, Gesù, conoscendo la sua ora, amò i suoi sino alla fine."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Come il Padre",
                            "conosce me, io conosco il Padre: per il mio gregge do la mia vita."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Per me",
                            "vivere è Cristo, morire è un guadagno; la mia gloria è la croce del Signore Gesù Cristo."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='SS1') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Non ho sottratto",
                                "la mia faccia agli insulti e agli sputi."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Alzerò la spada",
                                "contro coloro che disperdono il mio gregge, dice il Signore."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Trenta denari",
                                "fu tutto il mio compenso, il mio prezzo per loro."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Le acque",
                                "sono salite fin sopra il mio capo; io dissi: Per me è finita. Invocai il tuo nome, Signore Dio."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Guarda, o Signore,",
                                "come parlano e tramano i miei oppositori."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='SS2') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Guarda, Signore,",
                                "vedi la mia angoscia; presto, rispondimi."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Difendi",
                                "la mia causa, Signore, salvami dal maligno."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Nell'angoscia",
                                "ho gridato al Signore ed egli mi ha ascoltato."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Signore,",
                                "sono oppresso, difendimi: perché non so cosa rispondere ai miei nemici."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Dissero gli empi:",
                                "Opprimiamo il giusto: egli è contro le nostre opere."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='SS3') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Liberami",
                                "dal sangue, Dio, Dio mia salvezza, e la mia lingua esalterà la tua giustizia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ho sopportato",
                                "l'insulto e il terrore: ma il Signore è con me come un guerriero valoroso."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Invano",
                                "hanno attentato alla mia vita; scenderanno nel profondo della terra."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Tutti i miei nemici",
                                "hanno saputo della mia sventura, Signore: ne hanno gioito, perché tu hai fatto questo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Trionfa,",
                                "o Signore, su tutte le genti, e avvincile col giogo del tuo amore."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='SS4') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Signore,",
                                "tu sei giusto quando parli e retto nel tuo giudizio."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Come un agnello",
                                "fu condotto al sacrificio, e non aprì la sua bocca."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il mio cuore",
                                "si fonde come cera, tremano tutte le mie ossa."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Ci hai sostenuti,",
                                "Signore, con la forza della tua grazia e con il cibo della tua santa mensa."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "È stato offerto",
                                "perché lo ha voluto; è lui che ha portato le nostre colpe."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Prenderò",
                                "il calice della salvezza e invocherò il nome del Signore."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Io sono",
                                "per la pace, ma quando ne parlo, essi vogliono la guerra."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Liberami, o Dio,",
                                "dai miei nemici."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Preservami",
                                "dal laccio che mi tendono, dagli agguati dei malfattori."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "O mio popolo,",
                                "che male ti ho fatto? Che dolore ti ho dato? Rispondimi."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='SS5') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Dio",
                                "non ha risparmiato il suo unico Figlio: lo ha dato alla morte per salvare tutti noi."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il mio spirito",
                                "è nell'angoscia, il mio cuore è turbato fino alla morte."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il ladrone",
                                "rimproverava l'altro dicendo: Noi riceviamo il giusto castigo per le nostre azioni, lui invece che cosa ha fatto? Ricordati di me, Signore, quando sarai nel tuo regno."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Quando",
                                "l'anima mia è sconvolta, ricordati, Signore, della tua misericordia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Ricordati di me,",
                                "Signore, quando sarai nel tuo regno."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Prenderò",
                                "il calice della salvezza e invocherò il nome del Signore."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Io sono",
                                "per la pace, ma quando ne parlo, essi vogliono la guerra."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Liberami, o Dio,",
                                "dai miei nemici."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Preservami",
                                "dal laccio che mi tendono, dagli agguati dei malfattori."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "O mio popolo,",
                                "che male ti ho fatto? Che dolore ti ho dato? Rispondimi."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Il ladrone",
                            "rimproverava l'altro dicendo: Noi riceviamo il giusto castigo per le nostre azioni, lui invece che cosa ha fatto? Ricordati di me, Signore, quando sarai nel tuo regno."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Voi tutti",
                            "che passate per la via, considerate e osservate se c'è un dolore simile al mio dolore."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Ricordati di me,",
                            "Signore, quando sarai nel tuo regno."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='SS6') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "O morte,",
                                "sarò la tua morte: la tua rovina sarò, o inferno."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Canteranno su di lui",
                                "il lamento, come per un figlio unico: L'innocente, il Signore, è stato ucciso."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ascoltate,",
                                "popoli tutti, e osservate il mio dolore."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Nell'angoscia",
                                "ho gridato al Signore, ed egli mi ha ascoltato."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Voi tutti",
                                "che passate per la via, considerate e osservate se c'è un dolore simile al mio dolore."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Vedrò",
                            "la bontà del Signore nella terra dei viventi."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Tu, o Dio,",
                            "mi hai fatto risalire dal regno dei morti."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Nella pace",
                            "è la sua dimora, e in Sion la sua abitazione."
                        ));
                    }
                    elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves1') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Oggi",
                                "la mia umiliazione è grande: ma domani spezzerò le mie catene."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Io sono",
                                "per la pace, ma quando ne parlo, essi vogliono la guerra."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Liberami, o Dio,",
                                "dai miei nemici."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Preservami",
                                "dal laccio che mi tendono, dagli agguati dei malfattori."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "O mio popolo,",
                                "che male ti ho fatto? Che dolore ti ho dato? Rispondimi."
                            ));
                            break;
                        }
                    }
                }
            }

            /////////////////////////////////////////////////////////////////////////
            elseif ($this->actual['tempo']=='P') {

                if ($this->actual['evCode']=='PAS' || substr($this->actual['evCode'],0,3)=='PA1') {

                    if ($this->actual['ora']=='ves1') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Oggi",
                                "la mia umiliazione è grande: ma domani spezzerò le mie catene."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Io sono",
                                "per la pace, ma quando ne parlo, essi vogliono la guerra."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Liberami, o Dio,",
                                "dai miei nemici."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Preservami",
                                "dal laccio che mi tengono, dagli agguati dei malfattori."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "O mio popolo,",
                                "che male ti ho fatto? Che dolore ti ho dato? Rispondimi."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Un angelo del Signore,",
                                "sceso dal cielo, si accostò, rotolò la pietra e si pose a sedere su di essa, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ed ecco:",
                                "un grande terremoto, e un angelo del Signore scese dal cielo, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il suo aspetto",
                                "era come folgore, le sue vesti come neve, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Le guardie,",
                                "atterrite per lo spavento, caddero a terra tramortite, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Rispose l'angelo",
                                "alle donne e disse: Non temete: io so che cercate Gesù, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Cristo",
                            "è risorto dai morti, vive la vita immortale, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Cristo,",
                            "dato alla morte per i nostri peccati, è risorto per renderci giusti, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Voi",
                            "siete risorti con Cristo: cercate le cose di lassù, alleluia."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='PA3' || $this->actual['evCode']=='PA4' || $this->actual['evCode']=='PA5' || $this->actual['evCode']=='PA6') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Patì la dura croce",
                                "colui che vinse l'inferno: ora è rivestito di forza, risorto nella gloria, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Era necessario",
                                "che il Cristo patisse per risorgere dai morti, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Sei grande,",
                                "Signore, mirabile nella potenza, invincibile, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Io sono la via,",
                                "la verità e la vita: nessuno viene al Padre se non per me, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Alleluia,",
                                "alleluia, alleluia."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='ASC') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Uomini di Galilea,",
                                "perché state a guardare in alto? Gesù, elevato in cielo, tornerà glorioso, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Contemplavano Gesù",
                                "che saliva al cielo, e dicevano: Alleluia!"
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Cristo,",
                                "alzate le mani, benedisse i discepoli, e fu elevato in cielo, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Esaltate Cristo,",
                                "Re dei re, cantate un inno al Signore, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Davanti a loro",
                                "si innalzò nel cielo, e la nube lo accolse nella gloria, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Contemplavano Gesù",
                            "che saliva al cielo, e dicevano: Alleluia!"
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Cristo,",
                            "alzate le mani, benedisse i discepoli, e fu elevato in cielo, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Davanti a loro",
                            "si innalzò nel cielo, e la nube lo accolse nella gloria, alleluia."
                        ));
                    }
                }

            }

            /////////////////////////////////////////////////////////////////////////
            elseif ($this->actual['tempo']=='O') {

                if ($this->actual['evCode']=='BAT') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Colui che verrà",
                                "era prima di me: e io non sono degno di levargli i sandali e di servirlo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Gesù,",
                                "levatosi in piedi, esclamò a gran voce: Chi ha sete, venga a me e beva."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Venite alla sorgente,",
                                "voi che avete sete; cercate il Signore: ora si fa trovare, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Attingerete con gioia",
                                "alle sorgenti della salvezza."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Ecco",
                                "il mio servo che io ho scelto: ho posto il mio Spirito su di lui."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Fiumi d'acqua viva",
                            "sgorgheranno da Gerusalemme, e il Signore regnerà su tutta la terra."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Cristo,",
                            "apparso nella gloria, santifica le acque della terra."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Ti ho fatto",
                            "luce dei popoli, perché tu porti la mia salvezza sino ai confini della terra."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='PEN') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Al compiersi",
                                "della Pentecoste, i discepoli erano tutti riuniti, e cantavano, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Lo Spirito del Signore",
                                "pervade l'universo, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Tutti",
                                "furono pieni di Spirito Santo, e cantavano le meraviglie di Dio, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Acque e fonti,",
                                "benedite il Signore. Lodate Dio, voi rinati dall'acqua, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "In ogni lingua del mondo",
                                "risuona l'annunzio degli apostoli: Dio ha compiuto meraviglie, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Lo Spirito del Signore",
                            "pervade l'universo, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Tutti",
                            "furono pieni di Spirito Santo, e cantavano le meraviglie di Dio, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "L'amore di Dio",
                            "è stato riversato nei nostri cuori per mezzo dello Spirito Santo che dimora in noi, alleluia."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='TRI') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Gloria a te,",
                                "Santa Trinità, uguale nelle persone, unico Dio, prima di tutti i secoli, ora e per sempre."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Lode",
                                "e gloria eterna a Dio Padre, al Figlio e allo Spirito Santo, nei secoli dei secoli."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Cantino tutti",
                                "lode gloriosa al Padre, al Figlio da lui generato, e lode eterna allo Spirito Santo."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Con amore incessante",
                                "cantiamo la lode del Padre, del Figlio e dello Spirito Santo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Tutto",
                                "viene da te, o Dio, per la tua parola tutto vive in te, gloria a te nei secoli."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "A te",
                            "la nostra preghiera, l'adorazione e la lode, gloriosa Trinità."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Tu, nostra speranza,",
                            "nostra gloria e salvezza, o Santa Trinità."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Noi",
                            "crediamo in te, o Dio, sorgente immutabile dell'essere, della vita e dell'intelligenza."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='COD') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "La sapienza",
                                "ha costruito la sua casa, ha preparato il vino e la mensa, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Hai nutrito",
                                "il tuo popolo con il cibo degli angeli, gli hai dato pane dal cielo, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il pane di Cristo",
                                "è pregno di delizie: anche i grandi della terra ne hanno fame, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Sacerdoti santi",
                                "offriranno a Dio l'incenso e il pane, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "A chi vince,",
                                "darò una manna nascosta e un nome nuovo, alleluia."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Sacerdote per sempre,",
                                "al modo di Melchisedek, Cristo Signore ha offerto il pane e il vino."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Grazia e misericordia",
                                "è il Signore: dona il cibi a quelli che lo temono."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Prenderò",
                                "il calice della salvezza e invocherò il nome del Signore."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Ci nutre",
                                "con fiore di frumento, colui che dà la pace alla sua Chiesa."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "A chi vince,",
                                "darò una manna nascosta e un nome nuovo, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Quanto ho desiderato",
                            "mangiare questa Pasqua con voi, prima di partire! Alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Nell'ultima Cena",
                            "Gesù prese il pane, lo benedisse, lo spezzò e lo diede ai suoi discepoli, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Egli entrò",
                            "per restare con loro: e mentre mangiavano, prese il pane, disse la benedizione, lo spezzò e lo diede loro, alleluia."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='SCG') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "La lancia del soldato",
                                "aprì il costato di Gesù e ne uscì sangue ed acqua."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Gesù,",
                                "levatosi in piedi, esclamò a gran voce: Chi ha sete, venga a me e beva."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "O eterno amore di Dio!",
                                "Innalzato da terra, Gesù ci attira al suo Cuore."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Venite a me,",
                                "voi tutti che siete affaticati e oppressi, e io vi ristorerò."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Figlio,",
                                "dammi il tuo cuore; i tuoi occhi seguano le mie vie."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Domina, Signore,",
                                "in mezzo ai tuoi nemici: il tuo giogo è leggero."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Grazia e misericordia",
                                "è il Signore: dona il cibo a quelli che lo temono."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Una luce nelle tenebre",
                                "è sorta per i giusti: il Signore, buono, misericordioso e giusto."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Presso il Signore",
                                "è la misericordia, grande è la sua redenzione."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Tuo è il regno,",
                                "tua la potenza, Signore; nella tua mano il destino dei popoli; dona la pace ai nostri giorni"
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Dio è amore,",
                            "e chi rimane nell'amore rimane in Dio e Dio in lui."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Venite a me,",
                            "voi tutti che siete affaticati e oppressi, e io vi ristorerò."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "La lancia del soldato",
                            "aprì il costato di Gesù e ne uscì sangue ed acqua."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='GRE') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il Dio del cielo",
                                "susciterà un regno che spezzerà e disperderà tutti i regni e rimarrà in eterno."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "gli diede potenza, onore e gloria: tutti i popoli lo serviranno."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Fiumi d'acqua viva",
                                "sgorgheranno da Gerusalemme, e il Signore regnerà su tutta la terra."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Cristo",
                                "è la pace: il suo dominio sino ai confini della terra."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Il popolo e il regno",
                                "che non vorranno servirti, periranno; le nazioni saranno tutte sterminate."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Re della pace",
                                "è il suo nome, il suo regno sarà stabile per sempre."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Eterno",
                                "è il suo regno, i re e i grandi della terra gli obbediranno."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Cristo,",
                                "nuovo sole del mondo, è Re di luce, di giustizia e di pace."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Siede",
                                "sul trono di Davide, regna nella giustizia e nella pace ora e per sempre."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "A Cristo",
                                "è dato ogni potere in cielo e in terra: popoli e nazioni lo adoreranno in eterno."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Nostro giudice",
                            "è il Signore, nostra legge e nostro Re: egli ci salverà."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Fiumi d'acqua viva",
                            "sgorgheranno da Gerusalemme, e il Signore regnerà su tutta la terra."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Grande",
                            "sarà il suo dominio, e la pace non avrà fine."
                        ));
                    }
                }
            }

            ////////////////////////////////////////////////////////////////////////////////////////////////
            //gestione altri eventi
            if ($this->actual['evCode']!='') {

                if ($this->actual['evCode']=='0202a') {

                    if ( ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) || $this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Simeone,",
                                "fedele e giusto, aspettava la redenzione d'Israele, e lo Spirito Santo era con lui."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Lo Spirito Santo",
                                "rivelò a Simeone: Non vedrai la morte prima di aver incontrato il Signore."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Simeone",
                                "prese il bambino tra le braccia, rese grazie e benedisse il Signore."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Luce",
                                "che illumina le genti e gloria del suo popolo Israele."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Offrirono",
                                "per lui al Signore due colombe, secondo la legge."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Simeone,",
                            "fedele e giusto, aspettava la redenzione d'Israele, e lo Spirito Santo era con lui."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Lo Spirito Santo",
                            "rivelò a Simeone: Non vedrai la morte prima di aver incontrato il Signore."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Simeone",
                                "prese il bambino tra le braccia, rese grazie e benedisse il Signore."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Luce",
                                "che illumina le genti e gloria del suo popolo Israele."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Offrirono",
                                "per lui al Signore due colombe, secondo la legge."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='0210a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "E ora, fratello,",
                                "va' pure; esci, se puoi, lasciami qui sola e torna al tuo monastero."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore onnipotente",
                                "ti perdoni, sorella: che cosa hai fatto?"
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ho pregato te,",
                                "e non hai voluto ascoltarmi; ho pregato il mio Signore, e subito mi ha esaudito."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Potremo parlare,",
                                "ormai, fino al mattino dei gaudii celesti, nel reciproco scambio di luci interiori."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Tre giorni dopo,",
                                "Benedetto, stando in cella, alzò gli occhi e vide l'anima della sorella, libera dal corpo, penetrare in forma di colomba, nelle profondità del cielo."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "l'inverno è passato, è cessata la pioggia: alzati, amica mia, mia bella, e vieni!"
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Vieni,",
                                "mia eletta: porrò in te il mio trono."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Alzati, amica mia,",
                                "mia bella, mia colomba: vieni a ricevere il diadema che il Signore ti ha preparato per i secoli eterni."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "mi ha dato ali come di colomba per volare e trovare riposo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Serva fedele,",
                                "sposa prediletta, è entrata esultante nel cuore del suo Signore ardentemente amato."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "E ora, fratello,",
                            "va' pure; esci, se puoi, lasciami qui sola e torna al tuo monastero."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Il Signore onnipotente",
                            "ti perdoni, sorella: che cosa hai fatto?"
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Ho pregato te,",
                                "e non hai voluto ascoltarmi; ho pregato il mio Signore, e subito mi ha esaudito."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Potremo parlare,",
                                "ormai, fino al mattino dei gaudii celesti, nel reciproco scambio di luci interiori."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Tre giorni dopo,",
                                "Benedetto, stando in cella, alzò gli occhi e vide l'anima della sorella, libera dal corpo, penetrare in forma di colomba, nelle profondità del cielo."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='0319a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Ogni anno,",
                                "per la festa di Pasqua, i genitori di Gesù salivano a Gerusalemme."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "I suoi genitori",
                                "tornarono a casa; Gesù restò a Gerusalemme, ed essi non lo sapevano."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Non trovando Gesù,",
                                "ritornarono a Gerusalemme per cercarlo; dopo tre giorni lo ritrovarono nel tempio, in mezzo ai maestri della legge: li ascoltava e li interrogava."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Figlio,",
                                "perché hai fatto questo? Con ansia tuo padre ed io ti abbiamo cercato."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "tornò a Nazareth: era docile e obbediente a Giuseppe e a Maria."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Giacobbe",
                                "generò Giuseppe, sposo di Maria; da lei è nato Gesù, chiamato il Cristo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "L'angelo Gabriele",
                                "fu inviato a Nazareth, alla sposa di Giuseppe la vergine Maria."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Maria,",
                                "madre di Gesù, sposa di Giuseppe, prima che andassero a vivere insieme si trovò incinta per opera dello Spirito Santo."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Giuseppe,",
                                "suo sposo, che era giusto, non volendo denunciarla pubblicamente, decise di rimandarla in segreto."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Io gioisco",
                                "nel Signore, esulto il Dio, mio Salvatore."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Ogni anno,",
                            "per la festa di Pasqua, i genitori di Gesù salivano a Gerusalemme."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "I suoi genitori",
                            "tornarono a casa; Gesù restò a Gerusalemme, ed essi non lo sapevano."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Non trovando Gesù,",
                                "ritornarono a Gerusalemme per cercarlo; dopo tre giorni lo ritrovarono nel tempio, in mezzo ai maestri della legge: li ascoltava e li interrogava."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Figlio,",
                                "perché hai fatto questo? Con ansia tuo padre ed io ti abbiamo cercato."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "tornò a Nazareth: era docile e obbediente a Giuseppe e a Maria."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();
                }

                elseif ($this->actual['evCode']=='0321a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il nostro santo padre,",
                                "Benedetto di nome e di grazia, uomo di vita santa, maturo di animo fin dall'infanzia, non si lasciò mai sedurre dalle attrattive del piacere."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "L'uomo di Dio",
                                "Benedetto alle lodi del mondo preferì il patire, e agli onori degli uomini la fatica per Iddio."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Benedetto,",
                                "testimone glorioso di Dio, imitando sulla terra la santità degli angeli divenne luminoso esempio di buone opere per il mondo: ora esulta con Cristo senza fine."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "L'uomo di Dio",
                                "Benedetto, nella serenità del volto, nell'angelico modo di vivere e nella trasparenza della luce interiore, irradiava qui sulla terra lo splendore del cielo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Benedetto,",
                                "ricolmo dello Spirito del Signore, riassumeva in sé le virtù di tutti i giusti: egli interceda per quanti, alla sua scuola, lo hanno seguito nella vita monastica."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='ves1') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Uomo",
                                "di vita santa fu il nostro glorioso padre, Benedetto di nome e per grazia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Fin dall'infanzia,",
                                "spiritualmente maturo, Benedetto non si lasciò mai sedurre dalle attrattive del piacere."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Di nobile origine,",
                                "Benedetto fu mandato da Norcia a Roma per dedicarsi agli studi."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Libero",
                                "di godere dei beni della vita, disprezzò come già inaridito il mondo con tutto il suo fascino."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Abbandonata la casa",
                                "e le sostanze paterne, nel desiderio di piacere solo a Dio, cercò l'austerità dell'abito monastico."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il santo padre Benedetto",
                                "è simile all'uomo saggio che edifica la casa sulla roccia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Fu scelto",
                                "dal Signore per essere modello dei monaci ed insigne maestro con la Regola santa."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Beato",
                                "il servo di Dio Benedetto: quando il Signore venne e bussò alla porta lo trovò vigilante."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Dall'oratorio",
                                "Benedetto, ardente di desiderio e di traboccante amore, salì alla splendida dimora di Dio."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Disprezzando il mondo",
                                "e le cose terrene, l'uomo di Dio ha vinto la sua battaglia: con la parola e con le opere ha accumulato tesori per il cielo."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Il nostro santo padre,",
                            "Benedetto di nome e di grazia, uomo di vita santa, maturo di animo fin dall'infanzia, non si lasciò mai sedurre dalle attrattive del piacere."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "L'uomo di Dio",
                            "Benedetto alle lodi del mondo preferì il patire, e agli onori degli uomini la fatica per Iddio."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Benedetto,",
                                "testimone glorioso di Dio, imitando sulla terra la santità degli angeli divenne luminoso esempio di buone opere per il mondo: ora esulta con Cristo senza fine."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "L'uomo di Dio",
                                "Benedetto, nella serenità del volto, nell'angelico modo di vivere e nella trasparenza della luce interiore, irradiava qui sulla terra lo splendore del cielo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Benedetto,",
                                "ricolmo dello Spirito del Signore, riassumeva in sé le virtù di tutti i giusti: egli interceda per quanti, alla sua scuola, lo hanno seguito nella vita monastica."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();
                }

                elseif ($this->actual['evCode']=='0325a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "L'angelo Gabriele",
                                "fu inviato alla sposa di Giuseppe, la Vergine Maria."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ave, Maria,",
                                "piena di grazia, il Signore è con te."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Benedetta",
                                "sei tu fra le donne, e benedetto il frutto del tuo seno."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Sorgerà",
                                "come il sole il Salvatore del mondo; come rugiada sull'erba scenderà nel seno della Vergine."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Cristo",
                                "è la pace: il suo dominio sino ai confini della terra."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Un germoglio",
                                "spunterà del ceppo di Iesse, un virgulto germoglierà dalle sue radici: su di lui si poserà lo Spirito del Signore."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "gli darà il trono di Davide suo padre, e regnerà in eterno."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "L'angelo del Signore",
                                "portò l'annunzio a Maria: e la Vergine concepì dallo Spirito Santo."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Maria,",
                                "non temere: Dio ti ha guardata con amore, concepirai un figlio e lo darai alla luce; sarà chiamato Figlio dell'Altissimo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Io sono",
                                "la serva del Signore: si compia in me la tua parola."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Dalla gloriosa",
                            "stirpe di Davide è germogliato un meraviglioso virgulto: ne è spuntato un fiore pieno di fragranza deliziosa."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "La Vergine",
                            "concepirà un figlio e lo darà alla luce: Emmanuele è il suo nome."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Cristo",
                            "è la pace: il suo dominio sino ai confini della terra."
                        ));
                    }

                    if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();
                }

                elseif ($this->actual['evCode']=='0624a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Da Elisabetta",
                                "e da Zaccaria nacque Giovanni, il precursore di Cristo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Chiedevano",
                                "con cenni al padre come voleva fosse chiamato; ed egli scrisse: Giovanni è il suo nome."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Giovanni",
                                "è il suo nome: la sua nascita sarà gioia per molti."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Tra i nati di donna",
                                "non è sorto uno più grande di Giovanni Battista."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Tu, bambino,",
                                "sarai chiamato profeta dell'Altissimo: camminerai davanti al Signore a preparare le sue vie."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='ves1') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Camminerà",
                                "davanti al Cristo, con lo spirito e la potenza di Elia, a preparare al Signore un popolo santo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Giovanni",
                                "è il suo nome; egli non berrà vino né bevande inebrianti: molti si rallegreranno per la sua nascita."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Dal grembo",
                                "di una donna sterile e già avanti negli anni è nato Giovanni il Battista, il precursore del Signore."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Questo bambino",
                                "sarà grande davanti a Dio: la mano del Signore sarà con lui."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Ho udito",
                                "il tuo saluto, e nel mio grembo il bambino ha trasalito di gioia, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Da Elisabetta",
                            "e da Zaccaria nacque Giovanni, il precursore di Cristo."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Chiedevano",
                            "con cenni al padre come voleva fosse chiamato; ed egli scrisse: Giovanni è il suo nome."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Giovanni",
                                "è il suo nome: la sua nascita sarà gioia per molti."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Tra i nati di donna",
                                "non è sorto uno più grande di Giovanni Battista."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Tu, bambino,",
                                "sarai chiamato profeta dell'Altissimo: camminerai davanti al Signore a preparare le sue vie."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='0629a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Pietro,",
                                "il primo degli apostoli, e Paolo, il maestro delle genti, ci insegnano, Signore, la tua legge."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Tu sei",
                                "pastore del gregge di Cristo, e primo degli apostoli: a te sono affidate le chiavi del regno."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "La grazia di Dio",
                                "in me non fu vana, la grazia di Dio non mi abbandona."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "ha mandato il suo angelo, e mi ha liberato dalla mano di Erode, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Mi vanterò",
                                "della mia debolezza, perché abiti in me la potenza di Cristo."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Tu sei Pietro,",
                                "e su questa pietra edificherò la mia Chiesa."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Paolo,",
                                "apostolo del Vangelo e maestro dei popoli, prega per noi Dio che ti ha scelto."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Pietro",
                                "era in catene, e una preghiera incessante saliva a Dio dalla Chiesa."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Tre volte",
                                "sono stato percosso con le verghe, una volta sono stato lapidato, tre volte ho fatto naufragio per il nome di Cristo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Vostro",
                                "è il regno dei cieli: avete sacrificato la vita per Cristo, lavati nel sangue dell'Agnello, ricevete ora la gloria eterna."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Lo Spirito Santo",
                            "scese su quelli che ascoltavano Pietro: parlavano in lingue e davano gloria a Dio."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Nell'ora di mezzogiorno",
                            "Pietro saliva a pregare."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Pietro e Giovanni",
                            "salivano al tempio per la liturgia dell'ora nona."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='0711a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il nostro santo padre,",
                                "Benedetto di nome e di grazia, uomo di vita santa, maturo di animo fin dall'infanzia, non si lasciò mai sedurre dalle attrattive del piacere."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "L'uomo di Dio",
                                "Benedetto alle lodi del mondo preferì il patire, e agli onori degli uomini la fatica per Iddio."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Benedetto,",
                                "testimone glorioso di Dio, imitando sulla terra la santità degli angeli divenne luminoso esempio di buone opere per il mondo: ora esulta con Cristo senza fine."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "L'uomo di Dio",
                                "Benedetto, nella serenità del volto, nell'angelico modo di vivere e nella trasparenza della luce interiore, irradiava qui sulla terra lo splendore del cielo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Benedetto,",
                                "ricolmo dello Spirito del Signore, riassumeva in sé le virtù di tutti i giusti: egli interceda per quanti, alla sua scuola, lo hanno seguito nella vita monastica."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='ves1') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Uomo",
                                "di vita santa fu il nostro glorioso padre, Benedetto di nome e per grazia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Fin dall'infanzia,",
                                "spiritualmente maturo, Benedetto non si lasciò mai sedurre dalle attrattive del piacere."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Di nobile origine,",
                                "Benedetto fu mandato da Norcia a Roma per dedicarsi agli studi."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Libero",
                                "di godere dei beni della vita, disprezzò come già inaridito il mondo con tutto il suo fascino."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Abbandonata la casa",
                                "e le sostanze paterne, nel desiderio di piacere solo a Dio, cercò l'austerità dell'abito monastico."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Il nostro santo padre,",
                            "Benedetto di nome e di grazia, uomo di vita santa, maturo di animo fin dall'infanzia, non si lasciò mai sedurre dalle attrattive del piacere."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "L'uomo di Dio",
                            "Benedetto alle lodi del mondo preferì il patire, e agli onori degli uomini la fatica per Iddio."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Benedetto,",
                                "testimone glorioso di Dio, imitando sulla terra la santità degli angeli divenne luminoso esempio di buone opere per il mondo: ora esulta con Cristo senza fine."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "L'uomo di Dio",
                                "Benedetto, nella serenità del volto, nell'angelico modo di vivere e nella trasparenza della luce interiore, irradiava qui sulla terra lo splendore del cielo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Benedetto,",
                                "ricolmo dello Spirito del Signore, riassumeva in sé le virtù di tutti i giusti: egli interceda per quanti, alla sua scuola, lo hanno seguito nella vita monastica."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='0806a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "condusse su un alto monte Pietro, Giacomo e Giovanni, e si trasfigurò davanti a loro."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Sulla montagna,",
                                "splendido come il sole era il suo volto, candida come neve la sua veste."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ecco,",
                                "apparvero Mosè ed Elia, e parlavano con Gesù."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Pietro",
                                "disse a Gesù: Signore, è bello per noi stare qui."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Mentre ancora parlava,",
                                "una nube luminosa li avvolse con la sua ombra."
                            ));
                            break;
                        }
                    }

                    if ( ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "condusse su un alto monte Pietro, Giacomo e Giovanni, e si trasfigurò davanti a loro."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Signore,",
                                "è bello per noi stare qui! Se vuoi facciamo tre tende: una per te, una per Mosè e una per Elia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Da Mosè",
                                "fu data la legge: da Gesù Cristo la grazia e la verità."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Scendendo dal monte,",
                                "Gesù ordinò loro: Non rivelate la gloria del Figlio dell'uomo, prima che sia risorto dai morti, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Facciamo qui",
                                "tre tende: una per te, una per Mosè, una per Elia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Mosè ed Elia,",
                            "la legge e i profeti, erano accanto a Cristo, testimoni della sua gloria."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Con la parola del Vangelo,",
                            "Dio nostro salvatore ha fatto brillare per noi la vita immortale."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Alla voce del Padre,",
                            "presi da grande timore, i discepoli caddero a terra."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='0815a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Festa",
                                "per gli angeli in cielo: Maria è assunta nella gloria. Lode e onore al nostro Dio!"
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "La Vergine Maria",
                                "entra nella dimora del cielo, siede con Cristo su un trono di stelle."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Profumo olezzante",
                                "è il tuo nome: per questo le giovinette ti amano."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "L'Altissimo",
                                "ti ha benedetta, figlia del nostro popolo: tu ci hai dato il frutto della vita."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Sei tutta splendore",
                                "figlia di Sion, terribile come schiere a vessilli spiegati."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "O Vergine prudentissima,",
                                "dove ascendi, splendente come l'aurora? Figlia di Sion, tu sei bella come la luna, fulgida come il sole."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Per te",
                                "che oggi gloriosa trionfi tra gli angeli, sono state riaperte per noi le porte del cielo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "L'umile serva",
                                "del Signore è innalzata sopra gli angeli e i santi, nel regno dei cieli."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Tutti i secoli",
                                "mi diranno beata: grandi cose ha fatto in me l'Onnipotente, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Alzati, amica mia,",
                                "mia bella, mia colomba: vieni a ricevere il diadema che il Signore ti ha preparato per i secoli eterni."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Profumo olezzante",
                            "è il tuo nome: per questo le giovinette ti amano."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Sei tutta splendore",
                            "figlia di Sion, terribile come schiere a vessilli spiegati."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "La santa Madre di Dio",
                            "è innalzata sopra i cori degli angeli: sul suo capo un diadema di dodici stelle, alleluia."
                        ));
                    }
                }

                elseif ($this->actual['evCode']=='0914a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "O meraviglia di amore:",
                                "la morte è stata vinta, quando la vita è morta sulla croce."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Salvaci,",
                                "Cristo Salvatore, per la forza della croce. Tu che hai salvato Pietro dalle acque, abbi pietà di noi!"
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ecco",
                                "la croce del Signore: fuggano i suoi nemici! Il Leone di Giuda, il germoglio di Davide ha vinto! Alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Nostra gloria",
                                "è la croce del Signore Gesù."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Con il segno",
                                "della tua croce liberaci, Signore, dai nostri nemici."
                            ));
                            break;
                        }
                    }

                    if ( ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "O meraviglia di amore:",
                                "la morte è stata vinta, quando la vita è morta sulla croce."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Salvaci,",
                                "Cristo Salvatore, per la forza della croce. Tu che hai salvato Pietro dalle acque, abbi pietà di noi!"
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ecco",
                                "la croce del Signore: fuggano i suoi nemici! Il Leone di Giuda, il germoglio di Davide ha vinto! Alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Nostra gloria",
                                "è la croce del Signore Gesù."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Patì la dura croce",
                                "colui che vinse l'inferno: ora è rivestito di forza, risorto nella gloria."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "O meraviglia di amore:",
                            "la morte è stata vinta, quando la vita è morta sulla croce."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Salvaci,",
                            "Cristo Salvatore, per la forza della croce. Tu che hai salvato Pietro dalle acque, abbi pietà di noi!"
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Ecco",
                                "la croce del Signore: fuggano i suoi nemici! Il Leone di Giuda, il germoglio di Davide ha vinto! Alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Nostra gloria",
                                "è la croce del Signore Gesù."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Con il segno",
                                "della tua croce liberaci, Signore, dai nostri nemici."
                            ));
                            break;
                        }
                    }
                }

                elseif ($this->actual['evCode']=='1101a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Vidi",
                                "davanti al trono una folla immensa, di ogni nazione, che nessuno poteva contare."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Tutti gli angeli,",
                                "che stavano intorno al trono, si prostrarono davanti al trono e adorarono Dio."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ci hai redenti,",
                                "o Signore, con il tuo sangue, ci hai chiamato da ogni popolo e razza, da ogni lingua e nazione: hai fatto di noi un regno per il nostro Dio."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Benedite il Signore,",
                                "voi tutti suoi eletti: celebrate la festa eterna del cielo, innalzate a lui la vostra lode."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Lode",
                                "a tutti gli amici di Dio, al popolo che egli ama: onore a tutti i suoi santi!"
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Dio",
                            "li ha provati, li ha trovati degni di sé: riceveranno una magnifica corona della mano del Signore."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "La tua Chiesa",
                            "canta la sapienza dei santi, l'assemblea ne proclama le lodi."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Nella fede",
                            "i giusti conseguirono la vittoria, camminarono nella luce di Dio, ottennero i beni promessi."
                        ));
                    }
                }

            }

            //#############################################################################################
            //se non c'è un evento ma c'è una festa (in base al COMUNE)
            // $this->festa è già stata valorizzata decidendo i salmi
            if ($this->actual['fesCode']!='') {

                //antifone COMUNI
                switch($this->festa['comune']) {

                    case "dedica":

                        if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Nella tua casa,",
                                    "Signore, la santità risplenda per la durata dei giorni."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "La mia casa",
                                    "sia casa di preghiera."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Questa",
                                    "è la casa del Signore, saldamente edificata, costruita sulla roccia."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "La casa del Signore",
                                    "è saldamente edificata sulla roccia."
                                ));
                                break;
                                case 5:
                                    if ($this->actual['tempo']=='Q' && ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') ) {
                                        $this->res[$k]->setAntifona(array(
                                            "Tutte le genti",
                                            "verranno ad adorarti, Signore."
                                        ));
                                    }
                                    else {
                                        $this->res[$k]->setAntifona(array(
                                            "Pietre preziose",
                                            "sono le mura di Gerusalemme edificate con gemme le sue torri."
                                        ));
                                    }
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Santa",
                                "è la Chiesa del Signore: è il campo di Dio, l'edificio di Dio."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Nella tua casa,",
                                "Signore, la santità risplenda per la durata dei giorni."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Questa",
	                                "è la casa del Signore, saldamente edificata, costruita sulla roccia."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Questa",
	                                "è la casa del Signore, saldamente edificata, costruita sulla roccia."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "BVM":

                        if ($this->actual['ora']=='lodi') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "L'angelo del Signore",
                                    "portò l'annunzio a Maria: e la Vergine concepì dallo Spirito Santo."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Ave, Maria,",
                                    "piena di grazia, il Signore è con te."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Ecco",
                                    "la serva del Signore: si compia in me la tua parola."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Benedetta",
                                    "sei tu fra le donne, e benedetto il frutto del tuo seno."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Tu gloria di Gerusalemme",
                                    "tu letizia d'Israele, tu onore del nostro popolo."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Beata sei tu,",
                                    "o Vergine Maria: hai portato in grembo il Creatore del mondo."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Hai dato la vita",
                                    "a colui che ti ha creata e sei vergine per sempre."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "L'Altissimo",
                                    "ti ha benedetta, figlia del nostro popolo: tu ci hai dato il frutto della vita."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Te beata,",
                                    "o Maria, che hai creduto: si compie in te la parola del Signore."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Benedetta",
                                    "sei tu fra le donne, e benedetto il frutto del tuo seno."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Sulle tue labbra",
                                "è diffusa la grazia: il profumo delle tue vesti ha fragranza d'incenso."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Beata Madre,",
                                "Vergine santa, gloriosa Regina del mondo, intercedi per noi presso il Signore."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Una fonte",
	                                "di giardino sei tu, sorgente d'acqua viva che sgorga dal libano."
                            	));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Una fonte",
	                                "di giardino sei tu, sorgente d'acqua viva che sgorga dal libano."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "apostoli":

                        if ($this->actual['ora']=='lodi') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Gesù",
                                    "chiamò i suoi discepoli, ne scelse dodici, e diede loro il nome di apostoli."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Lasciate le reti,",
                                    "subito seguirono il Signore."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Voi,",
                                    "miei discepoli, avete perseverato con me nell'ora della prova."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Io sono",
                                    "in mezzo a voi come il servo di tutti."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Non vi chiamo servi,",
                                    "ma amici: perché vi ho rivelato quanto ho udito dal Padre mio."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='ves1') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Questo",
                                    "è il mio comandamento: che vi amiate gli uni gli altri, come io vi ho amati."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Non c'è",
                                    "amore più grande che dare la vita per i propri amici."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Sarete miei amici,",
                                    "se farete quello che vi comando, dice il Signore."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Beati",
                                    "gli operatori di pace, beati i puri di cuore, perché vedranno Dio."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Perseverate,",
                                    "e salverete la vostra vita."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Il Signore",
                                    "ha giurato e non si pente: Tu sei sacerdote in eterno."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Il Signore lo accolga",
                                    "tra i principi del suo popolo."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Hai spezzato,",
                                    "Signore, le mie catene: a te offrirò sacrifici di lode."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Quanto profondi",
                                    "per me i tuoi pensieri, quanto grande il loro numero, o Dio!"
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Sono stati scelti",
                                    "nel Cristo prima della creazione del mondo, per essere santi e immacolati davanti a Dio nella carità."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Voi",
                                "che mi avete seguito, sederete su dodici troni per giudicare le dodici tribù d'Israele, dice il Signore."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Beato l'uomo",
                                "che hai scelto, Signore: abiterà nella tua casa."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Perseverate,",
	                                "e salverete la vostra vita."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Perseverate,",
	                                "e salverete la vostra vita."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "martiri":

                        if ( ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1') && $this->actual['tempo']!='P') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Quanti tormenti",
                                    "hanno sofferto i santi, per raggiungere la gloria del martirio!"
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Vittoriosi",
                                    "i santi entrano nel regno: hanno meritato corone di gloria."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "I santi",
                                    "dormono nella pace; il loro nome vive in eterno."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Martiri del Signore,",
                                    "benedite il Signore!"
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Glorioso",
                                    "coro dei martiri, magnifica il Signore nei cieli."
                                ));
                                break;
                            }
                        }

                        elseif (($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1') && $this->actual['tempo']=='P') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "I tuoi santi,",
                                    "Signore, fioriranno come gigli, alleluia: saranno davanti a te come profumo di balsamo."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Nel regno dei cieli",
                                    "è la dimora dei santi, nei secoli eterni il loro riposo."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "I tuoi santi,",
                                    "Signore, cantavano a gran voce: Alleluia, alleluia."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Spiriti",
                                    "e anime dei giusti, cantate un inno al nostro Dio."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "I giusti",
                                    "risplenderanno come il sole davanti al volto di Dio."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Ecco i martiri",
                                    "offerti in sacrificio per l'alleanza del Signore, hanno lavato le vesti nel sangue dell'Agnello."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Con la fede,",
                                    "i santi conquistarono i regni, operarono la giustizia e conseguirono le promesse."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "I santi",
                                    "rinnovano come aquila la loro giovinezza: come gigli fioriscono nella città del Signore."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Dio",
                                    "tergerà ogni lacrima dagli occhi dei santi: non più morte né lamento, le cose di prima sono passate."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Tu puoi strapparci,",
                                    "Signore, dalla mano dei violenti: salvaci, Signore Dio nostro."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "I santi",
                                "rinnovano come aquila la loro giovinezza: come gigli fioriscono nella città del Signore."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Nel regno dei cieli",
                                "è la dimora dei santi, nei secoli eterni il loro riposo."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Chi semina",
	                                "nelle lacrime, mieterà con giubilo."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Chi semina",
	                                "nelle lacrime, mieterà con giubilo."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "martire":

                        if ( ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1') && $this->actual['tempo']!='P') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Chi mi riconoscerà",
                                    "davanti agli uomini, anch'io lo riconoscerò davanti al Padre mio."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Chi segue me",
                                    "non cammina nelle tenebre, ma avrà la luce della vita, dice il Signore."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Chi mi vuol servire,",
                                    "mi segua: e dove sono io, là sarà anche il mio servo."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Il Padre mio",
                                    "innalzerà nella gloria il mio servo fedele."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Questo",
                                    "io voglio, o Padre, che dove sono io, là sia anche il mio servo."
                                ));
                                break;
                            }
                        }

                        elseif (($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1') && $this->actual['tempo']=='P') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "I tuoi santi,",
                                    "Signore, fioriranno come gigli, alleluia: saranno davanti a te come profumo di balsamo."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Nel regno dei cieli",
                                    "è la dimora dei santi, nei secoli eterni il loro riposo."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "I tuoi santi,",
                                    "Signore, cantavano a gran voce: Alleluia, alleluia."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Spiriti",
                                    "e anime dei giusti, cantate un inno al nostro Dio."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "I giusti",
                                    "risplenderanno come il sole davanti al volto di Dio."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Ecco i martiri",
                                    "offerti in sacrificio per l'alleanza del Signore, hanno lavato le vesti nel sangue dell'Agnello."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Con la fede,",
                                    "i santi conquistarono i regni, operarono la giustizia e conseguirono le promesse."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "I santi",
                                    "rinnovano come aquila la loro giovinezza: come gigli fioriscono nella città del Signore."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Dio",
                                    "tergerà ogni lacrima dagli occhi dei santi: non più morte né lamento, le cose di prima sono passate."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Sotto il trono di Dio",
                                    "tutti i santi gridano a gran voce: Vendica il nostro sangue, o Dio."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "I santi",
                                "rinnovano come aquila la loro giovinezza: come gigli fioriscono nella città del Signore."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Nel regno dei cieli",
                                "è la dimora dei santi, nei secoli eterni il loro riposo."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
                            if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Chi semina",
	                                "nelle lacrime, mieterà con giubilo."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Chi semina",
	                                "nelle lacrime, mieterà con giubilo."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "pastori":

                        if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Ecco",
                                    "il gran sacerdote che nella sua vita fu gradito a Dio e fu trovato giusto."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Nessuno",
                                    "fu simile a lui nel seguire la legge dell'Altissimo."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Il Signore",
                                    "gli promise di benedirlo nella sua discendenza."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Sacerdoti di Dio,",
                                    "benedite il Signore: servi del Signore, sciogliete inni a Dio."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Servo buono",
                                    "e fedele, entra nella gioia del tuo Signore."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Padre,",
                                "come tu mi hai mandato nel mondo, anch'io li ho mandati."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Chi accoglie voi,",
                                "accoglie me; chi accoglie me, accoglie colui che mi ha mandato."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Noi siamo",
	                                "collaboratori di Dio nella sua Chiesa: voi il campo di Dio, l'edificio di Dio."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Noi siamo",
	                                "collaboratori di Dio nella sua Chiesa: voi il campo di Dio, l'edificio di Dio."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "dottori":

                        if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Ecco",
                                    "il gran sacerdote che nella sua vita fu gradito a Dio e fu trovato giusto."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Nessuno",
                                    "fu simile a lui nel seguire la legge dell'Altissimo."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Il Signore",
                                    "gli promise di benedirlo nella sua discendenza."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Sacerdoti di Dio,",
                                    "benedite il Signore: servi del Signore, sciogliete inni a Dio."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Servo buono",
                                    "e fedele, entra nella gioia del tuo Signore."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Padre,",
                                "come tu mi hai mandato nel mondo, anch'io li ho mandati."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Chi accoglie voi,",
                                "accoglie me; chi accoglie me, accoglie colui che mi ha mandato."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Noi siamo",
	                                "collaboratori di Dio nella sua Chiesa: voi il campo di Dio, l'edificio di Dio."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Noi siamo",
	                                "collaboratori di Dio nella sua Chiesa: voi il campo di Dio, l'edificio di Dio."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "monaci":

                        if ($this->actual['ora']=='lodi') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Vidi",
                                    "davanti al trono una folla immensa, di ogni nazione, che nessuno poteva contare."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "I giusti",
                                    "loderanno il tuo nome, Signore: i retti abiteranno alla tua presenza."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Voi",
                                    "avete lottato per me sulla terra: io sarò la vostra ricompensa."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Benedite il Signore,",
                                    "voi tutti suoi eletti: celebrate la festa eterna del cielo, innalzate a lui la vostra lode."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Siate santi,",
                                    "dice il Signore, e io vi moltiplicherò, perché preghiate per il mio popolo in questo luogo."
                                ));
                                break;
                            }
                        }

                        if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "I giusti",
                                    "risplenderanno come il sole nel regno del Padre loro, dice il Signore."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Beati voi,",
                                    "quando vi insulteranno e vi perseguiteranno a causa del Figlio dell'uomo: rallegratevi ed esultate, perché grande è la vostra ricompensa nei cieli."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Gioia nel cielo",
                                    "per gli amici di Dio: hanno seguito le orme di Cristo, hanno disprezzato il mondo per il suo amore, con Cristo regneranno senza fine."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Santi del Signore,",
                                    "benedite in eterno il Signore."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Quanto è glorioso",
                                    "il regno dove con Cristo godono i santi; in candide vesti essi seguono l'Agnello ovunque vada."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Chi vuole",
                                "essere ricco cerchi le ricchezze più vere."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Se cercate",
                                "di giungere al culmine del vero onore, correte con impegno verso la patria celeste."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Coloro",
	                                "che ricevono la parola di Dio in un cuore ben disposto, portano frutto con perseveranza."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Coloro",
	                                "che ricevono la parola di Dio in un cuore ben disposto, portano frutto con perseveranza."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "vergini":

                        if ($this->actual['ora']=='lodi') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Ecco",
                                    "una vergine saggia: è nella schiera delle vergini prudenti."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Ecco",
                                    "una vergine saggia: il Signore l'ha trovata vigilante."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "La santa sposa di Cristo",
                                    "aderiva sempre al suo diletto, e formava con lui un solo spirito."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Vieni,",
                                    "mia diletta: porrò in te il mio trono."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Tu sei bella",
                                    "tra le figlie di Gerusalemme."
                                ));
                                break;
                            }
                        }

                        if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "La santa sposa di Cristo",
                                    "aderiva sempre al suo diletto, e formava con lui un solo spirito."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Beati",
                                    "i puri di cuore, perché vedranno Dio."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Serva fedele,",
                                    "sposa prediletta, è entrata esultante nel cuore del suo Signore ardentemente amato."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "O beata anima!",
                                    "Meritò di diventare sede della divina sapienza, che si compiace di stare con gli uomini."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Gioisci",
                                    "ed esulta, figlia di Sion! Ecco: io vengo ad abitare in mezzo a te, dice il Signore."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Vieni,",
                                "mia diletta: porrò in te il mio trono."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Tu sei bella",
                                "tra le figlie di Gerusalemme."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Risplende",
	                                "di bellezza la gloriosa schiera delle vergini."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Risplende",
	                                "di bellezza la gloriosa schiera delle vergini."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "santi":

                        if ($this->actual['ora']=='lodi') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Signore,",
                                    "mi hai dato cinque talenti: ne ho guadagnati altri cinque."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Bene,",
                                    "servo buono: sei stato fedele nel poco, entra nella gioia del tuo Signore."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Servo",
                                    "fedele e saggio: il Signore gli ha affidato la sua famiglia."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Beato quel servo",
                                    "che il padrone, al suo ritorno, troverà vigilante."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Bene,",
                                    "servo buono e fedele: entra nella gioia del tuo Signore."
                                ));
                                break;
                            }
                        }

                        if ($this->actual['ora']=='ves1') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Voi tutti,",
                                    "spiriti e anime dei giusti, inneggiate a Dio."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Ai miei santi",
                                    "darò un nome eterno, dice il Signore; otterranno per sempre gioia e letizia."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "I popoli",
                                    "narrano la sapienza dei santi, e la Chiesa ne proclama le lodi."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "I giusti",
                                    "loderanno il tuo nome, Signore: i retti abiteranno alla tua presenza."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Ai miei santi",
                                    "darò un posto d'onore nel regno del Padre mio, dice il Signore."
                                ));
                                break;
                            }
                        }

                        if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Beato l'uomo",
                                    "che tu istruisci, Signore, e che ammaestri nella tua legge."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Per gli amici di Dio",
                                    "grazia e misericordia: egli protegge i suoi santi."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Servo",
                                    "fedele e saggio: il Signore gli ha affidato la sua famiglia."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Beato l'uomo",
                                    "che hai scelto, Signore: abiterà nella tua casa."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "I santi",
                                    "cantavano un cantico nuovo davanti al trono di Dio e dell'Agnello e risuonava la terra delle loro voci."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Siate pronti",
                                "con le lampade accese, aspettando il Signore che viene."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Signore,",
                                "mi hai dato cinque talenti; ne ho guadagnati altri cinque."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Nessuno",
	                                "ha mai udito né visto le meraviglie che hai preparato per chi confida in te, Signore."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Nessuno",
	                                "ha mai udito né visto le meraviglie che hai preparato per chi confida in te, Signore."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "religiosi":

                        if ($this->actual['ora']=='lodi') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Signore,",
                                    "mi hai dato cinque talenti: ne ho guadagnati altri cinque."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Bene,",
                                    "servo buono: sei stato fedele nel poco, entra nella gioia del tuo Signore."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Servo",
                                    "fedele e saggio: il Signore gli ha affidato la sua famiglia."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Beato quel servo",
                                    "che il padrone, al suo ritorno, troverà vigilante."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Bene,",
                                    "servo buono e fedele: entra nella gioia del tuo Signore."
                                ));
                                break;
                            }
                        }

                        if ($this->actual['ora']=='ves1') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Voi tutti,",
                                    "spiriti e anime dei giusti, inneggiate a Dio."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Ai miei santi",
                                    "darò un nome eterno, dice il Signore; otterranno per sempre gioia e letizia."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "I popoli",
                                    "narrano la sapienza dei santi, e la Chiesa ne proclama le lodi."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "I giusti",
                                    "loderanno il tuo nome, Signore: i retti abiteranno alla tua presenza."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Ai miei santi",
                                    "darò un posto d'onore nel regno del Padre mio, dice il Signore."
                                ));
                                break;
                            }
                        }

                        if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Beato l'uomo",
                                    "che tu istruisci, Signore, e che ammaestri nella tua legge."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Per gli amici di Dio",
                                    "grazia e misericordia: egli protegge i suoi santi."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Servo",
                                    "fedele e saggio: il Signore gli ha affidato la sua famiglia."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Beato l'uomo",
                                    "che hai scelto, Signore: abiterà nella tua casa."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "I santi",
                                    "cantavano un cantico nuovo davanti al trono di Dio e dell'Agnello e risuonava la terra delle loro voci."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Siate pronti",
                                "con le lampade accese, aspettando il Signore che viene."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Signore,",
                                "mi hai dato cinque talenti; ne ho guadagnati altri cinque."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
                            if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Nessuno",
	                                "ha mai udito né visto le meraviglie che hai preparato per chi confida in te, Signore."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Nessuno",
	                                "ha mai udito né visto le meraviglie che hai preparato per chi confida in te, Signore."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "sante":

                        if ($this->actual['ora']=='lodi') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "O beata anima!",
                                    "Meritò di diventare sede della divina sapienza, che si compiace di stare con gli uomini."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Tu sei bella",
                                    "tra le figlie di Gerusalemme."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Ecco,",
                                    "l'inverno è passato, è cessata la pioggia: alzati, amica mia, mia bella, e vieni!"
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Vieni,",
                                    "mia eletta: porrò in te il mio trono."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Io gioisco",
                                    "nel Signore, esulto in Dio, mio salvatore."
                                ));
                                break;
                            }
                        }

                        if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Vieni,",
                                    "mia eletta: porrò in te il mio trono."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Tu sei bella",
                                    "tra le figlie di Gerusalemme."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Il Signore",
                                    "l'ha colmata delle sue benedizioni ed ella ha trovato grazia ai sui occhi."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Chi trova me,",
                                    "trova la vita e ottiene la salvezza dal Signore."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Apre",
                                    "la sua mano al mistero, la stende verso il povero; con il lavoro delle sue mani guadagna il suo pane."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Trovata",
                                "una perla preziosa, vende tutti i sui averi e la compra."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Chi ha sete,",
                                "venga a me e beva alla sorgente della vita."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Il mio gregge",
	                                "riconosce la mia voce: e io, il Signore, conosco tutte le mie pecore."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Il mio gregge",
	                                "riconosce la mia voce: e io, il Signore, conosco tutte le mie pecore."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "religiose":

                        if ($this->actual['ora']=='lodi') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "O beata anima!",
                                    "Meritò di diventare sede della divina sapienza, che si compiace di stare con gli uomini."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Tu sei bella",
                                    "tra le figlie di Gerusalemme."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Ecco,",
                                    "l'inverno è passato, è cessata la pioggia: alzati, amica mia, mia bella, e vieni!"
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Vieni,",
                                    "mia eletta: porrò in te il mio trono."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Io gioisco",
                                    "nel Signore, esulto in Dio, mio salvatore."
                                ));
                                break;
                            }
                        }

                        if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Vieni,",
                                    "mia eletta: porrò in te il mio trono."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Tu sei bella",
                                    "tra le figlie di Gerusalemme."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Il Signore",
                                    "l'ha colmata delle sue benedizioni ed ella ha trovato grazia ai sui occhi."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Chi trova me,",
                                    "trova la vita e ottiene la salvezza dal Signore."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Apre",
                                    "la sua mano al mistero, la stende verso il povero; con il lavoro delle sue mani guadagna il suo pane."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Trovata",
                                "una perla preziosa, vende tutti i sui averi e la compra."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Chi ha sete,",
                                "venga a me e beva alla sorgente della vita."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
                          	if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Il mio gregge",
	                                "riconosce la mia voce: e io, il Signore, conosco tutte le mie pecore."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Il mio gregge",
	                                "riconosce la mia voce: e io, il Signore, conosco tutte le mie pecore."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;

                    case "DEF":

                        if ($this->actual['ora']=='lodi') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Esulteranno",
                                    "le ossa che hai spezzato."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Ascolta,",
                                    "Signore, la mia preghiera: a te viene ogni mortale."
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "O Signore,",
                                    "la forza della tua destra mi sostiene."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "O Signore,",
                                    "dal potere degli inferi libera l'anima mia."
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Ogni vivente",
                                    "dia lode al Signore."
                                ));
                                break;
                            }
                        }

                        if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            switch ($s[0]) {
                                case 1: $this->res[$k]->setAntifona(array(
                                    "Camminerò",
                                    "alla presenza del Signore nella terra dei viventi."
                                ));
                                break;
                                case 2: $this->res[$k]->setAntifona(array(
                                    "Me infelice,",
                                    "devo vivere in esilio, lontano dal Signore!"
                                ));
                                break;
                                case 3: $this->res[$k]->setAntifona(array(
                                    "Il Signore",
                                    "ti proteggerà da ogni male, egli proteggerà la tua vita."
                                ));
                                break;
                                case 4: $this->res[$k]->setAntifona(array(
                                    "Se consideri le colpe,",
                                    "o Signore, chi potrà sussistere?"
                                ));
                                break;
                                case 5: $this->res[$k]->setAntifona(array(
                                    "Distruggete",
                                    "questo tempio, e in tre giorni lo ricostruirò, dice il Signore; egli parlava del tempio del suo corpo."
                                ));
                                break;
                            }
                        }

                        elseif ($this->actual['ora']=='terza') {
                            $this->res[$k]->setAntifona(array(
                                "Il mio cuore",
                                "e la mia carne esultano nel Dio vivente."
                            ));
                        }
                        elseif ($this->actual['ora']=='sesta') {
                            $this->res[$k]->setAntifona(array(
                                "Guariscimi,",
                                "Signore: contro di te ho peccato."
                            ));
                        }
                        elseif ($this->actual['ora']=='nona') {
							if ($s[0]==1) {
	                            $this->res[$k]->setAntifonaIndex(0,array(
	                                "Salvami,",
	                                "o Dio, nel tuo nome: con la tua forza vieni a liberarmi."
	                            ));
								$this->res[$k]->setAntifonaIndex(1,array("",""));
							}
							elseif ($s[0]==3) {
	                            $this->res[$k]->setAntifonaIndex(1,array(
	                                "Salvami,",
	                                "o Dio, nel tuo nome: con la tua forza vieni a liberarmi."
	                            ));
								$this->res[$k]->setAntifonaIndex(0,array("",""));
							}
							else $this->res[$k]->setAntifona(array("",""));
                        }

                        if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();

                    break;
                }

                ///////////////////////////////////////////////////////////////////////////////////////////
                //antifone proprie della Festa / Memoria

                if ($this->actual['fesCode']=='0115a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "San Mauro,",
                                "illustre per nobile famiglia, fin da fanciullo preferì l'umiliazione con Cristo Signore a tutti i tesori del mondo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Sollevato",
                                "sulle ali dell'obbedienza cammina sulle acque, né può essere sommerso dalle onde colui che è portato dallo Spirito di Dio."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il beato Placido",
                                "fin dall'infanzia è stato offerto a Dio come ostia pura."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Il servo di Dio",
                                "Benedetto salì sul monte col piccolo Placido, pregò a lungo, e l'acqua sgorgò per i fratelli."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Sono stati scelti",
                                "dal Signore per essere modello di vita ai monaci, e strumenti per l'osservanza dalla santa Regola."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "San Mauro,",
                            "illustre per nobile famiglia, fin da fanciullo preferì l'umiliazione con Cristo Signore a tutti i tesori del mondo."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Sollevato",
                            "sulle ali dell'obbedienza cammina sulle acque, né può essere sommerso dalle onde colui che è portato dallo Spirito di Dio."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il beato Placido",
                                "fin dall'infanzia è stato offerto a Dio come ostia pura."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Il servo di Dio",
                                "Benedetto salì sul monte col piccolo Placido, pregò a lungo, e l'acqua sgorgò per i fratelli."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Sono stati scelti",
                                "dal Signore per essere modello di vita ai monaci, e strumenti per l'osservanza dalla santa Regola."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0121a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Agnese,",
                                "nel luogo dell'infamia, trovò l'angelo del Signore pronto a difenderla."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Agnello",
                                "più candido della neve, Cristo si pose al fianco di Agnese, e la consacrò martire e sposa."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Col suo anello",
                                "mi ha unita a sé il mio Signore Gesù Cristo; come sposa ha posto sul mio capo una splendida corona."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Ti benedico,",
                                "Padre: per Cristo tuo Figlio e mio Signore, ho vinto nell'ora del martirio."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Rallegratevi,",
                                "fate festa con me, ora vivo accanto a lui nella splendida dimora dei santi."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0125a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Io ho piantato,",
                                "Apollo ha irrigato, ma è Dio che ha fatto crescere."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Mi vanterò",
                                "della mia debolezza, perché abiti in me la potenza di Cristo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "La grazia di Dio",
                                "in me non fu vana, la grazia di Dio non mi abbandona."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "A Damasco,",
                                "il governatore del re Areta voleva catturarmi; ma i fratelli mi calarono da una finestra per il muro, in una cesta, e così, nel nome del Signore, sfuggii alle sue mani."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Tre volte",
                                "sono stato percosso con le verghe, una volta sono stato lapidato, tre volte ho fatto naufragio per il nome di Cristo."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Io ho piantato,",
                            "Apollo ha irrigato, ma è Dio che ha fatto crescere."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Mi vanterò",
                            "della mia debolezza, perché abiti in me la potenza di Cristo."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "La grazia di Dio",
                                "in me non fu vana, la grazia di Dio non mi abbandona."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "A Damasco,",
                                "il governatore del re Areta voleva catturarmi; ma i fratelli mi calarono da una finestra per il muro, in una cesta, e così, nel nome del Signore, sfuggii alle sue mani."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Tre volte",
                                "sono stato percosso con le verghe, una volta sono stato lapidato, tre volte ho fatto naufragio per il nome di Cristo."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0214a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Vidi",
                                "davanti al trono una folla immensa, di ogni nazione, che nessuno poteva contare."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "I giusti",
                                "loderanno il tuo nome, Signore: i retti abiteranno alla tua presenza."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Voi",
                                "avete lottato per me sulla terra: io sarò la vostra ricompensa."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Sacerdoti di Dio,",
                                "benedite il Signore; servi del Signore, sciogliete inni a Dio."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "I popoli",
                                "narrano la sapienza dei santi, e la Chiesa ne proclama le lodi."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "I giusti",
                                "risplenderanno come il sole nel regno del Padre loro, dice il Signore."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Beati voi,",
                                "quando vi insulteranno e vi perseguiteranno a causa del Figlio dell'uomo: rallegratevi ed esultate, perché grande è la vostra ricompensa nei cieli."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Gioia nel cielo",
                                "per gli amici di Dio: hanno seguito le orme di Cristo, hanno disprezzato il mondo per suo amore, con Cristo regneranno senza fine."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Santi del Signore,",
                                "benedite in eterno il Signore."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Quanto è glorioso",
                                "il regno dove con Cristo godono i santi; in candide vesti essi seguono l'Agnello ovunque vada."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Vidi",
                            "davanti al trono una folla immensa, di ogni nazione, che nessuno poteva contare."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "I giusti",
                            "loderanno il tuo nome, Signore: i retti abiteranno alla tua presenza."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Voi",
                                "avete lottato per me sulla terra: io sarò la vostra ricompensa."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Sacerdoti di Dio,",
                                "benedite il Signore; servi del Signore, sciogliete inni a Dio."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "I popoli",
                                "narrano la sapienza dei santi, e la Chiesa ne proclama le lodi."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0222a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Per comando di Dio",
                                "sciogli, Pietro, le tue catene: tu che apri agli eletti le porte del cielo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Voi",
                                "che mi avete seguito, sederete su dodici troni per giudicare le dodici tribù d'Israele, dice il Signore."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Pietro",
                                "era in catene, e una preghiera incessante saliva a Dio dalla Chiesa."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Chi mi vuol servire,",
                                "mi segua: e dove sono io, là sarà anche il mio servo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Tu sei Pietro,",
                                "e su questa pietra edificherò la mia Chiesa."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Per comando di Dio",
                            "sciogli, Pietro, le tue catene: tu che apri agli eletti le porte del cielo."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Voi",
                            "che mi avete seguito, sederete su dodici troni per giudicare le dodici tribù d'Israele, dice il Signore."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Pietro",
                                "era in catene, e una preghiera incessante saliva a Dio dalla Chiesa."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Chi mi vuol servire,",
                                "mi segua: e dove sono io, là sarà anche il mio servo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Tu sei Pietro,",
                                "e su questa pietra edificherò la mia Chiesa."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0425a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Tutte",
                                "le parole dei profeti sono giunte a compimento nel Vangelo di Cristo, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Con l'annunzio del Vangelo",
                                "Dio ci chiama alla fede nella verità, perché otteniamo la gloria del Signore Gesù Cristo, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Molti",
                                "loderanno la sua sapienza: egli non sarà mai dimenticato, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Nel regno dei cieli",
                                "è la dimora dei santi, nei secoli eterni il loro riposo, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "I giusti",
                                "risplenderanno come il sole davanti al volto di Dio, alleluia."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Dio",
                                "mi ha fatto ministro del Vangelo, per la grazia che mi ha donato, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Tutto io faccio",
                                "per annunziare il Vangelo, e avere parte anch'io dei suoi beni, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "A me",
                                "è stata data la grazia di annunziare ai pagani le insondabili ricchezze di Cristo, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Con grande coraggio",
                                "gli apostoli rendevano testimonianza della risurrezione del Signore Gesù, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "La sapienza",
                                "risiede nel suo cuore, e la prudenza nella sua parola, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Tutte",
                            "le parole dei profeti sono giunte a compimento nel Vangelo di Cristo, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Con l'annunzio del Vangelo",
                            "Dio ci chiama alla fede nella verità, perché otteniamo la gloria del Signore Gesù Cristo, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Molti",
                                "loderanno la sua sapienza: egli non sarà mai dimenticato, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Nel regno dei cieli",
                                "è la dimora dei santi, nei secoli eterni il loro riposo, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "I giusti",
                                "risplenderanno come il sole davanti al volto di Dio, alleluia."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0503a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Rivelaci il Padre,",
                                "o Signore: questo ci basta, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Filippo,",
                                "chi ha visto me, ha visto il Padre mio, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Da tanto tempo",
                                "sono con voi, e tu, Filippo, non mi conosci ancora? Chi ha visto me, ha visto il Padre mio, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Se conoscete me,",
                                "conoscerete anche il Padre mio; ora lo conoscete e lo avete veduto, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Se mi amate,",
                                "osservate i miei comandamenti, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Rivelaci il Padre,",
                            "o Signore: questo ci basta, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Filippo,",
                            "chi ha visto me, ha visto il Padre mio, alleluia."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Da tanto tempo",
                                "sono con voi, e tu, Filippo, non mi conosci ancora? Chi ha visto me, ha visto il Padre mio, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Se conoscete me,",
                                "conoscerete anche il Padre mio; ora lo conoscete e lo avete veduto, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Se mi amate,",
                                "osservate i miei comandamenti, alleluia."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0511a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Candidi",
                                "più della neve sono i tuoi santi, Signore, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "I santi",
                                "loderanno il tuo nome, e i giusti vivranno alla tua presenza, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "A voi,",
                                "miei santi, che nel mondo avete sostenuto lotte e dolori, io do la ricompensa per le vostre fatiche, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Voi tutti,",
                                "spiriti e anime dei giusti, inneggiate a Dio, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Voi",
                                "siete santi, dice il Signore, e il vostro numero sarà da me moltiplicato, affinché in questa casa preghiate per il mio popolo, alleluia."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Sorge Oddone,",
                                "pieno di Spirito Santo, e in tutto il mondo l'Ordine monastico prende nuova vita e splendore, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Maiolo,",
                                "ricolmo di carità e di grazia emulo della santità degli angeli, era elevato per la potenza della sua virtù verso le supreme realtà, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Grande carità",
                                "ardeva nel cuore di Odilone: volle che ogni anno si sollevassero le pene dei defunti con un dolce refrigerio, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Partecipando",
                                "alla celebrazione del Sabato santo, l'abate Ugo salutava la colonna della nuova luce e sospirando pregava di poter giungere felicemente alla terra promessa, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Un nome eterno",
                                "darò ai miei santi, dice il Signore: saranno per sempre nel gaudio e nell'esultanza, alleluia."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0531a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Maria si alzò",
                                "e partì in fretta verso la montagna, per una città di Giuda."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Al saluto",
                                "di Maria il bambino esultò nel grembo di Elisabetta, ed essa fu piena di Spirito Santo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Te beata,",
                                "o Maria, che hai creduto: si compie in te la parola del Signore."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "L'anima mia",
                                "magnifica il Signore perché ha guardato l'umiltà della sua serva."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Tutti i secoli",
                                "mi diranno beata: grandi cose ha fatto in me l'Onnipotente."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Maria",
                                "entrò nella casa di Zaccaria e salutò Elisabetta."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ho udito",
                                "il tuo saluto, e nel mio grembo il bambino ha trasalito di gioia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Benedetta",
                                "sei tu fra le donne, e benedetto il frutto del tuo seno."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Per la mia piccolezza",
                                "sono piaciuta al Signore, e dal mio grembo ho generato l'Uomo-Dio."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "L'Altissimo",
                                "ti ha benedetta, figlia del nostro popolo: tu ci hai dato il frutto della vita."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Maria si alzò",
                            "e partì in fretta verso la montagna, per una città di Giuda."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Al saluto",
                            "di Maria il bambino esultò nel grembo di Elisabetta, ed essa fu piena di Spirito Santo."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Te beata,",
                                "o Maria, che hai creduto: si compie in te la parola del Signore."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "L'anima mia",
                                "magnifica il Signore perché ha guardato l'umiltà della sua serva."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Tutti i secoli",
                                "mi diranno beata: grandi cose ha fatto in me l'Onnipotente."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['tempo']=='P') $this->res[$k]->TPAntifona();
                }

                if ($this->actual['fesCode']=='0722a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il giorno",
                                "dopo il sabato, di buon mattino, quand'era ancora buio, Maria di Magdala venne al sepolcro, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Videro",
                                "che il masso era stato rotolato via benché fosse molto grande, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Piangendo,",
                                "Maria guardò nel sepolcro, e vide due angeli vestiti di luce, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Hanno portato via",
                                "il mio Signore, e non so dove l'hanno deposto, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Arde il mio cuore:",
                                "voglio vedere il mio Signore, e non so dove lo hanno posto, alleluia."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0725a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "camminando sulle rive del mare vide Giacomo e Giovanni suo fratello: e li chiamò."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Subito,",
                                "lasciato il Padre e la barca, Giovanni e Giacomo seguirono Gesù."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il calice",
                                "che io bevo, anche voi lo berrete; e il battesimo che io ricevo, anche voi lo riceverete."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "si ritirò a pregare con Pietro, Giacomo e Giovanni e cominciò a sentire angoscia e paura."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Il re Erode",
                                "perseguitava la Chiesa, e uccise Giacomo, fratello di Giovanni."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Gesù",
                            "camminando sulle rive del mare vide Giacomo e Giovanni suo fratello: e li chiamò."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Subito,",
                            "lasciato il Padre e la barca, Giovanni e Giacomo seguirono Gesù."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il calice",
                                "che io bevo, anche voi lo berrete; e il battesimo che io ricevo, anche voi lo riceverete."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "si ritirò a pregare con Pietro, Giacomo e Giovanni e cominciò a sentire angoscia e paura."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il re Erode",
                                "perseguitava la Chiesa, e uccise Giacomo, fratello di Giovanni."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0726a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Un nome eterno",
                                "darò ai miei santi, dice il Signore: saranno per sempre nel gaudio e nell'esultanza."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "I santi",
                                "loderanno il tuo nome, e i giusti vivranno alla tua presenza."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ai miei santi",
                                "darò un posto d'onore nel regno del Padre mio, dice il Signore."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Voi tutti,",
                                "spiriti e anime dei giusti, inneggiate a Dio, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "I popoli",
                                "narrano la sapienza dei santi, e la Chiesa ne proclama le lodi."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0729a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Signore,",
                                "se tu fossi stato qui, Lazzaro non sarebbe morto; ora è già da quattro giorni nel sepolcro."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Io sono la via,",
                                "la verità e la vita: nessuno viene al Padre se non per me, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Non vi preoccupate,",
                                "dicendo: Che cosa mangeremo? Che cosa berremo? Il Padre vostro celeste sa di che cosa avete bisogno, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Quanto è bello",
                                "e soave che i fratelli vivano insieme!"
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Maria",
                                "unse i piedi di Gesù, li asciugò con i suoi capelli, e tutta la casa si riempì del profumo dell'unguento."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0810a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Lorenzo entrò",
                                "e i martiri confessarono il nome del Signore Gesù Cristo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "L'angelo del Signore",
                                "mi ha liberato dalle fiamme, nella fornace ardente sono rimasto illeso."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "A te",
                                "si stringe l'anima mia, o Dio, mentre il mio corpo brucia per te."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Il martire Lorenzo",
                                "così pregava: Ti rendo grazie, Signore, che mi accogli nella tua casa."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Se nella terra",
                                "il seme non muore, rimane solo."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0829a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Erode",
                                "fece arrestare Giovanni e lo gettò in carcere, a motivo di Erodiade."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "O re,",
                                "dammi su un piatto la testa di Giovanni."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Alla figlia che danzava",
                                "la madre comandò: Chiedi la testa di Giovanni."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Giovanni",
                                "rimproverava Erode a causa di Erodiade, moglie di Filippo, suo fratello."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Dammi su un piatto",
                                "la testa di Giovanni Battista. Il re si rattristò a causa del giuramento."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0903a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Gregorio,",
                                "elevato sulla cattedra di Pietro, realizzò nelle opere il suo nome di Vigilante."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Gregorio,",
                                "guardando i giovani angli, disse: Hanno volto di angeli, e anche in cielo dovranno condividere la sorte degli angeli."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Mentre penetrava",
                                "i misteri della Sacra Scrittura, apparve una colomba più bianca della neve."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Servi del Signore,",
                                "benedite il Signore: Gregorio, servo dei servi di Dio, è asceso al cielo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Gregorio,",
                                "modello dei monaci, fu padre di Roma, gioia del mondo."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Gregorio,",
                            "elevato sulla cattedra di Pietro, realizzò nelle opere il suo nome di Vigilante."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Gregorio,",
                            "guardando i giovani angli, disse: Hanno volto di angeli, e anche in cielo dovranno condividere la sorte degli angeli."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Mentre penetrava",
                                "i misteri della Sacra Scrittura, apparve una colomba più bianca della neve."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Servi del Signore,",
                                "benedite il Signore: Gregorio, servo dei servi di Dio, è asceso al cielo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Gregorio,",
                                "modello dei monaci, fu padre di Roma, gioia del mondo."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0908a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "È nata",
                                "la gloriosa Vergine Maria, discendente di Abramo, della tribù di Giuda, della stirpe regale di Davide."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Nasce Maria,",
                                "e la sua vita gloriosa illumina la Chiesa."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Sei splendida",
                                "per la tua origine regale: con cuore devoto, Maria, invochiamo il tuo soccorso."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Nel gaudio",
                                "cantiamo gloria a Cristo celebrando la festa di Maria sua Madre."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Con gioia",
                                "celebriamo la tua nascita, o Maria; prega per noi il Signore Gesù."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "È nata",
                            "la gloriosa Vergine Maria, discendente di Abramo, della tribù di Giuda, della stirpe regale di Davide."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Nasce Maria,",
                            "e la sua vita gloriosa illumina la Chiesa."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Sei splendida",
                                "per la tua origine regale: con cuore devoto, Maria, invochiamo il tuo soccorso."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Nel gaudio",
                                "cantiamo gloria a Cristo celebrando la festa di Maria sua Madre."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Con gioia",
                                "celebriamo la tua nascita, o Maria; prega per noi il Signore Gesù."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='0929a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Arcangelo Michele,",
                                "ti ho posto a capo di tutte le anime che saranno accolte in cielo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Un angelo",
                                "apparve presso l'altare del tempio: aveva in mano un turibolo d'oro."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Egli",
                                "darà ordine ai suoi angeli di custodirti in tutti i tuoi passi."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Angeli del Signore,",
                                "benedite il Signore in eterno."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Lodate Dio,",
                                "voi tutti suoi angeli: lodatelo voi tutte sue schiere."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Mentre",
                                "l'arcangelo Michele combatteva contro il drago, si udì nel cielo la voce di coloro che cantavano: Gloria al nostro Dio, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "L'angelo Gabriele",
                                "disse a Maria: Ave, piena di grazia, il Signore è con te; tu sei benedetta fra le donne."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Lodiamo il Signore.",
                                "I cherubini e i serafini proclamano con gli angeli: Santo, santo, santo!"
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Canterò per te,",
                                "mio Dio, alla presenza degli angeli."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Mentre Giovanni",
                                "contemplava il sacro mistero, l'arcangelo Michele suonò la tromba: Perdona, Signore Dio nostro, tu che apri il libro e ne sciogli i sigilli, alleluia."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Arcangelo Michele,",
                            "ti ho posto a capo di tutte le anime che saranno accolte in cielo."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "L'angelo Gabriele",
                            "fu inviato alla sposa di Giuseppe, la Vergine Maria."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "L'angelo Raffaele",
                            "fu inviato a Tobia e a Sara per guarirli."
                        ));
                    }
                }

                if ($this->actual['fesCode']=='1002a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il Signore",
                                "manderà il suo angelo, per custodirti nel tuo cammino."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Lodiamo il Signore.",
                                "I cherubini e i serafini proclamano con gli angeli: Santo, santo, santo!"
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "I loro angeli",
                                "vedono sempre il volto del Padre mio che è nei cieli."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Benedetto il Signore!",
                                "Egli manda il suo angelo e libera i suoi fedeli."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Dal cielo",
                                "lodate il Signore, voi tutti suoi angeli, lodatelo voi tutte sue schiere."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Il Signore",
                            "manderà il suo angelo, per custodirti nel tuo cammino."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Lodiamo il Signore.",
                            "I cherubini e i serafini proclamano con gli angeli: Santo, santo, santo!"
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "I loro angeli",
                                "vedono sempre il volto del Padre mio che è nei cieli."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Benedetto il Signore!",
                                "Egli manda il suo angelo e libera i suoi fedeli."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Dal cielo",
                                "lodate il Signore, voi tutti suoi angeli, lodatelo voi tutte sue schiere."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='1004a') {

                    if ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Perfetto è l'amore",
                            "in chi osserva la parola di Cristo."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Chi fa la volontà",
                            "del Padre mio che è nei cieli, entrerà nel suo regno."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Nessuno",
                            "ha mai udito né visto le meraviglie che hai preparato per chi confida in te, Signore."
                        ));
                    }
                }

                if ($this->actual['fesCode']=='1007a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Rallegrati,",
                                "Vergine Maria: Cristo è risorto dai morti, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ascende Dio,",
                                "tra canti di gioia, il Signore tra squilli di tromba, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Lo Spirito del Signore",
                                "pervade l'universo, alleluia."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Maria",
                                "è assunta in cielo: godono gli angeli, lodano e benedicono il Signore, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Nella gloria del cielo,",
                                "tra i cori degli angeli, la Vergine Maria è coronata di dodici stelle, alleluia."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "L'angelo Gabriele",
                                "portò l'annunzio a Maria: ed ella concepì dallo Spirito Santo, alleluia."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Ave, Maria,",
                                "piena di grazia, il Signore è con te: benedetta tu fra le donne."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il mio cuore",
                                "si fonde come cera, tremano tutte le mie ossa."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Le figlie di Sion",
                                "l'hanno vista germogliare tra le rose e la proclamano beata."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Gesù",
                                "disse alla madre: Donna, ecco tuo figlio! E al discepolo che egli amava: Ecco tua madre!"
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='1018a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Tutte",
                                "le parole dei profeti sono giunte a compimento nel Vangelo di Cristo."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Con l'annunzio del Vangelo",
                                "Dio ci chiama alla fede nella verità, perché otteniamo la gloria del Signore Gesù Cristo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Molti",
                                "loderanno la sua sapienza: egli non sarà mai dimenticato."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Nel regno dei cieli",
                                "è la dimora dei santi, nei secoli eterni il loro riposo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "I giusti",
                                "risplenderanno come li sole davanti al volto di Dio."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Dio",
                                "mi ha fatto ministro del Vangelo, per la grazia che mi ha donato."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Tutto io faccio",
                                "per annunziare il Vangelo, e avere parte anch'io dei suoi beni."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "A me",
                                "è stata data la grazia di annunziare ai pagani le insondabili ricchezze di Cristo."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Con grande coraggio",
                                "gli apostoli rendevano testimonianza della risurrezione del Signore Gesù."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "La sapienza",
                                "risiede nel suo cuore, e la prudenza nella sua parola."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Tutte",
                            "le parole dei profeti sono giunte a compimento nel Vangelo di Cristo."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Con l'annunzio del Vangelo",
                            "Dio ci chiama alla fede nella verità, perché otteniamo la gloria del Signore Gesù Cristo."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Molti",
                                "loderanno la sua sapienza: egli non sarà mai dimenticato."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Nel regno dei cieli",
                                "è la dimora dei santi, nei secoli eterni il loro riposo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "I giusti",
                                "risplenderanno come li sole davanti al volto di Dio."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='1111a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Padre,",
                                "perché ci abbandoni? Perché ci lasci nella desolazione? Lupi rapaci invaderanno il tuo gregge."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Signore,",
                                "se sono ancora utile al tuo popolo, non rifiuto la fatica: sia fatta la tua volontà."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Uomo meraviglioso!",
                                "Non lo vinse la fatica, né lo sgomentò la morte; non ha temuto di morire, non ha rifiutato di vivere."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Gli occhi e le mani",
                                "sempre rivolti al cielo, infaticabile si dava alla preghiera, alleluia."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Martino,",
                                "pieno di gioia, è accolto nel seno di Abramo: Martino, povero e piccolo sulla terra, entra ricco nel cielo, accolto da canti celesti."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Padre,",
                            "perché ci abbandoni? Perché ci lasci nella desolazione? Lupi rapaci invaderanno il tuo gregge."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Signore,",
                            "se sono ancora utile al tuo popolo, non rifiuto la fatica: sia fatta la tua volontà."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Uomo meraviglioso!",
                                "Non lo vinse la fatica, né lo sgomentò la morte; non ha temuto di morire, non ha rifiutato di vivere."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Gli occhi e le mani",
                                "sempre rivolti al cielo, infaticabile si dava alla preghiera, alleluia."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Martino,",
                                "pieno di gioia, è accolto nel seno di Abramo: Martino, povero e piccolo sulla terra, entra ricco nel cielo, accolto da canti celesti."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='1113a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Beati",
                                "gli operatori di pace, beati i puri di cuore, perché vedranno Dio."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Coloro",
                                "che ricevono la parola di Dio in un cuore ben disposto, portano frutto con perseveranza."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Dove due o tre",
                                "sono riuniti nel mio nome, io sono in mezzo a loro, dice il Signore."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Benedite il Signore,",
                                "voi tutti suoi eletti: celebrate la festa eterna del cielo, innalzate a lui la vostra lode."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "I santi",
                                "per la fede conquistarono regni, vissero con giustizia, conseguirono le promesse."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Siate perfetti",
                            "come perfetto è il Padre vostro celeste."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Non conformatevi",
                            "alla mentalità del mondo, ma trasformatevi nella novità dello spirito."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        $this->res[$k]->setAntifona(array(
                            "Occhio non vide,",
                            "né orecchio udì quello che hai preparato, Signore, per chi vive nella tua attesa."
                        ));
                    }
                }

                if ($this->actual['fesCode']=='1116a') {

                    if ($this->actual['ora']=='lodi') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Gioisci",
                                "ed esulta, figlia di Sion! Ecco: io vengo ad abitare in mezzo a te, dice il Signore."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "O beata Anima!",
                                "Meritò di diventare sede della divina sapienza, che si compiace di stare con gli uomini."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il mio Signore",
                                "Gesù Cristo mi ha avvinta con sette anelli, e come sposa mi ha coronata col diadema."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Geltrude",
                                "aveva il potere di aprire il cielo alla pioggia e di chiuderlo, perché la sua parola era diventata la chiave del cielo."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Ancella fedele",
                                "e sposa diletta, Geltrude è entrata nel cuore e nella gioia del suo Signore, che amava di amore struggente."
                            ));
                            break;
                        }
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Mi troverete",
                                "nel cuore di Geltrude, dice il Signore: ho posto in lei le mie compiacenze."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Geltrude,",
                                "santissima sposa di Cristo, aderiva sempre al suo diletto, e formava con lui un solo spirito."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Bella",
                                "e leggiadra sei Geltrude: in te Dio si è preparata una deliziosa dimora."
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Cristo",
                                "parlava a Geltrude faccia a faccia, come un amico suole parlare con il suo amico."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "L'anima",
                                "della sposa diletta, libera dalla prigionia del corpo, fu accolta da Cristo con infinito amore."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Gioisci",
                            "ed esulta, figlia di Sion! Ecco: io vengo ad abitare in mezzo a te, dice il Signore."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "O beata Anima!",
                            "Meritò di diventare sede della divina sapienza, che si compiace di stare con gli uomini."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il mio Signore",
                                "Gesù Cristo mi ha avvinta con sette anelli, e come sposa mi ha coronata col diadema."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Geltrude",
                                "aveva il potere di aprire il cielo alla pioggia e di chiuderlo, perché la sua parola era diventata la chiave del cielo."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Ancella fedele",
                                "e sposa diletta, Geltrude è entrata nel cuore e nella gioia del suo Signore, che amava di amore struggente."
                            ));
                            break;
                        }
                    }
                }

                if ($this->actual['fesCode']=='1130a') {

                    if ($this->actual['ora']=='lodi' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Chi vuol venire",
                                "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Salve,",
                                "croce preziosa. Ricevi il discepolo di colui che in te fu sospeso, Cristo, mio maestro."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Il beato Andrea",
                                "pregava dicendo: Signore, re dell'eterna gloria, accogli l'offerta della mia passione!"
                            ));
                            break;
                            case 4: $this->res[$k]->setAntifona(array(
                                "Beato Andrea,",
                                "servo di Cristo, degno apostolo di Dio! Come Pietro, suo fratello, hai subito il martirio."
                            ));
                            break;
                            case 5: $this->res[$k]->setAntifona(array(
                                "Nostra gloria",
                                "è la croce del Signore Gesù."
                            ));
                            break;
                        }
                    }

                    elseif ($this->actual['ora']=='terza') {
                        $this->res[$k]->setAntifona(array(
                            "Chi vuol venire",
                            "dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua."
                        ));
                    }
                    elseif ($this->actual['ora']=='sesta') {
                        $this->res[$k]->setAntifona(array(
                            "Salve,",
                            "croce preziosa. Ricevi il discepolo di colui che in te fu sospeso, Cristo, mio maestro."
                        ));
                    }
                    elseif ($this->actual['ora']=='nona') {
                        switch ($s[0]) {
                            case 1: $this->res[$k]->setAntifona(array(
                                "Il beato Andrea",
                                "pregava dicendo: Signore, re dell'eterna gloria, accogli l'offerta della mia passione!"
                            ));
                            break;
                            case 2: $this->res[$k]->setAntifona(array(
                                "Beato Andrea,",
                                "servo di Cristo, degno apostolo di Dio! Come Pietro, suo fratello, hai subito il martirio."
                            ));
                            break;
                            case 3: $this->res[$k]->setAntifona(array(
                                "Nostra gloria",
                                "è la croce del Signore Gesù."
                            ));
                            break;
                        }
                    }
                }
            }

            //se DI SEGUITO copia antifona dal salmo precedente
            if ($s[0]=='') {
                $this->res[$k]->setAntifona($this->res[$k-1]->getAntifona()[0]);
            }
        }
    }

    function draw() {

        //registra il salmo di riferimento per l'antifona
        $ant="";

        foreach ($this->res as $k=>$r) {

            //se la posizione=='' significa che il salmo è una continuazione
            if ($this->salmi[$k][0]!='') {
                $r->drawAntifona(true);
            }

            $r->drawTitolo();

            $r->drawSalmo();

            //se non c'è il gloria significa che il successivo salmo è agganciato
            if ($this->salmi[$k][4]=='G') {

                if ($ant=="") {
                    $r->drawAntifona(false);
                }
                else {
                    $this->res[$ant]->drawAntifona(false);
                    $ant="";
                }
            }
            else {
                if ($ant=='') $ant=$k;
            }
        }

    }
    
}
?>