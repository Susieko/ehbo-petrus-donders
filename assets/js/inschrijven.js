document.addEventListener('DOMContentLoaded', () => {
    const typeInputs = document.querySelectorAll(
        'input[name="registration_type"]'
    );

    const courseField = document.querySelector(
        '[data-course-field]'
    );

    const courseSelect = document.querySelector(
        '#registration-course'
    );

    const orangeCrossConsent = document.querySelector(
        '[data-orange-cross-consent]'
    );

    const orangeCrossCheckbox =
        orangeCrossConsent?.querySelector('input');

    if (!typeInputs.length || !courseField) {
        return;
    }

    const updateForm = () => {
        const selected = document.querySelector(
            'input[name="registration_type"]:checked'
        );

        const needsCourse =
            selected &&
            (
                selected.value === 'opleiding' ||
                selected.value === 'hercertificering'
            );

        courseField.hidden = !needsCourse;

        if (courseSelect) {
            courseSelect.required = Boolean(needsCourse);
        }

        if (orangeCrossConsent) {
            orangeCrossConsent.hidden = !needsCourse;
        }

        if (orangeCrossCheckbox) {
            orangeCrossCheckbox.required =
                Boolean(needsCourse);

            if (!needsCourse) {
                orangeCrossCheckbox.checked = false;
            }
        }
    };


    typeInputs.forEach((input) => {
        input.addEventListener(
            'change',
            updateForm
        );
    });


    updateForm();
});