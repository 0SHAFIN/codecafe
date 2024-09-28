document.addEventListener('DOMContentLoaded', function() {
    var contestEnter = document.getElementById('cEnter');
    contestEnter.addEventListener('click', function() {
        event.preventDefault
        window.location.href = '../contestDetailsPage/contestDetailsPage.php';
    });
});