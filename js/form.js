/*-------------------------------------------------------------------------------------------------
Validator for adding a new file
-------------------------------------------------------------------------------------------------*/

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
		},
		
		// set this class to error-labels to indicate valid fields
	//	success: function(label) {
			// set &nbsp; as text for IE
			//label.html("&nbsp;").addClass("checked");
			//label.addClass("checked");
			//$(this.label'.glyphicon-check').css('color', 'green');
		//},
	//	highlight: function(element, errorClass) {
	//		$(element).parent().next().find("." + errorClass).removeClass("checked");
		//}
	
	});//end validator
/*-------------------------------------------------------------------------------------------------
Validator for adding a new project
-------------------------------------------------------------------------------------------------*/

	// validate signup form on keyup and submit
	var validator = $("#projects_add").validate({
		rules: {
			project_name: {
				required: true,
				maxlength: 16
			},
			project_description: {
				required: true,
				maxlength: 25
			}
		
		},
		messages: {
			project_name: {
				required: "Provide a Project Name ",
				rangelength: jQuery.format("Enter no more than {0} characters")
			},
			project_description: {
				required: "Provide a Project Descripion ",
				rangelength: jQuery.format("Enter no more than {0} characters")
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