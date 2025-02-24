const titleH1 = new SplitType('#h1',{ types: 'words,chars' })
const paragrafHeader = new SplitType('.paragrafHeader', {types: 'words'})
const buttonCtaExplore = document.querySelector('.exploreCta')
const sectionLoader = document.querySelector('.loaderPage')

window.onload = () => { 
    
    gsap.registerPlugin(ScrollTrigger) 

    function loader(){
        sectionLoader.style.display = 'flex';
    // Bloquear el scroll solo en el loader
     setTimeout(() => {
        sectionLoader.style.overflow = 'hidden';
        sectionLoader.classList.add('loadOutStyle');
        setTimeout(() => {
            // Ocultar el loader después de 2 segundos
            sectionLoader.style.display = 'none';
        }, 3000);
     }, 4000);
    }
    loader();
    
     //
   setTimeout(() => {
    
    titleH1.chars.forEach((char, index) => {   

        let charTl = gsap.timeline();
    
        charTl.from(char, {
            y: gsap.utils.random(-200, 200),
            delay: index * 0.02,
            duration: 1,
            ease: "back.out",
            opacity:0
        })
        .from(char, {
            color: `rgb(${gsap.utils.random(0, 255)}, ${gsap.utils.random(0, 255)}, ${gsap.utils.random(0, 255)})`
        })
    
        char.addEventListener('mouseenter', charEvenHover);
    
        function charEvenHover() {
            gsap.timeline()
            .to(char, {
                color: `rgb(${gsap.utils.random(0, 255)}, ${gsap.utils.random(0, 255)}, ${gsap.utils.random(0, 255)})`,
                rotate: gsap.utils.random(-90, 90),
                y: gsap.utils.random(-35, 35),
                x: gsap.utils.random(-20, 20),
                onStart: () => char.removeEventListener('mouseenter', charEvenHover)
            })
            .to(char, {
                color: '#F9F9F9',
                rotate: 0,
                y: 0,
                x: 0,
                onComplete: () => {
                    setTimeout(() => char.addEventListener('mouseenter', charEvenHover), 100);
                }
            }, "+=0.2");
        }
    });
    
    paragrafHeader.words.forEach((word, index) => {
        gsap.from(word, {
            y: 100,
            delay: index * 0.12,
            opacity: 0
        });
    });
    const gsapAnimationTwo = gsap.timeline();

    gsapAnimationTwo.from('.ticket', {
        opacity:0,
        duration:1.3,
    })
    gsapAnimationTwo.from('.exploreCta', { // Especifica el selector del elemento
        y: 100,
        opacity: 0,
        duration:1
    })
   }, 4390);
   
   const TexParagrafPrincipal = new SplitType('.paragrafPrincipal', { types: 'words' });
   const titleH3 = new SplitType ( '.title-section-Experience', {types : 'words,chars'  })
   const words = TexParagrafPrincipal.words;
   const titleH3Words = titleH3.chars;
   const wordSpan = document.querySelector('.spanH2');
   const wordSpan2 = document.querySelector('.spanH22');
   const video = document.querySelector('.video');
   const photoDiv = document.querySelector('.div-Photo');
   const videoDiv = document.querySelector('.div-Video');
   const webDiv = document.querySelector('.div-Diseñoweb');
   const brandingDiv = document.querySelector('.div-branding');
   const seoDiv = document.querySelector('.div-Seo');
   const marketingDiv = document.querySelector('.div-Socialmedia');
   
   // Timeline de GSAP
   const timeline = gsap.timeline();

   // Animación de palabras con SplitType (usando stagger para hacerlas progresivas)
   timeline.from(words, {
       y: 10, 
       opacity: 0, 
       stagger: 0.1, // Aumenta el valor de stagger si es necesario
       duration: 1, 
       scrollTrigger: {
           trigger: '.sectionTwo',
           pin: true, 
           scrub: 1, 
           start: 'top top', 
           end: 'bottom top'
       }
   });
   
   // Animación de color para wordSpan
   timeline.to(wordSpan, {
       color: '#15F5BA',
       duration: 0.5, // Aumenta la duración para que el cambio de color sea más gradual
       scrollTrigger: {
           trigger: '.spanH2',
           start: 'top 90%', 
           end: 'top 50%',
           scrub: 1
       }
   }, "+=0.5"); // Esto asegura que inicie después de la animación anterior, con un pequeño retraso
   
   // Animación de color para wordSpan2
   timeline.to(wordSpan2, {
       color: '#15F5BA',
       duration: 0.5, // Aumenta la duración para hacerla progresiva
       scrollTrigger: {
           trigger: '.spanH22',
           start: 'top 90%', 
           end: 'top 50%',
           scrub: 1
       }
   }, "+=0.5"); // Ajusta el tiempo para que inicie de forma progresiva
   
   // Animación para el título de la sección de experiencia
   timeline.from(titleH3Words, {
       y: 10,
       opacity: 0,
       duration: 0.8, // Aumenta la duración para que sea más gradual
       stagger: 0.2,
       marginBottom: '50px',
       borderColor: '#FFEB00',  // Cambia el color del borde
       borderWidth: '4px', 
       scrollTrigger: {
           trigger: '.sectionTwo-Experience',
           pin: true,
           scrub: 1, 
           start: 'top 15%', 
           end: 'bottom 30%',
       }
   }, "+=1"); // Retrasa el inicio de esta animación para crear una transición progresiva
   
   // Animación para el video
   timeline.from(video, {
    y: 10,
    scale: 0.5,
    opacity: 0,
    duration: 1.2,
    stagger: 0.2,
    scrollTrigger: {
        trigger: '.videoProductos',
        pin: true, // Fija el elemento en su lugar
        scrub: 1, 
        start: 'top 10%', 
        end: 'bottom bottom', // Esto define hasta dónde el elemento va a estar fijo
    }
}, "+=1"); 

   // Animación para las secciones
   timeline.from('.container-SectionTwo-experience', {
       x:-50,
       opacity: 0,
       duration: 2, // Más duración para hacer la animación progresiva
       stagger: 0.1,
       scrollTrigger: {
           trigger: '.sectionTwo-Experience',
           pin: true,
           scrub: 1, 
           start: 'top 10%', 
           end: 'bottom bottom',
       },
   }, "+=0.2"); // Asegura que esta animación inicie después de las anteriores

   photoDiv.addEventListener('mouseover', ()=>{
    video.src = '../assets/GIFT/foto.gif'
})
   videoDiv.addEventListener('mouseover', ()=>{
    video.src = '../assets/GIFT/video.gif'
})
webDiv.addEventListener('mouseover',()=>{
    video.src = '../assets/GIFT/web.gif'
})
video.addEventListener('mouseover',()=>{
    video.src = '../assets/img/smile.jpg'
})
brandingDiv.addEventListener('mouseover',()=>{
    video.src = '../assets/GIFT/branding.gif'
})
seoDiv.addEventListener('mouseover',()=>{
    video.src = '../assets/GIFT/SEO.gif'
})
marketingDiv.addEventListener('mouseover',()=>{
    video.src = '../assets/GIFT/marketing.gif'
})
   
const divContentSkillsSecticonThree = document.querySelectorAll('.divContentSkills');

divContentSkillsSecticonThree.forEach(box => {
    box.addEventListener('click', () => {
        // Cierra todas las cajas que no son la clickeada
        divContentSkillsSecticonThree.forEach(b => {
            if (b !== box) {
                gsap.to(b, { height: '30px', duration: 0.5 });  // Cierra otras cajas con animación
            }
        });

        // Abre o cierra la caja clickeada
        const currentHeight = box.clientHeight; //Esta propiedad te da la altura actual visible del contenedor

        if (currentHeight === box.scrollHeight) { // devuelve la altura total del contenido del elemento, incluso si está oculto (es decir, la altura completa del contenido).
            // Si está expandida, cierra la caja
            gsap.to(box, { height: '30px', duration: 0.5 });
        } else {
            // Si está cerrada, abre la caja (establece la altura según su contenido)
            gsap.to(box, { height: box.scrollHeight, duration: 0.5 });
        }
    });
});


}


