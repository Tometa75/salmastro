<?php
require_once('preghiera.php');
require_once('invitatorio.php');
require_once('inno.php');
require_once('penitenza.php');
require_once('salmodia.php');
require_once('lettura.php');
require_once('orazione.php');
require_once('responsorio.php');
require_once('cantico.php');
require_once('invocazioni.php');
require_once('padrenostro.php');
require_once('beata.php');
require_once('testo.php');

class Litio {

    /*protected $invitatorio=array(
        "titolo"=>"Invitatorio",
        "st"=>array('P1','SAL')
    );*/

    protected $base=array(
        "lodi"=>array(
            "titolo"=>"Lodi Mattutine",
            "st"=>array('PI','INNO','SAL','LB','RB','ZAC','INV','PN','OR','PC'),
            "i"=>'05:00',
            'f'=>'08:30'
        ),
        "terza"=>array(
            "titolo"=>"Ora Terza",
            "st"=>array('PI','INNO','SAL','LB','RBB','OR','PC'),
            "i"=>'08:30',
            'f'=>'11:00'
        ),
        "sesta"=>array(
            "titolo"=>"Ora Sesta",
            "st"=>array('PI','INNO','SAL','LB','RBB','OR','PC'),
            "i"=>'11:00',
            'f'=>'14:00'
        ),
        "nona"=>array(
            "titolo"=>"Ora Nona",
            "st"=>array('PI','INNO','SAL','LB','RBB','OR','PC'),
            "i"=>'14:00',
            'f'=>'17:00'
        ),
        "ves"=>array(
            "titolo"=>"Vespri",
            "st"=>array('PI','INNO','SAL','LB','RB','MAG','INV','PN','OR','PC'),
            "i"=>'17:00',
            'f'=>'20:00'
        ),
        "ves1"=>array(
            "titolo"=>"Primi Vespri",
            "st"=>array('PI','INNO','SAL','LB','RB','MAG','INV','PN','OR','PC'),
            "i"=>'17:00',
            'f'=>'20:00'
        ),
        "ves2"=>array(
            "titolo"=>"Secondi Vespri",
            "st"=>array('PI','INNO','SAL','LB','RB','MAG','INV','PN','OR','PC'),
            "i"=>'17:00',
            'f'=>'20:00'
        ),
        "comp"=>array(
            "titolo"=>"Compieta",
            "st"=>array('PI','SIL','AP','CAP','SAL','LB','RB','SIM','OR','PC','BVM'),
            "i"=>'20:00',
            'f'=>'23:59'
        ),
        "comp1"=>array(
            "titolo"=>"Compieta dopo Primi Vespri",
            "st"=>array('PI','SIL','AP','CAP','SAL','LB','RB','SIM','OR','PC','BVM'),
            "i"=>'20:00',
            'f'=>'23:59'
        ),

    );

    public $map;
    public $vig;
    public $config=array();

    public $actual=array(
        "today"=>"",
        "ora"=>"",
        "tempo"=>"",
        "quarto"=>"",
        "settimana"=>"",
        "weekDay"=>"",
        "evento"=>"",
        "evCode"=>"",
        "festa"=>"",
        "fesCode"=>"",
        "ASC"=>""
    );

    //è l'insieme di oggetti che disegneranno la preghiera
    protected $res=array();

