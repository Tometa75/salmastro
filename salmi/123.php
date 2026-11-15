<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 123 Ringraziamento per lo scampato pericolo';

    //nona martedì
    $this->antifona[0]=array(
        "Il nostro aiuto",
        "è nel nome del Signore: ha spezzato il laccio e ci ha liberati."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Se il Signore non fosse stato con noi, - lo dica Israele -"),
                array('','*',"se il Signore non fosse stato con noi,"),
                array('','2',"quando uomini ci assalirono,"),
                array('','*',"ci avrebbero inghiottiti vivi,"),
                array('','2',"nel furore della loro ira."),
                array('','+',"Le acque ci avrebbero travolti;"),
                array('','*',"un torrente ci avrebbe sommersi,"),
                array('','2',"ci avrebbero travolti acque impetuose.")
            ),
            array(
                array('','*',"Sia benedetto il Signore,"),
                array('','2',"che non ci ha lasciato preda ai loro denti."),
                array('','*',"Noi siamo stati liberati come un uccello"),
                array('','2',"dal laccio dei cacciatori:"),
                array('','*',"il laccio si è spezzato"),
                array('','2',"e noi siamo scampati.")
            ),
            array(
                array('','*',"Il nostro aiuto è nel nome del Signore,"),
                array('','2',"che ha fatto cielo e terra.")
            )
        )
    );

}
?>