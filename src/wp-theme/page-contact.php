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
            <img src="" alt="">
        </div>
        <div class="col-12 col-lg-4">
        <table class="table table-hover">
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
        <div class="col-12 col-lg-4">
            google maps
        </div>

    </div>
</section>

<?php get_footer(); ?>
