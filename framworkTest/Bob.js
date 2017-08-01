////////////////////// Chargez XMLHttpRequest //////////////
/*
let xhr;
*/
function xhrInit(xhr) {
    window.onload = xhrXml;

    function xhrXml() {
        xhr = new XMLHttpRequest();
    }
};
///////////////////// Envoie de requette ajax ///////////////
/*let objetSend = {
    'key1': value1,
    'key2': value2,
};
*/
function sendAjax(filePhp, objetSend) {
    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                let returnFromDb = JSON.parse(this.response);
            }
        }
    }
    xhr.open("POST", filePhp, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); //PHP///* header("Content-Type: text/plain"); */ 
    xhr.send();
}