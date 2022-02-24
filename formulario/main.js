const app = document.getElementById('app');

const typewriter = new Typewriter(app, {
    loop: true,
    delay:75
});

typewriter
    .typeString('Somos un grupo pequeño, con resultados grandes')
    .pauseFor(200)
    .start();

    console.log(typewriter);