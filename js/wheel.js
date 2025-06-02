document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        var miniPage = document.getElementById("mini-page");
        miniPage.classList.add("show");
    }, 2000); 
        var closeBtn = document.getElementById("close-mini-page");
    closeBtn.addEventListener("click", function() {
        var miniPage = document.getElementById("mini-page");
        miniPage.classList.remove("show");
    });
});

document.addEventListener("DOMContentLoaded", function() {
    let wheel = document.querySelector('.wheel');
    let spinBtn = document.querySelector('.spinBtn');
    let closeButton = document.getElementById('close-mini-page');
    let value = 0;
    let isAnimating = false;
    
    spinBtn.onclick = function() {
        if (!isAnimating) {
         isAnimating = true;
            
        let randomSpin = 1080 - Math.ceil(Math.random() * 360);
        let totalAngle = randomSpin/45; // Total angle after spinning 
        console.log(totalAngle, randomSpin);
         wheel.style.transform = "rotate(" + (randomSpin+29) + "deg)";
         randomSpin=0;
         value=totalAngle; 
         closeButton.disabled = true;
    
            setTimeout(function() {
                isAnimating = false;
                closeButton.disabled = false;               
                if (totalAngle>=0 && totalAngle<=2 || totalAngle>=4 && totalAngle<=6 || totalAngle>=8 && totalAngle<=10 
                    || totalAngle>=12 && totalAngle<=14 || totalAngle>=16 && totalAngle<=18 || totalAngle>=20 && totalAngle<=22
                ) {
                    alert("You lost"); 
                } else {
                    let promo = generateRandomCode(length = 8); 
                    alert(promo);
                    savePromoCode(promo);
                    var miniPage = document.getElementById("mini-page");
                    miniPage.classList.remove("show");                  
                }
                //var miniPage = document.getElementById("mini-page");
                //miniPage.classList.remove("show");
            }, 5000); 
        }
    };

    closeButton.onclick = function() {
        if (!isAnimating) {
            var miniPage = document.getElementById("mini-page");
            miniPage.classList.remove("show");
        }
    };
});

function generateRandomCode(length = 8) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let code = '';
    for (let i = 0; i < length; i++) {
      code += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return code;
  }
  function savePromoCode(promo) {
    $.ajax({
        type: 'POST',
        url: '../user/voucher.php',
        data: { voucher_code: promo },
        success: function(response) {
            console.log('Promo code saved: ' + response);
        },
        error: function(error) {
            console.error('Error saving promo code: ', error);
        }
    });
}