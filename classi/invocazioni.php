<?php
class Invocazioni {

    protected $testo=array();

    protected $info=array(
        "parte"=>""
    );

    protected $litio;
    protected $actual;
    protected $res;

    function __construct($caller) {

        $this->litio=$caller;
        $this->actual=$caller->actual;

        $this->res=new Saltesto();
        $this->info['parte']='INV';
        $this->res->setParte('INV');

        $this->init();

        $this->build();

        $this->build2();

    }

    function init() {

        //definisci le invocazioni del Salterio
        if ($this->actual['weekDay']==0) {

            if ($this->actual['ora']=='ves1') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Eleviamo al Dio uno e trino, Padre e Figlio e Spirito Santo, la nostra lode e la nostra preghiera:"),
                                array('ris','I',"Assisti il tuo popolo, o Signore.")
                            ),
                            array(
                                array('','',"Dio grande e misericordioso, sorga la tua giustizia sulla terra,"),
                                array('-','',"e il tuo popolo vedrà un'era di fraternità e di pace."),
                                array('','',"Venga il tuo regno fra tutte le nazioni,"),
                                array('-','',"e si compia il tuo disegno di salvezza anche per l'antico popolo dell'alleanza."),
                                array('','',"Fa' che le nostre famiglie vivano in serena adesione ai tuoi voleri e in santa armonia,"),
                                array('-','',"per essere il riflesso della tua unità d'amore nel Verbo e nello Spirito."),
                                array('','',"Ricompensa tutti coloro che ci hanno fatto del bene:"),
                                array('-','',"dona loro il cento per uno e la vita eterna."),
                                array('','',"Guarda con bontà quanti sono morti a causa dell'odio, della violenza e della guerra,"),
                                array('-','',"accogli tutti nel riposo eterno.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Dio aiuta e protegge il popolo che ha scelto e lo chiama beatitudine del suo regno. Memori dei suoi benefici, diciamo:"),
                                array('ris','I',"Noi confidiamo in te, Signore.")
                            ),
                            array(
                                array('','',"Noi ti preghiamo, Signore, per il nostro papa ... e per il nostro vescovo ... ,"),
                                array('-','',"guidali e proteggili con il tuo Spirito."),
                                array('','',"Fa' che i nostri fratelli infermi si sentano partecipi della passione di tuo Figlio,"),
                                array('-','',"e ne condividano la grazia e la consolazione."),
                                array('','',"Guarda con bontà le famiglie senza tetto,"),
                                array('-','',"fa' che abbiano una casa e un posto sicuro nella società."),
                                array('','',"Dona e conserva i frutti della terra e del lavoro,"),
                                array('-','',"perché nessun uomo sia privo del pane quotidiano."),
                                array('','',"Accogli fra le braccia della tua misericordia i nostri defunti,"),
                                array('-','',"concedi loro il riposo eterno.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Memori dell'amore di Cristo, che, con la prodigiosa moltiplicazione dei pani e dei pesci, saziò la fame del suo popolo, diciamo con umile fiducia:"),
                                array('ris','I',"Rinnova per noi, Signore, i prodigi della tua misericordia.")
                            ),
                            array(
                                array('','',"Riconosciamo, Signore, che i benefici ricevuti in questa settimana vengono dalla tua bontà,"),
                                array('-','',"fa' che non trovino in noi un terreno sterile, ma portino frutti di vita eterna."),
                                array('','',"Luce e salvezza delle genti, guida e proteggi i missionari del Vangelo,"),
                                array('-','',"accendi in essi il fuoco del tuo Spirito."),
                                array('','',"Fa' che tutti gli uomini cooperino a creare un mondo nuovo,"),
                                array('-','',"più conforme alle legittime aspirazioni del progresso nella giustizia e nella pace."),
                                array('','',"Medico delle anime e dei corpi, dona sollievo ai malati, conforto ai moribondi,"),
                                array('-','',"visita e rinnova tutti gli uomini con la tua misericordia."),
                                array('','',"Accogli i nostri defunti nella gloriosa schiera dei santi,"),
                                array('-','',"scrivi anche i loro nomi nel libro della vita.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Il Cristo è la gioia di quanti sperano in lui. PEr godere di questo dono invochiamolo con fede:"),
                                array('ris','I',"Guarda il tuo popolo e ascolta la nostra preghiera.")
                            ),
                            array(
                                array('','',"Testimone fedele, primogenito dei morti, che hai lavato nel tuo sangue le nostre anime,"),
                                array('-','',"donaci di celebrare sempre con gratitudine le meraviglie del tuo amore."),
                                array('','',"Illumina e sostieni i missionari del Vangelo,"),
                                array('-','',"perché siano fedeli e coraggiosi ministri del tuo regno."),
                                array('','',"Re della pace, dona il tuo Spirito ai legislatori e ai governanti,"),
                                array('-','',"perché promuovano i bene dei poveri e dei diseredati."),
                                array('','',"Soccorri quelli che sono discriminati a causa della nazionalità, del colore, della condizione sociale, della lingua o della religione,"),
                                array('-','',"fa' che ottengano il riconoscimento dei loro diritti."),
                                array('','',"Accogli nella tua pace i fedeli che si sono addormentati credendo e sperando in te,"),
                                array('-','',"rendili partecipi della tua beatitudine insieme a Maria e a tutti i santi.")
                            )
                        );
                    break;
                }
            }

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Acclamiamo Cristo, sole di giustizia apparso all'orizzonte dell'umanità:"),
                                array('ris','I',"Signore, tu sei la vita e la salvezza nostra.")
                            ),
                            array(
                                array('','',"Creatore degli astri, noi ti consacriamo le primizie di questo giorno,"),
                                array('-','',"nel ricordo della tua gloriosa risurrezione."),
                                array('','',"Il tuo Spirito ci insegni a compiere la tua volontà,"),
                                array('-','',"e la tua sapienza ci guidi oggi e sempre."),
                                array('','',"Donaci di partecipare con vera fede all'assemblea del tuo popolo,"),
                                array('-','',"intorno alla mensa della tua parola e del tuo corpo."),
                                array('','',"La tua Chiesa ti renda grazie, Signore,"),
                                array('-','',"per i tuoi innumerevoli benefici.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie al Salvatore, che è sceso dal cielo per essere il Dio-con-noi. Acclamiamo:"),
                                array('ris','I',"Re della gloria, sii la nostra luce e la nostra gioia.")
                            ),
                            array(
                                array('','',"Cristo, sole nascente dall'alto, primizia della risurrezione futura,"),
                                array('-','',"donaci la grazia di seguirti sempre per camminare nella via della vita."),
                                array('','',"Rivelaci la tua bontà, che opera in ogni creatura,"),
                                array('-','',"perché possiamo riconoscer in tutto e in tutti la luce della tua gloria."),
                                array('','',"Non permettere che oggi siamo vinti dal male,"),
                                array('-','',"ma aiutaci a vincere il male con il bene."),
                                array('','',"Tu che, battezzato nel giordano, ricevesti l'unzione dello Spirito Santo,"),
                                array('-','',"donaci di essere guidati, oggi e sempre, dalla grazia dello Spirito.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Dio Padre, ha mandato lo Spirito Santo, perché sia in noi sorgente inesauribile di luce. Animati da questa fede diciamo insieme:"),
                                array('ris','I',"Illumina il tuo popolo, o Signore.")
                            ),
                            array(
                                array('','',"Sii benedetto, o Dio, nostra vita,"),
                                array('-','',"che nella tua bontà ci hai guidati all'alba di questo nuovo giorno."),
                                array('','',"Tu che hai illuminato il mondo con al risurrezione del tuo Figlio,"),
                                array('-','',"diffondi la sua luce in tutti gli uomini mediante l'opera della Chiesa."),
                                array('','',"Hai trasformato i discepoli del tuo Figlio con il fuoco della Pentecoste,"),
                                array('-','',"manda ancora lo Spirito nella tua Chiesa, perché ti sia fedele."),
                                array('','',"Luce delle genti, ricordati di quanti sono immersi nelle tenebre dell'errore,"),
                                array('-','',"apri i loro occhi alla luce della fede, perché riconoscano in te l'unico vero Dio.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Apriamo con fiducia il nostro cuore al Dio della potenza e della misericordia, che ama e conosce le nostre necessità. A lui rivolgiamo la nostra lode e la nostra preghiera:"),
                                array('ris','I',"Noi ti glorifichiamo, Signore, e confidiamo in te.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, Re dell'universo, che ci hai tratto dalle tenebre dell'errore e del peccato alla splendida luce del tuo regno,"),
                                array('-','',"e ci hai chiamati a servirti nella santa Chiesa."),
                                array('','',"Tu che ci hai aperto le braccia della misericordia,"),
                                array('-','',"non permettere che deviamo mai dal sentiero della vita."),
                                array('','',"Concedici di trascorrere in letizia questo giorno,"),
                                array('-','',"in cui celebriamo la risurrezione del tuo Figlio."),
                                array('','',"Dona ai tuoi fedeli, lo spirito di orazione e di lode,"),
                                array('-','',"perché tutta la nostra vita sia un rendimento di grazie a te.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Cristo è il nostro capo e noi siamo le sue membra. A lui lode e gloria nei secoli. Acclamiamo:"),
                                array('ris','I',"Venga il tuo regno, Signore.")
                            ),
                            array(
                                array('','',"La tua Chiesa, Signore, sia sacramento vivo ed efficace di unità per il genere umano,"),
                                array('-','',"mistero di salvezza per tutti gli uomini."),
                                array('','',"Assisti il collegio dei vescovi in unione con il nostro papa,"),
                                array('-','',"infondi in loro il tuo Spirito di unità, di amore e di pace."),
                                array('','',"Fa' che i cristiani siano intimamente uniti a te, capo della Chiesa,"),
                                array('-','',"e diano valida testimonianza al tuo Vangelo."),
                                array('','',"Dona al mondo la pace,"),
                                array('-','',"fa' che si costruisca un ordina nuovo nella giustizia e nella fraternità."),
                                array('','',"Concedi ai nostri fratelli defunti la gloria della risurrezione,"),
                                array('-','',"rendi partecipi anche noi della loro beatitudine.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Lode a Cristo, che vive in eterno per intercedere a nostro favore e può salvare quelli che si accostano al Padre per mezzo di lui. Animati da questa speranza invochiamo il nostro Salvatore:"),
                                array('ris','I',"Ricordati, Signore, del tuo popolo.")
                            ),
                            array(
                                array('','',"Al tramonto di questo giorno, o sole di giustizia, noi ti preghiamo per tutto il genere umano,"),
                                array('-','',"fa' che ogni uomo goda senza fine della tua luce intramontabile."),
                                array('','',"Rendi sempre vivo e attuale il patto di alleanza che hai sigillato con il tuo sangue,"),
                                array('-','',"santifica e rinnova la tua Chiesa, perché sia sempre pura e senza macchia."),
                                array('','',"Ricordati del tuo popolo, Signore,"),
                                array('-','',"benedici la dimora della tua gloria."),
                                array('','',"Dona incolumità e pace a quanti viaggiano in cielo, in terra e in mare,"),
                                array('-','',"fa' che giungano felicemente alla meta desiderata."),
                                array('','',"Accogli nella tua casa le anime dei defunti,"),
                                array('-','',"concedi loro il perdono e la gloria eterna.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Dio ha creato e redento il mondo e sempre lo rinnova con l'azione del suo Spirito. Uniti in fraterna esultanza invochiamo la sua paterna misericordia:"),
                                array('ris','I',"Rinnova, o Dio, i prodigi del tuo amore.")
                            ),
                            array(
                                array('','',"Ti rendiamo grazie, Signore, perché riveli la tua potenza nella creazione,"),
                                array('-','',"e manifesti la tua provvidenza nella storia dell'umanità."),
                                array('','',"Nel nome del tuo Figlio, vincitore della morte e principe della pace,"),
                                array('-','',"liberaci dal dubbio e dall'angoscia, perché ti serviamo sempre nella letizia e nell'amore."),
                                array('','',"Assisti tutti coloro che amano la giustizia,"),
                                array('-','',"perché cooperino lealmente a edificare il mondo nella pace."),
                                array('','',"Soccorri gli oppressi consola i miseri, libera i prigionieri, nutri gli affamati, rafforza i deboli,"),
                                array('-','',"fa' risplendere in tutti la vittoria della croce."),
                                array('','',"Tu che hai glorificato il tuo Figlio dopo l'umiliazione della morte e della sepoltura,"),
                                array('-','',"fa' che i defunti giungano con lui allo splendore della vita eterna.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Pieni di gioia e di gratitudine invochiamo Dio, principio e fonte di ogni bene:"),
                                array('ris','I',"Ascolta, Signore, la nostra preghiera.")
                            ),
                            array(
                                array('','',"Padre e Signore dell'universo, che hai mandato nel mondo tuo Figlio per riunire i popoli nella lode del tuo nome,"),
                                array('-','',"rafforza la testimonianza della tua Chiesa nel mondo intero."),
                                array('','',"Rendici sempre più docili all'insegnamento degli apostoli,"),
                                array('-','',"perché la nostra vita sia coerente con il credo che professiamo."),
                                array('','',"Tu che sei l'amico dei giusti,"),
                                array('-','',"rendi giustizia a quanti sono oppressi in ogni parte del mondo."),
                                array('','',"Dona la vista ai ciechi e la libertà ai prigionieri,"),
                                array('-','',"rianima gli sfiduciati e proteggi gli esuli."),
                                array('','',"Accogli l'estremo desiderio di coloro che si sono addormentati nel tuo Cristo,"),
                                array('-','',"giungano alla gloria della risurrezione.")
                            )
                        );
                    break;
                }
            }        
        }

        if ($this->actual['weekDay']==1) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo Cristo, nostro Signore, pieno di grazia e di Spirito Santo e con fiducia chiediamo:"),
                                array('ris','I',"Donaci il tuo Spirito, Signore.")
                            ),
                            array(
                                array('','',"Concedi a noi di trascorrere questo giorno nella gioia, nella pace e senza peccato,"),
                                array('-','',"perché, giunti a sera, possiamo lodarti con cuore puro e riconoscente."),
                                array('','',"Risplenda su di noi la luce del tuo amore,"),
                                array('-','',"e la tua sapienza ispiri i nostri progetti e le nostre opere."),
                                array('','',"La tua mano ci sostenga nel servizio del bene,"),
                                array('-','',"e ci custodisca nella tua amicizia."),
                                array('','',"Proteggi coloro che si affidano alle nostre preghiere,"),
                                array('-','',"colmali di ogni benedizione nel corpo e nello spirito.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Il Cristo, mediatore della nuova alleanza, ha dato a noi un sacerdozio regale, perché offriamo a Dio una lode perfetta. Uniti nella preghiera del mattino, invochiamo il nostro Salvatore:"),
                                array('ris','I',"Confermaci, Signore, nel tuo santo servizio.")
                            ),
                            array(
                                array('','',"Cristo, sacerdote eterno, che ci hai resi partecipi della tua comunione di amore al Padre,"),
                                array('-','',"fa' che presentiamo sempre sacrifici spirituali a Dio graditi."),
                                array('','',"Donaci i frutti del tuo Spirito:"),
                                array('-','',"la pazienza, la benignità e la mitezza."),
                                array('','',"Concedici di amare te, per avere in dono te, che sei l'Amore,"),
                                array('-','',"e donaci di bene operare per rendere tutta la vita una lode a te."),
                                array('','',"Fa' che ci dedichiamo al servizio del fratelli,"),
                                array('-','',"perché abbiano a conseguire più facilmente la salvezza.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Preghiamo Dio nostro Padre, che ha posto gli uomini nel mondo, perché cooperino in unità di intenti al gran disegno della creazione, Diciamo con fede:"),
                                array('ris','I',"Fa' che ti rendiamo gloria, o Signore.")
                            ),
                            array(
                                array('','',"Sii benedetto, o Dio creatore, noi ti ringraziamo per le meraviglie dell'universo,"),
                                array('-','',"e per la vita che ci hai donato."),
                                array('','',"Guarda i tuoi figli che, attraverso le occupazioni quotidiane, partecipano alla tua opera,"),
                                array('-','',"fa' che si conformino alla tua volontà."),
                                array('','',"Il nostro lavoro giovi al bene dei fratelli,"),
                                array('-','',"concedici di edificare con loro e per loro un mondo come a te piace."),
                                array('','',"Dona pace e gioia,"),
                                array('-','',"a noi e a quanti incontreremo oggi sul nostro cammino.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Il Cristo ascolta la voce degli umili che confidano in lui e li salva. Confortati da questa certezza invochiamo il tuo nome:"),
                                array('ris','I',"Tu sei la nostra speranza, Signore.")
                            ),
                            array(
                                array('','',"O Dio ricco di misericordia,"),
                                array('-','',"noi ti ringraziamo per il tuo immenso amore."),
                                array('','',"Tu che agisci sempre nella storia dell'umanità insieme al Padre,"),
                                array('-','',"rinnova gli uomini e le cose con la forza del tuo Spirito."),
                                array('','',"Dona a noi e ai nostri fratelli uno sguardo di fede,"),
                                array('-','',"perché possiamo contemplare sempre le tue meraviglie."),
                                array('','',"Redentore di tutti, che in questo giorno ci chiami a cooperare alla tua opera di salvezza,"),
                                array('-','',"rendici segno della tua grazia verso il nostro prossimo.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Uniti ai nostri fratelli di fede, invochiamo il Signore che ha stretto con il suo popolo un patto di eterna alleanza:"),
                                array('ris','I',"Proteggi, o Signore, la tua famiglia.")
                            ),
                            array(
                                array('','',"Salva il tuo popolo, o Signore,"),
                                array('-','',"benedici la tua eredità."),
                                array('','',"Raccogli nell'unità coloro che si gloriano del nome cristiano,"),
                                array('-','',"perché il mondo creda in colui che tu hai inviato, Gesù Cristo nostro Signore."),
                                array('','',"Benedici i nostri familiari, amici e conoscenti,"),
                                array('-','',"diffondi fra di essi il profumo della carità di Cristo."),
                                array('','',"Mostra agli agonizzanti la luce del tuo amore,"),
                                array('-','',"i loro occhi si aprano alla visione della tua gloria."),
                                array('','',"Sii misericordioso verso i nostri fratelli defunti,"),
                                array('-','',"ammettili a godere la beata pace del Paradiso.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Rivolgiamo con fiducia la nostra preghiera a Gesù Cristo, che ama la sua Chiesa, la nutre e la santifica con la parola e i sacramenti:"),
                                array('ris','I',"Esaudisci i desideri del tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Signore Gesù, fa' che tutti gli uomini siano salvi,"),
                                array('-','',"e giungano alla conoscenza perfetta della verità."),
                                array('','',"Proteggi il nostro papa ... e il nostro vescovo ... ,"),
                                array('-','',"sostienili con la potenza del tuo Spirito."),
                                array('','',"Provvedi ai disoccupati e ai senza tetto,"),
                                array('-','',"fa' che ogni uomo abbia ciò che è necessario a una vita dignitosa e sicura."),
                                array('','',"Sii rifugio al povero,"),
                                array('-','',"aiutalo nella sofferenza e nel bisogno."),
                                array('','',"Ti raccomandiamo i sacri ministri, che hai chiamato a te da questa vita,"),
                                array('-','',"fa' che cantino in eterno la tua lode nella liturgia del cielo.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Il Cristo vuole che tutti gli uomini siano salvi. Preghiamo perché si compia il disegno della sua misericordia:"),
                                array('ris','I',"Attira ogni essere a te, Signore.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, Signore, che a prezzo del tuo sangue ci hai riscattato dalla schiavitù del peccato,"),
                                array('-','',"donaci la libertà e la gloria dei tuoi figli."),
                                array('','',"Dona la tua grazia al nostro vescovo ... e a tutti i vescovi della Chiesa,"),
                                array('-','',"perché dispensino i tuoi misteri nella letizia e nel fervore dello spirito."),
                                array('','',"A quanti cercano la verità, concedi la gioia di trovarla,"),
                                array('-','',"e il desiderio di cercarla ancora, dopo averla trovata."),
                                array('','',"Soccorri gli orfani, le vedove, gli emarginati,"),
                                array('-','',"fa' che ti sentano vicino nella necessità e nella sventura."),
                                array('','',"Accogli i defunti nella Gerusalemme del cielo,"),
                                array('-','',"dove con il Padre e con lo Spirito Santo sarai tutto in tutti.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Lo Spirito rende testimonianza al nostro cuore che il Cristo intercede sempre per noi. Sorretti da questa fede diciamo:"),
                                array('ris','I',"O Dio nostro, ascoltaci.")
                            ),
                            array(
                                array('','',"Cristo, sole di giustizia illumina la tua Chiesa,"),
                                array('-','',"perché annunzi alle genti il grande mistero del Dio fatto uomo per la nostra liberazione."),
                                array('','',"Veglia sui sacerdoti e su tutti i ministri della tua Chiesa,"),
                                array('-','',"la loro vita non sia mai in dissonanza con il Vangelo che proclamano ai fratelli."),
                                array('','',"Tu che ci hai acquistato la pace a prezzo del tuo sangue,"),
                                array('-','',"tieni lontano da noi il male della discordia e il flagello della guerra."),
                                array('','',"Aiuta con l'abbondanza delle tue benedizioni gli sposi cristiani,"),
                                array('-','',"perché esprimano nella loro unione il mistero della tua Chiesa."),
                                array('','',"Libera da ogni peccato i nostri defunti,"),
                                array('-','',"siano eternamente felici nella gloria dei santi.")
                            )
                        );
                    break;
                }
            }
        }

        if ($this->actual['weekDay']==2) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Cristo, sommo sacerdote della nostra fede, ci ha resi partecipi di una vocazione santa. Eleviamo a lui la nostra lode e acclamiamo:"),
                                array('ris','I',"Signore, nostro Dio e nostro Salvatore.")
                            ),
                            array(
                                array('','',"Re glorioso, che nel Battesimo ci hai rivestiti del sacerdozio regale,"),
                                array('-','',"rendici degni di offrirti il sacrificio della lode."),
                                array('','',"Concedici di osservare sempre i tuoi comandamenti,"),
                                array('-','',"perché con la tua grazia rimaniamo in te e tu in noi."),
                                array('','',"Infondi in noi il tuo Spirito,"),
                                array('-','',"la tua sapienza ci assista sempre e operi con noi."),
                                array('','',"Fa' che nessuno oggi sia rattristato per causa nostra,"),
                                array('-','',"e che diveniamo operatori di gioia e di pace.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo il Salvatore, che con la sua risurrezione è divenuto luce e vita del mondo. A lui s'innalzi la nostra umile preghiera:"),
                                array('ris','I',"Guidaci, Signore, nelle tue vie.")
                            ),
                            array(
                                array('','',"Con la lode mattutina celebriamo la tua risurrezione, Signore,"),
                                array('-','',"la speranza della tua gloria illumini la nostra giornata."),
                                array('','',"Benedici le nostre aspirazioni e i nostri propositi,"),
                                array('-','',"siano le primizie della nostra offerta."),
                                array('','',"Fa' che oggi cresciamo nel tuo amore,"),
                                array('-','',"e tutto cooperi al bene nostro e di tutti."),
                                array('','',"Fa' che la nostra luce splenda davanti agli uomini,"),
                                array('-','',"perché vedano le nostre opere buone e glorifichino il Padre che è nei cieli.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Adoriamo il Cristo che con il suo sangue, versato sulla croce, ha fatto di noi un popolo nuovo e supplichiamo:"),
                                array('ris','I',"Ricordati del tuo popolo, o Signore.")
                            ),
                            array(
                                array('','',"Cristo re e salvatore, accogli la lode della tua Chiesa all'alba del nuovo giorno,"),
                                array('-','',"insegnale ad unirsi a te in perenne rendimento di grazie."),
                                array('','',"In te poniamo ogni speranza,"),
                                array('-','',"il tuo amore non lasci deluse le nostre attese."),
                                array('','',"Guarda la nostra debolezza e vieni in nostro aiuto,"),
                                array('-','',"perché nulla possiamo senza di te."),
                                array('','',"Non dimenticare i poveri e coloro che vivono nella solitudine e nell'abbandono,"),
                                array('-','',"il nuovo giorno non li opprima sotto il peso della tristezza, ma rechi loro gioia e consolazione.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"In questo nuovo giorno il Signore, donandoci la grazia di cantare le sue lodi, rafforza la speranza che esaudirà la nostra preghiera. Uniti ai fratelli di fede diciamo:"),
                                array('ris','I',"Ascoltaci, Signore, a gloria del tuo nome.")
                            ),
                            array(
                                array('','',"Ti rendiamo grazie, o Dio e Padre d Gesù nostro Salvatore,"),
                                array('-','',"per la conoscenza e la vita immortale che ci hai dato per mezzo del tuo Figlio."),
                                array('','',"Donaci l'umiltà del cuore,"),
                                array('-','',"perché ci rendiamo disponibili all'aiuto fraterno nel timore di Cristo."),
                                array('','',"Manda su di noi il tuo Spirito,"),
                                array('-','',"perché la nostra carità sia autentica e senza ipocrisia."),
                                array('','',"Tu che hai comandato all'uomo il lavoro per dominare il mondo,"),
                                array('-','',"fa' che il nostro lavoro ti glorifichi e santifichi i nostri fratelli.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Preghiamo Cristo Signore nostro, sempre presente in mezzo al popolo, che si è acquistato a prezzo del suo sangue:"),
                                array('ris','I',"Ascoltaci, Signore, a gloria del tuo nome.")
                            ),
                            array(
                                array('','',"Re delle genti, illumina i popoli e coloro che li guidano,"),
                                array('-','',"perché operino concordamente al bene comune nello spirito del Vangelo."),
                                array('','',"Tu che hai spezzato le antiche catene,"),
                                array('-','',"libera i redenti da ogni forma di schiavitù."),
                                array('','',"Fa' che i nostri giovani si impegnino al servizio del bene,"),
                                array('-','',"corrispondano generosamente alle esigenze della vocazione cristiana."),
                                array('','',"Fa' che la vita dei fanciulli sia modellata sulla tua:"),
                                array('-','',"crescano in sapienza e grazia davanti a Dio e agli uomini."),
                                array('','',"Accogli i nostri fratelli defunti nella pace della tua dimora,"),
                                array('-','',"dove un giorno speriamo di ritrovarci per regnare con te.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Uniti nella liturgia di lode, supplichiamo il Cristo, pastore e guida delle anime, che ama e protegge la sua Chiesa:"),
                                array('ris','I',"Salva il tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Custodisci, Pastore eterno, il nostro vescovo ... ,"),
                                array('-','',"e tutti i pastori della tua Chiesa."),
                                array('','',"Guarda con amore i nostri fratelli perseguitati ed oppressi,"),
                                array('-','',"affrettati a liberarli dalle loro pene."),
                                array('','',"Provvedi a tutti i poveri del mondo,"),
                                array('-','',"fa' che a nessuno manchi il pane, la casa e il lavoro."),
                                array('','',"Illumina con la tua sapienza le assemblee legislative,"),
                                array('-','',"perché facciano leggi giuste e sagge."),
                                array('','',"Ricordati dei defunti che hai redento a prezzo del tuo sangue,"),
                                array('-','',"ammettili al banchetto delle nozze eterne.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Dio ha costituito il suo popolo sul fondamento della speranza. Con animo lieto e riconoscente acclamiamo:"),
                                array('ris','I',"Tu sei la nostra speranza, Signore.")
                            ),
                            array(
                                array('','',"Ti rendiamo grazie, Padre, perché ci hai donato il tuo Figlio,"),
                                array('-','',"in lui ci hai colmato delle ricchezze della tua parola e della tua scienza."),
                                array('','',"O Dio, che hai in mano i cuori e le intelligenze di tutti gli uomini,"),
                                array('-','',"Illumina i governanti perché ispirino le intenzioni e le opere alla sapienza del Vangelo."),
                                array('','',"Agli artisti affidi la missione di rivelare lo splendore del tuo volto,"),
                                array('-','',"fa' che le loro opere portino all'umanità un messaggio di pace e di speranza."),
                                array('','',"Sei giusto e non permetti che siamo tentati al di sopra delle nostre forze,"),
                                array('-','',"aiuta i deboli, sostieni i vacillanti, rialza i caduti."),
                                array('','',"Nel Cristo, tuo Figlio, ci hai dato la certezza della risurrezione nell'ultimo giorno,"),
                                array('-','',"accogli nella tua casa i nostri fratelli defunti.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Acclamiamo e invochiamo il Cristo che dà forza e vigore al suo popolo:"),
                                array('ris','I',"Nella tua grande bontà ascoltaci, o Signore.")
                            ),
                            array(
                                array('','',"Cristo, sorgente inesauribile di fortezza,"),
                                array('-','',"sostieni la nostra fede in mezzo alle prove della vita."),
                                array('','',"Illumina e guida con il tuo Spirito i legislatori e i governanti,"),
                                array('-','',"perché promuovano costantemente la giustizia e la pace."),
                                array('','',"Tu che ha sfamato le folle nel deserto,"),
                                array('-','',"insegnaci a condividere le nostre risorse con chi è privo del necessario."),
                                array('','',"Fa' che gli uomini politici non si chiudano nella ricerca egoistica del benessere e del prestigio nazionale,"),
                                array('-','',"ma abbiano a cuore il progresso e l'ascesa di tutti i popoli."),
                                array('','',"Dona vita e risurrezione ai nostri fratelli defunti,"),
                                array('-','',"quando verrai per essere glorificato in tutti i credenti.")
                            )
                        );
                    break;
                }
            }
        }

        if ($this->actual['weekDay']==3) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Ringraziamo il Cristo redentore, che si compiace di chiamare fratelli coloro che ha santificato con il suo Spirito e invochiamo:"),
                                array('ris','I',"Conferma nella fede i tuoi fratelli, o Signore.")
                            ),
                            array(
                                array('','',"Benedici questo giorno, che iniziamo nel ricordo della tua risurrezione,"),
                                array('-','',"fa' che sia pieno di opere sante al servizio del tuo amore."),
                                array('','',"Tu che disponi i nostri giorni ad un fine di salvezza e di gioia,"),
                                array('-','',"rinnova oggi il nostro essere e il nostro operare a lode della tua gloria."),
                                array('','',"Insegnaci a riconoscerti in tutti gli uomini,"),
                                array('-','',"e soprattutto nei poveri e sofferenti."),
                                array('','',"Donaci di vivere in pace con tutti,"),
                                array('-','',"e di non rendere a nessuno male per male.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Lodiamo il Cristo, che ha promesso di rimanere con noi tutti i giorni sino alla fine dei secoli e rivolgiamogli la nostra preghiera:"),
                                array('ris','I',"Resta con noi, Signore.")
                            ),
                            array(
                                array('','',"Resta con noi, Signore, durante questo giorno,"),
                                array('-','',"non tramonti mai nel nostro spirito il sole della tua grazia."),
                                array('','',"Ti offriamo, Signore, le azioni e le sofferenze di questa giornata,"),
                                array('-','',"promettiamo di servirti sempre con cuore puro e leale."),
                                array('','',"Fa' che viviamo il tempo che ci dai, come un dono della tua bontà,"),
                                array('-','',"per divenire il sale della terra e la luce del mondo."),
                                array('','',"Il tuo Spirito orienti i nostri pensieri e le nostre parole,"),
                                array('-','',"perché rimaniamo sempre nel tuo amore e nella tua lode.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Riuniti nella lode del mattino, preghiamo il Cristo, che ha dato la vita per la sua Chiesa. Diciamo con fede:"),
                                array('ris','I',"Custodisci la tua Chiesa, o Signore.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, pastore della Chiesa, per la luce e la vita che ci doni in questo giorno,"),
                                array('-','',"concedici di accogliere con gioia e riconoscenza i tuoi benefici."),
                                array('','',"Guarda con bontà il popolo che hai riunito nel tuo nome,"),
                                array('-','',"nessuno perisca di coloro che il Padre ti ha affidati."),
                                array('','',"Guida la tua Chiesa nella via dei tuoi comandamenti,"),
                                array('-','',"il tuo Spirito la renda sempre docile alla tua volontà."),
                                array('','',"Nutri il tuo popolo alla mensa della parola e del pane di vita eterna,"),
                                array('-','',"perché con la forza di questo cibo proceda sicuro verso il monte della tua gloria.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Cristo, splendore della gloria del Padre, è presente in mezzo a noi e ci illumina con la sua parola. Invochiamolo con fiducia e amore:"),
                                array('ris','I',"Re dell'eterna gloria, ascolta la nostra preghiera.")
                            ),
                            array(
                                array('','',"Benedetto sii tu che ci hai chiamato dalle tenebre alla luce del tuo regno,"),
                                array('-','',"compi in noi l'opera che hai iniziato e guidaci alla pienezza della fede."),
                                array('','',"Tu che hai aperto gli occhi ai ciechi e hai dato l'udito ai sordi,"),
                                array('-','',"guarisci la nostra incredulità."),
                                array('','',"Concedi a noi di rimanere sempre nel tuo amore,"),
                                array('-','',"per non essere divisi gli uni dagli altri."),
                                array('','',"Donaci fortezza nella tentazione e costanza nella prova,"),
                                array('-','',"e fa' che ti rendiamo grazie nella prosperità.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Sia glorificato il nome di Dio Padre, che ha concesso la salvezza al suo popolo e lo circonda di un amore senza limiti. A lui rivolgiamo con fede la nostra preghiera:"),
                                array('ris','I',"Mostraci, Signore, la tua misericordia.")
                            ),
                            array(
                                array('','',"Ricordati, Signore, della tua Chiesa,"),
                                array('-','',"preservala da ogni male e rendila perfetta nel tuo amore."),
                                array('','',"Fa' che tutte le genti conoscano te, unico vero Dio,"),
                                array('-','',"e colui che ha mandato, Gesù Cristo tuo Figlio."),
                                array('','',"Concedi ai nostri parenti ed amici prosperità e salute,"),
                                array('-','',"fa' che godano della tua benedizione sulla terra e nel cielo."),
                                array('','',"Conforta coloro che sono oppressi dalla fatica e dal dolore,"),
                                array('-','',"difendi la dignità dei poveri e degli esclusi."),
                                array('','',"Apri le braccia della tua misericordia ai morti di questo giorno,"),
                                array('-','',"accogli le loro anime nella pace del tuo regno.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Lieti e riconoscenti, preghiamo Dio nostro Padre, che gode nel dispensare i suoi benefici:"),
                                array('ris','I',"Colma di grazia e di pace il tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Dio eterno, mille anni per te sono come il giorno che è passato,"),
                                array('-','',"fa' che non dimentichiamo che la nostra vita è come il fiore del campo che spunta al mattino e avvizzisce la sera."),
                                array('','',"Concedi al popolo cristiano la tua manna, perché non muoia di fame,"),
                                array('-','',"e l'acqua via, perché non soffra di sete inestinguibile."),
                                array('','',"Fa' che non perdiamo mai la fede e il senso cristiano della vita,"),
                                array('-','',"perché il nostro tempo, nella fatica e nel riposo, sia tutto orientato alla tua gloria."),
                                array('','',"Concedi a noi una stagione favorevole,"),
                                array('-','',"la terra produca un raccolto abbondante."),
                                array('','',"Dona ai defunti la visione del tuo volto,"),
                                array('-','',"fa' che un giorno possiamo godere con loro la gloria dei beati.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Innalziamo la nostra preghiera a Dio Padre, che ci ha mandato il proprio Figlio, modello e salvatore del suo popolo:"),
                                array('ris','I',"Continua i benefici della tua bontà, o Signore.")
                            ),
                            array(
                                array('','',"Ti rendiamo grazie, o Padre, perché ci hai eletti dall'eternità a far parte del tuo regno,"),
                                array('-','',"e ci hai chiamati a possedere la gloria di Gesù Cristo, nostra primizia."),
                                array('','',"Concedi a coloro che confessano il tuo santo nome la concordia nella verità,"),
                                array('-','',"e la solidarietà nel tuo amore."),
                                array('','',"Creatore dell'universo, il tuo Figlio ha voluto lavorare come artigiano nella casa di Nazareth,"),
                                array('-','',"benedici chi si guadagna il pane con il sudore della fronte."),
                                array('','',"Ricordati di coloro che sono consacrati al servizio dei fratelli,"),
                                array('-','',"perché l'insuccesso o l'incomprensione non li distolgano mai dal loro proposito."),
                                array('','',"Ti preghiamo, o Signore, per i nostri fratelli defunti,"),
                                array('-','',"apri loro le braccia della tua misericordia.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"La misericordia di Dio Padre verso il suo popolo supera la grandezza della terra e dei cieli. Mostriamoci grati a tanto amore e acclamiamo:"),
                                array('ris','I',"Si rallegrino quanti sperano in te, Signore.")
                            ),
                            array(
                                array('','',"Signore, hai mandato il tuo Figlio non per giudicare, ma per salvare il mondo,"),
                                array('-','',"fa' che la sua croce porti a noi frutti di vita eterna."),
                                array('','',"Hai costituito i sacerdoti ministri del Cristo e dispensatori dei tuoi misteri,"),
                                array('-','',"concedi loro fedeltà, scienza e carità."),
                                array('','',"Benedici coloro che hai chiamato alla castità perfetta per il regno dei cieli,"),
                                array('-','',"seguano il Cristo tuo Figlio con la generosità dei santi."),
                                array('','',"Tu che hai creato l'uomo e la donna,"),
                                array('-','',"fa' di ogni famiglia una vera comunità fondata sull'amore sincero."),
                                array('','',"Hai distrutto le nostre colpe mediante il sacrificio del tuo Figlio,"),
                                array('-','',"concedi ai defunti il perdono e la pace.")
                            )
                        );
                    break;
                }
            }
        }
        if ($this->actual['weekDay']==4) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie al Signore che ci dona la luce di un nuovo giorno e invochiamo la sua benedizione:"),
                                array('ris','I',"Signore benedici e santifica la tua Chiesa.")
                            ),
                            array(
                                array('','',"Ti sei fatto vittima per i nostri peccati,"),
                                array('-','',"gradisci l'offerta dei nostri propositi e delle iniziative di questo giorno."),
                                array('','',"Tu allieti i nostri occhi con le meraviglie del creato,"),
                                array('-','',"sorgi anche nel nostro spirito come sole di giustizia e di verità."),
                                array('','',"Donaci un cuore generoso,"),
                                array('-','',"perché diventiamo segno e testimonianza della tua bontà."),
                                array('','',"Fa' che sperimentiamo fin da questa mattina la tua misericordia,"),
                                array('-','',"e la gioia che tu dai ai tuoi amici sia la nostra fortezza.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Con la libertà dei figli invochiamo Dio Padre che ci ama e ascolta le nostre preghiere:"),
                                array('ris','I',"Illumina i nostri occhi, Signore.")
                            ),
                            array(
                                array('','',"Ti ringraziamo di averci illuminati con lo Spirito che procede da te e dal Figlio tuo,"),
                                array('-','',"fa' che ci saziamo della sua luce per tutta la lunghezza di questa giornata."),
                                array('','',"La sua sapienza ci prenda per mano,"),
                                array('-','',"perché camminiamo nella via della vita."),
                                array('','',"Insegnaci ad affrontare coraggiosamente ogni avversità,"),
                                array('-','',"per servirti sempre con animo generoso."),
                                array('','',"Sii tu l'ispiratore dei nostri pensieri e delle nostre azioni,"),
                                array('-','',"perché collaboriamo docilmente con la tua Provvidenza.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie a Dio che nutre e guida il suo popolo. Uniti nella preghiera del mattino, acclamiamo:"),
                                array('ris','I',"Gloria a te nei secoli, Signore.")
                            ),
                            array(
                                array('','',"Padre clementissimo, ti benediciamo per il tuo immenso amore,"),
                                array('-','',"che risplende nella creazione e ancor più visibilmente nella redenzione."),
                                array('','',"Fin dall'inizio di questo giorno ispiraci il desiderio di servirti,"),
                                array('-','',"perché nei pensieri e nelle opere glorifichiamo sempre il tuo santo nome."),
                                array('','',"Purifica i nostri cuori da ogni desiderio di male,"),
                                array('-','',"perché siamo costantemente orientati alla tua volontà."),
                                array('','',"Apri il nostro cuore alle necessità dei fratelli,"),
                                array('-','',"perché incontrandoci non ci trovino freddi e senza amore verso di loro.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Uniti nella lode divina acclamiamo Dio nostro Padre, che ha salvato il suo popolo e diciamo con fede:"),
                                array('ris','I',"Tu sei la nostra vita, Signore.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, o Padre del Signore nostro Gesù Cristo,"),
                                array('-','',"che ci hai rigenerato a una speranza viva mediante la risurrezione del tuo Figlio."),
                                array('','',"Nel Cristo hai rinnovato l'uomo, creato a tua immagine,"),
                                array('-','',"rendici conformi all'immagine del tuo Figlio."),
                                array('','',"Guarisci l'umanità ferita dall'invidia e dall'odio,"),
                                array('-','',"trasformaci con la carità che è dono dello Spirito."),
                                array('','',"Da' il lavoro agli operai, il pane agli affamati, agli afflitti la gioia,"),
                                array('-','',"a tutti gli uomini la grazia e la salvezza.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Preghiamo Dio, fondamento di tutta la nostra speranza:"),
                                array('ris','I',"Benedici i tuoi figli, o Signore.")
                            ),
                            array(
                                array('','',"Signore, nostro Dio, che hai stabilito con il tuo popolo un'alleanza eterna,"),
                                array('-','',"fa' che ricordiamo sempre le grandi opere del tuo amore."),
                                array('','',"Conferma nella carità tutto l'ordine sacerdotale,"),
                                array('-','',"raccogli i tuoi fedeli nell'unità dello Spirito mediante il vincolo della pace."),
                                array('','',"Aiutaci a costruire insieme con te la nostra città terrena,"),
                                array('-','',"perché non fatichiamo invano."),
                                array('','',"Manda operai nella tua messe,"),
                                array('-','',"perché sia glorificato il tuo nome fra tutte le genti."),
                                array('','',"Accogli fra i tuoi santi i nostri parenti e benefattori defunti,"),
                                array('-','',"ammetti un giorno anche noi nella gioia eterna.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Ricordiamo con gioia che il nostro Salvatore ha benedetto il suo popolo con ogni benedizione spirituale e pieni di speranza chiediamo:"),
                                array('ris','I',"Benedici la tua Chiesa, Signore.")
                            ),
                            array(
                                array('','',"Custodisci, Dio misericordioso, il nostro papa ... e il nostro vescovo ... ,"),
                                array('-','',"dona loro serenità e salute."),
                                array('','',"Proteggi il nostro paese,"),
                                array('-','',"fa' che progredisca nella giustizia e nella pace."),
                                array('','',"Convoca i tuoi figli intorno alla tua mensa,"),
                                array('-','',"fa' che anime buone e generose ti seguano nella via della castità, povertà e obbedienza."),
                                array('','',"Conferma nel santo proposito le vergini a te consacrate,"),
                                array('-','',"perché ti servano con animo ardente e fedele."),
                                array('','',"Dona il riposo eterno ai nostri defunti,"),
                                array('-','',"fa' che li sentiamo vicini a noi nella comunione dei santi.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"A Cristo, buon pastore, aiuto, guida e conforto del suo popolo, rivolgiamo con fede la nostra preghiera:"),
                                array('ris','I',"Signore, nostro rifugio e nostra forza, ascoltaci.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, Signore, che ci hai chiamati a far parte della tua famiglia,"),
                                array('-','',"conservaci sempre membra vive della tua santa Chiesa."),
                                array('','',"Tu che hai affidato al nostro papa ... la cura pastorale di tutte le Chiese,"),
                                array('-','',"donagli fede indefettibile, speranza viva, carità apostolica."),
                                array('','',"Dona forza di risorgere a quanti hanno abbandonato la fede,"),
                                array('-','',"concedi a tutti il perdono e la pace."),
                                array('','',"Tu che hai conosciuto l'amarezza dell'esilio,"),
                                array('-','',"ricordati di quanti vivono lontani dalla famiglia e dalla patria."),
                                array('','',"A tutti i defunti che hanno sperato in te,"),
                                array('-','',"dona la luce e la pace eterna.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo il Cristo, luce dei popoli e gioia di tutti i viventi e acclamiamo:"),
                                array('ris','I',"Tu sei la nostra vita, Signore.")
                            ),
                            array(
                                array('','',"Luce che non conosce tramonto, Verbo eterno del Padre, Salvatore del mondo,"),
                                array('-','',"illumina i passi dei catecumeni sulla via della verità."),
                                array('','',"Sei l'amore che perdona,"),
                                array('-','',"dimentica le nostre iniquità."),
                                array('','',"Hai dato all'uomo l'intelligenza per esplorare i segreti della natura e per utilizzare le energie del cosmo,"),
                                array('-','',"guida la scienza e la tecnica sulle vie del vero bene dell'umanità per la gloria del tuo nome."),
                                array('','',"Proteggi quanti si sono consacrati al servizio dei fratelli,"),
                                array('-','',"fa' che compiano la loro missione nella libertà e nella pace."),
                                array('','',"Signore, che hai le chiavi della vita e della morte,"),
                                array('-','',"prendi con te nella luce della tua dimora i nostri fratelli defunti.")
                            )
                        );
                    break;
                }
            }
        }
        if ($this->actual['weekDay']==5) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Invochiamo con fede il Cristo, che con la sua santa croce ha redento il mondo:"),
                                array('ris','I',"Mostraci, Signore, la tua misericordia.")
                            ),
                            array(
                                array('','',"O Cristo, sole di giustizia, illumina la nostra vita,"),
                                array('-','',"allontana da noi le oscure suggestioni del male."),
                                array('','',"Ispira i pensieri, le parole e le opere,"),
                                array('-','',"perché in questo giorno possiamo essere graditi alla tua volontà."),
                                array('','',"Distogli lo sguardo dai nostri peccati,"),
                                array('-','',"cancella tutte le nostre colpe."),
                                array('','',"Per la tua croce e la tua risurrezione,"),
                                array('-','',"riempi i nostri cuori della consolazione dello Spirito Santo.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Cristo, Agnello senza macchia, si è offerto al Padre per purificare le nostre coscienze dalle opere del male. A lui diciamo umilmente:"),
                                array('ris','I',"Nella tua volontà è la nostra pace, o Signore.")
                            ),
                            array(
                                array('','',"Dalla tua bontà abbiamo ricevuto questo nuovo giorno,"),
                                array('-','',"fa' che segni l'inizio di una vita nuova."),
                                array('','',"Hai creato il mondo e lo conservi con la tua provvidenza,"),
                                array('-','',"donaci uno sguardo di fede, perché vediamo la tua presenza in ogni creatura."),
                                array('','',"Nel tuo sangue, versato per noi, hai costituito la nuova ed eterna alleanza,"),
                                array('-','',"fa' che osservando la legge dell'amore, restiamo fedeli al tuo patto."),
                                array('','',"Sulla croce hai fatto sgorgare dal tuo costato sangue ed acqua,"),
                                array('-','',"in questo fiume di grazia lava le nostre colpe e allieta la città di Dio.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Volgiamo il nostro sguardo al Cristo, nato, morto e risorto per la nostra salvezza, e diciamo con fiducia:"),
                                array('ris','I',"Salva il tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Benedetto sii tu, o Gesù Salvatore del mondo, che non hai ricusato di subire la passione e la croce per noi,"),
                                array('-','',"e ci hai redenti con il tuo sangue prezioso."),
                                array('','',"Tu che hai promesso fiumi di acqua viva a quanti credono in te,"),
                                array('-','',"effondi il tuo Spirito sull'umanità intera."),
                                array('','',"Hai inviato i tuoi discepoli ad evangelizzare le genti,"),
                                array('-','',"sostieni i missionari del Vangelo perché si estenda in ogni luogo la vittoria della croce."),
                                array('','',"Rivolgi il tuo sguardo di bontà ai malati e ai sofferenti che hai associato alla tua croce,"),
                                array('-','',"sentano il conforto della tua presenza.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Invochiamo la provvidenza del Padre, che veglia su coloro che ha creati e redenti per mezzo del suo Figlio e diciamo:"),
                                array('ris','I',"Conferma ciò che hai operato in noi, Signore.")
                            ),
                            array(
                                array('','',"Dio di misericordia, guidaci sulla via della santità,"),
                                array('-','',"perché cerchiamo sempre ciò che è vero, buono e giusto."),
                                array('','',"Non abbandonarci, o Dio, per il tuo grande amore,"),
                                array('-','',"non dimenticare la tua alleanza."),
                                array('','',"Accogli l'offerta del nostro cuore contrito e umiliato,"),
                                array('-','',"fa' che non siano confusi quelli che si affidano a te."),
                                array('','',"Tu che ci hai resi partecipi della missione profetica del Cristo,"),
                                array('-','',"fa' che annunziamo con le parole e le opere le meraviglie del tuo amore.")
                            )
                        );
                    break;
                }
            }
            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Benedetto Dio, che esaudisce i poveri e gli umili e li colma dei suoi beni. A lui rivolgiamo con fede la nostra supplica:"),
                                array('ris','I',"Mostraci, o Padre, la tua misericordia.")
                            ),
                            array(
                                array('','',"Solleva, o Padre tenerissimo, le membra doloranti della tua Chiesa,"),
                                array('-','',"per il sangue di Cristo che consumò il suo sacrificio vespertino sospeso sulla croce."),
                                array('','',"Libera gli oppressi, illumina i ciechi,"),
                                array('-','',"soccorri gli orfani e le vedove."),
                                array('','',"Rivestici della tua armatura,"),
                                array('-','',"perché possiamo resistere agli assalti del maligno."),
                                array('','',"Assisti i tuoi figli, o Signore pietoso, nel momento della morte,"),
                                array('-','',"siano trovati fedeli e partano nella tua grazia da questo mondo."),
                                array('','',"Accogli nella luce della tua dimora i nostri defunti,"),
                                array('-','',"perché possano contemplare in eterno il tuo volto.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Benediciamo Cristo, pastore buono e misericordioso, che ha asciugato le lacrime dei poveri e dei sofferenti. Raccolti nella comune preghiera, invochiamolo:"),
                                array('ris','I',"Pietà del tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Cristo Signore, che consoli gli umili,"),
                                array('-','',"poni dinanzi ai tuoi occhi le lacrime dei poveri."),
                                array('','',"Raccogli, Signore, il gemito dei morenti,"),
                                array('-','',"il tuo santo angelo li visiti e li conforti."),
                                array('','',"I profughi e gli esiliati possano sperimentare la tua provvidenza,"),
                                array('-','',"fa' che ritornino felicemente alla loro patria e siano un giorno cittadini della Gerusalemme celeste."),
                                array('','',"Vinci con il tuo amore coloro che vivono nel peccato,"),
                                array('-','',"fa' che si riconcilino con te e con la tua Chiesa."),
                                array('','',"Accogli nella tua pace i nostri defunti,"),
                                array('-','',"perché godano pienamente i frutti della redenzione.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Nel misterioso disegno della sapienza divina, il Signore Gesù fu consegnato alla morte per i nostri peccati ed è risorto per la nostra santificazione. Adoriamo il nostro Salvatore e con umile fiducia invochiamolo:"),
                                array('ris','',"Abbi pietà del tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Esaudisci, Signore, le nostre suppliche e cancella le nostre colpe,"),
                                array('-','',"donaci il perdono e la pace."),
                                array('','',"Tu che per bocca dell'Apostolo hai detto: Dove ha abbondato il delitto, ha sovrabbondato la grazia,"),
                                array('-','',"lava i nostri innumerevoli peccati nel torrente della tua bontà."),
                                array('','',"Abbiamo molto peccato, Signore, ma confessiamo la tua misericordia senza limiti,"),
                                array('-','',"convertici e la nostra vita sarà trasformata."),
                                array('','',"Preserva il tuo popolo dall'infedeltà all'alleanza,"),
                                array('-','',"perché goda sempre i favori della tua amicizia."),
                                array('','',"Hai aperto il Paradiso al ladrone pentito,"),
                                array('-','',"accogli nella tua casa i nostri fratelli defunti.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Benediciamo il Cristo, principio e fondamento della nostra speranza, e invochiamo il suo nome:"),
                                array('ris','I',"Signore, abbi pietà di noi.")
                            ),
                            array(
                                array('','',"Cristo, guarda la nostra debolezza che ci inclina a cedere,"),
                                array('-','',"sostienici con la tua grazia."),
                                array('','',"Tu conosci quanto è forte per noi la suggestione del male,"),
                                array('-','',"guarisci le nostre anime con la larghezza del tuo perdono."),
                                array('','',"Tu che sei offeso dal peccato e placato dalla penitenza,"),
                                array('-','',"allontana i flagelli della tua ira, che meritiamo a causa delle nostre colpe."),
                                array('','',"Hai perdonato la peccatrice e hai preso sulle tue spalle la pecorella smarrita,"),
                                array('-','',"non privarci mai della tua misericordia."),
                                array('','',"Ci hai aperto le porte del cielo mediante la tua croce,"),
                                array('-','',"accogli in Paradiso tutti coloro che hanno sperato in te.")
                            )
                        );
                    break;
                }
            }
        }
        if ($this->actual['weekDay']==6) {

            if ($this->actual['ora']=='lodi') {
                switch($this->actual['quarto']) {
                    case 1:
                        $this->testo=array(
                            array(
                                array('','',"Benediciamo il Cristo, che ha voluto farsi in tutto simile ai fratelli, per divenire un sommo sacerdote misericordioso e fedele presso il Padre. A lui rivolgiamo la nostra comune preghiera:"),
                                array('ris','I',"Aprici, Signore, i tesori della tua misericordia.")
                            ),
                            array(
                                array('','',"O sole di giustizia, che ci hai illuminati nel Battesimo,"),
                                array('-','',"sia consacrato a te questo nuovo giorno."),
                                array('','',"In ogni ora proclameremo la tua lode,"),
                                array('-','',"glorificheremo il tuo nome in ogni avvenimento."),
                                array('','',"Tu che avesti come madre Maria, docile alla divina parola,"),
                                array('-','',"guida i nostri passi alla luce del tuo Vangelo."),
                                array('','',"Ravviva in noi, pellegrini sulla terra, l'attesa sicura della vita immortale,"),
                                array('-','',"fa' che pregustiamo fin d'ora la tua beatitudine.")
                            )
                        );
                    break;
                    case 2:
                        $this->testo=array(
                            array(
                                array('','',"Cristo è presente nelle sue membra, specialmente nei poveri e nei sofferenti. Celebriamo la sua bontà e preghiamo con fede per crescere nel suo amore:"),
                                array('ris','I',"Rendici perfetti nella carità, Signore.")
                            ),
                            array(
                                array('','',"Iniziamo questo nuovo giorno nel ricordo della tua risurrezione,"),
                                array('-','',"estendi a tutti gli uomini, Signore, i benefici della tua salvezza."),
                                array('','',"Fa' che oggi ti rendiamo testimonianza davanti agli uomini,"),
                                array('-','',"per essere degni di unirci all'offerta del tuo sacrificio."),
                                array('','',"Aiutaci a riconoscere il tuo volto nei nostri fratelli,"),
                                array('-','',"e a servirti in ciascuno di essi."),
                                array('','',"Tu che ci unisci a te come tralci alla vite,"),
                                array('-','',"fa' che rimaniamo nel tuo amore, per portare molto frutto a gloria di Dio Padre.")
                            )
                        );
                    break;
                    case 3:
                        $this->testo=array(
                            array(
                                array('','',"Dio Padre ha voluto innalzare Maria, Madre di Cristo, al di sopra di tutte le creature angeliche e terrestri. Fiduciosi nella sua intercessione, preghiamo:"),
                                array('ris','I',"Guarda la Madre del tuo Figlio e ascoltaci.")
                            ),
                            array(
                                array('','',"Ti rendiamo grazie, Padre immensamente buono, che ci hai dato Maria come madre e modello di vita cristiana,"),
                                array('-','',"per sua intercessione guidaci sulla via della santità."),
                                array('','',"Tu che hai reso Maria attenta alla tua parola e l'hai fatta tua fedele ancella,"),
                                array('-','',"per sua intercessione rendici discepoli e servitori del Figlio tuo."),
                                array('','',"Tu che hai dato a Maria il privilegio di essere madre per opera dello Spirito Santo,"),
                                array('-','',"per sua intercessione concedi a noi i frutti del tuo Spirito."),
                                array('','',"Tu che hai reso intrepida la Vergine Maria presso la croce del tuo Figlio e l'hai rallegrata con l'immensa gioia della risurrezione,"),
                                array('-','',"per sua intercessione consola le nostre pene e ravviva la nostra speranza.")
                            )
                        );
                    break;
                    case 4:
                        $this->testo=array(
                            array(
                                array('','',"Adoriamo Dio Padre, che nel Cristo, suo Figlio, ha ridato al mondo la speranza e la vita. Animati da questa certezza, diciamo:"),
                                array('ris','I',"Signore, ascolta la nostra preghiera.")
                            ),
                            array(
                                array('','',"Dio, Padre di tutti, che ci hai fatto giungere all'alba del nuovo giorno,"),
                                array('-','',"fa' che viviamo nell'amore del Cristo a lode e gloria del tuo nome."),
                                array('','',"Rafforza in noi la fede, la speranza e la carità,"),
                                array('-','',"che lo Spirito Santo ha seminato nei nostri cuori."),
                                array('','',"Il nostro sguardo sia sempre rivolto a te,"),
                                array('-','',"perché rispondiamo prontamente alla tua chiamata."),
                                array('','',"Salvaci dalle insidie e dalle seduzioni del male,"),
                                array('-','',"difendici da ogni pericolo nel cammino verso la patria del cielo.")
                            )
                        );
                    break;
                }
            }
        }
    }

    //################################################################################
    //################################################################################

    function build() {

        if ($this->actual['tempo']=='A') {

            //in Avvento 'quarto' non è impostato: la settimana del salterio coincide con la settimana di Avvento
            $q=($this->actual['quarto']!='')?$this->actual['quarto']:$this->actual['settimana'];

            if ($this->actual['weekDay']==0) {

                if ($q==1 || $q==3) {

                    if ($this->actual['ora']=='ves1') {

                        $this->testo=array(
                            array(
                                array('','',"A Cristo, fonte di vera gioia per tutti coloro che lo attendono, innalziamo la nostra preghiera:"),
                                array('ris','I',"Vieni, Signore, non tardare.")
                            ),
                            array(
                                array('','',"Verbo eterno, che sei prima di tutti i tempi,"),
                                array('-','',"vieni a salvare gli uomini del nostro tempo."),
                                array('','',"Creatore dell'universo e di tutti gli esseri che vi abitano,"),
                                array('-','',"vieni a riscattare l'opera delle tue mani."),
                                array('','',"Dio con noi, che hai voluto assumere la nostra natura mortale,"),
                                array('-','',"vieni a liberarci dal dominio della morte."),
                                array('','',"Salvatore, che sei venuto perché gli uomini abbiano la vita e l'abbiano in abbondanza,"),
                                array('-','',"vieni a comunicarci la tua vita divina."),
                                array('','',"Signore glorioso, che chiami tutti gli uomini nella pace del tuo regno,"),
                                array('-','',"fa' risplendere il tuo volto ai nostri fratelli defunti.")
                            )
                        );
                    }

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Invochiamo con fede Dio nostro Padre, che ci da la grazia di celebrare il mistero dell'Avvento:"),
                                array('ris','I',"Mostraci, Signore, la tua misericordia.")
                            ),
                            array(
                                array('','',"Rinnova, o Dio, tutto il nostro essere: spirito, anima e corpo,"),
                                array('-','',"rendici santi e irreprensibili per la venuta del tuo Figlio."),
                                array('','',"Donaci di trascorrere cristianamente questo giorno,"),
                                array('-','',"e di vivere in questo mondo con giustizia e amore."),
                                array('','',"Concedi a tutti gli uomini di essere rivestiti del Signore Gesù Cristo,"),
                                array('-','',"e pieni dello Spirito Santo."),
                                array('','',"Fa' che siamo costantemente vigilanti,"),
                                array('-','',"in attesa della manifestazione gloriosa del tuo Figlio.")
                            )
                        );
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                        $this->testo=array(
                            array(
                                array('','',"Supplichiamo il nostro Redentore Gesù Cristo, che è via, verità e vita:"),
                                array('ris','I',"Vieni, Signore, e resta con noi.")
                            ),
                            array(
                                array('','',"L'arcangelo Gabriele annunziò la tua venuta,"),
                                array('-','',"Figlio dell'Altissimo, vieni e regna sul tuo popolo."),
                                array('','',"Giovanni il precursore sussultò di gioia per te,"),
                                array('-','',"Santo di Dio, vieni e dona la salvezza al mondo intero."),
                                array('','',"Un angelo rivelò i tuo nome a Giuseppe,"),
                                array('-','',"Gesù Salvatore, vieni e libera il tuo popolo."),
                                array('','',"Il vecchio Simeone attese la tua venuta,"),
                                array('-','',"Luce del mondo, vieni e consola l'umanità."),
                                array('','',"Zaccaria predisse la tua visita redentrice,"),
                                array('-','',"illumina quanti sono nelle tenebre e nell'ombra della morte.")
                            )
                        );
                    }
                }

                if ($q==2 || $q==4) {

                    if ($this->actual['ora']=='ves1') {

                        $this->testo=array(
                            array(
                                array('','',"Innalziamo la comune preghiera a Cristo Salvatore, nato dalla Vergine Maria:"),
                                array('ris','I',"Vieni, Signore Gesù.")
                            ),
                            array(
                                array('','',"Figlio di Dio, che vieni come il vero angelo dell'alleanza,"),
                                array('-','',"fa' che il mondo intero ti riconosca e ti accolga."),
                                array('','',"Verbo di Dio, che ti sei fatto nostro fratello,"),
                                array('-','',"libera l'umanità dalle oscure suggestioni del male."),
                                array('','',"Signore della vita, che hai preso su di te la nostra morte,"),
                                array('-','',"fa' che accettiamo dalle tue mani la sofferenza e la morte."),
                                array('','',"Giudice divino, che dai la giusta ricompensa,"),
                                array('-','',"mostraci la misericordia che non conosce limiti."),
                                array('','',"Cristo Signore, morto per noi sul legno della croce,"),
                                array('-','',"dona il riposo eterno a chi è morto a causa dell'odio e della violenza.")
                            )
                        );
                    }

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Uniti nella preghiera della fede, invochiamo Cristo, giudice dei vivi e dei morti:"),
                                array('ris','I',"Vieni, Signore Gesù.")
                            ),
                            array(
                                array('','',"Cristo, che sei venuto a salvare i peccatori,"),
                                array('-','',"difendici dalle insidie del male."),
                                array('','',"Tu che alla fine dei tempi manifesterai la tua potenza e gloria,"),
                                array('-','',"mostraci fin d'ora la grazia che ci salva."),
                                array('','',"La forza dello Spirito Santo ci aiuti a custodire la tua legge,"),
                                array('-','',"nel generoso servizio di Dio e del prossimo."),
                                array('','',"Aiutaci a vivere con sobrietà e amore in questo mondo,"),
                                array('-','',"in attesa della beata speranza e della rivelazione della tua gloria.")
                            )
                        );
                    }

                    if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                        $this->testo=array(
                            array(
                                array('','',"Uniamoci alla santa Chiesa, che attende con fede il Cristo suo sposo e acclamiamo:"),
                                array('ris','I',"Vieni, Signore Gesù.")
                            ),
                            array(
                                array('','',"Verbo eterno, che nell'incarnazione hai rivelato al mondo la tua gloria,"),
                                array('-','',"trasformaci con la tua vita divina."),
                                array('','',"Ti sei rivestito della nostra debolezza,"),
                                array('-','',"infondi in noi la forza del tuo amore."),
                                array('','',"Tu che sei venuto povero e umile per redimerci dal peccato,"),
                                array('-','',"accoglici nell'assemblea dei giusti, quando verrai nella gloria."),
                                array('','',"Tu che governi con sapienza e amore le tue creature,"),
                                array('-','',"fa' che tutti gli uomini promuovano il progresso nella libertà e nella pace."),
                                array('','',"Tu che siedi alla destra del Padre,"),
                                array('-','',"allieta con la visione del tuo volto quelli che solo alla fine conobbero l'amore e la speranza.")
                            )
                        );
                    }
                }
            }

            if ($this->actual['weekDay']==1) {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Preghiamo con fiducia Gesù Cristo, Figlio del Dio vivente, perché ci guidi allo splendore della giustizia e della verità:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Luce eterna, che sorgi all'orizzonte del mondo per disperdere le nostre tenebre,"),
                            array('-','',"risveglia in noi la fede e la speranza."),
                            array('','',"Donaci una giornata prospera e serena,"),
                            array('-','',"fa' che viviamo nella luce della tua presenza."),
                            array('','',"Insegnaci a essere miti e premurosi verso tutti,"),
                            array('-','',"per rendere testimonianza al tuo Vangelo."),
                            array('','',"La tua venuta segni l'inizio di un mondo nuovo,"),
                            array('-','',"e inauguri un regno di giustizia e di pace.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti in preghiera con tutti i nostri fratelli sparsi nel mondo, invochiamo con fede il nostro Redentore:"),
                            array('ris','I',"Vieni, Signore, e salvaci.")
                        ),
                        array(
                            array('','',"Cristo, nostra luce e nostra speranza,"),
                            array('-','',"vieni e salva tutti gli uomini, che hai creato e redento."),
                            array('','',"Verbo generato dal Padre nei secoli eterni,"),
                            array('-','',"insegnaci la via che conduce al Padre."),
                            array('','',"Figlio di Dio, fatto uomo per opera dello Spirito Santo,"),
                            array('-','',"rinnova i nostri cuori con l'effusione dei suoi doni."),
                            array('','',"O Salvatore, che hai assunto la nostra natura mortale nel grembo di Maria Vergine,"),
                            array('-','',"rendi tutti gli uomini partecipi della vita immortale."),
                            array('','',"Signore Gesù, ricordati di tutte le generazioni umane che si sono succedute sulla terra e hanno sperato in te,"),
                            array('-','',"ammettile nel tuo regno di salvezza.")
                        )
                    );
                }
            }

            if ($this->actual['weekDay']==2) {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Preghiamo Dio nostro Padre, che stende la sua mano per salvare il suo popolo:"),
                            array('ris','I',"Venga il tuo regno, o Signore.")
                        ),
                        array(
                            array('','',"Signore, fa' che portiamo frutti di vera conversione,"),
                            array('-','',"per accogliere il tuo regno, che è vicino."),
                            array('','',"Prepara nel nostro cuore la via al tuo Verbo che viene,"),
                            array('-','',"perché si riveli in noi la sua gloria."),
                            array('','',"Abbassa i monti dell'orgoglio,"),
                            array('-','',"colma le valli della debolezza e della sfiducia."),
                            array('','',"Abbatti le barriere dell'odio che dividono le nazioni,"),
                            array('-','',"apri la strada alla concordia e alla pace.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Invochiamo il Verbo eterno, che attraverso la sua umanità ha aperto per noi una via nuova e vivente al santuario del cielo:"),
                            array('ris','I',"Vieni e salvaci, o Signore.")
                        ),
                        array(
                            array('','',"Noi ti attendiamo, pieni di speranza,"),
                            array('-','',"vieni, Signore Gesù."),
                            array('','',"In te abbiamo esistenza, energia e vita, o Signore,"),
                            array('-','',"vieni e rivela a tutti gli uomini la tua presenza."),
                            array('','',"Tu che non sei lontano da ciascuno di noi,"),
                            array('-','',"mostrati a coloro che ti cercano con cuore sincero."),
                            array('','',"Padre dei poveri e consolatore degli infelici,"),
                            array('-','',"dona libertà ai prigionieri, conforto ai sofferenti."),
                            array('','',"Tu che sei il Dio della vita,"),
                            array('-','',"concedi la gioia eterna ai nostri fratelli che oggi sono morti sul lavoro.")
                        )
                    );
                }
            }

            if ($this->actual['weekDay']==3) {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Il Verbo di Dio ha voluto abitare in mezzo a noi, perché contempliamo la sua gloria. Lieti nella speranza acclamiamo:"),
                            array('ris','I',"Resta con noi, Signore.")
                        ),
                        array(
                            array('','',"Dio giusto e misericordioso,"),
                            array('-','',"rendi giustizia ai poveri e agli oppressi."),
                            array('','',"Re pacifico, che trasformi in vomeri le spade e le lance in falci,"),
                            array('-','',"muta l'odio in amore, la vendetta in perdono."),
                            array('','',"Tu che giudichi secondo verità e non secondo le apparenze,"),
                            array('-','',"vieni e riconosci i tuoi discepoli."),
                            array('','',"Quando verrai sulle nubi del cielo con grande potenza e gloria,"),
                            array('-','',"fa' che ci presentiamo con serena fiducia davanti a te.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"A Dio Padre, che ha mandato il suo Figlio a portarci la pace, rivolgiamo la nostra comune preghiera:"),
                            array('ris','I',"Venga il tuo regno, Signore.")
                        ),
                        array(
                            array('','',"Padre santo, guarda la tua Chiesa,"),
                            array('-','',"visita questa vigna, che hai piantato con le tue mani."),
                            array('','',"La tua fedeltà dura in eterno,"),
                            array('-','',"ricordati di tutti i figli di Abramo e compi le tue promesse."),
                            array('','',"Volgi il tuo sguardo a tutti i popoli,"),
                            array('-','',"ogni uomo glorifichi il tuo nome."),
                            array('','',"Visita il tuo gregge sparso sulla terra,"),
                            array('-','',"radunalo nell'unico ovile di Cristo."),
                            array('','',"Ricordati di coloro che oggi hanno lasciato questo mondo,"),
                            array('-','',"fa' che vivano nella gloria del tuo regno.")
                        )
                    );
                }
            }

            if ($this->actual['weekDay']==4) {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Riuniti nella lode del mattino invochiamo Cristo, sapienza e potenza di Dio:"),
                            array('ris','I',"Resta sempre con noi, Signore.")
                        ),
                        array(
                            array('','',"Signore Gesù, che ci hai chiamati a far parte della tua Chiesa,"),
                            array('-','',"aiutaci a vivere in modo degno della nostra vocazione."),
                            array('','',"Tu che ignoto al mondo, sei presente in mezzo a noi,"),
                            array('-','',"rivela a tutti gli uomini la luce del tuo volto."),
                            array('','',"Tu che sei più intimo a noi di noi stessi,"),
                            array('-','',"Ravviva in noi la speranza della salvezza."),
                            array('','',"Fonte e modello di ogni santità,"),
                            array('-','',"conservaci nella tua amicizia fino al giorno della tua venuta.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Acclamiamo Cristo, salvatore del mondo, annunziato dai profeti, e innalziamo a lui la nostra preghiera:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Verbo eterno, che hai creato l'universo e nella pienezza dei tempi ti sei fatto uomo per la nostra salvezza,"),
                            array('-','',"vieni e salvaci dal peccato e dalla morte."),
                            array('','',"Luce vera, che illumini ogni uomo,"),
                            array('-','',"vieni e disperdi le tenebre della nostra ignoranza."),
                            array('','',"Figlio unigenito, che vivi nel Padre,"),
                            array('-','',"vieni e rivelaci l'amore che ci salva."),
                            array('','',"Tu che sei il nostro liberatore,"),
                            array('-','',"dona a tutti gli uomini la libertà dei figli di Dio."),
                            array('','',"Tu che hai vinto le barriere della divisione e dell'odio,"),
                            array('-','',"riunisci al banchetto eterno i morti di tutte le guerre.")
                        )
                    );
                }
            }

            if ($this->actual['weekDay']==5) {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Lode e benedizione a Dio Padre, che nel suo Figlio ha rivelato agli uomini la sua gloria:"),
                            array('ris','I',"Signore, noi ti lodiamo e ti glorifichiamo.")
                        ),
                        array(
                            array('','',"Padre santo, fa' che impariamo a comprenderci e ad amarci,"),
                            array('-','',"come ci ha insegnato il Cristo tuo Figlio."),
                            array('','',"Riempici di gioia e di pace nella fede,"),
                            array('-','',"confermaci nella speranza e donaci la forza dello Spirito."),
                            array('','',"Signore, che nella tua bontà ti prendi cura di ogni essere creato,"),
                            array('-','',"visita coloro che ti aspettano pur senza conoscerti."),
                            array('','',"Tu che chiami e santifichi gli eletti,"),
                            array('-','',"sostieni anche noi, peccatori, nel cammino verso la beatitudine eterna.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Supplichiamo Cristo, pastore e custode delle nostre anime:"),
                            array('ris','I',"Salva la tua famiglia, Signore.")
                        ),
                        array(
                            array('','',"Pastore buono del gregge di Dio,"),
                            array('-','',"vieni e raduna tutti gli uomini nella tua Chiesa."),
                            array('','',"Assisti i pastori del tuo popolo,"),
                            array('-','',"perché siano instancabili nel servizio dei fratelli."),
                            array('','',"Suscita autentici messaggeri della tua parola,"),
                            array('-','',"Il tuo Vangelo sia annunziato sino ai confini della terra."),
                            array('','',"Abbi pietà di coloro che, affaticati e oppressi, vengono meno nel cammino della vita,"),
                            array('-','',"fa' che trovino accanto a sé la presenza confortatrice di un amico."),
                            array('','',"Accogli nei pascoli eterni del cielo coloro che hai chiamato a te,"),
                            array('-','',"e che sulla terra hanno riconosciuto la tua voce.")
                        )
                    );
                }
            }

            if ($this->actual['weekDay']==6) {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Supplichiamo Dio nostro Padre, che ha aperto a tutti gli uomini la via della salvezza:"),
                            array('ris','I',"Custodisci il tuo popolo, Signore.")
                        ),
                        array(
                            array('','',"Dio, che hai promesso al tuo popolo un germoglio di giustizia,"),
                            array('-','',"conserva pura e santa la tua Chiesa."),
                            array('','',"Apri il nostro cuore all'ascolto della tua parola,"),
                            array('-','',"rendici forti e irreprensibili nella testimonianza della fede."),
                            array('','',"Confermaci nella comunione di amore del tuo Spirito,"),
                            array('-','',"fa' che sappiamo accogliere la venuta del tuo Figlio."),
                            array('','',"Donaci di perseverare nella tua grazia,"),
                            array('-','',"fedeli e vigilanti fino al giorno del Signore Gesù Cristo.")
                        )
                    );
                }
            }     

            ////////////////

            if (substr($this->actual['today'],4,4)=='1217') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Supplichiamo Dio nostro Padre, che ha aperto a tutti gli uomini la via della salvezza:"),
                            array('ris','I',"Custodisci il tuo popolo, Signore.")
                        ),
                        array(
                            array('','',"Dio, che hai promesso al tuo popolo un germoglio di giustizia,"),
                            array('-','',"conserva pura e santa la tua Chiesa."),
                            array('','',"Apri il nostro cuore all'ascolto della tua parola,"),
                            array('-','',"rendici forti e irreprensibili nella testimonianza della fede."),
                            array('','',"Confermaci nella comunione di amore del tuo Spirito,"),
                            array('-','',"fa' sappiamo accogliere la venuta del tuo Figlio."),
                            array('','',"Donaci di perseverare nella tua grazia,"),
                            array('-','',"fedeli e vigilanti fino al giorno del Signore Gesù Cristo.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Innalziamo la comune preghiera a Cristo salvatore, nato dalla Vergine Maria:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Figlio di Dio, che vieni come il vero angelo dell'alleanza,"),
                            array('-','',"fa' che il mondo intero ti riconosca e ti accolga."),
                            array('','',"Verbo di Dio, che ti sei fatto nostro fratello,"),
                            array('-','',"libera l'umanità dalle oscure suggestioni del male."),
                            array('','',"Signore della vita, che hai preso su di te la nostra morte,"),
                            array('-','',"fa' che accettiamo dalle tue mani la sofferenza e la morte."),
                            array('','',"Giudice divino, che dai la giusta ricompensa,"),
                            array('-','',"mostraci la misericordia che non conosce limiti."),
                            array('','',"Cristo Signore, morto per noi sul legno della croce,"),
                            array('-','',"dona il riposo eterno a chi è morto a causa dell'odio e della violenza.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1218') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti nella preghiera della fede, invochiamo Cristo, giudice dei vivi e dei morti:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Cristo, che sei venuto a salvare i peccatori,"),
                            array('-','',"difendici dalle insidie del male."),
                            array('','',"Tu che alla fine dei tempi manifesterai la tua potenza e gloria,"),
                            array('-','',"mostraci fin d'ora la grazia che ci salva."),
                            array('','',"La forza dello Spirito Santo ci aiuti a custodire la tua legge,"),
                            array('-','',"nel generoso servizio di Dio e del prossimo."),
                            array('','',"Aiutaci a vivere con sobrietà e amore in questo mondo,"),
                            array('-','',"in attesa della beata speranza e della rivelazione della tua gloria.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Uniamoci alla santa Chiesa, che attende con fede il Cristo, suo sposo:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Verbo eterno, che nell'incarnazione hai rivelato al mondo la tua gloria,"),
                            array('-','',"trasformaci con la tua vita divina."),
                            array('','',"Ti sei rivestito della nostra debolezza,"),
                            array('-','',"infondi in noi la forza del tuo amore."),
                            array('','',"Tu che governi con sapienza le tue creature,"),
                            array('-','',"fa' che tutti gli uomini promuovano il progresso nella libertà e nella pace."),
                            array('','',"Tu che sei venuto povero e umile per redimerci dal peccato,"),
                            array('-','',"accoglici nell'assemblea dei giusti quando verrai nella tua gloria."),
                            array('','',"Tu che siedi alla destra del Padre,"),
                            array('-','',"allieta con la visione del tuo volto quelli che solo alla fine conobbero l'amore e la speranza.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1219') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo Redentore riscatterà del dominio della morte chi lo attende con cuore sincero. A lui rivolgiamo il grido della nostra fede:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Signore, guarda il tuo popolo che celebra il mistero della tua venuta,"),
                            array('-','',"purifica il nostro spirito da ogni forma di orgoglio e di egoismo."),
                            array('','',"Signore, proteggi la Chiesa, che hai fondato come sacramento di salvezza,"),
                            array('-','',"fa' che annunzi la verità e la pace a tutti i popoli."),
                            array('','',"Fa' risplendere agli occhi di tutti la tua legge,"),
                            array('-','',"perché sia guida sicura per ogni uomo."),
                            array('','',"Tu che affidi ad ogni battezzato una missione profetica,"),
                            array('-','',"fa' che i cristiani annunzino la tua presenza nel mondo.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"A Cristo, giudice dei vivi e dei morti, salga fiduciosa la preghiera del popolo redento:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Signore, il mondo riconosca la tua giustizia,"),
                            array('-','',"e la tua gloria abiti nella nostra terra."),
                            array('','',"Tu che hai voluto condividere la debolezza della condizione umana,"),
                            array('-','',"infondi in noi la forza inesauribile del tuo Spirito."),
                            array('','',"Irradia sul mondo la luce della tua verità,"),
                            array('-','',"illumina i nostri fratelli che ancora non ti riconoscono."),
                            array('','',"Sei venuto nell'umiltà per cancellare i nostri peccati,"),
                            array('-','',"venendo nella gloria, guidaci alla felicità eterna."),
                            array('','',"Tu che alla fine dei tempi verrai a giudicare il mondo,"),
                            array('-','',"ricompensa coloro che in questa vita furono vittime della persecuzione.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1220') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo è la luce che illumina ogni uomo. La Santa Chiesa, unita nella preghiera di lode, lo attende e lo invoca:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Lo splendore della tua presenza, o Cristo, vinca le nostre tenebre,"),
                            array('-','',"ci renda degni dei tuoi benefici."),
                            array('','',"Salva il tuo popolo, Signore nostro Dio,"),
                            array('-','',"fa' che oggi e sempre glorifichiamo il tuo nome."),
                            array('','',"Accendi nei nostri cuori una sete ardente di te, o Signore,"),
                            array('-','',"il tuo Spirito ci unisca tutti in comunione di fede e di carità."),
                            array('','',"Ti sei rivestito della umana debolezza,"),
                            array('-','',"soccorri e proteggi i poveri, i malati, gli agonizzanti.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Alla fine dei tempi il Cristo si manifesterà nello splendore della gloria. La Chiesa lo saluta e lo invoca:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Cristo nostro salvatore, che nascendo dalla Vergine ci hai liberati dal giogo della legge antica,"),
                            array('-','',"compi in noi l'opera della tua redenzione."),
                            array('','',"Tu che hai condiviso la nostra condizione umana,"),
                            array('-','',"fa' che partecipiamo alla tua vita divina."),
                            array('','',"Per il mistero della tua venuta accendi in noi il fuoco della tua carità,"),
                            array('-','',"realizza le nostre aspirazioni di giustizia e di pace."),
                            array('','',"Tu che ora ci fai camminare nell'oscurità della fede,"),
                            array('-','',"fa' che un giorno ti possiamo contemplare nella gloria."),
                            array('','',"Scenda su tutti i defunti la rugiada della tua misericordia,"),
                            array('-','',"splenda ad essi la luce del tuo volto.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1221') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Uniamoci alla preghiera perseverante della Chiesa, che attende il Cristo, suo sposo:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Tu che dalla gloria del Padre sei venuto fra noi rivestito della nostra umanità,"),
                            array('-','',"donaci l'eredità dei figli di Dio."),
                            array('','',"Tu che un giorno ritornerai acclamato dall'assemblea festosa dei giusti,"),
                            array('-','',"mostrati buono e clemente verso di noi peccatori."),
                            array('','',"Cristo, che unisci la Chiesa alla tua preghiera sacerdotale,"),
                            array('-','',"salvaci con la grazia della tua visita."),
                            array('','',"Tu che mediante la fede ci guidi dalle tenebre alla luce,"),
                            array('-','',"rinnovaci nel corpo e nello spirito, perché possiamo piacere a te.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"A Cristo, che ci hai liberati dalle tenebre del peccato, rivolgiamo fiduciosi la nostra preghiera:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Signore, che raduni in una sola famiglia i popolo della terra,"),
                            array('-','',"rinnova con essi il patto di eterna alleanza."),
                            array('','',"Agnello di Dio, che sei venuto a togliere i peccati del mondo,"),
                            array('-','',"liberaci dai fermenti della lussuria, della violenza e dell'orgoglio."),
                            array('','',"Tu che sei venuto a salvare l'umanità decaduta,"),
                            array('-','',"nel tuo avvento glorioso non condannare coloro che hai redento."),
                            array('','',"Tu che ci attiri con la forza della fede,"),
                            array('-','',"fa' che giungiamo al porto della gioia eterna."),
                            array('','',"Tu che verrai a giudicare i vivi e i morti,"),
                            array('-','',"ammetti i nostri familiari e amici defunti nella gioia dei santi.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1222') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti nel rendimento di grazie a Dio Padre, che ha mandato il suo Figlio a riscattare tutti gli uomini, preghiamo per la salvezza e la pace del mondo:"),
                            array('ris','I',"Mostraci, Signore, la tua misericordia.")
                        ),
                        array(
                            array('','',"Padre santo, che ci chiami ad annunziare la fede nel Cristo Signore,"),
                            array('-','',"aiutaci a non smentire mai con la condotta della vita il credo che professiamo."),
                            array('','',"Tu che hai mandato il tuo Figlio a liberarci dal peccato e dalla morte,"),
                            array('-','',"togli ogni ansia e tristezza dalla nostra città e dalla faccia della terra."),
                            array('','',"Fa' che l'umanità inondata di gioia per la venuta del tuo Figlio,"),
                            array('-','',"conosca la letizia perfetta nel possesso di te, unico sommo bene."),
                            array('','',"Concedi a noi tuoi fedeli di vivere con sobrietà e amore in questo mondo,"),
                            array('-','',"nell'attesa della beata speranza e della rivelazione gloriosa del tuo Cristo.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"A Cristo, che umiliò se stesso per amore dell'umanità, innalziamo il grido dell'attesa e della speranza:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Signore, che sei venuto a guarire i malati e a salvare i peccatori,"),
                            array('-','',"libera i corpi e le anime dall'oppressione del male."),
                            array('','',"Tu che non esiti a chiamare tuoi fratelli coloro che hai redenti,"),
                            array('-','',"non permettere che ci separiamo mai dal tuo amore."),
                            array('','',"Aiutaci ad accogliere con animo aperto il dono della salvezza,"),
                            array('-','',"perché non siamo condannati nell'ora del rendiconto finale."),
                            array('','',"Tu che ci apri le insondabili ricchezze della tua bontà,"),
                            array('-','',"fa' che otteniamo la corona della gloria che non appassisce mai."),
                            array('','',"Ti raccomandiamo i nostri Pastori defunti e tutti coloro che ci hanno fatto del bene,"),
                            array('-','',"fa' che vivano con te nella gioia del Paradiso.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1223') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo redentore, venendo nel mondo, è divenuto principio e sorgente della nostra salvezza. Rivolgiamo a lui la nostra umile e fiduciosa preghiera:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Cristo, preannunziato dai profeti,"),
                            array('-','',"rafforza in noi i germogli della giustizia e della carità."),
                            array('','',"Signore, unica speranza di salvezza,"),
                            array('-','',"salva tutti coloro che confidano in te."),
                            array('','',"Medico divino, che sei venuto a sanare i cuori affranti,"),
                            array('-','',"guarisci le ferite del popolo cristiano."),
                            array('','',"Principe della pace, che sei venuto a riconciliare il cielo e la terra,"),
                            array('-','',"salvaci dalla morte eterna quando verrai come giudice.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Invochiamo con fede il Cristo che è venuto a portare il lieto annunzio ai poveri:"),
                            array('ris','I',"Signore, tutti i popoli vedano la tua gloria.")
                        ),
                        array(
                            array('','',"Cristo, rivelati a chi ancora non ti conosce,"),
                            array('-','',"fa' che ogni uomo possa gustare la gioia della tua amicizia."),
                            array('','',"Il tuo nome risuoni sino ai confini della terra,"),
                            array('-','',"tutte le genti trovino la via che conduce a te."),
                            array('','',"Tu che sei venuto a redimere l'umanità,"),
                            array('-','',"vieni ancora, perché il tuo popolo non perisca ma abbia la vita eterna."),
                            array('','',"Tu che hai dato agli uomini la libertà dei figli di Dio,"),
                            array('-','',"conservaci il dono che hai conquistato a prezzo del tuo sangue."),
                            array('','',"Tu che sei il giudice del mondo,"),
                            array('-','',"ricompensa con la gioia eterna coloro che sono morti nei campi di sterminio.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1224') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo è la luce che illumina ogni uomo, La santa Chiesa, unita nella preghiera di lode, lo attende e lo invoca:"),
                            array('ris','I',"Vieni, Signore Gesù.")
                        ),
                        array(
                            array('','',"Lo splendore della tua presenza, o Cristo, vinca le nostre tenebre,"),
                            array('-','',"ci renda degni dei tuoi benefici."),
                            array('','',"Salva il tuo popolo, Signore nostro Dio,"),
                            array('-','',"fa' che oggi e sempre glorifichiamo il tuo nome."),
                            array('','',"Accendi nei nostri cuori una sete ardente di te, o Signore,"),
                            array('-','',"il tuo Spirito ci unisca tutti in comunione di fede e di carità."),
                            array('','',"Tu che ti sei rivestito della umana debolezza,"),
                            array('-','',"soccorri e proteggi i poveri, i malati, gli agonizzanti.")
                        )
                    );
                }
            }   
        }

        ////////////////////////////////////////////////////////////////////////////////////

        if ($this->actual['tempo']=='N') {

            if (substr($this->actual['today'],4,4)=='1225') {

                if ($this->actual['ora']=='ves1') {

                    $this->testo=array(
                        array(
                            array('','',"Adoriamo Cristo, che umiliò se stesso, assumendo la condizione di servo, e divenne simile a noi in tutto, fuorché nel peccato. A lui s'innalzi la nostra preghiera:"),
                            array('ris','I',"Per il mistero della tua nascita, salvaci o Signore.")
                        ),
                        array(
                            array('','',"Entrando nella storia, hai aperto la nuova era predetta dai profeti,"),
                            array('-','',"fa' che la tua Chiesa rifiorisca in giovinezza perenne."),
                            array('','',"Hai voluto rivestire la nostra condizione mortale,"),
                            array('-','',"sii luce ai ciechi, vigore ai deboli, conforto ai sofferenti."),
                            array('','',"Sei nato nell'umiltà del presepe,"),
                            array('-','',"guarda ai poveri del mondo e dona a tutti prosperità e pace."),
                            array('','',"Hai portato agli uomini il lieto annunzio della salvezza,"),
                            array('-','',"fa' risplendere agli occhi dei morenti la speranza della nuova nascita nel tuo regno."),
                            array('','',"Sei disceso sulla terra per farci salire al cielo,"),
                            array('-','',"riunisci con te nella gloria i nostri fratelli defunti.")
                        )
                    );
                }

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Onore e gloria al Verbo di Dio, Re dei secoli eterni, nato nel tempo per la nostra salvezza. Acclamiamo:"),
                            array('ris','I',"Gioisca la terra per la tua venuta, Signore.")
                        ),
                        array(
                            array('','',"Verbo eterno, che hai allietato la terra con la rugiada delle benedizioni celesti,"),
                            array('-','',"rallegra il nostro spirito con la grazia della tua visita."),
                            array('','',"Salvatore del mondo, che hai mostrato la fedeltà di Dio alle sua promesse,"),
                            array('-','',"donaci di custodire con lealtà gli impegni del Battesimo."),
                            array('','',"Tu che per mezzo degli angeli hai annunziato la pace agli uomini,"),
                            array('-','',"custodisci la nostra vita nella tua pace."),
                            array('','',"Sei la vera vite, che produce frutti di salvezza eterna,"),
                            array('-','',"donaci di rimanere uniti a te, come tralci vivi e fecondi.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"In fraterna esultanza celebriamo la nascita del Redentore e uniamo al canto degli angeli la nostra preghiera:"),
                            array('ris','I',"Il tuo Natale, Signore, porti al mondo la pace.")
                        ),
                        array(
                            array('','',"Tu che consoli la Chiesa con il mistero della tua nascita,"),
                            array('-','',"riempila dei tuoi doni e delle tue benedizioni."),
                            array('','',"Pastore e guida suprema delle nostre anime,"),
                            array('-','',"proteggi e illumina il papa e i vescovi, perché siano fedeli dispensatori della tua grazia."),
                            array('','',"Re eterno, che hai voluto sperimentare la brevità della vita umana,"),
                            array('-','',"donaci di entrare per sempre nella gioia del tuo regno."),
                            array('','',"Tu che nella pienezza dei tempi hai esaudito le attese dei patriarchi e dei profeti,"),
                            array('-','',"rivelati a coloro che attendono la venuta del Salvatore."),
                            array('','',"Tu che hai liberato l'umanità dal peccato e dalla morte,"),
                            array('-','',"concedi ai defunti libertà perfetta in Paradiso.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1226') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti nella liturgia di lode, invochiamo il Cristo Signore, perché ci aiuti a servirlo in santità e giustizia tutti i giorni della nostra vita:"),
                            array('ris','I',"Santifica il tuo popolo, Signore.")
                        ),
                        array(
                            array('','',"Sei stato provato in ogni cosa per divenire simile a noi in tutto fuorché nel peccato,"),
                            array('-','',"Signore Gesù, abbi pietà del tuo popolo."),
                            array('','',"Chiami tutti alla carità perfetta,"),
                            array('-','',"Signore Gesù, santifica il tuo popolo."),
                            array('','',"Hai voluto che i tuoi discepoli siano sale della terra e luce del mondo,"),
                            array('-','',"Signore Gesù illumina il tuo popolo."),
                            array('','',"Sei venuto per servire e non per essere servito,"),
                            array('-','',"Signore Gesù, insegnaci a servirti nei nostri fratelli."),
                            array('','',"Tu sei l'irradiazione della gloria del Padre e l'impronta della sua sostanza,"),
                            array('-','',"Signore Gesù, fa' che al termine della vita contempliamo il tuo volto insieme ai tuoi santi.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Con umiltà e fiducia invochiamo il Verbo di Dio, che ponendo la sua dimora in mezzo a noi ci ha aperto la porta della salvezza:"),
                            array('ris','I',"Liberaci, Signore, da ogni male.")
                        ),
                        array(
                            array('','',"Per il mistero della tua incarnazione, per la tua nascita, per la tua infanzia e per la tua vita consacrata al Padre,"),
                            array('ris','I',"Liberaci, Signore, da ogni male."),
                            array('','',"Per le tue fatiche, per la predicazione del regno, per il tuo amore ai peccatori,"),
                            array('ris','I',"Liberaci, Signore, da ogni male."),
                            array('','',"Per la tua passione, per la desolazione e la croce, per la tua morte e sepoltura,"),
                            array('ris','I',"Liberaci, Signore, da ogni male."),
                            array('','',"Per la tua risurrezione e ascensione, per l'effusione dello Spirito Santo,"),
                            array('ris','I',"Liberaci, Signore, da ogni male."),
                            array('','',"Per la tua gloria eterna, nella quale speriamo di entrare insieme ai nostri fratelli defunti,"),
                            array('ris','I',"Liberaci, Signore, da ogni male.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1227') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Edificati sul fondamento degli apostoli per formare il tempio vivo di Dio, preghiamo con fede:"),
                            array('ris','I',"Ricordati, Signore, della tua Chiesa.")
                        ),
                        array(
                            array('','',"Padre, tu hai voluto che gli apostoli fossero i primi testimoni del Figlio tuo risorto,"),
                            array('-','',"concedi a noi di essere testimoni della tua risurrezione."),
                            array('','',"Hai mandato il tuo Figlio a portare il lieto annunzio ai poveri,"),
                            array('-','',"fa' che il Vangelo sia predicato a tutti gli uomini."),
                            array('','',"Tu che hai mandato il tuo Figlio per seminare il seme della tua parola,"),
                            array('-','',"concedi una messe abbondante agli operai del Vangelo."),
                            array('','',"Hai sacrificato il tuo Figlio per riconciliare il mondo a te,"),
                            array('-','',"fa' che tutti cooperiamo generosamente alla tua opera di riconciliazione e di pace.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Innalziamo la nostra preghiera a Dio Padre, che nel suo grande amore ha mandato a noi il suo unico Figlio:"),
                            array('ris','I',"La grazia del tuo Figlio sia sempre con noi.")
                        ),
                        array(
                            array('','',"O Dio, amore increato, che hai pietà di coloro che sono nelle tenebre,"),
                            array('-','',"accogli le preghiere che ti offriamo per la salvezza del mondo."),
                            array('','',"Ricordati della tua Chiesa diffusa su tutta la terra,"),
                            array('-','',"dona unità e concordia al popolo cristiano."),
                            array('','',"Estendi la tua pace sino ai confini della terra,"),
                            array('-','',"guida tutti i popoli alla fede in Cristo."),
                            array('','',"Dona il tuo Spirito a coloro che hanno responsabilità di governo,"),
                            array('-','',"fa' che collaborino a costruire una società nuova nella fraternità e nella giustizia."),
                            array('','',"Tu che hai portato al mondo l'annunzio della pace,"),
                            array('-','',"concedi la pace eterna ai nostri fratelli defunti.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1228') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Gloria a Cristo che ha vinto la prepotenza dei tiranni con la pacifica schiera dei santi Innocenti. A lui si innalzi la nostra voce di lode:"),
                            array('ris','I',"Ti acclama, Signore, la candida schiera dei martiri.")
                        ),
                        array(
                            array('','',"Cristo, testimoniato con il sangue dei martiri Innocenti,"),
                            array('-','',"donaci di confessarti davanti al mondo con la coerenza della vita."),
                            array('','',"Hai donato la palma della vittoria a bambini deboli e indifesi,"),
                            array('-','',"fa' che noi, con tante armi della tua grazia, non soccombiamo alle forze del male."),
                            array('','',"Hai santificato nel battesimo di sangue i piccoli Innocenti,"),
                            array('-','',"purificaci da ogni iniquità."),
                            array('','',"Hai mandato davanti a te i santi Innocenti come primizie del tuo regno,"),
                            array('-','',"non permettere che veniamo esclusi dal convito della tua gloria."),
                            array('','',"Nella tua infanzia hai conosciuto la persecuzione e l'esilio,"),
                            array('-','',"difendi i fanciulli, proteggi gli esuli, libera gli oppressi.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Dio ha mandato il suo Figlio, nato da donna, nato sotto la legge per riscattare coloro che erano sotto la legge. Illuminati da questa fede, rivolgiamo al Padre la nostra preghiera:"),
                            array('ris','I',"La grazia del tuo Figlio sia sempre con noi, Signore.")
                        ),
                        array(
                            array('','',"Risveglia in tutti i cristiani la fede del tuo Figlio fatto uomo,"),
                            array('-','',"perché vivano in perenne rendimento di grazie."),
                            array('','',"Ravviva la speranza dei poveri, dei malati, degli anziani,"),
                            array('-','',"da' conforto ai sofferenti, fiducia ai disperati."),
                            array('','',"guarda con bontà i nostri fratelli che sono in carcere,"),
                            array('-','',"proteggi gli esuli, gli emarginati e gli oppressi."),
                            array('','',"Tu che nel Natale del tuo Figlio hai fatto risuonare il canto degli angeli,"),
                            array('-','',"fa' che i defunti si uniscano a loro per celebrare in eterno la tua gloria.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1229') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Dio nella sua misericordia ci ha mandato il Principe della pace. Uniamoci al festoso annunzio di Betlemme:"),
                            array('ris','I',"Pace agli uomini, che Dio ama.")
                        ),
                        array(
                            array('','',"Padre santo, accogli la nostra lode del mattino,"),
                            array('-','',"benedici la Chiesa, unita nella celebrazione del tuo amore."),
                            array('','',"Dio onnipotente, che fin dagli inizi hai promesso il Cristo Salvatore,"),
                            array('-','',"fa' risplendere a tutti gli uomini la luce del Vangelo."),
                            array('','',"Per la gloria del tuo Figlio, atteso dai patriarchi e dai profeti, desiderato da tutte le genti,"),
                            array('-','',"salva il popolo dell'antica alleanza."),
                            array('','',"Per la gloria di Cristo, predicato dagli apostoli e testimoniato dai martiri,"),
                            array('-','',"irradia sul mondo la luce del tuo Figlio.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Raccolti per la lode della sera, invochiamo Dio Padre, che ha mandato il suo unico Figlio a portare il lieto annunzio ai poveri:"),
                            array('ris','I',"Padre misericordioso, abbi pietà di noi.")
                        ),
                        array(
                            array('','',"Noi ti ringraziamo per averci dato in dono il tuo Figlio,"),
                            array('-','',"fa' risplendere sul mondo la gioia della sua nascita."),
                            array('','',"Tu che hai inviato il tuo Figlio a predicare a tutti il tempo della misericordia,"),
                            array('-','',"dona libertà e pace al mondo intero."),
                            array('','',"Tu che hai guidato i sapienti a rendere omaggio al tuo Verbo fatto uomo,"),
                            array('-','',"accogli l'umile espressione della nostra fede."),
                            array('','',"Tu che chiami gli uomini dalle tenebre alla luce,"),
                            array('-','',"fa' che diventiamo generosi testimoni del Vangelo."),
                            array('','',"Tu che nel Cristo hai fatto risplendere la luce che illumina le genti,"),
                            array('-','',"rivela ai nostri fratelli defunti la gloria del tuo volto.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1230') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Dio Padre ha posto nel Cristo il principio dell'umanità nuova. Diciamo con fede:"),
                            array('ris','I',"Cristo, Figlio di Dio e fratello nostro, ascoltaci.")
                        ),
                        array(
                            array('','',"Tu che sei da principio presso il Padre e ti sei fatto uomo nella pienezza dei tempi,"),
                            array('-','',"donaci la vera carità fraterna verso tutti."),
                            array('','',"Ti sei fatto povero per arricchirci con la tua povertà e ti sei umiliato per renderci partecipi della tua grandezza,"),
                            array('-','',"fa' che camminiamo senza compromessi sulla via del Vangelo."),
                            array('','',"Hai illuminato quanti erano nelle tenebre e nell'ombra di morte,"),
                            array('-','',"infondi in noi il tuo Spirito di verità e di pace."),
                            array('','',"Donaci un cuore nuovo per accogliere la tua parola,"),
                            array('-','',"fa' che confermiamo con le opere la fede che professiamo.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Innalziamo la nostra preghiera a Cristo, pastore d'Israele, sorto da Betlemme per guidare il suo popolo sulla via della salvezza:"),
                            array('ris','I',"Il tuo amore sia sempre con noi, Signore.")
                        ),
                        array(
                            array('','',"Salvatore aspettato dalle genti, diffondi la luce del Vangelo nelle regioni che ancora non conoscono la tua parola,"),
                            array('-','',"attira alla tua verità tutti gli uomini."),
                            array('','',"Signore, estendi la tua Chiesa sino ai confini della terra,"),
                            array('-','',"perché tutta l'umanità formi un'unica famiglia animata dall'unico Spirito."),
                            array('','',"Re dei re, illumina e guida i legislatori, i magistrati e i governanti,"),
                            array('-','',"perché promuovano la giustizia, la libertà e la pace."),
                            array('','',"Dominatore onnipotente, forza dei deboli, sostienici nella prova, rialzaci dalle cadute, aiutaci nei pericoli,"),
                            array('-','',"rianima gli sfiduciati e i delusi, conforta i perseguitati e gli oppressi."),
                            array('','',"Consolatore degli afflitti, raccogli l'ultimo anelito dei morenti,"),
                            array('-','',"guidali alle sorgenti dell'acqua viva, che li disseti per sempre.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='1231') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"L'amore di Dio Padre si è manifestato a tutti gli uomini nel Cristo nostro Signore. Rivolgiamo a lui la nostra preghiera umile e fiduciosa:"),
                            array('ris','I',"Figlio del Dio vivente, abbi pietà di noi.")
                        ),
                        array(
                            array('','',"Cristo, generato dal Padre prima di tutti i secoli, che tutto sostieni con la potenza della tua parola,"),
                            array('-','',"illumina questo giorno con la luce del tuo Vangelo."),
                            array('','',"Figlio di Dio, nato nella pienezza dei tempi per liberare gli uomini e il mondo,"),
                            array('-','',"concedi a tutti il dono della vera libertà."),
                            array('','',"Figlio di Dio, nato a Betlemme nell'umiltà del presepio,"),
                            array('-','',"fa' che nella tua Chiesa risplenda sempre la povertà evangelica."),
                            array('','',"Cristo, Uomo-Dio, Signore e figlio di Davide, che hai dato compimento alle parole dei profeti,"),
                            array('-','',"fa' che il popolo d'Israele riconosca in te il Messia e Salvatore.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0101') {

                if ($this->actual['ora']=='ves1') {

                    $this->testo=array(
                        array(
                            array('','',"Invochiamo il Cristo, nostra pace, che è venuto a unire in un solo popolo gli uomini di ogni lingua e nazione:"),
                            array('ris','I',"Dona a tutti la tua pace, Signore.")
                        ),
                        array(
                            array('','',"Tu che venendo tra noi hai rivelato l'amore del Padre,"),
                            array('-','',"fa' che lo ringraziamo sempre per i suoi benefici."),
                            array('','',"Tu che hai voluto piena di grazia Maria, tua Madre,"),
                            array('-','',"effondi su tutti gli uomini l'abbondanza dei tuoi doni."),
                            array('','',"Hai portato al mondo il lieto annunzio della salvezza,"),
                            array('-','',"moltiplica gli araldi e i discepoli della tua parola."),
                            array('','',"Hai voluto nascere da Maria Vergine, come nostro fratello,"),
                            array('-','',"insegna a tutti gli uomini la vera fraternità."),
                            array('','',"Sole di giustizia, apparso all'orizzonte dell'umanità,"),
                            array('-','',"risplendi ai nostri fratelli defunti nella beatitudine eterna.")
                        )
                    );
                }

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti nella liturgia di lode, preghiamo il Cristo, nato da Maria per opera dello Spirito Santo:"),
                            array('ris','I',"Figlio di Maria Vergine, abbi pietà di noi.")
                        ),
                        array(
                            array('','',"Consigliere mirabile, Principe della pace,"),
                            array('-','',"fa' che il mondo intero conosca un'era di giustizia e di pace."),
                            array('','',"Signore e Dio nostro, che ci hai fatto dono della tua amicizia,"),
                            array('-','',"fa' che corrispondiamo al tuo amore con la testimonianza della vita."),
                            array('','',"Figlio di Dio, che, nascendo da Maria Vergine, ti sei fatto simile a noi,"),
                            array('-','',"fa' che noi diventiamo simili a te."),
                            array('','',"Tu che hai voluto farti nostro concittadino nella città terrena,"),
                            array('-','',"accoglici come tuoi concittadini nella città celeste.")
                        )
                    );
                }

                elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Adoriamo Gesù Cristo, Dio con noi, nato dalla Vergine Maria e invochiamolo con fiducia:"),
                            array('ris','I',"Figlio di Maria Vergine, ascolta la nostra preghiera.")
                        ),
                        array(
                            array('','',"Tu che hai dato a Maria la gioia ineffabile della maternità,"),
                            array('-','',"concedi alla tua Chiesa di rallegrarsi sempre dei suoi figli."),
                            array('','',"Re della pace, che sei venuto a instaurare il tuo regno di giustizia e di amore,"),
                            array('-','',"fa' che diventiamo operatori instancabili di fraternità e di pace."),
                            array('','',"Sei venuto a formare di tutti gli uomini il tuo popolo santo,"),
                            array('-','',"fa' di tutte le nazioni una sola grande famiglia, concorde e operosa nella giustizia e nella pace."),
                            array('','',"Tu che con la tua nascita hai benedetto e santificato la famiglia,"),
                            array('-','',"fa' che ogni focolare domestico viva nell'unione e nella pace."),
                            array('','',"Tu che sei voluto nascere nel tempo,"),
                            array('-','',"concedi ai defunti di rinascere al giorno dell'eternità.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0102') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Rivolgiamo la nostra preghiera a Cristo, uomo celeste e nuovo Adamo, divenuto per noi spirito datore di vita:"),
                            array('ris','I',"Salva il tuo popolo, Signore.")
                        ),
                        array(
                            array('','',"Cristo, sole di giustizia, che hai portato a compimento l'antica alleanza,"),
                            array('-','',"fa' risplendere su di noi la tua luce."),
                            array('','',"Cristo, osannato dagli angeli, annunziato dai pastori, accolto con gioia da Anna e dal santo vecchio Simeone,"),
                            array('-','',"fa' che il popolo ebraico si apra alla luce del Vangelo."),
                            array('','',"Cristo, che hai fatto risuonare sul mondo l'inno angelico di gloria e di pace,"),
                            array('-','',"fa' che la tua pace si diffonda su tutta la terra."),
                            array('','',"Cristo, che hai fatto di noi un'umanità nuova,"),
                            array('-','',"riscatta coloro che sono oppressi dalla malattia e dalla miseria.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Dio ha parlato molte volte e in diversi modi ai nostri padri, e da ultimo si è rivelato a noi per mezzo del Figlio suo. Preghiamo con fede la sua misericordia:"),
                            array('ris','I',"Signore, pietà.")
                        ),
                        array(
                            array('','',"Ti preghiamo per la santa Chiesa:"),
                            array('-','',"tutti i suoi figli confessino con vera fede il nome del Salvatore."),
                            array('','',"Ti preghiamo per i missionari e tutti gli operatori del Vangelo:"),
                            array('-','',"annunzino con fiducia a tutti gli uomini il nome del Salvatore."),
                            array('','',"Ti preghiamo per i malati:"),
                            array('-','',"ottengano la salute invocando con fede il nome del Salvatore."),
                            array('','',"Ti preghiamo per i cristiani perseguitati:"),
                            array('-','',"sostengano pazientemente la prova per il nome del Salvatore."),
                            array('','',"Ti preghiamo per coloro che in un momento di disperazione si sono tolti la vita,"),
                            array('-','',"la tua misericordia li accolga nel nome del Salvatore.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0103') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Riuniti nella lode del mattino, invochiamo con fede il Figlio di Dio, fatto uomo per rinnovare l'umanità:"),
                            array('ris','I',"Resta con noi, Signore.")
                        ),
                        array(
                            array('','',"Gesù, figlio del Dio vivente, irradiazione del Padre, luce eterna, re della gloria, sole di giustizia, figlio della Vergine Maria,"),
                            array('-','',"illumina questo giorno con la luce della tua venuta."),
                            array('','',"Gesù, Consigliere ammirabile, Dio potente, Padre per sempre, Principe della pace,"),
                            array('-','',"mostraci la via della salvezza con l'esempio della tua santa umanità."),
                            array('','',"Gesù onnipotente, paziente, obbediente, mite e umile di cuore,"),
                            array('-','',"rivela a tutti la forza del tuo amore."),
                            array('','',"Gesù, padre dei poveri, gloria dei tuoi fedeli, pastore buono, luce vera, sapienza infinita, via e vita nostra,"),
                            array('-','',"dona alla tua Chiesa lo spirito di povertà evangelica.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"In fraterna esultanza acclamiamo Cristo, che è venuto a formare il nuovo popolo di Dio:"),
                            array('ris','I',"La tua nascita, Signore, allieti il mondo intero.")
                        ),
                        array(
                            array('','',"Cristo, fondatore e capo della santa Chiesa,"),
                            array('-','',"fa' che il tuo popolo cresca e si edifichi nella carità."),
                            array('','',"Cristo, vero Dio e vero uomo,"),
                            array('-','',"donaci di partecipare alla tua vita divina."),
                            array('','',"Mediatore fra Dio e gli uomini,"),
                            array('-','',"fa' che i ministri della Chiesa cooperino efficacemente al tuo disegno di salvezza."),
                            array('','',"Cristo, che hai inaugurato per l'umanità una nuova era,"),
                            array('-','',"fa' che tutti i popoli godano i benefici della tua redenzione."),
                            array('','',"Tu che nascendo hai spezzato le catene della morte,"),
                            array('-','',"libera da ogni vincolo di colpa i nostri fratelli defunti.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0104') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Gloria e onore al Cristo, Verbo di Dio, apparso nella nostra carne mortale, contemplato dagli angeli, annunziato alle genti. Rendiamogli l'omaggio del nostro culto:"),
                            array('ris','I',"Ti adoriamo, o Figlio unigenito di Dio.")
                        ),
                        array(
                            array('','',"Liberatore del genere umano, nato da Maria per rinnovare il mondo,"),
                            array('-','',"per intercessione della Vergine tua Madre, custodisci e rigenera in noi il dono della vita nuova."),
                            array('','',"Sole divino, che irradi sulla terra la luce dell'eterna sapienza,"),
                            array('-','',"illumina questo giorno e tutta la nostra vita."),
                            array('','',"Figlio di Dio, che hai rivelato agli uomini l'amore del Padre,"),
                            array('-','',"fa' che i nostri fratelli possano vedere nella nostra carità un segno della tua presenza."),
                            array('','',"Amico e fratello nostro, che hai voluto abitare con noi,"),
                            array('-','',"rendici degni della tua amicizia.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Il Cristo ha fatto dono della sua vita per formare un popolo nuovo, operatore di giustizia e di pace. Uniti nella preghiera della sera diciamo insieme:"),
                            array('ris','I',"Ascoltaci, Signore.")
                        ),
                        array(
                            array('','',"Ti preghiamo per la santa Chiesa,"),
                            array('-','',"fa' che tutti i suoi figli rinascano alla vita nuova."),
                            array('','',"Ti preghiamo per i poveri, i profughi, i prigionieri,"),
                            array('-','',"fa' che si incontrino con te, mediante la nostra carità fraterna."),
                            array('','',"Ti preghiamo per noi e per le nostre famiglie,"),
                            array('-','',"fa' che conserviamo il dono della fede."),
                            array('','',"Ti preghiamo per i nostri fratelli defunti,"),
                            array('-','',"fa' che vedano la gloria del tuo volto.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0105') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Lodiamo il Cristo, costituito dal Padre per noi sapienza, giustizia e redenzione. Tutta l'umanità lo acclami e lo invochi:"),
                            array('ris','I',"La tua venuta ci salvi, Signore.")
                        ),
                        array(
                            array('','',"Re dell'universo, che i pastori videro nella povertà del presepio,"),
                            array('-','',"fa' che imitiamo la tua vita povera e umile."),
                            array('','',"Signore del cielo, disceso in terra dal tuo trono regale,"),
                            array('-','',"fa' che impariamo a riconoscerti e onorarti nei fratelli più umili ed emarginati."),
                            array('','',"O Cristo, luce eterna, modello di ogni santità e giustizia,"),
                            array('-','',"fa' che i tuoi fedeli non si lascino corrompere dalla cupidigia dei beni terreni."),
                            array('','',"Sposo divino della Chiesa,"),
                            array('-','',"sostieni la tua Sposa con la forza invincibile del tuo amore.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0106') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Adoriamo il Salvatore nostro che svelando la sua gloria ai pagani ha manifestato il mistero nascosto nei secoli. Invochiamolo:"),
                            array('ris','I',"Cristo, luce del Padre, illumina il mondo.")
                        ),
                        array(
                            array('','',"O Cristo, che ti sei manifestato nella carne,"),
                            array('-','',"santificaci per virtù della tua parola attraverso la fede e la preghiera."),
                            array('','',"O Cristo, che sei stato giustificato nello Spirito,"),
                            array('-','',"libera la nostra vita da ogni spirito di male e di errore."),
                            array('','',"O Cristo, che apparisti agli angeli,"),
                            array('-','',"fa' che già qui in terra gustiamo le gioie celesti."),
                            array('','',"O Cristo, che fosti annunziato ai pagani,"),
                            array('-','',"apri i cuori degli uomini per la grazia dello Spirito Santo."),
                            array('','',"O Cristo, che fosti creduto nel mondo,"),
                            array('-','',"rinnova la fede di tutti i credenti."),
                            array('','',"O Cristo, che fosti assunto nella gloria,"),
                            array('-','',"accendi in noi il desiderio del tuo regno.")
                        )
                    );
                }

                elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Celebriamo con gioia il nostro Salvatore, adorato dai magi, e invochiamo la sua misericordia:"),
                            array('ris','I',"Salva i tuoi fedeli, Signore.")
                        ),
                        array(
                            array('','',"Re delle genti, che hai voluto i magi a Betlemme, come primizia dei popoli chiamati alla fede,"),
                            array('-','',"donaci lo spirito di adorazione e di servizio."),
                            array('','',"Re della gloria, che governi con giustizia il tuo popolo,"),
                            array('-','',"concedi a tutti gli uomini un'era di fraternità e di pace."),
                            array('','',"Re eterno, che estendi il tuo dominio su tutte le generazioni,"),
                            array('-','',"ristora il nostro spirito con l'acqua viva della tua parola."),
                            array('','',"Re di giustizia, che ascolti e liberi il misero che non trova aiuto,"),
                            array('-','',"intervieni con la tua potenza in favore dei poveri e degli indifesi."),
                            array('','',"Signore, il cui nome è benedetto nei secoli,"),
                            array('-','',"mostra ai nostri fratelli defunti le meraviglie del tuo amore.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0107') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"I confini della terra hanno veduto nel Cristo la salvezza del nostro Dio. Uniti nella lode del mattino, acclamiamo il Redentore:"),
                            array('ris','I',"Gloria a te, o Cristo.")
                        ),
                        array(
                            array('','',"Redentore di tutti gli uomini, che hai abbattuto il muro di separazione fra i giudei e i pagani,"),
                            array('-','',"fa' che nel mondo siano eliminate le discriminazioni che offendono la dignità umana."),
                            array('','',"Cristo, che con la tua incarnazione hai stabilito la tua dimora fra di noi,"),
                            array('-','',"insegnaci a riconoscere nella Chiesa e in ogni uomo la tua presenza."),
                            array('','',"Cristo, che ci hai rivelato pienamente il mistero di Dio,"),
                            array('-','',"fa' che rispondiamo con la coerenza della vita al dono della tua parola."),
                            array('','',"Figlio di Dio, principio e fondamento della creazione nuova,"),
                            array('-','',"rinnova in noi lo spirito, le parole e le opere.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Sia benedetto Cristo, che con la sua visita ha illuminato coloro che erano immersi nelle tenebre e nell'ombra di morte. Tutta la Chiesa lo acclama e lo invoca:"),
                            array('ris','I',"Irradia sul mondo la tua luce, o Cristo.")
                        ),
                        array(
                            array('','',"O Cristo, con la tua venuta hai dato i natali alla tua Chiesa,"),
                            array('-','',"fa' che cresca e si edifichi continuamente nella carità."),
                            array('','',"Tu reggi nella tua mano il cielo e la terra,"),
                            array('-','',"fa' che le nazioni riconoscano il tuo potere regale."),
                            array('','',"Nell'incarnazione sei divenuto sacerdote eterno,"),
                            array('-','',"fa' che i tuoi sacerdoti siano degni ministri della redenzione."),
                            array('','',"Nel grembo della Vergine Maria hai unito in mistiche nozze l'umanità e la divinità,"),
                            array('-','',"benedici le vergini a te consacrate."),
                            array('','',"Tu che assumendo la nostra natura mortale hai vinto la morte,"),
                            array('-','',"fa' che i defunti passino dalla morte alla vita senza fine.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0108') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo è venuto perché la creazione sia liberata dalla corruzione del peccato e dalla morte e raggiunga la libertà dei figli di Dio. Sorretti da questa fede, invochiamo il suo nome:"),
                            array('ris','I',"Per la tua nascita, Signore, liberaci da ogni male.")
                        ),
                        array(
                            array('','',"Tu che esisti da sempre e ti sei fatto uomo nel tempo,"),
                            array('-','',"per il mistero della tua nascita rinnova la nostra umanità."),
                            array('','',"Tu che immutabile nella tua divinità, hai voluto condividere le vicende della nostra storia,"),
                            array('-','',"fa' che partecipiamo sempre più alla tua vita divina."),
                            array('','',"Tu che sei la luce delle genti e il maestro della santità,"),
                            array('-','',"illumina i nostri passi con la luce della tua parola."),
                            array('','',"Verbo di Dio, che ti sei fatto uomo nel grembo di Maria Vergine,"),
                            array('-','',"degnati di abitare, mediante la fede e la grazia, nelle nostre anime.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti nella preghiera di lode con tutti i nostri fratelli sparsi nel mondo, invochiamo il Signore grande e misericordioso:"),
                            array('ris','I',"Padre santo, ascolta la voce dei tuoi figli.")
                        ),
                        array(
                            array('','',"Soccorri coloro che ancora non ti conoscono e ti cercano come un Dio ignoto nei riflessi della creazione,"),
                            array('-','',"apri le loro menti alla luce del Vangelo."),
                            array('','',"Guarda coloro che ti adorano come unico Dio e ti attendono come giudice nell'ultimo giorno,"),
                            array('-','',"fa' che conoscano insieme con noi la dolcezza del tuo amore."),
                            array('','',"Ricordati di tutti coloro ai quali dai vita, luce ed ogni altro bene,"),
                            array('-','',"fa' che non si alienino mai da te."),
                            array('','',"Custodisci con la protezione dei tuoi angeli coloro che viaggiano,"),
                            array('-','',"preservali da ogni incidente e da morte improvvisa."),
                            array('','',"Accogli i nostri fratelli defunti, che hai illuminato con la luce della verità,"),
                            array('-','',"dona loro la visione del tuo volto il Paradiso.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0109') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Tutta l'umanità adori e acclami il Verbo eterno del Padre, fatto uomo per pienezza dei tempi:"),
                            array('ris','I',"Tu sei benedetto, Signore.")
                        ),
                        array(
                            array('','',"Figlio del Dio vivente, creatore del mondo, che sei venuto in terra per salvarci,"),
                            array('-','',"rendici testimoni del tuo Vangelo."),
                            array('','',"Sole di giustizia, che risplendi dal seno del Padre e irradii sul mondo la tua luce,"),
                            array('-','',"illumina quanti sono immersi nelle tenebre e nell'ombra della morte."),
                            array('','',"Re della gloria, nato a Betlemme e posto in una mangiatoia,"),
                            array('-','',"donaci di imitare la bontà dei fanciulli."),
                            array('','',"Cristo, pane di vita eterna,"),
                            array('-','',"sazia la fame del nostro spirito con il sacramento del tuo Corpo e del tuo Sangue.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Lodiamo il Verbo di Dio, che ci ha tratti dall'abisso dei nostri peccati e con grande fiducia preghiamo:"),
                            array('ris','I',"Mostraci, o Signore, la tua misericordia.")
                        ),
                        array(
                            array('','',"Sacerdote eterno, che entrando nel mondo hai instaurato la perfetta liturgia di lode,"),
                            array('-','',"fa' che tutti gli uomini, mediante la Chiesa, siano partecipi del tuo sacerdozio regale."),
                            array('','',"Medico dei corpi e delle anime, che sei venuto a guarire le ferite dell'umanità,"),
                            array('-','',"dona salute e vigore ai nostri fratelli infermi."),
                            array('','',"Tu che nella tua nascita fosti causa di universale letizia,"),
                            array('-','',"soccorri i miseri e i peccatori e dona a tutti il conforto della tua amicizia."),
                            array('','',"Re potente, che hai spezzato le catene della schiavitù antica,"),
                            array('-','',"libera coloro che si sentono schiavi nello spirito e nel corpo."),
                            array('','',"Tu che sei la via e la porta del cielo,"),
                            array('-','',"accogli i defunti nella beatitudine eterna.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0110') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Celebriamo la grandezza di Dio, che ha consolato il suo popolo con la nascita del suo Figlio e proclamiamo la sua lode:"),
                            array('ris','I',"Gloria a Dio nell'alto dei cieli.")
                        ),
                        array(
                            array('','',"Con gli angeli, i patriarchi e i profeti,"),
                            array('-','',"noi ti lodiamo, Signore."),
                            array('','',"Con la Vergine Maria, Madre di Dio,"),
                            array('-','',"la nostra anima ti magnifica, Signore."),
                            array('','',"Con gli apostoli e gli evangelisti,"),
                            array('-','',"noi ti rendiamo grazie, Signore."),
                            array('','',"Con tutti i santi martiri di Cristo,"),
                            array('-','',"offriamo a te i nostri corpi in sacrificio vivente, Signore."),
                            array('','',"Con tutti i santi testimoni della Chiesa,"),
                            array('-','',"noi ti consacriamo la nostra vita, Signore.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti a tutti i nostri fratelli di fede, invochiamo Dio nostro Padre:"),
                            array('ris','I',"Mostraci, Signore, la tua misericordia.")
                        ),
                        array(
                            array('','',"Padre santo, ti preghiamo per quelli che ti conoscono con la sola luce della ragione,"),
                            array('-','',"fa' che vedano anche la luce sfolgorante del tuo Vangelo."),
                            array('','',"Guarda con bontà tutti i non cristiani, che si impegnano per liberare l'uomo dalla sofferenza e dal bisogno,"),
                            array('-','',"fa' che trovino in Cristo la via, la verità e la vita."),
                            array('','',"Aiuta tutti coloro che professano con sincerità e rettitudine la loro religione,"),
                            array('-','',"perché giungano alla luce ammirabile del tuo Cristo."),
                            array('','',"Purifica da ogni egoismo i cuori dei tuoi fedeli,"),
                            array('-','',"perché alla luce della fede ti riconoscano in tutti i fratelli."),
                            array('','',"Mostra il tuo amore misericordioso ai nostri defunti,"),
                            array('-','',"rivestili dello splendore della tua gloria.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0111') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Onore e gloria a Cristo, che è venuto a creare l'uomo nuovo. A lui s'innalzi la nostra preghiera:"),
                            array('ris','I',"Per il mistero della tua nascita rinnovaci, Signore.")
                        ),
                        array(
                            array('','',"Tu che, assumendo la nostra umanità, sei divenuto per noi sacramento del Padre,"),
                            array('-','',"fa' che ti riconosciamo nel mistero della tua parola e del tuo Corpo."),
                            array('','',"Creatore del genere umano, che ti sei fatto uomo come noi, nascendo dalla Vergine,"),
                            array('-','',"per sua intercessione fa' che comunichiamo alla tua vita divina."),
                            array('','',"Redentore nostro, che sei disceso sulla terra come la biblica rugiada,"),
                            array('-','',"disseta le nostre anime con il tuo Santo Spirito."),
                            array('','',"Dona ai tuoi fedeli, che celebrano il mistero della tua nascita,"),
                            array('-','',"di giungere alla perfezione della vita cristiana.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Preghiamo Dio nostro Padre, che ha costituito il Cristo luce delle genti:"),
                            array('ris','I',"Ascolta, Padre, la preghiera del tuo popolo.")
                        ),
                        array(
                            array('','',"Estendi in ogni parte della terra la tua Chiesa,"),
                            array('-','',"perché sia rivelata a tutti gli uomini la gloria del tuo Figlio."),
                            array('','',"Eterno Padre, che hai guidato i santi magi alla presenza del tuo Figlio,"),
                            array('-','',"mostra il tuo Salvatore e quanti cercano la verità."),
                            array('','',"Chiama tutti i popoli alla luce ammirabile del tuo regno,"),
                            array('-','',"perché ogni ginocchio si pieghi nel nome di Gesù."),
                            array('','',"Manda operai nella tua messe,"),
                            array('-','',"perché evangelizzino i poveri e annunzino il tempo della grazia."),
                            array('','',"Dona ai defunti la pienezza della redenzione,"),
                            array('-','',"perché condividano il trionfo del Cristo tuo Figlio.")
                        )
                    );
                }
            }

            elseif (substr($this->actual['today'],4,4)=='0112') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"A Cristo, immagine del Padre, rivolgiamo la nostra lode e la nostra preghiera:"),
                            array('ris','I',"Cristo, Figlio di Dio, esaudisci il tuo popolo.")
                        ),
                        array(
                            array('','',"Figlio di Dio, che ci hai rivelato l'amore del Padre,"),
                            array('-','',"fa' che gli uomini ti riconoscano nella nostra carità fraterna."),
                            array('','',"Con i tuoi miracoli ti sei manifestato Signore della vita,"),
                            array('-','',"donaci la pienezza della tua vita immortale."),
                            array('','',"Fa' che portiamo sempre e ovunque in noi la tua morte,"),
                            array('-','',"perché nel nostro corpo mortale si manifesti la tua vita divina."),
                            array('','',"Illumina con il tuo Spirito il nostro cuore,"),
                            array('-','',"fa' risplendere in noi la gloria che rifulge sul tuo volto.")
                        )
                    );
                }
            }

            //////////////////////////////////////////////////

            //Santa Famiglia (il codice dell'evento è SAF; SFA è il comune di San Francesco)
            if ($this->actual['evCode']=='SAF') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Innalziamo la nostra supplica al Verbo eterno, che ha voluto essere figlio di una famiglia umana:"),
                            array('ris','I',"Gesù, umile ed obbediente, santifica la tua Chiesa.")
                        ),
                        array(
                            array('','',"Verbo eterno del Padre, docile e obbediente a Maria e a Giuseppe,"),
                            array('-','',"insegnaci l'umiltà e la pazienza."),
                            array('','',"Maestro divino, donaci di ascoltare la tua parola e di custodirla con cuore puro e generoso"),
                            array('-','',"come Maria tua madre l'accolse e la meditò nel suo cuore."),
                            array('','',"Cristo, artefice dell'universo, che fosti chiamato figlio del falegname,"),
                            array('-','',"fa' che affrontiamo con generoso impegno il nostro lavoro quotidiano."),
                            array('','',"Gesù, che nella famiglia di Nazareth sei cresciuto in sapienza, età e grazia davanti a Dio e davanti agli uomini,"),
                            array('-','',"donaci di progredire nella fede e nella carità.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti nella liturgia di lode, adoriamo e acclamiamo il Figlio di Dio, che ha voluto divenire membro di una famiglia umana:"),
                            array('ris','I',"O Cristo, tu sei il modello e il salvatore di tutti gli uomini.")
                        ),
                        array(
                            array('','',"Per il mistero della tua sottomissione a Maria e a Giuseppe,"),
                            array('-','',"insegnaci l'obbedienza e il rispetto verso coloro che hai posto a capo della comunità."),
                            array('','',"Tu che hai amato con affetto filiale i tuoi genitori, Maria e Giuseppe,"),
                            array('-','',"custodisci le nostre famiglie nel vincolo della carità e della pace."),
                            array('','',"Fosti ardente di zelo per le cose del Padre tuo,"),
                            array('-','',"fa' che in ogni famiglia Dio sia amato e onorato."),
                            array('','',"Dopo tre giorni di ansiosa ricerca, fosti ritrovato nel tempio,"),
                            array('-','',"donaci la tua sapienza nel cercare soprattutto il regno di Dio."),
                            array('','',"Hai unito a te Maria e Giuseppe nella gloria del cielo,"),
                            array('-','',"accogli tutti i defunti nella famiglia dei beati.")
                        )
                    );
                }
            }
            
            elseif ($this->actual['evCode']=='2DN') {

                if ($this->actual['ora']=='ves1') {

                    $this->testo=array(
                        array(
                            array('','',"Adoriamo Cristo, che umiliò se stesso, assumendo la condizione di servo, e divenne simile a noi in tutto, fuorché nel peccato. A lui s'innalzi la nostra preghiera:"),
                            array('ris','I',"Per il mistero della tua nascita, salvaci o Signore.")
                        ),
                        array(
                            array('','',"Entrando nella storia, hai aperto la nuova era predetta dai profeti,"),
                            array('-','',"fa' che la tua Chiesa rifiorisca in giovinezza perenne."),
                            array('','',"Hai voluto rivestire la nostra condizione mortale,"),
                            array('-','',"sii luce ai ciechi, vigore ai deboli, conforto ai sofferenti."),
                            array('','',"Sei nato nell'umiltà del presepe,"),
                            array('-','',"guarda ai poveri del mondo e dona a tutti prosperità e pace."),
                            array('','',"Hai portato agli uomini il lieto annunzio della salvezza,"),
                            array('-','',"fa' risplendere agli occhi dei morenti la speranza della nuova nascita nel tuo regno."),
                            array('','',"Sei disceso sulla terra per farci salire al cielo,"),
                            array('-','',"riunisci con te nella gloria i nostri fratelli defunti.")
                        )
                    );
                }

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Onore e gloria al Verbo di Dio, Re dei secoli eterni, nato nel tempo per la nostra salvezza. Acclamiamo:"),
                            array('ris','I',"Gioisca la terra per la tua venuta, Signore.")
                        ),
                        array(
                            array('','',"Verbo eterno, che hai allietato la terra con la rugiada delle benedizioni celesti,"),
                            array('-','',"rallegra il nostro spirito con la grazia della tua visita."),
                            array('','',"Salvatore del mondo, che hai mostrato la fedeltà di Dio alle sua promesse,"),
                            array('-','',"donaci di custodire con lealtà gli impegni del Battesimo."),
                            array('','',"Tu che per mezzo degli angeli hai annunziato la pace agli uomini,"),
                            array('-','',"custodisci la nostra vita nella tua pace."),
                            array('','',"Sei la vera vite, che produce frutti di salvezza eterna,"),
                            array('-','',"donaci di rimanere uniti a te, come tralci vivi e fecondi.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"In fraterna esultanza celebriamo la nascita del Redentore e uniamo al canto degli angeli la nostra preghiera:"),
                            array('ris','I',"Il tuo Natale, Signore, porti al mondo la pace.")
                        ),
                        array(
                            array('','',"Tu che consoli la Chiesa con il mistero della tua nascita,"),
                            array('-','',"riempila dei tuoi doni e delle tue benedizioni."),
                            array('','',"Pastore e guida suprema delle nostre anime,"),
                            array('-','',"proteggi e illumina il papa e i vescovi, perché siano fedeli dispensatori della tua grazia."),
                            array('','',"Re eterno, che hai voluto sperimentare la brevità della vita umana,"),
                            array('-','',"donaci di entrare per sempre nella gioia del tuo regno."),
                            array('','',"Tu che nella pienezza dei tempi hai esaudito le attese dei patriarchi e dei profeti,"),
                            array('-','',"rivelati a coloro che attendono la venuta del Salvatore."),
                            array('','',"Tu che hai liberato l'umanità dal peccato e dalla morte,"),
                            array('-','',"concedi ai defunti libertà perfetta in Paradiso.")
                        )
                    );
                }
            }
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='Q') {

            if ($this->actual['weekDay']==0) {

                if ($this->actual['ora']=='ves1') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Gloria a Cristo, che si è fatto maestro, amico, modello dell'umanità. Pieni di fiducia invochiamo il suo nome:"),
                                array('ris','I',"Sii la vita del tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Cristo, che hai voluto essere simile a noi in tutto fuorché nel peccato, insegnaci a gioire con chi gioisce e a piangere con chi piange,"),
                                array('-','',"perché la nostra carità diventi sempre più concreta e generosa."),
                                array('','',"Donaci la grazia di riconoscerti nei poveri e nei sofferenti,"),
                                array('-','',"per saziare la tua fame negli affamati e la tua sete negli assetati."),
                                array('','',"Tu che hai risvegliato Lazzaro dal sonno della morte,"),
                                array('-','',"fa' che i peccatori passino da morte a vita mediante la preghiera e la penitenza."),
                                array('','',"Fa' che molti seguano la via della perfetta carità,"),
                                array('-','',"sull'esempio di Maria Vergine e dei tuoi santi."),
                                array('','',"Conduci i defunti alla risurrezione gloriosa,"),
                                array('-','',"perché si allietino in eterno nel tuo amore.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4) {

                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo la Provvidenza di Dio Padre, che ha cura di tutte le sue creature, e diciamo con umiltà e fiducia:"),
                                array('ris','I',"Salva, Signore, tutti i tuoi figli.")
                            ),
                            array(
                                array('','',"Datore di ogni bene e fonte di verità, riempi del tuo Spirito il nostro Papa ... e il collegio dei vescovi,"),
                                array('-','',"custodisci nella vera fede il popolo affidato al loro servizio pastorale."),
                                array('','',"Unisci nella carità coloro che mangiano lo stesso pane della vita,"),
                                array('-','',"perché la Chiesa, tuo mistico corpo, si edifichi nell'unità e nella pace."),
                                array('','',"Aiutaci con la tua grazia a spogliarci dell'uomo vecchio corrotto dalle passioni ingannatrici,"),
                                array('-','',"rivestici dell'uomo nuovo, creato secondo Dio nella vera giustizia e santità."),
                                array('','',"Fa' che i peccatori tornino alla casa del Padre, per i meriti del Cristo salvatore,"),
                                array('-','',"e partecipino ai benefici della tua redenzione."),
                                array('','',"Fa' che i nostri fratelli defunti ti lodino senza fine nella gloria del Paradiso,"),
                                array('-','',"dove anche noi un giorno speriamo di cantare le tue misericordie.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Benediciamo il nostro Redentore che ci ha meritato questo tempo di salvezza e preghiamo perché ci conceda il dono della conversione:"),
                                array('ris','I',"Crea in noi, Signore, uno spirito nuovo.")
                            ),
                            array(
                                array('','',"Cristo, vita nostra, che mediante il Battesimo ci hai sepolti con te nella morte, per renderci partecipi della tua risurrezione,"),
                                array('-','',"donaci di camminare oggi con te nella vita nuova."),
                                array('','',"Signore, che sei passato fra la gente, sanando e beneficando tutti,"),
                                array('-','',"concedi anche a noi di essere sempre pronti al servizio dei fratelli."),
                                array('','',"Fa' che ci impegniamo a costruire insieme un mondo più umano e più giusto,"),
                                array('-','',"nella costante ricerca del tuo regno."),
                                array('','',"Gesù, medico dei corpi e delle anime, guarisci le profonde ferite della nostra umanità,"),
                                array('-','',"perché possiamo godere pienamente dei doni della tua redenzione.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4) {

                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo Dio, nostro Padre, la cui misericordia è senza limiti, e invochiamo la grazia dello Spirito Santo per mezzo di Gesù Cristo, che è sempre vivo per intercedere a nostro favore:"),
                                array('ris','I',"Accendi in noi, o Padre, il fuoco del tuo amore.")
                            ),
                            array(
                                array('','',"Dio di bontà, fa' che questo nuovo giorno sia pieno di opere di carità fraterna,"),
                                array('-','',"e coloro che incontreremo, ricevano da noi un messaggio del tuo amore."),
                                array('','',"Tu che nel diluvio hai salvato Noè e la sua famiglia, mediante l'arca,"),
                                array('-','',"conduci alla salvezza i nostri catecumeni nell'acqua battesimale mediante la Chiesa."),
                                array('','',"Fa' che abbiamo fame non solo del cibo che sostenta il nostro corpo,"),
                                array('-','',"ma di ogni parola che esce dalla tua bocca."),
                                array('','',"Aiutaci a ricomporre nella carità i dissensi e le contese,"),
                                array('-','',"per godere il bene prezioso della tua pace.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Lode a Dio Padre, che per mezzo del suo Verbo, fatto uomo, ci ha rigenerati ad una vita incorruttibile. Animati da questa fede, diciamo umilmente:"),
                                array('ris','I',"Guarda benigno il tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Ascolta, Dio misericordioso, la preghiera che ti rivolgiamo per la tua famiglia sparsa su tutta la terra,"),
                                array('-','',"fa' che senta la fame della tua parola più che del cibo che nutre la vita corporale."),
                                array('','',"Insegnaci ad amare non solo i membri della nostra comunità, ma tutti gli uomini,"),
                                array('-','',"nello spirito del discorso della montagna."),
                                array('','',"Guarda i catecumeni che attendono il Battesimo,"),
                                array('-','',"fa' che diventino pietre vive e scelte della tua Chiesa."),
                                array('','',"Tu che mediante la predicazione di Giona hai convertito gli abitanti di Ninive,"),
                                array('-','',"trasforma il cuore dei peccatori con la misteriosa forza della tua parola."),
                                array('','',"Conforta i morenti con la speranza d'incontrare il volto mite e festoso del Salvatore,"),
                                array('-','',"e di godere la sua visione eterna in Paradiso.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4) {

                        $this->testo=array(
                            array(
                                array('','',"Il Cristo, nostro Capo e Maestro, è venuto per servire l'umanità e far del bene a tutti. Uniti nella lode della sera, chiediamo il suo aiuto:"),
                                array('ris','I',"Visita la tua famiglia, Signore.")
                            ),
                            array(
                                array('','',"Veglia sui vescovi e sui presbiteri, che hai reso partecipi della tua missione di Capo e Pastore,"),
                                array('-','',"fa' che conducano al Padre il popolo, che hai loro affidato."),
                                array('','',"Il tuo angelo accompagni coloro che viaggiano,"),
                                array('-','',"e li difenda da ogni pericolo."),
                                array('','',"Insegnaci a servire con umiltà e amore i fratelli,"),
                                array('-','',"imitando te che non sei venuto per essere servito, ma per servire."),
                                array('','',"Fa' che in ogni comunità il fratello aiuti il fratello,"),
                                array('-','',"per costituire, sotto il tuo sguardo, come una città inespugnabile."),
                                array('','',"Sii misericordioso verso tutti i defunti,"),
                                array('-','',"ammettili a godere la luce del tuo volto.")
                            )
                        );
                    }
                }
            }

            if ($this->actual['weekDay']==1) {

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Benedetto Gesù, nostro Salvatore, che con la sua morte ci ha aperto la strada della salvezza. Uniti nella preghiera di lode, invochiamo il suo nome:"),
                                array('ris','I',"Guidaci, Signore, nella via del tuo amore."),
                            ),
                            array(
                                array('','',"Dio misericordioso, che mediante il Battesimo ci hai fatto rinascere ad una vita nuova,"),
                                array('-','',"fa' che di giorno in giorno diveniamo sempre più conformi alla tua immagine."),
                                array('','',"Insegnaci a far sempre ciò che è vero, giusto e santo davanti a te,"),
                                array('-','',"e a cercare te in ogni parola e in ogni avvenimento."),
                                array('','',"Aiutaci a portare un messaggio di bontà e di gioia ai poveri e ai sofferenti,"),
                                array('-','',"per incontrare te presente nei nostri fratelli."),
                                array('','',"Perdonaci le colpe commesse contro l'unità della tua famiglia,"),
                                array('-','',"forma di tutti noi un cuore solo e un'anima sola.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4) {

                        $this->testo=array(
                            array(
                                array('','',"Benediciamo Dio Padre, che ci fa dono di questa giornata perché la dedichiamo alla sua lode e la santifichiamo con ogni genere di opere buone. Diciamo con fede:"),
                                array('ris','I',"Donaci la tua sapienza, Signore.")
                            ),
                            array(
                                array('','',"Dio grande e misericordioso, donaci lo spirito di orazione e di penitenza,"),
                                array('-','',"suscita in noi un vero amore per te e per il nostro prossimo."),
                                array('','',"Fa' che collaboriamo a edificare un mondo nuovo,"),
                                array('-','',"perché la giustizia e la pace di Cristo regnino su tutta la terra."),
                                array('','',"Rivelaci il valore autentico di tutte le realtà create,"),
                                array('-','',"perché le associamo al nostro cantico di lode."),
                                array('','',"Perdonaci, Signore, se non ti abbiamo riconosciuto nei poveri, negli infelici, negli emarginati,"),
                                array('-','',"e se abbiamo oltraggiato il tuo Figlio in questi nostri fratelli.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Innalziamo la nostra preghiera al Cristo, che ha salvato il suo popolo dalla schiavitù del peccato:"),
                                array('ris','I',"Gesù, figlio di Davide, abbi pietà di noi.")
                            ),
                            array(
                                array('','',"Cristo, che ti sei immolato per la tua Chiesa, purificandola mediante il lavacro dell'acqua nella parola di vita,"),
                                array('-','',"conservala sempre pura e santa per mezzo dell'orazione e della penitenza."),
                                array('','',"Maestro buono, fa' conoscere ai giovani la via che hai tracciata per ciascuno di loro,"),
                                array('-','',"perché, realizzando la loro vocazione, siano veramente felici."),
                                array('','',"Tu che hai avuto compassione per tutte le sofferenze umane, rianima la speranza dei malati e dona loro serenità e salute,"),
                                array('-','',"ma rendi anche noi solleciti nell'alleviare le loro sofferenze."),
                                array('','',"Ravviva in noi il ricordo e la stima della dignità che ci hai conferito nel Battesimo,"),
                                array('-','',"perché, morti al peccato, viviamo sempre per te."),
                                array('','',"Dona il riposo eterno ai nostri morti,"),
                                array('-','',"e fa' che un giorno possiamo ritrovarci insieme nella gloria del tuo regno.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4) {

                        $this->testo=array(
                            array(
                                array('','',"Dio nostro Padre ha promesso per bocca del suo Figlio di donarci tutto ciò che gli chiediamo uniti nel suo nome. Confortati da questa parola, innalziamo a lui la nostra preghiera comunitaria:"),
                                array('ris','I',"Ascolta la voce della tua Chiesa, Signore.")
                            ),
                            array(
                                array('','',"O Dio, che hai perfezionato per mezzo del tuo Cristo la legge data da Mosè sul monte Sinai,"),
                                array('-','',"fa' che tutti riconoscano la legge che tu hai scritto nel loro cuore e la custodiscano come un patto di alleanza."),
                                array('','',"Ispira alle guide del tuo popolo una profonda sollecitudine pastorale,"),
                                array('-','',"crea in tutta la comunità un vero desiderio d'intesa e di collaborazione."),
                                array('','',"Ritempra la mente e il cuore dei missionari del Vangelo,"),
                                array('-','',"suscita dovunque collaboratori e ausiliari della loro opera."),
                                array('','',"Fa' che i fanciulli crescano in età, sapienza e grazia davanti a te e davanti agli uomini,"),
                                array('-','',"e i giovani scoprano la tua carità nella purezza del loro amore e nell'impegno al servizio del prossimo."),
                                array('','',"Ricordati dei nostri fratelli che si sono addormentati nella fede,"),
                                array('-','',"rendili partecipi dell'eredità eterna.")
                            )
                        );
                    }
                }
            }

            if ($this->actual['weekDay']==2) {

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Benediciamo il Cristo, che si è donato a noi come pane disceso dal cielo e rivolgiamo a lui la nostra comune preghiera:"),
                                array('ris','I',"Cristo, pane vivo e farmaco d'immortalità, fortifica le nostre anime."),
                            ),
                            array(
                                array('','',"Signore, fa' che partecipiamo con fede al banchetto eucaristico,"),
                                array('-','',"per possedere in abbondanza i beni del mistero pasquale."),
                                array('','',"Donaci di accogliere con cuore libero e ardente la tua parola,"),
                                array('-','',"per portare frutto nella perseveranza."),
                                array('','',"Fa' che collaboriamo a costruire un mondo giusto e fraterno,"),
                                array('-','',"perché tutti gli uomini siano disponibili a ricevere l'annunzio di pace della tua Chiesa."),
                                array('','',"Abbiamo peccato, Signore, abbiamo molto peccato,"),
                                array('-','',"lava le nostre colpe nella tua misericordia senza limiti.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4) {

                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie a Dio Padre che, nel suo Verbo fatto uomo, ci ha donato il cibo della vita eterna. Illuminati da questa fede, preghiamo:"),
                                array('ris','I',"La tua parola, Padre, dimori abbondantemente in noi.")
                            ),
                            array(
                                array('','',"Fa' che viviamo la Quaresima nell'ascolto costante della tua parola,"),
                                array('-','',"per celebrare degnamente il Cristo nostra Pasqua."),
                                array('','',"Il tuo Spirito sia il nostro maestro,"),
                                array('-','',"Perché possiamo aiutare i dubbiosi e gli erranti a seguire la via della verità."),
                                array('','',"Donaci di penetrare più profondamente il mistero di Cristo,"),
                                array('-','',"e di esprimerlo più chiaramente nella vita."),
                                array('','',"Purifica e rinnova la tua Chiesa in questi giorni di grazia,"),
                                array('-','',"perché la sua testimonianza sia più coerente e incisiva.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Memori della parola del Salvatore, che ci ha raccomandato di vegliare e pregare per non cadere in tentazione, invochiamo con forza il suo nome:"),
                                array('ris','I',"Guarda la nostra miseria, Signore, e abbi pietà.")
                            ),
                            array(
                                array('','',"Cristo Gesù, che hai promesso di essere presente in mezzo ai tuoi fedeli, riuniti nel tuo nome,"),
                                array('-','',"donaci la grazia di pregare il Padre in unione con te nello Spirito."),
                                array('','',"Purifica da ogni macchia il volto della Chiesa tua sposa,"),
                                array('-','',"donale di camminare nella speranza con la potenza del tuo Spirito."),
                                array('','',"Tu che ami gli uomini, rendici disponibili all'aiuto fraterno secondo il tuo comandamento,"),
                                array('-','',"perché risplenda più viva ad ogni uomo la luce della salvezza."),
                                array('','',"O Re della pace, fa' che in tutto il mondo regni la tua pace,"),
                                array('-','',"e l'umanità intera sperimenti la gioia della tua presenza."),
                                array('','',"Apri le porte della beata eternità a tutti i defunti,"),
                                array('-','',"prepara un posto anche per noi nella gloria incorruttibile del tuo regno.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4) {

                        $this->testo=array(
                            array(
                                array('','',"Il Signore Gesù Cristo, esaltato sulla croce, attrae tutti a sé. S'innalzi a lui la nostra lode e la nostra preghiera:"),
                                array('ris','I',"Tutta la terra ti ami e ti adori, Signore.")
                            ),
                            array(
                                array('','',"Gesù, che dall'alto della croce irradi sul mondo la tua luce,"),
                                array('-','',"fa' che tutti gli uomini seguano te, via, verità e vita."),
                                array('','',"Dona l'acqua viva agli uomini assetati di giustizia,"),
                                array('-','',"perché non abbiano sete in eterno."),
                                array('','',"Illumina con il tuo Spirito gli umanisti, gli scienziati e gli artisti,"),
                                array('-','',"perché collaborino a rendere gli uomini più aperti alla luce del Vangelo."),
                                array('','',"Metti una salutare inquietudine in coloro che si sono allontanati da te per colpa propria o per gli scandali altrui,"),
                                array('-','',"perché ritornino a te e rimangano sempre nel tuo amore."),
                                array('','',"Apri ai nostri morti le braccia della tua misericordia,"),
                                array('-','',"perché si allietino con Maria e tutti i santi nella gioia del Paradiso.")
                            )
                        );
                    }
                }
            }

            if ($this->actual['weekDay']==3) {

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['evCode']=='CEN') {
                        
                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie a Dio Padre, che ci purifica e ci rinnova mediante la carità, effusa nei nostri cuori dallo Spirito, che abita in noi. Preghiamo con fede e diciamo:"),
                                array('ris','I',"Donaci, Padre, il tuo Santo Spirito."),
                            ),
                            array(
                                array('','',"Suscita in noi, o Padre, una vera fame e sete della tua sapienza,"),
                                array('-','',"perché ci nutriamo di ogni parola che esce dalla tua bocca."),
                                array('','',"Donaci di esercitare la carità fraterna non solo nelle grandi occasioni,"),
                                array('-','',"ma anche nelle umili e comuni circostanze della vita."),
                                array('','',"Insegna a noi a privarci del superfluo,"),
                                array('-','',"a beneficio dei nostri fratelli che sono nella necessità."),
                                array('','',"Fa' che portiamo sempre e ovunque nel nostro corpo la passione del tuo Figlio,"),
                                array('-','',"perché si manifesti in noi la sua vita immortale.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Il Cristo ci guida alla salvezza per fare di noi un'umanità nuova in un mondo pienamente rinnovato. Affascinati da questa meravigliosa vocazione preghiamo:"),
                                array('ris','I',"Signore, rinnova la nostra vita nel tuo Spirito."),
                            ),
                            array(
                                array('','',"Signore, che hai promesso cieli nuovi e terra nuova, rinnovaci profondamente,"),
                                array('-','',"perché possiamo unirci a te nella nuova Gerusalemme."),
                                array('','',"Donaci di collaborare con te per trasformare il mondo con il tuo amore,"),
                                array('-','',"perché la nostra città terrena progredisca nella giustizia, nella fraternità e nella pace."),
                                array('','',"Aiutaci a vincere ogni forma di pigrizia, di mollezza e di egoismo,"),
                                array('-','',"donaci il gusto del lavoro assiduo e serio per il premio celeste."),
                                array('','',"Liberaci dal male,"),
                                array('-','',"perché niente oscuri in noi il senso cristiano della vita.")
                            )
                        );
                    }

                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['evCode']=='CEN') {
                        
                        $this->testo=array(
                            array(
                                array('','',"Dio Padre ha stretto con il suo popolo un'alleanza nuova ed eterna nel sangue del suo Figlio, e continuamente la rinnova nell'Eucaristia, memoriale della nostra redenzione. Pieni di gratitudine, innalziamo a lui la nostra umile preghiera:"),
                                array('ris','I',"Benedici il tuo popolo, Signore."),
                            ),
                            array(
                                array('','',"Guida i popoli e i loro governanti sulla via della tua volontà,"),
                                array('-','',"perché promuovano lealmente il bene comune."),
                                array('','',"Conferma nella vocazione coloro che hanno abbandonato ogni cosa per seguire il Cristo, tuo Figlio,"),
                                array('-','',"fa' che siano un vangelo vivente e una prova autentica della santità della Chiesa."),
                                array('','',"Tu che hai creato gli uomini a tua immagine e somiglianza,"),
                                array('-','',"fa' che sia eliminata ogni ingiusta discriminazione fra uomo e uomo, e fra nazione e nazione."),
                                array('','',"Riconduci gli erranti alla tua verità e amicizia,"),
                                array('-','',"fa' che impariamo a tendere loro la mano a imitazione della tua bontà."),
                                array('','',"Prendi con te nella gloria i nostri fratelli defunti,"),
                                array('-','',"perché ti lodino in eterno nella festosa assemblea dei tuoi santi.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Esaltiamo la Provvidenza di Dio, che conosce le nostre necessità, ma vuole che cerchiamo anzitutto il suo regno. Perciò rinnoviamo la nostra adesione alla divina paternità e diciamo:"),
                                array('ris','I',"Venga il tuo regno e la tua giustizia, Signore."),
                            ),
                            array(
                                array('','',"Padre santo, che ci hai dato il tuo Figlio come pastore e guida delle nostre anime, assisti i pastori e le comunità che hai loro affidate,"),
                                array('-','',"perché non manchi al gregge la sollecitudine del pastore e al pastore la docilità del suo gregge."),
                                array('','',"Ispiraci un fraterno amore verso i malati del corpo e dello spirito,"),
                                array('-','',"perché in essi riconosciamo e serviamo il Cristo tuo Figlio."),
                                array('','',"Fa' che i non cristiani diventino membri della tua Chiesa,"),
                                array('-','',"e la edifichino con la loro carità operosa."),
                                array('','',"Suscita in noi una contrizione sincera delle nostre colpe,"),
                                array('-','',"perché ci riconciliamo con te e con la tua Chiesa."),
                                array('','',"Accogli in cielo i defunti più bisognosi della tua misericordia,"),
                                array('-','',"perché vivano sempre con te nella pace della tua casa.")
                            )
                        );
                    }

                }

            }

            if ($this->actual['weekDay']==4) {

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['evCode']=='QC4') {
                        
                        $this->testo=array(
                            array(
                                array('','',"Uniti nella preghiera di lode, celebriamo l'amore di Dio Padre, che si è rivelato nel Cristo suo Figlio e diciamo con fede:"),
                                array('ris','I',"Ricordati, Signore, di questa tua famiglia."),
                            ),
                            array(
                                array('','',"Donaci di comprendere in modo vivo e profondo il mistero della tua Chiesa,"),
                                array('-','',"perché diventi per noi e per tutti sacramento universale di salvezza."),
                                array('','',"Padre di tutti gli uomini, aiutaci a promuovere il vero progresso della comunità umana,"),
                                array('-','',"e a cercare in ogni cosa il tuo regno e la tua giustizia."),
                                array('','',"Suscita in noi la sete del Cristo,"),
                                array('-','',"che si è offerto a noi come sorgente di acqua viva."),
                                array('','',"Rimetti a noi i nostri debiti,"),
                                array('-','',"guida i nostri passi nella giustizia e nella sincerità.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Il Cristo, luce del mondo, è venuto fra noi perché non camminiamo più nelle tenebre, ma abbiamo la luce della vita. A lui si innalzi la nostra lode e la nostra preghiera:"),
                                array('ris','I',"La tua parola, Signore, sia luce ai miei passi."),
                            ),
                            array(
                                array('','',"Signore, fa' che oggi progrediamo alla scuola della tua bontà e diveniamo tuoi imitatori,"),
                                array('-','',"per ritrovare in te, nuovo Adamo, ciò che abbiamo perduto a causa del primo Adamo."),
                                array('','',"La tua parola illumini sempre il nostro cammino,"),
                                array('-','',"perché viviamo nella verità e nella carità, per la perfezione del tuo corpo mistico."),
                                array('','',"Insegnaci a fare del bene a tutti nel tuo nome,"),
                                array('-','',"perché la luce della tua Chiesa risplenda sempre più sull'umana famiglia."),
                                array('','',"Donaci la grazia della conversione, perché espiamo le offese recate alla tua bontà e sapienza,"),
                                array('-','',"e otteniamo il bene inestimabile della tua amicizia.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['evCode']=='QC4') {
                        
                        $this->testo=array(
                            array(
                                array('','',"Celebriamo la misericordia del Padre che ci ha illuminati con la grazia dello Spirito Santo, perché la nostra vita risplenda con la luce della fede e delle opere. Preghiamo insieme e diciamo:"),
                                array('ris','I',"Santifica, Padre, il popolo redento da Cristo."),
                            ),
                            array(
                                array('','',"Fonte e artefice di ogni santità, unisci più intimamente a Cristo, mediante il mistero eucaristico, i vescovi, i presbiteri e i diaconi,"),
                                array('-','',"perché si ravvivi in loro la grazia che hanno ricevuto con l'imposizione delle mani."),
                                array('','',"Insegna ai tuoi fedeli a partecipare in modo attivo e consapevole alla mensa della parola e del corpo di Cristo,"),
                                array('-','',"perché esprimano nella vita ciò che hanno ricevuto mediante la fede e i sacramenti."),
                                array('','',"Fa' che riconosciamo la dignità di tutti gli uomini che Cristo ha redenti a prezzo del suo sangue,"),
                                array('-','',"e rispettiamo la libertà di coscienza dei nostri fratelli."),
                                array('','',"Fa' che gli uomini imparino a frenare la cupidigia di denaro e di potere,"),
                                array('-','',"e si aprano generosamente alla comprensione e all'aiuto del prossimo."),
                                array('','',"Abbi pietà dei fedeli che oggi hai chiamato a te da questa vita,"),
                                array('-','',"concedi loro l'eredità eterna nel tuo regno.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Il Cristo Signore ci ha dato il comandamento nuovo di amarci gli uni gli altri come egli ci ha amato. Chiediamo la grazia di essere fedeli a questa legge fondamentale della vita cristiana:"),
                                array('ris','I',"Accresci nel tuo popolo la carità, o Signore."),
                            ),
                            array(
                                array('','',"Maestro buono, insegnaci ad amare te nei nostri fratelli,"),
                                array('-','',"e a far loro del bene nel tuo nome."),
                                array('','',"Tu che sulla croce hai chiesto il perdono per i tuoi crocifissori,"),
                                array('-','',"aiutaci ad amare anche i nemici e a pregare per coloro che ci affliggono."),
                                array('','',"Per il mistero del tuo corpo e del tuo sangue, accresci in noi la fortezza, la fiducia e l'amore,"),
                                array('-','',"rafforza i deboli, consola gli afflitti, dona la tua speranza ai morenti."),
                                array('','',"Tu che hai ridato la vista al cieco nato, alla piscina di Siloe,"),
                                array('-','',"illumina i catecumeni con il lavacro battesimale nella parola di vita."),
                                array('','',"Sazia i nostri fratelli defunti con il tuo eterno amore,"),
                                array('-','',"ammetti un giorno anche noi nell'assemblea gioiosa degli eletti.")
                            )
                        );
                    }
                }
            }

            if ($this->actual['weekDay']==5) {

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['evCode']=='QC5') {
                        
                        $this->testo=array(
                            array(
                                array('','',"Invochiamo con fiducia il Cristo Salvatore, che ci ha redenti con la sua morte e risurrezione:"),
                                array('ris','I',"Signore, abbi pietà di noi."),
                            ),
                            array(
                                array('','',"Tu che sei salito a Gerusalemme per sostenere la passione e così entrare nella tua gloria,"),
                                array('-','',"guida alla Pasqua eterna la tua Chiesa pellegrina sulla terra."),
                                array('','',"Tu che, trafitto dalla lancia, hai emanato sangue ed acqua, simbolo dei sacramenti della tua Chiesa,"),
                                array('-','',"guarisci le nostre ferite con la forza vitale della tua grazia."),
                                array('','',"Tu che hai fatto della croce un albero di vita,"),
                                array('-','',"concedi i suoi frutti di salvezza ai rinati nel Battesimo."),
                                array('','',"Tu che dal patibolo della croce hai perdonato al buon ladrone,"),
                                array('-','',"perdona anche a noi peccatori.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie al Signore che, morendo in croce per noi, ci ha ridato la vita, e rivolgiamo a lui la nostra umile preghiera:"),
                                array('ris','I',"Per il mistero della tua morte, donaci la vita, Signore."),
                            ),
                            array(
                                array('','',"Maestro e Salvatore, che ci hai illuminati con gli insegnamenti della fede e con la gloriosa passione hai fatto di noi una nuova creatura,"),
                                array('-','',"fa' che non ricadiamo nella palude dei nostri peccati."),
                                array('','',"Insegnaci a togliere qualcosa alla nostra mensa,"),
                                array('-','',"per soccorrere i fratelli che sono privi del necessario."),
                                array('','',"Fa' che riceviamo dalle tue mani questo giorno,"),
                                array('-','',"per restituirlo a te ricco di opere di carità fraterna."),
                                array('','',"Piega alla tua volontà le nostre menti orgogliose e ribelli,"),
                                array('-','',"donaci un cuore grande e generoso.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['evCode']=='QC5') {
                        
                        $this->testo=array(
                            array(
                                array('','',"Adoriamo il Salvatore del genere umano, che morendo distrusse la morte e risorgendo ha ridato a noi la vita, e chiediamo umilmente:"),
                                array('ris','I',"Santifica il popolo redento con il tuo sangue, Signore."),
                            ),
                            array(
                                array('','',"Gesù Salvatore, fa' che completiamo in noi con la penitenza ciò che manca alla tua passione,"),
                                array('-','',"per condividere la gloria della tua risurrezione."),
                                array('','',"Per intercessione della Madre tua, consolatrice degli afflitti, donaci la tua consolazione divina,"),
                                array('-','',"perché diffondiamo la gioia in quelli che sono nel dolore."),
                                array('','',"Fa' che in mezzo alle lotte e alle prove della vita, ci sentiamo partecipi della tua passione,"),
                                array('-','',"per sperimentare in noi la forza della tua redenzione."),
                                array('','',"Tu che ti sei umiliato facendoti obbediente fino alla morte e alla morte di croce,"),
                                array('-','',"donaci lo spirito di obbedienza e di mansuetudine."),
                                array('','',"Trasfigura i corpi dei nostri defunti a immagine del tuo corpo glorioso,"),
                                array('-','',"ammetti un giorno anche noi nella Gerusalemme del cielo.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Rivolgiamo la nostra comune preghiera al Cristo salvatore che ci ha riscattati a prezzo del suo sangue:"),
                                array('ris','I',"Abbi pietà del tuo popolo, Signore."),
                            ),
                            array(
                                array('','',"O redentore nostro, donaci lo spirito di penitenza, sostienici nel combattimento contro le forze del male, ravviva la nostra speranza,"),
                                array('-','',"perché camminiamo con passo vigoroso verso la Pasqua."),
                                array('','',"Fa' che i cristiani, partecipi della tua dignità profetica, portino in ogni luogo il lieto annunzio della salvezza,"),
                                array('-','',"e lo confermino con la testimonianza di fede, speranza e carità."),
                                array('','',"Consola gli afflitti con la forza del tuo amore,"),
                                array('-','',"fa' che sentano accanto a sé la solidarietà dei fratelli."),
                                array('','',"Insegnaci a portare la nostra croce in unione alle tue sofferenze,"),
                                array('-','',"perché si manifesti in noi la luce della tua gloria."),
                                array('','',"Signore, artefice della vita, ricordati dei nostri fratelli stroncati dalla violenza e dalla guerra."),
                                array('-','',"dona loro un'esistenza immortale nel tuo regno.")
                            )
                        );
                    }
                }
            }

            if ($this->actual['weekDay']==6) {

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['evCode']=='QC6') {
                        
                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie sempre e in ogni luogo al Cristo salvatore, e rivolgiamo a lui la nostra comune preghiera:"),
                                array('ris','I',"Soccorrici con la forza del tuo Spirito, Signore."),
                            ),
                            array(
                                array('','',"Custodisci la castità del nostro corpo e del nostro cuore,"),
                                array('-','',"perché siamo tempio vivo dello Spirito Santo."),
                                array('','',"Rendici fin d'ora disponibili all'aiuto fraterno,"),
                                array('-','',"fa' che tutto il giorno trascorra nell'adesione piena alla tua volontà."),
                                array('','',"Rendici solleciti non del cibo che perisce,"),
                                array('-','',"ma di quello che dura per la vita eterna e che tu ci dai."),
                                array('','',"La Madre tua, rifugio dei peccatori, interceda per la nostra salvezza,"),
                                array('-','',"e ci ottenga il perdono dei peccati.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5) {

                        $this->testo=array(
                            array(
                                array('','',"Proclamiamo gioiosamente la nostra fede in Cristo, che con il lavacro della rigenerazione e con la mensa della sua parola e del suo corpo ci fa nascere creature nuove e ci rinvigorisce continuamente. Con questa fede preghiamo:"),
                                array('ris','I',"Rinnovaci sempre, Signore, con la forza del tuo Spirito."),
                            ),
                            array(
                                array('','',"Gesù, mite ed umile di cuore, rivestici dei tuoi sentimenti di umiltà e di misericordia,"),
                                array('-','',"perché ci perdoniamo sempre gli uni gli altri come tu hai perdonato a noi."),
                                array('','',"Insegnaci ad avvicinare i poveri e i sofferenti che troviamo sulla nostra strada,"),
                                array('-','',"per imitare te, buon Samaritano."),
                                array('','',"La beata Vergine, tua Madre, interceda per le vergini a te consacrate,"),
                                array('-','',"perché vivano con gioia la loro donazione a te nella santa Chiesa."),
                                array('','',"Donaci un segno della tua misericordia,"),
                                array('-','',"rimetti a noi i nostri debiti e allontana i castighi che meritiamo.")
                            )
                        );
                    }
                }
            }

            //////////////////////////////////////////

            if ($this->actual['evCode']=='PAL') {

                if ($this->actual['ora']=='ves1') {

                    $this->testo=array(
                        array(
                            array('','',"Nell'imminenza della sua passione Gesù pianse su Gerusalemme, che non aveva saputo riconoscere il tempo della visita del Salvatore. Ammaestrati da questa durezza di cuore e consapevoli delle nostre inadempienze, imploriamo la misericordia del Signore:"),
                            array('ris','I',"Gesù, Figlio di Davide, abbi pietà di noi.")
                        ),
                        array(
                            array('','',"Tu che hai cercato di raccogliere intorno a te i figli di Gerusalemme, come fa la chioccia con i suoi pulcini,"),
                            array('-','',"insegnaci a riconoscere l'ora della nostra salvezza."),
                            array('','',"Signore, non abbandonare chi ti ha abbandonato,"),
                            array('-','',"volgiti a noi e noi ci convertiremo a te."),
                            array('','',"Tu che ci hai salvati a prezzo della tua passione,"),
                            array('-','',"fa' che viviamo in sintonia con il tuo Spirito che ci hai donato nel Battesimo."),
                            array('','',"Insegnaci a rivivere intimamente in noi l'esperienza della tua passione,"),
                            array('-','',"per celebrare santamente il glorioso evento della tua risurrezione."),
                            array('','',"Tu che regni nella gloria del Padre,"),
                            array('-','',"ricordati di coloro che oggi hanno chiuso gli occhi alla luce di questo mondo.")
                        )
                    );
                }

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Il Cristo entrando in Gerusalemme, fu acclamato Re e Messia dalla folla osannante. Riconosciamo anche noi la sovranità universale ed eterna del nostro Salvatore:"),
                            array('ris','I',"Benedetto colui che viene nel nome del Signore.")
                        ),
                        array(
                            array('','',"Osanna a te, Cristo, figlio di Davide e Re dei secoli,"),
                            array('-','',"osanna a te, vincitore dell'inferno e della morte."),
                            array('','',"Tu che ascendesti a Gerusalemme per compiere il tuo esodo pasquale,"),
                            array('-','',"guida alla Pasqua eterna la tua Chiesa pellegrina sulla terra."),
                            array('','',"Tu che ci hai dato nella croce il nuovo albero della vita,"),
                            array('-','',"fa' che gustiamo i suoi frutti di salvezza."),
                            array('','',"Tu che sei venuto a salvarci dal peccato e dalla morte,"),
                            array('-','',"fa' che giungiamo a te nel segno della fede, della speranza e della carità.")
                        )
                    );
                    
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Gesù salì a Gerusalemme per dar compimento al mistero della sua redenzione. Riuniti nella preghiera della sera acclamiamo:"),
                            array('ris','I',"Gloria a te, o Cristo, Re dei secoli.")
                        ),
                        array(
                            array('','',"Sei stato accolto dal popolo come il Re-Messia, che viene nel nome del Signore,"),
                            array('-','',"l'umanità intera ti accolga Re dell'universo, Figlio di Dio e Salvatore del mondo."),
                            array('','',"Gli abitanti di Gerusalemme stendevano i loro mantelli lungo il tuo cammino,"),
                            array('-','',"la nostra generazione riconosca i segni del tuo passaggio nella storia di ieri e di oggi."),
                            array('','',"Mentre scendevi dal monte degli Ulivi, la folla dei discepoli lodava Dio in esultanza,"),
                            array('-','',"da' ai tuoi fedeli il gusto e la gioia della lode divina."),
                            array('','',"Hai scelto un'umile cavalcatura per il tuo ingresso di Principe della pace, annunziato dai profeti,"),
                            array('-','',"fa' che ognuno, nella Chiesa, compia la sua missione in spirito di sincera umiltà."),
                            array('','',"Entrando nella città di Davide fra le acclamazioni festose, hai prefigurato il tuo ingresso glorioso nel santuario celeste,"),
                            array('-','',"donaci di condividere con i nostri defunti il tuo trionfo eterno.")
                        )
                    );
                }
            }

            if ($this->actual['evCode']=='SS1') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"In intima comunione di spirito con tutta la Chiesa, che in questi giorni celebra la passione del Signore, preghiamo:"),
                            array('ris','I',"Per la tua morte salvaci, o Signore.")
                        ),
                        array(
                            array('','',"Signore dell'universo, venduto ai tuoi nemici per trenta denari,"),
                            array('-','',"concedici il dono della vera sapienza, perché preferiamo sempre te e la tua amicizia a tutto."),
                            array('','',"Nel Getsemani hai detto: La mia anima è triste fino alla morte,"),
                            array('-','',"ricordati della nostra debolezza di fronte al dolore e alla morte."),
                            array('','',"Autore della vita e modello di ogni santità, giudicato degno di supplizio,"),
                            array('-','',"da' perdono e salvezza a noi, veramente meritevoli di condanna."),
                            array('','',"Cristo, crocifisso fra i ladroni,"),
                            array('-','',"manifesta la forza della tua redenzione nei santi.")
                        )
                    );
                    
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Preghiamo Cristo, che promise di attirare tutti a sé dalla sua croce:"),
                            array('ris','I',"Nella tua croce la nostra speranza, o Signore.")
                        ),
                        array(
                            array('','',"Hai sentito la solitudine e l'abbandono, e hai gridato il tuo lamento e la tua preghiera al Padre,"),
                            array('-','',"ascolta il gemito e le implorazioni che salgono dalla moltitudine dei sofferenti."),
                            array('','',"Alla tua agonia si fece buio sulla terra,"),
                            array('-','',"comprendano gli uomini che tutto è tenebra senza la tua luce."),
                            array('','',"Con la tua morte hai abbattuto ogni muro di divisione e di odio,"),
                            array('-','',"vedano i popoli nel tuo Vangelo l'unica via della pace e di ogni collaborazione feconda."),
                            array('','',"Morendo hai segnato l'inizio dell'era nuova,"),
                            array('-','',"conduci gli uomini sulla via della vera liberazione e dell'autentico rinnovamento."),
                            array('','',"Dalla tua bocca uscì un alto grido e spirasti in atto di abbracciare il mondo intero,"),
                            array('-','',"ammetti nel tuo regno di gloria i nostri fratelli, che, come te, hanno varcato la soglia della morte.")
                        )
                    );
                }
            }

            if ($this->actual['evCode']=='SS2') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Il sangue di Cristo purifica e salva il mondo. Meditando questo mistero della nostra fede, acclamiamo:"),
                            array('ris','I',"Ci hai redenti, o Signore, con il tuo sangue.")
                        ),
                        array(
                            array('','',"Maestro buono, sei stato rinnegato tre volte da Pietro,"),
                            array('-','',"conservaci fedeli al tuo nome."),
                            array('','',"Tu sai che lo spirito è pronto, ma la carne è debole,"),
                            array('-','',"insegnaci a pregare e vigilare per non cedere alla tentazione."),
                            array('','',"Hai accettato la volontà del Padre, che chiedeva il tuo sacrificio,"),
                            array('-','',"fa' che adoriamo sempre in tutto i voleri divini."),
                            array('','',"Dio è Giudice universale, trascinato dinanzi ai tribunali degli uomini,"),
                            array('-','',"donaci sapienza e coraggio nel renderti testimonianza.")
                        )
                    );
                    
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Fondiamo la nostra speranza sulla croce, che Cristo trasformò da patibolo infame in trono di gloria, e preghiamo:"),
                            array('ris','I',"Ti adoriamo, o Cristo, e ti benediciamo.")
                        ),
                        array(
                            array('','',"Signore, che sulla via del Calvario fosti seguito dal pietoso lamento delle donne,"),
                            array('-','',"rendici solidali con la tua passione, che si prolunga negli oppressi, negli emarginati e in tutti i sofferenti."),
                            array('','',"Fosti consegnato nelle mani dei carnefici dall'invidia dei tuoi correligionari,"),
                            array('-','',"fa' che nella Chiesa tutti operino all'avvento del tuo regno in gioiosa collaborazione e amore vicendevole."),
                            array('','',"Mentre eri sulla croce i passanti ti insultavano, ignorando che soffrivi e morivi per la loro salvezza,"),
                            array('-','',"rivela agli atei, agli increduli e ai bestemmiatori il tuo amore per loro."),
                            array('','',"Ne tuo supplizio udisti il sarcasmo oltraggioso di chi ti invitava a scendere dalla croce,"),
                            array('-','',"mostra a tutti la potenza liberatrice del tuo sacrificio."),
                            array('','',"Alla tua morte si aprirono i sepolcri,"),
                            array('-','',"apri ai nostri fratelli defunti la porta della vita senza fine.")
                        )
                    );
                }
            }

            if ($this->actual['evCode']=='SS3') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti nella celebrazione della passione di Cristo, preghiamo:"),
                            array('ris','I',"Donaci i frutti della tua Pasqua, o Signore.")
                        ),
                        array(
                            array('','',"Signore, che hai accettato lo scandalo della croce,"),
                            array('-','',"comunicaci la gloria della tua risurrezione."),
                            array('','',"Sei stato tradito da uno dei tuoi amici,"),
                            array('-','',"preserva i tuoi fedeli da ogni defezione."),
                            array('','',"Sul monte degli Ulivi hai pregato il Padre tuo di risparmiarti il calice della passione,"),
                            array('-','',"fa' che il dolore non soffochi mai in noi la fiducia e la preghiera."),
                            array('','',"Il popolo che avevi prediletto ha invocato su di sé il tuo sangue,"),
                            array('-','',"scenda su di noi e su tutti gli uomini come lavacro di purificazione e di salvezza.")
                        )
                    );
                    
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Il calvario rischiara le tenebre del mondo. Preghiamo che i nostri occhi non si chiudano mai alla sua luce:"),
                            array('ris','I',"Per il mistero della croce illuminaci, o Signore.")
                        ),
                        array(
                            array('','',"Cristo Signore, accusato davanti al sinedrio da molti falsi testimoni,"),
                            array('-','',"fa' che la condotta dei cristiani non oscuri lo splendore del tuo messaggio."),
                            array('','',"Hai voluto che il Cireneo condividesse il peso della tua croce,"),
                            array('-','',"fa' che nel dolore ci sentiamo in comunione con la tua passione."),
                            array('','',"Nello sconvolgimento della natura, seguito alla tua morte, ti sei fatto riconoscere dal centurione come Figlio di Dio,"),
                            array('-','',"illumina gli uomini del nostro tempo perché vedano il segno del tuo amore e della tua provvidenza in tutte le creature."),
                            array('','',"Dal tuo petto squarciato hai fatto nascere la Chiesa, arca di salvezza,"),
                            array('-','',"sia il sacramento dell'incontro degli uomini con te e fra di loro."),
                            array('','',"Signore Gesù, che morendo hai infranto la potenza della morte,"),
                            array('-','',"concedi ai nostri fratelli defunti una risurrezione gloriosa.")
                        )
                    );
                }
            }

            if ($this->actual['evCode']=='SS4') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo è il sacerdote eterno, consacrato dal Padre con il crisma dello Spirito per comunicare agli uomini le ricchezze della tua casa. Con animo lieto acclamiamo:"),
                            array('ris','I',"Noi ti ringraziamo, Signore.")
                        ),
                        array(
                            array('','',"Mediante il Battesimo ci hai uniti a te nella morte, sepoltura e risurrezione,"),
                            array('ris','I',"Noi ti ringraziamo, Signore."),
                            array('','',"Con l'unzione spirituale ci hai resi partecipi della tua dignità regale, sacerdotale e profetica,"),
                            array('ris','I',"Noi ti ringraziamo, Signore."),
                            array('','',"Fai scendere su di noi l'olio della letizia, della pace e della salvezza,"),
                            array('ris','I',"Noi ti ringraziamo, Signore."),
                            array('','',"Ti incontri con noi nei sacramenti per offrirci l'abbondanza dello Spirito,"),
                            array('ris','I',"Noi ti ringraziamo, Signore.")
                        )
                    );
                    
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Nella notte in cui fu tradito, il nostro Salvatore celebrò l'ultima Cena e affidò alla Chiesa il memoriale della sua morte e risurrezione, perché lo celebrasse perennemente fino alla sua venuta. Nella luce di questo grande mistero, rivolgiamo al Cristo la nostra preghiera:"),
                            array('ris','I',"Santifica il popolo, che hai redento con il tuo sangue, Signore.")
                        ),
                        array(
                            array('','',"Hai partecipato il tuo sacerdozio alla Chiesa,"),
                            array('-','',"si senta sempre unita a te nel sacrificio della lode."),
                            array('','',"Ti offri al popolo redento, pane di vita disceso dal cielo,"),
                            array('-','',"suscita nei fedeli una santa fame di te."),
                            array('','',"Ci porgi il calice dell'alleanza nel tuo sangue,"),
                            array('-','',"bevano tutti con gioia a questa fonte di salvezza."),
                            array('','',"Ci hai lasciato il comandamento nuovo,"),
                            array('-','',"fa' che gli uomini sperimentino la forza rinnovatrice della carità."),
                            array('','',"Hai mangiato la Pasqua con i tuoi discepoli, quale annunzio del suo compimento nel regno di Dio,"),
                            array('-','',"ammettici al convito eterno insieme ai fratelli che ci hanno preceduto.")
                        )
                    );
                }
            }

            if ($this->actual['evCode']=='SS5') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Gloria e benedizione a Cristo nostro redentore, che patì e morì per noi, e fu sepolto per risorgere a vita immortale. A lui con profondo amore innalziamo la nostra preghiera:"),
                            array('ris','I',"Abbi pietà di noi, Signore.")
                        ),
                        array(
                            array('','',"Divino Maestro, che ti sei fatto per noi obbediente fino alla morte e alla morte di croce,"),
                            array('-','',"insegnaci a obbedire sempre alla volontà del Padre."),
                            array('','',"Gesù, vita nostra, che morendo sulla croce hai vinto la morte e l'inferno,"),
                            array('-','',"donaci di comunicare alla tua morte per condividere la tua risurrezione."),
                            array('','',"Re glorioso, inchiodato su un patibolo infame e calpestato come un verme,"),
                            array('-','',"insegna a noi come rivestirci di quell'umiltà che ha redento il mondo."),
                            array('','',"Salvezza nostra, che hai sacrificato la vita per amore dei fratelli,"),
                            array('-','',"fa' che ci amiamo come tu ci hai amato."),
                            array('','',"Redentore nostro, che hai steso le braccia sulla croce per stringere a te tutto il genere umano in un vincolo indistruttibile di amore,"),
                            array('-','',"raccogli nel tuo regno tutti i figli di Dio dispersi.")
                        )
                    );
                    
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"La Chiesa commemora con immenso amore la morte del Cristo, dal cui fianco squarciato è scaturita la vita del mondo. Uniti ai nostri fratelli di fede, sparsi su tutta la terra, rivolgiamo al Padre la nostra umile preghiera:"),
                            array('ris','I',"Per la morte del tuo Figlio ascoltaci, Signore.")
                        ),
                        array(
                            array('','',"Raduna la tua Chiesa."),
                            array('ris','I',"Per la morte del tuo Figlio ascoltaci, Signore."),
                            array('','',"Proteggi il nostro Papa."),
                            array('ris','I',"Per la morte del tuo Figlio ascoltaci, Signore."),
                            array('','',"Santifica i ministri e tutti i fedeli del tuo popolo."),
                            array('ris','I',"Per la morte del tuo Figlio ascoltaci, Signore."),
                            array('','',"Fa' crescere nei catecumeni il germe della fede e la conoscenza dei tuoi santi misteri."),
                            array('ris','I',"Per la morte del tuo Figlio ascoltaci, Signore."),
                            array('','',"Riunisci i cristiani nell'unità della Chiesa."),
                            array('ris','I',"Per la morte del tuo Figlio ascoltaci, Signore."),
                            array('','',"Guida alla pienezza della redenzione l'antico popolo eletto."),
                            array('ris','I',"Per la morte del tuo Figlio ascoltaci, Signore."),
                            array('','',"Illumina i non cristiani con la luce del Vangelo."),
                            array('ris','I',"Per la morte del tuo Figlio ascoltaci, Signore."),
                            array('','',"Aiuta gli atei a scoprire nell'uomo e nell'universo i segni del tuo amore."),
                            array('ris','I',"Per la morte del tuo Figlio ascoltaci, Signore."),
                        )
                    );
                }
            }

            if ($this->actual['evCode']=='SS6') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Adoriamo e benediciamo il nostro Redentore che patì, morì per noi e fu sepolto, per risorgere a vita immortale. Pieni di riconoscenza e di amore rivolgiamo al Cristo la nostra preghiera:"),
                            array('ris','I',"Abbi pietà di noi, Signore.")
                        ),
                        array(
                            array('','',"Cristo salvatore, che hai voluto vicino alla tua croce e al tuo sepolcro la tua Madre addolorata,"),
                            array('-','',"fa' che in mezzo alle sofferenze e alle lotte della vita comunichiamo alla tua passione."),
                            array('','',"Cristo Signore, che come il chicco di frumento fosti sepolto nella terra per una sovrabbondante messe di vita eterna,"),
                            array('-','',"fa' che, morti definitivamente al peccato, viviamo con te per il Padre."),
                            array('','',"Maestro divino, che nei giorni della sepoltura ti sei nascosto agli occhi di tutti gli uomini,"),
                            array('-','',"insegnaci ad amare la vita nascosta con te nel mistero del Padre."),
                            array('','',"Nuovo Adamo, che sei disceso nel regno dei morti per liberare le anime dei giusti prigionieri fin dall'origine del mondo,"),
                            array('-','',"fa' che tutti coloro che sono prigionieri del male ascoltino la tua voce e risorgano insieme con te."),
                            array('','',"Cristo, Figlio di Dio, che mediante il Battesimo ci hai uniti misticamente a te nella morte e nella sepoltura,"),
                            array('-','',"fa' che, configurati alla tua risurrezione, viviamo una vita nuova.")
                        )
                    );     
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Adoriamo e benediciamo il nostro Redentore che patì, morì per noi e fu sepolto per risorgere a vita immortale. Pieni di riconoscenza e di amore, rivolgiamo al Cristo la nostra preghiera:"),
                            array('ris','I',"Abbi pietà di noi, Signore.")
                        ),
                        array(
                            array('','',"Signore Gesù, che dal tuo fianco squarciato dalla lancia hai fatto scaturire la tua Chiesa, sacramento universale di salvezza,"),
                            array('-','',"per la tua morte, sepoltura e risurrezione rendi sempre pura e santa la tua mistica sposa."),
                            array('','',"Signore Gesù, che ti sei ricordato di coloro che avevano dimenticato le tue promesse ti risurrezione,"),
                            array('-','',"ricordati di coloro che ignorano il Vangelo e vivono senza speranza."),
                            array('','',"Agnello di Dio, nostra Pasqua, immolato per la salvezza del mondo,"),
                            array('-','',"attira a te l'umanità intera."),
                            array('','',"Dio onnipotente, che racchiudi l'universo nella tua mano e ti sei lasciato rinchiudere nel sepolcro,"),
                            array('-','',"riscattaci dalle potenze del male e donaci l'esperienza liberatrice della tua risurrezione."),
                            array('','',"Cristo, Figlio del Dio vivo, che in croce hai aperto il Paradiso al buon ladrone, associa a te nella gloria della risurrezione i defunti,"),
                            array('-','',"come li hai resi simili a te nella morte e nella sepoltura, fa' che rivivano con te nella beatitudine eterna.")
                        )
                    );
                }
            }
        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='P') {

            if ($this->actual['weekDay']==0) {

                if ($this->actual['ora']=='ves1') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Salutiamo e invochiamo Cristo, vita e risurrezione nostra:"),
                                array('ris','I',"Figlio del Dio vivente, proteggi il tuo popolo."),
                            ),
                            array(
                                array('','',"Signore Gesù Cristo, ti preghiamo per la Chiesa cattolica,"),
                                array('-','',"santificala nella verità, perché diffonda il tuo regno fra tutte le genti."),
                                array('','',"Ti preghiamo per quanti soffrono a causa dell'oppressione, della miseria, della fame,"),
                                array('-','',"da' a tutti conforto e aiuto."),
                                array('','',"Ti preghiamo per coloro che si sono allontanati da te,"),
                                array('-','',"fa' che gustino la dolcezza del tuo perdono."),
                                array('','',"Salvatore nostro, che sei stato crocifisso e sei risorto,"),
                                array('-','',"abbi pietà di noi quando verrai a giudicare il mondo."),
                                array('','',"Ti preghiamo per i miliardi di uomini che vivono sulla faccia della terra,"),
                                array('-','',"e per coloro che si sono congedati da noi con la speranza di riaverci compagni per sempre nella festosa comunità dei santi.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Preghiamo con fede il Cristo che ha distrutto la morte e ha rinnovato la vita:"),
                                array('ris','I',"Cristo, che vivi in eterno, ascolta la nostra preghiera."),
                            ),
                            array(
                                array('','',"Tu che sei la pietra scartata dai costruttori e scelta dal Padre come pietra angolare,"),
                                array('-','',"fa' di tutti noi le pietre vive per edificare la tua Chiesa."),
                                array('','',"Tu che sei il testimone fedele e verace,"),
                                array('-','',"fa' che la tua Chiesa testimoni sempre con le parole e le opere la tua risurrezione."),
                                array('','',"O unico Sposo della Chiesa, nata dal tuo cuore squarciato,"),
                                array('-','',"rendici annunziatori del tuo sacramento sponsale con la tua Chiesa."),
                                array('','',"Tu che eri morto e ora vivi per sempre,"),
                                array('-','',"fa' che manteniamo le nostre promesse battesimali per meritare la corona della vita."),
                                array('','',"O luce gloriosa della santa città di Dio,"),
                                array('-','',"risplendi ai nostri morti nei secoli dei secoli.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"Lodiamo e invochiamo Cristo sul quale è disceso lo Spirito Santo in apparenza corporea, come di colomba. Confermiamo insieme la nostra orazione acclamando:"),
                                array('ris','I',"Amen."),
                            ),
                            array(
                                array('','',"Signore, manda lo Spirito Santo da te promesso,"),
                                array('-','',"perché la tua Chiesa si rinnovi continuamente e si ritrovi in perenne giovinezza."),
                                array('','',"Tutte le nazioni ti riconoscano Re e Signore,"),
                                array('-','',"Israele sia, come un tempo, la tua eredità."),
                                array('','',"Tu che hai cacciato i demoni e hai vinto la morte,"),
                                array('-','',"libera il nostro paese dalla corruzione e dalla violenza."),
                                array('','',"Nella Pentecoste hai vinto l'antica confusione di Babele,"),
                                array('-','',"mediante il tuo Spirito conduci tutti all'unità della fede."),
                                array('','',"Il tuo Spirito abiti sempre in noi,"),
                                array('-','',"sia pegno di vita incorruttibile per noi e per i nostri fratelli defunti.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Rivolgiamo la comune preghiera a Dio Padre onnipotente, che ha risuscitato il Cristo, costituendolo capo e salvatore nostro:"),
                                array('ris','I',"Risplenda su di noi la gloria del Cristo."),
                            ),
                            array(
                                array('','',"O Padre santo, che hai innalzato il tuo Figlio dalla morte alla gloria,"),
                                array('-','',"fa' che passiamo dalle tenebre del peccato alla tua ammirabile luce."),
                                array('','',"Ci hai salvati mediante la fede,"),
                                array('-','',"fa' che viviamo in modo coerente il nostro Battesimo."),
                                array('','',"Ci inviti a guardare in alto dove Cristo siede alla tua destra,"),
                                array('-','',"aiutaci a vincere le suggestioni del male."),
                                array('','',"La nostra vita sia nascosta in Cristo,"),
                                array('-','',"e risplenda al mondo come annunzio dei cieli nuovi e della terra nuova.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Cristo, autore della vita, fu risuscitato dal Padre e farà risorgere anche noi con la potenza del suo Spirito. Uniti nella gioia pasquale acclamiamo:"),
                                array('ris','I',"Cristo, vita nostra, salvaci."),
                            ),
                            array(
                                array('','',"Cristo, luce fulgida, splendente nelle tenebre, principio e sorgente di vita nuova,"),
                                array('-','',"trasforma questo giorno in un dono di gioia pasquale."),
                                array('','',"Signore, che hai percorso la via della passione e della croce,"),
                                array('-','',"donaci di comunicare alla tua morte redentrice per condividere la gloria della tua risurrezione."),
                                array('','',"Figlio di Dio, maestro e fratello nostro, che hai fatto di noi una stirpe eletta, un sacerdozio regale,"),
                                array('-','',"insegnaci ad offrirti in letizia il sacrificio della lode."),
                                array('','',"Re della gloria, attendiamo il giorno splendido della tua manifestazione,"),
                                array('-','',"quando contempleremo il tuo volto senza veli e saremo simili a te.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"Uniti nella fede a tutti coloro che sono stati giustificati nel nome di Cristo e nello Spirito Santo di Dio, innalziamo la nostra fervida preghiera:"),
                                array('ris','I',"Il tuo Spirito ci assista, o Signore."),
                            ),
                            array(
                                array('','',"Signore Gesù, guidaci oggi con il tuo Spirito,"),
                                array('-','',"fa' che viviamo sempre da figli di Dio."),
                                array('','',"Il tuo Spirito preghi e operi in noi,"),
                                array('-','',"ci renda degni delle tue promesse."),
                                array('','',"Donaci un cuore grande e generoso,"),
                                array('-','',"fa' che ci preoccupiamo più del bene degli altri che di noi stessi."),
                                array('','',"Donaci la scienza divina,"),
                                array('-','',"perché mediante lo Spirito Santo cresciamo nella conoscenza di te e del Padre.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Cristo risorto siede alla destra del Padre. Nel suo nome innalziamo la nostra fiduciosa preghiera:"),
                                array('ris','I',"Per la gloria di Cristo salva il tuo popolo, Signore."),
                            ),
                            array(
                                array('','',"Padre santo, che hai glorificato il tuo Figlio morto sulla croce,"),
                                array('-','',"orienta e riconduci a lui tutti gli uomini."),
                                array('','',"Manda il tuo Spirito sulla santa Chiesa,"),
                                array('-','',"perché sia il sacramento dell'unità di tutto il genere umano."),
                                array('','',"Custodisci coloro che hai generato alla vita nuova mediante il Battesimo,"),
                                array('-','',"fa' che crescano nella fede e rendano testimonianza al tuo nome."),
                                array('','',"Per il tuo Figlio glorificato, solleva i poveri, guarisci gli infermi, libera i prigionieri,"),
                                array('-','',"estendi a tutti gli uomini i benefici della redenzione."),
                                array('','',"Accogli nel cielo i nostri defunti che hanno comunicato al corpo e sangue del tuo Figlio,"),
                                array('-','',"fa' che partecipino al banchetto della gioia eterna.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Cristo è sempre vivo per intercedere a nostro favore. Tutta la Chiesa lo acclami e lo invochi:"),
                                array('ris','I',"Re glorioso, ascolta la nostra voce."),
                            ),
                            array(
                                array('','',"Luce e salvezza di tutte le genti,"),
                                array('-','',"manda il tuo Spirito su coloro che celebrano la tua risurrezione."),
                                array('','',"Il popolo ebraico riconosca in te il Messia atteso e sperato,"),
                                array('-','',"tutta la terra sia piena della tua gloria."),
                                array('','',"Mantienici nella comunione dei santi durante il pellegrinaggio terreno,"),
                                array('-','',"donaci di perseverare nella fede fino al giorno della tua venuta."),
                                array('','',"Tu che hai vinto il peccato e la morte,"),
                                array('-','',"fa' che viviamo sempre per te."),
                                array('','',"Tu che dall'umiliazione della croce fosti innalzato alla destra del Padre,"),
                                array('-','',"accogli i nostri morti nella gloria del tuo regno.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"Noi non sappiamo come pregare, ma è lo Spirito Santo che intercede per noi con gemiti inenarrabili. Perciò diciamo con fede:"),
                                array('ris','I',"Preghi in noi il tuo Spirito, Signore."),
                            ),
                            array(
                                array('','',"Cristo, pastore eterno, dona il consiglio e la sapienza ai nostri pastori,"),
                                array('-','',"fa' che guidino il tuo popolo con soavità e forza sulla via della salvezza."),
                                array('','',"Tu che sei l'Altissimo e il misericordioso,"),
                                array('-','',"aiutaci a promuovere l'ascesa dei poveri e il riscatto degli oppressi."),
                                array('','',"Tu che sei nato da Maria Vergine per opera dello Spirito Santo,"),
                                array('-','',"conferma le vergini consacrate nella gioia della loro donazione a Dio e ai fratelli."),
                                array('','',"Tu che hai offerto al Padre nello Spirito Santo il sacrificio perfetto,"),
                                array('-','',"fa' che tutti gli uomini si uniscano alla tua lode."),
                                array('','',"Conduci i nostri defunti alla libertà della gloria dei figli di Dio,"),
                                array('-','',"e alla piena redenzione del proprio corpo.")
                            )
                        );
                    }
                }
            }

            if ($this->actual['weekDay']==1) {

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Lode e onore a Cristo, costituito dal Padre erede di tutte le genti. A lui s'innalzi la nostra preghiera:"),
                                array('ris','I',"Per la tua gloriosa risurrezione, salvaci, o Signore."),
                            ),
                            array(
                                array('','',"Cristo, che hai vinto l'inferno e hai distrutto il peccato,"),
                                array('-','',"donaci oggi e sempre la vittoria sul male."),
                                array('','',"Tu che ci hai liberati dal dominio della morte,"),
                                array('-','',"fa' che gustiamo l'esperienza della vita nuova."),
                                array('','',"Ci hai fatti passare dalla schiavitù del peccato alla libertà dei figli di Dio,"),
                                array('-','',"dona la tua pace a quanti incontreremo oggi sul nostro cammino."),
                                array('','',"Tu che hai umiliato la prepotenza e l'orgoglio dei tuoi persecutori,"),
                                array('-','',"proteggi i poveri, libera gli oppressi, concedi a tutti gli uomini la tua gioia pasquale.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"La gloria di Dio risplende nella morte e risurrezione di Cristo. Nel tuo nome innalziamo al Padre la nostra preghiera:"),
                                array('ris','I',"Illumina la nostra vita, Signore."),
                            ),
                            array(
                                array('','',"O Dio, Padre della luce, che hai rischiarato il mondo con la gloria del Cristo risorto,"),
                                array('-','',"guidaci in questo giorno nella luce della fede."),
                                array('','',"Tu che ci hai aperto in Cristo le porte della vita eterna,"),
                                array('-','',"fa' che il nostro impegno nel mondo sia animato dalla speranza cristiana."),
                                array('','',"Tu che per mezzo del tuo Figlio ci hai donato lo Spirito Santo,"),
                                array('-','',"rendici testimoni della tua carità."),
                                array('','',"Per i meriti del tuo Figlio, morto e risorto per liberare il mondo,"),
                                array('-','',"dona a tutti gli uomini pace e salvezza.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"Cristo promise che il Padre avrebbe mandato lo Spirito Santo nel suo nome. Confidando pienamente in questa parola, rivolgiamogli insieme la preghiera:"),
                                array('ris','I',"Donaci il tuo Spirito, o Signore."),
                            ),
                            array(
                                array('','',"Noi ti lodiamo, o Cristo, e rendiamo grazie al Padre per mezzo del tuo Spirito,"),
                                array('-','',"fa' che in parole ed opere rendiamo gloria al tuo nome."),
                                array('','',"Il tuo Santo Spirito abiti in noi,"),
                                array('-','',"ci renda membra vive della tua Chiesa."),
                                array('','',"Insegnaci a non giudicare e a non disprezzare nessuno,"),
                                array('-','',"perché tutti un giorno saremo giudicati da te."),
                                array('','',"Riempici di gioia e di pace nella fede,"),
                                array('-','',"la venuta del tuo Spirito ci apra alla pienezza della speranza.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Il Cristo, vivificato dallo Spirito, è divenuto fonte di vita e sacramento universale di salvezza. Pieni di gioia, invochiamo il suo nome:"),
                                array('ris','I',"Rinnovaci, Signore, con la forza del tuo Spirito."),
                            ),
                            array(
                                array('','',"Cristo, salvatore del mondo e principio della creazione nuova, orienta tutta la nostra vita verso il tuo regno glorioso,"),
                                array('-','',"dove ci aspetti alla destra del Padre."),
                                array('','',"Signore, che vivi e operi nella tua Chiesa,"),
                                array('-','',"guidaci alla conoscenza di tutta la verità."),
                                array('','',"Rivela la potenza del tuo amore ai poveri, ai malati, agli agonizzanti,"),
                                array('-','',"confortali con la luce della tua presenza."),
                                array('','',"Accogli la nostra lode al termine di questa giornata,"),
                                array('-','',"fa' risplendere ai defunti il giorno che non conosce tramonto.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Invochiamo Cristo che ha illuminato il mondo col la gloria della tua risurrezione:"),
                                array('ris','I',"Cristo, vita nostra, ascoltaci."),
                            ),
                            array(
                                array('','',"Signore Gesù Cristo, che ti sei affiancato ai tuoi discepoli sulla via di Emmaus,"),
                                array('-','',"assisti la tua Chiesa pellegrina sulla terra."),
                                array('','',"Non permettere che i cristiani siano chiusi all'ascolto della tua parola,"),
                                array('-','',"fa' che rendano buona testimonianza alla tua vittoria sulla morte."),
                                array('','',"Guarda con bontà coloro che non ti hanno ancora riconosciuto nel cammino della vita,"),
                                array('-','',"fa' che ti accolgano presto come salvatore."),
                                array('','',"Tu che, mediante il sacrificio della croce, hai riconciliato tutti gli uomini,"),
                                array('-','',"dona pace e unità al mondo intero."),
                                array('','',"Tu che sei il giudice dei vivi e dei morti,"),
                                array('-','',"accogli nel tuo regno i nostri fratelli defunti che hanno creduto in te.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie a Cristo che dona alla sua Chiesa lo Spirito consolatore. Uniti ai fratelli sparsi nel mondo, diciamo con fede:"),
                                array('ris','I',"Proteggi il tuo popolo, Signore."),
                            ),
                            array(
                                array('','',"Tu che hai scelto i sacerdoti come collaboratori della tua redenzione,"),
                                array('-','',"fa' che gli uomini trovino sempre nelle loro labbra la tua parola."),
                                array('','',"Fa' che i ricchi tendano la mano ai poveri per edificare un mondo più giusto e più fraterno,"),
                                array('-','',"tutti si riconoscano fratelli in Dio nostro Padre."),
                                array('','',"Irradia in ogni parte della terra la luce del Vangelo,"),
                                array('-','',"fa' che tutte le genti aderiscano alla fede."),
                                array('','',"Manda il tuo Spirito a consolare i sofferenti,"),
                                array('-','',"dona al mondo intero la salvezza e la pace."),
                                array('','',"Purifica le anime dei defunti,"),
                                array('-','',"e accoglici in cielo insieme ai beati.")
                            )
                        );
                    }
                }
            }

            if ($this->actual['weekDay']==2) {

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo il Cristo, che per virtù propria ricostruì il tempio del suo corpo, distrutto dalla morte, e formuliamo con fiducia la nostra domanda:"),
                                array('ris','I',"Donaci i frutti della tua risurrezione. Signore."),
                            ),
                            array(
                                array('','',"Cristo, che hai annunziato alle pie donne e agli apostoli la gioia della risurrezione,"),
                                array('-','',"rendici annunziatori della tua vittoria."),
                                array('','',"Tu che risorgendo dai morti ci hai dato il pegno della nostra risurrezione,"),
                                array('-','',"concedi a tutti gli uomini la vittoria sul male e sulla morte."),
                                array('','',"Tu che apparendo agli apostoli hai donato loro lo Spirito Santo,"),
                                array('-','',"effondi su di noi la tua forza creatrice."),
                                array('','',"Tu che hai promesso di restare con i tuoi discepoli sino alla fine del mondo,"),
                                array('-','',"rimani con noi oggi e sempre.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Supplichiamo Dio Padre, che per mezzo di Cristo, Agnello senza macchia, toglie i peccati del mondo. Diciamo con fede:"),
                                array('ris','I',"O Signore, fonte della vita, salva il tuo popolo."),
                            ),
                            array(
                                array('','',"Ascolta, o Padre, la voce del tuo Figli crocifisso e risorto per noi,"),
                                array('-','',"egli intercede per la nostra salvezza."),
                                array('','',"Fa' che viviamo il mistero pasquale negli azzimi della sincerità e verità,"),
                                array('-','',"purificaci dal vecchio lievito della malizia e dell'egoismo."),
                                array('','',"Fa' che vinciamo le tentazioni dell'invidia e della discordia,"),
                                array('-','',"insegnaci a comprendere e ad aiutare i fratelli."),
                                array('','',"Fa' che regni in mezzo a noi lo spirito del Vangelo,"),
                                array('-','',"guidaci oggi e sempre nella via dei tuoi comandamenti.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo Cristo, che promise di mandare a noi dal Padre il Consolatore e innalziamogli insieme la nostra preghiera:"),
                                array('ris','I',"O Cristo, donaci il tuo Spirito."),
                            ),
                            array(
                                array('','',"La tua parola, o Cristo, dimori in noi abbondantemente,"),
                                array('-','',"perché ti rendiamo grazie con salmi, inni e canti spirituali."),
                                array('','',"Ci hai resi partecipi della tua condizione filiale nello Spirito Santo,"),
                                array('-','',"uniscici a te mediante lo Spirito Santo nella lode al Padre."),
                                array('','',"Donaci la sapienza per agire secondo il Vangelo,"),
                                array('-','',"tutta la nostra vita renda testimonianza al tuo nome."),
                                array('','',"Tu che sei buono e pietoso, lento all'ira e grande nell'amore,"),
                                array('-','',"fa' che viviamo sempre in pace con tutti.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Uniti in fraterna esultanza, acclamiamo Cristo che è risorto e vive immortale. Diciamo con fede:"),
                                array('ris','I',"Re della gloria, ascolta la nostra preghiera."),
                            ),
                            array(
                                array('','',"Ti preghiamo per i vescovi, i presbiteri e i diaconi,"),
                                array('-','',"perché promuovano nel popolo cristiano il senso di corresponsabilità al servizio del Vangelo."),
                                array('','',"Ti preghiamo per i teologi e i catechisti,"),
                                array('-','',"perché servano la verità con purezza di spirito."),
                                array('','',"Ti preghiamo per tutti i membri del popolo di Dio,"),
                                array('-','',"perché combattano la pacifica battaglia della fede e ricevano il premio del tuo regno."),
                                array('','',"Tu che sulla croce hai distrutto la sentenza della nostra condanna,"),
                                array('-','',"spezza le catene della schiavitù e liberaci dal male."),
                                array('','',"Tu che hai liberato dagli inferi le anime dei giusti che attendevano il Salvatore,"),
                                array('-','',"riunisci tutti i nostri morti nella gioia del Paradiso.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Al Cristo, che mediante la risurrezione ha confermato nella speranza il suo popolo, innalziamo la nostra preghiera:"),
                                array('ris','I',"O Cristo, che vivi in eterno, ascoltaci."),
                            ),
                            array(
                                array('','',"Signore Gesù, che dal cuore aperto hai fatto scaturire sangue ed acqua,"),
                                array('-','',"rendi pura e santa la tua Chiesa."),
                                array('','',"Tu che hai affidato a Pietro la cura pastorale del tuo popolo,"),
                                array('-','',"proteggi il papa ... e confermalo nella carità al servizio della santa Chiesa."),
                                array('','',"Hai trasformato i pescatori di Galilea in apostoli del tuo regno,"),
                                array('-','',"manda operai alla tua Chiesa a continuare l'opera della salvezza."),
                                array('','',"Sulla riva del lago hai preparato il pane e il pesce per i tuoi discepoli,"),
                                array('-','',"fa' che nessuno dei nostri fratelli soffra la fame per colpa nostra."),
                                array('','',"O Gesù, nuovo Adamo e spirito datore di vita, fa' che i defunti portino l'immagine della tua gloria,"),
                                array('-','',"e godano la pienezza della tua felicità.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"Gloria e onore a Cristo che ci ha resi partecipi del suo Spirito. Rivolgiamo a lui la nostra preghiera:"),
                                array('ris','I',"Cristo, ascoltaci."),
                            ),
                            array(
                                array('','',"Effondi sulla Chiesa lo Spirito che procede dal Padre,"),
                                array('-','',"perché la purifichi, la fortifichi e la propaghi fino ai confini della terra."),
                                array('','',"Illumina i legislatori, i magistrati e i governanti,"),
                                array('-','',"fa' che collaborino al bene di tutta la comunità."),
                                array('','',"Manda il tuo Spirito quale Padre dei poveri,"),
                                array('-','',"perché soccorra e consoli gli umili e gli afflitti."),
                                array('','',"Santifica coloro che hai scelto come dispensatori dei tuoi misteri,"),
                                array('-','',"fa' che siano sempre fedeli alla tua volontà."),
                                array('','',"Completa nelle anime e nei corpi dei defunti la tua opera di salvezza,"),
                                array('-','',"dona loro la gioia eterna in virtù della tua passione, risurrezione e ascensione al cielo.")
                            )
                        );
                    }
                }
            }

            if ($this->actual['weekDay']==3) {

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Preghiamo con fiducia il Cristo, morto a causa dei nostri peccati e risorto per la nostra giustificazione:"),
                                array('ris','I',"Salva il tuo popolo, Signore, per la tua risurrezione."),
                            ),
                            array(
                                array('','',"Cristo, che risorgendo dai morti ci hai ridonato la speranza della vita immortale,"),
                                array('-','',"guidaci in questo giorno con la forza del tuo Spirito."),
                                array('','',"Tu che regni glorioso nell'assemblea degli angeli e dei santi,"),
                                array('-','',"rendici adoratori del Padre in spirito e verità."),
                                array('','',"Mostra la tua misericordia al popolo che proclama la tua risurrezione,"),
                                array('-','',"liberaci oggi e sempre dalle insidie del male."),
                                array('','',"Cristo, Re dei secoli, quando verrai nella gloria,"),
                                array('-','',"riunisci i tuoi fedeli nella gioia senza fine.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Il Signore Gesù, risuscitato dai morti, è apparso ai discepoli con i segni della sua gloria. Nel suo nome preghiamo Dio, nostro Padre:"),
                                array('ris','I',"Illumina il tuo popolo, Signore, con la gloria del tuo Figlio."),
                            ),
                            array(
                                array('','',"Padre santo, che ci hai chiamati dalle tenebre alla luce, accogli la nostra lode,"),
                                array('-','',"e donaci oggi l'esperienza del tuo amore."),
                                array('','',"Sostieni con il tuo Spirito chi si sforza di costruire un mondo più umano,"),
                                array('-','',"fa' che la giustizia e la pace regnino su tutta la terra."),
                                array('','',"Donaci il desiderio vivo di servirti nei fratelli,"),
                                array('-','',"e di trasformare il mondo intero in offerta a te gradita."),
                                array('','',"Illumina con la tua presenza l'inizio di questo giorno,"),
                                array('-','',"fa' che tutto il nostro tempo sia scandito dalla tua lode.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"Lo Spirito Santo rende testimonianza al nostro spirito che siamo figli di Dio. Con questa consolante certezza diciamo insieme:"),
                                array('ris','I',"Padre nostro, ascolta i tuoi figli."),
                            ),
                            array(
                                array('','',"Dio, fonte di ogni consolazione, donaci di avere verso gli altri gli stessi sentimenti di Gesù Cristo,"),
                                array('-','',"per glorificarti con un solo animo e una sola voce."),
                                array('','',"Fa' che dimostriamo concretamente il nostro amore per il prossimo,"),
                                array('-','',"per edificare il tuo regno di giustizia e di pace."),
                                array('','',"Non permettere che siamo travolti dallo spirito del male,"),
                                array('-','',"ci guidi sempre il tuo Santo Spirito."),
                                array('','',"Tu che scandagli mente e cuore degli uomini,"),
                                array('-','',"fa' che camminiamo sempre nella via della sincerità e della verità.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Supplichiamo Cristo, risorto dai morti, che vive e regna alla destra del Padre:"),
                                array('ris','I',"Cristo, vita nostra, ascoltaci."),
                            ),
                            array(
                                array('','',"Ricordati di tutti coloro che svolgono un ministero nella Chiesa,"),
                                array('-','',"fa' che diano esempio di vita veramente evangelica."),
                                array('','',"Illumina con il tuo Spirito i legislatori e i governanti,"),
                                array('-','',"perché promuovano il progresso nella giustizia e nella pace."),
                                array('','',"Apri i cuori di tutti gli uomini alla speranza della salvezza,"),
                                array('-','',"fa' che i poveri abbiano la loro parte al banchetto della vita."),
                                array('','',"Tu che ci hai liberato dalla schiavitù del peccato e della morte,"),
                                array('-','',"accogli nella pace i nostri fratelli che oggi hanno lasciato questo mondo.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Supplichiamo Dio Padre che in Cristo suo Figlio ci ha aperto il passaggio alla vita eterna:"),
                                array('ris','I',"Per la vittoria di Cristo salva il tuo popolo, Signore."),
                            ),
                            array(
                                array('','',"Dio dei nostri padri, che hai glorificato il Figlio tuo, donaci la grazia di una vera conversione,"),
                                array('-','',"fa' che tutta la nostra vita proclami la Pasqua di Cristo."),
                                array('','',"Tu che ci hai riuniti, chiamandoci al Pastore e Custode delle nostre anime,"),
                                array('-','',"conservaci nella fede per mezzo dei pastori della santa Chiesa."),
                                array('','',"Hai scelto i primi discepoli del Figlio tuo nell'antico popolo eletto,"),
                                array('-','',"aiuta i figli d'Israele a riconoscere in Cristo il compimento delle tue promesse."),
                                array('','',"Ricordati degli emarginati, degli orfani, delle vedove,"),
                                array('-','',"non abbandonare nessuno di quelli che Cristo ha redento con il suo sangue."),
                                array('','',"Hai chiamato il promartire Stefano a condividere la gloria del tuo Figlio,"),
                                array('-','',"accogli nel tuo regno tutti i defunti che hanno lottato e sofferto a causa della fede.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"In unione ai nostri fratelli che godono le primizie dello Spirito, lodiamo e invochiamo Dio nostro Padre:"),
                                array('ris','I',"Signore, ascoltaci."),
                            ),
                            array(
                                array('','',"Dio onnipotente, che hai dato al Cristo la gloria di sedere alla tua destra nei cieli,"),
                                array('-','',"fa' che lo riconosciamo ancora presente qui in terra nella Chiesa e in tutti i bisognosi."),
                                array('','',"Tu che hai comandato di ascoltare il tuo Figlio,"),
                                array('-','',"fa' che tutti ascoltino la sua voce e siano salvi."),
                                array('','',"Manda il tuo Spirito nel cuore dei tuoi fedeli,"),
                                array('-','',"ci purifichi dal male e ci dia l'entusiasmo del bene."),
                                array('','',"Il tuo Spirito orienti il corso della nostra storia,"),
                                array('-','',"guidi il mondo nella via della pace."),
                                array('','',"Accogli nel riposo eterno i nostri pastori defunti,"),
                                array('-','',"ravviva in noi la speranza della risurrezione futura.")
                            )
                        );
                    }
                } 
            }

            if ($this->actual['weekDay']==4) {

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Cristo risorto è sempre presente nella sua Chiesa. Uniti nella lode del mattino rivolgiamo a lui la nostra supplica:"),
                                array('ris','I',"Resta con noi, Signore."),
                            ),
                            array(
                                array('','',"Signore Gesù, vincitore del peccato e della morte,"),
                                array('-','',"fa' ardere il nostro cuore con la tua presenza e la tua parola."),
                                array('','',"Vieni a noi con la tua potenza invincibile,"),
                                array('-','',"e fa' sentire ai nostri spiriti la bontà infinita di Dio."),
                                array('','',"Tu che sei la fonte della nostra pace,"),
                                array('-','',"salva il mondo dalla violenza e dalla discordia."),
                                array('','',"Ritempra la nostra fede nella vittoria finale,"),
                                array('-','',"e confermaci nell'attesa della beata speranza e della gloria.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Dio Padre ha dato il suo Figlio come principio di risurrezione e di vita nuova. Nel suo nome innalziamo la nostra umile preghiera:"),
                                array('ris','I',"Santifica il tuo popolo, Signore."),
                            ),
                            array(
                                array('','',"Nell'Esodo hai guidato gli Ebrei con la colonna di fuoco,"),
                                array('-','',"fa' che il Cristo sia per noi luce di vita."),
                                array('','',"Sul monte Sinai hai istituito il popolo nella tua legge,"),
                                array('-','',"fa' che il Cristo risorto sia per noi oggi parola di vita."),
                                array('','',"Nel deserto hai nutrito il tuo popolo con la manna,"),
                                array('-','',"fa' che il Cristo risorto sia per noi oggi pane di vita."),
                                array('','',"Hai dissetato il tuo popolo con l'acqua scaturita dalla roccia,"),
                                array('-','',"fa' che il Cristo risorto doni a noi oggi colui che è Spirito di vita.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"Benedetto sia Cristo Signore, perché per mezzo di lui possiamo presentarci tutti al Padre in un solo Spirito. Sollecitiamo la sua bontà:"),
                                array('ris','I',"O Cristo, accogli la nostra preghiera."),
                            ),
                            array(
                                array('','',"Manda il tuo Spirito come ospite dei nostri cuori,"),
                                array('-','',"donaci la grazia di non contristarlo mai."),
                                array('','',"Tu che sei risuscitato dai morti e siedi alla destra di Dio,"),
                                array('-','',"intercedi sempre per noi presso il Padre."),
                                array('','',"Unisci pastori e fedeli nella comunione del tuo Spirito,"),
                                array('-','',"fa' che nulla, né vita, né morte, ci separi mai da te."),
                                array('','',"Rendici accoglienti e ospitali gli uni verso gli altri,"),
                                array('-','',"come tu ci hai accolto per amore del Padre.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Pieni di fede preghiamo Cristo, primizia di coloro che risorgono dai morti:"),
                                array('ris','I',"Cristo, che sei risuscitato dai morti, ascoltaci."),
                            ),
                            array(
                                array('','',"Signore, ricordati della tua Chiesa santa, edificata sul fondamento degli apostoli e diffusa nel mondo intero,"),
                                array('-','',"benedici tutti coloro che invocano il tuo nome."),
                                array('','',"Tu che sei il medico dei corpi e delle anime,"),
                                array('-','',"salvaci con la forza del tuo amore."),
                                array('','',"Solleva e conforta i malati,"),
                                array('-','',"liberali da tutte le loro sofferenze."),
                                array('','',"Aiuta coloro che sono affaticati e oppressi,"),
                                array('-','',"soccorri i poveri e i sofferenti."),
                                array('','',"Tu che con la morte e la risurrezione hai aperto la via dell'immortalità,"),
                                array('-','',"ricevi nella tua pace i morti a causa della violenza e dell'odio.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Uniti in fraterna esultanza invochiamo il Cristo risorto, costituito dal Padre principio e fondamento della nostra speranza:"),
                                array('ris','I',"O Re della gloria, ascoltaci."),
                            ),
                            array(
                                array('','',"Signore Gesù, che con il tuo sangue e con la tua risurrezione sei entrato una volta per sempre nel santuario del cielo,"),
                                array('-','',"guidaci con te alla gloria del Padre."),
                                array('','',"Hai sostenuto la fede degli apostoli e hai accreditato la loro missione con la testimonianza del tuo Spirito,"),
                                array('-','',"fa' che i vescovi e i presbiteri siano efficaci messaggeri della tua parola."),
                                array('','',"Sei per tutti sorgente di riconciliazione e di pace,"),
                                array('-','',"fa' che i cristiani si uniscano in comunione di fede e di carità."),
                                array('','',"Per la fede nella tua risurrezione hai risanato lo zoppo alla porta del tempio,"),
                                array('-','',"volgi il tuo sguardo sui nostri malati e manifesta loro la tua gloria."),
                                array('','',"Sei la primizia della morte che salva e della risurrezione,"),
                                array('-','',"ammetti nella tua luce immortale coloro che hanno sperato in te.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==7) {

                        $this->testo=array(
                            array(
                                array('','',"Preghiamo il Cristo Salvatore, perché ci doni la pienezza del suo Spirito:"),
                                array('ris','I',"Santifica, o Signore, il popolo che tu hai redento."),
                            ),
                            array(
                                array('','',"Il tuo Spirito edifichi la Chiesa nell'unità e nella pace,"),
                                array('-','',"la preservi da ogni lacerazione o discordia."),
                                array('','',"Tu che ci hai riscattati dalla schiavitù di Satana,"),
                                array('-','',"libera il mondo dalla cupidigia e da ogni forma di sopraffazione."),
                                array('','',"Cristo Signore, consacrato dallo Spirito per il ministero messianico mentre pregavi il Padre,"),
                                array('-','',"fa' che i sacerdoti compenetrino la loro vita di preghiera per renderla feconda nello Spirito."),
                                array('','',"Il tuo Spirito illumini i potenti della terra,"),
                                array('-','',"perché vincano le tentazioni del potere e cerchino sinceramente il bene dell'umanità."),
                                array('','',"Tu che vivi nella gloria del Padre,"),
                                array('-','',"accogli i defunti nella tua luce sempiterna.")
                            )
                        );
                    }
                } 
            }

            if ($this->actual['weekDay']==5) {

                //puntatore al giorno dopo l'ascensione
                $idx=strtotime('+1 day',mainFunc::gab_tots($this->actual['ASC']));

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"A Dio Padre, che in Cristo risorto fa risplendere a tutti gli uomini la speranza della vita nuova, si innalzi la nostra preghiera:"),
                                array('ris','I',"Padre, da' a noi la gloria del tuo Figlio."),
                            ),
                            array(
                                array('','',"Dio santo e fedele, che manifesti la tua misericordia a tutte le generazioni,"),
                                array('-','',"rinnova nel nostro tempo i prodigi della Pasqua."),
                                array('','',"Purifica i nostri cuori con la luce della tua verità,"),
                                array('-','',"guidaci sulla via della giustizia e dell'amore."),
                                array('','',"Fa' risplendere su di noi il tuo volto,"),
                                array('-','',"liberaci dal male e saziaci con i beni della tua casa."),
                                array('','',"Tu che hai dato agli apostoli la tua pace,"),
                                array('-','',"fa' che essa regni su tutta la terra.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Cristo ascese al cielo per mandare lo Spirito Santo sugli apostoli. A lui s'innalzi la lode della Chiesa:"),
                                array('ris','I',"Manda a noi il tuo Spirito, o Signore."),
                            ),
                            array(
                                array('','',"Cristo, che sei salito al cielo, manda a noi lo Spirito promesso dal Padre,"),
                                array('-','',"trasformaci con la potenza che viene dall'alto."),
                                array('','',"Tu che ci vuoi prudenti come i serpenti e semplici come le colombe,"),
                                array('-','',"compi questo prodigio con la sapienza del tuo Spirito."),
                                array('','',"Tu che siedi alla destra del Padre, prega per noi come nostro Sacerdote,"),
                                array('-','',"prega in noi come nostro Capo."),
                                array('','',"Nelle prove e nei dolori dona a noi di sentirci partecipi della tua passione,"),
                                array('-','',"perché condividiamo in eterno la tua gloria.")
                            )
                        );
                    }

                    ////////////////////////////////////////////
                    if ($this->actual['settimana']==7 || ($this->actual['settimana']==6 && $this->actual['today']==date('Ymd',$idx)) ) {

                        $this->testo=array(
                            array(
                                array('','',"Preghiamo il Cristo Signore, che mediante il suo Spirito fa abbondare nei nostri cuori la speranza della vita nuova. Diciamo insieme:"),
                                array('ris','I',"Salva il tuo popolo, Signore."),
                            ),
                            array(
                                array('','',"Signore, che conosci i limiti e la povertà della nostra preghiera,"),
                                array('-','',"fa' che interceda per noi il tuo Spirito."),
                                array('','',"Manda il tuo Spirito, tua luce beatissima,"),
                                array('-','',"ci rinnovi a immagine della tua gloria."),
                                array('','',"Non dimenticare che siamo opera delle tue mani,"),
                                array('-','',"salvaci dalle suggestioni del male."),
                                array('','',"Insegnaci ad accogliere con bontà gli increduli e i lontani,"),
                                array('-','',"fa' che trattiamo tutti con umanità e mitezza.")
                            )
                        );
                    }
                }

                if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo Cristo, via, verità e vita e rivolgiamo a lui la nostra fervida preghiera:"),
                                array('ris','I',"Figlio del Dio vivo, benedici il tuo popolo."),
                            ),
                            array(
                                array('','',"Noi ti preghiamo per i pastori della santa Chiesa,"),
                                array('-','',"fa' che spezzando il pane della vita crescano nella tua carità."),
                                array('','',"Noi ti preghiamo per il popolo cristiano,"),
                                array('-','',"fa' che viva in modo coerente la sua vocazione e conservi l'unità nel vincolo della pace."),
                                array('','',"Noi ti preghiamo per i legislatori e i governanti,"),
                                array('-','',"fa' che promuovano la giustizia e la fraternità di tutti gli uomini."),
                                array('','',"Ti preghiamo per i nostri fratelli defunti,"),
                                array('-','',"fa' che siano felici nella comunione gloriosa dei tuoi santi.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Preghiamo unanimi il Cristo, fonte della vita e principio di ogni santità:"),
                                array('ris','I',"Regna in mezzo a noi, Signore."),
                            ),
                            array(
                                array('','',"Gesù Salvatore, crocifisso secondo la carne, perennemente vivo e vivificante nello Spirito,"),
                                array('-','',"fa' che, morti al peccato, viviamo la vita nuova secondo lo Spirito."),
                                array('','',"Tu che hai mandato i discepoli a predicare il Vangelo ad ogni creatura,"),
                                array('-','',"sostieni con il tuo Spirito i missionari della tua parola."),
                                array('','',"Tu che hai ricevuto dal Padre ogni potere in cielo e in terra, per rendere testimonianza alla verità,"),
                                array('-','',"guida con la tua sapienza coloro che ci governano."),
                                array('','',"Tu che ci comandi di attendere operosi e vigilanti la tua venuta nella gloria,"),
                                array('-','',"fa' che quanto più attendiamo i cieli nuovi e la terra nuova, tanto più lavoriamo per il progresso e la pace."),
                                array('','',"Sei sceso agli inferi per portare agli antichi padri l'annunzio della salvezza,"),
                                array('-','',"riunisci nella gioia eterna tutti i nostri morti.")
                            )
                        );
                    }

                    /////////////////////////////////////////
                    if ($this->actual['settimana']==7 || ($this->actual['settimana']==6 && $this->actual['today']==date('Ymd',$idx)) ) {

                        $this->testo=array(
                            array(
                                array('','',"Dio Padre ha voluto effondere anche sui pagani il dono dello Spirito Santo. Preghiamo perché nel nostro tempo si rinnovino i prodigi della Pentecoste:"),
                                array('ris','I',"Effondi su di noi il tuo Spirito, o Signore."),
                            ),
                            array(
                                array('','',"Padre, che hai fatto brillare nelle tenebre del mondo la luce del tuo Figlio,"),
                                array('-','',"rivela ai pagani di oggi lo splendore della tua verità."),
                                array('','',"Tu che hai consacrato il tuo Figlio in Spirito Santo come Messia e Salvatore,"),
                                array('-','',"fa' che egli passi ancora in mezzo a noi beneficando e sanando tutti."),
                                array('','',"Donaci nel tuo Spirito la luce dei cuori,"),
                                array('-','',"rafforza nella fede i dubbiosi e i vacillanti."),
                                array('','',"Manda il tuo Spirito, riposo nella fatica,"),
                                array('-','',"solleva coloro che sono vinti dalla stanchezza e dalla sfiducia."),
                                array('','',"Compi la speranza dei nostri fratelli defunti,"),
                                array('-','',"perché alla venuta di Cristo partecipino alla gloria della risurrezione.")
                            )
                        );
                    }
                } 
            }

            if ($this->actual['weekDay']==6) {

                //puntatore a 2 giorni dopo l'ascensione
                $idx=strtotime('+2 day',mainFunc::gab_tots($this->actual['ASC']));

                if ($this->actual['ora']=='lodi') {

                    if ($this->actual['settimana']==1 || $this->actual['settimana']==3 || $this->actual['settimana']==5)  {
                        
                        $this->testo=array(
                            array(
                                array('','',"Preghiamo Cristo, pane di vita, che darà la risurrezione gloriosa a coloro che si assidono degnamente alla mensa della sua parola e del suo corpo:"),
                                array('ris','I',"Donaci, Signore, la tua gioia pasquale."),
                            ),
                            array(
                                array('','',"Cristo, che risuscitato dai morti sei diventato principio e fonte della vita immortale,"),
                                array('-','',"benedici e santifica tutti gli uomini della terra."),
                                array('','',"Tu che doni ai credenti la gioia e la pace,"),
                                array('-','',"fa' che camminiamo in novità di vita nella luce della tua Pasqua."),
                                array('','',"Conferma nella fede la tua Chiesa pellegrina sulla terra,"),
                                array('-','',"perché renda testimonianza al mondo della tua risurrezione."),
                                array('','',"Tu che attraverso la passione sei entrato nella gloria del Padre,"),
                                array('-','',"trasforma in gioia perfetta i lutti e i dolori del mondo.")
                            )
                        );
                    }

                    elseif ($this->actual['settimana']==2 || $this->actual['settimana']==4 || $this->actual['settimana']==6) {

                        $this->testo=array(
                            array(
                                array('','',"Uniti nella preghiera di lode, acclamiamo e invochiamo il Cristo che ci ha rivelato la vita eterna:"),
                                array('ris','I',"La tua risurrezione ci colmi di grazia, o Signore."),
                            ),
                            array(
                                array('','',"Pastore eterno, guarda il tuo popolo che anela a risorgere,"),
                                array('-','',"sazialo con la tua parola e con il pane della vita."),
                                array('','',"Non permettere che il tuo gregge sia disgregato da lupi e da mercenari,"),
                                array('-','',"fa' che proceda sicuro sulla via della salvezza."),
                                array('','',"Tu che cooperi sempre con gli annunziatori del tuo Vangelo e li confermi con i tuoi carismi,"),
                                array('-','',"fa' che ognuno di noi oggi proclami la tua risurrezione con la coerenza della vita."),
                                array('','',"Sii tu la nostra gioia che nessuno possa toglierci,"),
                                array('-','',"liberaci dalla tristezza del peccato e ravviva in noi il desiderio del cielo.")
                            )
                        );
                    }

                    ////////////////////////////////////////////
                    if ($this->actual['settimana']==7 || ($this->actual['settimana']==6 && $this->actual['today']==date('Ymd',$idx)) ) {

                        $this->testo=array(
                            array(
                                array('','',"Santificati nel Battesimo per offrire il sacrificio di lode, glorifichiamo Dio nostro Padre insieme ai fratelli sparsi nel mondo. Diciamo con fede:"),
                                array('ris','I',"Signore Gesù, rinnovaci nel tuo Spirito."),
                            ),
                            array(
                                array('','',"Manda su di noi il tuo Spirito,"),
                                array('-','',"perché ti proclamiamo davanti a tutti nostro Re e Signore."),
                                array('','',"Suscita in noi la carità autentica e sincera,"),
                                array('-','',"fa' che ci amiamo gli uni gli altri come tu ci hai insegnato."),
                                array('','',"Prepara la nostra comunità ad accogliere il dono dello Spirito,"),
                                array('-','',"la sua venuta segni l'inizio di una vita nuova."),
                                array('','',"Donaci la potenza del tuo Santo Spirito,"),
                                array('-','',"perché guarisca le nostre ferite e rianimi le nostre forze nel cammino della salvezza.")
                            )
                        );
                    }
                }
            }

            //###################################

            if ($this->actual['evCode']=='PAS') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo, autore della vita, fu risuscitato dal Padre e farà risorgere anche noi con la potenza del suo Spirito. Uniti nella gioia pasquale acclamiamo:"),
                            array('ris','I',"Cristo, vita nostra, salvaci."),
                        ),
                        array(
                            array('','',"Cristo, luce fulgida, splendente nelle tenebre, principio e sorgente di vita nuova,"),
                            array('-','',"trasforma questo giorno in un dono di gioia pasquale."),
                            array('','',"Signore, che hai percorso la via della passione e della croce,"),
                            array('-','',"donaci di comunicare alla tua morte redentrice per condividere la gloria della tua risurrezione."),
                            array('','',"Figlio di Dio, maestro e fratello nostro, che hai fatto di noi una stirpe eletta, un sacerdozio regale,"),
                            array('-','',"insegnaci ad offrirti in letizia il sacrificio della lode."),
                            array('','',"Re della gloria, attendiamo il giorno splendido della tua manifestazione,"),
                            array('-','',"quando contempleremo il tuo volto senza veli e saremo simili a te.")
                        )
                    );
                }

                elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo è sempre vivo per intercedere a nostro favore. Tutta la Chiesa lo acclami e lo invochi:"),
                            array('ris','I',"Re glorioso, ascolta la nostra voce."),
                        ),
                        array(
                            array('','',"Luce e salvezza di tutte le genti,"),
                            array('-','',"manda il tuo Spirito su coloro che celebrano la tua risurrezione."),
                            array('','',"Il popolo ebraico riconosca in te il Messia atteso e sperato,"),
                            array('-','',"tutta la terra sia piena della tua gloria."),
                            array('','',"Mantienici nella comunione dei santi durante il pellegrinaggio terreno,"),
                            array('-','',"donaci di perseverare nella fede fino al giorno della tua venuta."),
                            array('','',"Tu che hai vinto il peccato e la morte,"),
                            array('-','',"fa' che viviamo sempre per te."),
                            array('','',"Tu che dall'umiliazione della croce fosti innalzato alla destra del Padre,"),
                            array('-','',"accogli i nostri morti nella gloria del tuo regno.")
                        )
                    );
                }
            }

            elseif ($this->actual['evCode']=='ASC') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo, innalzato da terra, attrae tutti a sé, La Chiesa lo saluta e lo invoca:"),
                            array('ris','I',"Tu sei il re della gloria, o Cristo."),
                        ),
                        array(
                            array('','',"Signore Gesù, che avendo offerto un solo sacrificio una volta per sempre, regni vittorioso alla destra del Padre,"),
                            array('-','',"rendi perfetti nell'amore coloro che hai redenti con il tuo sangue."),
                            array('','',"Sacerdote eterno e mediatore della nuova alleanza, che intercedi per la nostra pace,"),
                            array('-','',"salva il popolo cristiano, che prega unito a te nello Spirito Santo."),
                            array('','',"Dopo la passione sei apparso per quaranta giorni ai tuoi discepoli,"),
                            array('-','',"confermaci nella fede oggi e sempre."),
                            array('','',"Hai promesso ai discepoli lo Spirito Santo, per renderli tuoi testimoni sino ai confini della terra,"),
                            array('-','',"rafforza la nostra testimonianza con la potenza dello Spirito Santo.")
                        )
                    );
                }

                elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Acclamiamo con gioia il Cristo che siede alla destra del Padre:"),
                            array('ris','I',"Tu sei il re della gloria, o Cristo."),
                        ),
                        array(
                            array('','',"Signore, che hai portato nei cieli la nostra fragile umanità,"),
                            array('-','',"distruggi in noi la colpa antica e ridonaci la dignità perduta."),
                            array('','',"Sei disceso a noi per la via dell'amore,"),
                            array('-','',"per essa guidaci tutti dove tu sei."),
                            array('','',"Hai promesso di attirare ogni cosa a te,"),
                            array('-','',"non permettere che ci separiamo dalla Chiesa, che è tuo corpo."),
                            array('','',"Ci hai preceduto nella casa della gloria,"),
                            array('-','',"donaci di abitarvi fin d'ora col cuore."),
                            array('','',"Quando verrai per giudicare il mondo,"),
                            array('-','',"fa' che insieme ai nostri fratelli defunti celebriamo la tua infinita misericordia.")
                        )
                    );
                }
            }

        }

        /////////////////////////////////////////////

        if ($this->actual['tempo']=='O') {

            if ($this->actual['evCode']=='BAT') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Invochiamo il nostro Redentore, che ha voluto ricevere il battesimo da Giovanni nel Giordano:"),
                            array('ris','I',"Signore, pietà.")
                        ),
                        array(
                            array('','',"Cristo, che nella tua gloriosa manifestazione al Giordano hai fatto risplendere su di noi la tua luce,"),
                            array('-','',"illumina con la tua presenza coloro che incontreremo in questa giornata."),
                            array('','',"Tu che sottomettendoti a Giovanni nel battesimo, ci hai insegnato la via dell'umiltà,"),
                            array('-','',"donaci lo spirito di bontà e mitezza verso i nostri fratelli."),
                            array('','',"Nel Battesimo ci hai lavati dalla colpa e ci hai resi figli di Dio,"),
                            array('-','',"dona lo spirito di adozione filiale a tutti coloro che ti cercano."),
                            array('','',"Con il tuo battesimo hai santificato la creazione e hai aperto agli uomini la via del ritorno al Padre,"),
                            array('-','',"rendici fedeli ministri del Vangelo nella Chiesa e nel mondo."),
                            array('','',"Nel tuo battesimo ci hai fatto conoscere la Santa Trinità di Dio,"),
                            array('-','',"donaci di adorarla con culto perfetto in spirito e verità.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Invochiamo il nostro Redentore, che ha voluto ricevere il battesimo da Giovanni nel Giordano:"),
                            array('ris','I',"Manda su di noi il tuo Santo Spirito.")
                        ),
                        array(
                            array('','',"Cristo, servo di Dio, in cui il Padre ha posto la sua compiacenza,"),
                            array('-','',"donaci di vivere del tuo Santo Spirito per piacere sempre al Padre."),
                            array('','',"Cristo, eletto di Dio, che non spezzi la canna incrinata e non spegni il lucignolo fumigante,"),
                            array('-','',"abbi pietà degli increduli e dei peccatori che ti cercano con cuore sincero."),
                            array('','',"Cristo, Figlio di Dio, mediatore della nuova alleanza, inviato dal Padre per essere luce di tutte le genti,"),
                            array('-','',"apri gli occhi dei catecumeni alla pienezza della fede mediante il Battesimo."),
                            array('','',"Cristo, consacrato dal Padre nello Spirito Santo per la tua missione di salvezza,"),
                            array('-','',"fa' che tutti gli uomini credano in te ed abbiano la vita eterna."),
                            array('','',"Cristo, speranza nostra, che guidi alla luce della salvezza coloro che sono immersi nelle tenebre,"),
                            array('-','',"accogli nel tuo regno i nostri fratelli defunti.")
                        )
                    );
                }
                
            }

            if ($this->actual['evCode']=='PEN') {

                if ($this->actual['ora']=='ves1') {

                    $this->testo=array(
                        array(
                            array('','',"Trascorsi i giorni dell'antica Pentecoste, scese dal cielo sugli apostoli lo Spirito consolatore. Celebrando il grande mistero, preghiamo Dio Padre perché lo rinnovi in noi:"),
                            array('ris','I',"Manda il tuo Spirito e rinnova la faccia della terra.")
                        ),
                        array(
                            array('','',"Tu che hai creato il mondo e lo hai redento per mezzo del tuo Figlio,"),
                            array('-','',"manda il tuo Spirito a rinnovare il volto della terra."),
                            array('','',"Tu che hai formato l'uomo a tua immagine e gli hai dato un'anima immortale,"),
                            array('-','',"manda lo Spirito Santo alla tua Chiesa, perché configurata a Cristo diventi l'anima del mondo."),
                            array('','',"Fa' risplendere fra gli uomini del nostro tempo la luce del tuo Spirito,"),
                            array('-','',"dov'è l'odio, fa' fiorire l'amore, dov'è il dolore metti la gioia, dov'è la guerra la pace."),
                            array('','',"Lava le nostre colpe nell'acqua viva del tuo Spirito,"),
                            array('-','',"risana le ferite dei nostri peccati."),
                            array('','',"Tu che, per virtù dello Spirito Santo, introduci gli uomini nella vita e nella gloria,"),
                            array('-','',"fa' che i defunti, purificati dalla sua grazia, entrino nel tuo gaudio eterno.")
                        )
                    );
                }

                elseif ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Gloria e lode a Cristo che mediante il suo Spirito ci ha riuniti nella santa Chiesa. Diciamo con fede:"),
                            array('ris','I',"Rinnova, Signore, il volto della terra.")
                        ),
                        array(
                            array('','',"Signore Gesù, che dal tuo cuore trafitto hai fatto scaturire le sorgenti della vita,"),
                            array('-','',"manda a noi il tuo Spirito come principio della creazione nuova."),
                            array('','',"Tu che dal cielo hai effuso sugli apostoli il Dono del Padre,"),
                            array('-','',"manda il tuo Spirito a rinnovare l'umanità intera."),
                            array('','',"Hai dato agli apostoli il potere di perdonare i peccati,"),
                            array('-','',"manda il tuo Spirito per la riconciliazione e la salvezza del mondo."),
                            array('','',"Hai promesso lo Spirito Santo come maestro e consolatore,"),
                            array('-','',"donaci la sapienza del Vangelo."),
                            array('','',"Hai promesso lo Spirito Santo per rafforzarci nella fede,"),
                            array('-','',"rendici nel mondo testimoni del tuo amore.")
                        )
                    );
                }

                elseif ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti in fraterna esultanza, invochiamo Dio Padre che nella Pentecoste ha rivelato al mondo la Chiesa del Signore, e rivolgiamo a lui la nostra fervida preghiera:"),
                            array('ris','I',"Manda, o Padre, lo Spirito Santo alla tua Chiesa.")
                        ),
                        array(
                            array('','',"Mediante il Battesimo ci chiami a far parte di un solo corpo in un solo Spirito,"),
                            array('-','',"fa' che i credenti in Cristo formino un cuore solo e un'anima sola."),
                            array('','',"Hai donato agli uomini la presenza rinnovatrice del tuo Spirito,"),
                            array('-','',"aiutaci a edificare una società più giusta e più umana."),
                            array('','',"Ci hai rivelato nello Spirito il tuo disegno di unità e di pace,"),
                            array('-','',"riunisci nella tua Chiesa tutti i figli dispersi."),
                            array('','',"Nel tuo Spirito ci illumini e consoli,"),
                            array('-','',"guarisci gli infermi, conforta i sofferenti, dona a tutti pace e salvezza."),
                            array('','',"Mediante il tuo Spirito hai risuscitato dai morti il Cristo tuo Figlio,"),
                            array('-','',"dona ai nostri fratelli defunti la vita immortale.")
                        )
                    );
                }                
            }

            if ($this->actual['evCode']=='TRI') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Adoriamo e benediciamo la Santa Trinità, principio e sorgente di ogni bene:"),
                            array('ris','I',"Gloria al Padre e al Figlio e allo Spirito Santo.")
                        ),
                        array(
                            array('','',"Padre santo, poiché non sappiamo pregare come si conviene, donaci il tuo Santo Spirito,"),
                            array('-','',"perché aiuti la nostra debolezza e interceda per noi."),
                            array('','',"Figlio di Dio, che hai donato lo Spirito Santo alla tua Chiesa,"),
                            array('-','',"fa' che resti sempre con noi e ci confermi nella verità."),
                            array('','',"Vieni, o Spirito consolatore, e donaci i tuoi frutti di santità,"),
                            array('-','',"amore, gioia, pace, pazienza, benevolenza, bontà, fedeltà, mitezza, castità."),
                            array('','',"Eterno Padre, hai effuso nei nostri cuori il tuo Spirito che grida: abba! Padre!"),
                            array('-','',"Fa' che ci sentiamo in lui figli tuoi e diveniamo in eterno coeredi di Cristo."),
                            array('','',"O Cristo, hai mandato lo Spirito che procede dal Padre, perché ti rendesse testimonianza davanti al mondo,"),
                            array('-','',"fa' che, illuminati dalla sua verità, professiamo apertamente il tuo Vangelo.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Dio Padre per opera dello Spirito Santo ha glorificato l'umanità del Cristo e l'ha costituita per noi sorgente di vita e di salvezza. Riuniti nella lode della sera adoriamo la Santa Trinità:"),
                            array('ris','I',"Gloria al Padre e al Figlio e allo Spirito Santo.")
                        ),
                        array(
                            array('','',"Padre, grande e misericordioso, nel nome del tuo Figlio effondi lo Spirito Santo Paraclito sulla tua Chiesa,"),
                            array('-','',"perché la custodisca nella comunione della verità e dell'amore."),
                            array('','',"Manda operai nella tua messe perché ammaestrino gli uomini e li battezzino nel nome del Padre e del Figlio e dello Spirito Santo,"),
                            array('-','',"e li confermino nella comunione vitale a questo mistero."),
                            array('','',"Dio Padre, sostieni coloro che sono perseguitati per il nome del Figlio tuo,"),
                            array('-','',"lo Spirito Santo che ha promesso gli renda testimonianza per bocca loro."),
                            array('','',"Fa' che tutti gli uomini conoscano te, o Padre, che con il Figlio e lo Spirito Santo sei l'unico Dio,"),
                            array('-','',"credano in te, sperino in te, vivano nel tuo amore."),
                            array('','',"Accogli i nostri defunti nella gloria dei cieli,"),
                            array('-','',"dove il tuo Figlio e lo Spirito Santo regnano con te in eterno.")
                        )
                    );
                }
            }

            if ($this->actual['evCode']=='COD') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo è il pane della vita. La Chiesa acclama con gioia:"),
                            array('ris','I',"Beato chi siede alla mensa del tuo regno, Signore.")
                        ),
                        array(
                            array('','',"Cristo, sacerdote della nuova ed eterna alleanza, che sulla croce hai offerto al Padre i sacrificio perfetto,"),
                            array('-','',"insegna anche a noi ad offrirlo degnamente insieme a te."),
                            array('','',"Cristo, re di giustizia e di pace, che sotto i segni del pane e del vino ci hai dato il memoriale della tua immolazione sulla croce,"),
                            array('-','',"accetta anche noi come offerta a Dio gradita."),
                            array('','',"Cristo, che hai voluto perpetuare in ogni parte della terra, la tua offerta pura e santa,"),
                            array('-','',"fa' che quanti si nutrono di un unico pane siano uniti in un solo corpo."),
                            array('','',"Cristo, che nutri la tua Chiesa con il sacramento del tuo Corpo e del tuo Sangue,"),
                            array('-','',"fa' che, rinvigoriti da questo cibo, giungiamo al tuo monte santo."),
                            array('','',"Cristo, invisibile ospite del nostro banchetto, che stai alla porta e bussi,"),
                            array('-','',"vieni da noi, cena con noi e noi con te.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Cristo nella Cena pasquale ha donato il suo Corpo e il suo Sangue per la vita del mondo. Riuniti nella preghiera di lode, invochiamo il suo nome:"),
                            array('ris','I',"Cristo, pane del cielo, dà a noi la vita eterna.")
                        ),
                        array(
                            array('','',"Cristo, Figlio del Dio vivo, che ci hai comandato di celebrare l'Eucaristia in tua memoria,"),
                            array('-','',"fa' che vi partecipiamo sempre con fede e amore a beneficio di tutta la Chiesa."),
                            array('','',"Cristo, unico e sommo sacerdote, che hai affidato ai tuoi sacerdoti i santi misteri,"),
                            array('-','',"fa' che essi esprimano nella vita ciò che celebrano nel sacramento."),
                            array('','',"Cristo, che riunisci in un solo corpo quanti si nutrono di uno stesso pane,"),
                            array('-','',"accresci nella nostra comunità la concordia e la pace."),
                            array('','',"Cristo, che nell'Eucaristia ci dai il farmaco dell'immortalità e il pegno della risurrezione,"),
                            array('-','',"dona la salute agli infermi e il perdono ai peccatori."),
                            array('','',"Cristo, che nell'Eucaristia ci dai la grazia di annunziare la tua morte e risurrezione fino al giorno della tua venuta,"),
                            array('-','',"rendi partecipi della tua gloria i nostri fratelli defunti.")
                        )
                    );
                }  
            }

            if ($this->actual['evCode']=='SCG') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Rivolgiamo con fiducia la nostra preghiera a Gesù mite e umile di cuore:"),
                            array('ris','I',"Mostraci, o Signore, la tua misericordia.")
                        ),
                        array(
                            array('','',"Gesù, in cui dimora la pienezza della divinità,"),
                            array('-','',"fa' che partecipiamo alla tua vita immortale."),
                            array('','',"Gesù, che possiedi i tesori della sapienza e della scienza,"),
                            array('-','',"rivela nella santa Chiesa la multiforme sapienza del Padre."),
                            array('','',"Gesù, Figlio prediletto, nel quale il Padre ha riposto la sua compiacenza,"),
                            array('-','',"fa' che ascoltiamo fedelmente la tua parola e la testimoniamo con la coerenza della vita."),
                            array('','',"Gesù, dalla cui pienezza riceviamo ogni bene,"),
                            array('-','',"riversa su di noi la grazia e la verità del Padre."),
                            array('','',"Gesù, fonte di vita e di santità,"),
                            array('-','',"rinnovaci e santificaci nel tuo amore.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Invochiamo con fede Gesù redentore, perché dia pace e ristoro alle nostre anime:"),
                            array('ris','I',"Signore misericordioso, abbi pietà di noi.")
                        ),
                        array(
                            array('','',"Signore Gesù che dal tuo petto squarciato hai fatto nascere la Chiesa tua sposa,"),
                            array('-','',"rendila sempre santa e immacolata."),
                            array('','',"Gesù, tempio santo di Dio, distrutto dagli uomini e riedificato dal Padre,"),
                            array('-','',"fa' che la tua Chiesa sia il santuario vivente della tua gloria."),
                            array('','',"Gesù, re e centro di tutti i cuori, rivelaci la grandezza della tua misericordia,"),
                            array('-','',"rinnova con gli uomini del nostro tempo il tuo patto d'amore."),
                            array('','',"Gesù, nostra pace e riconciliazione, che distruggendo ogni inimicizia sulla croce, ci hai riuniti in un solo uomo nuovo,"),
                            array('-','',"donaci di venire a te uniti nel medesimo Spirito."),
                            array('','',"Gesù, che ti sei fatto obbediente fino alla morte,"),
                            array('-','',"rendi partecipi della tua gloria coloro che si sono addormentati nel tuo nome.")
                        )
                    );
                } 
            }

            if ($this->actual['evCode']=='GRE') {

                if ($this->actual['ora']=='lodi') {

                    $this->testo=array(
                        array(
                            array('','',"Uniti nella preghiera di lode, glorifichiamo e invochiamo il Cristo, Re dell'universo:"),
                            array('ris','I',"Venga il tuo regno, Signore.")
                        ),
                        array(
                            array('','',"Cristo Gesù, che sei il capo e il signore del tuo popolo,"),
                            array('-','',"guidaci sulla via che conduce alla salvezza eterna."),
                            array('','',"Pastore buono, che hai dato la vita per le tue pecorelle,"),
                            array('-','',"resta sempre con noi e non ci mancherà nulla."),
                            array('','',"Redentore nostro, costituito dal Padre Re del cielo e della terra,"),
                            array('-','',"donaci di collaborare all'edificazione del tuo regno di giustizia e di pace."),
                            array('','',"Re eterno, che sei venuto nel mondo per rendere testimonianza alla verità,"),
                            array('-','',"fa' che ogni uomo riconosca il tuo primato in tutte le cose."),
                            array('','',"Maestro e modello nostro, che ci hai chiamati a far parte del tuo regno,"),
                            array('-','',"conservaci santi e irreprensibili fino al giorno della tua venuta.")
                        )
                    );
                }

                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                    $this->testo=array(
                        array(
                            array('','',"Acclamiamo Cristo, Re dell'universo, che è prima di tutte le cose e in cui tutto sussiste, e diciamo con fede:"),
                            array('ris','I',"Signore, venga il tuo regno.")
                        ),
                        array(
                            array('','',"Cristo, nostro Re e pastore raduna il tuo gregge da ogni parte della terra,"),
                            array('-','',"guidalo ai pascoli della verità e della vita."),
                            array('','',"Cristo, nostro capo e salvatore, rinnova e santifica il tuo popolo,"),
                            array('-','',"rafforza i deboli, raccogli i dispersi, richiama gli increduli all'unità della fede."),
                            array('','',"Cristo, giudice del mondo, prendici accanto a te nella gloria, quando consegnerai il tuo regno nelle mani del Padre,"),
                            array('-','',"donaci l'eredità eterna preparata per noi fin dalla fondazione del mondo."),
                            array('','',"Re di pace, infrangi gli ordigni e le trame della guerra,"),
                            array('-','',"fa' che tutti gli uomini conoscano un'era di giustizia e di pace."),
                            array('','',"Cristo, erede di tutte le genti, fa' che l'umanità mossa dallo Spirito Santo, si raccolga nella tua Chiesa,"),
                            array('-','',"tutta la terra ti riconosca come suo capo e signore."),
                            array('','',"Cristo, primizia di coloro che si risvegliano dal sonno della morte,"),
                            array('-','',"accogli i nostri fratelli defunti nella gloria del tuo regno.")
                        )
                    );
                }
            }
        }

        //////////////////////////////////////////////////////////////////////////////////////

        if ($this->actual['evCode']=='0202a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Uniti nella liturgia di lode, acclamiamo e invochiamo il nostro Salvatore, presentato al tempio da Maria e Giuseppe:"),
                        array('ris','I',"O luce delle genti, illumina il tuo popolo.")
                    ),
                    array(
                        array('','',"Signore, che secondo la legge hai voluto essere presentato al Padre nel tempio di Gerusalemme,"),
                        array('-','',"insegna a noi a offrirci con te nel sacrificio della tua Chiesa."),
                        array('','',"Cristo Gesù, nostra gioia e salvezza, cercato e trovato nella casa del Padre tuo da Simeone, uomo giusto,"),
                        array('-','',"fa' che ti riconosciamo e ti incontriamo anche noi nelle membra sofferenti della tua Chiesa."),
                        array('','',"Atteso dalle genti, la profetessa Anna parlava di te a tutti coloro che aspettavano la redenzione di Israele,"),
                        array('-','',"insegnaci ad annunziare degnamente il tuo Vangelo."),
                        array('','',"Pietra angolare del regno di Dio, posta come segno di contraddizione,"),
                        array('-','',"fa' che gli uomini, vivendo nella fede e nella carità, trovino in te la risurrezione e la vita.")
                    )
                );
            }

            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Adoriamo il nostro Salvatore, presentato oggi al tempio e rivolgiamogli con fede la nostra preghiera:"),
                        array('ris','I',"I nostri occhi vedano la tua salvezza, o Signore.")
                    ),
                    array(
                        array('','',"Cristo salvatore, che sei luce per illuminare le genti,"),
                        array('-','',"illumina coloro che non ti conoscono, perché credano in te, unico Dio vivo e vero."),
                        array('','',"O Gesù, che sei la gloria del tuo popolo,"),
                        array('-','',"fa' risplendere la tua Chiesa su tutta la terra."),
                        array('','',"O Salvatore, desiderato dalle genti, che ti sei rivelato al santo vecchio Simeone,"),
                        array('-','',"fa' che tutti gli uomini ti riconoscano e si salvino."),
                        array('','',"Signore, che per bocca del santo vecchio Simeone hai preannunziato alla Madre tua la spada di dolore che avrebbe trafitto la sua anima,"),
                        array('-','',"sostieni e conforta coloro che soffrono a causa del tuo nome."),
                        array('','',"Cristo, beatitudine dei santi, che Simeone poté contemplare prima del suo congedo da questo mondo,"),
                        array('-','',"mostrati per sempre ai defunti che sospirano di vedere il tuo volto nella Gerusalemme del cielo.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='0210a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Uniti nella fede e nella lode a quanti celebrano oggi nella gioia la festa di Santa Scolastica, ripetiamo insieme:"),
                        array('ris','I',"Regna in noi, Signore.")
                    ),
                    array(
                        array('','',"Sii benedetto, o Dio di misericordia, per il dono che ci hai fatto della Chiesa, tua sposa;"),
                        array('-','',"fa' che l'amiamo e la edifichiamo nella fedeltà alla nostra vocazione monastica."),
                        array('','',"Tu che ci hai chiamato a seguire Gesù povero e umile, ubbidiente e orante,"),
                        array('-','',"fa' che la nostra vita sia sacrificio perfetto di lode a te gradito."),
                        array('','',"Tu che ci sproni incessantemente con la voce ineffabile del tuo Spirito,"),
                        array('-','',"fa' che progredendo ogni giorno, nella conversione e nella vita di fede, con cuore aperto avanziamo generosi nella via dei tuoi precetti, nella indicibile dolcezza dell'amore."),
                        array('','',"Tu che in Gesù ci hai chiamati alla luce,"),
                        array('-','',"donaci di essere trasparenza della tua luce, per la salvezza del mondo.")
                    )
                );
            }

            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"A Gesù, dono del Padre, che ci vuole sulla via della donazione totale per la sua gloria e per la salvezza del mondo, eleviamo la nostra fiduciosa preghiera:"),
                        array('ris','I',"Gesù, ascoltaci.")
                    ),
                    array(
                        array('','',"Tu che vuoi la tua Chiesa santa e immacolata nel tuo amore,"),
                        array('-','',"fa' che quanti hai chiamato alla vita monastica, perseverando ogni giorno nell'umile fedeltà dell'amore, si consumino gioiosamente per te, come lucerne ardenti."),
                        array('','',"Nell'esaudire la supplica di santa Scolastica, tu hai mostrato quale potenza ha presso il Padre la preghiera di un cuore puro, assetato di cielo;"),
                        array('-','',"fa' che la preghiera monastica sia sempre più voce e forza della tua Chiesa, fermento di vita e di grazia nel mondo."),
                        array('','',"Tu che ci hai scelto per parlare al nostro cuore nel deserto silenzioso del chiostro,"),
                        array('-','',"fa' che, per intercessione di santa Scolastica, la nostra vita di ascolto sia lode della tua gloria e mistero di salvezza per le anime."),
                        array('','',"In ogni tempo tu scegli coloro che ami, e li chiami a seguirti:"),
                        array('-','',"fa' che la convinta adesione e la fedele coerenza alla nostra chiamata susciti, per intercessione di santa Scolastica, nuove e autentiche vocazioni alla vita benedettina."),
                        array('','',"Tu che vuoi la felicità delle anime e la gloria del Padre,"),
                        array('-','',"ammetti alla gioia del tuo regno i monaci e le monache passati da questa vita, perché possano continuare in eterno la lode nella Gerusalemme celeste.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='0319a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Supplichiamo il Signore, datore di ogni bene e principio di ogni santità:"),
                        array('ris','I',"Santifica il tuo popolo, Signore.")
                    ),
                    array(
                        array('','',"Signore Dio, che hai chiamato alla fede i nostri padri, perché camminassero davanti a te con fedeltà e rettitudine,"),
                        array('-','',"aiutaci a vivere secondo lo spirito del Vangelo."),
                        array('','',"Hai scelto san Giuseppe come custode e guida di Gesù fanciullo e adolescente,"),
                        array('-','',"fa' che impariamo a servire il Cristo nei nostri fratelli."),
                        array('','',"Hai affidato la terra all'uomo per farne il suo regno e la sua dimora,"),
                        array('-','',"insegnaci a lavorare per la giustizia e la pace a lode e gloria del tuo nome."),
                        array('','',"Ricordati, o Padre, dell'opera delle tue mani,"),
                        array('-','',"fa' che tutti abbiano un lavoro sicuro e una condizione degna di uomini liberi.")
                    )
                );
            }

            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Rivolgiamo la nostra comune preghiera a Dio, da cui prende nome ogni paternità in cielo e sulla terra:"),
                        array('ris','I',"Padre nostro, che sei nei cieli, ascoltaci.")
                    ),
                    array(
                        array('','',"Padre santo, che hai rivelato a san Giuseppe il mistero di Cristo nascosto nei secoli eterni,"),
                        array('-','',"donaci di conoscere e di amare sempre più il tuo Figlio fatto uomo per la nostra salvezza."),
                        array('','',"Tu che nutri gli uccelli dell'aria e vesti i gigli del campo,"),
                        array('-','',"dona a tutti gli uomini il pane quotidiano."),
                        array('','',"Hai affidato alle nostre mani l'opera della tua creazione,"),
                        array('-','',"concedi agli operai, agli artigiani, ai contadini un'adeguata ricompensa delle loro fatiche."),
                        array('','',"O fonte di ogni santità, che chiami tutti gli uomini a configurarsi a te,"),
                        array('-','',"concedi a noi, per intercessione di san Giuseppe, di camminare in santità e giustizia tutti i giorni della nostra vita."),
                        array('','',"Guarda con bontà ai moribondi e ai defunti,"),
                        array('-','',"fa' che siano eternamente felici con Gesù, Giuseppe e Maria.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='0321a') {

            if ($this->actual['ora']=='ves1') {

                $this->testo=array(
                    array(
                        array('','',"Chiamati, con l'aiuto di Cristo, a correre verso la patria celeste lungo la via tracciata dal santo padre Benedetto, abbiamo, invece, di che arrossire per la nostra pigrizia e negligenza. Supplichiamo il Padre perché ci conceda, con il perdono, la forza di pervenire a quelle vette di sapienza e di virtù che ci sono proposte:"),
                        array('ris','I',"Signore, proteggi la tua famiglia.")
                    ),
                    array(
                        array('','',"A coloro che nella Chiesa fanno le veci del Cristo tuo Figlio,"),
                        array('-','',"concedi di saper insegnare con la vita e la parola ciò che è secondo il Vangelo."),
                        array('','',"Difficile e ardua è l'opera di reggere anime e farsi servo di tutti:"),
                        array('-','',"dona la tua sapienza ai nostri abati perché non solo non subiscano perdite, ma possano rallegrarsi per l'incremento del gregge affidato alle loro cure."),
                        array('','',"Tu sei l'unico Padre e il Cristo è l'unico Maestro:"),
                        array('-','',"fa' che nella tua Chiesa i doni della parola e dell'insegnamento siano preceduti e convalidati da quelli del silenzio e dell'ascolto."),
                        array('','',"Poiché nulla abbiamo più caro del Cristo tuo Figlio, e aneliamo sinceramente al regno dei cieli,"),
                        array('-','',"concedi che non viviamo più a nostro arbitrio, secondo i nostri desideri e gusti, ma desideriamo camminare nel monastero sotto la guida e l'autorità di chi ci parla in tuo nome."),
                        array('','',"Tu chiami i monaci a vivere in una condizione di umiltà:"),
                        array('-','',"conducili, mediante l'esperienza della loro miseria e povertà, unita a quella della tua misericordia, a riconoscersi gli ultimi con la parola e con la vita."),
                        array('','',"Animati dal tuo santo zelo, noi desideriamo prevenirci a vicenda nel casto amore fraterno e nella carità sincera e umile verso l'abate, nella incessante scoperta del volto di Cristo:"),
                        array('-','',"egli ci conduca alla vita eterna, dove, con la Vergine Maria e con tutti i santi monaci, ci attendono i confratelli che ci han preceduti in questa santa dimora.")
                    )
                );
            }

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Ogni giorno lo Spirito del Signore fa udire la sua voce a questa comunità: aprendo il nostro cuore ai suoi inviti, disponiamoci a seguire le sue ispirazioni, ora nella preghiera e durante le occupazioni che ci attendono:"),
                        array('ris','I',"Il tuo Spirito, Signore, sia la nostra guida.")
                    ),
                    array(
                        array('','',"Nel cuore della notte ci alziamo per lodarti, durante il giorno proclamiamo la tua gloria:"),
                        array('-','',"concedi che in questa opera divina, il nostro spirito e la nostra vita siano in sintonia con la nostra voce."),
                        array('','',"Tu che ami chi dona con gioia,"),
                        array('-','',"fa' che la nostra obbedienza sia senza trepidazione o lentezza, senza cattiva volontà e mormorazione, per essere a te gradita e soave agli uomini."),
                        array('','',"Tu che ci chiami a vivere da fratelli sotto una Regola e un Abate,"),
                        array('-','',"aiutaci a perseverare in questo fraterno combattimento che ci purifica da vizi e peccati, perché la nostra consacrazione non diventi un mentire a te e agli uomini."),
                        array('','',"Fa' che nessuno di noi si insuperbisca per i propri doni e capacità o perché rende utili servizi al monastero,"),
                        array('-','',"ma in ogni cosa sia glorificato il tuo nome.")
                    )
                );
            }

            if ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Coscienti che il nostro ufficio principale è quello di prestare umile e insieme nobile servizio alla Maestà divina, con cuore generoso compiamo il nostro servizio di intercessione e di lode:"),
                        array('ris','I',"Scenda la tua pace sul mondo, o Signore!")
                    ),
                    array(
                        array('','',"Tu ci chiami ad una continua attenzione a te nella solitudine e nel silenzio, in continua preghiera e intensa opera di conversione:"),
                        array('-','',"accogli il sacrificio di lode vespertina e aumenta in noi la fede nella misteriosa fecondità apostolica della nostra vita."),
                        array('','',"Infondi nei cuori dei monaci e delle monache del nostro tempo, il timore e l'amore per il tuo nome,"),
                        array('-','',"perché liberi dai tumulti e dalle delizie del mondo che hanno lasciato, possano servirti con tutte le forze del corpo e dello spirito."),
                        array('','',"Tu che hai suscitato il santo patriarca Benedetto per rivalutare il senso cristiano della vita attraverso l'esperienza e la testimonianza dell'ideale monastico,"),
                        array('-','',"aiutaci ad esser poveri con Cristo povero, senza ricchezza né potere per affermarci e difenderci, fidando solo nel tuo amore misericordioso, nella certezza gioiosa della speranza."),
                        array('','',"Fa' di ogni nostro monastero una comunità viva e concorde di fratelli che pregano e amano, come gli apostoli nel cenacolo con Maria,"),
                        array('-','',"perché possiamo essere segno autentico della tua presenza nel mondo d'oggi e nella tua Chiesa."),
                        array('','',"Tu ci hai chiamati a cercare te con cuore sincero, nella gioiosa attesa della Pasqua:"),
                        array('-','',"accogli nel tuo regno quanti hanno militato fedelmente nella scuola del servizio divino.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='1208a') {

            //Immacolata: testi del Comune della B.V. Maria; i Primi Vespri come i Secondi Vespri
            if ($this->actual['ora']=='lodi') $this->testo=$this->comuneBVM('lodi');
            elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') $this->testo=$this->comuneBVM('ves2');
        }

        elseif ($this->actual['evCode']=='0325a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Celebrando gli inizi della nostra redenzione nel giorno dell'Annunciazione a Maria, preghiamo con fiducia Dio nostro Padre:"),
                        array('ris','I',"Interceda per noi la santa Madre di Dio.")
                    ),
                    array(
                        array('','',"Come Maria accolse con fede l'annunzio dell'angelo,"),
                        array('-','',"donaci, o Padre, di accogliere con gioia la parola del nostro Salvatore."),
                        array('','',"Tu che hai guardato l'umiltà della tua serva,"),
                        array('-','',"abbi pietà di noi e di tutti gli uomini del nostro tempo."),
                        array('','',"Come Maria, nuova Eva, aderì pienamente alla tua parola,"),
                        array('-','',"fa' che accettiamo con amore la tua volontà."),
                        array('','',"La santa Madre di Dio soccorra i miseri, conforti i deboli e gli oppressi,"),
                        array('-','',"preghi per il popolo, protegga il clero, interceda per le vergini consacrate.")
                    )
                );
            }

            if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Con animo fiducioso invochiamo Dio Padre che oggi per mezzo dell'angelo ha annunziato a Maria il messaggio della salvezza:"),
                        array('ris','I',"Signore, donaci la tua grazia.")
                    ),
                    array(
                        array('','',"Hai eletto la Vergine Maria, perché divenisse Madre del tuo Figlio,"),
                        array('-','',"guarda con bontà a tutti coloro che attendono la redenzione."),
                        array('','',"Per bocca dell'angelo hai annunziato a Maria la gioia e la pace,"),
                        array('-','',"dona al mondo la gioia e la pace del tuo regno."),
                        array('','',"Per opera dello Spirito Santo e con l'assenso di Maria Vergine hai fatto abitare fra noi il tuo Verbo eterno,"),
                        array('-','',"disponici ad accogliere il Cristo come lo accolse la Vergine Maria."),
                        array('','',"Tu che innalzi gli umili e colmi di beni gli affamati,"),
                        array('-','',"aiuta i deboli, solleva gli sfiduciati, conforta i morenti."),
                        array('','',"Dio grande e misericordioso, a cui nulla è impossibile,"),
                        array('-','',"salvaci dal peccato e dalla morte e dona ai nostri defunti l'eredità eterna.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='0624a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Preghiamo con fiducia il Cristo nostro Salvatore che mandò Giovanni Battista come precursore a preparare le sue vie e chiediamo la grazia della sua visita:"),
                        array('ris','I',"O sole, che sorgi dall'alto, vieni a visitare il tuo popolo.")
                    ),
                    array(
                        array('','',"Hai fatto sobbalzare di gioia Giovanni nel seno di Elisabetta,"),
                        array('-','',"donaci di sperimentare continuamente la letizia della tua venuta."),
                        array('','',"Ci hai indicato la via della penitenza con la parola e la vita del Battezzatore,"),
                        array('-','',"donaci la conversione del cuore e la conformità alle esigenze del tuo regno."),
                        array('','',"Hai voluto essere annunziato agli uomini per bocca di un loro fratello,"),
                        array('-','',"manda nel mondo intero missionari del tuo Vangelo."),
                        array('','',"Hai voluto essere battezzato nel Giordano da Giovanni, perché si adempisse in tutto il disegno di Dio,"),
                        array('-','',"fa' che collaboriamo instancabilmente al tuo regno di giustizia e di pace.")
                    )
                );
            }

            elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Glorifichiamo Dio Padre, che ha scelto Giovanni Battista come suo messaggero, per annunziare agli uomini il regno di Cristo. Nel ricordo del grande precursore chiediamo a Dio il dono della conversione:"),
                        array('ris','I',"Signore, guida i nostri passi sulla via della pace.")
                    ),
                    array(
                        array('','',"Hai chiamato Giovanni dal grembo di sua madre a preparare le vie del tuo Figlio,"),
                        array('-','',"fa' che ci disponiamo alla sequela di Cristo, con la stessa dedizione di colui che lo ha preceduto."),
                        array('','',"Hai dato a Giovanni il privilegio di additare come presente a Israele il Cristo, Agnello di Dio,"),
                        array('-','',"fa' che la tua Chiesa lo proponga in modo efficace al nostro tempo."),
                        array('','',"Hai voluto che il tuo profeta diminuisse, mentre cresceva il Cristo, tuo Figlio,"),
                        array('-','',"insegnaci ad anteporre al successo personale il servizio della verità."),
                        array('','',"Del tuo martire Giovanni Battista hai fatto il profeta franco e coraggioso della giustizia e della verità,"),
                        array('-','',"rendici testimoni leali e fermi della legge di Cristo."),
                        array('','',"Ricordati, Signore, di tutti coloro che hanno lasciato questo mondo,"),
                        array('-','',"prendili con te nella dimora della luce e della pace.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='0629a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Cristo ha amato la sua Chiesa e l'ha edificata sul fondamento degli apostoli e dei profeti. Pieni di fede invochiamo il suo aiuto:"),
                        array('ris','I',"Benedici la tua Chiesa, Signore.")
                    ),
                    array(
                        array('','',"Hai pregato per Pietro, perché non venisse meno la sua fede,"),
                        array('-','',"conferma la fede della tua Chiesa."),
                        array('','',"Dopo la risurrezione sei apparso a Simon Pietro e ti sei manifestato a Paolo sulla via di Damasco,"),
                        array('-','',"illumina le nostre menti, perché riconosciamo in te il Figlio del Dio vivente."),
                        array('','',"Hai eletto Paolo apostolo per annunziare il tuo nome alle genti,"),
                        array('-','',"rendici testimoni e annunziatori del Vangelo."),
                        array('','',"Hai perdonato l'apostolo Pietro che ti aveva rinnegato tre volte,"),
                        array('-','',"rimetti a noi tutti i nostri debiti.")
                    )
                );
            }

            elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Rivolgiamo la nostra preghiera umile e fiduciosa al Cristo Signore, che ha fondato la sua Chiesa sul fondamento degli apostoli e dei profeti:"),
                        array('ris','I',"Assisti il tuo popolo, Signore.")
                    ),
                    array(
                        array('','',"Hai chiamato Simone il pescatore, perché divenisse pescatore di uomini,"),
                        array('-','',"non cessare di scegliere operai del Vangelo, perché siano salve tutte le genti."),
                        array('','',"Hai placato il lago in tempesta, perché i tuoi discepoli non fossero sommersi,"),
                        array('-','',"difendi la tua Chiesa dagli errori e dalle inquietudini che sconvolgono la faccia della terra."),
                        array('','',"Dopo la risurrezione hai radunato i discepoli intorno a Pietro,"),
                        array('-','',"proteggi il nostro papa ... e raccogli il tuo popolo nell'unità e nella pace."),
                        array('','',"Hai mandato l'apostolo Paolo ad annunziare il Vangelo ai pagani,"),
                        array('-','',"fa' che la parola di salvezza sia predicata ad ogni creatura."),
                        array('','',"Hai affidato all'apostolo Pietro le chiavi del tuo regno,"),
                        array('-','',"apri le porte del cielo a coloro che in vita si sono affidati alla tua misericordia.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='0711a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Sostenuti dal ricordo e dall'intercessione del santo patrono del continente europeo, grande maestro di vita evangelica, eleviamo a Cristo la nostra umile preghiera:"),
                        array('ris','I',"Rinnovaci nello spirito, o Signore.")
                    ),
                    array(
                        array('','',"L'esempio di san Benedetto ci insegni a porre sempre te e il tuo regno al primo posto,"),
                        array('-','',"quale scopo e bene supremo della nostra esistenza."),
                        array('','',"Fa' che nel pellegrino, nel povero e nell'afflitto onoriamo la tua persona divina,"),
                        array('-','',"come fece e insegnò il tuo grande discepolo che oggi celebriamo."),
                        array('','',"Donaci di non dissociare il lavoro dalla preghiera,"),
                        array('-','',"ad imitazione di san Benedetto che seguì te e i tuoi apostoli come modello."),
                        array('','',"Insegnaci a rigettare ogni odiosa discriminazione dei fratelli,"),
                        array('-','',"nello spirito di giusta uguaglianza, che san Benedetto apprese dal tuo Vangelo.")
                    )
                );
            }

            elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Eleviamo la nostra preghiera a Dio che con san Benedetto volle rinnovare il suo messaggio di pace e di salvezza in un mondo sconvolto e disorientato:"),
                        array('ris','I',"Guida i popoli nella pace, o Signore.")
                    ),
                    array(
                        array('','',"In epoche di tempestose fluttuazioni hai ancorato san Benedetto e la sua opera alla roccia della tua parola,"),
                        array('-','',"trovino i popoli nel tuo Vangelo la stabilità dell'ordine, della giustizia e della pace."),
                        array('','',"Il tuo servo e i suoi seguaci fecero rifiorire le più genuine tradizioni umane nel solco della fede,"),
                        array('-','',"la società civile vi scopra la migliore garanzia per i diritti dell'uomo."),
                        array('','',"Hai reso mirabile il legislatore della vita monastica per saggezza, equilibrio, sensibilità umana e cristiana,"),
                        array('-','',"concedi le stesse doti ai nostri legislatori e pastori."),
                        array('','',"Il santo patrono d'Europa ottenga ai nostri popoli di formare una comunità unita e prosperosa per il bene e il progresso di tutto il genere umano,"),
                        array('-','',"nel rispetto della tua legge e nella cooperazione feconda con la tua Chiesa."),
                        array('','',"Hai fatto di san Benedetto un novello Abramo, padre di moltitudini di santi,"),
                        array('-','',"ammetti i nostri defunti nella loro dimora di gloria.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='0806a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Preghiamo Dio nostro Padre nel nome di Cristo, che sul santo monte rivelò ai discepoli la sua divinità. Diciamo con fede:"),
                        array('ris','I',"Nella tua luce, Signore, vediamo la luce.")
                    ),
                    array(
                        array('','',"O Padre, che sul Tabor hai indicato nel Cristo tuo Figlio il nostro Maestro e Redentore,"),
                        array('-','',"fa' che ascoltiamo con fede la tua parola."),
                        array('','',"O Dio, che sazi i tuoi eletti dell'abbondanza della tua casa e li disseti al torrente delle tue delizie,"),
                        array('-','',"donaci di trovare nel Cristo la fonte dell'acqua zampillante per la vita eterna."),
                        array('','',"Nel volto di Cristo hai fatto risplendere la luce della tua gloria,"),
                        array('-','',"suscita in noi lo spirito di contemplazione."),
                        array('','',"Nel tuo Figlio fatto uomo hai rivelato il tuo disegno universale di salvezza,"),
                        array('-','',"illumina tutti gli uomini con la luce del Vangelo."),
                        array('','',"Nel tuo immenso amore hai voluto che ci chiamiamo e siamo realmente tuoi figli,"),
                        array('-','',"quando Cristo apparirà, fa' che siamo trasfigurati a immagine della sua gloria.")
                    )
                );
            }

            elseif ( ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Celebrando il Cristo, che manifestò ai discepoli la sua gloria sul monte Tabor, innalziamo a lui la nostra fiduciosa preghiera:"),
                        array('ris','I',"Signore, luce vera, illumina le nostre tenebre.")
                    ),
                    array(
                        array('','',"Cristo, che nella Trasfigurazione hai preparato i discepoli all'esperienza della passione,"),
                        array('-','',"fa' che la Chiesa, purificata dalle sofferenze e dalle prove, conosca la gioia della tua vittoria."),
                        array('','',"Tu che sul monte Tabor hai voluto vicino a te Pietro, Giacomo e Giovanni benedici il nostro papa ... e il nostro vescovo ... ,"),
                        array('-','',"rafforzali nella speranza della risurrezione perché servano il tuo popolo con serenità e fortezza."),
                        array('','',"Hai voluto accanto a te Mosè ed Elia come testimoni della Trasfigurazione,"),
                        array('-','',"illumina il popolo dell'Antica Alleanza perché giunga alla pienezza della redenzione."),
                        array('','',"Tu che hai irradiato sul mondo la gloria del Padre,"),
                        array('-','',"fa' che i popoli camminino nella tua luce."),
                        array('','',"Cristo, che trasfigurerai il nostro corpo mortale per conformarlo al tuo corpo glorioso,"),
                        array('-','',"configura all'immagine della tua gloria i nostri defunti.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='0815a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Celebriamo il nostro Salvatore, che ha scelto di nascere da Maria Vergine e, confidando del suo amore per lei, preghiamo:"),
                        array('ris','I',"Per Maria, piena di grazia, ascoltaci.")
                    ),
                    array(
                        array('','',"Verbo eterno, che hai eletto Maria come arca incorruttibile della tua dimora,"),
                        array('-','',"liberaci dalla corruzione del peccato."),
                        array('','',"Redentore nostro, che hai fatto di Maria il santuario degnissimo dello Spirito Santo,"),
                        array('-','',"trasformaci in tempio vivo del tuo Spirito."),
                        array('','',"Re dei re, che hai voluto esaltare Maria con la sua assunzione al cielo in anima e corpo,"),
                        array('-','',"fa' che ci sentiamo fin d'ora cittadini della Gerusalemme celeste."),
                        array('','',"Signore del cielo e della terra, che hai incoronato Maria regina dell'universo e l'hai posta alla tua destra,"),
                        array('-','',"donaci di condividere con lei l'eredità dei tuoi santi.")
                    )
                );
            }

            elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Uniti nella preghiera di lode, rendiamo grazie a Dio che ha voluto Maria amata e venerata da tutte le generazioni. Diciamo con fiducia:"),
                        array('ris','I',"Maria, piena di grazia, interceda per noi.")
                    ),
                    array(
                        array('','',"Tu che hai costituito Maria madre di misericordia,"),
                        array('-','',"fa' che sperimentiamo, in mezzo ai pericoli, la sua bontà materna."),
                        array('','',"Hai voluto Maria madre di famiglia nella casa di Nazareth,"),
                        array('-','',"fa' che tutte le mamme custodiscano la santità e l'amore."),
                        array('','',"Hai reso forte Maria ai piedi della croce e l'hai colmata di gioia nella risurrezione del tuo Figlio,"),
                        array('-','',"sostienici fra le prove della vita e rafforzaci nella speranza."),
                        array('','',"In Maria, attenta alla tua parola e serva fedele della tua volontà, ci mostri il modello e l'immagine della santa Chiesa,"),
                        array('-','',"per sua intercessione rendici veri discepoli del Cristo tuo Figlio."),
                        array('','',"Hai incoronato Maria, Regina del cielo,"),
                        array('-','',"fa' che i nostri fratelli defunti godano la felicità eterna nell'assemblea dei santi.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='0914a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Esaltiamo Cristo Signore, che ha fatto della croce il segno della redenzione universale e, supplicandolo con fede, diciamo:"),
                        array('ris','I',"Salvaci, Signore, per la tua croce.")
                    ),
                    array(
                        array('','',"Figlio di Dio, che nel deserto guarivi chi guardava la figura del serpente elevata sul palo a segno di salvezza,"),
                        array('-','',"per la tua croce curaci dai morsi velenosi dell'orgoglio e della sensualità."),
                        array('','',"Figlio dell'uomo, che fosti elevato in croce a compimento dell'antico simbolo,"),
                        array('-','',"per la tua passione sollevaci alla tua gloria."),
                        array('','',"Figlio unigenito di Dio, che ti sei immolato per la salvezza di chi crede in te,"),
                        array('-','',"concedi la vita eterna a coloro che sperano nella tua croce."),
                        array('','',"Signore, costituito dal Padre giudice universale,"),
                        array('-','',"ricordati che non sei venuto e non sei morto per la condanna, ma per la salvezza del mondo."),
                        array('','',"Tu che hai detto: Quando sarò elevato da terra trarrò tutto a me,"),
                        array('-','',"fa' che dove sei tu siamo anche noi per contemplare la tua gloria.")
                    )
                );
            }

            elseif ( ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Supplichiamo con fede il Cristo salvatore, che ci ha redenti con la sua croce:"),
                        array('ris','I',"Per il mistero della tua passione accoglici nel tuo regno, Signore.")
                    ),
                    array(
                        array('','',"Cristo, che ti sei umiliato assumendo la nostra condizione mortale,"),
                        array('-','',"fa' che la tua Chiesa ti segua nella via dell'umiltà e del sacrificio."),
                        array('','',"Cristo, che fosti obbediente fino alla morte di croce,"),
                        array('-','',"donaci di imitare la tua obbedienza filiale."),
                        array('','',"Cristo, che per la tua morte fosti esaltato da Dio e hai ricevuto un nome che è al di sopra di ogni altro nome,"),
                        array('-','',"fa' che i tuoi discepoli perseverino nella fede fino al giorno della tua venuta."),
                        array('','',"Cristo, nel cui nome si piega ogni ginocchio nei cieli, sulla terra e sotto terra,"),
                        array('-','',"fa' che gli uomini trovino pace e salvezza sotto il tuo giogo soave."),
                        array('','',"Cristo, crocifisso e risorto, che ogni lingua proclama Signore a gloria di Dio Padre,"),
                        array('-','',"accogli i nostri defunti nella beatitudine del tuo regno.")
                    )
                );
            }
        }

        elseif ($this->actual['evCode']=='1101a') {

            if ($this->actual['ora']=='lodi') {

                $this->testo=array(
                    array(
                        array('','',"Lodiamo Dio, fonte e premio di ogni santità, e invochiamolo:"),
                        array('ris','I',"Per l'intercessione di tutti i santi, ascoltaci.")
                    ),
                    array(
                        array('','',"O Dio, fonte di santità, che fai risplendere nei santi le meraviglie della tua grazia multiforme,"),
                        array('-','',"donaci di vedere sempre in loro il segno della tua potenza e del tuo amore."),
                        array('','',"Tu che nei santi offri alla tua Chiesa il riflesso e l'immagine del tuo Figlio,"),
                        array('-','',"fa' che il loro esempio ci spinga a una più intima comunione con te."),
                        array('','',"Tu che per mezzo dei santi ci ispiri il desiderio della città futura,"),
                        array('-','',"fa' che seguiamo le loro orme per giungere più sicuramente a te."),
                        array('','',"O Dio che nel memoriale eucaristico e in tutto il culto della Chiesa ci unisci alla liturgia celeste dei santi,"),
                        array('-','',"rendici degni di cantare con loro le tue lodi.")
                    )
                );
            }

            elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                $this->testo=array(
                    array(
                        array('','',"Glorifichiamo Dio, corona di tutti i santi, e con fede acclamiamo:"),
                        array('ris','I',"Salvaci, o Signore, per l'intercessione dei santi.")
                    ),
                    array(
                        array('','',"O grande Dio, che in Cristo tuo Figlio hai edificato la tua Chiesa sul fondamento degli apostoli,"),
                        array('-','',"conservaci fedeli al loro insegnamento."),
                        array('','',"Hai dato ai martiri la grazia di testimoniare il Cristo fino all'effusione del sangue,"),
                        array('-','',"rendi tutti i battezzati testimoni del Vangelo."),
                        array('','',"Alle sante vergini hai dato il privilegio di imitare Cristo nella via dei consigli evangelici,"),
                        array('-','',"fa' che non manchi mai alla santa Chiesa questo segno profetico dei beni futuri."),
                        array('','',"Nella vita dei santi riveli la tua presenza e la tua bontà,"),
                        array('-','',"fa' che, onorandoli, ci sentiamo in comunione con te."),
                        array('','',"Da' ai defunti la gioia eterna con la beata Vergine Maria, san Giuseppe e tutti i santi,"),
                        array('-','',"per la loro intercessione accogli un giorno anche noi nella gloria della tua casa.")
                    )
                );
            }
        }
    }

    //intercessioni del Comune della B.V. Maria (memorie della Madonna e Immacolata)
    function comuneBVM($ora) {

        if ($ora=='ves1') {
            return array(
                array(
                    array('','',"Riuniti nella preghiera di lode, glorifichiamo Dio, Padre onnipotente, che ci ha dato in Maria un pegno sicuro di consolazione e di speranza. Diciamo con fiducia:"),
                    array('ris','I',"Maria, piena di grazia, interceda per noi.")
                ),
                array(
                    array('','',"O Dio, operatore di prodigi, che hai concesso alla santa Vergine Maria di condividere, nell'anima e nel corpo, la gloria del Cristo risorto,"),
                    array('-','',"guidaci alla gloria immortale."),
                    array('','',"Tu che ci hai dato Maria per madre, concedi per sua intercessione la salute ai malati, il conforto agli afflitti, il perdono ai peccatori,"),
                    array('-','',"dona a tutti pace e salvezza."),
                    array('','',"Tu che hai reso piena di grazia la Vergine Maria,"),
                    array('-','',"allietaci con l'abbondanza dei doni del tuo Spirito."),
                    array('','',"Fa' che la tua Chiesa sia un cuor solo e un'anima sola;"),
                    array('-','',"donaci di perseverare unanimi nella preghiera con Maria, madre di Gesù."),
                    array('','',"Tu che hai incoronato Maria regina del cielo,"),
                    array('-','',"fa' che i nostri fratelli defunti godano la gioia eterna nell'assemblea dei santi.")
                )
            );
        }

        if ($ora=='lodi') {
            return array(
                array(
                    array('','',"Rivolgiamo la nostra lode e la nostra supplica al Cristo salvatore, nato da Maria Vergine e diciamo:"),
                    array('ris','I',"Maria, la Madre tua, sostenga la nostra preghiera.")
                ),
                array(
                    array('','',"Sole di giustizia, che hai voluto farti precedere da Maria immacolata, mistica aurora della redenzione,"),
                    array('-','',"fa' che camminiamo sempre nella luce della tua presenza."),
                    array('','',"Verbo eterno, che hai scelto Maria come arca santa per la tua dimora fra noi,"),
                    array('-','',"liberaci dalla corruzione del peccato."),
                    array('','',"Salvatore nostro, che hai voluto la Madre tua ai piedi della croce, unita nell'offerta del sacrificio,"),
                    array('-','',"fa' che comunichiamo, per sua intercessione, al mistero della tua passione e della tua gloria."),
                    array('','',"Gesù buono, che mentre pendevi dalla croce, hai dato per madre a Giovanni la Vergine addolorata,"),
                    array('-','',"concedi a noi la grazia di vivere come suoi veri figli.")
                )
            );
        }

        if ($ora=='ves' || $ora=='ves2') {
            return array(
                array(
                    array('','',"Uniti nella preghiera di lode, rendiamo grazie a Dio che ha voluto Maria amata e venerata da tutte le generazioni. Diciamo con fiducia:"),
                    array('ris','I',"Maria, piena di grazia, interceda per noi.")
                ),
                array(
                    array('','',"Tu che hai costituito Maria madre di misericordia,"),
                    array('-','',"fa' che sperimentiamo, in mezzo ai pericoli, la sua bontà materna."),
                    array('','',"Hai voluto Maria madre di famiglia nella casa di Nazareth,"),
                    array('-','',"fa' che tutte le mamme custodiscano la santità e l'amore."),
                    array('','',"Hai reso forte Maria ai piedi della croce e l'hai colmata di gioia nella risurrezione del tuo Figlio,"),
                    array('-','',"sostienici fra le prove della vita e rafforzaci nella speranza."),
                    array('','',"In Maria, attenta alla tua parola e serva fedele della tua volontà, ci mostri il modello e l'immagine della santa Chiesa,"),
                    array('-','',"per sua intercessione rendici veri discepoli del Cristo tuo Figlio."),
                    array('','',"Hai incoronato Maria, Regina del cielo,"),
                    array('-','',"fa' che i nostri fratelli defunti godano la felicità eterna nell'assemblea dei santi.")
                )
            );
        }

        return false;
    }

    function build2() {

        if ($this->actual['fesCode']!='') {

            foreach($this->actual['festa'] as $k=>$f) {

                if ($k!=$this->actual['fesCode']) continue;
            
                if ($f['comune']=='dedica') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Fratelli carissimi, noi siamo pietre vive edificate in tempio spirituale sulla pietra eletta che è Cristo. Diciamo insieme:"),
                                array('ris','I',"Santifica la tua Chiesa, Signore.")
                            ),
                            array(
                                array('','',"Padre santo, mistico agricoltore, purifica, custodisci e rendi feconda la tua vigna,"),
                                array('-','',"perché con la tua benedizione si estenda su tutta la terra."),
                                array('','',"Pastore eterno, proteggi e moltiplica il tuo gregge, che è la Chiesa,"),
                                array('-','',"fa' che tutti i popoli si raccolgano in un solo ovile e sotto un solo pastore."),
                                array('','',"Divino seminatore, semina la parola di vita eterna nel tuo campo, che è il mondo,"),
                                array('-','',"perché produca il cento per uno per la messe del tuo regno."),
                                array('','',"Sapiente costruttore, mantieni compatta la tua casa e santifica la famiglia radunata nel tuo nome,"),
                                array('-','',"perché risplenda a tutti, come nuova Gerusalemme, la sposa santa del tuo Figlio.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Innalziamo la nostra preghiera al Cristo salvatore, che ha dato la sua vita per riunire in una sola famiglia tutti i figli di Dio dispersi:"),
                                array('ris','I',"Ricordati della tua Chiesa, Signore.")
                            ),
                            array(
                                array('','',"Signore Gesù, che hai edificato la tua casa sulla roccia,"),
                                array('-','',"confermaci nella fede e nella speranza."),
                                array('','',"Signore Gesù, che dal tuo petto squarciato hai fatto scaturire sangue e acqua,"),
                                array('-','',"purifica e rinnova la tua Chiesa con i sacramenti della nuova alleanza."),
                                array('','',"Signore Gesù, presente in mezzo a coloro che si riuniscono nel tuo nome,"),
                                array('-','',"esaudisci la preghiera unanime della tua Chiesa."),
                                array('','',"Signore Gesù, che insieme al Padre e allo Spirito Santo stabilisci la tua dimora in coloro che ti amano,"),
                                array('-','',"rendi perfetta la tua Chiesa nell'esperienza del tuo amore."),
                                array('','',"Signore Gesù, che non respingi coloro che vengono a te,"),
                                array('-','',"accogli tutti i defunti nella casa del Padre.")
                            )
                        );
                    } 
                }

                elseif ($f['comune']=='BVM') {

                    $t=$this->comuneBVM($this->actual['ora']);
                    if ($t) $this->testo=$t;
                }

                elseif ($f['comune']=='apostoli') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Dio nostro Padre, per mezzo degli apostoli, ci hai fatto eredi del regno dei cieli. Riconosciamo tutti i suoi benefici acclamando:"),
                                array('ris','I',"Ti loda, Signore, il coro degli apostoli.")
                            ),
                            array(
                                array('','',"Gloria a te, Signore, per la mensa del Corpo e del Sangue di Cristo, trasmessa a noi dagli apostoli,"),
                                array('-','',"è il banchetto imbandito dal tuo Figlio, che ci nutre e ci dà vita."),
                                array('','',"Gloria a te, Signore, per la mensa della tua parola preparata a noi dagli apostoli,"),
                                array('-','',"è il Vangelo del tuo Figlio che ci illumina e ci conforta."),
                                array('','',"Gloria a te, Signore, per la tua Chiesa santa, costruita sul fondamento degli apostoli,"),
                                array('-','',"è il tuo tempio santo, che ci unisce in un solo corpo e in solo Spirito."),
                                array('','',"Gloria a te, Signore, per la grazia del Battesimo e della Penitenza affidata al ministero degli apostoli,"),
                                array('-','',"è il lavacro istituito dal tuo Figlio, che ci purifica da tutte le nostre colpe.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Edificati sul fondamento degli apostoli per formare il tempio vivo di Dio, preghiamo con fede:"),
                                array('ris','I',"Ricordati, Signore, della tua Chiesa.")
                            ),
                            array(
                                array('','',"Padre, tu hai voluto che gli apostoli fossero i primi testimoni del Figlio tuo risorto,"),
                                array('-','',"concedi a noi di essere testimoni della tua risurrezione."),
                                array('','',"Tu che hai mandato il tuo Figlio a portare il lieto annunzio ai poveri,"),
                                array('-','',"fa' che il Vangelo sia predicato a tutti gli uomini."),
                                array('','',"Hai mandato il tuo Figlio per seminare il seme della tua parola,"),
                                array('-','',"concedi una messe abbondante agli operai del Vangelo."),
                                array('','',"Hai sacrificato il tuo Figlio per riconciliare il mondo a te,"),
                                array('-','',"fa' che tutti cooperiamo generosamente alla tua opera di riconciliazione e di pace."),
                                array('','',"Hai costituito il Cristo re dell'universo innalzandolo accanto a te nella gloria,"),
                                array('-','',"accogli nel tuo regno i nostri fratelli defunti.")
                            )
                        );
                    } 
                }

                elseif ($f['comune']=='martiri' || $f['comune']=='martire') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"In unione con i santi martiri uccisi a causa del Vangelo, celebriamo e invochiamo il nostro Salvatore, testimone fedele di Dio Padre:"),
                                array('ris','I',"Ci hai redenti con il tuo sangue, o Signore.")
                            ),
                            array(
                                array('','',"Per i tuoi martiri, che abbracciarono la morte a testimonianza della fede,"),
                                array('-','',"donaci la vera libertà di spirito."),
                                array('','',"Per i tuoi martiri, che confessarono la fede sino all'effusione del sangue,"),
                                array('-','',"da' a noi una fede pura e coerente."),
                                array('','',"Per i tuoi martiri, che seguirono le tue orme sul cammino della croce,"),
                                array('-','',"fa' che sosteniamo con fortezza le prove della vita."),
                                array('','',"Per i tuoi martiri, che lavarono le vesti nel sangue dell'Agnello,"),
                                array('-','',"donaci di vincere le seduzioni della carne e del mondo.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Nell'ora in cui Cristo, re dei martiri, offrì per noi la sua vita nella cena pasquale e nell'oblazione cruenta sulla croce, s'innalzi a lui la lode della Chiesa:"),
                                array('ris','I',"Noi di lodiamo e ti adoriamo, Signore.")
                            ),
                            array(
                                array('','',"Noi ti lodiamo e ti adoriamo, o Cristo, causa e modello di ogni martirio, perché ci hai amati sino alla fine,"),
                                array('ris','I',"Noi di lodiamo e ti adoriamo, Signore."),
                                array('','',"Perché hai chiamato i peccatori pentiti al premio della vita eterna,"),
                                array('ris','I',"Noi di lodiamo e ti adoriamo, Signore."),
                                array('','',"Perché hai comandato alla tua Chiesa di offrire il sangue della nuova ed eterna alleanza, sparso per la remissione dei peccati,"),
                                array('ris','I',"Noi di lodiamo e ti adoriamo, Signore."),
                                array('','',"Perché in questo giorno ci hai dato la grazia di perseverare nella fede,"),
                                array('ris','I',"Noi di lodiamo e ti adoriamo, Signore."),
                                array('','',"Perché hai associato molti fratelli alla tua morte redentrice,"),
                                array('ris','I',"Noi di lodiamo e ti adoriamo, Signore.")
                            )
                        );
                    }
                }

                elseif ($f['comune']=='pastori') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Fratelli, eravamo erranti come pecore, ma ora siamo tornati al Pastore e Custode delle nostre anime. A lui diciamo con fede:"),
                                array('ris','I',"Signore, illumina il tuo popolo.")
                            ),
                            array(
                                array('','',"Tu che sei la guida e il capo della Chiesa,"),
                                array('-','',"aiutaci a seguirti operando la verità nella carità."),
                                array('','',"Tu che hai posto uomini come nostri pastori, per portarci il tuo annunzio di pace,"),
                                array('-','',"apri i nostri cuori ad accogliere nel loro ministero di verità la tua parola."),
                                array('','',"Tu che abiti nei nostri cuori, facci conoscere il tuo amore che supera ogni conoscenza,"),
                                array('-','',"per diventarne i testimoni in mezzo ai fratelli."),
                                array('','',"Fa' che non ci lasciamo guidare dalla sapienza del mondo e dei sui dominatori,"),
                                array('-','',"ma dal tuo Spirito che ci rivela la vera sapienza nel mistero della tua croce."),
                                array('','',"Tu che sei venuto per servire, aiutaci ad usare la nostra scienza e le nostre capacità umane,"),
                                array('-','',"per un servizio umile, semplice, discreto, silenzioso dei fratelli."),
                                array('','',"Signore, la tua luce risplenda nelle nostre opere buone davanti a tutti gli uomini,"),
                                array('-','',"perché rendano grazie al Padre che è nei cieli.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Fratelli, il Dio della pace ha fatto tornare dai morti il Pastore grande, il Signore Gesù: egli ha costituito uomini che in sua vece guidassero il suo popolo verso pascoli di vita. Diciamo con fiducia:"),
                                array('ris','I',"Signore Gesù, guidaci nella tua pace.")
                            ),
                            array(
                                array('','',"Ricordati, Signore, del nostro Papa ...,"),
                                array('-','',"sia docile all'azione dello Spirito, per poter discernere in ogni circostanza la tua volontà, per il bene di tutta la Chiesa."),
                                array('','',"Ricordati dei vescovi del mondo intero,"),
                                array('-','',"fa' che non reggano il gregge loro affidato da dominatori, ma in spirito di servizio, in unione con il Papa e tra di loro."),
                                array('','',"Ricordati dei tuoi sacerdoti impegnati nel ministero pastorale,"),
                                array('-','',"fa' che siano fedeli alla loro vocazione, siano ricchi di vita interiore, assetati di preghiera, siano disinteressati nel loro servizio, pieni di zelo e di amore verso tutti."),
                                array('','',"Il tuo giogo è dolce, il tuo carico leggero:"),
                                array('-','',"a noi che lo abbiamo liberamente accettato, concedi di non volerlo ora rigettare per amore di una falsa libertà."),
                                array('','',"Tu che nella tua misericordia ci hai rigenerati ad una speranza viva,"),
                                array('-','',"dona ai nostri defunti l'eredità eterna.")
                            )
                        );
                    }
                }

                elseif ($f['comune']=='dottori') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Fratelli, eravamo erranti come pecore, ma ora siamo tornati al Pastore e Custode delle nostre anime. A lui diciamo con fede:"),
                                array('ris','I',"Signore, illumina il tuo popolo.")
                            ),
                            array(
                                array('','',"Tu che sei la guida e il capo della Chiesa,"),
                                array('-','',"aiutaci a seguirti operando la verità nella carità."),
                                array('','',"Tu che hai posto uomini come nostri pastori, per portarci il tuo annunzio di pace,"),
                                array('-','',"apri i nostri cuori ad accogliere nel loro ministero di verità la tua parola."),
                                array('','',"Tu che abiti nei nostri cuori, facci conoscere il tuo amore che supera ogni conoscenza,"),
                                array('-','',"per diventarne i testimoni in mezzo ai fratelli."),
                                array('','',"Fa' che non ci lasciamo guidare dalla sapienza del mondo e dei sui dominatori,"),
                                array('-','',"ma dal tuo Spirito che ci rivela la vera sapienza nel mistero della tua croce."),
                                array('','',"Tu che sei venuto per servire, aiutaci ad usare la nostra scienza e le nostre capacità umane,"),
                                array('-','',"per un servizio umile, semplice, discreto, silenzioso dei fratelli."),
                                array('','',"Signore, la tua luce risplenda nelle nostre opere buone davanti a tutti gli uomini,"),
                                array('-','',"perché rendano grazie al Padre che è nei cieli.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Al Signore Gesù, via, verità e vita per tutti gli uomini, indirizziamo con fervore la nostra preghiera:"),
                                array('ris','I',"Risplenda su tutti la tua luce, Signore.")
                            ),
                            array(
                                array('','',"Signore, a quanti credono nel tuo nome e hanno in comune il tesoro della tua parola,"),
                                array('-','',"fa' scoprire più quello che li unisce di quello che li divide."),
                                array('','',"Il santo dottore ... ha saputo trar fuori dal tesoro comune della tradizione, cose nuove e cose antiche:"),
                                array('-','',"la sua parola e la sua preghiera aiutino i cristiani a camminare nella via del Vangelo."),
                                array('','',"Tanti fratelli vivono nelle tenebre del peccato e dell'errore,"),
                                array('-','',"suscita nella tua Chiesa uomini che, guidati dallo Spirito, li aiutino a ritornare a te."),
                                array('','',"La sapienza che viene dall'alto penetri i nostri cuori, Signore,"),
                                array('-','',"per renderci puri, operatori di pace, miti, pieni di misericordia e di buoni frutti."),
                                array('','',"Confidando nella materna intercessione di Maria, nostra madre,"),
                                array('-','',"ti chiediamo di introdurre nella gioia dei santi i nostri fratelli defunti.")
                            )
                        );
                    } 
                }

                elseif ($f['comune']=='monaci') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"A Cristo Signore, che ha suscitato nella sua Chiesa gli ordini monastici perché siano lungo i secoli una scuola del servizio divino, rivolgiamo la nostra preghiera:"),
                                array('ris','I',"Fa' che rispondiamo al tuo disegno, Signore.")
                            ),
                            array(
                                array('','',"Alla vita monastica tu hai dato un sommo maestro e padre, Benedetto, che rifulse come astro nelle tenebre della notte:"),
                                array('-','',"concedi a tutti i suoi figli e discepoli di seguirne fedelmente la dottrina e gli esempi."),
                                array('','',"Tu hai ispirato la Regola benedettina e tutte le regole monastiche perché nella Chiesa diano frutti di santità:"),
                                array('-','',"conserva vigili e ardenti in ogni comunità l'amore e l'osservanza della propria legge, fonte di vita."),
                                array('','',"Ai cori celesti tu hai voluto associare sulla terra i cori monastici:"),
                                array('-','',"dona al sacrificio di lode delle nostre liturgie luce e fervore, sì che giunga gradito al tuo cospetto come profumo d'incenso."),
                                array('','',"Tu hai ispirato a san Benedetto la misteriosa scala che fa ascendere al cielo gli umili:"),
                                array('-','',"dona ad ogni monaco e monaca grazia e volontà di salirla, gradino per gradino, fino alla cima della carità perfetta."),
                                array('','',"Noi veneriamo nei cieli la santità eroica di tanti nostri fratelli e sorelle, noti e sconosciuti:"),
                                array('-','',"per la loro intercessione, dona agli ordini monastici uno stuolo di santi e vocazioni generose.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"A Cristo Signore, che ha affidato agli ordini monastici una particolare missione nella Chiesa, umilmente domandiamo:"),
                                array('ris','I',"La nostra vita serva la tua Chiesa, Signore.")
                            ),
                            array(
                                array('','',"Ci hai chiamati a vivere alla tua presenza « con gli occhi aperti alla tua luce deificante e le orecchie tese ad ascoltare attoniti la tua voce »:"),
                                array('-','',"fa' che le nostre comunità mantengano vive e ardenti nella Chiesa le tradizioni della vita contemplativa."),
                                array('','',"A tutti coloro che negli ordini monastici hanno missioni di guida e stanno in luogo di te,"),
                                array('-','',"concedi luce e grazia per il loro servizio di amore."),
                                array('','',"Perché la vita monastica si diffonda in tutte le giovani Chiese del mondo,"),
                                array('-','',"dona al monachesimo di antica tradizione felice incremento e ardore missionario."),
                                array('','',"A tutti i monaci e monache che ci hanno preceduti nell'altra vita,"),
                                array('-','',"concedi l'eterna luce nella piena visione del tuo volto.")
                            )
                        );
                    }
                }

                elseif ($f['comune']=='vergini') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"A Cristo, sposo e corona delle vergini, rivolgiamo con gioia l'espressione della nostra fede:"),
                                array('ris','I',"Gesù, premio e corona delle vergini, ascolta la nostra preghiera.")
                            ),
                            array(
                                array('','',"Cristo, unico sposo delle sante vergini,"),
                                array('-','',"fa' che nulla ci separi mai dalla tua amicizia."),
                                array('','',"Tu che hai costituito Maria, tua madre, regina delle vergini,"),
                                array('-','',"per sua intercessione donaci di servirti con fedeltà e purezza di cuore."),
                                array('','',"Per le vergini che si sono consacrate a te con cuore integro e indiviso per essere sante nel corpo e nello spirito,"),
                                array('-','',"fa' che nessuna cosa al mondo ci faccia deviare dal cammino che conduce a te."),
                                array('','',"Signore Gesù, atteso dalle vergini sapienti,"),
                                array('-','',"fa' che siamo sempre vigilanti nell'attesa della tua venuta."),
                                array('','',"Per l'intercessione di santa ... , che hai fatto splendere di santità e sapienza,"),
                                array('-','',"donaci saggezza evangelica e innocenza di vita.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Celebriamo con gioia il Signore Gesù, che ha esaltato la verginità scelta per il regno dei cieli, e rivolgiamo a lui la nostra preghiera:"),
                                array('ris','I',"Cristo, sposo delle vergini, ascolta la nostra supplica.")
                            ),
                            array(
                                array('','',"O Cristo, tu sei l'unico sposo della tua Chiesa. Hai voluto ti comparisse davanti come vergine casta,"),
                                array('-','',"rendila sempre santa e immacolata."),
                                array('','',"Signore, le sante vergini ti sono venute incontro con le lampade accese,"),
                                array('-','',"non permettere che manchi mai alle anime consacrate la luce della fedeltà e dell'amore."),
                                array('','',"Signore, per te la Chiesa, vergine e madre, ha conservato intatta la sua fede,"),
                                array('-','',"dona a tutti i cristiani di rimanere fedeli alla tua parola."),
                                array('','',"Tu che ci dai la gioia di celebrare il glorioso ricordo della santa vergine ... ,"),
                                array('-','',"fa' che possiamo sempre allietarci della sua intercessione."),
                                array('','',"Tu che hai accolto le sante vergini al tuo banchetto nuziale,"),
                                array('-','',"ammetti i fedeli defunti al convito delle nozze eterne.")
                            )
                        );
                    }   
                }

                elseif ($f['comune']=='santi' || $f['comune']=='religiosi') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Uniti nella liturgia di lode, invochiamo il Cristo Signore, perché ci aiuti a servirlo in santità e giustizia tutti i giorni della nostra vita:"),
                                array('ris','I',"Santifica il tuo popolo, Signore.")
                            ),
                            array(
                                array('','',"Sei stato provato in ogni cosa per divenire simile a noi in tutto fuorché nel peccato,"),
                                array('-','',"Signore Gesù, abbi pietà del tuo popolo."),
                                array('','',"Chiami tutti alla carità perfetta,"),
                                array('-','',"Signore Gesù, santifica il tuo popolo."),
                                array('','',"Hai voluto che i tuoi discepoli siano sale della terra e luce del mondo,"),
                                array('-','',"Signore Gesù, illumina il tuo popolo."),
                                array('','',"Sei venuto per servire e non per essere servito,"),
                                array('-','',"Signore Gesù, insegnaci a servirti nei nostri fratelli."),
                                array('','',"Tu sei l'irradiazione della gloria del Padre e l'impronta della sua sostanza,"),
                                array('-','',"Signore Gesù, fa' che al termine della vita contempliamo il tuo volto insieme ai tuoi santi.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Supplichiamo Dio Padre, sorgente di ogni santità, perché con l'esempio e l'aiuto dei santi, ci conceda di vivere in conformità con il nostro Battesimo. Diciamo insieme:"),
                                array('ris','I',"Rendici santi, Signore, perché sei santo.")
                            ),
                            array(
                                array('','',"Padre santo, tu vuoi che ci chiamiamo e siamo realmente tuoi figli,"),
                                array('-','',"fa' che la Chiesa ti glorifichi su tutta la terra con la luce della sua santità."),
                                array('','',"Padre santo, che ci inviti a camminare in maniera degna della nostra vocazione, per piacere in te in ogni cosa,"),
                                array('-','',"fa' che portiamo frutti abbondanti di opere buone."),
                                array('','',"Padre santo, che ci hai riconciliati in Cristo,"),
                                array('-','',"custodisci quanti credono nel tuo nome, perché formino una cosa sola con te."),
                                array('','',"Padre santo, che ci vuoi commensali al banchetto del cielo,"),
                                array('-','',"donaci di crescere nella carità alla mensa del Corpo del tuo Figlio e della sua parola."),
                                array('','',"Padre santo, ammetti i nostri fratelli defunti alla contemplazione del tuo volto,"),
                                array('-','',"rendi anche noi degni della tua gloria.")
                            )
                        );
                    }
                }

                elseif ($f['comune']=='sante' || $f['comune']=='religiose') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo il nostro Salvatore con tutti i santi e le sante del cielo, e supplichiamolo:"),
                                array('ris','I',"Vieni, Signore Gesù.")
                            ),
                            array(
                                array('','',"Signore Gesù, che hai perdonato molto alla donna peccatrice perché aveva molto amato,"),
                                array('-','',"perdona i nostri debiti."),
                                array('','',"Signore Gesù, che nei tuoi viaggi apostolici fosti seguito dalle sante donne e aiutato dal loro umile servizio,"),
                                array('-','',"concedi a noi di seguire la via della carità."),
                                array('','',"Signore Gesù, ascoltato come maestro da Maria e servito da Marta,"),
                                array('-','',"rendici attenti alla tua parola e generosi nella carità."),
                                array('','',"Signore Gesù, che chiami fratello, sorella e madre quanti compiono la tua volontà,"),
                                array('-','',"fa' che aderiamo sempre ai tuoi desideri nelle parole e nelle opere.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Con la preziosa intercessione di tutti i santi e di tutte le sante del cielo preghiamo il Signore:"),
                                array('ris','I',"Ricordati della tua Chiesa, Signore.")
                            ),
                            array(
                                array('','',"Per le sante martiri, che con cristiana fortezza hanno vinto la morte,"),
                                array('-','',"dona alla tua Chiesa in mezzo alle sofferenze e alle prove la forza dello Spirito."),
                                array('','',"Per le spose, che si santificarono con la grazia del sacramento nuziale,"),
                                array('-','',"dona alla tua Chiesa la fecondità apostolica."),
                                array('','',"Per le vedove, che hanno illuminato la loro solitudine con la preghiera e le opere di carità,"),
                                array('-','',"concedi alla tua Chiesa di testimoniare al mondo la forza misteriosa della carità e della preghiera."),
                                array('','',"Per le madri sante, che generarono ed educarono i loro figli all'impegno civile e alla testimonianza del tuo regno,"),
                                array('-','',"dona alla tua Chiesa di generare tutti gli uomini alla verità e alla grazia."),
                                array('','',"Per tutte le sante donne, che hanno meritato di contemplare la luce del tuo volto,"),
                                array('-','',"concedi ai nostri fratelli defunti l'eterna gioia del Paradiso.")
                            )
                        );
                    }
                }

                elseif ($f['comune']=='DEF') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Dio Padre onnipotente, che hai risuscitato Gesù dai morti, ridonerà la vita anche ai nostri corpi mortali per mezzo del suo Spirito. Illuminati da questa speranza diciamo insieme:"),
                                array('ris','I',"Signore, donaci la vita in Cristo.")
                            ),
                            array(
                                array('','',"Padre santo, che mediante il Battesimo ci hai sepolti nella morte del tuo Figlio e ci hai reso partecipi della sua risurrezione, fa' che camminiamo sempre in novità di vita,"),
                                array('-','',"perché al di là della morte, viviamo sempre con Cristo."),
                                array('','',"Padre buono, che ci nutri con il pane vivo disceso dal cielo,"),
                                array('-','',"fa' che, comunicando alla mensa eucaristica, riceviamo il pegno della risurrezione."),
                                array('','',"Padre santo, che per mezzo del tuo angelo hai confortato il tuo Figlio nell'agonia del Getsemani,"),
                                array('-','',"consolaci nell'ora della nostra morte."),
                                array('','',"Tu che hai liberato i tre fanciulli dalla fornace ardente,"),
                                array('-','',"purifica i fedeli defunti dai loro peccati e liberali da ogni pena."),
                                array('','',"Dio dei vivi e dei morti, rendi partecipi della gloria del Cristo risorto i nostri fratelli defunti,"),
                                array('-','',"accoglici un giorno nell'assemblea festosa dei tuoi santi.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Il Cristo Signore trasfigurerà il nostro misero corpo a immagine del suo corpo glorioso. A lui rivolgiamo la nostra lode:"),
                                array('ris','I',"Tu sei la vita e la risurrezione nostra, Signore.")
                            ),
                            array(
                                array('','',"Cristo, Figlio del Dio vivente, che hai risuscitato dai morti il tuo amico Lazzaro,"),
                                array('-','',"risuscita alla vita e alla gloria eterna i defunti, che hai redento a prezzo del tuo sangue."),
                                array('','',"Cristo, che hai consolato le sorelle di Lazzaro e i familiari del ragazzo e della fanciulla morta,"),
                                array('-','',"conforta coloro che piangono per la morte dei loro cari."),
                                array('','',"Cristo Salvatore, libera il nostro corpo mortale dal dominio del peccato,"),
                                array('-','',"donaci il premio della vita eterna."),
                                array('','',"Cristo redentore, guarda con bontà coloro che vivono senza speranza, perché non ti conoscono,"),
                                array('-','',"dona loro la fede nella risurrezione e nella vita futura."),
                                array('','',"Tu che aprendo gli occhi al cieco, ti sei rivelato allo stupore del suo sguardo,"),
                                array('-','',"rivela il tuo volto ai defunti, che sono ancora privi della tua visione gloriosa."),
                                array('','',"O Signore, quando sarà disfatta la nostra tenda in questo mondo,"),
                                array('-','',"preparaci una casa eterna non costruita da mani d'uomo, nella pace della santa Gerusalemme.")
                            )
                        );
                    } 
                }

                ////////////////////////////////////////////////////////////////////////

                if ($k=='0425a') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Lode e gloria a Cristo, vincitore della morte, che nel Vangelo ha fatto risplendere la vita e l'immortalità. A lui la preghiera:"),
                                array('ris','I',"Rafforza la nostra fede nella tua parola, o Signore.")
                            ),
                            array(
                                array('','',"Tu che illumini il mondo con il Vangelo,"),
                                array('-','',"rendici fedeli al tuo insegnamento."),
                                array('','',"Hai ordinato ai tuoi apostoli di predicare il Vangelo a tutte le genti,"),
                                array('-','',"fa' sorgere numerosi e santi evangelizzatori."),
                                array('','',"Hai affidato alla Chiesa il compito di trasmettere quanto hai detto e fatto,"),
                                array('-','',"donaci di custodire diligentemente la tradizione apostolica."),
                                array('','',"Hai voluto che il regno dei cieli fosse un lievito di salvezza per tutto il genere umano,"),
                                array('-','',"suscita in noi lo spirito missionario dei tuoi primi discepoli.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie al Padre che ci ha chiamati alla fede mediante l'annunzio del Vangelo. Ogni credente lo invochi:"),
                                array('ris','I',"Santifica la tua Chiesa nella verità, Signore.")
                            ),
                            array(
                                array('','',"O Dio della vita, che hai risuscitato dai morti Cristo, capo della Chiesa,"),
                                array('-','',"rendici testimoni della nuova vita che viene dal Vangelo."),
                                array('','',"Hai inviato il Figlio tuo a evangelizzare i poveri,"),
                                array('-','',"donaci la povertà di spirito per gustare le beatitudini evangeliche."),
                                array('','',"Il Messia, da te mandato, ha sparso la buona semente della parola,"),
                                array('-','',"concedi un raccolto abbondante a quanti annunziano il Vangelo nella fatica e nel dolore."),
                                array('','',"Hai riconciliato a te il mondo nel Cristo,"),
                                array('-','',"rivesti di misericordia e di santità i ministri della riconciliazione."),
                                array('','',"Confermaci nella fede della risurrezione e glorificazione del Figlio tuo,"),
                                array('-','',"e fa' che i nostri fratelli defunti risorgano alla gloria.")
                            )
                        );
                    } 
                }

                elseif ($k=='0429a') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Imitiamo la fede di santa Caterina nell'efficacia infinita del sangue di Cristo e preghiamo:"),
                                array('ris','I',"Per il tuo sangue ascoltaci, o Signore.")
                            ),
                            array(
                                array('','',"Hai illuminato l'Italia e la Chiesa con i doni di sapienza e santità concessi alla tua serva fedele,"),
                                array('-','',"mantieni sempre vivo nel nostro popolo il senso di questi valori."),
                                array('','',"Santa Caterina operò attivamente per l'elevazione e il bene pubblico e privato dei concittadini,"),
                                array('-','',"suscita in tutti un vivo interessamento per il progresso dell'umanità."),
                                array('','',"La nostra Patrona, animata dal tuo Spirito, si fece messaggera di pace,"),
                                array('-','',"donaci lo spirito della concordia e del dialogo fraterno."),
                                array('','',"La santa, memore della tua parola a Pietro, servì e amò il « dolce Cristo in terra »,"),
                                array('-','',"conservaci docili al magistero del papa.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Dio, che sceglie l'illetterato e il debole per confondere il dotto e il potente, ha aperto i tesori della sua ricchezza, sapienza e scienza a santa Caterina. Preghiamolo:"),
                                array('ris','I',"Signore, operatore di prodigi, ascoltaci.")
                            ),
                            array(
                                array('','',"Per il bene della Chiesa e della società civile hai dato a santa Caterina zelo e franchezza nel denunciare errori e debolezze,"),
                                array('-','',"da' anche a noi forza e coraggio contro l'errore e il male."),
                                array('','',"In tempo di profonde lacerazioni e guerre fratricide hai inviato la vergine senese quale mediatrice di unità e riconciliazione,"),
                                array('-','',"fa' che le forze politiche e religiose convergano fra di loro per il vero benessere dell'uomo e della comunità."),
                                array('','',"Santa Caterina si fece ambasciatrice e avvocata per il ritorno del papa a Roma,"),
                                array('-','',"fa' che tutti si sentano attratti verso il centro di unità e di comunione cattolica della fede e della carità."),
                                array('','',"La nostra santa viveva di te nell'attività e nella contemplazione,"),
                                array('-','',"da' a tutti di unire al lavoro la preghiera."),
                                array('','',"Hai posto la nostra Patrona come stella nel tuo cielo di gloria,"),
                                array('-','',"ottenga ai nostri fratelli defunti e a noi un raggio della tua luce eterna.")
                            )
                        );
                    }
                }

                elseif ($k=='0531a') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Rivolgiamo la nostra lode e la nostra supplica al Cristo salvatore, nato da Maria Vergine e diciamo:"),
                                array('ris','I',"Interceda per noi la Madre tua, o Signore.")
                            ),
                            array(
                                array('','',"Sole di giustizia, che hai voluto farti precedere da Maria immacolata, mistica aurora della redenzione,"),
                                array('-','',"fa' che camminiamo sempre nella luce della tua presenza."),
                                array('','',"Verbo eterno, che a Maria, vergine sapiente, hai insegnato a scegliere la parte migliore,"),
                                array('-','',"aiutaci a cercare sempre la parola di vita eterna."),
                                array('','',"Salvatore del mondo, che per i meriti della tua redenzione hai preservato tua Madre da ogni contagio di colpa,"),
                                array('-','',"conservaci liberi dal peccato."),
                                array('','',"Hai scelto Maria come arca santa per la tua dimora fra noi,"),
                                array('-','',"liberaci dalla corruzione del peccato.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Uniti nella preghiera di lode rendiamo grazie a Dio che ha voluto Maria amata e venerata da tutte le generazioni. Diciamo con fiducia:"),
                                array('ris','I',"Maria, piena di grazia, interceda per noi.")
                            ),
                            array(
                                array('','',"Tu che ci hai dato Maria per madre, concedi per sua intercessione la salute ai malati, il conforto agli afflitti, il perdono ai peccatori,"),
                                array('-','',"dona a tutti pace e salvezza."),
                                array('','',"Fa' che la tua Chiesa sia un cuor solo e un'anima sola:"),
                                array('-','',"donaci di perseverare unanimi nella preghiera con Maria, madre di Gesù."),
                                array('','',"Tu che hai costituito Maria madre di misericordia,"),
                                array('-','',"fa' che sperimentiamo, in mezzo ai pericoli, la sua bontà materna."),
                                array('','',"Tu che hai voluto Maria madre di famiglia nella casa di Nazareth,"),
                                array('-','',"fa' che tutte le mamme custodiscano la santità e l'amore."),
                                array('','',"Hai incoronato Maria, regina del cielo,"),
                                array('-','',"fa' che i nostri fratelli defunti godano la felicità eterna nell'assemblea dei santi.")
                            )
                        );
                    }
                }

                elseif ($k=='0722a') {  

                    if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo il nostro Salvatore con tutti i santi e le sante del cielo, e supplichiamolo:"),
                                array('ris','I',"Vieni, Signore Gesù.")
                            ),
                            array(
                                array('','',"Signore Gesù, che appena risorto ti sei mostrato alla Maddalena, che ti cercava ansiosamente,"),
                                array('-','',"fa' che ti cerchiamo con ardore per contemplare il tuo volto."),
                                array('','',"Signore Gesù, che nei tuoi viaggi apostolici fosti seguito dalle pie donne e aiutato dal loro umile servizio,"),
                                array('-','',"concedi a noi di seguire la via della carità."),
                                array('','',"Signore Gesù, ascoltato come maestro divino da Maria e servito da Marta,"),
                                array('-','',"rendici attenti alla tua parola e generosi nella carità."),
                                array('','',"Signore Gesù, che chiami fratello, sorella e madre quanti compiono la tua volontà,"),
                                array('-','',"fa' che aderiamo sempre ai tuoi desideri nelle parole e nelle opere."),
                                array('','',"Per tutte le sante donne, che hanno meritato di contemplare la luce del tuo volto,"),
                                array('-','',"concedi ai nostri fratelli defunti l'eterna gioia del Paradiso.")
                            )
                        );
                    }
                }

                elseif ($k=='0929a') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo il Signore, adorato da infinite schiere di angeli e alla loro voce uniamo la nostra, acclamando:"),
                                array('ris','I',"Con gli angeli e gli arcangeli ti benediciamo, Signore.")
                            ),
                            array(
                                array('','',"O Dio, che hai ordinato agli angeli di custodirci nel nostro cammino,"),
                                array('-','',"salvaci dalle insidie e dai pericoli."),
                                array('','',"Tu che riveli agli angeli la gloria del tuo volto,"),
                                array('-','',"fa' che viviamo sempre alla luce della tua presenza."),
                                array('','',"Tu che un giorno renderai i tuoi figli simili agli angeli,"),
                                array('-','',"donaci la castità del corpo e del cuore."),
                                array('','',"O Dio, fa' che il glorioso principe san Michele venga in aiuto al tuo popolo,"),
                                array('-','',"e lo difenda contro Satana e i suoi alleati.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Innalziamo a Dio Padre la nostra preghiera, perché ci renda docili come gli angeli all'ascolto della sua parola. Diciamo insieme:"),
                                array('ris','I',"Re degli angeli, ascoltaci.")
                            ),
                            array(
                                array('','',"Signore, accogli, per le mani degli angeli, le nostre preghiere,"),
                                array('-','',"salgano a te come il profumo dell'incenso."),
                                array('','',"Gradisci il nostro sacrificio di lode,"),
                                array('-','',"lo affidiamo agli angeli perché te lo presentino."),
                                array('','',"Dona anche a noi di cantare la tua gloria nell'alto dei cieli,"),
                                array('-','',"e di annunziare la pace agli uomini che tu ami."),
                                array('','',"Fa' che al termine della vita gli angeli ci introducano nella tua dimora eterna,"),
                                array('-','',"e nella comunità gioiosa dei santi."),
                                array('','',"Il tuo grande araldo san Michele sia la guida dei defunti,"),
                                array('-','',"verso la luce che non tramonta mai.")
                            )
                        );
                    }
                }

                elseif ($k=='1002a') {  

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Glorifichiamo il Signore, adorato da infinite schiere di angeli e alla loro voce uniamo la nostra, acclamando:"),
                                array('ris','I',"Con gli angeli e gli arcangeli ti benediciamo, Signore.")
                            ),
                            array(
                                array('','',"O Dio, che hai ordinato agli angeli di custodirci nel nostro cammino,"),
                                array('-','',"salvaci dalle insidie e dai pericoli."),
                                array('','',"Tu che riveli agli angeli la gloria del tuo volto,"),
                                array('-','',"fa' che viviamo sempre alla luce della tua presenza."),
                                array('','',"Tu che un giorno renderai i tuoi figli simili agli angeli,"),
                                array('-','',"donaci la castità del corpo e del cuore."),
                                array('','',"O Dio, fa' che il glorioso principe san Michele venga in aiuto al tuo popolo,"),
                                array('-','',"e lo difenda contro Satana e i suoi alleati.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Sia benedetto Dio, che nella sua provvidenza ci ha affidati ai suoi angeli, perché ci custodiscano nel nostro cammino. Uniti nella lode della sera, diciamo con fede:"),
                                array('ris','I',"Re degli angeli, ascoltaci.")
                            ),
                            array(
                                array('','',"O Dio, che hai costituito gli angeli annunziatori delle tue opere meravigliose,"),
                                array('-','',"fa' che ci aiutino a proclamare con le parole e la vita le tue grandezze."),
                                array('','',"O Signore Altissimo, che gli angeli acclamano e lodano senza posa,"),
                                array('-','',"fa' che tutti si uniscano alla lode perenne che ti innalza la Chiesa."),
                                array('','',"Tu che comandi agli angeli di custodire i tuoi fedeli,"),
                                array('-','',"fa' che i viaggiatori e gli esuli tornino felicemente alle loro case."),
                                array('','',"Tu che hai affidato agli angeli l'annunzio di pace,"),
                                array('-','',"fa' che portino la pace su tutta la terra."),
                                array('','',"Quando manderai gli angeli a riunire gli uomini dai quattro angoli della terra,"),
                                array('-','',"fa' che tutti i tuoi figli siano introdotti nell'assemblea degli eletti.")
                            )
                        );
                    } 
                }
                
                elseif ($k=='1004a') {  
                    
                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Ringraziamo Cristo per averci dato in san Francesco un riflesso vivo del suo amore ardente e universale, e preghiamolo:"),
                                array('ris','I',"Rendici operatori di pace e di bene, Signore.")
                            ),
                            array(
                                array('','',"Nel poverello di Assisi hai fatto rivivere il tuo Vangelo,"),
                                array('-','',"rinnovaci sempre alla fonte perenne della tua verità."),
                                array('','',"Hai dato al tuo servo un cuore semplice, umile e libero,"),
                                array('-','',"donaci la vera libertà di spirito nell'umiltà e nella semplicità dei santi."),
                                array('','',"San Francesco ti lodava per le tue creature,"),
                                array('-','',"fa' che in ogni cosa vediamo un raggio della tua bellezza divina."),
                                array('','',"Hai concesso al tuo santo la perfetta letizia nelle tribolazioni,"),
                                array('-','',"addolcisci le nostre sofferenze nella speranza del sommo bene.")
                            )
                        );
                    }
    
                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {
    
                        $this->testo=array(
                            array(
                                array('','',"Preghiamo Cristo Signore, che in san Francesco, Patrono d'Italia, hai fatto risplendere, trasfigurate dalla santità, le migliori virtù del nostro popolo:"),
                                array('ris','I',"Benedici il tuo popolo nella pace, Signore.")
                            ),
                            array(
                                array('','',"San Francesco servì umile e docile la tua Chiesa:"),
                                array('-','',"insegnaci a riformarla soprattutto con l'umile servizio e la vita santa."),
                                array('','',"Hai infuso ardore apostolico nel serafico di Assisi,"),
                                array('-','',"tieni desto nella tua Chiesa lo slancio missionario."),
                                array('','',"Nel tuo nome san Francesco riconciliò gli animi e compose le divisioni,"),
                                array('-','',"fa' che gli Italiani e gli uomini tutti siano guidati al bene terreno e celeste per la via della pace."),
                                array('','',"Hai impresso nelle membra di san Francesco i segni della tua passione,"),
                                array('-','',"rinnova la Chiesa con la forza inesauribile della tua morte e risurrezione."),
                                array('','',"Hai unito indissolubilmente il tuo santo con la povertà,"),
                                array('-','',"fa' che tutti i cristiani si sentano membri della Chiesa dei poveri."),
                                array('','',"Nel momento supremo il grande figlio di Assisi ti lodò per nostra corporal sorella morte,"),
                                array('-','',"donaci una morte santa, perché ti lodiamo in eterno con i nostri defunti.")
                            )
                        );
                    }
                }

                elseif ($k=='1018a') {

                    if ($this->actual['ora']=='lodi') {

                        $this->testo=array(
                            array(
                                array('','',"Lode e gloria a Cristo, vincitore della morte, che nel Vangelo ha fatto risplendere la vita e l'immortalità. A lui la preghiera:"),
                                array('ris','I',"Rafforza la nostra fede nella tua parola, o Signore.")
                            ),
                            array(
                                array('','',"Tu che illumini il mondo con il Vangelo,"),
                                array('-','',"rendici fedeli al tuo insegnamento."),
                                array('','',"Hai ordinato ai tuoi apostoli di predicare il Vangelo a tutte le genti,"),
                                array('-','',"fa' sorgere numerosi e santi evangelizzatori."),
                                array('','',"Hai affidato alla Chiesa il compito di trasmettere quanto hai detto e fatto,"),
                                array('-','',"donaci di custodire diligentemente la tradizione apostolica."),
                                array('','',"Hai voluto che il regno dei cieli fosse un lievito di salvezza per tutto il genere umano,"),
                                array('-','',"suscita in noi lo spirito missionario dei tuoi primi discepoli.")
                            )
                        );
                    }

                    elseif ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='ves2') {

                        $this->testo=array(
                            array(
                                array('','',"Rendiamo grazie al Padre che ci ha chiamati alla fede mediante l'annunzio del Vangelo. Ogni credente lo invochi:"),
                                array('ris','I',"Santifica la tua Chiesa nella verità, Signore.")
                            ),
                            array(
                                array('','',"O Dio della vita, che hai risuscitato dai morti Cristo, capo della Chiesa,"),
                                array('-','',"rendici testimoni della nuova vita che viene dal Vangelo."),
                                array('','',"Hai inviato il Figlio tuo a evangelizzare i poveri,"),
                                array('-','',"donaci la povertà di spirito per gustare le beatitudini evangeliche."),
                                array('','',"Il Messia, da te mandato, ha sparso la buona semente della parola,"),
                                array('-','',"concedi un raccolto abbondante a quanti annunziano il Vangelo nella fatica e nel dolore."),
                                array('','',"Hai riconciliato a te il mondo nel Cristo,"),
                                array('-','',"rivesti di misericordia e di santità i ministri della riconciliazione."),
                                array('','',"Confermaci nella fede della risurrezione e glorificazione del Figlio tuo,"),
                                array('-','',"e fa' che i nostri fratelli defunti risorgano alla gloria.")
                            )
                        );
                    }
                }
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////

    function draw() {

        foreach ($this->testo as $k=>$b) {
			
			foreach($b as $k2=>$b2) {
				if ($b2[0]=='-') $this->testo[$k][$k2][1]='c';
			}
        }
		
		foreach ($this->testo as $k=>$b) {		
			$this->res->addBlock($b);
		}

        echo '<div class="salResBlockTitle" style="margin-top:30px;">';
            if ($this->actual['ora']=='lodi') {
                echo 'Invocazioni';
            }
            else {
                echo 'Intercessioni';
            }
            if ($this->litio->config['vox']) {
                $this->litio->drawPlayer($this->info['parte'],0);
            }
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->res) {
                echo $this->res->draw();
            }
        echo '</div>';
    }

}

?>