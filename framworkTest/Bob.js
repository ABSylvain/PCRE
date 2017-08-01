///////////////////// Envoie de requette ajax ///////////////

function sendAjax(filePhp, stringSend) {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                console.log(this.response);

            }
        }
    }
    xhr.open("POST", filePhp, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); //PHP///* header("Content-Type: text/plain"); */ 
    xhr.send(stringSend);
};
////////////////// Demande requete ajax /////////////////////