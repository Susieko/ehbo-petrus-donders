document.addEventListener('DOMContentLoaded', () => {
    const rows = [
        ...document.querySelectorAll(
            '[data-lesson-date-row]'
        )
    ];

    const addButton = document.querySelector(
        '[data-add-lesson-date]'
    );

    if (!rows.length || !addButton) {
        return;
    }

    const updateAddButton = () => {
        const hiddenRows = rows.filter(
            (row) => row.hidden
        );

        addButton.hidden =
            hiddenRows.length === 0;
    };


    addButton.addEventListener('click', () => {
        const nextRow = rows.find(
            (row) => row.hidden
        );

        if (!nextRow) {
            return;
        }

        nextRow.hidden = false;

        const input =
            nextRow.querySelector(
                'input[type="date"]'
            );

        input?.focus();

        updateAddButton();
    });


    document.addEventListener(
        'click',
        (event) => {
            const button =
                event.target.closest(
                    '[data-remove-lesson-date]'
                );

            if (!button) {
                return;
            }

            const row =
                button.closest(
                    '[data-lesson-date-row]'
                );

            if (!row) {
                return;
            }

            const input =
                row.querySelector(
                    'input[type="date"]'
                );

            if (input) {
                input.value = '';
            }

            row.hidden = true;

            updateAddButton();
        }
    );


    updateAddButton();
});