$(document).ready(function () {
    
    $("#SuporteTextArea").summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]
        ],
        lang: 'pt-BR',
        height: 150,
        focus: true,
        placeholder: "Digite aqui ..."
    });
    
    $("#ObservacoesTextArea").summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]
        ],
        lang: 'pt-BR',
        height: 150,
        focus: true,
        placeholder: "Digite aqui ..."
    });
    
    $("#DescricaoLoteTextArea").summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]
        ],
        lang: 'pt-BR',
        height: 150,
        focus: true,
        placeholder: "Digite aqui ..."
    });
});


