<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     @import url("https://fonts.googleapis.com/css2?family=Kalam:wght@400;700&family=Manrope&family=Montserrat&family=Pacifico&family=Parisienne&family=Permanent+Marker&family=Poppins&display=swap");

@import url("https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&family=Pacifico&family=Parisienne&family=Poppins&display=swap");

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');



* {
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    text-decoration: none;
    font-family: 'Montserrat', Courier, monospace;
    letter-spacing: 1px;
}



body {
    background-color: white;
    /* background: url(https://source.unsplash.com/E8Ufcyxz514/2400x1823) center / cover no-repeat fixed; */
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0rem;
    color: #ffffff;
    width: 100%;
    z-index: 2;
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
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
    margin-left: 1rem;
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

h3{
  text-align: center;
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

/* ====================header codes ends here================= */
#address-form {
    visibility: hidden;
}
.map-section {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding-top: 3rem;
  align-items: center;
  justify-content: center;
}

.myMap {
  width: 100%;
  display: flex;
  text-align: center;
  border: 1px solid gray;
  border-radius: 8px;
  overflow: hidden;
  align-items: center;
  justify-content: center;
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
}

#myMap {
  width: 100%;
  height: 50vh;
}

@media only screen and (min-width: 768px) {
  .myMap {
    width: 60%;
  }
  
  #myMap {
    width: 50%;
    height: 70vh;
  }
}

@media only screen and (min-width: 992px) {
  .map-section {
    padding-top: 6rem;
  }
}


#legend {
    width: 30%;
    height: 50vh;
    padding: .5rem 2rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
    background-color: rgb(243, 243, 243);
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
}

.dragDrop {
    width: 100%;
    text-align: left;
    justify-content: center;
}

.dragDrop h3 {
    color: rgb(6, 0, 56);
    font-family: 'Poppins', sans-serif;
}

.address {
    width: 100%;
    border: 1px solid lightslategray;
    margin-top: 1rem;
}

.your-address {
    max-width: 100%;
    padding: 0.8rem 0.5rem;
    background-color: rgb(111, 0, 255);
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
}

.your-address p {
    color: white;
    font-family: 'Poppins', sans-serif;
    font-size: medium;
}

.myAddress {
    width: 100%;
    display: flex;
    align-items: center;
    padding: 0.8rem 0.5rem;
}

.myAddress p {
    color: rgb(6, 0, 56);
    font-family: 'Poppins', sans-serif;
    font-size: medium;
    margin-left: 0.5rem;
}

.button-futher-locate {
    width: 100%;
}

.button-futher-locate .button {
    font-family: 'Poppins', sans-serif;
    justify-content: center;
    border: none;
    font-size: 16px;
    border: 1px solid gray;
    color: rgb(255, 255, 255);
    width: 300px;
    border-radius: 5px;
    padding: 0.5rem;
    text-decoration: none;
    background-color: rgb(111, 0, 255);
    cursor: pointer;
}

.button:active,
.button:hover {
    outline: 0;
}



@media (min-width: 768px) {
    .button {
        font-size: 24px;
        min-width: 196px;
    }
}

#MapStyleSelector {
    display: none;
}

.bm_bottomLeftOverlay {
    display: none;
}

.bm_bottomRightOverlay {
    display: none;
}


.pushpin-icon {
    width: 32px;
    height: 32px;
    background-image: url('https://www.bingmapsportal.com/Content/images/poi_custom.png');
    background-size: cover;
    background-position: center;
}

@media only screen and (max-width: 600px) {
    .myMap {
        width: 100%;
    }

    #myMap {
        width: 100%;
        height: 40vh;
    }

    #legend {
        width: 100%;
        height: 35vh;
        padding-top: 3rem;
        padding-bottom: 3rem;
        align-items: center;
        justify-content: space-between;

    }

    .dragPlus-address {
        width: 100%;

    }

    .your-address {
        max-width: 100%;
        padding: 0.8rem 0rem;
        padding-left: 0.8rem;

    }

    .myAddress {
        width: 100%;
    }


    .button-futher-locate {
        align-items: center;
    }

    .button-futher-locate .button {
        width: 100%;
    }
 }
