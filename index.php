<html lang="en">
<head>
<meta charset="UTF-8">
<title>Table reservations</title>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="reservations.css">
</head>
<body>
<div class="nav_headar">
<div class="container">
<nav class="navbar">
<a href="#" class="nav-logo">Hollapolla</a>
<ul class="nav-menu">
            <li class="nav-item">
                  <a href="#" class="nav-link">Strona główna</a>        
             </li>
             <li class="nav-item">
                <a href="https://hollapolla.nl/menu.html" class="nav-link">Menu</a>        
           </li>
        </li>
        <li class="nav-item">
           <a href="#" class="nav-link">Rezerwacje</a>        
      </li>
    </li>
    <li class="nav-item">
       <a href="#" class="nav-link">Nowość</a>        
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">Kontakt</a>        
  </li>
          </ul>
          <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
        </nav>
      </div>
     </div>
    </div>
<div class="container">

  <div class="calendar-container">

    <header>
    <div class="form-container">
<form>
<h2>Rezerwacje</h2>
<br><br>
<label for="firstNameAndLastName">Imię i Nazwisko</label>
<input class="firstNameAndLastName" type="text" name="firstNameAndLastName"><br><br>
<label for="phone">Telefon</label>
<input class="phone" type="number" name="phone"><br><br>

<div class="containerMain">
<div class="container">
    <table class="hours">
      <tbody id="reservationHours">
      <div class="reservationTimeText">Godzina rezerwacji</div>
        <tr>
          <td  class="reservationTime">8:00</td>
          <td  class="reservationTime">8:30</td>
          <td  class="reservationTime">9:00</td>
          <td  class="reservationTime">9:30</td>
        </tr>
         <tr>
          <td  class="reservationTime">10:00</td>
          <td  class="reservationTime">10:30</td>
          <td  class="reservationTime">11:00</td>
          <td  class="reservationTime">11:30</td>
          </tr>
          <tr>
          <td  class="reservationTime">12:00</td>
          <td   class="reservationTime">12:30</td>
          <td   class="reservationTime">13:00</td>
          <td   class="reservationTime">13:30</td>
        </tr>
        <tr>
       
          <td   class="reservationTime">14:00</td>
          <td   class="reservationTime">14:30</td>
          <td   class="reservationTime">15:00</td>
          <td   class="reservationTime">15:30</td>
          </tr>
          <tr>
          <td   class="reservationTime">16:00</td>
          <td   class="reservationTime">16:30</td>
          <td   class="reservationTime">17:00</td>
          <td   class="reservationTime">17:30</td>
        </tr>
        <tr>
       
        <td  class="reservationTime">18:00</td>
          <td  class="reservationTime">18:30</td>
          <td  class="reservationTime">19:00</td>
          <td  class="reservationTime">19:30</td>
    
        </tr>
        <tr>
        <td class="reservationTime">20:00</td>
          <td  class="reservationTime">20:30</td>
          <td  class="reservationTime">21:00</td>
          <td  class="reservationTime">21:30</td>
          
        </tr>
        <tr>
        <td  class="reservationTime">22:00</td>
          <td  class="reservationTime">22:30</td>
          <td  class="reservationTime">23:00</td>
        </tr>
  
      </tbody>
    </table>
  </div>
  </div>
  
<!-- <input class="reservationTime" type="number" name="reservationTime" required><br><br> -->

<div class="reservationResultData"></div>
<div class="reservationResultHours"></div>
<div class="reservationResultId"></div>
<button class="submit" required>Zarezerwuj</button>
<div class="sentSuccessfully"></div>


</form>
</div>

      <div class="day"></div>
      <div class="month"></div>

   
    </header>

    <table class="calendar">
      
      <thead>

        <tr>

          <td>Pn</td>
          <td>Wt</td>
          <td>Śr</td>
          <td>Cz</td>
          <td>Pt</td>
          <td>Sb</td>
          <td>Nd</td>

        </tr>

      </thead>

      <tbody id="reservationDateActive">

        <tr>
          <td class="prev-month">29</td>
          <td class="prev-month">30</td>
          <td class="prev-month">31</td>
          <td class="reservationDate">1</td>
          <td class="reservationDate">2</td>
          <td class="reservationDate">3</td>
          <td class="reservationDate">4</td>
        </tr>

        <tr>
          <td class="reservationDate">5</td>
          <td class="reservationDate">6</td>
          <td class="reservationDate">7</td>
          <td class="reservationDate">8</td>
          <td class="reservationDate">9</td>
          <td  class="reservationDate">10</td>
          <td  class="reservationDate">11</td>
        </tr>

        <tr>
          <td  class="reservationDate">12</td>
          <td  class="reservationDate">13</td>
          <td  class="reservationDate">14</td>
          <td  class="reservationDate">15</td>
          <td  class="reservationDate">16</td>
          <td  class="reservationDate">17</td>
          <td  class="reservationDate">18</td>
        </tr>

        <tr>
          <td  class="reservationDate">19</td>
          <td  class="reservationDate">20</td>
          <td  class="reservationDate">21</td>
          <td  class="reservationDate">22</td>
          <td  class="reservationDate">23</td>
          <td  class="reservationDate">24</td>
          <td  class="reservationDate">25</td>
        </tr>

        <tr>
          <td  class="reservationDate">26</td>
          <td  class="reservationDate">27</td>
          <td  class="reservationDate">28</td>
          <td  class="reservationDate">29</td>
          <td  class="reservationDate">30</td>
          <td  class="reservationDate">31</td>
          <td class="next-month">1</td>
        </tr>
    
      </tbody>

    </table>



  </div>
