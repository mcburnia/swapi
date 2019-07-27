jQuery(document).bind('formcraft_math_change', function(event, form){
	setTimeout(function() {
		form.find('.paypal-cover table').each(function(){
			paypal = jQuery(this);
			symbol = paypal.attr('data-symbol');
			total = 0;
			thousand = jQuery(this).parents('.fc-form').attr('data-thousand');
			jQuery(this).find('.pp-items').each(function(){

				var new_name = jQuery(this).find('.pp-sub-item').text();
				var new_qty = jQuery(this).find('.pp-sub-qty').text();
				var new_total = jQuery(this).find('.pp-sub-total').text().replace(thousand, '');
				var index = jQuery(this).attr('data-index');

				new_total = isNaN(parseFloat(new_total)) ? 0 : new_total;
				
				new_qty = isNaN(parseFloat(new_qty)) ? 0 : new_qty;
				new_total = parseFloat(new_total) / parseFloat(new_qty);

				form.parents('.form-live').find('.paypal-form').find('.pp-final-name-'+index).val(new_name);
				form.parents('.form-live').find('.paypal-form').find('.pp-final-qty-'+index).val(new_qty);
				form.parents('.form-live').find('.paypal-form').find('.pp-final-amount-'+index).val(new_total);
			});
			jQuery(this).find('.pp-sub-total').each(function(){
				number = isNaN(parseFloat(jQuery(this).text().replace(thousand, ''))) ? 0 : parseFloat(jQuery(this).text().replace(thousand, ''));
				total = (parseFloat(total) + parseFloat(number)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, thousand);
				paypal.parents('.paypal-cover').find('.pp-total').text(symbol+total);
			});		
			setTimeout(function(){
				form.parents('.form-live').find('.paypal-form').find('[name="a3"]').val(form.find('.pp-subs-price').val());
			}, 100);
		});
	}, 750)
});

jQuery(document).bind('formcraft_submit_trigger', function(event, form, data, abort){
	form.attr('paypal-hidden', form.find('.form-element-type-PayPal.state-hidden').length)
})
jQuery(document).bind('formcraft_submit_result', function(event, form, response){
	if ( form.parents('.form-live').find('.paypal-form').length > 0 && form.attr('paypal-hidden') == '0' )
	{
		if ( response.redirect )
		{
			form.parents('.form-live').find('.paypal-form').append('<input type="hidden" name="return" value="'+response.redirect+'">');
			delete response.redirect;
		}
		form.parents('.form-live').find('.paypal-form').append('<input type="hidden" name="custom" value="'+response.submission_id+'">');
		var length = form.find('.pp-items').length;
		form.find('.pp-items').each(function(x){
			var amount = form.parents('.form-live').find('.paypal-form').find('.pp-final-qty-'+(x+1)).val();
			if (amount==0) {
				form.parents('.form-live').find('.paypal-form').find('[name="'+'item_id_'+(x+1)+'"]').remove();
				form.parents('.form-live').find('.paypal-form').find('.pp-final-name-'+(x+1)).remove();
				form.parents('.form-live').find('.paypal-form').find('.pp-final-qty-'+(x+1)).remove();
				form.parents('.form-live').find('.paypal-form').find('.pp-final-amount-'+(x+1)).remove();
				var a = x + 2
				while (a <= length) {
					console.log(a);
					form.parents('.form-live').find('.paypal-form').find('[name="'+'item_id_'+a+'"]').attr('name','item_id_'+(a-1));
					form.parents('.form-live').find('.paypal-form').find('[name="'+'item_name_'+a+'"]').attr('name','item_name_'+(a-1));
					form.parents('.form-live').find('.paypal-form').find('[name="'+'quantity_'+a+'"]').attr('name','quantity_'+(a-1));
					form.parents('.form-live').find('.paypal-form').find('[name="'+'amount_'+a+'"]').attr('name','amount_'+(a-1));
					a++;
				}
			}
		})
		form.parents('.form-live').find('.paypal-form').trigger('submit');
	}
});
jQuery(document).ready(function(){
	jQuery('.fc-form').each(function(){
		form = jQuery(this);
		if ( form.find('.paypal-cover').length!=0 ) {
			table = form.find('.paypal-cover table');
			cover = form.parents('.form-live');
			uniq = cover.attr('data-uniq');

			if ( table.attr('data-email').trim()=='' )
			{
				if (typeof toastr!='undefined') { toastr["error"]("Error: PayPal Email is Required"); }
			}


			pp_url = table.attr('data-mode')=='sandbox' ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';
			cover.append('<form class="paypal-form" id="pp-form-'+uniq+'" action="'+pp_url+'"></form>');
			pp_form = jQuery('#pp-form-'+uniq);
			pp_form.append('<input type="hidden" name="upload" value="1">');
			pp_form.append('<input type="hidden" name="business" value="'+table.attr('data-email')+'">');
			pp_form.append('<input type="hidden" name="button_subtype" value="'+table.attr('data-type')+'">');
			pp_form.append('<input type="hidden" name="currency_code" value="'+table.attr('data-currency')+'">');
			pp_form.append('<input type="hidden" name="notify_url" value="'+FCPP.paypal_ipn+'">');
			if ( table.attr('data-pp-type')=='subscription' )
			{
				pp_form.append('<input type="hidden" name="cmd" value="_xclick-subscriptions">');
				pp_form.append('<input type="hidden" name="src" value="1">');
				pp_form.append('<input type="hidden" name="item_name" value="'+table.attr('data-s-description')+'">');
				pp_form.append('<input type="hidden" name="a3" value="'+form.find('.pp-subs-price').val()+'">');
				pp_form.append('<input type="hidden" name="p3" value="'+table.attr('data-s-every')+'">');
				pp_form.append('<input type="hidden" name="t3" value="'+table.attr('data-s-period')+'">');
				var frequency = parseInt(table.attr('data-s-frequency'));
				if ( frequency!=0 && frequency>=2 && frequency<=52 )
				{
					pp_form.append('<input type="hidden" name="srt" value="'+table.attr('data-s-frequency')+'">');
				}
			}
			else
			{
				pp_form.append('<input type="hidden" name="cmd" value="_cart">');
				var items = '';
				var i = 0;
				table.find('.pp-items').each(function(){
					i++;
					new_total = isNaN(parseFloat(jQuery(this).find('.pp-sub-total').text())) ? 0 : jQuery(this).find('.pp-sub-total').text();
					new_qty = isNaN(parseFloat(jQuery(this).find('.pp-sub-qty').text())) ? 0 : jQuery(this).find('.pp-sub-qty').text();
					new_total = parseFloat(new_total) / parseFloat(new_qty);
					new_total = isNaN(parseFloat(new_total)) ? 0 : new_total;
					items = items + "<input class='pp-final-name-"+i+"' type='hidden' name='item_name_"+i+"' value='"+jQuery(this).find('.pp-sub-item').text()+"'>";
					items = items + "<input class='pp-final-qty-"+i+"' type='hidden' name='quantity_"+i+"' value='"+jQuery(this).find('.pp-sub-qty').text()+"'>";
					items = items + "<input class='pp-final-amount-"+i+"' type='hidden' name='amount_"+i+"' value='"+new_total+"'>";
					items = items + "<input type='hidden' name='item_id_"+i+"' value='"+i+"'>";
				});
				pp_form.append(items);
			}
		}
	});
});