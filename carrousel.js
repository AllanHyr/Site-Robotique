// Select all slides
const slides = document.querySelectorAll(".slide");
let curSlide = 0;
let maxSlide = slides.length - 1;

// select next slide button
const nextSlide = document.querySelector(".btn-next");
// select previous slide button
const prevSlide = document.querySelector(".btn-prev");
// image counter
const counterSpan = document.querySelector(".photos-counter");
// scrollContainer
const scrollContainer = document.querySelector(".gallery");
// liste des miniatures
const minias = document.querySelectorAll('.minia');

// loop through slides and set each slides translateX property to index * 100% 
slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${indx * 100}%)`;
});
UpdateCounter();

//      EVENT
minias.forEach((minia, index) => {
    minia.addEventListener('click', () => {
        console.log(`Index cliqué : ${index}`);

        UpdateThumbnail(index);
        UpdateCounter();
        UpdateSlides();
    });
});


// add event listener and next slide functionality
nextSlide.addEventListener("click", function () {
    let newSlide;
    if (curSlide === maxSlide) {
        newSlide = 0;
    }
    else {
        newSlide = curSlide + 1;
    }

    UpdateThumbnail(newSlide);
    UpdateCounter();
    UpdateSlides();
});

prevSlide.addEventListener("click", function () {
    let newSlide;
    if (curSlide === 0) {
        newSlide = maxSlide;
    }
    else {
        newSlide = curSlide - 1;
    }

    UpdateThumbnail(newSlide);
    UpdateCounter();
    UpdateSlides();
});

function UpdateCounter() {
    counterSpan.textContent = `${curSlide + 1} / ${maxSlide + 1}`;
};

function UpdateSlides() {
    slides.forEach((slide, indx) => {
        slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
    });
}

function UpdateThumbnail(index) {
    document.querySelectorAll('.minia')[curSlide].classList.remove("selected");
    console.log("CurSlide : ", curSlide, " : Index : ", index);
    curSlide = index;
    document.querySelectorAll('.minia')[index].classList.add("selected");
}

scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
    scrollContainer.scrollLeft += evt.deltaX;
});
//      END EVENT