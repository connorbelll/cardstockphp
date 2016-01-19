/**
 * Created by connorbell on 1/18/16.
 */
$(document).ready(function(){
    $.ajax({
        dataType: "json",
        url: '/games/listgames.php',
        success: function(res){
            var htmlToInsert = "";
            $.each(res, function(idx, content){
                htmlToInsert += '<a href="/">' + content["name"] + "</a>";
            });
            $('#gameslist').append(htmlToInsert);
        }
    });

});