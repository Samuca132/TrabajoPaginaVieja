// @ts-nocheck
import * as myFunctions from './Functions.js';

(function(){
    'use strict';

    /* Login-Register Window */
        let logoBannerLogin = document.getElementById('logo-banner-login');
        let loginFormBox = document.getElementById('login-form-box');
        let registerFormBox = document.getElementById('register-form-box');
        let goRegisterBtn = document.getElementById('go-register-btn');
        let goLoginBtn = document.getElementById('go-login-btn');

            /* Load Register or Login Page Depending on URL */
            let page = window.location.href;

            if(page.indexOf('registro') !== -1) {
                logoBannerLogin.classList.add('register');
                logoBannerLogin.classList.remove('login');

                registerFormBox.classList.add('register');
                loginFormBox.classList.add('register');

                registerFormBox.classList.remove('login');
                loginFormBox.classList.remove('login');
            }
            
            if(page.indexOf('login') !== -1) {
                logoBannerLogin.classList.remove('register');
                logoBannerLogin.classList.add('login');

                registerFormBox.classList.remove('register');
                loginFormBox.classList.remove('register');

                registerFormBox.classList.add('login');
                loginFormBox.classList.add('login');
            }

        goRegisterBtn.addEventListener('click', e => {

            e.preventDefault();

            logoBannerLogin.classList.toggle('register');
            logoBannerLogin.classList.toggle('login');

            registerFormBox.classList.toggle('register');
            loginFormBox.classList.toggle('register');

            registerFormBox.classList.toggle('login');
            loginFormBox.classList.toggle('login');
        });

        goLoginBtn.addEventListener('click', e => {

            e.preventDefault();

            logoBannerLogin.classList.toggle('login');
            logoBannerLogin.classList.toggle('register');

            registerFormBox.classList.toggle('login');
            loginFormBox.classList.toggle('login');

            registerFormBox.classList.toggle('register');
            loginFormBox.classList.toggle('register');
        });        
    /* Fin Login-Register Window */


    /* INICIO DE SESI??N DE USUARIO */

    let submitLogin = document.getElementById('btn-login');
    let submitRegister = document.getElementById('btn-register');

    let loginForm = document.getElementById('login-form');

    submitLogin.addEventListener('click', e => {
        
        e.preventDefault();

        if(!myFunctions.validateFormFields(loginForm)) {
            Swal.fire({
                title: 'Verifica tus datos!',
                text: 'Todos los campos deben ser completados',
                showConfirmButton: true,
                confirmButtonColor: 'info',
                confirmButtonText: 'Verificar'
            });
        }else {
            myFunctions.setUrl('auth.php');
            myFunctions.execAjax('add', '', loginForm);
        }
    });



    /* REGISTRO DE NUEVO USUARIO */

    let registerForm = document.getElementById('register-form');

    let pais = document.getElementById('r-pais');
    let telefono = document.getElementById('r-telefono');
    let email = document.getElementById('r-email');
    let repeatEmail = document.getElementById('repeat-email');
    let rPassword = document.getElementById('r-password');
    let repeatPassword = document.getElementById('repeat-password');


        /* Cargar indicativo de tel??fono seg??n pa??s elegido */
        if(pais !== null && telefono !== null) {
            myFunctions.loadCallingCode(pais, telefono);
        }


    submitRegister.addEventListener('click', e => {

        e.preventDefault();

        /* Verificar formulario llenado */
        switch(myFunctions.fullValidation(registerForm, email.value, rPassword.value, repeatPassword.value)) {
            case 1 :
                Swal.fire({
                    title: 'Verifica tus datos!',
                    text: 'Todos los campos deben ser completados',
                    showConfirmButton: true,
                    confirmButtonColor: 'info',
                    confirmButtonText: 'Verificar'
                });
            break;

            case 2 :
                Swal.fire({
                    title: 'Verifica el correo',
                    text: 'Debe ingresar un correo electr??nico v??lido',
                    showConfirmButton: true,
                    confirmButtonColor: 'info',
                    confirmButtonText: 'Verificar'
                });
            break;

            case 3 :
                Swal.fire({
                    title: 'Verifica la contrase??a',
                    html: `
                        <p>- Debe tener m??nimo 8 caracteres</p>
                        <p>- Tener m??nimo una may??scula y una m??nuscula</p>
                        <p>- Tener un n??mero</p>
                    `,
                    showConfirmButton: true,
                    confirmButtonColor: 'info',
                    confirmButtonText: 'Verificar'
                });
            break;

            case 4 :
                Swal.fire({
                    title: 'Verifica las contrase??as',
                    text: 'Las contrase??as deben ser iguales',
                    showConfirmButton: true,
                    confirmButtonColor: 'info',
                    confirmButtonText: 'Verificar'
                });
            break;

            case 0 :
                /* Verificar n??mero de tel??fono */
                    if(telefono.value.length < 10) {
                        Swal.fire({
                            title: 'N??mero de tel??fono inv??lido',
                            text: 'Debe ingresar un n??mero de tel??fono correcto',
                            showConfirmButton: true,
                            confirmButtonColor: 'info',
                            confirmButtonText: 'Verificar'
                        });
                        return;
                    }

                /* Verificar correos */
                    if(email.value !== repeatEmail.value) {
                        Swal.fire({
                            title: 'Los correos no coinciden',
                            text: 'Las cuentas de correo deben ser iguales',
                            showConfirmButton: true,
                            confirmButtonColor: 'info',
                            confirmButtonText: 'Verificar'
                        });
                        return;
                    }

                    myFunctions.setUrl('register.php');
                    myFunctions.execAjax('add', '', registerForm);
            break;
        }
        
    });
    
})();