</div>











<!-- Table res -->
<div class="container">

    <table class="table">
      <tbody id="reservationTable">
        <tr>
          <td class="hoursId">1</td>
          <td class="hoursId">2</td>
          <td class="hoursId">3</td>
          <td class="hoursId">4</td>
        </tr>
        <tr>
          <td class="hoursId">5</td>
          <td class="hoursId">6</td>
          <td class="hoursId">7</td>
          <td class="hoursId">8</td>
          <td class="hoursId">9</td>
          <td  class="hoursId">10</td>
          <td  class="hoursId">11</td>
        </tr>
        <tr>
          <td  class="hoursId">12</td>
          <td  class="hoursId">13</td>
          <td  class="hoursId">14</td>
          <td  class="hoursId">15</td>
          <td  class="hoursId">16</td>
          <td  class="hoursId">17</td>
          <td  class="hoursId">18</td>
        </tr>
        <tr>
          <td  class="hoursId">19</td>
          <td  class="hoursId">20</td>
          <td  class="hoursId">21</td>
          <td  class="hoursId">22</td>
          <td  class="hoursId">23</td>
          <td  class="hoursId">24</td>
          <td  class="hoursId">25</td>
        </tr>
        <tr>
          <td  class="hoursId">26</td>
          <td  class="hoursId">27</td>
          <td  class="hoursId">28</td>
          <td  class="hoursId">29</td>
          <td  class="hoursId">30</td>
          <td  class="hoursId">31</td>
        </tr>
      
      </tbody>
    </table>
  </div>




<!-- hours res -->




<!-- footer -->
<footer>

  <div class="content_footer">HollaPolla
    <!-- <img
      src="#"
      class="footer_logo"> -->

    <div class="locations">
      <h4>ADRES</h4>
      <div class="location-1">
        <h5>HollaPolla<br>Wilhelminapark 66, 5041 ED Tilburg, Holandia<br>NIP: 5252867474<br>REGON: 389261650</h5>
      </div>

    </div>
    <div class="locations">
      <h4>Kontakt</h4>
      <div class="location-1">
        <h5>Telefon: + 31 13 303 9087 <br>Email: kontakt@hollapolla.nl </h5>
      </div>
    </div>

    <div class="locations">
      <h4>Regulamin</h4>
      <div class="location-1">
        <h5>Polityka prywatności<br>Polityka cookies</h5>
      </div>
    </div>



  </div>


  <div class="copyright">
    <p><small>HollaPolla Wszelkie prawa zastrzeżone. All rights
        reserved.<span></span></small></p>
    <p><small></small></p>
  </div>
</footer>



<?php
require_once 'configFunction.php';
?>
<script>


// setReservations = () =>
// {
// setTimeout(function()
// {
//     reservationsData = 
//     {
   
//         status: 'Wolny',

        
//     };

//     let formData =  new FormData();

//     for(let key in reservationsData )
//     {
//         formData.append(key, reservationsData[key]);
//     }

//     fetch('refreshment.php',
//     {
// method:'POST',
// body: formData
//     })

//     .then(response => response.text())

// },1)
// };

// setReservations();
let reservations = <?php  echo json_encode($reservations);?>


let reservationDateActive = document.getElementById('reservationDateActive');
let reservationDate = reservationDateActive.getElementsByClassName('reservationDate');



let reservationTable = document.getElementById('reservationTable');
let hoursId = reservationTable.getElementsByClassName('hoursId');



 

