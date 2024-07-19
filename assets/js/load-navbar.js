document.addEventListener("DOMContentLoaded", function() {
    fetch('views/includes/navbar.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('navbar-container').innerHTML = data;
        });
});
