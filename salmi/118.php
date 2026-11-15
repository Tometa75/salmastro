<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 118 Meditazione della parola di Dio nella legge';

    //terza domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    elseif ($this->actual['tempo']=='A') {
        $this->antifona[0]=array(
            "I profeti",
            "l'avevano annunziato: il Salvatore nascerà dalla Vergine Maria."
        );
    }
    elseif ($this->actual['tempo']=='N') {
        $this->antifona[0]=array(
            "Giuseppe e Maria",
            "la madre di Gesù, erano pieni di meraviglia per quello che si diceva di lui."
        );
    }
    elseif ($this->actual['tempo']=='Q') {
        $this->antifona[0]=array(
            "Ecco",
            "i giorni della penitenza, tempo di perdono e di salvezza."
        );
    }
    else {
        if ($this->actual['weekDay']==0) {
            $this->antifona[0]=array(
                "Corro",
                "la via dei tuoi precetti, perché hai dilatato il mio cuore."
            );
        }
        else if ($this->actual['weekDay']==1) {
            $this->antifona[0]=array(
                "Beato",
                "chi ascolta la parola di Dio, e la custodisce nel suo cuore."
            );
        }
        else if ($this->actual['weekDay']==2) {
            $this->antifona[0]=array(
                "Cieli e terra",
                "passeranno: le mie parole non passeranno, dice il Signore."
            );
        }
        else if ($this->actual['weekDay']==3) {
            $this->antifona[0]=array(
                "Quanto amo",
                "la tua legge, Signore: dolci al mio palato le tue parole."
            );
        }
        else if ($this->actual['weekDay']==4) {
            $this->antifona[0]=array(
                "Prendimi",
                "secondo la tua parola, o Dio, e avrò la vita; non deludere la mia speranza."
            );
        }
        else if ($this->actual['weekDay']==5) {
            $this->antifona[0]=array(
                "Purissima",
                "è la tua parola, il tuo servo la predilige."
            );
        }
        else if ($this->actual['weekDay']==6) {
            $this->antifona[0]=array(
                "La mia lingua",
                "canti le tue parole: la tua legge è tutta la mia gioia."
            );
        }
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        '1'=>array(
            array(
                array('','N',"1 - ALEF"),
                array('','*',"Beato l'uomo di integra condotta,"),
                array('','2',"che cammina nella legge del Signore."),
                array('','*',"Beato chi è fedele ai suoi insegnamenti"),
                array('','2',"e lo cerca con tutto il cuore.")
            ),
            array(
                array('','*',"Non commette ingiustizie,"),
                array('','2',"cammina per le sue vie."),
                array('','*',"Tu hai dato i tuoi precetti"),
                array('','2',"perché siano osservati fedelmente.")
            ),
            array(
                array('','*',"Siano diritte le mie vie,"),
                array('','2',"nel custodire i tuoi decreti."),
                array('','*',"Non dovrò arrossire"),
                array('','2',"se avrò obbedito ai tuoi comandi.")
            ),
            array(
                array('','*',"Ti loderò con cuore sincero,"),
                array('','2',"quando avrò appreso le tue giuste sentenze."),
                array('','*',"Voglio osservare i tuoi decreti:"),
                array('','2',"non abbandonarmi mai.")
            )
        ),
        '2'=>array(
            array(
                array('','N',"2 - BET"),
                array('','*',"Come potrà un giovane tenere pura la sua via?"),
                array('','2',"custodendo le tue parole."),
                array('','*',"Con tutto il cuore ti cerco:"),
                array('','2',"non farmi deviare dai tuoi precetti.")
            ),
            array(
                array('','*',"Conservo nel cuore le tue parole,"),
                array('','2',"per non offenderti con il peccato."),
                array('','*',"Benedetto sei tu, Signore;"),
                array('','2',"mostrami il tuo volere.")
            ),
            array(
                array('','*',"Con le mie labbra ho enumerato,"),
                array('','2',"tutti i giudizi della tua bocca."),
                array('','*',"Nel seguire i tuoi ordini è la mia gioia"),
                array('','2',"più che in ogni altro bene.")
            ),
            array(
                array('','*',"Voglio meditare i tuoi comandamenti,"),
                array('','2',"considerare le tue vie."),
                array('','*',"Nella tua volontà è la mia gioia;"),
                array('','2',"mai dimenticherò la tua parola.")
            )
        ),
        '3'=>array(
            array(
                array('','N',"3 - GHIMEL"),
                array('','*',"Sii buono con il tuo servo e avrò la vita,"),
                array('','2',"custodirò la tua parola."),
                array('','*',"Aprimi gli occhi"),
                array('','2',"perché io veda le meraviglie della tua legge.")
            ),
            array(
                array('','*',"Io sono straniero sulla terra,"),
                array('','2',"non nascondermi i tuoi comandi."),
                array('','*',"Io mi consumo nel desiderio dei tuoi precetti"),
                array('','2',"in ogni tempo.")
            ),
            array(
                array('','*',"Tu minacci gli orgogliosi;"),
                array('','2',"maledetto chi devia dai tuoi decreti."),
                array('','*',"Allontana da me vergogna e disprezzo,"),
                array('','2',"perché ho osservato le tue leggi.")
            ),
            array(
                array('','*',"Siedono i potenti, mi calunniano,"),
                array('','2',"ma il tuo servo medita i tuoi decreti."),
                array('','*',"Anche i tuoi ordini sono la mia gioia,"),
                array('','2',"miei consiglieri i tuoi precetti.")
            )
        ),
        '4'=>array(
            array(
                array('','N',"4 - DALET"),
                array('','*',"Io sono prostrato nella polvere;"),
                array('','2',"dammi vita secondo la tua parola."),
                array('','*',"Ti ho manifestato le mie vie e mi hai risposto;"),
                array('','2',"insegnami i tuoi voleri.")
            ),
            array(
                array('','*',"Fammi conoscere la via dei tuoi precetti"),
                array('','2',"e mediterò i tuoi prodigi."),
                array('','*',"Io piango nella tristezza;"),
                array('','2',"sollevami secondo la tua promessa.")
            ),
            array(
                array('','*',"Tieni lontana da me la via della menzogna,"),
                array('','2',"fammi dono della tua legge."),
                array('','*',"Ho scelto la via della giustizia,"),
                array('','2',"mi sono proposto i tuoi giudizi.")
            ),
            array(
                array('','*',"Ho aderito ai tuoi insegnamenti, Signore,"),
                array('','2',"che io non resti confuso."),
                array('','*',"corro per la via dei tuoi comandamenti,"),
                array('','2',"perché hai dilatato il mio cuore.")
            )
        ),
        '5'=>array(
            array(
                array('','N',"5 - HE"),
                array('','*',"Indicami, Signore, la via dei tuoi precetti"),
                array('','2',"e la seguirò sino alla fine."),
                array('','*',"Dammi intelligenza perché io osservi la tua legge"),
                array('','2',"e la custodisca con tutto il cuore.")
            ),
            array(
                array('','*',"Dirigimi sul sentiero dei tuoi comandi,"),
                array('','2',"perché in esso è la mia gioia."),
                array('','*',"Piega il mio cuore verso i tuoi insegnamenti"),
                array('','2',"e non verso la sete del guadagno.")
            ),
            array(
                array('','*',"Distogli i miei occhi dalle cose vane,"),
                array('','2',"fammi vivere sulla tua via."),
                array('','*',"Con il tuo servo sii fedele alla parola"),
                array('','2',"che hai data, perché ti si tema.")
            ),
            array(
                array('','*',"Allontana l'insulto che mi sgomenta,"),
                array('','2',"perché i tuoi giudizi sono buoni."),
                array('','*',"Ecco, desidero i tuoi comandamenti;"),
                array('','2',"per la tua giustizia fammi vivere.")
            )
        ),
        '6'=>array(
            array(
                array('','N',"6 - VAU"),
                array('','*',"Venga a me, Signore, la tua grazia,"),
                array('','2',"la tua salvezza secondo la tua promessa;"),
                array('','*',"a chi mi insulta darò una risposta,"),
                array('','2',"perché ho fiducia nella tua parola.")
            ),
            array(
                array('','*',"Non togliere mai dalla mia bocca la parola vera,"),
                array('','2',"perché confido nei tuoi giudizi."),
                array('','*',"Custodirò la tua legge per sempre,"),
                array('','2',"nei secoli, in eterno.")
            ),
            array(
                array('','*',"Sarò sicuro nel mio cammino,"),
                array('','2',"perché ho ricercato i tuoi voleri."),
                array('','*',"Davanti ai re parlerò della tua alleanza"),
                array('','2',"senza temere la vergogna.")
            ),
            array(
                array('','*',"Gioirò per i tuoi comandi"),
                array('','2',"che ho amati."),
                array('','*',"Alzerò le mani ai tuoi precetti che amo,"),
                array('','2',"mediterò le tue leggi.")
            )
        ),
        '7'=>array(
            array(
                array('','N',"7 - ZAIN"),
                array('','*',"Ricorda la promessa fatta al tuo servo,"),
                array('','2',"con la quale mi hai dato speranza."),
                array('','*',"Questo mi consola nella miseria:"),
                array('','2',"la tua parola mi fa vivere.")
            ),
            array(
                array('','*',"I superbi mi insultano aspramente,"),
                array('','2',"ma non devio dalla tua legge."),
                array('','*',"Ricordo i tuoi giudizi di un tempo, Signore,"),
                array('','2',"e ne sono consolato.")
            ),
            array(
                array('','*',"M'ha preso lo sdegno contro gli empi,"),
                array('','2',"che abbandonano la tua legge."),
                array('','*',"Sono canti per me i tuoi precetti,"),
                array('','2',"nella terra del mio pellegrinaggio.")
            ),
            array(
                array('','*',"Ricordo il tuo nome lungo la notte"),
                array('','2',"e osservo la tua legge, Signore."),
                array('','*',"Tutto questo mi accade"),
                array('','2',"perché ho custodito i tuoi precetti.")
            )
        ),
        '8'=>array(
            array(
                array('','N',"8 - HET"),
                array('','*',"La mia sorte, ho detto, Signore,"),
                array('','2',"è custodire le tue parole."),
                array('','*',"Con tutto il cuore ti ho supplicato,"),
                array('','2',"fammi grazia secondo la tua promessa.")
            ),
            array(
                array('','*',"Ho scrutato le mie vie,"),
                array('','2',"ho rivolto i miei passi verso i tuoi comandamenti."),
                array('','*',"Sono pronto e non voglio tardare"),
                array('','2',"a custodire i tuoi decreti.")
            ),
            array(
                array('','*',"I lacci degli empi mi hanno avvinto,"),
                array('','2',"ma non ho dimenticato la tua legge."),
                array('','*',"Nel cuore della notte mi alzo a renderti lode"),
                array('','2',"per i tuoi giusti decreti.")
            ),
            array(
                array('','*',"Sono amico di coloro che ti sono fedeli"),
                array('','2',"e osservano i tuoi precetti."),
                array('','*',"Del tuo amore, Signore, è piena la terra;"),
                array('','2',"insegnami il tuo volere.")
            )
        ),
        '9'=>array(
            array(
                array('','N',"9 - TET"),
                array('','*',"Hai fatto il bene al tuo servo, Signore,"),
                array('','2',"secondo al tua parola."),
                array('','*',"Insegnami il senno e la saggezza,"),
                array('','2',"perché ho fiducia nei tuoi comandamenti.")
            ),
            array(
                array('','*',"Prima di essere umiliato andavo errando,"),
                array('','2',"ma ora osservo la tua parola."),
                array('','*',"Tu sei buono e fai il bene,"),
                array('','2',"insegnami i tuoi decreti.")
            ),
            array(
                array('','*',"Mi hanno calunniato gli insolenti,"),
                array('','2',"ma io con tutto il cuore osservo i tuoi precetti."),
                array('','*',"Torpido come il grasso è il loro cuore,"),
                array('','2',"ma io mi diletto della tua legge.")
            ),
            array(
                array('','*',"Bene per me se sono stato umiliato,"),
                array('','2',"perché impari ad obbedirti."),
                array('','*',"La legge della tua bocca mi è preziosa"),
                array('','2',"più di mille pezzi d'oro e d'argento.")
            )
        ),
        '10'=>array(
            array(
                array('','N',"10 - IOD"),
                array('','*',"Le tue mani mi hanno fatto e plasmato;"),
                array('','2',"fammi capire e imparerò i tuoi comandi."),
                array('','*',"I tuoi fedeli al vedermi avranno gioia,"),
                array('','2',"perché ho sperato nella tua parola.")
            ),
            array(
                array('','*',"Signore, so che giusti sono i tuoi giudizi"),
                array('','2',"e con ragione mi hai umiliato."),
                array('','*',"Mi consoli la tua grazia,"),
                array('','2',"secondo la tua promessa al tuo servo.")
            ),
            array(
                array('','*',"Venga su di me la tua misericordia e avrò la vita,"),
                array('','2',"poiché la tua legge è la mia gioia."),
                array('','*',"Siano confusi i superbi che a torto mi opprimono;"),
                array('','2',"io mediterò la tua legge.")
            ),
            array(
                array('','*',"Si volgano a me i tuoi fedeli"),
                array('','2',"e quelli che conoscono i tuoi insegnamenti."),
                array('','*',"Sia integro il mio cuore nei tuoi precetti,"),
                array('','2',"perché non resti confuso.")
            )
        ),
        '11'=>array(
            array(
                array('','N',"11 - CAF"),
                array('','*',"Mi consumo nell'attesa della tua salvezza,"),
                array('','2',"spero nella tua parola."),
                array('','*',"Si consumano i miei occhi dietro la tua promessa,"),
                array('','2',"mentre dico: « Quando mi darai conforto? ».")
            ),
            array(
                array('','*',"Io sono come un otre esposto al fumo,"),
                array('','2',"ma non dimentico i tuoi insegnamenti."),
                array('','*',"Quanti saranno i giorni del tuo servo?"),
                array('','2',"Quando farai giustizia dei miei persecutori?")
            ),
            array(
                array('','*',"Mi hanno scavato fosse gli insolenti"),
                array('','2',"che non seguono la tua legge."),
                array('','*',"Verità sono tutti i tuoi comandi;"),
                array('','2',"a torto mi perseguitano: vieni in mio aiuto.")
            ),
            array(
                array('','*',"Per poco non mi hanno bandito dalla terra,"),
                array('','2',"ma io non ho abbandonato i tuoi precetti."),
                array('','*',"Secondo il tuo amore fammi vivere"),
                array('','2',"e osserverò le parole della tua bocca.")
            )
        ),
        '12'=>array(
            array(
                array('','N',"12 - LAMED"),
                array('','*',"La tua parola, Signore,"),
                array('','2',"è stabile come il cielo."),
                array('','*',"La tua fedeltà dura per ogni generazione;"),
                array('','2',"hai fondato la terra ed essa è salda.")
            ),
            array(
                array('','*',"Per tuo decreto tutto sussiste fino ad oggi,"),
                array('','2',"perché ogni cosa è al tuo servizio."),
                array('','*',"Se la tua legge non fosse la mia gioia,"),
                array('','2',"sarei perito nella mia miseria.")
            ),
            array(
                array('','*',"Mai dimenticherò i tuoi precetti:"),
                array('','2',"per essi mi fai vivere."),
                array('','*',"Io sono tuo: salvami,"),
                array('','2',"perché ho cercato il tuo volere.")
            ),
            array(
                array('','*',"Gli empi mi insidiano per rovinarmi,"),
                array('','2',"ma io medito i tuoi insegnamenti."),
                array('','*',"Di ogni cosa perfetta ho visto il limite,"),
                array('','2',"ma la tua legge non ha confini.")
            )
        ),
        '13'=>array(
            array(
                array('','N',"13 - MEM"),
                array('','*',"Quanto amo la tua legge, Signore;"),
                array('','2',"tutto il giorno la vado meditando."),
                array('','*',"Il tuo precetto mi fa più saggio dei miei nemici,"),
                array('','2',"perché sempre mi accompagna.")
            ),
            array(
                array('','*',"Sono più saggio di tutti i miei maestri,"),
                array('','2',"perché medito i tuoi insegnamenti."),
                array('','*',"Ho più senno degli anziani,"),
                array('','2',"perché osservo i tuoi precetti.")
            ),
            array(
                array('','*',"Tengo lontano i miei passi da ogni via di male,"),
                array('','2',"per custodire la tua parola."),
                array('','*',"Non mi allontano dai tuoi giudizi,"),
                array('','2',"perché sei tu ad istruirmi.")
            ),
            array(
                array('','*',"Quanto sono dolci al mio palato le tue parole:"),
                array('','2',"più del miele per la mia bocca."),
                array('','*',"Dai tuoi decreti ricevo intelligenza,"),
                array('','2',"per questo odio ogni via di menzogna.")
            )
        ),
        '14'=>array(
            array(
                array('','N',"14 - NUN"),
                array('','*',"Lampada per i miei passi è la tua parola,"),
                array('','2',"luce sul mio cammino."),
                array('','*',"Ho giurato, e lo confermo,"),
                array('','2',"di custodire i tuoi precetti di giustizia.")
            ),
            array(
                array('','*',"Sono stanco di soffrire, Signore,"),
                array('','2',"dammi vita secondo la tua parola."),
                array('','*',"Signore, gradisci le offerte delle mie labbra,"),
                array('','2',"insegnami i tuoi giudizi.")
            ),
            array(
                array('','*',"La mia vita è sempre in pericolo,"),
                array('','2',"ma non dimentico la tua legge."),
                array('','*',"Gli empi mi hanno teso i loro lacci,"),
                array('','2',"ma non ho deviato dai tuoi precetti.")
            ),
            array(
                array('','*',"Mia eredità per sempre sono i tuoi insegnamenti,"),
                array('','2',"sono essi la gioia del mio cuore."),
                array('','*',"Ho piegato il mio cuore ai tuoi comandamenti,"),
                array('','2',"in essi è la mia ricompensa per sempre.")
            )
        ),
        '15'=>array(
            array(
                array('','N',"15 - SAMECH"),
                array('','*',"Detesto gli animi incostanti,"),
                array('','2',"io amo la tua legge."),
                array('','*',"Tu sei mio rifugio e mio scudo,"),
                array('','2',"spero nella tua parola.")
            ),
            array(
                array('','*',"Allontanatevi da me, o malvagi,"),
                array('','2',"osserverò i precetti del mio Dio."),
                array('','*',"Sostienimi secondo la tua parola e avrò la vita,"),
                array('','2',"non deludermi nella mia speranza.")
            ),
            array(
                array('','*',"Sii tu il mio aiuto e sarò salvo,"),
                array('','2',"gioirò sempre nei tuoi precetti."),
                array('','*',"Tu disprezzi chi abbandona i tuoi decreti,"),
                array('','2',"perché la sua astuzia è fallace.")
            ),
            array(
                array('','*',"Consideri scorie tutti gli empi della terra,"),
                array('','2',"perciò amo i tuoi insegnamenti."),
                array('','*',"Tu fai fremere di spavento la mia carne,"),
                array('','2',"io temo i tuoi giudizi.")
            )
        ),
        '16'=>array(
            array(
                array('','N',"16 - AIN"),
                array('','*',"Ho agito secondo diritto e giustizia;"),
                array('','2',"non abbandonarmi ai miei oppressori."),
                array('','*',"Assicura il bene al tuo servo;"),
                array('','2',"non mi opprimano i superbi.")
            ),
            array(
                array('','*',"I miei occhi si consumano nell'attesa della tua salvezza"),
                array('','2',"e della tua parola di giustizia."),
                array('','*',"Agisci con il tuo servo secondo il tuo amore"),
                array('','2',"e insegnami i tuoi comandamenti.")
            ),
            array(
                array('','*',"Io sono tuo servo, fammi comprendere"),
                array('','2',"e conoscerò i tuoi insegnamenti."),
                array('','*',"È tempo che tu agisca, Signore;"),
                array('','2',"hanno violato la tua legge.")
            ),
            array(
                array('','*',"Perciò amo i tuoi comandamenti"),
                array('','2',"più dell'oro, più dell'oro fino."),
                array('','*',"Per questo tengo cari i tuoi precetti"),
                array('','2',"e odio ogni via di menzogna.")
            )
        ),
        '17'=>array(
            array(
                array('','N',"17 - PE"),
                array('','*',"Meravigliosa è la tua alleanza,"),
                array('','2',"per questo le sono fedele."),
                array('','*',"La tua parola nel rivelarsi illumina,"),
                array('','2',"dona saggezza ai semplici.")
            ),
            array(
                array('','*',"Apro anelante la bocca,"),
                array('','2',"perché desidero i tuoi comandamenti."),
                array('','*',"Volgiti a me e abbi misericordia,"),
                array('','2',"tu che sei giusto per chi ama il tuo nome.")
            ),
            array(
                array('','*',"Rendi saldi i miei passi secondo la tua parola"),
                array('','2',"e su di me non prevalga il male."),
                array('','*',"Salvami dall'oppressione dell'uomo"),
                array('','2',"e obbedirò ai tuoi precetti.")
            ),
            array(
                array('','*',"Fa' risplendere il tuo volto sul tuo servo"),
                array('','2',"e insegnami i tuoi comandamenti."),
                array('','*',"Fiumi di lacrime mi scendono dagli occhi,"),
                array('','2',"perché non osservano la tua legge.")
            )
        ),
        '18'=>array(
            array(
                array('','N',"18 - SADE"),
                array('','*',"Tu sei giusto, Signore,"),
                array('','2',"e retto nei tuoi giudizi."),
                array('','*',"Con giustizia hai ordinato le tue leggi"),
                array('','2',"e con fedeltà incomparabile.")
            ),
            array(
                array('','*',"Mi divora lo zelo della tua casa,"),
                array('','2',"perché i miei nemici dimenticano le tue parole."),
                array('','*',"Purissima è la tua parola,"),
                array('','2',"il tuo servo la predilige.")
            ),
            array(
                array('','*',"Io sono piccolo e disprezzato,"),
                array('','2',"ma non trascuro i tuoi precetti."),
                array('','*',"La tua giustizia è giustizia eterna"),
                array('','2',"e verità è la tua legge.")
            ),
            array(
                array('','*',"Angoscia e affanno mi hanno colto,"),
                array('','2',"ma i tuoi comandi sono la mia gioia."),
                array('','*',"Giusti sono i tuoi insegnamenti per sempre,"),
                array('','2',"fammi comprendere e avrò la vita.")
            )
        ),
        '19'=>array(
            array(
                array('','N',"19 - KOF"),
                array('','*',"T'invoco con tutto il cuore, Signore, rispondimi;"),
                array('','2',"custodirò i tuoi precetti."),
                array('','*',"Io ti chiamo, salvami,"),
                array('','2',"e seguirò i tuoi insegnamenti.")
            ),
            array(
                array('','*',"Precedo l'aurora e grido aiuto,"),
                array('','2',"spero sulla tua parola."),
                array('','*',"I miei occhi prevengono le veglie della notte"),
                array('','2',"per meditare sulle tue promesse.")
            ),
            array(
                array('','*',"Ascolta la mia voce, secondo la tua grazia;"),
                array('','2',"Signore, fammi vivere secondo il tuo giudizio."),
                array('','*',"A tradimento mi assediano i miei persecutori,"),
                array('','2',"sono lontani dalla tua legge.")
            ),
            array(
                array('','*',"Ma tu, Signore, sei vicino,"),
                array('','2',"tutti i tuoi precetti sono veri."),
                array('','*',"Da tempo conosco le tue testimonianze"),
                array('','2',"che hai stabilite per sempre.")
            )
        ),
        '20'=>array(
            array(
                array('','N',"20 - RES"),
                array('','*',"Vedi la mia miseria, salvami,"),
                array('','2',"perché non ho dimenticato la tua legge."),
                array('','*',"Difendi la mia causa, riscattami,"),
                array('','2',"secondo la tua parola fammi vivere.")
            ),
            array(
                array('','*',"Lontano dagli empi è la salvezza,"),
                array('','2',"perché non cercano il tuo volere."),
                array('','*',"Le tue misericordie sono grandi, Signore,"),
                array('','2',"secondo i tuoi giudizi fammi vivere.")
            ),
            array(
                array('','*',"Sono molti i persecutori che mi assalgono,"),
                array('','2',"ma io non abbandono le tue leggi."),
                array('','*',"Ho visto i ribelli e ne ho provato ribrezzo,"),
                array('','2',"perché non custodiscono la tua parola.")
            ),
            array(
                array('','*',"Vedi che io amo i tuoi precetti,"),
                array('','2',"Signore, secondo la tua grazia dammi vita."),
                array('','*',"La verità è principio della tua parola,"),
                array('','2',"resta per sempre ogni sentenza della tua giustizia.")
            )
        ),
        '21'=>array(
            array(
                array('','N',"21 - SIN"),
                array('','*',"I potenti mi perseguitano senza motivo,"),
                array('','2',"ma il mio cuore teme le tue parole."),
                array('','*',"Io gioisco per la tua promessa,"),
                array('','2',"come uno che trova grande tesoro.")
            ),
            array(
                array('','*',"Odio il falso e lo detesto,"),
                array('','2',"amo la tua legge."),
                array('','*',"sette volte al giorno io ti lodo"),
                array('','2',"per le sentenze della tua giustizia.")
            ),
            array(
                array('','*',"Grande pace per chi ama la tua legge,"),
                array('','2',"nel suo cammino non trova inciampo."),
                array('','*',"Aspetto da te la salvezza, Signore,"),
                array('','2',"e obbedisco ai tuoi comandi.")
            ),
            array(
                array('','*',"Io custodisco i tuoi insegnamenti"),
                array('','2',"e li amo sopra ogni cosa."),
                array('','*',"Osservo i tuoi decreti e i tuoi insegnamenti:"),
                array('','2',"davanti a te sono tutte le mie vie.")
            )
        ),
        '22'=>array(
            array(
                array('','N',"22 - TAU"),
                array('','*',"Giunga il mio grido fino a te, Signore,"),
                array('','2',"fammi comprendere secondo la tua parola."),
                array('','*',"Venga al tuo volto la mia supplica,"),
                array('','2',"salvami secondo la tua promessa.")
            ),
            array(
                array('','*',"Scaturisca dalle mie labbra la tua lode,"),
                array('','2',"poiché mi insegni i tuoi voleri."),
                array('','*',"La mia lingua canti le tue parole,"),
                array('','2',"perché sono giusti tutti i tuoi comandamenti.")
            ),
            array(
                array('','*',"Mi venga in aiuto la tua mano,"),
                array('','2',"poiché ho scelto i tuoi precetti."),
                array('','*',"Desidero la tua salvezza, Signore,"),
                array('','2',"e la tua legge è tutta la mia gioia.")
            ),
            array(
                array('','*',"Possa io vivere e darti lode,"),
                array('','2',"mi aiutino i tuoi giudizi."),
                array('','+',"Come pecora smarrita vado errando;"),
                array('','*',"cerca il tuo servo,"),
                array('','2',"perché non ho dimenticato i tuoi comandamenti.")
            )
        )
    );

}
?>