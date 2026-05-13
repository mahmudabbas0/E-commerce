/**
 * Custom DataTables Bundle for Modern Admin
 * This file loads all necessary dependencies and configurations
 */

// 1. Synchronously load dependencies
const dtScripts = [
    "https://cdn.datatables.net/2.3.8/js/dataTables.min.js",
    "https://cdn.datatables.net/2.3.8/js/dataTables.bootstrap5.min.js",
    "https://cdn.datatables.net/buttons/3.2.6/js/dataTables.buttons.min.js",
    "https://cdn.datatables.net/buttons/3.2.6/js/buttons.bootstrap5.min.js",
    "https://cdn.datatables.net/buttons/3.2.6/js/buttons.colVis.min.js",
    "https://cdn.datatables.net/buttons/3.2.6/js/buttons.print.min.js",
    "https://cdn.datatables.net/buttons/3.2.6/js/buttons.html5.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.12/pdfmake.min.js",
    "https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.12/vfs_fonts.js",
    "https://cdn.datatables.net/responsive/3.0.8/js/dataTables.responsive.min.js",
    "https://cdn.datatables.net/responsive/3.0.8/js/responsive.bootstrap5.min.js",
    "https://cdn.datatables.net/colreorder/2.1.2/js/dataTables.colReorder.min.js",
    "https://cdn.datatables.net/select/3.1.3/js/dataTables.select.min.js"
];

dtScripts.forEach(src => {
    document.write('<script src="' + src + '"></script>');
});

(function() {
    // 2. Load Font for PDF Export
    const fontUrl = 'https://cdn.jsdelivr.net/gh/jalalmostafa/prayertimes@master/app/fonts/Cairo/Cairo-Regular.ttf';
    fetch(fontUrl)
        .then(res => res.arrayBuffer())
        .then(buffer => {
            let binary = '';
            let bytes = new Uint8Array(buffer);
            for (let i = 0; i < bytes.byteLength; i++) binary += String.fromCharCode(bytes[i]);
            pdfMake.vfs["Cairo.ttf"] = btoa(binary);
            pdfMake.fonts = {
                Cairo: {
                    normal: 'Cairo.ttf',
                    bold: 'Cairo.ttf',
                    italics: 'Cairo.ttf',
                    bolditalics: 'Cairo.ttf'
                }
            };
        }).catch(err => console.error('Font error:', err));

    // 3. Shared Button Configuration
    window.getDtButtons = function() {
        return [
            {
                extend: 'colvis',
                className: 'btn btn-outline-info btn-sm',
                text: dt => '<i class="ft-eye"></i> ' + dt.i18n('buttons.colvis', 'Columns')
            },
            {
                extend: 'copy',
                className: 'btn btn-outline-info btn-sm',
                text: dt => '<i class="ft-copy"></i> ' + dt.i18n('buttons.copy', 'Copy')
            },
            {
                extend: 'print',
                className: 'btn btn-outline-info btn-sm',
                text: dt => '<i class="ft-printer"></i> ' + dt.i18n('buttons.print', 'Print')
            },
            {
                extend: 'excel',
                className: 'btn btn-outline-info btn-sm',
                text: dt => '<i class="ft-file-text"></i> ' + dt.i18n('buttons.excel', 'Excel')
            },
            {
                extend: 'pdf',
                className: 'btn btn-outline-info btn-sm',
                text: dt => '<i class="ft-file"></i> ' + dt.i18n('buttons.pdf', 'PDF'),
                exportOptions: { columns: [0, 1, 2, 3] },
                customize: function (doc) {
                    const isAr = document.documentElement.getAttribute('lang') === 'ar';
                    if (pdfMake.vfs["Cairo.ttf"]) {
                        doc.defaultStyle.font = 'Cairo';
                        ['tableHeader', 'tableBodyEven', 'tableBodyOdd', 'header', 'title'].forEach(s => {
                            if (doc.styles[s]) doc.styles[s].font = 'Cairo';
                        });
                    }
                    doc.defaultStyle.alignment = isAr ? 'right' : 'left';
                    if (doc.styles.tableHeader) doc.styles.tableHeader.alignment = isAr ? 'right' : 'left';
                    if (isAr && doc.content[1] && doc.content[1].table) {
                        doc.content[1].table.widths = Array(doc.content[1].table.body[0].length).fill('*');
                    }
                }
            }
        ];
    };
})();
