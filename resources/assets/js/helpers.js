
/**
* Create a Html element who display a message
* 
* @param {Object} $target Node who will contain the message
* @param {string} message The message to display
* @param {bool} success The status of the message
*/
export function createNotification($target, message, success = true) {
    console.log('coucou');
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
export function deleteNode(target) {
    target.classList.add('disapear');

    setTimeout(() => target.remove(this) , 600);
}