let wholeDivider = document.getElementById('divider');
let dividerWrapper = document.getElementById('divider-wrapper');
let dividerLine1 = document.getElementById('divider-1');
let dividerLine2 = document.getElementById('divider-2');

// Height of divider
function divider() {
    wholeDivider != null ? wholeDivider.style.height = `${(dividerWrapper.offsetHeight + dividerLine1.offsetHeight) * 2}px` : false
}
divider();

// Width of list of skills. Repeating of the skills that depends on window's width
let words = ['Develop', 'Optimize', 'Update', 'WordPress', 'Framework'];
if (dividerLine1 != null) cycleForWords(check());

function check() {
    return dividerLine1.offsetWidth;
}

function cycleForWords(skillsWidth = 0) {
    if (skillsWidth < window.innerWidth || skillsWidth == undefined) {
        for (let i = 0; i < words.length; i++) {
            let element = words[i];
            dividerLine1.innerHTML += (`<p class="divider" name="divider-item">${element}</p><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lg:h-8 lg:w-8" fill="none" viewBox="0 0 200 200" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><g clip-path="url(#clip0_118_208)"><path fill="var(--color-white-primary)" d="M100 200c-2.895-94.738-5.262-97.09-100-100 94.738-2.895 97.09-5.262 100-100 2.895 94.738 5.262 97.09 100 100-94.738 2.91-97.09 5.233-100 100Z"></path></g></svg>`);
            dividerLine2.innerHTML += (`<p class="divider" name="divider-item">${element}</p><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lg:h-8 lg:w-8" fill="none" viewBox="0 0 200 200" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><g clip-path="url(#clip0_118_208)"><path fill="var(--color-white-primary)" d="M100 200c-2.895-94.738-5.262-97.09-100-100 94.738-2.895 97.09-5.262 100-100 2.895 94.738 5.262 97.09 100 100-94.738 2.91-97.09 5.233-100 100Z"></path></g></svg>`);
        }
        cycleForWords(check());
    }
}

window.addEventListener('resize', () => {
    if (wholeDivider != null) cycleForWords(check());
});