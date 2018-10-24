$(document).ready(function() {

    $(document).on('focus', '.formation.js-datepicker', function(e) {
        $(this).datepicker({
            format: 'yyyy',
            language: 'fr'
        });
    });

    $(document).on('focus', '.experience.js-datepicker', function(e) {
        $(this).datepicker({
            format: 'mm/yyyy',
            language: 'fr'
        });
    });

    $(document).on('focus', '.work.js-datepicker', function(e) {
        $(this).datepicker({
            format: 'dd/mm/yyyy',
            language: 'fr'
        });
    });

});