$(document).ready(function(){
   //$('tr:even').css('background','#b2aaaa')
   //$('tr:odd').css('background','#b20000')

    $('#tabela1 tr:even').css('background','#d30000');
    $('#tabela1 tr:odd').css('background','#0029d3');

    $('#tabela1 tr:first').css('background','#adeada');
    $('#tabela1 tr:last').css('background','#adeada');

    $('#tabela1 tr:eq(2)').css('background','#adeada');
    $('#tabela1 td:eq(3)').css('background','#adeada');
    
    $('#tabela1').hover(function(){
       $('#widoczny').toggle(); 
    });

    $('#tabela1 td:contains("Sol")').css('background','#aaafff'); //rozmiar liter ma znaczenie

    $('#widoczny').click(function(){
    $('#obraz').show(2000)
    });
    $('#niewidoczny').click(function(){
    $('#obraz').hide(2000)
    });
});
