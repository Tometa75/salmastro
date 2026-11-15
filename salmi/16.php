<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 16 Dio speranza dell'innocente perseguitato";

    //compieta1 domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Nella giustizia",
            "contemplerò il tuo volto, al risveglio mi sazierò della tua presenza, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Nella giustizia",
            "contemplerò il tuo volto, al risveglio mi sazierò della tua presenza."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Accogli, Signore, la causa del giusto,"),
                array('','2',"sii attento al mio grido."),
                array('','*',"Porgi l'orecchio alla mia preghiera:"),
                array('','2',"sulle mie labbra non c'è inganno.")
            ),
            array(
                array('','*',"Venga da te la mia sentenza,"),
                array('','2',"i tuoi occhi vedano la giustizia."),
                array('','*',"Saggia il mio cuore, scrutalo nella notte,"),
                array('','2',"provami al fuoco, non troverai malizia.")
            ),
            array(
                array('','*',"La mia bocca non si è resa colpevole,"),
                array('','2',"secondo l'agire degli uomini;"),
                array('','*',"seguendo la parola delle tue labbra,"),
                array('','2',"ho evitato i sentieri del violento."),
                array('','*',"Sulle tue vie tieni saldi i miei passi"),
                array('','2',"e i miei piedi non vacilleranno.")
            ),
            array(
                array('','*',"Io t'invoco, mio Dio: dammi risposta;"),
                array('','2',"porgi l'orecchio, ascolta la mia voce,"),
                array('','*',"mostrami i prodigi del tuo amore:"),
                array('','2',"tu che salvi dai nemici chi si affida alla tua destra.")
            ),
            array(
                array('','*',"Custodiscimi come pupilla degli occhi,"),
                array('','2',"proteggimi all'ombra delle tue ali,"),
                array('','*',"di fronte agli empi che mi opprimono,"),
                array('','2',"ai nemici che mi accerchiano.")
            ),
            array(
                array('','*',"Essi hanno chiuso il loro cuore,"),
                array('','2',"le loro bocche parlano con arroganza."),
                array('','*',"Eccoli, avanzano, mi circondano,"),
                array('','2',"puntano agli occhi per abbattermi;"),
                array('','*',"simili a un leone che brama la preda,"),
                array('','2',"a un leoncello che si apposta in agguato.")
            ),
            array(
                array('','*',"Sorgi, Signore, affrontalo, abbattilo;"),
                array('','2',"con la tua spada scampami dagli empi,"),
                array('','*',"con la tua mano, Signore, dal regno dei morti"),
                array('','2',"che non hanno più parte in questa vita.")
            ),
            array(
                array('','+',"Sazia pure dei tuoi beni il loro ventre,"),
                array('','*',"se ne sazino anche i figli"),
                array('','2',"e ne avanzi per i loro bambini."),
                array('','*',"Ma io per la giustizia contemplerò il tuo volto,"),
                array('','2',"al risveglio mi sazierò della tua presenza.")
            )
        )
    );

}
?>