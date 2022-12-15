<?php require('../html/header.html')?>
<?php require ('../curl/curl_albums.php') ?>
<?php require ('../curl/curl_artists.php') ?>
<div class="artistPage">


<?php
//$albums = [];

foreach($resultart['records'] as $valeur){
    
        $name = $valeur['fields']['Name'];
        $desc = $valeur['fields']['Description'];
        $album_ID = join('<br>', $valeur['fields']['Album_liste']);

        echo "<div class='card'>
        
        
        <h3>Artiste : $name</h3>
        <p>Infos sur l'artiste : $desc</p>
        <h4>Albums de l'artiste : $album_ID</h4> </div>"; 
    };


?>
</div>

<?php require('../html/footer.html')?>
