class Salmastro {

    constructor() {
        this.ttsPlayer=new salPlayer();
        this.vDelay="";
    }

    async voxDelay(d) {
        //console.log('pause');
        this.pauseTTS();
        await window._salmastro.delay(parseInt(d));
        this.resumeTTS();
    }

    delay(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    setWaiter() {
        var href = window.location.href;
        var dir = href.substring(0, href.lastIndexOf('/')) + "/";

        return '<div style="text-align:center;"><img style="width:100px;height:100px;" src="'+dir+'img/busy.gif" /></div>';

        //return '<div style="text-align:center;"><img style="width:100px;height:100px;" src="'+location.protocol + '//' + location.host + location.pathname+'img/busy.gif" /></div>';
    }

    refresh() {
        var href = window.location.href;
        var dir = href.substring(0, href.lastIndexOf('/')) + "/";

        //location.href=location.protocol + '//' + location.host + location.pathname;
        //location.href=dir;
        //si resta sulla stessa pagina (classica.php), senza parametri
        location.replace(location.pathname);
    }

    getConfig() {

        var config={
            "ora":$('#sal_ora').val(),
            "festa":$('#sal_festa').val(),
            "inv":$('#sal_inv').prop('checked')?1:0,
            "mix":$('#sal_mix').prop('checked')?1:0,
            "contesto":$('#sal_contesto').val(),
        }

        return config;
    }

    load() {

        var href = window.location.href;
        var dir = href.substring(0, href.lastIndexOf('/')) + "/";
        //alert(dir);

        this.stopTTS();

        var param={
            "today":window._calnav_salmastro.getToday(),
            "config":this.getConfig()
        }

        //console.log(JSON.stringify(param));

        $('#salTesto').html(this.setWaiter());

        //"url": location.protocol + '//' + location.host + location.pathname+"load.php",

        $.ajax({
            "url": dir+"load.php",
            "async": true,
            "cache": false,
            "data": { "param": param },
            "type": "POST",
            "success": function(ret) {
                $('#salTesto').html(ret);   
            },
            "error": function(ret) {
                console.log(ret);
            }
        });
    }

    bvm(id) {

        $('div[id^="salmastro_bvm_"]').hide();
        $('#salmastro_bvm_'+id).show();
    }

    salAlt(k,i) {
        //scelta tra il salmo regolare (0) e quello dell'altra settimana (1)
        this.stopTTS();
        $('div[id^="salmastro_salalt_'+k+'_"]').hide();
        $('#salmastro_salalt_'+k+'_'+i).show();
        $('div[id^="salmastro_salaltbtn_'+k+'_"]').removeClass('salAltSel');
        $('#salmastro_salaltbtn_'+k+'_'+i).addClass('salAltSel');
    }

    litcal() {

        var href = window.location.href;
        var dir = href.substring(0, href.lastIndexOf('/')) + "/";

        var param={
            "today":window._calnav_salmastro.getToday()
        }

        //alert(JSON.stringify(param));

        $.ajax({
            "url": dir+"litcal.php",
            "async": true,
            "cache": false,
            "data": { "param": param },
            "type": "POST",
            "success": function(ret) {
                $('#salTesto').html(ret);
            },
            "error": function(ret) {
                console.log(ret);
            }
        });
    }

    //############################################################

    // Funzioni connesse ai pulsanti
    playTTS(tag,ant) {
        this.ttsPlayer.play(tag,ant);
    }

    pauseTTS() {
        this.ttsPlayer.pause();
    }

    stopTTS() {
        clearTimeout(this.vDelay);
        this.ttsPlayer.stop();
    }

    resumeTTS() {
        //console.log('resume');
        this.ttsPlayer.resume();
    }
}

class salPlayer {

    constructor() {
        this.ttsVox=new Vox();
        this.parte="";
        this.index={
            "i":0,
            "f":0,
            "actual":0
        }
    }

    delay() {
       setTimeout(null,2000) // Aspetta senza eseguire nulla
    }

    setParte(tag) {
        this.parte=tag;
        this.index.i=0;
        this.index.f=0;
        this.index.actual=0;
        var temp=this.index;

        $('span[id^="salParte_'+this.parte+'"]').each(function() {
            let index=$(this).data("voxindex");
            if (index<temp.i) temp.i=index;
            if (index>temp.f) temp.f=index;
        });
    }

