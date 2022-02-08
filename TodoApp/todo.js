const add = document.getElementById('add_todo');
add.addEventListener('click', function(){

	const formContainer = document.createElement('div')
	formContainer.classList.add('formContain')
	const h = document.createElement('h1')
	h.textContent = "Add Todo"
	const form = document.createElement('form')
	form.method='POST'
	form.action = '#'
	const todo_text = document.createElement('textarea')
	todo_text.name = 'todo_message'
	const button = document.createElement('input')
	button.type = 'submit'
	button.value = 'Send'
	button.name = 'send'
	button.className = 'add'
	form.appendChild(todo_text)
	form.appendChild(button)
	formContainer.appendChild(h)
	formContainer.appendChild(form)

	document.getElementById('todocontainer').appendChild(formContainer)

})







window.onload= function(){

	const edit = document.querySelectorAll(".edit")
	edit.forEach( function(element, index) {
		var text =element.childNodes[3].innerText
		var id = element.childNodes[1].innerText

		element.addEventListener('click', (e)=>{
			

			e.preventDefault();
	
	const formContainer = document.createElement('div')
	formContainer.classList.add('formContain')
	const h = document.createElement('h1')
	h.textContent = "Update Todo"
	const form = document.createElement('form')
	form.method='POST'
	form.action = 'index.php?id='+id
	const todo_text = document.createElement('textarea')
	todo_text.name = 'todo_message'
	todo_text.value = text
	const button1 = document.createElement('input')
	button1.type = 'submit'
	button1.value = 'Update'
	button1.name = 'update'
	button1.className = 'update'

	const button2 = document.createElement('input')
	button2.type = 'submit'
	button2.value = 'Delete'
	button2.name = 'delete'
	button2.className = 'delete'
	form.appendChild(todo_text)
	form.appendChild(button1)
	form.appendChild(button2)
	formContainer.appendChild(h)
	formContainer.appendChild(form)

	document.getElementById('todocontainer').appendChild(formContainer)





		})
	});

}





	










// const edit = document.getElementById('edit')
// edit.addEventListener('click',(e)=>{

// 	e.preventDefault();
// 	const msg = document.getElementById('msg').value
// 	const id = document.getElementById('hidden').value


// 	const formContainer = document.createElement('div')
// 	formContainer.classList.add('formContain')
// 	const h = document.createElement('h1')
// 	h.textContent = "Update Todo"
// 	const form = document.createElement('form')
// 	form.method='POST'
// 	form.action = 'index.php?id={id}'
// 	const todo_text = document.createElement('textarea')
// 	todo_text.name = 'todo_message'
// 	todo_text.value = msg
// 	const button = document.createElement('input')
// 	button.type = 'submit'
// 	button.value = 'Send'
// 	button.name = 'Update'
// 	form.appendChild(todo_text)
// 	form.appendChild(button)
// 	formContainer.appendChild(h)
// 	formContainer.appendChild(form)

// 	document.getElementById('todocontainer').appendChild(formContainer)



// })