    function __construct($map,$vig,$config) {

        $this->map=$map;
        $this->vig=$vig;
        $this->config=$config;

        if (!isset($this->map['alternative'])) $this->map['alternative']=array();
        if (!isset($this->vig['alternative'])) $this->vig['alternative']=array();

        //################################
        //CELEBRAZIONI SPOSTATE scelte dall'utente
        //- nella tendina: una celebrazione spostata, celebrata in questo giorno, diventa l'evento del giorno
        $this->config['alt']='';
        if (isset($this->config['festa']) && $this->config['festa']!='' && isset($this->map['alternative'][$this->config['festa']])) {
            $this->config['alt']=$this->config['festa'];
            $this->config['festa']='';
            $this->map['evento']=$this->eventoAlternativo($this->map['alternative'][$this->config['alt']],$this->config['alt']);
        }
        //- nel menu delle ore: 'ves1|codice' e 'comp1|codice' sono i Primi Vespri (e la Compieta)
        //  di una celebrazione spostata che si sceglie di celebrare domani
        $this->config['oraKey']=isset($this->config['ora'])?$this->config['ora']:'';
        $vigAlt='';
        if (isset($this->config['ora']) && strpos($this->config['ora'],'|')!==false) {
            list($o,$c)=explode('|',$this->config['ora'],2);
            $this->config['ora']=$o;
            if (isset($this->vig['alternative'][$c])) $vigAlt=$c;
        }

        //$this->map['invitatorio']=$this->invitatorio;
        $this->map['actual']=$this->base;

        //{"today":"20260507","tempo":{"codice":"P","nome":"Tempo di Pasqua","colore":"white","fine":"pentecoste"},"anno":"A","settimana":5,"quarto":"","weekDay":"4","pari":true,"festa":[],"evento":{"PA54":{"titolo":"5\u00b0 settimana di Pasqua - Gioved\u00ec","tipo":"F"}},"rocho":false,"errore":false}

        /*l'evento è sempre solo 1
        $this->vig['tipoEv']="";
        foreach ($this->vig['evento'] as $k=>$e) {
            $this->vig['tipoEv']=$e['tipo'];
        }
        $this->map['tipoEv']="";
        foreach ($this->map['evento'] as $k=>$e) {
            $this->map['tipoEv']=$e['tipo'];
        }*/

        //################################
        //Verifica in base agli eventi se ci sono i PRIMI ed i SECONDI VESPRI
        $this->map['ssvv']=false;
        $this->map['ppvv']=false;

        $this->map['evCode']="";
        $this->vig['evCode']="";
        $this->map['fesCode']="";

        foreach ($this->vig['evento'] as $k=>$e) {
            if (isset($e['ppvv']) && $e['ppvv']) $this->map['ppvv']=true;
            $this->vig['evCode']=$k;
        }
        foreach ($this->map['evento'] as $k=>$e) {
            //if ($k==$this->config['festa'] && isset($e['ppvv']) && $e['ppvv']) $this->map['ssvv']=true;
            if (isset($e['ppvv']) && $e['ppvv']) $this->map['ssvv']=true;
            $this->map['evCode']=$k;
        }
        foreach ($this->map['festa'] as $k=>$e) {
            $this->map['fesCode']=$k;
        }

        if ($this->map['weekDay']==0 && !$this->map['ppvv']) $this->map['ssvv']=true;
        $ssvvOggi=$this->map['ssvv'];

        //se oggi ci sono i Secondi Vespri e domani i Primi Vespri, prevale la celebrazione
        //di grado più alto nella tabella dei giorni liturgici; a parità prevale oggi
        //(Norme generali sull'anno liturgico, n. 61)
        if ($this->map['ppvv'] && $this->map['ssvv']) {
            if ($this->grado($this->vig,$this->vig['evCode']) < $this->grado($this->map,$this->map['evCode'])) $this->map['ssvv']=false;
            else $this->map['ppvv']=false;
        }
        //################################

        //se domani è domenica o è una solennità ci sono i Primi Vespri e la compieta1
        //if ($this->vig['weekDay']==0 || (isset($this->vig['ppvv']) && $this->vig['ppvv']) ) {
        if ($this->map['ppvv']) {
            unset($this->map['actual']['ves']);
            unset($this->map['actual']['ves2']);
            unset($this->map['actual']['comp']);
        }
        else {
            unset($this->map['actual']['ves1']);
            unset($this->map['actual']['comp1']);

            //se oggi è domenica o è una solennità ci sono i secondi vespri
            //if ($this->map['weekDay']==0 || (isset($this->map['ssvv']) && $this->map['ssvv'])) {
            if ($this->map['ssvv']) {
                unset($this->map['actual']['ves']);
            }
            else {
                unset($this->map['actual']['ves2']);
            }
        }

        //le celebrazioni spostate che domani si possono celebrare: Primi Vespri e Compieta a scelta nel menu delle ore
        foreach ($this->vig['alternative'] as $k=>$a) {
            //domani è il giorno in cui il calendario ha spostato una celebrazione: per chi l'ha già celebrata,
            //stasera Vespri e Compieta del giorno al posto dei suoi Primi Vespri
            if (!empty($a['feria'])) {
                if ($this->map['ppvv']) {
                    $v=$ssvvOggi?'ves2':'ves';
                    $this->map['actual'][$v.'|'.$k]=$this->base[$v];
                    $this->map['actual'][$v.'|'.$k]['titolo']=$this->base[$v]['titolo'].' ('.$a['nota'].')';
                    $this->map['actual']['comp|'.$k]=$this->base['comp'];
                    $this->map['actual']['comp|'.$k]['titolo']=$this->base['comp']['titolo'].' ('.$a['nota'].')';
                }
                continue;
            }
            if (!isset($a['ppvv']) || !$a['ppvv']) continue;
            $this->map['actual']['ves1|'.$k]=$this->base['ves1'];
            $this->map['actual']['ves1|'.$k]['titolo']='Primi Vespri: '.$a['titolo'].' ('.$a['nota'].')';
            $this->map['actual']['comp1|'.$k]=$this->base['comp1'];
            $this->map['actual']['comp1|'.$k]['titolo']='Compieta dopo i Primi Vespri: '.$a['titolo'].' ('.$a['nota'].')';
        }

        //i Primi Vespri scelti: la celebrazione spostata diventa l'evento di domani
        if ($vigAlt!='') {
            $this->vig['evento']=$this->eventoAlternativo($this->vig['alternative'][$vigAlt],$vigAlt);
            $this->vig['evCode']='';
            foreach ($this->vig['evento'] as $k=>$e) $this->vig['evCode']=$k;
        }

        //Vespri del giorno: 'ves' e 'ves2' si equivalgono se l'ora richiesta non c'è (es. dopo aver scelto una celebrazione)
        if (isset($this->config['ora']) && $vigAlt=='') {
            if ($this->config['ora']=='ves' && !isset($this->map['actual']['ves']) && isset($this->map['actual']['ves2'])) $this->config['ora']='ves2';
            elseif ($this->config['ora']=='ves2' && !isset($this->map['actual']['ves2']) && isset($this->map['actual']['ves'])) $this->config['ora']='ves';
        }

        //$this->build();

    }