    play(tag,ant) {
        this.stop();
        this.pause();
        this.setParte(tag);

        $('#vox_img_play_'+tag).hide();
        $('#vox_img_pause_'+tag).show();
        $('#vox_img_stop_'+tag).show();

        if (ant==1) {
            let txt=$('#salParteAnt_'+this.parte+'_0').html();
            if (typeof txt !== 'undefined') {
                const temp = txt.split('/');
                this.ttsVox.play(temp[0],{"pitch":0},false);
                if (typeof temp[1] !== 'undefined') {
                    this.ttsVox.play(temp[1],{"pitch":0.5},false);
                }
            }
        }

        for (let x=this.index.i;x<=this.index.f;x++) {
            let txt=$('#salParte_'+this.parte+'_'+x).html();
            if (typeof txt !== 'undefined') {

                let config={
                    "pitch":$('#salParte_'+this.parte+'_'+x).data('voxpitch'),
                    "delay":$('#salParte_'+this.parte+'_'+x).data('voxdelay')
                }

                this.ttsVox.play(txt,config,(x==this.index.f && ant==0)?true:false);
            }
        };

        if (ant==1) {
            let txt=$('#salParteAnt_'+this.parte+'_1').html();
            if (typeof txt !== 'undefined') {
                this.ttsVox.play(txt,{"pitch":0},true);
            }
        }

        this.ttsVox.resume();
    }

    pause() {
        this.ttsVox.pause();
    }

    stop() {
        /*let y=0;

        while (this.ttsVox.speaking) {
            y++;
            if (y>10000) {
                console.log('exit delay');
                break;
            }
        }*/

        $('img[id^="vox_img_play_"]').show();
        $('img[id^="vox_img_pause_"]').hide();
        $('img[id^="vox_img_stop_"]').hide();

        this.ttsVox.stop();
    }

    resume() {
        this.ttsVox.resume();
    }
}

class Vox {
    constructor() {
        this.synth = window.speechSynthesis;
        this.default= {
            "lang" : 'it-IT',
            "pitch" : 0.9,
            "rate" : [0.85,0.90,0.95],
            "volume" : 0.7
        }
        this.utterance = null;
        //this.isPaused = false;
    }

    setDefault(index,val) {
        this.default[index]=val;
    }

    // Metodo per avviare la riproduzione TTS
    play(text,config,flag) {
        //flag identifica se è l'ultima frase della parte
        //if (text && !this.isPaused) {

        if (text) {

            /*if (typeof config['delay'] !== 'undefined') {
                text+='...';
            }*/

            // Crea una nuova utterance solo se il testo è cambiato o non è in pausa
            this.utterance = new SpeechSynthesisUtterance(text);
            
            for (var x in this.default) {

                let val=this.default[x];

                if (typeof config[x] !== 'undefined') {
                    if (x=='pitch') val+=parseFloat(config[x]);
                }
                else {
                
                    if (x=='rate') val=this.default[x][Math.floor(Math.random() * this.default[x].length)].toFixed(2);
                }

                this.utterance[x]=val;

                //console.log(this.utterance['rate']);
            }

            if (typeof config['delay'] !== 'undefined') {

                if (flag) {
                    this.utterance.onend=function() {
                        window._salmastro.voxDelay(config['delay']);
                        window._salmastro.stopTTS();
                        //console.log('END');
                    }
                }
                else {
                    this.utterance.onend=function() {
                        window._salmastro.voxDelay(config['delay']);
                    }
                }
            }

            else if (flag) {
                this.utterance.onend=function() {
                    window._salmastro.stopTTS();
                    //console.log('END');
                }
            }

            this.synth.speak(this.utterance);
        }
        /*else if (this.isPaused) {
            // Riprendi la riproduzione se è in pausa
            this.synth.resume();
        }*/

        //console.log('play '+this.synth.paused+' '+this.synth.speaking+' '+text);
        
    }

    // Metodo per mettere in pausa la riproduzione TTS
    pause() {
        if (this.synth.paused) {
            this.resume();
        }
        else {
            this.synth.pause();
            //this.isPaused = true;
            //console.log('pause '+this.synth.paused+' '+this.synth.speaking);
        }
    }

    // Metodo per fermare la riproduzione TTS
    stop() {
        this.synth.cancel(); // Ferma la riproduzione e resetta
        //this.isPaused = false;
        //console.log('stop '+this.synth.paused+' '+this.synth.speaking);
    }

    resume() {
        this.synth.resume();
        //this.isPaused = false;
        //console.log('resume '+this.synth.paused+' '+this.synth.speaking);
    }
}

