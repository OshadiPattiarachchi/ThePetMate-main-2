<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pet Match</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>
<style>
    @font-face {
    font-family: "Baskerville Display PT";
    src: url("fonts/BaskervilleDisplayPT.woff2") format("woff2"),
         url("fonts/BaskervilleDisplayPT.woff") format("woff"),
         url("fonts/BaskervilleDisplayPT.ttf") format("truetype");
    font-weight: normal;
    font-style: normal;
}
    body {
    margin: 0;
    padding: 0;
    background-color: #f6f1eb;
    font-family: "Baskerville Display PT", "Libre Baskerville", serif;
}


.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 40px;
    background-color: #f6f1eb;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar ul {
    display: flex;
    justify-content: space-around; 
    width: 100%;
}

.navbar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}


.navbar ul li {
    margin: 0 25px; 
    position: relative;
   
}


.navbar ul li a {
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-size: 15px;
    position: relative;
    padding-bottom: 5px;
    transition: color 0.3s ease-in-out;
}


.navbar ul li a::after {
    content: "";
    display: block;
    height: 4px;
    width: 0%;
    background-color: #d5ba8f;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    transition: width 0.3s ease-in-out;
}

.navbar ul li a:hover {
    color: black;
   
}

.navbar ul li a:hover::after {
    width: 100%;
}


.logo img {
    height: 50px; 
    width: auto;
    display: block;
    margin: 0 auto;
    justify-content: center;
    align-items: center;
    flex: 1;
}

@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        text-align: center;
    }
    .nav-left, .nav-right {
        flex-direction: column;
        align-items: center;
    }
    .nav-left li, .nav-right li {
        margin: 10px 0;
    }
}
/* Load Custom Font */
@font-face {
    font-family: "Baskerville Display PT";
    src: url("fonts/BaskervilleDisplayPT.woff2") format("woff2"),
         url("fonts/BaskervilleDisplayPT.woff") format("woff"),
         url("fonts/BaskervilleDisplayPT.ttf") format("truetype");
    font-weight: normal;
    font-style: normal;
}

/* General Styles */
h1 {
    margin: 0;
    padding: 0;
    font-family: "Baskerville Display PT", "Libre Baskerville", serif;
}

/* Hero Section */
/* Hero Section */
.hero-section {
    position: relative;
    width: 100%;
    height: 100vh;
    background: url("images/new.jpg") no-repeat center center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    font-size: 36px; /* Reduced font size */
    line-height: 1.6; /* Increased line spacing */
    font : weight 3px; /* Thicker font */
    background-attachment: fixed;
}

/* Darkened Overlay */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
     /*background: rgba(0, 0, 0, 0.4); Darkened effect */
}

/* Content Box */
.content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    padding: 20px;
}

/* Get Started Button */


/*.btn {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 24px;
    font-size: 18px;
    font-weight: bold;
    color: black;
    background: rgba(255, 255, 255, 0.7); 
    text-decoration: none;
   
    border-radius: 30px; 
    transition: all 0.3s ease-in-out;
}
.btn:hover {
    background: black;
    color: white;
    transform: scale(1.05);

}*/

.btn {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 24px;
    font-size: 18px;
    font-weight: bold;
    color: black;
    background: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    border-radius: 30px;
   
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    z-index: 1;
}

/* Fancy Hover Effect */
.btn::before {
    content: "";
    position: absolute;
    inset: 0;
    background: black;
    width: 100%;
    height: 100%;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease-in-out;
    border-radius: 30px;
    z-index: -1;
}

.btn:hover::before {
    transform: scaleX(1);
    transform-origin: right;
}

/* Text Color Change on Hover */
.btn:hover {
    color: white;
    border-color: white;
}

/* Find a Match Page Styles
.findamatch-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f6f1eb;
    text-align: center;
}

.plus-link {
    text-decoration: none;
    color: inherit;
    transition: transform 0.3s ease-in-out;
}

.plus-link:hover {
    transform: scale(1.1);
}

.plus-sign {
    font-size: 120px;
    font-weight: bold;
    color: #d5ba8f;
    line-height: 1;
    margin-bottom: 20px;
    transition: color 0.3s ease-in-out;
}

.plus-link:hover .plus-sign {
    color: #000;
}

.add-pet-text {
    font-size: 24px;
    color: #000;
    font-family: "Baskerville Display PT", "Libre Baskerville", serif;
    transition: color 0.3s ease-in-out;
}

.plus-link:hover .add-pet-text {
    color: #d5ba8f;
}
     */
     /* Find a Match Page Styles */
.findamatch-container {
    display: flex;
    flex-direction: column;
    justify-content: flex-start; 
    align-items: center;
    height: 100vh;
   
    padding-top: 100px;
    text-align: center;
}
.white-box {
    background-color:#ffffff  ;
    /*  background-color:#8C6954  ;*/
    padding: 100px;
    border: 1px solid #050505;
    border-radius: 30px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}


.plus-link {
    text-decoration: none;
    color: inherit;
    transition: transform 0.3s ease-in-out;
}

.plus-link:hover {
    transform: scale(1.05);
}

.circle {
    width: 15s0px;
    height: 150px;
    border: 4px solid #d5ba8f;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    transition: all 0.3s ease-in-out;
}

.plus-link:hover .circle {
    border-color: #000;
    background-color: rgba(213, 186, 143, 0.1);
    transform: rotate(90deg);
}

.plus-sign {
    font-size: 80px;
    font-weight: bold;
    color: #d5ba8f;
    line-height: 1;
    transition: color 0.3s ease-in-out;
}

.plus-link:hover .plus-sign {
    color: #000;
}

.add-pet-text {
    font-size: 24px;
    color: #000;
    font-family: "Baskerville Display PT", "Libre Baskerville", serif;
    transition: color 0.3s ease-in-out;
}

.plus-link:hover .add-pet-text {
    color: #d5ba8f;
}

/* Background Animation */
.findamatch-container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(213, 186, 143, 0.1) 10%, transparent 10.01%);
    background-size: 20px 20px;
    animation: moveBackground 3s linear infinite;
    z-index: -1;
}

@keyframes moveBackground {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(20px);
    }
}
</style>
<body>
    <nav class="navbar">
        <ul class="nav-left">
            <li><a href="{{url ('/index')}}">HOME</a></li>
            <li><a href="{{url ('/find')}}">FIND A MATCH</a></li>
            <li><a href="{{ url('/ads') }}">BUY PETS</a></li>
        </ul>
        
        <!-- Logo in the Center -->
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>

        <ul class="nav-right">
            <li><a href="#">SHOP</a></li>
            <li><a href="#">MY PETS</a></li>
            <li><a href="{{url ('/dashboard') }}" class="profile-icon"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </nav>

    <div class="hero-section">
        <div class="overlay"></div> <!-- Grey shield effect -->
        <div class="content">
            <h1>CREATING</h1>
            <h1>CONNECTIONS</h1>
            <h1>FOR HAPPY PETS</h1>
            <a href="{{ url('/find') }}" class="btn">GET STARTED</a>
        </div>
    </div>
</body>
</html>


