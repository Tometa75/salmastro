<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 140 Preghiera nel pericolo';

    //vespri venerdì
    $this->antifona[0]=array(
        "Come incenso,",
        "o Dio, salga a te la mia preghiera."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Signore, a te grido, accorri in mio aiuto;"),
                array('','2',"ascolta la mia voce quando t'invoco."),
                array('','*',"Come incenso salga a te la mia preghiera,"),
                array('','2',"le mie mani alzate come sacrificio della sera.")
            ),
            array(
                array('','*',"Poni, Signore, una custodia alla mia bocca,"),
                array('','2',"sorveglia la porta delle mie labbra."),
                array('','+',"Non lasciare che il mio cuore si pieghi al male"),
                array('','*',"e compia azioni inique con i peccatori:"),
                array('','2',"che io non gusti i loro cibi deliziosi.")
            ),
            array(
                array('','+',"Mi percuota il giusto e il fedele mi rimproveri,"),
                array('','*',"ma l'olio dell'empio non profumi il mio capo;"),
                array('','2',"tra le loro malvagità continui la mia preghiera."),
                array('','*',"Dalla rupe furono gettati i loro capi,"),
                array('','2',"che da me avevano udito dolci parole."),
                array('','*',"Come si fende e si apre la terra,"),
                array('','2',"le loro ossa furono disperse alla bocca degli inferi.")
            ),
            array(
                array('','*',"A te, Signore mio Dio, sono rivolti i miei occhi;"),
                array('','2',"in te mi rifugio, proteggi la mia vita."),
                array('','*',"Preservami dal laccio che mi tendono,"),
                array('','2',"dagli agguati dei malfattori."),
                array('','*',"Gli empi cadono insieme nelle loro reti,"),
                array('','2',"ma io passerò oltre incolume.")
            )
        )
    );

}
?>