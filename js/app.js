$(document).ready(function() {

    $(".dogs-card:not(:first)").addClass('apply-filters');
    $("body").addClass('food-allergies-active');

    $('.breeds-list li a').click(function() {
        var breedClass = $(this).attr('class');

        console.log(breedClass);
        $('.breeds-list li').removeClass('active');
        $(this).parent().addClass('active');

        if (breedClass == 'all') {
            $('.dog-list-container').children('div.apply-filters').show(300);
        } else {
            $('.dog-list-container').children('div.apply-filters:not(.' + breedClass + ')').hide(200);
            $('.dog-list-container').children('div.apply-filters.' + breedClass).show(300);
        }
        return false;
    });

    $(".filter__item-dropdown").on("click", function(e) {
        $(".breeds-list").toggleClass("open");
        e.stopPropagation()
    });
    $(document).on("click", function(e) {
        if ($(e.target).is(".breeds-list, .filter__item-dropdown") === false) {
            $(".breeds-list").removeClass("open");
        }
    });


    $(".breeds-list__item").click(function() {
        let selectedTxt = $(".breeds-list__item.active").text();

        $(".filter__item-selected").text(selectedTxt);
    });


    $(".toggle-allergies").click(function() {
        $("body").toggleClass('food-allergies-active');
    });


});