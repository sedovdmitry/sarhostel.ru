	$(function() {

$.datepicker.setDefaults( $.datepicker.regional[ "ru" ] );
		var dates = $( "#from, #to" ).datepicker({
			//dateFormat: 'dd/mm/yy',
			defaultDate: "+1m",
			changeMonth: true,
			numberOfMonths: 2,
			minDate: 0,
			locale:"ru",
			regional:"ru",
			onClose: function( selectedDate ) {
		        if($(this).attr('id')=='from') {
			        $( "#to" ).datepicker( "option", "minDate", selectedDate );
			        $('#to').focus();
			        }

			},                       
			onSelect: function( selectedDate ) {
				var result = $("#ajaxresult").empty(); 
		    	var result = $("#ajaxresult_transform").empty();
				var instance = $( this ).data( "datepicker" );
				var date = $.datepicker.parseDate(
					instance.settings.dateFormat ||
					$.datepicker._defaults.dateFormat,
					selectedDate, instance.settings );
				if(this.id == "from") {
					try {
			                    date.setDate(date.getDate() + 1);
			                    //$('#from').datepicker('option', 'minDate', selectedDate!=='' ? date : '+0d');
			                    $('#to').datepicker('option', 'minDate', selectedDate!=='' ? date : '+0d');
			                }
			                catch (err) {
			                    //console.log(err);
			                }
				} else {
					try {
        			            date.setDate(date.getDate() - 1);
			                    //$('#from').datepicker('option', 'maxDate', selectedDate!=='' ? date : null);
			                }
			                catch (err) {
			                    //console.log(err);
			                }
				
				}
			}
			
		});
		
		$.datepicker.setDefaults($.datepicker.regional["ru"]); 
/*		$( "#from" ).datepicker({onClose: function( selectedDate ) {
		        $( "#to" ).datepicker( "option", "minDate", selectedDate );
		                $('#to').focus();
		        }});*/
		
	});
