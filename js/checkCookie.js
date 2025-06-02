var cookieValue = document.cookie
        .split('; ')
        .find(row => row.startsWith('loggedin'))
        .split('=')[1];

    if (cookieValue === "true") {
        window.location.href="http://localhost/POLI_TECXPERTS/user/index_user.php";
    } else {
        window.location.href="http://localhost/POLI_TECXPERTS/index.html";
    }