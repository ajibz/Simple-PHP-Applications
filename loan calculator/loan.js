document.querySelector('#calculate').addEventListener('click',(e)=>{
	e.preventDefault()
	var loan = document.querySelector('#loan').value
	var interest = document.querySelector('#interest').value
	var period = document.querySelector('#period').value
	var result = document.querySelector('#result')

	if(loan == "" && interest == "" && period == ""){
		result.style.transition = '1s'
		result.style.transform = 'translateX(-0px)'


		result.innerHTML = "Loan Amount| Loan Interest | Period can not be empty"

	}
	else if( interest == "" && period == ""){
		result.style.transition = '1s'
		result.style.transform = 'translate(-0px)'


		result.innerHTML = "Loan Interest | Period can not be empty"

	}
	else if(period == ""){
		result.style.transition = '1s'
		result.style.transform = 'translate(-0px)'


		result.innerHTML = "Repayment Month can not be empty"

	}
	else if( loan == "" && period == ""){
		result.style.transition = '1s'
		result.style.transform = 'translate(-0px)'


		result.innerHTML = "Loan Amount | Period can not be empty"

	}
	else if( loan == "" && interest == ""){
		result.style.transition = '1s'
		result.style.transform = 'translate(-0px)'


		result.innerHTML = "Loan Amount  | Loan Interest can not be empty"

	}
	else if( interest == ""){
		result.style.transition = '1s'
		result.style.transform = 'translate(-0px)'


		result.innerHTML = "Loan Interest can not be empty"

	}
	else{
		result.style.transition = '1s'
		result.style.transform = 'translate(-0px)'
		result.innerHTML = "#"+ ""+(loan+(loan * interest)/100)/period
	}

})