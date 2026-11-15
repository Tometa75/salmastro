<?php
class Saltesto {

    protected $head="";
    protected $testo=array();
    protected $label=array();
    protected $parte="";

    protected $prop=array(false,false);

    function __construct() {
        
    }

    function addBlock($b) {
        $this->testo[]=$b;
    }

    function addHead($txt) {
        $this->head=$txt;
    }

    function addLabel($l,$a) {
        $this->label[$l]=$a;
    }

    function setProp($index,$se,$op,$txt) {
        $this->prop[$index]=array(
            "se"=>$se,
            "op"=>$op,
            "txt"=>$txt
        );
    }

    function setParte($tag) {
        $this->parte=$tag;
    }

    /*
    - EBD=ebdomadario , RIS=risposta , SAC=sacerdote , NOTA=indicazione
    - 2=seconda riga (rientrata) , *=prima parte salmo , +=continuazione prima parte salmo
    - L=testo latino (grafica diversa, non letto ad alta voce)
    $b=array(
            array('ebd','','O Dio, vieni a salvarmi.'),
            array('ris','','Signore, vieni preto in mio aiuto.')
        );
        $this->info['testo']->addBlock($b);

        $b=array(
            array('','','Gloria al Padre e al Figlio'),
            array('','2','e allo Spirito Santo.'),
            array('','','Come era nel principio, e ora e sempre,'),
            array('','2','nei secoli dei secoli. Amen.')
        );
    */

    function draw() {

        echo '<div class="salTextBlock" style="font-size:1em;" >'.$this->head.'</div>';

        $index=0;

        foreach ($this->testo as $k=>$b) {

            echo '<div class="salTextBlock" >';

                foreach ($b as $x=>$t) {

                    if ($this->prop[0]) {
                        if ($this->prop[0]['se']=='' || strpos($t[0],$this->prop[0]['se'],0)!==false) {
                            if ($this->prop[0]['op']=='add') $t[0].=$this->prop[0]['txt'];
                            elseif ($this->prop[0]['op']=='chg') $t[0]=$this->prop[0]['txt'];
                        }
                    }
                    if ($this->prop[1]) {
                        if ($this->prop[1]['se']=='' || strpos($t[1],$this->prop[1]['se'],0)!==false) {
                            if ($this->prop[1]['op']=='add') $t[1].=$this->prop[1]['txt'];
                            elseif ($this->prop[1]['op']=='chg') $t[1]=$this->prop[1]['txt'];
                        }
                    }

                    ///////////////////////////////////////////////////

                    //echo '<div>'.json_encode($t).'</div>';
                    if (count($t)==1 && $t[0]!='') $t=$this->label[$t[0]];

                    $latino=(strpos($t[1],'L',0)!==false);

                    echo '<div class="salTextBody'.($latino?' salLatino':'').'" style="';
                        if ($t[1]!='') {
                            if ($t[1]=='N') echo 'color:brown;font-size:0.9em;';
                            elseif ($latino) echo 'font-style:italic;font-size:0.9em;color:#7a6a58;padding-left:30px;';
                            else {
                                if (strpos($t[1],'2',0)!==false) echo 'padding-left:30px;';
                                if (strpos($t[1],'c',0)!==false) echo 'color:#705103;';
                                if (strpos($t[1],'I',0)!==false) echo 'font-style:italic;';
                            }
                        }
                    echo '">';

                        if ($t[0]!='') {
                            echo '<img class="salTextCapo" src="'.SITE_URL.'/img/';
                                if ($t[0]=='ris') echo 'r.png';
                                elseif($t[0]=='ebd' || $t[0]=='sac') echo 'v.png';
                                elseif($t[0]=='*') echo 'asterisk2.png';
                                elseif($t[0]=='ant') echo 'ant.png';
                                elseif($t[0]=='-') echo 'trattino.png';
                            echo '" />';
                        }

                        if ($latino) {
                            //il latino non entra nella lettura ad alta voce
                            echo '<span lang="la">'.$t[2].'</span>';
                        }
                        else {
                            echo '<span id="salParte_'.$this->parte.'_'.$index.'" data-voxindex="'.$index.'" ';
                            //####################################################
                            //aggiungere parametri voce
                            if (strpos($t[1],'c',0)!==false) echo ' data-voxpitch="0.5"';
                            if (strpos($t[1],'*',0)!==false) echo ' data-voxdelay="800"';
                            //####################################################
                            echo ' >'.$t[2].'</span>';

                            $index++;
                        }

                        if ($t[1]!='') {
                            if (strpos($t[1],'*',0)!==false) echo '<img class="salTextEnd" src="'.SITE_URL.'/img/asterisk.png" />';
                            if (strpos($t[1],'+',0)!==false) echo '<img class="salTextEnd" src="'.SITE_URL.'/img/cross.png" />';
                        }
                    //else {
                        echo '</div>';
                    //}

                }

            echo '</div>';
        }

    }

}
?>