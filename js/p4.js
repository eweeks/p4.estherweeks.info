
$(document).ready(function() {
	$('#example').dataTable( {
		//"bProcessing": true,
		//"bServerSide": true,
		//"sAjaxSource": "../examples_support/server_processing.php"
	} );
	
		//Date Picker
		$( ".datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});

	
	//Tooltip
		// $( document ).tooltip();
		 
	//making datepicker draggable
	$(".ui-datepicker").draggable();	
	
	//sizing for column one on file_more table
		$('#more').dataTable( {
       "aoColumns": [ 
         { "sWidth": "15%" },
         null,
       ],
       "iDisplayLength": 25,
       
     } );
	
	
	
} )