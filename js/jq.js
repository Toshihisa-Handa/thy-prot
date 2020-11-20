
    new Glide('.glide', {
      type:'carousel',
      autoplay: 2000,
      perView: 3,
      breakpoints: {
      1000: {
        perView: 2
      },
      550: {
        perView: 1
      }
    }

    }).mount()
