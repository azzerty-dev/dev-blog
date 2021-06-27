function selectAll(btn) {
    btn.checkValue = (btn.checkValue !== "on")? "on" : "off";
    let value = btn.checkValue === "on";

    let boxes = document.querySelectorAll("table input[type='checkbox']");
    for (let i = 0; i < boxes.length; i++) {
        boxes[i].checked = value;
    }
}

 tinymce.init({
    selector: 'textarea',
    plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
});
