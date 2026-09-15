document.addEventListener('DOMContentLoaded', () => {
    const selectButton = document.getElementById(
        'ehbo-select-publication-pdf'
    );

    const removeButton = document.getElementById(
        'ehbo-remove-publication-pdf'
    );

    const pdfInput = document.getElementById(
        'ehbo_publication_pdf_id'
    );

    const pdfName = document.getElementById(
        'ehbo-publication-pdf-name'
    );

    if (
        !selectButton ||
        !removeButton ||
        !pdfInput ||
        !pdfName ||
        !window.wp?.media
    ) {
        return;
    }

    let mediaFrame;

    selectButton.addEventListener('click', (event) => {
        event.preventDefault();

        if (mediaFrame) {
            mediaFrame.open();
            return;
        }

        mediaFrame = wp.media({
            title: 'Kies een PDF-bestand',
            button: {
                text: 'Deze PDF gebruiken',
            },
            library: {
                type: 'application/pdf',
            },
            multiple: false,
        });

        mediaFrame.on('select', () => {
            const attachment = mediaFrame
                .state()
                .get('selection')
                .first()
                .toJSON();

            pdfInput.value = attachment.id;

            pdfName.textContent = 'Geselecteerd: ';

            const fileName = document.createElement('strong');
            fileName.textContent = attachment.filename;

            pdfName.appendChild(fileName);

            removeButton.style.display = '';
        });

        mediaFrame.open();
    });

    removeButton.addEventListener('click', (event) => {
        event.preventDefault();

        pdfInput.value = '';
        pdfName.textContent = 'Nog geen PDF geselecteerd.';
        removeButton.style.display = 'none';
    });
});