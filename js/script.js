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

	// Задать высоту первому открытому блоку - костыль, чтобы не было дергающейся анимации

	if (window.screen.width >= 1800) {
		document.querySelector('.s-tab-content').style.height = document.querySelector('.s-tab-content').scrollHeight + 'px';
	}

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

// Открытие меню
	
	if (document.querySelector('.mini-left-block')) {

		document.querySelector('.mini-left-block').addEventListener('click', function(){

			if (document.querySelector('.s-wrapper').classList.contains('opened-menu')) {
				document.querySelector('.s-wrapper').classList.remove('opened-menu')
				this.querySelector('.show-filter').innerText = "Открыть"
			}
			else {
				document.querySelector('.s-wrapper').classList.add('opened-menu')
				this.querySelector('.show-filter').innerText = "Скрыть"

				// Задать высоту первому открытому блоку - костыль, чтобы не было дергающейся анимации

				if (window.screen.width <= 1800 && !document.querySelector('.s-tab-content').style.height) {
					document.querySelector('.s-tab-content').style.height = document.querySelector('.s-tab-content').scrollHeight + 'px';
				}
			}
		})
	}

// Выбор активного пункта

if (document.querySelectorAll('.radio_input').length > 0) {

	let radioInput = document.querySelectorAll('.radio_input'),
		cards = document.querySelectorAll('.employee-card');

	for (let i = 0; i < radioInput.length; i++) {

		radioInput[i].addEventListener('change', function(){

			let category = findParent(this, 's-tab-item').getAttribute('data-category')

			if (category == 0) return false;

			// Скрытие всех карточек

			for (let i = 0; i < cards.length; i++) {
				cards[i].style.display = "none"
			}

			// Скрытие всех заголовков карточек

			for (let i = 0; i < document.querySelectorAll('.s-center-title').length; i++) {
				document.querySelectorAll('.s-center-title')[i].style.display = "none"
			}

			let radios = findParent(this, 's-tab-content-inside').querySelectorAll('.radio_input')

			let selectedValues = []

			for (let i = 0; i < radios.length; i++) {

				if (radios[i].checked) {

					selectedValues.push(findParent(radios[i], 's-tab-item').getAttribute('data-category'))
				}
			}

			let categoryCards = document.querySelectorAll('.employee-card');

			for (let i = 0; i < categoryCards.length; i++) {

				for (let j = 0; j < selectedValues.length; j++) {

					if (categoryCards[i].getAttribute('data-category') == selectedValues[j]) {
						categoryCards[i].style.display = "flex"
						findParent(categoryCards[i], 'department-section').querySelector('.s-center-title').style.display = "block"
					}
				}
			}
		})
	}
}

// Сброс по кнопке Сбросить фильтр

if (document.querySelector('.reset-filters')) {

	document.querySelector('.reset-filters').addEventListener('click', function(){

		for (let i = 0; i < document.querySelectorAll('.employee-card').length; i++) {
			document.querySelectorAll('.employee-card')[i].style.display = "flex"
		}
		for (let i = 1; i < document.querySelectorAll('.radio_input').length; i++) {
			document.querySelectorAll('.radio_input')[i].checked = false
		}
		document.querySelectorAll('.radio_input')[0].checked = true
	})
}

// Радиокнопки - Все и остальные

	for (let i = 0; i < document.querySelectorAll('.radio_input').length; i++) {

		document.querySelectorAll('.radio_input')[i].addEventListener('change', function(){

			if (i == 0) {
				for (let i = 1; i < document.querySelectorAll('.radio_input').length; i++) {
					document.querySelectorAll('.radio_input')[i].checked = false
				}
				for (let i = 0; i < document.querySelectorAll('.employee-card').length; i++) {
					document.querySelectorAll('.employee-card')[i].style.display = "flex"
				}
			}
			else {
				document.querySelectorAll('.radio_input')[0].checked = false
			}
		})
	}

// Родитель элемента

function findParent(el, cls) {
	while ((el = el.parentElement) && !el.classList.contains(cls));
	return el;
}


});