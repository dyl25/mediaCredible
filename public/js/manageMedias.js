console.log('manageMedias');

let $btDeletMedia = document.getElementById('btDeleteMedia');

//$btDeletMedia.onclick;

function deleteMedia(id) {
    fetch('/api/medias', {
        method: 'DELETE',
        headers: {
            'Content-Type' : 'application/json'
        }
    });
}

console.log($btDeletMedia);