</style>
</head>
<body>
<header>
    <div class="nav-logo"><img src="images/mainLogo/headerLogo.png" alt=""></div>

    <div class="nav">
      <input type="checkbox">
      <span></span>
      <span></span>
      <div class="menu sibling-fade">
        <li><a href="#" translate="yes" target="_blank" class="hover-underline-animation">English</a></li>
        <li><a href="#" class="hover-underline-animation">German</a></li>
        <li><a href="#" class="hover-underline-animation">Italian</a></li>
      </div>
    </div>
  </header>
  <div>
    <form id="address-form">
      <input type="text" id="location-input" placeholder="Search Your Location here...">
      <button type="submit">Search</button>
      <br><br><br>
      <button type="button" id="self-locate-button"> Locate Me</button>
    </form>
  </div>

  <h3>Drag The Pin to Fix your Roof</h3>

  <main class="map-section">
    <script type='text/javascript'
      src='https://www.bing.com/api/maps/mapcontrol?key=AuK2Azrt3w9gxRMlMrgjzXZ0f2to9NbfewreFM1qp_nVcPKgcJZCWj_AC5gdRfX9'></script>
    <script type='text/javascript'>
      var map;
      function loadMapScenario() {
        map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
          mapTypeId: Microsoft.Maps.MapTypeId.aerial,
          zoom: 21
        });

        function displayMap(latitude, longitude) {
          // Create a new map object centered on the user's location
          const center = new Microsoft.Maps.Location(latitude, longitude);
          map.setView({ center: center });

          // Add a pushpin to the map at the user's location
          const pin = new Microsoft.Maps.Pushpin(center, { draggable: true });
          map.entities.push(pin);
          // const pin = new Microsoft.Maps.Pushpin(center, { draggable: true });
          pin.addEventListener('dragend', event => {
            console.log(`New pin location: ${pin.getLocation().latitude}, ${pin.getLocation().longitude}`);
          });
        }
      }
    </script>
    </head>


    <body onload='loadMapScenario();'>
      <div id='printoutPanel'></div>

      <div id='myMap'></div>

      <div id="legend">
        <div class="dragPlus-address">
          <div class="dragDrop">
            <h3>Drag the card to fix your roof</h3>
          </div>
  
          <div class="address">
            <div class="your-address">
              <p>Your Address is:</p>
            </div>
            <div class="myAddress">
              <i class="fa-solid fa-location-crosshairs"></i>
              <p id="myDiv">My Address?</p>
            </div>
          </div>
        </div>
        <div class="button-futher-locate">
          <button class="button" id="next-button" type="submit" action="/pvcalc" method="get" role="button">Further</button>
        </div>

  </main>
  <footer>
    <nav>
      <!-- <ul>
        <li><a href="#">Legal Information</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Contact Us </a></li>
      </ul> -->
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <!-- <div class="card-header">{{ __('Enter Your Address') }}</div> -->

                    <div class="card-body">
                        <form method="POST" action="{{ route('pvcalc') }}" id="address-form">
                            @csrf

                            <div class="form-group row">
                                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                                <div class="col-md-6">
                                    <input id="location-input" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autofocus>

                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Next') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<div id="system-design"></div>

            <script>

            document.addEventListener('DOMContentLoaded', () => {
                document.getElementById("next-button").addEventListener("click", function() {
  fetch("/pvcalc")
    .then(response => {
      if (response.ok) {
        return response.text();
      }
      throw new Error("Network response was not ok");
    })
    .then(data => {
        // Redirect user to "/pvcalc" endpoint
        window.location.href = "/pvcalc";
      })

    .catch(error => {
      // handle error
      console.error("Error fetching data:", error);
    });
});
        
             function displayMap(latitude, longitude) {
                  // Create a new map object centered on the user's location
                  const center = new Microsoft.Maps.Location(latitude, longitude);
                  map.setView({ center: center, zoom: 21 });

                  // Add a pushpin to the map at the user's location
                  const pin = new Microsoft.Maps.Pushpin(center, { draggable: true });
                  map.entities.push(pin);
                  // const pin = new Microsoft.Maps.Pushpin(center, { draggable: true });
                  pin.addEventListener('dragend', event => {
                    console.log(`New pin location: ${pin.getLocation().latitude}, ${pin.getLocation().longitude}`);
                  });


                }

                
                // Define the geocoding API endpoint and API key
                const geocodeEndpoint = 'https://maps.googleapis.com/maps/api/geocode/json';
                const apiKey = 'AuK2Azrt3w9gxRMlMrgjzXZ0f2to9NbfewreFM1qp_nVcPKgcJZCWj_AC5gdRfX9';

                // Get the form element and submit button
                const form = document.querySelector('#address-form');
                const submitButton = form.querySelector('button[type="submit"]');
 
                // Get the value of the location parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const locationValue = urlParams.get('location');
    
    // Set the value of the input field to the location value
    const locationInput = document.getElementById('location-input');
    locationInput.value = locationValue;

                // Add an event listener for when the form is submitted
                const locationForm = document.querySelector('form');
                // const locationInput = document.querySelector('#location-input');

// Get the form and input elements

// Function that handles the form submit event
function handleSubmit(event) {
  event.preventDefault();
  const location = locationInput.value;
  geocode(location)
    .then(({ latitude, longitude }) => {
      displayMap(latitude, longitude);
    })
    .catch(error => {
      console.error(`Error geocoding location '${location}': ${error.message}`);
    });
}



// Automatically trigger the submit event on the form element
handleSubmit(new Event('submit'));

                function geocode(location) {
                  const bingMapsKey = 'AuK2Azrt3w9gxRMlMrgjzXZ0f2to9NbfewreFM1qp_nVcPKgcJZCWj_AC5gdRfX9';
                  const geocodeUrl = `https://dev.virtualearth.net/REST/v1/Locations?q=${encodeURIComponent(location)}&key=${bingMapsKey}`;
                  return fetch(geocodeUrl)
                    .then(response => response.json())
                    .then(data => {
                      const resourceSets = data.resourceSets || [];
                      const resources = resourceSets[0].resources || [];
                      if (resources.length > 0) {
                        const point = resources[0].point || {};
                        return { latitude: point.coordinates[0], longitude: point.coordinates[1] };
                      } else {
                        throw new Error('Location not found');
                      }
                    });
                }

                function generateSystemDesign(latitude, longitude) {
                  
                  const systemDesign = {
                    roofAngle: 30,
                    shading: 'partial',
                    availableSpace: 50
                  };
                  return systemDesign;
                }

                function displaySystemDesign(systemDesign) {
                 
                  const systemDesignElement = document.querySelector('#system-design');
                  systemDesignElement.innerHTML = `
    <p>Roof angle: ${systemDesign.roofAngle}</p>
    <p>Shading: ${systemDesign.shading}</p>
    <p>Available space: ${systemDesign.availableSpace} sq. ft.</p>
    `;
                }
              });
</script>

</body>

</html>
