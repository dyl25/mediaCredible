/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__class_services_MediaService_js__ = __webpack_require__(2);


var mediaService = new __WEBPACK_IMPORTED_MODULE_0__class_services_MediaService_js__["a" /* MediaService */]();

var $btDeleteMedia = document.getElementsByClassName('bt-delete-media');

var _loop = function _loop(i) {
    $btDeleteMedia[i].onclick = function () {
        return console.log($btDeleteMedia[i].dataset.mediaId);
    };
};

for (var i = 0; i < $btDeleteMedia.length; i++) {
    _loop(i);
}

function deleteMedia(id) {
    console.log(id);
    mediaService.deleteMedia(id).then(function (response) {
        console.log(response);
        /*if (response.ok) {
            createNotification("Le média a bien été supprimé!");
        } else {
            createNotification("Une erreur s'est produite, veuillez réessayer plus tard.", false);
        }*/
    });
}
//onclick = "deleteMedia({{ $media->id }})"
//mediaService.deleteMedia(1);

/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return MediaService; });
var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var MediaService = function () {
    function MediaService() {
        _classCallCheck(this, MediaService);

        this._errorMessage = null;
        this._headers = new Headers({
            'Content-Type': 'application/json'
        });
        this._url = 'http://localhost/mediaCredible/public/api/medias';
    }

    _createClass(MediaService, [{
        key: 'deleteMedia',
        value: function deleteMedia(id) {
            return fetch(this.url + '/' + id, {
                method: 'DELETE',
                headers: this.headers
            });
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
    }, {
        key: 'logError',
        value: function logError() {
            return "";
        }
    }]);

    return MediaService;
}();

/***/ })
/******/ ]);