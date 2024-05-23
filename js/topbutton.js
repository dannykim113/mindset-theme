document.addEventListener("DOMContentLoaded", function () {
    var moveToTopButton = document.createElement("button");
    moveToTopButton.innerHTML = "Top";
    document.body.appendChild(moveToTopButton);

    moveToTopButton.style.display = "none";
    moveToTopButton.style.position = "fixed";
    moveToTopButton.style.bottom = "20px";
    moveToTopButton.style.right = "20px";

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
            moveToTopButton.style.display = "block";
        } else {
            moveToTopButton.style.display = "none";
        }
    });

    moveToTopButton.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
