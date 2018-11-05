export class MediaService {

    constructor() {
        this._errorMessage = null;
        this._headers = new Headers({
            'Content-Type': 'application/json'
        });
        this._url = 'http://localhost/mediaCredible/public/api/medias';
    }

    deleteMedia(id) {
        return fetch(this.url + '/'+ id, {
            method: 'DELETE',
            headers: this.headers
        })
            /*.then(response => {
                console.log(response);
                if (response.ok) {
                    createNotification("Le média a bien été supprimé!");
                } else {
                    createNotification("Une erreur s'est produite, veuillez réessayer plus tard.", false);
                }
            })
            .catch(error => console.log(error));*/
    }

    logError() {
        return "";
    }

}