    //evento del giorno quando si sceglie un'alternativa: la celebrazione spostata, oppure l'ufficio del giorno
    function eventoAlternativo($a,$k) {
        if (!empty($a['feria'])) return $a['evento'];
        return array($k=>$a);
    }

    //grado della celebrazione nella tabella dei giorni liturgici (1 = il più alto)
    //serve solo a decidere tra Secondi Vespri di oggi e Primi Vespri di domani
    function grado($m,$evCode) {

        $ev=($evCode!="" && isset($m['evento'][$evCode]))?$m['evento'][$evCode]:array();
        $tipo=isset($ev['tipo'])?$ev['tipo']:'';

        //i Primi Vespri di Natale prevalgono anche sulla IV domenica di Avvento
        if ($evCode=='NAT') return 1;
        //Pasqua, Epifania, Ascensione, Pentecoste
        if (in_array($evCode,array('PAS','EPI','ASC','PEN'))) return 2;
        //domeniche di Avvento, Quaresima e Pasqua
        if ($m['weekDay']==0 && $tipo!='S' && in_array($m['tempo']['codice'],array('A','Q','P'))) return 2;
        //solennità proprie della famiglia benedettina
        if (in_array($evCode,array('0210a','0321a','0711a'))) return 4;
        //solennità del calendario generale
        if ($tipo=='S') return 3;
        //feste del Signore
        if (in_array($evCode,array('SAF','BAT','0202a','0806a','0914a'))) return 5;
        //domeniche del tempo di Natale e del tempo ordinario
        if ($m['weekDay']==0) return 6;
        //feste con i Primi Vespri
        if (isset($ev['ppvv']) && $ev['ppvv']) return 7;

        return 13;
    }

