const authBody = document.querySelector('.auth-modal__body');
const authModal = document.querySelector('[data-modal]');
const btnLogin = document.querySelector('.header__login');
const btnModalClose = document.querySelector('.auth-modal__close');

const btnLoginModal = document.querySelector('#login');
const btnRegisteModal = document.querySelector('#register');


function renderModal(){
    authBody.innerHTML="";
    const modal = `<form action="register.php" class="auth-modal__form">
                <input type="text" name="username" placeholder="Prenume" class="auth-modal__input">
                <input type="text" name="surname" placeholder="Nume" class="auth-modal__input">
                <input required type="email" name="email" placeholder="Adresa email" class="auth-modal__input">
                <input required type="password" name="password" placeholder="Parola" class="auth-modal__input">
                <button type="submit" class="auth-modal__btn-footer button" data-button="register">Înregistrează-te</button>
            </form>
        </div>`
    authBody.insertAdjacentHTML('beforeend', modal);
    btnLoginModal.classList.remove('auth-modal__btn_active');
    btnRegisteModal.classList.add('auth-modal__btn_active');
}

renderModal();

btnModalClose.addEventListener('click', function(){
    authModal.classList.add('none');
})

btnLogin.addEventListener('click', function (){
    authModal.classList.remove('none');
})



btnLoginModal.addEventListener('click', function(){
    authBody.innerHTML="";
    const modal = `<form action="login.php" class="auth-modal__form">
                <input required type="email" name="email" placeholder="Adresa email" class="auth-modal__input">
                <input required type="password" name="password" placeholder="Parola" class="auth-modal__input">
                <button type="submit" class="auth-modal__btn-footer button" data-button="login">Conectează-te</button>
            </form>
        </div>`
    authBody.insertAdjacentHTML('beforeend', modal);
    btnLoginModal.classList.add('auth-modal__btn_active');
    btnRegisteModal.classList.remove('auth-modal__btn_active');
})

btnRegisteModal.addEventListener('click', function(){
    renderModal();
});