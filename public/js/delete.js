async function deleteElement(e) {

    let csrf = e.value;
    let url = e.dataset.url;
    let messageBlock = document.getElementById('main-block');

    e.setAttribute('disabled', 'disabled');

    const response = await fetch(url, {
        method: 'delete',
        headers: {"X-CSRF-TOKEN": csrf}
    });

    const value = await response.json();

    if (value.status === 'ok') {
        messageBlock.insertAdjacentHTML('afterbegin', show_message('Deleting was successful', 'success'));

    } else {
        messageBlock.insertAdjacentHTML('afterbegin', show_message('Error', 'danger'));
    }
    delete_message('deleting-message');
    e.removeAttribute('disabled');
    delete_html(e);

}

function show_message(text, category) {
    return '<div class="alert alert-'+category+'" role="alert" id="deleting-message" style="margin-top: 20px;">'+text+'</div>';
}
function delete_message(elemID) {

    let e = document.getElementById(elemID);
    setTimeout(() => {
        e.remove();
    }, 1000)
}

function delete_html(e) {
    e.parentNode.parentNode.remove();
}
