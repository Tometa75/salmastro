<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 126 Ogni fatica è vana senza il Signore';

    //nona mercoledì
    $this->antifona[0]=array(
        "Se il Signore",
        "non custodisce la città, invano veglia il custode."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Se il Signore non custodisce la casa,"),
                array('','2',"invano vi faticano i costruttori."),
                array('','*',"Se la città non è custodita dal Signore,"),
                array('','2',"invano veglia il custode."),
                array('','+',"Invano vi alzate di buon mattino,"),
                array('','*',"tardi andate a riposare e mangiate pane di sudore:"),
                array('','2',"il Signore ne darà ai suoi amici nel sonno.")
            ),
            array(
                array('','*',"Ecco, dono del Signore sono i figli,"),
                array('','2',"è sua grazia il frutto del grembo."),
                array('','*',"Come frecce in mano a un eroe"),
                array('','2',"sono i figli della giovinezza."),
                array('','+',"Beato l'uomo che piena ne ha la faretra:"),
                array('','*',"non resterà confuso quando verrà alla porta"),
                array('','2',"a trattare con i propri nemici.")
            )
        )
    );

}
?>