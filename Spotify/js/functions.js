$(function(){

    var maxIndex = Math.ceil($('.suggestionWrapper').length/4) - 1;
    var curIndex = 0;

    initSlider();
    navigateSlider();

    function initSlider(){

        var amt = $('.suggestionWrapper').length * 25;
        var elScroll = $('.spotifySuggestionsWrapper');
        var elSingle = $('.suggestionWrapper')

        elScroll.css('width',amt+'%');
        elSingle.css('width',25*(100/amt)+'%');

    }

    function navigateSlider(){

        $('.arrow-right-nav').click(function(){
            if(curIndex < maxIndex){
                curIndex++;
                var elOff = $('.suggestionWrapper').eq(curIndex*4).offset().left - $('.spotifySuggestionsWrapper').offset().left;
                $('.spotifySuggestions').animate({'scrollLeft':elOff+'px'})
            }else{
                
            }
        });

        $('.arrow-left-nav').click(function(){
            if(curIndex > 0){
                curIndex--;
                var elOff = $('.suggestionWrapper').eq(curIndex*4).offset().left - $('.spotifySuggestionsWrapper').offset().left;
                $('.spotifySuggestions').animate({'scrollLeft':elOff+'px'})
            }else{
                
            }
        });

    }

    $('.friends button').click(function(e){
        e.stopPropagation();
        $('.popUp').fadeIn();
    })

    $('.menuR').click(function(e){
        e.stopPropagation();
        $('.menuRO ul').css('display','block');
    })

    verificarCliqueFechar();

    function verificarCliqueFechar(){
        
        var el = $('body,.popUp span');

        el.click(function(){
            $('.popUp').fadeOut();
            $('.menuRO ul').css('display','none');
        })

        $('.popUp').click(function(e){
            e.stopPropagation();
        })

        $('.menuRO ul').click(function(e){
            e.stopPropagation();
        })

    }

})