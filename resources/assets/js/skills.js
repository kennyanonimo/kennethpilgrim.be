$(document).ready(function () {


	/*************************************************************************************
	 * FILTER BUTTONS                                                                    *
	 *************************************************************************************/

	/* Hide all items */
	$('.filter').hide();

	/* Button clicked: show items with category */
	$(".filter-button").click(function () {

	    /* Get data-filter category of button */
	    var value = $(this).attr('data-filter');

	    /* FOR ALL BUTTON: if (value == "all") { $('.filter').show('1000'); } else { */

	    /* Hide all other categories */
	    $(".filter").not('.' + value).hide('0');
	    /* Show items with chosen category */
	    $('.filter').filter('.' + value).show('4000');

	    /* Color the selected button by adding a class */
	    $('button').removeClass('selected');
	    $(this).addClass('selected');
	});


});