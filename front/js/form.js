const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const cpf = document.querySelector('#cpf');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

cpf.addEventListener("change", function(){
	if (isNaN(cpf.value)) {
		alert('digite um numero')
	} else {
		if(cpf.value) {
			cpf.value = cpf.value.match(/.{1,3}/g).join(".").replace(/\.(?=[^.]*$)/,"-");
		}
	}
});