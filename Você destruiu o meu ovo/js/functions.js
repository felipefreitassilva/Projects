$(function(){

    var meuovointeiro = $('.sobre');
    var meuovoquebrado = $('.sob');
    var audio = $('.img');

    meuovointeiro.click(function(){
        meuovointeiro.hide();
        meuovoquebrado.fadeIn(1000,function(){
            audio.delay(3000).html('<audio src="audio/vocedestruiuomeuovo.mp3" autoplay></audio>');
        });
    });

})