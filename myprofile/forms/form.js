"use strict"
document.addEventListener('DOMContentLoaded', function() {
	document.getElementsByName("submit")[0].onclick = function(){
		let data = {
			email: document.getElementsByName('email')[0].value,
			tel1: document.getElementsByName('tel1')[0].value,
			tel2: document.getElementsByName('tel2')[0].value,
			last: document.getElementsByName('last')[0].value,
			name: document.getElementsByName('name')[0].value,
			dadname: document.getElementsByName('dadname')[0].value,
			birthday: document.getElementsByName('date')[0].value,
			birthmonth: document.getElementsByName('date1')[0].value,
			birthyear: document.getElementsByName('date2')[0].value,
			radio: document.getElementsByName('radio')[0].value
		};

		let response =  fetch('index.php', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json;charset=utf-8'
			},
			body: JSON.stringify(data)
		})
		 if (response.ok == 200){
		 	alert('Ошибка' + response.status)

		 } else {
		 	alert('Все хорошо!')
		 	let json = response.json()
		 }
	}
});