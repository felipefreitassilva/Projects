$(function () {


    //Menu de navegação

    var cardapio = $('nav ul.navegacao li:nth-of-type(2)');

    cardapio.hover(function (e) {
        e.stopPropagation();
        $('nav ul li span').html('v');
        $('.cardapioMenu').slideDown();
        $('nav ul li span').removeClass('menuFechado').addClass('menuAberto');
    })

    verificarHoverFechar();

    function verificarHoverFechar() {

        var vHF = $('section,div');

        vHF.hover(function () {
            $('nav ul li span.menuAberto').html('>');
            $('.cardapioMenu').slideUp();
            $('nav ul li span').removeClass('menuAberto').addClass('menuFechado');
        })

        $('.cardapioMenu').click(function (e) {
            e.stopPropagation();
        })

    }


    //Menu mobile

    Hamburger();

    function Hamburger() {

        var span = $('nav ul.hamburger span');
        var hamburger = $('nav ul.hamburger');
        var menuMobile = $('nav ul.navegacaoMobile')

        hamburger.click(function (e) {
            e.stopPropagation();
            menuMobile.slideToggle();
            //span.html('&cross;');
        });

        var vHF = $('body');

        vHF.click(function () {
            menuMobile.slideUp();
            //span.html('&#9776;');
        })

    }


    //Adicionar um produto

    addProduto();
    function addProduto() {

        var addproduto = $('.novoproduto button');
        var sumupw = $('.form div.sumup-wrapper');
        var sumup = $('.form div.sumup');
        var subtotal = $('.sumup div h4 span');
        var quantidadeN = $('input[name=quantidade]');
        var sppdt = $('.sumup div span.pdt');

        addproduto.click(function () {

            var produtos = $('#meuspedidos tr').length - 1;
            var quantidade = $('#quantidade').val();
            var preco = $("select.produtos").children("option:selected").val().split("_")[1];
            var total = preco * quantidade;

            var table = $('tbody');
            var soma = $('tfoot tr');
            var novoproduto = $("select.produtos").children("option:selected").val().split("_")[0];
            var novopreco = $("select.produtos").children("option:selected").val().split("_")[1];
            var novaquantidade = $('#quantidade').val();

            if ($('#sumup').css('display') == 'none') {
                $('.pedido .form').css('justify-content', 'space-between');
                sumupw.css('display', 'flex');
                sumup.css('display', 'flex');
                sppdt.html(produtos);
                quantidadeN.val(1);
                //alert('Produto adicionado');
                table.append('<tr><th>' + novoproduto + '</th><th>' + novopreco + '</th><th>' + novaquantidade + '</th><th class="info-valor">' + total + '</th></tr>');
            } else {
                sppdt.html(produtos);
                quantidadeN.val(1);
                //alert('Produto adicionado');
                table.append('<tr><th>' + novoproduto + '</th><th>' + novopreco + '</th><th>' + novaquantidade + '</th><th class=\"info-valor\">' + total + '</th></tr>');
            }

            let tdsValores = document.querySelectorAll('.info-valor');
            let valorfinal = 0;

            for (let i = 0; i < tdsValores.length; i++) {

                let valor = parseFloat(tdsValores[i].textContent);
                valorfinal = valorfinal + valor;

            }

            soma.html('<th colspan="4">O valor final é: R$' + valorfinal + ',00</th>');
            subtotal.html('R$ ' + valorfinal + ',00');

        })

    }


    //Ver mais (produtos)

    var vermais = $('#sumup .vermais img');

    vermais.click(function (e) {
        e.stopPropagation();
        $('.meuspedidos-wrapper').fadeIn();
        $('.totalpedido').fadeIn();
        $('.meuspedidos').fadeIn();
        $('body').css('overflow', 'hidden');
    })

    verificarCliqueFechar();

    function verificarCliqueFechar() {

        var vCF = $('body, .menos');

        vCF.click(function () {
            $('.meuspedidos-wrapper').fadeOut();
            $('.totalpedido').fadeOut();
            $('.meuspedidos').fadeOut();
            $('body').css('overflowY', 'scroll');
        })

        $('.meuspedidos').click(function (e) {
            e.stopPropagation();
        })

        $('.totalpedido').click(function (e) {
            e.stopPropagation();
        })

    }


    //Verificar telefone

    $('input[name=telefone]').focus(function () {
        resetarCampoInvalido($(this));
    })

    $('form').submit(function (e) {
        //e.preventDefault();
        var telefone = $('input[name=telefone]').val();

        if (verificarTelefone(telefone) == false) {
            aplicarCampoInvalido($('input[name=telefone]'));
            return false;
        } else {
            alert("Pedido realizado com sucesso!");
            return false;
        }
    })

    function aplicarCampoInvalido(el) {
        el.css('color', 'red');
        el.css('border', '2px solid red');
        el.val('Campo Inválido!');
    }
    function resetarCampoInvalido(el) {
        el.css('color', 'black');
        el.css('border', '0.05px solid black');
        el.val('');
    }

    function verificarTelefone(telefone) {
        if (telefone == '') {
            return false;
        }

        if ((telefone.length < 14) || (telefone.length > 15)) {
            return false;
        }
    }


    //Mascara telefone

    $('input[name=telefone]').mask('(00) 0000-00009');


    //Slider

    $('.produtos-destaque').slick({
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: true,
        prevArrow: '.arrow_prev',
        nextArrow: '.arrow_next',
        pauseOnFocus: false,
        pauseOnHover: false,
        mobileFirst: true,
    });

})