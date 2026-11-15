<?php


class Preghiera {

    protected $info=array(
        "tipo"=>"inizio",
        "titolo"=>"",
        "parte"=>"",
        "testo"=>false,
        "alt"=>false
    );

    protected $litio;

    function __construct($tipo,$caller) {

        //inizio || fine
        $this->info['tipo']=$tipo;
        $this->litio=$caller;

        $this->info['testo']=new Saltesto();

        if ($this->info['tipo']=='inizio') {
            $this->info['parte']='PI';
            $this->info['testo']->setParte('PI');
            $this->setInizio();
        }
        elseif ($this->info['tipo']=='fine') {
            $this->info['parte']='PC';
            $this->info['testo']->setParte('PC');
            $this->setFine();
        }
    }

    function setInizio() {

        $this->info['titolo']='Preghiera Iniziale';

        $b=array(
            array('ebd','','O Dio, vieni a salvarmi.'),
            array('ris','','Signore, vieni presto in mio aiuto.')
        );
        $this->info['testo']->addBlock($b);

        $b=array(
            array('','','Gloria al Padre e al Figlio'),
            array('','2','e allo Spirito Santo.'),
            array('','','Come era nel principio, e ora e sempre,'),
            array('','2','nei secoli dei secoli. Amen.')
        );
        $this->info['testo']->addBlock($b);

        if ($this->litio->map['tempo']['codice']!='Q') {
            $b=array(
                array('','','Alleluia.')
            );
            $this->info['testo']->addBlock($b);
        }
    }

    function setFine() {

        $this->info['titolo']='Preghiera Conclusiva';

        $ora=$this->litio->config['ora'];

        if ($ora=='terza' || $ora=='sesta' || $ora=='nona') {

            $b=array(
                array('ebd','','Benediciamo il Signore.'),
                array('ris','','Rendiamo grazie a Dio.')
            );
            $this->info['testo']->addBlock($b);

            $b=array(
                array('ebd','L','Benedicámus Dómino.'),
                array('ris','L','Deo grátias.')
            );
            $this->info['testo']->addBlock($b);
        }
        elseif ($ora=='comp' || $ora=='comp1') {

            //nel libro la formula di Compieta non ha il ℣
            $b=array(
                array('','','Il Signore ci conceda una notte serena e un riposo tranquillo.'),
                array('ris','','Amen.')
            );
            $this->info['testo']->addBlock($b);

            $b=array(
                array('','L','Noctem quiétam et finem perféctum concédat nobis Dóminus omnípotens.'),
                array('ris','L','Amen.')
            );
            $this->info['testo']->addBlock($b);
        }
        else {

            if ($this->litio->config['contesto']=='solo') {

                $b=array(
                    array('','','Il Signore ci benedica, ci preservi da ogni male, e ci conduca alla vita eterna, con i nostri fratelli assenti.'),
                    array('','2',"Amen.")
                );
                $this->info['testo']->addBlock($b);

                $b=array(
                    array('','L','Dóminus nos benedícat, et ab omni malo deféndat, et ad vitam perdúcat ætérnam, cum frátribus nostris abséntibus. Amen.')
                );
                $this->info['testo']->addBlock($b);
            }
            elseif ($this->litio->config['contesto']=='prete') {

                $b=array(
                    array('sac','','Il Signore sia con voi.'),
                    array('ris','','E con il tuo spirito.')
                );
                $this->info['testo']->addBlock($b);

                //nel libro la benedizione non ha il ℣
                $b=array(
                    array('','','Vi benedica Dio onnipotente, Padre e Figlio e Spirito Santo.'),
                    array('ris','','Amen.')
                );
                $this->info['testo']->addBlock($b);

                $b=array(
                    array('sac','L','Dóminus vobíscum.'),
                    array('ris','L','Et cum spíritu tuo.'),
                    array('','L','Benedícat vos omnípotens Deus, Pater, et Fílius, et Spíritus Sanctus.'),
                    array('ris','L','Amen.')
                );
                $this->info['testo']->addBlock($b);
            }
            else {

                //doppio alleluia (libro pp. 4, 466, 543): Pasqua e la sua ottava fino alla II Domenica di Pasqua,
                //Secondi Vespri di Pentecoste, Vespri del martedì che precede le Ceneri
                $ev=$this->litio->actual['evCode'];
                $alleluia=($ev=='PAS' || substr($ev,0,3)=='PA1' || $ev=='PA2');
                if ($ora=='ves2' && array_key_exists('PEN',$this->litio->map['evento'])) $alleluia=true;
                if ($ora=='ves' && array_key_exists('CEN',$this->litio->vig['evento'])) $alleluia=true;

                $this->setComunita($this->info['testo'],$alleluia?'alleluia':'');

                //il giorno di Pasqua, invece di Benediciamo il Signore, si può dire "Voi, che dopo i giorni della Passione..." (p. 466)
                if ($ev=='PAS') {
                    $this->info['alt']=new Saltesto();
                    $this->info['alt']->setParte('PC2');
                    $this->setComunita($this->info['alt'],'pasqua');
                }
            }
        }
    }

