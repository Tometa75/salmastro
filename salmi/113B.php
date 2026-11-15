<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 113 B Lode al vero Dio";

    //vespri2 domenica
    $this->antifona[0]=array(
        "Ti benediciamo,",
        "o Signore: non a noi ma al tuo nome dà gloria."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Non a noi, Signore, non a noi,"),
                array('','*',"ma al tuo nome dà gloria,"),
                array('','2',"per la tua fedeltà, per la tua grazia."),
                array('','*',"Perché i popoli dovrebbero dire:"),
                array('','2',"« Dov'è il loro Dio? »."),
                array('','*',"Il nostro Dio è nei cieli,"),
                array('','2',"egli opera tutto ciò che vuole.")
            ),
            array(
                array('','*',"Gli idoli delle genti sono argento e oro,"),
                array('','2',"opera delle mani dell'uomo."),
                array('','*',"Hanno bocca e non parlano,"),
                array('','2',"hanno occhi e non vedono,"),
                array('','*',"hanno orecchi e non odono,"),
                array('','2',"hanno narici e non odorano.")
            ),
            array(
                array('','+',"Hanno mani e non palpano,"),
                array('','*',"hanno piedi e non camminano;"),
                array('','2',"dalla gola non emettono suoni."),
                array('','*',"Sia come loro chi li fabbrica"),
                array('','2',"e chiunque in essi confida.")
            ),
            array(
                array('','*',"Israele confida nel Signore:"),
                array('','2',"egli è loro aiuto e loro scudo."),
                array('','*',"Confida nel Signore la casa di Aronne:"),
                array('','2',"egli è loro aiuto e loro scudo."),
                array('','*',"Confida nel Signore, chiunque lo teme:"),
                array('','2',"egli è loro aiuto e loro scudo.")
            ),
            array(
                array('','+',"Il Signore si ricorda di noi, ci benedice:"),
                array('','*',"benedice la casa d'Israele,"),
                array('','2',"benedice la casa di Aronne."),
                array('','*',"Il Signore benedice quelli che lo temono,"),
                array('','2',"benedice i piccoli e i grandi."),
            ),
            array(
                array('','*',"Vi renda fecondi il Signore,"),
                array('','2',"voi e i vostri figli."),
                array('','*',"Siate benedetti dal Signore"),
                array('','2',"che ha fatto cielo e terra."),
                array('','*',"I cieli sono i cieli del Signore,"),
                array('','2',"ma ha dato la terra ai figli dell'uomo.")
            ),
            array(
                array('','*',"Non i morti lodano il Signore,"),
                array('','2',"né quanti scendono nella tomba."),
                array('','*',"Ma noi, i viventi, benediciamo il Signore"),
                array('','2',"ora e per sempre.")
            )
        )
    );
}
?>