let containerMain = document.querySelector('.containerMain').style.display = 'none';
let reservationHours = document.getElementById('reservationHours');
let reservationTime = reservationHours.getElementsByClassName('reservationTime');
let reservationResultHours = document.querySelector('.reservationResultHours');
let reservationResultData = document.querySelector('.reservationResultData');
let reservationResultId = document.querySelector('.reservationResultId');
let sentSuccessfully = document.querySelector('.sentSuccessfully');
let reservationTimeStatus = false;
let reservationDateStatus = false;
let idStatus = false;


for(let z = 0 ; z < hoursId.length; z ++){

hoursId[z].addEventListener("click", function() 
{

  reservationResultId.innerHTML =  hoursId[z].textContent;
  sentSuccessfully.innerHTML = "";
  idStatus = true;
 });
}


for(let l = 0 ; l < reservationDate.length; l ++){

reservationDate[l].addEventListener("click", function() 
{
  
  sentSuccessfully.innerHTML = "";
   reservationDateStatus = true;
   reservationResultData.innerHTML =  reservationDate[l].textContent;
 });
}



for(let i = 0 ; i < reservationTime.length; i ++)
{

reservationTime[i].addEventListener("click", function() 
{

sentSuccessfully.innerHTML = "";
reservationTimeStatus = true;

 reservationResultHours.innerHTML = reservationTime[i].textContent;

 });
}

let phone = document.getElementsByName('phone')[0];
let firstNameAndLastName = document.getElementsByName('firstNameAndLastName')[0];

