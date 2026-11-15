<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 101 Aspirazioni e preghiere di un esule';

    //compieta giovedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "I miei giorni",
            "declinano come l'ombra, ma tu, Signore, rimani in eterno, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "I miei giorni",
            "declinano come l'ombra, ma tu, Signore, rimani in eterno."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Signore, ascolta la mia preghiera,"),
                array('','2',"a te giunga il mio grido."),
                array('','+',"Non nascondermi il tuo volto;"),
                array('','*',"nel giorno della mia angoscia piega verso di me l'orecchio."),
                array('','2',"Quando ti invoco: presto, rispondimi.")
            ),
            array(
                array('','*',"Si dissolvono in fumo i miei giorni"),
                array('','2',"e come brace ardono le mie ossa."),
                array('','*',"Il mio cuore abbattuto come erba inaridisce,"),
                array('','2',"dimentico di mangiare il mio pane.")
            ),
            array(
                array('','*',"Per il lungo mio gemere"),
                array('','2',"aderisce la mia pelle alle mie ossa."),
                array('','*',"Sono simile al pellicano del deserto,"),
                array('','2',"sono come un gufo tra le rovine.")
            ),
            array(
                array('','*',"Veglio e gemo"),
                array('','2',"come uccello solitario sopra un tetto."),
                array('','*',"Tutto il giorno mi insultano i miei nemici,"),
                array('','2',"furenti imprecano contro il mio nome.")
            ),
            array(
                array('','*',"Di cenere mi nutro come di pane,"),
                array('','2',"alla mia bevanda mescolo il pianto,"),
                array('','*',"davanti alla tua collera e al tuo sdegno,"),
                array('','2',"perché mi sollevi e mi scagli lontano."),
                array('','*',"I miei giorni sono come ombra che declina,"),
                array('','2',"e io come erba inaridisco.")
            ),
            array(
                array('','*',"Ma tu, Signore, rimani in eterno,"),
                array('','2',"il tuo ricordo per ogni generazione."),
                array('','+',"Tu sorgerai, avrai pietà di Sion,"),
                array('','*',"perché è tempo di usarle misericordia:"),
                array('','2',"l'ora è giunta."),
                array('','*',"Poiché ai tuoi servi sono care le sue pietre"),
                array('','2',"e li muove a pietà la sua rovina.")
            ),
            array(
                array('','*',"I popoli temeranno il nome del Signore"),
                array('','2',"e tutti i re della terra la tua gloria,"),
                array('','*',"quando il Signore avrà ricostruito Sion"),
                array('','2',"e sarà apparso in tutto il suo splendore.")
            ),
            array(
                array('','*',"Egli si volge alla preghiera del misero"),
                array('','2',"e non disprezza la sua supplica."),
                array('','*',"Questo si scriva per la generazione futura"),
                array('','2',"e un popolo nuovo darà lode al Signore.")
            ),
            array(
                array('','*',"Il Signore si è affacciato dall'alto del suo santuario,"),
                array('','2',"dal cielo ha guardato la terra,"),
                array('','*',"per ascoltare il gemito del prigioniero,"),
                array('','2',"per liberare i condannati a morte;")
            ),
            array(
                array('','*',"perché sia annunziato in Sion il nome del Signore"),
                array('','2',"e la sua lode in Gerusalemme,"),
                array('','*',"quando si aduneranno insieme i popoli"),
                array('','2',"e i regni per servire il Signore.")
            ),
            array(
                array('','*',"Ha fiaccato per via la mia forza,"),
                array('','2',"ha abbreviato i miei giorni."),
                array('','+',"Io dico: Mio Dio,"),
                array('','*',"non rapirmi a metà dei miei giorni;"),
                array('','2',"i tuoi anni durano per ogni generazione.")
            ),
            array(
                array('','*',"In principio tu hai fondato la terra,"),
                array('','2',"i cieli sono opera delle tue mani."),
                array('','*',"Essi periranno, ma tu rimani,"),
                array('','2',"tutti si logorano come veste,"),
                array('','*',"come un abito tu li muterai"),
                array('','2',"ed essi passeranno.")
            ),
            array(
                array('','*',"Ma tu resti lo stesso"),
                array('','2',"e i tuoi anni non hanno fine."),
                array('','*',"I figli dei tuoi servi avranno una dimora,"),
                array('','2',"resterà salda davanti a te la loro discendenza.")
            )
        )
    );

}
?>