<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Swiss Federal Office of Energy (SFOE)" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="revisit-after" content="1 days" />
  <meta name="google-site-verification" content="[Insert Google Verification Code]" />

  <link rel="icon" type="image/xx-icon" href="images/mainLogo/favicon.svg" />
  <link rel="stylesheet" href="index.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <script src="https://kit.fontawesome.com/c6287e70a2.js" crossorigin="anonymous"></script>


  <style>@import url("https://fonts.googleapis.com/css2?family=Kalam:wght@400;700&family=Manrope&family=Montserrat&family=Pacifico&family=Parisienne&family=Permanent+Marker&family=Poppins&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&family=Pacifico&family=Parisienne&family=Poppins&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    
    
    * {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      text-decoration: none;
      font-family: 'Montserrat', Courier, monospace;
      letter-spacing: 1px;
    }
    
    h3 {
      font-family: 'Poppins', Courier, monospace;
    }
    
    /* Firefox */
    * {
      scrollbar-width: thin;
      scrollbar-color: #7E7E7E #DFE9EB;
    }
    
    /* Chrome, Edge and Safari */
    *::-webkit-scrollbar {
      width: 0px;
      width: 0px;
    }
    
    *::-webkit-scrollbar-track {
      border-radius: 5px;
      background-color: #DFE9EB;
    }
    
    *::-webkit-scrollbar-track:hover {
      background-color: #B8C0C2;
    }
    
    *::-webkit-scrollbar-track:active {
      background-color: #B8C0C2;
    }
    
    *::-webkit-scrollbar-thumb {
      border-radius: 18px;
      background-color: #7E7E7E;
    }
    
    *::-webkit-scrollbar-thumb:hover {
      background-color: #5012E0;
    }
    
    *::-webkit-scrollbar-thumb:active {
      background-color: #A3A3A3;
    }
    
    
    
    .skiptranslate {
      display: none !important;
      height: 0px !important;
    }
    
    iframe {
      display: none !important;
      height: 0px;
    }
    
    /* ========================Header Code Starts here=============== */
    
    /* header styles */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 7px 0rem;
      color: #ffffff;
      background-color: rgba(255, 255, 255, 0.95);
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      z-index: 999;
      box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }
    
    
    
    .nav-logo img {
      width: 1.2rem;
      height: 1.2rem;
    }
    
    .nav-logo {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 50px;
      margin-left: 2rem;
      background: rgb(255, 255, 255);
      box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }
    
    
    /* -----------hamburger menu code---------------- */
    
    nav {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 60px;
      padding: 0 10px;
      color: white;
    }
    
    .menu-plus-translator {
      display: flex;
      align-items: center;
      justify-content: center;
      padding-right: 1rem;
    }
    
    .globe-icon-plus-text {
      display: flex;
      align-items: center;
      justify-content: space-around;
      margin-left: 3rem;
    }
    
    .globe-icon-plus-text .lang-text h3 {
      color: rgba(0, 0, 0, 0.562);
      font-size: 16px;
    }
    
    .menu-icon {
      cursor: pointer;
      transition: transform 0.3s ease-in-out;
    }
    
    .menu-icon i {
      color: rgba(7, 0, 41, 0.829);
      font-size: 28px;
    }
    
    .globe-icon-plus-text i {
      color: rgba(7, 0, 41, 0.829);
      font-size: 30px;
    }
    
    .menu {
      display: none;
      position: absolute;
      top: 60px;
      margin-top: 1rem;
      right: 1%;
      width: 30%;
      border-radius: 10px;
      overflow: hidden;
      background: rgba(255, 255, 255, 0.52);
      backdrop-filter: blur(5.2px);
      -webkit-backdrop-filter: blur(5.2px);
      border: 1px solid rgba(255, 255, 255, 0.31);
      transition: all 0.3s ease-in-out;
      box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }
    
    
    .menu ul {
      list-style: none;
      margin: 0;
      padding: 0;
      z-index: 222;
      display: flex;
      flex-direction: column;
    }
    
    .menu li {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      padding: 10px 20px;
    }
    
    .menu li:last-child {
      border-bottom: none;
    }
    
    .menu ul li:hover {
      background-color: darkorange;
    }
    
    .menu ul li:hover a {
      color: white;
      transition: all .01s ease;
    }
    
    .menu a {
      color: rgba(11, 11, 19, 0.938);
      text-decoration: none;
      font-size: 16px;
      transition: color 0.9s ease-in-out;
    }
    
    .menu-icon.active i {
      color: rgba(0, 0, 0, 0.8);
    
    }
    
    .menu.active {
      display: flex;
      flex-direction: column;
      opacity: 1;
      z-index: 2;
      transform: translateY(0);
    }
    
    .menu.active li a:hover {
      color: rgba(0, 0, 0, 0.8);
    }
    
    /* =================Translator Code ============ */
    
    
    /* ===============HERO SECTION CODE IS HERE================= */
    .hero {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding-top: 3.2rem;
      padding-left: 2rem;
      box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
      overflow: hidden;
      padding-bottom: 3rem;
      position: relative;
    
    }
    
    .hero-title-text {
      width: 45%;
      padding: 2.5rem 0rem;
    }
    
    .hero-text {
      display: inline-flex;
      justify-content: space-evenly;
      align-items: flex-start;
      flex-direction: column;
      text-align: left;
    }
    
    .hero-text h1 {
      font-size: 3rem;
      font-weight: bolder;
      font-family: 'Poppins', sans-serif;
      color: rgb(1, 2, 15);
      line-height: 3.4rem;
    }
    
    .hero-text p {
      font-size: 1.1rem;
      padding-right: 3rem;
      margin-top: 1rem;
      line-height: 1.7rem;
    }
    
    .hero-text h1 span {
      font-family: 'Poppins', sans-serif;
      font-weight: bolder;
      background: #fe8c00;
      background: -webkit-linear-gradient(to right, #f83600, #fe8c00);
      background: linear-gradient(to right, #f83600, #fe8c00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .btn {
      display: inline-block;
      padding: 1rem 2rem;
      border-radius: 5px;
      background-color: #333;
      color: #fff;
      text-decoration: none;
    }
    
    /* ===========Hero section image code is here============ */
    .hero-image {
      position: absolute;
      top: -0.2%;
      left: 0;
      opacity: 1;
      width: 100%;
      height: 101%;
      z-index: -1;
    }
    
    .hero-image img {
      width: 100%;
      height: 100%;
      -webkit-clip-path: polygon(63% 0, 100% 0%, 100% 100%, 41% 100%);
      clip-path: polygon(63% 0, 100% 0%, 100% 100%, 41% 100%);
    }
    
    
    /* ======================Address Search Bar CoDE============== */
    
    .hero-search {
      width: 100%;
      display: inline-flex;
      align-items: center;
      overflow: hidden;
      padding: 1rem;
      margin-top: -1.4rem;
    }
    
    
    #address-form {
      display: flex;
      width: 55%;
      background-color: white;
      overflow: hidden;
      align-items: center;
      padding: 0rem 0.2rem;
      justify-content: space-between;
      border-radius: 50px;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }
    
    #location-input {
      padding: 1.2rem;
      font-size: 1rem;
      border: none;
      width: 82%;
      outline: none;
    }
    
    #location-input::placeholder {
      color: #999;
    }
    
    #self-locate-button {
      background-color: #333;
      color: #fff;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      border: none;
      margin-left: 1rem;
      cursor: pointer;
    }
    
    #self-locate-button:hover {
      background-color: #555;
    }
    
    button[type="submit"] {
      background-color: #333;
      color: #ffff;
      border: none;
      width: 53px;
      height: 53px;
      border-radius: 50px;
      cursor: pointer;
    }
    
    button[type="submit"] i {
      font-size: 17px;
    }
    
    button[type="submit"]:hover {
      background-color: royalblue;
    }
    
    /* =======================Featured Code Start From Here============== */
    .featured-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      max-width: 100%;
      background-color: rgb(243, 246, 248);
      transition: all 0.3s ease-in-out;
      box-shadow: inset 0px 1px 1px 0px rgba(0, 0, 0, 0.08), inset 0px -1px 1px 0px rgba(0, 0, 0, 0.08);;
      padding: 6rem 1rem;
      overflow: hidden;
    }
    
    .item1,
    .item2 {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      padding: 1rem;
    }
    
    
    .featured-section .featured-title {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 88%;
      padding: 2rem;
      margin-bottom: 1rem;
      border-radius: 10px;
      background-color: rgb(255, 255, 255);
      box-shadow: -10px 0px 2px 0px #f83600, 10px 0px 2px 0px #f83600;
    }
    
    .featured-section .featured-title h3 {
      color: rgb(5, 0, 34);
    }
    
    .featured-section .featured-title h3 span {
      font-family: 'Poppins', sans-serif;
      font-weight: bolder;
      background: #fe8c00;
      background: -webkit-linear-gradient(to right, #f83600, #fe8c00);
      background: linear-gradient(to right, #f83600, #fe8c00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .featured-item {
      max-width: 40%;
      padding: 2rem 2rem;
      border-radius: 10px;
      background-color: white;
      flex-basis: calc(50% - 1rem);
      transition: all 0.3s ease-in-out;
      box-shadow: -10px 0px 2px 0px #f83600;
    }
    
    .featured-item:hover {
      box-shadow: -10px 0px 2px 0px #f83600, 0px 0px 5px 0px #f83600;
    }
    
    .featured-item img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      margin-bottom: 10px;
    }
    
    .featured-item h3 {
      font-size: 20px;
      margin-bottom: 10px;
      color: rgb(5, 0, 34);
    }
    
    .featured-item p {
      font-size: 14px;
      color: #020418;
      line-height: 1.5;
      margin-bottom: 0;
    }
    
    .featured-logo {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      width: 50px;
      height: 50px;
      overflow: hidden;
      margin-bottom: 1rem;
      backdrop-filter: blur(15px);
      border-radius: 50px;
      transition: all 0.3s ease-in-out;
      box-shadow: 0px 0px 20px -7px #f83600;
      background: #fe8c00;
      background: -webkit-linear-gradient(to right, #f83600, #fe8c00);
      background: linear-gradient(to right, #f83600, #fe8c00);
    }
    
    .featured-logo i {
      color: rgb(255, 255, 255);
      font-size: larger;
    }
    
    
    /* ======================Happy Customers Code is here============= */
    
    .customer-section {
      max-width: 100%;
      display: flex;
      flex-wrap: wrap-reverse;
      justify-content: space-evenly;
      align-items: center;
      padding: 4rem 2rem;
      background-color: #ffffff;
      border: 1ps solid #f83600;
      backdrop-filter: blur(15px);
      transition: all 0.3s ease-in-out;
    }
    
    .image-container img {
      width: 25rem;
      height: 25rem;
    }
    
    .text-container {
      max-width: 50%;
      padding-left: 1rem;
    }
    
    h2 {
      font-size: 36px;
      font-weight: bold;
      color: #010011;
      margin-bottom: 20px;
    }
    
    p {
      font-size: 16px;
      line-height: 1.5;
      color: #02000f;
      margin-bottom: 10px;
    }
    
    .customer-section .text-container h2 span {
      font-family: 'Poppins', sans-serif;
      font-weight: bolder;
      background: #fe8c00;
      background: -webkit-linear-gradient(to right, #f83600, #fe8c00);
      background: linear-gradient(to right, #f83600, #fe8c00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .customer-section .text-container p span {
      font-family: 'Poppins', sans-serif;
      color: rgb(14, 0, 53);
    }
    
    
    /* ==================Why SOFE Section Code=========== */
    .sfoe-section {
      max-width: 100%;
      display: flex;
      flex-wrap: wrap-reverse;
      justify-content: space-evenly;
      align-items: center;
      padding: 6rem 2rem;
      background-color: #ffffff;
      background-color: rgb(243, 246, 248);
    }
    
    .why-SFOE {
      box-shadow: inset 0px 1px 5px -1px rgba(0, 0, 0, 0.72);
    }
    
    .sfoe-section .text-container span {
      font-weight: bold;
    }
    
    .sfoe-section .text-container h2 span {
      font-family: 'Poppins', sans-serif;
      font-weight: bolder;
      background: #fe8c00;
      background: -webkit-linear-gradient(to right, #f83600, #fe8c00);
      background: linear-gradient(to right, #f83600, #fe8c00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .otovo-text h2 {
      font-size: 2em;
      margin-bottom: 20px;
    }
    
    .otovo-text p {
      font-size: 1.2em;
      margin-bottom: 10px;
      line-height: 1.4;
    }
    
    
    /* ==============Why Solar Energy Code======== */
    
    .system-galance {
      max-width: 100%;
      background-color: rgb(243, 246, 248);
      box-shadow: inset 0px 1px 5px -1px rgba(0, 0, 0, 0.72);
    }
    
    .solar-energy {
      background-color: white;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }
    
    
    /* ===================Footer Code is Here============ */
    footer {
      max-width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      overflow: hidden;
      padding-top: 5rem;
      text-align: center;
      background-color: #ffffff;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    }
    
    footer .row {
      display: inline-flex;
      align-items: center;
      flex-direction: column;
      justify-content: space-between;
      text-align: center;
      margin-bottom: 2rem;
    }
    
    footer h3 {
      font-size: 20px;
      margin-bottom: 20px;
      color: #050024;
    
    }
    
    footer p {
      font-size: 16px;
      line-height: 1.5;
    }
    
    footer ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    
    footer li {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 10px;
    }
    
    footer li i {
      color: #050024;
      font-size: 22px;
    }
    
    .social-icons li {
      display: inline-block;
      margin-right: 10px;
      position: relative;
    }
    
    
    .hover-underline-animation {
      display: inline-block;
      position: relative;
      color: #0087ca;
    }
    
    .hover-underline-animation::after {
      content: '';
      position: absolute;
      width: 100%;
      transform: scaleX(0);
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #050024bb;
      transform-origin: bottom right;
      transition: transform 0.3s ease-out;
    }
    
    
    .hover-underline-animation:hover::after {
      transform: scaleX(1);
      transform-origin: bottom left;
    }
    
    .social-icons a {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      width: 55px;
      height: 55px;
      overflow: hidden;
      backdrop-filter: blur(15px);
      border-radius: 50px;
      transition: all 0.3s ease-in-out;
      box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }
    
    .social-icons a:hover {
      background-color: #050024;
      transition: all 0.4s ease-in-out;
    }
    
    .social-icons a:hover i {
      color: #ffffff;
    }
    
    .footer-links {
      list-style: none;
      margin: 0;
      padding: 0;
      text-align: right;
    }
    
    .footer-links li {
      display: inline-block;
      margin-left: 20px;
    }
    
    .footer-links li:first-child {
      margin-left: 0;
    }
    
    .footer-links a {
      color: #050024;
      font-size: 16px;
      text-decoration: none;
      transition: all 0.3s ease-in-out;
    }
    
    .footer-links li a i {
      font-size: smaller;
      color: white;
      display: none;
    }
    
    hr {
      margin: 40px 0;
      border: none;
      border-top: 1px solid #ffffff;
    }
    
    
    .hero-img2 {
      display: none;
    }
    
    /* Media queries */
    @media (max-width: 767px) {
    
    
      html {
        margin: 0;
        padding: 0px;
      }
    
      header {
        max-width: 100%;
      }
    
      .menu-plus-translator nav {
        margin-left: 1rem;
      }
    
      .lang-selector {
        display: none;
      }
    
      .nav-logo {
        margin-left: 1rem;
      }
    
      .menu {
        background-color: white;
      }
    
      nav {
        padding: 0%;
        margin: 0%;
      }
    
      .hero-img1 {
        display: none;
      }
    
      .hero {
        max-width: 100%;
        flex-direction: column;
        padding: 0%;
        margin: 0%;
      }
    
      .hero-text {
        max-width: 100%;
        padding: 0%;
      }
    
      .hero-title-text {
        max-width: 100%;
        min-width: 90%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: left;
        padding-left: 1rem;
        padding-right: 0%;
      }
    
    
      .hero-title-text h1 {
        width: 100%;
        font-size: 42px;
        padding: 0%;
      }
    
      .hero-title-text p {
        width: 100%;
        padding: 0%;
      }
    
      .hero-search {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0%;
        z-index: 999;
      }
    
      #address-form {
        width: 95%;
      }
    
      .hero .hero-img2 {
        display: block;
        width: 100%;
        margin-top: -2rem;
        padding-bottom: 0%;
        z-index: -1;
      }
    
      .hero .hero-img2 img {
        width: 100%;
        height: 100%;
    
      }
    
      .menu {
        width: 98%;
        margin-top: 1.2rem;
      }
    
      .menu-icon {
        transform: translateX(-30px);
      }
    
      .menu {
        transform: translateY(-50px);
      }
    
      .featured-section {
        max-width: 100%;
        padding: initial 0%;
        margin-top: 0%;
        box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.41);
      }
    
      .item1,
      .item2 {
        min-width: 95%;
        max-width: 95%;
        margin: 0;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
      }
    
      .item1 {
        padding-bottom: 0%;
      }
    
      .item2 {
        padding-top: 0%;
      }
    
      .featured-section .featured-title {
        min-width: 100%;
        max-width: 100%;
        box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
      }
    
      .featured-section .featured-title h3 {
        font-size: 18px;
      }
    
      .featured-item {
        min-width: 90%;
        max-width: 90%;
        box-shadow: none;
        margin-top: 1rem;
      }
    
      .customer-section {
        max-width: 100%;
        padding-left: 3%;
        padding-right: 3%;
        box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.41);
        overflow: hidden;
      }
    
    
      .image-container,
      .text-container {
        max-width: 100%;
      }
    
      .text-container {
        padding: 1rem 1rem;
      }
    
      .image-container {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding-top: 2rem;
      }
    
      .image-container img {
        width: 95%;
        height: auto;
      }
    
      .system-galance {
        padding: 4rem 0.4rem;
        box-shadow: inset 0px 1px 0px 0px rgba(7, 0, 0, 0.37);
      }
    
      .solar-energy {
        box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.41);
      }
    
      footer {
        text-align: center;
      }
    
      .footer-links {
        text-align: center;
        margin-top: 20px;
      }
    
      .footer-links li {
        display: block;
        margin: 10px 0;
      }
    }
    
    
    /* Media queries for even smaller screens */
    @media screen and (max-width: 480px) {
      h2 {
        font-size: 24px;
      }
    
      p {
        font-size: 16px;
      }
    }
    
    
    
    
    @media only screen and (min-width: 768px) {
    
      .otovo-text {
        flex-basis: 50%;
        text-align: left;
      }
    
      .otovo-text p {
        font-size: 1em;
      }
    
      .sfoe-section img {
        flex-basis: 50%;
        height: 100%;
        object-fit: contain;
      }
    
    }</style>
</head>

<body>
    <!-- =========================Header code============================== -->
    <header>



        <div class="nav-logo">
            <img src=" images/mainLogo/headerLogo.svg " alt="">
        </div>

        <div id="google_translate_element"></div>

        <div class="menu-plus-translator">

            <nav>
                <div class="menu-icon globe-icon-plus-text">
                    <i class="fa-solid fa-language"></i>
                </div>

                <div class="menu" id="language-menu">
                    <ul id="language-options" class="notranslate">
                        <li><a href="#" data-lang="en">English</a></li>
                        <li><a href="#" data-lang="fr">French</a></li>
                        <li><a href="#" data-lang="de">German</a></li>
                        <li><a href="#" data-lang="it">Italian</a></li>
                    </ul>
                </div>
            </nav>

            <nav>
                <div class="menu-icon">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class="menu display" id="main-menu">
                    <ul>
                        <li><a href="/add">login</a></li>
                        <li><a href="/partner-login">Partner Company</a></li>
                        <li><a href="/signup">Sign Up</a></li>
                        <li><a href="/submit-form">Connect Us</a></li>
                    </ul>
                </div>
            </nav>

        </div>
    </header>


    <!-- ======================Header Code ENDS here==================== -->
    <div class="hero">

        <div class="hero-text">
            <div class="hero-title-text">
                <h1>Your own electricity thanks to <span>a solar system?</span> Now for the offer</h1>
                <p>Join over 15,000 satisfied customers and become your own electricity producer with a photovoltaic system.</p>
            </div>
        </div>

        <div class="hero-image hero-img1">
            <img src="images/Solar Panel/solar panel.jpg" alt="Hero Image">
        </div>

        <div class="hero-search">
            <form id="address-form" action="/map" method="get">
                <input type="search" id="location-input" name="location" placeholder="Search Your Location here...">
                <button type="submit" id="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <div class="hero-img2">
            <img src=" images/Solar Panel/solar panel.jpg " alt="Hero Image">
        </div>

    </div>


    <!-- ==========================Featured Section Code here ======================== -->
    <section class="featured-section">

        <div class="featured-title">
            <h3>Behold the magic of efficiency and simplicity - <span>this is how it works!</span></h3>
        </div>

        <div class="item1">
  <div class="featured-item">
    <div class="featured-logo">
      <i class="fa-solid fa-battery-full"></i>
    </div>

    <h3>Your roof, your potential</h3>
    <p>Cut your carbon footprint, switch to solar! Get a free quote for a customized solar system on your roof today.</p>
  </div>

  <div class="featured-item">
    <div class="featured-logo">
      <i class="fa-solid fa-dna"></i>
    </div>
    <h3>Proven solar power for decades</h3>
    <p>SFOE has each plant inspected by independent Swiss inspectors. That's why we can offer market-leading guarantees.</p>
  </div>
</div>

<div class="item2">
  <div class="featured-item">
    <div class="featured-logo">
      <i class="fa-solid fa-gear"></i>
    </div>
    <h3>Made-to-measure solution</h3>
    <p>Custom solutions, tailored to you. No standard installations - we'll find the best fit for your house, budget, and schedule.</p>
  </div>

  <div class="featured-item">

    <div class="featured-logo">
      <i class="fa-solid fa-hand-holding-hand"></i>
    </div>
    <h3>All-round carefree service</h3>
    <p>Let us handle it all - Swiss installation companies included. From planning to subsidies, we make going solar effortless.</p>
  </div>
</div>

</section>

<!-- ===============================Happy Customers ============= -->

<div class="customer-section">
  <div class="image-container">
    <img src="images/Feautred-Section/Otovo is Europe_s largest solar platform.png " alt="Image description">
  </div>
  <div class="text-container">
    <h2>Join over <span>15,000 happy customers</span></h2>
    <p>In 2023, SFOE became the <span>market leader</span> for private solar systems in Norway. Since then we have made over <span>15,000 customers happy in 13 countries.</span></p>
    <p>We can't wait to help people like you get affordable, green power.</p>
    <p>Incidentally, SFOE is a <span>financially strong company that is traded</span> on the stock exchange and is therefore a certified, reliable partner.</p>
  </div>
</div>


<!-- ======================Why SFOE SECTION?===================== -->
<div class="sfoe-section why-SFOE">
    <div class="text-container">
        <h2>Why <span>SFOE?</span></h2>

        <ul>
            <li>
                <p> <span>All-round carefree service:</span> We take care of everything until the solar power is flowing! From planning your PV system to commissioning and of course applying for subsidies. After the installation, we are still available as a contact person.</p>
            </li>
            <li>
                <p> <span>Cost savings:</span>we compare the offers of our partners in your area and select the installer with the best offer.</p>
            </li>
            <li>
                <p> <span>Flexible financing:</span> You have the choice between renting and direct purchase. We would be happy to advise you.</p>
            </li>
            <li>
                <p> <span>Quality & safety:</span> Our experienced photovoltaic partners install your solar system professionally and meet the highest safety standards.</p>
            </li>
            <li>
                <p> <span>Regionality:</span> We plan every solar project from Zurich and work exclusively with regional Swiss installation companies.</p>
            </li>
        </ul>
    </div>

    <div class="image-container">
        <img src="images/Feautred-Section/All-round carefree service for solar systems.png" alt="Image description">
    </div>
</div>

<!-- =====================Why Solar Energy section CODE=================== -->
<div class="sfoe-section solar-energy">
    <div class="image-container">
        <img src="/images/Feautred-Section/pngegg (14).png" alt="Image description">
    </div>

    <div class="text-container">
        <h2>Why <span>solar energy?</span></h2>

        <ul>
            <li>
                <p> <span>Sustainability:</span> With solar power, the energy transition is not just a buzzword. Get green energy from an inexhaustible source.</p>
            </li>
            <li>
                <p> <span>Cost savings:</span> In many cases, a solar rental with Otovo is cheaper than your current electricity bill. Alternatively, your investment will pay for itself in a few years if you buy it directly.</p>
            </li>
            <li>
                <p> <span>Independence: </span> The energy market is always good for a surprise. A solar system protects you from
                <div class="sfoe-section hero-section">
    
  </div>
  <div class="sfoe-section system-galance">
    <div class="text-container">
      <h2>Your <span>system at a glance</span> at all times</h2>
      <p>We make it easy for you to see what your plant is producing. You can see your production for each day, each
        week and each month. You can also follow the production in real time!</p>
      <p>In the app you will also find a separate environmental section. There you can see the <b>CO2 equivalent of
          your annual production</b> and realize how important your solar system is for the environment. Feel good.
      </p>
    </div>
    <div class="image-container system-image">
      <img src="images/Feautred-Section/Track solar power via app.png" alt="Image description">
    </div>
  </div>
  <footer>
    <div class="row">
      <div class="footer-title">
        <h3>Solar power made simple: quality, savings, and service.</h3>
      </div>
      <div class="col-md-4">
        <ul class="social-icons">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>&copy; 2023 SFOE. All rights reserved.</p>
      </div>
      <div class="col-md-6">
        <ul class="footer-links">
          <li class="hover-underline-animation"><a href="#">Privacy Policy</a></li>
          <li class="hover-underline-animation"><a href="#">Terms and Conditions</a></li>
          <li class="hover-underline-animation"><a href="#">Rental Conditions</a></li>
          <li class="hover-underline-animation"><a href="#">Documentation </a></li>
        </ul>
      </div>
    </div>

  </footer>
<!-- =================Javascript Hamburger Menu Code================= -->
<script>
    const menuIcons = document.querySelectorAll('.menu-icon');
    const menus = document.querySelectorAll('.menu');

    function toggleMenu(index) {
      menuIcons[index].classList.toggle('active');
      menus[index].classList.toggle('active');
    }

    menuIcons.forEach((menuIcon, index) => {
      menuIcon.addEventListener('click', () => {
        toggleMenu(index);

        // close the other menu
        const otherIndex = index === 0 ? 1 : 0;
        if (menuIcons[otherIndex].classList.contains('active')) {
          toggleMenu(otherIndex);
        }
      });
    });

    menus.forEach((menu) => {
      const menuLinks = menu.querySelectorAll('a');

      menuLinks.forEach((link) => {
        link.addEventListener('click', () => {
          menuIcons.forEach((menuIcon) => {
            menuIcon.classList.remove('active');
          });
          menus.forEach((menu) => {
            menu.classList.remove('active');
          });
        });
      });
    });

    document.addEventListener('click', (event) => {
      const isClickInsideMenu = menus[0].contains(event.target) || menus[1].contains(event.target);
      const isClickInsideMenuIcon = menuIcons[0].contains(event.target) || menuIcons[1].contains(event.target);
      if (!isClickInsideMenu && !isClickInsideMenuIcon) {
        menuIcons.forEach((menuIcon) => {
          menuIcon.classList.remove('active');
        });
        menus.forEach((menu) => {
          menu.classList.remove('active');
        });
      }
    });
  </script>

  <!-- Load the Google Translate API -->
  <script type="text/javascript"
  src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script type="text/javascript">
  // Initialize the Google Translate API
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'en', autoDisplay: false }, 'google_translate_element');
  }

  // Add event listeners to your custom option links
  var languageOptions = document.querySelectorAll('#language-options a');
  languageOptions.forEach(function (option) {
    option.addEventListener('click', function (event) {
      event.preventDefault();
      var lang = this.getAttribute('data-lang');
      var select = document.querySelector('select.goog-te-combo');
      select.value = lang;
      select.dispatchEvent(new Event('change'));
    });
  });
</script>
  <!-- =======================JavaScript Code End================= -->  
  </body>