    function setComunita($testo,$tipo) {
        //preghiera conclusiva di Lodi e Vespri in comunità

        $b=array(
            array('sac','','Il Signore sia con voi.'),
            array('ris','','E con il tuo spirito.')
        );
        $testo->addBlock($b);

        if ($tipo=='pasqua') {
            $b=array(
                array('sac','','Voi, che dopo i giorni della Passione, celebrate con gioia la Pasqua del Signore, possiate giungere alla grande festa della Pasqua eterna.'),
                array('ris','','Amen.')
            );
        }
        elseif ($tipo=='alleluia') {
            $b=array(
                array('sac','','Benediciamo il Signore, alleluia, alleluia.'),
                array('ris','','Rendiamo grazie a Dio, alleluia, alleluia.')
            );
        }
        else {
            $b=array(
                array('sac','','Benediciamo il Signore.'),
                array('ris','','Rendiamo grazie a Dio.')
            );
        }
        $testo->addBlock($b);

        $b=array(
            array('sac','',"L'aiuto del Signore resti sempre con noi."),
            array('ris','','E con i nostri fratelli assenti. Amen.')
        );
        $testo->addBlock($b);

        //il latino del libro (per "Voi, che dopo i giorni della Passione" il libro non lo riporta)
        if ($tipo!='pasqua') {
            $all=($tipo=='alleluia')?', allelúia, allelúia.':'.';
            $b=array(
                array('sac','L','Dóminus vobíscum.'),
                array('ris','L','Et cum spíritu tuo.'),
                array('sac','L','Benedicámus Dómino'.$all),
                array('ris','L','Deo grátias'.$all),
                array('sac','L','Divínum auxílium máneat semper nobíscum.'),
                array('ris','L','Et cum frátribus nostris abséntibus. Amen.')
            );
            $testo->addBlock($b);
        }
    }

    function draw() {

        echo '<div class="salResBlockTitle" >';
            echo '<span>'.$this->info['titolo'].'</span>';
            if ($this->litio->config['vox']) {
                $this->litio->drawPlayer($this->info['parte'],0);
            }
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->info['alt']) {
                //bottoni come per il cantico delle Lodi: la formula regolare è preselezionata
                $opzioni=array(
                    0=>array($this->info['testo'],'Benediciamo il Signore','regolare'),
                    1=>array($this->info['alt'],'Voi, che dopo i giorni della Passione','si può dire')
                );
                echo '<div class="salAltScelta">';
                    foreach ($opzioni as $i=>$o) {
                        echo '<div id="salmastro_salaltbtn_PC_'.$i.'" class="salAltBtn'.($i==0?' salAltSel':'').'" onclick="window._salmastro.salAlt(\'PC\','.$i.');">';
                            echo htmlspecialchars($o[1]);
                            echo '<div class="salAltNota">'.$o[2].'</div>';
                        echo '</div>';
                    }
                echo '</div>';
                foreach ($opzioni as $i=>$o) {
                    echo '<div id="salmastro_salalt_PC_'.$i.'"'.($i==0?'':' style="display:none;"').'>';
                        $o[0]->draw();
                    echo '</div>';
                }
            }
            elseif ($this->info['testo']) {
                echo $this->info['testo']->draw();
            }
        echo '</div>';


        /*echo '<div>'.json_encode($this->litio->map).'</div>';
        echo '<div>'.json_encode($this->litio->vig).'</div>';
        echo '<div>'.json_encode($this->litio->config).'</div>';*/
        
    }


    
}
?>