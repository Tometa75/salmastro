<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 29 Ringraziamento per la liberazione dalla morte';

    //lodi domenica
    $this->antifona[0]=array(
        "Hai mutato",
        "il mio lamento in gioia, mi hai fatto risalire dagli inferi."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "Hai mutato",
            "il mio lamento in gioia, mi hai fatto risalire dagli inferi."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Ti esalterò, Signore, perché mi hai liberato"),
                array('','2',"e su di me non hai lasciato esultare i nemici."),
                array('','*',"Signore Dio mio,"),
                array('','2',"a te ho gridato e mi hai guarito."),
                array('','*',"Signore, mi hai fatto risalire dagli inferi,"),
                array('','2',"mi hai dato vita perché non scendessi nella tomba.")
            ),
            array(
                array('','*',"Cantate inni al Signore, o suoi fedeli,"),
                array('','2',"rendete grazie al suo santo nome,"),
                array('','*',"perché la sua collera dura un istante,"),
                array('','2',"la sua bontà per tutta la vita."),
                array('','*',"Alla sera sopraggiunge il pianto"),
                array('','2',"e al mattino ecco la gioia.")
            ),
            array(
                array('','*',"Nella mia prosperità ho detto:"),
                array('','2',"« Nulla mi farà vacillare! »."),
                array('','*',"Nella tua bontà, o Signore,"),
                array('','2',"mi hai posto su un monte sicuro;")
            ),
            array(
                array('','*',"ma quando hai nascosto il tuo volto,"),
                array('','2',"io sono stato turbato."),
                array('','*',"A te grido, Signore,"),
                array('','2',"chiedo aiuto al mio Dio.")
            ),
            array(
                array('','*',"Quale vantaggio dalla mia morte,"),
                array('','2',"dalla mia discesa nella tomba?"),
                array('','*',"Ti potrà forse lodare la polvere"),
                array('','2',"e proclamare la tua fedeltà nell'amore?"),
                array('','*',"Ascolta, Signore, abbi misericordia,"),
                array('','2',"Signore, vieni in mio aiuto."),
            ),
            array(
                array('','*',"Hai mutato il mio lamento in danza,"),
                array('','2',"la mia veste di sacco in abito di gioia,"),
                array('','*',"perché io possa cantare senza posa."),
                array('','2',"Signore, mio Dio, ti loderò per sempre.")
            )
        )
    );

}
?>