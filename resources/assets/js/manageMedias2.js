import { MediaService } from './class/services/MediaService.js';
import { createNotification, deleteNode } from './helpers';

const mediaService = new MediaService();

let $btDeleteMedia = document.getElementsByClassName('bt-delete-media');

for (let i = 0; i < $btDeleteMedia.length; i++) {
    $btDeleteMedia[i].onclick = () => deleteMedia($btDeleteMedia[i].dataset.mediaId);
}

function deleteMedia(id) {
    mediaService.deleteMedia(id)
        .then(response => {

            let $alertContainer = document.getElementById('alertContainer');

            if (response.ok) {
                deleteNode(
                    //retrieve the <tr> line
                    document.querySelector('[data-media-id="' + id + '"]')
                        .closest('tr')
                );
                createNotification($alertContainer, "Le média a bien été supprimé!");
            } else {
                createNotification($alertContainer, "Une erreur s'est produite, veuillez réessayer plus tard.", false);
            }
        })
        .catch(error => console.log(error));;
}
