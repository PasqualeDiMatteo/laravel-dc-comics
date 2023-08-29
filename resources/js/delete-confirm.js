const deleteForms = document.querySelectorAll(".delete-form");

deleteForms.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        const comicName = form.dataset.name;
        const isConfirmed = confirm(`Sei sicuro di eliminare ${comicName}`);
        if (isConfirmed) form.submit();
    });
});
