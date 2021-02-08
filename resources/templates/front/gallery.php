<!-- PAGE QUOTE -->
<?php get_page_quote(3); ?>

<!-- PAGE TITLE -->
<div class="page-title mt-4 bg-color">
    GALLERY
    <div class="w-25 borderBottomLight pt-2"></div>
</div>

<!-- STUDI --> 
<div class="mt-5 pt-4">
    <p class="section-title text-uppercase text-center">Gli studi ...</p>
    <!-- padova -->
    <div class="studio-title mb-5">
        <p class="dark-subtitle pt-4 mb-1 text-left">Studio di Padova</p>
        <div class="studioBorder"></div>
    </div>
    <div class="glide mt-2 mb-3">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides align-items-center">
                <?php get_foto("padova"); ?>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
    <!-- thiene -->
    <div class="studio-title mb-5 mt-4">
        <p class="dark-subtitle pt-4 mb-1 text-right">Centro Psiché - Poliambulatorio San Gaetano a Thiene</p>
        <div class="studioBorder"></div>
    </div>
    <div class="glide4 mt-2 mb-3">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides align-items-center">
                <?php get_foto("thiene"); ?>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
    <!-- chioggia -->
    <div class="studio-title mb-5 mt-4">
        <p class="dark-subtitle pt-4 mb-1 text-left">Poliambulatorio San Giovanni a Chioggia</p>
        <div class="studioBorder"></div>
    </div>
    <div class="glide5 mt-2 mb-5">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides align-items-center">
                <?php get_foto("chioggia"); ?>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</div>
<div class="borderTop separator"></div>

<!-- SUGGESTIONI --> 
<div class="text-center mt-5">
    <p class="section-title text-uppercase">SUGGESTIONI ...</p>
    <div class="glide2 my-5">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides align-items-center">
                <?php get_foto("suggestioni"); ?>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</div>
<div class="borderTop separator"></div>

<!-- MULTIMEDIA --> 
<div class="text-center mt-5">
    <p class="section-title text-uppercase">MULTIMEDIA</p>
    <div class="glide3 mb-4 mt-5">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides align-items-center">
                <?php get_video(); ?>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</div>

<script>

new Glide('.glide', {
  type: 'carousel',
  startAt: 0,
  perView: 3,
  focusAt: 'center',
  gap: 100,
  breakpoints: {
    992: {
      perView: 2
    },
    500: {
      perView: 1
    }
  }
}).mount()

new Glide('.glide4', {
  type: 'carousel',
  startAt: 0,
  perView: 3,
  focusAt: 'center',
  gap: 100,
  breakpoints: {
    992: {
      perView: 2
    },
    500: {
      perView: 1
    }
  }
}).mount()

new Glide('.glide5', {
  type: 'carousel',
  startAt: 0,
  perView: 3,
  focusAt: 'center',
  gap: 100,
  breakpoints: {
    992: {
      perView: 2
    },
    500: {
      perView: 1
    }
  }
}).mount()

new Glide('.glide2', {
  type: 'carousel',
  startAt: 0,
  perView: 3,
  focusAt: 'center',
  gap: 100,
  breakpoints: {
    992: {
      perView: 2
    },
    500: {
      perView: 1
    }
  }
}).mount()

new Glide('.glide3', {
  type: 'carousel',
  startAt: 0,
  perView: 3,
  focusAt: 'center',
  gap: 100,
  breakpoints: {
    992: {
      perView: 2
    },
    500: {
      perView: 1
    }
  }
}).mount()

</script>

