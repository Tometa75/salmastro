<?php
class Invito {

    protected $titolo="";
    protected $antifona=array();
    protected $testoBase=array();
    protected $testoRes=array();

    protected $inizio=array(
        array('ebd','','Signore, apri le mie labbra'),
        array('ris','','e la mia bocca proclami la tua lode.')
    );

    protected $gloria=array(
        array('','*','Gloria al Padre e al Figlio'),
        array('','2','e allo Spirito Santo.'),
        array('','*','Come era nel principio, e ora e sempre,'),
        array('','2','nei secoli dei secoli. Amen.')
    );    

    protected $actual;
    protected $head;
    protected $res;

    function __construct($caller) {

        $this->actual=$caller->actual;

        $this->head=new Saltesto();
        $this->res=new Saltesto();
        $this->res->setProp(1,'2','chg','2c');

        $this->head->addBlock($this->inizio);

        $this->init();

        $this->build();

        $this->build2();

    }

    function init() {

        switch ($this->actual['weekDay']) {

            case 0:
                $this->antifona="Esultate in Dio, intonate il canto: è il nostro giorno di festa.";
                $this->salmo("80");
            break;
            case 1:
                $this->antifona="Gloria al Signore nel suo tempio: egli siede re per sempre.";
                $this->salmo("28");
            break;
            case 2:
                $this->antifona="Ti lodino, o Dio, i popoli tutti, conoscano la tua salvezza.";
                $this->salmo("66");
            break;
            case 3:
                $this->antifona="Venite, contemplate le opere del Signore: ha fatto portenti sulla terra.";
                $this->salmo("45");
            break;
            case 4:
                $this->antifona="Aprite le porte al Signore: entri il re della gloria.";
                $this->salmo("23");
            break;
            case 5:
                $this->antifona="Quanto è grande il tuo nome, Signore, nei cieli e sulla terra!";
                $this->salmo("8");
            break;
            case 6:
                $this->antifona="Venite, acclamate al Signore, ascoltate oggi la sua voce.";
                $this->salmo("94");
            break;   
        }
        
    }

    //################################################################################
    function setSalmo() {
        switch ($this->actual['weekDay']) {
            case 0:
                $this->salmo("80");
            break;
            case 1:
                $this->salmo("28");
            break;
            case 2:
                $this->salmo("66");
            break;
            case 3:
                $this->salmo("45");
            break;
            case 4:
                $this->salmo("23");
            break;
            case 5:
                $this->salmo("8");
            break;
            case 6:
                $this->salmo("94");
            break;   
        }
    }

