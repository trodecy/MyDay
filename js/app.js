jQuery( function() {
	
	// Table sortable
	jQuery( 'td, th', '.sortableTable' ).each( function () {
		var cell = jQuery( this );
		cell.width( cell.width() );
	});

	jQuery( '.sortableTable tbody' ).sortable({
		axis					: 'y',
		containment				: '#main',
		items					: '> tr',
		forcePlaceholderSize	: true,
		placeholder 			:'must-have-class',
		start					: function( event, ui ) {
			var cellCount = 0;
			jQuery( 'td, th', ui.helper ).each( function () {
				var colspan 	= 1,
					colspanAttr = jQuery( this ).attr( 'colspan' );
				
				if ( colspanAttr > 1 )
					colspan = colspanAttr;
				
				cellCount += colspan;
			});

			ui.placeholder.html( '<td colspan="' + cellCount + '"><a href="#">&nbsp;</a></td>' );
		},
		update					: function( event, ui ) {
			console.log( 'update' );
		}
	}).disableSelection();

	// Adding steps to task steps list
	var task_form		= jQuery( '#task_form' ),
		add_button		= jQuery( '#add_task_step' ),
		step_desc		= jQuery( '#task_step_desc' ),
		step_list		= jQuery( '#task_steps' ),
		amount_of_steps = 0;
	
	add_button.on( 'click', function() {
		var value = step_desc.val();

		if ( amount_of_steps == 0 && value != '' )
			step_list.prepend( '<h3>Alle stappen binnen deze taak</h3>' );

		if ( value != '' ) {
			step_desc.val( '' );
			step_list.append( '<li class="list-group-item">' + value + '</li>' );
			task_form.append( '<input type="hidden" name="task_steps_array[]" value="' + value + '" />' );
			amount_of_steps++;
		}
	});
});