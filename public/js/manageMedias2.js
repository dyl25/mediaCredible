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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony export (immutable) */ __webpack_exports__["createNotification"] = createNotification;
/* harmony export (immutable) */ __webpack_exports__["deleteNode"] = deleteNode;

/**
* Create a Html element who display a message
* 
* @param {Object} $target Node who will contain the message
* @param {string} message The message to display
* @param {bool} success The status of the message
*/
function createNotification($target, message) {
    var success = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;

    console.log('coucou');
    var $div = document.createElement('div');
    var $notifMessage = document.createElement('p');

    $div.classList.add('alert', 'text-center');

    $notifMessage.classList.add('my-auto');
    $notifMessage.textContent = message;

    $div.appendChild($notifMessage);

    if (success) {
        $div.classList.add('alert-success');
    } else {
        $div.classList.add('alert-danger');
    }

    $target = document.getElementById('alertContainer');

    if (!$target.hasChildNodes()) {
        $target.appendChild($div);
    } else {
        $target.replaceChild($div, $target.childNodes[0]);
    }
}

/**
 * Remove an element with a css effect
 * 
 * @param {Object} target Node element to remove
 */
function deleteNode(target) {
    var _this = this;

    target.classList.add('disapear');

    setTimeout(function () {
        return target.remove(_this);
    }, 600);
}

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);
module.exports = __webpack_require__(0);


/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__class_services_MediaService_js__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__helpers__ = __webpack_require__(0);



var mediaService = new __WEBPACK_IMPORTED_MODULE_0__class_services_MediaService_js__["a" /* MediaService */]();

var $btDeleteMedia = document.getElementsByClassName('bt-delete-media');

var _loop = function _loop(i) {
    $btDeleteMedia[i].onclick = function () {
        return deleteMedia($btDeleteMedia[i].dataset.mediaId);
    };
    //console.log($btDeleteMedia[i]);
    // $btDeleteMedia[i].closest('tr')
    //$btDeleteMedia[i].onclick = () => deleteNode($btDeleteMedia[i].closest('tr'));
};

for (var i = 0; i < $btDeleteMedia.length; i++) {
    _loop(i);
}

function deleteMedia(id) {
    console.log(id);
    mediaService.deleteMedia(id).then(function (response) {
        console.log(response);

        var $alertContainer = document.getElementById('alertContainer');

        if (response.ok) {
            Object(__WEBPACK_IMPORTED_MODULE_1__helpers__["deleteNode"])(
            //retrieve the <tr> line
            document.querySelector('[data-media-id="' + id + '"]').closest('tr'));
            Object(__WEBPACK_IMPORTED_MODULE_1__helpers__["createNotification"])($alertContainer, "Le média a bien été supprimé!");
        } else {
            Object(__WEBPACK_IMPORTED_MODULE_1__helpers__["createNotification"])($alertContainer, "Une erreur s'est produite, veuillez réessayer plus tard.", false);
        }
    }).catch(function (error) {
        return console.log(error);
    });;
}

/***/ }),
/* 3 */
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
            console.log('coucou2');
            console.log(this.url);
            return fetch(this.url + '/' + id, {
                method: 'DELETE',
                headers: this.headers
            });
        }
    }, {
        key: 'logError',
        value: function logError() {
            return "";
        }
    }, {
        key: 'url',
        get: function get() {
            return this._url;
        }
    }, {
        key: 'headers',
        get: function get() {
            return this._headers;
        }
    }]);

    return MediaService;
}();

/***/ })
/******/ ]);