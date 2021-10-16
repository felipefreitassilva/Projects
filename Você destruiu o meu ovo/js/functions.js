$(function () {

    var meuovointeiro = $('.sobre');
    var meuovoquebrado = $('.sob');
    var audio = $('.img');

    meuovointeiro.click(function () {
        meuovointeiro.hide();
        meuovoquebrado.fadeIn(600, function () {
            audio.html('<audio src="audio/vocedestruiuomeuovo.mp3" autoplay></audio>')
        });
    });

})