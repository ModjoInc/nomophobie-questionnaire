$(function(){
	$('#submit').click(function(){
		let total = 0;
		for(i = 1; i <= 20; i++){
			numRep = $("#question"+i).val();
			total = total + parseFloat(numRep);
		}
		$('#score').text(total);
	});
});
