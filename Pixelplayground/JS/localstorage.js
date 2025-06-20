const storedUsername = localStorage.getItem('gebruikersnaam');
const storedPassword = localStorage.getItem('wachtwoord');

    if (storedUsername) {
        document.getElementById('username').value = storedUsername;
    }
    if (storedPassword) {
        document.getElementById('password').value = storedPassword;
    };
    

 document.getElementById('form').addEventListener('submit', (event) => {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    event.preventDefault();

    localStorage.setItem('gebruikersnaam', username);
    localStorage.setItem('wachtwoord', password);
});