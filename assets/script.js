function confirmDelete(id) {
    var result = confirm("Are you sure you want to delete this record?");
    if (result) {
        window.location.href = "delete.php?id=" + id;
    }
}
