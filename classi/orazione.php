<?php

class Orazione {

    protected $info=array(
        "titolo"=>"Orazione",
        "parte"=>"",
        "testo"=>false
    );

    protected $ending=array('','',"Per il nostro Signore Gesù Cristo, tuo Figlio che è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.");

    protected $orazioni=array(
        "comp_S"=>array(
            array(
                array('','',"Visita, o Padre, la nostra casa e tieni lontano le insidie del nemico; vengano i santi angeli a custodirci nella pace, e la tua benedizione rimanga sempre con noi."),
                array('','',"Per Cristo nostro Signore")
            )
        ),
        "comp1_0"=>array(
            array(
                array('','',"Veglia su di noi in questa notte, o Signore: la tua mano ci ridesti al nuovo giorno perché possiamo celebrare con gioia la risurrezione del tuo Figlio, che vive e regna nei secoli dei secoli."),
            )
        ),
        "comp_0"=>array(
            array(
                array('','',"Salga te, o Padre, la nostra preghiera al termine di questo mondo, memoriale della risurrezione de Signore: la tua grazia ci conceda di riposare in pace, sicuri da ogni male, e di risvegliarci nella gioia, per cantare la tua lode."),
                array('','',"Per Cristo nostro Signore")
            )
        ),
        "lodi_1_1"=>array(
            array(
                array('','',"Ispira le nostre azioni, Signore, e accompagnale con il tuo aiuto: perché ogni nostra attività abbia da te il suo inizio e in te il suo compimento."),
                array('ending')
            )
        ),
        "lodi_1_2"=>array(
            array(
                array('','',"Signore Dio nostro, che ci hai dato la grazia di giungere a questo giorno, accompagnaci oggi con la tua protezione, perché non deviamo mai verso il peccato e in pensieri, parole e opere aderiamo sempre alla tua volontà."),
                array('ending')
            )
        ),
        "lodi_1_3"=>array(
            array(
                array('','',"Signore Dio, re del cielo e della terra, guida, santifica e custodisci il nostro corpo e il nostro spirito, sentimenti, parole e opere, nell'amore della tua legge, a servizio della tua volontà, perché oggi e sempre con il tuo aiuto procediamo sicuri nella via della salvezza."),
                array('ending')
            )
        ),
        "lodi_1_4"=>array(
            array(
                array('','',"O Dio, che hai affidato all'uomo l'opera della creazione e hai posto al suo servizio le immense energie del cosmo, fa' che oggi collaboriamo a un mondo più giusto e fraterno a lode della tua gloria."),
                array('ending')
            )
        ),
        "terza_1"=>array(
            array(
                array('','',"O Dio nostro Padre, che al lavoro solidale di tutti gli uomini hai affidato il compito di promuovere sempre nuove conquiste, donaci di collaborare all'opera della creazione con adesione filiale al tuo volere in spirito di vera fraternità."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sesta_1"=>array(
            array(
                array('','',"O Dio, che sei il padrone della vigna e della messe, e assegni a ciascuno il suo lavoro e la giusta ricompensa, aiutaci a portare il peso della nostra giornata accettando serenamente la tua volontà."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "nona_1"=>array(
            array(
                array('','',"O Dio, che ci chiami a celebrare la tua lode nell'ora stessa in cui gli apostoli salivano al tempio, accogli la nostra preghiera nel nome del tuo Figlio e dona la tua salvezza a coloro che lo invocano."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ves_1_1"=>array(
            array(
                array('','',"Ti magnifichi, o Signore, il nostro servizio di lode; tu che per la nostra salvezza hai volto lo sguardo all'umiltà della Vergine Maria, degnasti di innalzarci alla pienezza della tua redenzione."),
                array('ending')
            )
        ),
        "ves_1_2"=>array(
            array(
                array('','',"Dio onnipotente, che hai sostenuto i tuoi fedeli nella fatica di questo giorno, accogli la preghiera della sera come sacrificio di lode per i tuoi doni."),
                array('ending')
            )
        ),
        "ves_1_3"=>array(
            array(
                array('','',"O Dio, eterna luce e giorno senza tramonto, guarda i tuoi figli raccolti nella lode della sera: illumina le tenebre della notte e perdona le colpe dei tuoi figli."),
                array('ending')
            )
        ),
        "ves_1_4"=>array(
            array(
                array('','',"Confortaci, o Dio, con la presenza del figlio tuo, e ravviva la nostra fede, perché sappiamo riconoscerlo, come i discepoli a Emmaus, alla mensa della parola e del pane."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "comp_1"=>array(
            array(
                array('','',"Donaci, o Padre, un sonno ristoratore e fa' che i germi di bene, seminati nei solchi di questa giornata, producano una messe abbondante."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "lodi_2_1"=>array(
            array(
                array('','',"Accogli con bontà, o Signore, la preghiera mattutina della tua Chiesa e illumina con il tuo amore la profondità del nostro spirito, perché siano liberi dalle suggestioni del male coloro che hai chiamati allo splendore della tua luce."),
                array('ending')
            )
        ),
        "lodi_2_2"=>array(
            array(
                array('','',"O Dio, che hai mandato a noi la luce vera che guida tutti gli uomini alla salvezza, donaci la forza dello Spirito, perché possiamo preparare davanti al Figlio tuo la via della giustizia e dell pace."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_2_3"=>array(
            array(
                array('','',"O Dio, creatore e Signore di tutte le cose, donaci di iniziare lietamente questo giorno e nel concluderlo nel generoso servizio tuo e dei nostri fratelli."),
                array('ending')
            )
        ),
        "lodi_2_4"=>array(
            array(
                array('','',"Accresci in noi, o Dio, il dono della fede, perché sia perfetta la nostra lode e porti alla tua Chiesa frutti di vita nuova."),
                array('ending')
            )
        ),
        "terza_2"=>array(
            array(
                array('','',"Dio potente ed eterno, che all'ora terza hai effuso sugli apostoli il tuo Spirito Paraclito, dona anche a noi la fiamma viva del tuo amore, perché ti rendiamo buona testimonianza davanti a tutti gli uomini."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sesta_2"=>array(
            array(
                array('','',"O Dio, che hai rivelato all'apostolo Pietro la volontà di riunire tutti i popoli nell'unica Chiesa, benedici il nostro lavoro quotidiano e fa' che serva al tuo disegno universale di salvezza."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "nona_2"=>array(
            array(
                array('','',"O Dio, che mandasti il tuo angelo al centurione Cornelio per indicargli la via della salvezza, donaci di collaborare alla redenzione di tutti gli uomini, perché riuniti nella tua Chiesa, possiamo giungere fino a te nella gloria."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "ves_2_1"=>array(
            array(
                array('','',"Ti rendiamo grazie, Dio onnipotente, che ci hai guidati attraverso le fatiche di questo giorno; fa' che le nostre mani alzate nella preghiera vespertina siano un sacrificio a te gradito."),
                array('ending')
            )
        ),
        "ves_2_2"=>array(
            array(
                array('','',"O Dio, a cui appartiene il giorno e la notte, fa' che il sole della giustizia non tramonti mai nel nostro spirito, perché possiamo giungere alla luce gloriosa del tuo regno."),
                array('ending')
            )
        ),
        "ves_2_3"=>array(
            array(
                array('','',"Salga a te, Dio onnipotente, la nostra lode della sera e scenda su di noi la tua benedizione, perché oggi e sempre possiamo gustare il dono della tua salvezza."),
                array('ending')
            )
        ),
        "ves_2_4"=>array(
            array(
                array('','',"Raccolti alla tua presenza, o Dio, invochiamo la tua misericordia: fa' che risuoni sempre nel nostro spirito la divina liturgia che celebriamo con le nostre voci."),
                array('ending')
            )
        ),
        "comp_2"=>array(
            array(
                array('','',"Illumina questa notte, o Signore, perché dopo un sonno tranquillo ci risvegliamo alla luce del nuovo giorno, per camminare lieti nel tuo nome."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "lodi_3_1"=>array(
            array(
                array('','',"O Dio, nostra salvezza, che ci hai fatto figli della luce, guidaci nel nostro cammino, perché diventiamo operatori di verità e testimoni del tuo Vangelo."),
                array('ending')
            )
        ),
        "lodi_3_2"=>array(
            array(
                array('','',"Risplende su di noi, Signore, la luce della tua sapienza, perché liberi da ogni compromesso col peccato camminiamo sempre nella via dei tuoi comandamenti."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_3_3"=>array(
            array(
                array('','',"Illumina, Signore, i nostri sensi con la luce del tuo Spirito, perché possiamo sempre essere fedeli a te, che con la tua sapienza ci hai creati e con la tua provvidenza ci guidi."),
                array('ending')
            )
        ),
        "lodi_3_4"=>array(
            array(
                array('','',"Ricordati, o Dio, della tua alleanza, rinnovata sulla croce col sangue dell'Agnello, e fa' che il tuo popolo, libero da ogni colpa, progredisca sempre nella via della salvezza."),
                array('ending')
            )
        ),
        "terza_3"=>array(
            array(
                array('','',"Signore, Padre santo, Dio fedele, che hai mandato lo Spirito Santo promesso dal tuo Figlio, per riunire l'umanità dispersa a causa del peccato, donaci di essere nel mondo operatori di unità e di pace."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sesta_3"=>array(
            array(
                array('','',"O Dio grande e misericordioso, che ci doni una sosta nella fatica quotidiana, sostieni la nostra debolezza, e aiutaci a portare a termine il lavoro che abbiamo iniziato."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "nona_3"=>array(
            array(
                array('','',"Signore Gesù Cristo, che per la salvezza di tutti gli uomini hai steso le braccia sulla croce, accogli l'offerta delle nostre azioni e fa' che tutta la nostra vita sia segno e testimonianza della tua redenzione."),
                array('','',"Tu che vivi e regni nei secoli dei secoli.")
            )
        ),
        "ves_3_1"=>array(
            array(
                array('','',"Accogli, o Dio, le nostre preghiere, e donaci notte e giorno la tua protezione, perché nelle vicende della vita siamo sorretti dalla forza immutabile del tuo amore."),
                array('ending')
            )
        ),
        "ves_3_2"=>array(
            array(
                array('','',"Santo è il tuo nome, Signore, e la tua misericordia è benedetta nei secoli; guarda con benevolenza il tuo popolo in preghiera e fa' che la sua lode si unisca alla liturgia dei santi nel cielo."),
                array('ending')
            )
        ),
        "ves_3_3"=>array(
            array(
                array('','',"Salga a te, o Dio misericordioso, la voce della tua Chiesa e fa' che il tuo popolo, libero dalla schiavitù del peccato, ti serva per amore e viva sicuro nella tua protezione."),
                array('ending')
            )
        ),
        "ves_3_4"=>array(
            array(
                array('','',"O Dio misericordioso, che colmi dei tuoi beni coloro che hanno fame e sete di giustizia, ricordati della tua famiglia raccolta in preghiera e trasforma la nostra povertà nella ricchezza del tuo amore."),
                array('ending')
            )
        ),
        "comp_3"=>array(
            array(
                array('','',"Signore Gesù Cristo, mite e umile di cuore, che rendi soave il giogo e lieve il peso dei tuoi fedeli, accogli i propositi e le opere di questa giornata e fa' che il riposo della notte ci renda più generosi nel tuo servizio."),
                array('','',"Tu che vivi e regni nei secoli dei secoli.")
            )
        ),
        "lodi_4_1"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, esaudisci le preghiere della tua Chiesa che al mattino, a mezzogiorno e alla sera celebra le tue lodi; disperdi dal nostro cuore le tenebre del male, perché procediamo sicuri verso Cristo, vera luce che non tramonta."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_4_2"=>array(
            array(
                array('','',"O Dio, vera luce e sorgente della luce, ascolta la nostra preghiera del mattino e fa' che meditando con perseveranza la tua legge, viviamo sempre illuminati dallo splendore della tua verità."),
                array('ending')
            )
        ),
        "lodi_4_3"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, guarda benigno i popoli ancora immersi nell'ombra della morte, fa' risplendere su di essi il sole di giustizia, che ci ah visitato sorgendo dall'alto, Gesù Cristo nostro Signore."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_4_4"=>array(
            array(
                array('','',"Donaci, o Dio, una profonda conoscenza del tuo mistero di salvezza, perché senza timore, liberati dall'oppressione dei nostri nemici, ti serviamo in santità e giustizia tutti i nostri giorni."),
                array('ending')
            )
        ),
        "terza_4"=>array(
            array(
                array('','',"O Dio, che all'ora terza hai effuso lo Spirito Santo sugli apostoli, riuniti in preghiera, concedi anche a noi di partecipare al dono della sua grazia."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sesta_4"=>array(
            array(
                array('','',"O Dio onnipotente ed eterno, in cui non è oscurità né tenebre, fa' risplendere su di noi la tua luce, perché illuminati dalla tua parola, camminiamo verso te con cuore generoso e fedele."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "nona_4"=>array(
            array(
                array('','',"Ascolta, o Dio, le nostre preghiere, e donaci di imitare la passione del tuo Figlio per portare con serena fortezza la nostra croce quotidiana."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "ves_4_1"=>array(
            array(
                array('','',"O Dio, che illumini la notte più oscura e dopo le tenebre fai sorgere nel mondo la luce, donaci di trascorrere questa notte lontano dalle insidie del maligno, perché all'alba del nuovo giorno possiamo cantare con la Chiesa le tue lodi."),
                array('ending')
            )
        ),
        "ves_4_2"=>array(
            array(
                array('','',"Accogli, Signore misericordioso, la nostra lode della sera: fa' che il nostro cuore non si stanchi mai di meditare la tua legge, perché otteniamo il premio promesso ai tuoi fedeli nella vita eterna."),
                array('ending')
            )
        ),
        "ves_4_3"=>array(
            array(
                array('','',"Accogli, Signore, al tramonto di questo giorno, il nostro umile ringraziamento, e nella tua misericordia dimentica le colpe da noi commesse per la fragilità della condizione umana."),
                array('ending')
            )
        ),
        "ves_4_4"=>array(
            array(
                array('','',"Accogli, o Dio, la nostra preghiera al tramonto di questo giorno e fa' che seguendo con perseveranza l'esempio del tuo Figlio, raccogliamo frutti di giustizia e di pace."),
                array('','',"Egli è Dio e vive e regna con te nei secoli dei secoli.")
            )
        ),
        "comp_4"=>array(
            array(
                array('','',"Signore Dio nostro, donaci un sonno tranquillo, perché ristorati dalle fatiche del giorno, ci dedichiamo corpo e anima al tuo servizio."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "lodi_5_1"=>array(
            array(
                array('','',"O Dio, che con la luce del tuo Figlio, Parola di verità, disperdi le tenebre dell'ignoranza, accresci in noi il vigore della fede, perché nessuna tentazione possa estinguere quella fiamma che la tua grazia ha acceso nei nostri cuori."),
                array('ending')
            )
        ),
        "lodi_5_2"=>array(
            array(
                array('','',"Accogli, Dio onnipotente, la nostra lode del mattino e fa' che ci uniamo un giorno al coro dei tuoi santi per cantare in eterno la tua gloria."),
                array('ending')
            )
        ),
        "lodi_5_3"=>array(
            array(
                array('','',"Donaci, o Padre buono, di godere sempre della presenza del Figlio tuo, perché seguendo lui, nostro pastore e guida, progrediamo nella via dei tuoi comandamenti."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_5_4"=>array(
            array(
                array('','',"Concedi al tuo popolo, o Dio, l'abbondanza dei tuoi doni, perché dia sempre fedele agli impegni del suo Battesimo, e viva nella prosperità e nella pace in attesa della gioia eterna."),
                array('ending')
            )
        ),
        "terza_5"=>array(
            array(
                array('','',"Signore Gesù Cristo, che all'ora terza fosti condotto al supplizio della croce per la redenzione del mondo, nella tua bontà perdona le nostre colpe passate e preservaci da quelle future."),
                array('','',"Tu che vivi e regni nei secoli dei secoli.")
            )
        ),
        "sesta_5"=>array(
            array(
                array('','',"Signore Gesù Cristo, che all'ora sesta, mentre le tenebre avvolgevano il mondo, fosti inchiodato sulla croce, vittima innocente per la nostra salvezza, donaci sempre quella luce, che guida gli uomini sulla via della vita eterna."),
                array('','',"Tu che vivi e regni nei secoli dei secoli.")
            )
        ),
        "nona_5"=>array(
            array(
                array('','',"Signore Gesù Cristo, che al ladrone pentito facesti la grazia di passare dalla croce alla gloria del tuo regno, ricevi l'umile confessione delle nostre colpe e nell'ora della morte apri anche a noi la porta del tuo paradiso."),
                array('','',"Tu che vivi e regni nei secoli dei secoli.")
            )
        ),
        "ves_5_1"=>array(
            array(
                array('','',"Concedi ai tuoi fedeli, o Signore, la sapienza della croce, perché illuminati dalla passione del tuo Figlio portiamo generosamente il suo giogo soave."),
                array('','',"Egli è Dio e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ves_5_2"=>array(
            array(
                array('','',"O Dio, che hai rivelato il mistero della tua sapienza nella follia della croce, donaci di riconoscere nella passione la gloria del tuo Figlio, perché la sua croce sia sempre per noi fonte di speranza e di pace."),
                array('','',"Egli è Dio e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ves_5_3"=>array(
            array(
                array('','',"Dio Padre onnipotente, che ci hai donato il tuo unico Figlio come prezzo della nostra salvezza, fa' che vivendo in comunione con le sue sofferenze, partecipiamo un giorno alla gloria della sua risurrezione."),
                array('','',"Egli è Dio e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ves_5_4"=>array(
            array(
                array('','',"Padre misericordioso, che hai redento il mondo con la passione del tuo figlio, fa' che la tua chiesa si offra a te come sacrificio vivo e santo e sperimenti sempre la pienezza del tuo amore."),
                array('ending')
            )
        ),
        "comp_5"=>array(
            array(
                array('','',"Donaci, o Padre, di unirci nella fede alla morte e sepoltura del tuo Figlio per risorgere con lui alla vita nuova."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_6_1"=>array(
            array(
                array('','',"Risplenda sempre, o Dio, nei nostri cuori la luce del Figlio tuo risorto, perché liberi dalle tenebre del peccato, possiamo giungere alla pienezza della tua gloria."),
                array('','',"Egli è Dio, e vive e regna con te, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_6_2"=>array(
            array(
                array('','',"Ti lodi, o Signore la nostra voce, ti lodi il nostro spirito, e poiché il nostro essere è dono del tuo amore, tutta la nostra vita si trasformi in perenne liturgia di lode."),
                array('ending')
            )
        ),
        "lodi_6_3"=>array(
            array(
                array('','',"O Dio, principio e sorgente della nostra salvezza, fa' che tutta la nostra vita sia una testimonianza del tuo amore, perché possiamo un giorno cantare, la tua lode nell'assemblea festosa dei santi."),
                array('ending')
            )
        ),
        "lodi_6_4"=>array(
            array(
                array('','',"O Dio, vera luce e giorno senza tramonto, accogli la lode mattutina del tuo popolo e fa' che il nostro spirito, libero dalle tenebre della colpa, risplenda nel fulgore della tua venuta."),
                array('ending')
            )
        ),
        "terza_6"=>array(
            array(
                array('','',"Dio, Padre onnipotente, dona la luce dello Spirito Santo a questa tua famiglia riunita nel tuo nome, perché sicura dalle insidie del nemico, si allieti sempre nella tua lode."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sesta_6"=>array(
            array(
                array('','',"O Signore, fiamma di carità, donaci l'ardore del tuo Spirito perché amiamo te sopra ogni cosa e i nostri fratelli nel vicolo del tuo amore."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "nona_6"=>array(
            array(
                array('','',"Ascolta Signore, la nostra preghiera per intercessione della Beata Vergine Maria, e donaci la tua vera pace, perché in tutti i giorni della nostra vita possiamo dedicarci con gioia al tuo servizio e giungere alla beatitudine del tuo regno."),
                array('','',"Per Cristo nostro Signore.")
            )
        ),
        "sun_1"=>array(
            array(
                array('','',"Ispira nella tua paterna bontà, o Signore, i pensieri e i propositi del tuo popolo in preghiera, perché veda ciò che deve fare e abbia la forza di compiere ciò che ha veduto."),
                array('ending')
            )
        ),
        "sun_2"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che governi il cielo e la terra, ascolta con bontà le preghiere del tuo popolo e dona ai nostri giorni la tua pace."),
                array('ending')
            )
        ),
        "sun_3"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, guida i nostri atti secondo la tua volontà, perché nel nome del tuo diletto Figlio portiamo frutti generosi di opere buone."),
                array('ending')
            )
        ),
        "sun_4"=>array(
            array(
                array('','',"Dio grande e misericordioso, concedi a noi tuoi fedeli di adorarti con tutta l'anima e di amare i nostri fratelli nella carità del Cristo."),
                array('','',"Egli è Dio e vive e regna con te nei secoli dei secoli.",)
            )
        ),
        "sun_5"=>array(
            array(
                array('','',"Custodisci sempre con paterna bontà la tua famiglia, Signore, e poiché unico fondamento della nostra speranza è la grazia che viene da te, aiutaci sempre con la tua protezione."),
                array('ending')
            )
        ),
        "sun_6"=>array(
            array(
                array('','',"O Dio, Che hai promesso di essere presente in coloro che ti amano e con cuore retto e sincero custodiscono la tua parola, rendici degni di diventare tua stabile dimora."),
                array('ending')
            )
        ),
        "sun_7"=>array(
            array(
                array('','',"Il tuo aiuto, Padre misericordioso, ci renda sempre attenti alla voce dello Spirito, perché possiamo conoscere ciò che è conforme alla tua volontà e attuarlo nelle parole e nelle opere."),
                array('ending')
            )
        ),
        "sun_8"=>array(
            array(
                array('','',"Concedi, Signore, che il corso degli eventi nel mondo si svolga secondo la tua volontà nella giustizia e nella pace, e la tua Chiesa si dedichi con serena fiducia al tuo servizio."),
                array('ending')
            )
        ),
        "sun_9"=>array(
            array(
                array('','',"O Dio, che nella tua provvidenza tutto disponi secondo il tuo disegno di salvezza, allontana da noi ogni male e dona ciò che giova al nostro vero bene."),
                array('ending')
            )
        ),
        "sun_10"=>array(
            array(
                array('','',"O Dio, sorgente di ogni bene, ispiraci propositi giusti e santi e donaci il tuo aiuto, perché possiamo attuarli nella nostra vita."),
                array('ending')
            )
        ),
        "sun_11"=>array(
            array(
                array('','',"O Dio, fortezza di chi spera in te, ascolta benigno le nostre invocazioni, e poiché nella nostra debolezza nulla possiamo senza il tuo aiuto, soccorrici con la tua grazia, perché fedeli ai tuoi comandamenti possiamo piacerti nelle intenzioni e nelle opere."),
                array('ending')
            )
        ),
        "sun_12"=>array(
            array(
                array('','',"Dona al tuo popolo, o Padre, di vivere sempre nella venerazione e nell'amore per il tuo santo nome, poiché tu non privi mai della tua guida coloro che hai stabilito sulla roccia del tuo amore."),
                array('ending')
            )
        ),
        "sun_13"=>array(
            array(
                array('','',"O Dio, che ci hai resi figli della luce con il tuo Spirito di adozione, fa' che non ricadiamo nelle tenebre dell'errore, ma che restiamo sempre luminosi nello splendore della verità."),
                array('ending')
            )
        ),
        "sun_14"=>array(
            array(
                array('','',"O Dio, che con l'umiliazione del tuo Figlio hai risollevato l'umanità dalla sua caduta, donaci una rinnovata gioia pasquale, perché liberi dall'oppressione della colpa, partecipiamo alla felicità eterna."),
                array('ending')
            )
        ),
        "sun_15"=>array(
            array(
                array('','',"O Dio, che mostri agli erranti la luce della tua verità, perché possano tornare sulla retta via, concedi a tutti coloro che si professano cristiani di respingere ciò che è contrario a questo nome e di seguire ciò che gli è conforme."),
                array('ending')
            )
        ),
        "sun_16"=>array(
            array(
                array('','',"Sii propizio a noi tuoi fedeli, Signore, e donaci i tesori della tua grazia, perché ardenti di speranza, fede e carità, restiamo sempre fedeli ai tuoi comandamenti."),
                array('ending')
            )
        ),
        "sun_17"=>array(
            array(
                array('','',"O Dio, nostra forza e nostra speranza, senza di te nulla esiste di valido e di santo; effondi su di noi la tua misericordia perché, da te sorretti e guidati, usiamo saggiamente dei beni terreni nella continua ricerca dei beni eterni."),
                array('ending')
            )
        ),
        "sun_18"=>array(
            array(
                array('','',"Mostraci la tua continua benevolenza, o Padre, e assisti il tuo popolo, che ti riconosce suo pastore e guida; rinnova l'opera della tua creazione e custodisci ciò che hai rinnovato."),
                array('ending')
            )
        ),
        "sun_19"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che ci dai il privilegio di chiamarti Padre, fa' crescere in noi lo spirito di figli adottivi, perché possiamo entrare nell'eredità che ci hai promesso."),
                array('ending')
            )
        ),
        "sun_20"=>array(
            array(
                array('','',"O Dio, che hai preparato beni invisibili per coloro che ti amano, infondi in noi la dolcezza del tuo amore, perché amandoti in ogni cosa e sopra ogni cosa, otteniamo i beni da te promessi, che superano ogni desiderio."),
                array('ending')
            )
        ),
        "sun_21"=>array(
            array(
                array('','',"O Dio, che unisci in un solo volere le menti dei fedeli, concedi al tuo popolo di amare ciò che comandi e desiderare ciò che prometti, perché tra le vicende del mondo là siano fissi i nostri cuori dove è la vera gioia."),
                array('ending')
            )
        ),
        "sun_22"=>array(
            array(
                array('','',"O Dio, nostro Padre, unica fonte di ogni dono perfetto, suscita in noi l'amore per te e ravviva la nostra fede, perché si sviluppi in noi il germe del bene e con il tuo aiuto maturi fino alla sua pienezza."),
                array('ending')
            )
        ),
        "sun_23"=>array(
            array(
                array('','',"O Padre, che ci hai donato il Salvatore e lo Spirito Santo, guarda con benevolenza i tuoi figli di adozione, perché a tutti i credenti in Cristo sia data la vera libertà e l'eredità eterna."),
                array('ending')
            )
        ),
        "sun_24"=>array(
            array(
                array('','',"O Dio, che hai creato e governi l'universo, fa' che sperimentiamo la potenza della tua misericordia, per dedicarci con tutte le forze al tuo servizio."),
                array('ending')
            )
        ),
        "sun_25"=>array(
            array(
                array('','',"O Dio, che nell'amore verso di te e verso il prossimo hai posto il fondamento di tutta la legge, fa' che osservando i tuoi comandamenti meritiamo di entrare nella vita eterna."),
                array('ending')
            )
        ),
        "sun_26"=>array(
            array(
                array('','',"O Dio, che riveli la tua onnipotenza soprattutto con la misericordia e il perdono, continua a effondere su di noi la tua grazia, perché, camminando verso i beni da te promessi, diventiamo partecipi della felicità eterna."),
                array('ending')
            )
        ),
        "sun_27"=>array(
            array(
                array('','',"O Dio, fonte di ogni bene, che esaudisci le preghiere del tuo popolo al di la di ogni desiderio e di ogni merito, effondi su di noi la tua misericordia: perdona ciò che la coscienza teme e aggiungi ciò che la preghiera non osa sperare."),
                array('ending')
            )
        ),
        "sun_28"=>array(
            array(
                array('','',"Ci preceda a ci accompagni sempre la tua grazia, Signore, perché, sorretti dal tuo eterno aiuto, non ci stanchiamo mai di operare il bene."),
                array('ending')
            )
        ),
        "sun_29"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, crea in noi un cuore generoso e fedele, perché possiamo sempre servirti con lealtà e purezza di spirito."),
                array('ending')
            )
        ),
        "sun_30"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, accresci in noi la fede, la speranza e la carità, e perché possiamo ottenere ciò che prometti, fa' che amiamo ciò che comandi."),
                array('ending')
            )
        ),
        "sun_31"=>array(
            array(
                array('','',"Dio onnipotente e misericordioso, tu solo puoi dare ai tuoi fedeli il dono di servirti in modo lodevole e degno; fa' che camminiamo senza ostacoli verso i beni da te promessi."),
                array('ending')
            )
        ),
        "sun_32"=>array(
            array(
                array('','',"Dio grande e misericordioso, allontana ogni ostacolo nel nostro cammino verso di te, perché, nella serenità del corpo e dello spirito, possiamo dedicarci liberamente al tuo servizio."),
                array('ending')
            )
        ),
        "sun_33"=>array(
            array(
                array('','',"Il tuo aiuto, Signore, ci renda sempre lieti nel tuo servizio, perché solo nella dedizione a te, fonte di ogni bene, possiamo avere felicità piena e duratura."),
                array('ending')
            )
        ),
        "sun_34"=>array(
            array(
                array('','',"Ridesta, Signore, la volontà dei tuoi fedeli perché, collaborando con impegno alla tua opera di salvezza, ottengano in misura sempre più abbondante i doni della tua misericordia."),
                array('ending')
            )
        ),
        "A_1_0"=>array(
            array(
                array('','',"O Dio, nostro Padre, suscita in noi la volontà di andare incontro con le buone opere al tuo Cristo che viene, perché egli ci chiami accanto a sé nella gloria a possedere il regno dei cieli."),
                array('ending')
            )
        ),
        "A_1_1"=>array(
            array(
                array('','',"Il tuo aiuto, o Padre, ci renda perseveranti nel bene in attesa del Cristo tuo Figlio; quando egli verrà e busserà alla porta ci trovi vigilanti nella preghiera, operosi nella carità fraterna ed esultanti nella lode."),
                array('ending')
            )
        ),
        "A_1_2"=>array(
            array(
                array('','',"Accogli, o Padre, le preghiere della tua Chiesa e soccorrici nelle fatiche e nelle prove della vita; la venuta del Cristo tuo Figlio ci liberi dal male antico che è in noi e ci conforti con la sua presenza."),
                array('ending')
            )
        ),
        "A_1_3"=>array(
            array(
                array('','',"Dio grande e misericordioso, prepara con la tua potenza il nostro cuore a incontrare il Cristo che viene, perché ci trovi degni di partecipare al banchetto della vita e ci serva egli stesso nel suo avvento glorioso."),
                array('ending')
            )
        ),
        "A_1_4"=>array(
            array(
                array('','',"Ridesta la tua potenza, Signore, e con grande forza soccorri i tuoi fedeli; la tua grazia vinca le resistenze del peccato e affretti il momento della salvezza."),
                array('ending')
            )
        ),
        "A_1_5"=>array(
            array(
                array('','',"Ridesta la tua potenza e vieni, Signore: nei pericoli che ci minacciano a causa dei nostri peccati la tua protezione ci liberi, il tuo soccorso ci salvi."),
                array('','',"Tu sei Dio, e vivi e regni con Dio Padre, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A_1_6"=>array(
            array(
                array('','',"O Dio, che hai mandato in questo mondo il tuo unico Figlio a liberare l'uomo dalla schiavitù del peccato, concedi a noi, che attendiamo con fede il dono del tuo amore, di raggiungere il premio della vera libertà."),
                array('ending')
            )
        ),
        "A_2_0"=>array(
            array(
                array('','',"Dio grande e misericordioso, fa' che il nostro impegno nel mondo non ci ostacoli nel cammino verso il tuo Figlio, ma la sapienza che viene dal cielo ci guidi alla comunione con il Cristo, nostro Salvatore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A_2_1"=>array(
            array(
                array('','',"Salga a te, o Padre, la preghiera del tuo popolo, perché nell'attesa fervida e operosa si prepari a celebrare con vera fede il grande mistero dell'incarnazione del tuo unico Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A_2_2"=>array(
            array(
                array('','',"O Dio, che hai fatto giungere ai confini della terra il lieto annunzio del Salvatore, fa' che tutti gli uomini accolgano con sincera esultanza la gloria del suo Natale."),
                array('ending')
            )
        ),
        "A_2_3"=>array(
            array(
                array('','',"Dio onnipotente, che ci chiami a preparare la via al Cristo Signore, fa' che per la debolezza della nostra fede non ci stanchiamo di attendere la consolante presenza del medico celeste."),
                array('ending')
            )
        ),
        "A_2_4"=>array(
            array(
                array('','',"Risveglia, o Dio, la fede del tuo popolo perché prepari le vie del tuo unico Figlio, e per il mistero della sua venuta possa servirti con la santità della vita."),
                array('ending')
            )
        ),
        "A_2_5"=>array(
            array(
                array('','',"Rafforza, o Padre, la nostra vigilanza nell'attesa del tuo Figlio, perché, illuminati dalla sua parola di salvezza, andiamo incontro a lui con le lampade accese."),
                array('ending')
            )
        ),
        "A_2_6"=>array(
            array(
                array('','',"Sorga in noi, Dio onnipotente, lo splendore della tua gloria, Cristo tuo unico Figlio; la sua venuta vinca le tenebre del male e ci riveli al mondo come figli della luce."),
                array('ending')
            )
        ),
        "A_3_0"=>array(
            array(
                array('','',"Guarda, o Padre, il tuo popolo, che attende con fede il Natale del Signore, e fa' che giunga a celebrare con rinnovata esultanza il grande mistero della salvezza."),
                array('ending')
            )
        ),
        "A_3_1"=>array(
            array(
                array('','',"Ascolta, o Padre, la nostra preghiera, e con la luce del tuo Figlio che viene a visitarci, rischiara le tenebre del nostro cuore."),
                array('ending')
            )
        ),
        "A_3_2"=>array(
            array(
                array('','',"O Padre, che per mezzo del tuo unico Figlio hai fatto di noi una nuova creatura guarda all'opera del tuo amore misericordioso, e con la venuta del redentore salvaci dalle conseguenze del peccato."),
                array('ending')
            )
        ),
        "A_3_3"=>array(
            array(
                array('','',"Concedi, Dio onnipotente, che la festa ormai vicina del nostro Redentore ci sostenga nelle fatiche di ogni giorno e ci dia il possesso dei beni eterni."),
                array('ending')
            )
        ),
        "A_3_4"=>array(
            array(
                array('','',"La coscienza della nostra colpa ci rattrista, o Padre, e ci fa sentire indegni di servire a te; donaci la tua gioia e salvaci con la venuta del Redentore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A_3_5"=>array(
            array(
                array('','',"Ci preceda e ci accompagni sempre la tua grazia, Dio onnipotente; la venuta del tuo unico Figlio, che attendiamo con intenso desiderio, ci ottenga la salvezza per la vita presente e per la futura."),
                array('ending')
            )
        )
    );

    protected $proprio=array(
        "lodi_1_1"=>array(
            array(
                array('','',"Ispira le nostre azioni, Signore, e accompagnale con il tuo aiuto: perché ogni nostra attività abbia da te il suo inizio e in te il suo compimento."),
                array('ending')
            )
        ),
        "BAT"=>array(
            array(
                array('','',"Padre onnipotente ed eterno, che dopo il battesimo nel fiume Giordano proclamasti il Cristo tuo diletto Figlio, mentre discendeva su di lui lo Spirito Santo, concedi ai tuoi figli, rinati dall'acqua e dallo Spirito, di vivere sempre nel tuo amore."),
                array('ending')
            )
        ),
        "sett_1"=>array(
            array(
                array('','',"Ispira nella tua paterna bontà, o Signore, i pensieri e i propositi del tuo popolo in preghiera, perché veda ciò che deve fare e abbia la forza di compiere ciò che ha veduto."),
                array('ending')
            )
        ),
        "PEN"=>array(
            array(
                array('','',"O Padre, che nel mistero della Pentecoste santifichi la tua Chiesa in ogni popolo e nazione, diffondi fino ai confini della terra i doni dello Spirito Santo, e continua oggi, nella comunità dei credenti, i prodigi che hai operato agli inizi della predicazione del Vangelo."),
                array('ending')
            )
        ),
        "SCG"=>array(
            array(
                array('','',"O Padre, che nel Cuore del tuo dilettissimo Figlio ci dai la gioia di celebrare le grandi opere del tuo amore per noi, fa' che da questa fonte inesauribile attingiamo l'abbondanza dei tuoi doni."),
                array('ending')
            )
        ),
        "TRI"=>array(
            array(
                array('','',"O Dio Padre, che hai mandato nel mondo il tuo Figlio, Parola di verità, e lo Spirito santificatore per rivelare agli uomini il mistero della tua vita, fa' che nella professione della vera fede riconosciamo la gloria della Trinità e adoriamo l'unico Dio in tre persone."),
                array('ending')
            )
        ),
        "COD"=>array(
            array(
                array('','',"Signore Gesù Cristo, che nel mirabile sacramento dell'Eucaristia ci hai lasciato il memoriale della tua Pasqua, fa' che adoriamo con viva fede il santo mistero del tuo Corpo e del tuo Sangue, per sentire sempre in noi i benefici della redenzione."),
                array('','',"Tu sei Dio, e vivi e regni con Dio Padre, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "GRE"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che hai voluto rinnovare tutte le cose in Cristo tuo Figlio Re dell'universo, fa' che ogni creatura, libera dalla schiavitù del peccato, ti serva e ti lodi senza fine."),
                array('ending')
            )
        ),
        "SAF"=>array(
            array(
                array('','',"O Dio, nostro Padre, che nella Santa Famiglia ci hai dato un vero modello di vita, fa' che nelle nostre famiglie fioriscano le stesse virtù e lo stesso amore, perché, riuniti insieme nella tua casa, possiamo godere la gioia senza fine."),
                array('ending')
            )
        ),
        "MSS"=>array(
            array(
                array('','',"O Dio, che nella verginità feconda di Maria hai donato agli uomini i beni della salvezza eterna, fa' che sperimentiamo la sua intercessione, poiché per mezzo di lei abbiamo ricevuto l'autore della vita, Cristo tuo Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "2DN"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, luce dei credenti, riempi della tua gloria il mondo intero e rivelati a tutti i popoli nello splendore della tua verità."),
                array('ending')
            )
        ),
        "EPI"=>array(
            array(
                array('','',"O Dio, che in questo giorno, con la guida della stella, hai rivelato alle genti il tuo unico Figlio, conduci benigno anche noi, che già ti abbiamo conosciuto per la fede, a contemplare la grandezza della tua gloria."),
                array('ending')
            )
        ),
        "AV4"=>array(
            array(
                array('','',"Infondi nel nostro spirito la tua grazia, o Padre; tu che nell'annunzio dell'angelo ci hai rivelato l'incarnazione del tuo Figlio, per la sua passione e la sua croce guidaci alla gloria della risurrezione."),
                array('ending')
            )
        ),
        "CIBVM"=>array(
            array(
                array('','',"O Dio, che hai preparato una degna dimora dello Spirito Santo nel cuore della beata Vergine Maria, per sua intercessione concedi anche a noi, tuoi fedeli, di essere tempio vivo della tua gloria."),
                array('ending')
            )
        ),
        "CEN"=>array(
            array(
                array('','',"O Dio, nostro Padre, concedi al popolo cristiano di iniziare con questo digiuno un cammino di vera conversione, per affrontare vittoriosamente con le armi della penitenza il combattimento contro lo spirito del male."),
                array('ending')
            )
        ),
        "PAL"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che hai dato come modello agli uomini il Cristo tuo Figlio, nostro Salvatore, fatto uomo e umiliato fino alla morte di croce, fa' che abbiamo sempre presente il grande insegnamento della sua passione, per partecipare alla gloria della risurrezione."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "PAS"=>array(
            array(
                array('','',"O Padre, che in questo giorno, per mezzo del tuo unico Figlio, hai vinto la morte e ci hai aperto i passaggio alla vita eterna, concedi a noi, che celebriamo la Pasqua di risurrezione, di essere rinnovati nel tuo Spirito, per rinascere nella luce del Signore risorto."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ASC"=>array(
            array(
                array('','',"Esulti di santa gioia la tua Chiesa, o Padre, per il mistero che celebra in questa liturgia di lode, poiché nel tuo Figlio asceso al cielo la nostra umanità è innalzata accanto a te, e noi, membra del suo corpo, viviamo nella speranza di raggiungere Cristo, nostro capo, nella gloria."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A1217"=>array(
            array(
                array('','',"Dio creatore e redentore, che hai rinnovato il mondo nel tuo Verbo, fatto uomo nel grembo di una Madre sempre vergine, concedi che il tuo unico Figlio, primogenito di una moltitudine di fratelli, ci unisca a sé in comunione di vita."),
                array('ending')
            )
        ),
        "A1218"=>array(
            array(
                array('','',"Oppressi a lungo sotto il giogo del peccato, aspettiamo o Padre, la nostra redenzione; la nuova nascita del tuo unico Figlio ci liberi dalla schiavitù antica."),
                array('ending')
            )
        ),
        "A1219"=>array(
            array(
                array('','',"O Dio, che hai rivelato al mondo con il parto della Vergine lo splendore della tua gloria, concedi al tuo popolo di venerare con fede viva e di celebrare con sincero amore il grande mistero dell'incarnazione."),
                array('ending')
            )
        ),
        "A1220"=>array(
            array(
                array('','',"Tu hai voluto, o Padre, che all'annunzio dell'angelo la Vergine immacolata concepisse il tuo Verbo eterno, e avvolta dalla luce dello Spirito Santo divenisse tempio della nuova alleanza: fa' che aderiamo umilmente al tuo volere, come la vergine si affidò alla tua parola."),
                array('ending')
            )
        ),
        "A1221"=>array(
            array(
                array('','',"Ascolta, o Padre, le preghiere del tuo popolo in attesa del tuo Figlio che viene nell'umiltà della condizione umana: la nostra gioia si compia alla fine dei tempi quando egli verrà nella gloria."),
                array('ending')
            )
        ),
        "A1222"=>array(
            array(
                array('','',"O Dio, che nella venuta del tuo Figlio hai risollevato l'uomo dal dominio del peccato e della morte, concedi a noi, che professiamo la fede nella sua incarnazione, di partecipare alla sua vita immortale."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A1223"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, è ormai davanti a noi il Natale del tuo Figlio: ci soccorra nella nostra indegnità il Verbo che si è fatto uomo nel seno della Vergine Maria e di è degnato di abitare fra noi."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "A1224"=>array(
            array(
                array('','',"Affrettati, non tardare, Signore Gesù: la tua venuta dia conforto e speranza a coloro che confidano nel tuo amore misericordioso."),
                array('','',"Tu sei Dio, e vivi e regni con Dio Padre, nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ves1_NAT"=>array(
            array(
                array('','',"O Padre, che ogni anno ci fai vivere nella gioia questa vigilia del Natale, concedi che possiamo guardare senza timore, quando verrà come giudice, il Cristo tuo Figlio che accogliamo in festa come Redentore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "lodi_NAT"=>array(
            array(
                array('','',"Signore, Dio onnipotente, che ci avvolgi della nuova luce del tuo Verbo fatto uomo, fa' che risplenda nelle nostre opere il mistero della fede che rifulge nel nostro spirito."),
                array('ending')
            )
        ),
        "terza_NAT"=>array(
            array(
                array('','',"O Dio, che in modo mirabile ci hai creati a tua immagine, e in modo più mirabile ci hai rinnovati e redenti, fa' che possiamo condividere la vita divina del tuo Figlio, che oggi ha voluto assumere la nostra natura umana."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "N1226"=>array(
            array(
                array('','',"O Dio grande e misericordioso, la nuova nascita del tuo unico Figlio nella nostra carne mortale ci liberi dalla schiavitù antica, che ci tiene sotto il giogo del peccato."),
                array('ending')
            )
        ),
        "N1229"=>array(
            array(
                array('','',"Dio invisibile ed eterno, che nella venuta del Cristo vera luce hai rischiarato le nostre tenebre, guarda con bontà questa tua famiglia, perché possa celebrare con lode unanime la nascita gloriosa del tuo unico Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "N1231"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che nella nascita del tuo Figlio hai stabilito l'inizio e la pienezza della vera fede, accogli anche noi come membra del Cristo, che compendia in sé la salvezza del mondo."),
                array('ending')
            )
        ),
        "F0102"=>array(
            array(
                array('','',"Rafforza la fede del tuo popolo, o Padre, perché creda e proclami il Cristo tuo unico Figlio, vero Dio, eterno con te nella gloria, e vero uomo nato dalla Vergine Madre; in questa fede confermaci nelle prove della vita presente e guidaci alla gioia senza fine."),
                array('ending')
            )
        ),
        "F0103"=>array(
            array(
                array('','',"O Dio, tu hai voluto che l'umanità del Salvatore, nella sua mirabile nascita dalla Vergine Maria, non fosse sottoposta alla comune eredità dei nostri padri; fa' che liberati dal contagio dell'antico male possiamo anche noi far parte della nuova creazione, iniziata da Cristo tuo Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "F0104"=>array(
            array(
                array('','',"Dio onnipotente, il Salvatore che tu hai mandato, luce nuova all'orizzonte del mondo, sorga ancora e risplenda su tutta la nostra vita."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "F0105"=>array(
            array(
                array('','',"O Dio, che nella nascita del tuo unico Figlio hai dato mirabile principio della nostra redenzione, rafforza la fede del tuo popolo, perché sotto la guida del Cristo giunga alla meta della gloria eterna."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "N0107"=>array(
            array(
                array('','',"Lo splendore della tua gloria illumini, Signore, i nostri cuori, perché attraverso le tenebre di questo mondo possiamo giungere alla luce della tua dimora."),
                array('ending')
            )
        ),
        "N0108"=>array(
            array(
                array('','',"O Padre, il cui unico Figlio si è manifestato nella nostra carne mortale, concedi a noi, che lo abbiamo conosciuto come vero uomo, di essere interiormente rinnovati a sua immagine."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "N0109"=>array(
            array(
                array('','',"O Dio, luce del mondo, concedi a tutte le genti il bene di una pace sicura e fa' risplendere nei nostri cuori quella luce radiosa che illuminò la mente dei nostri padri."),
                array('ending')
            )
        ),
        "N0110"=>array(
            array(
                array('','',"O Dio, che in Cristo tuo Figlio hai rivelato a tutti i popoli la sapienza eterna, fa' risplendere su di noi la gloria del nostro Redentore, perché giungiamo alla luce che non ha tramonto."),
                array('ending')
            )
        ),
        "N0111"=>array(
            array(
                array('','',"Dio onnipotente, manifesta anche a noi il mistero della nascita del Salvatore rivelato ai magi dalla luce della stella, e cresca sempre più nel nostro spirito."),
                array('ending')
            )
        ),
        "N0112"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che nel Natale del Redentore hai fatto di noi una nuova creatura, trasformaci nel Cristo tuo Figlio, che ha congiunto per sempre a sé la nostra umanità."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "QC5"=>array(
            array(
                array('','',"Accompagna con la tua benevolenza, Padre misericordioso, i primi passi del nostro cammino penitenziale, perché all'osservanza esteriore corrisponda un profondo rinnovamento nello spirito."),
                array('ending')
            )
        ),
        "QC6"=>array(
            array(
                array('','',"Guarda con paterna bontà, Dio onnipotente, la debolezza dei tuoi figli, e a nostra protezione e difesa stendi il tuo braccio invincibile."),
                array('ending')
            )
        ),
        "QU1"=>array(
            array(
                array('','',"O Dio, nostro Padre, con la celebrazione di questa Quaresima, segno sacramentale della nostra conversione, concedi a noi tuoi fedeli di crescere nella conoscenza del mistero di Cristo e di testimoniarlo con una degna condotta di vita."),
                array('ending')
            )
        ),
        "Q11"=>array(
            array(
                array('','',"Convertici a te, o Padre, nostra salvezza, e formaci alla scuola della tua sapienza, perché l'impegno quaresimale lasci una traccia profonda nella nostra vita."),
                array('ending')
            )
        ),
        "Q12"=>array(
            array(
                array('','',"Volgi il tuo sguardo, Padre misericordioso, a questa tua famiglia, e fa' che superando ogni forma di egoismo risplenda ai tuoi occhi per il desiderio di te."),
                array('ending')
            )
        ),
        "Q13"=>array(
            array(
                array('','',"Guarda, o Padre, il popolo a te consacrato, e fa' che mortificando il corpo con l'astinenza si rinnovi nello spirito con il frutto delle buone opere."),
                array('ending')
            )
        ),
        "Q14"=>array(
            array(
                array('','',"Ispiraci, o Padre, pensieri e propositi santi, e donaci il coraggio di attuarli, e poiché non possiamo esistere senza di te, fa che viviamo secondo la tua volontà."),
                array('ending')
            )
        ),
        "Q15"=>array(
            array(
                array('','',"Concedi, Signore, alla tua Chiesa di prepararsi interiormente alla celebrazione della Pasqua, perché il comune impegno nella mortificazione corporale porti a tutti noi un vero rinnovamento dello spirito."),
                array('ending')
            )
        ),
        "Q16"=>array(
            array(
                array('','',"O Dio, Padre di eterna misericordia, fa' che si convertano a te i nostri cuori, perché nella ricerca dell'unico bene necessario e nelle opere di carità fraterna siano sempre consacrati alla tua lode."),
                array('ending')
            )
        ),
        "QU2"=>array(
            array(
                array('','',"O Padre, che ci chiami ad ascoltare il tuo amato Figlio, nutri la nostra fede con la tua parola e purifica gli occhi del nostro spirito, perché possiamo godere la visione della tua gloria."),
                array('ending')
            )
        ),
        "Q21"=>array(
            array(
                array('','',"O Dio, che hai ordinato la penitenza del corpo come medicina dell'anima, fa che ci asteniamo da ogni peccato per aver la forza di osservare i comandamenti del tuo amore."),
                array('ending')
            )
        ),
        "Q22"=>array(
            array(
                array('','',"Custodisci, o Padre, la tua Chiesa con la tua continua benevolenza, e poiché, a causa della debolezza umana, non può sostenersi senza di te, il tuo aiuto la liberi sempre da ogni pericolo e la guidi alla salvezza eterna."),
                array('ending')
            )
        ),
        "Q23"=>array(
            array(
                array('','',"Sostieni sempre, o Padre, la tua famiglia nell'impegno delle buone opere; confortala con il tuo aiuto nel cammino di questa vita e guidala al possesso dei beni eterni."),
                array('ending')
            )
        ),
        "Q24"=>array(
            array(
                array('','',"O Dio, che ami l'innocenza, e la ridoni a chi l'ha perduta, volgi verso di te i nostri cuori e donaci il fervore del tuo Spirito, perché possiamo esser saldi nella fede e operosi nella carità."),
                array('ending')
            )
        ),
        "Q25"=>array(
            array(
                array('','',"Dio onnipotente e misericordioso, concedi ai tuoi fedeli di essere intimamente purificati dall'impegno penitenziale della Quaresima, per giungere con spirito nuovo alle prossime feste di Pasqua."),
                array('ending')
            )
        ),
        "Q26"=>array(
            array(
                array('','',"O Dio, che per mezzo dei sacramenti ci rendi partecipi del tuo mistero di gloria, guidaci attraverso le esperienze della vita, perché possiamo giungere alla splendida luce in cui è la tua dimora."),
                array('ending')
            )
        ),
        "QU3"=>array(
            array(
                array('','',"Dio misericordioso, fonte di ogni bene, tu ci hai proposto a rimedio del peccato il digiuno, la preghiera e le opere di carità fraterna; guarda a noi che riconosciamo la nostra miseria e, poiché ci opprime il peso delle nostre colpe, ci sollevi la tua misericordia."),
                array('ending')
            )
        ),
        "Q31"=>array(
            array(
                array('','',"Con la tua continua misericordia, o Padre, purifica e rafforza la tua Chiesa, e poiché non può sostenersi senza di te non privarla mai della tua guida."),
                array('ending')
            )
        ),
        "Q32"=>array(
            array(
                array('','',"Non ci abbandoni mai la tua grazia, o Padre, ci renda fedeli al tuo santo servizio e ci ottenga sempre il tuo aiuto."),
                array('ending')
            )
        ),
        "Q33"=>array(
            array(
                array('','',"Signore Dio nostro, fa' che i tuoi fedeli, formati nell'impegno delle buone opere e nell'ascolto della tua parola, ti servano con generosa dedizione liberi da ogni egoismo, e nella comune preghiera a te, nostro Padre, si riconoscano fratelli."),
                array('ending')
            )
        ),
        "Q34"=>array(
            array(
                array('','',"Dio grande e misericordioso, quanto più si avvicina la festa della nostra redenzione, tanto più cresca in noi il fervore per celebrare santamente la Pasqua del tuo Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "Q35"=>array(
            array(
                array('','',"Padre santo e misericordioso, infondi la tua grazia nei nostri cuori, perché possiamo salvarci dagli sbandamenti umani e restare fedeli alla tua parola di vita eterna."),
                array('ending')
            )
        ),
        "Q36"=>array(
            array(
                array('','',"O Dio, nostro Padre, che nella celebrazione della Quaresima ci fai pregustare la gioia della Pasqua, donaci di approfondire e vivere i misteri della redenzione per godere la pienezza dei suoi frutti."),
                array('ending')
            )
        ),
        "QU4"=>array(
            array(
                array('','',"O Padre, che per mezzo del tuo Figlio operi mirabilmente la nostra redenzione, concedi al popolo cristiano di affrettarsi con fede viva e generoso impegno verso la Pasqua ormai vicina."),
                array('ending')
            )
        ),
        "Q41"=>array(
            array(
                array('','',"O Dio, che rinnovi il mondo con i tuoi sacramenti, fa che la comunità dei tuoi figli si edifichi con questi segni misteriosi della tua presenza e non resti priva del tuo aiuto per la vita di ogni giorno."),
                array('ending')
            )
        ),
        "Q42"=>array(
            array(
                array('','',"Dio fedele e misericordioso, in questo tempo di penitenza e di preghiera disponi i tuoi figli a vivere degnamente il mistero pasquale e a recare ai fratelli il lieto annunzio della tua salvezza."),
                array('ending')
            )
        ),
        "Q43"=>array(
            array(
                array('','',"O Padre, che dai la ricompensa ai giusti e non rifiuti il perdono ai peccatori pentiti, ascolta la nostra supplica: l'umile confessione delle nostre colpe ci ottenga la tua misericordia."),
                array('ending')
            )
        ),
        "Q44"=>array(
            array(
                array('','',"O Padre, che ci hai dato la grazia di purificarci con la penitenza e di santificarci con le opere di carità fraterna, fa' che camminiamo fedelmente nella via dei tuoi precetti, per giungere rinnovati alle feste pasquali."),
                array('ending')
            )
        ),
        "Q45"=>array(
            array(
                array('','',"Padre santo, che nei tuoi sacramenti hai posto il rimedio alla nostra debolezza, fa' che accogliamo con gioia i frutti della redenzione e li manifestiamo nel rinnovamento della vita."),
                array('ending')
            )
        ),
        "Q46"=>array(
            array(
                array('','',"Signore onnipotente e misericordioso, attira verso di te i nostri cuori, poiché senza di te non possiamo piacere a te, sommo bene."),
                array('ending')
            )
        ),
        "QU5"=>array(
            array(
                array('','',"Vieni in nostro aiuto, Padre misericordioso, perché possiamo vivere e agire sempre in quella carità, che spinse il tuo Figlio a dare la vita per noi."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "Q51"=>array(
            array(
                array('','',"O Padre, che con il dono del tuo amore ci riempi di ogni benedizione, trasformaci in creature nuove, per esser preparati alla Pasqua gloriosa del tuo regno."),
                array('ending')
            )
        ),
        "Q52"=>array(
            array(
                array('','',"Il tuo aiuto, Dio onnipotente, ci renda perseveranti nel tuo servizio, perché anche nel nostro tempo la tua Chiesa si accresca di nuovi membri e si rinnovi sempre nello spirito."),
                array('ending')
            )
        ),
        "Q53"=>array(
            array(
                array('','',"Risplenda la tua luce, Dio misericordioso, sui tuoi figli purificati dalla penitenza; tu che ci hai ispirato la volontà di servirti, porta a compimento l'opera da te iniziata."),
                array('ending')
            )
        ),
        "Q54"=>array(
            array(
                array('','',"Assisti e proteggi sempre, Padre buono, questa tua famiglia che ha posto in te ogni speranza, perché liberata dalla corruzione del peccato resti fedele all'impegno del Battesimo, e ottenga in premio l'eredità promessa."),
                array('ending')
            )
        ),
        "Q55"=>array(
            array(
                array('','',"Perdona, Signore, i nostri peccati, e nella tua misericordia spezza le catene che ci tengono prigionieri a causa delle nostre colpe, e guidaci alla libertà che Cristo ci ha conquistata."),
                array('ending')
            )
        ),
        "Q56"=>array(
            array(
                array('','',"O Dio, che operi sempre per la nostra salvezza e in questi giorni ci allieti con un dono speciale della tua grazia, guarda con bontà alla tua famiglia, custodisci nel tuo amore chi attende il Battesimo e assisti chi è già rinato alla vita nuova."),
                array('ending')
            )
        ),
        "SS1"=>array(
            array(
                array('','',"Guarda, Dio onnipotente, l'umanità sfinita per la sua debolezza mortale, e fa' che riprenda vita per la passione del tuo unico Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "SS2"=>array(
            array(
                array('','',"Concedi a questa tua famiglia, o Padre, di celebrare con fede i misteri della passione del tuo Figlio, per gustare la dolcezza del tuo perdono."),
                array('ending')
            )
        ),
        "SS3"=>array(
            array(
                array('','',"Padre misericordioso, tu hai voluto che il Cristo tuo Figlio subisse per noi il supplizio della croce per liberarci dal potere del nemico; donaci di giungere alla gloria della risurrezione."),
                array('ending')
            )
        ),
        "SS4"=>array(
            array(
                array('','',"O Dio, vita e salvezza di chi ti ama, rendici ricchi dei tuoi doni: compi in noi ciò che speriamo per la morte del Figlio tuo, e fa' che partecipiamo alla gloria della sua risurrezione."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "ves_SS4"=>array(
            array(
                array('','',"O Dio, che per la tua gloria e per la nostra salvezza, hai costituito sommo ed eterno sacerdote il Cristo tuo Figlio, concedi a noi, divenuti tuo popolo mediante il suo sangue, di sperimentare, nella partecipazione al sacrificio eucaristico, la forza redentrice della croce e della risurrezione."),
                array('ending')
            )
        ),
        "SS5"=>array(
            array(
                array('','',"Guarda con amore, Padre, questa tua famiglia, per la quale il Signore nostro Gesù Cristo non esitò a consegnarsi nelle mani dei nemici e a subire il supplizio della croce."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "SS6"=>array(
            array(
                array('','',"O Dio eterno e onnipotente, che ci concedi di celebrare il mistero del Figlio tuo Unigenito disceso nelle viscere della terra, fa' che sepolti con lui nel Battesimo, risorgiamo con lui nella gloria della risurrezione."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "PA11"=>array(
            array(
                array('','',"O Padre, che fai crescere la tua Chiesa, donandole sempre nuovi figli, concedi ai tuoi fedeli di esprimere nella vita il sacramento che hanno ricevuto nella fede."),
                array('ending')
            )
        ),
        "PA12"=>array(
            array(
                array('','',"O Dio, che nei sacramenti pasquali hai dato al tuo popolo la salvezza, effondi su di noi l'abbondanza dei tuoi doni, perché raggiungiamo il bene della perfetta libertà e abbiamo in cielo quella gioia che ora pregustiamo sulla terra."),
                array('ending')
            )
        ),
        "PA13"=>array(
            array(
                array('','',"O Dio, che nella liturgia pasquale ci dai la gioia di rivivere ogni anno la risurrezione del Signore, fa' che l'esultanza di questi giorni raggiunga la sua pienezza nella Pasqua del cielo."),
                array('ending')
            )
        ),
        "PA14"=>array(
            array(
                array('','',"O Padre, che da ogni parte della terra hai riunito i popoli per lodare il tuo nome, concedi che tutti i tuoi figli, nati a nuova vita nelle acque del Battesimo e animati dall'unica fede, esprimano nelle opere l'unico amore."),
                array('ending')
            )
        ),
        "PA15"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che nella Pasqua di tuo Figlio hai offerto agli uomini il patto della riconciliazione e della pace, donaci di testimoniare nella vita il mistero che celebriamo nella fede."),
                array('ending')
            )
        ),
        "PA16"=>array(
            array(
                array('','',"O padre, che nella tua immensa bontà estendi a tutti i popoli il dono della fede, guarda i tuoi figli di elezione, perché coloro che sono rinati nel Battesimo ricevano al veste candida della vita immortale."),
                array('ending')
            )
        ),
        "PA2"=>array(
            array(
                array('','',"Dio di eterna misericordia che nella ricorrenza pasquale ravvivi la fede del tuo popolo, accresci in noi la grazia che ci hai dato, perché tutti comprendiamo l'inestimabile ricchezza del Battesimo che ci ha purificati, dello Spirito che ci ha rigenerati, del sangue che ci ha redenti."),
                array('ending')
            )
        ),
        "PA21"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che ci dai il privilegio di chiamarti Padre, fa' crescere in noi lo spirito di figli adottivi, perché possiamo entrare nell'eredità che ci hai promesso."),
                array('ending')
            )
        ),
        "PA22"=>array(
            array(
                array('','',"Concedi al tuo popolo, Dio misericordioso, di proclamare la potenza del Signore risorto, perché in lui, sacramento universale di salvezza, manifesti al mondo la pienezza della vita nuova."),
                array('ending')
            )
        ),
        "PA23"=>array(
            array(
                array('','',"O Padre, che nella Pasqua del tuo Figlio hai ristabilito l'uomo nella dignità perduta e gli hai dato la speranza della risurrezione, fa' che accogliamo e viviamo nell'amore il mistero celebrato ogni anno nella fede."),
                array('ending')
            )
        ),
        "PA24"=>array(
            array(
                array('','',"Donaci, Padre misericordioso, di rendere presente in ogni momento della vita la fecondità della Pasqua, che si attua nei tuoi misteri."),
                array('ending')
            )
        ),
        "PA25"=>array(
            array(
                array('','',"Padre misericordioso, tu hai voluto che il tuo Figlio subisse per noi il supplizio della croce per liberarci dal potere del nemico, donaci di giungere alla gloria della risurrezione."),
                array('ending')
            )
        ),
        "PA26"=>array(
            array(
                array('','',"O Padre, che ci hai donato il Salvatore e lo Spirito Santo, guarda con benevolenza i tuoi figli di adozione, perché a tutti i credenti in Cristo sia data la vera libertà e l'eredità eterna."),
                array('ending')
            )
        ),
        "PA3"=>array(
            array(
                array('','',"Esulti sempre il tuo popolo, o Padre, per la rinnovata giovinezza dello spirito, e come oggi si allieta per il dono della dignità filiale, così pregusti nella speranza il giorno glorioso della risurrezione."),
                array('ending')
            )
        ),
        "PA31"=>array(
            array(
                array('','',"O Dio, che manifesti agli erranti la luce della tua verità, perché possano tornare sulla retta via, concedi a tutti coloro che si professano cristiano di respingere ciò che è contrario a questo nome e di seguire ciò che gli è conforme."),
                array('ending')
            )
        ),
        "PA32"=>array(
            array(
                array('','',"O Dio, che apri la porta del tuo regno agli uomini rinati dall'acqua e dallo Spirito Santo, accresci in noi la grazia del Battesimo, perché liberi da ogni colpa possiamo ereditare i beni da te promessi."),
                array('ending')
            )
        ),
        "PA33"=>array(
            array(
                array('','',"Assisti, o Dio nostro Padre, questa tua famiglia raccolta in preghiera: tu che ci hai dato la grazia della fede, donaci di avere parte all'eredità eterna per la risurrezione del Cristo tuo Figlio e nostro Signore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "PA34"=>array(
            array(
                array('','',"O Dio, che in questi giorni pasquali ci hai rivelato la grandezza del tuo amore, fa' che accogliamo pienamente il tuo dono, perché, liberi da ogni errore, aderiamo sempre più alla tua parola di verità."),
                array('ending')
            )
        ),
        "PA35"=>array(
            array(
                array('','',"Dio onnipotente, che ci hai dato la grazia di conoscere il lieto annunzio della risurrezione, fa' che rinasciamo a vita nuova per la forza del tuo Spirito di amore."),
                array('ending')
            )
        ),
        "PA36"=>array(
            array(
                array('','',"O Dio, che nell'acqua del Battesimo hai rigenerato coloro che credono in te, custodisci in noi la vita nuova, perché possiamo vincere ogni assalto del male e conservare fedelmente il dono del tuo amore."),
                array('ending')
            )
        ),
        "PA4"=>array(
            array(
                array('','',"Dio onnipotente e misericordioso, guidaci al possesso della gioia eterna, perché l'umile gregge dei tuoi fedeli giunga con sicurezza accanto a te, dove lo ha preceduto il Cristo, suo Pastore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "PA41"=>array(
            array(
                array('','',"O Dio, che nell'umiliazione del tuo Figlio hai risollevato il mondo dalla sua caduta, donaci la santa gioia pasquale, perché liberi dall'oppressione della colpa, partecipiamo alla felicità eterna."),
                array('ending')
            )
        ),
        "PA42"=>array(
            array(
                array('','',"Dio Padre onnipotente, che ci dai la grazia di celebrare il mistero della risurrezione del tuo Figlio, concedi a noi di testimoniare con la vita la gioia di essere salvati."),
                array('ending')
            )
        ),
        "PA43"=>array(
            array(
                array('','',"O Dio, vita dei tuoi fedeli, gloria degli umili, beatitudine dei giusti, ascolta la preghiera del tuo popolo, e sazia con l'abbondanza dei tuoi doni la sete di coloro che sperano nelle tue promesse."),
                array('ending')
            )
        ),
        "PA44"=>array(
            array(
                array('','',"O Dio, che hai redento l'uomo e lo hai innalzato oltre l'antico splendore, guarda all'opera della tua misericordia, e nei tuoi figli, nati a vita nuova nel Battesimo, custodisci sempre i doni della tua grazia."),
                array('ending')
            )
        ),
        "PA45"=>array(
            array(
                array('','',"O Padre, principio della vera libertà e fonte di salvezza, ascolta la voce del tuo popolo e fa' che i redenti dal sangue del tuo Figlio vivano sempre in comunione con te e godano la felicità senza fine."),
                array('ending')
            )
        ),
        "PA46"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, rendi sempre operante in noi il mistero della Pasqua, perché nati a nuova vita nel Battesimo, con la tua protezione possiamo portare molto frutto e giungere alla pienezza della gioia eterna."),
                array('ending')
            )
        ),
        "PA5"=>array(
            array(
                array('','',"O Padre, che ci hai donato il Salvatore e lo Spirito Santo, guarda con benevolenza i tuoi figli di adozione, perché a tutti i credenti in Cristo sia data la vera libertà e l'eredità eterna."),
                array('ending')
            )
        ),
        "PA51"=>array(
            array(
                array('','',"O Padre, che unisci in un solo volere le menti dei fedeli, concedi al tuo popolo di amare ciò che comandi e desiderare ciò che prometti, perché fra le vicende del mondo là siano fissi i nostri cuori dove è la vera gioia."),
                array('ending')
            )
        ),
        "PA52"=>array(
            array(
                array('','',"O Padre, che nella risurrezione del tuo Figlio ci hai aperto il passaggio alla vita eterna, rafforza in noi la fede e la speranza, perché non dubitiamo mai di raggiungere quei beni che tu ci hai rivelato e promesso."),
                array('ending')
            )
        ),
        "PA53"=>array(
            array(
                array('','',"O Dio, che salvi i peccatori e li rinnovi nella tua amicizia, volgi verso di te i nostri cuori: tu che ci hai liberato dalle tenebre con il dono della fede, non permettere che ci separiamo da te, luce di verità."),
                array('ending')
            )
        ),
        "PA54"=>array(
            array(
                array('','',"O Dio, che per la tua grazia, da peccatori ci fai giusti e da infelici ci rendi beati, custodisci in noi il tuo dono, perché, giustificati mediante la fede, perseveriamo nel tuo servizio."),
                array('ending')
            )
        ),
        "PA55"=>array(
            array(
                array('','',"Donaci, o Padre, di uniformare la nostra vita al mistero pasquale che celebriamo nella gioia, perché la potenza del Signore risorto ci protegga e ci salvi."),
                array('ending')
            )
        ),
        "PA56"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che nel Battesimo ci hai comunicato la tua stessa vita, fa' che i tuoi figli, rinati alla speranza dell'immortalità, giungano con il tuo aiuto alla pienezza della gloria."),
                array('ending')
            )
        ),
        "PA6"=>array(
            array(
                array('','',"Dio onnipotente, fa' che viviamo con rinnovato impegno questi giorni di letizia in onore del Cristo risorto, per testimoniare nelle opere il memoriale della Pasqua che celebriamo nella fede."),
                array('ending')
            )
        ),
        "PA61"=>array(
            array(
                array('','',"Donaci, Padre misericordioso, di rendere presente in ogni momento della vita la fecondità della Pasqua, che si attua nei tuoi misteri."),
                array('ending')
            )
        ),
        "PA62"=>array(
            array(
                array('','',"Esulti sempre il tuo popolo, o Padre, per la rinnovata giovinezza dello spirito, e come oggi si allieta per il dono della dignità filiale, così pregusti nella speranza il giorno glorioso della risurrezione."),
                array('ending')
            )
        ),
        "PA63"=>array(
            array(
                array('','',"O Dio, che ci chiami a celebrare nella fede la risurrezione del tuo Figlio, fa' che possiamo rallegrarci con lui insieme ai tuoi santi nel giorno della sua venuta."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "PA64"=>array(
            array(
                array('','',"O Dio, nostro Padre, che ci hai reso partecipi dei doni della salvezza, fa' che professiamo con la fede e testimoniamo con le opere la gioia della risurrezione."),
                array('ending')
            )
        ),
        "PA65"=>array(
            array(
                array('','',"Si compia in ogni luogo, Signore, con la predicazione del Vangelo, la salvezza acquistata dal sacrificio del Cristo, e la moltitudine dei tuoi figli adottivi ottenga da lui, parola di verità, la vita nuova promessa tutti gli uomini."),
                array('ending')
            )
        ),
        "PA65b"=>array(
            array(
                array('','',"O Dio, che nella risurrezione del tuo Figlio ci hai aperto il passaggio alla vita eterna, innalza il nostro spirito verso il Salvatore che siede alla tua destra, perché, quando tornerà nella gloria, noi tutti, rinati nel Battesimo, riceviamo la veste candida della vita immortale."),
                array('ending')
            )
        ),
        "PA66"=>array(
            array(
                array('','',"O Dio, nostro Padre, disponi sempre al bene i nostri cuori, perché, nel continuo desiderio di elevarci a te, possiamo vivere pienamente il mistero pasquale."),
                array('ending')
            )
        ),
        "PA66b"=>array(
            array(
                array('','',"O Padre, il tuo unico Figlio, prima di salire al cielo, promise ai suoi apostoli lo Spirito Santo: tu che hai dato a loro la multiforme ricchezza della sapienza eterna, concedi anche a noi di ricevere i doni del tuo Spirito."),
                array('ending')
            )
        ),
        "PA7"=>array(
            array(
                array('','',"Ascolta, o Padre, la preghiera dei tuoi figli, che professano la fede nel Cristo salvatore, asceso alla tua destra nella gloria, e fa' che, secondo la promessa, sentiamo la sua presenza in mezzo a noi, sino alla fine dei tempi."),
                array('ending')
            )
        ),
        "PA71"=>array(
            array(
                array('','',"Venga su di noi, o Padre, la potenza dello Spirito Santo, perché aderiamo pienamente alla tua volontà, per testimoniarla con amore di figli."),
                array('ending')
            )
        ),
        "PA72"=>array(
            array(
                array('','',"Padre onnipotente e misericordioso, fa' che lo Spirito Santo venga ad abitare in noi e ci trasformi in tempio della sua gloria."),
                array('ending')
            )
        ),
        "PA73"=>array(
            array(
                array('','',"Padre misericordioso, fa' che la tua Chiesa, riunita dallo Spirito Santo, ti serva con piena dedizione e formi in te un cuore solo e un'anima sola."),
                array('ending')
            )
        ),
        "PA74"=>array(
            array(
                array('','',"Venga, o Padre, il tuo Spirito e ci trasformi interiormente con i suoi doni; crei in noi un cuore nuovo, perché possiamo piacere a te e cooperare al tuo disegno di salvezza."),
                array('ending')
            )
        ),
        "PA75"=>array(
            array(
                array('','',"O Dio, nostro Padre, che ci hai aperto il passaggio alla vita eterna con la glorificazione del tuo Figlio e con l'effusione dello Spirito Santo, fa' che, partecipi di così grandi doni, progrediamo nella fede e ci impegniamo sempre più nel tuo servizio."),
                array('ending')
            )
        ),
        "PA76"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che ci dai la gioia di portare a compimento i giorni della Pasqua, fa' che tutta la nostra vita sia una testimonianza del Signore risorto."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0102a"=>array(
            array(
                array('','',"O Dio, che hai illuminato la tua Chiesa con l'insegnamento e l'esempio dei santi Basilio e Gregorio Nazianzeno, donaci uno spirito umile e ardente, per conoscere la tua verità e attuarla con un coraggioso programma di vita."),
                array('ending')
            )
        ),
        "0107a"=>array(
            array(
                array('','',"O Dio, che nel tuo sacerdote san Raimondo, pieno di bontà verso i peccatori e i prigionieri, hai dato alla tua Chiesa un modello di vita evangelica, fa' che per sua intercessione siamo liberati dalla schiavitù del peccato per servirti con libertà di figli."),
                array('ending')
            )
        ),
        "0110a"=>array(
            array(
                array('','',"Guardaci con bontà, o Signore Dio, per l'intercessione del santo vescovo Gregorio, che con la lucentezza della vita e della dottrina cantò mirabilmente le tue lodi: concedi che anche noi, dimentichi del passato e protesi verso il futuro, possiamo felicemente giungere al premio della divina chiamata."),
                array('ending')
            )
        ),
        "0113a"=>array(
            array(
                array('','',"Dio onnipotente e misericordioso, concedi al tuo popolo di conoscere e professare, nella vera fede dei padri, la divinità del Cristo tuo Figlio, di cui il vescovo sant'Ilario fu tenace testimone e maestro."),
                array('ending')
            )
        ),
        "0115a"=>array(
            array(
                array('','',"Noi ti preghiamo, Signore Dio, che dopo averci dato nei santi Mauro e Placido un meraviglioso esempio di vita monastica, tu ci conceda anche di seguirne il cammino e di partecipare con loro al medesimo premio."),
                array('ending')
            )
        ),
        "0117a"=>array(
            array(
                array('','',"O Dio, che hai ispirato a sant'Antonio abate di ritirarsi nel deserto, per servirti in un nuovo modello di vita cristiana, concedi anche a noi per sua intercessione di superare i nostri egoismi per amare te sopra ogni cosa."),
                array('ending')
            )
        ),
        "0120a"=>array(
            array(
                array('','',"O Dio, gloria dei tuoi sacerdoti, concedi a noi tuoi fedeli, per intercessione del papa e martire Fabiano, di crescere come comunità di fede e di amore."),
                array('ending')
            )
        ),
        "0120b"=>array(
            array(
                array('','',"Donaci, o Padre, il tuo Spirito di fortezza, perché, ammaestrati dal glorioso esempio del tuo martire Sebastiano, impariamo a obbedire a te piuttosto che agli uomini."),
                array('ending')
            )
        ),
        "0121a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che scegli le creature miti e deboli per confondere le potenze del mondo, concedi a noi, che celebriamo la nascita al cielo di sant'Agnese vergine e martire, di imitare la sua eroica costanza nella fede."),
                array('ending')
            )
        ),
        "0122a"=>array(
            array(
                array('','',"O Dio, fonte di ogni bene, donaci la forza del tuo Spirito che animò il diacono e martire Vincenzo, e lo rese invincibile in mezzo ai tormenti, perché anche la nostra fragile umanità sia sostenuta dalla potenza del tuo amore."),
                array('ending')
            )
        ),
        "0124a"=>array(
            array(
                array('','',"O Dio, tu hai voluto che il santo vescovo Francesco di Sales si facesse tutto a tutti nella carità apostolica: concedi anche a noi di testimoniare sempre, nel servizio dei fratelli, la dolcezza del tuo amore."),
                array('ending')
            )
        ),
        "0125a"=>array(
            array(
                array('','',"O Dio, che hai illuminato tutte le genti con la parola dell'apostolo Paolo, concedi anche a noi, che oggi ricordiamo la sua conversione, di essere testimoni della tua verità e di camminare sempre nella via del Vangelo."),
                array('ending')
            )
        ),
        "0126a"=>array(
            array(
                array('','',"Nella esperienza dei tuoi santi, Signore, tu ci offri testimonianza vissuta si consacrazione a te; fa' che formati alla loro scuola, ci impegniamo con la loro stessa fede ad amarti nell'esercizio delle buone opere."),
                array('ending')
            )
        ),
        "0127a"=>array(
            array(
                array('','',"O Dio, nostro Padre, che hai formato alla scuola degli Apostoli i santi vescovi Timòteo e Tito, concedi anche a noi per loro intercessione di vivere in questo mondo con giustizia e con amore di figli, per giungere alla gloria del tuo regno."),
                array('ending')
            )
        ),
        "0127b"=>array(
            array(
                array('','',"O Dio, Padre misericordioso, che in sant'Angela Merici hai dato alla tua Chiesa un modello di carità sapiente e coraggiosa, per il suo esempio e la sua intercessione donaci di comprendere e testimoniare la forza rinnovatrice del Vangelo."),
                array('ending')
            )
        ),
        "0128a"=>array(
            array(
                array('','',"O Dio, che in san Tommaso d'Aquino hai dato alla tua Chiesa un modello sublime di santità e di dottrina, donaci la luce per comprendere i suoi insegnamenti e la forza per imitare i suoi esempi."),
                array('ending')
            )
        ),
        "0131a"=>array(
            array(
                array('','',"O Dio, che in san Giovanni Bosco hai dato alla tua Chiesa un padre e un maestro dei giovani, suscita anche in noi la stessa fiamma di carità a servizio della tua gloria per la salvezza dei fratelli."),
                array('ending')
            )
        ),
        "0202a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, guarda i tuoi fedeli riuniti nella festa della Presentazione al tempio del tuo unico Figlio fatto uomo, e concedi anche a noi di essere presentati a te pienamente rinnovati nello spirito."),
                array('ending')
            )
        ),
        "0203a"=>array(
            array(
                array('','',"O Dio, che hai inviato ai popoli baltici il santo vescovo Oscar come apostolo del Vangelo, concedi anche a noi per sua intercessione di camminare sempre nella luce della verità."),
                array('ending')
            )
        ),
        "0203b"=>array(
            array(
                array('','',"Esaudisci, Signore, la tua famiglia, riunita nel ricordo del martire san Biagio, e donale pace e salute nella vita presente, perché giunga alla gioia dei beni eterni."),
                array('ending')
            )
        ),
        "0205a"=>array(
            array(
                array('','',"Donaci, Signore, la tua misericordia, per intercessione di sant'Agata, che risplende nella Chiesa per la gloria della verginità e del martirio."),
                array('ending')
            )
        ),
        "0206a"=>array(
            array(
                array('','',"O Dio, forza dei martiri, che hai chiamato alla gloria eterna san Paolo Miki e i suoi compagni attraverso il martirio della croce, concedi anche a noi per loro intercessione di testimoniare in vita e in morte la fede del nostro Battesimo."),
                array('ending')
            )
        ),
        "0208a"=>array(
            array(
                array('','',"O Dio, che in san Girolamo Emiliani, sostegno e padre degli orfani, hai dato alla Chiesa un segno della tua predilezione verso i piccoli e i poveri, donaci di vivere e operare nello spirito di adozione per il quale ci chiamiamo e siamo realmente tuoi figli."),
                array('ending')
            )
        ),
        "0210a"=>array(
            array(
                array('','',"O Dio, che hai rivestito di luminosa innocenza la santa vergine Scolastica, fa' che possiamo anche noi piacerti nella trasparente fedeltà quotidiana della vita monastica, per poter godere di te un giorno nel cielo, con l'esultante coro delle vergini."),
                array('ending')
            )
        ),
        "0211a"=>array(
            array(
                array('','',"O Dio, che rinnovasti la vita monastica con la dottrina e gli esempi del santo abate Benedetto di Aniano, concedici, per sua intercessione, di conservare uno stile di vita in tutto conforma all'insegnamento di Cristo, tuo Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0211b"=>array(
            array(
                array('','',"O Dio, Padre misericordioso, soccorri la nostra debolezza, e per intercessione di Maria, Madre immacolata del tuo Figlio, fa' che risorgiamo dal peccato alla vita nuova."),
                array('ending')
            )
        ),
        "0214a"=>array(
            array(
                array('','',"O Dio, ricco di misericordia, che nella missione apostolica dei santi fratelli Cirillo e Metodio hai donato ai popoli slavi la luce del Vangelo, per la loro comune intercessione fa' che tutti gli uomini accolgano la tua Parola e formino il tuo popolo santo concorde nel testimoniare la vera fede."),
                array('ending')
            )
        ),
        "0217a"=>array(
            array(
                array('','',"Donaci, Signore, la carità ardente dei Sette Santi Fondatori, che fraternamente uniti nel devoto servizio di Maria Madre di Dio hanno rianimato la fede del popolo cristiano."),
                array('ending')
            )
        ),
        "0221a"=>array(
            array(
                array('','',"Dio onnipotente, che in san Pier Damiani ci hai dato un maestro e un modello di vita interamente votata al tuo servizio nella santa Chiesa, fa' che non anteponiamo nulla all'amore del Cristo e camminiamo verso di te nella luce del Vangelo."),
                array('ending')
            )
        ),
        "0222a"=>array(
            array(
                array('','',"Concedi, Dio onnipotente, che tra gli sconvolgimenti del mondo non si turbi la tua Chiesa, che hai fondato sulla roccia con la professione di fede dell'apostolo Pietro."),
                array('ending')
            )
        ),
        "0223a"=>array(
            array(
                array('','',"O Dio, Signore, e Padre di tutti gli uomini, che hai unito alla schiera dei martiri il vescovo san Policarpo, concedi anche a noi per sua intercessione di bere al calice della passione del Cristo e di comunicare alla gloria della risurrezione."),
                array('ending')
            )
        ),
        "0304a"=>array(
            array(
                array('','',"Dio onnipotente, che ci chiami a servirti per regnare con te, fa' che per intercessione di san Casimiro viviamo costantemente al tuo servizio nella santità e nella giustizia."),
                array('ending')
            )
        ),
        "0307a"=>array(
            array(
                array('','',"O Dio, che hai sostenuto le sante martiri Perpetua e Felicita con la forza invincibile della tua carità e le hai rese intrepide di fronte ai persecutori, concedi anche a noi, per loro intercessione, di perseverare nella fede e di crescere nel tuo amore."),
                array('ending')
            )
        ),
        "0308a"=>array(
            array(
                array('','',"Signore, che in san Giovanni di Dio hai fatto risplendere la tua misericordia, concedi anche a noi di esprimere con le opere la sua carità verso i poveri e i malati per essere accolti fra gli eletti nel tuo regno."),
                array('ending')
            )
        ),
        "0309a"=>array(
            array(
                array('','',"O Dio, che in santa Francesca Romana ci hai offerto un modello di santità coniugale e di vita a te consacrata, fa' che in ogni circostanza siamo perseveranti nel tuo servizio e camminiamo nella luce del tuo volto."),
                array('ending')
            )
        ),
        "0317a"=>array(
            array(
                array('','',"O Dio, che hai inviato ai popoli dell'Irlanda il vescovo san Patrizio come apostolo del Vangelo, per sua intercessione concedi alle nostre comunità di riscoprire il senso missionario della fede e di annunziare agli uomini le meraviglie del tuo amore."),
                array('ending')
            )
        ),
        "0318a"=>array(
            array(
                array('','',"O Dio, che con l'insegnamento di san Cirillo hai guidato la tua Chiesa a comprendere la profondità dei misteri cristiani, donaci, per sua intercessione, si conoscere te e colui che hai mandato, Gesù Cristo tuo Figlio, per possedere la pienezza della vita."),
                array('ending')
            )
        ),
        "0319a"=>array(
            array(
                array('','',"Dio onnipotente, che hai voluto affidare gli inizi della nostra redenzione alla custodia premurosa di san Giuseppe, per sua intercessione concedi alla tua Chiesa di cooperare fedelmente al compimento dell'opera di salvezza."),
                array('ending')
            )
        ),
        "0321a"=>array(
            array(
                array('','',"O Dio, che nel santo abate Benedetto hai fatto un maestro insigne di perfezione evangelica, ricolmandolo dello Spirito del tuo Figlio, concedi a noi, che celebriamo il suo glorioso transito, di anelare con tutte le forze alla pienezza della carità e della vita eterna."),
                array('ending')
            )
        ),
        "0323a"=>array(
            array(
                array('','',"O Dio, che hai fecondato la tua Chiesa con le fatiche apostoliche del santo vescovo Turibio, suscita nel popolo cristiano lo stesso ardore missionario per l'annunzio del Vangelo, perché cresca e si rinnovi sempre nella fede e nella santità della vita."),
                array('ending')
            )
        ),
        "0325a"=>array(
            array(
                array('','',"O Padre, tu hai voluto che il tuo Verbo si facesse uomo nel grembo della Vergine Maria: concedi a noi, che adoriamo il mistero del nostro Redentore, vero Dio e vero uomo, di essere partecipi della sua vita immortale."),
                array('ending')
            )
        ),
        "0402a"=>array(
            array(
                array('','',"O Dio, grandezza degli umili, che hai scelto san Francesco da Paola, minimo tra i fratelli, per innalzarlo ai vertici della santità, e lo hai proposto al tuo popolo come modello e protettore, donaci di seguire il suo esempio, per condividere con lui l'eredità promessa ai miti e umili di cuore."),
                array('ending')
            )
        ),
        "0404a"=>array(
            array(
                array('','',"Guarda, Signore, la tua Chiesa riunita nel devoto ricordo del vescovo san Isidoro: egli che la edificò con la santità e la dottrina l'aiuti con la sua intercessione presso di te."),
                array('ending')
            )
        ),
        "0405a"=>array(
            array(
                array('','',"O Padre, che hai suscitato nella Chiesa san Vincenzo Ferrer, predicatore infaticabile del Vangelo, per richiamare gli uomini all'attesa vigilante del giudizio, concedi anche a noi di prepararci alla venuta del tuo Figlio per contemplarlo nella gloria del suo regno."),
                array('ending')
            )
        ),
        "0407a"=>array(
            array(
                array('','',"O Dio, che hai scelto san Giovanni Battista de la Salle per l'educazione cristiana dei giovani, suscita sempre nella tua Chiesa educatori e maestri che s'impegnino generosamente al servizio delle nuove generazioni nella scuola e nella vita."),
                array('ending')
            )
        ),
        "0411a"=>array(
            array(
                array('','',"O Dio, che al santo vescovo Stanislao hai dato la forza di concludere con il martirio il suo servizio pastorale, concedi anche a noi, che lo veneriamo come intercessore, di perseverare, forti nella fede, per tutti i giorni della nostra vita."),
                array('ending')
            )
        ),
        "0413a"=>array(
            array(
                array('','',"Concedi al tuo popolo, Dio onnipotente, di affrontare le lotte e le avversità della vita con lo spirito di fortezza, che rese intrepido il papa san Martino I in mezzo alle minacce e alle sofferenze sostenute per la causa della fede."),
                array('ending')
            )
        ),
        "0421a"=>array(
            array(
                array('','',"O Dio, che hai dato al vescovo sant'Anselmo il dono della sapienza per meditare e insegnare le profondità del tuo mistero, illumina il nostro intelletto con la luce della fede, perché ricerchiamo e amiamo sempre più la verità che ci hai rivelato."),
                array('ending')
            )
        ),
        "0423a"=>array(
            array(
                array('','',"O Dio, che hai chiamato il santo vescovo Adalberto al servizio della tua parola e lo hai consacrato a te col martirio, concedici di imitarlo nel docile ascolto della tua parola e nell'annunziare il tuo Vangelo con le parole e con le opere."),
                array('ending')
            )
        ),
        "0423b"=>array(
            array(
                array('','',"O Dio, che hai unito alla passione del Cristo tuo Figlio il glorioso martire san Giorgio, per sua intercessione sostieni la nostra debolezza, e fa' risplendere su di noi la tua potenza."),
                array('ending')
            )
        ),
        "0424a"=>array(
            array(
                array('','',"O Padre, che al tuo sacerdote, san Fedele, ardente di carità, hai dato la grazia di testimoniare con il sangue l'annunzio missionario del Vangelo, per sua intercessione concedi anche a noi di essere radicati e fondati nell'amore di Cristo, per conoscere la gloria della sua risurrezione."),
                array('ending')
            )
        ),
        "0425a"=>array(
            array(
                array('','',"O Dio, che hai glorificato il tuo evangelista Marco con il dono della predicazione apostolica, fa' che alla scuola del Vangelo, impariamo anche noi a seguire fedelmente il Cristo Signore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0428a"=>array(
            array(
                array('','',"O Dio, che al tuo sacerdote san Pietro Chanel hai dato la grazia di coronare con il martirio l'annunzio missionario del Vangelo, concedi anche a noi, in questi giorni di gioia pasquale, di vivere pienamente il mistero di Cristo morto e risorto, per divenire testimoni della vita nuova."),
                array('ending')
            )
        ),
        "0429a"=>array(
            array(
                array('','',"O Dio, che in santa Caterina da Siena, ardente del tuo spirito d'amore, hai unito la contemplazione di Cristo crocifisso e il servizio della Chiesa, per sua intercessione concedi a noi tuoi fedeli, partecipi del mistero di Cristo, di esultare nella rivelazione della sua gloria."),
                array('ending')
            )
        ),
        "0430a"=>array(
            array(
                array('','',"O Dio, che hai scelto il Papa san Pio V per la difesa della fede e il rinnovamento del culto liturgico, concedi anche a noi di partecipare con vera fede e carità operosa ai tuoi santi misteri."),
                array('ending')
            )
        ),
        "0501a"=>array(
            array(
                array('','',"O Dio, che nella tua provvidenza hai chiamato l'uomo a cooperare con il lavoro al disegno della creazione, fa' che per l'intercessione e l'esempio di san Giuseppe siamo fedeli alle responsabilità che ci affidi, e riceviamo la ricompensa che ci prometti."),
                array('ending')
            )
        ),
        "0502a"=>array(
            array(
                array('','',"Dio di infinita sapienza, che hai suscitato nella tua Chiesa il vescovo sant'Atanasio, intrepido assertore della divinità di tuo Figlio, fa' che per la sua intercessione e il suo insegnamento cresciamo sempre nella tua conoscenza e nel tuo amore."),
                array('ending')
            )
        ),
        "0503a"=>array(
            array(
                array('','',"O Dio, nostro Padre, che rallegri la Chiesa con la festa degli apostoli Filippo e Giacomo, per le loro preghiere concedi al tuo popolo di comunicare al mistero della morte e risurrezione del tuo unico Figlio, per contemplare in eterno la gloria del tuo volto."),
                array('ending')
            )
        ),
        "0511a"=>array(
            array(
                array('','',"O Dio, sostegno e premio incomparabile per quanti camminano sotto il tuo sguardo nell'anelito della perfezione, confermaci nella fedeltà amorevole alla tua chiamata, perché con l'esempio e l'intercessione dei santi abati cluniacensi corriamo con sempre nuovo slancio sulla strada del tuo amore."),
                array('ending')
            )
        ),
        "0512a"=>array(
            array(
                array('','',"Dio onnipotente, concedi a noi, che veneriamo i santi martiri Nèreo e Achìlleo, di a vere sempre amici e intercessori presso di te questi gloriosi testimoni della fede."),
                array('ending')
            )
        ),
        "0512b"=>array(
            array(
                array('','',"Esulti la tua Chiesa, Signore, nel ricordo del martire san Pancrazio, e per la sua intercessione si consacri con serena fiducia al servizio del Vangelo."),
                array('ending')
            )
        ),
        "0514a"=>array(
            array(
                array('','',"O Dio, che hai voluto aggregare san Mattia al collegio degli Apostoli, per sua intercessione concedi a noi, che abbiamo ricevuto in sorte la tua amicizia, di essere contati nel numero degli eletti."),
                array('ending')
            )
        ),
        "0515a"=>array(
            array(
                array('','',"O Dio, che hai guidato a vertici di dottrina e di santità il santo abate Pacomio, fa' che anche noi, sul suo esempio, cerchiamo per prima cosa il pane della tua Parola, fonte di luce per la coscienza e di pace per il cuore."),
                array('ending')
            )
        ),
        "0518a"=>array(
            array(
                array('','',"O Dio, eterna ricompensa dei tuoi santi, concedi anche a noi, l'invitta costanza nella fede del papa Giovanni I, che confermò il suo servizio apostolico con la testimonianza del martirio."),
                array('ending')
            )
        ),
        "0519a"=>array(
            array(
                array('','',"O Dio, premio dei santi e corona degli umili, tu che desti a san Celestino di servirti con umiltà tanto al vertice della Chiesa che nel nascondimento dell'eremo, concedi anche a noi di poter giungere alla vita seguendo la via stretta del Vangelo."),
                array('ending')
            )
        ),
        "0520a"=>array(
            array(
                array('','',"O Padre, che hai donato al tuo sacerdote san Bernardino da Siena un singolare amore per il Nome di Gesù, imprimi anche nei nostri cuori il sigillo della tua carità con il fuoco dello Spirito."),
                array('ending')
            )
        ),
        "0524a"=>array(
            array(
                array('','',"Dona alla tua Chiesa, Signore, lo spirito di fortezza e l'ardore per la giustizia, che hai fatto risplendere nella vita del papa san Gregorio VII, perché rifiutando ogni compromesso ci dedichiamo con piena libertà al servizio del bene."),
                array('ending')
            )
        ),
        "0525a"=>array(
            array(
                array('','',"O Dio, che nel sacerdote e monaco san Beda ci hai dato un insigne maestro di dottrina evangelica, edifica e illumina sempre la tua Chiesa con la sapienza dei padri e la carità dei santi."),
                array('ending')
            )
        ),
        "0526a"=>array(
            array(
                array('','',"O Padre, che glorifichi i tuoi santi e li doni alla Chiesa come modelli di vita evangelica, infondi in noi il tuo Spirito che infiammò mirabilmente il cuore di san Filippo Neri."),
                array('ending')
            )
        ),
        "0526b"=>array(
            array(
                array('','',"O Dio, bene supremo della verginità consacrata, che a santa Maria Maddalena de' Pazzi hai dato i doni ineffabili della tua intimità, concedi anche a noi, che ricordiamo la sua nascita al cielo, di contemplarti con purità di spirito e di servirti con ardente amore."),
                array('ending')
            )
        ),
        "0527a"=>array(
            array(
                array('','',"O Dio, che hai chiamato al Vangelo i popoli dell'Inghilterra con la predicazione missionaria del santo vescovo Agostino, fa' che il seme delle sua fatiche apostoliche dia frutti di perenne fecondità nella tua Chiesa."),
                array('ending')
            )
        ),
        "0531a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che nel tuo disegno di amore hai ispirato alla beata Vergine Maria, che portava in grembo il tuo Figlio, di visitare sant'Elisabetta, concedi a noi di essere docili all'azione del tuo Spirito, per magnificare con Maria il tuo santo nome."),
                array('ending')
            )
        ),
        "0601a"=>array(
            array(
                array('','',"O Dio, che hai donato al santo martire Giustino una mirabile conoscenza del mistero del Cristo, attraverso la sublime follia della croce, per la sua intercessione allontana da noi le tenebre dell'errore e confermaci nella professione della vera fede."),
                array('ending')
            )
        ),
        "0602a"=>array(
            array(
                array('','',"O Dio, che nel glorioso martirio dei santi Marcellino e Pietro ci hai dato un segno della tua amorosa presenza nella Chiesa, concedi a noi, che confidiamo nella loro intercessione, di imitarli nella fermezza della fede."),
                array('ending')
            )
        ),
        "0603a"=>array(
            array(
                array('','',"O Dio, che nel sangue dei martiri hai posto il seme di nuovi cristiani, concedi che il mistico campo della Chiesa, fecondato dal sacrificio di san Carlo Lwanga e dei suoi compagni, produca una messe sempre più abbondante, a gloria del tuo nome."),
                array('ending')
            )
        ),
        "0605a"=>array(
            array(
                array('','',"Interceda per noi, Signore, il santo vescovo e martire Bonifacio, perché custodiamo con fierezza e professiamo con coraggio la fede che egli ha insegnato con la parola e testimoniato con il sangue."),
                array('ending')
            )
        ),
        "0606a"=>array(
            array(
                array('','',"O Dio, che in san Norberto hai dato alla tua Chiesa un vescovo mirabile per lo zelo pastorale e lo spirito di orazione, fa' che il tuo popolo sia sempre guidato alle sorgenti della salvezza da pastori secondo il tuo cuore."),
                array('ending')
            )
        ),
        "0609a"=>array(
            array(
                array('','',"Dona, o Padre, alla comunità dei credenti la sapienza del tuo Santo Spirito che ispirò sant'Efrem, diacono e cantore della tua gloria, a celebrare con inni mirabili i tuoi divini misteri."),
                array('ending')
            )
        ),
        "0611a"=>array(
            array(
                array('','',"O Padre, che hai scelto san Barnaba, pieno di fede e di Spirito Santo, per convertire i popoli pagani, fa' che sia sempre annunziato fedelmente, con la parola e con le opere, il Vangelo di Cristo, che egli testimoniò con coraggio apostolico."),
                array('ending')
            )
        ),
        "0613a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che in sant'Antonio di Padova hai dato al tuo popolo un insigne predicatore e un patrono dei poveri e dei sofferenti, fa' che per sua intercessione seguiamo gli insegnamenti del Vangelo e sperimentiamo nella prova il soccorso della tua misericordia."),
                array('ending')
            )
        ),
        "0619a"=>array(
            array(
                array('','',"O Dio, che hai scelto san Romualdo per rinnovare nella tua Chiesa la vita eremitica, donaci la forza di rinnegare noi stessi per seguire Cristo sulla via della croce e salire con lui nella gloria del tuo regno."),
                array('ending')
            )
        ),
        "0621a"=>array(
            array(
                array('','',"O Dio, principio e fonte di ogni bene, che in san Luigi Gonzaga hai unito in modo mirabile l'austerità e la purezza, fa' che per i suoi meriti e le sue preghiere, se non lo abbiamo imitato nell'innocenza, lo seguiamo sulla via della penitenza evangelica."),
                array('ending')
            )
        ),
        "0622a"=>array(
            array(
                array('','',"O Dio, che nella passione dei martiri doni alla tua Chiesa la testimonianza suprema della fede, concedi anche a noi, per intercessione dei santi Giovanni Fisher e Tommaso More, la forza di esprimere con la vita il credo che professiamo."),
                array('ending')
            )
        ),
        "0622b"=>array(
            array(
                array('','',"O Dio, che nel vescovo Paolino hai dato alla tua Chiesa un luminoso esempio di servizio pastorale e di amore ai poveri, concedi a noi, che lo veneriamo maestro e protettore, di imitare la sua testimonianza."),
                array('ending')
            )
        ),
        "0624a"=>array(
            array(
                array('','',"O Padre, che hai mandato san Giovanni Battista a preparare a Cristo Signore un popolo ben disposto, allieta la tua Chiesa con l'abbondanza dei doni dello Spirito, e guidala sulla via della salvezza e della pace."),
                array('ending')
            )
        ),
        "0625a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, luce dei credenti, che hai scelto san Guglielmo abate per renderlo partecipe della tua mirabile santità, e radunare con la sua dottrina gran moltitudine di fedeli, concedi anche a noi di poterne imitare gli esempi e osservare i suoi insegnamenti."),
                array('ending')
            )
        ),
        "0627a"=>array(
            array(
                array('','',"O Dio, che hai suscitato nella tua Chiesa il vescovo san Cirillo, fervido assertore della divina maternità della Vergine Maria, concedi al tuo popolo, che la riconosce vera Madre di Dio, il dono della salvezza nel Cristo tuo Figlio, fatto uomo per noi."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0628a"=>array(
            array(
                array('','',"O Dio, che al vescovo sant'Ireneo hai dato la grazia di confermare la tua Chiesa nella verità e nella pace, fa che per sua intercessione ci rinnoviamo nella fede e nell'amore, e cerchiamo sempre ciò che promuove l'unità e la concordia."),
                array('ending')
            )
        ),
        "0629a"=>array(
            array(
                array('','',"O Dio, che allieti la tua Chiesa con la solennità dei santi Pietro e Paolo, fa' che al tua Chiesa segua sempre l'insegnamento degli apostoli dai quali ha ricevuto il primo annunzio della fede."),
                array('ending')
            )
        ),
        "0630a"=>array(
            array(
                array('','',"O Dio, che hai fecondato con il sangue dei martiri i primi germogli della Chiesa di Roma, per il luminoso esempio di così coraggiosi testimoni confermaci nella fede, perché possiamo raccogliere con gioia il frutto del loro sacrificio."),
                array('ending')
            )
        ),
        "0703a"=>array(
            array(
                array('','',"Esulti la tua Chiesa, o Dio, nostro Padre, nella festa dell'apostolo Tommaso; per la sua intercessione si accresca la nostra fede perché credendo abbiamo vita nel nome del Cristo, che fu da lui riconosciuto suo Signore e suo Dio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0704a"=>array(
            array(
                array('','',"Dio di amore e di pace, che hai dato a santa Elisabetta di Portogallo il dono mirabile di riconciliare fra loro i nemici, concedi anche a noi di essere sempre operatori di pace, perché possiamo chiamarci tuoi figli."),
                array('ending')
            )
        ),
        "0705a"=>array(
            array(
                array('','',"Concedi al tuo popolo, o Padre, la sublime scienza di Gesù Cristo, che nello spirito dell'apostolo Paolo illuminò la vita si sant'Antonio Maria Zaccaria, e lo rese instancabile predicatore del Vangelo."),
                array('ending')
            )
        ),
        "0706a"=>array(
            array(
                array('','',"O Dio, sostegno degli innocenti e gioia dei puri di cuore, che a santa Maria Goretti hai dato nel fiore della giovinezza la grazia e la corona del martirio, fa' che perseveriamo con la stessa fede nella via dei tuoi precetti per godere la tua visione nel cielo."),
                array('ending')
            )
        ),
        "0711a"=>array(
            array(
                array('','',"O Dio, che hai scelto san Benedetto abate e lo hai costituito maestro di coloro che dedicano la vita al tuo servizio, concedi anche a noi di non anteporre nulla all'amore del Cristo e di correre con cuore libero e ardente nella via dei tuoi precetti."),
                array('ending')
            )
        ),
        "0712a"=>array(
            array(
                array('','',"Dio, autore e amante della pace, il conoscere te è vivere e il servire te è regnare: noi ti preghiamo che tu ci stabilisca nel tuo amore, perché sull'esempio del santo abate Giovanni Gualberto, rendendo bene per male e benedizioni per maledizioni, otteniamo da te perdono e pace."),
                array('ending')
            )
        ),
        "0713a"=>array(
            array(
                array('','',"O Dio, che hai colmato dei tuoi doni sant'Enrico e dalla regalità terrena lo hai innalzato alla corona eterna, assisti e proteggi i tuoi fedeli, perché tra le vicende del mondo corrano incontro a te nella giustizia e nella santità."),
                array('ending')
            )
        ),
        "0714a"=>array(
            array(
                array('','',"O Padre, che nel santo sacerdote Camillo de Lellis hai fatto risplendere la carità di Cristo verso gli infermi, infondi in noi lo Spirito del tuo amore, perché sappiamo riconoscerti e servirti nei nostri fratelli, e nell'ora della morte possiamo presentarci senza timore davanti a te."),
                array('ending')
            )
        ),
        "0715a"=>array(
            array(
                array('','',"Dio onnipotente, guarda a noi tuoi fedeli riuniti nel ricordo della nascita al cielo del vescovo san Bonaventura, e fa' che siamo illuminati dalla sua sapienza e stimolati dal suo serafico ardore."),
                array('ending')
            )
        ),
        "0716a"=>array(
            array(
                array('','',"Assisti i tuoi fedeli, Signore, nel cammino della vita, e per l'intercessione materna della beata Vergine Maria, fa' che giungiamo felicemente al tuo santo monte, Cristo Gesù, nostro Signore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0721a"=>array(
            array(
                array('','',"O Dio, che a gloria del tuo nome e a servizio dei fratelli hai dato al sacerdote san Lorenzo da Brindisi il tuo Spirito di consiglio e di fortezza, dona anche a noi la luce per conoscere la nostra missione e la forza per attuarla."),
                array('ending')
            )
        ),
        "0722a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, il tuo Figlio ha voluto affidare a Maria Maddalena il primo annunzio della gioia pasquale; fa' che per il suo esempio e la sua intercessione proclamiamo al mondo il Signore risorto, per contemplarlo accanto a te nella gloria."),
                array('ending')
            )
        ),
        "0723a"=>array(
            array(
                array('','',"Signore, nostro Dio, che hai rivelato a santa Brigida la sapienza della croce nella contemplazione amorosa della passione del tuo Figlio, concedi a noi tuoi fedeli di esultare di gioia nella manifestazione gloriosa del Signore risorto."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0725a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, tu hai voluto che san Giacomo, primo fra gli Apostoli, sacrificasse la vita per il vangelo; per la sua gloriose testimonianza conferma nella fede la tua Chiesa e sostienila sempre con la tua protezione."),
                array('ending')
            )
        ),
        "0726a"=>array(
            array(
                array('','',"Dio dei nostri padri, che ai santi Gioacchino e Anna hai dato il privilegio di avere come figlia Maria, madre del Signore, per loro intercessione concedi ai tuoi fedeli di godere i beni della salvezza eterna."),
                array('ending')
            )
        ),
        "0729a"=>array(
            array(
                array('','',"O Dio, che nella casa di Betania facesti trovare al tuo Figlio l'affetto dell'amicizia, le premure dell'ospitalità e l'adorante silenzio dell'ascolto, donaci di seguire il M<estro nell'ardore della contemplazione e nel fervore delle opere, perché un giorno egli stesso ci introduca come amici nelle dimore di pace del tuo regno."),
                array('ending')
            )
        ),
        "0730a"=>array(
            array(
                array('','',"O Dio, che nel vescovo sa Pietro Crisologo hai dato alla Chiesa un teologo insigne nell'incarnazione del Verbo, concedi a noi, che lo veneriamo protettore e maestro, di meditare nel cuore e di esprimere con le opere il suo mistero di salvezza."),
                array('ending')
            )
        ),
        "0731a"=>array(
            array(
                array('','',"O Dio, che a gloria del tuo nome hai suscitato nella Chiesa sant'Ignazio di Loyola, concedi anche a noi, con il suo aiuto e il suo esempio di combattere la buona battaglia del Vangelo, per ricevere in cielo la corona dei santi."),
                array('ending')
            )
        ),
        "0801a"=>array(
            array(
                array('','',"O Dio, che proponi alla tua Chiesa modelli sempre nuovi di vita cristiana, fa' che imitiamo l'ardore apostolico del santo vescovo Alfonso Maria de'Liguori nel servizio dei fratelli, per ricevere con lui il premio riservato ai tuoi servi fedeli."),
                array('ending')
            )
        ),
        "0802a"=>array(
            array(
                array('','',"Dio onnipotente, concedi ai tuoi fedeli di imitare la fortezza del vescovo sant'Eusebio, assertore intrepido della divinità del Cristo, perché nella ferma adesione alla fede, di egli fu maestro e testimone, possiamo entrare in comunione di vita con il nostro Signore Gesù Cristo, tuo Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0804a"=>array(
            array(
                array('','',"Dio onnipotente e misericordioso, che in san Giovanni Maria Vianney ci hai offerto un mirabile pastore, pienamente consacrato al servizio del tuo popolo, per la sua intercessione e il suo esempio fa' che dedichiamo la nostra vita per guadagnare a Cristo i fratelli e godere insieme con loro la gioia senza fine."),
                array('ending')
            )
        ),
        "0805a"=>array(
            array(
                array('','',"Perdona, o Padre, le colpe dei tuoi figli, e poiché non possiamo salvarci con le nostre opere, interceda per noi la Vergine Maria, madre del tuo Figlio e nostro Signore Gesù Cristo."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0806a"=>array(
            array(
                array('','',"O Dio, che nella gloriosa Trasfigurazione del Cristo Signore, hai confermato i misteri della fede con la testimonianza della legge e dei profeti e hai mirabilmente preannunziato la nostra definitiva adozione a tuoi figli, fa' che ascoltiamo la parola del tuo amatissimo Figlio per diventare coeredi della sua vita immortale."),
                array('ending')
            )
        ),
        "0807a"=>array(
            array(
                array('','',"O Dio, che hai dato al papa san Sisto II e ai suoi compagni martiri la forza di rischiare la propria vita per l'annunzio del Vangelo, concedi anche a noi di essere interiormente rinnovati dalla potenza del tuo Spirito, per diventare docili discepoli e forti testimoni della fede."),
                array('ending')
            )
        ),
        "0807b"=>array(
            array(
                array('','',"Dio, Padre misericordioso, che al sacerdote san Gaetano hai ispirato il proposito di vivere secondo il modello della comunità apostolica, per il suo esempio e la sua intercessione concedi anche a noi di confidare pienamente nella tua provvidenza e di cercare sempre il tuo regno."),
                array('ending')
            )
        ),
        "0808a"=>array(
            array(
                array('','',"Guida e proteggi, Signore, la tua Chiesa per i meriti e gli insegnamenti di san Domenico: egli, che fu insigne predicatore della tua verità, interceda come nostro patrono davanti a te."),
                array('ending')
            )
        ),
        "0810a"=>array(
            array(
                array('','',"O Dio, che hai comunicato l'ardore della tua carità al diacono san Lorenzo e lo hai reso fedele nel ministero e glorioso nel martirio, fa' che il tuo popolo segua i suoi insegnamenti e lo imiti nell'amore di Cristo e dei fratelli."),
                array('ending')
            )
        ),
        "0811a"=>array(
            array(
                array('','',"Dio misericordioso, che hai ispirato a santa Chiara un ardente amore per la povertà evangelica, per sua intercessione concedi anche a noi di seguire Cristo povero e umile, per godere della sua visione nella perfetta letizia del tuo regno."),
                array('ending')
            )
        ),
        "0813a"=>array(
            array(
                array('','',"La preziosa passione dei tuoi santi martiri Ponziano papa e Ippolito sacerdote, ci ottenga, Signore, il dono della tua amicizia e l'incrollabile fermezza della fede."),
                array('ending')
            )
        ),
        "0814a"=>array(
            array(
                array('','',"O Dio, che hai dato alla Chiesa e al mondo san Massimiliano Maria Kolbe, sacerdote e martire, ardente di amore per la Vergine Immacolata, interamente dedito alla missione apostolica e al servizio eroico del prossimo, per la sua intercessione concedi a noi, a gloria del tuo nome, di impegnarci senza riserva al bene dell'umanità per imitare, in vita e in morte, il Cristo tuo Figlio."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "0815a"=>array(
            array(
                array('','',"O Dio onnipotente ed eterno, che hai innalzato alla gloria del cielo in corpo ed anima l'immacolata Vergine Maria, madre di Cristo tuo Figlio, fa' che viviamo in questo mondo costantemente rivolti ai beni eterni, per condividere la sua stessa gloria."),
                array('ending')
            )
        ),
        "0816a"=>array(
            array(
                array('','',"Assisti, Signore, i tuoi fedeli, nel ricordo di santo Stefano, re di Ungheria; egli che guidò il suo popolo alla fede di Cristo sia nostro patrono presso di te nel cielo."),
                array('ending')
            )
        ),
        "0819a"=>array(
            array(
                array('','',"Signore Dio, che per opera del beato abate Bernardo Tolomei hai arricchito la tua Chiesa di una nuova famiglia monastica, fa' che, sostenuti dal suo esempio e dal suo aiuto, raggiungiamo quanto hai preparato per coloro che credono in te."),
                array('ending')
            )
        ),
        "0819b"=>array(
            array(
                array('','',"O Dio, che hai scelto il sacerdote Giovanni Eudes per fa conoscere le insondabili ricchezze di Cristo, concedi anche a noi di crescere nella tua sapienza, per vivere nella luce del Vangelo."),
                array('ending')
            )
        ),
        "0820a"=>array(
            array(
                array('','',"O Dio che hai suscitato nella tua Chiesa san Bernardo abate, come lampada che arde e risplende, fa' che per sua intercessione camminiamo sempre con lo stesso fervore di spirito, come figli della luce."),
                array('ending')
            )
        ),
        "0821a"=>array(
            array(
                array('','',"O Dio, che per difendere la fede cattolica e unificare ogni cosa nel Cristo hai animato del tuo Spirito di sapienza e di fortezza il papa san Pio X, fa' che alla luce dei suoi insegnamenti e del suo esempio, giungiamo al premio della vita eterna."),
                array('ending')
            )
        ),
        "0822a"=>array(
            array(
                array('','',"O Padre, che ci hai dato come nostra madre e regina le Vergine Maria, dalla quale nacque il Cristo, tuo Figlio, per sua intercessione donaci la gloria promessa ai tuoi figli nel regno dei cieli."),
                array('ending')
            )
        ),
        "0823a"=>array(
            array(
                array('','',"O Dio, che a santa Rosa da Lima, ardente del tuo amore, hai ispirato il proposito di rinunziare a un ideale terreno per dedicarsi interamente a te nell'austerità e nella preghiera, concedi anche a noi di seguire le vie della vita per dissetarci al torrente delle tue delizie."),
                array('ending')
            )
        ),
        "0824a"=>array(
            array(
                array('','',"Confermaci nella fede, o Padre, perché aderiamo a Cristo, tuo Figlio, con l'entusiasmo sincero di san Bartolomeo apostolo, e per sua intercessione fa' che la tua Chiesa si riveli al mondo come sacramento di salvezza."),
                array('ending')
            )
        ),
        "0825a"=>array(
            array(
                array('','',"O Dio, che hai colmato dei tuoi doni san Ludovico, e dalla regalità terrena lo hai innalzato alla corona eterna, fa' che per sua intercessione, cooperando all'edificazione della città terrena, teniamo viva la speranza della città eterna."),
                array('ending')
            )
        ),
        "0825b"=>array(
            array(
                array('','',"O Dio, che hai dato al tuo sacerdote san Giuseppe Calasanzio doni straordinari di carità e di pazienza per consacrare la sua vita all'insegnamento e all'educazione dei giovani, concedi a noi, che lo veneriamo maestro di sapienza, di essere come lui cooperatori della tua verità."),
                array('ending')
            )
        ),
        "0827a"=>array(
            array(
                array('','',"O Dio, consolatore degli afflitti, che hai esaudito le pie lacrime di santa Monica con la conversione del figlio Agostino, per la loro comune preghiera donaci una viva contrizione dei nostri peccati perché gustiamo la dolcezza del tuo perdono."),
                array('ending')
            )
        ),
        "0828a"=>array(
            array(
                array('','',"Suscita sempre nella tua Chiesa, Signore, lo Spirito che animò il tuo vescovo Agostino, perché anche noi, assetati della vera sapienza, non ci stanchiamo di cercare te, fonte viva dell'eterno amore."),
                array('ending')
            )
        ),
        "0829a"=>array(
            array(
                array('','',"O Dio, che a Cristo tuo Figlio hai dato come precursore, nella nascita e nella morte, san Giovanni Battista, concedi anche a noi di impegnarci generosamente nella testimonianza del tuo Vangelo, come egli immolò la sua vita per la verità e la giustizia."),
                array('ending')
            )
        ),
        "0903a"=>array(
            array(
                array('','',"O Dio, che guidi il tuo popolo con la soavità e la forza del tuo amore, per intercessione del papa san Gregorio Magno dona il tuo Spirito di sapienza a coloro che hai posto maestri e guide nella Chiesa, perché il progresso dei fedeli sia gioia eterna dei pastori."),
                array('ending')
            )
        ),
        "0908a"=>array(
            array(
                array('','',"Donaci, Signore, i tesori della tua misericordia e poiché la maternità della Vergine ha segnato l'inizio della nostra salvezza, la festa della sua Natività ci faccia crescere nell'unità e nella pace."),
                array('ending')
            )
        ),
        "0913a"=>array(
            array(
                array('','',"O Dio, sostegno e forza di chi spera in te, che ci hai dato in san Giovanni Crisòstomo un vescovo mirabile per l'eloquenza e per l'invitta costanza nelle persecuzioni, fa' che il popolo cristiano, illuminato dalla sua dottrina, sappia imitare la sua fortezza evangelica."),
                array('ending')
            )
        ),
        "0914a"=>array(
            array(
                array('','',"O Padre, che hai voluto salvare gli uomini con la Croce del Cristo tuo Figlio, concedi a noi che abbiamo conosciuto in terra il suo mistero d'amore, di godere in cielo i frutti della redenzione."),
                array('ending')
            )
        ),
        "0915a"=>array(
            array(
                array('','',"O Padre, che accanto al tuo Figlio, innalzato sulla croce, hai voluto presente la sua Madre Addolorata: fa' che la santa Chiesa, associata con lei alla passione del Cristo, partecipi alla gloria della risurrezione."),
                array('ending')
            )
        ),
        "0916a"=>array(
            array(
                array('','',"O Dio, che hai dato al tuo popolo i santi Cornelio e Cipriano, pastori generosi e martiri intrepidi, con il loro aiuto rendici forti e perseveranti nella fede, per collaborare assiduamente all'unità della Chiesa."),
                array('ending')
            )
        ),
        "0917a"=>array(
            array(
                array('','',"O Dio, che hai infiammato del tuo amore l'ardente desiderio della santa vergine Ildegarda per sollevarla alla contemplazione della tua luminosa maestà divina, concedi anche a noi, per sua intercessione, di crescere nella dottrina spirituale e nella perfezione della vita monastica."),
                array('ending')
            )
        ),
        "0917b"=>array(
            array(
                array('','',"O Dio, che per il rinnovamento spirituale della Chiesa ci hai dato nel vescovo san Roberto Bellarmino un maestro e modello di virtù cristiana, fa' che per sua intercessione possiamo custodire l'integrità della fede a cui egli dedicò tutta la sua vita."),
                array('ending')
            )
        ),
        "0918a"=>array(
            array(
                array('','',"O Dio, hai fatto risplendere di mirabili virtù il beato papa Vittore III nell'adempimento del compito abbaziale e nell'esercizio del supremo pontificato; per la sua intercessione concedi a noi un perseverante impegno nel tendere alla perfezione evangelica e nel promuovere la santificazione del popolo."),
                array('ending')
            )
        ),
        "0919a"=>array(
            array(
                array('','',"O Signore, concedi al tuo popolo che si allieta nel ricordo del martire san Gennaro, di godere in terra della sua protezione e di condividere il suo trionfo nel cielo."),
                array('ending')
            )
        ),
        "0921a"=>array(
            array(
                array('','',"O Dio, che nel disegno della tua misericordia hai scelto Matteo il pubblicano e lo hai costituito apostolo del Vangelo, concedi anche a noi, per il suo esempio e la sua intercessione, di corrispondere alla vocazione cristiana e di seguirti fedelmente in tutti i giorni della nostra vita."),
                array('ending')
            )
        ),
        "0926a"=>array(
            array(
                array('','',"Ti glorifichi la Chiesa, Signore, nel santo ricordo dei martiri Cosma e Damiano; tu che hai dato loro la corona della gloria, nella tua provvidenza concedi a noi il conforto della loro protezione."),
                array('ending')
            )
        ),
        "0927a"=>array(
            array(
                array('','',"O Dio, che per il servizio dei poveri e la formazione dei tuoi ministri hai donato al tuo sacerdote san Vincenzo de'Paoli lo spirito degli Apostoli, fa' che, animati dallo stesso fervore, amiamo ciò che egli ha amato e mettiamo in pratica i suoi insegnamenti."),
                array('ending')
            )
        ),
        "0928a"=>array(
            array(
                array('','',"O Dio, che al martire san Venceslào hai dato il coraggio di anteporre il regno dei cieli al fascino del potere terreno, per la sua intercessione concedi anche a noi di vincere ogni forma di egoismo per aderire a te con tutto il cuore."),
                array('ending')
            )
        ),
        "0929a"=>array(
            array(
                array('','',"O Dio, che chiami gli Angeli e gli uomini a cooperare al tuo disegno di salvezza, concedi a noi pellegrini sulla terra la protezione degli spiriti beati, che in cielo stanno davanti a te per servirti e contemplano la gloria del tuo volto."),
                array('ending')
            )
        ),
        "0930a"=>array(
            array(
                array('','',"O Dio, che hai dato al sacerdote san Girolamo una conoscenza viva e penetrante della Sacra Scrittura, fa che il tuo popolo si nutra sempre più largamente della tua parola, e trovi in essa una sorgente di vita."),
                array('ending')
            )
        ),
        "1001a"=>array(
            array(
                array('','',"O Dio, nostro Padre, che apri le porte del tuo regno agli umili e ai piccoli, fa' che seguiamo con serena fiducia la via tracciata da santa Teresa di Gesù Bambino, perché anche a noi si riveli la gloria del tuo volto."),
                array('ending')
            )
        ),
        "1002a"=>array(
            array(
                array('','',"O Dio, che nella tua misteriosa provvidenza mandi dal cielo i tuoi Angeli a nostra custodia e protezione, fa' che nel cammino della vita siamo sempre sorretti dal loro aiuto per essere uniti con loro nella gioia eterna."),
                array('ending')
            )
        ),
        "1004a"=>array(
            array(
                array('','',"O Dio, che in san Francesco d'Assisi, povero e umile, hai offerto alla tua Chiesa una viva immagine del Cristo, concedi anche a noi di seguire il tuo Figlio nella via del Vangelo e di unirci a te in carità e letizia."),
                array('ending')
            )
        ),
        "1006a"=>array(
            array(
                array('','',"O Dio, che hai chiamato san Bruno a servirti nel silenzio e nella solitudine, per la sua intercessione e il suo esempio donaci di conservare, nella dispersione della vita quotidiana, una continua unione con te."),
                array('ending')
            )
        ),
        "1007a"=>array(
            array(
                array('','',"Infondi nel nostro spirito la tua grazia, o Padre; tu che nell'annunzio dell'angelo ci hai rivelato l'incarnazione del tuo Figlio, per la sua passione e la sua croce, con l'intercessione della Beata Vergine Maria, guidaci alla gloria della risurrezione."),
                array('ending')
            )
        ),
        "1008a"=>array(
            array(
                array('','',"Signore, ti preghiamo che, per l'intercessione della nostra particolare patrona santa Giustina, vergine e martire, tu ci conceda di imitare il suo fulgido esempio di castità e di fortezza."),
                array('ending')
            )
        ),
        "1009a"=>array(
            array(
                array('','',"O Dio, che hai mandato il vescovo san Dionigi e i suoi compagni a predicare il tuo Vangelo ai popoli pagani, e li hai resi intrepidi nella prova del martirio, concedi a noi, per loro intercessione, di non esaltarci nei successi e di non perderci d'animo nelle difficoltà della vita."),
                array('ending')
            )
        ),
        "1009b"=>array(
            array(
                array('','',"O Dio, fonte di ogni bene, che hai ispirato al sacerdote san Giovanni Leonardi il vivo desiderio di portare a tutti i popoli il tuo Vangelo, fa' che per tua intercessione si diffonda sempre e in ogni luogo la vera fede di Cristo."),
                array('ending')
            )
        ),
        "1014a"=>array(
            array(
                array('','',"Ascolta, Signore, la preghiera che il popolo cristiano innalza a te nel glorioso ricordo di san Callisto papa e martire e per la sua intercessione guidaci e sostienici nel cammino della vita."),
                array('ending')
            )
        ),
        "1015a"=>array(
            array(
                array('','',"O Padre, che per mezzo del tuo Spirito hai suscitato nella Chiesa santa Teresa d'Avila per indicare una via nuova nella ricerca della perfezione, concedi a noi, tuoi fedeli, di nutrirci spiritualmente della sua dottrina e di essere infiammati da un vivo desiderio di santità."),
                array('ending')
            )
        ),
        "1016a"=>array(
            array(
                array('','',"O Dio, che in santa Edvige hai dato al popolo cristiano un luminoso esempio di umiltà evangelica, per la sua gloriosa intercessione guidaci nel cammino verso la patria del cielo."),
                array('ending')
            )
        ),
        "1016b"=>array(
            array(
                array('','',"Effondi su di noi, Signore, lo spirito di santità che hai donato a santa Margherita Maria, perché possiamo conoscere l'amore del Cristo, che supera ogni conoscenza, e godere la pienezza della vita divina."),
                array('ending')
            )
        ),
        "1017a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che nel sacrificio del martiri edifichi la tua Chiesa, mistico corpo del Cristo, fa' che la gloriosa passione che meritò a sant'Ignazio una corona immortale, ci renda sempre forti nella fede."),
                array('ending')
            )
        ),
        "1018a"=>array(
            array(
                array('','',"Signore Dio nostro, che hai scelto san Luca per rivelare al mondo con la predicazione e con gli scritti il mistero della tua predilezione per i poveri, fa' che i cristiani formino un cuor solo e un'anima sola, e tutti i popoli vedano la tua salvezza."),
                array('ending')
            )
        ),
        "1019a"=>array(
            array(
                array('','',"O Dio, che hai consacrato le primizie della fede nelle regioni settentrionali dell'America, con la predicazione e il martirio dei santi Giovanni e Isacco e dei loro compagni, fa' che nel mistico campo della Chiesa il germe fecondato da loro sacrificio fruttifichi in larga messe di vita cristiana."),
                array('ending')
            )
        ),
        "1019b"=>array(
            array(
                array('','',"O Padre, che hai ispirato a san Paolo della Croce un grande amore per la passione del tuo Figlio, fa' che sorretti dal suo esempio e dalla sua intercessione non esitiamo ad abbracciare la nostra croce."),
                array('ending')
            )
        ),
        "1023a"=>array(
            array(
                array('','',"O Dio, che hai scelto san Giovanni da Capestrano per rincuorare il popolo cristiano nell'ora della prova, custodisci la tua Chiesa nella pace, e donale sempre il conforto della tua protezione."),
                array('ending')
            )
        ),
        "1024a"=>array(
            array(
                array('','',"O Dio, che nel vescovo sant'Antonio Maria Claret hai dato alla tua Chiesa un mirabile esempio di carità e di pazienza, concedi anche a noi di cercare sempre il tuo regno e di lavorare alacremente per guadagnare i fratelli a Cristo Signore."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "1028a"=>array(
            array(
                array('','',"O Dio, che per mezzo degli Apostoli ci hai fatto conoscere il tuo mistero di salvezza, per l'intercessione dei santi Simone e Giuda concedi alla tua Chiesa di crescere continuamente con l'adesione di nuovi popoli al Vangelo."),
                array('ending')
            )
        ),
        "1101a"=>array(
            array(
                array('','',"Dio onnipotente ed eterno, che doni alla tua Chiesa la gioia di celebrare in un'unica festa i meriti e la gloria di tutti i Santi, concedi al tuo popolo, per la comune intercessione di tanti nostri fratelli, l'abbondanza della tua misericordia."),
                array('ending')
            )
        ),
        "1102a"=>array(
            array(
                array('','',"Ascolta, o Dio, la preghiera che la comunità dei credenti innalza a te nella fede del Signore risorto, e conferma in noi la beata speranza che insieme ai nostri fratelli defunti risorgeremo in Cristo a vita nuova."),
                array('ending')
            )
        ),
        "1103a"=>array(
            array(
                array('','',"O Dio, che attraverso una vita umile e nascosta hai guidato san Martino de Porres alla visione della tua gloria, donaci di seguire il suo esempio per essere uniti a lui nella luce dei santi."),
                array('ending')
            )
        ),
        "1104a"=>array(
            array(
                array('','',"Custodisci nel tuo popolo, o Padre, lo spirito che animò il vescovo san Carlo, perché la sua Chiesa si rinnovi incessantemente, e sempre più conforme al modello evangelico manifesti al mondo il vero volto del Cristo Signore."),
                array('ending')
            )
        ),
        "1107a"=>array(
            array(
                array('','',"Dio, Signore nostro, che hai ispirato al santo vescovo Willibrordo di farsi, per amore di Cristo, apostolo itinerante del Vangelo, concedici per sua intercessione, di perseverare stabili nella fede e forti nella speranza."),
                array('ending')
            )
        ),
        "1109a"=>array(
            array(
                array('','',"O Padre, che prepari il tempio della tua gloria con pietre vive e scelte, effondi sulla Chiesa il tuo Santo Spirito, perché edifichi il popolo dei credenti che formerà la Gerusalemme del cielo."),
                array('ending')
            )
        ),
        "1110a"=>array(
            array(
                array('','',"O Dio, che non permetti alle potenze del male di prevalere contro la tua Chiesa, fondata sulla roccia di Pietro, per l'intercessione del papa san Leone Magno fa' che resti salda nella tua verità e proceda sicura nella pace."),
                array('ending')
            )
        ),
        "1111a"=>array(
            array(
                array('','',"O Dio, che hai fatto risplendere la tua gloria nella vita e nella morte del vescovo san Martino, rinnova in noi i prodigi della tua grazia, perché né morte né vita ci possano mai separare del tuo amore."),
                array('ending')
            )
        ),
        "1112a"=>array(
            array(
                array('','',"O Dio, che per mezzo del santo abate Teodoro hai dato nuovo impulso e splendore alla vita cenobitica, fa' che noi, conformandoci alla passione di Cristo nella perseveranza, meritiamo di essere partecipi del suo regno."),
                array('','',"Egli è Dio e vive e regna con te nell'unità dello Spirito Santo, per tutti i secoli dei secoli.")
            )
        ),
        "1112b"=>array(
            array(
                array('','',"Suscita nella Chiesa, o Padre, il tuo Santo Spirito, che mosse il vescovo san Giòsafat a dare la vita per il suo popolo, perché fortificati dallo stesso Spirito, non esitiamo a donare la nostra vita per i fratelli."),
                array('ending')
            )
        ),
        "1113a"=>array(
            array(
                array('','',"O Dio, nella scuola del servizio divino, tu hai fatto fiorire innumerevoli schiere di monaci nell'unica santità e nell'inesauribile varietà dei tuoi doni: fa' che anche noi, camminando nella stessa via, ne imitiamo gli esempi e un giorno, presso di te, ne condividiamo la gioia."),
                array('ending')
            )
        ),
        "1114a"=>array(
            array(
                array('','',"O Dio onnipotente ed eterno, che esaudisci chi ti prega con vera fede, abbi pietà dei nostri fratelli e delle nostre sorelle, che col nome di Cristo sulle labbra si sono congedati da noi, e uniscili alla comunità dei tuoi santi."),
                array('ending')
            )
        ),
        "1115a"=>array(
            array(
                array('','',"O Dio, che hai reso grande il vescovo sant'Alberto nel ricercare l'armonia tra la sapienza umana e la verità rivelata, fa' che illuminati dal suo insegnamento, attraverso il progresso scientifico possiamo crescere nella tua conoscenza e nel tuo amore."),
                array('ending')
            )
        ),
        "1116a"=>array(
            array(
                array('','',"O Dio, che ti sei preparato una degna dimora nel cuore di santa Geltrude vergine, rischiara le nostre tenebre, perché possiamo gustare la gioia della tua viva presenza nel nostro spirito."),
                array('ending')
            )
        ),
        "1117a"=>array(
            array(
                array('','',"O Dio, che in santa Margherita di Scozia hai dato alla tua Chiesa un grande esempio di carità verso i poveri, per sua intercessione fa' che anche noi esprimiamo, nei rapporti con i nostri fratelli, l'immagine viva del tuo amore."),
                array('ending')
            )
        ),
        "1117b"=>array(
            array(
                array('','',"O Dio, che in sant'Elisabetta hai dato la grazia di riconoscere e onorare Cristo nei poveri, concedi anche a noi, per sua intercessione, di servire con instancabile carità coloro che si trovano nella sofferenza e nel bisogno."),
                array('ending')
            )
        ),
        "1118a"=>array(
            array(
                array('','',"Guida e sostieni, Signore, la tua Chiesa, che dalla predicazione degli apostoli Pietro e Paolo ha ricevuto il primo annunzio del Vangelo, e fa' che per il loro patrocinio progredisca nella fede e nell'amore, sino alla fine dei tempi."),
                array('ending')
            )
        ),
        "1119a"=>array(
            array(
                array('','',"O Dio, che per amorevole dono della tua pietà rivelasti alla santa vergine Metilde gli splendori e le armonie del tuo mondo divino, concedi che anche noi un giorno possiamo godere, nella visione svelata del cielo, quelle realtà che ora possediamo nella certezza della fede."),
                array('ending')
            )
        ),
        "1120a"=>array(
            array(
                array('','',"O Dio, hai concesso alla beata vergine Maria Fortunata di servirti con cuore umile e semplice; per i suoi meriti e la sua intercessione, donaci la grazia di praticare sempre l'umiltà del Vangelo."),
                array('ending')
            )
        ),
        "1121a"=>array(
            array(
                array('','',"Guarda, Signore, il tuo popolo riunito nel ricordo della beata Vergine Maria; fa' che per sua intercessione partecipi alla pienezza della tua grazia."),
                array('ending')
            )
        ),
        "1122a"=>array(
            array(
                array('','',"Ascolta, Signore, la nostra preghiera e per intercessione di santa Cecilia, vergine e martire, rendici degni di cantare le tue lodi."),
                array('ending')
            )
        ),
        "1123a"=>array(
            array(
                array('','',"O Dio, mirabile nei tuoi santi, benedici e rallegra la tua Chiesa nel glorioso ricordo del papa san Clemente I, che, sacerdote e martire del tuo Figlio, testimoniò con il sangue il mistero che celebrava e confermò con la vita l'annunzio del Vangelo."),
                array('ending')
            )
        ),
        "1124a"=>array(
            array(
                array('','',"O Dio, che nell'abate san Colombano hai felicemente congiunto il servizio apostolico e la fedele osservanza della vita monastica, concedi anche a noi, che lo veneriamo maestro e intercessore, di cercare te sopra ogni cosa e di lavorare assiduamente per l'edificazione della tua Chiesa."),
                array('ending')
            )
        ),
        "1126a"=>array(
            array(
                array('','',"O Dio, nostro Signore, che ponesti nell'animo del santo abate Silvestro l'anelito per la dolcezza della solitudine nel contesto di una operosa vita cenobitica, fa' che anche noi ti cerchiamo sempre con cuore sincero, e corriamo verso le dimore eterne nell'umile esercizio della carità fraterna."),
                array('ending')
            )
        ),
        "1130a"=>array(
            array(
                array('','',"Dio onnipotente, esaudisci la nostra preghiera nella festa dell'apostolo sant'Andrea; egli che fu annunziatore del Vangelo e pastore della tua Chiesa, sia sempre nostro intercessore nel cielo."),
                array('ending')
            )
        ),
        "1203a"=>array(
            array(
                array('','',"O Dio, che hai chiamato molti popoli dell'Oriente alla luce del Vangelo, con la predicazione apostolica di san Francesco Saverio, fa' che ogni comunità cristiana arda dello stesso fervore missionario, perché su tutta la terra la santa Chiesa si allieti di nuovi figli."),
                array('ending')
            )
        ),
        "1204a"=>array(
            array(
                array('','',"Signore, che in san Giovanni Damasceno hai dato alla tua Chiesa un insigne maestro della sapienza dei padri, fa' che la vera fede, che egli insegnò con gli scritti e con la vita, sia sempre nostra forza e nostra luce."),
                array('ending')
            )
        ),
        "1205a"=>array(
            array(
                array('','',"O Dio, che nell'abate san Saba donasti alla Chiesa un fervido fautore della vita monastica e un fermo assertore della vera dottrina, concedi a noi di vivere sempre la verità nella carità, e di servire te solo nella gioia inalterabile del tuo amore."),
                array('ending')
            )
        ),
        "1205b"=>array(
            array(
                array('','',"Signore, nostro Dio, fa' che imitiamo gli esempi del beato Placido Riccardi, monaco e sacerdote: così anche noi, partecipando con la pazienza alla passione del tuo Figlio, meriteremo di condividere la gloria del suo regno."),
                array('ending')
            )
        ),
        "1206a"=>array(
            array(
                array('','',"Assisti il tuo popolo, Dio misericordioso, e per l'intercessione del vescovo san Nicola, che veneriamo nostro protettore, salvaci da ogni pericolo nel cammino che conduce alla salvezza."),
                array('ending')
            )
        ),
        "1207a"=>array(
            array(
                array('','',"O Dio, che nel vescovo sant'Ambrogio ci hai dato un insigne maestro nella fede cattolica e un esempio di apostolica fortezza, suscita nella Chiesa uomini secondo il tuo cuore, che la guidino con coraggio e sapienza."),
                array('ending')
            )
        ),
        "1208a"=>array(
            array(
                array('','',"O Padre, che nell'Immacolata Concezione della Vergine hai preparato una degna dimora per il tuo Figlio, e in previsione della morte di lui l'hai preservata da ogni macchia di peccato, concedi anche a noi, per sua intercessione, di venire incontro a te in santità e purezza di spirito."),
                array('ending')
            )
        ),
        "1211a"=>array(
            array(
                array('','',"O Dio, fortezza e corona dei tuoi santi, concedi anche a noi, sull'esempio del papa san Damaso I, amoroso cultore delle memorie dei martiri, di onorare e imitare i gloriosi testimoni della nostra fede."),
                array('ending')
            )
        ),
        "1212a"=>array(
            array(
                array('','',"O Dio, che in santa Giovanna Francesca hai dato alla tua Chiesa un luminoso esempio di altissima contemplazione e di fede intrepida, nella vita familiare e monastica, concedi anche a noi di vivere fedelmente la nostra vocazione, perché risplenda nelle nostre opere la tua luce."),
                array('ending')
            )
        ),
        "1213a"=>array(
            array(
                array('','',"Riempi di gioia e di luce il tuo popolo, Signore, per l'intercessione gloriosa della santa vergine e martire Lucia, perché noi, che festeggiamo la sua nascita al cielo, possiamo contemplare con i nostri occhi la tua gloria."),
                array('ending')
            )
        ),
        "1214a"=>array(
            array(
                array('','',"O Dio, che hai guidato san Giovanni della Croce alla santa montagna che è Cristo, attraverso la notte oscura della rinuncia e l'amore ardente della croce, concedi a noi di seguirlo come maestro di vita spirituale, per giungere alla contemplazione della tua gloria."),
                array('ending')
            )
        ),
        "1221a"=>array(
            array(
                array('','',"O Dio, che hai suscitato in mezzo al tuo popolo san Pietro Canisio, sacerdote pieno di carità e sapienza, per confermare i fedeli nella dottrina cattolica, concedi a quanti cercano la verità, la gioia di trovarti e a coloro che credono, la perseveranza nella fede."),
                array('ending')
            )
        ),
        "1223a"=>array(
            array(
                array('','',"Concedi a noi, Signore, di progredire nella sapienza dei santi, sull'esempio del tuo sacerdote san Giovanni, perché, esercitando assiduamente la carità verso i nostri fratelli, nella sera della vita siamo accolti tra le braccia della tua misericordia."),
                array('ending')
            )
        ),
        "1226a"=>array(
            array(
                array('','',"Donaci, o Padre, di esprimere con la vita il mistero che celebriamo nel giorno natalizio di Santo Stefano primo martire e insegnaci ad amare anche i nostri nemici sull'esempio di colui che morendo pregò per i suoi persecutori."),
                array('ending')
            )
        ),
        "1227a"=>array(
            array(
                array('','',"O Dio, che per mezzo dell'apostolo Giovanni ci hai rivelato le misteriose profondità del tuo Verbo: donaci l'intelligenza penetrante della Parola di vita, che egli ha fatto risuonare nella tua Chiesa."),
                array('ending')
            )
        ),
        "1228a"=>array(
            array(
                array('','',"Signore nostro Dio, che oggi nei santi Innocenti sei stato glorificato non a parole, ma col sangue, concedi anche a noi di esprimere nella vita la fede che professiamo con le labbra."),
                array('ending')
            )
        ),
        "1229b"=>array(
            array(
                array('','',"O Dio, che hai dato al vescovo san Tommaso Becket il privilegio di versare il sangue per la giustizia e la libertà della Chiesa, concedi anche a noi di essere pronti, per amore del Cristo, a perdere la vita in questo mondo per ritrovarla nel regno dei cieli."),
                array('ending')
            )
        ),
        "1231b"=>array(
            array(
                array('','',"Assisti, Signore, il tuo popolo che confida nell'intercessione del papa san Silvestro I, perché, nel cammino della vita, goda sempre della tua guida e giunga felicemente alla città dei santi."),
                array('ending')
            )
        )  
    );

    protected $litio;
    protected $actual;

    function __construct($caller) {

        $this->litio=$caller;
        $this->actual=$caller->actual;      
        $this->actual['orazione']="";
        $this->actual['proprio']="";

        $this->info['testo']=new Saltesto();
        $this->info['parte']='OR';
        $this->info['testo']->setParte('OR');

        $this->info['testo']->addLabel('ending',$this->ending);

        $this->build();
    }

    function build() {

        //di default attribuisco il salterio
        if ($this->actual['weekDay']!=0) {
            if ($this->actual['ora']=='terza') $this->actual['orazione']='terza_'.$this->actual['weekDay'];
            elseif ($this->actual['ora']=='sesta') $this->actual['orazione']='sesta_'.$this->actual['weekDay'];
            elseif ($this->actual['ora']=='nona') $this->actual['orazione']='nona_'.$this->actual['weekDay'];
            //Compieta dopo i Primi Vespri di una solennità infrasettimanale
            elseif ($this->actual['ora']=='comp1') $this->actual['orazione']='comp_S';
            elseif ($this->actual['ora']=='comp' || $this->actual['ora']=='comp2') {
                if ( ($this->actual['evCode']!="" && $this->actual['evento'][$this->actual['evCode']]['tipo']=='S') || ($this->actual['fesCode']!="" && $this->actual['festa'][$this->actual['fesCode']]['tipo']=='S')) {
                    $this->actual['orazione']='comp_S';
                }
                else {
                    $this->actual['orazione']='comp_'.$this->actual['weekDay'];
                }
            }
            else $this->actual['orazione']=$this->actual['ora'].'_'.$this->actual['weekDay'].'_'.$this->actual['quarto'];
        }

        //###############################
        //domeniche
        else {
            if ($this->actual['ora']=='comp1') {
                if ( ($this->actual['evCode']!="" && $this->actual['evento'][$this->actual['evCode']]['tipo']=='S') || ($this->actual['fesCode']!="" && $this->actual['festa'][$this->actual['fesCode']]['tipo']=='S')) {
                    $this->actual['orazione']='comp_S';
                }
                else {
                    $this->actual['orazione']='comp1_'.$this->actual['weekDay'];
                }
            }
            elseif ($this->actual['ora']=='comp') {
                if ( ($this->actual['evCode']!="" && $this->actual['evento'][$this->actual['evCode']]['tipo']=='S') || ($this->actual['fesCode']!="" && $this->actual['festa'][$this->actual['fesCode']]['tipo']=='S')) {
                    $this->actual['orazione']='comp_S';
                }
                else {
                    $this->actual['orazione']='comp_'.$this->actual['weekDay'];
                }
            }
            else $this->actual['orazione']='sun_'.$this->actual['settimana'];

        }
        //###############################
		//se è compieta l'orazione non subisce variazioni in base alla ricorrenza
		if ($this->actual['ora']=='comp' || $this->actual['ora']=='comp1' || $this->actual['ora']=='comp2') {
			$this->apply();
			return;
		}
		//###############################
	
        if ($this->actual['tempo']=='O') {

            //presentazione del Signore
            if ($this->actual['evCode']=='0202a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0202a';
            }
            //santa Scolastica
            elseif ($this->actual['evCode']=='0210a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0210a';
            }
            //San Giuseppe sposo della B.V. Maria
            elseif ($this->actual['evCode']=='0319a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0319a';
            }
            //Transito S. Benedetto
            elseif ($this->actual['evCode']=='0321a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0321a';
            }
            //Annunciazione del Signore
            elseif ($this->actual['evCode']=='0325a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0325a';
            }
            //Natività di San Giovanni Battista
            elseif ($this->actual['evCode']=='0624a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0624a';
            }
            //Santi Pietro e Paolo apostoli
            elseif ($this->actual['evCode']=='0629a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0629a';
            }
            //Nostro Santo Padre Benedetto (Abate) - Patrono d'Europa
            elseif ($this->actual['evCode']=='0711a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0711a';
            }
            //Trasfigurazione del Signore
            elseif ($this->actual['evCode']=='0806a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0806a';
            }
            //Assunzione della Beata Vergine Maria
            elseif ($this->actual['evCode']=='0815a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0815a';
            }
            //Esaltazione della Santa Croce
            elseif ($this->actual['evCode']=='0914a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='0914a';
            }
            //Tutti i Santi
            elseif ($this->actual['evCode']=='1101a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='1101a';
            }
            //Battesimo del Signore
            elseif ($this->actual['evCode']=='BAT') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='BAT';
            }
            //Pentecoste
            elseif ($this->actual['evCode']=='PEN') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='PEN';
            }
            //Sacratissimo cuore di Gesù
            elseif ($this->actual['evCode']=='SCG') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='SCG';
            }
            //Ss. Trinità
            elseif ($this->actual['evCode']=='TRI') {               
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='TRI';
            }
            //Corpus Domini
            elseif ($this->actual['evCode']=='COD') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='COD';
            }
            //Nostro Signore Gesù Cristo Re dell'Universo
            elseif ($this->actual['evCode']=='GRE') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='GRE';
            }
            elseif ($this->actual['settimana']==1) {
                $this->actual['proprio']='sett_1';
            }
        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='A') {
            $this->actual['orazione']='A_'.$this->actual['settimana'].'_'.$this->actual['weekDay'];

            if ($this->actual['evCode']=='AV4') $this->actual['proprio']='AV4';
            elseif (substr($this->actual['today'],4,4)=='1217') $this->actual['proprio']='A1217';
            elseif (substr($this->actual['today'],4,4)=='1218') $this->actual['proprio']='A1218';
            elseif (substr($this->actual['today'],4,4)=='1219') $this->actual['proprio']='A1219';
            elseif (substr($this->actual['today'],4,4)=='1220') $this->actual['proprio']='A1220';
            elseif (substr($this->actual['today'],4,4)=='1221') $this->actual['proprio']='A1221';
            elseif (substr($this->actual['today'],4,4)=='1222') $this->actual['proprio']='A1222';
            elseif (substr($this->actual['today'],4,4)=='1223') $this->actual['proprio']='A1223';
            elseif (substr($this->actual['today'],4,4)=='1224') $this->actual['proprio']='A1224';

            elseif ($this->actual['evCode']=='1208a') {
                /*if ($this->actual['ora']=='lodi' || substr($this->actual['ora'],0,3)=='ves')*/ $this->actual['proprio']='1208a';
            }
        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='N') {

            if (substr($this->actual['today'],4,4)=='1225') {
                if ($this->actual['ora']=='ves1') $this->actual['proprio']='ves1_NAT';
                if ($this->actual['ora']=='lodi') $this->actual['proprio']='lodi_NAT';
                if ($this->actual['ora']=='terza' || $this->actual['ora']=='sesta' || $this->actual['ora']=='nona') $this->actual['proprio']='terza_NAT';
                if ($this->actual['ora']=='ves2') $this->actual['proprio']='terza_NAT';
            }
            elseif (substr($this->actual['today'],4,4)=='1229') {
                $this->actual['proprio']='N1229';
            }
            elseif (substr($this->actual['today'],4,4)=='1230') {
                $this->actual['proprio']='N1226';
            }
            elseif (substr($this->actual['today'],4,4)=='1231') {
                $this->actual['proprio']='N1231';
            }

            //////////////////////////////////////
            if ($this->actual['evCode']=='1226a') $this->actual['proprio']='1226a';
            elseif ($this->actual['evCode']=='1227a') $this->actual['proprio']='1227a';
            elseif ($this->actual['evCode']=='1228a') $this->actual['proprio']='1228a';

            //////////////////////////////////////
            if (substr($this->actual['today'],4,4)=='1226' && ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2')) $this->actual['proprio']='N1226';
            if (substr($this->actual['today'],4,4)=='1227' && ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2')) $this->actual['proprio']='lodi_NAT';
            if (substr($this->actual['today'],4,4)=='1228' && ($this->actual['ora']=='ves' || $this->actual['ora']=='ves2')) $this->actual['proprio']='terza_NAT';

            if ($this->actual['evCode']=='SAF') $this->actual['proprio']='SAF';
            if ($this->actual['evCode']=='MSS') $this->actual['proprio']='MSS';
            if ($this->actual['evCode']=='2DN') $this->actual['proprio']='2DN';

            if ($this->actual['evCode']=='F0102') $this->actual['proprio']='F0102';
            if ($this->actual['evCode']=='F0103') $this->actual['proprio']='F0103';
            if ($this->actual['evCode']=='F0104') $this->actual['proprio']='F0104';
            if ($this->actual['evCode']=='F0105') $this->actual['proprio']='F0105';
            if ($this->actual['evCode']=='EPI') $this->actual['proprio']='EPI';

            if (substr($this->actual['today'],4,4)>'0106' && substr($this->actual['today'],4,4)<'1225') {
                if (substr($this->actual['today'],4,4)=='0107') $this->actual['proprio']='N0107';
                if (substr($this->actual['today'],4,4)=='0108') $this->actual['proprio']='N0108';
                if (substr($this->actual['today'],4,4)=='0109') $this->actual['proprio']='N0109';
                if (substr($this->actual['today'],4,4)=='0110') $this->actual['proprio']='N0110';
                if (substr($this->actual['today'],4,4)=='0111') $this->actual['proprio']='N0111';
                if (substr($this->actual['today'],4,4)=='0112') $this->actual['proprio']='N0112';
            }

        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='Q') {

            if ($this->actual['evCode']=='CEN') $this->actual['proprio']='CEN';
            elseif ($this->actual['evCode']=='QC4') $this->actual['proprio']='lodi_1_1';
            elseif ($this->actual['evCode']=='QC5') $this->actual['proprio']='QC5';
            elseif ($this->actual['evCode']=='QC6') $this->actual['proprio']='QC6';

            //QU1 ... domeniche e Q11... lunedì prima settimana
            elseif (substr($this->actual['evCode'],0,1)=='Q') $this->actual['proprio']=$this->actual['evCode'];

            elseif ($this->actual['evCode']=='PAL') $this->actual['proprio']='PAL';
            elseif (substr($this->actual['evCode'],0,2)=='SS') {
                $this->actual['proprio']=$this->actual['evCode'];

                if ($this->actual['evCode']=='SS4' && substr($this->actual['ora'],0,3)=='ves') $this->actual['proprio']='ves_SS4';
            }

            if ($this->actual['evCode']=='0210a') $this->actual['proprio']=$this->actual['evCode'];
            elseif ($this->actual['evCode']=='0319a') $this->actual['proprio']=$this->actual['evCode'];
			//Transito S. Benedetto
            elseif ($this->actual['evCode']=='0321a') {
            	$this->actual['proprio']='0321a';
            }
            elseif ($this->actual['evCode']=='0325a') $this->actual['proprio']=$this->actual['evCode'];

        }

        //////////////////////////////////////////////////////////
        elseif ($this->actual['tempo']=='P') {

            if ($this->actual['evCode']!='') $this->actual['proprio']=$this->actual['evCode'];

            if ( ($this->actual['evCode']=='PA65' || $this->actual['evCode']=='PA66') && substr($this->actual['today'],4,4)>substr($this->actual['ASC'],4,4) ) {
                $this->actual['evCode'].='b';
            }

        }

        //////////////////////////////////////////////////////////
        //FESTE
        if ($this->actual['fesCode']!='') $this->actual['proprio']=$this->actual['fesCode'];

        
        //----------------------------------------------------------------------------

        $this->apply();
    }
	
	function apply() {
		
		if ($this->actual['proprio']!='') {
            if (isset($this->proprio[$this->actual['proprio']])) {
                foreach ($this->proprio[$this->actual['proprio']] as $k=>$t) {
                    $this->info['testo']->addBlock($t);
                }
            }
        }
        else {
            if (isset($this->orazioni[$this->actual['orazione']])) {
                foreach ($this->orazioni[$this->actual['orazione']] as $k=>$t) {
                    $this->info['testo']->addBlock($t);
                }
            }
        }

        $this->info['testo']->addBlock(array(array('','2',"Amen.")));
		
	}

    function draw() {

        echo '<div class="salResBlockTitle" style="margin-top:30px;">';
            echo $this->info['titolo'];
            //echo '<div>'.json_encode($this->actual).'</div>';
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