<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>


    .navbar {
        background-color: #f8f9fa00!important;
        text-align: center;
    }


    nav {
        max-width: 40%;  mask-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #ffffff 25%, #ffffff 75%, rgba(255, 255, 255, 0) 100%);
        margin: 0 auto;
        padding: 60px 0;
    }
    body {
        overflow: hidden; /* Hide scrollbars */
    }

    .pageEffect{
        opacity: 0;
        transition: 1s;
        transform: translateY(-100%);
        transform-origin: left;
    }

    html.leaving .pageEffect {
        opacity: 0;
        transform: translateX(100%);
    }

    .pageEffect.entering{
        opacity: 1;
        transform: translateY(0);
    }

</style>