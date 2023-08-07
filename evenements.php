<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evénements</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    
    <section>
        <img src="asset/stars.png" id="stars">
        <img src="asset/moon.png" id="moon">
        <img src="asset/mountains_behind.png" id="mountains_behind">
        <h2 id="text">Moon Light</h2>
        <a href="#" id="btn">Explore</a>
        <img src="asset/mountains_front.png" id="mountains_front">
    </section>
    <div class="sec" id="sec">
        <h2>Evénements</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione tenetur asperiores quaerat architecto eaque iure molestias dignissimos! Consequatur id enim, eveniet animi labore, molestiae libero perspiciatis quam sint laboriosam magni. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni corrupti tenetur tempore reprehenderit perspiciatis sequi iste? Corporis repudiandae sint libero laborum labore, molestiae voluptatibus excepturi, cupiditate, deserunt doloribus sunt omnis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ad hic incidunt expedita sit facilis et nesciunt aspernatur tenetur possimus, dolore alias? Unde rem ipsum atque nulla dolore culpa nobis. <br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione tenetur asperiores quaerat architecto eaque iure molestias dignissimos! Consequatur id enim, eveniet animi labore, molestiae libero perspiciatis quam sint laboriosam magni. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni corrupti tenetur tempore reprehenderit perspiciatis sequi iste? Corporis repudiandae sint libero laborum labore, molestiae voluptatibus excepturi, cupiditate, deserunt doloribus sunt omnis? Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione tenetur asperiores quaerat architecto eaque iure molestias dignissimos! Consequatur id enim, eveniet animi labore, molestiae libero perspiciatis quam sint laboriosam magni. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni corrupti tenetur tempore reprehenderit perspiciatis sequi iste? Corporis repudiandae sint libero laborum labore, molestiae voluptatibus excepturi, cupiditate, deserunt doloribus sunt omnis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ad hic incidunt expedita sit facilis et nesciunt aspernatur tenetur possimus, dolore alias? Unde rem ipsum atque nulla dolore culpa nobis. <br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione tenetur asperiores quaerat architecto eaque iure molestias dignissimos! Consequatur id enim, eveniet animi labore, molestiae libero perspiciatis quam sint laboriosam magni. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni corrupti tenetur tempore reprehenderit perspiciatis sequi iste? Corporis repudiandae sint libero laborum labore, molestiae voluptatibus excepturi, cupiditate, deserunt doloribus sunt omnis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ad hic incidunt expedita sit facilis et nesciunt aspernatur tenetur possimus, dolore alias? Unde rem ipsum atque nulla dolore culpa nobis. <br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione tenetur asperiores quaerat architecto eaque iure molestias dignissimos! Consequatur id enim, eveniet animi labore, molestiae libero perspiciatis quam sint laboriosam magni. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni corrupti tenetur tempore reprehenderit perspiciatis sequi iste? Corporis repudiandae sint libero laborum labore, molestiae voluptatibus excepturi, cupiditate, deserunt doloribus sunt omnis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ad hic incidunt expedita sit facilis et nesciunt aspernatur tenetur possimus, dolore alias? Unde rem ipsum atque nulla dolore culpa nobis. <br><br>
        </p>
    </div>

    <script>
        let stars = document.getElementById('stars');
        let moon = document.getElementById('moon');
        let mountains_behind = document.getElementById('mountains_behind');
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');
        let mountains_front = document.getElementById('mountains_front');
        let header = document.querySelector('header');

        window.addEventListener('scroll', function(){
            let value = window.scrollY;
            stars.style.left = value * 0.25 +  'px';
            moon.style.top = value * 1.05 +  'px';
            mountains_behind.style.top = value * 0.5 +  'px';
            mountains_front.style.top = value * 0 +  'px';
            text.style.marginRight = value * 4 +  'px';
            text.style.marginTop = value * 1.5 +  'px';
            btn.style.marginTop = value * 3.5 +  'px';
            header.style.top = value * 0.5 + 'px';
        })
    </script>

</body>
</html>