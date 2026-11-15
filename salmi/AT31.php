<?php
$this->closure['load']=function() {

    $this->titolo='Cantico AT 31 (Is 45,15-25) Tutti i popoli si convertano al Signore';

    //lodi venerdì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "In te la vittoria,",
            "Signore, tu sei la gloria d'Israele tuo popolo, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "In te la vittoria,",
            "Signore, tu sei la gloria d'Israele tuo popolo."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Veramente tu sei un Dio misericordioso,"),
                array('','2',"Dio d'Israele, salvatore."),
                array('','*',"Saranno confusi e svergognati"),
                array('','2',"quanti s'infuriano contro di lui;"),
                array('','*',"se ne andranno con ignominia"),
                array('','2',"i fabbricanti di idoli.")
            ),
            array(
                array('','*',"Israele sarà salvato dal Signore con salvezza perenne."),
                array('','2',"Non patirete confusione o vergogna per i secoli eterni."),
                array('','+',"Poiché così dice il Signore, che ha creato i cieli;"),
                array('','*',"egli, il Dio che ha plasmato e fatto la terra"),
                array('','2',"e l'ha resa stabile;"),
                array('','*',"l'ha creata non come orrida regione,"),
                array('','2',"ma l'ha plasmata perché fosse abitata:") 
            ),
            array(
                array('','+',"« Io sono il Signore; non ce n'è un altro."),
                array('','*',"Io non ho parlato in segreto,"),
                array('','2',"in un angolo oscuro della terra."),
                array('','*',"Non ho detto alla discendenza di Giacobbe:"),
                array('','2',"Cercatemi in un orrida regione!"),
                array('','*',"Io sono il Signore, che parlo con giustizia,"),
                array('','2',"che annunzio cose rette.")
            ),
            array(
                array('','+',"Radunatevi e venite,"),
                array('','*',"avvicinatevi tutti insieme,"),
                array('','2',"superstiti delle nazioni!"),
                array('','+',"Non hanno intelligenza"),
                array('','*',"quelli che portano un idolo da loro scolpito"),
                array('','2',"e pregano un dio che non può salvare."),
            ),
            array(
                array('','*',"Manifestate e portate le prove,"),
                array('','2',"consigliatevi pure insieme!"),
                array('','*',"Chi ha fatto sentire ciò da molto tempo"),
                array('','2',"e chi l'ha predetto fin da allora?")
            ),
            array(
                array('','+',"Non sono forse io, il Signore?"),
                array('','*',"Fuori di me non c'è altro Dio;"),
                array('','2',"fuori di me non c'è Dio giusto e salvatore."),
                array('','+',"Volgetevi a me e sarete salvi,"),
                array('','*',"paesi tutti della terra,"),
                array('','2',"perché io sono Dio; non ce n'è un altro.")
            ),
            array(
                array('','+',"Lo giuro su me stesso,"),
                array('','*',"la verità esce dalla mia bocca,"),
                array('','2',"una parola irrevocabile:"),
                array('','*',"davanti a me si piegherà ogni ginocchio,"),
                array('','2',"per me giurerà ogni lingua ».")
            ),
            array(
                array('','*',"Si dirà: « Solo nel Signore"),
                array('','2',"si trovano vittoria e potenza! »."),
                array('','*',"Verso di lui verranno, coperti di vergogna,"),
                array('','2',"quanti fremevano d'ira contro di lui."),
                array('','*',"Nel Signore saranno vittoriosi e si glorieranno"),
                array('','2',"tutti i discendenti di Israele.")
            )
        )
    );

}
?>