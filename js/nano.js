var paymentKey = 'eyJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6InRlc3QiLCJpc3MiOiJuYW5veGljIn0.YgtI8mVJDTdUiLeCe9mpYhlorRWxjglaPQg9Dc1tZK4';
var url = 'http://localhost:8080/api/v1?key=';

function updatePaymentStatus(paymentId) {

	var state = null;

	$.ajax({
		cache: false,
		data: JSON.stringify({"action": "get_payment_status", "paymentId": paymentId}),
		contentType: 'application/json',
		dataType: 'json',
		type: 'POST',
		timout: 20000,
		async: false,
		url: url + paymentKey,
        	error: function(returnval) {
			console.log("An error occurred");				
		},
	        success: function (returnval) {
			if (returnval["success"] == true) {
				state = returnval["state"];
			}
		}
	})

	return state;

}

function waitForStateChange(paymentId, previousState) {

	var state = previousState;

	while (state == previousState) {
		new Promise(resolve => setTimeout(resolve, 10000)); // delay doesn't work
		state = updatePaymentStatus(paymentId);
	}

	return state;
}

function startPayment(amount, currency) {

	var paymentObject = null;

	$.ajax({
		cache: false,
		data: JSON.stringify({"action": "start_payment", "amount": amount, "currency": currency}),
		contentType: 'application/json',
		dataType: 'json',
		type: 'POST',
		timout: 20000,
		async: false,
		url: url + paymentKey,
        	error: function(returnval) {
			console.log("An error occurred");				
		},
	        success: function (returnval) {
			if (returnval["success"] == true) {
				paymentObject = returnval;
			}
		}
	})
	paymentObject["amount"] = paymentObject["amount"] / 1000000;
	return paymentObject;

}
