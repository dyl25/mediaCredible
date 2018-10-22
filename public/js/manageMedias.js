console.log('manageMedias');

let $btDeletMedia = document.getElementById('btDeleteMedia');
fetch('/api/medias').then(response => console.log(response));
//$btDeletMedia.onclick;

function loadMedias() {
    fetch('/api/medias').then(response => console.log(response));
}

function deleteMedia(id) {
    fetch('/api/medias', {
        method: 'DELETE',
        headers: {
            'Content-Type' : 'application/json'
        }
    });
}

console.log($btDeletMedia);
