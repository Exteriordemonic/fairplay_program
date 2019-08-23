const CONFIG2 = {
    TRIGGER: '[data-dot-marker]',
    ELEM: '[data-description2]',
    CLASS: '-is-active',
};
const toggleDescription2 = {
    init() {
        const {TRIGGER,ELEM} = CONFIG2;
        this.$trigger = document.querySelector(TRIGGER);
        this.$elem = document.querySelector(ELEM);
        this.addEvent();
    },

    addEvent() {
        const {CLASS} = CONFIG2;
        this.$trigger.addEventListener('click',(event)=>{
            const $this = event.currentTarget;
            $this.classList.toggle(CLASS);
            this.$elem.classList.toggle(CLASS);
        });
    },
};

export default toggleDescription2;