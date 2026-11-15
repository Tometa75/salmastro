<?php

class Inno {

    protected $info=array(
        "titolo"=>"Inno",
        "parte"=>"",
        "testo"=>false
    );

    protected $salterio=array(
        array(
            "ves1"=>"ves1_0",
            "comp1"=>"comp1_0",
            "lodi"=>"lodi_0",
            "terza"=>"terza_0",
            "sesta"=>"sesta_0",
            "nona"=>"nona_0",
            "ves2"=>"ves2_0",
            "comp"=>"comp_0"
        ),
        array(
            "lodi"=>"lodi_1",
            "terza"=>"terza_1",
            "sesta"=>"sesta_1",
            "nona"=>"nona_1",
            "ves"=>"ves_1",
            "comp"=>"comp_1"
        ),
        array(
            "lodi"=>"lodi_2",
            "terza"=>"terza_0",
            "sesta"=>"sesta_0",
            "nona"=>"nona_0",
            "ves"=>"ves_2",
            "comp"=>"comp1_0"
        ),
        array(
            "lodi"=>"lodi_3",
            "terza"=>"terza_3",
            "sesta"=>"sesta_3",
            "nona"=>"nona_3",
            "ves"=>"ves_3",
            "comp"=>"comp_0"
        ),
        array(
            "lodi"=>"lodi_4",
            "terza"=>"terza_1",
            "sesta"=>"sesta_1",
            "nona"=>"nona_1",
            "ves"=>"ves_4",
            "comp"=>"comp_1"
        ),
        array(
            "lodi"=>"lodi_5",
            "terza"=>"terza_0",
            "sesta"=>"sesta_0",
            "nona"=>"nona_0",
            "ves"=>"ves_5",
            "comp"=>"comp1_0"
        ),
        array(
            "lodi"=>"lodi_6",
            "terza"=>"terza_3",
            "sesta"=>"sesta_3",
            "nona"=>"nona_3"
        )

    );

