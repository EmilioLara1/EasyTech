const comp = document.getElementById('components');


function handleRadioClick() {
  if (document.getElementById('si').checked) {
    comp.style.display = 'flex';
  } else {
    comp.style.display = 'none';
    
  }
}
const radioButtons = document.querySelectorAll('input[name="sabes"]');
radioButtons.forEach(radio => {
  radio.addEventListener('click', handleRadioClick);
});

