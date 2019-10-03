document.addEventListener('prechange', function (event) {
    document.querySelector('ons-toolbar .center')
        .innerHTML = event.tabItem.getAttribute('label');
});

var adicionar = function () {
    var name = document.getElementById("nome");
    if (name.value.length == 0) {
        ons.notification.alert('Peencha primeiro o nome!');
    } else {
        ons.notification.toast('Sucesso!', { timeout: 2000 });
        var list = document.querySelector('ons-list');
        var newItem = document.createElement('ons-list-item');
        var newItemDiv = document.createElement('div');
        newItemDiv.innerHTML += name.value;
        newItemDiv.setAttribute('class', 'center list-item__center');
        newItem.appendChild(newItemDiv);
        list.appendChild(newItem);
        name.value = "";
    }
}

var enviar = function () {
    var nome = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    if(!nome || !email || !message){
        ons.notification.alert('Faltam preencher dados!!');
    }else{
        var list = document.getElementById("messageList");
        var newItem = document.createElement("ons-list-item");
    }
}

ons.ready(function () {
    var pageChange = document.getElementById("btnChange").addEventListener('click', function () {
        document.querySelector('ons-tabbar').setActiveTab(1);
    });

    var listClick = document.querySelector('ons-list').addEventListener('click', function () {
        document.querySelector('ons-tabbar').setActiveTab(3);
    });
});
