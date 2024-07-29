const questions = document.querySelectorAll('.faq');
questions.forEach(element => {
    element.addEventListener("click", () => {
        element.classList.toggle('active')
    })
});