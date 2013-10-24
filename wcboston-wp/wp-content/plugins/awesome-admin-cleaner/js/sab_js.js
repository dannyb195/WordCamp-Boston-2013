// JavaScript Document
(function() {
		  var $ = jQuery;
		  $(document).ready(function() {									
									 $('h2.gaiasab').on('click', (function() {
																						$(this).next('table.gaiasab').slideToggle();
																						})
																	 );
									 });
		  })();