

// Buttons for next and previous to show image pictures
$(document).ready(function(){

    $('.next').on('click', function() {

        const notActive = $( ".notActive" );

        const Active = $( ".active" );

       $(notActive).show("slow");
        $(Active).hide();
    });

    $('.prev').on('click', function() {
        const notActive = $( ".notActive" );

        const Active = $( ".active" );

        $(notActive).hide();
        $(Active).show("slow");
    });

    // Mobile buttons

    $('.next_Mobile').on('click', function() {

        const notActive = $( ".notActive" );

        const Active = $( ".active" );

        $(notActive).show("slow");
        $(Active).hide();
    });

    $('.prev_Mobile').on('click', function() {
        const notActive = $( ".notActive" );

        const Active = $( ".active" );

        $(notActive).hide();
        $(Active).show("slow");
    });


// Effect for description text on laptop and bigger screens.
    if ($(window). width() > 1024) {
        $('div.instagram_picture').hover(function () {
            $('.active2', this).slideToggle('slow');
        }, function () {
            $('.active2', this).slideToggle('slow');
        });

        $('div.instagram_picture').hover(function () {
            $('.notActive2', this).slideToggle('slow');
        }, function () {
            $('.notActive2', this).slideToggle('slow');
        });
    }

});




