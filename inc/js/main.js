function toggle(source) {
  checkboxes = document.getElementsByClassName('checkup');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}

$( document ).ready(function() {
	$(".states-option").select2({
	    placeholder: "Select a State",
	    width: '200px',
	    allowClear: true
	});
	
$("#interest_input").select2({
	tags:["Political", "Lawyer", "Judge"],
	width: "100%",
	tokenSeparators: [",", " "]});
	
$("#groups_input").select2({
	tags:["Political", "Lawyer", "Judge"],
	width: "100%",
	tokenSeparators: [",", " "]});

$("#capabilities_input").select2({
	tags:["Political", "Lawyer", "Judge"],
	width: "100%",
	tokenSeparators: [",", " "]});		
	
	
	
	
	
	
	
	
		
});



