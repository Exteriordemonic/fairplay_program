const CONFIG = {
    ELEM: '[data-count]',
}

const counter = {
    init(){
        const {ELEM} = CONFIG;
        this.$elem = $(ELEM);
        this.addEvent()
    },

    addEvent(){
        window.addEventListener('scroll', (e)=> {
            const $this = e.currentTarget;
            const scroll = $this.scrollY;
            this.$elem.each(function (){
                const $top = $(this).offset().top;
                if($top < (scroll + window.innerHeight) && $(this).attr('data-count') != undefined){
                    $(this).prop('Counter',0).animate({
                        Counter: $(this).text(),
                    }, {
                        duration: 1000,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        },
                    });

                    $(this).removeAttr('data-count');
                }
            });
        });
    },
};

export default counter;