    function salmo($id) {

        switch ($id) {

            case "80":
                $this->titolo="Salmo 80 Solenne rinnovazione dell'Alleanza";
                $this->testoBase=array(
                    array(
                        array('','*',"Esultate in Dio, nostra forza,"),
                        array('','2',"acclamate al Dio di Giacobbe."),
                        array('','*',"Intonate il canto e suonate il timpano,"),
                        array('','2',"la cetra melodiosa con l'arpa."),
                        array('','*',"Suonate la tromba nel plenilunio,"),
                        array('','2',"nostro giorno di festa.")
                    ),
                    array(
                        array('','*',"Questa è una legge per Israele,"),
                        array('','2',"un decreto del Dio di Giacobbe."),
                        array('','*',"Lo ha dato come testimonianza a Giuseppe,"),
                        array('','2',"quando usciva dal paese d'Egitto."),
                        array('','+',"Un linguaggio mai inteso io sento:"),
                        array('','*',"« Ho liberato dal peso la sua spalla,"),
                        array('','2',"le sue mani hanno deposto la cesta."),
                        array('','+',"Hai gridato a me nell'angoscia e io ti ho liberato,"),
                        array('','*',"avvolto nella nube ti ho dato risposta,"),
                        array('','2',"ti ho messo alla prova alle acque di Meriba."),
                    ),
                    array(
                        array('','*',"Ascolta, popolo mio, ti voglio ammonire;"),
                        array('','2',"Israele, se tu mi ascoltassi!"),
                        array('','*',"Non ci sia in mezzo a te un altro dio"),
                        array('','2',"e non prostrarti a un dio straniero."),
                        array('','+',"Sono io il Signore tuo Dio,"),
                        array('','*',"che ti ho fatto uscire dal paese d'Egitto;"),
                        array('','2',"apri la tua bocca, la voglio riempire.")
                    ),
                    array(
                        array('','*',"Ma il mio popolo non ha ascoltato la mia voce,"),
                        array('','2',"Israele non mi ha obbedito."),
                        array('','*',"L'ho abbandonato alla durezza del suo cuore,"),
                        array('','2',"che seguisse il proprio consiglio.")
                    ),
                    array(
                        array('','*',"Se il mio popolo mi ascoltasse,"),
                        array('','2',"se Israele camminasse per le mie vie!"),
                        array('','*',"Subito piegherei i suoi nemici"),
                        array('','2',"e contro i suoi avversari porterei la mia mano."),
                        array('','*',"I nemici del Signore gli sarebbero sottomessi,"),
                        array('','2',"e la loro sorte sarebbe segnata per sempre;"),
                        array('','*',"li nutrirei con fiore di frumento,"),
                        array('','2',"li sazierei con miele di roccia ».")
                    )
                );
            break;

            case "28":
                $this->titolo="Salmo 28 Il Signore proclama solennemente la sua parola";
                $this->testoBase=array(
                    array(
                        array('','*',"Date al Signore, figli di Dio,"),
                        array('','2',"date al Signore gloria e potenza."),
                        array('','*',"Date al Signore la gloria del suo nome,"),
                        array('','2',"prostratevi al Signore in santi ornamenti.")
                    ),
                    array(
                        array('','+',"Il Signore tuona sulle acque,"),
                        array('','*',"il Dio della gloria scatena il tuono,"),
                        array('','2',"il Signore, sull'immensità delle acque."),
                        array('','*',"Il Signore tuona con forza,"),
                        array('','2',"tuona il Signore con potenza.")
                    ),
                    array(
                        array('','*',"Il tuono del Signore schianta i cedri,"),
                        array('','2',"il Signore schianta i cedri del Libano."),
                        array('','*',"Fa balzare come un vitello il Libano"),
                        array('','2',"e il Sirion come un giovane bufalo.")
                    ),
                    array(
                        array('','+',"Il tuono saetta fiamme di fuoco,"),
                        array('','*',"il tuono scuote la steppa,"),
                        array('','2',"il Signore scuote il deserto di Kades."),
                        array('','+',"Il tuono fa partorire le cerve,"),
                        array('','*',"e spoglia le foreste."),
                        array('','2',"Nel suo tempio tutti dicono: « Gloria! »")
                    ),
                    array(
                        array('','*',"Il Signore è assiso sulla tempesta,"),
                        array('','2',"il Signore siede re per sempre."),
                        array('','*',"Il Signore darà forza al suo popolo,"),
                        array('','2',"benedirà il suo popolo con la pace.")
                    )
                );
            break;

            case "66":
                $this->titolo="Salmo 66 Tutti i popoli glorifichino il Signore";
                $this->testoBase=array(
                    array(
                        array('','*',"Dio abbia pietà di noi e ci benedica,"),
                        array('','2',"su di noi faccia splendere il suo volto;"),
                        array('','*',"perché si conosca sulla terra la sua via,"),
                        array('','2',"fra tutte le genti la sua salvezza.")
                    ),
                    array(
                        array('','*',"Ti lodino i popoli, Dio,"),
                        array('','2',"ti lodino i popoli tutti."),
                        array('','+',"Esultino le genti e si rallegrino,"),
                        array('','*',"perché giudichi i popoli con giustizia,"),
                        array('','2',"governi le nazioni sulla terra.")
                    ),
                    array(
                        array('','*',"Ti lodino i popoli, Dio,"),
                        array('','2',"ti lodino i popoli tutti."),
                        array('','*',"La terra ha dato il suo frutto."),
                        array('','2',"Ci benedica Dio, il nostro Dio,"),
                        array('','*',"ci benedica Dio"),
                        array('','2',"e lo temano tutti i confini della terra.")
                    )
                );
            break;

            case "45":
                $this->titolo="Salmo 45 Dio rifugio e forza del suo popolo";
                $this->testoBase=array(
                    array(
                        array('','*',"Dio è per noi rifugio e forza,"),
                        array('','2',"aiuto sempre vicino nelle angosce."),
                        array('','*',"Perciò non temiamo se trema la terra,"),
                        array('','2',"se crollano i monti nel fondo del mare."),
                        array('','*',"Fremano, si gonfino le sue acque,"),
                        array('','2',"tremino i monti per i suoi flutti."),
                        array('','*',"Il Signore degli eserciti è con noi,"),
                        array('','2',"nostro rifugio è il Dio di Giacobbe.")
                    ),
                    array(
                        array('','*',"Un fiume e i suoi ruscelli rallegrano la città di Dio,"),
                        array('','2',"la santa dimora dell'Altissimo."),
                        array('','*',"Dio sta in essa: non potrà vacillare;"),
                        array('','2',"la soccorrerà Dio, prima del mattino."),
                        array('','*',"Fremettero le genti, i regni si scossero;"),
                        array('','2',"egli tuonò, si sgretolò la terra."),
                        array('','*',"Il Signore degli eserciti è con noi,"),
                        array('','2',"nostro rifugio è il Dio di Giacobbe."),
                    ),
                    array(
                        array('','*',"Venite, vedete le opere del Signore,"),
                        array('','2',"Egli ha fatto portenti sulla terra."),
                        array('','+',"Farà cessare le guerre fino ai confini della terra,"),
                        array('','*',"romperà gli archi e spezzerà le lance,"),
                        array('','2',"brucerà con il fuoco gli scudi."),
                        array('','*',"Fermatevi e sappiate che io sono Dio,"),
                        array('','2',"eccelso fra le genti, eccelso sulla terra."),
                        array('','*',"Il Signore degli eserciti è con noi,"),
                        array('','2',"nostro rifugio è il Dio di Giacobbe.")
                    )
                );
            break;

            case "23":
                $this->titolo="Salmo 23 Il Signore entra nel suo tempio";
                $this->testoBase=array(
                    array(
                        array('','*',"Del Signore è la terra e quanto contiene,"),
                        array('','2',"l'universo e i suoi abitanti."),
                        array('','*',"È lui che l'ha fondata sui mari,"),
                        array('','2',"e sui fiumi l'ha stabilita.")
                    ),
                    array(
                        array('','*',"Chi salirà il monte del Signore,"),
                        array('','2',"chi starà nel suo luogo santo?"),
                        array('','+',"Chi ha mani innocenti e cuore puro,"),
                        array('','*',"chi non pronunzia menzogna,"),
                        array('','2',"chi non giura a danno del suo prossimo.")
                    ),
                    array(
                        array('','*',"Egli otterrà benedizione dal Signore,"),
                        array('','2',"giustizia da Dio sua salvezza."),
                        array('','*',"Ecco la generazione che lo cerca,"),
                        array('','2',"che cerca il tuo volto, Dio di Giacobbe.")
                    ),
                    array(
                        array('','+',"Sollevate, porte, i vostri frontali,"),
                        array('','*',"alzatevi, porte antiche,"),
                        array('','2',"ed entri il re della gloria."),
                        array('','+',"Chi è questo re della gloria?"),
                        array('','*',"Il Signore forte e potente,"),
                        array('','2',"il Signore potente in battaglia.")
                    ),
                    array(
                        array('','+',"Sollevate, porte, i vostri frontali,"),
                        array('','*',"alzatevi, porte antiche,"),
                        array('','2',"ed entri il re della gloria."),
                        array('','*',"Chi è questo re della gloria?"),
                        array('','2',"Il Signore degli eserciti è il re della gloria.")
                    )
                );
            break;

            case "8":
                $this->titolo="Salmo 8 Grandezza del Signore e dignità dell'uomo";
                $this->testoBase=array(
                    array(
                        array('','+',"O Signore, nostro Dio,"),
                        array('','*',"quanto è grande il tuo nome su tutta la terra,"),
                        array('','2',"sopra i cieli si innalza la tua magnificenza."),
                        array('','+',"Con la bocca dei bimbi e dei lattanti"),
                        array('','*',"affermi la tua potenza contro i tuoi avversari,"),
                        array('','2',"per ridurre al silenzio nemici e ribelli.")
                    ),
                    array(
                        array('','*',"Se guardo il tuo cielo, opera delle tue dita,"),
                        array('','2',"la luna e le stelle che tu hai fissate,"),
                        array('','*',"che cosa è l'uomo perché te ne ricordi"),
                        array('','2',"e il figlio dell'uomo perché te ne curi?")
                    ),
                    array(
                        array('','*',"Eppure l'hai fatto poco meno degli angeli,"),
                        array('','2',"di gloria e di onore lo hai coronato:"),
                        array('','*',"gli hai dato potere sulle opere delle tue mani,"),
                        array('','2',"tutto hai posto sotto i sui piedi;")
                    ),
                    array(
                        array('','*',"tutti i greggi e gli armenti,"),
                        array('','2',"tutte le bestie della campagna;"),
                        array('','*',"gli uccelli del cielo e i pesci del mare,"),
                        array('','2',"che percorrono le vie del mare."),
                        array('','*',"O Signore, nostro Dio,"),
                        array('','2',"quanto è grande il tuo nome su tutta la terra!")
                    )
                );
            break;

            case "94":
                $this->titolo="Salmo 94 Invito a lodare Dio";
                $this->testoBase=array(
                    array(
                        array('','*',"Venite, applaudiamo al Signore,"),
                        array('','2',"acclamiamo alla roccia della nostra salvezza."),
                        array('','*',"Accostiamoci a lui per rendergli grazie,"),
                        array('','2',"a lui acclamiamo con canti di gioia.")
                    ),
                    array(
                        array('','*',"Perché grande Dio è il Signore,"),
                        array('','2',"grande re sopra tutti gli dei."),
                        array('','*',"Nella sua mano sono gli abissi della terra,"),
                        array('','2',"sono sue le vette dei monti."),
                        array('','*',"Suo è il mare, egli l'ha fatto,"),
                        array('','2',"le sue mani hanno plasmato la terra.")
                    ),
                    array(
                        array('','*',"Venite, prostràti adoriamo,"),
                        array('','2',"in ginocchio davanti al Signore che ci ha creati."),
                        array('','*',"Egli è il nostro Dio, e noi il popolo del suo pascolo,"),
                        array('','2',"il gregge che egli conduce.")
                    ),
                    array(
                        array('','+',"Ascoltate oggi la sua voce:"),
                        array('','*',"« Non indurite il cuore,"),
                        array('','2',"come a Meriba, come nel giorno di Massa nel deserto,"),
                        array('','*',"dove mi tentarono i vostri padri:"),
                        array('','2',"mi misero alla prova pur avendo visto le mie opere.")
                    ),
                    array(
                        array('','+',"Per quarant'anni mi disgustai di quella generazione"),
                        array('','*',"e dissi: Sono un popolo dal cuore traviato,"),
                        array('','2',"non conoscono le mie vie;"),
                        array('','*',"perciò ho giurato nel mio sdegno:"),
                        array('','2',"Non entreranno nel luogo del mio riposo ».")
                    )
                );
            break;
        }
    }
    //################################################################################

