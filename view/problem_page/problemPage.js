document.addEventListener('DOMContentLoaded', function() {
    var submitBtn=document.getElementById('buttomBtn');
    submitBtn.addEventListener('click', function() {
        console.log('Submit button clicked');
        event.preventDefault();
        window.location.href = '../statusPage/status.php';
    });
});