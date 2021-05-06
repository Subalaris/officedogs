$(document).ready(function() {

    $(".dogs-card:not(:first)").addClass('apply-filters');
    $("body").addClass('food-allergies-active');

    $('.breeds-list li a').click(function() {
        var breedClass = $(this).attr('class');

        $('.breeds-list li').removeClass('active');
        $(this).parent().addClass('active');

        if (breedClass == 'all') {
            $('.dog-list-container').children('div.apply-filters').show();
        } else {
            $('.dog-list-container').children('div.apply-filters:not(.' + breedClass + ')').hide();
            $('.dog-list-container').children('div.apply-filters.' + breedClass).show();
        }
        return false;
    });

    $(".filter__item-dropdown, .breeds-list li a").on("click", function(e) {
        $(".breeds-list").toggleClass("open");
        e.stopPropagation()
    });
    $(document).on("click", function(e) {
        if ($(e.target).is(".breeds-list, .filter__item-dropdown") === false) {
            $(".breeds-list").removeClass("open");
        }
    });


    $(".breeds-list li a").click(function() {
        let selectedTxt = $(".breeds-list li.active").text();

        $(".filter__item-selected").text(selectedTxt);
    });


    $(".toggle-allergies").click(function() {
        $("body").toggleClass('food-allergies-active');
    });


});