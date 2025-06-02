function specs(){
    let gameId=document.getElementById("game").value;
    let response_div = document.getElementById("response-wrap");
    const apiUrl = 'https://store.steampowered.com/api/appdetails?appids='+gameId.trim();
    fetch(apiUrl)
    .then(response => {
        return response.json();
    })
    .then(data => {

        const game = [];
        for(let i in data) {
            game.push([i, data[i]]);
        }
        let req = game[0][1].data.pc_requirements.minimum;
        response_div.innerHTML = "<h4>Requirements: </h4>" + req;
    })
    .catch(error => {
        console.error('Error:', error);
    });
    response_div.classList.remove("hidden");
}
document.getElementById("game-btn").addEventListener("click", specs);

/*
In case there are any CORS related erorrs, please install a CORS extension in your browser, more exactly: "Allow CORS: Access-Control-Allow-Origin" and enable it. After that 
the code should work properly.
*/