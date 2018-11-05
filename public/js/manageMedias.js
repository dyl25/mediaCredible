
/**
 * Create a Html element who display a message
 * 
 * @param {string} message The message to display
 * @param {bool} success The status of the message
 */
function createNotification(message, success = true) {
    let $div = document.createElement('div');
    let $notifMessage = document.createElement('p');

    $div.classList.add('alert', 'text-center');

    $notifMessage.classList.add('my-auto');
    $notifMessage.textContent = message;

    $div.appendChild($notifMessage);

    if (success) {
        $div.classList.add('alert-success');
    } else {
        $div.classList.add('alert-danger');
    }

    $alertContainer = document.getElementById('alertContainer');

    if(!$alertContainer.hasChildNodes()) {
        alertContainer.appendChild($div);
    }else{
        alertContainer.replaceChild($div, alertContainer.childNodes[0]);
    }
 
}

function deleteMedia(id) {
    fetch('http://localhost/mediaCredible/public/api/medias/' + id, {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => {
            console.log(response);
            if (response.ok) {
                createNotification("Le média a bien été supprimé!");
            } else {
                createNotification("Une erreur s'est produite, veuillez réessayer plus tard.", false);
            }
        })
        .catch(error => console.log(error));
}

//console.log($btDeletMedia);
