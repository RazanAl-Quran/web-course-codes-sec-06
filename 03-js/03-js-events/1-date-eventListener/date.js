document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#myBtn').addEventListener('click', function () {
        console.log('you just clicked me!!!');
        document.querySelector('#demo').innerHTML = Date();
    });
})
