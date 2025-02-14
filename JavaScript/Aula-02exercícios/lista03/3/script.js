function GRITA_NAO(){
    var msgs = window.document.getElementById('input').value;
    var res = window.document.getElementById("escrita");
    console.log(msgs);
    res.innerText = msgs.toUpperCase();

}
