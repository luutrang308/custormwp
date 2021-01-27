var TabPictureView = {
    classPreview    : ".preview_img",
    elmGirdImg      : ".list_grid_img",
    elmGirdItem     : ".gird_img_item",
    elmSlidePreview : ".slider_preview_img",
    elmClosePreview : ".close_preview_img",
    slickActive     : null,

    unSlick: function(elm = null) {
        if (elm == null) {
            elm = this.slickActive;
        }
        elm.slick('unslick');
    },

    setSlick: function(elmSetSlick) {
        this.slickActive = $(elmSetSlick).slick({
            dots: true,
            slidesToShow: 1,
        });
    },

    openPreview: function(elmClick) {
        var elementPreview = $(elmClick).find(this.classPreview);
        var sliderPreview = elementPreview.find(this.elmSlidePreview);
        elementPreview.show();
        this.setSlick(sliderPreview);
    },

    closePreview : function(elmClick){
        this.unSlick();
        $(elmClick).closest(this.classPreview).hide();
    },

    setClickLibraryPicture : function(){
        $(this.elmGirdImg).on('click', this.elmGirdItem, function(e) {
            if($(e.target).hasClass(TabPictureView.classPreview) || $(e.target).closest(TabPictureView.classPreview).length > 0){
                return true;
            }
            TabPictureView.openPreview(this);
        });
        $(this.elmGirdImg).on('click', this.elmClosePreview, function() {
            TabPictureView.closePreview(this);
        });
    }
}

TabPictureView.setClickLibraryPicture();