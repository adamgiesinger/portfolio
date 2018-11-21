function submitForm() {
    console.log("/portfolio/php/sendForm.php?name=" + $("#name").val() + "&email=" + $("#email").val() + "&message=" + $("#message").val());
    return;
    $.ajax({
        url: "../php/sendForm.php?name=" + $("#name").val() + "&email=" + $("#email").val() + "&message=" + $("#message").val(), success: function (results) {
        	if (results["Response"]) {
        		// erfolreich
        	} else {
        		// fehlgeschlagen
        	}
        }
    });
}