    function build() {

        $this->actual['ora']=$this->config['ora'];

        if ($this->config['ora']=='ves1' || $this->config['ora']=='comp1') {
            $this->actual['today']=$this->vig['today'];
            $this->actual['tempo']=$this->vig['tempo']['codice'];
            $this->actual['weekDay']=$this->vig['weekDay'];
            $this->actual['evento']=$this->vig['evento'];
            $this->actual['evCode']=$this->vig['evCode'];
            $this->actual['quarto']=$this->vig['quarto'];
            $this->actual['settimana']=$this->vig['settimana'];
            $this->actual['anno']=$this->vig['anno'];
            $this->actual['pari']=$this->vig['pari'];
            $this->actual['festa']=array();
            $this->actual['fesCode']="";
        }
        else {
            $this->actual['tempo']=$this->map['tempo']['codice'];
            $this->actual['today']=$this->map['today'];
            $this->actual['weekDay']=$this->map['weekDay'];
            $this->actual['evento']=$this->map['evento'];
            $this->actual['evCode']=$this->map['evCode'];
            $this->actual['quarto']=$this->map['quarto'];
            $this->actual['settimana']=$this->map['settimana'];
            $this->actual['anno']=$this->map['anno'];
            $this->actual['pari']=$this->map['pari'];
            $this->actual['festa']=$this->map['festa'];
            $this->actual['fesCode']=$this->config['festa'];
        }

        $this->actual['ASC']=$this->map['ASC'];

        ///////////////////////////////////////////////////////////

        foreach ($this->base[$this->config['ora']]['st'] as $k=>$o) {

            switch ($o) {
                case 'PI':
                    if ($this->actual['ora']=='lodi' && $this->config['inv']==1) {
                        $this->res['PI']=new Invito($this);
                    }
                    else {
                        $this->res['PI']=new Preghiera('inizio',$this);
                    }
                break;
                case 'SIL': $this->res['SIL']=new Penitenza($this);break;
                case 'INNO': $this->res['INNO']=new Inno($this);break;
                case 'SAL': $this->res['SAL']=new Salmodia($this);break;
                case 'LB': $this->res['LB']=new Lettura($this);break;
                case 'RB': $this->res['RB']=new Responsorio($this,'RB');break;
                case 'RBB': $this->res['RBB']=new Responsorio($this,'RBB');break;
                case 'ZAC': $this->res['ZAC']=new Cantico($this,'ZAC');break;
                case 'MAG': $this->res['MAG']=new Cantico($this,'MAG');break;
                case 'SIM': $this->res['SIM']=new Cantico($this,'SIM');break;
                case 'INV': $this->res['INV']=new Invocazioni($this);break;
                case 'PN': $this->res['PN']=new PadreNostro($this);break;
                case 'OR': $this->res['OR']=new Orazione($this);break;
                case 'PC': $this->res['PC']=new Preghiera('fine',$this);break;
                case 'BVM': $this->res['BVM']=new Beata($this);break;
            }
        }

        /*
        //STEP 1 - attribuzione di COMUNE
        if ($a['tempo']['codice']=='O') {
            foreach ($a['actual'])
            foreach ($this->salterio[$config['ora']][$a['weekDay']] as $k=>$o) {
                if (array_key_exists($k,$this->map['actual'])) {

                }
            }
        }

        //STEP 2 - modifica PROPRIO
        */
    }

