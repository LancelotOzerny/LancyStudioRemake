class Carousel
{
    translate = {
        value: 0,
        step: 260,
        min: -550,
        max: 0,
    };

    constructor(base)
    {
        this.base = base;
        this.content = this.base.querySelector('.carousel-items-wrapper');

        this.base.querySelector('.carousel-left-arrow').addEventListener('click', this.left.bind(this));
        this.base.querySelector('.carousel-right-arrow').addEventListener('click', this.right.bind(this));

        this.setParams();
        window.addEventListener('resize', this.setParams.bind(this))
    }

    setParams()
    {
        this.translate.value = 0;
        this.content.style.transform = 'translateX(' + this.translate.value + 'px)';

        let elementsCount = this.content.childElementCount;
        let elementWidth = this.content.querySelector('a').offsetWidth;
        let countOnScreen = Math.floor(this.content.offsetWidth / elementWidth);

        let columnGap = getComputedStyle(this.content).columnGap;
        let intGap = columnGap === 'normal' ? 0 : parseInt(columnGap);

        this.translate.step = countOnScreen * elementWidth + intGap * countOnScreen;
        this.translate.min = -this.translate.step * (elementsCount / countOnScreen - 1);
    }

    left()
    {
        this.translate.value += this.translate.step;

        if (this.translate.value >= this.translate.max)
        {
            this.translate.value = this.translate.max;
        }

        this.content.style.transform = 'translateX(' + this.translate.value + 'px)';
    }

    right()
    {
        this.translate.value -= this.translate.step;

        if (this.translate.value <= this.translate.min)
        {
            this.translate.value = this.translate.min;
        }

        this.content.style.transform = 'translateX(' + this.translate.value + 'px)';
    }
}