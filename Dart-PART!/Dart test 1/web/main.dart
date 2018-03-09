import 'package:angular/angular.dart';
import 'package:dartTest/app_component.dart';
import 'package:http/http.dart';
import 'package:http/browser_client.dart';

void main(){
  bootstrap(AppComponent,[
  provide(Client, useFactory: () => new BrowserClient(), deps: [])
  ]);
}