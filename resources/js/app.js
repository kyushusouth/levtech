import './bootstrap';

let deleteButton = document.getElementById("deleteButton");
let deleteButtonForm = document.getElementById("deleteButtonForm");

deleteButton.addEventListener("click", function() {
    let res = window.confirm("削除してもよろしいですか？");
    if (res) {
        deleteButtonForm.submit();
    }
})
