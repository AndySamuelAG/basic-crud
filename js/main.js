$(function(){
    var fill_color = $('.wrap')
    $.each(fill_color, function(){
        colorDraw($(this));
    })
    var action_items = '<i class="fa fa-edit edit"></i><i class="fa fa-trash-alt delete"></i><i class="fa fa-palette color"></i>';
    var action_check = '<i class="fa fa-check check"></i>'
    
    // EDITAR FILA
    $('table').on('click', '.edit', function(){
        var column_wrap = $(this).closest('.wrap')
        var column_id = column_wrap.attr('data-id');
        column_wrap.find($('.item_1, .item_2'))
        .prop('contenteditable', 'true')
        .addClass('editing');
        column_wrap.find($('.item_3'))
        .html('')
        .html(action_check)          
    })
    
    // UPDATE
    $('table').on('click', '.check',function(){
        var column_wrap = $(this).closest('.wrap')
        var column_id = column_wrap.attr('data-id')
        var item_1 = column_wrap.find('.item_1').html()
        var item_2 = column_wrap.find('.item_2').html()
        if(item_1 == '' || item_2 == ''){
            alert('No puedes dejar campos vacíos')
        }else{
            $.ajax({
                method: 'POST',
                url: 'script/update.php',
                data:{
                    id: column_id,
                    item_1: item_1,
                    item_2: item_2
                },
            }).done(function(row){
                actionItems(column_wrap);
            })              
        }
    })

    // DELETE
    $('table').on('click', '.delete', function(){
        var column_wrap = $(this).closest('.wrap');
        var column_id = column_wrap.attr('data-id');
        if(confirm('¿Seguro que deseas eliminar este elemento?')){
            $.ajax({
                method: 'POST',
                url: 'script/remove.php',
                data:{
                    id: column_id
                }
            }).done(function(e){
                column_wrap.remove();
            })
        }
    })

    // ADD
    $('table').on('click', '.add', function(){
        var column_wrap = $('.column-add');
        var item_1 = $('.table_add_1').html();
        var item_2 = $('.table_add_2').html();
        if(item_1 == '' || item_2 == ''){
            alert('No puedes dejar campos vacíos')
        }else{

            $.ajax({
                method: 'POST',
                url: 'script/add.php',
                data:{
                    item_1: item_1,
                    item_2: item_2
                }
            }).done(function(e){
                $(column_wrap).remove();
                $('table').append(e);
            })
        }
    })


    // EDIT COLOR
    $('table').on('click', '.color', function(){
        var column_wrap = $(this).closest($('.wrap'));
        var id = $(column_wrap).attr('data-id');
        var color = colorRandom(column_wrap)
        $.ajax({
            method: 'POST',
            url: 'script/update_color.php',
            data:{
                id: id,
                color: color
            }
            }).done(function(e){
                colorDraw(column_wrap)
        })
    })
    
    // FUNCTION THAT GENERATE A RANDOM COLOR
    function colorRandom(column_wrap){
        var index = Math.floor(Math.random() * colors.length);
        $(column_wrap).attr('data-color', colors[index]);
        return colors[index];
    }

    // FUNCTION THAT DRAW THE COLOR
    function colorDraw(column_wrap){
        var color = $(column_wrap).attr('data-color');
        $(column_wrap).css('background-color', "#"+color);
    }

    function actionItems(column_wrap){
        $(column_wrap).find($('.item_1, .item_2'))
        .prop('contenteditable', 'false')
        .removeClass('editing');
        column_wrap.find('.item_3')
        .html('')
        .html(action_items);
    }

    var colors = [
        'cd6155',
        'ec7063',
        'af7ac5',
        'a569bd',
        '5499c7',
        '5dade2',
        '48c9b0',
        '45b39d',
        '52be80',
        'f4d03f',
        'f5b041',
        'eb984e',
        'cacfd2',
        'aab7b8',
        '58d68d',
        '5d6d7e',
        'f2f2f2',
        '2471a3',
        '21618c',
        '943126',
        '9c640c',
        '0b5345',
        'd7bde2'
    ]
})