    function drawHead() {

        echo '<div class="salBottomHead" style="height:10%;border-bottom:1px solid #777777;background-image:url(\''.SITE_URL.'/img/backBottomHead.png\');" >';
        //echo '<div class="salBottomHead" style="height:10%;border-bottom:1px solid #a4a138;" >';

            echo '<div style="position:relative;display:inline-block;width:20%;vertical-align:top;padding:5px;box-sizing:border-box;">';

                $tnow=date('H:i');
                $def="";
				
				$oraSel=$this->config['oraKey'];
				if ($oraSel!='' && strpos($oraSel,'|')===false) $oraSel=$this->config['ora'];
				if ($oraSel!='' && !isset($this->map['actual'][$oraSel])) {
					$def=substr($oraSel,0,3);
					$oraSel='';
				}
				if ($oraSel=='' && $def=='') {
	                foreach ($this->base as $kb=>$ob) {
	                    if ($tnow>=$ob['i'] && $tnow<=$ob['f']) {
	                        $def=substr($kb,0,3);
	                        break;
	                    }
	                }
				}

                echo '<select id="sal_ora" style="position:relative;width:95%;font-size:1.2em;font-weight:bold;margin-top:5px;text-align:center;background-color:#d4dfee;" >';
                    $fatto=false;
                    foreach ($this->map['actual'] as $k=>$a) {
                        echo '<option value="'.$k.'" ';
                            if ($oraSel!='' && $oraSel==$k) echo 'selected';
                            elseif ($oraSel=='' && !$fatto && strpos($k,'|')===false && $def==substr($k,0,3)) {
                                echo 'selected';
                                $fatto=true;
                            }
                        echo '>'.$a['titolo'].'</option>';
                    }
                echo '</select>';

            echo '</div>';

            echo '<div style="position:relative;display:inline-block;width:8%;vertical-align:top;box-sizing:border-box;margin-top:5px;text-align:center;">';
                
                echo '<div style="position:relative;top:-2px;font-size:1em;font-weight:bold;">Invitatorio</div>'; 
                echo '<input id="sal_inv" type="checkbox" '.((isset($this->config['inv']) && $this->config['inv']==1)?'checked':'').'/>';
                //echo '<input id="sal_mix" type="checkbox" '.((isset($this->config['mix']) && $this->config['mix']==1)?'checked':'').'/>';
                //echo '<span style="font-size:1.2em;font-weight:bold;margin-left:5px;">Mix</span>'; 

            echo '</div>';

            echo '<div style="position:relative;display:inline-block;width:50%;vertical-align:top;padding:5px;box-sizing:border-box;">';
                 
                echo '<select id="sal_festa" style="position:relative;width:98%;font-size:1em;font-weight:bold;margin-top:5px;text-align:center;background-color:#d4dfee;" ';
                    //scegliere o togliere una celebrazione spostata cambia le ore del giorno: si ricarica la pagina
                    if (count($this->map['alternative'])>0) echo 'onchange="window._calnav_salmastro.customExecute();"';
                echo '>';
                    /*if (count($this->map['evento'])>0) {
                        foreach ($this->map['evento'] as $k=>$f) {
                            echo '<option value="'.$k.'" ';
                                if (isset($this->config['festa']) && $this->config['festa']==$k) echo 'selected';
                            echo '>'.$f['titolo'].'</option>';
                        }
                    }
                    else {
                        echo '<option value="">Scegli una memoria...</option>';
                    }*/

                    echo '<option value="">Scegli una memoria...</option>';

                    foreach ($this->map['festa'] as $k=>$f) {
                        if ($f['tipo']=='X') continue;
                        echo '<option value="'.$k.'" ';
                            if (isset($this->config['festa']) && $this->config['festa']==$k) echo 'selected';
                        echo '>'.$f['titolo'].'</option>';
                    }

                    //celebrazioni spostate dal calendario che si possono celebrare in questo giorno
                    foreach ($this->map['alternative'] as $k=>$a) {
                        echo '<option value="'.$k.'" ';
                            if ($this->config['alt']==$k) echo 'selected';
                        echo '>'.$a['titolo'].' ('.$a['nota'].')</option>';
                    }
                echo '</select>';

            echo '</div>';

            echo '<div style="position:relative;display:inline-block;width:1%;vertical-align:top;padding:5px;box-sizing:border-box;margin-top:5px;">';
                
                echo '<input id="sal_mix" type="checkbox" style="visibility:hidden;" />';
                //echo '<input id="sal_mix" type="checkbox" '.((isset($this->config['mix']) && $this->config['mix']==1)?'checked':'').'/>';
                //echo '<span style="font-size:1.2em;font-weight:bold;margin-left:5px;">Mix</span>'; 

            echo '</div>';

            echo '<div style="position:relative;display:inline-block;width:10%;vertical-align:top;padding:5px;box-sizing:border-box;">';
                
                $temp=array(
                    "solo"=>"Personale",
                    "comune"=>"Comunità",
                    "prete"=>"Sacerdote"
                );

                echo '<select id="sal_contesto" style="position:relative;width:95%;font-size:1em;font-weight:bold;margin-top:5px;text-align:center;background-color:#d4dfee;" >';
                    foreach ($temp as $k=>$f) {
                        echo '<option value="'.$k.'" ';
                            if (isset($this->config['contesto']) && $this->config['contesto']==$k) echo 'selected';
                        echo '>'.$f.'</option>';
                    }
                echo '</select>';

            echo '</div>';

            echo '<div style="position:relative;display:inline-block;width:8%;vertical-align:top;padding:5px;box-sizing:border-box;text-align:center;">';

                echo '<img style="width:40px;height:40px;cursor:pointer;" src="'.SITE_URL.'/img/book.png" onclick="window._salmastro.load();"/>';

            echo '</div>';

        echo '</div>';
        
        echo '<div id="salTestoContainer" class="salTestoContainer" style="" >';

            echo '<div id="salTesto" style="" >';
                //echo __DIR__;
            echo '</div>';

        echo '</div>';

    }

