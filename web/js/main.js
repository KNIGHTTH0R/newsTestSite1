$(function () {
    $('[data-toggle="popover"]').popover();

    // изменение классов для аналитики
    var readState='ReadOff';
    $('#ReadMore').on('click',function () {
        if($('#block1').attr('class')==readState)
        {
            $('#block1').css('display','block');
            $('#block1').attr('class','ReadOn');
        }
        else
        {
            $('#block1').css('display','none');
            $('#block1').attr('class','ReadOff');
        }


    });









});