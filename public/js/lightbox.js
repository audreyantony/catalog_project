function onLight(event) {
    let body = document.querySelector('body');
    let gallery = document.querySelector('#floatingGallery');
    let galleryImg = document.querySelector('#galleryPicture');
    let close = document.querySelector('#close');
    let catalog = document.querySelector('#catalog-detail');

    body.classList.add('lightbox');
    gallery.style.display = "block";
    catalog.style.display = "none";
    galleryImg.src = this.src;

    pictureClassName = this.dataset.group;
    let thumbnails = document.querySelectorAll("." + pictureClassName);
    for (let i = 0; i < thumbnails.length; i++) {
        if (thumbnails[i].src === this.src) {
            console.log(thumbnails[i].src, this.src);
            pictureIndex = i;
            break;
        }
    }

    close.addEventListener('click', offLight);
    event.stopPropagation();
}

function offLight(event) {
    let close = document.querySelector('#close');
    let body = document.querySelector('body');
    let catalog = document.querySelector('#catalog-detail');
    body.classList.remove('lightbox');
    let gallery = document.querySelector('#floatingGallery');
    gallery.style.display = "none";
    catalog.style.display = "block";

    close.removeEventListener('click', offLight);
}

window.onload = function setEventListener() {
    let thumbnails = document.querySelectorAll(".clickablePicture");
    for (thumbnail of thumbnails) {
        thumbnail.addEventListener('click', onLight);
    }

    function giveSlideDirection(direction) {
        return function slide() {
            let pictures = document.querySelectorAll("." + pictureClassName);
            if (direction === "right") {
                pictureIndex = pictureIndex + 1 < pictures.length ? pictureIndex + 1 : 0
            }
            else if (direction === "left") {
                pictureIndex = pictureIndex - 1 >= 0 ? pictureIndex - 1 : pictures.length - 1
            }

            let newSrc = pictures[pictureIndex].src;
            let galleryImg = document.querySelector('#galleryPicture');
            galleryImg.src = newSrc;
            event.stopPropagation();
        }
    }

    let leftArrow = document.querySelector('#leftArrow');
    leftArrow.addEventListener('click', giveSlideDirection("left"));

    let rightArrow = document.querySelector('#rightArrow');
    rightArrow.addEventListener('click', giveSlideDirection("right"));
}