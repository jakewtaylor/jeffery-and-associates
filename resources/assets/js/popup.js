(() => {
    const triggerForm = (e) => {
        e.preventDefault();
        const { popup } = e.target.dataset;

        const popupBox = document.getElementById(`popup-${popup}`);
        popupBox.classList.add('show');
    };

    const triggers = document.getElementsByClassName('popup-trigger');
    Array.from(triggers, trigger => {
        trigger.addEventListener('click', triggerForm);
    });

    const dismissForm = (e) => {
        const isBackground = e.target.classList.contains('popup');
        const isDismisser = e.target.classList.contains('dismiss-popup');

        if (isBackground || isDismisser) {
            e.preventDefault();

            const popup = isBackground
                ? e.target
                : document.getElementById(`popup-${e.target.dataset.popup}`);

            popup.classList.add('hiding');
            setTimeout(() => {
                popup.classList.remove('hiding', 'show');
            }, 200);
        }
    }

    const popupBoxes = document.getElementsByClassName('popup');
    Array.from(popupBoxes, popupBox => {
        popupBox.addEventListener('click', dismissForm);
    });
})();
