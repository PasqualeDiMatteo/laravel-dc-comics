const placeholder = "https://marcolanci.it/utils/placeholder.jpg";
const logoInput = document.getElementById("thumb");
const imagePreview = document.getElementById("logo");
logoInput.addEventListener("input", () => {
    imagePreview.src = logoInput.value ? logoInput.value : placeholder;
});
