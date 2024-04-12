<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="SPIRITS.css">
    <title>Document</title>
</head>
<body>
    
<div class="s1 border-1px">
<!-- menu -->
<div class="s2">
    <a href="S.html">
        <div class="image1">
        <img src="./IMAGES/pi-symbol-public-domain.jpg"/>  
    </a> 
</div>
</div>
<div class="s3">

  <style>
    
    .dropdown {
      float: right;
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      right: 0;
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    .dropdown a:hover {background-color: #ddd;}
    
    .dropdown .show {display: block;}
  </style>
    
    
    
    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn">Vêtement</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
      </div>
    </div>
    
    <script>
   
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>
</div>
<div class="s4">
    <style>

        #myInput2 {
          box-sizing: border-box;
          background-image: url('searchicon.png');
          background-position: 14px 12px;
          background-repeat: no-repeat;
          font-size: 16px;
          padding: 14px 20px 12px 45px;
          border: none;
          border-bottom: 1px solid #ddd;
        }
        
        #myInput2:focus {outline: 3px solid #ddd;}
        
        .dropdown2 {
          position: relative;
          display: inline-block;
        }
        
        .dropdown2-content {
          display: none;
          position: absolute;
          background-color: #f6f6f6;
          min-width: 230px;
          overflow: auto;
          border: 1px solid #ddd;
          z-index: 1;
        }
        
        .dropdown2-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        
        .dropdown2 a:hover {background-color: #ddd;}
        
        .dropdown2 .show {display: block;}
        </style>
        
        
        <div class="dropdown">
          <button onclick="myFunction2()" class="dropbtn2"> Autre</button>
          <div id="myDropdown2" class="dropdown2-content">
            <input type="text" placeholder="Search.." id="myInput2" onkeyup="filterFunction2()">
            <a href="#about">About</a>
            <a href="#base">Base</a>
            <a href="#blog">Blog</a>
            <a href="#contact">Contact</a>
            <a href="#custom">Custom</a>
            <a href="#support">Support</a>
            <a href="#tools">Tools</a>
          </div>
        </div>
        
        <script>
        function myFunction2() {
          document.getElementById("myDropdown2").classList.toggle("show");
        }
        
        function filterFunction2() {
          const input = document.getElementById("myInput2");
          const filter = input.value.toUpperCase();
          const div = document.getElementById("myDropdown2");
          const a = div.getElementsByTagName("a");
          for (let i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              a[i].style.display = "";
            } else {
              a[i].style.display = "none";
            }
          }
        }
        </script>
</div>
<a href="SPIRIT.html">
<div class="s5">
    En savoir plus
  </a>
</div>
<a href="SPIRITS.html">
<div class="image2">
    <img src="./IMAGES/5bf6fcff3d5623.27094295.jpg"/> 
 </a>
    </div>

</div>


<div class="spirits1">
  
</div>




<div class="page28">

    <div class="page29">
        <div class="page30">
            <div class="page31">
            <h3>Nous joundre:</h3>
            </div>
            <h3>+33 0 00 00 00 00</h3>
            <h3>Nous contacter par mail</h3>
        </div>
        <div class="page30">
            <div class="page31">
                <h3>Découvrir</h3>
                </div>
            <h3>Evénements</h3>
            <h3>Actualités</h3>
            <h3>Albums</h3>
        </div>
        <div class="page30">
            <div class="page31">
                <h3>L'association</h3>
                </div>
            <h3>Qui sommes-nous?</h3>
            <h3>Trombinoscope</h3>
        </div>
        <div class="page30">
            <div class="page31">
                <h3>Nos coupes de coeur</h3>
                </div>
            <h3>Sciences</h3
            <h3>Art et littérature</h3>
            <h3>Ludique</h3>
        </div>
    </div>
    <div class="page32">
    </div>
    <div class="page33">
        <div class="page34">
        <h3>2023 © Apprentis Pas Sages. Tous droits réservés</h3>
        </div>
        <div class="page35">
            <h3>Cookies - Politique de confidentialité - Mentions légales - CGU</h3>
            </div>
    </div>
</div>

