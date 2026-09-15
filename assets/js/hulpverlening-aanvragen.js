document.addEventListener('DOMContentLoaded', () => {

    const durationInputs = document.querySelectorAll(
        'input[name="event_duration"]'
    );

    const endDateField = document.querySelector(
        '[data-event-end-date]'
    );

    const endDateInput = document.querySelector(
        '#event-end-date'
    );

    const differentTimesField = document.querySelector(
        '[data-event-different-times]'
    );


    if (!durationInputs.length) {
        return;
    }


    const updateDuration = () => {

        const selected = document.querySelector(
            'input[name="event_duration"]:checked'
        );

        const isMultiDay =
            selected?.value === 'meerdaags';


        if (endDateField) {
            endDateField.hidden = !isMultiDay;
        }


        if (endDateInput) {

            endDateInput.required =
                isMultiDay;

            if (!isMultiDay) {
                endDateInput.value = '';
            }

        }


        if (differentTimesField) {
            differentTimesField.hidden =
                !isMultiDay;
        }

    };


    durationInputs.forEach((input) => {

        input.addEventListener(
            'change',
            updateDuration
        );

    });


    updateDuration();

});