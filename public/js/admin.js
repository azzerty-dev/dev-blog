function selectAll(btn) {
    btn.checkValue = (btn.checkValue !== "on")? "on" : "off";
    let value = btn.checkValue === "on";

    let boxes = document.querySelectorAll("table input[type='checkbox']");
    for (let i = 0; i < boxes.length; i++) {
        boxes[i].checked = value;
    }
}
