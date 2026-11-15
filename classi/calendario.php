<?php

class Calendario {

	//l'anno liturgico si intende da gennaio 01 alla prima di avvento esclusa
	//il battesimo di Gesù coincide con la prima domenica del tempo ordinario
	//RE (Cristo Re), corrisponde alla 34 domenica del tempo ordinario
	protected $info=array(
		"today"=>"",
		"anno"=>"",
		"capo"=>"",
		"battesimo"=>"",
		"ceneri"=>"",
		"qua1"=>"",
		"qua2"=>"",
		"qua3"=>"",
		"qua4"=>"",
		"qua5"=>"",
		"palme"=>"",
		"pasqua"=>"",
		"angelo"=>"",
		"pas2"=>"",
		"pas3"=>"",
		"pas4"=>"",
		"pas5"=>"",
		"pas6"=>"",
		"ascensione"=>"",
		"pentecoste"=>"",
		"trinita"=>"",
		"corpus"=>"",
		"cuore"=>"",
		"re"=>"",
		"avv1"=>"",
		"avv2"=>"",
		"avv3"=>"",
		"avv4"=>"",
		"natale"=>"",
		"fine"=>"",
		"annoLit"=>"",
		"pari"=>false
	);

	protected $map=array();

	protected $giornoSett=array('Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato');

	//celebrazioni che il calendario può spostare: nel giorno proprio (o il giorno dopo, se cade di domenica)
	//vengono offerte come alternativa nella tendina, se quel giorno non sono già la celebrazione del giorno
	protected $mobili=array(
		"0210a"=>array("titolo"=>"Santa Scolastica (Vergine)","tipo"=>"S","comune"=>"vergini","ppvv"=>true),
		"0319a"=>array("titolo"=>"San Giuseppe sposo della B.V. Maria","tipo"=>"S","ppvv"=>true),
		"0321a"=>array("titolo"=>"Transito del N.S. Padre Benedetto Abate","tipo"=>"F","comune"=>"monaci","ppvv"=>true),
		"0325a"=>array("titolo"=>"Annunciazione del Signore","tipo"=>"S","comune"=>"BVM","ppvv"=>true),
		"0624a"=>array("titolo"=>"Natività di San Giovanni Battista","tipo"=>"S","comune"=>"BVM","ppvv"=>true),
		"0629a"=>array("titolo"=>"Santi Pietro e Paolo apostoli","tipo"=>"S","comune"=>"apostoli","ppvv"=>true),
		"1208a"=>array("titolo"=>"Immacolata Concezione della Beata Vergine Maria","tipo"=>"S","ppvv"=>true)
	);
	protected $anni=array('A','B','C');
	protected $rifAnno=1999;

	//sono le feste nazionali x il calendario
	protected $festa=array(
		"0101"=>"Maria Santissima Madre di Dio",
		"0106"=>"Epifania del Signore",
		"0425"=>"Festa della liberazione",
		"0501"=>"Festa dei lavoratori",
		"0602"=>"Festa della Repubblica",
		"0815"=>"Assunzione della Beata Vergine Maria",
		"1101"=>"Solennità di tutti i Santi",
		"1208"=>"Immacolata Concezione",
		"1225"=>"Natale del Signore",
		"1226"=>"Santo Stefano"
	);

