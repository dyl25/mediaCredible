import { MediaService } from './class/services/MediaService.js';
import { createNotification } from './helpers';

const mediaService = new MediaService();

let $btDeleteMedia = document.getElementsByClassName('bt-delete-media');

for(let i = 0; i < $btDeleteMedia.length; i++) {    
    $btDeleteMedia[i].onclick = () => console.log($btDeleteMedia[i].dataset.mediaId);
}

function deleteMedia(id) {
    console.log(id);
    mediaService.deleteMedia(id)
        .then(response => {
            console.log(response);

            $alertContainer = document.getElementById('alertContainer');

            if (response.ok) {
                createNotification($alertContainer, "Le média a bien été supprimé!");
            } else {
                createNotification($alertContainer, "Une erreur s'est produite, veuillez réessayer plus tard.", false);
            }
        });
}
