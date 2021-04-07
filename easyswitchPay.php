<!DOCTYPE html>
<html>
<head>
   <meta name="author" content="Easyswitch Payment page snippet">
   <meta name="description" content="Easyswitch Payment page snippet">
   <title>Test Payment Page</title>
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

</head>
<body>
<div class="container">
   <header>
      <h1>Inline Test</h1>
   </header>
   <section >
     <form>
      <button id="easyswithcPayNow">Pay with Easyswitch</button>
     </form>
   </section>
   <section >
   </section>
 
</div>


        
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>




<script>
$(document).one("click", "#easyswithcPayNow", function(getEasyswitch) {
event.preventDefault();
easySecureload();
const url = "https://easyswitchgroup.com/sandbox.api/";
const privateKey = "LIVE OR TEST KEY GOES HERE";
fetch(url, {
    method : "POST",
    body : JSON.stringify({
        amount : '1000',
        clientEmail:'EMAIL',
        Authorization: 'Basic '+privateKey,
    }),
    
}).then(response => {
 
  if (response.ok) {
    response.json().then(json => {
    //   console.log(json); ....See response array here.....
      dataRes = json;
      easyswitchPopUp();
    });
  }
})
.catch(err => console.log('Request Failed', err));

})
</script>



<script src="https://easyswitchgroup.com/sandbox.api/easyswitchPopupPay.js"></script>
    </body>
</html>
