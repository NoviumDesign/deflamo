// this class does only support one image carousel at the moment (until other is requested) ...

var ImageCarousel = function()
{
  var
    that = this,
    carousel = $('.image-carousel'),
    interval = 7000;

  this.currentImage = 0;
  this.numImages = 0;

  this.show = function(index)
  {
    carousel.children('.image, .trigger').removeClass('active');

    carousel.children('.image').eq(index).addClass('active');
    carousel.children('.trigger').eq(index).addClass('active');
  }

  this.resetTimer = function ()
  {
    // reset old timer
    clearTimeout(this.timer);

    // initiate new timer
    this.timer = setTimeout(function ()
    {
      if (++that.currentImage >= that.numImages)
      {
        // reset
        that.currentImage = 0;
      }

      that.show(that.currentImage);
      that.resetTimer();

    }, interval);
  }


  // set margin for triggers?
  // better to set .trigger at their height lower than the bottom but margin bottom for whole .image-carousel to compensate?


  // init below
  this.currentImage = carousel.children('.image.active').index('.image');
  this.numImages = carousel.children('.image').length;

  this.resetTimer();

  carousel.children('.trigger').on('mouseover click mousemove', function ()
  {
    var index = $(this).index('.trigger');

    that.show(index);
    that.resetTimer();
  });
}




var imageCarousel = new ImageCarousel();