<?php
$this->closure['load']=function() {

    $this->titolo='Cantico AT 52 (Ab 3,2-4. 13a. 15-19) Dio appare per il giudizio';

    //lodi venerdì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Nel tuo sdegno,",
            "Signore, ricordati della tua misericordia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Nel tuo sdegno,",
            "Signore, ricordati della tua misericordia."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Signore, ho ascoltato il tuo annunzio,"),
                array('','2',"Signore, ho avuto timore della tua opera."),
                array('','+',"Nel corso degli anni manifestala,"),
                array('','*',"falla conoscere nel corso degli anni."),
                array('','2',"Nello sdegno ricordati di avere clemenza.")
            ),
            array(
                array('','*',"Dio viene da Teman,"),
                array('','2',"il Santo dal monte Paran."),
                array('','*',"La sua maestà ricopre i cieli,"),
                array('','2',"delle sue lodi è piena la terra.") 
            ),
            array(
                array('','+',"Il suo splendore è come la luce,"),
                array('','*',"bagliori di folgore escono dalle sue mani:"),
                array('','2',"là si cela la sua potenza."),
                array('','*',"Sei uscito per salvare il tuo popolo,"),
                array('','2',"per salvare il tuo consacrato."),
                array('','*',"Hai affogato nel mare i cavalli dell'empio"),
                array('','2',"nella melma di grandi acque.")
            ),
            array(
                array('','*',"Ho udito e fremette il mio cuore,"),
                array('','2',"a tal voce tremò il mio labbro,"),
                array('','*',"la carie entra nelle mie ossa"),
                array('','2',"e sotto di me tremano i miei passi."),
                array('','*',"Sospiro nel giorno dell'angoscia"),
                array('','2',"che verrà contro il popolo che ci opprime.")
            ),
            array(
                array('','+',"Il fico infatti non metterà germogli,"),
                array('','*',"nessun prodotto daranno le viti,"),
                array('','2',"cesserà il raccolto dell'olivo,"),
                array('','+',"i campi non daranno più cibo,"),
                array('','*',"i greggi spariranno dagli ovili"),
                array('','2',"e le stalle rimarranno senza buoi.")
            ),
            array(
                array('','*',"Ma io gioirò nel Signore,"),
                array('','2',"esulterò in Dio mio Salvatore."),
                array('','+',"Il Signore Dio è la mia forza,"),
                array('','*',"egli rende i miei piedi come quelli delle cerve"),
                array('','2',"e sulle alture mi fa camminare.")
            )
        )
    );

}
?>