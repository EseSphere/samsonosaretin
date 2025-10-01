// AOS Init
AOS.init({
  duration: 1000,
  once: true
});

// Typing Effect
const typingText = document.querySelector(".typing-text");
const words = ["Full Stack Web Developer", "Mobile App Developer", "Freelancer", "Problem Solver"];
let wordIndex = 0;
let charIndex = 0;
let currentWord = "";
let isDeleting = false;

function typeEffect() {
  if (wordIndex >= words.length) wordIndex = 0;
  currentWord = words[wordIndex];
  let display = isDeleting ? currentWord.substring(0, charIndex--) : currentWord.substring(0, charIndex++);

  typingText.textContent = display;

  if (!isDeleting && charIndex === currentWord.length + 1) {
    isDeleting = true;
    setTimeout(typeEffect, 1000);
  } else if (isDeleting && charIndex === 0) {
    isDeleting = false;
    wordIndex++;
    setTimeout(typeEffect, 300);
  } else {
    setTimeout(typeEffect, isDeleting ? 100 : 150);
  }
}
typeEffect();

// GSAP Animations
gsap.from("nav", {duration:1, y:-100, opacity:0, ease:"bounce"});
