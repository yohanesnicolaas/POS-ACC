function validateValue() {

  var eachquantity;
  var quantity;
  var flag = 0;
  var description=[];
  var desc ;
  var $table = $( "<table></table>" );

  quantity = $('.input-number').val();
  $('.input-number').each(function(){
    eachquantity = this.value;
    
    if(eachquantity != "0" ){
      flag++;
      description.push($(this).attr('data-description'));
      console.log(description);
      console.log(eachquantity);
    }  
  })
  if(flag == "0" ){
    $('.btn-primary').removeAttr('data-target','.bs-example-modal-sm');
    toastr.error('Please Input Value!'); 
  }else{
    for ( var i = 0; i < description.length; i++ ) {
        var desc = description[i];
        var $line = $( "<tr></tr>" );
        $line.append( $( "<td></td>" ).html(desc) );
        $table.append( $line );

    }
    $('.btn-primary').attr('data-target','.bs-example-modal-sm');
    $table.appendTo( $( ".description" ) );

    flag = 0;
  }

$('body').on('hidden.bs.modal', '.modal', function () {
    $(".description").empty();
});
  
}

$(".modal").on("bs-example-modal-sm", function(){
    $(".modal-body").html("");
});

//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
  e.preventDefault();
  
  fieldName = $(this).attr('data-field');
  type      = $(this).attr('data-type');
  var input = $("input[name='"+fieldName+"']");
  var currentVal = parseInt(input.val());
  if (!isNaN(currentVal)) {
      if(type == 'minus') {
          
          if(currentVal > input.attr('min')) {
              input.val(currentVal - 1).change();
          } 
          if(parseInt(input.val()) == input.attr('min')) {
              $(this).attr('disabled', true);
          }

      } else if(type == 'plus') {

          if(currentVal < input.attr('max')) {
              input.val(currentVal + 1).change();
          }
          if(parseInt(input.val()) == input.attr('max')) {
              $(this).attr('disabled', true);
          }

      }
  } else {
      input.val(0);
  }
});

$('.input-number').focusin(function(){
	$(this).data('oldValue', $(this).val());
});

$('.input-number').change(function() {
      
	minValue =  parseInt($(this).attr('min'));
	maxValue =  parseInt($(this).attr('max'));
	valueCurrent = parseInt($(this).val());
  
	name = $(this).attr('name');
	if(valueCurrent >= minValue) {
			 $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
	} else {
      alert('Sorry, the minimum value was reached');
      $(this).val($(this).data('oldValue'));
	}
	if(valueCurrent <= maxValue) {
     	$(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
  	} else {
      alert('Sorry, the maximum value was reached');
      $(this).val($(this).data('oldValue'));
  	}
});

$(".input-number").keydown(function (e) {
   	// Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) || 
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});