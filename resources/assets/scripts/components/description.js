const CONFIG = {
    TRIGGER: '[data-dot]',
    ELEM: '[data-description]',
    CLASS: '-is-active',
};

const toggleDescription = {
    init() {
        const {TRIGGER,ELEM} = CONFIG;
        this.$trigger = document.querySelector(TRIGGER);
        this.$elem = document.querySelector(ELEM);
        this.addEvent();
    },

    addEvent() {
        const {CLASS} = CONFIG;
        this.$trigger.addEventListener('click',(event)=>{
            const $this = event.currentTarget;
            $this.classList.toggle(CLASS);
            this.$elem.classList.toggle(CLASS);
        });
    },
};

export default toggleDescription;
