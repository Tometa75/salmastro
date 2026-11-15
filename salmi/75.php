<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 75 Ringraziamento per la vittoria';

    //lodi giovedì
    $this->antifona[0]=array(
        "Grande",
        "è il Signore e potente, quando sorge a giudicare il mondo."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Dio è conosciuto in Giuda,"),
                array('','2',"in Israele è grande il suo nome."),
                array('','*',"È in Gerusalemme la sua dimora,"),
                array('','2',"la sua abitazione in Sion."),
                array('','*',"Qui spezzò le saette dell'arco,"),
                array('','2',"lo scudo, la spada, la guerra.")
            ),
            array(
                array('','*',"Splendido tu sei, o Potente,"),
                array('','2',"sui monti della preda;"),
                array('','+',"furono spogliati i valorosi,"),
                array('','*',"furono colti dal sonno,"),
                array('','2',"nessun prode ritrovava la sua mano."),
                array('','*',"Dio di Giacobbe, alla tua minaccia,"),
                array('','2',"si arrestarono carri e cavalli.")
            ),
            array(
                array('','*',"Tu sei terribile; chi ti resiste"),
                array('','2',"quando si scatena la tua ira?"),
                array('','*',"Dal cielo fai udire la sentenza:"),
                array('','2',"sbigottita la terra tace"),
                array('','*',"quando Dio si alza per giudicare,"),
                array('','2',"per salvare tutti gli umili della terra.")
            ),
            array(
                array('','*',"L'uomo colpito dal tuo furore ti dà gloria,"),
                array('','2',"gli scampati dell'ira ti fanno festa."),
                array('','*',"Fate voti al Signore vostro Dio e adempiteli,"),
                array('','2',"quanti lo circondano portino doni al Terribile,"),
                array('','*',"a lui che toglie il respiro ai potenti;"),
                array('','2',"è terribile per i re della terra.")
            )
        )
    );

}
?>