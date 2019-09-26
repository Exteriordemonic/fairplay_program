const CONFIG = {
    TRIGGER: '[data-dot-description]',
    ELEM: '[data-description]',
    CLASS: '-is-active',
};

const toggleDescription = {
    init() {
        const {TRIGGER,ELEM} = CONFIG;
        this.$trigger = document.querySelectorAll(TRIGGER);
        this.$elem = document.querySelectorAll(ELEM);
        this.addEvent();
    },

    addEvent() {
        const {CLASS} =CONFIG;
        this.$trigger.forEach(elem => {
            elem.addEventListener('click',(event)=>{
                const $this = event.currentTarget;
                $this.classList.toggle(CLASS);
                const id = $this.dataset.dotDescription;
                this.$elem.forEach((elem, index) => {
                    if(id == index) {
                        elem.classList.toggle(CLASS);
                    }
                    else {
                        elem.classList.remove(CLASS);
                    }
                })
            });
        });
    },
};

export default toggleDescription;
