async function addToCart(e) {


    let csrf = e.value;
    let url = e.dataset.url;

    const response = await fetch(url, {
        method: 'POST',
        headers: {"X-CSRF-TOKEN": csrf}
    });

    const value = await response.json();

    if (value.status === 'ok') {
        console.log('Added');
    } else {
        console.log('Error');
    }


}
