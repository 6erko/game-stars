document.getElementById('verzendBtn').addEventListener('click', function (event) {
    event.preventDefault();

    if (document.getElementById('naam').value !== '' && document.getElementById('email').value !== '' && document.getElementById('nummer').value !== '' && document.getElementById('vraag').value !== '') {
        document.getElementById('popup').style.display = 'block';
    } else {
        alert('Vul alles in voordat u verzend! a.u.b');
    }
});

document.querySelector('.close').addEventListener('click', function () {
    document.getElementById('popup').style.display = 'none';
    location.reload();
});