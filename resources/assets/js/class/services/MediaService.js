export class MediaService {

    constructor() {
        this._errorMessage = null;
        this._headers = new Headers({
            'Content-Type': 'application/json'
        });
        this._url = 'http://localhost/mediaCredible/public/api/medias';
    }

    get url() {
        return this._url;
    }

    get headers() {
        return this._headers;
    }

    deleteMedia(id) {
        console.log('coucou2');
        console.log(this.url);
        return fetch(this.url + '/' + id, {
            method: 'DELETE',
            headers: this.headers
        });
    }

    logError() {
        return "";
    }

}