<!DOCTYPE html>
<html lang="en">
<?php 

include "/includes/header.php";

?>
    <section class="cards">
        <a href="#" class="card">
            <div class="card__image" style="background-image:url(https://media.discordapp.net/attachments/521595368736161794/840242311396851743/unknown.png);"></div>
            <div class="card__content">
                <div class="card__title">Escelation</div>
                <div class="class__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, incidunt! Ullam at, esse sapiente eius nulla sequi! Doloremque voluptas quaerat dolorum et, doloribus facere. Sit impedit enim atque consectetur quam.
                </div>
            </div>
            <div class="card__date">22/07/2021</div>
        </a>

        <a href="#" class="card">
            <div class="card__image" style="background-image:url(https://media.discordapp.net/attachments/521595368736161794/840242311396851743/unknown.png);"></div>
            <div class="card__content">
                <div class="card__title">Hashing & Cracking</div>
                <div class="class__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis odio magni error, necessitatibus commodi quaerat illo explicabo perspiciatis maiores rem facere est rerum ducimus maxime itaque fugiat modi. Dicta, neque.
                Nisi similique cum error in illo modi, illo explicabo culpa veritatis corporis possimus.
                </div>
            </div>
            <div class="card__date">22/07/2021</div>
        </a>

        <a href="#" class="card">
            <div class="card__image" style="background-image:url(https://media.discordapp.net/attachments/521595368736161794/840242311396851743/unknown.png);"></div>
            <div class="card__content">
                <div class="card__title">Linux</div>
                <div class="class__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, incidunt! Ullam at, esse sapiente eius nulla sequi! Doloremque voluptas quaerat dolorum et, doloribus facere. Sit impedit enim atque consectetur quam.
                </div>
            </div>
            <div class="card__date">22/07/2021</div>
        </a>
    </section>

</body>
<script>
    // When the user clicks the hamburger toggles between showing and hiding the content
    //show and hide dropdown list item on button click
    function showMenu() {
         var click = document.getElementById("dropdown-content");
         if(click.style.display ==="none") {
            click.style.display ="block";
         } else {
            click.style.display ="none";
         } 
      }
</script>
</html>