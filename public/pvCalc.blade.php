<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description"
    content="Waqar Bugti Baloch is a highly skilled front-end developer and graphics designer with a passion for creating visually stunning and user-friendly websites and designs. Check out my portfolio to see my work.">
  <meta name="keywords"
    content="front-end development, graphic design, web design, user experience, user interface, HTML, CSS, JavaScript, portfolio, freelancer, Dera Bugti, Mission, Vision, Values,  Waqar Bugti Baloch">
  <meta name="author" content="Waqar Bugti Baloch">
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow">
  <meta name="revisit-after" content="1 days">
  <meta name="google-site-verification" content="[Insert Google Verification Code]">

  <link rel="icon" type="image/x-icon" href="images/mainLogo/favicon.svg">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="form.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://kit.fontawesome.com/c6287e70a2.js" crossorigin="anonymous"></script>
  <title>Request Form</title>
  <style>
  @import url("https://fonts.googleapis.com/css2?family=Kalam:wght@400;700&family=Manrope&family=Montserrat&family=Pacifico&family=Parisienne&family=Permanent+Marker&family=Poppins&display=swap");

    @import url("https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&family=Pacifico&family=Parisienne&family=Poppins&display=swap");
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    
    * {
      padding: 0;
      font-family: sans-serif;
      text-decoration: none;
      font-family: 'Montserrat', Courier, monospace;
      letter-spacing: 1px;
    }
    
    html {
      /* padding-left: 0%; */
      padding-right: 0%;
    }
    
    /* Firefox */
    * {
      scrollbar-width: thin;
      scrollbar-color: #397524 #DFE9EB;
    }
    
    /* Chrome, Edge and Safari */
    *::-webkit-scrollbar {
      width: 0px;
      width: 0px;
    }
    
    
    
    
    body {
      background-color: white;
    
      /* background: url(https://source.unsplash.com/E8Ufcyxz514/2400x1823) center / cover no-repeat fixed; */
    }
    
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0rem;
      padding-left: 1.2rem;
      border-radius: 50px;
      color: #ffffff;
      width: 98%;
      z-index: 999;
      background: rgba(255, 255, 255, 0.4);
      backdrop-filter: blur(5.1px);
      -webkit-backdrop-filter: blur(5.1px);
      border: 2px solid rgba(128, 128, 128, 0.13);
    }
    
    .skiptranslate {
      display: none !important;
      z-index: -1;
      height: 0px !important;
    }
    
    iframe {
      display: none !important;
      height: 0px;
    }
    
    .nav-logo img {
      width: 1.2rem;
      height: auto;
    }
    
    .nav-logo {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 55px;
      height: 55px;
      border-radius: 50px;
      background: rgb(255, 255, 255);
      box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }
    
    .nav,
    .menu {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    
    .nav {
      position: relative;
      background-color: #fff;
      padding: 8px;
      transition: 0.5s;
      text-align: center;
      border-radius: 50px;
      margin-right: 1rem;
      overflow: hidden;
    
    }
    
    .menu {
      margin: 0;
      padding: 0;
      width: 0;
      overflow: hidden;
      transition: 0.5s;
    }
    
    .nav input:checked~.menu {
      width: 370px;
    }
    
    .menu li {
      list-style: none;
      margin: 0 10px;
    }
    
    .menu li:first-of-type {
      color: rgb(6, 0, 56);
      font-weight: 600;
    }
    
    .menu li a {
      text-decoration: none;
      color: rgb(6, 0, 56);
      transition: 0.5s;
    }
    
    .nav input {
      width: 30px;
      height: 30px;
      cursor: pointer;
      opacity: 0;
    }
    
    .nav span {
      position: absolute;
      width: 30px;
      height: 4px;
      border-radius: 50px;
      background-color: rgb(6, 0, 56);
      pointer-events: none;
      transition: 0.5s;
    }
    
    .nav input:checked~span {
      background-color: rgba(6, 0, 56, 0.692);
      left: 10px;
      width: 23px;
    }
    
    .nav span:nth-child(2) {
      transform: translateY(-8px);
    }
    
    .nav input:checked~span:nth-child(2) {
      transform: translateY(0) rotate(-45deg);
    }
    
    .nav span:nth-child(3) {
      transform: translateY(8px);
    }
    
    .nav input:checked~span:nth-child(3) {
      transform: translateY(0) rotate(45deg);
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
      background-color: rgb(111, 0, 255);
      transform-origin: bottom right;
      transition: transform 0.25s ease-out;
    }
    
    
    .hover-underline-animation:hover::after {
      transform: scaleX(1);
      transform-origin: bottom left;
    }
    
    .sibling-fade:hover li a:not(:hover) {
      opacity: 0.6;
    }
    
    
    /* ===================Main Section Starts From Here======== */
    .main-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-top: .3rem;
      max-width: 100%;
    }
    
    /* =============Estimated Price and Savings Stats=========== */
    .priceEstimated {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 2rem;
      margin-top: 0.7rem;
      color: #ffffff;
      background-color: rgb(111, 0, 255);
      border-top-right-radius: 40px;
      border-top-left-radius: 40px;
      border: 1px solid rgba(128, 128, 128, 0.13);
      width: 94%;
    }
    
    .package {
      width: 35%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      text-align: center;
    }
    
    .pac {
      text-align: left;
      color: #ffffff;
    
    }
    
    .pac h3 {
      font-size: 12px;
      font-weight: 600;
      line-height: 0%;
    }
    
    .pac h2 {
      font-size: larger;
      padding: 0%;
      margin: 0%;
    }
    
    .sendRequest-button {
      padding: 0.8rem 2rem;
      border-radius: 50px;
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(0.6px);
      -webkit-backdrop-filter: blur(0.6px);
      border: 1px solid rgb(255, 255, 255);
      box-shadow: rgba(9, 30, 66, 0.062) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;
    }
    
    .sendRequest-button a {
      color: #ffffff;
    
      font-family: 'Poppins', sans-serif;
      text-decoration: none;
    }
    
    .sendRequest-button:hover {
      background: rgba(255, 255, 255, 0.51);
      box-shadow: 0px 4px 3px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
    
    }
    
    /* ===================Offer Sale Request==================== */
    .offer {
      display: flex;
      flex-direction: column;
      justify-content: left;
      align-items: center;
      text-align: left;
      padding: 3rem 2rem;
      padding-top: 3rem;
      border: 1px solid rgba(128, 128, 128, 0.212);
      border-top: none;
      color: #ffffff;
      width: 94%;
      z-index: 999;
      background-color: white;
    }
    
    .offer-1 {
      padding: 0rem 2rem;
      padding-top: 3rem;
    }
    
    .offer-title {
      width: 100%;
      display: flex;
      align-items: center;
      text-align: left;
      justify-content: flex-start;
    }
    
    .offer-logo {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      width: 40px;
      height: 40px;
      background: rgba(1, 1, 46, 0.69);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(3.5px);
      -webkit-backdrop-filter: blur(3.5px);
      border: 1px solid rgba(1, 1, 46, 0.3);
      border-radius: 50px;
      margin-right: 1rem;
    }
    
    .offer-title h3 {
      color: rgb(6, 0, 56);
      font-size: 20px;
      font-family: 'Poppins', sans-serif;
    
    }
    
    .address-info {
      width: 100%;
      text-align: left;
    
    }
    
    .address-info h3 {
      color: rgb(6, 0, 56);
      font-size: 14px;
      font-weight: 500;
    
    }
    
    /* ================Timeline Code start here============ */
    .timeline {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: first baseline;
      justify-content: center;
      text-align: left;
      margin-left: 1.4rem;
    
    }
    
    .timeline-title {
      width: 100%;
    }
    
    .timeline-title h3 {
      color: rgb(6, 0, 56);
      font-size: 16px;
      font-family: 'Poppins', sans-serif;
    }
    
    
    .timeline-steps {
      display: flex;
      flex-direction: column;
      justify-content: first baseline;
      align-items: flex-start;
      text-align: left;
      padding: 0px 1.1rem;
      color: #ffffff;
      width: 37%;
      z-index: 999;
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(0.6px);
      -webkit-backdrop-filter: blur(0.6px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .timeline-step p {
      color: rgb(6, 0, 56);
      font-size: small;
      font-family: 'Poppins', sans-serif;
    }
    
    .timeline-step {
      width: 100%;
      border-bottom: 1px solid rgb(221, 221, 221);
    }
    
    .step3 {
      border: none;
    }
    
    .step1::before {
      content: '\f058';
      position: absolute;
      font-family: "Font Awesome 5 Free";
      font-weight: 900;
      font-size: large;
      color: rgb(0, 0, 73);
      display: flex;
      text-align: center;
      justify-content: center;
      align-items: center;
      width: 16px;
      margin-top: 0.9rem;
      height: 16px;
      border-radius: 50%;
      right: 98%;
      background: rgba(255, 255, 255, 0.65);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
    
    }
    
    .step2::before {
      content: '';
      position: absolute;
      width: 16px;
      margin-top: 0.9rem;
      height: 16px;
      border-radius: 50%;
      right: 98%;
      background: rgba(255, 255, 255, 0.65);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px dashed rgb(31, 31, 31);
    
    }
    
    .step3::before {
      content: '';
      position: absolute;
      font-family: "Font Awesome 5 Free";
      font-weight: 400;
      color: blue;
      display: flex;
      text-align: center;
      justify-content: center;
      align-items: center;
      margin-top: 0.9rem;
      width: 16px;
      height: 16px;
      border-radius: 50%;
      right: 98%;
      background: rgba(255, 255, 255, 0.65);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px dashed rgb(31, 31, 31);
    }
    
    /* ====================solar package====================== */
    .solar-pack {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: left;
      padding: 3rem 2rem;
      color: #ffffff;
      width: 94%;
      z-index: 999;
      border: 1px solid rgba(128, 128, 128, 0.212);
      border-top: none;
      padding-bottom: 4rem;
      background-color: white;
    }
    
    .recommended-setting {
      width: 100%;
      display: flex;
      text-align: left;
      align-items: first baseline;
      justify-content: space-between;
      margin: 1rem 0rem;
      padding: 0.2rem 0rem;
      padding-left: 0.7rem;
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(0.6px);
      -webkit-backdrop-filter: blur(0.6px);
      border: 1px solid rgba(165, 165, 165, 0.151);
    }
    
    .recommended-setting-logo {
      margin-right: 1rem;
    }
    
    .recommended-setting-logo i {
      color: rgb(6, 0, 56);
      font-size: 16px;
    }
    
    .recommended-setting p {
      color: rgb(6, 0, 56);
      font-size: 14px;
      font-family: 'Poppins', sans-serif;
    }
    
    .PV-system-services {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
    }
    
    
    .solar-pack-title {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: left;
      text-align: left;
    }
    
    .solar-pack-title h2 {
      color: rgb(6, 0, 56);
      font-size: 20px;
      font-family: 'Poppins', sans-serif;
    }
    
    .solar-pack-icon {
      width: 40px;
      height: 40px;
    
    }
    
    .PV-system {
      width: 45%;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      text-align: left;
      margin-top: 1rem;
    }
    
    .PV-system-name {
      width: 100%;
    }
    
    .PV-system-name h3 {
      margin: 0%;
      padding: 0%;
      color: rgb(6, 0, 56);
      font-size: 16px;
      font-family: 'Poppins', sans-serif;
    }
    
    .solar-card {
      display: flex;
      align-items: center;
      text-align: left;
      color: #ffffff;
      z-index: 999;
      margin-top: 1rem;
      width: 100%;
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(0.6px);
      -webkit-backdrop-filter: blur(0.6px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
    }
    
    .module {
      justify-content: flex-start;
    }
    
    .module .solar-card-text {
      margin-left: 1rem;
    }
    
    .solar-card-text-font {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    
    
    .solar-card .solar-card-image {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: left;
      padding: 1rem 0.7rem;
      background: rgba(255, 255, 255, 0.521);
      /* box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); */
      backdrop-filter: blur(11px);
      -webkit-backdrop-filter: blur(11px);
      border-right: 1px solid rgba(148, 148, 148, 0.151);
      /* box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px; */
    }
    
    .solar-card .solar-card-image img {
      width: 80px;
      height: 80px;
    }
    
    
    .solar-card-text {
      padding: 0rem 1rem;
    }
    
    .solar-card-text h3 {
      color: rgba(6, 0, 56, 0.856);
      font-size: 18px;
      font-family: 'Poppins', sans-serif;
      padding: 0%;
      margin: 0%;
    }
    
    .solar-card-text p {
      color: rgb(255, 153, 0);
      font-size: 15px;
      font-family: 'Poppins', sans-serif;
      padding: 0%;
      margin: 0%;
    }
    
    .solar-card-text p a {
      color: rgb(255, 153, 0);
      font-size: 15px;
      font-family: 'Poppins', sans-serif;
      padding: 0%;
      margin: 0%;
    }
    
    .solar-card-font {
      padding: 0rem 1rem;
    }
    
    .solar-card-font i {
      font-size: 28px;
      color: rgba(6, 0, 56, 0.856);
    
    }
    
    
    
    .checkbox-wrapper-6 .tgl {
      display: none;
    }
    
    .checkbox-wrapper-6 .tgl,
    .checkbox-wrapper-6 .tgl:after,
    .checkbox-wrapper-6 .tgl:before,
    .checkbox-wrapper-6 .tgl *,
    .checkbox-wrapper-6 .tgl *:after,
    .checkbox-wrapper-6 .tgl *:before,
    .checkbox-wrapper-6 .tgl+.tgl-btn {
      box-sizing: border-box;
    }
    
    .checkbox-wrapper-6 .tgl::-moz-selection,
    .checkbox-wrapper-6 .tgl:after::-moz-selection,
    .checkbox-wrapper-6 .tgl:before::-moz-selection,
    .checkbox-wrapper-6 .tgl *::-moz-selection,
    .checkbox-wrapper-6 .tgl *:after::-moz-selection,
    .checkbox-wrapper-6 .tgl *:before::-moz-selection,
    .checkbox-wrapper-6 .tgl+.tgl-btn::-moz-selection,
    .checkbox-wrapper-6 .tgl::selection,
    .checkbox-wrapper-6 .tgl:after::selection,
    .checkbox-wrapper-6 .tgl:before::selection,
    .checkbox-wrapper-6 .tgl *::selection,
    .checkbox-wrapper-6 .tgl *:after::selection,
    .checkbox-wrapper-6 .tgl *:before::selection,
    .checkbox-wrapper-6 .tgl+.tgl-btn::selection {
      background: none;
    }
    
    .checkbox-wrapper-6 .tgl+.tgl-btn {
      outline: 0;
      display: block;
      width: 3em;
      height: 1.5em;
      position: relative;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    
    .checkbox-wrapper-6 .tgl+.tgl-btn:after,
    .checkbox-wrapper-6 .tgl+.tgl-btn:before {
      position: relative;
      display: block;
      content: "";
      width: 50%;
      height: 100%;
    }
    
    .checkbox-wrapper-6 .tgl+.tgl-btn:after {
      left: 0;
    }
    
    .checkbox-wrapper-6 .tgl+.tgl-btn:before {
      display: none;
    }
    
    .checkbox-wrapper-6 .tgl:checked+.tgl-btn:after {
      left: 50%;
    }
    
    .checkbox-wrapper-6 .tgl-light+.tgl-btn {
      border-radius: 50px;
      padding: 1px;
      border: 1px solid rgba(6, 0, 56, 0.856);
    }
    
    .checkbox-wrapper-6 .tgl-light+.tgl-btn:after {
      background: rgba(6, 0, 56, 0.856);
      border-radius: 50px;
      transition: all 0.2s ease;
    }
    
    .checkbox-wrapper-6 .tgl-light:checked+.tgl-btn {
      background: #FF512F;
      background: -webkit-linear-gradient(to right, #F09819, #FF512F);
      background: linear-gradient(to right, #F09819, #FF512F);
      /* border: 1px solid rgb(255, 123, 0); */
    }
    
    .solar-card:hover {
      background: rgba(255, 255, 255, 0);
      box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;
      backdrop-filter: blur(9px);
      -webkit-backdrop-filter: blur(9px);
      border: 1px solid rgba(255, 255, 255, 0.54);
      transition: all 0.2s ease;
    }
    
    .services-includes .solar-card p a {
      color: rgb(111, 0, 255);
    }
    
    .services-includes .offer-includes {
      justify-content: flex-start;
    }
    
    .services-includes .solar-card .solar-card-text {
      margin-left: 1.5rem;
    }
    
    
    .offer .estimated-savings h3 span {
      font-size: medium;
      color: rgb(111, 0, 255);
      font-family: 'Poppins', sans-serif;
    
    }
    
    .offer .recommended-setting span {
      color: rgb(111, 0, 255);
      font-family: 'Poppins', sans-serif;
      font-weight: 900;
    }
    
    /* Style the button that is used to open and close the collapsible content */
    
    .content {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: rgb(111, 0, 255);
      padding: 0rem 0.8rem;
      justify-content: center;
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(0.6px);
      -webkit-backdrop-filter: blur(0.6px);
      background-color: rgb(255, 255, 255);
      transition: all 0.2s ease-out;
    }
    
    .collapsible {
      width: 100%;
      display: flex;
      text-align: left;
      align-items: first baseline;
      justify-content: space-between;
      background-color: #ebebeb;
      padding: 0.3rem 0rem;
      padding-left: 1rem;
      cursor: pointer;
      border-bottom: 1px solid rgba(165, 165, 165, 0.151);
    }
    
    
    .collapsible p {
      color: rgb(6, 0, 56);
      font-size: 14px;
      font-family: 'Poppins', sans-serif;
    
    }
    
    .collapsible-logo {
      color: rgb(6, 0, 56);
    }
    
    .collapsible:hover p {
      color: rgb(111, 0, 255);
      transition: all 0.2s ease-out;
    }
    
    .content h2,
    p {
      color: rgb(6, 0, 56);
    }
    
    .electricity-production {
      width: 100%;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      background-color: #ebebeb;
      padding: 0.8rem 0rem;
      /* box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px; */
    }
    
    .electricity-production .offer-logo {
      width: 25px;
      height: 25px;
      text-align: center;
      justify-content: center;
    }
    
    .electricity-production .offer-logo i {
      color: white;
      font-size: small;
    }
    
    .footer-top {
      width: 94.2%;
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      margin-top: 0.2rem;
      text-align: center;
      background-color: #ffffff;
      border-bottom-right-radius: 45px;
      border-bottom-left-radius: 45px;
      box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }
    
    
    .footer-top .row {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      text-align: center;
    }
    
    .copyright-text p {
      color: rgb(6, 0, 56);
      font-size: 18px;
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
    }
    
    .row ul {
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
    }
    
    .row ul li {
      list-style: none;
      margin-left: 1rem;
    }
    
    .row ul li a {
      text-decoration: none;
      color: rgb(6, 0, 56);
    
    }
    
    .social-icons-container {
      align-items: center;
      justify-content: center;
    }
    
    .social-icons li {
      display: inline-block;
      margin-right: 6px;
      position: relative;
    }
    
    .social-icons-container .social-icons a i {
      font-size: 21px;
    }
    
    
    .social-icons a {
      display: flex;
      align-items: center;
      text-decoration: none;
      justify-content: center;
      text-align: center;
      width: 50px;
      height: 50px;
      overflow: hidden;
      backdrop-filter: blur(15px);
      border-radius: 50px;
      color: #050024;
      transition: all 0.3s ease-in-out;
      border: 1px solid rgba(226, 226, 226, 0.856);
    }
    
    
    .social-icons a:hover {
      color: #ffffff;
      background-color: rgb(111, 0, 255);
    }
    
    
    
    
    
    
    @media only screen and (max-width: 600px) {
    
      body {
        margin: 0%;
        padding: 0%;
      }
    
    
      header {
        min-width: 100%;
        padding: 2rem 1.8rem;
        border-radius: 0%;
        justify-content: space-between;
      }
    
      .nav input:checked~.menu {
        width: 180px;
      }
    
      .nav-logo {
        margin-right: 1rem;
      }
    
      .nav-logo img {
        width: 2rem;
      }
    
      .menu li {
        list-style: none;
        margin: 0 5px;
      }
    
      .menu .language {
        display: none;
      }
    
      .priceEstimated {
        width: 100% !important;
        flex-direction: column;
        justify-content: space-between;
        padding: 2.2rem 1.8rem;
        border-radius: 0%;
      }
    
      .package {
        width: 100%;
        align-items: center;
        flex-direction: column;
        justify-content: space-between;
        margin-bottom: 1rem;
      }
    
      .solar-pack {
        min-width: 100%;
        max-width: 100%;
      }
    
      .offer {
        min-width: 100%;
        max-width: 100%;
      }
    
      .sendRequest-button {
        width: 90%;
        padding: 1rem;
        align-items: center;
        text-align: center;
      }
    
      .price,
      .saving {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        text-align: center;
      }
    
      .PV-system-services {
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 0%;
      }
    
      .PV-system {
        width: 100%;
        padding: 0%;
      }
    
      .services-includes {
        margin-top: 4rem;
      }
    
      .solar-card {
        width: 100%;
      }
    
      .form-submit {
        width: 100%;
      }
    
      #myForm {
        width: 90%;
        border: 2px solid rgb(111, 0, 255);
        box-shadow:
          rgba(0, 0, 0, 0.12) 0px 1px 3px,
          rgba(0, 0, 0, 0.24) 0px 1px 2px;
    
        margin-bottom: 2rem;
        padding: 1rem;
    
        border: 0.2em solid rgb(111, 0, 255);
        box-shadow:
          rgba(0, 0, 0, 0.12) 0em .1em .3em,
          rgba(0, 0, 0, 0.24) .1em .2em;
      }
    
      .offer-1 {
        width: 100%;
      }
    
      #energyOutput1 {
        flex-direction: column;
        width: 100%;
        align-items: center;
        justify-content: center;
        padding: 0%;
      }
    
      .electricity-production {
        width: 100%;
      }
    
      .timeline-steps {
        width: 90%;
      }
    
      .recommended-setting p {
        font-size: 12px;
        text-align: justify;
      }
    
      .step1::before {
        top: 5%;
      }
    
      .footer-top {
        width: 100%;
        border-radius: 0%;
        text-align: center;
      }
    
      .row {
        flex-direction: column;
      }
    
      .row ul span {
        display: none;
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
	
	@import url("https://rsms.me/inter/inter.css");

:root {
  --color-light: white;
  --color-dark: rgb(6, 0, 56);
  --color-signal: rgb(111, 0, 255);
  --color-background: var(--color-light);
  --color-text: var(--color-dark);
  --color-accent: var(--color-signal);
  --size-bezel: .5rem;
  --size-radius: 4px;
  line-height: 1.4;
  font-family: "Poppins", sans-serif;
  font-size: calc(0.6rem + 0.4vw);
  color: var(--color-text);
  background: var(--color-background);
  font-weight: 300;
  padding: 0 calc(var(--size-bezel) * 3);
}



.input {
  position: relative;
}

.input__label {
  position: absolute;
  align-items: center;
  justify-content: center;
  left: 0;
  top: 0;
  padding: calc(var(--size-bezel) * 0.75) calc(var(--size-bezel) * 0.5);
  margin: calc(var(--size-bezel) * 0.75 + 3px) calc(var(--size-bezel) * 0.5);
  white-space: nowrap;
  transform: translate(0, 0);
  transform-origin: 0 0;
  background: var(--color-background);
  transition: transform 120ms ease-in;
  font-weight: 600;
  line-height: 1.2;
}

.input__field {
  box-sizing: border-box;
  justify-content: center;
  display: block;
  width: 100%;
  border: 1.5px solid currentColor;
  padding: 1.2rem;
  color:var(--color-text);
  font-size: large;
  background: transparent;
  border: 2px solid var(--color-accent);
  border-radius: var(--size-radius);
  outline: none;
}

.input__field:not(:-moz-placeholder-shown)+.input__label {
  transform: translate(0.25rem, -65%) scale(0.8);
  color: var(--color-accent);

}

.input__field:focus+.input__label,
.input__field:not(:placeholder-shown)+.input__label {
  transform: translate(0.25rem, -65%) scale(0.8);
  color: var(--color-accent);

}

.button-group {
  margin-top: calc(var(--size-bezel) * 2.5);
}

button {
  padding: var(--size-bezel) calc(var(--size-bezel) * 2);
  background: var(--color-accent);
  border: none;
  border-radius: var(--size-radius);
}

button[type=reset] {
  background: var(--color-background);
  font-weight: 200;
}

button+button {
  margin-left: calc(var(--size-bezel) * 2);
}


mark {
  background: var(--color-accent);
  color: var(--color-text);
  font-weight: bold;
  padding: 0 0.2em;
}

.card {
  background: var(--color-background);
  padding: calc(4 * var(--size-bezel));
  margin-top: calc(4 * var(--size-bezel));
  border-radius: var(--size-radius);
  border: 3px solid var(--color-shadow, currentColor);
  box-shadow: 0.5rem 0.5rem 0 var(--color-shadow, currentColor);
  padding: 3rem;
}

.card--inverted {
  --color-background: var(--color-dark);
  color: var(--color-light);
  --color-shadow: var(--color-accent);
}

.card--accent {
  --color-background: var(--color-signal);
  --color-accent: var(--color-light);
  color: var(--color-dark);
}

.card *:first-child {
  margin-top: 0;
}

.l-design-widht {
  max-width: 40rem;
  padding: 1rem;
}

.icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  margin-right: 0.5em;
}



.form-submit {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  width: 100%;
  align-items: center;
  padding-top: 4rem;
  padding-bottom: 6rem;
  justify-content:space-around;
  text-align: center;
}


form {
  display: grid;
  grid-gap: 35px;
  width: 55%;
}



.form-button {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.form-button button {
  width: 55%;
  padding: 1rem;
  color: white;
  cursor: pointer;
}

.form-button button:hover {
  box-shadow: 0 1px 4px rgba(0, 0, 0, .3),
    -23px 0 20px -23px rgba(0, 0, 0, .8),
    23px 0 20px -23px rgba(0, 0, 0, .8),
    inset 0 0 40px rgba(0, 0, 0, .1);
}


.card {
  /* box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; */
}



#energyOutput1 {
  width: 100%;
  display: flex;
  align-items: center;
  padding-top: 3rem;
  justify-content: space-between;
}

</style>
 
</head>
  <body>
    <header>
      <div class="nav-logo">
        <img src="images/mainLogo/headerLogo.svg" alt="">
      </div>

      <div id="google_translate_element"></div>

      <div class="nav">
        <input type="checkbox">
        <span></span>
        <span></span>

        <ul id="language-options" class="menu sibling-fade notranslate">
          <li>
            <a href="#" data-lang="en" class="hover-underline-animation">
              English
            </a>
          </li>
          <li>
            <a href="#" data-lang="fr" class="hover-underline-animation">
              French
            </a>
          </li>
          <li>
            <a href="#" data-lang="de" class="hover-underline-animation">
              German
            </a>
          </li>
          <li>
            <a href="#" data-lang="it" class="hover-underline-animation">
              Italian
            </a>
          </li>
        </ul>
      </div>
    </header>

    <div class="priceEstimated">
      <div class="package">
        <div class="price pac">
          <h3>Price:</h3>
          <div id="price-value">
            <h2 id="change-price-value">CHF 23'657</h2>
          </div>
        </div>

        <div class="saving pac">
          <h3>Estimated Savings:</h3>
          <div id="saving-value">
            <h2 id="change-estimated-saving-value">CHF 90'000</h2>
          </div>
        </div>
      </div>

      <div class="sendRequest-button">
        <a href="/submit-form">Send Request</a>
        
      </div>
    </div>

    <!-- ================== offer and price stats ============== -->

    <div class="offer">
      <div class="offer-title">
        <div class="offer-logo">
          <i class="fa-solid fa-cart-arrow-down"></i>
        </div>
        <h3>Here is your solar offer</h3>
      </div>

      <div class="address-info">
        <h3 id="address-info-text">
          This is an estimate for Dera Bugti 80100, Balochistan
        </h3>
      </div>

      <div class="timeline-title">
        <h3>HOW DOES THIS WORK?</h3>
      </div>

      <div class="timeline">
        <div class="timeline-steps">
          <div class="timeline-step step1">
            <p>Set up your system to see a price estimate</p>
          </div>
          <div class="timeline-step step2">
            <p>leave contact details</p>
          </div>
          <div class="timeline-step step3">
            <p>Request an offer</p>
          </div>
        </div>
      </div>
    </div>

<!-- ==================offer and price stats ============== -->

<div class="solar-pack">

  <div class="solar-pack-title">

    <div class="solar-pack-icon offer-logo">
      <i class="fa-solid fa-layer-group"></i>
    </div>
    <h2>This is your solar pack</h2>
  </div>

  <div class="recommended-setting">
    <p>The recommended system takes into account the optimal energy production and savings potential for your location.</p>
  </div>

  <div class="PV-system-services">

    <div class="PV-system">

      <div class="PV-system-name">
        <h3>PV system</h3>
      </div>

      <div class="solar-card module">
        <div class="solar-card-image">
          <img src="images/PVpacks/icon2.svg" alt="">
        </div>

        <div class="solar-card-text-font">
          <div class="solar-card-text">
            <h3>SOLAR-MODULE</h3>
            <p>20 <span>&#215;</span> Premium Module</p>
          </div>
          <div class="solar-card-font">
            <a href=""><i class="fa-solid fa-pencil"></i></a>
          </div>
        </div>

      </div>

      <div class="solar-card module">
        <div class="solar-card-image">
          <img src=" images/PVpacks/icon6.svg " alt="">
        </div>

        <div class="solar-card-text-font">
          <div class="solar-card-text">
            <h3>Battery</h3>
            <p><a href="#">Learn more...</a></p>
          </div>
          <div class="checkbox-wrapper-6 solar-card-font">
            <input class="tgl tgl-light" id="cb1-6" type="checkbox" />
            <label class="tgl-btn" for="cb1-6"></label>
          </div>
        </div>

      </div>

      <div class="solar-card module">
        <div class="solar-card-image">
          <img src=" images/PVpacks/icon3.svg " alt="">

        </div>
        <div class="solar-card-text">
          <h3>9000 kWh</h3>
          <p>Annual production</p>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="PV-system services-includes">
    <div class="PV-system-name">
        <h3>Included services</h3>
    </div>

    <div class="solar-card offer-includes">
        <div class="solar-card-image">
            <img src=" images/solarPack/installation.png " alt="">
        </div>
        <div class="solar-card-text">
            <h3>Installation Services</h3>
            <p><a href="#">Learn more...</a></p>
        </div>
    </div>

    <div class="solar-card offer-includes">
        <div class="solar-card-image">
            <img src=" images/solarPack/guarantee.png " alt="">
        </div>
        <div class="solar-card-text">
            <h3>SFOE Guarantee</h3>
            <p><a href="#">Learn more...</a></p>
        </div>
    </div>

    <div class="solar-card offer-includes">
        <div class="solar-card-image">
            <img src=" images/solarPack/monitoring-app.png " alt="">
        </div>
        <div class="solar-card-text">
            <h3>Monitoring App</h3>
            <p><a href="#">Learn more...</a></p>
        </div>
    </div>
</div>

<div class="offer offer-1">
    <div class="offer-title estimated-savings">
        <div class="offer-logo">
            <i class="fa-solid fa-wallet"></i>
        </div>
        <h3>Estimated Savings: <br> <span>CHF 60'000 - CHF 85'000</span></h3>
    </div>

    <div class="recommended-setting">
        <p>Invest smartly, save thousands! <span id="save-thousands">CHF 80/mo</span>, 9'100 kWh production, 30-year estimated savings.</p>
    </div>

    <div class="content">
        <div class="collapsible">
            <p> What are your monthly electricity Production?</p>
        </div>

        <div class="form-submit">
            <form class="card" id="myForm">
                <h2>Energy Output</h2>

                <label class="input" for="solarPanelPower">
                    <input class="input__field positive-number" type="number" id="solarPanelPower" name="solarPanelPower" value="300" placeholder=" " min="1" max="400" />
                    <span class="input__label">Solar Panel Power (in watts):</span>
                </label>

                <label class="input" for="dailySunshineHours">
                    <input class="input__field positive-number" type="number" id="dailySunshineHours" name="dailySunshineHours" value="13" placeholder=" " min="1" max="15" />
                    <span class="input__label">Daily Sunshine Hours:</span>
                </label>

                <div class="form-button">
                    <button type="button" onclick="calculateEnergyOutput()">Calculate</button>
                    <button type="button" onclick="resetForm()">Reset</button>
                </div>
            </form>
            <div id="energyOutput1">
    <div class="energyOutput-card-1">
        <div class="energyOutput-card solar-card ">
            <div class="solar-card-image">
                <img src=" images/form-image/form-image (4).svg " alt="">
            </div>
            <div class="solar-card-text">
                <h3>Energy Output Per Day:</h3>
                <p><span id="perDay"></span> kWh/day</p>
            </div>
        </div>
        <div class="energyOutput-card solar-card ">
            <div class="solar-card-image">
                <img src=" images/form-image/form-image (5).svg " alt="">
            </div>
            <div class="solar-card-text">
                <h3>Energy Output Per Month:</h3>
                <p><span id="perMonth"></span> kWh/month</p>
            </div>
        </div>
    </div>
    <div class="energyOutput-card-2">
        <div class="energyOutput-card solar-card ">
            <div class="solar-card-image">
                <img src=" images/form-image/form-image (12).svg " alt="">
            </div>
            <div class="solar-card-text">
                <h3>Energy Output Per Year:</h3>
                <p><span id="perYear"></span> kWh/year</p>
            </div>
        </div>
        <div class="energyOutput-card solar-card ">
            <div class="solar-card-image">
                <img src=" images/form-image/formImg (13).svg " alt="">
            </div>
            <div class="solar-card-text">
                <h3>Total Energy Output Per Year:</h3>
                <p><span id="total"></span> kWh/year</p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ------------Calculator Code ENDS HERE------------- -->
</div>
<div class="electricity-production">
    <p>Your monthly production are used to calculate your savings more accurately.</p>
</div>
</div>
<footer class="footer-top">
    <div class="row">
        <div class="copyright-text">
            <p>&copy; 2023 SFOE</p>
        </div>
        <ul>
            <li><a href="#" class="hover-underline-animation">Privacy Policy </a></li>
            <li><a href="#" class="hover-underline-animation">Terms and Conditions </a></li>
            <span>
                <li><a href="#" class="hover-underline-animation">Documentation </a></li>
            </span>
        </ul>
        <div class="social-icons-container">
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
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



  <script>
    // Get the checkbox element
    const checkbox = document.getElementById('cb1-6');

    // Get the price and estimated saving value elements
    const priceValue = document.getElementById('change-price-value');
    const savingValue = document.getElementById('change-estimated-saving-value');

    // Store the initial values of the elements
    const initialPriceValue = priceValue.innerText;
    const initialSavingValue = savingValue.innerText;

    // Add an event listener to the checkbox
    checkbox.addEventListener('change', function () {
      // If the checkbox is checked, add 2500 to the price and 3400 to the estimated saving value
      if (this.checked) {
        const priceValueNumber = parseInt(initialPriceValue.replace(/[^\d]/g, ''));
        const savingValueNumber = parseInt(initialSavingValue.replace(/[^\d]/g, ''));
        const newPriceValue = `CHF ${priceValueNumber + 2500}`;
        const newSavingValue = `CHF ${savingValueNumber + 3400}`;
        priceValue.innerText = newPriceValue;
        savingValue.innerText = newSavingValue;
      } else {
        // If the checkbox is unchecked, reset the values to their initial values
        priceValue.innerText = initialPriceValue;
        savingValue.innerText = initialSavingValue;
      }
    });

  </script>

  <script>
    // code for calculating energy output
    function calculateEnergyOutput() {

      // Get the values of the inputs
      const solarPanelPower = Number(document.getElementById("solarPanelPower").value);
      const dailySunshineHours = Number(document.getElementById("dailySunshineHours").value);

      // Calculate the energy output
      const energyOutputPerDay = (solarPanelPower * dailySunshineHours) / 1000;
      const energyOutputPerMonth = energyOutputPerDay * 30;
      const energyOutputPerYear = energyOutputPerDay * 365;
      const totalEnergyOutput = energyOutputPerYear;

      // Update the HTML to display the generated values
      const energyOutput = document.getElementById("energyOutput1");

      document.getElementById("perDay").innerHTML = Math.round(energyOutputPerDay);
      document.getElementById("perMonth").innerHTML = Math.round(energyOutputPerMonth);
      document.getElementById("perYear").innerHTML = Math.round(energyOutputPerYear);
      document.getElementById("total").innerHTML = Math.round(totalEnergyOutput);
    }


    document.addEventListener("DOMContentLoaded", function () {
      // change the initial values of the input fields
      document.getElementById("solarPanelPower").value = Math.floor(Math.random() * (500 - 100 + 1)) + 100;
      document.getElementById("dailySunshineHours").value = Math.floor(Math.random() * (17 - 7 + 1)) + 7;
      calculateEnergyOutput(); // call the function when the page is initially loaded
    });


    window.onload = function () {
      calculateEnergyOutput(); // call the function when the page is reloaded
    };

  </script>


  <script>
    // This function prevents users from entering negative numbers in a form input field
    function preventNegativeNumbers(input) {
      if (input.value < 0) {
        input.value = Math.max(0, input.value);
      }
    }

    // This function overwrites the default value of the input field when the user clicks on it
    function overwriteDefaultValue(input) {
      if (input.value === input.defaultValue) {
        input.value = '';
      }
    }

    // This function resets the value of the input field to its default value when the user clicks away from it
    function resetToDefaultValue(input) {
      if (input.value === '') {
        input.value = input.defaultValue;
      }
    }

    // This function triggers the calculateEnergyOutput() function when the user presses the Enter key
    function triggerCalculateEnergyOutput(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        document.querySelector('[onclick="calculateEnergyOutput()"]').click();
      }
    }

    // Attach event listeners to all input fields with class "positive-number"
    const inputs = document.querySelectorAll('.positive-number');

    inputs.forEach(input => {
      input.addEventListener('input', () => preventNegativeNumbers(input));
      input.addEventListener('focus', () => overwriteDefaultValue(input));
      input.addEventListener('blur', () => resetToDefaultValue(input));
      input.addEventListener('keypress', event => triggerCalculateEnergyOutput(event));
    });
  </script>

    <!-- Include your JavaScript libraries and scripts here -->
  </body>
</html>
