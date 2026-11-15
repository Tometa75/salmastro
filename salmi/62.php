<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 62 L'anima assetata del Signore";

    //lodi lunedì
    $this->antifona[0]=array(
        "Dall'aurora",
        "ti cerco, mio Dio: di te ha sete l'anima mia."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"O Dio, tu sei il mio Dio, all'aurora ti cerco,"),
                array('','2',"di te ha sete l'anima mia,"),
                array('','*',"a te anela la mia carne,"),
                array('','2',"come terra deserta, arida, senza acqua.")
            ),
            array(
                array('','*',"Così nel santuario ti ho cercato,"),
                array('','2',"per contemplare la tua potenza e la tua gloria."),
                array('','*',"Poiché la tua grazia vale più della vita,"),
                array('','2',"le mia labbra diranno la tua lode.")
            ),
            array(
                array('','*',"Così ti benedirò finché io viva,"),
                array('','2',"nel tuo nome alzerò le mie mani."),
                array('','*',"Mi sazierò come a lauto convito,"),
                array('','2',"e con voci di gioia ti loderà la mia bocca.")
            ),
            array(
                array('','*',"Nel mio giaciglio di te mi ricordo,"),
                array('','2',"penso a te nelle veglie notturne,"),
                array('','*',"tu sei stato il mio aiuto,"),
                array('','2',"esulto di gioia all'ombra delle tue ali."),
                array('','*',"A te si stringe l'anima mia"),
                array('','2',"la forza della tua destra mi sostiene.")
            ),
            array(
                array('','*',"Ma quelli che attentano alla mia vita"),
                array('','2',"scenderanno nel profondo della terra,"),
                array('','*',"saranno dati in potere alla spada,"),
                array('','2',"diverranno preda di sciacalli."),
                array('','+',"Il re gioirà in Dio,"),
                array('','*',"si glorierà chi giura per lui,"),
                array('','2',"perché ai mentitori verrà chiusa la bocca.")
            )
        )            
    );

}
?>