    function build() {

        if ($this->actual['tempo']=='A') {

            if (substr($this->actual['today'],4,4)>='1217' && substr($this->actual['today'],4,4)<='1223') {
                $this->antifona="Vicino è il Signore: venite, adoriamo.";
            }
            elseif (substr($this->actual['today'],4,4)=='1224') {
                $this->antifona="Oggi saprete che il Signore viene: col nuovo giorno vedrete la sua gloria.";
            }
            else {
                $this->antifona="Venite, adoriamo il Signore che viene per noi.";
            }
        }

        if ($this->actual['tempo']=='N') {

            if (substr($this->actual['today'],4,4)=='1225') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
                $this->salmo("94");  
            }

            elseif (substr($this->actual['today'],4,4)=='1226') {
                $this->antifona="Cristo Signore, nato per noi, ha dato a Stefano la corona di gloria: venite, adoriamo.";
                $this->salmo("94");
            }

            elseif (substr($this->actual['today'],4,4)=='1227') {
                $this->antifona="Venite, adoriamo Cristo, Re e Signore degli apostoli.";
                $this->salmo("94");
            }

            elseif (substr($this->actual['today'],4,4)=='1228') {
                $this->antifona="Cristo Signore, nato per noi, ai santi Innocenti ha dato la corona del martirio: venite, adoriamo.";
                $this->salmo("94");
            }

            elseif (substr($this->actual['today'],4,4)=='1229') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
                $this->salmo("94");
            }

