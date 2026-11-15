<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 15 Il Signore è mia eredità";

    //compieta1 domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Nelle tue mani",
            "è la mia vita, o Dio; anche il mio corpo riposa sicuro, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Nelle tue mani",
            "è la mia vita, o Dio; anche il mio corpo riposa sicuro."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Proteggimi, o Dio:"),
                array('','2',"in te mi rifugio."),
                array('','*',"Ho detto a Dio: « Sei tu il mio Signore,"),
                array('','2',"senza di te non ho alcun bene ».")
            ),
            array(
                array('','*',"Per i santi, che sono sulla terra, uomini nobili,"),
                array('','2',"è tutto il mio amore."),
                array('','+',"Si affrettino altri a costruire idoli:"),
                array('','*',"io non spanderò le loro libazioni di sangue"),
                array('','2',"né pronunzierò con le mie labbra i loro nomi.")
            ),
            array(
                array('','*',"Il Signore è mia parte di eredità e mio calice:"),
                array('','2',"nelle tue mani è la mia vita."),
                array('','*',"Per me la sorte è caduta su luoghi deliziosi,"),
                array('','2',"la mia eredità è magnifica.")
            ),
            array(
                array('','*',"Benedico il Signore che mi ha dato consiglio;"),
                array('','2',"anche di notte il mio cuore mi istruisce."),
                array('','*',"Io pongo sempre innanzi a me il Signore,"),
                array('','2',"sta alla mia destra, non posso vacillare."),
                array('','+',"Di questo gioisce il mio cuore,"),
                array('','*',"esulta la mia anima;"),
                array('','2',"anche il mio corpo riposa al sicuro,")   
            ),
            array(
                array('','*',"perché non abbandonerai la mia vita nel sepolcro,"),
                array('','2',"né lascerai che il tuo santo veda la corruzione."),
                array('','+',"Mi indicherai il sentiero della vita,"),
                array('','*',"gioia piena nella tua presenza,"),
                array('','2',"dolcezza senza fine alla tua destra.")
            )
        )
    );

}
?>