/*const stripe = Stripe("pk_live_51JYcHOEXbBTiuaUXxfebS0A9SM9pLytdrisfBI9xHpKNwJCiEJpAysNDswmnhKembz88u0jcmRCt26JOT7z5XK9Z000JUXxmIS")
document.getElementById("btn").addEventListener("click", function() {
    fetch('checkout.php',{
        method:"POST",
        headers:{
            'Content-Type' : 'application/json',
            
        },
        body: JSON.stringify({})
        
    }).then(res=> res.json())
    .then(payload =>{
        stripe.redirectToCheckout({sessionId: payload.id})
    })
})*/