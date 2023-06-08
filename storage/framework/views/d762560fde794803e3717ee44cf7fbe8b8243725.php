
<style>
    main{
        background-image: url('images/Homeats/Banners/mobile/Goldenrod.png');
    }
    @media (min-width:415px) {
        main{
            background-image: url("images/Homeats/Banners/tablet/Goldenrod.jpeg"); 
        }
    }
    @media (min-width:880px) {
        main{
            background-image: url("images/Homeats/Banners/pc/Goldenrod.png"); 
        }
    }
</style>
<main>
    <p class="title">
        Food Markeplace For You
    </p>
    <div class="col download">
        <a href="<?php echo e(route('homeats')); ?>">
            <img src="images/All/google play.png" alt="Goole Play Link">
        </a>
        <a href="<?php echo e(route('homeats')); ?>">
            <img src="images/All/app store.svg" alt="App Store Link">
        </a>
    </div>
</main><?php /**PATH C:\laragon\www\homeats\resources\views/components/main.blade.php ENDPATH**/ ?>