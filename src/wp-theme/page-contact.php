<?php
/*

Template Name: Kapcsolat

*/

get_header();

?>

<section class="section container">

    <h1 class="mt-5"><?php the_title() ?></h1>
    <div class="row bg-white p-3 mt-4">
        
        <div class="col-12 col-lg-4">
            <h3>Szigetszentmiklós</h3>
            <p><i class="bi bi-geo-alt"></i> 2310 Szigetszentmiklós Gyári út 17.</p>
            <p><i class="bi bi-telephone"></i> +36 30 123 4567</p>
            <p><i class="bi bi-telephone"></i> +36 30 123 4567</p>
            <p><i class="bi bi-envelope"></i> info@szigetszerelveny.hu</p>
            <img src="https://placehold.it/640x360" alt="">
        </div>
        <div class="col-12 col-lg-3">
        <table class="table table-hover">
            <h3>Nyitvatartás</h3>
            <tbody>
                <tr>
                    <th scope="row">Hétfő</th>
                    <td>7:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <th scope="row">Kedd</th>
                    <td>7:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <th scope="row">Szerda</th>
                    <td>7:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <th scope="row">Csütörtök</th>
                    <td>7:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <th scope="row">Péntek</th>
                    <td>7:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <th scope="row">Szombat</th>
                    <td>7:00</td>
                    <td>12:00</td>
                </tr>
                <tr>
                    <th scope="row">Vasárnapő</th>
                    <td colspan="2">ZÁRVA</td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="col-12 col-lg-5">
            <h3>Térkép</h3>
            google maps
        </div>

    </div>
</section>

<?php get_footer(); ?>
