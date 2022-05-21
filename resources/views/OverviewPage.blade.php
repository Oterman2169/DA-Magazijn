<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/OverviewPage.css') }} ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Roboto&display=swap" rel="stylesheet">
    <title>Overview</title>
</head>
<body>
    
<div class="CusH1">Magazijn Management</div>

<div class="flex">
    <div class="CusH2">Voorraad Overzicht</div>
            <div class="search">
            <div class="CusP">Zoeken:</div>
            <input class="input-container" type="search" name="LookUp" id="LookUp" placeholder="SerieNummer"> 
            </div>
</div>


<div class="container">
<div class="display">

<table class="overzicht spacing2">
    <thead>
    <tr>
        <th><div class="cus_p ">Lading-ID</div> </th>
        <th><div class="cus_p ">Bedrijf Naam</div></th>
        <th><div class="cus_p ">Serienummer</div></th>
        <th><div class="cus_p ">Voorraad</div></th>
        <th><div class="cus_p ">Inkoop prijs</div></th>
        <th><div class="cus_p ">Verkoop prijs</div></th>
        <th><div class="cus_p ">Gemiddelde prijs</div></th>
        <!-- <th><div class="cus_p ">Edit</div> </th> -->
    </tr>
</thead>
 


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

