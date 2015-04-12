
$(document).ready(function() {
    $("#formMovies").submit(function () {
        var $pos = $(this);
        alert('ok');
        $(".list-movies").remove();
        $.ajax
        ({
            url: '../controllers/GererMovies.php',
            type: $pos.attr('method'),
            data: $pos.serialize(),
            success: function (html) {
                var $ans = $.parseJSON(html);
                console.log($ans);
                $.each($ans.feed.movie, function(key, value){
                    var $oneMovie = $("<div class='list-movies'><img src=\"" + value.poster.href + "\" width=\"10%\" height=\"10%\" /><label>Nom : </label>  " + value.title + " <label>Titre original : </label> " + value.originalTitle + " </br><label>Ann&eacutee : </label> " + value.productionYear + "</br><label>Acteurs : </label> " + value.castingShort.actors + "</div>");
                    $("#content").append($oneMovie);
                });
                //$("#content").append($retour.movie.originalTitle);
            }

        });
        return false;
    });
});




