$(document).ready(function () {




	/*
	 |------------------------------------------------------------------------------------
	 | CONTACT FORM
	 |------------------------------------------------------------------------------------
	 */

	// AUTO-SIZE COMMENT BOX
	$('textarea')
	.each(function () {
    	this.setAttribute(
    		'style',
    		'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;'
   		);
	})
	.on(
		'input',
		function () {
	    	this.style.height = 'auto';
	    	this.style.height = (this.scrollHeight) + 'px';
		}
	);




});