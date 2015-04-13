
$(document).ready(function() {
    $("#formMovies").submit(function () {
        var $pos = $(this);
        $(".list-movies").remove();
        $.ajax
        ({
            url: $pos.attr('action'),
            type: $pos.attr('method'),
            data: $pos.serialize(),
            success: function (html) {
                var $ans = $.parseJSON(html);
                console.log($ans);
                var $jaquette;
                    $.each($ans.feed.movie, function (key, value) {

                        if (value.hasOwnProperty("poster")) {
                            $jaquette = value.poster.href;
                        }
                        else {
                            $jaquette = "http://fr.web.img4.acsta.net/r_160_240/b_1_d6d6d6/commons/emptymedia/empty_photo.jpg"
                        }

                        var $oneMovie = $("<div class='list-movies'><img src=\"" + $jaquette + "\" width=\"10%\" height=\"10%\" /><label>Nom : </label>  " + value.title + " <label>Titre original : </label> " + value.originalTitle + " </br><label>Ann&eacutee : </label> " + value.productionYear + "</br><label>Acteurs : </label> " + value.castingShort.actors + "</div>");
                        $("#content").append($oneMovie);
                    });
                    //$("#content").append($retour.movie.originalTitle);

            }

        });
        return false;
    });
});




