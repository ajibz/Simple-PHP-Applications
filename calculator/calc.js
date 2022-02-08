
//Beginning of Button Number clicks
document.getElementById('one').addEventListener('click',()=>{
	var val = document.getElementById('one').value
	document.getElementById('display').value +=val
})
document.getElementById('two').addEventListener('click',()=>{
	var val = document.getElementById('two').value
	document.getElementById('display').value +=val
})
document.getElementById('three').addEventListener('click',()=>{
	var val = document.getElementById('three').value
	document.getElementById('display').value +=val
})
document.getElementById('four').addEventListener('click',()=>{
	var val = document.getElementById('four').value
	document.getElementById('display').value +=val
})
document.getElementById('five').addEventListener('click',()=>{
	var val = document.getElementById('five').value
	document.getElementById('display').value +=val
})
document.getElementById('six').addEventListener('click',()=>{
	var val = document.getElementById('six').value
	document.getElementById('display').value +=val
})
document.getElementById('seven').addEventListener('click',()=>{
	var val = document.getElementById('seven').value
	document.getElementById('display').value +=val
})
document.getElementById('eight').addEventListener('click',()=>{
	var val = document.getElementById('eight').value
	document.getElementById('display').value +=val
})
document.getElementById('nine').addEventListener('click',()=>{
	var val = document.getElementById('nine').value
	document.getElementById('display').value +=val
})
document.getElementById('zero').addEventListener('click',()=>{
	var val = document.getElementById('zero').value
	document.getElementById('display').value +=val
})
document.getElementById('dot').addEventListener('click',()=>{
	var val = document.getElementById('dot').value
		var R = document.getElementById('display').value
		if (R.includes(val)) {
			 document.getElementById('display').value +=""
		}else{
			 document.getElementById('display').value +=val
		}
   	   
	  

	
})

//End of Button number clicks

//Beginning of Arithmetic Operators function
document.getElementById('plus').addEventListener('click',()=>{
	var init = parseFloat(document.getElementById('display').value)
	// var val = init+"+"
	// document.getElementById('firstValue').value = val
	var X = document.getElementById('plus').value
	localStorage.setItem('firstVal',init)
	localStorage.setItem('sign',X)
	document.getElementById('display').value = ""
})
document.getElementById('minus').addEventListener('click',()=>{
	var init = parseFloat(document.getElementById('display').value)
	// var val = init+""
	// document.getElementById('firstValue').value = val
	var X = document.getElementById('minus').value
	localStorage.setItem('firstVal',init)
	localStorage.setItem('sign',X)
	document.getElementById('display').value = ""
})
document.getElementById('multiply').addEventListener('click',()=>{
	var init = parseFloat(document.getElementById('display').value)
	// var val = init+""
	// document.getElementById('firstValue').value = val
	var X = document.getElementById('multiply').value
	localStorage.setItem('firstVal',init)
	localStorage.setItem('sign',X)
	document.getElementById('display').value = ""
})
document.getElementById('divide').addEventListener('click',()=>{
	var init = parseFloat(document.getElementById('display').value)
	// var val = init+""
	// document.getElementById('firstValue').value = val
	var X = document.getElementById('divide').value
	localStorage.setItem('firstVal',init)
	localStorage.setItem('sign',X)
	document.getElementById('display').value = ""
})
document.getElementById('clear').addEventListener('click',()=>{
	
	localStorage.clear()
	document.getElementById('display').value = ""
})
document.getElementById('percent').addEventListener('click',()=>{
	var x = document.getElementById('display').value
	document.getElementById('display').value = x/100
})

//End of Arithmetic Operators function

//Beginning of Arithmetic Operators function
document.getElementById('equal').addEventListener('click',()=>{
	var newDisplay = parseFloat(document.getElementById('display').value)
	var firstval = localStorage.getItem('firstVal')
	var sign = localStorage.getItem('sign')
	var val = newDisplay
	document.getElementById('display').value = eval(parseFloat(firstval)+sign+parseFloat(val))
})



//End of Arithmetic Operators function