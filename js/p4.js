
$(document).ready(function() {
	//js for dataTable 
	$('#example').dataTable( {

	} );
	
		//Date Picker
		$( ".datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});

		 
	//making datepicker draggable
	$(".ui-datepicker").draggable();	
	
	//sizing for column one on file_more table
		$('#more').dataTable( {
       "aoColumns": [ 
         { "sWidth": "40%" },
         null,
       ],
       "iDisplayLength": 30,
       
     } );
	
	
	
} )