    protected $inni=array(
        "comp1_0"=>array(
            array(
                array('','','Al termine del giorno,'),
                array('','','o sommo Creatore,'),
                array('','','veglia sul nostro riposo'),
                array('','','con amore di Padre.')
            ),
            array(
                array('','','Nel sonno delle membra,'),
                array('','','resti fedele il cuore,'),
                array('','',"e al ritorno dell'alba"),
                array('','','intoni la tua lode.')
            ),
            array(
                array('','',"Dona salute al corpo"),
                array('','',"e fervore allo spirito,"),
                array('','',"la tua luce rischiari"),
                array('','',"le ombre della notte.")
            ),
            array(
                array('','',"Sia onore al Padre e al Figlio"),
                array('','',"e allo Spirito Santo,"),
                array('','',"al Dio trino ed unico"),
                array('','',"nei secoli sia gloria.")
            )
        ),
        "comp_0"=>array(
            array(
                array('','','Gesù, luce da luce,'),
                array('','','sole senza tramonto,'),
                array('','','tu rischiari le tenebre'),
                array('','','nella notte del mondo.')
            ),
            array(
                array('','','In te, santo Signore,'),
                array('','','noi cerchiamo il riposo'),
                array('','',"dall'umana fatica,"),
                array('','','al termine del giorno.')
            ),
            array(
                array('','','Se i nostri occhi si chiudono,'),
                array('','','veglia in te il nostro cuore;'),
                array('','',"la tua mano protegga"),
                array('','','coloro che in te sperano.')
            ),
            array(
                array('','','Difendi, o Salvatore,'),
                array('','','dalle insidie del male'),
                array('','',"i figli che hai redenti"),
                array('','','col tuo sangue prezioso.')
            ),
            array(
                array('','',"a te sia gloria, o Cristo"),
                array('','',"nato da Maria Vergine,"),
                array('','',"al Padre ed allo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "comp_1"=>array(
            array(
                array('','',"Del giorno giunti al termine,"),
                array('','',"o Creator degli esseri,"),
                array('','',"la nostra attesa illumina,"),
                array('','',"la luce eterna svelaci.")
            ),
            array(
                array('','',"Il nostro sonno vigili"),
                array('','',"la tua pietà dolcissima;"),
                array('','',"dal male che ci affascina"),
                array('','',"il corpo stanco libera.")
            ),
            array(
                array('','',"Onnipotente, ascoltaci:"),
                array('','',"per noi Cristo ti supplica,"),
                array('','',"che regna in tutti i secoli"),
                array('','',"con te e il Santo Spirito.")
            )
        ),
        "ves1_0"=>array(
            array(
                array('','','O Trinità beata,'),
                array('','','luce, sapienza, amore,'),
                array('','','vesti del tuo splendore,'),
                array('','','il giorno che declina.')
            ),
            array(
                array('','','Te lodiamo al mattino,'),
                array('','','te nel vespro imploriamo,'),
                array('','','te canteremo unanimi,'),
                array('','','nel giorno che non muore.')
            )
        ),
        "lodi_0"=>array(
            array(
                array('','',"O giorno primo ed ultimo,"),
                array('','',"giorno radioso e splendido,"),
                array('','',"del trionfo di Cristo!")
            ),
            array(
                array('','',"Il Signore risorto,"),
                array('','',"promulga per i secoli"),
                array('','',"l'editto della pace.")
            ),
            array(
                array('','',"Pace fra cielo e terra,"),
                array('','',"pace fra tutti i popoli,"),
                array('','',"pace nei nostri cuori.")
            ),
            array(
                array('','',"l'alleluia pasquale"),
                array('','',"risuoni nella Chiesa"),
                array('','',"pellegrina nel mondo;")
            ),
            array(
                array('','',"e si unisca alla lode,"),
                array('','',"armoniosa e perenne,"),
                array('','',"dell'assemblea dei santi.")
            ),
            array(
                array('','',"A te la gloria, o Cristo,"),
                array('','',"la potenza e l'onore,"),
                array('','',"nei secoli dei secoli.")
            ),
        ),
        "terza_0"=>array(
            array(
                array('','',"O Spirito Paraclito,"),
                array('','',"uno col Padre e il Figlio,"),
                array('','',"discendi a noi benigno"),
                array('','',"nell'intimo dei cuori.")
            ),
            array(
                array('','',"Voce e mente si accordino,"),
                array('','',"nel ritmo della lode,"),
                array('','',"il tuo fuoco ci unisca"),
                array('','',"in un'anima sola.")
            ),
            array(
                array('','',"O luce di sapienza,"),
                array('','',"rivelaci il mistero"),
                array('','',"del Dio trino e unico,"),
                array('','',"fonte di eterno Amore.")
            )  
        ),
        "sesta_0"=>array(
            array(
                array('','',"Glorioso e potente Signore,"),
                array('','',"che alterni i ritmi del tempo,"),
                array('','',"irradi di luce il mattino"),
                array('','',"e accendi di fuochi il meriggio,")
            ),
            array(
                array('','',"tu placa le tristi contese,"),
                array('','',"estingui la fiamma dell'ira,"),
                array('','',"infondi vigore alle membra,"),
                array('','',"ai cuori concedi la pace.")
            ),
            array(
                array('','',"Sia gloria al Padre e al Figlio,"),
                array('','',"sia onore allo Spirito Santo,"),
                array('','',"all'unico e trino Signore"),
                array('','',"sia lode nei secoli eterni.")
            )  
        ),
        "nona_0"=>array(
            array(
                array('','',"Signore, forza degli esseri,"),
                array('','',"Dio immutabile, eterno,"),
                array('','',"tu segni i ritmi del mondo:"),
                array('','',"i giorni, i secoli, il tempo.")
            ),
            array(
                array('','',"Irradia di luce la sera,"),
                array('','',"fa' sorgere oltre la morte,"),
                array('','',"nello splendore dei cieli,"),
                array('','',"il giorno senza tramonto.")
            ),
            array(
                array('','',"Sia lode al Padre altissimo,"),
                array('','',"al Figlio e al Santo Spirito,"),
                array('','',"com'era nel principio,"),
                array('','',"ora e nei secoli eterni.")
            )  
        ),
        "ves2_0"=>array(
            array(
                array('','',"Fu luce la prima parola,"),
                array('','',"artefice sommo e sublime,"),
                array('','',"e fu con la luce il creato,"),
                array('','',"inizio ebbe il corso del tempo.")
            ),
            array(
                array('','',"Ai primi bagliori dell'alba,"),
                array('','',"risponde il chiarore del vespro,"),
                array('','',"e il cielo che tingi di fuoco,"),
                array('','',"proclama la grande tua gloria.")
            ),
            array(
                array('','',"Anelito nuovo alla vita"),
                array('','',"inturgida tutte le cose,"),
                array('','',"si ergono in cerca del sole,"),
                array('','',"e poi si riposano in pace.")
            ),
            array(
                array('','',"La pace più vera per noi"),
                array('','',"è solo nel Cristo tuo Figlio,"),
                array('','',"che in alto levato da terra"),
                array('','',"attira a sé tutte le cose.")
            ),
            array(
                array('','',"Eterno pastore dell'uomo,"),
                array('','',"ei guida i suoi passi sicuro,"),
                array('','',"nel buio che incombe sul mondo,"),
                array('','',"ai pascoli veri di vita.")
            ),
            array(
                array('','',"Con canti sinceri, inni nuovi,"),
                array('','',"per sempre sia gloria a te, Padre,"),
                array('','',"al Figlio che tu ci hai donato"),
                array('','',"e gloria allo Spirito Santo.")
            )
        ),
        "lodi_1"=>array(
            array(
                array('','',"O sole di giustizia,"),
                array('','',"Verbo del Dio vivente,"),
                array('','',"irradia sulla Chiesa"),
                array('','',"la tua luce immortale.")
            ),
            array(
                array('','',"Per te veniamo al Padre,"),
                array('','',"fonte del primo amore,"),
                array('','',"Padre d'immensa grazia"),
                array('','',"e di perenne gloria.")
            ),
            array(
                array('','',"Lieto trascorra il giorno"),
                array('','',"in umiltà e fervore;"),
                array('','',"la luce della fede"),
                array('','',"non conosca tramonto.")
            ),
            array(
                array('','',"Sia Cristo il nostro cibo,"),
                array('','',"sia Cristo l'acqua viva:"),
                array('','',"in lui gustiamo sobrii"),
                array('','',"l'ebbrezza dello Spirito.")
            )
        ),
        "terza_1"=>array(
            array(
                array('','',"O Spirito Paraclito,"),
                array('','',"col Padre e l'Unigenito,"),
                array('','',"vibrante scendi, e penetra"),
                array('','',"dei nostri cuori l'intimo.")
            ),
            array(
                array('','',"Per la tua lode, Altissimo,"),
                array('','',"la mente e i sensi illumina,"),
                array('','',"l'amor fraterno suscita,"),
                array('','',"nell'unità consumaci.")
            ),
            array(
                array('','',"Rendiamo gloria unanimi"),
                array('','',"al Padre e all'Unigenito,"),
                array('','',"e gloria al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "sesta_1"=>array(
            array(
                array('','',"Tu, che ogni cosa susciti,"),
                array('','',"qual sole su noi sfolgora:"),
                array('','',"noi t'imploriamo, Altissimo,"),
                array('','',"le nostre vite illumina.")
            ),
            array(
                array('','',"Dopo il lavoro fervido,"),
                array('','',"la pace dona all'anima,"),
                array('','',"la gioia dello Spirito"),
                array('','',"il corpo stanco temperi.")
            ),
            array(
                array('','',"Rendiamo gloria unanimi"),
                array('','',"al Padre e all'Unigenito,"),
                array('','',"e gloria al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "nona_1"=>array(
            array(
                array('','',"Eterno Dio immutabile,"),
                array('','',"la fonte è in te dell'essere:"),
                array('','',"nella tua pace, immobile,"),
                array('','',"tu segni ai tempi il volgere.")
            ),
            array(
                array('','',"La vera luce donaci,"),
                array('','',"le nostre vite vigila,"),
                array('','',"e nel tramonto fulgido"),
                array('','',"i cuori in te s'immergano.")
            ),
            array(
                array('','',"Rendiamo gloria unanimi"),
                array('','',"al Padre e all'Unigenito,"),
                array('','',"e gloria al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_1"=>array(
            array(
                array('','',"O immenso creatore,"),
                array('','',"che all'impeto dei flutti"),
                array('','',"segnasti il corso e il limite"),
                array('','',"nell'armonia del cosmo,")
            ),
            array(
                array('','',"tu all'aspre solitudini"),
                array('','',"della terra assetata"),
                array('','',"donasti il refrigerio"),
                array('','',"dei torrenti e dei mari.")
            ),
            array(
                array('','',"Irriga, Padre buono,"),
                array('','',"i deserti dell'anima"),
                array('','',"coi fiumi d'acqua viva"),
                array('','',"che sgorgano dal Cristo.")
            ),
            array(
                array('','',"Ascolta, o Padre altissimo,"),
                array('','',"tu che regni nei secoli,"),
                array('','',"con il Cristo tuo Figlio"),
                array('','',"e lo Spirito Santo.")
            )
        ),
        "lodi_2"=>array(
            array(
                array('','',"Già l'ombra della notte si dilegua,"),
                array('','',"un'alba nuova sorge all'orizzonte:"),
                array('','',"con il cuore e la mente salutiamo"),
                array('','',"il Dio di gloria.")
            ),
            array(
                array('','',"O Padre santo, fonte d'ogni bene,"),
                array('','',"effondi la rugiada del tuo amore"),
                array('','',"sulla Chiesa raccolta dal tuo Figlio"),
                array('','',"nel Santo Spirito.")
            )
        ),
        "ves_2"=>array(
            array(
                array('','',"Accogli, o Padre buono,"),
                array('','',"il canto dei fedeli"),
                array('','',"nel giorno che declina.")
            ),
            array(
                array('','',"Tu al sorger della luce,"),
                array('','',"ci chiamasti al lavoro"),
                array('','',"nella mistica vigna;")
            ),
            array(
                array('','',"or che il sole tramonta,"),
                array('','',"elargisci agli operai"),
                array('','',"la mercede promessa.")
            ),
            array(
                array('','',"Da' ristoro alle membra"),
                array('','',"e diffondi nei cuori"),
                array('','',"la pace del tuo Spirito.")
            ),
            array(
                array('','',"La tua grazia si pegno"),
                array('','',"della gioia perfetta"),
                array('','',"nella gloria dei santi.")
            ),
            array(
                array('','',"A te sia lode, o Padre,"),
                array('','',"al Figlio e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "lodi_3"=>array(
            array(
                array('','',"Notte, tenebre e nebbia,"),
                array('','',"fuggite: entra la luce,"),
                array('','',"viene Cristo Signore.")
            ),
            array(
                array('','',"Il sole di giustizia"),
                array('','',"trasfigura ed accende"),
                array('','',"l'universo in attesa.")
            ),
            array(
                array('','',"Con gioia pura ed umile,"),
                array('','',"fra i canti e le preghiere,"),
                array('','',"accogliamo il Signore.")
            ),
            array(
                array('','',"Salvatore dei poveri,"),
                array('','',"la gloria del tuo volto"),
                array('','',"splenda su un mondo nuovo.")
            ),
            array(
                array('','',"A te sia lode, o Cristo,"),
                array('','',"al Padre e al Santo Spirito,"),
                array('','',"oggi e sempre nei secoli.")
            )
        ),
        "terza_3"=>array(
            array(
                array('','',"L'ora terza risuona,"),
                array('','',"nel servizio di lode:"),
                array('','',"con cuore puro e ardente"),
                array('','',"preghiamo il Dio glorioso.")
            ),
            array(
                array('','',"Venga su noi, Signore,"),
                array('','',"il dono dello Spirito,"),
                array('','',"che in quest'ora discese"),
                array('','',"sulla Chiesa nascente.")
            ),
            array(
                array('','',"Si rinnovi il prodigio,"),
                array('','',"di quella Pentecoste,"),
                array('','',"che rivelò alle genti"),
                array('','',"la luce del tuo regno.")
            ),
            array(
                array('','',"Sia lode al Padre e al Figlio"),
                array('','',"e allo Spirito Santo,"),
                array('','',"al Dio trino ed unico,"),
                array('','',"nei secoli sia gloria.")
            )
        ),
        "sesta_3"=>array(
            array(
                array('','',"L'ora sesta c'invita,"),
                array('','',"al servizio divino:"),
                array('','',"inneggiamo al Signore"),
                array('','',"con fervore di spirito.")
            ),
            array(
                array('','',"In quest'ora sul Golgota,"),
                array('','',"vero agnello pasquale,"),
                array('','',"Cristo paga il riscatto"),
                array('','',"per la nostra salvezza.")
            ),
            array(
                array('','',"Dinanzi alla sua gloria,"),
                array('','',"anche il sole si oscura:"),
                array('','',"risplenda la sua grazia"),
                array('','',"nell'intimo dei cuori.")
            ),
            array(
                array('','',"Sia lode al Padre e al Figlio"),
                array('','',"e allo Spirito Santo,"),
                array('','',"al Dio trino ed unico,"),
                array('','',"nei secoli sia gloria.")
            )
        ),
        "nona_3"=>array(
            array(
                array('','',"L'ora nona ci chiama,"),
                array('','',"alla lode di Dio:"),
                array('','',"adoriamo cantando"),
                array('','',"l'uno e trino Signore.")
            ),
            array(
                array('','',"San Pietro che in quest'ora"),
                array('','',"salì al tempio a pregare,"),
                array('','',"rafforzi i nostri passi"),
                array('','',"sulla via della fede.")
            ),
            array(
                array('','',"Uniamoci agli apostoli"),
                array('','',"nella lode perenne"),
                array('','',"e camminiamo insieme"),
                array('','',"sulle orme di Cristo.")
            ),
            array(
                array('','',"Ascolta, Padre altissimo,"),
                array('','',"tu che regni in eterno,"),
                array('','',"con il Figlio e lo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_3"=>array(
            array(
                array('','',"Artefice e Signore"),
                array('','',"della terra e del cielo,"),
                array('','',"aurora inestinguibile,"),
                array('','',"giorno senza tramonto,")
            ),
            array(
                array('','',"dona alle stanche membra"),
                array('','',"la gioia del riposo,"),
                array('','',"e nel sonno rimargina"),
                array('','',"le ferite dell'anima.")
            ),
            array(
                array('','',"Se le tenebre scendono"),
                array('','',"sulla città degli uomini,"),
                array('','',"non si spenga la fede"),
                array('','',"nel cuore dei credenti.")
            ),
            array(
                array('','',"Te la voce proclami,"),
                array('','',"o Dio trino ed unico,"),
                array('','',"te canti il nostro cuore,"),
                array('','',"te adori il nostro spirito.")
            )
        ),
        "lodi_4"=>array(
            array(
                array('','',"Al sorger della luce,"),
                array('','',"ascolta, o Padre santo,"),
                array('','',"la preghiera degli umili.")
            ),
            array(
                array('','',"Dona un linguaggio mite,"),
                array('','',"che non conosca i fremiti"),
                array('','',"dell'orgoglio e dell'ira.")
            ),
            array(
                array('','',"Donaci occhi limpidi,"),
                array('','',"che vincano le torbide"),
                array('','',"suggestioni del male.")
            ),
            array(
                array('','',"Donaci un cuore puro,"),
                array('','',"fedele nel servizio,"),
                array('','',"ardente nella lode.")
            ),
            array(
                array('','',"A te sia gloria, o Padre,"),
                array('','',"al Figlio e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_4"=>array(
            array(
                array('','',"Dio, che di chiara luce"),
                array('','',"tessi la trama al giorno,"),
                array('','',"accogli il nostro canto"),
                array('','',"nella quiete del vespro.")
            ),
            array(
                array('','',"ecco il sole scompare"),
                array('','',"all'estremo orizzonte;"),
                array('','',"scende l'ombra e il silenzio"),
                array('','',"sulle fatiche umane.")
            ),
            array(
                array('','',"Non si offuschi la mente"),
                array('','',"nella notte del male,"),
                array('','',"ma rispecchi serena,"),
                array('','',"la luce del tuo volto.")
            ),
            array(
                array('','',"Te la voce proclami,"),
                array('','',"o Dio trino ed unico,"),
                array('','',"te canti il nostro cuore,"),
                array('','',"te adori il nostro spirito.")
            )
        ),
        "lodi_5"=>array(
            array(
                array('','',"O Gesù salvatore,"),
                array('','',"luce vera del mondo,"),
                array('','',"accogli le primizie"),
                array('','',"della nostra preghiera.")
            ),
            array(
                array('','',"Risveglia in noi la fede,"),
                array('','',"la speranza, l'amore;"),
                array('','',"dona pace e concordia"),
                array('','',"e letizia perfetta.")
            ),
            array(
                array('','',"Lenisci con le lacrime"),
                array('','',"la durezza dei cuori,"),
                array('','',"accendi il desiderio"),
                array('','',"della patria beata.")
            ),
            array(
                array('','',"A te sia gloria, o Cristo,"),
                array('','',"speranza delle genti,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_5"=>array(
            array(
                array('','',"O Gesù redentore,"),
                array('','',"immagine del Padre,"),
                array('','',"luce d'eterna luce,"),
                array('','',"accogli il nostro canto.")
            ),
            array(
                array('','',"Per radunare i popoli"),
                array('','',"nel patto dell'amore,"),
                array('','',"distendi le tue braccia"),
                array('','',"sul legno della croce.")
            ),
            array(
                array('','',"Dal tuo fianco squarciato"),
                array('','',"effondi sull'altare"),
                array('','',"i misteri pasquali"),
                array('','',"della nostra salvezza.")
            ),
            array(
                array('','',"A te sia lode, o Cristo,"),
                array('','',"speranza delle genti,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "lodi_6"=>array(
            array(
                array('','',"L'aurora inonda il cielo"),
                array('','',"di una festa di luce,"),
                array('','',"e riveste la terra"),
                array('','',"di meraviglia nuova.")
            ),
            array(
                array('','',"Fugge l'ansia dai cuori,"),
                array('','',"s'accende la speranza:"),
                array('','',"emerge sopra il caos"),
                array('','',"un'iride di pace.")
            ),
            array(
                array('','',"Così nel giorno ultimo"),
                array('','',"l'umanità in attesa"),
                array('','',"alzi il capo e contempli"),
                array('','',"l'avvento del Signore.")
            ),
            array(
                array('','',"Sia gloria al Padre altissimo"),
                array('','',"e a Cristo l'unigenito,"),
                array('','',"sia lode al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "p9"=>array(
            array(
                array('','',"Creatore degli astri,"),
                array('','',"Verbo eterno del Padre,"),
                array('','',"la Chiesa a te consacra"),
                array('','',"il suo canto di lode.")
            ),
            array(
                array('','',"Cielo e terra si prostrano"),
                array('','',"dinanzi a te, Signore;"),
                array('','',"tutte le creature"),
                array('','',"adorano il tuo nome.")
            ),
            array(
                array('','',"Per redimere il mondo"),
                array('','',"travolto dal peccato,"),
                array('','',"nascesti dalla Vergine,"),
                array('','',"salisti sulla croce.")
            ),
            array(
                array('','',"Nell'avvento glorioso,"),
                array('','',"alla fine dei tempi,"),
                array('','',"ci salvi dal nemico"),
                array('','',"la tua misericordia.")
            ),
            array(
                array('','',"Sia lode al Cristo Signore,"),
                array('','',"al Padre e al Santo Spirito,"),
                array('','',"com'era nel principio,"),
                array('','',"ora e nei secoli eterni.")
            )
        ),
        "p10"=>array(
            array(
                array('','',"Accogli nel tuo grembo,"),
                array('','',"o Vergine Maria,"),
                array('','',"il Verbo di Dio Padre.")
            ),
            array(
                array('','',"Su te il divino Spirito"),
                array('','',"distende la sua ombra,"),
                array('','',"o Madre del Signore.")
            ),
            array(
                array('','',"Porta santa del tempio,"),
                array('','',"intatta ed inviolabile,"),
                array('','',"ti apri al re della gloria.")
            ),
            array(
                array('','',"Predetto dai profeti,"),
                array('','',"annunziato da un angelo,"),
                array('','',"nasce Gesù salvatore.")
            ),
            array(
                array('','',"A te Cristo, sia lode,"),
                array('','',"al Padre e al Santo Spirito,"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "p16"=>array(
            array(
                array('','',"Chiara una voce dal cielo"),
                array('','',"si diffonde nella notte:"),
                array('','',"fuggano i sogni e le angosce,"),
                array('','',"splende la luce di Cristo.")
            ),
            array(
                array('','',"Si desti il cuore dal sonno"),
                array('','',"non più turbato dal male:"),
                array('','',"un astro nuovo rifulge"),
                array('','',"fra le tenebre del mondo.")
            ),
            array(
                array('','',"Ecco l'Agnello di Dio,"),
                array('','',"prezzo del nostro riscatto:"),
                array('','',"con fede viva imploriamo"),
                array('','',"il suo perdono e la pace.")
            ),
            array(
                array('','',"Quando alla fine dei tempi"),
                array('','',"Cristo verrà nella gloria,"),
                array('','',"dal suo tremendo giudizio"),
                array('','',"ci salvi la grazia divina.")
            ),
            array(
                array('','',"Sia lode al Cristo Signore,"),
                array('','',"al Padre e al Santo Spirito,"),
                array('','',"com'era nel principio,"),
                array('','',"ora e nei secoli eterni.")
            )
        ),
        "p17"=>array(
            array(
                array('','',"Le voci dei profeti"),
                array('','',"annunziano il Signore,"),
                array('','',"che reca a tutti gli uomini"),
                array('','',"il dono della pace.")
            ),
            array(
                array('','',"Ecco una luce nuova"),
                array('','',"s'accende nel mattino,"),
                array('','',"una voce risuona:"),
                array('','',"viene il re della gloria.")
            ),
            array(
                array('','',"Nel suo primo avvento,"),
                array('','',"Cristo venne a salvarci,"),
                array('','',"a guarir le ferite"),
                array('','',"del corpo e dello spirito.")
            ),
            array(
                array('','',"Alla fine dei tempi,"),
                array('','',"tornerà come giudice;"),
                array('','',"darà il regno promesso"),
                array('','',"ai suoi servi fedeli.")
            ),
            array(
                array('','',"Or sul nostro cammino"),
                array('','',"la sua luce risplende:"),
                array('','',"Gesù, sole di grazia,"),
                array('','',"ci chiama a vita nuova.")
            ),
            array(
                array('','',"Te, Cristo, noi cerchiamo;"),
                array('','',"te vogliamo conoscere,"),
                array('','',"per lodarti in eterno"),
                array('','',"nella patria beata.")
            )
        ),
        "p1474"=>array(
            array(
                array('','',"Cristo, pietra angolare,"),
                array('','',"fondamento immutabile,"),
                array('','',"stabilito dal Padre"),
                array('','',"per unire le genti!")
            ),
            array(
                array('','',"In te salda si edifica"),
                array('','',"la Chiesa una e santa,"),
                array('','',"città del Dio vivente,"),
                array('','',"tempio della sua lode.")
            ),
            array(
                array('','',"Vieni, dolce Signore,"),
                array('','',"vieni nella tua casa;"),
                array('','',"accogli con clemenza"),
                array('','',"i voti dei fedeli.")
            ),
            array(
                array('','',"In questa tua dimora"),
                array('','',"la grazia dello Spirito"),
                array('','',"discenda sulla Chiesa,"),
                array('','',"pellegrina nel mondo.")
            ),
            array(
                array('','',"Sia onore al Padre e al Figlio"),
                array('','',"e allo Spirito Santo,"),
                array('','',"al Dio trino ed unico"),
                array('','',"nei secoli sia gloria.")
            )
        ),
        "p1498"=>array(
            array(
                array('','',"O donna gloriosa,"),
                array('','',"alta sopra le stelle,"),
                array('','',"tu nutri sul tuo seno"),
                array('','',"il Dio che ti ha creato.")
            ),
            array(
                array('','',"La gioia che Eva ci tolse"),
                array('','',"ci rendi nel tuo figlio"),
                array('','',"e dischiudi il cammino"),
                array('','',"verso il regno dei cieli.")
            ),
            array(
                array('','',"Sei la via della pace,"),
                array('','',"sei la porta regale:"),
                array('','',"ti acclamino le genti"),
                array('','',"redente dal tuo Figlio.")
            ),
            array(
                array('','',"A Dio Padre sia lode"),
                array('','',"al Figlio e allo Spirito,"),
                array('','',"che ti hanno adornata"),
                array('','',"di una veste di grazia.")
            )
        ),
        "p1513"=>array(
            array(
                array('','',"O principi dell'eterna corte"),
                array('','',"del sommo Re"),
                array('','',"che Gesù medesimo ammaestrando"),
                array('','',"diede al mondo come Apostoli.")
            ),
            array(
                array('','',"La celeste Gerusalemme,"),
                array('','',"la cui luce è l'Agnello"),
                array('','',"possiede, come gemme brillanti,"),
                array('','',"voi gloriose fondamenta.")
            ),
            array(
                array('','',"Ora vi celebra, congratulandosi,"),
                array('','',"anche la Chiesa sposa di Cristo:"),
                array('','',"che la vostra predicazione chiamò,"),
                array('','',"che con il sangue consacraste.")
            ),
            array(
                array('','',"Quando alla fine dei secoli"),
                array('','',"il Redentore siederà come giudice,"),
                array('','',"con qual lode voi siederete,"),
                array('','',"senato di alta gloria!")
            ),
            array(
                array('','',"La vostra preghiera dunque"),
                array('','',"ci corrobori, sempre aiutandoci,"),
                array('','',"affinché quei semi che spargeste"),
                array('','',"fioriscano in chicchi del cielo.")
            ),
            array(
                array('','',"Sia gloria eterna a Cristo,"),
                array('','',"che vi fece annunziatori del Padre"),
                array('','',"e vi riempì della benefica"),
                array('','',"potenza dello Spirito Santo.")
            )
        ),
        "p1502"=>array(
            array(
                array('','',"Ave, stella del mare,"),
                array('','',"Madre gloriosa di Dio,"),
                array('','',"vergine sempre, Maria,"),
                array('','',"porta felice del cielo.")
            ),
            array(
                array('','',"L'«Ave» del messo celeste"),
                array('','',"reca l'annunzio di Dio,"),
                array('','',"muta la sorte di Eva,"),
                array('','',"dona al mondo la pace.")
            ),
            array(
                array('','',"Spezza i legami agli oppressi,"),
                array('','',"rendi la luce ai ciechi,"),
                array('','',"scaccia da noi ogni male,"),
                array('','',"chiedi per noi ogni bene.")
            ),
            array(
                array('','',"Mostrati Madre per tutti,"),
                array('','',"offri la nostra preghiera,"),
                array('','',"Cristo l'accolga benigno,"),
                array('','',"lui che si è fatto tuo Figlio.")
            ),
            array(
                array('','',"Vergine santa fra tutte,"),
                array('','',"dolce regina del cielo,"),
                array('','',"rendi innocenti i tuoi figli,"),
                array('','',"umili e puri di cuore.")
            ),
            array(
                array('','',"Donaci giorni di pace,"),
                array('','',"veglia sul nostro cammino,"),
                array('','',"fa' che vediamo il tuo Figlio,"),
                array('','',"pieni di gioia nel cielo.")
            ),
            array(
                array('','',"Lode all'altissimo Padre,"),
                array('','',"gloria al Cristo Signore,"),
                array('','',"salga allo Spirito Santo"),
                array('','',"l'inno di fede e di amore.")
            )
        ),
        "p1523"=>array(
            array(
                array('','',"L'annuncio che udiste nell'ombra,"),
                array('','',"gridatelo alto nel sole:"),
                array('','',"è questa l'estrema consegna"),
                array('','',"del Dio crocifisso e risorto.")
            ),
            array(
                array('','',"E dite, ridite sui tetti"),
                array('','',"la voce che parla nel cuore:"),
                array('','',"apostoli siate alle genti"),
                array('','',"di Cristo, salvezza e vittoria.")
            ),
            array(
                array('','',"Il nuovo messaggio di vita"),
                array('','',"vi ha spinti ai confini del mondo,"),
                array('','',"su lunghi sentieri di croce,"),
                array('','',"araldi del giorno che viene.")
            ),
            array(
                array('','',"Su voi, resi saldi in eterno,"),
                array('','',"s'edifica e innalza la Chiesa"),
                array('','',"che eterna, riversa sul mondo"),
                array('','',"da Dio, come un fiume, la pace.")
            )
        ),
        "p1524"=>array(
            array(
                array('','',"Nella luminosa gioia pasquale"),
                array('','',"il sole risplende di puro raggio"),
                array('','',"allorché gli apostoli mirano"),
                array('','',"con lo sguardo il Cristo risorto.")
            ),
            array(
                array('','',"Apertamente confessano"),
                array('','',"che a loro sono state mostrate"),
                array('','',"le ferite splendenti nella carne di Cristo:"),
                array('','',"che il Signore è risorto.")
            ),
            array(
                array('','',"O Cristo, re clementissimo,"),
                array('','',"prendi possesso dei nostri cuori,"),
                array('','',"affinché ti rendiamo in ogni tempo"),
                array('','',"le dovute lodi.")
            ),
            array(
                array('','',"Sii perenne gioia pasquale"),
                array('','',"alle menti, o Gesù,"),
                array('','',"e noi, rinati alla grazia,"),
                array('','',"unisci ai tuoi trionfi.")
            ),
            array(
                array('','',"A te sia gloria, o Cristo,"),
                array('','',"che distrutto il regno della morte,"),
                array('','',"manifestasti per mezzo degli apostoli"),
                array('','',"i sentieri della vita e della luce.")
            )
        ),
        "p1527"=>array(
            array(
                array('','',"Esulti di gioia il cielo,"),
                array('','',"risuoni sulla terra"),
                array('','',"la lode degli apostoli.")
            ),
            array(
                array('','',"Voi giudici del mondo,"),
                array('','',"araldi del Vangelo,"),
                array('','',"udite la preghiera.")
            ),
            array(
                array('','',"Voi che aprite e chiudete"),
                array('','',"le porte della vita,"),
                array('','',"spezzate i nostri vincoli.")
            ),
            array(
                array('','',"A un cenno vi obbediscono"),
                array('','',"le potenze del male:"),
                array('','',"rinnovate i prodigi.")
            ),
            array(
                array('','',"Quando verrà il Signore"),
                array('','',"alla fine dei tempi,"),
                array('','',"ci unisca nella gloria.")
            ),
            array(
                array('','',"Sia lode al Padre e al Figlio"),
                array('','',"e allo Spirito Santo,"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "p1528"=>array(
            array(
                array('','',"Gli apostoli erano tristi"),
                array('','',"per la morte del loro Signore,"),
                array('','',"che servi empi avevano condannato"),
                array('','',"a una morte crudelissima.")
            ),
            array(
                array('','',"Con dolci parole"),
                array('','',"l'angelo predisse alle donne:"),
                array('','',"«In Galilea vedrete"),
                array('','',"il Signore al più presto.»")
            ),
            array(
                array('','',"Mentre esse corrono rapide"),
                array('','',"per riferirlo agli apostoli,"),
                array('','',"vedendolo vivo,"),
                array('','',"baciano i piedi del Signore.")
            ),
            array(
                array('','',"Venuti a conoscenza di ciò,"),
                array('','',"i discepoli vanno prontamente in Galilea"),
                array('','',"per contemplare il volto"),
                array('','',"desiderato del Signore.")
            ),
            array(
                array('','',"Sii perenne gioia pasquale"),
                array('','',"alle menti, o Gesù,"),
                array('','',"e noi, rinati alla grazia,"),
                array('','',"unisci ai tuoi trionfi.")
            ),
            array(
                array('','',"A te sia gloria, o Signore,"),
                array('','',"che sei risorto dai morti,"),
                array('','',"con il Padre e lo Spirito Santo"),
                array('','',"nei secoli eterni.")
            )
        ),
        "p1553"=>array(
            array(
                array('','',"Re immortale e glorioso,"),
                array('','',"che accogli nella luce"),
                array('','',"i tuoi servi fedeli,")
            ),
            array(
                array('','',"esaudisci il tuo popolo,"),
                array('','',"che canta le tue lodi"),
                array('','',"nel ricordo dei martiri.")
            ),
            array(
                array('','',"La forza del tuo Spirito"),
                array('','',"ci guidi alla vittoria"),
                array('','',"sul male e sulla morte.")
            ),
            array(
                array('','',"Sia onore al Padre e al Figlio"),
                array('','',"e allo Spirito Santo"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "p1574"=>array(
            array(
                array('','',"O martire di Dio,"),
                array('','',"discepolo fedele"),
                array('','',"che hai segnato nel sangue"),
                array('','',"il patto del Battesimo!")
            ),
            array(
                array('','',"Tu dividi con Cristo,"),
                array('','',"agnello del riscatto,"),
                array('','',"la croce e la vittoria"),
                array('','',"nel regno dei beati.")
            ),
            array(
                array('','',"Intercedi per noi"),
                array('','',"pellegrini nel tempo"),
                array('','',"e guida i nostri passi"),
                array('','',"sulla via della pace.")
            ),
            array(
                array('','',"Tu libera gli oppressi,"),
                array('','',"sostieni i vacillanti,"),
                array('','',"e raduna i dispersi"),
                array('','',"nell'Amore del Padre.")
            ),
            array(
                array('','',"A te sia lode, o Cristo,"),
                array('','',"Parola del Dio vivo,"),
                array('','',"che sveli nel martirio"),
                array('','',"la forza del tuo Spirito.")
            )
        ),
        "p1594"=>array(
            array(
                array('','',"O eterno sole,"),
                array('','',"che con la tua luce avvolgi tutte le cose create,"),
                array('','',"o suprema luce delle menti,"),
                array('','',"a te inneggiano i nostri cuori.")
            ),
            array(
                array('','',"Per le ardenti ispirazioni del tuo Spirito,"),
                array('','',"qui rifulsero vivide luci,"),
                array('','',"che manifestano i sentieri"),
                array('','',"della salvezza nei secoli.")
            ),
            array(
                array('','',"Ciò che la rivelazione divina"),
                array('','',"e la naturale ragione mostrano,"),
                array('','',"per mezzo di questi ministri della grazia"),
                array('','',"brillò di nuovo splendore.")
            ),
            array(
                array('','',"Partecipe della gloria di costoro,"),
                array('','',"retto nella luminosa dottrina,"),
                array('','',"quest'uomo inclito, di cui cantiamo le lodi,"),
                array('','',"rifulse beato.")
            ),
            array(
                array('','',"Per sua intercessione ti preghiamo,"),
                array('','',"o Dio, permettici di percorrere il sentiero della verità,"),
                array('','',"affinché possiamo conseguire te,"),
                array('','',"premio eterno.")
            ),
            array(
                array('','',"Concedicelo, o Padre pietosissimo,"),
                array('','',"e tu, Unigenito uguale al Padre,"),
                array('','',"che con lo Spirito Santo regnate"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "p1604"=>array(
            array(
                array('','',"Sei adorato, o Cristo,"),
                array('','',"maestro eterno e pietoso,"),
                array('','',"che manifesti le leggi della salvezza"),
                array('','',"e che solo sei ritenuto di avere parole di vita eterna.")
            ),
            array(
                array('','',"Proclamiamo, o buon Pastore del mondo,"),
                array('','',"che tu sempre dal cielo hai confermato"),
                array('','',"le parole della Sposa, con le quali,"),
                array('','',"ella è costantemente luce al mondo.")
            ),
            array(
                array('','',"Tu stesso doni servi luminosi,"),
                array('','',"che, come stelle auree brillanti,"),
                array('','',"rivelino a noi"),
                array('','',"i sicuri dogmi della vita beata.")
            ),
            array(
                array('','',"Perciò lodi echeggino per te, o Maestro,"),
                array('','',"che effondi i beni stupendi dello Spirito"),
                array('','',"nell'eloquio dei dottori, nel quale potentemente"),
                array('','',"la luce benigna tua si manifesta.")
            ),
            array(
                array('','',"E il giusto, che ora si celebra, interceda con istanza"),
                array('','',"perché tu, conceda al tuo popolo,"),
                array('','',"di progredire per le vie amene della vita"),
                array('','',"fino a quando non canterà a te inni nella visione perfetta.")
            )
        ),
        "p1609"=>array(
            array(
                array('','',"Gesù, premio e corona"),
                array('','',"dei tuoi servi fedeli,"),
                array('','',"glorifica il tuo nome.")
            ),
            array(
                array('','',"Concedi alla tua Chiesa,"),
                array('','',"che venera san ... ,"),
                array('','',"la vittoria sul male.")
            ),
            array(
                array('','',"Seguendo le tue orme,"),
                array('','',"sulla via della croce,"),
                array('','',"egli piacque a Dio Padre.")
            ),
            array(
                array('','',"Sapiente e vigilante,"),
                array('','',"testimoniò il Vangelo"),
                array('','',"in parole ed in opere.")
            ),
            array(
                array('','',"Dalla città dei santi,"),
                array('','',"dove regna glorioso,"),
                array('','',"ci guidi e ci protegga.")
            ),
            array(
                array('','',"A te, Cristo, sia lode,"),
                array('','',"al Padre ed allo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "p1622"=>array(
            array(
                array('','',"Gesù, premio e corona"),
                array('','',"dei tuoi servi fedeli,"),
                array('','',"glorifica il tuo nome.")
            ),
            array(
                array('','',"Concedi alla tua Chiesa,"),
                array('','',"che venera san Benedetto,"),
                array('','',"la vittoria sul male.")
            ),
            array(
                array('','',"Seguendo le tue orme,"),
                array('','',"sulla via della croce,"),
                array('','',"egli piacque a Dio Padre.")
            ),
            array(
                array('','',"Sapiente e vigilante,"),
                array('','',"testimoniò il Vangelo"),
                array('','',"in parole ed in opere.")
            ),
            array(
                array('','',"Dalla città dei santi,"),
                array('','',"dove regna glorioso,"),
                array('','',"ci guidi e ci protegga.")
            ),
            array(
                array('','',"A te, Cristo, sia lode,"),
                array('','',"al Padre ed allo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "p1631"=>array(
            array(
                array('','',"O Cristo, Verbo del Padre,"),
                array('','',"re glorioso fra i santi,"),
                array('','',"luce e salvezza del mondo,"),
                array('','',"in te crediamo.")
            ),
            array(
                array('','',"Cibo e bevanda di vita,"),
                array('','',"balsamo, veste, dimora,"),
                array('','',"forza, rifugio, conforto,"),
                array('','',"in te speriamo.")
            ),
            array(
                array('','',"Illumina col tuo Spirito"),
                array('','',"l'oscura notte del male,"),
                array('','',"orienta il nostro cammino"),
                array('','',"incontro al Padre.")
            )
        ),
        "p1651"=>array(
            array(
                array('','',"Gerusalemme nuova,"),
                array('','',"immagine di pace,"),
                array('','',"costruita per sempre"),
                array('','',"nell'amore del Padre.")
            ),
            array(
                array('','',"Tu discendi dal cielo"),
                array('','',"come vergine sposa,"),
                array('','',"per congiungerti a Cristo"),
                array('','',"nelle nozze eterne.")
            ),
            array(
                array('','',"Dentro le tue mura,"),
                array('','',"risplendenti di luce,"),
                array('','',"si radunano in festa"),
                array('','',"gli amici del Signore:")
            ),
            array(
                array('','',"pietre vive e preziose,"),
                array('','',"scolpite dallo Spirito"),
                array('','',"con la croce e il martirio"),
                array('','',"per la città dei santi.")
            ),
            array(
                array('','',"Sia onore al Padre e al Figlio"),
                array('','',"e allo Spirito Santo,"),
                array('','',"al Dio trino ed unico"),
                array('','',"nei secoli sia gloria.")
            )
        ),
        "p1661"=>array(
            array(
                array('','',"O Cristo, Verbo del Padre,"),
                array('','',"glorioso re delle vergini,"),
                array('','',"luce e salvezza del mondo,"),
                array('','',"in te crediamo.")
            ),
            array(
                array('','',"Cibo e bevanda di vita,"),
                array('','',"balsamo, veste, dimora,"),
                array('','',"forza, rifugio, conforto,"),
                array('','',"in te speriamo.")
            ),
            array(
                array('','',"Illumina col tuo Spirito"),
                array('','',"l'oscura notte del male,"),
                array('','',"orienta il nostro cammino"),
                array('','',"incontro al Padre.")
            )
        ),
        "p1683"=>array(
            array(
                array('','',"O adorabile amore del Redentore, che,"),
                array('','',"desiderando che gli uomini fossero consacrati al Padre,"),
                array('','',"guidi i cuori con le ispirazioni,"),
                array('','',"mirabili e varie dello Spirito.")
            ),
            array(
                array('','',"A quelli che con la tua acqua,"),
                array('','',"fai figli del Dio vero,"),
                array('','',"vuoi dare spesso la grazia:"),
                array('','',"nuovi germogli di amore, o Cristo.")
            ),
            array(
                array('','',"Tu chiami: i chiamati corrono alacri,"),
                array('','',"lasciano ogni cosa, desiderando, sotto la tua guida,"),
                array('','',"per il sentiero regale della croce,"),
                array('','',"cercate continuamente soltanto il Padre.")
            ),
            array(
                array('','',"Questo santo, così ardente per dono del cielo,"),
                array('','',"con tutte le forze dimorò pieno di amore in te,"),
                array('','',"e desiderò vivamente di giungere"),
                array('','',"alle gioiose vette della virtù.")
            ),
            array(
                array('','',"Risuoni la lode al sommo Padre,"),
                array('','',"a te, principe Cristo e ugualmente allo Spirito Santo,"),
                array('','',"che donate con cuore magnanimo"),
                array('','',"il centuplo a colui che dà piccole cose.")
            )
        ),
        "p1705"=>array(
            array(
                array('','',"O Cristo, Verbo del Padre,"),
                array('','',"re glorioso fra le sante,"),
                array('','',"luce e salvezza del mondo,"),
                array('','',"in te crediamo.")
            ),
            array(
                array('','',"Cibo e bevanda di vita,"),
                array('','',"balsamo, veste, dimora,"),
                array('','',"forza, rifugio, conforto,"),
                array('','',"in te speriamo.")
            ),
            array(
                array('','',"Illumina col tuo Spirito"),
                array('','',"l'oscura notte del male,"),
                array('','',"orienta il nostro cammino"),
                array('','',"incontro al Padre.")
            )
        ),
        "p1709"=>array(
            array(
                array('','',"Lode alla donna forte:"),
                array('','',"lo splendore dei cieli"),
                array('','',"rivela il suo valore.")
            ),
            array(
                array('','',"arse di santo amore,"),
                array('','',"quando in preghiere ed opere"),
                array('','',"serviva i suoi fratelli.")
            ),
            array(
                array('','',"Il Pane e la Parola"),
                array('','',"sostennero i suoi passi"),
                array('','',"verso la meta eterna.")
            ),
            array(
                array('','',"O Cristo, nostra forza,"),
                array('','',"benedici il tuo popolo"),
                array('','',"nel nome dei tuoi santi.")
            ),
            array(
                array('','',"A te, Gesù, sia gloria,"),
                array('','',"al Padre ed allo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "p1731"=>array(
            array(
                array('','',"O Cristo, che piangesti"),
                array('','',"per la morte di Lazzaro,"),
                array('','',"e vivo lo rendesti"),
                array('','',"a Marta ed a Maria,")
            ),
            array(
                array('','',"tu implorasti il perdono"),
                array('','',"per i tuoi uccisori,"),
                array('','',"e al ladrone pentito"),
                array('','',"promettesti il tuo regno.")
            ),
            array(
                array('','',"Tu che in croce affidasti"),
                array('','',"a Giovanni la Madre,"),
                array('','',"fa' che ella ci assista"),
                array('','',"nell'ora della morte.")
            ),
            array(
                array('','',"Concedi, o buon Pastore,"),
                array('','',"ai fratelli defunti"),
                array('','',"di vedere il tuo volto"),
                array('','',"nella gloria dei cieli.")
            ),
            array(
                array('','',"A te sia gloria, o Cristo,"),
                array('','',"speranza delle genti,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        )
    );

    protected $proprio=array(
        "ves_PAL"=>array(
            array(
                array('','',"Ecco il vessillo della croce,"),
                array('','',"mistero di morte e di gloria:"),
                array('','',"l'artefice di tutto il creato"),
                array('','',"è appeso ad un patibolo.")
            ),
            array(
                array('','',"Un colpo di lancia trafigge,"),
                array('','',"il cuore del Figlio di Dio;"),
                array('','',"sgorga acqua e sangue, un torrente"),
                array('','',"che lava i peccati del mondo.")
            ),
            array(
                array('','',"O albero fecondo e glorioso,"),
                array('','',"ornato d'un manto regale,"),
                array('','',"talamo, trono ed altare"),
                array('','',"al corpo di Cristo Signore.")
            ),
            array(
                array('','',"O croce beata che apristi"),
                array('','',"le braccia a Gesù redentore,"),
                array('','',"bilancia del grande riscatto"),
                array('','',"che tolse la preda all'inferno.")
            ),
            array(
                array('','',"Ave, o croce, unica speranza,"),
                array('','',"in questo tempo di passione"),
                array('','',"accresci ai fedeli la grazia,"),
                array('','',"ottieni alle genti la pace.")
            )
        ),
        "terza_PAL"=>array(
            array(
                array('','',"Il mondo fedele giubili"),
                array('','',"per la gioia dell'immensa salvezza:"),
                array('','',"Gesù, redentore del mondo,"),
                array('','',"ha annientato il principe della morte.")
            ),
            array(
                array('','',"Il popolo, recando per la via"),
                array('','',"rami di palma e di olivo,"),
                array('','',"grida a gran voce:"),
                array('','','"Osanna al Figlio di David".')
            ),
            array(
                array('','',"Perciò noi tutti corriamo"),
                array('','',"incontro all'eccelso Re;"),
                array('','',"cantando dolci gloriose melodie,"),
                array('','',"teniamo in mano le palme del gaudio.")
            ),
            array(
                array('','',"Egli elevi con i suoi doni di grazia"),
                array('','',"il nostro pericoloso cammino,"),
                array('','',"così che possiamo manifestare in ogni momento"),
                array('','',"a lui la dovuta gratitudine.")
            ),
            array(
                array('','',"Sia gloria Dio Padre"),
                array('','',"e al suo Figlio Unigenito"),
                array('','',"con lo Spirito Paraclito"),
                array('','','nei secoli eterni.')
            )
        ),
        "ves_BAT"=>array(
            array(
                array('','',"Unico Figlio del Padre,"),
                array('','',"tu vieni a noi dal cielo,"),
                array('','',"primo tra molti fratelli.")
            ),
            array(
                array('','',"Nelle acque del battesimo"),
                array('','',"tu purifichi e consacri"),
                array('','',"coloro che in te credono.")
            ),
            array(
                array('','',"La tua vittoria pasquale"),
                array('','',"riscatta le creature,"),
                array('','',"infonde la vita nuova.")
            ),
            array(
                array('','',"O redentore degli uomini,"),
                array('','',"spezza i sigilli del male,"),
                array('','',"concedi al mondo la pace.")
            ),
            array(
                array('','',"Rimani sempre con noi,"),
                array('','',"irradia nei nostri cuori"),
                array('','',"il dono della tua luce.")
            ),
            array(
                array('','',"Sia gloria a Cristo Signore,"),
                array('','',"al Padre e al Santo Spirito,"),
                array('','',"ora e nei secoli eterni.")
            )
        ),
        "lodi_PEN"=>array(
            array(
                array('','',"Giorno d'immensa gioia"),
                array('','',"nella città di Dio:"),
                array('','',"la fiamma dello Spirito"),
                array('','',"risplende nel cenacolo.")
            ),
            array(
                array('','',"Si rinnova il prodigio"),
                array('','',"degli antichi profeti:"),
                array('','',"una mistica ebbrezza"),
                array('','',"tocca le lingue e i cuori.")
            ),
            array(
                array('','',"O stagione beata"),
                array('','',"della Chiesa nascente,"),
                array('','',"che accoglie nel suo grembo"),
                array('','',"le primizie dei popoli!")
            ),
            array(
                array('','',"È questo il giubileo"),
                array('','',"dell'anno cinquantesimo,"),
                array('','',"che riscatta gli schiavi"),
                array('','',"e proclama il perdono.")
            ),
            array(
                array('','',"Manda su noi, Signore, "),
                array('','',"il dono del tuo Spirito,"),
                array('','',"concedi al mondo inquieto"),
                array('','',"la giustizia e la pace.")
            ),
            array(
                array('','',"O luce di sapienza,"),
                array('','',"rivelaci il mistero"),
                array('','',"del Dio trino ed unico,"),
                array('','',"fonte d'eterno amore.")
            )
        ),
        "ves_PEN"=>array(
            array(
                array('','',"Vieni, o Spirito creatore,"),
                array('','',"visita le nostre menti,"),
                array('','',"riempi della tua grazia"),
                array('','',"i cuori che hai creato.")
            ),
            array(
                array('','',"O dolce consolatore,"),
                array('','',"dono del Padre altissimo,"),
                array('','',"acqua viva, fuoco, amore,"),
                array('','',"santo crisma dell'anima.")
            ),
            array(
                array('','',"Dito della mano di Dio,"),
                array('','',"promesso dal Salvatore,"),
                array('','',"irradia i tuoi sette doni,"),
                array('','',"suscita in noi la parola.")
            ),
            array(
                array('','',"Sii luce dell'intelletto,"),
                array('','',"fiamma ardente nel cuore;"),
                array('','',"sana le nostre ferite"),
                array('','',"col balsamo del tuo amore.")
            ),
            array(
                array('','',"Difendici dal nemico, "),
                array('','',"reca in dono la pace,"),
                array('','',"la tua guida invincibile"),
                array('','',"ci preservi dal male.")
            ),
            array(
                array('','',"Luce d'eterna sapienza,"),
                array('','',"svelaci il grande mistero"),
                array('','',"di Dio Padre e del Figlio"),
                array('','',"uniti in un solo Amore.")
            )
        ),
        "ves_SCG"=>array(
            array(
                array('','',"Creati per la gloria del tuo nome,"),
                array('','',"redenti dal tuo sangue sulla croce,"),
                array('','',"segnati dal sigillo del tuo Spirito,"),
                array('','',"noi t'invochiamo: salvaci, o Signore!")
            ),
            array(
                array('','',"Tu spezza le catene della colpa,"),
                array('','',"proteggi i miti, libera gli oppressi"),
                array('','',"e conduci nel cielo ai quieti pascoli"),
                array('','',"il popolo che crede nel tuo amore.")
            ),
            array(
                array('','',"Sia lode e onore a te, pastore buono,"),
                array('','',"luce radiosa dell'eterna luce,"),
                array('','',"che vivi con il Padre e il Santo Spirito,"),
                array('','',"nei secoli dei secoli glorioso.")
            )
        ),
        "ves1_TRI"=>array(
            array(
                array('','',"O Trinità infinita,"),
                array('','',"cantiamo la tua gloria in questo vespro,"),
                array('','',"perché nel Cristo tu ci hai resi figli"),
                array('','',"e i nostri cuori sono tua dimora.")
            ),
            array(
                array('','',"Eterno, senza tempo,"),
                array('','',"sorgente della vita che non muore,"),
                array('','',"a te la creazione fa ritorno"),
                array('','',"nell'incessante flusso dell'amore.")
            ),
            array(
                array('','',"Noi ti cantiamo, o Immenso,"),
                array('','',"in questo breve sabato del tempo"),
                array('','',"che annuncia il grande giorno senza sera"),
                array('','',"in cui vedremo te vivente luce.")
            ),
            array(
                array('','',"A te la nostra lode,"),
                array('','',"o Trinità dolcissima e beata,"),
                array('','',"che sempre sgorghi e sempre rifluisci"),
                array('','',"nel quieto mare del tuo stesso Amore.")
            )
        ),
        "lodi_TRI"=>array(
            array(
                array('','',"O Trinità beata,"),
                array('','',"oceano di pace,"),
                array('','',"la Chiesa a te consacra"),
                array('','',"la sua lode perenne.")
            ),
            array(
                array('','',"Padre d'immensa gloria,"),
                array('','',"Verbo d'eterna luce,"),
                array('','',"Spirito di sapienza"),
                array('','',"e carità perfetta.")
            ),
            array(
                array('','',"Roveto inestinguibile"),
                array('','',"di verità e d'amore,"),
                array('','',"ravviva in noi la gioia"),
                array('','',"dell'àgape fraterna.")
            ),
            array(
                array('','',"O principio e sorgente"),
                array('','',"della vita immortale,"),
                array('','',"rivelaci il tuo volto"),
                array('','',"nella gloria dei cieli.")
            )
        ),
        "ves_COD"=>array(
            array(
                array('','',"Frumento di Cristo noi siamo"),
                array('','',"cresciuto nel sole di Dio,"),
                array('','',"nell'acqua del fonte impastati,"),
                array('','',"segnati dal crisma divino.")
            ),
            array(
                array('','',"In pane trasformaci, o Padre,"),
                array('','',"per il sacramento di pace:"),
                array('','',"un pane, uno Spirito, un Corpo,"),
                array('','',"la Chiesa una-santa, o Signore.")
            ),
            array(
                array('','',"O Cristo, pastore glorioso,"),
                array('','',"a te la potenza e l'onore,"),
                array('','',"col Padre e lo Spirito Santo"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "lodi_GRE"=>array(
            array(
                array('','',"O Cristo, Verbo del Padre,"),
                array('','',"glorioso fra gli angeli,"),
                array('','',"luce e salvezza del mondo,"),
                array('','',"in te crediamo.")
            ),
            array(
                array('','',"Cibo e bevanda di vita,"),
                array('','',"balsamo, veste, dimora,"),
                array('','',"forza, rifugio, conforto,"),
                array('','',"in te speriamo.")
            ),
            array(
                array('','',"Illumina col tuo Spirito"),
                array('','',"l'oscura notte del male,"),
                array('','',"orienta il nostro cammino"),
                array('','',"incontro al Padre.")
            )
        ),
        "ves_GRE"=>array(
            array(
                array('','',"O re d'eterna gloria,"),
                array('','',"che irradi sulla Chiesa"),
                array('','',"i doni del tuo Spirito,"),
                array('','',"assisti i tuoi fedeli.")
            ),
            array(
                array('','',"Illumina le menti,"),
                array('','',"consola i nostri cuori,"),
                array('','',"rafforza i nostri passi"),
                array('','',"sulla via della pace.")
            ),
            array(
                array('','',"E quando verrà il giorno"),
                array('','',"del tuo avvento glorioso,"),
                array('','',"accoglici, o Signore,"),
                array('','',"nel regno dei beati.")
            ),
            array(
                array('','',"A te sia lode, o Cristo,"),
                array('','',"speranza delle genti,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_NAT"=>array(
            array(
                array('','',"O Gesù salvatore,"),
                array('','',"immagine del Padre,"),
                array('','',"re immortale dei secoli,")
            ),
            array(
                array('','',"luce d'eterna luce,"),
                array('','',"speranza inestinguibile,"),
                array('','',"ascolta la preghiera.")
            ),
            array(
                array('','',"Tu che da Maria Vergine,"),
                array('','',"prendi forma mortale,"),
                array('','',"ricordati di noi!")
            ),
            array(
                array('','',"Nel gaudio del Natale"),
                array('','',"ti salutiamo, Cristo,"),
                array('','',"redentore del mondo.")
            ),
            array(
                array('','',"La terra, il cielo, il mare"),
                array('','',"acclamano il tuo avvento,"),
                array('','',"o Figlio dell'Altissimo.")
            ),
            array(
                array('','',"Redenti dal tuo sangue,"),
                array('','',"adoriamo il tuo nome,"),
                array('','',"cantiamo un canto nuovo.")
            ),
            array(
                array('','',"A te sia gloria, o Cristo,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "lodi_NAT"=>array(
            array(
                array('','',"Dal sorgere del sole"),
                array('','',"s'irradi sulla terra"),
                array('','',"il canto della lode.")
            ),
            array(
                array('','',"Il Creatore dei secoli"),
                array('','',"prende forma mortale"),
                array('','',"per redimere gli uomini.")
            ),
            array(
                array('','',"Maria, Vergine Madre,"),
                array('','',"porta un segreto arcano"),
                array('','',"nell'ombra dello Spirito.")
            ),
            array(
                array('','',"Dimora pura e santa,"),
                array('','',"tempio del Dio vivente,"),
                array('','',"concepisce il Figlio.")
            ),
            array(
                array('','',"Nasce il Cristo Signore,"),
                array('','',"come predisse l'angelo"),
                array('','',"e Giovanni dal grembo.")
            ),
            array(
                array('','',"Giace povero ed umile"),
                array('','',"colui che regge il mondo"),
                array('','',"nella stalla di Betlem.")
            ),
            array(
                array('','',"Lo annunziano ai pastori"),
                array('','',"schiere di angeli in festa,"),
                array('','',"cantando gloria e pace.")
            ),
            array(
                array('','',"A te sia lode, o Cristo,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_SAF"=>array(
            array(
                array('','',"O famiglia di Nazareth,"),
                array('','',"immagine vivente"),
                array('','',"della Chiesa di Dio!")
            ),
            array(
                array('','',"Entro le tue mura"),
                array('','',"si avvicendano gli angeli"),
                array('','',"in devoto servizio.")
            ),
            array(
                array('','',"Nel divino fanciullo"),
                array('','',"si congiungono gli animi"),
                array('','',"in perfetta letizia.")
            ),
            array(
                array('','',"La tua serena quiete,"),
                array('','',"ravvivi in ogni casa"),
                array('','',"il patto dell'amore.")
            ),
            array(
                array('','',"E regni in tutti i popoli,"),
                array('','',"da oriente ad occidente,"),
                array('','',"la concordia e la pace.")
            ),
            array(
                array('','',"A te, Cristo, sia lode,"),
                array('','',"al Padre ed allo Spirito,"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "lodi_EPI"=>array(
            array(
                array('','',"Prostràti i santi Magi"),
                array('','',"adorano il Bambino,"),
                array('','',"offron doni d'Oriente:"),
                array('','',"oro, incenso e mirra.")
            ),
            array(
                array('','',"O simboli profetici"),
                array('','',"di segreta grandezza,"),
                array('','',"che svelano alle genti"),
                array('','',"una triplice gloria!")
            ),
            array(
                array('','',"Oro e incenso proclamano"),
                array('','',"il Re e Dio immortale;"),
                array('','',"la mirra annunzia l'Uomo"),
                array('','',"deposto dalla croce.")
            ),
            array(
                array('','',"Betlemme, tu sei grande"),
                array('','',"fra le città di Giuda:"),
                array('','',"in te è apparso al mondo"),
                array('','',"il Cristo Salvatore.")
            ),
            array(
                array('','',"Nelle sue mani il Padre"),
                array('','',"pose il giudizio e il regno:"),
                array('','',"lo attestano concordi"),
                array('','',"le voci dei profeti.")
            ),
            array(
                array('','',"Non conosce confini"),
                array('','',"nello spazio e nel tempo"),
                array('','',"il suo regno d'amore,"),
                array('','',"di giustizia e di pace.")
            ),
            array(
                array('','',"A te sia lode, o Cristo,"),
                array('','',"nato da Maria Vergine,"),
                array('','',"al Padre ed allo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_EPI"=>array(
            array(
                array('','',"Perché temi, Erode,"),
                array('','',"il Signore che viene?"),
                array('','',"Non toglie i regni umani"),
                array('','',"chi dà il regno dei cieli.")
            ),
            array(
                array('','',"I Magi vanno a Betlem"),
                array('','',"e la stella li guida:"),
                array('','',"nella sua luce amica"),
                array('','',"cercan la vera luce.")
            ),
            array(
                array('','',"Il Figlio dell'Altissimo"),
                array('','',"s'immerge nel Giordano,"),
                array('','',"l'Agnello senza macchia"),
                array('','',"lava le nostre colpe.")
            ),
            array(
                array('','',"Nuovo prodigio, a Cana:"),
                array('','',"versan vino le anfore,"),
                array('','',"si arrossano le acque,"),
                array('','',"mutando la natura.")
            ),
            array(
                array('','',"A te sia gloria, o Cristo,"),
                array('','',"che ti sveli alle genti,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_QU0"=>array(
            array(
                array('','',"Accogli, o Dio pietoso,"),
                array('','',"le preghiere e le lacrime"),
                array('','',"che il tuo popolo effonde"),
                array('','',"in questo tempo santo.")
            ),
            array(
                array('','',"Tu che scruti e conosci"),
                array('','',"i segreti dei cuori,"),
                array('','',"concedi ai penitenti"),
                array('','',"la grazia del perdono.")
            ),
            array(
                array('','',"Grande è il nostro peccato,"),
                array('','',"ma più grande è il tuo amore:"),
                array('','',"cancella i nostri debiti"),
                array('','',"a gloria del tuo nome.")
            ),
            array(
                array('','',"Risplenda la tua lampada"),
                array('','',"sopra il nostro cammino,"),
                array('','',"la tua mano ci guidi"),
                array('','',"alla meta pasquale.")
            ),
            array(
                array('','',"Ascolta, o Padre altissimo,"),
                array('','',"tu che regni nei secoli"),
                array('','',"con il Cristo tuo Figlio"),
                array('','',"e lo Spirito Santo.")
            )
        ),
        "lodi_QU0"=>array(
            array(
                array('','',"Nella santa assemblea,"),
                array('','',"o nel segreto dell'anima,"),
                array('','',"prostriamoci e imploriamo"),
                array('','',"la divina clemenza.")
            ),
            array(
                array('','',"Dall'ira del giudizio"),
                array('','',"liberaci, o Padre buono;"),
                array('','',"non togliere ai tuoi figli"),
                array('','',"il segno della tua gloria.")
            ),
            array(
                array('','',"Ricorda che ci plasmasti"),
                array('','',"col soffio del tuo Spirito:"),
                array('','',"siam tua vigna, tuo popolo,"),
                array('','',"e opera delle tue mani.")
            ),
            array(
                array('','',"Perdona i nostri errori,"),
                array('','',"sana le nostre ferite,"),
                array('','',"guidaci con la tua grazia"),
                array('','',"alla vittoria pasquale.")
            ),
            array(
                array('','',"Sia lode al Padre altissimo,"),
                array('','',"al Figlio e al Santo Spirito"),
                array('','',"com'era nel principio,"),
                array('','',"ora e nei secoli eterni.")
            )
        ),
        "ves_QU1"=>array(
            array(
                array('','',"Tu nuda radice divelta"),
                array('','',"dall'arido suolo riarso,"),
                array('','',"ci mostri il tuo volto sconvolto"),
                array('','',"dal lungo patir per amore.")
            ),
            array(
                array('','',"Tu solo, o Santo che soffri,"),
                array('','',"ti carichi il nostro dolore"),
                array('','',"e fai che in te ora divenga"),
                array('','',"fecondo per sempre di gloria.")
            ),
            array(
                array('','',"Dal cuore di pietra dell'uomo"),
                array('','',"sgorghi una fonte di pianto,"),
                array('','',"ne lavi le colpe segrete,"),
                array('','',"lo renda capace d'amore.")
            ),
            array(
                array('','',"O Cristo, fratello che soffri,"),
                array('','',"accogli la lode perenne"),
                array('','',"di chi in te solo può dire"),
                array('','','"Padre" al Santo dei Santi.')
            )
        ),
        "terza_QU0"=>array(
            array(
                array('','',"Nella fede in Dio, di cui viviamo,"),
                array('','',"nella speranza per cui costantemente crediamo,"),
                array('','',"per un dono d'amore"),
                array('','',"cantiamo la gloria di Cristo.")
            ),
            array(
                array('','',"Che condotto all'ora terza"),
                array('','',"come vittima alla passione,"),
                array('','',"portando il patibolo della croce"),
                array('','',"ha redento il gregge perduto.")
            ),
            array(
                array('','',"Supplici preghiamo, dunque,"),
                array('','',"resi liberi dalla redenzione,"),
                array('','',"che Egli strappi dalle vanità del mondo"),
                array('','',"quelli che ha liberato dalla condanna.")
            ),
            array(
                array('','',"Supplichiamo Cristo e il Padre,"),
                array('','',"lo Spirito del Padre e del Figlio;"),
                array('','',"o Trinità, Dio unico e onnipotente,"),
                array('','','proteggi quelli che ti pregano.')
            )
        ),
        "sesta_QU0"=>array(
            array(
                array('','',"Nell'ora in cui Cristo ebbe sete"),
                array('','',"e in cui salì sulla croce,"),
                array('','',"Cristo accresca la sete di giustizia"),
                array('','',"in quelli che amano pregare in quest'ora.")
            ),
            array(
                array('','',"Contemporaneamente per questi ci sia,"),
                array('','',"una fame che Egli stesso sazi di sé;"),
                array('','',"affinché il peccato procuri disgusto"),
                array('','',"e la virtù desiderio.")
            ),
            array(
                array('','',"Il dono dello Spirito Santo"),
                array('','',"scenda su coloro che pregano,"),
                array('','',"affinché si raffreddi l'ardore delle passioni"),
                array('','',"e si infervori la mente.")
            ),
            array(
                array('','',"Supplichiamo Cristo e il Padre,"),
                array('','',"lo Spirito del Padre e del Figlio;"),
                array('','',"o Trinità, Dio unico e onnipotente,"),
                array('','',"infiamma d'amore quelli che pregano")
            )
        ),
        "nona_QU0"=>array(
            array(
                array('','',"L'ora di nona si effonde"),
                array('','',"sacra su di noi,"),
                array('','',"e nel santo nome di Gesù"),
                array('','',"impetriamo il beneficio del perdono.")
            ),
            array(
                array('','',"Ecco, la confessione del ladrone"),
                array('','',"merita la grazia di Cristo,"),
                array('','',"la nostra lode e preghiera"),
                array('','',"ci meriti indulgenza.")
            ),
            array(
                array('','',"La morte finisce ora per mezzo della croce,"),
                array('','',"e dopo le tenebre ritorna la luce;"),
                array('','',"si squarci l'orrore dei peccati,"),
                array('','',"risplenda la purezza delle menti.")
            ),
            array(
                array('','',"Supplichiamo Cristo e il Padre,"),
                array('','',"lo Spirito del Padre e del Figlio;"),
                array('','',"o Trinità, Dio unico e onnipotente,"),
                array('','',"infiamma d'amore quelli che pregano")
            )
        ),
        "ves_SS4"=>array(
            array(
                array('','',"O pane vivo, memoriale"),
                array('','',"della passione del Signore,"),
                array('','',"fa' ch'io gusti quanto è soave"),
                array('','',"di te vivere, in te sperare.")
            ),
            array(
                array('','',"Nell'onda pura del tuo sangue"),
                array('','',"immergimi, o mio redentore:"),
                array('','',"una goccia sola è un battesimo"),
                array('','',"che rinnova il mondo intero.")
            ),
            array(
                array('','',"Fa' ch'io contempli il tuo volto"),
                array('','',"nella patria beata del cielo,"),
                array('','',"con il Padre e lo Spirito Santo"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "terza_SS5"=>array(
            array(
                array('','',"Salva, o Redentore, la tua nobile creatura,"),
                array('','',"segnata dalla santa luce della tua immagine,"),
                array('','',"affinché non perisca per inganno del demonio"),
                array('','',"chi salvasti a prezzo della morte.")
            ),
            array(
                array('','',"Ti dispiaccia che i tuoi servi non son liberi,"),
                array('','',"assolvi i colpevoli, solleva gli schiavi,"),
                array('','',"e fa', o Re buono, che coloro che hai redento col tuo sangue"),
                array('','',"siano eternamente felici con te.")
            )
        ),
        "sesta_SS5"=>array(
            array(
                array('','',"O croce, benedizione del mondo,"),
                array('','',"speranza e sicura redenzione,"),
                array('','',"una volta portatrice dell'inferno"),
                array('','',"ora illustre porta del cielo.")
            ),
            array(
                array('','',"Su di te è innalzata come vittima,"),
                array('','',"colui che attirò a se ogni creatura,"),
                array('','',"che il principe del mondo assale"),
                array('','',"e niente di suo trova.")
            ),
            array(
                array('','',"Al Padre, a te e al Paraclito"),
                array('','',"sia eguale gloria, o Gesù,"),
                array('','',"che concedi a noi di godere"),
                array('','',"per sempre della vittoria della croce.")
            )
        ),
        "nona_SS5"=>array(
            array(
                array('','',"Per la croce, o Cristo ti chiediamo,"),
                array('','',"conduci al premio della vita"),
                array('','',"quelli che tu, sospeso allo stipite del legno,"),
                array('','',"ti sei degnato di redimere.")
            ),
            array(
                array('','',"Lo statuto della tua legge"),
                array('','',"cancella l'antica condanna;"),
                array('','',"muore l'antica servitù,"),
                array('','',"è restituita la libertà vera.")
            ),
            array(
                array('','',"Al Padre, a te e al Paraclito"),
                array('','',"sia eguale gloria, o Gesù,"),
                array('','',"che concedi a noi di godere"),
                array('','',"per sempre della vittoria della croce.")
            )
        ),
        "ves_P01"=>array(
            array(
                array('','',"Alla cena dell'Agnello,"),
                array('','',"avvolti in bianche vesti,"),
                array('','',"attraversato il Mar Rosso"),
                array('','',"cantiamo a Cristo Signore.")
            ),
            array(
                array('','',"Il suo corpo arso d'amore"),
                array('','',"sulla mensa è pane vivo;"),
                array('','',"il suo sangue sull'altare"),
                array('','',"calice del nuovo patto.")
            ),
            array(
                array('','',"In questo vespro mirabile"),
                array('','',"tornan gli antichi prodigi:"),
                array('','',"un braccio potente ci salva"),
                array('','',"dall'angelo distruttore.")
            ),
            array(
                array('','',"Mite agnello immolato,"),
                array('','',"Cristo è la nostra Pasqua;"),
                array('','',"il suo corpo adorabile"),
                array('','',"è il vero pane azzimo.")
            ),
            array(
                array('','',"Irradia sulla tua Chiesa"),
                array('','',"la gioia pasquale, o Signore;"),
                array('','',"unisci alla tua vittoria"),
                array('','',"i rinati nel battesimo.")
            ),
            array(
                array('','',"Sia lode e onore a Cristo,"),
                array('','',"vincitore della morte,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"ora e nei secoli eterni.")
            )
        ),
        "lodi_P01"=>array(
            array(
                array('','',"Sfolgora il sole di Pasqua,"),
                array('','',"risuona il cielo di canti,"),
                array('','',"esulta di gioia la terra.")
            ),
            array(
                array('','',"Dagli abissi della morte"),
                array('','',"Cristo ascende vittorioso"),
                array('','',"insieme agli antichi padri.")
            ),
            array(
                array('','',"Accanto al sepolcro vuoto"),
                array('','',"invano veglia il custode:"),
                array('','',"il Signore è risorto.")
            ),
            array(
                array('','',"O Gesù, re immortale, "),
                array('','',"unisci alla tua vittoria"),
                array('','',"i rinati nel battesimo.")
            ),
            array(
                array('','',"Irradia sulla tua Chiesa,"),
                array('','',"pegno d'amore e di pace,"),
                array('','',"la luce della tua Pasqua.")
            ),
            array(
                array('','',"Sia gloria e onore a Cristo,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"ora e nei secoli eterni.")
            )
        ),
        "lodi_P02"=>array(
            array(
                array('','',"È asceso il buon pastore"),
                array('','',"alla destra del Padre,"),
                array('','',"veglia il piccolo gregge"),
                array('','',"con Maria nel cenacolo.")
            ),
            array(
                array('','',"Dagli splendori eterni"),
                array('','',"scende il crisma profetico"),
                array('','',"che consacra gli apostoli"),
                array('','',"araldi del Vangelo.")
            ),
            array(
                array('','',"Vieni, o divino Spirito,"),
                array('','',"con i tuoi santi doni"),
                array('','',"e rendi i nostri cuori"),
                array('','',"tempio della tua gloria.")
            ),
            array(
                array('','',"O luce di sapienza,"),
                array('','',"rivelaci il mistero"),
                array('','',"del Dio trino ed unico,"),
                array('','',"fonte d'eterno amore.")
            )
        ),
        "ves_0202a"=>array(
            array(
                array('','',"O Gesù salvatore,"),
                array('','',"immagine del Padre,"),
                array('','',"re immortale dei secoli,")
            ),
            array(
                array('','',"luce d'eterna luce,"),
                array('','',"speranza inestinguibile,"),
                array('','',"ascolta la preghiera.")
            ),
            array(
                array('','',"Tu che da Maria Vergine,"),
                array('','',"prendi forma mortale,"),
                array('','',"ricordati di noi!")
            ),
            array(
                array('','',"Redenti dal tuo sangue,"),
                array('','',"adoriamo il tuo nome,"),
                array('','',"cantiamo un canto nuovo.")
            ),
            array(
                array('','',"A te sia gloria, o Cristo,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "lodi_0319a"=>array(
            array(
                array('','',"Santa e dolce dimora"),
                array('','',"dove Gesù fanciullo"),
                array('','',"nasconde la sua gloria!")
            ),
            array(
                array('','',"Giuseppe addestra all'umile"),
                array('','',"arte del falegname"),
                array('','',"il Figlio dell'Altissimo.")
            ),
            array(
                array('','',"Accanto a lui Maria"),
                array('','',"fa lieta la sua casa"),
                array('','',"di una limpida gioia.")
            ),
            array(
                array('','',"La mano del Signore"),
                array('','',"li guida e li protegge"),
                array('','',"nei giorni della prova.")
            ),
            array(
                array('','',"O famiglia di Nazareth,"),
                array('','',"esperta del soffrire,"),
                array('','',"dona al mondo la pace.")
            ),
            array(
                array('','',"A te sia lode, o Cristo,"),
                array('','',"al Padre ed allo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "lodi_0325a"=>array(
            array(
                array('','',"Dal sorgere del sole"),
                array('','',"s'irradi sulla terra"),
                array('','',"il canto della lode.")
            ),
            array(
                array('','',"Il Creatore dei secoli"),
                array('','',"prende forma mortale"),
                array('','',"per redimere gli uomini.")
            ),
            array(
                array('','',"Maria, Vergine Madre,"),
                array('','',"porta un segreto arcano"),
                array('','',"nell'ombra dello Spirito.")
            ),
            array(
                array('','',"Dimora pura e santa,"),
                array('','',"tempio del Dio vivente,"),
                array('','',"concepisce il Figlio.")
            ),
            array(
                array('','',"A te sia lode, o Cristo,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_0624a"=>array(
            array(
                array('','',"Risuoni nella Chiesa,"),
                array('','',"unanime e festoso,"),
                array('','',"l'inno delle tue lodi,"),
                array('','',"o Giovanni Battista.")
            ),
            array(
                array('','',"Negli arcani silenzi"),
                array('','',"del tempio d'Israele"),
                array('','',"un angelo di Dio"),
                array('','',"svela al padre il tuo nome.")
            ),
            array(
                array('','',"Tu profeta fanciullo"),
                array('','',"riconosci nel grembo"),
                array('','',"della Vergine Madre"),
                array('','',"l'atteso delle genti.")
            ),
            array(
                array('','',"Tu sorgi dal deserto"),
                array('','',"con il fuoco di Elia"),
                array('','',"a convocare gli umili"),
                array('','',"nel regno del Signore.")
            ),
            array(
                array('','',"Sia lode e onore a Cristo,"),
                array('','',"Parola del Dio vivo,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "lodi_0624a"=>array(
            array(
                array('','',"Testimone fedele"),
                array('','',"che congiungi nel Cristo,"),
                array('','',"vera luce del mondo,"),
                array('','',"l'antico e il nuovo patto!")
            ),
            array(
                array('','',"Tu immergi nel Giordano"),
                array('','',"il figlio dell'Altissimo"),
                array('','',"e nei cieli riaperti"),
                array('','',"contempli la sua gloria.")
            ),
            array(
                array('','',"Tu guidi i penitenti"),
                array('','',"all'umile sequela"),
                array('','',"dell'Agnello che toglie"),
                array('','',"il peccato del mondo.")
            ),
            array(
                array('','',"Intercedei per noi"),
                array('','',"pellegrini nel tempo"),
                array('','',"e guida i nostri passi"),
                array('','',"sulla via della pace.")
            ),
            array(
                array('','',"Sia lode e onore a Cristo,"),
                array('','',"Parola del Dio vivo,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "lodi_0629a"=>array(
            array(
                array('','',"Uniti nel martirio"),
                array('','',"gli apostoli di Cristo"),
                array('','',"sigillano nel sangue"),
                array('','',"l'annunzio del Vangelo.")
            ),
            array(
                array('','',"Con l'inerme potenza"),
                array('','',"dello Spirito Santo"),
                array('','',"radunano le genti"),
                array('','',"nel regno del Signore.")
            ),
            array(
                array('','',"Maestri di sapienza"),
                array('','',"e padri nella fede"),
                array('','',"come fiaccole splendono"),
                array('','',"al popolo di Dio.")
            ),
            array(
                array('','',"O Gesù, re di gloria,"),
                array('','',"nel nome degli apostoli"),
                array('','',"proteggi la tua Chiesa"),
                array('','',"pellegrina nel tempo.")
            ),
            array(
                array('','',"Il tuo braccio potente"),
                array('','',"ci liberi dal male"),
                array('','',"e ci guidi a un approdo"),
                array('','',"di salvezza e di pace.")
            ),
            array(
                array('','',"A te sia lode, o Cristo,"),
                array('','',"vera luce del mondo,"),
                array('','',"al Padre e al Santo Spirito"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_0815a"=>array(
            array(
                array('','',"Ave, speranza nostra,"),
                array('','',"ave, benigna pia,"),
                array('','',"ave, piena di grazia,"),
                array('','',"o Vergine Maria.")
            ),
            array(
                array('','',"Ave, fulgida rosa,"),
                array('','',"roveto sempre ardente,"),
                array('','',"ave, pianta fiorita,"),
                array('','',"dalla stirpe di Iesse.")
            ),
            array(
                array('','',"In te vinta è la morte,"),
                array('','',"la schiavitù è redenta,"),
                array('','',"ridonata la pace,"),
                array('','',"aperto il paradiso.")
            ),
            array(
                array('','',"O Trinità santissima,"),
                array('','',"a te l'inno di grazie,"),
                array('','',"per Maria nostra Madre,"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "ves_0914a"=>array(
            array(
                array('','',"Cristo, sapienza eterna,"),
                array('','',"donaci di gustare"),
                array('','',"la tua dolce amicizia.")
            ),
            array(
                array('','',"Angelo del consiglio,"),
                array('','',"guida e proteggi il popolo,"),
                array('','',"che spera nel tuo nome.")
            ),
            array(
                array('','',"Sii tu la nostra forza,"),
                array('','',"la roccia che ci salva"),
                array('','',"dagli assalti del male.")
            ),
            array(
                array('','',"A te la gloria e il regno,"),
                array('','',"la potenza e l'onore"),
                array('','',"nei secoli dei secoli.")
            )
        ),
        "lodi_1228a"=>array(
            array(
                array('','',"Salve, candidi fiori dei martiri,"),
                array('','',"che sulla soglia stessa della vita"),
                array('','',"l'ira del persecutore travolse"),
                array('','',"come il turbine le rose nascenti.")
            ),
            array(
                array('','',"Prime vittime offerte al Redentore,"),
                array('','',"tenero gregge di angeli immolati,"),
                array('','',"giocate con la palma e la corona"),
                array('','',"semplici e lieti dinanzi all'altare.")
            ),
            array(
                array('','',"Eterna gloria a te, Cristo Signore,"),
                array('','',"nato nel tempo da Maria Vergine,"),
                array('','',"al Padre onnipotente e al Santo Spirito,"),
                array('','',"nei secoli dei secoli sia lode.")
            )
        ),
        "lodi_ANG"=>array(
            array(
                array('','',"Autore ottimo del mondo"),
                array('','',"che hai creato ogni cosa"),
                array('','',"con la tua potente destra"),
                array('','',"e reggi con non minore provvidenza,")
            ),
            array(
                array('','',"assisti l'assemblea"),
                array('','',"dei peccatori che ti supplicano,"),
                array('','',"e da una nuova luce alle anime"),
                array('','',"che ora sono nell'ombra della morte.")
            ),
            array(
                array('','',"Il tuo angelo,"),
                array('','',"che ci hai assegnato come custode,"),
                array('','',"sia qui vicino a noi"),
                array('','',"per proteggerci dal contagio delle colpe.")
            ),
            array(
                array('','',"Annienti per noi"),
                array('','',"le calunnie del serpente avversario,"),
                array('','',"perché non prenda nella sua rete di inganno"),
                array('','',"i cuori imprudenti.")
            ),
            array(
                array('','',"Allontani da noi"),
                array('','',"il timore dei nemici;"),
                array('','',"conceda il favore della pace ai cittadini"),
                array('','',"e allontani le epidemie.")
            ),
            array(
                array('','',"Sia gloria a Dio Padre,"),
                array('','',"colui il cui Figlio ci ha salvati"),
                array('','',"e il cui Spirito Santo ci ha uniti;"),
                array('','',"ci custodisca per mezzo dei suoi angeli.")
            )
        ),
        "ves_ANG"=>array(
            array(
                array('','',"Cantiamo gli angeli custodi degli uomini,"),
                array('','',"che il Padre affiancò come celesti compagni"),
                array('','',"alla fragile nostra natura, perché"),
                array('','',"non soccombesse ai nemici che la insidiano.")
            ),
            array(
                array('','',"Infatti, l'angelo traditore, che era andato in rovina,"),
                array('','',"giustamente privato degli onori concessi,"),
                array('','',"ardente d'invidia cerca di tenere lontani"),
                array('','',"coloro che Dio chiama al cielo.")
            ),
            array(
                array('','',"Qua dunque, o custode, vigile accorri,"),
                array('','',"allontanando dalla patria a te affidata,"),
                array('','',"tanto le malattie dell'animo, quanto qualunque cosa"),
                array('','',"non permetta che gli abitanti riposino.")
            ),
            array(
                array('','',"Continuamente ci sia una pia lode"),
                array('','',"per la Santa Trinità, dalla cui perpetua volontà"),
                array('','',"è retta questa triplice macchina"),
                array('','',"e la cui gloria regna per tutti i secoli.")
            )
        ),
        "lodi_SFA"=>array(
            array(
                array('','',"Altissimo, onnipotente, bon Signore,"),
                array('','',"tue so' le laude, la gloria et l'honore"),
                array('','',"et onne benedictione.")
            ),
            array(
                array('','',"A te solo, Altissimo, se konfanno"),
                array('','',"et nullo homo ene digno te mentovare,"),
            ),
            array(
                array('','',"Laudato si', mi' Signore, cum tucte le tue creature,"),
                array('','',"spetialmente messer lo frate sole,"),
                array('','',"lo quale è iorno; et illumini noi per lui.")
            ),
            array(
                array('','',"Et ellu è bellu et radiante cum grande splendore:"),
                array('','',"de te, Altissimo, porta significatione."),
            ),
            array(
                array('','',"Laudato si', mi' Signore, per sora luna et le stelle:"),
                array('','',"in celu l'hai formate clarite et pretiose et belle.")
            ),
            array(
                array('','',"Laudato si', mi' Signore, per frate vento"),
                array('','',"et per aere et nubilo et sereno et omne tempo,"),
                array('','',"per lo quale alle tue creature dai sustentamento.")
            ),
            array(
                array('','',"Laudato si', mi' Signore, per sora acqua,"),
                array('','',"la quale è molto utile"),
                array('','',"et humile et pretiosa et casta.")
            ),
            array(
                array('','',"Laudato si', mi' Signore, per frate focu,"),
                array('','',"per lo quale ennallumini la nocte;"),
                array('','',"et ello è bello et iocundo et robusto et forte.")
            ),
            array(
                array('','',"Laudato si', mi' Signore, per sora nostra madre terra,"),
                array('','',"la quale ne sustenta et governa,"),
                array('','',"et produce diversi fructi con coloriti fiori et herba.")
            ),
            array(
                array('','',"Laudato si', mi' Signore,"),
                array('','',"per quelli ke perdonano per lo tuo amore,"),
                array('','',"et sostengon infirmitate et tribulatione.")
            ),
            array(
                array('','',"Beati quelli che le sosterranno in pace"),
                array('','',"ka da te, Altissimo, saranno incoronati.")
            ),
            array(
                array('','',"Laudiati si', mi' Signore,"),
                array('','',"per sora nostra morte corporale,"),
                array('','',"dalla quale nullo homo vivente può skappare.")
            ),
            array(
                array('','',"Guai a quelli ke morranno ne la peccata mortali;"),
                array('','',"beati quelli ke se trovarà ne le tue sanctissime voluntati,"),
                array('','',"ka la morte secunda nol farà male.")
            ),
            array(
                array('','',"Laudate et benedicete mi' Signore et rengratiate"),
                array('','',"et servitelo cum grande humilitate.")
            )
        ),
        "ves_SFA"=>array(
            array(
                array('','',"Francesco poverello,"),
                array('','',"rivestito di grazia,"),
                array('','',"ascende lieto in gloria"),
                array('','',"nel regno dei beati.")
            ),
            array(
                array('','',"Esce umile e nudo,"),
                array('','',"dalla scena del mondo,"),
                array('','',"ed entra ricco in cielo"),
                array('','',"festeggiato dagli angeli.")
            ),
            array(
                array('','',"Nel suo fragile corpo"),
                array('','',"reca impressi i sigilli"),
                array('','',"dell'Agnello immolato"),
                array('','',"sul legno della croce.")
            ),
            array(
                array('','',"Dolce padre dei poveri,"),
                array('','',"amico della pace,"),
                array('','',"tu splendi come un sole"),
                array('','',"nella Chiesa di Dio!")
            ),
            array(
                array('','',"A te sia lode, o Cristo,"),
                array('','',"Parola del Dio vivo,"),
                array('','',"che sveli nei tuoi santi"),
                array('','',"la gioia dell'amore.")
            )
        ),
        "lodi_MIC"=>array(
            array(
                array('','',"A te o Cristo, splendore del Padre,"),
                array('','',"vita, forza dei cuori, al cospetto degli angeli"),
                array('','',"salmeggiamo con la voce;"),
                array('','',"a cori alterni cantiamo a gran voce.")
            ),
            array(
                array('','',"Insieme lodiamo con venerazione"),
                array('','',"gli incliti arcangeli, e soprattutto"),
                array('','',"il principe dell'esercito celeste, Michele, "),
                array('','',"che con forza distrugge Satana.")
            ),
            array(
                array('','',"Sotto la sua protezione, allontana,"),
                array('','',"o Cristo re piissimo, ogni nefandezza del nemico;"),
                array('','',"con la tua unica clemenza, assegnaci,"),
                array('','',"puri nel cuore e nel corpo, al tuo paradiso.")
            ),
            array(
                array('','',"Al Padre facciamo risuonare gloria,"),
                array('','',"con voci melodiose cantiamo gloria a Cristo,"),
                array('','',"gloria al Paraclito, che, Dio trino ed unico,"),
                array('','',"esisti prima dei secoli.")
            )
        ),
        "ves_MIC"=>array(
            array(
                array('','',"Ti preghiamo, o Cristo, manda in questa casa Michele,"),
                array('','',"l'angelo della pace,"),
                array('','',"perché, venendo lui spesso,"),
                array('','',"si arricchisca di ogni prosperità per noi.")
            ),
            array(
                array('','',"L'angelo forte, Gabriele, voli giù dal cielo,"),
                array('','',"per scacciare l'antico nemico,"),
                array('','',"preoccupandosi di visitare spesso il nostro tempio,"),
                array('','',"proteggendolo.")
            ),
            array(
                array('','',"Manda dai cieli Raffaele, l'angelo"),
                array('','',"medico di salvezza per noi,"),
                array('','',"affinché sani tutti gli ammalati e parimenti"),
                array('','',"diriga le nostre azioni.")
            ),
            array(
                array('','',"O Cristo, onore dei santi angeli,"),
                array('','',"il loro coro ci assista sempre,"),
                array('','',"affinché insieme, alla fine, tributiamo"),
                array('','',"canti alla Trinità per sempre.")
            )
        )
    );

    protected $litio;
    protected $actual;

    function __construct($caller) {

        $this->litio=$caller;
        $this->actual=$caller->actual;      
        $this->actual['inno']="";
        $this->actual['proprio']="";

        $this->info['testo']=new Saltesto();
        $this->info['parte']='INNO';
        $this->info['testo']->setParte('INNO');

        $this->build();
    }

    function build() {

        //di default attribuisco il salterio
        if (isset($this->salterio[$this->actual['weekDay']][$this->actual['ora']])) {
            $this->actual['inno']=$this->salterio[$this->actual['weekDay']][$this->actual['ora']];
        }

        if ($this->actual['tempo']=='O') {

            //di base corrisponde al salterio

            //Presentazione del Signore
            if ($this->actual['evCode']=='0202a') {
                if ($this->actual['ora']=='ves2') $this->actual['proprio']='ves_0202a';
                elseif ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) $this->actual['proprio']='ves_0202a';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='lodi_1';
            }
            //santa Scolastica
            elseif ($this->actual['evCode']=='0210a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1651';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1661';
            }
            //San Giuseppe sposo della B.V. Maria
            elseif ($this->actual['evCode']=='0319a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0319a';
            }
            //Transito S. Benedetto
            elseif ($this->actual['evCode']=='0321a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1622';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1631';
            }
            //Annunciazione del Signore
            elseif ($this->actual['evCode']=='0325a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p10';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0325a';
            }
            //Natività di San Giovanni Battista
            elseif ($this->actual['evCode']=='0624a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_0624a';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0624a';
            }
            //Santi Pietro e Paolo apostoli
            elseif ($this->actual['evCode']=='0629a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1527';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0629a';
            }
            //Nostro Santo Padre Benedetto (Abate) - Patrono d'Europa
            elseif ($this->actual['evCode']=='0711a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1622';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1631';
            }
            //Trasfigurazione del Signore
            elseif ($this->actual['evCode']=='0806a') {
                if ($this->actual['ora']=='ves2') $this->actual['proprio']='ves_0914a';
                elseif ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) $this->actual['proprio']='ves_0914a';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='ves_5';
            }
            //Assunzione della Beata Vergine Maria
            elseif ($this->actual['evCode']=='0815a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_0815a';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1498';
            }
            //Esaltazione della Santa Croce
            elseif ($this->actual['evCode']=='0914a') {
                if ($this->actual['ora']=='ves2') $this->actual['proprio']='ves_PAL';
                elseif ($this->actual['ora']=='ves1' && $this->actual['weekDay']==0) $this->actual['proprio']='ves_PAL';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='lodi_1';
            }
            //Tutti i Santi
            elseif ($this->actual['evCode']=='1101a') {
                //l'inno indicato è p1682 ma è uguale a quello a p1631
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='lodi') $this->actual['inno']='p1631';
            }
            //Battesimo del Signore
            elseif ($this->actual['evCode']=='BAT') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_BAT';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='ves_BAT';
            }
            //Pentecoste
            elseif ($this->actual['evCode']=='PEN') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_PEN';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_PEN';
            }
            //Sacratissimo cuore di Gesù
            elseif ($this->actual['evCode']=='SCG') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_SCG';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='ves_5';
            }
            //Ss. Trinità
            elseif ($this->actual['evCode']=='TRI') {               
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='lodi') $this->actual['proprio']='lodi_TRI';
                elseif ($this->actual['ora']=='ves1') $this->actual['proprio']='ves1_TRI';
            }
            //Corpus Domini
            elseif ($this->actual['evCode']=='COD') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_COD';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='ves_SS4';
            }
            //Nostro Signore Gesù Cristo Re dell'Universo
            elseif ($this->actual['evCode']=='GRE') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_GRE';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_GRE';
            }
        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='A') {

            if (substr($this->actual['today'],4,4)<'1217') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') $this->actual['inno']='p9';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p16';
            }
            else {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') $this->actual['inno']='p10';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p17';
            }

            if ($this->actual['evCode']=='1208a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') $this->actual['inno']='p1502';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1498';
            }
            
        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='N') {

            if ($this->actual['evCode']=='NAT') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_NAT';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_NAT';
            }
            elseif ($this->actual['evCode']=='SAF') {
                //'ves' quando la festa cade in un giorno feriale (senza Primi e Secondi Vespri)
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') $this->actual['proprio']='ves_SAF';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0319a';
            }
            elseif ($this->actual['evCode']=='MSS') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1502';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1498';
            }
            elseif ($this->actual['evCode']=='2DN') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_NAT';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_NAT';
            }
            elseif ($this->actual['evCode']>='F0102' && $this->actual['evCode']<='F0105') {
                if ($this->actual['ora']=='ves') $this->actual['proprio']='ves_NAT';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_NAT';
            }
            elseif ($this->actual['evCode']=='EPI') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['proprio']='ves_EPI';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_EPI';
            }
            elseif ($this->actual['evCode']>='F0107') {
                if ($this->actual['ora']=='ves') $this->actual['proprio']='ves_EPI';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_EPI';
            }
            elseif ($this->actual['evCode']=='1226a') {
                if ($this->actual['ora']=='lodi') {
                    $this->actual['inno']='p1574';
                    $this->actual['proprio']='';
                }
                elseif ($this->actual['ora']=='ves') {
                    $this->actual['proprio']='ves_NAT';
                }
            }
            elseif ($this->actual['evCode']=='1227a') {
                if ($this->actual['ora']=='lodi') {
                    $this->actual['inno']='p1523';
                    $this->actual['proprio']='';
                }
                elseif ($this->actual['ora']=='ves') {
                    $this->actual['proprio']='ves_NAT';
                }
            }
            elseif ($this->actual['evCode']=='1228a') {
                if ($this->actual['ora']=='lodi') {
                    $this->actual['proprio']='lodi_1228a';
                }
                elseif ($this->actual['ora']=='ves') {
                    $this->actual['proprio']='ves_NAT';
                }
            }
            elseif ($this->actual['evCode']=='1229a' || $this->actual['evCode']=='1230a') {
                if ($this->actual['ora']=='lodi') {
                    $this->actual['proprio']='lodi_NAT';
                }
                elseif ($this->actual['ora']=='ves') {
                    $this->actual['proprio']='ves_NAT';
                }
            }
            elseif ($this->actual['evCode']=='1231a') {
                if ($this->actual['ora']=='lodi') {
                    $this->actual['proprio']='lodi_NAT';
                }
            }
        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='Q') {

            if ($this->actual['weekDay']==0) {
                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2') {
                    if ($this->actual['evCode']=='PAL') $this->actual['proprio']='ves_PAL';
                    else $this->actual['proprio']='ves_QU0';
                }
                elseif ($this->actual['ora']=='lodi') {
                    if ($this->actual['evCode']=='PAL') $this->actual['inno']='ves_5';
                    else $this->actual['proprio']='lodi_QU0';
                }
            }
            else {
                if ($this->actual['ora']=='lodi') {
                    if (substr($this->actual['evCode'],0,2)=='SS') $this->actual['inno']='ves_5';
                    else $this->actual['proprio']='lodi_QU0';
                }
                elseif ($this->actual['ora']=='ves') {
                    if (substr($this->actual['evCode'],0,2)=='SS') $this->actual['proprio']='ves_PAL';
                    else $this->actual['proprio']='ves_QU1';
                }
            }

            if ($this->actual['ora']=='terza') $this->actual['proprio']='terza_QU0';
            elseif ($this->actual['ora']=='sesta') $this->actual['proprio']='sesta_QU0';
            elseif ($this->actual['ora']=='nona') $this->actual['proprio']='nona_QU0';

            if ($this->actual['evCode']=='PAL') {
                if ($this->actual['ora']=='terza' || $this->actual['ora']=='sesta' || $this->actual['ora']=='nona') {
                    $this->actual['proprio']='terza_PAL';
                }
            }

            if ($this->actual['evCode']=='SS4' && $this->actual['ora']=='ves') $this->actual['proprio']='ves_SS4';

            if ($this->actual['evCode']=='SS5' || $this->actual['evCode']=='SS6') {
                if ($this->actual['ora']=='lodi') $this->actual['inno']='ves_5';
                elseif ($this->actual['ora']=='terza') $this->actual['proprio']='terza_SS5';
                elseif ($this->actual['ora']=='sesta') $this->actual['proprio']='sesta_SS5';
                elseif ($this->actual['ora']=='nona') $this->actual['proprio']='nona_SS5';
                elseif ($this->actual['ora']=='ves') $this->actual['proprio']='ves_PAL';
            }

            //santa Scolastica
            if ($this->actual['evCode']=='0210a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1651';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1661';
            }
            //San Giuseppe sposo della B.V. Maria
            elseif ($this->actual['evCode']=='0319a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0319a';
            }
			//Transito S. Benedetto
            elseif ($this->actual['evCode']=='0321a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p1622';
                elseif ($this->actual['ora']=='lodi') $this->actual['inno']='p1631';
            }
            //Annunciazione del Signore
            elseif ($this->actual['evCode']=='0325a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p10';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0325a';
            }

        }
        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='P') {
            //!!!!!! in MAP, l'indice ASC indica la data dell'ascensione !!!!!!!!
            if (substr($this->actual['today'],4,4)<substr($this->actual['ASC'],4,4)) {
                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') $this->actual['proprio']='ves_P01';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_P01';
            }
            elseif (substr($this->actual['today'],4,4)==substr($this->actual['ASC'],4,4)) {
                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') $this->actual['proprio']='lodi_P02';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_P01';
            }
            else {
                if ($this->actual['ora']=='ves1' || $this->actual['ora']=='ves2' || $this->actual['ora']=='ves') $this->actual['proprio']='ves_PEN';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_P02';
            }

            //Annunciazione del Signore
            if ($this->actual['evCode']=='0325a') {
                if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1') $this->actual['inno']='p10';
                elseif ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_0325a';
            }
        }

        //----------------------------------------------------------------------------
        //FESTE

        //###################################
        //pastori,dottori,martiri,martire,monaci,religiosi,religiose,santi,sante,dedica,apostoli,BVM,SG,MIC,ANG,DEF
        if ($this->actual['fesCode']!='') {

            if ( isset($this->actual['festa'][$this->actual['fesCode']]) );

            $f=$this->actual['festa'][$this->actual['fesCode']];

            if (isset($f['comune'])) {

                switch ($f['comune']) {

                    case 'dedica':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune di una dedicazione)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1474';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune di una dedicazione)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1651';
                        }
                    break;

                    case 'BVM':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune della B.V.Maria)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1498';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune della B.V.Maria)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1502';
                        }
                    break;

                    case 'apostoli':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune degli apostoli)');
                            $this->actual['proprio']='';
                            if ($this->actual['tempo']=='Q') $this->actual['inno']='p1513';
                            elseif ($this->actual['tempo']=='P') $this->actual['inno']='p1524';
                            else $this->actual['inno']='p1523';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune degli apostoli)');
                            $this->actual['proprio']='';
                            if ($this->actual['tempo']=='P') $this->actual['inno']='p1528';
                            else $this->actual['inno']='p1527';
                        }
                    break;

                    case 'martiri':
                        if ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves' || $this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei martiri)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1553';
                        }
                    break;

                    case 'martire':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune di un martire)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1574';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune di un martire)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1553';
                        }
                    break;

                    case 'pastori':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei pastori)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1631';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune dei pastori)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1609';
                        }
                    break;

                    case 'dottori':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei dottori della Chiesa)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1604';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune dei dottori della Chiesa)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1594';
                        }
                    break;

                    case 'monaci':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei monaci)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1631';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune dei monaci)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1609';
                        }
                    break;

                    case 'vergini':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune delle vergini)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1661';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune delle vergini)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1651';
                        }
                    break;

                    case 'santi':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei santi)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1631';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune dei santi)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1609';
                        }
                    break;

                    case 'religiosi':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune dei religiosi)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1683';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune dei religiosi)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1683';
                        }
                    break;

                    case 'sante':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune delle sante)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1705';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune delle sante)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1709';
                        }
                    break;

                    case 'religiose':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(comune delle religiose)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1705';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(comune delle religiose)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1709';
                        }
                    break;

                    case 'DEF':
                        if ($this->actual['ora']=='lodi') {
                            $this->info['testo']->addHead('(ufficio dei defunti)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1731';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->info['testo']->addHead('(ufficio dei defunti)');
                            $this->actual['proprio']='';
                            $this->actual['inno']='p1731';
                        }
                    break;

                    case 'ANG':
                        if ($this->actual['ora']=='lodi') {
                            $this->actual['proprio']='lodi_ANG';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->actual['proprio']='ves_ANG';
                        }
                    break;

                    case 'SFA':
                        if ($this->actual['ora']=='lodi') {
                            $this->actual['proprio']='lodi_SFA';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->actual['proprio']='ves_SFA';
                        }
                    break;

                    case 'SG':
                        if ($this->actual['ora']=='lodi') {
                            $this->actual['proprio']='lodi_0319a';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->actual['proprio']='lodi_0319a';
                        }
                    break;

                    case 'MIC':
                        if ($this->actual['ora']=='lodi') {
                            $this->actual['proprio']='lodi_MIC';
                        }
                        elseif ($this->actual['ora']=='ves2' || $this->actual['ora']=='ves1' || $this->actual['ora']=='ves') {
                            $this->actual['proprio']='ves_MIC';
                        }
                    break;
                }
            }

        }
        
        //###################################
        //----------------------------------------------------------------------------

        if ($this->actual['proprio']!='') {
            if (isset($this->proprio[$this->actual['proprio']])) {
                foreach ($this->proprio[$this->actual['proprio']] as $k=>$t) {
                    $this->info['testo']->addBlock($t);
                }
            }
        }
        else {
            if (isset($this->inni[$this->actual['inno']])) {
                foreach ($this->inni[$this->actual['inno']] as $k=>$t) {
                    $this->info['testo']->addBlock($t);
                }
            }
        }

        $this->info['testo']->addBlock(array(array('','2',"Amen.")));
    }

    function draw() {

        echo '<div class="salResBlockTitle" >';
            echo $this->info['titolo'];
            if ($this->litio->config['vox']) {
                $this->litio->drawPlayer($this->info['parte'],0);
            }
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->info['testo']) {
                echo $this->info['testo']->draw();
            }
        echo '</div>';
    }
    
}

?>