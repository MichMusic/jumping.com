document.querySelector('form').addEventListener('submit', e => {
        e.preventDefault();

        const data = {
                games: document.getElementById('games').value,
                email: document.getElementById('email').value,
                fio: document.getElementById('fio').value,
                numbers: document.getElementById('numbers').value,
                adres: document.getElementById('adres').value
        }
        sendForm(data);
});

async function sendForm(data) {
        const res = await fetch('./feedback.php', {
            method: 'POST',
            headers: {'Content-type': 'application/json'},
            body: JSON.stringify(data)
        });
    
        const result = await res.json();
    
        if (res.status === 201) {
            alert(`Спасибо за заказ! ${result.message}`)
        } else {
            alert('Oops, что-то пошло не так');
        }
}