            elseif (substr($this->actual['today'],4,4)=='1230') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
                $this->salmo("94");
            }

            elseif (substr($this->actual['today'],4,4)=='1231') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
                $this->salmo("94");
            }

            ////////////////////////////////////

            if ($this->actual['evCode']=='SAF') {
                $this->antifona="Cristo, Figlio di Dio, fu obbediente a Maria e a Giuseppe: venite, adoriamo.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='MSS') {
                $this->antifona="Celebriamo la Vergine Maria, Madre di Dio: adoriamo il suo Figlio, Cristo Signore.";
                $this->salmo("94");
            }

            if (substr($this->actual['today'],4,4)>='0102' && substr($this->actual['today'],4,4)<='0105') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
            }

            if ($this->actual['evCode']=='2DN') {
                $this->antifona="Cristo è nato per noi: venite, adoriamo.";
                $this->salmo("80");
            }

            if ($this->actual['evCode']=='EPI') {
                $this->antifona="Venite, adoriamo il Signore apparso tra noi.";
                $this->salmo("94");
            }

            if (substr($this->actual['today'],4,4)>='0107' && substr($this->actual['today'],4,4)<='0112') {
                $this->antifona="Venite, adoriamo il Signore apparso tra noi.";
            }
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='Q') {

            $this->antifona="Venite, adoriamo Cristo Signore: per noi ha sofferto tentazione e morte.";

            if ($this->actual['evCode']=='SS5') {
                $this->antifona="Venite, adoriamo Cristo, il Figlio di Dio: con il suo sangue ci ha redenti.";
                $this->salmo("94");
            }

            elseif ($this->actual['evCode']=='SS6') {
                $this->antifona="Venite, adoriamo il Signore, crocifisso e sepolto per noi.";
                $this->salmo("94");
            }
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='P') {

            if ($this->actual['today']<$this->actual['ASC']) {
                $this->antifona="Il Signore è veramente risorto, alleluia.";
            }
            else {
                $this->antifona="Adoriamo Cristo Signore, che manda il suo Spirito, alleluia.";
            }

            if ($this->actual['evCode']=='PAS') {
                $this->antifona="Il Signore è veramente risorto, alleluia.";
                $this->salmo("94");
            }

            if (substr($this->actual['evCode'],0,3)=='PA1') {
                $this->antifona="Il Signore è veramente risorto, alleluia.";
                $this->salmo("94");
            }
 
            if ($this->actual['evCode']=='PA2') {
                $this->antifona="Il Signore è veramente risorto, alleluia.";
                $this->salmo("94");
            }

            //////////////////////////////////////////////////////////////////

            if ($this->actual['evCode']=='ASC') {
                $this->antifona="Venite, adoriamo Cristo Signore, che ascende nei cieli, alleluia.";
                $this->salmo("94");
            }
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='O') {

            if ($this->actual['evCode']=='BAT') {
                $this->antifona="Venite, adoriamo il Figlio prediletto: in lui il Padre si compiace.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='PEN') {
                $this->antifona="Alleluia. Lo Spirito del Signore pervade l'universo: venite, adoriamo, alleluia.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='TRI') {
                $this->antifona="Venite, adoriamo l'unico vero Dio: Padre e Figlio e Spirito Santo.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='COD') {
                $this->antifona="Adoriamo Cristo Signore, Pane della vita.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='SCG') {
                $this->antifona="Adoriamo il Cuore di Cristo ferito per i nostri peccati.";
                $this->salmo("94");
            }

            if ($this->actual['evCode']=='GRE') {
                $this->antifona="Venite, adoriamo il Re dei re, Cristo Signore.";
                $this->salmo("94");
            }
        }

        //////////////////////////////////////////////////////////////////////////////////////

        if ($this->actual['evCode']=='0202a') {
            $this->antifona="Ecco: il Signore viene al suo tempio santo; rallegrati ed esulta, Sion, e va' incontro al tuo Dio.";
            $this->salmo("94");
        }
        elseif ($this->actual['evCode']=='0210a') {
            $this->antifona="Venite, adoriamo Cristo, Re e Sposo delle vergini.";
            $this->salmo("94");
        }

        elseif ($this->actual['evCode']=='0319a') {
            if ($this->actual['tempo']=='P') {
                $this->antifona="Adoriamo Cristo, nostro Dio, conosciuto come il figlio di Giuseppe, alleluia.";
                $this->salmo("94");
            }
            else {
                $this->antifona="Adoriamo Cristo, nostro Dio, conosciuto come il figlio di Giuseppe.";
                $this->salmo("94");
            }
        }
        elseif ($this->actual['evCode']=='0321a') {
            if ($this->actual['tempo']=='P') {
                $this->antifona="Nella festa del nostro santo padre Benedetto, lodiamo il Signore nostro Dio, alleluia.";
                $this->salmo("94");
            }
            else {
                $this->antifona="Nella festa del nostro santo padre Benedetto, lodiamo il Signore nostro Dio.";
                $this->salmo("94");
            }
        }
        elseif ($this->actual['evCode']=='0325a') {
            if ($this->actual['tempo']=='P') {
                $this->antifona="Il Verbo di Dio si è fatto uomo: venite, adoriamo, alleluia.";
                $this->salmo("94");
            }
            else {
                $this->antifona="Il Verbo di Dio si è fatto uomo: venite, adoriamo.";
                $this->salmo("94");
            }
        }
        elseif ($this->actual['evCode']=='0624a') {
            $this->antifona="Adoriamo Gesù, Agnello di Dio, annunziato da Giovanni.";
            $this->salmo("94");  
        }
        elseif ($this->actual['evCode']=='0711a') {
            $this->antifona="Nella festa del nostro santo padre Benedetto, lodiamo il Signore nostro Dio.";
            $this->salmo("94");
        }
        elseif ($this->actual['evCode']=='0806a') {
            $this->antifona="Venite, adoriamo Cristo Signore, il Re della gloria.";
            $this->salmo("94");
        }
        elseif ($this->actual['evCode']=='0815a') {
            $this->antifona="Oggi la Madre di Cristo è assunta in cielo: lodiamo il Figlio, Signore del mondo.";
            $this->salmo("94");
        }
        elseif ($this->actual['evCode']=='0914a') {
            $this->antifona="Venite, adoriamo Cristo Signore, esaltato per noi sulla croce.";
            $this->salmo("94");
        }
        elseif ($this->actual['evCode']=='1101a') {
            $this->antifona="Venite, adoriamo il Signore: a lui dà gloria l'assemblea dei santi.";
            $this->salmo("94");
        }
        elseif ($this->actual['evCode']=='1208a') {
            $this->antifona="Celebriamo l'Immacolata Concezione di Maria: adoriamo suo Figlio, Cristo Signore.";
            $this->salmo("94");
        }
    }

    function build2() {

        if ($this->actual['fesCode']!='') {

            foreach($this->actual['festa'] as $k=>$f) {

                if ($k!=$this->actual['fesCode']) continue;
            
                if ($f['comune']=='dedica') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Chiesa, sposa di Cristo, acclama il tuo Signore, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Chiesa, sposa di Cristo, acclama il tuo Signore.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='BVM') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo il Cristo Signore, figlio della Vergine Maria, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo il Cristo Signore, figlio della Vergine Maria.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='apostoli') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo Cristo, Re e Signore degli apostoli, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo Cristo, Re e Signore degli apostoli.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='martiri' || $f['comune']=='martire') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Esultino i santi nel Signore, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo il Re dei martiri, Cristo Signore.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='pastori') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo il Pastore supremo, Cristo Signore, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo il Pastore supremo, Cristo Signore.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='dottori') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo Cristo Signore, fonte di ogni sapienza, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo Cristo Signore, fonte di ogni sapienza.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='monaci') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo Cristo, obbediente fino alla morte, modello di vita per tutti i monaci, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo Cristo, obbediente fino alla morte, modello di vita per tutti i monaci.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='vergini') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo Cristo, gioia e corona delle vergini, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo Cristo, gioia e corona delle vergini.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='santi' || $f['comune']=='religiosi') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo il Signore: la sua gloria risplende nei santi, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo il Signore: la sua gloria risplende nei santi.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='sante' || $f['comune']=='religiose') {

                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Venite, adoriamo il Signore mirabile nelle sue sante, alleluia.";
                        $this->salmo("94");
                    }
                    else {
                        $this->antifona="Venite, adoriamo il Signore mirabile nelle sue sante.";
                        $this->salmo("94");
                    }
                }

                elseif ($f['comune']=='DEF') {

                    $this->antifona="Venite, adoriamo il Signore: per lui tutti vivono.";
                    $this->salmo("94");
                }

                ////////////////////////////////////////////////////////////////////////

                if ($k=='0115a') {
                    $this->antifona="La celebrazione dei santi Mauro e Placido sia una lode al nostro Dio.";
                }
                elseif ($k=='0125a') {
                    $this->antifona="Lodiamo il nostro Dio per la conversione del Dottore delle genti.";
                }
                elseif ($k=='0425a') {
                    $this->antifona="Venite, adoriamo il Signore che parla a noi nel Vangelo, alleluia.";
                }
                elseif ($k=='0429a') {
                    $this->antifona="Venite, adoriamo Cristo Signore, fonte di ogni sapienza, alleluia.";
                }
                elseif ($k=='0501a') {
                    $this->antifona="Alleluia. Adoriamo Cristo, nostro Dio, chiamato figlio del lavoratore, alleluia.";
                    $this->salmo("94");
                }
                elseif ($k=='0511a') {
                    $this->antifona="Esultino i santi nel Signore, alleluia.";
                    $this->setSalmo();
                }
                
                elseif ($k=='0531a') {
                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Nella visitazione della Vergine Maria inneggiamo a Cristo suo Figlio, alleluia.";
                    }
                    else {
                        $this->antifona="Nella visitazione della Vergine Maria inneggiamo a Cristo suo Figlio.";
                    }
                }
                
                elseif ($k=='0611a') {
                    if ($this->actual['tempo']=='P') {
                        $this->antifona="Adoriamo lo Spirito di Dio, che parla nei profeti e maestri della Chiesa, alleluia.";
                    }
                    else {
                        $this->antifona="Adoriamo lo Spirito di Dio, che parla nei profeti e maestri della Chiesa.";
                    }
                    $this->setSalmo();
                }
                
                elseif ($k=='0726a') {  
                    $this->antifona="Venite, adoriamo Cristo nostro Re, il figlio di David.";
                    $this->setSalmo();
                }
                elseif ($k=='0729a') {  
                    $this->antifona="Il Signore è qui e ci chiama: venite ad adorarlo.";
                    $this->setSalmo();
                }
                elseif ($k=='0810a') {  
                    $this->antifona="Venite, adoriamo Cristo Signore: egli ha dato a Lorenzo la corona di gloria.";
                }
                
                elseif ($k=='0822a') {  
                    $this->antifona="Adoriamo Cristo Signore, che ha dato alla sua Madre la corona di gloria.";
                    $this->setSalmo();
                }
            
                elseif ($k=='0829a') {  
                    $this->antifona="Nel ricordo di Giovanni Battista, precursore di Cristo nel martirio, adoriamo l'Agnello di Dio.";
                    $this->setSalmo();
                }

                elseif ($k=='0908a') {  
                    $this->antifona="Nella nascita della Vergine Maria, lodiamo Cristo suo Figlio.";
                }

                elseif ($k=='0915a') {  
                    $this->antifona="Nel ricordo di Maria, unita al Figlio nella passione, adoriamo Cristo Signore.";
                    $this->setSalmo();
                }

                elseif ($k=='0929a') {  
                    $this->antifona="Venite, adoriamo il Signore alla presenza degli angeli.";
                }
                
                elseif ($k=='1002a') {  
                    $this->antifona="Venite, adoriamo il Signore: i suoi angeli lo servono.";
                    $this->setSalmo();
                }
                elseif ($k=='1004a') {  
                    $this->antifona="Lodiamo il Signore, nostro Dio, nella festa di san Francesco d'Assisi.";
                    $this->salmo("94");
                }
                elseif ($k=='1018a') {  
                    $this->antifona="Venite, adoriamo il Signore che parla a noi nel Vangelo, alleluia.";
                }
                
                elseif ($k=='1111a') {  
                    $this->antifona="Nel ricordo di san Martino lodiamo il Signore nostro Dio.";
                }
                elseif ($k=='1113a') {  
                    $this->antifona="Venite, adoriamo Cristo Signore, nostro Re: nulla anteponiamo al suo amore.";
                }
                
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    function drawAntifona() {
        //true = prima - false = dopo

        echo '<div style="position:relative;margin-top:5px;margin-bottom:10px;font-size:1.1em;" >';
        echo '<div class="salAntifona" >ant.</div>';
            echo '<div class="salAntifona2" >';
                echo $this->antifona;
            echo '</div>';
        echo '</div>';
    }

    function draw() {

        echo '<div class="salResBlockTitle" >';
            echo 'Invitatorio';
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            $this->head->draw();
        echo '</div>';

        $this->drawAntifona();

        echo '<div class="salResBlockTitle" >';
            echo $this->titolo;
        echo '</div>';

        foreach ($this->testoBase as $k=>$s) {

            $this->res->addBlock($s);
            $this->res->addBlock(array(array('ant','I',$this->antifona)));
        }

        $this->res->addBlock($this->gloria);
        $this->res->addBlock(array(array('ant','I',$this->antifona)));

        echo '<div class="salResBlockBody" >';
            if ($this->res) {
                echo $this->res->draw();
            }
        echo '</div>';

    }

}

?>