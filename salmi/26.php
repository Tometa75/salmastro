<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 26 Fiducia in Dio nei pericoli';

    //vespri venerdì
    $this->antifona[0]=array(
        "Il tuo volto,",
        "Signore, io cerco: lo contemplerò nella terra dei viventi."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "Il tuo volto,",
            "Signore, io cerco: lo contemplerò nella terra dei viventi."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Il Signore è la mia luce e mia salvezza,"),
                array('','2',"di chi avrò timore?"),
                array('','*',"Il Signore è difesa della mia vita,"),
                array('','2',"di chi avrò terrore?")
            ),
            array(
                array('','*',"Quando mi assalgono i malvagi"),
                array('','2',"per straziarmi la carne,"),
                array('','*',"sono essi, avversari e nemici,"),
                array('','2',"a inciampare e cadere.")
            ),
            array(
                array('','*',"Se contro di me si accampa un esercito,"),
                array('','2',"il mio cuore non teme;"),
                array('','*',"se contro di me divampa la battaglia,"),
                array('','2',"anche allora ho fiducia.")
            ),
            array(
                array('','*',"Una cosa ho chiesto al Signore,"),
                array('','2',"questa sola io cerco:"),
                array('','*',"abitare nella casa del Signore"),
                array('','2',"tutti i giorni della mia vita,"),
                array('','*',"per gustare la dolcezza del Signore"),
                array('','2',"ed ammirare il suo santuario.")
            ),
            array(
                array('','*',"Egli mi offre un luogo di rifugio"),
                array('','2',"nel giorno della sventura."),
                array('','*',"Mi nasconde nel segreto della sua dimora,"),
                array('','2',"mi solleva sulla rupe.")
            ),
            array(
                array('','*',"E ora rialzo la testa"),
                array('','2',"sui nemici che mi circondano;"),
                array('','*',"immolerò nella sua casa sacrifici d'esultanza,"),
                array('','2',"inni di gioia canterò al Signore.")
            ),
            array(
                array('','*',"Ascolta, Signore, la mia voce."),
                array('','2',"Io grido: Abbi pietà di me! Rispondimi."),
                array('','+',"Di te ha detto il mio cuore:"),
                array('','*',"« Cercate il suo volto »;"),
                array('','2',"il tuo volto, Signore, io cerco.")
            ),
            array(
                array('','*',"Non nascondermi il tuo volto,"),
                array('','2',"non respingere con ira il tuo servo."),
                array('','*',"Sei tu il mio aiuto, non lasciarmi,"),
                array('','2',"non abbandonarmi, Dio della mia salvezza."),
                array('','*',"Mio padre e mia madre mi hanno abbandonato,"),
                array('','2',"ma il Signore mi ha raccolto.")
            ),
            array(
                array('','+',"Mostrami, Signore, la tua via,"),
                array('','*',"guidami sul retto cammino,"),
                array('','2',"a causa dei miei nemici."),
                array('','+',"Non espormi alla brama dei miei avversari;"),
                array('','*',"contro di me sono insorti falsi testimoni"),
                array('','2',"che spirano violenza."),
            ),
            array(
                array('','*',"Sono certo di contemplare la bontà del Signore"),
                array('','2',"nella terra dei viventi."),
                array('','*',"Spera nel Signore, sii forte,"),
                array('','2',"si rinfranchi il tuo cuore e spera nel Signore.")
            )
        )
    );

}
?>