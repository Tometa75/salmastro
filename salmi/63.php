<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 63 Preghiera contro il terrore del nemico';

    //lodi giovedì
    $this->antifona[0]=array(
        "Annunziate",
        "le opere del Signore: è lui la salvezza dai nemici."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "Annunziate",
            "le opere del Signore: è lui la salvezza dai nemici."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Ascolta, Dio, la voce del mio lamento,"),
                array('','2',"dal terrore del nemico preserva la mia vita."),
                array('','*',"Proteggimi dalla congiura degli empi,"),
                array('','2',"dal tumulto dei malvagi.")
            ),
            array(
                array('','+',"Affilano la loro lingua come spada,"),
                array('','*',"scagliano come frecce parole amare"),
                array('','2',"per colpire di nascosto l'innocente;"),
                array('','*',"lo colpiscono di sorpresa"),
                array('','2',"e non hanno timore.")
            ),
            array(
                array('','+',"Si ostinano nel fare il male,"),
                array('','*',"si accordano per nascondere tranelli;"),
                array('','2',"dicono: « Chi li potrà vedere? »."),
                array('','*',"Meditano iniquità, attuano le loro trame:"),
                array('','2',"un baratro è l'uomo e il suo cuore un abisso.")
            ),
            array(
                array('','*',"Ma Dio li colpisce con le sue frecce:"),
                array('','2',"all'improvviso essi sono feriti,"),
                array('','*',"la loro stessa lingua li farà cadere;"),
                array('','2',"chiunque, al vederli, scuoterà il capo.")
            ),
            array(
                array('','+',"Allora tutti saranno presi da timore,"),
                array('','*',"annunzieranno le opere di Dio"),
                array('','2',"e capiranno ciò che egli ha fatto."),
                array('','+',"Il giusto gioirà nel Signore"),
                array('','*',"e riporrà in lui la sua speranza,"),
                array('','2',"i retti di cuore ne trarranno gloria."),
            )
        )
    );

}
?>