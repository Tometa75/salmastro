<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 21 Esaudimento del giusto, provato dalla sofferenza";

    //sesta venerdì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    elseif ($this->actual['tempo']=='A') {
        $this->antifona[0]=array(
            "L'angelo Gabriele",
            "disse a Maria: Ave, piena di grazia, il signore è con te; tu sei benedetta fra le donne."
        );
    }
    elseif ($this->actual['tempo']=='N') {
        $this->antifona[0]=array(
            "Maria",
            "meditava nel suo cuore gli eventi meravigliosi del suo Figlio."
        );
    }
    elseif ($this->actual['tempo']=='Q') {
        $this->antifona[0]=array(
            "Io sono il Vivente,",
            "dice il Signore: non voglio la morte del peccatore, ma che si converta e viva."
        );
    }
    else {
        $this->antifona[0]=array(
            "Ecco",
            "l'uomo che conosce il dolore: a lui si prostreranno tutti i popoli."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"« Dio mio, Dio mio, perché mi hai abbandonato?"),
                array('','*',"Tu sei lontano dalla mia salvezza »:"),
                array('','2',"sono le parole del mio lamento."),
                array('','*',"Dio mio, invoco di giorno e non rispondi,"),
                array('','2',"grido di notte e non trovo riposo.")
            ),
            array(
                array('','*',"Eppure tu abiti la santa dimora,"),
                array('','2',"tu, lode di Israele."),
                array('','*',"In te hanno sperato i nostri padri,"),
                array('','2',"hanno sperato e tu li hai liberati;"),
                array('','*',"a te gridarono e furono salvati,"),
                array('','2',"sperando in te non rimasero delusi.")
            ),
            array(
                array('','*',"Ma io sono verme, non uomo,"),
                array('','2',"infamia degli uomini, rifiuto del mio popolo."),
                array('','*',"Mi scherniscono quelli che mi vedono,"),
                array('','2',"storcono le labbra, scuotono il capo:"),
                array('','*',"« Si è affidato al Signore, lui lo scampi;"),
                array('','2',"lo liberi, se è suo amico ».")
            ),
            array(
                array('','*',"Sei tu che mi hai tratto dal grembo,"),
                array('','2',"mi hai fatto riposare sul petto di mia madre."),
                array('','*',"Al mio nascere tu mi hai raccolto,"),
                array('','2',"dal grembo di mia madre sei tu il mio Dio."),
                array('','+',"Da me non stare lontano,"),
                array('','*',"poiché l'angoscia è vicina"),
                array('','2',"e nessuno mi aiuta.")
            ),
            array(
                array('','*',"Mi circondano tori numerosi,"),
                array('','2',"mi assediano tori di Basan."),
                array('','*',"Spalancano contro di me la loro bocca"),
                array('','2',"come leone che sbrana e ruggisce.")
            ),
            array(
                array('','*',"Come acqua sono versato,"),
                array('','2',"sono slogate tutte le mie ossa."),
                array('','*',"Il mio cuore è come cera,"),
                array('','2',"si fonde in mezzo alle mie viscere."),
                array('','+',"È arido come un coccio il mio palato,"),
                array('','*',"la mia lingua si è incollata alla gola,"),
                array('','2',"su polvere di morte mi hai deposto.")
            ),
            array(
                array('','*',"Un branco di cani mi circonda,"),
                array('','2',"mi assedia una banda di malvagi;"),
                array('','*',"hanno forato le mie mani e i miei piedi,"),
                array('','2',"posso contare tutte le mie ossa."),
                array('','+',"Essi mi guardano, mi osservano:"),
                array('','*',"si dividono le mie vesti,"),
                array('','2',"sul mio vestito gettano la sorte.")
            ),
            array(
                array('','*',"Ma tu, Signore, non stare lontano,"),
                array('','2',"mia forza, accorri in mio aiuto."),
                array('','*',"Scampami dalla spada,"),
                array('','2',"dalle unghie del cane la mia vita."),
                array('','*',"Salvami dalla bocca del leone"),
                array('','2',"e dalle corna dei bufali.")
            ),
            array(
                array('','*',"Annunzierò il tuo nome ai miei fratelli,"),
                array('','2',"ti loderò in mezzo all'assemblea."),
                array('','+',"Lodate il Signore, voi che lo temete,"),
                array('','*',"gli dia gloria la stirpe di Giacobbe,"),
                array('','2',"lo tema tutta la stirpe di Israele;")
            ),
            array(
                array('','*',"poiché egli non ha disprezzato né sdegnato,"),
                array('','2',"l'afflizione del misero,"),
                array('','*',"non gli ha nascosto il suo volto,"),
                array('','2',"ma, al suo grido d'aiuto, lo ha esaudito.")
            ),
            array(
                array('','*',"Sei tu la mia lode nella grande assemblea,"),
                array('','2',"scioglierò i miei voti davanti ai suoi fedeli."),
                array('','+',"I poveri mangeranno e saranno saziati,"),
                array('','*',"loderanno il Signore quanti lo cercano:"),
                array('','2',"« Viva il loro cuore per sempre ».")
            ),
            array(
                array('','*',"Ricorderanno e torneranno al Signore"),
                array('','2',"tutti i confini della terra,"),
                array('','*',"Si prostreranno davanti a lui"),
                array('','2',"tutte le famiglie dei popoli."),
                array('','*',"Poiché il regno è del Signore,"),
                array('','2',"egli domina su tutte le nazioni.")
            ),
            array(
                array('','*',"A lui solo si prostreranno"),
                array('','2',"quanti dormono sotto terra,"),
                array('','*',"davanti a lui si curveranno"),
                array('','2',"quanti discendono nella polvere.")
            ),
            array(
                array('','*',"E io vivrò per lui,"),
                array('','2',"lo servirà la mia discendenza."),
                array('','*',"Si palerà del Signore alla generazione che viene;"),
                array('','2',"annunzieranno la sua giustizia;"),
                array('','*',"al popolo che nascerà diranno:"),
                array('','2',"« Ecco l'opera del Signore! ».")
            )
        )
    );

}
?>