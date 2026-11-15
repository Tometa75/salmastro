<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 132 Gioia dell'amore fraterno";

    //compieta mercoledì 
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Vita",
            "e benedizione sui fratelli che vivono insieme, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Vita",
            "e benedizione sui fratelli che vivono insieme."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Ecco quanto è buono e quanto è soave"),
                array('','2',"che i fratelli vivano insieme!"),
                array('','+',"È come olio profumato sul capo,"),
                array('','*',"che scende sulla barba, sulla barba di Aronne,"),
                array('','2',"che scende sull'orlo della sua veste.")
            ),
            array(
                array('','*',"È come rugiada dell'Ermon,"),
                array('','2',"che scende sui monti di Sion."),
                array('','*',"Là il Signore dona la benedizione"),
                array('','2',"e la vita per sempre.")
            )
        )
    );

}
?>