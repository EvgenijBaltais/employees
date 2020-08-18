document.addEventListener("DOMContentLoaded", function(){

// Нажатие на карточку сотрудника

if (document.querySelectorAll('.employee-card').length > 0) {

let employee = document.querySelectorAll('.employee-card')

	for (let i = 0; i < employee.length; i++) {

		employee[i].addEventListener('click', function(){

			for (let i = 0; i < employee.length; i++) {
				employee[i].classList.remove('employee-card-active')
			}
			this.classList.add('employee-card-active')
		})
	}
}

// Нажатие на табы

if (document.querySelectorAll('.s-tab-show-hide').length > 0) {

	// Задать высоту первому открытому блоку, чтобы не было дергающейся анимации

	document.querySelector('.s-tab-content').style.height = document.querySelector('.s-tab-content').scrollHeight + 'px';

	let showHide = document.querySelectorAll('.s-tab-show-hide')

		for (let i = 0; i < showHide.length; i++) {

			showHide[i].addEventListener('click', function(){

				let parent = findParent(this, 's-tab');

					if (parent.classList.contains('s-tab-show')) {
						
						parent.classList.remove('s-tab-show')
						parent.querySelector('.s-tab-content').style.height = 0;
						parent.querySelector('.show-hide-text').innerText = 'Показать'
					}
					else {
						parent.classList.add('s-tab-show')
						parent.querySelector('.s-tab-content').style.height = parent.querySelector('.s-tab-content').scrollHeight + 'px';
						parent.querySelector('.show-hide-text').innerText = 'Свернуть'
					}
			})
		}
}



// Родитель элемента

function findParent (el, cls) {
	while ((el = el.parentElement) && !el.classList.contains(cls));
	return el;
}


});