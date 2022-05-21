<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/LadingPage.css') }} ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Roboto&display=swap" rel="stylesheet">
    <title>RegProducts</title>
</head>
<body>
<div class="CusH1">Magazijn Management</div>

    <div class="CusH2">Ingekomen Lading</div>

    <!-- Bon Header -->
    <div class="BonHeader">

        <div class="left-section">
            <div class="item-container"> <div class="CusP2">Lading-ID    </div> <div class="input-container"><input type="number" name="LadingId" id="LadingId">      </div> </div>
            <div class="item-container"> <div class="CusP2">Naam bedrijf </div> <div class="input-container"><input type="text" name="NaamBedrijf" id="NaamBedrijf">  </div> </div>
        </div>

        <div class="right-section">
            <div class="item-container"><div class="CusP2">Naam leverancier  </div>  <div class="input-container"><input type="text" name="NaamLeverancier" id="NaamLeverancier">  </div> </div>
            <div class="item-container"><div class="CusP2">Ontvangst Datum   </div>  <div class="input-container"><input class="black" type="date" name="OntvangstDatum" id="OntvangstDatum">    </div> </div>
        </div>

    </div>
    
    <!-- Invoer gegevens -->
    <div class="ProductInfo">

    <div class="top-section">

        <div class="flex">
        <div class="item-container">   <div class="CusP2">Serienummer     </div>  <div class="input-container">   <input type="number" name="Serienummer" id="Serienummer">       </div></div>
        <div class="item-container">   <div class="CusP2">Rek No          </div>  <div class="input-container">   <input type="number" name="RekNummer" id="RekNummer">           </div></div>
        <div class="item-container">   <div class="CusP2">Hoeveelheid     </div>  <div class="input-container">   <input type="number" name="Hoeveelheid" id="Hoeveelheid">       </div></div>
        <div class="item-container">   <div class="CusP2">Inkoop prijs    </div>  <div class="input-container">   <input type="number" name="InkoopPrijs" id="InkoopPrijs">       </div></div>
        </div>

        <div class="flex">
        <div class="item-container">   <div class="CusP2">Productnaam              </div> <div class="input-container"><input type="text" name="ProductNaam" id="ProductNaam">    </div></div>
        <div class="item-container">   <div class="CusP2">Datum inkoop              </div> <div class="input-container"><input type="date" name="InkoopDatum" id="InkoopDatum">   </div></div>
        <div class="item-container">   <div class="CusP2">Verval Datum            </div> <div class="input-container"><input type="date" name="VervalDatum" id="VervalDatum">     </div></div>
        <div class="item-container">   <div class="CusP2">Aantal                            </div> <div class="input-container"><input type="number" name="Aantal" id="Aantal">   </div></div>
        </div>

    </div>
    
    <div class="bottom-section">
        <div class="CusP2">Discription </div> <input class="discription-design" type="text" name="Discription" id="Discription">
        <div class="buttons">
        <input class="button-design red" type="submit" value="Delete">
        <input class="button-design green" type="submit" value="Opslaan">
        </div>
    </div>

</div>
<div class="navigation">
    <div class="empty">
<a href="{{ route('RegisterContainers') }}" class="link-design"> Registreer Producten </a>
</div>
<div class="nav-links">
<a href="{{ route('ProductOverzicht') }}" class="link-design"> Producten Overzicht </a>
</div>
</div>
    
</body>
</html>