import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from '../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  baseUrl = environment.baseUrl;

  constructor(public http:HttpClient) { }

  getUsuarios(){
    return this.http.get<any>(this.baseUrl);
  }
}
