/**
 * Created by connorbell on 1/18/16.
 */
$(document).ready(function(){
    reloadList();

    $("#newGame").click(function(){
        console.log($('#newName').val());
        $.ajax({
            type: "post",
            dataType: "json",
            data:{name:$('#newName').val()},
            url: '/games/addgame.php',
            success: function(res){
                reloadList();
            }
        });
    });
});
function reloadList(){

    $.ajax({
        dataType: "json",
        url: '/games/listgames.php',
        success: function(res){
            var htmlToInsert = "";
            $.each(res, function(idx, content){
                htmlToInsert += '<a href="/">' + content["name"] + "</a>";
            });
            $('#gameslist').empty();
            $('#gameslist').append(htmlToInsert);
        }
    });
}