	//sono le feste per il Breviario
	//F=festa, S=solennità, M=Memoria, R=ricorrenza, X=nota
	protected $ricorrenza=array(
		"0102"=>array(
			"0102a"=>array(
				"titolo"=>"Santi Basilio Magno e Gregorio Nazianzeno (Vescovi e Dottori della Chiesa)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0103"=>array(
			"0103a"=>array(
				"titolo"=>"Santissimo nome di Gesù",
				"tipo"=>"X"
			)
		),
		"0107"=>array(
			"0107a"=>array(
				"titolo"=>"San Raimondo di Peñafort (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0110"=>array(
			"0110a"=>array(
				"titolo"=>"San Gregorio di Nissa (Vescovo)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0113"=>array(
			"0113a"=>array(
				"titolo"=>"Sant'Ilario (Vescovo e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0115"=>array(
			"0115a"=>array(
				"titolo"=>"Santi Mauro e Placido (Discepoli del N.S.P. Benedetto)",
				"tipo"=>"F",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"0117"=>array(
			"0117a"=>array(
				"titolo"=>"Sant'Antonio (Abate)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"0120"=>array(
			"0120a"=>array(
				"titolo"=>"San Fabiano (Papa e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			),
			"0120b"=>array(
				"titolo"=>"San Sebastiano (Martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0121"=>array(
			"0121a"=>array(
				"titolo"=>"Sant'Agnese (Vergine e martire)",
				"tipo"=>"M",
				"comune"=>"vergini",
				"mix"=>1
			)
		),
		"0122"=>array(
			"0122a"=>array(
				"titolo"=>"San Vincenzo (Diacono e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0124"=>array(
			"0124a"=>array(
				"titolo"=>"San Francesco di Sales (Vescovo e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0125"=>array(
			"0125a"=>array(
				"titolo"=>"Conversione di San Paolo apostolo",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"0126"=>array(
			"0126a"=>array(
				"titolo"=>"Santi Roberto, Alberico e Stefano (Abati di Citeaux)",
				"tipo"=>"R",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"0127"=>array(
			"0127a"=>array(
				"titolo"=>"Santi Timoteo e Tito (Vescovi)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			),
			"0127b"=>array(
				"titolo"=>"Sant'Angela Merici (Vergine)",
				"tipo"=>"R",
				"comune"=>"vergini",
				"mix"=>1
			)
		),
		"0128"=>array(
			"0128a"=>array(
				"titolo"=>"San Tommaso d'Aquino (Sacerdote e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0131"=>array(
			"0131a"=>array(
				"titolo"=>"San Giovanni Bosco (Sacerdote)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0203"=>array(
			"0203a"=>array(
				"titolo"=>"Sant'Ansgario - Oscar (Vescovo)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			),
			"0203b"=>array(
				"titolo"=>"San Biagio (Vescovo e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0205"=>array(
			"0205a"=>array(
				"titolo"=>"Sant'Agata (Vergine e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0206"=>array(
			"0206a"=>array(
				"titolo"=>"San Paolo Miki e compagni (martiri)",
				"tipo"=>"M",
				"comune"=>"martiri",
				"mix"=>1
			)
		),
		"0208"=>array(
			"0208a"=>array(
				"titolo"=>"San Girolamo Emiliani",
				"tipo"=>"R",
				"comune"=>"santi",
				"mix"=>1
			)
		),
		"0211"=>array(
			"0211a"=>array(
				"titolo"=>"San Benedetto di Aniano (Abate)",
				"tipo"=>"R",
				"comune"=>"monaci",
				"mix"=>1
			),
			"0211b"=>array(
				"titolo"=>"Beata Vergine Maria di Lourdes",
				"tipo"=>"R",
				"comune"=>"BVM",
				"mix"=>1
			)
		),
		"0214"=>array(
			"0214a"=>array(
				"titolo"=>"San Cirillo (Monaco) e Metodio (Vescovo) - Patroni d'Europa",
				"tipo"=>"F",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0217"=>array(
			"0217a"=>array(
				"titolo"=>"Sette santi fondatori dell'Ordine dei Servi della B.V. Maria",
				"tipo"=>"R",
				"comune"=>"religiosi",
				"mix"=>1
			)
		),
		"0221"=>array(
			"0221a"=>array(
				"titolo"=>"San Pier Damiani (Vescovo e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0222"=>array(
			"0222a"=>array(
				"titolo"=>"Cattedra di San Pietro apostolo",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"0223"=>array(
			"0223a"=>array(
				"titolo"=>"San Policarpo (Vescovo e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0304"=>array(
			"0304a"=>array(
				"titolo"=>"San Casimiro",
				"tipo"=>"R",
				"comune"=>"santi",
				"mix"=>1
			)
		),
		"0307"=>array(
			"0307a"=>array(
				"titolo"=>"Sante Perpetua e Felicita (Martiri)",
				"tipo"=>"M",
				"comune"=>"martiri",
				"mix"=>1
			)
		),
		"0308"=>array(
			"0308a"=>array(
				"titolo"=>"San Giovanni di Dio (Religioso)",
				"tipo"=>"R",
				"comune"=>"religiosi",
				"mix"=>1
			)
		),
		"0309"=>array(
			"0309a"=>array(
				"titolo"=>"Santa Francesca Romana (Religiosa)",
				"tipo"=>"M",
				"comune"=>"religiose",
				"mix"=>1
			)
		),
		"0317"=>array(
			"0317a"=>array(
				"titolo"=>"San Patrizio (Vescovo)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0318"=>array(
			"0318a"=>array(
				"titolo"=>"San Cirillo di Gerusalemme (Vescovo e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0323"=>array(
			"0323a"=>array(
				"titolo"=>"San Turibio de Mogrovejo (Vescovo)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0402"=>array(
			"0402a"=>array(
				"titolo"=>"San Francesco da Paola (Eremita)",
				"tipo"=>"R",
				"comune"=>"religiosi",
				"mix"=>1
			)
		),
		"0404"=>array(
			"0404a"=>array(
				"titolo"=>"Sant'Isidoro (Vescovo e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0405"=>array(
			"0405a"=>array(
				"titolo"=>"San Vincenzo Ferrer (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0407"=>array(
			"0407a"=>array(
				"titolo"=>"San Giovanni Battista de la Salle (Sacerdote)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0411"=>array(
			"0411a"=>array(
				"titolo"=>"San Stanislao (Vescovo e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0413"=>array(
			"0413a"=>array(
				"titolo"=>"San Martino I (Papa e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0421"=>array(
			"0421a"=>array(
				"titolo"=>"Sant'Anselmo (Vescovo e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0423"=>array(
			"0423a"=>array(
				"titolo"=>"Sant'Adalberto (Vescovo e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			),
			"0423b"=>array(
				"titolo"=>"San Giorgio (Martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0424"=>array(
			"0424a"=>array(
				"titolo"=>"San Fedele da Sigmaringen (Sacerdote e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0425"=>array(
			"0425a"=>array(
				"titolo"=>"San Marco Evangelista",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			),
			"0425b"=>array(
				"titolo"=>"Festa della Liberazione",
				"tipo"=>"X"
			)
		),
		"0428"=>array(
			"0428a"=>array(
				"titolo"=>"San Pietro Chanel (Sacerdote e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0429"=>array(
			"0429a"=>array(
				"titolo"=>"Santa Caterina da Siena (Vergine e dottore della Chiesa) - Patrona d'Italia",
				"tipo"=>"F",
				"comune"=>"vergini",
				"mix"=>1
			)
		),
		"0430"=>array(
			"0430a"=>array(
				"titolo"=>"San Pio V (Papa)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0501"=>array(
			"0501a"=>array(
				"titolo"=>"San Giuseppe lavoratore",
				"tipo"=>"R",
				"comune"=>"SG",
				"mix"=>1
			),
			"0501b"=>array(
				"titolo"=>"Festa dei lavoratori",
				"tipo"=>"X"
			)
		),
		"0502"=>array(
			"0502a"=>array(
				"titolo"=>"Sant'Atanasio (Vescovo e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0503"=>array(
			"0503a"=>array(
				"titolo"=>"Santi Filippo e Giacomo apostoli",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"0511"=>array(
			"0511a"=>array(
				"titolo"=>"Santi Oddone, Maiolo, Odilone, Ugo e Beato Pietro il venerabile (abati di Cluny)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"0512"=>array(
			"0512a"=>array(
				"titolo"=>"Santi Nereo e Achilleo (Martiri)",
				"tipo"=>"R",
				"comune"=>"martiri",
				"mix"=>1
			),
			"0512b"=>array(
				"titolo"=>"San Pancrazio (Martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0514"=>array(
			"0514a"=>array(
				"titolo"=>"San Mattia apostolo",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"0515"=>array(
			"0515a"=>array(
				"titolo"=>"San Pacomio (Abate)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"0518"=>array(
			"0518a"=>array(
				"titolo"=>"San Giovanni I (Papa e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0519"=>array(
			"0519a"=>array(
				"titolo"=>"San Pietro Celestino (Papa ed eremita)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0520"=>array(
			"0520a"=>array(
				"titolo"=>"San Bernardino da Siena (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0524"=>array(
			"0524a"=>array(
				"titolo"=>"San Gregorio VII (Papa)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0525"=>array(
			"0525a"=>array(
				"titolo"=>"San Beda il venerabile (Sacerdote e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0526"=>array(
			"0526a"=>array(
				"titolo"=>"San Filippo Neri (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			),
			"0526b"=>array(
				"titolo"=>"Santa Maria Maddalena de' Pazzi (Vergine)",
				"tipo"=>"R",
				"comune"=>"vergini",
				"mix"=>1
			)
		),
		"0527"=>array(
			"0527a"=>array(
				"titolo"=>"Sant'Agostino di Canterbury (Vescovo)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0531"=>array(
			"0531a"=>array(
				"titolo"=>"Visitazione della Beata Vergine Maria",
				"tipo"=>"F",
				"comune"=>"BVM",
				"mix"=>1
			)
		),
		"0601"=>array(
			"0601a"=>array(
				"titolo"=>"San Giustino (Martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0602"=>array(
			"0602a"=>array(
				"titolo"=>"Santi Marcellino e Pietro (Martiri)",
				"tipo"=>"R",
				"comune"=>"martiri",
				"mix"=>1
			),
			"0602b"=>array(
				"titolo"=>"Festa della Repubblica",
				"tipo"=>"X"
			)
		),
		"0603"=>array(
			"0603a"=>array(
				"titolo"=>"San Carlo Lwanga e compagni (martiri)",
				"tipo"=>"M",
				"comune"=>"martiri",
				"mix"=>1
			)
		),
		"0605"=>array(
			"0605a"=>array(
				"titolo"=>"San Bonifacio (Vescovo e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0606"=>array(
			"0606a"=>array(
				"titolo"=>"San Norberto (Vescovo)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0609"=>array(
			"0609a"=>array(
				"titolo"=>"Sant'Efrem (Diacono e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0611"=>array(
			"0611a"=>array(
				"titolo"=>"San Barnaba (Apostolo)",
				"tipo"=>"M",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"0613"=>array(
			"0613a"=>array(
				"titolo"=>"Sant'Antonio di Padova (Sacerdote e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0619"=>array(
			"0619a"=>array(
				"titolo"=>"San Romualdo (Abate)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"0621"=>array(
			"0621a"=>array(
				"titolo"=>"San Luigi Gonzaga (Religioso)",
				"tipo"=>"M",
				"comune"=>"religiosi",
				"mix"=>1
			)
		),
		"0622"=>array(
			"0622a"=>array(
				"titolo"=>"Santi Giovanni Fisher (Vescovo) e Tommaso More (Martiri)",
				"tipo"=>"R",
				"comune"=>"martiri",
				"mix"=>1
			),
			"0622b"=>array(
				"titolo"=>"San Paolino da Nola (Vescovo)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0625"=>array(
			"0625a"=>array(
				"titolo"=>"San Guglielmo (Abate)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"0627"=>array(
			"0627a"=>array(
				"titolo"=>"San Cirillo d'Alessandria (Vescovo e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0628"=>array(
			"0628a"=>array(
				"titolo"=>"Sant'Ireneo (Vescovo e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0630"=>array(
			"0630a"=>array(
				"titolo"=>"Santi primi Martiri della Chiesa di Roma",
				"tipo"=>"R",
				"comune"=>"martiri",
				"mix"=>1
			)
		),
		"0703"=>array(
			"0703a"=>array(
				"titolo"=>"San Tommaso apostolo",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"0704"=>array(
			"0704a"=>array(
				"titolo"=>"Santa Elisabetta di Portogallo",
				"tipo"=>"R",
				"comune"=>"sante",
				"mix"=>1
			)
		),
		"0705"=>array(
			"0705a"=>array(
				"titolo"=>"Sant'Antonio Maria Zaccaria (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0706"=>array(
			"0706a"=>array(
				"titolo"=>"Santa Maria Goretti (Vergine e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0712"=>array(
			"0712a"=>array(
				"titolo"=>"San Giovanni Gualberto (Abate)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"0713"=>array(
			"0713a"=>array(
				"titolo"=>"Sant'Enrico",
				"tipo"=>"R",
				"comune"=>"santi",
				"mix"=>1
			)
		),
		"0714"=>array(
			"0714a"=>array(
				"titolo"=>"San Camillo de Lellis (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"santi",
				"mix"=>1
			)
		),
		"0715"=>array(
			"0715a"=>array(
				"titolo"=>"San Bonaventura (Vescovo e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0716"=>array(
			"0716a"=>array(
				"titolo"=>"Beata Vergine Maria del monte Carmelo",
				"tipo"=>"R",
				"comune"=>"BVM",
				"mix"=>1
			)
		),
		"0721"=>array(
			"0721a"=>array(
				"titolo"=>"San Lorenzo da Brindisi (Sacerdote e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0722"=>array(
			"0722a"=>array(
				"titolo"=>"Santa Maria Maddalena",
				"tipo"=>"M",
				"comune"=>"sante",
				"mix"=>1
			)
		),
		"0723"=>array(
			"0723a"=>array(
				"titolo"=>"Santa Brigida (Religiosa)",
				"tipo"=>"R",
				"comune"=>"religiose",
				"mix"=>1
			)
		),
		"0725"=>array(
			"0725a"=>array(
				"titolo"=>"San Giacomo apostolo",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"0729"=>array(
			"0729a"=>array(
				"titolo"=>"Santi Marta, Maria e Lazzaro (Ospiti del Signore)",
				"tipo"=>"M",
				"comune"=>"santi",
				"mix"=>1
			)
		),
		"0730"=>array(
			"0730a"=>array(
				"titolo"=>"San Pietro Crisologo (Vescovo e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0731"=>array(
			"0731a"=>array(
				"titolo"=>"Sant'Ignazio di Loyola (Sacerdote)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0801"=>array(
			"0801a"=>array(
				"titolo"=>"Sant'Alfonso Maria de' Liguori (Vescovo e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0802"=>array(
			"0802a"=>array(
				"titolo"=>"Sant'Eusebio di Vercelli (Vescovo)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0804"=>array(
			"0804a"=>array(
				"titolo"=>"San Giovanni Maria Vianney (Sacerdote)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0805"=>array(
			"0805a"=>array(
				"titolo"=>"Dedicazione della Basilica di Santa Maria Maggiore",
				"tipo"=>"R",
				"comune"=>"BVM",
				"mix"=>1
			)
		),
		"0807"=>array(
			"0807a"=>array(
				"titolo"=>"San Sisto II (Papa) e Compagni (Martiri)",
				"tipo"=>"R",
				"comune"=>"martiri",
				"mix"=>1
			),
			"0807b"=>array(
				"titolo"=>"San Gaetano (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0808"=>array(
			"0808a"=>array(
				"titolo"=>"San Domenico (Sacerdote)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0810"=>array(
			"0810a"=>array(
				"titolo"=>"San Lorenzo (Diacono e martire)",
				"tipo"=>"F",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0811"=>array(
			"0811a"=>array(
				"titolo"=>"Santa Chiara (Vergine)",
				"tipo"=>"M",
				"comune"=>"vergini",
				"mix"=>1
			)
		),
		"0813"=>array(
			"0813a"=>array(
				"titolo"=>"Santi Ponziano (Papa) e Ippolito (Sacerdote) martiri",
				"tipo"=>"R",
				"comune"=>"martiri",
				"mix"=>1
			)
		),
		"0814"=>array(
			"0814a"=>array(
				"titolo"=>"San Massimiliano Maria Kolbe (Sacerdote e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0816"=>array(
			"0816a"=>array(
				"titolo"=>"Santo Stefano d'Ungheria",
				"tipo"=>"R",
				"comune"=>"santi",
				"mix"=>1
			)
		),
		"0819"=>array(
			"0819a"=>array(
				"titolo"=>"San Bernardo Tolomei (Abate)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			),
			"0819b"=>array(
				"titolo"=>"San Giovanni Eudes (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0820"=>array(
			"0820a"=>array(
				"titolo"=>"San Bernardo (Abate e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"0821"=>array(
			"0821a"=>array(
				"titolo"=>"San Pio X (Papa)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0822"=>array(
			"0822a"=>array(
				"titolo"=>"Beata Vergine Maria Regina",
				"tipo"=>"R",
				"comune"=>"BVM",
				"mix"=>1
			)
		),
		"0823"=>array(
			"0823a"=>array(
				"titolo"=>"Santa Rosa da Lima (Vergine)",
				"tipo"=>"R",
				"comune"=>"vergini",
				"mix"=>1
			)
		),
		"0824"=>array(
			"0824a"=>array(
				"titolo"=>"San Bartolomeo apostolo",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"0825"=>array(
			"0825a"=>array(
				"titolo"=>"San Ludovico",
				"tipo"=>"R",
				"comune"=>"santi",
				"mix"=>1
			),
			"0825b"=>array(
				"titolo"=>"San Giuseppe Calasanzio (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0827"=>array(
			"0827a"=>array(
				"titolo"=>"Santa Monica",
				"tipo"=>"M",
				"comune"=>"sante",
				"mix"=>1
			)
		),
		"0828"=>array(
			"0828a"=>array(
				"titolo"=>"Sant'Agostino (Vescovo e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0829"=>array(
			"0829a"=>array(
				"titolo"=>"Martirio di San Giovanni Battista",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0903"=>array(
			"0903a"=>array(
				"titolo"=>"San Gregorio Magno (Papa e dottore della Chiesa)",
				"tipo"=>"F",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0908"=>array(
			"0908a"=>array(
				"titolo"=>"Natività della Beata Vergine Maria",
				"tipo"=>"R",
				"comune"=>"BVM",
				"mix"=>1
			)
		),
		"0913"=>array(
			"0913a"=>array(
				"titolo"=>"San Giovanni Crisostomo (Vescovo e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0915"=>array(
			"0915a"=>array(
				"titolo"=>"Beata Vergine Maria Addolorata",
				"tipo"=>"M",
				"comune"=>"BVM",
				"mix"=>1
			)
		),
		"0916"=>array(
			"0916a"=>array(
				"titolo"=>"Santi Cornelio (Papa) e Cipriano (Vescovo) martiri",
				"tipo"=>"M",
				"comune"=>"martiri",
				"mix"=>1
			)
		),
		"0917"=>array(
			"0917a"=>array(
				"titolo"=>"Santa Ildegarda (Vergine)",
				"tipo"=>"R",
				"comune"=>"monaci",
				"mix"=>1
			),
			"0917b"=>array(
				"titolo"=>"San Roberto Bellarmino (Vescovo e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"0918"=>array(
			"0918a"=>array(
				"titolo"=>"Beato Vittore III (Papa)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0919"=>array(
			"0919a"=>array(
				"titolo"=>"San Gennaro (Vescovo e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0921"=>array(
			"0921a"=>array(
				"titolo"=>"San Matteo apostolo ed evangelista",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"0926"=>array(
			"0926a"=>array(
				"titolo"=>"Santi Cosma e Damiano (Martiri)",
				"tipo"=>"R",
				"comune"=>"martiri",
				"mix"=>1
			)
		),
		"0927"=>array(
			"0927a"=>array(
				"titolo"=>"San Vincenzo de' Paoli (Sacerdote)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"0928"=>array(
			"0928a"=>array(
				"titolo"=>"San Venceslao (Martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"0929"=>array(
			"0929a"=>array(
				"titolo"=>"San Michele e tutti i Santi Angeli",
				"tipo"=>"F",
				"comune"=>"MIC",
				"mix"=>1
			)
		),
		"0930"=>array(
			"0930a"=>array(
				"titolo"=>"San Girolamo (Sacerdote e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"1001"=>array(
			"1001a"=>array(
				"titolo"=>"Santa Teresa di Gesù Bambino (Vergine)",
				"tipo"=>"M",
				"comune"=>"vergini",
				"mix"=>1
			)
		),
		"1002"=>array(
			"1002a"=>array(
				"titolo"=>"Santi Angeli custodi",
				"tipo"=>"M",
				"comune"=>"ANG",
				"mix"=>1
			)
		),
		"1004"=>array(
			"1004a"=>array(
				"titolo"=>"San Francesco d'Assisi - Patrono d'Italia",
				"tipo"=>"F",
				"comune"=>"SFA",
				"mix"=>1
			)
		),
		"1006"=>array(
			"1006a"=>array(
				"titolo"=>"San Bruno (Eremita)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"1007"=>array(
			"1007a"=>array(
				"titolo"=>"Beata Vergine Maria del Rosario",
				"tipo"=>"M",
				"comune"=>"BVM",
				"mix"=>1
			)
		),
		"1008"=>array(
			"1008a"=>array(
				"titolo"=>"Santa Giustina (Vergine e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"1009"=>array(
			"1009a"=>array(
				"titolo"=>"San Dionigi (Vescovo) e compagni (Martiri)",
				"tipo"=>"R",
				"comune"=>"martiri",
				"mix"=>1
			),
			"1009b"=>array(
				"titolo"=>"San Giovanni Leonardi (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1014"=>array(
			"1014a"=>array(
				"titolo"=>"San Callisto I (Papa e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"1015"=>array(
			"1015a"=>array(
				"titolo"=>"Santa Teresa d'Avila (Vergine e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"vergini",
				"mix"=>1
			)
		),
		"1016"=>array(
			"1016a"=>array(
				"titolo"=>"Santa Edvige (Religiosa)",
				"tipo"=>"R",
				"comune"=>"religiose",
				"mix"=>1
			),
			"1016b"=>array(
				"titolo"=>"Santa Margherita Maria Alacoque (Vergine)",
				"tipo"=>"R",
				"comune"=>"vergini",
				"mix"=>1
			)
		),
		"1017"=>array(
			"1017a"=>array(
				"titolo"=>"Sant'Ignazio di Antiochia (Vescovo e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"1018"=>array(
			"1018a"=>array(
				"titolo"=>"San Luca evangelista",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"1019"=>array(
			"1019a"=>array(
				"titolo"=>"Santi Giovanni de Brébeuf e Isacco Jogues (Sacerdoti) e compagni (martiri)",
				"tipo"=>"R",
				"comune"=>"martiri",
				"mix"=>1
			),
			"1019b"=>array(
				"titolo"=>"San Paolo della Croce (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1023"=>array(
			"1023a"=>array(
				"titolo"=>"San Giovanni da Capestrano (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1024"=>array(
			"1024a"=>array(
				"titolo"=>"Sant'Antonio Maria Claret (Vescovo)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1028"=>array(
			"1028a"=>array(
				"titolo"=>"Santi Simone e Giuda apostoli",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"1102"=>array(
			"1102a"=>array(
				"titolo"=>"Commemorazione di tutti i fedeli defunti",
				"tipo"=>"M",
				"comune"=>"DEF",
				"mix"=>1
			)
		),
		"1103"=>array(
			"1103a"=>array(
				"titolo"=>"San Martino de Porres (Religioso)",
				"tipo"=>"R",
				"comune"=>"religiosi",
				"mix"=>1
			)
		),
		"1104"=>array(
			"1104a"=>array(
				"titolo"=>"San Carlo Borromeo (Vescovo)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1107"=>array(
			"1107a"=>array(
				"titolo"=>"San Willibrordo (Vescovo)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1109"=>array(
			"1109a"=>array(
				"titolo"=>"Dedicazione della Basilica Lateranense",
				"tipo"=>"F",
				"comune"=>"dedica",
				"mix"=>1
			)
		),
		"1110"=>array(
			"1110a"=>array(
				"titolo"=>"San Leone Magno (Papa e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1111"=>array(
			"1111a"=>array(
				"titolo"=>"San Martino di Tours (Vescovo)",
				"tipo"=>"F",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1112"=>array(
			"1112a"=>array(
				"titolo"=>"San Teodoro Studita (Abate)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			),
			"1112b"=>array(
				"titolo"=>"San Giosafat (Vescovo e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"1113"=>array(
			"1113a"=>array(
				"titolo"=>"Tutti i Santi Monaci",
				"tipo"=>"F",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"1114"=>array(
			"1114a"=>array(
				"titolo"=>"Commemorazione dei monaci defunti",
				"tipo"=>"M",
				"comune"=>"DEF",
				"mix"=>1
			)
		),
		"1115"=>array(
			"1115a"=>array(
				"titolo"=>"Sant'Alberto Magno (Vescovo e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"1116"=>array(
			"1116a"=>array(
				"titolo"=>"Santa Geltrude (Vergine)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"1117"=>array(
			"1117a"=>array(
				"titolo"=>"Santa Margherita di Scozia",
				"tipo"=>"R",
				"comune"=>"sante",
				"mix"=>1
			),
			"1117b"=>array(
				"titolo"=>"Santa Elisabetta d'Ungheria (Religiosa)",
				"tipo"=>"R",
				"comune"=>"sante",
				"mix"=>1
			)
		),
		"1118"=>array(
			"1118a"=>array(
				"titolo"=>"Dedicazione delle Basiliche dei Santi Pietro e Paolo apostoli",
				"tipo"=>"R",
				"comune"=>"dedica",
				"mix"=>1
			)
		),
		"1119"=>array(
			"1119a"=>array(
				"titolo"=>"Santa Metilde (Vergine)",
				"tipo"=>"R",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"1120"=>array(
			"1120a"=>array(
				"titolo"=>"Beata Maria Fortunata Viti (Vergine)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"1121"=>array(
			"1121a"=>array(
				"titolo"=>"Presentazione della Beata Vergine Maria",
				"tipo"=>"M",
				"comune"=>"BVM",
				"mix"=>1
			)
		),
		"1122"=>array(
			"1122a"=>array(
				"titolo"=>"Santa Cecilia (Vergine e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"1123"=>array(
			"1123a"=>array(
				"titolo"=>"San Clemente I (Papa e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"1124"=>array(
			"1124a"=>array(
				"titolo"=>"San Colombano (Abate)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1126"=>array(
			"1126a"=>array(
				"titolo"=>"San Silvestro (Abate)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"1130"=>array(
			"1130a"=>array(
				"titolo"=>"Sant'Andrea apostolo",
				"tipo"=>"F",
				"comune"=>"apostoli",
				"mix"=>1
			)
		),
		"1203"=>array(
			"1203a"=>array(
				"titolo"=>"San Francesco Saverio (Sacerdote)",
				"tipo"=>"M",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1204"=>array(
			"1204a"=>array(
				"titolo"=>"San Giovanni Damasceno (Sacerdote e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"1205"=>array(
			"1205a"=>array(
				"titolo"=>"Beato Placido Riccardi (Monaco e sacerdote)",
				"tipo"=>"M",
				"comune"=>"monaci",
				"mix"=>1
			),
			"1205b"=>array(
				"titolo"=>"San Saba (Abate)",
				"tipo"=>"R",
				"comune"=>"monaci",
				"mix"=>1
			)
		),
		"1206"=>array(
			"1206a"=>array(
				"titolo"=>"San Nicola (Vescovo)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1207"=>array(
			"1207a"=>array(
				"titolo"=>"Sant'Ambrogio (Vescovo e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"1211"=>array(
			"1211a"=>array(
				"titolo"=>"San Damaso I (Papa)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1212"=>array(
			"1212a"=>array(
				"titolo"=>"Santa Giovanna Francesca de Chantal (Religiosa)",
				"tipo"=>"R",
				"comune"=>"religiose",
				"mix"=>1
			)
		),
		"1213"=>array(
			"1213a"=>array(
				"titolo"=>"Santa Lucia (Vergine e martire)",
				"tipo"=>"M",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"1214"=>array(
			"1214a"=>array(
				"titolo"=>"San Giovanni della Croce (Sacerdote e dottore della Chiesa)",
				"tipo"=>"M",
				"comune"=>"dottori",
				"mix"=>1
			)
		),
		"1221"=>array(
			"1221a"=>array(
				"titolo"=>"San Pietro Canisio (Sacerdote e dottore della Chiesa)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1223"=>array(
			"1223a"=>array(
				"titolo"=>"San Giovanni da Kęty (Sacerdote)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		),
		"1229"=>array(
			"1229b"=>array(
				"titolo"=>"San Tommaso Becket (Vescovo e martire)",
				"tipo"=>"R",
				"comune"=>"martire",
				"mix"=>1
			)
		),
		"1231"=>array(
			"1231b"=>array(
				"titolo"=>"San Silvestro I (Papa)",
				"tipo"=>"R",
				"comune"=>"pastori",
				"mix"=>1
			)
		)
	);

	//fine è escluso dal periodo
	protected $tempi=array(
		array(
			"codice"=>"N",
			"nome"=>"Tempo di Natale",
			"colore"=>"white",
			"fine"=>"battesimo"
		),
		array(
			"codice"=>"O",
			"nome"=>"Tempo Ordinario",
			"colore"=>"#68b368",
			"fine"=>"ceneri"
		),
		array(
			"codice"=>"Q",
			"nome"=>"Tempo di Quaresima",
			"colore"=>"#7b4bb3",
			"fine"=>"pasqua"
		),
		array(
			"codice"=>"P",
			"nome"=>"Tempo di Pasqua",
			"colore"=>"white",
			"fine"=>"pentecoste"
		),
		array(
			"codice"=>"O",
			"nome"=>"Tempo Ordinario",
			"colore"=>"#68b368",
			"fine"=>"avv1"
		),
		array(
			"codice"=>"A",
			"nome"=>"Tempo di Avvento",
			"colore"=>"#7b4bb3",
			"fine"=>"natale"
		),
		array(
			"codice"=>"N",
			"nome"=>"Tempo di Natale",
			"colore"=>"white",
			"fine"=>"fine"
		)
	);
	
	function __construct($d) {

		$this->info['today']=$d;
		$this->info['anno']=substr($d,0,4);

		$this->info['capo']=$this->info['anno'].'0101';
		$this->info['natale']=$this->info['anno'].'1225';
		$this->info['fine']=($this->info['anno']+1).'0101';

		$pasqua=$this->pasqua($this->info['anno']);

		$this->info['angelo']=date('Ymd',strtotime("+1 day",$pasqua));
		$this->festa[substr($this->info['angelo'],4,4)]="Lunedì dell'Angelo";
		$this->info['palme']=date('Ymd',strtotime("-7 day",$pasqua));
		$this->festa[substr($this->info['palme'],4,4)]="Domenica delle Palme";
		$this->info['qua1']=date('Ymd',strtotime("-42 day",$pasqua));
		$this->info['qua2']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['qua1'])));
		$this->info['qua3']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['qua2'])));
		$this->info['qua4']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['qua3'])));
		$this->info['qua5']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['qua4'])));
		$this->info['ceneri']=date('Ymd',strtotime("-46 day",$pasqua));
		$this->info['pas2']=date('Ymd',strtotime('+7 days',$pasqua));
		$this->info['pas3']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['pas2'])));
		$this->info['pas4']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['pas3'])));
		$this->info['pas5']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['pas4'])));
		$this->info['pas6']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['pas5'])));
		$this->info['ascensione']=date('Ymd',strtotime("+42 day",$pasqua));
		$this->festa[substr($this->info['ascensione'],4,4)]="Ascensione di Gesù";
		$this->info['pentecoste']=date('Ymd',strtotime("+49 day",$pasqua));
		$this->festa[substr($this->info['pentecoste'],4,4)]="Pentecoste";
		$this->info['pasqua']=date('Ymd',$pasqua);
		$this->festa[substr($this->info['pasqua'],4,4)]="Pasqua del Signore";

		$temp=strtotime("+56 day",$pasqua);
		$this->info['trinita']=date('Ymd',$temp);
		//$this->festa[date('md',$temp)]="Solennità della Santissima Trinità";
		$temp=strtotime("+68 day",$pasqua);
		$this->info['cuore']=date('Ymd',$temp);
		$temp=strtotime("+63 day",$pasqua);
		$this->info['corpus']=date('Ymd',$temp);
		//$this->festa[date('md',$temp)]="Santissimo Corpo e Sangue di Cristo";

		$this->info['battesimo']=$this->battesimo($this->info['anno']);
		$this->festa[substr($this->info['battesimo'],4,4)]="Battesimo del Signore";

		$this->info['avv1']=$this->avvento($this->info['anno']);
		$this->info['avv2']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['avv1'])));
		$this->info['avv3']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['avv2'])));
		$this->info['avv4']=date('Ymd',strtotime('+7 days',mainFunc::gab_tots($this->info['avv3'])));
		$this->info['re']=date('Ymd',strtotime('-7 days',mainFunc::gab_tots($this->info['avv1'])));
		$this->festa[substr($this->info['re'],4,4)]="Solennità di Cristo Re";

		$temp=mainFunc::gab_tots($this->info['cuore']);
		do {
			$temp=strtotime('+1 day',$temp);
		}
		while (date('w',$temp)!=6);

		$this->ricorrenza[date('md',$temp)]['CIBVM']=array(
			"titolo"=>"Cuore Immacolato della Beata Vergine Maria",
			"tipo"=>"R",
			"comune"=>"BVM"
		);

		if ( ((int)substr($d,0,4)%2)==0 ) $this->info['pari']=true;
		//se siamo in avvento l'anno è il successivo
		if ($this->info['today']>=$this->info['avv1']) $this->info['pari']=!$this->info['pari'];

		$this->info['annoLit']=$this->annoLit($this->info['anno']);

		$this->map=$this->buildMap($this->info['today']);
		
	}

	function getCal() {
		return $this->info;
	}

	function getMap() {
		return $this->map;
	}

	function buildMap($day,$conAlternative=true) {

		//evento è un momento specifico del periodo come "ceneri", "settimana santa"...
		//settimana ha senso solo per il tempo Ordinario
		$m=array(
			"today"=>$day,
			"tempo"=>$this->getTempo($day),
			"anno"=>$this->getAnno(),
			"settimana"=>"",
			"quarto"=>"",
			"weekDay"=>date('w',mainFunc::gab_tots($day)),
			"pari"=>$this->info['pari'],
			"festa"=>array(),
			"evento"=>array(),
			"rocho"=>false,
			"ASC"=>$this->info['ascensione'],
			"errore"=>false,
			"alternative"=>array()
		);

		if (!$m['tempo']) {
			$m['errore']=true;
			return $m;
		}
		///////////////////////////////////////////////////////////////////////
		if ($m['tempo']['codice']=='O') {

			if ($day<$this->info['ceneri']) {
				$rif=mainFunc::gab_tots($this->info['battesimo']);
				$sett=0;
				while ($day>=date('Ymd',$rif)) {
					$sett++;
					$rif=strtotime("+7 days",$rif);
				}
			}
			else {
				$rif=mainFunc::gab_tots($this->info['re']);
				$sett=34;
				while ($day<date('Ymd',$rif)) {
					$sett--;
					$rif=strtotime("-7 days",$rif);
				}
			}

			$m['settimana']=$sett;

			$temp=$sett%4;
			$m['quarto']=($temp==0)?4:$temp;

			//di default la domenica è un evento che potrebbe essere sovrascritto in seguito
			if ($m['weekDay']==0) {
				$m['evento']['D'.$sett]=array(
					"titolo"=>$sett."° Domenica del tempo ordinario",
					"tipo"=>"F",
					"ppvv"=>true
				);
			}

			if (substr($day,4,4)=='0202') {
				$m['evento']=array();
				$m['evento']['0202a']=array(
					"titolo"=>"Presentazione del Signore",
					"tipo"=>"F",
					"ppvv"=>(date('w',mainFunc::gab_tots($day))==0)?true:false
				);
			}
			//se il tempo è ordinario Santa Scolastica è una Solennità che ha la priorità
			elseif (substr($day,4,4)=='0210') {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0210a']=array(
					"titolo"=>"Santa Scolastica (Vergine)",
					"tipo"=>"S",
					"comune"=>"vergini",
					"ppvv"=>true
				);
			}
			//se il tempo è ordinario San Giuseppe è una Solennità che ha la priorità
			elseif (substr($day,4,4)=='0319') {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0319a']=array(
					"titolo"=>"San Giuseppe sposo della B.V. Maria",
					"tipo"=>"S",
					"comune"=>"santi",
					"ppvv"=>true
				);
			}
			//se il tempo è ordinario l'Annunciazione è una Solennità che ha la priorità
			elseif (substr($day,4,4)=='0325') {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0325a']=array(
					"titolo"=>"Annunciazione del Signore",
					"tipo"=>"S",
					"comune"=>"BVM",
					"ppvv"=>true
				);
			}
			//se il tempo è ordinario la natività del Battista è una Solennità che ha la priorità,
			//ma non su una solennità del Signore (Sacro Cuore o Corpus Domini il 24 giugno):
			//in quel caso viene anticipata al 23 giugno, come nel 2022
			elseif ( (substr($day,4,4)=='0624' && $day!=$this->info['cuore'] && $day!=$this->info['corpus']) ||
					(substr($day,4,4)=='0623' && (substr($this->info['cuore'],4,4)=='0624' || substr($this->info['corpus'],4,4)=='0624')) ) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0624a']=array(
					"titolo"=>"Natività di San Giovanni Battista",
					"tipo"=>"S",
					"comune"=>"BVM",
					"ppvv"=>true
				);
			}
			//se il tempo è ordinario la Solennità ha la priorità, ma non sul Sacro Cuore:
			//in quel caso viene anticipata al 28 giugno
			elseif ( (substr($day,4,4)=='0629' && $day!=$this->info['cuore']) ||
					(substr($day,4,4)=='0628' && substr($this->info['cuore'],4,4)=='0629') ) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0629a']=array(
					"titolo"=>"Santi Pietro e Paolo apostoli",
					"tipo"=>"S",
					"comune"=>"apostoli",
					"ppvv"=>true
				);
			}
			//se il tempo è ordinario la Solennità ha la priorità
			elseif (substr($day,4,4)=='0711') {
				$m['evento']=array();
				$m['evento']['0711a']=array(
					"titolo"=>"Nostro Santo Padre Benedetto (Abate) - Patrono d'Europa",
					"tipo"=>"S",
					"comune"=>"monaci",
					"ppvv"=>true
				);
			}
			//se il tempo è ordinario la Solennità ha la priorità
			elseif (substr($day,4,4)=='0815') {
				$m['evento']=array();
				$m['evento']['0815a']=array(
					"titolo"=>"Assunzione della Beata Vergine Maria",
					"tipo"=>"S",
					"comune"=>"BVM",
					"ppvv"=>true
				);
			}
			//se il tempo è ordinario la Solennità ha la priorità
			elseif (substr($day,4,4)=='1101') {
				$m['evento']=array();
				$m['evento']['1101a']=array(
					"titolo"=>"Tutti i Santi",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}
			//se il tempo è ordinario la Festa del Signore ha la priorità
			elseif (substr($day,4,4)=='0806') {
				$m['evento']=array();
				$m['evento']['0806a']=array(
					"titolo"=>"Trasfigurazione del Signore",
					"tipo"=>"F",
					"ppvv"=>(date('w',mainFunc::gab_tots($day))==0)?true:false
				);
			}
			//se il tempo è ordinario la Festa del Signore ha la priorità
			elseif (substr($day,4,4)=='0914') {
				$m['evento']=array();
				$m['evento']['0914a']=array(
					"titolo"=>"Esaltazione della Santa Croce",
					"tipo"=>"F",
					"ppvv"=>(date('w',mainFunc::gab_tots($day))==0)?true:false
				);
			}
			elseif ($day==$this->info['battesimo']) {
				$m['evento']=array();
				$m['evento']['BAT']=array(
					"titolo"=>"Battesimo del Signore",
					"tipo"=>"F",
					"ppvv"=>true
				);
			}
			elseif ($day==$this->info['pentecoste']) {
				$m['evento']=array();
				$m['evento']['PEN']=array(
					"titolo"=>"Domenica di Pentecoste",
					"tipo"=>"S",
					"ppvv"=>true
				);
				$m['settimana']="";
				$m['rocho']=true;
			}
			elseif ($day==$this->info['cuore']) {
				$m['evento']=array();
				$m['evento']['SCG']=array(
					"titolo"=>"Sacratissimo Cuore di Gesù",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}
			elseif ($day==$this->info['trinita']) {
				$m['evento']=array();
				$m['evento']['TRI']=array(
					"titolo"=>"Solennità della Santissima Trinità",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}
			elseif ($day==$this->info['corpus']) {
				$m['evento']=array();
				$m['evento']['COD']=array(
					"titolo"=>"Santissimo Corpo e Sangue di Cristo",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}
			elseif ($day==$this->info['re']) {
				$m['evento']=array();
				$m['evento']['GRE']=array(
					"titolo"=>"Nostro Signore Gesù Cristo Re dell'Universo",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}

			//nel tempo ordinario il Transito non può accavallarsi ad una domenica
			if (substr($day,4,4)=='0321' && $m['weekDay']!=0) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0321a']=array(
					"titolo"=>"Transito del N.S. Padre Benedetto Abate",
					"tipo"=>"F",
					"comune"=>"monaci",
					"ppvv"=>true
				);
			}
			elseif (substr($day,4,4)=='0322' && $m['weekDay']==1) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0321a']=array(
					"titolo"=>"Transito del N.S. Padre Benedetto Abate",
					"tipo"=>"F",
					"comune"=>"monaci",
					"ppvv"=>true
				);
			}
		}
		///////////////////////////////////////////////////////////////////////
		elseif ($m['tempo']['codice']=='N') {

			//Natale
			if (substr($day,4,4)=='1225') {
				$m['evento']['NAT']=array(
					"titolo"=>"Natale del Signore",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}

			//SS Madre di Dio
			if (substr($day,4,4)=='0101') {
				$m['evento']['MSS']=array(
					"titolo"=>"Maria SS. Madre di Dio",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}

			//ferie prima dell'Epifania
			if (substr($day,4,4)>'0101' && substr($day,4,4)<'0106') {
				$m['evento']['F'.substr($day,4,4)]=array(
					"titolo"=>"Ferie prima dell'Epifania",
					"tipo"=>"E",
				);
			}

			//seconda domenica dopo natale
			if (substr($day,4,4)>='0102' && substr($day,4,4)<='0105' && $m['weekDay']==0) {
				$m['evento']=array();
				$m['evento']['2DN']=array(
					"titolo"=>"Seconda Domenica dopo Natale",
					"tipo"=>"F",
					"ppvv"=>true
				);
			}

			//Santa Famiglia 1230 se natale è domenica oppure prima domenica dopo natale
			elseif ( (date('w',mainFunc::gab_tots($this->info['natale']))==0 && substr($day,4,4)=='1230') || (substr($day,4,4)>'1225' && substr($day,4,4)<='1231' && $m['weekDay']==0) ) {
				//come nel libro monastico: Primi Vespri solo di domenica; se Natale cade di domenica
				//la festa si celebra il 30 dicembre omettendo i Primi Vespri
				$m['evento']['SAF']=array(
					"titolo"=>"Santa Famiglia di Gesù Maria e Giuseppe",
					"tipo"=>"F",
					"ppvv"=>($m['weekDay']==0)
				);
			}

			//ferie dopo l'epifania
			elseif (substr($day,4,4)>'0106' && substr($day,4,4)<substr($this->info['battesimo'],4,4)) {

				$m['evento']['F'.substr($day,4,4)]=array(
					"titolo"=>"Ferie dopo l'Epifania",
					"tipo"=>"E",
				);
			}

			//Epifania
			elseif (substr($day,4,4)=='0106') {

				$m['evento']['EPI']=array(
					"titolo"=>"Epifania del Signore",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}

			if (count($m['evento'])==0) {

				if (substr($day,4,4)=='1226') {
					$m['evento']['1226a']=array(
						"titolo"=>"Santo Stefano (Promartire)",
						"tipo"=>"E"
					);
				}
				elseif (substr($day,4,4)=='1227') {
					$m['evento']['1227a']=array(
						"titolo"=>"San Giovanni (Apostolo ed Evangelista)",
						"tipo"=>"E"
					);
				}
				elseif (substr($day,4,4)=='1228') {
					$m['evento']['1228a']=array(
						"titolo"=>"Santi Innocenti martiri",
						"tipo"=>"E"
					);
				}
				elseif (substr($day,4,4)=='1229') {
					$m['evento']['1229a']=array(
						"titolo"=>"Quinto giorno dell'ottava di Natale",
						"tipo"=>"E"
					);
				}
				elseif (substr($day,4,4)=='1230') {
					$m['evento']['1230a']=array(
						"titolo"=>"Sesto giorno dell'ottava di Natale",
						"tipo"=>"E"
					);
				}
				elseif (substr($day,4,4)=='1231') {
					$m['evento']['1231a']=array(
						"titolo"=>"Settimo giorno dell'ottava di Natale",
						"tipo"=>"E"
					);
				}
			}
		}
		///////////////////////////////////////////////////////////////////////
		elseif ($m['tempo']['codice']=='A') {

			if ($day>=$this->info['avv1'] && $day<$this->info['avv2']) {
				$m['settimana']=1;
				if ($day==$this->info['avv1']) {
					$m['evento']['AV1']=array(
						"titolo"=>"Prima Domenica di Avvento",
						"tipo"=>"F",
						"ppvv"=>true
					);
				}
				else {
					$m['evento']['A1'.$m['weekDay']]=array(
						"titolo"=>"1° settimana di Avvento - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['avv2'] && $day<$this->info['avv3']) {
				$m['settimana']=2;
				if ($day==$this->info['avv2']) {
					$m['evento']['AV2']=array(
						"titolo"=>"Seconda Domenica di Avvento",
						"tipo"=>"F",
						"ppvv"=>true
					);
				}
				else {
					$m['evento']['A2'.$m['weekDay']]=array(
						"titolo"=>"2° settimana di Avvento - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['avv3'] && $day<$this->info['avv4']) {
				$m['settimana']=3;
				if ($day==$this->info['avv3']) {
					$m['evento']['AV3']=array(
						"titolo"=>"Terza Domenica di Avvento",
						"tipo"=>"F",
						"ppvv"=>true
					);
				}
				else {
					$m['evento']['A3'.$m['weekDay']]=array(
						"titolo"=>"3° settimana di Avvento - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['avv4']) {
				$m['settimana']=4;
				if ($day==$this->info['avv4']) {
					$m['evento']['AV4']=array(
						"titolo"=>"Quarta Domenica di Avvento",
						"tipo"=>"F",
						"ppvv"=>true
					);
				}
				else {
					$m['evento']['A4'.$m['weekDay']]=array(
						"titolo"=>"4° settimana di Avvento - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}

			//giorni speciali
			if (substr($day,4,4)>='1217' && substr($day,4,4)<='1224' && $day!=$this->info['avv4'] && $day!=$this->info['avv3']) {
				$m['evento']=array();
				$m['evento']['A12'.substr($day,6,2)]=array(
					"titolo"=>"Avvento - ".substr($day,6,2)." Dicembre",
					"tipo"=>"E"
				);
			}

			//Questa solennità è equiparata ad una Solennità del Signore
			//se cade di domenica (II di Avvento) passa al lunedì 9 dicembre; si può scegliere il giorno proprio dalla tendina
			if ( (substr($day,4,4)=='1208' && $m['weekDay']!=0) || (substr($day,4,4)=='1209' && $m['weekDay']==1) ) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['1208a']=array(
					"titolo"=>"Immacolata Concezione della Beata Vergine Maria",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}
		}
		///////////////////////////////////////////////////////////////////////
		elseif ($m['tempo']['codice']=='Q') {

			if ($day>=$this->info['ceneri'] && $day<$this->info['qua1']) {
				$m['settimana']="";
				if ($day==$this->info['ceneri']) {
					$m['evento']['CEN']=array(
						"titolo"=>"Mercoledì delle Ceneri",
						"tipo"=>"F"
					);
				}
				else {
					$m['evento']['QC'.$m['weekDay']]=array(
						"titolo"=>$this->giornoSett[$m['weekDay']]." dopo le Ceneri",
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['qua1'] && $day<$this->info['qua2']) {
				$m['settimana']=1;
				if ($day==$this->info['qua1']) {
					$m['evento']['QU1']=array(
						"titolo"=>"1° domenica di Quaresima",
						"tipo"=>"F",
						"ppvv"=>true
					);
				}
				else {
					$m['evento']['Q1'.$m['weekDay']]=array(
						"titolo"=>"1° settimana di Quaresima - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['qua2'] && $day<$this->info['qua3']) {
				$m['settimana']=2;
				if ($day==$this->info['qua2']) {
					$m['evento']['QU2']=array(
						"titolo"=>"2° domenica di Quaresima",
						"tipo"=>"F",
						"ppvv"=>true
					);
				}
				else {
					$m['evento']['Q2'.$m['weekDay']]=array(
						"titolo"=>"2° settimana di Quaresima - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['qua3'] && $day<$this->info['qua4']) {
				$m['settimana']=3;
				if ($day==$this->info['qua3']) {
					$m['evento']['QU3']=array(
						"titolo"=>"3° domenica di Quaresima",
						"tipo"=>"F",
						"ppvv"=>true
					);
				}
				else {
					$m['evento']['Q3'.$m['weekDay']]=array(
						"titolo"=>"3° settimana di Quaresima - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['qua4'] && $day<$this->info['qua5']) {
				$m['settimana']=4;
				if ($day==$this->info['qua4']) {
					$m['evento']['QU4']=array(
						"titolo"=>"4° domenica di Quaresima",
						"tipo"=>"F",
						"ppvv"=>true
					);
				}
				else {
					$m['evento']['Q4'.$m['weekDay']]=array(
						"titolo"=>"4° settimana di Quaresima - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['qua5'] && $day<$this->info['palme']) {
				$m['settimana']=5;
				if ($day==$this->info['qua5']) {
					$m['evento']['QU5']=array(
						"titolo"=>"5° domenica di Quaresima",
						"tipo"=>"F",
						"ppvv"=>true
					);
				}
				else {
					$m['evento']['Q5'.$m['weekDay']]=array(
						"titolo"=>"5° settimana di Quaresima - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['palme'] && $day<$this->info['pasqua']) {
				$m['settimana']="Santa";
				if ($day==$this->info['palme']) {
					$m['evento']['PAL']=array(
						"titolo"=>"Domenica delle Palme",
						"tipo"=>"F",
						"ppvv"=>true
					);
					$m['rocho']=true;
				}
				else {
					$m['evento']['SS'.$m['weekDay']]=array(
						"titolo"=>$this->giornoSett[$m['weekDay']].' Santo',
						"tipo"=>"E"
					);
					if ($m['weekDay']==5) $m['rocho']=true;
				}
			}

			//se il tempo è di Quaresima Santa Scolastica non può cadere il mercoledì delle ceneri o domenica
			if (substr($day,4,4)=='0210' && $day!=$this->info['ceneri'] && $m['weekDay']!=0) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0210a']=array(
					"titolo"=>"Santa Scolastica (Vergine)",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}
			elseif (substr($day,4,4)=='0211' && (substr($this->info['ceneri'],4,4)=='0210' || $m['weekDay']==1) ){
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0210a']=array(
					"titolo"=>"Santa Scolastica (Vergine)",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}

			//se il tempo è di Quaresima San Giuseppe è una Solennità che non può cadere di domenica e viene posticipato
			//o dalle Palme alla seconda di Pasqua e viene anticipato
			if (substr($day,4,4)=='0319' && $m['weekDay']!=0 && $day<$this->info['palme']) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0319a']=array(
					"titolo"=>"San Giuseppe sposo della B.V. Maria",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}
			elseif (substr($day,4,4)=='0320' && $m['weekDay']==1 && $day<$this->info['palme']) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0319a']=array(
					"titolo"=>"San Giuseppe sposo della B.V. Maria",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}
			elseif ($day==date('Ymd',strtotime("-1 day",mainFunc::gab_tots($this->info['palme']))) && substr($this->info['palme'],4,4)<='0319' && substr($this->info['pasqua'],4,4)>='0319') {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0319a']=array(
					"titolo"=>"San Giuseppe sposo della B.V. Maria",
					"tipo"=>"S",
					"ppvv"=>true
				);
			}
			
			//il Transito non può accavallarsi ad una domenica né alla Settimana Santa:
			//in quel caso passa dopo l'ottava di Pasqua (vedi tempo di Pasqua)
			$transitoSS=($this->info['anno'].'0321'>=$this->info['palme'] && $this->info['anno'].'0321'<$this->info['pasqua']);
			if (substr($day,4,4)=='0321' && $m['weekDay']!=0 && !$transitoSS) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0321a']=array(
					"titolo"=>"Transito del N.S. Padre Benedetto Abate",
					"tipo"=>"F",
					"comune"=>"monaci",
					"ppvv"=>true
				);
			}
			elseif (substr($day,4,4)=='0322' && $m['weekDay']==1 && !$transitoSS) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0321a']=array(
					"titolo"=>"Transito del N.S. Padre Benedetto Abate",
					"tipo"=>"F",
					"comune"=>"monaci",
					"ppvv"=>true
				);
			}

			//se il tempo è di Quaresima Annunciazione è una Solennità che non può cadere di domenica e viene posticipato
			//o dalle Palme alla seconda di Pasqua e viene posticipato
			if (substr($day,4,4)=='0325' && $m['weekDay']!=0 && $day<$this->info['palme']) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0325a']=array(
					"titolo"=>"Annunciazione del Signore",
					"tipo"=>"S",
					"comune"=>"BVM",
					"ppvv"=>true
				);
			}
			elseif (substr($day,4,4)=='0326' && $m['weekDay']==1 && $day<$this->info['palme']) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0325a']=array(
					"titolo"=>"Annunciazione del Signore",
					"tipo"=>"S",
					"comune"=>"BVM",
					"ppvv"=>true
				);
			}
		}
		///////////////////////////////////////////////////////////////////////
		elseif ($m['tempo']['codice']=='P') {

			if ($day>=$this->info['pasqua'] && $day<$this->info['pas2']) {
				$m['settimana']=1;
				if ($day==$this->info['pasqua']) {
					$m['evento']['PAS']=array(
						"titolo"=>"Domenica di Pasqua - Risurrezione del Signore",
						"tipo"=>"S"
					);
				} 
				else {
					$m['evento']['PA1'.$m['weekDay']]=array(
						"titolo"=>$this->giornoSett[$m['weekDay']]." dell'ottava di Pasqua",
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['pas2'] && $day<$this->info['pas3']) {
				$m['settimana']=2;
				if ($day==$this->info['pas2']) {
					$m['evento']['PA2']=array(
						"titolo"=>"2° Domenica di Pasqua - Domenica dell'ottava",
						"tipo"=>"F",
						"ppvv"=>true
					);
				} 
				else {
					$m['evento']['PA2'.$m['weekDay']]=array(
						"titolo"=>"2° settimana di Pasqua - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['pas3'] && $day<$this->info['pas4']) {
				$m['settimana']=3;
				if ($day==$this->info['pas3']) {
					$m['evento']['PA3']=array(
						"titolo"=>"3° Domenica di Pasqua",
						"tipo"=>"F",
						"ppvv"=>true
					);
				} 
				else {
					$m['evento']['PA3'.$m['weekDay']]=array(
						"titolo"=>"3° settimana di Pasqua - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['pas4'] && $day<$this->info['pas5']) {
				$m['settimana']=4;
				if ($day==$this->info['pas4']) {
					$m['evento']['PA4']=array(
						"titolo"=>"4° Domenica di Pasqua",
						"tipo"=>"F",
						"ppvv"=>true
					);
				} 
				else {
					$m['evento']['PA4'.$m['weekDay']]=array(
						"titolo"=>"4° settimana di Pasqua - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['pas5'] && $day<$this->info['pas6']) {
				$m['settimana']=5;
				if ($day==$this->info['pas5']) {
					$m['evento']['PA5']=array(
						"titolo"=>"5° Domenica di Pasqua",
						"tipo"=>"F",
						"ppvv"=>true
					);
				} 
				else {
					$m['evento']['PA5'.$m['weekDay']]=array(
						"titolo"=>"5° settimana di Pasqua - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['pas6'] && $day<$this->info['ascensione']) {
				$m['settimana']=6;
				if ($day==$this->info['pas6']) {
					$m['evento']['PA6']=array(
						"titolo"=>"6° Domenica di Pasqua",
						"tipo"=>"F",
						"ppvv"=>true
					);
				} 
				else {
					$m['evento']['PA6'.$m['weekDay']]=array(
						"titolo"=>"6° settimana di Pasqua - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}
			elseif ($day>=$this->info['ascensione'] && $day<$this->info['pentecoste']) {
				$m['settimana']=7;
				if ($day==$this->info['ascensione']) {
					$m['evento']['ASC']=array(
						"titolo"=>"Ascensione del Signore",
						"tipo"=>"S",
						"ppvv"=>true
					);
				} 
				else {
					$m['evento']['PA7'.$m['weekDay']]=array(
						"titolo"=>"7° settimana di Pasqua - ".$this->giornoSett[$m['weekDay']],
						"tipo"=>"E"
					);
				}
			}

			//se il tempo è di Pasqua Annunciazione è una Solennità che non può cadere di domenica e viene posticipato
			//o dalle Palme alla seconda di Pasqua e viene posticipato
			if (substr($day,4,4)=='0326' && $m['weekDay']==1 && $day>$this->info['pas2']) {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0325a']=array(
					"titolo"=>"Annunciazione del Signore",
					"tipo"=>"S",
					"comune"=>"BVM",
					"ppvv"=>true
				);
			}
			elseif ($day==date('Ymd',strtotime("+1 day",mainFunc::gab_tots($this->info['pas2']))) && substr($this->info['palme'],4,4)<='0325' && substr($this->info['pas2'],4,4)>='0325') {
				$m['eventoPrima']=$m['evento'];
				$m['evento']=array();
				$m['evento']['0325a']=array(
					"titolo"=>"Annunciazione del Signore",
					"tipo"=>"S",
					"comune"=>"BVM",
					"ppvv"=>true
				);
			}

			//Transito caduto nella Settimana Santa: dopo l'ottava di Pasqua, il primo giorno libero dall'Annunciazione
			if ($this->info['anno'].'0321'>=$this->info['palme'] && $this->info['anno'].'0321'<$this->info['pasqua']) {
				$annunciazioneDopo=(substr($this->info['palme'],4,4)<='0325' && substr($this->info['pas2'],4,4)>='0325');
				if ($day==date('Ymd',strtotime("+".($annunciazioneDopo?2:1)." day",mainFunc::gab_tots($this->info['pas2'])))) {
					$m['eventoPrima']=$m['evento'];
					$m['evento']=array();
					$m['evento']['0321a']=$this->mobili['0321a'];
				}
			}
		}

		///////////////////////////////////////////////////////////////
		if (array_key_exists(substr($day,4,4),$this->ricorrenza)) $m['festa']=$this->ricorrenza[substr($day,4,4)];

		///////////////////////////////////////////////////////////////
		//celebrazioni spostate dal calendario: nel loro giorno proprio (e il giorno dopo, se il giorno proprio
		//è una domenica) restano disponibili nella tendina, per chi le celebra in quel giorno
		//non nel Triduo pasquale (Giovedì, Venerdì, Sabato Santo e Pasqua)
		$triduo=false;
		foreach ($m['evento'] as $k=>$e) {
			if (in_array($k,array('SS4','SS5','SS6','PAS'))) $triduo=true;
		}
		if ($conAlternative && !$triduo) {
			foreach ($this->mobili as $code=>$def) {
				if (isset($m['evento'][$code])) continue;
				$nat=substr($day,0,4).substr($code,0,4);
				$dopo=date('Ymd',strtotime("+1 day",mainFunc::gab_tots($nat)));
				if ($day==$nat) {
					$m['alternative'][$code]=$def;
					$m['alternative'][$code]['nota']='nel giorno';
				}
				elseif ($day==$dopo && date('w',mainFunc::gab_tots($nat))==0) {
					//solo se la domenica non l'ha già celebrata
					$mn=$this->buildMap($nat,false);
					if (!isset($mn['evento'][$code])) {
						$m['alternative'][$code]=$def;
						$m['alternative'][$code]['nota']='il giorno dopo';
					}
				}
			}

			//nel giorno in cui il calendario ha spostato una celebrazione: l'ufficio del giorno, per chi l'ha già celebrata
			foreach ($this->mobili as $code=>$def) {
				if (isset($m['evento'][$code]) && substr($day,4,4)!=substr($code,0,4) && isset($m['eventoPrima'])) {
					$m['alternative']['feria']=array(
						"titolo"=>"Ufficio del giorno",
						"nota"=>"senza ".$def['titolo'],
						"evento"=>$m['eventoPrima'],
						"feria"=>true
					);
				}
			}
		}
		unset($m['eventoPrima']);

		return $m;
	}

	function getTempo($day) {

		foreach ($this->tempi as $k=>$t) {
			if ($day<$this->info[$t['fine']]) {
				return $t;
			}
		}

		return false;
	}

	function getAnno() {
		if ($this->info['today']<$this->info['avv1']) return $this->info['annoLit'];
		else return $this->annoLit($this->info['anno']+1);
	}

	function battesimo($anno) {

		$d=mainFunc::gab_tots($anno.'0106');

		do {
		
			$d=strtotime('+1 day',$d);
			$n=date("w",$d);

		} while ($n>0);

		return date('Ymd',$d);
	}
	
	function pasqua($year) {
		// Data della Pasqua gregoriana (algoritmo di Meeus/Jones/Butcher),
		// valido per qualsiasi anno dal 1583 in poi.
		$a = $year % 19;
		$b = intdiv($year, 100);
		$c = $year % 100;
		$d = intdiv($b, 4);
		$e = $b % 4;
		$f = intdiv($b + 8, 25);
		$g = intdiv($b - $f + 1, 3);
		$h = (19 * $a + $b - $d - $g + 15) % 30;
		$i = intdiv($c, 4);
		$k = $c % 4;
		$l = (32 + 2 * $e + 2 * $i - $h - $k) % 7;
		$m = intdiv($a + 11 * $h + 22 * $l, 451);
		$month = intdiv($h + $l - 7 * $m + 114, 31);
		$day = (($h + $l - 7 * $m + 114) % 31) + 1;

		return mktime(0,0,0,$month,$day,$year);
	}

	function avvento($anno) {

		$d=mainFunc::gab_tots($anno.'1225');

		do {
		
			$d=strtotime('-1 day',$d);
			$n=date("w",$d);

		} while ($n>0);

		$d=strtotime('-21 days',$d);

		return date('Ymd',$d);

	}

	function annoLit($anno) {

		$rif=$this->rifAnno;
		$pos=0;

		while ($rif<$anno) {

			$rif++;
			$pos++;

			if ($pos>2) $pos=0;

		}

		return $this->anni[$pos];
	}

	function mese($mese) {
		//fornisce la griglia di un mese

		$griglia=array();
	
		//calcolo primo giorno del quadrante (TIMESTAMP)
		$time=mktime(0,0,0,(int)$mese,1,$this->info['anno']);
		$weekday=date("w",$time);
		$index=strtotime("-".$weekday." day",$time);
	
		$am=$this->info['anno'].$mese;
		$check=$am;
		$sett=(int)date("W",$index);
		
		while ($check==$am) {
			
			//definizione giorno
			for($d=0;$d<=6;$d++) {

				$day=$this->newDay($index,$d);
							
				//array delle caratteristiche dei giorni
				$day['griglie']=array();
				$griglia[$sett][$d]=$day;
				
				$index=strtotime("+1 day",$index);
			}
			
			$check=date("Ym",$index);
			$sett++;
		}
		
		return $griglia;
	}

	function newDay($index,$d) {

		$day=array("tag"=>date('Ymd',$index),"wd"=>$d,"festa"=>0,"testo"=>"","tempo"=>"");
				
		$md=date("md",$index);
		if(array_key_exists($md,$this->festa)) {
			$day["festa"]=1;
			$day["testo"]=$this->festa[$md];
		}

		$day['tempo']=$this->getTempo($day['tag']);
		
		return $day;
	}

	
}

?>