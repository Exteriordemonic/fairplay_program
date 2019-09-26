const Flickity = require('flickity');
const CONFIG = {
    WRAPPER: '.carousel',
};

const flickity = {
    init() {
        const {WRAPPER} = CONFIG;
        this.flkty = new Flickity( WRAPPER, {
            draggable: true,
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            pageDots: false,
            autoPlay: 2000,
            wrapAround: true,
          });
    },
};


export default flickity;