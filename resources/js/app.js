import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const redPanel = document.getElementById('redPanel');
const panelLeft = document.getElementById('panelLeft');
const panelRight = document.getElementById('panelRight');
const formSignIn = document.getElementById('formSignIn');
const formSignUp = document.getElementById('formSignUp');

// Default state: red panel on LEFT, sign-in form behind it on left (invisible), sign-up form visible on right
// Actually default: red on left covers sign-in area; sign-up form shows on right

function goSignIn() {
    // Slide red panel to the RIGHT
    redPanel.style.left = '50%';
    redPanel.style.borderRadius = '0 1.5rem 1.5rem 0';

    // Swap panel text
    panelLeft.classList.add('hidden');
    panelLeft.classList.remove('flex');
    panelRight.classList.remove('hidden');
    panelRight.classList.add('flex');

    // Fade forms: sign-up now covered (right), sign-in now visible (left)
    formSignIn.style.opacity = '1';
    formSignIn.style.pointerEvents = 'auto';
    formSignUp.style.opacity = '0';
    formSignUp.style.pointerEvents = 'none';
}

function goSignUp() {
    // Slide red panel back to the LEFT
    redPanel.style.left = '0%';
    redPanel.style.borderRadius = '1.5rem 0 0 1.5rem';

    // Swap panel text
    panelRight.classList.add('hidden');
    panelRight.classList.remove('flex');
    panelLeft.classList.remove('hidden');
    panelLeft.classList.add('flex');

    // Fade forms: sign-up visible (right), sign-in covered (left)
    formSignIn.style.opacity = '0';
    formSignIn.style.pointerEvents = 'none';
    formSignUp.style.opacity = '1';
    formSignUp.style.pointerEvents = 'auto';
}

window.goSignIn = goSignIn;
window.goSignUp = goSignUp;

// ── Init state ──
// Red panel starts on LEFT, covering sign-in form
// Sign-up form is on the right, fully visible
redPanel.style.left = '0%';
redPanel.style.borderRadius = '1.5rem 0 0 1.5rem';
formSignIn.style.opacity = '0';
formSignIn.style.pointerEvents = 'none';
formSignUp.style.opacity = '1';
formSignUp.style.pointerEvents = 'auto';
panelLeft.classList.add('flex');