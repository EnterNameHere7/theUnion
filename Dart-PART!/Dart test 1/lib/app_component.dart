import 'package:angular/angular.dart';
import 'package:angular_router/angular_router.dart';
import 'src/person.dart';
import 'package:angular_forms/angular_forms.dart';
import 'package:http/http.dart';
import 'dart:convert';
import 'dart:async';

@Component(
  selector: 'my-app',
  templateUrl: 'src/templates/app_component.html',
  directives: const [formDirectives],
)
class AppComponent implements OnInit {

  Person person;
  Client _http;

  AppComponent(this._http);

  void ngOnInit() {
    person = new Person("1", "Rudolf", "???");
  }

  Future<Null> onSubmit() async {

//todo: call service
  print(person.id);
  print(person.Fname);
  print(person.Sname);


  Map<String, String> qaz = {'Content-Type': 'application/json'};
  Response res = await _http.post('http://192.168.55.151/larevel/api/insert', body: JSON.encode(person.toJson()), headers: qaz);

  print(res.body);
  
  }
}
