	// validate signup form on keyup and submit
	var validator = $("#file_form").validate({
		rules: {
			 // no quoting necessary
			number: {
				required: true,
				maxlength: 16
			},
			name: {
				required: true,
				maxlength: 16
			},
			date_start: {
				required: true,
				minlength:10,
				maxlength: 10
			},
			date_end: {
				minlength:10,
				maxlength: 10
			},
			tags: {
				required: true,
			},
			stored: {
				required: true,
			}
		},
		messages: {
			number: {
				required: "Provide Catalog Number- Max 16 ",
				rangelength: jQuery.format("Enter no more than {0} characters")
			},
			name: {
				required: "Provide a File Name ",
				rangelength: jQuery.format("Enter no more than {0} characters")
			},
			date_start: {
				required: "Provide a Valid Date",
				rangelength: jQuery.format("Enter {0} characters")
			},
			date_end: {
				rangelength: jQuery.format("Enter {0} characters")
			},
			tags: {
				required: "Provide keywords for file (used to search for file)",
			},
			stored: {
				required: "Provide storage location for file",
			}
		},
		// the errorPlacement has to take the table layout into account
		errorPlacement: function(error, element) {
			if ( element.is(":radio") )
				error.appendTo( element.parent().next().next() );
			else if ( element.is(":checkbox") )
				error.appendTo ( element.next() );
			else
				error.appendTo( element.parent().next() );
		}
	
	});//end validator