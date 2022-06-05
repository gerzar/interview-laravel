async function removeFromCart(e) {


    let csrf = e.value;
    let url = e.dataset.url;

    const response = await fetch(url, {
        method: 'DELETE',
        headers: {"X-CSRF-TOKEN": csrf}
    });

    const value = await response.json();

    if (value.status === 'ok') {
        console.log('Deleted');
    } else {
        console.log('Error');
    }


}
