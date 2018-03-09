import 'dart:async';
import 'dart:convert';
import 'dart:html';

class getJson {



	Future<Null> ngOnInit() async {

		try {

			var request = await HttpRequest.request(
				"http://localhost/php/genJson.php", method: 'GET'
			);

			var response = request.response.toString();

			Map jsonResponse = JSON.decode(response);

			return jsonResponse;


		} catch (e){
			print(e);
			throw new Exception('Server error; cause: $e');
		}

	}
}