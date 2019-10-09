function addListeners() {
    var list = document.querySelectorAll('ons-list > ons-list-item > div');
    list.forEach(function(element) {
        element.addEventListener('click', function(e) {
            myNavigator.pushPage('itemNav.html', { data: { item: e.target.textContent } });
        })
    })
}

document.addEventListener('prechange', function(event) {
    document.querySelector('ons-toolbar .center')
        .innerHTML = event.tabItem.getAttribute('label');
});

var adicionar = function() {
    var name = document.getElementById("nome");
    if (name.value.length == 0) {
        ons.notification.alert('Peencha primeiro o nome!');
    } else {
        ons.notification.toast('Sucesso!', { timeout: 2000 });
        var list = document.querySelector('ons-list');
        var newItem = document.createElement('ons-list-item');
        newItem.setAttribute('class', 'list-item');
        var newItemDiv = document.createElement('div');
        newItemDiv.innerHTML += name.value;
        newItemDiv.setAttribute('class', 'center list-item__center');
        newItem.appendChild(newItemDiv);
        list.appendChild(newItem);
        name.value = "";
        addListeners();
    }
}

var enviar = function() {
    var nome = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    if (!nome || !email || !message) {
        ons.notification.alert('Faltam preencher dados!!');
    } else {
        ons.notification.toast('Mensagem Enviada!', { timeout: 2000 });
        var list = document.getElementById("messageList");
        var newItem = document.createElement("ons-list-item");
        newItem.setAttribute('class', 'list-item');
        newItemDiv = document.createElement('div');
        newItemDivP = document.createElement('p');
        newItemDiv.setAttribute('class', 'center list-item_center');
        newItemDivP.innerHTML += nome + ", " + email + ": " + message;
        newItem.appendChild(newItemDiv);
        newItemDiv.appendChild(newItemDivP);
        list.appendChild(newItem);
        document.getElementById('name').value = "";
        document.getElementById('email').value = "";
        document.getElementById('message').value = "";
    }
}

ons.ready(function() {
    var pageChange = document.getElementById("btnChange").addEventListener('click', function() {
        document.querySelector('ons-tabbar').setActiveTab(1);
    });

    addListeners();
});

document.addEventListener('init', function(event) {
    if (event.target.id === 'itemNav') {
        var title = 'Item Page';
        event.target.querySelector('ons-toolbar div.center').textContent = title;
        event.target.querySelector('p').textContent = "You have clicked on: " + event.target.data.item;
    }
});