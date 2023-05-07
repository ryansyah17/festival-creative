let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.daftar-event .event').forEach(product =>{
  product.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});

function startCountdown() {
	const countdown = new Date('August 15, 2023 00:00:00').getTime();

	const interval = setInterval(function() {
		const now = new Date().getTime();
		const distance = countdown - now;

		if (distance < 0) {
			clearInterval(interval);
			updateCountdown(0, 0, 0, 0);
			return;
		}

		const days = Math.floor(distance / (1000 * 60 * 60 * 24));
		const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		const seconds = Math.floor((distance % (1000 * 60)) / 1000);

		updateCountdown(days, hours, minutes, seconds);
	}, 1000);
}

function updateCountdown(days, hours, minutes, seconds) {
	const daysEl = document.getElementById('days');
	const hoursEl = document.getElementById('hours');
	const minutesEl = document.getElementById('minutes');
	const secondsEl = document.getElementById('seconds');

	daysEl.textContent = days < 0 ? '0' : days;
	hoursEl.textContent = hours < 10 ? '0' + hours : hours;
	minutesEl.textContent = minutes < 10 ? '0' + minutes : minutes;
    secondsEl.textContent = seconds < 10 ? '0' + seconds : seconds;
    }
    
    startCountdown();
