const BotonAceptarCookies = document.getElementById('btn-aceptar-cookies');
const AvisoCookies = document.getElementById('avisoCokkies');
const FondoAvisoCookies = document.getElementById('fondo-aviso-cookies');

datalayer = [];

if (!localStorage.getItem('cookies-aceptadas')) {

    AvisoCookies.classList.add('activo');
    FondoAvisoCookies.classList.add('activo');

} else {

    datalayer.push({ 'event': 'cookies-aceptadas' });

}

BotonAceptarCookies.addEventListener('click', () => {

    AvisoCookies.classList.remove('activo');
    FondoAvisoCookies.classList.remove('activo');

    localStorage.setItem('cookies-aceptadas', true);

    datalayer.push({ 'event': 'cookies-aceptadas' });
});