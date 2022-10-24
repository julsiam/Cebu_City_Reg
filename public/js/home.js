function toggleMenu() {
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toggle.classList.toggle('active')
    navigation.classList.toggle('active')
    main.classList.toggle('active')
}


var counter = 1;
setInterval(function () {
    document.getElementById('radio' + counter).checked = true;
    counter++;

    if (counter > 4) {
        counter = 1
    }

}, 4000);