    function drawPlayer($tag,$ant) {

            echo '<div style="position:relative;display:inline-block;width:200px;vertical-align:bottom;box-sizing:border-box;" >';
                echo '<img id="vox_img_play_'.$tag.'" style="width:30px;margin-left:10px;display:block;cursor:pointer;vertical-align:bottom;" src="'.SITE_URL.'/img/play.png" onclick="window._salmastro.playTTS(\''.$tag.'\','.$ant.')" />';
                echo '<img id="vox_img_pause_'.$tag.'" style="width:30px;margin-left:10px;display:none;cursor:pointer;vertical-align:bottom;" src="'.SITE_URL.'/img/pause.png" onclick="window._salmastro.pauseTTS()" />';
                echo '<img id="vox_img_stop_'.$tag.'" style="width:30px;margin-left:10px;display:none;cursor:pointer;vertical-align:bottom;" src="'.SITE_URL.'/img/stop.png" onclick="window._salmastro.stopTTS()" />';
            echo '</div>';

    }

    function draw() {

        echo '<div style="margin-top:15px;margin-bottom:15px;">';
            echo '<audio id="salMyAudio" controls loop preload="auto">';
                echo '<source src="'.SITE_URL.'/img/greg.mp3" type="audio/mpeg">';
                echo 'Your browser does not support the audio element.';
            echo '</audio>';
            echo '<script>';
                echo 'const audio = document.getElementById("salMyAudio");';
                echo 'audio.volume = 0.3; // Imposta il volume iniziale';
            echo '</script>';
        echo '</div>';

        foreach ($this->res as $k=>$o) {
            //echo '<div>'.$k.'</div>';
            echo '<div class="salResBlock" >';
                $o->draw();
            echo '</div>';
        }
       
        //echo '<div>'.json_encode($this->map).'</div>';
        //echo '<div>'.json_encode($this->vig).'</div>';
        //echo '<div>'.json_encode($this->map['actual'][$this->config['ora']]).'</div>';
    }

}

?>