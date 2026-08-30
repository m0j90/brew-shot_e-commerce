<?php
    $albums = [
        ['img' => 'images/photo-albums/landscape-album.png',
            'alt' => 'Brew & Shot Landscape View 1',
            'col' => 'col-md-6'],
        ['img' => 'images/photo-albums/landscape-album_2.png',
            'alt' => 'Brew & Shot Landscape View 2',
            'col' => 'col-md-6'],
        ['img' => 'images/photo-albums/portrait-album_3.png',
            'alt' => 'Brew & Shot Portrait 1',
            'col' => 'col-md-4'],
        ['img' => 'images/photo-albums/portrait-album.png',
            'alt' => 'Brew & Shot Portrait 2',
            'col' => 'col-md-4'],
        ['img' => 'images/photo-albums/portrait-album_2.png',
            'alt' => 'Brew & Shot Portrait 3',
            'col' => 'col-md-4'],
        ['img' => 'images/photo-albums/detailshots-album_2.png',
            'alt' => 'Brew & Shot Detail Shot 1',
            'col' => 'col-md-4'],
        ['img' => 'images/photo-albums/detailshots-album.png',
            'alt' => 'Brew & Shot Detail Shot 2',
            'col' => 'col-md-4'],
        ['img' => 'images/photo-albums/detailshots-album_3.png',
            'alt' => 'Brew & Shot Detail Shot 3',
            'col' => 'col-md-4'],
    ];
?>

<div class="album-bg py-5">
    <div class="container album-section">
        <h1 class="text-center fw-bold mb-4">Photo Albums</h1>

        <div class="row g-4">
            <?php foreach ($albums as $ablum) { ?>
                <div class="<?php echo $ablum['col']; ?>">
                    
                    <img class="img-fluid album-card-img"
                        src="<?php echo $ablum['img']; ?>"
                        alt="<?php echo $ablum['alt']; ?>"
                    >
                </div>
            <?php } ?>
        </div>
    </div>
</div>