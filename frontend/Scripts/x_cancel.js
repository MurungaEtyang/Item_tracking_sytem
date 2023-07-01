document.getElementById('cancelButton').addEventListener('click', function(event) {
    event.preventDefault(); 
    document.getElementById('x').style.display = 'block';
    window.stop();
});