<?php
/*
Template Name: Homepage
*/
?>

<?php get_header() ?>
<div class="page1">
<h1>YOURLOGO</h1>
<div>
<li style="display: flex; direction: row; border: none; padding: top 10px;">
    <ul><a href="">TITLE 1</a></ul>
    <ul><a href="">TITLE 2</a></ul>
    <ul><a href="">TITLE 3</a></ul>
    <ul><a href="">TITLE 4</a></ul>
    <ul><a href="">TITLE 5</a></ul>
    <ul><a href="">TITLE 6</a></ul>
    <ul><a href="">TITLE 7</a></ul>
</li>
</div>
</div>
<p>Home/Who we are/Contact</p>
<h2>Contact</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

<div class="page3">
    <h2>CONTACT US</h2>
<?php echo apply_shortcodes( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
<div>
    <h2>REACH US</h2>
    <p>Coalition skills test</p>
    <p>535 La Plata Street</p>
    <p>4200 Argentina</p>

    <p>Phone: 385-154-11-28-38</p>
    <p>Fax: 385-154-11-28-38</p>

    <div class="icons">
    <ion-icon name="logo-facebook"></ion-icon>
    <ion-icon name="logo-twitter"></ion-icon>
    <ion-icon name="logo-linkedin"></ion-icon>
    <ion-icon name="logo-pinterest"></ion-icon>
    </div>
</div>
</div>
<?php get_footer() ?>
