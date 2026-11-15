<?php
$this->closure['load']=function() {

    $this->titolo='Cantico AT 43 (Ger 31,10-14) Dio libera e raduna il suo popolo nella gioia';

    //lodi giovedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Il tuo popolo,",
            "Signore, si sazia dei tuoi beni, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Il tuo popolo,",
            "Signore, si sazia dei tuoi beni."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Ascoltate, popoli, la parola del Signore"),
                array('','2',"annunziatela alle isole più lontane"),
                array('','*',"e dite: « Chi ha disperso Israele lo raduna"),
                array('','2',"e lo custodisce come un pastore il suo gregge »."),
                array('','*',"Perché il Signore ha redento Giacobbe,"),
                array('','2',"lo ha riscattato dalle mani del più forte di lui.")
            ),
            array(
                array('','*',"Verranno e canteranno inni sull'altura di Sion,"),
                array('','2',"affluiranno verso i beni del Signore,"),
                array('','*',"verso il grano, il mosto e l'olio,"),
                array('','2',"verso i nati dei greggi e degli armenti.") 
            ),
            array(
                array('','*',"Essi saranno come un giardino irrigato,"),
                array('','2',"non languiranno mai."),
                array('','*',"Allora si allieterà la vergine alla danza;"),
                array('','2',"i giovani e i vecchi gioiranno.") 
            ),
            array(
                array('','*',"Io cambierò il loro lutto in gioia,"),
                array('','2',"li consolerò e li renderò felici, senza afflizioni."),
                array('','*',"Sazierò di delizie l'anima dei sacerdoti"),
                array('','2',"e il mio popolo abbonderà dei miei beni.")
            )
        )
    );

}
?>