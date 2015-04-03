$(document).ready(function() {
    $("#frmAccueil").submit(function () {
        alert("ok");
        var $pos = $(this);
        $.ajax
        ({
            url: 'controllers/GererMovies.php',
            type: 'POST',
            data: $pos.serialize(),
            success: function (html) {
                var $retour = $.parseJSON(html);
                console.log($retour);
                $("#content").append($retour.movie.code);
            }

        })
    });
});

