const thumbs = document.getElementsByClassName("window_float_image")

for (const thumb of thumbs)
{
    thumb.addEventListener('click', function (ev)
    {
        const lightbox = document.getElementById("lightbox");
        const image = document.getElementById("image");
        const thumb = ev.target
        console.log(thumb)
        lightbox.style.visibility="visible";
        lightbox.classList.add("animation_image");
        lightbox.classList.remove("animation_image_close");
        image.innerHTML = `<img src="${ thumb.src.replace('.jpg', '1.jpg') }" alt="image">`
        image.classList.remove("loader_lightbox_img_close");
    })
}

function functionClose() {
    const lightbox = document.getElementById("lightbox");
    lightbox.classList.add("animation_image_close");
    lightbox.classList.remove("animation_image");

    const image = document.getElementById("image");
    image.classList.add("loader_lightbox_img_close");
}