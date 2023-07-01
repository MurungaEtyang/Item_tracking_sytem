// login pop pup
document.getElementById("button-login").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("modal").style.display = "block";

    fetch("login.php")
        .then(response => response.text())
        .then(html => {
            document.getElementById("content").innerHTML = html;
        });
});

// book a call pop up

document.getElementById("button-book-call").addEventListener("click", showModal);
document.getElementById("button-2").addEventListener("click", showModal);

function showModal(event) {
    event.preventDefault();
    document.getElementById("modal").style.display = "block";

    fetch("book-call.php")
        .then(response => response.text())
        .then(html => {
        document.getElementById("content").innerHTML = html;
        });
}



// contact us
document.getElementById("contact-us").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("modal").style.display = "block";

    fetch("contact-us.php")
        .then(response => response.text())
        .then(html => {
            document.getElementById("content").innerHTML = html;
        });
});