let submit = document.querySelector('.submit');
submit.addEventListener('click', function(event)
{



  if(reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "8:00")
  {
    
      reservationsData = 
    {
    id: "1",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
 else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "8:30")
  {
    
      reservationsData = 
    {
    id: "2",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}

else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "9:00")
  {
    
      reservationsData = 
    {
    id: "3",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "9:30")
  {
    
      reservationsData = 
    {
    id: "4",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "10:00")
  {
    
      reservationsData = 
    {
    id: "5",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}

else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "10:30")
  {
    
      reservationsData = 
    {
    id: "6",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };
    

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "11:00")
  {
    
      reservationsData = 
    {
    id: "7",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "11:30")
  {
    
      reservationsData = 
    {
    id: "8",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "12:00")
  {
    
      reservationsData = 
    {
    id: "9",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "12:30")
  {
    
      reservationsData = 
    {
    id: "10",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "13:00")
  {
    
      reservationsData = 
    {
    id: "11",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "13:30")
  {
    
      reservationsData = 
    {
    id: "12",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "14:00")
  {
    
      reservationsData = 
    {
    id: "13",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "14:30")
  {
    
      reservationsData = 
    {
    id: "14",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}

else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "15:00")
  {
    
      reservationsData = 
    {
    id: "15",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "15:30")
  {
    
      reservationsData = 
    {
    id: "16",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "16:00")
  {
    
      reservationsData = 
    {
    id: "17",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "16:30")
  {
    
      reservationsData = 
    {
    id: "18",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "17:00")
  {
    
      reservationsData = 
    {
    id: "19",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "17:30")
  {
    
      reservationsData = 
    {
    id: "20",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "18:00")
  {
    
      reservationsData = 
    {
    id: "21",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "18:30")
  {
    
      reservationsData = 
    {
    id: "22",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "19:00")
  {
    
      reservationsData = 
    {
    id: "23",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "19:30")
  {
    
      reservationsData = 
    {
    id: "24",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "20:00")
  {
    
      reservationsData = 
    {
    id: "25",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "20:30")
  {
    
      reservationsData = 
    {
    id: "26",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "21:00")
  {
    
      reservationsData = 
    {
    id: "27",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "21:30")
  {
    
      reservationsData = 
    {
    id: "28",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "22:00")
  {
    
      reservationsData = 
    {
    id: "29",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "22:30")
  {
    
      reservationsData = 
    {
    id: "30",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";


}
else if (reservationTimeStatus && idStatus && reservationDateStatus &&  reservationResultHours.innerHTML == "23:00")
  {
    
      reservationsData = 
    {
    id: "31",
    firstNameAndLastName: firstNameAndLastName.value,
    phone: phone.value,
   
        
    };

    let formData =  new FormData();

    for(let key in reservationsData )
    {
        formData.append(key, reservationsData[key]);
    }

    fetch('changeOfReservation.php',
    {
method:'POST',
body: formData
    })
.then(response => response.text())
event.preventDefault(); 
submit.style.display = "none";
sentSuccessfully.innerHTML = "Zamówienie wysłane";
}


else if(reservationTimeStatus && idStatus && !reservationDateStatus)
  {

    sentSuccessfully.innerHTML = "Wybierz datę";

}
else if( !reservationTimeStatus &&   !idStatus && !reservationDateStatus )
  {
    sentSuccessfully.innerHTML = "Wybierz godzinę, datę i stolik";
}
else if( !reservationTimeStatus &&idStatus && !reservationDateStatus)
  {
    sentSuccessfully.innerHTML = "Wybierz datę i godzinę";

  
}
else if( !reservationTimeStatus &&idStatus && reservationDateStatus)
  {
    sentSuccessfully.innerHTML = "Wybierz godzinę";
  }
  else if( !reservationTimeStatus &&   !idStatus && reservationDateStatus)
  {
    sentSuccessfully.innerHTML = "Wybierz godzinę i stolik";

  }

  event.preventDefault();
  
});
handleReservationClickOne = () => {
let reservationDates = document.querySelectorAll(".reservationDate"); 
let tableIds = document.querySelectorAll(".hoursId"); 
let reservationTimes = document.querySelectorAll(".reservationTime"); 
reservationDates.forEach((reservationDate, l) => {
tableIds.forEach((hoursId, x) => {
reservationTimes.forEach((reservationTime, y) => {



  hoursId.addEventListener('click', function(){

    reservationTime.style.color = "green";
    let reservationTimesRes = reservations.filter(reservations =>  reservations.status == 'Zajety' && reservations.hoursId == 1 &&
reservations.reservationDate == 1 );
let reservationTimesResOne = reservations.filter(reservations =>  reservations.status == 'Zajety' && reservations.hoursId == 1 &&
reservations.reservationDate == 2);
let reservationTimesResTwo = reservations.filter(reservations =>  reservations.status == 'Zajety' && reservations.hoursId == 1 &&
reservations.reservationDate == 3);


if(reservationTimesResOne.length > 0)
{
 
  reservationTimesResOne.forEach(reservationTimesResOne =>
  {
    let reservationTimesResOneAll = JSON.stringify(reservationTimesResOne.reservationTime);
   
    if(reservationTimesResOneAll.slice(1, 5) == reservationTime.textContent && reservationResultData.textContent == 2 && reservationResultId.textContent == 1 )
    {
  
      reservationTime.style.color = "red";
    }

 
  

    else if(reservationTimesResOneAll.slice(1, 6) == reservationTime.textContent && reservationResultData.textContent == 2 && reservationResultId.textContent == 1)
    {
      reservationTime.style.color = "red";
    }
  });
  
}



if(reservationTimesRes.length > 0)
{
 
  reservationTimesRes.forEach(reservationTimesRe =>
  {
    let reservationTimesResAll = JSON.stringify(reservationTimesRe.reservationTime);
   
    if(reservationTimesResAll.slice(1, 5) == reservationTime.textContent && reservationResultData.textContent == 1 && reservationResultId.textContent == 1 )
    {
  
      reservationTime.style.color = "red";
    }

 
  

    else if(reservationTimesResAll.slice(1, 6) == reservationTime.textContent && reservationResultData.textContent == 1 && reservationResultId.textContent == 1)
    {
      reservationTime.style.color = "red";
    }
  });
  
}


if(reservationTimesResTwo.length > 0)
{
 
  reservationTimesResTwo.forEach(reservationTimesResTwo =>
  {
    let reservationTimesResTwoAll = JSON.stringify(reservationTimesResTwo.reservationTime);
   
    if(reservationTimesResTwoAll.slice(1, 5) == reservationTime.textContent && reservationResultData.textContent == 3 && reservationResultId.textContent == 1 )
    {
  
      reservationTime.style.color = "red";
    }

 
  

    else if(reservationTimesResTwoAll.slice(1, 6) == reservationTime.textContent && reservationResultData.textContent == 3 && reservationResultId.textContent == 1)
    {
      reservationTime.style.color = "red";
    }
  });
  
}


if(reservationResultData.textContent == 1 ||reservationResultData.textContent == 2 || reservationResultData.textContent == 3 ){
document.querySelector('.containerMain').style.display = 'block';
}
else
{
  sentSuccessfully.innerHTML = "Wybierz date";
}
});
});
});
});
}

handleReservationClickOne();


let hamburger = document.querySelector(".hamburger"); 
let navMenu = document.querySelector(".nav-menu");  

hamburger.addEventListener("click", () =>
{
hamburger.classList.toggle("active");
navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n =>n.addEventListener("click", () =>
{
hamburger.classList.remove("active");
navMenu.classList.remove("active");
}));

window.addEventListener("scroll", () =>
{
let nav_headar = document.querySelector(".nav_headar");
nav_headar.classList.toggle("sticky", window.scrollY > 0);
});

</script>
</body>
</html>
