var login = function () {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username === 'bob' && password === 'secret') {
        ons.notification.alert('Congratulations!');
    } else {
        ons.notification.alert('Incorrect username or password.');
    }
};

var prev = function () {
    var carousel = document.getElementById('carousel');
    carousel.prev();
    //Execute method
    console.log(document.querySelector('ons-carousel').getActiveIndex());
};

var next = function () {
    var carousel = document.getElementById('carousel');
    carousel.next();
    //Execute method
    console.log(document.querySelector('ons-carousel').getActiveIndex());
};

ons.ready(function () {
    //Print property
    var countItems = document.querySelector('ons-carousel').itemCount;
    //Set attribute
    document.querySelector('ons-carousel').setAttribute('animation', 'none');
    //Call event
    document.querySelector('ons-carousel').addEventListener('postchange', function () {
        console.log("Mudou!");
    })
    console.log(countItems);
    var carousel = document.addEventListener('postchange', function (event) {
        console.log('Changed to ' + event.activeIndex)
    });
});

document.addEventListener('init', function (event) {
    var page = event.target;

    if (page.id === 'page1') {
        page.querySelector('#push-button').onclick = function () {
            document.querySelector('#myNavigator').pushPage('page2.html', { data: { title: 'Page 2' } });
        };
    } else if (page.id === 'page2') {
        page.querySelector('ons-toolbar .center').innerHTML = page.data.title;
    }
});