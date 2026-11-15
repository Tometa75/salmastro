<?php

class Responsorio {

    protected $actual;
    protected $litio;
    protected $tipo="";
    protected $info=array();
    protected $res=array(
        "titolo"=>"Responsorio breve",
        "testo"=>false,
        "parte"=>""
    );

    function __construct($caller,$tipo) {

        $this->litio=$caller;
        $this->actual=$caller->actual;
        $this->tipo=$tipo;

        if ($tipo=='RBB') $this->res['titolo']="";

        $this->res['parte']=$tipo;

        $this->init();
        $this->build();
    }

    function init() {

        if ($this->actual['weekDay']==0) {
            switch ($this->actual['ora']) {
                case 'ves1': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Quanto sono grandi"),
                            array('ebd','','Le hai fatte con bontà e sapienza'),
                            array('*','2c','le tue opere, Signore!')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Dal sorgere del sole fino al tramonto"),
                            array('ebd','',"L'immensa sua gloria supera i cieli:"),
                            array('*','2c','lodate il nome del Signore.')
                        );
                    }
                break;
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Cristo, Figlio del Dio vivo,"),
                            array('ebd','','Tu che siedi alla destra del Padre,'),
                            array('*','2c','abbi pietà di noi.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Ti rendiamo grazie, Signore,"),
                            array('ebd','',"Raccontiamo i tuoi prodigi,"),
                            array('*','2c','invochiamo il tuo nome.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Volgi il mio cuore alle tue parole,"),
                                array('ris','',"fammi vivere nella tua via."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Canterò per sempre l'amore del Signore,"),
                                array('ris','',"annunzierò la tua fedeltà nei secoli."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"In te Signore, è la sorgente della vita,"),
                                array('ris','',"nella tua luce vediamo la luce."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"L'anima mia desidera la case del Signore,"),
                                array('ris','',"il mio cuore e la mia carne esultano nel Dio vivente."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"La tua parola, Signore, è per sempre,"),
                                array('ris','',"la tua fedeltà per ogni generazione."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Il mio grido giunga a te, Signore:"),
                                array('ris','',"rendimi saggio con la tua parola."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Anima mia, benedici il Signore:"),
                                array('ris','',"egli ti salva dalla morte."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Signore, chi abiterà nella tua tenda?"),
                                array('ris','',"Chi vive con giustizia e dice il vero."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Grido a te con tutto il cuore, rispondimi:"),
                                array('ris','',"custodirò i tuoi precetti, Signore."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Il Signore è mia luce e mia salvezza,"),
                                array('ris','',"il Signore difende la mia vita."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Il Signore guidava il suo popolo nella speranza:"),
                                array('ris','',"lo ha fatto entrare nella sua terra santa."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Ti amo, Signore, mia forza,"),
                                array('ris','',"mio scudo, mia roccia di salvezza."),
                            );
                        break;
                    }
                break;
                case 'ves2': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Benedetto sei tu, Signore,"),
                            array('ebd','','A te la lode e la gloria nei secoli,'),
                            array('*','2c',"nell'alto dei cieli.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Grande è il Signore,"),
                            array('ebd','',"La sua sapienza non ha confini,"),
                            array('*','2c',"mirabile la sua potenza.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==1) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Da sempre e per sempre"),
                            array('ebd','','Egli solo ha fatto prodigi:'),
                            array('*','2c','benedetto il Signore!')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Esultate, giusti, nel Signore,"),
                            array('ebd','',"Cantate al Signore un canto nuovo,"),
                            array('*','2c','ai santi si addice la lode.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Tu sei il mio aiuto: non lasciarmi!"),
                                array('ris','',"Non abbandonarmi, Dio mia salvezza!"),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Crea in me, o Dio, un cuore puro,"),
                                array('ris','',"non allontanarmi dal tuo volto."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"L'occhio del Signore sui giusti,"),
                                array('ris','',"l'orecchio di lui al loro grido."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Beata la nazione che ha Dio per Signore,"),
                                array('ris','',"il popolo, che ha scelto come suo erede."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Benedirò il Signore in ogni tempo,"),
                                array('ris','',"sulla mia bocca sempre la sua lode."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"In Dio la mia salvezza e la mia gloria:"),
                                array('ris','',"è lui la mia difesa."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"O Dio, ritorna a darci la vita:"),
                                array('ris','',"e il tuo popolo si rallegri in te."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Dio di misericordia e di grazia,"),
                                array('ris','',"lento all'ira e grande nell'amore."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Riscattami, Signore, pietà di me:"),
                                array('ris','',"nell'assemblea benedirò il tuo nome."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Il Signore è il mio pastore: non manco di nulla;"),
                                array('ris','',"in pascoli erbosi mi fa riposare."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Inneggiate al Signore, suoi fedeli,"),
                                array('ris','',"ricordate il suo santo nome."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Ricordati, o Dio, del tuo amore,"),
                                array('ris','',"della tua fedeltà che è da sempre."),
                            );
                        break;
                    }
                break;
                case 'ves': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Risanami, Signore:"),
                            array('ebd','','Io ho detto: Mio Dio, fammi grazia,'),
                            array('*','2c',"ho peccato contro di te.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Salga a te, Signore,"),
                            array('ebd','',"Come profumo d'incenso"),
                            array('*','2c',"la mia preghiera.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==2) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Dio, mia roccia di salvezza,"),
                            array('ebd','','Mio scudo, mia difesa,'),
                            array('*','2c','in te la mia speranza.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Ascolta la mia voce, Signore:"),
                            array('ebd','',"Precedo l'aurora e grido aiuto,"),
                            array('*','2c','spero sulla tua parola.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Cammina nell'innocenza, e confida nel Signore:"),
                                array('ris','',"egli ti colmerà dei suoi beni."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"La salvezza del Signore è vicina a chi lo teme,"),
                                array('ris','',"la sua gloria abiterà la nostra terra."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Nella giustizia Dio giudica il mondo,"),
                                array('ris','',"nel diritto egli giudica i popoli."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Felice chi ha il cuore buono e generoso:"),
                                array('ris','',"il giusto sarà benedetto per sempre."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"A te piace, o Dio, la sincerità del cuore,"),
                                array('ris','',"e nell'intimo mi insegni la sapienza."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Padre santo, nel tuo amore veglia su di noi:"),
                                array('ris','',"e con te vivremo in unità perfetta."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Il desiderio degli umili tu ascolti, Signore:"),
                                array('ris','',"tendi il tuo orecchio, conferma il nostro cuore."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"La tua parola è lampada ai miei passi"),
                                array('ris','',"e luce alla mia strada."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Trattami, o Dio, secondo il tuo amore,"),
                                array('ris','',"insegnami i tuoi comandamenti."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Radunaci, Signore, da tutte le nazioni,"),
                                array('ris','',"per rendere grazie al tuo santo nome."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Dio libera chi non trova aiuto,"),
                                array('ris','',"egli salva la vita dei suoi poveri."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Dio manda sulla terra la sua parola,"),
                                array('ris','',"il suo messaggio corre veloce."),
                            );
                        break;
                    }
                break;
                case 'ves': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"La tua parola, Signore,"),
                            array('ebd','','La tua fedeltà per ogni generazione:'),
                            array('*','2c',"rimane in eterno.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Mi colmerai di gioia, Signore,"),
                            array('ebd','',"Festa senza fine"),
                            array('*','2c',"alla tua presenza.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==3) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Verso la tua parola"),
                            array('ebd','','Fammi vivere nella tua via,'),
                            array('*','2c','guida il mio cuore.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Benedirò il Signore"),
                            array('ebd','',"Sulla mia bocca sempre la sua lode"),
                            array('*','2c','in ogni tempo.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Additami, Signore, le tue vie,"),
                                array('ris','',"insegnami i tuoi sentieri."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Il Signore è giusto, ama la giustizia:"),
                                array('ris','',"i buoni contempleranno il suo volto."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Gioia e allegrezza per quelli che ti cercano;"),
                                array('ris','',"dicano sempre: Grande è il Signore!"),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"È giusto lodare il Signore,"),
                                array('ris','',"cantare salmi per te, o Altissimo."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"I tuoi sacerdoti si vestano di giustizia"),
                                array('ris','',"e i tuoi fedeli cantino di gioia."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Chi è come te, Dio dell'universo?"),
                                array('ris','',"Sei forte, Signore, fedele alla parola."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Sopra di noi la tua grazia, o Dio:"),
                                array('ris','',"in te la nostra speranza."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"A te offro un sacrificio di grazie,"),
                                array('ris','',"e grido il tuo nome, Signore."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Gli occhi del Signore su quelli che lo temono,"),
                                array('ris','',"su quelli che sperano nel suo amore."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Scrutami, o Dio, e vedi il mio cuore;"),
                                array('ris','',"guidami nella via della vita."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"I miti possederanno la terra,"),
                                array('ris','',"e godranno di una grande pace."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Signore, mia parte di beni e mio calice,"),
                                array('ris','',"nelle tue mani è la mia vita."),
                            );
                        break;
                    }
                break;
                case 'ves': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Signore, mia salvezza,"),
                            array('ebd','','Non abbandonarmi con i peccatori,'),
                            array('*','2c',"abbi pietà di me.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Come la pupilla dell'occhio"),
                            array('ebd','',"Nascondici all'ombra delle tue ali,"),
                            array('*','2c',"difendici, Signore.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==4) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Con tutto il cuore ti cerco:"),
                            array('ebd','','Custodirò la tua parola:'),
                            array('*','2c','rispondimi, Signore.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Al sorgere del giorno"),
                            array('ebd','',"Tu sei il mio aiuto:"),
                            array('*','2c','mi ricordo di te, Signore.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Opere del Signore, benedite il Signore!"),
                                array('ris','',"A lui, la lode e la gloria nei secoli!"),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Signore, corro la via dei tuoi comandi,"),
                                array('ris','',"poiché tu allarghi il mio cuore."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"O Dio, rinnova i tuoi prodigi,"),
                                array('ris','',"manifesta la tua forza fra le genti."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Sostieni l'uomo giusto, Signore,"),
                                array('ris','',"tu che scruti i cuori e i pensieri."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Splendore e maestà dinanzi a Dio,"),
                                array('ris','',"forza e bellezza nel suo santuario."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Buono sei tu, Signore, e fonte di ogni bene:"),
                                array('ris','',"insegnami il tuo volere."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Il Signore è vicino a quanti lo invocano;"),
                                array('ris','',"egli ascolta il loro grido."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Confida nel Signore, fa' il bene:"),
                                array('ris','',"abiterai felice nella tua terra."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"I cieli proclamano la gloria di Dio,"),
                                array('ris','',"l'opera delle sue mani annunzia il firmamento."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Insegnami la via da percorrere, Signore:"),
                                array('ris','',"mi guidi il tuo spirito buono per una terra piana."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Ti rendo grazie, Signore: mi hai esaudito,"),
                                array('ris','',"sei tu la mia salvezza."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Io spero nel Signore,"),
                                array('ris','',"l'anima mia spera nella sua parola."),
                            );
                        break;
                    }
                break;
                case 'ves': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Ci nutri, Signore,"),
                            array('ebd','','Ci sazi con miele della roccia,'),
                            array('*','2c',"con fiore di frumento.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Il Signore è il mio pastore:"),
                            array('ebd','',"In pascoli erbosi mi fa riposare:"),
                            array('*','2c',"non manco di nulla.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==5) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Al mattino, o Dio,"),
                            array('ebd','','Insegnami la via da seguire,'),
                            array('*','2c','fammi conoscere il tuo amore.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Invocherò l'Altissimo:"),
                            array('ebd','',"Dal cielo manderà la sua salvezza:"),
                            array('*','2c','da lui ogni mio bene.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"I sentieri del Signore sono verità e grazia"),
                                array('ris','',"per chi osserva il suo patto e la sua legge."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Con la tua parola sostienimi, e avrò la vita:"),
                                array('ris','',"non deludermi nella mia speranza."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"In Dio gioisce il nostro cuore,"),
                                array('ris','',"confidiamo nel suo santo nome."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"La grazia del Signore è da sempre e per sempre"),
                                array('ris','',"per il popolo che custodisce l'alleanza."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Sono affranto e sfinito, Signore:"),
                                array('ris','',"per la tua parola fammi vivere."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Presso il Signore è l'amore,"),
                                array('ris','',"e grande è la sua redenzione."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"I decreti del Signore sono giusti, rallegrano il cuore;"),
                                array('ris','',"il comando del Signore è limpido, illumina gli occhi."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Rendete grazie al Signore: egli è buono,"),
                                array('ris','',"eterna è la sua misericordia."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Buono e pietoso è il Signore,"),
                                array('ris','',"lento all'ira e grande nell'amore."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Mi hai liberato, Signore, dalla morte:"),
                                array('ris','',"camminerò alla tua presenza nella terra dei viventi."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Sulla terra si conosca la tua via,"),
                                array('ris','',"la tua salvezza, in tutte le nazioni."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Guarda, o Dio, nostro scudo,"),
                                array('ris','',"guarda il volto del tuo Cristo."),
                            );
                        break;
                    }
                break;
                case 'ves': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Cristo ci ama,"),
                            array('ebd','','Ha fatto di noi un regno, e sacerdoti per il nostro Dio,'),
                            array('*','2c',"ci ha liberati con il suo sangue.")
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Cristo è morto per i nostri peccati"),
                            array('ebd','',"Messo a morte nella carne, ma reso vivo nello spirito"),
                            array('*','2c',"per ricondurci al Padre.")
                        );
                    }
                break;
            }
        }

        elseif ($this->actual['weekDay']==6) {
            switch ($this->actual['ora']) {
                case 'lodi': 
                    if ($this->actual['quarto']==1 || $this->actual['quarto']==2) {
                        $this->info=array(
                            array('ris','',"Io grido al Signore:"),
                            array('ebd','','Mio bene nella terra dei viventi,'),
                            array('*','2c','sei tu il mio rifugio.')
                        );
                    }
                    elseif ($this->actual['quarto']==3 || $this->actual['quarto']==4) {
                        $this->info=array(
                            array('ris','',"Esultano le mie labbra"),
                            array('ebd','',"La mia lingua proclama la tua giustizia"),
                            array('*','2c','cantando le tue lodi.')
                        );
                    }
                break;
                case 'terza': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Insegnami i tuoi sentieri,"),
                                array('ris','',"guidami nella tua verità, o Signore."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Il timore di Dio è puro, rimane per sempre;"),
                                array('ris','',"i giudizi del Signore sono fedeli e giusti."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Il sacrificio di lode è gradito a Dio;"),
                                array('ris','',"chi cammina nella retta via avrà salvezza."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Venite, e vedete le opere del Signore,"),
                                array('ris','',"santo e sublime fra tutte le nazioni."),
                            );
                        break;
                    }
                break;
                case 'sesta': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Perdona, Signore, le mie colpe nascoste,"),
                                array('ris','',"dall'orgoglio salva il tuo servo."),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Guidami, o Dio, sulla tua strada:"),
                                array('ris','',"i tuoi precetti mi sono cari."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"È bello che i fratelli vivano insieme:"),
                                array('ris','',"il Signore li ricolma di benedizioni."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Il Signore ama il suo popolo,"),
                                array('ris','',"agli umili dona la vittoria."),
                            );
                        break;
                    }
                break;
                case 'nona': 
                    switch ($this->actual['quarto']) {
                        case 1:
                            $this->info=array(
                                array('ebd','',"Grandi sono le tue opere, o Signore,"),
                                array('ris','',"profondi i tuoi pensieri!"),
                            );
                        break;
                        case 2:
                            $this->info=array(
                                array('ebd','',"Mia eredità per sempre le tue parole:"),
                                array('ris','',"sono gioia per il mio cuore."),
                            );
                        break;
                        case 3:
                            $this->info=array(
                                array('ebd','',"Nei tuoi decreti, Signore, è la mia gioia;"),
                                array('ris','',"non dimentico la tua parola."),
                            );
                        break;
                        case 4:
                            $this->info=array(
                                array('ebd','',"Ti esalto, mio Dio, mio re,"),
                                array('ris','',"benedico il tuo nome per sempre."),
                            );
                        break;
                    }
                break;
            }
        }
        
        if ($this->actual['ora']=='comp' || $this->actual['ora']=='comp1') {

            if ($this->actual['tempo']=='P') {
                $this->info=array(
                    array('ris','',"Signore, nelle tue mani affido il mio spirito."),
                    array('ebd','','Dio di verità tu mi hai redento.'),
                    array('*','2c','Alleluia, alleluia.')
                );
            }
            else {
                $this->info=array(
                    array('ris','',"Signore,"),
                    array('ebd','','Dio di verità tu mi hai redento:'),
                    array('*','2c',"nelle tue mani affido il mio spirito.")
                );
            }
        }
    }

    function build() {

        //////////////////////////////////////////////////////////////////////////
        //modifica responsorio breve in base al TEMPO LITURGICO

        if ($this->actual['tempo']=='A') {

            if ($this->actual['weekDay']==0) {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Cristo, Figlio del Dio vivo,"),
                        array('ebd','','Tu che vieni nel mondo,'),
                        array('*','2c',"abbi pietà di noi.")
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Mostraci, Signore,"),
                        array('ebd','','E donaci la tua salvezza,'),
                        array('*','2c',"la tua misericordia.")
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)<'1224') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Gerusalemme, città di Dio,"),
                        array('ebd','','In te apparirà la sua gloria,'),
                        array('*','2c',"su di te sorgerà il Signore.")
                    );
                }
                if($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Le nazioni temeranno il tuo nome, Signore;"),
                            array('ris','',"la tua gloria, tutti i re della terra."),
                        );
                }
                if($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Per la tua benevolenza, Signore, ricordati di noi,"),
                            array('ris','',"vieni a visitarci con la tua salvezza."),
                        );
                }
                if($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Vieni, Signore, non tardare:"),
                            array('ris','',"libera dal peccato il tuo popolo."),
                        );
                }

                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Vieni a liberarci, Signore,"),
                        array('ebd','','Mostraci il tuo volto, e saremo salvi,'),
                        array('*','2c',"Dio dell'universo.")
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1224') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Domani"),
                        array('ebd','','Regnerà su di noi il Salvatore del mondo:'),
                        array('*','2c',"la terra sarà liberata dal peccato.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Le nazioni temeranno il tuo nome, Signore;"),
                            array('ris','',"la tua gloria, tutti i re della terra."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Per la tua benevolenza, Signore, ricordati di noi,"),
                            array('ris','',"vieni a visitarci con la tua salvezza."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Vieni, Signore, non tardare:"),
                            array('ris','',"libera dal peccato il tuo popolo."),
                        );
                }   
            }    
        }
        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='N') {

            if (substr($this->actual['today'],4,4)=='1225') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Oggi lo saprete:"),
                        array('ebd','','Col nuovo giorno vedrete la sua gloria:'),
                        array('*','2c',"il Signore viene.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza,"),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2c',"alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nostro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='SAF') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne,"),
                        array('ebd','','Dalla sua pienezza tutti abbiamo ricevuto:'),
                        array('*','2c',"è venuto ad abitare in mezzo a noi.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Cristo, Figlio del Dio vivo,"),
                        array('ebd','','Tu che fosti obbediente a Giuseppe e a Maria,'),
                        array('*','2c',"abbi pietà di noi.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore ci insegnerà le sue vie,"),
                            array('ris','',"e cammineremo per i suoi sentieri."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Povertà e fatica, sin dalla mia giovinezza,"),
                            array('ris','',"dopo l'umiliazione sono stato esaltato."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Tutti i tuoi figli saranno discepoli del Signore,"),
                            array('ris','',"grande sarà la loro pace."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Cristo fu in tutto simile ai fratelli,"),
                        array('ebd','','Apparso sulla terra, abitò tra gli uomini'),
                        array('*','2c',"per rivelare l'amore di Dio.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='2DN') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne,"),
                        array('ebd','','Dalla sua pienezza tutti abbiamo ricevuto:'),
                        array('*','2c',"è venuto ad abitare in mezzo a noi.")
                    );
                }
                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza."),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nostro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='1226a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Mia forza,"),
                        array('ebd','','È lui la mia salvezza:'),
                        array('*','2c',"mio canto è il Signore.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore l'ha rivestito di gioia,"),
                            array('ris','',"gli ha posto sul capo una splendida corona."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Confido in Dio, non ho timore:"),
                            array('ris','',"chi potrà farmi del male?"),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Torneranno nella gioia del raccolto,"),
                            array('ris','',"canteranno i prodigi del Signore."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='1227a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Li ha posti come capi"),
                        array('ebd','','Faranno ricordare il tuo nome, Signore,'),
                        array('*','2c',"in mezzo al tuo popolo.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Nel mondo intero si è diffuso il loro annunzio,"),
                            array('ris','',"ai confini della terra la loro parola."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Hanno custodito gli insegnamenti di Cristo,"),
                            array('ris','',"sono testimoni delle sue parole."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Gioite ed esultate, dice il Signore:"),
                            array('ris','',"i vostri nomi sono scritti nel cielo."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='1228a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"I santi martiri"),
                        array('ebd','','La loro ricompensa è il Signore:'),
                        array('*','2c',"vivono in eterno.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore li ha rivestiti di gioia,"),
                            array('ris','',"ha posto sul loro capo una splendida corona."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I santi vivono in eterno:"),
                            array('ris','',"la loro ricompensa è il Signore."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Esultano i santi nella gloria,"),
                            array('ris','',"nella casa di Dio cantano di gioia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='1229a' || $this->actual['evCode']=='1230a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza."),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nostro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='1231a') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza."),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nostro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
            }

            elseif ($this->actual['evCode']=='MSS') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza."),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nostro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='F0102' || $this->actual['evCode']=='F0103' || $this->actual['evCode']=='F0104' || $this->actual['evCode']=='F0105') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore manifestò la sua salvezza."),
                        array('ebd','','Alle nazioni rivelò la sua giustizia.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Il Signore si è ricordato del suo amore, alleluia,"),
                            array('ris','',"della sua fedeltà alla casa di Israele, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I confini della terra hanno veduto, alleluia,"),
                            array('ris','',"la salvezza del nostro Dio, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Amore e fedeltà s'incontrano, alleluia,"),
                            array('ris','',"pace e giustizia si abbracciano, alleluia."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio si è fatto carne."),
                        array('ebd','','È venuto ad abitare in mezzo a noi.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='EPI') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Adoreranno il Signore"),
                        array('ebd','','Lo serviranno tutti i popoli,'),
                        array('*','2c',"tutti i re della terra.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Dio è apparso sulla terra"),
                            array('ris','',"e ha vissuto con gli uomini."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I popoli vedranno al tua giustizia;"),
                            array('ris','',"tutti i re, la tua gloria."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"O popoli, benedite il nostro Dio,"),
                            array('ris','',"fate risuonare la sua lode."),
                        );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"In lui saranno benedetti"),
                        array('ebd','','Daranno gloria al suo nome'),
                        array('*','2c',"tutti i popoli della terra.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='F0107' || $this->actual['evCode']=='F0108' || $this->actual['evCode']=='F0109' || $this->actual['evCode']=='F0110' || $this->actual['evCode']=='F0111' || $this->actual['evCode']=='F0112') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Adoreranno il Signore"),
                        array('ebd','','Lo serviranno tutti i popoli,'),
                        array('*','2c',"tutti i re della terra.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Dio è apparso sulla terra"),
                            array('ris','',"e ha vissuto con gli uomini."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"I popoli vedranno al tua giustizia;"),
                            array('ris','',"tutti i re, la tua gloria."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"O popoli, benedite il nostro Dio,"),
                            array('ris','',"fate risuonare la sua lode."),
                        );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"In lui saranno benedetti"),
                        array('ebd','','Daranno gloria al suo nome'),
                        array('*','2c',"tutti i popoli della terra.")
                    );
                }
            }
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='Q') {

            if ($this->actual['evCode']=='PAL') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Con il tuo sangue, Signore,"),
                        array('ebd','','Da ogni popolo e razza, da ogni lingua e nazione'),
                        array('*','2c',"tu ci hai redenti.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"È stato offerto in sacrificio, perché lo ha voluto:"),
                            array('ris','',"e non ha aperto bocca."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Egli ha portato la nostra debolezza,"),
                            array('ris','',"si è addossato le nostre iniquità."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Veneriamo la croce, innalzata per noi:"),
                            array('ris','',"adoriamo il segno della nostra salvezza."),
                        );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Noi ti adoriamo e"),
                        array('ebd','','Con la tua croce hai redento il mondo:'),
                        array('*','2c',"ti benediciamo, o Cristo.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS1' || $this->actual['evCode']=='SS2' || $this->actual['evCode']=='SS3') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Con il tuo sangue, Signore,"),
                        array('ebd','','Da ogni popolo e razza, da ogni lingua e nazione'),
                        array('*','2c',"tu ci hai redenti.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"È stato offerto in sacrificio perché lo ha voluto:"),
                        array('ris','',"e non ha aperto bocca."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Egli ha portato la nostra debolezza,"),
                        array('ris','',"si è addossato le nostre iniquità."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Veneriamo la croce, innalzata per noi:"),
                        array('ris','',"adoriamo il segno della nostra salvezza."),
                    );
                } 
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Contro di te abbiamo peccato:"),
                        array('ebd','','Ascolta, Cristo, la nostra voce:'),
                        array('*','2c',"pietà di noi, Signore!")
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS4') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Con il tuo sangue, Signore,"),
                        array('ebd','','Da ogni popolo e razza, da ogni lingua e nazione'),
                        array('*','2c',"tu ci hai redenti.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"È stato offerto in sacrificio perché lo ha voluto:"),
                        array('ris','',"e non ha aperto bocca."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Egli ha portato la nostra debolezza,"),
                        array('ris','',"si è addossato le nostre iniquità."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Veneriamo la croce, innalzata per noi:"),
                        array('ris','',"adoriamo il segno della nostra salvezza."),
                    );
                } 
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte.")
                    );
                }
                elseif($this->actual['ora']=='comp') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte.")
                    );
                }
            }   

            elseif ($this->actual['evCode']=='SS5') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"Noi ti adoriamo, o Cristo, e ti benediciamo:"),
                            array('ris','',"con la tua croce hai redento il mondo."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Ricordati di me, Signore,"),
                            array('ris','',"quando sarai nel tuo regno."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Mi hai fatto entrare nelle tenebre"),
                            array('ris','',"come chi è morto da gran tempo."),
                        );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce.")
                    );
                }
                elseif($this->actual['ora']=='comp') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce.")
                    );
                }
            }

            elseif ($this->actual['evCode']=='SS6') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce. Per questo Dio lo ha innalzato, e gli ha dato un nome che è sopra ogni altro nome.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Non abbandonarmi nel sepolcro, Signore;"),
                        array('ris','',"non lasciare che il tuo santo veda la corruzione."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Il Signore fa morire e fa vivere,"),
                        array('ris','',"fa scendere agli inferi e risalire."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Deposero il Signore, sigillarono il sepolcro,"),
                        array('ris','',"misero i soldati a custodire la tomba."),
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce. Per questo Dio lo ha innalzato, e gli ha dato un nome che è sopra ogni altro nome.")
                    );
                }
                elseif($this->actual['ora']=='comp') {
                    $this->info=array(
                        array('ant','',"Cristo / per noi si è fatto obbediente fino alla morte, e alla morte di croce. Per questo Dio lo ha innalzato, e gli ha dato un nome che è sopra ogni altro nome.")
                    );
                }
            }

            else {
                if ($this->actual['weekDay']==0) {
                    switch ($this->actual['ora']) {
                        case "ves1":
                            $this->info=array(
                                array('ris','',"Contro di te abbiamo peccato:"),
                                array('ebd','','Ascolta, Cristo, la nostra voce:'),
                                array('*','2c',"pietà di noi, Signore!")
                            );
                        break;
                        case "lodi":
                            $this->info=array(
                                array('ris','',"Cristo, Figlio del Dio vivo,"),
                                array('ebd','','Tu che hai sofferto per i nostri peccati,'),
                                array('*','2c',"abbi pietà di noi.")
                            );
                        break;
                        case "ves2":
                            $this->info=array(
                                array('ris','',"Contro di te abbiamo peccato:"),
                                array('ebd','','Ascolta, Cristo, la nostra voce:'),
                                array('*','2c',"pietà di noi, Signore!")
                            );
                        break;
                    }
                }
                elseif ($this->actual['weekDay']>=1 && $this->actual['weekDay']<=6) {
                    switch ($this->actual['ora']) {
                        case "lodi":
                            $this->info=array(
                                array('ris','',"Egli mi libererà"),
                                array('ebd','','Dalla peste che distrugge,'),
                                array('*','2c',"dal laccio del cacciatore.")
                            );
                        break;
                        case "ves":
                            $this->info=array(
                                array('ris','',"Ho peccato contro di te:"),
                                array('ebd','','Io grido: Pietà di me, o Dio,'),
                                array('*','2c',"guariscimi, Signore.")
                            );
                        break;
                    }
                }
                /////////////////////////////////////
                if ($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Un cuore puro crea in me, o Signore,"),
                        array('ris','',"rinnova in me uno spirito saldo."),
                    );
                }
                if ($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Dai miei peccati distogli lo sguardo,"),
                        array('ris','',"cancella tutte le mie colpe."),
                    );
                }
                if ($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Un animo pentito tu gradisci, o Dio,"),
                        array('ris','',"non disprezzi un cuore affranto e umiliato."),
                    );
                }
            }
            
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='P') {

            if ($this->actual['weekDay']==0) {

                if($this->actual['ora']=='ves1') {

                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ant','',"Questo è il giorno / che ha fatto il Signore, alleluia: rallegriamoci ed esultiamo, alleluia.")
                        );
                    }
                    elseif($this->actual['today']<$this->actual['ASC']) {
                        $this->info=array(
                            array('ris','',"Il Signore è veramente risorto."),
                            array('ebd','','Ed è apparso a Simone.'),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                    else {
                        $this->info=array(
                            array('ris','',"Lo Spirito del Padre sarà con voi."),
                            array('ebd','','Vi insegnerà ogni cosa.'),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                }

                if($this->actual['ora']=='lodi') {

                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ant','',"Questo è il giorno / che ha fatto il Signore, alleluia: rallegriamoci ed esultiamo, alleluia.")
                        );
                    }
                    else {
                        $this->info=array(
                            array('ris','',"Cristo, Figlio del Dio vivo, abbi pietà di noi."),
                            array('ebd','','Tu che sei risorto dai morti.'),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                }
                elseif($this->actual['ora']=='terza') {

                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"Il Signore è veramente risorto, alleluia,"),
                            array('ris','',"ed è apparso a Simone, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='sesta') {
                    
                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"I discepoli videro il Signore, alleluia,"),
                            array('ris','',"e furono pieni di gioia, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='nona') {

                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"Signore, rimani con noi, alleluia,"),
                            array('ris','',"ormai si fa sera, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['evCode']=='PA2') {
                        $this->info=array(
                            array('ant','',"Questo è il giorno / che ha fatto il Signore, alleluia: rallegriamoci ed esultiamo, alleluia.")
                        );
                    }
                    elseif($this->actual['today']<$this->actual['ASC']) {
                        $this->info=array(
                            array('ris','',"Il Signore è veramente risorto."),
                            array('ebd','','Ed è apparso a Simone.'),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                    else {
                        $this->info=array(
                            array('ris','',"Attingete acqua con gioia."),
                            array('ebd','','Alle sorgenti della salvezza.'),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                }
            }

            elseif ($this->actual['weekDay']>=1 && $this->actual['weekDay']<=6) {

                if($this->actual['ora']=='lodi') {

                    if ($this->actual['evCode']=='PA2'.$this->actual['weekDay']) {
                        $this->info=array(
                            array('ant','',"Questo è il giorno / che ha fatto il Signore, alleluia: rallegriamoci ed esultiamo, alleluia.")
                        );
                    }
                    else {
                        $this->info=array(
                            array('ris','',"Cristo è risalito dagli abissi della terra."),
                            array('ebd','',"Ha provato l'angoscia e la morte."),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                }
                elseif($this->actual['ora']=='terza') {

                    if ($this->actual['evCode']=='PA2'.$this->actual['weekDay']) {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"Il Signore è veramente risorto, alleluia,"),
                            array('ris','',"ed è apparso a Simone, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='sesta') {
                    
                    if ($this->actual['evCode']=='PA2'.$this->actual['weekDay']) {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"I discepoli videro il Signore, alleluia,"),
                            array('ris','',"e furono pieni di gioia, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='nona') {

                    if ($this->actual['evCode']=='PA2'.$this->actual['weekDay']) {
                        $this->info=array(
                            array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                            array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                        );
                    }
                    else {
                        $this->info=array(
                            array('ebd','',"Signore, rimani con noi, alleluia,"),
                            array('ris','',"ormai si fa sera, alleluia."),
                        );
                    }
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['evCode']=='PA2'.$this->actual['weekDay']) {
                        $this->info=array(
                            array('ant','',"Questo è il giorno / che ha fatto il Signore, alleluia: rallegriamoci ed esultiamo, alleluia.")
                        );
                    }
                    elseif($this->actual['today']<$this->actual['ASC']) {
                        $this->info=array(
                            array('ris','',"I discepoli videro il Signore."),
                            array('ebd','','E furono pieni di gioia.'),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                    else {
                        $this->info=array(
                            array('ris','',"Lo Spirito del Padre sarà con voi."),
                            array('ebd','','Vi insegnerà ogni cosa.'),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                }
            }

            //////////////////////////////////////////////////////

            if ($this->actual['evCode']=='PAS') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Cristo, Figlio del Dio vivo, abbi pietà di noi."),
                        array('ebd','','Tu che sei risorto dai morti.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                        array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                        array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Questo è il giorno che ha fatto il Signore, alleluia:"),
                        array('ris','',"rallegriamoci ed esultiamo, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Signore è veramente risorto."),
                        array('ebd','','Ed è apparso a Simone.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            if ($this->actual['evCode']=='ASC') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Ascendo al Padre mio e Padre vostro."),
                        array('ebd','','Mio Dio, e Dio vostro.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Ascende Cristo nell'alto dei cieli."),
                        array('ebd','','E guida i prigionieri liberati.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Non si turbi il vostro cuore, alleluia:"),
                        array('ris','',"ora io vado al Padre, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Il Signore è nei cieli, alleluia,"),
                        array('ris','',"ha stabilito il suo trono, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Esaltate Dio, nostro re, alleluia,"),
                        array('ris','',"cantate un inno al Signore, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Ascendo al Padre mio e Padre vostro."),
                        array('ebd','','Mio Dio, e Dio vostro.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }        
        }

        /////////////////////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='O') {

            if ($this->actual['evCode']=='BAT') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Cristo, Figlio del Dio vivo,"),
                        array('ebd','','Tu che oggi ti riveli al mondo,'),
                        array('*','2c',"abbi pietà di noi.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                            array('ebd','',"La mia gioia è compiuta:"),
                            array('ris','',"Cristo deve crescere, io diminuire."),
                        );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                            array('ebd','',"Ecco il mio servo, io lo sostengo:"),
                            array('ris','',"colui che ho scelto, è tutta la mia gioia."),
                        );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                            array('ebd','',"Porrò il mio spirito sopra di lui,"),
                            array('ris','',"annunzierà la giustizia alle genti."),
                        );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Questi è colui che è venuto"),
                        array('ebd','','Gesù Cristo nostro Signore,'),
                        array('*','2c',"con acqua e sangue.")
                    );
                }
            }

            if ($this->actual['evCode']=='PEN') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Tutti furono pieni di Spirito Santo."),
                        array('ebd','','E cantavano le meraviglie di Dio.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"L'amore di Dio è stato riversato nei nostri cuori, alleluia,"),
                        array('ris','',"per mezzo dello Spirito Santo che dimora in noi, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Lo Spirito Santo sarà vostro maestro, alleluia:"),
                        array('ris','',"vi ricorderà ogni mia parola, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"In molte lingue gli apostoli proclamavano, alleluia,"),
                        array('ris','',"le grandi opere di Dio, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Ascendo al Padre mio e Padre vostro."),
                        array('ebd','','Mio Dio, e Dio vostro.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            if ($this->actual['evCode']=='TRI') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"A te lode, a te gloria,"),
                        array('ebd','','A te grazie nei secoli,'),
                        array('*','2c',"o Santa Trinità.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Venite alle sue porte nella lode,"),
                        array('ris','',"date gloria al Padre, al Figlio e allo Spirito."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"O beata, benedetta e gloriosa Trinità:"),
                        array('ris','',"Padre e Figlio e Spirito Santo!"),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Benedetto sei tu, Signore nell'alto dei cieli!"),
                        array('ris','',"A te la lode e la gloria nei secoli."),
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"A Dio solo l'onore e la gloria:"),
                        array('ebd','','Benedetto il Padre, il Figlio e lo Spirito Santo:'),
                        array('*','2c',"a lui, lode nei secoli.")
                    );
                }
            }

            if ($this->actual['evCode']=='COD') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Ci hai dato il pane, frutto della terra."),
                        array('ebd','','E il vino che rallegra il nostro cuore.'),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Verrò all'altare di Dio, alleluia."),
                        array('ris','',"Riceverò Cristo, che rinnova la mia giovinezza, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Hai dato a noi, Signore, un pane dal cielo, alleluia,"),
                        array('ris','',"che porta in sé ogni dolcezza, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Signore, rimani con noi, alleluia,"),
                        array('ris','',"ormai si fa sera, alleluia."),
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Ci ha dato un pane dal cielo."),
                        array('ebd','',"Pane degli angeli, cibo dell'uomo."),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            if ($this->actual['evCode']=='SCG') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Cristo ci ama"),
                        array('ebd','',"Ha fatto di noi un regno, e sacerdoti per il nostro Dio,"),
                        array('*','2c',"e ci ha liberati con il suo sangue.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Prendete il mio giogo su di voi,"),
                        array('ebd','','Io sono mite ed umile di cuore:'),
                        array('*','2c',"imparate da me.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Attingete acqua con gioia"),
                        array('ris','',"alle sorgenti della salvezza."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Ho sperato conforto, ma invano;"),
                        array('ris','',"consolatori, ma non ne ho trovati."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Per le vostre colpe egli è stato trafitto;"),
                        array('ris','',"e noi per le sue piaghe siamo stati guariti."),
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Cristo per amore ci ha lavati da ogni colpa"),
                        array('ebd','',"Ha fatto di noi un popolo regale, sacerdoti per la gloria del Padre,"),
                        array('*','2c',"con il suo sangue.")
                    );
                }
            }

            if ($this->actual['evCode']=='GRE') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"A te gloria e potenza,"),
                        array('ebd','',"A te il dominio su tutto l'universo,"),
                        array('*','2c',"a te il regno, Signore.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Cantano i fedeli"),
                        array('ebd','','Dicono le tue imprese,'),
                        array('*','2c',"la gloria del tuo regno.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Cristo Signore regna per sempre,"),
                        array('ris','',"benedice il suo popolo nella pace."),
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Inneggiate al nostro Re, inneggiate,"),
                        array('ris','',"Cristo è il Signore di tutta la terra."),
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Acclamate al Signore, nostro Re."),
                        array('ris','',"Egli viene a giudicare la terra."),
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il tuo trono, o Dio,"),
                        array('ebd','',"Scettro di giustizia, lo scettro del tuo regno,"),
                        array('*','2c',"nei secoli dei secoli.")
                    );
                }
            }
        }

        //////////////////////////////////////////////////////////////////////////////////////////
        if ($this->actual["evCode"]=='0202a') {
            //presentazione del Signore
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Adorate il Signore"),
                    array('ebd','','Date al Signore gloria e potenza'),
                    array('*','2c',"nel suo tempio santo.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Il Signore si è ricordato del suo amore,"),
                    array('ris','',"della sua fedeltà per la casa d'Israele.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Tutta la terra ha visto la salvezza di Dio:"),
                    array('ris','',"voi tutti della terra, acclamate al Signore.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Amore e fedeltà si vengono incontro,"),
                    array('ris','',"si abbracciano pace e giustizia.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Il Signore ha manifestato,"),
                    array('ebd','',"Ha rivelato a tutti i popoli il suo amore:"),
                    array('*','2c',"la sua salvezza.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0210a') {
            //santa Scolastica
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Quanto è bello e quanto è soave"),
                    array('ebd','','Questa è la cosa che il Signore benedice:'),
                    array('*','2c',"che i fratelli vivano insieme.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Scolastica ottenne di più"),
                    array('ris','',"perché amò di più.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Di te ha detto il mio cuore: cercate il suo volto!"),
                    array('ris','',"Il tuo volto, Signore, io cerco.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Beati i puri di cuore,"),
                    array('ris','',"perché vedranno Dio.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Come colomba in volo,"),
                    array('ebd','',"Gioì nell'anima il fratello:"),
                    array('*','2c',"apparve l'anima di Scolastica.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0319a') {
            //San Giuseppe sposo di Maria
            if ($this->actual['tempo']=='P') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Dio lo fece signore nella sua casa."),
                        array('ebd','',"Gli affidò i beni più cari."),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Dio lo fece signore nella sua casa, alleluia,"),
                        array('ris','',"gli affidò i beni più cari, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Ricchezza e gioia nella casa del giusto, alleluia:"),
                        array('ris','',"la sua giustizia rimane per sempre, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Grande è la sua gloria per la tua salvezza, alleluia:"),
                        array('ris','',"lo avvolgi di maestà e di onore, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"L'uomo giusto fiorirà come un giglio."),
                        array('ebd','',"Davanti al Signore, in eterno."),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            else {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Dio lo fece signore"),
                        array('ebd','',"Gli affidò i beni più cari,"),
                        array('*','2c',"nella sua casa.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Dio lo fece signore nella sua casa,"),
                        array('ris','',"gli affidò i beni più cari.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Ricchezza e gioia nella casa del giusto:"),
                        array('ris','',"la sua giustizia rimane per sempre.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Grande è la sua gloria per la tua salvezza:"),
                        array('ris','',"lo avvolgi di maestà e di onore.")
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"L'uomo giusto"),
                        array('ebd','',"Davanti al Signore, in eterno,"),
                        array('*','2c',"fiorirà come un giglio.")
                    );
                }
            }
        }

        elseif ($this->actual["evCode"]=='0321a') {
            //transito San Benedetto
            if ($this->actual['tempo']=='P') {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore l'ha amato e l'ha colmato di onore."),
                        array('ebd','',"L'ha rivestito di gloria."),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Il Signore guida gli umili nella giustizia, alleluia,"),
                        array('ris','',"insegna ai poveri le sue vie, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Beato l'uomo che tu istruisci, Signore, alleluia,"),
                        array('ris','',"e che ammaestri nella tua legge, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Gioiscano quanti in te si rifugiano, Signore, alleluia,"),
                        array('ris','',"esultino senza fine, o Dio, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Santo padre Benedetto, intercedi per noi."),
                        array('ebd','',"Fa che siamo degni delle promesse di Cristo."),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            else {

                if($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Il Signore l'ha amato"),
                        array('ebd','',"L'ha rivestito di gloria"),
                        array('*','2c',"e l'ha colmato di onore.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"Il Signore guida gli umili nella giustizia,"),
                        array('ris','',"insegna ai poveri le sue vie.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Beato l'uomo che tu istruisci, Signore,"),
                        array('ris','',"e che ammaestri nella tua legge.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Gioiscano quanti in te si rifugiano, Signore,"),
                        array('ris','',"esultino senza fine, o Dio.")
                    );
                }
                elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Santo padre Benedetto,"),
                        array('ebd','',"Fa che siamo degni delle promesse di Cristo:"),
                        array('*','2c',"intercedi per noi.")
                    );
                }
            }
        }

        elseif ($this->actual["evCode"]=='0325a') {
            //Annunciazione
            if ($this->actual['tempo']=='P') {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Un germoglio spunterà da Iesse, una stella da Giacobbe."),
                        array('ebd','',"Dalla Vergine nascerà il Salvatore."),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Ave, Maria, piena di grazia, il Signore è con te."),
                        array('ebd','',"Benedetta tu fra le donne, benedetto il frutto del tuo seno."),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"L'angelo del Signore portò l'annunzio a Maria, alleluia,"),
                        array('ris','',"e concepì dallo Spirito Santo, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Io sono la serva del Signore, alleluia;"),
                        array('ris','',"si compia in me la tua parola, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Il Verbo di Dio si è fatto carne, alleluia;"),
                        array('ris','',"è venuto ad abitare in mezzo a noi, alleluia.")
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio, fatto uomo, è venuto ad abitare in mezzo a noi."),
                        array('ebd','',"Egli era in principio presso Dio."),
                        array('*','2c',"Alleluia, alleluia.")
                    );
                }
            }

            else {

                if($this->actual['ora']=='ves1') {
                    $this->info=array(
                        array('ris','',"Un germoglio spunterà da Iesse,"),
                        array('ebd','',"Dalla Vergine nascerà il Salvatore,"),
                        array('*','2c',"una stella da Giacobbe.")
                    );
                }
                elseif($this->actual['ora']=='lodi') {
                    $this->info=array(
                        array('ris','',"Ave, Maria, piena di grazia,"),
                        array('ebd','',"Benedetta tu fra le donne, benedetto il frutto del tuo seno:"),
                        array('*','2c',"il Signore è con te.")
                    );
                }
                elseif($this->actual['ora']=='terza') {
                    $this->info=array(
                        array('ebd','',"L'angelo del Signore portò l'annunzio a Maria,"),
                        array('ris','',"e concepì dallo Spirito Santo.")
                    );
                }
                elseif($this->actual['ora']=='sesta') {
                    $this->info=array(
                        array('ebd','',"Io sono la serva del Signore;"),
                        array('ris','',"si compia in me la tua parola.")
                    );
                }
                elseif($this->actual['ora']=='nona') {
                    $this->info=array(
                        array('ebd','',"Il Verbo di Dio si è fatto carne;"),
                        array('ris','',"è venuto ad abitare in mezzo a noi.")
                    );
                }
                elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                    $this->info=array(
                        array('ris','',"Il Verbo di Dio, fatto uomo,"),
                        array('ebd','',"Egli era in principio presso Dio:"),
                        array('*','2c',"è venuto ad abitare in mezzo a noi.")
                    );
                }
            }
        }

        elseif ($this->actual["evCode"]=='0624a') {
            //Natività di San Giovanni Battista
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Grande agli occhi del Signore,"),
                    array('ebd','','Preparerà al Cristo un popolo ben disposto:'),
                    array('*','2c',"sarà pieno di Spirito Santo.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Ho visto lo Spirito discendere su Cristo:"),
                    array('ris','',"egli battezzerà in Spirito Santo.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Dal seno materno il Signore mi ha chiamato:"),
                    array('ris','',"fin dal grembo di mia madre ha pronunciato il mio nome.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Ecco, io metto le mie parole sulla tua bocca:"),
                    array('ris','',"ti costituisco su popoli e regni.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Raddrizzate i sentieri del Signore,"),
                    array('ebd','',"Dopo di me viene uno, che era prima di me:"),
                    array('*','2c',"preparate le sue vie.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0629a') {
            //Pietro e Paolo
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Hanno dato la vita"),
                    array('ebd','','Erano lieti di essere insultati'),
                    array('*','2c',"per il Signore Gesù.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Nel mondo intero si è diffuso il loro annunzio,"),
                    array('ris','',"ai confini della terra la loro parola.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Hanno custodito gli insegnamenti di Cristo,"),
                    array('ris','',"sono testimoni delle sue parole.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Gioite ed esultate, dice il Signore:"),
                    array('ris','',"i vostri nomi sono scritti nel cielo.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Con grande franchezza"),
                    array('ebd','',"Testimoni della risurrezione di Cristo,"),
                    array('*','2c',"annunziarono la parola di Dio.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0711a') {
            //San Benedetto
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Il Signore l'ha amato"),
                    array('ebd','',"L'ha rivestito di gloria"),
                    array('*','2c',"e l'ha colmato di onore.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Beato l'uomo che tu istruisci, Signore,"),
                    array('ris','',"e che ammaestri nella tua legge.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Il Signore lo elesse suo servo,"),
                    array('ris','',"perché fosse pastore d'Israele, sua proprietà.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"La legge del suo Dio è nel suo cuore:"),
                    array('ris','',"i suoi passi non vacilleranno.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Santo padre Benedetto,"),
                    array('ebd','',"Fa che siamo degni delle promesse di Cristo:"),
                    array('*','2c',"intercedi per noi.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0806a') {
            //Trasfigurazione
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    array('ris','',"Davanti al Padre sei apparso nella gloria."),
                    array('ebd','',"Egli ti ha rivestito di splendore."),
                    array('*','2c',"Alleluia, alleluia.")
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Signore, l'hai coronato di gloria e di onore."),
                    array('ebd','',"L'hai innalzato di fronte all'universo."),
                    array('*','2c',"Alleluia, alleluia.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Tu sei il più bello tra i figli dell'uomo,"),
                    array('ris','',"sulle tue labbra fiorisce la grazia.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Guardate al Signore, e sarete raggianti:"),
                    array('ris','',"non saranno confusi i vostri volti.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"In te, Signore, la fonte della vita:"),
                    array('ris','',"nella tua luce vediamo la luce.")
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Splendore e maestà dinanzi a Dio."),
                    array('ebd','',"Forza e bellezza nel suo santuario."),
                    array('*','2c',"Alleluia, alleluia.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0815a') {
            //Assunzione
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    array('ris','',"È festa per gli angeli in cielo:"),
                    array('ebd','',"Lode e onore al nostro Dio:"),
                    array('*','2c',"Maria è assunta nella gloria.")
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Oggi la Vergine Maria"),
                    array('ebd','',"Trionfa per sempre con Cristo,"),
                    array('*','2c',"è accolta nei cieli.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Maria è assunta in cielo: esultano gli angeli,"),
                    array('ris','',"lodano e benedicono il Signore.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"L'umile serva del Signore è innalzata"),
                    array('ris','',"sopra gli angeli e i santi, nel regno dei cieli.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Maria entra nella dimora del cielo,"),
                    array('ris','',"siede con Cristo su un trono di stelle.")
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Maria è innalzata nel regno"),
                    array('ebd','',"Benedetto il Signore che l'ha esaltata"),
                    array('*','2c',"sopra gli angeli e i santi.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='0914a') {
            //Esaltazione della Santa Croce
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Noi ti adoriamo,"),
                    array('ebd','',"Con la tua croce hai redento il mondo:"),
                    array('*','2c',"ti benediciamo, o Cristo.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Noi ti adoriamo, o Cristo, e ti benediciamo:"),
                    array('ris','',"con la tua croce hai redento il mondo.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Tutta la terra ti adori, Signore,"),
                    array('ris','',"inneggi a te, e canti al tuo nome.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Il segno della croce apparirà nel cielo,"),
                    array('ris','',"quando il Signore tornerà per giudicare.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Regna su di te il Signore,"),
                    array('ebd','',"Sul tuo legno lavò le nostre colpe nel sangue,"),
                    array('*','2c',"o croce gloriosa.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='1101a') {
            //Tutti i santi
            if($this->actual['ora']=='ves1') {
                $this->info=array(
                    array('ris','',"Esultano i giusti"),
                    array('ebd','',"Perfetta letizia, gioia senza fine"),
                    array('*','2c',"alla presenza di Dio.")
                );
            }
            elseif($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Siate lieti nel Signore;"),
                    array('ebd','',"Fedeli di Dio gridate di gioia;"),
                    array('*','2c',"esultate, o giusti.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Rallegratevi, esultate, voi santi:"),
                    array('ris','',"grande è la vostra ricompensa nei cieli.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Cantate inni al Signore, suoi fedeli,"),
                    array('ris','',"rendete grazie al suo santo nome.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"I giusti loderanno il tuo nome, Signore:"),
                    array('ris','',"i retti abiteranno alla tua presenza.")
                );
            }
            elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Santi di Dio,"),
                    array('ebd','',"Come sua eredità Dio vi ha scelti:"),
                    array('*','2c',"esultate nel Signore.")
                );
            }
        }

        elseif ($this->actual["evCode"]=='1208a') {
            //Immacolata concezione
            if($this->actual['ora']=='lodi') {
                $this->info=array(
                    array('ris','',"Dio, l'Altissimo,"),
                    array('ebd','',"Ha reso immacolata la mia vita;"),
                    array('*','2c',"mi ha vestita della sua potenza.")
                );
            }
            elseif($this->actual['ora']=='terza') {
                $this->info=array(
                    array('ebd','',"Oggi Maria, concepita immacolata,"),
                    array('ris','',"ha schiacciato la testa all'antico serpente.")
                );
            }
            elseif($this->actual['ora']=='sesta') {
                $this->info=array(
                    array('ebd','',"Esultano il mio cuore e la mia carne,"),
                    array('ris','',"esultano nel Dio vivente.")
                );
            }
            elseif($this->actual['ora']=='nona') {
                $this->info=array(
                    array('ebd','',"Con la tua Immacolata Concezione, Vergine Madre di Dio,"),
                    array('ris','',"un annunzio di gioia è venuto nel mondo.")
                );
            }
            elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                $this->info=array(
                    array('ris','',"Da questo, o Dio,"),
                    array('ebd','',"Su di me non trionfa il nemico:"),
                    array('*','2c',"so che tu mi ami.")
                );
            }
        }

        //#########################################################################################
        //PROPRIO DEI SANTI
        if ($this->actual['fesCode']!='') {

            foreach($this->actual['festa'] as $k=>$f) {

                if ($k!=$this->actual['fesCode']) continue;
            
                if ($f['comune']=='dedica') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Nella tua casa, Signore, la santità risplenda."),
                                array('ebd','','Per la durata dei giorni.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Grande è il Signore, e degno di lode."),
                                array('ebd','','Nella sua città, sul suo monte santo.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Amo, Signore, la casa dove tu dimori, alleluia,"),
                                array('ris','',"il luogo dove abita la tua gloria, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Chiedete pace per Gerusalemme, alleluia,"),
                                array('ris','',"sicurezza per chi ama la città di Dio, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Entrate nella casa del Signore, alleluia,"),
                                array('ris','',"con inni di lode varcate le sua porte, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Beato chi vive nella tua casa, Signore."),
                                array('ebd','',"Ti loderà per i secoli dei secoli."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {
                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Nella tua casa, Signore, "),
                                array('ebd','','Per la durata dei giorni'),
                                array('*','2c',"la santità risplenda.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Grande è il Signore,"),
                                array('ebd','','Nella sua città, sul suo monte santo,'),
                                array('*','2c',"e degno di lode.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Amo, Signore, la casa dove tu dimori,"),
                                array('ris','',"il luogo dove abita la tua gloria."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Chiedete pace per Gerusalemme,"),
                                array('ris','',"sicurezza per chi ama la città di Dio."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Entrate nella casa del Signore,"),
                                array('ris','',"con inni di lode varcate le sua porte."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Beato chi vive"),
                                array('ebd','',"Ti loderà per i secoli dei secoli."),
                                array('*','2c',"nella tua casa, Signore.")
                            );
                        }
                    }
                }

                elseif ($f['comune']=='BVM') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Il Signore ti ha scelta e ti ha prediletta."),
                                array('ebd','','Nella sua tenda ti ha fatto abitare.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Beato chi ascolta la parola di Dio, alleluia,"),
                                array('ris','',"e la custodisce nel cuore, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Beato il grembo della Vergine Maria, alleluia,"),
                                array('ris','',"che ha portato il Figlio dell'eterno Padre, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Benedetta sei tu fra le donne, alleluia,"),
                                array('ris','',"e benedetto il frutto del tuo seno, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Ave, Maria, piena di grazia, il Signore è con te."),
                                array('ebd','',"Benedetta tu fra le donne, e benedetto il frutto del tuo seno."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Il Signore ti ha scelta"),
                                array('ebd','','Nella sua tenda ti ha fatto abitare,'),
                                array('*','2c',"e ti ha prediletta.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Beato chi ascolta la parola di Dio,"),
                                array('ris','',"e la custodisce nel cuore."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Beato il grembo della Vergine Maria,"),
                                array('ris','',"che ha portato il Figlio dell'eterno Padre."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Benedetta sei tu fra le donne,"),
                                array('ris','',"e benedetto il frutto del tuo seno."),
                            );
                        }
                        elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Ave, Maria, piena di grazia,"),
                                array('ebd','',"Benedetta tu fra le donne, e benedetto il frutto del tuo seno,"),
                                array('*','2c',"il Signore è con te.")
                            );
                        }
                    }
                }

                if ($f['comune']=='apostoli') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Siete miei discepoli, se vi amate gli uni gli altri."),
                                array('ebd','','Tutti lo riconosceranno.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Li hai posti come capi in mezzo al tuo popolo."),
                                array('ebd','','Faranno ricordare il tuo nome, Signore.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Nel mondo intero si è diffuso il loro annunzio, alleluia,"),
                                array('ris','',"ai confini della terra la loro parola, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Hanno custodito gli insegnamenti di Cristo, alleluia,"),
                                array('ris','',"sono testimoni delle sue parole, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Gioite ed esultate, dice il Signore, alleluia,"),
                                array('ris','',"i vostri nomi sono scritti nel cielo, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Annunziate tra i popoli le meraviglie del Signore."),
                                array('ebd','',"Proclamate in tutte le nazioni."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Siete miei discepoli,"),
                                array('ebd','','Tutti lo riconosceranno:'),
                                array('*','2c',"se vi amate gli uni gli altri.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Li hai posti come capi"),
                                array('ebd','','Faranno ricordare il tuo nome, Signore,'),
                                array('*','2c',"in mezzo al tuo popolo.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Nel mondo intero si è diffuso il loro annunzio,"),
                                array('ris','',"ai confini della terra la loro parola."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Hanno custodito gli insegnamenti di Cristo,"),
                                array('ris','',"sono testimoni delle sue parole."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Gioite ed esultate, dice il Signore,"),
                                array('ris','',"i vostri nomi sono scritti nel cielo."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Annunziate tra i popoli"),
                                array('ebd','',"Proclamate in tutte le nazioni"),
                                array('*','2c',"le meraviglie del Signore.")
                            );
                        }
                    }
                }

                if ($f['comune']=='martiri') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Santi di Dio, esultate nel Signore."),
                                array('ebd','','Dio vi ha scelti come sua eredità.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Felicità per sempre sul loro volto."),
                                array('ebd','','Gioia ed esultanza intorno a loro.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"I santi sperano nel Signore, alleluia:"),
                                array('ris','',"in cui trovano una forza inesauribile, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Per un po siete stati nella prova, alleluia:"),
                                array('ris','',"la vostra sofferenza sarà cambiata in gioia, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Torneranno nella gioia del raccolto, alleluia,"),
                                array('ris','',"canteranno i prodigi del Signore, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"I giusti splenderanno nella gloria di Dio."),
                                array('ebd','',"Saranno nella gioia tutti i suoi fedeli."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"I santi martiri"),
                                array('ebd','','Tormenti e morte non li toccheranno:'),
                                array('*','2c',"sono nelle mani di Dio.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"I santi martiri"),
                                array('ebd','','La loro ricompensa è il Signore:'),
                                array('*','2c',"vivono in eterno.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"I santi sperano nel Signore:"),
                                array('ris','',"in cui trovano una forza inesauribile."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Per un po siete stati nella prova:"),
                                array('ris','',"la vostra sofferenza sarà cambiata in gioia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Torneranno nella gioia del raccolto,"),
                                array('ris','',"canteranno i prodigi del Signore."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Siate lieti nel Signore;"),
                                array('ebd','',"Fedeli di Dio, gridate di gioia."),
                                array('*','2c',"esultate, o giusti.")
                            );
                        }
                    }
                }

                if ($f['comune']=='martire') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Santi di Dio, esultate nel Signore."),
                                array('ebd','','Dio vi ha scelti come sua eredità.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Felicità per sempre sul loro volto."),
                                array('ebd','','Gioia ed esultanza intorno a loro.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore l'ha rivestito di gioia, alleluia,"),
                                array('ris','',"gli ha posto sul capo una splendida corona, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"confido in Dio, non ho timore, alleluia:"),
                                array('ris','',"chi potrà farmi del male? Alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Torneranno nella gioia del raccolto, alleluia,"),
                                array('ris','',"canteranno i prodigi del Signore, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"I giusti splenderanno nella gloria di Dio."),
                                array('ebd','',"Saranno nella gioia tutti i suoi fedeli."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Di gloria e onore"),
                                array('ebd','',"E gli hai dato potere sull'opera delle tue mani:"),
                                array('*','2c',"l'hai coronato, Signore.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Mia forza,"),
                                array('ebd','','È lui la mia salvezza:'),
                                array('*','2c',"mio canto è il Signore.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore l'ha rivestito di gioia,"),
                                array('ris','',"gli ha posto sul capo una splendida corona."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"confido in Dio, non ho timore:"),
                                array('ris','',"chi potrà farmi del male?"),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Torneranno nella gioia del raccolto,"),
                                array('ris','',"canteranno i prodigi del Signore."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"O Dio, ci hai messo alla prova"),
                                array('ebd','',"Ci hai saggiati nel fuoco, come argento,"),
                                array('*','2c',"e ci hai dato sollievo.")
                            );
                        }
                    }
                }

                if ($f['comune']=='pastori') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Sacerdoti del Signore, benedite il Signore!"),
                                array('ebd','','Lodate, Dio, fedeli e umili di cuore.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Li hai posti come sentinelle, vegliano sulla tua Chiesa."),
                                array('ebd','','Giorno e notte annunziano il tuo nome.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore ha scelto il suo servo, alleluia,"),
                                array('ris','',"guida e maestro del suo popolo, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Non mi vergogno del Vangelo, alleluia:"),
                                array('ris','',"è potenza di Dio per la salvezza, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Se il Signore non costruisce la casa, alleluia,"),
                                array('ris','',"i costruttori lavorano invano, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Vero amico dei tuoi fratelli, prega per il tuo popolo."),
                                array('ebd','',"Hai dato la vita per i fratelli."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Sacerdoti del Signore,"),
                                array('ebd','','Lodate, Dio, fedeli e umili di cuore:'),
                                array('*','2c',"benedite il Signore!")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Li hai posti come sentinelle,"),
                                array('ebd','','Giorno e notte annunziano il tuo nome,'),
                                array('*','2c',"vegliano sulla tua Chiesa.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore ha scelto il suo servo,"),
                                array('ris','',"guida e maestro del suo popolo."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Non mi vergogno del Vangelo:"),
                                array('ris','',"è potenza di Dio per la salvezza."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Se il Signore non costruisce la casa,"),
                                array('ris','',"i costruttori lavorano invano."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Vero amico dei tuoi fratelli,"),
                                array('ebd','',"Hai dato la vita per i fratelli,"),
                                array('*','2c',"prega per il tuo popolo.")
                            );
                        }
                    }
                }

                if ($f['comune']=='dottori') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Sulla bocca del giusto parole di sapienza."),
                                array('ebd','','Nel suo cuore la legge di Dio.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"La tua Chiesa, o Dio, canta la sapienza dei santi."),
                                array('ebd','',"L'assemblea ne proclama le lodi."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore ha scelto il suo servo, alleluia,"),
                                array('ris','',"guida e maestro del suo popolo, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Non mi vergogno del Vangelo, alleluia:"),
                                array('ris','',"è potenza di Dio per la salvezza, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Se il Signore non costruisce la casa, alleluia,"),
                                array('ris','',"i costruttori lavorano invano, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Ha detto le parole di Dio, in mezzo all'assemblea."),
                                array('ebd','',"Il Signore gli ha dato sapienza e intelligenza."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Sulla bocca del giusto"),
                                array('ebd','','Nel suo cuore la legge di Dio,'),
                                array('*','2c',"parole di sapienza.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"La tua Chiesa, o Dio,"),
                                array('ebd','',"L'assemblea ne proclama le lodi,"),
                                array('*','2c',"canta la sapienza dei santi.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore ha scelto il suo servo,"),
                                array('ris','',"guida e maestro del suo popolo."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Non mi vergogno del Vangelo:"),
                                array('ris','',"è potenza di Dio per la salvezza."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Se il Signore non costruisce la casa,"),
                                array('ris','',"i costruttori lavorano invano."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Ha detto le parole di Dio,"),
                                array('ebd','',"Il Signore gli ha dato sapienza e intelligenza"),
                                array('*','2c',"in mezzo all'assemblea.")
                            );
                        }
                    }
                }

                if ($f['comune']=='monaci') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Esultano i giusti davanti a Dio."),
                                array('ebd','','E cantano di gioia.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"L'anima mia ha sete di Dio."),
                                array('ebd','',"Il mio cuore anela al Dio vivente."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Rallegratevi, santi tutti, alleluia;"),
                                array('ris','',"la vostra ricompensa è grande in cielo, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Rallegratevi, giusti, nel Signore, alleluia:"),
                                array('ris','',"rendete grazie al suo santo nome, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"I giusti loderanno il tuo nome, Signore, alleluia;"),
                                array('ris','',"e i retti abiteranno alla tua presenza, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Santi di Dio, rallegratevi nel Signore."),
                                array('ebd','',"Dio vi ha scelti come sua eredità."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Esultano i giusti"),
                                array('ebd','','E cantano di gioia'),
                                array('*','2c',"davanti a Dio.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"L'anima mia"),
                                array('ebd','',"Il mio cuore anela al Dio vivente,"),
                                array('*','2c',"ha sete di Dio.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Rallegratevi, santi tutti;"),
                                array('ris','',"la vostra ricompensa è grande in cielo."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Rallegratevi, giusti, nel Signore:"),
                                array('ris','',"rendete grazie al suo santo nome."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"I giusti loderanno il tuo nome, Signore;"),
                                array('ris','',"e i retti abiteranno alla tua presenza."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Santi di Dio,"),
                                array('ebd','',"Dio vi ha scelti come sua eredità:"),
                                array('*','2c',"rallegratevi nel Signore.")
                            );
                        }
                    }
                }

                if ($f['comune']=='vergini') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Il Signore è il mio bene, è lui la mia speranza."),
                                array('ebd','','Egli dona il suo amore a chi lo cerca.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Di te ha detto il mio cuore: Io cerco il tuo volto."),
                                array('ebd','',"Non nasconderti a me, Signore."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Ecco la vergine saggia, alleluia:"),
                                array('ris','',"il Signore l'ha trovata vigilante, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Questa è una vergine saggia, alleluia:"),
                                array('ris','',"è nella schiera delle vergini prudenti, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Ho trovato colui che amo, alleluia:"),
                                array('ris','',"lo stringo a me e non lo lascio andare, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Entrano con gioia le vergini alla festa di nozze."),
                                array('ebd','',"Sono introdotte nel palazzo del re."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Il Signore è il mio bene,"),
                                array('ebd','','Egli dona il suo amore a chi lo cerca:'),
                                array('*','2c',"è lui la mia speranza.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Di te ha detto il mio cuore:"),
                                array('ebd','',"Non nasconderti a me, Signore:"),
                                array('*','2c',"Io cerco il tuo volto.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Ecco la vergine saggia:"),
                                array('ris','',"il Signore l'ha trovata vigilante."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Questa è una vergine saggia:"),
                                array('ris','',"è nella schiera delle vergini prudenti."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Ho trovato colui che amo:"),
                                array('ris','',"lo stringo a me e non lo lascio andare."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Entrano con gioia le vergini"),
                                array('ebd','',"Sono introdotte nel palazzo del re,"),
                                array('*','2c',"alla festa di nozze.")
                            );
                        }
                    }
                }

                if ($f['comune']=='santi' || $f['comune']=='religiosi' || $f['comune']=='SFA') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Il Signore l'ha amato e l'ha colmato di onore."),
                                array('ebd','',"L'ha rivestito di gloria."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Il cuore dei santi, nella legge di Dio."),
                                array('ebd','',"Diritto e sicuro è il loro cammino."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore guida i poveri nella giustizia, alleluia,"),
                                array('ris','',"agli umili insegna la sua via, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Beato l'uomo che tu istruisci, Signore, alleluia,"),
                                array('ris','',"e che ammaestri nella tua legge, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Si rallegrino quelli che sperano in te, alleluia:"),
                                array('ris','',"abiterai con loro e saranno felici per sempre, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Il Signore è giusto, ama la giustizia."),
                                array('ebd','',"Guarda i buoni con amore."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Il Signore l'ha amato"),
                                array('ebd','',"L'ha rivestito di gloria"),
                                array('*','2c',"e l'ha colmato di onore.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Il cuore dei santi,"),
                                array('ebd','',"Diritto e sicuro è il loro cammino"),
                                array('*','2c',"nella legge di Dio.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Il Signore guida i poveri nella giustizia,"),
                                array('ris','',"agli umili insegna la sua via."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Beato l'uomo che tu istruisci, Signore,"),
                                array('ris','',"e che ammaestri nella tua legge."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Si rallegrino quelli che sperano in te:"),
                                array('ris','',"abiterai con loro e saranno felici per sempre."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Il Signore è giusto,"),
                                array('ebd','',"Guarda i buoni con amore,"),
                                array('*','2c',"ama la giustizia.")
                            );
                        }
                    }
                }

                if ($f['comune']=='sante' || $f['comune']=='religiose') {

                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Esulto e mi rallegro nella tua misericordia."),
                                array('ebd','',"Hai guardato l'umiltà della tua serva."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Dio la sostiene con la luce del suo volto."),
                                array('ebd','',"Non potrà vacillare: Dio è con lei."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Beato chi è integro nella sua via, alleluia,"),
                                array('ris','',"chi cammina nella legge del Signore, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Ho trovato colui che amo, alleluia,"),
                                array('ris','',"lo stringo a me e non lo lascio andare, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Voglio cantare inni a te, Signore, alleluia:"),
                                array('ris','',"agirò con saggezza nella via dell'innocenza, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Il Signore ti ha scelta e ti ha prediletta."),
                                array('ebd','',"Nella tua tenda ti ha fatto abitare."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {

                        if($this->actual['ora']=='ves1') {
                            $this->info=array(
                                array('ris','',"Esulto e mi rallegro"),
                                array('ebd','',"Hai guardato l'umiltà della tua serva"),
                                array('*','2c',"nella tua misericordia.")
                            );
                        }
                        elseif($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Dio la sostiene"),
                                array('ebd','',"Non potrà vacillare: Dio è con lei"),
                                array('*','2c',"con la luce del suo volto.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Beato chi è integro nella sua via,"),
                                array('ris','',"chi cammina nella legge del Signore."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Ho trovato colui che amo,"),
                                array('ris','',"lo stringo a me e non lo lascio andare."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Voglio cantare inni a te, Signore:"),
                                array('ris','',"agirò con saggezza nella via dell'innocenza."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Il Signore ti ha scelta"),
                                array('ebd','',"Nella tua tenda ti ha fatto abitare,"),
                                array('*','2c',"e ti ha prediletta.")
                            );
                        }
                    }
                }

                if ($f['comune']=='DEF') {

                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Ti esalto Signore."),
                            array('ebd','',"Hai cambiato il mio lamento in canto di gioia."),
                            array('*','2c',"Tu mi hai liberato.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"Perché sei triste, anima mia, e ti agiti in me?"),
                            array('ris','',"Spera in Dio: e un giorno lo potrai lodare."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"Nell'ombra della morte non avrò paura,"),
                            array('ris','',"perché tu sei con me, Signore."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"Ascolta, Signore, la mia preghiera:"),
                            array('ris','',"a te ritorna ogni mortale."),
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"In te, Signore, ho sperato."),
                            array('ebd','',"Esulterò di gioia per la tua grazia."),
                            array('*','2c',"Non sarò mai deluso.")
                        );
                    }
                }

                //#######################################################################

                
                if ($this->actual["fesCode"]=='0121a') {
                    //sant'Agnese
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Di te ha detto il mio cuore:"),
                            array('ebd','',"Non nasconderti a me, Signore:"),
                            array('*','2c',"Io cerco il tuo volto.")
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Il Signore ti ha scelta"),
                            array('ebd','',"Nella sua tenda ti ha fatto abitare."),
                            array('*','2c',"e ti ha prediletta.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0125a') {
                    //conversione San Paolo
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Paolo, apostolo santo,"),
                            array('ebd','',"Hai annunziato la verità nel mondo intero,"),
                            array('*','2c',"Dio ti ha scelto.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"Gioite ed esultate, dice il Signore:"),
                            array('ris','',"i vostri nomi sono scritti nel cielo."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"Signore, tu dai luce alla mia lampada:"),
                            array('ris','',"mio Dio, rischiari le mie tenebre."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"Do gloria al tuo nome, Signore:"),
                            array('ris','',"grande è il tuo amore per me."),
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Con tutto il cuore"),
                            array('ebd','',"Glorifico il tuo nome fra i popoli,"),
                            array('*','2c',"canto le tue lodi, Signore.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0214a') {
                    //Cirillo e Metodio
                    if($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Santi di Dio"),
                            array('ebd','',"Dio vi ha scelti come sua eredità:"),
                            array('*','2c',"rallegratevi nel Signore.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0222a') {
                    //Cattedra San Pietro
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Li hai posti come capi"),
                            array('ebd','','Faranno ricordare il tuo nome, Signore,'),
                            array('*','2c',"in mezzo al tuo popolo.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"Nel mondo intero si è diffuso il loro annunzio,"),
                            array('ris','',"ai confini della terra la loro parola."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"Hanno custodito gli insegnamenti di Cristo,"),
                            array('ris','',"sono testimoni delle sue parole."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"Gioite ed esultate, dice il Signore,"),
                            array('ris','',"i vostri nomi sono scritti nel cielo."),
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Annunziate tra i popoli"),
                            array('ebd','',"Proclamate in tutte le nazioni"),
                            array('*','2c',"le meraviglie del Signore.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0425a') {
                    //San Marco
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Hanno esaltato la potenza del Signore."),
                            array('ebd','','E i prodigi che egli ha compiuto.'),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"Nel mondo intero si è diffuso il loro annunzio, alleluia,"),
                            array('ris','',"ai confini della terra la loro parola, alleluia."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"Hanno custodito gli insegnamenti di Cristo, alleluia,"),
                            array('ris','',"sono testimoni delle sue parole, alleluia."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"Gioite ed esultate, alleluia:"),
                            array('ris','',"i vostri nomi sono scritti nel cielo, alleluia."),
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Annunziate tra i popoli le meraviglie del Signore."),
                            array('ebd','',"Proclamate in tutte le nazioni."),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0429a') {
                    //Santa Caterina
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"La tua Chiesa, o Dio, canta la sapienza dei santi."),
                            array('ebd','',"L'assemblea ne proclama le lodi."),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Entrano con gioia le vergini alla festa di nozze."),
                            array('ebd','',"Sono introdotte nel palazzo del re."),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0511a') {
                    //Oddone....
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Il Signore si rivela a chi lo teme."),
                            array('ebd','',"Egli fa conoscere la sua alleanza."),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Sulle tue mura, Gerusalemme, ho posto sentinelle."),
                            array('ebd','',"Giorno e notte non cesseranno di proclamare il nome del Signore."),
                            array('*','2c',"Alleluia, alleluia.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0531a') {
                    //Visitazione
                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Il Signore ti ha scelta e ti ha prediletta."),
                                array('ebd','','Nella sua tenda ti ha fatto abitare.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Beati coloro che ascoltano la parola di Dio, alleluia,"),
                                array('ris','',"e la custodiscono nel cuore, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Beato il grembo della Vergine Maria, alleluia,"),
                                array('ris','',"che ha portato il Figlio dell'eterno Padre, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Benedetta sei tu fra le donne, alleluia,"),
                                array('ris','',"e benedetto il frutto del tuo seno, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Ave, Maria, piena di grazia, il Signore è con te."),
                                array('ebd','',"Benedetta tu fra le donne, benedetto il frutto del tuo seno."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Il Signore ti ha scelta"),
                                array('ebd','','Nella sua tenda ti ha fatto abitare,'),
                                array('*','2c',"e ti ha prediletta.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Beati coloro che ascoltano la parola di Dio,"),
                                array('ris','',"e la custodiscono nel cuore."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Beato il grembo della Vergine Maria,"),
                                array('ris','',"che ha portato il Figlio dell'eterno Padre."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Benedetta sei tu fra le donne,"),
                                array('ris','',"e benedetto il frutto del tuo seno."),
                            );
                        }
                        elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Ave, Maria, piena di grazia,"),
                                array('ebd','',"Benedetta tu fra le donne, benedetto il frutto del tuo seno:"),
                                array('*','2c',"il Signore è con te.")
                            );
                        }
                    }
                }

                elseif ($this->actual["fesCode"]=='0611a') {
                    //San Barnaba
                    if ($this->actual['tempo']=='P') {

                        if($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Hanno celebrato le lodi del Signore e la sua potenza."),
                                array('ebd','','I prodigi che egli ha compiuto.'),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Nel mondo intero si è diffuso il loro annunzio, alleluia,"),
                                array('ris','',"ai confini della terra la loro parola, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Hanno custodito gli insegnamenti di Cristo, alleluia,"),
                                array('ris','',"sono testimoni delle sue parole, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Gioite ed esultate, dice il Signore, alleluia:"),
                                array('ris','',"i vostri nomi sono scritti nel cielo, alleluia."),
                            );
                        }
                        elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Annunziate tra i popoli le meraviglie del Signore."),
                                array('ebd','',"Proclamate in tutte le nazioni."),
                                array('*','2c',"Alleluia, alleluia.")
                            );
                        }
                    }

                    else {
                        if($this->actual['ora']=='lodi') {
                            $this->info=array(
                                array('ris','',"Hanno celebrato le lodi del Signore"),
                                array('ebd','','I prodigi che egli ha compiuto'),
                                array('*','2c',"e la sua potenza.")
                            );
                        }
                        elseif($this->actual['ora']=='terza') {
                            $this->info=array(
                                array('ebd','',"Nel mondo intero si è diffuso il loro annunzio,"),
                                array('ris','',"ai confini della terra la loro parola."),
                            );
                        }
                        elseif($this->actual['ora']=='sesta') {
                            $this->info=array(
                                array('ebd','',"Hanno custodito gli insegnamenti di Cristo,"),
                                array('ris','',"sono testimoni delle sue parole."),
                            );
                        }
                        elseif($this->actual['ora']=='nona') {
                            $this->info=array(
                                array('ebd','',"Gioite ed esultate, dice il Signore:"),
                                array('ris','',"i vostri nomi sono scritti nel cielo."),
                            );
                        }
                        elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                            $this->info=array(
                                array('ris','',"Annunziate tra i popoli"),
                                array('ebd','',"Proclamate in tutte le nazioni:"),
                                array('*','2c',"le meraviglie del Signore.")
                            );
                        }
                    }
                }

                elseif ($this->actual["fesCode"]=='0722a') {
                    //Santa Maria Maddalena
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Maria, non piangere:"),
                            array('ebd','','Va e annunzia ai miei fratelli:'),
                            array('*','2c',"il Signore è risorto dai morti.")
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Maria, non piangere:"),
                            array('ebd','','Va e annunzia ai miei fratelli:'),
                            array('*','2c',"il Signore è risorto dai morti.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0726a') {
                    //Gioacchino ed Anna
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Nel suo grande amore,"),
                            array('ebd','',"Dalla stirpe di Davide, Dio trasse il Salvatore Gesù:"),
                            array('*','2c',"il Signore ci ha visitato.")
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Dio sostiene Israele, suo servo,"),
                            array('ebd','','Così ha parlato ai nostri padri:'),
                            array('*','2c',"si ricorda del suo amore.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0729a') {
                    //Marta, Maria e Lazzaro
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Maria stava in ascolto della parola del Signore"),
                            array('ebd','',"Maria ha scelto la parte migliore"),
                            array('*','2c',"e Marta lo serviva.")
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Gesù disse:"),
                            array('ebd','',"Io ho creduto che tu sei il Cristo, il figlio del Dio vivo:"),
                            array('*','2c',"Tuo fratello risorgerà.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0810a') {
                    //San Lorenzo
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Mia forza,"),
                            array('ebd','',"È lui la mia salvezza:"),
                            array('*','2c',"mio canto è il Signore.")
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"O Dio, ci hai messo alla prova"),
                            array('ebd','',"Ci hai saggiati nel fuoco, come l'argento,"),
                            array('*','2c',"e ci hai dato sollievo.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0829a') {
                    //Martirio di Giovani battista
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Siete andati da Giovanni:"),
                            array('ebd','',"Era una lampada che arde e risplende:"),
                            array('*','2c',"ha reso testimonianza alla verità.")
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"L'amico dello sposo esulta"),
                            array('ebd','',"Ora la mia gioia è perfetta"),
                            array('*','2c',"alla voce dello sposo.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0903a') {
                    //San Gregorio magno
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Li hai posti come sentinelle,"),
                            array('ebd','',"Giorno e notte annunziano il tuo nome,"),
                            array('*','2c',"vegliano sulla tua Chiesa.")
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Ha detto le parole di Dio,"),
                            array('ebd','',"Il Signore gli ha dato sapienza e intelligenza"),
                            array('*','2c',"in mezzo all'assemblea.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0908a') {
                    //Natività della beata Vergine
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Il Signore ti ha scelta"),
                            array('ebd','','Nella sua tenda ti ha fatto abitare,'),
                            array('*','2c',"e ti ha prediletta.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"Beato chi ascolta la parola di Dio,"),
                            array('ris','',"e la custodisce nel cuore."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"Beata sei tu, o Vergine Maria!"),
                            array('ris','',"Hai portato il Figlio dell'Eterno."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"Benedetta sei tu fra le donne,"),
                            array('ris','',"e benedetto il frutto del tuo seno."),
                        );
                    }
                    elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Ave, Maria, piena di grazia,"),
                            array('ebd','',"Benedetta tu fra le donne, benedetto il frutto del tuo seno:"),
                            array('*','2c',"il Signore è con te.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0915a') {
                    //Beata Vergine Maria addolorata
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Ottienici la salvezza,"),
                            array('ebd','','Per la passione di Cristo tuo Figlio,'),
                            array('*','2c',"o Vergine Maria.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"L'anima mia attende il Signore:"),
                            array('ris','',"egli è nostro aiuto e nostro scudo."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"Tutti i tuoi flutti e le tue onde"),
                            array('ris','',"sopra di me sono passati."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"La vostra tristezza"),
                            array('ris','',"si muterà in gioia."),
                        );
                    }
                    elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Stava Maria"),
                            array('ebd','',"Affrontò con fortezza il martirio del cuore,"),
                            array('*','2c',"presso la croce del Figlio.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='0929a') {
                    //San Michele e tutti gli angeli
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Un angelo apparve"),
                            array('ebd','',"Portava in mano un turibolo d'oro"),
                            array('*','2c',"accanto all'altare del tempio.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"Saliva a Dio il profumo degli aromi"),
                            array('ris','',"dalla mano dell'angelo."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"Benedite il Signore, suoi angeli,"),
                            array('ris','',"pronti alla voce della sua parola."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"Alla presenza degli angeli canto per te,"),
                            array('ris','',"mi prostro verso il tuo santo tempio, e rendo grazie al tuo nome, Signore."),
                        );
                    }
                    elseif($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Saliva a Dio"),
                            array('ebd','',"Dalla mano dell'angelo"),
                            array('*','2c',"il profumo degli aromi.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='1002a') {
                    //Angeli custodi
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Davanti agli angeli"),
                            array('ebd','',"Rendo grazie al tuo nome,"),
                            array('*','2c',"canto per te, mio Dio.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"Davanti agli angeli canto per te, mio Dio;"),
                            array('ris','',"nel tuo tempio ti adoro e rendo grazie."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"Il Signore ha mandato il suo angelo,"),
                            array('ris','',"e mi ha liberato dalla mano di Erode."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"Come profumo d'incenso, le preghiere dei santi"),
                            array('ris','',"dalla mano dell'angelo, salivano a Dio."),
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Ai suoi angeli ti ha affidato:"),
                            array('ebd','',"Ti porteranno sulle loro mani,"),
                            array('*','2c',"custodiranno la tua via.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='1018a') {
                    //San Luca
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Hanno esaltato"),
                            array('ebd','',"E i prodigi che egli ha compiuto;"),
                            array('*','2c',"la potenza del Signore.")
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Annunziate tra i popoli"),
                            array('ebd','',"Proclamate in tutte le nazioni:"),
                            array('*','2c',"le meraviglie del Signore.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='1113a') {
                    //santi monaci
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Beati quelli che dimorano"),
                            array('ebd','',"Sempre cantano le tue lodi,"),
                            array('*','2c',"nella tua case.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"Sostienimi secondo la tua parola e avrò la vita,"),
                            array('ris','',"non deludermi nella mia speranza."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"Quanto amo la tua legge, Signore!"),
                            array('ris','',"Tutto il giorno la vado meditando."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"Noi siamo stranieri davanti a te, Signore,"),
                            array('ris','',"e pellegrini come i nostri padri."),
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Gioite nel Signore,"),
                            array('ebd','',"Giubilate, voi tutti retti di cuore,"),
                            array('*','2c',"ed esultate, giusti.")
                        );
                    }
                }

                elseif ($this->actual["fesCode"]=='1116a') {
                    //Santa Geltrude
                    if($this->actual['ora']=='lodi') {
                        $this->info=array(
                            array('ris','',"Di te ha detto il mio cuore:"),
                            array('ebd','',"Non nasconderti a me, Signore:"),
                            array('*','2c',"Io cerco il tuo volto.")
                        );
                    }
                    elseif($this->actual['ora']=='terza') {
                        $this->info=array(
                            array('ebd','',"Questa è una vergine saggia:"),
                            array('ris','',"è nella schiera delle vergini prudenti."),
                        );
                    }
                    elseif($this->actual['ora']=='sesta') {
                        $this->info=array(
                            array('ebd','',"La soccorrerà Dio prima del mattino:"),
                            array('ris','',"Dio sta in essa, non potrà vacillare."),
                        );
                    }
                    elseif($this->actual['ora']=='nona') {
                        $this->info=array(
                            array('ebd','',"Fu eletta da Dio e fu amata:"),
                            array('ris','',"egli la fece abitare nella sua tenda."),
                        );
                    }
                    elseif($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                        $this->info=array(
                            array('ris','',"Santi di Dio,"),
                            array('ebd','',"Dio vi ha scelti come sua eredità:"),
                            array('*','2c',"rallegratevi nel Signore.")
                        );
                    }
                }
            }
        }     
    }

    function draw() {

        $this->res['testo']= new Saltesto();
        $this->res['testo']->addLabel('glo',array('','',"Gloria al Padre e al Figlio e allo Spirito Santo."));

        $this->res['testo']->setParte($this->res['parte']);

        $temp=array();
        $m="";

        if ($this->tipo=='RB') {

            if ($this->info[0][0]=='ant') {
                $temp=$this->info;
            }

            else {

                //risposta
                $m=$this->info[0][2].' '.$this->info [2][2];

                $t=$this->info[0];
                $t[2].=' * '.$this->info[2][2];

                $temp[]=$t;
                $temp[]=array('','2c',$m);

                ////////////////////////////////////

                $temp[]=$this->info[1];

                ////////////////////////////////////

                $temp[]=$this->info[2];
                $temp[]=array('glo');
                $temp[]=array('','2c',$m);
            }
        }
        elseif ($this->tipo=='RBB') {
            $temp=$this->info;
        }

        $this->res['testo']->addBlock($temp);

        echo '<div class="salResBlockTitle" style="margin-top:30px;">';
            echo $this->res['titolo'];
            //echo '<div>'.json_encode($this->actual).'</div>';
            if ($this->litio->config['vox']) {
                $this->litio->drawPlayer($this->res['parte'],0);
            }
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->res['testo']) {
                echo $this->res['testo']->draw();
            }
        echo '</div>';
    }
    
}
?>