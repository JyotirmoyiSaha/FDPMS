@extends('website.master')

@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    *{
        margin: 0;
        padding: 0;
        font-family: "Open Sans",sans-serif;
        box-sizing: border-box;
    }
    
    body{
        min-height: 100vh;
        align-items: center;
        justify-content: center;
        background-color: #f1f1f1;
    }
    
    .about-section{
        background: url(/images/a.jpg) no-repeat left;
        background-size: 55%;
        background-color: #fdfdfd;
        overflow: hidden;
        padding: 50px 0; 
    }
    
    .inner-container{
        width: 55%;
        float: right;
        background-color: #fdfdfd;
        /* padding: 150px; */
        padding: 115px;
    }
    
    .inner-container h1{
        margin-bottom: 30px;
        font-size: 30px;
        font-weight: 900;
    }
    
    .text{
        font-size: 13px;
        color: #545454;
        line-height: 30px;
        text-align: justify;
        margin-bottom: 40px;
    }
    
    .skills{
        display: flex;
        justify-content: space-between;
        font-weight: 700;
        font-size: 13px;
    }
    
    @media screen and (max-width:1200px){
        .inner-container{
            padding: 80px;
        }
    }
    
    @media screen and (max-width:1000px){
        .about-section{
            background-size: 100%;
            padding: 100px 40px;
        }
        .inner-container{
            width: 100%;
        }
    }
    
    @media screen and (max-width:600px){
        .about-section{
            padding: 0;
        }
        .inner-container{
            padding: 60px;
        }
    }
</style>  
</head>
<body>
    
    <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                Fertilizer, a natural or artificial material holding the chemical essentials that help the growth and effectiveness of shops. Fertilizers enhance the natural fertility of the soil or supplant the chemical essentials taken from the soil by former crops. 
            </p>
            <div class="skills">
                <span>Web Design</span>
                <span>Photoshop & Illustrator</span>
                <span>Coding</span>
            </div>
        </div>
    </div>
</body>
</html>

@endsection