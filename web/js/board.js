$(function(){

    var aCells = {};
    var timeStart = parseInt(new Date().getTime()/1000);

    $('.cell').click(function(){
        var cellColor = $(this).attr('data-color');
        var newColor = 'default';
        switch(cellColor){
            case 'red':
                newColor = 'yellow';
                break;
            case 'yellow':
                newColor = 'green';
                break;
            case 'green':
                newColor = 'default';
                break;
            default:
                newColor = 'red';
        }
        $(this).attr('data-color', newColor);
        $(this).removeClass('cell-' + cellColor).addClass('cell-' + newColor);
    });

    $('#processSave').click(function(){
        if($(".row-name").is(":hidden")) {
            $(".row-name").show();
            return false;
        }
    });

    $("#board-form").submit(function(){
        var timeWork = parseInt(new Date().getTime()/1000);

        $.each($('.cell'), function(key, value){
            if($(this).attr('data-color') != ''){
                if(typeof aCells[$(this).attr('data-axis-x')] == 'undefined'){
                    aCells[$(this).attr('data-axis-x')] = {};
                }
                aCells[$(this).attr('data-axis-x')][$(this).attr('data-axis-y')] = $(this).attr('data-color');

            }
        });

        $("#time_start").val(timeStart);
        $("#time_work").val(timeWork);
        $("#data").val(JSON.stringify(aCells));
    });

});
