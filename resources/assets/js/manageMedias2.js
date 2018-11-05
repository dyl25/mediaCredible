import { MediaService } from './class/services/MediaService.js'

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
            /*if (response.ok) {
                createNotification("Le média a bien été supprimé!");
            } else {
                createNotification("Une erreur s'est produite, veuillez réessayer plus tard.", false);
            }*/
        });
}
