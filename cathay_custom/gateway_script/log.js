//如果指定關閉，則不做任何紀錄
if (apim.getvariable("request.parameters.debug") != 'false') {
	//因為ZSweb回傳html/text所以使用buffer來取得
	apim.readInputAsBuffer(function (error, buf) {
		if (error) {
			// handle error
		} else {
			//將buffer轉為JSON Object
			var pre_output = JSON.parse(buf.toString());

			//組合log內容_
			var log_record = {};
			log_record['response_body'] = pre_output;
			log_record['request.headers.x-client-ip'] = apim.getvariable("request.headers.x-client-ip");
			log_record['system.datetime'] = apim.getvariable("system.datetime");
			log_record['api.endpoint.address'] = apim.getvariable("api.endpoint.address");
			log_record['api.properties.service_host'] = apim.getvariable("api.properties.service_host");
			log_record['client.app.name'] = apim.getvariable("client.app.name");
			log_record['client.app.id'] = apim.getvariable("client.app.id");
			log_record['client.org.name'] = apim.getvariable("client.org.name");
			log_record['request_body'] = apim.getvariable("request.body");

			//包裝成為以LogArg組成的格式
			var content = JSON.stringify(log_record);
			var LogArg = {};
			LogArg['LogArg'] = content;

			//傳輸前一定要stringify
			var logging = JSON.stringify(LogArg);

			//連線設定
			var urlopen = require("urlopen");
			//var target = 'http://10.87.50.145/ZSWeb/api/cxl-know-your-customer-api/v1/log';
			
			var target = 'http://clidemo.mybluemix.net/post_post';
			var options = {
				target: target,
				method: 'post',
				contentType: 'application/json',
				data: logging
			};

			urlopen.open(options, function (err, response) {
				/*
				// If there's something wrong when sending logs, do nothing or the whole API call would be blocked
				response.readAsJSON(function (error, responseData) {
					if (error) {
						throw error;
					} else {
						session.output.write(logging);
						//session.output.write(responseData);
						apim.output('application/json');
					}
				});
				*/

			});

		}
	});
}
apim.setvariable("message.headers.content-type", "application/json");
//apim.setvariable("message.body", "haha12345");
